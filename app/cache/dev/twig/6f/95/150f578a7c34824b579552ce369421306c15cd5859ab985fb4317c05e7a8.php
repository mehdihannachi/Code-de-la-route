<?php

/* CdlrcodeBundle:Question:Upload.html.twig */
class __TwigTemplate_6f95150f578a7c34824b579552ce369421306c15cd5859ab985fb4317c05e7a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<img class=\"image\" src=\"data:image/jpeg;base64,";
        echo twig_escape_filter($this->env, (isset($context["response"]) ? $context["response"] : $this->getContext($context, "response")), "html", null, true);
        echo "\" /> 
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Question:Upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }
}
