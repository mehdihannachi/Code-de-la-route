<?php

/* CdlrcodeBundle::layout.html.twig */
class __TwigTemplate_d66b18dafb9458750ab5cc9f25ae2cdfee384b37e6fef21755f2e3f11e0a784c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sign' => array($this, 'block_sign'),
            'navigation' => array($this, 'block_navigation'),
            'content' => array($this, 'block_content'),
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
        <title>Code de la route</title>

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

        <!-- CSS
        ================================================== -->
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>


        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/social.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/signup.css"), "html", null, true);
        echo "\"> <!-- Gem style -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/colors/blue.css"), "html", null, true);
        echo "\" id=\"colors\">

        <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <!-- Java Script
        ================================================== -->

        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.selectnav.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.twitter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.modernizr.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.contact.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.jcarousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.layerslider.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/custom.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script> <!-- Modernizr -->

        <script src='../../google_analytics_auto.js'></script></head>
    <body>
        <!-- Wrapper / Start -->
        <div id=\"wrapper\">

            <!-- Header
            ================================================== -->
            <div id=\"top-line\"></div>

            <!-- 960 Container -->
            <div class=\"container\">

                <!-- Header -->
                <header id=\"header\">

                    <!-- Logo -->
                    <div class=\"ten columns\">
                        <div id=\"logo\">
                            <h1><a href=\"#\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon.png"), "html", null, true);
        echo "\" alt=\"code de la route\" /></a></h1>
                            <div id=\"tagline\">Votre guide de conduite!</div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                    <!-- Social / Contact -->
                    <div class=\"six columns\">
                        ";
        // line 72
        $this->displayBlock('sign', $context, $blocks);
        // line 97
        echo "
                    <br>

                    <div class=\"clearfix\"></div>

                    <div class=\"clearfix\"></div>
                    <!-- SIGNUP -->
                    <div class=\"cd-user-modal\"> <!-- this is the entire modal form, including the background -->
                        <div class=\"cd-user-modal-container\"> <!-- this is the container wrapper -->
                            <ul class=\"cd-switcher\">
                                <li><a href=\"#0\">Se connecter/s'enregistrer</a></li>
                            </ul>

                            <div id=\"cd-login\"> <!-- log in form -->
                                <form class=\"cd-form\"  method=\"post\">
                                    <p class=\"fieldset\">
                                    <li> <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("auth/log");
        echo "\">Se connecter</a> </li>


                                    </p>
                                    <p>
                                    </p>
                                    <p class=\"fieldset\">
                                    <li> <a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("auth/log");
        echo "\">S'enregistrer</a> </li>
                                    </p>
                                </form>

                            </div> <!-- cd-login -->

                            <div id=\"cd-signup\"> <!-- sign up form -->
                                <form class=\"cd-form\">
                                </form>

                                <!-- <a href=\"#0\" class=\"cd-close-form\">Close</a> -->
                            </div> <!-- cd-signup -->

                            <div id=\"cd-reset-password\"> <!-- reset password form -->
                                <p class=\"cd-form-message\">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                                <form class=\"cd-form\">
                                    <p class=\"fieldset\">
                                        <label class=\"image-replace cd-email\" for=\"reset-email\">E-mail</label>
                                        <input class=\"full-width has-padding has-border\" id=\"reset-email\" type=\"email\" placeholder=\"E-mail\">
                                        <span class=\"cd-error-message\">Error message here!</span>
                                    </p>

                                    <p class=\"fieldset\">
                                        <input class=\"full-width has-padding\" type=\"submit\" value=\"Reset password\">
                                    </p>
                                </form>

                                <p class=\"cd-form-bottom-message\"><a href=\"#0\">Back to log-in</a></p>
                            </div> <!-- cd-reset-password -->
                            <a href=\"#0\" class=\"cd-close-form\">Close</a>
                        </div> <!-- cd-user-modal-container -->
                    </div> <!-- cd-user-modal -->
                    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script> <!-- Gem jQuery -->

                    <!-- Contact Details -->
                    <!--<div class=\"contact-details\">Contact e-mail: +48 880 440 110</div>-->

                    <div class=\"clearfix\"></div>

                    <!-- Search -->
                    <nav class=\"top-search\">
                        <form action=\"\" method=\"get\">
                            <button class=\"search-btn\"></button>
                            <input class=\"search-field\" type=\"text\" onblur=\"if (this.value == '')
                                        this.value = 'Search';\" onfocus=\"if (this.value == 'Search')
                                                    this.value = '';\" value=\"Search\" />
                        </form>
                    </nav>
                    <br>
                    <nav>
                        <br>
                        <div align=\"right\">";
        // line 173
        echo $this->env->getExtension('nomaya_social_bar')->getFacebookLikeButton();
        echo "
                            <br>
                            ";
        // line 175
        echo $this->env->getExtension('nomaya_social_bar')->getTwitterButton();
        echo "
                        </div>
                    </nav>
            </div>
        </header>
        <!-- Header / End -->



        <div class=\"clearfix\"></div>

    </div>
    <!-- 960 Container / End -->


    <!-- Navigation
    ================================================== -->

    <nav id=\"navigation\" class=\"style-1\">

        <div class=\"left-corner\"></div>
        <div class=\"right-corner\"></div>

        <ul class=\"menu\" id=\"responsive\">

            <li><a href=\"";
        // line 200
        echo $this->env->getExtension('routing')->getPath("cdlr_user_homepage");
        echo "\" id=\"current\"><i class=\"halflings white home\"></i> Accueil</a></li>
                ";
        // line 201
        $this->displayBlock('navigation', $context, $blocks);
        // line 250
        echo "            <li><a href=\"\"><i class=\"halflings white search\"></i> Auto-écoles</a></li>
        </ul>
    </nav>

    <div class=\"clearfix\"></div>

    ";
        // line 256
        $this->displayBlock('content', $context, $blocks);
        // line 259
        echo "



