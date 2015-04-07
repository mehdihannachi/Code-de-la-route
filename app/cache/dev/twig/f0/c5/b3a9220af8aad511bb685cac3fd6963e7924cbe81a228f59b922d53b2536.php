<?php

/* BladeTesterCalendarBundle:Category:add.html.twig */
class __TwigTemplate_f0c5b3a9220af8aad511bb685cac3fd6963e7924cbe81a228f59b922d53b2536 extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.title.category.add"), "html", null, true);
        echo "</h1>

<form id=\"category-add\" method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("calendar_category_add");
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "destination"), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        $this->env->loadTemplate("BladeTesterCalendarBundle:Category:form.html.twig")->display($context);
        // line 8
        echo "    <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.category.add"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Category:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  53 => 7,  45 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
