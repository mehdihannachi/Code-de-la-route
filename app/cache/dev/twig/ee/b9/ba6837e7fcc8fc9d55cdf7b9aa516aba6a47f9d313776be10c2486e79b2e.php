<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_eeb9ba6837e7fcc8fc9d55cdf7b9aa516aba6a47f9d313776be10c2486e79b2e extends Twig_Template
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "            <div class=\"page-content\">


    <!-- 960 Container -->
    <div class=\"container\">

        <!-- Buttons
        ================================================== -->
            <div class=\"eight columns\">
";
        // line 16
        $this->env->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig")->display($context);
        // line 17
        echo "         </div>
    </div>
            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  39 => 7,  36 => 6,  11 => 1,);
    }
}
