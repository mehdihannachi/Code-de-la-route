<?php

/* CdlrUserBundle:User:register.html.twig */
class __TwigTemplate_6666c62a7df6b539cd1f2f33a2892ff09993f66758172a9c70862fc3d4e50c9e extends Twig_Template
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
        // line 1
        echo "<div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">Register</a>
                </h4>
            </div>
            <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                <div class=\"panel-body\">
                    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">

                        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                        <button type=\"Submit\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit"), "html", null, true);
        echo "</button>

                    </form>
                </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "CdlrUserBundle:User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  35 => 10,  28 => 8,  19 => 1,);
    }
}
