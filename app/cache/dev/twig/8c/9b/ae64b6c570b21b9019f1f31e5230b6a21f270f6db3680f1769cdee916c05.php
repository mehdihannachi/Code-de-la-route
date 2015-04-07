<?php

/* CdlrcodeBundle:Cours:index.html.twig */
class __TwigTemplate_8c9bae64b6c570b21b9019f1f31e5230b6a21f270f6db3680f1769cdee916c05 extends Twig_Template
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
    <h1>La liste des cours</h1>

  
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "            <h1><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_show", array("id" => $this->getAttribute($context["entity"], "coursId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</h1>
               ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "categorie", array()), "html", null, true);
            echo "
               ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "path", array()), "html", null, true);
            echo "
              
                <ul>
                    <li>
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_show", array("id" => $this->getAttribute($context["entity"], "coursId", array()))), "html", null, true);
            echo "\">Afficher</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_edit", array("id" => $this->getAttribute($context["entity"], "coursId", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </li>
                </ul>
     
         
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "     

        <ul>
        <li>
            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("cours_create");
        echo "\">
                Ajouter un cours
            </a>
        </li>
    </ul>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Cours:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  85 => 23,  73 => 17,  67 => 14,  60 => 10,  56 => 9,  49 => 8,  45 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