</div>
<!-- Wrapper / End -->
<!-- Footer
================================================== -->

<!-- Footer / Start -->
<footer id=\"footer\">
    <!-- 960 Container -->
    <div class=\"container\">

        <!-- About -->
        <div class=\"one-third column\">
            <h4>A propos de nous</h4>
<!--                    <img id=\"logo-footer\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-footer.png"), "html", null, true);
        echo "\" alt=\"\" />-->
            <p class=\"one-third column\">Morbi gravida imperdiet rutrum fusce mattis, lectus consequat vestibulum, duinibh fermentum ligula.</p>

        </div>

        <!-- Contact Details -->
        <div class=\"one-third column\">
            <h4>Contactez nous</h4>
            <ul class=\"contact-details-alt\">
                <li><i class=\"halflings white map-marker\"></i> <p><strong>Adresse:</strong> Esprit - Ghazela, Ariana</p></li>
                <li><i class=\"halflings white user\"></i> <p><strong>Téléphone:</strong> +216 000 000</p></li>
                <li><i class=\"halflings white envelope\"></i> <p><strong>Email:</strong> <a href=\"#\">codedelaroute.fahm@gmail.com</a></p></li>
            </ul>
        </div>

        <!-- Photo Stream -->
        <div class=\"one-third column\">
            <h4>Rejoignez nous sur:</h4>
            <div class=\"set-1\">
                <ul>
                    <li><a href=\"https://www.facebook.com\" class=\"facebook-small\">Facebook</a></li>
                    <li><a href=\"https://www.twitter.com\" class=\"twitter-small\">Twitter</a></li>
                    <li><a href=\"https://plus.google.com\" class=\"gplus-small\">GPlus</a></li>
                </ul>
            </div>
            <div class=\"clearfix\"></div>

        </div>

    </div>
    <!-- 960 Container / End -->

</footer>
<!-- Footer / End -->


<!-- Footer Bottom / Start  -->
<footer id=\"footer-bottom\">

    <!-- 960 Container -->
    <div class=\"container\">

        <!-- Copyrights -->
        <div class=\"eight columns\">
            <div class=\"copyright\">
                © Copyright 2015 by <a href=\"#\">Five and a half man</a>. All Rights Reserved.
            </div>
        </div>

        <!-- Menu -->
        <div class=\"eight columns\">
            <nav id=\"sub-menu\">
                <ul>
                    <li><a href=\"#\">FAQ's</a></li>
                    <li><a href=\"#\">Sitemap</a></li>
                    <li><a href=\"";
        // line 331
        echo $this->env->getExtension('routing')->getPath("my_app_mail_form");
        echo "\">Contact</a></li>
                </ul>
            </nav>
        </div>

    </div>
    <!-- 960 Container / End -->

