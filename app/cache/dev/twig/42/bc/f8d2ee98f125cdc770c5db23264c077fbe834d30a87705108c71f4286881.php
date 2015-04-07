<?php

/* CdlrcodeBundle:Ecole:accueil.html.twig */
class __TwigTemplate_42bcf8d2ee98f125cdc770c5db23264c077fbe834d30a87705108c71f4286881 extends Twig_Template
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
        echo "    <div id=\"content\">
        <!-- FlexSlider  -->

        <section class=\"flexslider home\">
            <ul class=\"slides\">
                <li><img src=\"";
        // line 9
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

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Ecole:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
