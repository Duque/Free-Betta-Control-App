<?php

/* fbcAppBundle:Default:escritorio.html.twig */
class __TwigTemplate_0c441b23b64fb279c5add7c5755f5936 extends Twig_Template
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
        echo "Escritorio - Free Betta Control";
    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        echo "Escritorio";
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
        echo "<ul class=\"margen1pc\" data-role=\"listview\" data-inset=\"true\" data-dividertheme=\"f\" data-theme=\"c\">
    <li>Número total de bettas: <span class=\"enlace\">";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "total"));
        foreach ($context['_seq'] as $context["_key"] => $context["cantidad"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "cantidad"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cantidad'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ", ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "machos"));
        foreach ($context['_seq'] as $context["_key"] => $context["macho"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "macho"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['macho'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo " machos y ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hembras"));
        foreach ($context['_seq'] as $context["_key"] => $context["hembra"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "hembra"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hembra'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo " hembras registrados</a></li>
    <li>Número total de puestas: <span class=\"enlace\">";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "puestas"));
        foreach ($context['_seq'] as $context["_key"] => $context["cantidad"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "cantidad"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cantidad'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "</span></li>
    <li>";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ultimoBetta"));
        foreach ($context['_seq'] as $context["_key"] => $context["betta"]) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("betta", array("id" => $this->getAttribute($this->getContext($context, "betta"), "idBetta"))), "html", null, true);
            echo "\" title=\"Ir a ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "betta"), "codBetta"), "html", null, true);
            echo "\">Último betta añadido: <span class=\"enlace\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "betta"), "codBetta"), "html", null, true);
            echo "</span></a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['betta'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "</li>
    <li>";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ultimaPuesta"));
        foreach ($context['_seq'] as $context["_key"] => $context["puesta"]) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("puesta", array("id" => $this->getAttribute($this->getContext($context, "puesta"), "idPuesta"))), "html", null, true);
            echo "\" title=\"Ir a ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "puesta"), "codPuesta"), "html", null, true);
            echo "\">Última puesta registrada: <span class=\"enlace\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "puesta"), "codPuesta"), "html", null, true);
            echo "</span></a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['puesta'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "fbcAppBundle:Default:escritorio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 20,  105 => 19,  94 => 18,  65 => 17,  62 => 16,  59 => 15,  51 => 10,  47 => 9,  44 => 8,  41 => 7,  35 => 5,  29 => 3,);
    }
}
