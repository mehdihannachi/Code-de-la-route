<?php

/* CdlrcodeBundle:Registration:gerant.form.html.twig */
class __TwigTemplate_15771c06e9cfee005fe2533dd828f2059241a9b8e72549c15d01d4a80ea9421e extends Twig_Template
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
        echo "    ";
        // line 5
        echo "
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("gerant_registration");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div>
            <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "CdlrcodeBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Registration:gerant.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  50 => 7,  44 => 6,  41 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
