<?php

/* BladeTesterCalendarBundle:Settings:index.html.twig */
class __TwigTemplate_aeb4abafd3cbc6670e18b8604804319df1889a1115ccf6a087168ad28f08c1a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BladeTesterCalendarBundle:Base:base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BladeTesterCalendarBundle:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.settings"), "html", null, true);
        echo "</h1>


    ";
        // line 7
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("BladeTesterCalendarBundle:Category:list"), array());
        // line 8
        echo "

    <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.configuration_parameters"), "html", null, true);
        echo "</h3>
    <form method=\"POST\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("calendar_settings_update");
        echo "\" id=\"calendar-settings\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.settings.update"), "html", null, true);
        echo "\" /> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("or"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getPath("calendar_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.back_to_calendar"), "html", null, true);
        echo "</a>
    </form>

";
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Settings:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  62 => 12,  56 => 11,  52 => 10,  48 => 8,  46 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
