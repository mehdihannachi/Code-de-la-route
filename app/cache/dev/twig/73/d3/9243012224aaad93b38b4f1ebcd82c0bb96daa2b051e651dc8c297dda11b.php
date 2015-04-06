<?php

/* CdlrcodeBundle:AutoEcole:index.html.twig */
class __TwigTemplate_73d39243012224aaad93b38b4f1ebcd82c0bb96daa2b051e651dc8c297dda11b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("CdlrcodeBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    &nbsp;
    <div class=\"container\">
        <div class=\"sixteen columns\">
            <!-- Headline -->
            <h3 class=\"margin-reset\">Liste des administrateurs</h3><br />

            <table class=\"standard-table\">
                <thead>
                    <tr>
                        <th>Nomauto</th>
                        <th>Region</th>
                        <th>Adresse</th>
                        <th>Tel</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                        <tr>
                            <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autoecole_show", array("id" => $this->getAttribute($context["entity"], "autoecoleId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomAuto", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "region", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tel", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul >
                                    <li>
                                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autoecole_show", array("id" => $this->getAttribute($context["entity"], "autoecoleId", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autoecole_edit", array("id" => $this->getAttribute($context["entity"], "autoecoleId", array()))), "html", null, true);
            echo "\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tbody>
            </table>

            <div align=\"center\">
                <ul>
                    <li>
                        <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("autoecole_new");
        echo "\" class=\"button color\">Ajouter auto-école</a>&nbsp;
                        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("autoecole_recherche");
        echo "\" class=\"button color\">Recherche par région</a>

                        </a>
                    </li>
                </ul>
            </div>       
        </div>
    </div>&nbsp;
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:AutoEcole:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 47,  112 => 46,  104 => 40,  92 => 34,  86 => 31,  79 => 27,  75 => 26,  71 => 25,  65 => 24,  62 => 23,  58 => 22,  39 => 5,  36 => 4,  11 => 2,);
    }
}
