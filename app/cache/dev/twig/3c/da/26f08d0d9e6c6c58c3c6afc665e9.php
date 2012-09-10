<?php

/* fbcAppBundle:Default:betta.html.twig */
class __TwigTemplate_3cda26f08d0d9e6c6c58c3c6afc665e9 extends Twig_Template
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
        echo "<title>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "betta"), "codBetta"), "html", null, true);
        echo "</title>";
    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "betta"), "codBetta"), "html", null, true);
        echo " -- ";
        echo twig_escape_filter($this->env, $this->getContext($context, "alerta"), "html", null, true);
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("betta", array("id" => $this->getAttribute($this->getContext($context, "betta"), "idBetta"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        // line 10
        echo "        <ul class=\"margen1pc\"  data-role=\"listview\" data-inset=\"true\">
            <li>
                Pertenece a la puesta: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "betta"), "idPuesta"), "html", null, true);
        echo "
            </li>
            <li>
                ";
        // line 15
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "codBetta"), "Código");
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "codBetta"));
        echo "
                    <div class=\"elementoForm\">";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "codBetta"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "betta"), "codBetta"))));
        echo "</div>
            </li>
            <li>
                ";
        // line 20
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "sexo"), "Sexo");
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "sexo"));
        echo "
                    <div class=\"elementoForm\">";
        // line 22
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "sexo"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "betta"), "sexo"))));
        echo "</div>
            </li>
            <li>
                ";
        // line 25
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "fenotipoAletas"), "Fenotipo Aletas");
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "fenotipoAletas"));
        echo "
                    <div class=\"elementoForm\">";
        // line 27
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "fenotipoAletas"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "betta"), "fenotipoAletas"))));
        echo "</div>
            </li>
            <li>
                ";
        // line 30
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "genotipoAletas"), "Genotipo Aletas");
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "genotipoAletas"));
        echo "
                    <div class=\"elementoForm\">";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "genotipoAletas"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "betta"), "genotipoAletas"))));
        echo "</div>
            </li>
            <li>
                ";
        // line 35
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "fenotipoColor"), "Fenotipo Color");
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "fenotipoColor"));
        echo "
                    <div class=\"elementoForm\">";
        // line 37
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "fenotipoColor"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "betta"), "fenotipoColor"))));
        echo "</div>
            </li>
            <li>
                ";
        // line 40
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "genotipoColor"), "Genotipo Color");
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "genotipoColor"));
        echo "
                    <div class=\"elementoForm\">";
        // line 42
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "genotipoColor"), array("attr" => array("value" => $this->getAttribute($this->getContext($context, "betta"), "genotipoColor"))));
        echo "</div>
            </li>
            <li>
                <fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "fechaRegistro"), "Registrado");
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "fechaRegistro"));
        echo "
                        <div class=\"elementoForm\">";
        // line 48
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "fechaRegistro"));
        echo "</div>
                </fieldset>
                
            </li>
            <li><input type=\"submit\" value=\"Modificar\" data-role=\"button\" data-theme=\"b\"/></li>
        </ul>
            ";
        // line 54
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        // line 55
        echo "        
        
        

    </form>
";
    }

    public function getTemplateName()
    {
        return "fbcAppBundle:Default:betta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 55,  168 => 54,  159 => 48,  155 => 47,  151 => 46,  144 => 42,  140 => 41,  136 => 40,  130 => 37,  126 => 36,  122 => 35,  116 => 32,  112 => 31,  108 => 30,  102 => 27,  98 => 26,  94 => 25,  88 => 22,  84 => 21,  80 => 20,  74 => 17,  70 => 16,  66 => 15,  60 => 12,  56 => 10,  54 => 9,  47 => 8,  44 => 7,  36 => 5,  28 => 3,);
    }
}
