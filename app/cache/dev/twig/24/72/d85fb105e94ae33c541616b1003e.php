<?php

/* JAMNotasFrontendBundle:Notas:index.html.twig */
class __TwigTemplate_2472d85fb105e94ae33c541616b1003e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JAMNotasFrontendBundle:Notas:layout-etiquetas-notas.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JAMNotasFrontendBundle:Notas:layout-etiquetas-notas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "

 <div id=\"detalle_nota\" class=\"marco detalle_nota\">
     <h2>Detalle de nota</h2>
     ";
        // line 9
        if ($this->getContext($context, "nota_seleccionada")) {
            // line 10
            echo "     <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jamn_nueva"), "html", null, true);
            echo "\">Nueva nota</a>
     <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jamn_editar", array("id" => $this->getAttribute($this->getContext($context, "nota_seleccionada"), "id"))), "html", null, true);
            echo "\">
       Editar nota
     </a>
     <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jamn_borrar", array("id" => $this->getAttribute($this->getContext($context, "nota_seleccionada"), "id"))), "html", null, true);
            echo "\">
       Borrar nota
     </a>

     <table border=\"1\">
         <tr>
             <td>ID</td>
             <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "nota_seleccionada"), "id"), "html", null, true);
            echo "</td>
         </tr>
         <tr>
             <td>nombre</td>
             <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "nota_seleccionada"), "titulo"), "html", null, true);
            echo "</td>
         </tr>
     </table>
 </div>
    ";
        }
        // line 30
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "JAMNotasFrontendBundle:Notas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  69 => 25,  62 => 21,  52 => 14,  46 => 11,  41 => 10,  39 => 9,  32 => 5,  29 => 4,  26 => 3,);
    }
}
