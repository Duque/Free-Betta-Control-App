<?php

/* fbcAppBundle:Default:resultado.html.twig */
class __TwigTemplate_8db72df9964781d96513ebebf96d59a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("fbcAppBundle:Default:index.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'opciones' => array($this, 'block_opciones'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "fbcAppBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Free Betta Control";
    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        echo "Resultados de la búsqueda: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "keywords"), "html", null, true);
    }

    // line 7
    public function block_opciones($context, array $blocks = array())
    {
        // line 8
        echo "<ul data-role=\"controlgroup\" data-type=\"horizontal\">
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nuevoBetta"), "html", null, true);
        echo "\" title=\"Registrar nuevo betta\" data-role=\"button\" data-icon=\"add\" data-theme=\"b\">Nuevo Betta</a></li>
    <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nuevaPuesta"), "html", null, true);
        echo "\" title=\"Registrar nueva puesta\" data-role=\"button\" data-icon=\"add\" data-theme=\"b\">Nueva Puesta</a></li>
    <li><a href=\"#\" title=\"\" data-role=\"button\" data-icon=\"gear\" data-theme=\"b\">Registro masivo</a></li>
</ul>
";
    }

    // line 15
    public function block_contenido($context, array $blocks = array())
    {
        // line 16
        echo "
<ul class=\"margen1pc\" data-role=\"listview\" data-inset=\"true\" data-dividertheme=\"f\" data-theme=\"c\">
";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "resultadoBettas"));
        foreach ($context['_seq'] as $context["_key"] => $context["betta"]) {
            // line 19
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("betta", array("id" => $this->getAttribute($this->getContext($context, "betta"), "idBetta"))), "html", null, true);
            echo "\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "betta"), "codBetta"), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['betta'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "</ul>
";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "resultadoPuestas"));
        foreach ($context['_seq'] as $context["_key"] => $context["puesta"]) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['puesta'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "

";
    }

    public function getTemplateName()
    {
        return "fbcAppBundle:Default:resultado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  85 => 22,  82 => 21,  71 => 19,  67 => 18,  63 => 16,  60 => 15,  52 => 10,  48 => 9,  45 => 8,  42 => 7,  35 => 5,  29 => 3,);
    }
}
