<?php

/* CdlrcodeBundle:Default:sign-in.html.twig */
class __TwigTemplate_40b9fdda8b766708f2802c6c66703bbbd0bd9b51a512ec89b89a780094c90b68 extends Twig_Template
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
        echo "  <div id=\"page-content\">

        <div class=\"container\">
            <header><h1>Sign In</h1></header>
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3\">
                    <form role=\"form\" id=\"form-create-account\" method=\"post\" action=\"#\">
                        <div class=\"form-group\">
                            <label for=\"form-create-account-email\">Email:</label>
                            <input type=\"email\" class=\"form-control\" id=\"form-create-account-email\" required>
                        </div><!-- /.form-group -->
                        <div class=\"form-group\">
                            <label for=\"form-create-account-password\">Password:</label>
                            <input type=\"password\" class=\"form-control\" id=\"form-create-account-password\" required>
                        </div><!-- /.form-group -->
                        <div class=\"form-group clearfix\">
                            <button type=\"submit\" class=\"color button\" id=\"account-submit\">Sign to My Account</button>
                        </div><!-- /.form-group -->
                    </form>
                    <hr>
                    <div class=\"center\"><a href=\"#\">I don't remember my password</a></div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->  ";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Default:sign-in.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  11 => 1,);
    }
}
