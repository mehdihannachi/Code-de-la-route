<?php

/* CdlrmailBundle:Default:mail.html.twig */
class __TwigTemplate_cc6e47713d4891d9751e53f7fff34cf0736e296a4fffc2ade8416f02be18691a extends Twig_Template
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
        echo "
    <div class=\"page-content\">
        <div class=\"container\">
            <h3><p> Nous contacter </p></h3>
            <p>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
            <hr>
            <form role=\"form\" id=\"fr\" method=\"POST\" action='";
        // line 10
        echo $this->env->getExtension('routing')->getPath("my_app_mail_sendpage");
        echo "' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <br>
                <input type=\"submit\" />
            </form>
        </div>
    </div>
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
        return array (  56 => 11,  50 => 10,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
