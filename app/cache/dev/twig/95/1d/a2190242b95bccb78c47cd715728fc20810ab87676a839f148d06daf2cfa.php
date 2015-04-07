<?php

/* CdlrmailBundle:Default:mail.html.twig */
class __TwigTemplate_951da2190242b95bccb78c47cd715728fc20810ab87676a839f148d06daf2cfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CdlrmailBundle::contact.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'X' => array($this, 'block_X'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CdlrmailBundle::contact.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_X($context, array $blocks = array())
    {
        // line 4
        echo "
<body>
<h3><p> Contacter nous </p></h3>
<p>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
<hr>
<form role=\"form\" id=\"fr\" method=\"POST\" action='";
        // line 9
        echo $this->env->getExtension('routing')->getPath("my_app_mail_sendpage");
        echo "' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\" />
</form>
</body>
";
    }

    public function getTemplateName()
    {
        return "CdlrmailBundle:Default:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  49 => 9,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
