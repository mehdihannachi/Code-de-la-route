<?php

/* CdlrmailBundle::contact.html.twig */
class __TwigTemplate_ff9065e2b4986229ca854fa8540c0071b94a8ea38f2051f522af6d5f9718b812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CdlrcodeBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CdlrcodeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<!-- 960 Container -->
<div class=\"container\">

\t<!-- Header -->
\t<header id=\"header\">

\t\t<!-- Logo -->
\t\t<div class=\"ten columns\">
\t\t\t<div id=\"logo\">
\t\t\t\t<h1><a href=\"index-2.html\"><img src=\"images/logo.png\" alt=\"Nevia Premium Template\" /></a></h1>
\t\t\t\t<div id=\"tagline\">Template Without Compromises!</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Social / Contact -->
\t\t<div class=\"six columns\">

\t\t\t<!-- Social Icons -->
\t\t\t<ul class=\"social-icons\">
\t\t\t\t<li class=\"twitter\"><a href=\"#\">Twitter</a></li>
\t\t\t\t<li class=\"facebook\"><a href=\"#\">Facebook</a></li>
\t\t\t\t<li class=\"dribbble\"><a href=\"#\">Dribbble</a></li>
\t\t\t\t<li class=\"linkedin\"><a href=\"#\">LinkedIn</a></li>
\t\t\t\t<li class=\"rss\"><a href=\"#\">RSS</a></li>
\t\t\t</ul>

\t\t\t<div class=\"clearfix\"></div>

\t\t\t<!-- Contact Details -->
\t\t\t<div class=\"contact-details\">Contact Phone: +48 880 440 110</div>

\t\t\t<div class=\"clearfix\"></div>

\t\t\t<!-- Search -->
\t\t\t<nav class=\"top-search\">
\t\t\t\t<form action=\"http://vasterad.com/themes/nevia/404-page.html\" method=\"get\">
\t\t\t\t\t<button class=\"search-btn\"></button>
\t\t\t\t\t<input class=\"search-field\" type=\"text\" onblur=\"if(this.value=='')this.value='Search';\" onfocus=\"if(this.value=='Search')this.value='';\" value=\"Search\" />
\t\t\t\t</form>
\t\t\t</nav>

\t\t</div>
\t</header>
\t<!-- Header / End -->

\t<div class=\"clearfix\"></div>

</div>
<!-- 960 Container / End -->


<!-- Navigation
================================================== -->
<nav id=\"navigation\" class=\"style-1\">

<div class=\"left-corner\"></div>
<div class=\"right-corner\"></div>

<ul class=\"menu\" id=\"responsive\">

\t<li><a href=\"index-2.html\"><i class=\"halflings white home\"></i> Home</a></li>

\t<li><a href=\"#\"><i class=\"halflings white file\"></i> Features</a>
\t\t<!-- Mega Menu / Start -->
\t\t<ul class=\"cols3\">
\t\t\t<li class=\"col3\">
\t\t\t\t<h4>Two Lists and a Paragraph</h4>
\t\t\t</li>
\t\t\t<li class=\"col1\">
\t\t\t\t<h5>Page Layouts</h5>
\t\t\t\t<ol>
\t\t\t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t<li><a href=\"flexslider.html\">FlexSlider</a></li>
\t\t\t\t\t<li><a href=\"pricing-tables.html\">Pricing Tables</a></li>
\t\t\t\t\t<li><a href=\"elements.html\">Elements</a></li>
\t\t\t\t</ol>
\t\t\t</li>
\t\t\t<li class=\"col1\">
\t\t\t\t<h5>Other Pages</h5>
\t\t\t\t<ol>
\t\t\t\t\t<li><a href=\"faq.html\">FAQ's</a></li>
\t\t\t\t\t<li><a href=\"404-page.html\">404 Page</a></li>
\t\t\t\t\t<li><a href=\"left-sidebar.html\">Left Sidebar</a></li>
\t\t\t\t\t<li><a href=\"right-sidebar.html\">Right Sidebar</a></li>
\t\t\t\t</ol>
\t\t\t</li>
\t\t\t<li class=\"col1\">
\t\t\t\t<h5>Paragraph</h5>
\t\t\t\t<p>This <a href=\"#\">Mega Menu</a> can handle everything. Lists, paragraphs, forms...</p>
\t\t\t</li>
\t\t</ul>
\t\t<!-- Mega Menu / End -->
\t</li>

\t<li><a href=\"#\"><i class=\"halflings white cog\"></i> Shortcodes</a>
\t\t<!-- Second Level / Start -->
\t\t<ul>
\t\t\t<li><a href=\"elements.html\">Elements</a></li>
\t\t\t<li><a href=\"icons.html\">Icons</a></li>
\t\t\t<li><a href=\"pricing-tables.html\">Pricing Tables</a></li>
\t\t\t<li><a href=\"typography.html\">Typography</a></li>
\t\t</ul>
\t\t<!-- Second Level / End -->
\t</li>

\t<li><a href=\"#\"><i class=\"halflings white briefcase\"></i> Portfolio</a>
\t\t<!-- Second Level / Start -->
\t\t<ul>
\t\t\t<li><a href=\"portfolio-2.html\">2 Columns</a></li>
\t\t\t<li><a href=\"portfolio-3.html\">3 Columns</a></li>
\t\t\t<li><a href=\"portfolio-4.html\">4 Columns</a></li>
\t\t\t<li><a href=\"single-project.html\">Single Project</a></li>
\t\t</ul>
\t\t<!-- Second Level / End -->
\t</li>

\t<li><a href=\"#\"><i class=\"halflings white pencil\"></i> Blog</a>
\t\t<!-- Second Level / Start -->
\t\t<ul>
\t\t\t<li><a href=\"blog-large-image.html\">Large Image</a></li>
\t\t\t<li><a href=\"blog-medium-image.html\">Medium Image</a></li>
\t\t\t<li><a href=\"blog-post.html\">Single Post</a></li>
\t\t</ul>
\t\t<!-- Second Level / End -->
\t</li>

\t<li><a href=\"contact.html\" id=\"current\"><i class=\"halflings white envelope\"></i> Contact</a></li>

</ul>
</nav>
<div class=\"clearfix\"></div>


<!-- Content
================================================== -->
";
    }

    public function getTemplateName()
    {
        return "CdlrmailBundle::contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
