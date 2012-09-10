<?php

/* fbcAppBundle:Default:puestas.html.twig */
class __TwigTemplate_f260621d451e643b3fbf1b2a1ad40e69 extends Twig_Template
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
        echo "Resumen general de puestas";
    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        echo "Resumen general de puestas";
    }

    // line 9
    public function block_opciones($context, array $blocks = array())
    {
        // line 10
        echo "    <ul class=\"margen1pc\" data-role=\"controlgroup\" data-type=\"horizontal\" >
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nuevaPuesta"), "html", null, true);
        echo "\" title=\"Registrar nueva puesta\" data-role=\"button\" data-icon=\"add\" data-theme=\"b\">Nueva Puesta</a></li>
        <li><a href=\"#\" title=\"\" data-role=\"button\" data-icon=\"gear\" data-theme=\"b\">Registro masivo</a></li>
    </ul>
";
    }

    // line 16
    public function block_contenido($context, array $blocks = array())
    {
        // line 17
        echo "    <ul class=\"margen1pc\" data-role=\"listview\" data-inset=\"true\" data-dividertheme=\"c\" data-theme=\"c\">        
";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "puestas"));
        foreach ($context['_seq'] as $context["_key"] => $context["puesta"]) {
            // line 19
            echo "            <li>
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("puesta", array("id" => $this->getAttribute($this->getContext($context, "puesta"), "idPuesta"))), "html", null, true);
            echo "\"
                   title=\"Ampliar información sobre ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "puesta"), "codPuesta"), "html", null, true);
            echo "\">
                   ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "puesta"), "codPuesta"), "html", null, true);
            echo "</a>
            ";
            // line 24
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("confirmarBorradoPuesta", array("id" => $this->getAttribute($this->getContext($context, "puesta"), "idPuesta"), "codPuesta" => $this->getAttribute($this->getContext($context, "puesta"), "codPuesta"))), "html", null, true);
            echo "\" 
               title=\"Borrar ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "puesta"), "codPuesta"), "html", null, true);
            echo "\" data-rel=\"dialog\" data-transition=\"fade\" data-icon=\"delete\" data-theme=\"a\">Borrar ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "puesta"), "codPuesta"), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['puesta'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "            </li>
        </ul>

";
    }

    public function getTemplateName()
    {
        return "fbcAppBundle:Default:puestas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  85 => 25,  80 => 24,  76 => 22,  72 => 21,  68 => 20,  65 => 19,  61 => 18,  58 => 17,  55 => 16,  47 => 11,  44 => 10,  41 => 9,  35 => 5,  29 => 3,);
    }
}
