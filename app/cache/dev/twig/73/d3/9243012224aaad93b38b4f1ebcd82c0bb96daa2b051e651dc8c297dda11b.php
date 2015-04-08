<?php

/* CdlrcodeBundle:AutoEcole:index.html.twig */
class __TwigTemplate_73d39243012224aaad93b38b4f1ebcd82c0bb96daa2b051e651dc8c297dda11b extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    &nbsp;
    <div class=\"container\">
        <div class=\"sixteen columns\">
            <!-- Headline -->
            <h3 class=\"margin-reset\"> Nos Auto-écoles </h3><br />

            <table class=\"standard-table\">
                <thead>
                    <tr>
                        <th>Nom de l'auto-école</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>Region</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                        <tr>
                            <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autoecole_show", array("id" => $this->getAttribute($context["entity"], "autoecoleId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomAuto", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tel", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reg"]) ? $context["reg"] : $this->getContext($context, "reg")), $this->getAttribute($context["entity"], "autoecoleId", array()), array(), "array"), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autoecole_show", array("id" => $this->getAttribute($context["entity"], "autoecoleId", array()))), "html", null, true);
            echo "\">Afficher détails</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autoecole_edit", array("id" => $this->getAttribute($context["entity"], "autoecoleId", array()))), "html", null, true);
            echo "\">Modifier</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autoecole_showmap", array("id" => $this->getAttribute($context["entity"], "autoecoleId", array()))), "html", null, true);
            echo "\">Afficher sur la carte</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </tbody>
            </table>
                
                <div style=\"margin-bottom: 50px\">
                    <a class=\"button medium color\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("autoecole_new");
        echo "\">
                        Ajouter une auto-école
                    </a>
                        <a class=\"button medium color\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("cdlrcode_accueil");
        echo "\">
                        Quitter
                        </a> </div>
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
        return array (  122 => 48,  116 => 45,  110 => 41,  98 => 35,  92 => 32,  86 => 29,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  39 => 3,  36 => 2,  11 => 1,);
    }
}
