<?php

/* BladeTesterCalendarBundle:Event:base.html.twig */
class __TwigTemplate_20c84259b6962d98ce286b37ba8bc7e944cd8fbc5cbf317d49047a447a9d2729 extends Twig_Template
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
            'calendar_date_selector' => array($this, 'block_calendar_date_selector'),
            'calendar_sidebar' => array($this, 'block_calendar_sidebar'),
            'calendar_body' => array($this, 'block_calendar_body'),
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
        echo "    <h1 class=\"main-title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.agenda"), "html", null, true);
        echo "</h1>

    <nav>
        <ul class=\"tabs-btn\">
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("calendar_event_list");
        echo "\" class=\"btn tab-btn tab-first";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "calendar_event_list")) {
            echo " active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.agenda"), "html", null, true);
        echo "</a>
            </li>
            <li>
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_day", array("year" => twig_date_format_filter($this->env, "now", "Y"), "month" => twig_date_format_filter($this->env, "now", "m"), "day" => twig_date_format_filter($this->env, "now", "d"))), "html", null, true);
        echo "\" class=\"btn tab-btn tab-middle";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "calendar_event_list_by_day")) {
            echo " active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.day"), "html", null, true);
        echo "</a></li>
            <li>
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_week", array("year" => twig_date_format_filter($this->env, "now", "Y"), "month" => twig_date_format_filter($this->env, "now", "m"), "day" => twig_date_format_filter($this->env, "now", "d"))), "html", null, true);
        echo "\" class=\"btn tab-btn tab-middle";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "calendar_event_list_by_week")) {
            echo " active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.week"), "html", null, true);
        echo "</a></li>
            <li>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_month", array("year" => twig_date_format_filter($this->env, "now", "Y"), "month" => twig_date_format_filter($this->env, "now", "m"))), "html", null, true);
        echo "\" class=\"btn tab-btn tab-last";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "calendar_event_list_by_month")) {
            echo " active";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.month"), "html", null, true);
        echo "</a></li>
        </ul>
    </nav>

    <nav class=\"list-options\">
        <ul class=\"list-inline column w-20\">
            <li>
                <a id=\"calendar-event-add-btn\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("calendar_event_add");
        echo "?destination=";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "html", null, true);
        echo "&year=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "Y"), "html", null, true);
        echo "&month=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "m"), "html", null, true);
        echo "&day=";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "d"), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.event.add"), "html", null, true);
        echo "</a>
            </li>
        </ul>
        <ul class=\"list-inline column w-80 t-align-right\">
            <li><a class=\"btn\" href=\"#\" onclick=\"window.print();return false;\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.print"), "html", null, true);
        echo "</a></li>
            <li><a class=\"btn\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("calendar_settings");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.label.settings"), "html", null, true);
        echo "</a></li>
        </ul>
    </nav>

    <section class=\"main-content\">
        <div class=\"schedule\">
            <section class=\"schedule-nav\">
                ";
        // line 35
        $this->displayBlock('calendar_date_selector', $context, $blocks);
        // line 37
        echo "                ";
        $this->displayBlock('calendar_sidebar', $context, $blocks);
        // line 40
        echo "            </section>

            ";
        // line 42
        $this->displayBlock('calendar_body', $context, $blocks);
        // line 44
        echo "        </div>
    </section>
";
    }

    // line 35
    public function block_calendar_date_selector($context, array $blocks = array())
    {
        // line 36
        echo "                ";
    }

    // line 37
    public function block_calendar_sidebar($context, array $blocks = array())
    {
        // line 38
        echo "                    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("BladeTesterCalendarBundle:Calendar:showMini", array("year" => twig_date_format_filter($this->env, "now", "Y"), "month" => twig_date_format_filter($this->env, "now", "m"))), array());
        // line 39
        echo "                ";
    }

    // line 42
    public function block_calendar_body($context, array $blocks = array())
    {
        // line 43
        echo "            ";
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 43,  168 => 42,  164 => 39,  161 => 38,  158 => 37,  154 => 36,  151 => 35,  145 => 44,  143 => 42,  139 => 40,  136 => 37,  134 => 35,  122 => 28,  118 => 27,  101 => 23,  85 => 16,  74 => 14,  63 => 12,  51 => 9,  42 => 4,  39 => 3,  11 => 1,);
    }
}
