<?php

/* fbcAppBundle:Default:nuevaPuesta.html.twig */
class __TwigTemplate_6bd80f4bb88ddda1a999720bce64f25e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("fbcAppBundle:Default:index.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
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
        echo "Registrar nueva puesta";
    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        echo "Registrar nueva puesta";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nuevaPuesta"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        // line 10
        echo "        <ul class=\"margen1pc\"  data-role=\"listview\" data-inset=\"true\">
            <li>
                ";
        // line 12
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "codPuesta"), "Código");
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "codPuesta"));
        echo "
                    <div class=\"elementoForm\">";
        // line 14
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "codPuesta"));
        echo "</div>
            </li>
            <li>
                ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "idPadre"), "Id padre");
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "idPadre"));
        echo "
                    <div class=\"elementoForm\">";
        // line 19
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "idPadre"));
        echo "</div>
            </li>
            <li>
                ";
        // line 22
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "idMadre"), "id madre");
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "idMadre"));
        echo "
                    <div class=\"elementoForm\">";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "idMadre"));
        echo "</div>
            </li>
            <li>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "huevos"), "Huevos");
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "huevos"));
        echo "
                    <div class=\"elementoForm\">";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "huevos"));
        echo "</div>
            </li>
            <li>
                ";
        // line 32
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "eclosiones"), "Eclosiones");
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "eclosiones"));
        echo "
                    <div class=\"elementoForm\">";
        // line 34
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "eclosiones"));
        echo "</div>
            </li>
            <li>
                ";
        // line 37
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "tasaSupervivencia"), "Tasa supervivencia");
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "tasaSupervivencia"));
        echo "
                    <div class=\"elementoForm\">";
        // line 39
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "tasaSupervivencia"));
        echo "</div>
            </li>
            <li>
                <fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
                ";
        // line 43
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "fechaInicio"), "Fecha inicio");
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "fechaInicio"));
        echo "
                        <div class=\"elementoForm\">";
        // line 45
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "fechaInicio"), array("attr" => array("value" => twig_date_format_filter($this->env, "now", "m/d/Y"))));
        echo "</div>
                ";
        // line 47
        echo "                </fieldset>
            </li>
            <li>
                <fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
                ";
        // line 51
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "fechaCruce"), "Fecha cruce");
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "fechaCruce"));
        echo "
                        <div class=\"elementoForm\">";
        // line 53
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "fechaCruce"));
        echo "</div>
                ";
        // line 55
        echo "                </fieldset>
            </li>
            <li>
                <fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "fechaEclosion"), "Fecha eclosión");
        echo "
                ";
        // line 60
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "fechaEclosion"));
        echo "
                        <div class=\"elementoForm\">";
        // line 61
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "fechaEclosion"));
        echo "</div>
                ";
        // line 63
        echo "                </fieldset>
            </li>
            <li>
                ";
        // line 66
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "sexRatio"), "Sex ratio");
        echo "
                ";
        // line 67
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "sexRatio"));
        echo "
                    <div class=\"elementoForm\">";
        // line 68
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "sexRatio"));
        echo "</div>
            </li>
            <li><input type=\"submit\" value=\"Registrar\" data-role=\"button\" data-theme=\"b\"/></li>
           
        </ul>
            ";
        // line 73
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        // line 74
        echo "
        

    </form>
";
    }

    public function getTemplateName()
    {
        return "fbcAppBundle:Default:nuevaPuesta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 74,  210 => 73,  202 => 68,  198 => 67,  194 => 66,  189 => 63,  185 => 61,  181 => 60,  177 => 59,  171 => 55,  167 => 53,  163 => 52,  159 => 51,  153 => 47,  149 => 45,  145 => 44,  141 => 43,  134 => 39,  130 => 38,  126 => 37,  120 => 34,  116 => 33,  112 => 32,  106 => 29,  102 => 28,  98 => 27,  92 => 24,  88 => 23,  84 => 22,  78 => 19,  74 => 18,  70 => 17,  64 => 14,  60 => 13,  56 => 12,  52 => 10,  50 => 9,  43 => 8,  40 => 7,  34 => 5,  28 => 3,);
    }
}
