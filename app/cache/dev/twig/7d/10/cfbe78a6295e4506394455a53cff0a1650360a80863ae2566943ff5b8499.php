<?php

/* CdlrcodeBundle::layout.html.twig */
class __TwigTemplate_7d10cfbe78a6295e4506394455a53cff0a1650360a80863ae2566943ff5b8499 extends Twig_Template
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
        // line 73
        $this->displayBlock('sign', $context, $blocks);
        // line 85
        echo "                        <br>

                        <!-- Social Icons 
                        <ul class=\"social-icons\">
                            <li class=\"twitter\"><a href=\"#\">Twitter</a></li>
                            <li class=\"facebook\"><a href=\"#\">Facebook</a></li>
                            <li class=\"dribbble\"><a href=\"#\">Dribbble</a></li>
                            <li class=\"linkedin\"><a href=\"#\">LinkedIn</a></li>
                            <li class=\"rss\"><a href=\"#\">RSS</a></li>
                        </ul>-->
                        <div class=\"clearfix\"></div>

                        <div class=\"clearfix\"></div>
                        <!-- SIGNUP -->
                        <div class=\"cd-user-modal\"> <!-- this is the entire modal form, including the background -->
                            <div class=\"cd-user-modal-container\"> <!-- this is the container wrapper -->
                                <ul class=\"cd-switcher\">
                                    <li><a href=\"#0\">Sign in</a></li>
                                    <li><a href=\"#0\">New account</a></li>
                                </ul>

                                <div id=\"cd-login\"> <!-- log in form -->
                                    <form class=\"cd-form\">
                                        <p class=\"fieldset\">
                                            <label class=\"image-replace cd-email\" for=\"signin-email\">E-mail</label>
                                            <input class=\"full-width has-padding has-border\" id=\"signin-email\" type=\"email\" placeholder=\"E-mail\">
                                            <span class=\"cd-error-message\">Error message here!</span>
                                        </p>

                                        <p class=\"fieldset\">
                                            <label class=\"image-replace cd-password\" for=\"signin-password\">Password</label>
                                            <input class=\"full-width has-padding has-border\" id=\"signin-password\" type=\"text\"  placeholder=\"Password\">
                                            <a href=\"#0\" class=\"hide-password\">Hide</a>
                                            <span class=\"cd-error-message\">Error message here!</span>
                                        </p>

                                        <p class=\"fieldset\">
                                            <input type=\"checkbox\" id=\"remember-me\" checked>
                                            <label for=\"remember-me\">Remember me</label>
                                        </p>

                                        <p class=\"fieldset\">
                                            <input class=\"full-width\" type=\"submit\" value=\"Login\">
                                        </p>
                                    </form>

                                    <p class=\"cd-form-bottom-message\"><a href=\"#0\">Forgot your password?</a></p>
                                    <!-- <a href=\"#0\" class=\"cd-close-form\">Close</a> -->
                                </div> <!-- cd-login -->

                                <div id=\"cd-signup\"> <!-- sign up form -->
                                    <form class=\"cd-form\">
                                        <p class=\"fieldset\">
                                            <label class=\"image-replace cd-username\" for=\"signup-username\">Username</label>
                                            <input class=\"full-width has-padding has-border\" id=\"signup-username\" type=\"text\" placeholder=\"Username\">
                                            <span class=\"cd-error-message\">Error message here!</span>
                                        </p>

                                        <p class=\"fieldset\">
                                            <label class=\"image-replace cd-email\" for=\"signup-email\">E-mail</label>
                                            <input class=\"full-width has-padding has-border\" id=\"signup-email\" type=\"email\" placeholder=\"E-mail\">
                                            <span class=\"cd-error-message\">Error message here!</span>
                                        </p>

                                        <p class=\"fieldset\">
                                            <label class=\"image-replace cd-password\" for=\"signup-password\">Password</label>
                                            <input class=\"full-width has-padding has-border\" id=\"signup-password\" type=\"text\"  placeholder=\"Password\">
                                            <a href=\"#0\" class=\"hide-password\">Hide</a>
                                            <span class=\"cd-error-message\">Error message here!</span>
                                        </p>

                                        <p class=\"fieldset\">
                                            <input type=\"checkbox\" id=\"accept-terms\">
                                            <label for=\"accept-terms\">I agree to the <a href=\"#0\">Terms</a></label>
                                        </p>

                                        <p class=\"fieldset\">
                                            <input class=\"full-width has-padding\" type=\"submit\" value=\"Create account\">
                                        </p>
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
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.min.js"), "html", null, true);
        echo "\"></script>
                        <script src=\"";
        // line 190
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
        // line 209
        echo $this->env->getExtension('nomaya_social_bar')->getFacebookLikeButton();
        echo "
                                <br>
                                ";
        // line 211
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

                    <li><a href=\"\" id=\"current\"><i class=\"halflings white home\"></i> Accueil</a></li>
                        ";
        // line 237
        $this->displayBlock('navigation', $context, $blocks);
        // line 286
        echo "                    <li><a href=\"#\"><i class=\"halflings white search\"></i> Auto-écoles</a></li>
                </ul>
            </nav>

            <div class=\"clearfix\"></div>

            ";
        // line 292
        $this->displayBlock('content', $context, $blocks);
        // line 295
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
        // line 311
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
                        © Copyright 2015 by <a href=\"#\">Four and a half man</a>. All Rights Reserved.
                    </div>
                </div>

                <!-- Menu -->
                <div class=\"eight columns\">
                    <nav id=\"sub-menu\">
                        <ul>
                            <li><a href=\"#\">FAQ's</a></li>
                            <li><a href=\"#\">Sitemap</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- 960 Container / End -->

        </footer>
        <!-- Footer Bottom / End -->



        <!-- Style Switcher
        ================================================== -->
        <link rel=\"stylesheet\" href=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/switcher.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/switcher.js"), "html", null, true);
        echo "\"></script>

        <section id=\"style-switcher\">
            <h2>Style Switcher <a href=\"#\"></a></h2>
            <div>
                <h3>Predefined Colors</h3>
                <ul class=\"colors\" id=\"color1\">
                    <li><a href=\"#\" class=\"blue\" title=\"Blue\"></a></li>
                    <li><a href=\"#\" class=\"green\" title=\"Green\"></a></li>
                    <li><a href=\"#\" class=\"orange\" title=\"Orange\"></a></li>
                    <li><a href=\"#\" class=\"navy\" title=\"Navy\"></a></li>
                    <li><a href=\"#\" class=\"yellow\" title=\"Yellow\"></a></li>
                    <li><a href=\"#\" class=\"peach\" title=\"Peach\"></a></li>
                    <li><a href=\"#\" class=\"beige\" title=\"Beige\"></a></li>
                    <li><a href=\"#\" class=\"purple\" title=\"Purple\"></a></li>
                    <li><a href=\"#\" class=\"red\" title=\"Red\"></a></li>
                    <li><a href=\"#\" class=\"pink\" title=\"Pink\"></a></li>
                    <li><a href=\"#\" class=\"celadon\" title=\"Celadon\"></a></li>
                    <li><a href=\"#\" class=\"brown\" title=\"Brown\"></a></li>
                    <li><a href=\"#\" class=\"cherry\" title=\"Cherry\"></a></li>
                    <li><a href=\"#\" class=\"gray\" title=\"Gray\"></a></li>
                    <li><a href=\"#\" class=\"dark\" title=\"Dark\"></a></li>
                    <li><a href=\"#\" class=\"cyan\" title=\"Cyan\"></a></li>
                    <li><a href=\"#\" class=\"olive\" title=\"Olive\"></a></li>
                    <li><a href=\"#\" class=\"dirty-green\" title=\"Dirty Green\"></a></li>
                </ul>

                <h3>Menu Style</h3>
                <select id=\"menu-style\">
                    <option value=\"1\">Style 1</option>
                    <option value=\"2\">Style 2</option>
                </select>

                <h3>Background Image</h3>
                <ul class=\"colors bg\" id=\"bg\">
                    <li><a href=\"#\" class=\"bg1\"></a></li>
                    <li><a href=\"#\" class=\"bg2\"></a></li>
                    <li><a href=\"#\" class=\"bg3\"></a></li>
                    <li><a href=\"#\" class=\"bg4\"></a></li>
                    <li><a href=\"#\" class=\"bg5\"></a></li>
                    <li><a href=\"#\" class=\"bg6\"></a></li>
                    <li><a href=\"#\" class=\"bg7\"></a></li>
                    <li><a href=\"#\" class=\"bg8\"></a></li>
                    <li><a href=\"#\" class=\"bg9\"></a></li>
                    <li><a href=\"#\" class=\"bg10\"></a></li>
                    <li><a href=\"#\" class=\"bg11\"></a></li>
                    <li><a href=\"#\" class=\"bg12\"></a></li>
                    <li><a href=\"#\" class=\"bg13\"></a></li>
                    <li><a href=\"#\" class=\"bg14\"></a></li>
                    <li><a href=\"#\" class=\"bg15\"></a></li>
                    <li><a href=\"#\" class=\"bg16\"></a></li>
                    <li><a href=\"#\" class=\"bg17\"></a></li>
                    <li><a href=\"#\" class=\"bg18\"></a></li>
                </ul>
            </div>

            <div id=\"reset\"><a href=\"#\" class=\"button color blue\">Reset</a></div>

        </section>
        <!-- Style Switcher / End -->
