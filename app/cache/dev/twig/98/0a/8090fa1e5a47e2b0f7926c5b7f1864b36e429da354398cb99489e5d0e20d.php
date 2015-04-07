<?php

/* CdlrcodeBundle:VenteVoiture:show.html.twig */
class __TwigTemplate_980a8090fa1e5a47e2b0f7926c5b7f1864b36e429da354398cb99489e5d0e20d extends Twig_Template
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
        echo "    <div align=\"center\">
    <h1>VenteVoiture</h1>

    <table class=\"record_properties\" border=\"1\">
        <tbody>
            <tr>
                <th>Titre</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kilometrage</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "kilometrage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marque</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "marque", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Annonceid</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "annonceId", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ventevoiture");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ventevoiture_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "annonceId", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:VenteVoiture:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 46,  101 => 42,  93 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  39 => 3,  36 => 2,  11 => 1,);
    }
}
