<?php

/* fbcAppBundle:Default:index.html.twig */
class __TwigTemplate_3106a8cf8ea78120d64487e2357ed883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'menu' => array($this, 'block_menu'),
            'h1' => array($this, 'block_h1'),
            'opciones' => array($this, 'block_opciones'),
            'contenido' => array($this, 'block_contenido'),
            'pie' => array($this, 'block_pie'),
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
        echo "    ";
        $this->displayBlock('meta', $context, $blocks);
        // line 8
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 19
        echo "        </head>

        <body>
            <div data-role=\"page\">
                <header data-role=\"header\">
                    <aside data-role=\"navbar\">
            ";
        // line 25
        $this->displayBlock('menu', $context, $blocks);
        // line 32
        echo "                        </aside>
                        <h1>";
        // line 33
        $this->displayBlock('h1', $context, $blocks);
        echo "</h1>
                    </header>
                    <section id=\"control\">
                        <article id=\"opciones\">
                            ";
        // line 37
        $this->displayBlock('opciones', $context, $blocks);
        // line 38
        echo "                        </article>
                        <article id=\"buscador\">
                            ";
        // line 41
        echo "                            ";
        echo $this->env->getExtension('actions')->renderAction("fbcAppBundle:Buscar:index", array(), array());
        // line 42
        echo "                        </article>
                    </section>
                    <section>";
        // line 44
        $this->displayBlock('contenido', $context, $blocks);
        echo "</section>
                    <footer data-role=\"footer\" class=\"ui-bar\">
            ";
        // line 46
        $this->displayBlock('pie', $context, $blocks);
        // line 47
        echo "                        </footer>
                    </div>
                </body>
            </html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        // line 6
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        // line 9
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fbc.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fbc.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    // line 15
    public function block_js($context, array $blocks = array())
    {
        // line 16
        echo "            <script src=\"http://code.jquery.com/jquery-1.7.1.min.js\"></script>
            <script src=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js\"></script>
    ";
    }

    // line 25
    public function block_menu($context, array $blocks = array())
    {
        // line 26
        echo "                            <ul data-role=\"navbar\">
                                <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escritorio"), "html", null, true);
        echo "\" data-role=\"button\" data-icon=\"home\" data-iconpos=\"right\" data-theme=\"b\"><h3>Escritorio</h3></a></li>
                                <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bettas"), "html", null, true);
        echo "\" data-theme=\"b\"><h3>Bettas</h3></a></li>
                                <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("puestas"), "html", null, true);
        echo "\" data-theme=\"b\"><h3>Puestas</h3></a></li>
                            </ul>
            ";
    }

    // line 33
    public function block_h1($context, array $blocks = array())
    {
        echo "Fallo al cargar la etiqueta &LT;h1&GT;";
    }

    // line 37
    public function block_opciones($context, array $blocks = array())
    {
    }

    // line 44
    public function block_contenido($context, array $blocks = array())
    {
        echo "No se ha podido cargar el contenido";
    }

    // line 46
    public function block_pie($context, array $blocks = array())
    {
        echo "<h5>Free Betta Control 1.0. - Blog <a href=\"http://www.betta-halfmoon-madrid.com\" title=\"Ir a Betta Halfmoon Madrid\" target=\"_blank\">www.betta-halfmoon-madrid.com</a></h5>";
    }

    public function getTemplateName()
    {
        return "fbcAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  166 => 44,  161 => 37,  155 => 33,  148 => 29,  144 => 28,  140 => 27,  137 => 26,  134 => 25,  128 => 16,  125 => 15,  119 => 13,  115 => 12,  111 => 11,  105 => 9,  102 => 8,  97 => 6,  94 => 5,  89 => 4,  82 => 47,  80 => 46,  75 => 44,  71 => 42,  68 => 41,  64 => 38,  62 => 37,  55 => 33,  52 => 32,  50 => 25,  42 => 19,  39 => 15,  36 => 8,  33 => 5,  31 => 4,  26 => 1,);
    }
}