</footer>
<!-- Footer Bottom / End -->



<!-- Style Switcher
==================================================-->
<link rel=\"stylesheet\" href=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/switcher.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/switcher.js"), "html", null, true);
        echo "\"></script>

<section id=\"style-switcher\">
    <h2>Style Switcher <a href=\"#\"></a></h2>
    <div class=\"sidebar left\">
        <aside class=\"sidebar\">
            <ul>
                <li>a</li>
                <li>b</li>
            </ul>
        </aside>
    </div>
</section>
<!--Style Switcher / End -->
";
    }

    // line 72
    public function block_sign($context, array $blocks = array())
    {
        // line 73
        echo "                            <div>

                                ";
        // line 75
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 76
            echo "                                        <ul>
                                            ";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                            <a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                                ";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                            </a>
                                        </ul>

                                ";
        } else {
            // line 84
            echo "                                    <div>
                                        <nav class=\"main-nav\">
                                            <ul>
                                                <!-- inser more links here -->
                                                <li><a class=\"cd-signin\" style=\"margin-top: -40px\" href=\"#0\">Se connecter/s'enregistrer</a></li>
                                            </ul>
                                        </nav>
                                    </div>                                 
                                ";
        }
        // line 93
        echo "                            </div>


                        ";
    }

    // line 201
    public function block_navigation($context, array $blocks = array())
    {
        // line 202
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("cours");
        echo "\"><i class=\"halflings white book\"></i> Cours gratuits</a>
                    <!-- Mega Menu / Start -->
                    <ul class=\"cols3\">
                        <li class=\"col1\">
                            <h5>Cours gratuits</h5>
                            <ol>
                                <li><a href=\"\">Les catégories de permis</a></li>
                                <li><a href=\"\">Les panneaux routiers</a></li>
                                <li><a href=\"\">Les feux routiers</a></li>
                            </ol>
                        </li>
                        <li class=\"col1\">
                            <h5>Cours vidéos gratuits</h5>
                            <ol>
                                <li><a href=\"\">Cours 1</a></li>
                                <li><a href=\"\">Cours 2</a></li>
                                <li><a href=\"\">Cours 3</a></li>
                                <li><a href=\"\">Cours 4</a></li>
                            </ol>
                        </li>
                    </ul>
                    <!-- Mega Menu / End -->
                </li>

                <li><a href=\"#\"><i class=\"halflings white file\"></i> Tests gratuits</a>
                    <!-- Second Level / Start -->
                    <ul>
                        <li><a href=\"\">Test 1</a></li>
                        <li><a href=\"\">Test 2</a></li>
                        <li><a href=\"\">Test 3</a></li>
                        <li><a href=\"\">Test 4</a></li>
                    </ul>
                    <!-- Second Level / End -->
                </li>

                <li><a><i class=\"halflings white pushpin\"></i> Annonces</a>
                    <!-- Second Level / Start -->
                    <ul>
                        <li><a href=\"\">Offres d'emploi</a></li>
                        <li><a href=\"\">Vente de voitures</a></li>
                    </ul>
                    <!-- Second Level / End -->
                </li>
                <li>
                    <a href=\"\"><i class=\"halflings white briefcase\"></i> Assurances</a>
                </li>

            ";
    }

    // line 256
    public function block_content($context, array $blocks = array())
    {
        // line 257
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 257,  510 => 256,  457 => 202,  454 => 201,  447 => 93,  436 => 84,  428 => 79,  424 => 78,  420 => 77,  417 => 76,  415 => 75,  411 => 73,  408 => 72,  389 => 347,  385 => 346,  367 => 331,  309 => 276,  290 => 259,  288 => 256,  280 => 250,  278 => 201,  274 => 200,  246 => 175,  241 => 173,  219 => 154,  215 => 153,  179 => 120,  169 => 113,  151 => 97,  149 => 72,  139 => 65,  116 => 45,  112 => 44,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 38,  84 => 37,  80 => 36,  76 => 35,  72 => 34,  68 => 33,  56 => 24,  52 => 23,  47 => 21,  43 => 20,  22 => 1,);
    }
}
