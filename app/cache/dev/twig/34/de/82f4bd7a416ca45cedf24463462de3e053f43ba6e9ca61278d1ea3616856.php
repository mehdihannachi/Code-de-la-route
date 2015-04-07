<?php

/* BladeTesterCalendarBundle:Calendar:showMini.html.twig */
class __TwigTemplate_34de82f4bd7a416ca45cedf24463462de3e053f43ba6e9ca61278d1ea3616856 extends Twig_Template
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
        echo "<div id=\"mini-calendar\" class=\"dpdiv goog-zippy-expanded goog-zippy-content\">
    <div class=\"dp-monthtablediv monthtableSpace\">
        <table></table>
        <table class=\"dp-monthtable monthtableBody\" summary=\"Minicalendario - marzo de 2013\" cellspacing=\"0\" cellpadding=\"0\" id=\"dp_0_tbl\">
            <tbody>
                <tr class=\"dp-days\">
                    <th scope=\"col\" class=\"dp-cell dp-dayh\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Monday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.monday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tuesday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.tuesday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh\" title=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Wednesday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.wednesday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh\" title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Thursday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.thursday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh\" title=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Friday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.friday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh dp-cell dp-weekendh\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Saturday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.saturday"), "html", null, true);
        echo "</th>
                    <th scope=\"col\" class=\"dp-cell dp-dayh dp-cell dp-weekendh\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sunday"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("bladetester_calendar.abbr.sunday"), "html", null, true);
        echo "</th>
                </tr>
                ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 16
            echo "                    ";
            if ((($this->getAttribute($context["loop"], "index0", array()) % 7) == 0)) {
                echo "<tr>";
            }
            // line 17
            echo "                        <td class=\"day";
            if ((twig_date_format_filter($this->env, $context["day"], "Y-m-d") == twig_date_format_filter($this->env, "today", "Y-m-d"))) {
                echo " today";
            }
            if ((twig_date_format_filter($this->env, $context["day"], "m") != twig_date_format_filter($this->env, "today", "m"))) {
                echo " offmonth";
            }
            echo "\">
                            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calendar_event_list_by_day", array("year" => twig_date_format_filter($this->env, $context["day"], "Y"), "month" => twig_date_format_filter($this->env, $context["day"], "m"), "day" => twig_date_format_filter($this->env, $context["day"], "d"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["day"], "d"), "html", null, true);
            echo "</a>
                        </td>
                    ";
            // line 20
            if ((($this->getAttribute($context["loop"], "index0", array()) % 7) == 6)) {
                echo "</tr>";
            }
            // line 21
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </tbody>
        </table>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Calendar:showMini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 22,  113 => 21,  109 => 20,  102 => 18,  92 => 17,  87 => 16,  70 => 15,  63 => 13,  57 => 12,  51 => 11,  45 => 10,  39 => 9,  33 => 8,  27 => 7,  19 => 1,);
    }
}
