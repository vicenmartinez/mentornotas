<?php

 namespace Jazzyweb\AulasMentor\NotasFrontendBundle\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
 use Symfony\Component\HttpFoundation\Response;

 class NotasController extends Controller
 { 

     public function indexAction()
     {
         $request = $this->getRequest(); // equivalente a $this->get('request');
         
         /*
         echo '<pre>';
         //print_r($request);
         //print_r($this->get('session'));
         //print_r($_SESSION);
         echo '</pre>';
         */
         
         $session = $this->get('session');

         $ruta = $request->get('_route');

         switch ($ruta)
         {
             case 'jamn_homepage':

                 break;

             case 'jamn_conetiqueta':
                 $session->set('busqueda.tipo', 'por_etiqueta');
                 $session->set('busqueda.valor', $request->get('etiqueta'));
                 $session->set('nota.seleccionada.id', '');

                 break;

             case 'jamn_buscar':
                 $session->set('busqueda.tipo', 'por_termino');
                 $session->set('busqueda.valor', $request->get('termino'));
                 $session->set('nota.seleccionada.id', '');

                 break;
             case 'jamn_nota':
                 $session->set('nota.seleccionada.id', $request->get('id'));
                 break;
         }

         list($etiquetas, $notas, $nota_seleccionada) = $this->dameEtiquetasYNotas();

         return $this->render('JAMNotasFrontendBundle:Notas:index.html.twig', array(
                     'etiquetas' => $etiquetas,
                     'notas' => $notas,
                     'nota_seleccionada' => $nota_seleccionada,
                 ));
     }

     public function nuevaAction()
     {
         $request = $this->getRequest();
         $session = $this->get('session');

         if ($request->getMethod() == 'POST') {

             // si los datos que vienen en la request son buenos guarda la nota

             $session
               ->setFlash('mensaje', 'Se debería guardar la nota:'
                          . $request->get('nombre') .
                          '. Como aun no disponemos de un servicio para
                          persistir los datos, mostramos la nota 1');

             return
               $this
                ->redirect($this->generateUrl('jamn_nota', array('id' => 1)));
         }

         list($etiquetas, $notas, $nota_seleccionada) = $this->dameEtiquetasYNotas();

         return $this->render('JAMNotasFrontendBundle:Notas:nueva.html.twig',
            array(
                     'etiquetas' => $etiquetas,
                     'notas' => $notas,
                     'nota_seleccionada' => $nota_seleccionada,
                 )
             );
     }

     public function editarAction()
     {
         $request = $this->getRequest();
         $session = $this->get('session');

         // Se recupera la nota que viene en la request para ser editada

         $nota = array(
             'id' => $request->get('id'),
             'titulo' => 'nota',
         );


         if ($request->getMethod() == 'POST') {

             // si los datos que vienen en la request son buenos guarda la nota

             $session->setFlash('mensaje', 'Se debería editar la nota:'
                     . $request->get('titulo') .
                     '. Como aún no disponemos de un servicio para persistir los
                         datos, la nota permanece igual');

             return $this->redirect(
                 $this->generateUrl('jamn_nota',
                 array('id' => $request->get('id'))
                 )
               );
         }

         list($etiquetas, $notas, $nota_seleccionada) = $this->dameEtiquetasYNotas();

         return $this
           ->render('JAMNotasFrontendBundle:Notas:editar.html.twig',
               array(
                     'etiquetas' => $etiquetas,
                     'notas' => $notas,
                     'nota_a_editar' => $nota,
                 ));
     }

     public function borrarAction()
     {
         $request = $this->getRequest();
         $session = $this->get('session');

         // borrado de la nota $request->get('id');

         $session->setFlash('mensaje',
             'Se debería borrar la nota ' . $request->get('id'));

         $session->set('nota.seleccionada.id', '');

         return $this->forward('JAMNotasFrontendBundle:Notas:index');
     }

     public function miEspacioAction()
     {
         $params = 'Los datos de la página de inicio del espacio premium';
         return
           $this
             ->render(
               'JAMNotasFrontendBundle:Notas:index',
                array('params' => $params)
             );
     }

     public function rssAction()
     {

     }

     protected function dameEtiquetasYNotas()
 {
     $session = $this->get('session');
     $em = $this->getDoctrine()->getEntityManager();

     $usuario = $em->getRepository('JAMNotasFrontendBundle:Usuario')
       ->findOneByUsername('alberto');


     $busqueda_tipo = $session->get('busqueda.tipo');

     $busqueda_valor = $session->get('busqueda.valor');

     // Etiquetas. Se pillan todas
     $etiquetas = $em->getRepository('JAMNotasFrontendBundle:Etiqueta')->
                     findByUsuarioOrderedByTexto($usuario);

     // Notas. Se pillan según el filtro almacenado en la sesión
     if ($busqueda_tipo == 'por_etiqueta' && $busqueda_valor != 'todas') {
         $notas = $em->getRepository('JAMNotasFrontendBundle:Nota')->
                 findByUsuarioAndEtiqueta($usuario, $busqueda_valor);
     } elseif ($busqueda_tipo == 'por_termino') {
         $notas = $em->getRepository('JAMNotasFrontendBundle:Nota')->
                 findByUsuarioAndTermino($usuario, $busqueda_valor);
     } else {
         $notas = $em->getRepository('JAMNotasFrontendBundle:Nota')->
                 findByUsuarioOrderedByFecha($usuario);
         //$notas = $em->getRepository('JAMNotasFrontendBundle:Nota')->
         //        findByUsuarioAndTermino($usuario, $busqueda_valor);
     }


     $nota_selecionada_id = $session->get('nota.seleccionada.id','1');

     $nota_seleccionada = $em
         ->getRepository('JAMNotasFrontendBundle:Nota')
         ->findOneById($nota_selecionada_id);


     return array($etiquetas, $notas, $nota_seleccionada);
     }
     
     protected function dameNotasAction()
     {
         
         $request = $this->getRequest();
         
         //$format="json";
         $format=$request->get('format');
         //echo $format; die(); exit();
         $notas = array(
             array(
                 'id' => 1,
                 'titulo' => 'el titulo 1',
                 'texto' => 'el texto 1',
             ),
             array(
                 'id' => 2,
                 'titulo' => 'nota 2',
                 'texto' => 'el texto 2',
             ),
         );         
        
        if($notas=='xml')
        {
            $response = new Response(array('notas' => $notas));
            $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');
        }
        else
        {
            $response = new Response(json_encode(array('notas' => $notas)));
            $response->headers->set('Content-Type', 'application/json'); 
        }
         
   
         
         return $this->render('JAMNotasFrontendBundle:Notas:dameNotas.'.$format.'.twig');
         
         /*return $this->render('JAMNotasFrontendBundle:Notas:dameNotas.'.$format.'.twig', array('notas' => $notas));*/        
         
         
     }     
     
 }
