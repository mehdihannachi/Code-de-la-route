<?php

/* CdlrcodeBundle:Question:show.html.twig */
class __TwigTemplate_09b1f58c7eea4b2624431bfc5e1d03e1c69817d4c362756e11b6604d474a438b extends Twig_Template
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
        echo "    <div class=\"container floated\">
        <div class=\"sixteen floated page-title\" >
            <h2>Test</h2>
        </div>
    </div>
    <p align=\"center\"> <img  src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array())), "html", null, true);
        echo "\" style=\"margin-top:20px\"/> </p>

    <div class=\"large-notice\">        
        <h3>  <p align=\"center\" > ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu", array()), "html", null, true);
        echo " </p> </h3> <br>

        <form name= \"Reponses\"  method=\"POST\" >
            <div align=\"center\"><br>
                <input type=\"radio\" name=\"group1\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reponse1", array()), "html", null, true);
        echo "\"checked> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reponse1", array()), "html", null, true);
        echo "<br>
                <input type=\"radio\" name=\"group1\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reponse2", array()), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reponse2", array()), "html", null, true);
        echo " <br>
                <input type=\"radio\" name=\"group1\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reponse3", array()), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reponse3", array()), "html", null, true);
        echo "

            </div>

            <input type=\"submit\"  value=\"Question suivante\" />

        </form>
    </div>








";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Question:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  65 => 17,  59 => 16,  52 => 12,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
