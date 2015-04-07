<?php

/* CdlrmailBundle::contact.html.twig */
class __TwigTemplate_ff9065e2b4986229ca854fa8540c0071b94a8ea38f2051f522af6d5f9718b812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'X' => array($this, 'block_X'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang=\"en\"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset=\"utf-8\">
<title>Nevia</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

<!-- CSS
================================================== -->
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/colors/blue.css"), "html", null, true);
        echo "\" id=\"colors\">

<!--[if lt IE 9]>
\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->

<!-- Java Script
================================================== -->
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.selectnav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.twitter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.modernizr.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.jcarousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.layerslider.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/custom.js"), "html", null, true);
        echo "\"></script>

<script src='";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../../google_analytics_auto.js"), "html", null, true);
        echo "'></script></head>
<body>

<!-- Wrapper / Start -->
<div id=\"wrapper\">

<!-- Header
================================================== -->
<div id=\"top-line\"></div>

<!-- 960 Container -->
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
<div id=\"content\">


<!-- 960 Container -->
<div class=\"container floated\">

\t<div class=\"sixteen floated page-title\">

\t\t<h2>Contact</h2>

\t\t<nav id=\"breadcrumbs\">
\t\t\t<ul>
\t\t\t\t<li>You are here:</li>
\t\t\t\t<li><a href=\"index-2.html\">Home</a></li>
\t\t\t\t<li>Contact</li>
\t\t\t</ul>
\t\t</nav>

\t</div>

</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class=\"container floated\">

\t<!-- Sidebar -->
\t<div class=\"four floated sidebar left\">
\t\t<aside class=\"sidebar padding-reset\">

\t\t\t<div class=\"widget\">
\t\t\t\t<h4>Information</h4>
\t\t\t\t<p>Phasellus ultricies id suscipit mauris monte lobortis. Cum sociis natoque penatibus magnis parturient.</p>
\t\t\t</div>

\t\t\t<div class=\"widget\">
\t\t\t\t<h4>General Inquiries</h4>

\t\t\t\t<ul class=\"contact-informations\">
\t\t\t\t\t<li><span class=\"address\">123 Seward Street</span></li>
\t\t\t\t\t<li><span class=\"address\">Los Angeles, CA 90185, USA</span></li>
\t\t\t\t</ul>

\t\t\t\t<ul class=\"contact-informations second\">
\t\t\t\t\t<li><i class=\"halflings headphones\"></i> <p>+48 880 440 110</p></li>
\t\t\t\t\t<li><i class=\"halflings envelope\"></i> <p>support@example.com</p></li>
\t\t\t\t\t<li><i class=\"halflings globe\"></i> <p>www.example.com</p></li>
\t\t\t\t</ul>

\t\t\t</div>

\t\t\t<div class=\"widget\">
\t\t\t\t<h4>Business Hours</h4>
\t\t\t\t<ul class=\"contact-informations hours\">
\t\t\t\t\t<li><i class=\"halflings time\"></i>Monday - Friday <span class=\"hours\">8 am to 4 pm</span></li>
\t\t\t\t\t<li><i class=\"halflings time\"></i>Saturday <span class=\"hours\">9 am to 2 pm</span></li>
\t\t\t\t\t<li><i class=\"halflings ban-circle\"></i>Sunday <span class=\"hours\">Closed</span></li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t</aside>
\t</div>
\t<!-- Sidebar / End -->

\t<!-- Page Content -->
\t<div class=\"eleven floated\">
\t\t<section class=\"page-content\">

\t\t\t<h3 class=\"margin-reset\">Our Location</h3>

\t\t\t<br />

\t\t\t<!-- Google Maps -->
\t\t\t<section class=\"google-map-container\">

\t\t\t\t<div id=\"googlemaps\" class=\"google-map google-map-full\" style=\"padding-bottom:40%\"></div>

\t\t\t\t<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://maps.google.com/maps/api/js?sensor=true"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.gmap.min.js"), "html", null, true);
        echo "\"></script>

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\tjQuery('#googlemaps').gMap({
\t\t\t\t\tmaptype: 'ROADMAP',
\t\t\t\t\tscrollwheel: false,
\t\t\t\t\tzoom: 16,
\t\t\t\t\tmarkers: [
\t\t\t\t\t\t{
\t\t\t\t\t\t\taddress: 'La marsa,Tunisie', // Your Adress Here
\t\t\t\t\t\t\thtml: '',
\t\t\t\t\t\t\tpopup: false,
\t\t\t\t\t\t}
\t\t\t\t\t],
\t\t\t\t});
\t\t\t\t</script>
\t\t\t</section>
\t\t\t<!-- Google Maps / End -->



\t\t\t\t<!-- Contact Form -->
\t\t\t\t<section id=\"contact\">

\t\t\t\t\t<!-- Success Message -->
\t\t\t\t\t<mark ></mark>

\t\t\t\t\t<!-- Form -->
\t\t\t\t\t
                                               ";
        // line 294
        $this->displayBlock('X', $context, $blocks);
        // line 304
        echo "\t\t\t\t\t

\t\t\t\t</section>
\t\t\t\t<!-- Contact Form / End -->


\t\t</section>
\t</div>
\t<!-- Page Content / End -->


</div>
<!-- 960 Container / End -->

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->


<!-- Footer
================================================== -->

<!-- Footer / Start -->
<footer id=\"footer\">
\t<!-- 960 Container -->
\t<div class=\"container\">

\t\t<!-- About -->
\t\t<div class=\"four columns\">
\t\t\t<img id=\"logo-footer\" src=";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-footer.png"), "html", null, true);
        echo " alt=\"\" />
\t\t\t<p>Morbi gravida imperdiet rutrum fusce mattis, lectus consequat vestibulum, duinibh fermentum ligula.</p>
\t\t</div>

\t\t<!-- Contact Details -->
\t\t<div class=\"four columns\">
\t\t\t<h4>Contact Details</h4>
\t\t\t<ul class=\"contact-details-alt\">
\t\t\t\t<li><i class=\"halflings white map-marker\"></i> <p><strong>Address:</strong> 123 Seward Street, Oklahoma City, USA</p></li>
\t\t\t\t<li><i class=\"halflings white user\"></i> <p><strong>Phone:</strong> +48 880 440 110</p></li>
\t\t\t\t<li><i class=\"halflings white envelope\"></i> <p><strong>Email:</strong> <a href=\"#\">mail@example.com</a></p></li>
\t\t\t</ul>
\t\t</div>

\t\t<!-- Photo Stream -->
\t\t<div class=\"four columns\">
\t\t\t<h4>Photo Stream</h4>
\t\t\t<div class=\"flickr-widget\">
\t\t\t\t<script type=\"text/javascript\" src=";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=48035108@N07"), "html", null, true);
        echo "></script>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Twitter -->
\t\t<div class=\"four columns\">
\t\t\t<h4>Twitter</h4>
\t\t\t<ul id=\"twitter\"></ul>
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tjQuery(document).ready(function(\$){
\t\t\t\t\t\$.getJSON('http://api.twitter.com/1/statuses/user_timeline/vasterad.json?count=1&amp;callback=?', function(tweets){
\t\t\t\t\t\$(\"#twitter\").html(tz_format_twitter(tweets));
\t\t\t\t\t}); });
\t\t\t\t</script>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>

\t</div>
\t<!-- 960 Container / End -->

</footer>
<!-- Footer / End -->


<!-- Footer Bottom / Start  -->
<footer id=\"footer-bottom\">

\t<!-- 960 Container -->
\t<div class=\"container\">

\t\t<!-- Copyrights -->
\t\t<div class=\"eight columns\">
\t\t\t<div class=\"copyright\">
\t\t\t\t© Copyright 2012 by <a href=\"#\">Nevia</a>. All Rights Reserved.
\t\t\t</div>
\t\t</div>

\t\t<!-- Menu -->
\t\t<div class=\"eight columns\">
\t\t\t<nav id=\"sub-menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">FAQ's</a></li>
\t\t\t\t\t<li><a href=\"#\">Sitemap</a></li>
\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>

\t</div>
\t<!-- 960 Container / End -->

</footer>
<!-- Footer Bottom / End -->


<!-- Style Switcher
================================================== -->
<link rel=\"stylesheet\" href=\"css/switcher.css\">
<script src=";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/switcher.js"), "html", null, true);
        echo "></script>

