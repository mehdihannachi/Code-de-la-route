<?php

/* CdlrcodeBundle:CoursVideo:show.html.twig */
class __TwigTemplate_86ce9da537d44ea4599edeb9749d3fb6b651e961ff449dec76cffd89179b6698 extends Twig_Template
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
        <h1>CoursVideo</h1>



        <video src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("uploads/videos/") . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array())), "html", null, true);
        echo "\" controls>     </video>     


            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("coursvideo");
        echo "\">
                        Back to the list
                    </a>
                </li>
              
                <li>";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:CoursVideo:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  54 => 13,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
