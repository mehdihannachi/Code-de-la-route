<?php

/* CdlrcodeBundle:Default:index.html.twig */
class __TwigTemplate_5fe37a7bbb70b50b40757ef09af728b78822566ad428b2c80598824d03d9bb98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("CdlrcodeBundle::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CdlrcodeBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "    <input id=\"lat\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")), "html", null, true);
        echo "\" />
    <input id=\"long\" type=\"hidden\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["long"]) ? $context["long"] : $this->getContext($context, "long")), "html", null, true);
        echo "\" />
    <div id=\"map-canvas\" style=\"widhth: 400px; height:400px\"></div>
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  39 => 4,  36 => 3,  11 => 2,);
    }
}
