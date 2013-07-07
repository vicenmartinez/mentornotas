<?php

/* JAMNotasFrontendBundle:Notas:layout-etiquetas-notas.html.twig */
class __TwigTemplate_4b632bc51e028062c6eed867d79b30c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "
 <style>
 .marco {
     border-style:  solid;
     padding: 5px;
     margin: 5px;
     float: left;
     width: 500px;
     height: 250px;
     }

 .detalle_nota{
     background-color: #DFDFDF;
     }

 .mensaje{
     width: 1025px;
     height: 20px;
     background-color: #f66;

 }

 </style>

 ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "
     <h1>Implementación de la lógica de control de la aplicación</h1>

     ";
        // line 34
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlash", array(0 => "mensaje"), "method")) {
            // line 35
            echo "     <div id=\"etiquetas\" class=\"marco mensaje\">
         <b>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlash", array(0 => "mensaje"), "method"), "html", null, true);
            echo "</b>
     </div>
     ";
        }
        // line 39
        echo "
     <div id=\"etiquetas\" class=\"marco\">
         <h2>Listado de etiquetas</h2>
         <p>Siempre se muestran todas las etiquetas</b></p>
         <ul>
             ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "etiquetas"));
        foreach ($context['_seq'] as $context["_key"] => $context["etiqueta"]) {
            // line 45
            echo "             <li>
                 <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jamn_conetiqueta", array("etiqueta" => $this->getAttribute($this->getContext($context, "etiqueta"), "id"))), "html", null, true);
            echo "\">
                     ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etiqueta"), "texto"), "html", null, true);
            echo "
                 </a>
             </li>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiqueta'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 51
        echo "         </ul>
     </div>

     <div id=\"notas\" class=\"marco\">
         <h2>Listado de notas</h2>
         <p>
           Se mostraran las notas que coincidan con el siguiente criterio de
           búsqueda:
         </p>
         tipo de búsqueda: <b>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "busqueda.tipo"), "method"), "html", null, true);
        echo "</b>,
         valor de la búsqueda: <b>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "busqueda.valor"), "method"), "html", null, true);
        echo "</b>

         <ul>
             ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notas"));
        foreach ($context['_seq'] as $context["_key"] => $context["nota"]) {
            // line 65
            echo "             <li>
                 <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jamn_nota", array("id" => $this->getAttribute($this->getContext($context, "nota"), "id"))), "html", null, true);
            echo "\">
                   ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "nota"), "titulo"), "html", null, true);
            echo "
                 </a>
             </li>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nota'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 71
        echo "         </ul>

     </div>

     <div id=\"buscar\" class=\"marco\">
         <h2>Formulario de búsqueda de notas</h2>
         <form action=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jamn_buscar"), "html", null, true);
        echo "\" method=\"POST\">

             <input type=\"text\" id=\"termino\" name=\"termino\" />
             <input type=\"submit\" value=\"buscar\" />

         </form>
     </div>

 ";
    }

    public function getTemplateName()
    {
        return "JAMNotasFrontendBundle:Notas:layout-etiquetas-notas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 77,  147 => 71,  137 => 67,  133 => 66,  130 => 65,  126 => 64,  120 => 61,  116 => 60,  105 => 51,  95 => 47,  91 => 46,  88 => 45,  84 => 44,  71 => 36,  68 => 35,  66 => 34,  61 => 31,  58 => 30,  30 => 4,  27 => 3,  77 => 39,  69 => 25,  62 => 21,  52 => 14,  46 => 11,  41 => 10,  39 => 9,  32 => 5,  29 => 4,  26 => 3,);
    }
}
