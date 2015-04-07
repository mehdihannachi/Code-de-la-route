<?php

/* BladeTesterCalendarBundle:Event:listItem.html.twig */
class __TwigTemplate_6e80049261b5b1b53cf2bf975f67aba9471d9e0eef66e04749e7c7d947e17132 extends Twig_Template
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
        echo "<li class=\"appointment ";
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array())) {
            echo "appointment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array()), "color", array()), "html", null, true);
        }
        echo "\">";
        $this->env->loadTemplate("BladeTesterCalendarBundle:Event:event.html.twig")->display(array_merge($context, array("event" => (isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")))));
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:listItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
