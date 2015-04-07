<?php

/* CdlrCalendarBundle::base.html.twig */
class __TwigTemplate_9385e91b7046f344f39fe54371997b6bd3da1beb014244c9f48a926fa852c309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bladetestercalendar/css/calendar-header.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bladetestercalendar/css/calendar.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
            <div class=\"app\">
                <header class=\"main-header\">
                    ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "                </header>


                <div class=\"main-body\">
                    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "                </div>

                <footer class=\"main-footer\">
                    ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 22
        echo "                </footer>
            </div>

    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>

";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "                    ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "                    ";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "                    ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bladetestercalendar/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bladetestercalendar/js/calendar.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "CdlrCalendarBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  94 => 26,  91 => 25,  87 => 21,  84 => 20,  80 => 16,  77 => 15,  73 => 10,  70 => 9,  63 => 29,  61 => 25,  56 => 22,  54 => 20,  49 => 17,  47 => 15,  41 => 11,  39 => 9,  31 => 4,  27 => 3,  23 => 1,);
    }
}
