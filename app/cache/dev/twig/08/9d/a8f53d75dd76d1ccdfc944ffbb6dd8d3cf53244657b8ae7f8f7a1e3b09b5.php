<?php

/* CdlrcodeBundle:Candidat:accueil.html.twig */
class __TwigTemplate_089da8f53d75dd76d1ccdfc944ffbb6dd8d3cf53244657b8ae7f8f7a1e3b09b5 extends Twig_Template
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
            'sign' => array($this, 'block_sign'),
            'content' => array($this, 'block_content'),
            'navigation' => array($this, 'block_navigation'),
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
    public function block_sign($context, array $blocks = array())
    {
        // line 4
        echo "    <div>
        <ul>
            <!-- inser more links here -->
            <li class=\"button gray\">Sign out</li>                
        </ul>
    </div>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div id=\"content\">
        <!-- FlexSlider  -->

        <section class=\"flexslider home\">
            <ul class=\"slides\">
                <li><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/test-code-de-la-route-gratuit.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                    <article class=\"slide-caption\">
                        <h3>Tests et cours gratuits</h3>
                        <p>Accédez gratuitement à une diversité de cours et des tests de type examen. </p>
                    </article>
                </li>

            </ul>
        </section>
    </div>
    <!-- FlexSlider / End -->
    <div class=\"page-content\">
        <div class=\"container\">
            <div class=\"eight column\">
                <div class=\"large-notice\">
                    <h2>Cours gratuits</h2>
                    <p class=\"one-third column\">This is example of style component for calling extra attention to featured content or information.</p>
                    <br>
                    <a href=\"#\" class=\"button medium color\">Accéder aux cours</a>
                </div>

            </div>
            <div class=\"eight column\">
                <div class=\"large-notice\">
                    <h2>Tests gratuits</h2>
                    <p class=\"one-third column\">This is example of style component for calling extra attention to featured content or information.</p>
                    <br>
                    <a href=\"#\" class=\"button medium color\">Passer un test</a>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 53
    public function block_navigation($context, array $blocks = array())
    {
        // line 54
        echo "
    <li><a href=\".html\"><i class=\"halflings white calendar\"></i> Calendrier</a></li>
   
    ";
        // line 57
        $this->displayParentBlock("navigation", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Candidat:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 57,  102 => 54,  99 => 53,  61 => 18,  54 => 13,  51 => 12,  41 => 4,  38 => 3,  11 => 1,);
    }
}
