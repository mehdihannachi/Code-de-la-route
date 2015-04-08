<?php

/* CdlrUserBundle:User:LoginRegister.html.twig */
class __TwigTemplate_038f7de7465f25b550902c21f0d459304a25a125641e05b163704378add6d0e6 extends Twig_Template
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

                <!-- Headline -->
                <h3 class=\"margin-reset\">Login</h3><br />
                <form class=\"cd-form\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fos_csrf_provider"]) ? $context["fos_csrf_provider"] : $this->getContext($context, "fos_csrf_provider")), "generateCsrfToken", array(0 => "authenticate"), "method"), "html", null, true);
        echo "\" />
                    <p class=\"fieldset\">

                        <label class=\"image-replace cd-email\" for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username"), "html", null, true);
        echo "</label>
                        <input class=\"full-width has-padding has-border\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        if (array_key_exists("last_username", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo " ";
        }
        echo "\" placeholder=\"E-mail\" required=\"required\" />
                        <span class=\"cd-error-message\">Error message here!</span>
                    </p>
                    <p class=\"fieldset\">

                        <label class=\"image-replace cd-password\" for=\"password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password"), "html", null, true);
        echo "</label>
                        <input class=\"full-width has-padding has-border\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                        <a href=\"#0\" class=\"hide-password\">Hide</a>
                    </p>
                    <p class=\"fieldset\">

                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>
                    </p>
                    <p class=\"fieldset\">

                        <input type=\"submit\"  name=\"_submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "\" />
                    </p>
                </form>
            </div>
                                <div class=\"eight columns\">
                <h3 class=\"margin-reset\">Login</h3><br />

                                                                    ";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CdlrUserBundle:Registration:regForm"));
        echo "

            </div>
</div> </div> 

        ";
    }

    public function getTemplateName()
    {
        return "CdlrUserBundle:User:LoginRegister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  96 => 40,  89 => 36,  79 => 29,  67 => 24,  63 => 23,  57 => 20,  53 => 19,  39 => 7,  36 => 6,  11 => 1,);
    }
}