<section id=\"style-switcher\">
\t<h2>Style Switcher <a href=\"#\"></a></h2>
\t<div>
\t<h3>Predefined Colors</h3>
\t\t<ul class=\"colors\" id=\"color1\">
\t\t\t<li><a href=\"#\" class=\"blue\" title=\"Blue\"></a></li>
\t\t\t<li><a href=\"#\" class=\"green\" title=\"Green\"></a></li>
\t\t\t<li><a href=\"#\" class=\"orange\" title=\"Orange\"></a></li>
\t\t\t<li><a href=\"#\" class=\"navy\" title=\"Navy\"></a></li>
\t\t\t<li><a href=\"#\" class=\"yellow\" title=\"Yellow\"></a></li>
\t\t\t<li><a href=\"#\" class=\"peach\" title=\"Peach\"></a></li>
\t\t\t<li><a href=\"#\" class=\"beige\" title=\"Beige\"></a></li>
\t\t\t<li><a href=\"#\" class=\"purple\" title=\"Purple\"></a></li>
\t\t\t<li><a href=\"#\" class=\"red\" title=\"Red\"></a></li>
\t\t\t<li><a href=\"#\" class=\"pink\" title=\"Pink\"></a></li>
\t\t\t<li><a href=\"#\" class=\"celadon\" title=\"Celadon\"></a></li>
\t\t\t<li><a href=\"#\" class=\"brown\" title=\"Brown\"></a></li>
\t\t\t<li><a href=\"#\" class=\"cherry\" title=\"Cherry\"></a></li>
\t\t\t<li><a href=\"#\" class=\"gray\" title=\"Gray\"></a></li>
\t\t\t<li><a href=\"#\" class=\"dark\" title=\"Dark\"></a></li>
\t\t\t<li><a href=\"#\" class=\"cyan\" title=\"Cyan\"></a></li>
\t\t\t<li><a href=\"#\" class=\"olive\" title=\"Olive\"></a></li>
\t\t\t<li><a href=\"#\" class=\"dirty-green\" title=\"Dirty Green\"></a></li>
\t\t</ul>
\t\t
\t<h3>Menu Style</h3>
\t<select id=\"menu-style\">
\t\t<option value=\"1\">Style 1</option>
\t\t<option value=\"2\">Style 2</option>
\t</select>

\t<h3>Background Image</h3>
\t\t <ul class=\"colors bg\" id=\"bg\">
\t\t\t<li><a href=\"#\" class=\"bg1\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg2\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg3\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg4\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg5\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg6\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg7\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg8\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg9\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg10\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg11\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg12\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg13\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg14\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg15\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg16\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg17\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg18\"></a></li>
\t\t</ul>
\t</div>

\t<div id=\"reset\"><a href=\"#\" class=\"button color blue\">Reset</a></div>

</section>
<!-- Style Switcher / End -->


</body>
</html>";
    }

    // line 294
    public function block_X($context, array $blocks = array())
    {
        // line 295
        echo "\t\t\t\t\t\t<fieldset>
                                                    

\t\t\t\t\t\t\t
                                                            

\t\t\t\t\t\t</fieldset>

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
        return array (  558 => 295,  555 => 294,  487 => 412,  425 => 353,  404 => 335,  371 => 304,  369 => 294,  337 => 265,  333 => 264,  106 => 40,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  69 => 30,  65 => 29,  61 => 28,  57 => 27,  53 => 26,  42 => 18,  38 => 17,  20 => 1,);
    }
}
