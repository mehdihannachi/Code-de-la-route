<?php

/* CdlrcodeBundle:Notification:show.html.twig */
class __TwigTemplate_e20edff144f6dbfa5f8d872fc1223c2a1e4d18744d6dd9fe4f8fb4af3e413b33 extends Twig_Template
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
    <h1>Notification</h1>

    <table class=\"record_properties\" border=\"1\">
        <tbody>
            <tr>
                <th>Message</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "message", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Time</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "time", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iddestination</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDestination", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typedestination</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeDestination", array()), "html", null, true);
        echo "</td>
            </tr>
          
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("notification");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notification_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Notification:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  88 => 35,  80 => 30,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  39 => 3,  36 => 2,  11 => 1,);
    }
}