";
    }

    // line 73
    public function block_sign($context, array $blocks = array())
    {
        // line 74
        echo "                            <div>
                                <nav class=\"main-nav\">
                                    <ul>
                                        <!-- inser more links here -->
                                        <li><a class=\"cd-signin\" style=\"margin-top: -40px\" href=\"#0\">Sign in</a></li>
                                        <li><a class=\"cd-signup\" style=\"margin-top: -40px\" href=\"#0\">Sign up</a></li>
                                    </ul>
                                </nav>
                            </div> 

                        ";
    }

    // line 237
    public function block_navigation($context, array $blocks = array())
    {
        // line 238
        echo "                        <li><a href=\"#\"><i class=\"halflings white book\"></i> Cours gratuits</a>
                            <!-- Mega Menu / Start -->
                            <ul class=\"cols2\">
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

                        <li><a href=\"#\"><i class=\"halflings white pushpin\"></i> Annonces</a>
                            <!-- Second Level / Start -->
                            <ul>
                                <li><a href=\"\">Offres d'emploi</a></li>
                                <li><a href=\"\">Vente de voitures</a></li>
                            </ul>
                            <!-- Second Level / End -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"halflings white briefcase\"></i> Assurances</a>
                        </li>

                    ";
    }

    // line 292
    public function block_content($context, array $blocks = array())
    {
        // line 293
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
        return array (  564 => 293,  561 => 292,  510 => 238,  507 => 237,  493 => 74,  490 => 73,  425 => 382,  421 => 381,  348 => 311,  330 => 295,  328 => 292,  320 => 286,  318 => 237,  289 => 211,  284 => 209,  262 => 190,  258 => 189,  152 => 85,  150 => 73,  139 => 65,  116 => 45,  112 => 44,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 38,  84 => 37,  80 => 36,  76 => 35,  72 => 34,  68 => 33,  56 => 24,  52 => 23,  47 => 21,  43 => 20,  22 => 1,);
    }
}
