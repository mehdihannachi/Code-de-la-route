<?php

/* CdlrUserBundle:User:edit.html.twig */
class __TwigTemplate_7841fc91cb9a7f704d0ce5c7cb2bb9ab75fb96e8325813353be3f799a73742dc extends Twig_Template
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
        echo "    <h1>Modifier Utilisateur</h1>


    <form id=\"contactform\" class=\"well\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        &nbsp;
        <div class=\"container\">
            <div class=\"sixteen columns\">
                <!-- Headline -->
                <h3 class=\"margin-reset\">Liste des administrateurs</h3><br />

                <table class=\"standard-table\" border=\"1\">
                    <tbody>
                        <tr>
                            <th>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'label', array("label" => "Nom"));
        echo "</th>
                            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'errors');
        echo "
                                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "</th>
                            <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'errors');
        echo "
                                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin", array()), 'label', array("label" => "CIN"));
        echo "</th>
                            <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin", array()), 'errors');
        echo "
                                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateNaissance", array()), 'label', array("label" => "Date de Naissance"));
        echo "</th>
                            <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateNaissance", array()), 'errors');
        echo "
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateNaissance", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel", array()), 'label', array("label" => "Téléphone"));
        echo "</th>
                            <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel", array()), 'errors');
        echo "
                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "region", array()), 'label', array("label" => "Région"));
        echo "</th>
                            <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "region", array()), 'errors');
        echo "
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "region", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label', array("label" => "Email"));
        echo "</th>
                            <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "</td>
                        </tr>
                        <tr>
                            <th>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "autoecole", array()), 'label', array("label" => "Auto-école"));
        echo "</th>
                            <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "autoecole", array()), 'errors');
        echo "
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "autoecole", array()), 'widget');
        echo "</td>
                        </tr>
                    </tbody>
                </table>

                <div style = \"display:none\"> ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'widget');
        echo "</div>
                <div style = \"display:none\"> ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'label');
        echo "</div>
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "



                        <button type=\"submit\" class=\"button color\">Modifier</button>


            </div>
        </div>&nbsp;
    </form>
    <ul class=\"record_actions\">
        <li>
            ";
        // line 74
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()) == 1)) {
            // line 75
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("liste_admin");
            echo "\">Retour à la liste des administrateurs</a>
            ";
        } elseif (($this->getAttribute(        // line 76
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()) == 2)) {
            // line 77
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("liste_candidat");
            echo "\">Retour à la liste des candidats</a>
            ";
        } elseif (($this->getAttribute(        // line 78
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()) == 3)) {
            // line 79
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("liste_gerant");
            echo "\">Retour à la liste des gérants</a>
            ";
        } elseif (($this->getAttribute(        // line 80
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()) == 4)) {
            // line 81
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("liste_moniteur");
            echo "\">Retour à la liste des moniteurs</a>
            ";
        }
        // line 83
        echo "        </li>
        <li>";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "CdlrUserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 84,  226 => 83,  220 => 81,  218 => 80,  213 => 79,  211 => 78,  206 => 77,  204 => 76,  199 => 75,  197 => 74,  182 => 62,  178 => 61,  174 => 60,  166 => 55,  162 => 54,  158 => 53,  152 => 50,  148 => 49,  144 => 48,  138 => 45,  134 => 44,  130 => 43,  124 => 40,  120 => 39,  116 => 38,  110 => 35,  106 => 34,  102 => 33,  96 => 30,  92 => 29,  88 => 28,  82 => 25,  78 => 24,  74 => 23,  68 => 20,  64 => 19,  60 => 18,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
