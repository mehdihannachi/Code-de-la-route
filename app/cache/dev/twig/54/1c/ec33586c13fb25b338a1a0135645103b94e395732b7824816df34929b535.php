<?php

/* CdlrcodeBundle:Cours:show.html.twig */
class __TwigTemplate_541cec33586c13fb25b338a1a0135645103b94e395732b7824816df34929b535 extends Twig_Template
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
    <h1>Cours</h1>

    <table class=\"record_properties\" border=\"1\">
        <tbody>
            <tr>
                <th>Nom : </th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categorie : </th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url : </th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()), "html", null, true);
        echo "</td>
            </tr>
           
        </tbody>
    </table>

        <ul class=\"record_actions\">
 
    <li>
       
        <iframe id=\"viewer\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ViewerJs/index.html"), "html", null, true);
        echo "#";
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/documents/") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array())), "html", null, true);
        echo "\" seamless width='400' height='300' allowfullscreen webkitallowfullscreen></iframe>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coursid", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("cours");
        echo "\">
            Back to the list
        </a></li>
</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Cours:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  88 => 33,  81 => 29,  75 => 28,  62 => 18,  55 => 14,  48 => 10,  39 => 3,  36 => 2,  11 => 1,);
    }
}
