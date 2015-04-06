<?php

/* CdlrcodeBundle:AutoEcole:show.html.twig */
class __TwigTemplate_5497c402dd100abc1198903bdfc7da1bc7c7b2266721dcbab59c61196789ecc8 extends Twig_Template
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
        echo "    &nbsp;
    <div class=\"container\">
        <div class=\"sixteen columns\">
            <!-- Headline -->
            <h3 class=\"margin-reset\">Auto-école</h3><br />

            <table class=\"standard-table\">
        <tbody>
            <tr>
                <th>Nomauto</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomAuto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Region</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "region", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
<div align=\"center\">
                <ul>
                    <li>
                        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("autoecole");
        echo "\" class=\"button color\">retour</a>&nbsp;
                        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autoecole_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "autoecoleId", array()))), "html", null, true);
        echo "\" class=\"button color\">Modifier</a>&nbsp;
                        <a>";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo " </a> 
                    </li>
                </ul>
            </div>       
        </div>
    </div>&nbsp;
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:AutoEcole:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  86 => 34,  82 => 33,  72 => 26,  65 => 22,  58 => 18,  51 => 14,  39 => 4,  36 => 3,  11 => 1,);
    }
}
