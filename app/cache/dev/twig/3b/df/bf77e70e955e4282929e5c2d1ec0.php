<?php

/* fbcAppBundle:Default:borrarPuesta.html.twig */
class __TwigTemplate_3bdfbf77e70e955e4282929e5c2d1ec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("fbcAppBundle:Default:confirmarBorrado.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "fbcAppBundle:Default:confirmarBorrado.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Confirmar borrado ";
        echo twig_escape_filter($this->env, $this->getContext($context, "codPuesta"), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        echo "Atención!";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "
<h2>Borrar: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "codPuesta"), "html", null, true);
        echo "?</h2>

<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrarPuesta", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" title=\"borrar\" data-role=\"button\" data-inline=\"true\" data-theme=\"b\">Borrar</a>
<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("puestas"), "html", null, true);
        echo "\" title=\"Volver a la pagina de bettas\" data-role=\"button\" data-inline=\"true\" data-theme=\"b\">Cancelar</a>

";
    }

    public function getTemplateName()
    {
        return "fbcAppBundle:Default:borrarPuesta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  53 => 11,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  28 => 3,);
    }
}
