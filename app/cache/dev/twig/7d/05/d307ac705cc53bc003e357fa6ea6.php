<?php

/* fbcAppBundle:Default:puesta.html.twig */
class __TwigTemplate_7d05d307ac705cc53bc003e357fa6ea6 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "puesta"), "codPuesta"), "html", null, true);
    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "puesta"), "codPuesta"), "html", null, true);
        echo " -- ";
        echo twig_escape_filter($this->env, $this->getContext($context, "alerta"), "html", null, true);
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("puesta", array("id" => $this->getAttribute($this->getContext($context, "puesta"), "idPuesta"))), "html", null, true);
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
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "codPuesta"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "puesta"), "codPuesta"))));
        echo "</div>
            </li>
            <li>
                ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "idPadre"), "Padre");
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "idPadre"));
        echo "
                <div class=\"elementoForm\">";
        // line 19
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "idPadre"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "puesta"), "idPadre"))));
        echo "</div>
            </li>
            <li>
                ";
        // line 22
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "idMadre"), "Madre");
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "idMadre"));
        echo "
                <div class=\"elementoForm\">";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "idMadre"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "puesta"), "idMadre"))));
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
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "huevos"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "puesta"), "huevos"))));
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
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "eclosiones"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "puesta"), "eclosiones"))));
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
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "tasaSupervivencia"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "puesta"), "tasaSupervivencia"))));
        echo "</div>
            </li>
            
            <li>
                ";
        // line 43
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "sexRatio"), "Sex Ratio");
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "sexRatio"));
        echo "
                    <div class=\"elementoForm\">";
        // line 45
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "sexRatio"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "puesta"), "sexRatio"))));
        echo "</div>
            </li>
            <li>
                <fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
                ";
        // line 49
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "fechaInicio"), "Fecha de inicio");
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "fechaInicio"));
        echo "
                        <div class=\"elementoForm\">";
        // line 51
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "fechaInicio"));
        echo "</div>
                </fieldset>
            </li>
            <li>
                <fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
                ";
        // line 56
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "fechaCruce"), "Fecha del cruce");
        echo "
                ";
        // line 57
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "fechaCruce"));
        echo "
                        <div class=\"elementoForm\">";
        // line 58
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "fechaCruce"));
        echo "</div>
                </fieldset>
            </li>
            <li>
                <fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
                ";
        // line 63
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "fechaEclosion"), "Fecha de la eclosión");
        echo "
                ";
        // line 64
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "fechaEclosion"));
        echo "
                        <div class=\"elementoForm\">";
        // line 65
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "fechaEclosion"));
        echo "</div>
                </fieldset>
            </li>
            <li><input type=\"submit\" value=\"Modificar\" data-role=\"button\" data-theme=\"b\"/></li>
        </ul>
            ";
        // line 70
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        // line 71
        echo "
        

    </form>
";
    }

    public function getTemplateName()
    {
        return "fbcAppBundle:Default:puesta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 71,  206 => 70,  198 => 65,  194 => 64,  190 => 63,  182 => 58,  178 => 57,  174 => 56,  166 => 51,  162 => 50,  158 => 49,  151 => 45,  147 => 44,  143 => 43,  136 => 39,  132 => 38,  128 => 37,  122 => 34,  118 => 33,  114 => 32,  108 => 29,  104 => 28,  100 => 27,  94 => 24,  90 => 23,  86 => 22,  80 => 19,  76 => 18,  72 => 17,  66 => 14,  62 => 13,  58 => 12,  54 => 10,  52 => 9,  45 => 8,  42 => 7,  34 => 5,  28 => 3,);
    }
}
