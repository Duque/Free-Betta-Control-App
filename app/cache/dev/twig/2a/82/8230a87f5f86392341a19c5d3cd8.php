<?php

/* fbcAppBundle:Default:bettas.html.twig */
class __TwigTemplate_2a828230a87f5f86392341a19c5d3cd8 extends Twig_Template
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
        echo "Resumen general de ejemplares";
    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        echo "Resumen general de ejemplares";
    }

    // line 7
    public function block_opciones($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"margen1pc\" data-role=\"controlgroup\" data-type=\"horizontal\">
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nuevoBetta"), "html", null, true);
        echo "\" title=\"Registrar nuevo betta\" data-role=\"button\" data-icon=\"add\" data-theme=\"b\">Nuevo Betta</a></li>
    <li><a href=\"#\" title=\"\" data-role=\"button\" data-icon=\"gear\" data-theme=\"b\">Registro masivo</a></li>
</ul>
";
    }

    // line 13
    public function block_contenido($context, array $blocks = array())
    {
        // line 14
        echo "<ul class=\"margen1pc\" data-role=\"listview\" data-inset=\"true\" data-dividertheme=\"f\" data-theme=\"c\">
       ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "bettas"));
        foreach ($context['_seq'] as $context["_key"] => $context["betta"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("betta", array("id" => $this->getAttribute($this->getContext($context, "betta"), "idBetta"))), "html", null, true);
            echo "\" 
               title=\"Ampliar información sobre ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "betta"), "codBetta"), "html", null, true);
            echo "\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "betta"), "codBetta"), "html", null, true);
            echo "</a>
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("confirmarBorradoBetta", array("id" => $this->getAttribute($this->getContext($context, "betta"), "idBetta"), "codBetta" => $this->getAttribute($this->getContext($context, "betta"), "codBetta"))), "html", null, true);
            echo "\" 
               title=\"Borrar ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "betta"), "codBetta"), "html", null, true);
            echo "\" data-rel=\"dialog\" data-transition=\"fade\" data-icon=\"delete\" data-theme=\"a\">Borrar ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "betta"), "codBetta"), "html", null, true);
            echo "</a>
        </li>

        ";
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['betta'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "        </ul>
";
    }

    public function getTemplateName()
    {
        return "fbcAppBundle:Default:bettas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  90 => 24,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  65 => 16,  61 => 15,  58 => 14,  55 => 13,  47 => 9,  44 => 8,  41 => 7,  35 => 5,  29 => 3,);
    }
}
