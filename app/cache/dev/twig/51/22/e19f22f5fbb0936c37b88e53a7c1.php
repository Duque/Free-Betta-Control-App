<?php

/* fbcAppBundle:Default:confirmarBorrado.html.twig */
class __TwigTemplate_5122e19f22f5fbb0936c37b88e53a7c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "        </head>

        <body>
            <div data-role=\"page\" data-overlay-theme=\"c\">
                <header data-role=\"header\" data-theme=\"a\">
                    <h1>";
        // line 10
        $this->displayBlock('h1', $context, $blocks);
        echo "</h1>
                </header>
                <section class=\"margen1pc centrarContenido\">
                ";
        // line 13
        $this->displayBlock('contenido', $context, $blocks);
        // line 14
        echo "                </section>
            </div>
        </body>
    </html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Confirmar borrado";
    }

    // line 10
    public function block_h1($context, array $blocks = array())
    {
        echo "No se ha podido cargar la etiqueta h1";
    }

    // line 13
    public function block_contenido($context, array $blocks = array())
    {
        echo "No se ha podido cargar el contenido";
    }

    public function getTemplateName()
    {
        return "fbcAppBundle:Default:confirmarBorrado.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  55 => 10,  49 => 4,  40 => 13,  34 => 10,  27 => 5,  25 => 4,  20 => 1,  57 => 12,  53 => 11,  48 => 9,  45 => 8,  42 => 14,  36 => 5,  28 => 3,);
    }
}
