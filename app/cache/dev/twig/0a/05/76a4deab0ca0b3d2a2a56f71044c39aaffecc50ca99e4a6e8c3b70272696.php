<?php

/* CdlrcodeBundle:AutoEcole:recherche.html.twig */
class __TwigTemplate_0a0576a4deab0ca0b3d2a2a56f71044c39aaffecc50ca99e4a6e8c3b70272696 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div align=\"center\">
<h1>Recherche Autoecole par Région</h1>
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "

<h2>Liste des autoecoles</h2>
<table  class=\"records_list\" border=\"1\">
    <tr>
                <th>Nomauto</th>
                <th>Region</th>
                <th>Adresse</th>
                <th>Tel</th>
               <th>Actions</th>

    </tr>
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autoecoles"]) ? $context["autoecoles"] : $this->getContext($context, "autoecoles")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "    <tr>
                        <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autoecole_show", array("id" => $this->getAttribute($context["entity"], "autoecoleId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomAuto", array()), "html", null, true);
            echo "</a></td>

                 <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "region", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tel", array()), "html", null, true);
            echo "</td>
                 <td>
                <ul  >
                    <li>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autoecole_show", array("id" => $this->getAttribute($context["entity"], "autoecoleId", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 31
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
        // line 37
        echo "    
</table>
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:AutoEcole:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  93 => 31,  87 => 28,  80 => 24,  76 => 23,  72 => 22,  65 => 20,  62 => 19,  58 => 18,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
