<?php

/* BladeTesterCalendarBundle:Event:group.html.twig */
class __TwigTemplate_3ce9998d5fc62dd350f89a0d06221211d861ac04df292ed40fe86a055254bdf7 extends Twig_Template
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
        if ((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events"))) {
            // line 2
            echo "    <ul class=\"schedule-group-appointments\">
        ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 4
                echo "            ";
                $this->env->loadTemplate("BladeTesterCalendarBundle:Event:listItem.html.twig")->display(array_merge($context, array("event" => $context["event"])));
                // line 5
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "BladeTesterCalendarBundle:Event:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  44 => 5,  41 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
