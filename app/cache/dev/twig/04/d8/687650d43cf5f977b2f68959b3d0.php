<?php

/* fbcAppBundle:Bloques:buscar.html.twig */
class __TwigTemplate_04d8687650d43cf5f977b2f68959b3d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resultados"), "html", null, true);
        echo "\" method=\"get\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
";
        // line 2
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        // line 3
        echo "<ul>
    <li>
        ";
        // line 5
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "keywords"), "");
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "keywords"));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "keywords"), array("attr" => array("placeholder" => "Terminos de búsqueda")));
        echo "
    </li>
    <li><input type=\"submit\" value=\"Buscar\" data-inline=\"true\" data-icon=\"search\" data-theme=\"b\" class=\"submit\"></li>
</ul>
";
        // line 11
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        // line 12
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "fbcAppBundle:Bloques:buscar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  45 => 11,  38 => 7,  34 => 6,  30 => 5,  24 => 2,  17 => 1,  172 => 46,  166 => 44,  161 => 37,  155 => 33,  148 => 29,  144 => 28,  140 => 27,  137 => 26,  134 => 25,  128 => 16,  125 => 15,  119 => 13,  115 => 12,  111 => 11,  105 => 9,  102 => 8,  97 => 6,  94 => 5,  89 => 4,  82 => 47,  80 => 46,  75 => 44,  71 => 42,  68 => 41,  64 => 38,  62 => 37,  55 => 33,  52 => 32,  50 => 25,  42 => 19,  39 => 15,  36 => 8,  33 => 5,  31 => 4,  26 => 3,);
    }
}
