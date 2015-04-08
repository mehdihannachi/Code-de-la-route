<?php

/* CdlrcodeBundle:Question:reponse2.html.twig */
class __TwigTemplate_b7017b1c74f1a8880d36fcd0e8a28d80a04dd176c1f7a759cca264ecca5c7640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("CdlrcodeBundle::layoutfarid.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CdlrcodeBundle::layoutfarid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"eight columns\" style=\"margin-left: 50px; margin-top: 50px\">


        <h3 class=\"margin-reset\">Votre résultat</h3><br />


        <ul class=\"tabs-nav\">
            <li class=\"active\"><a href=\"#tab1\">Résultat</a></li>
            <li><a href=\"#tab2\">Solution</a></li>

        </ul>

        <!-- Tabs Content -->
        <div class=\"tabs-container\">
            <div class=\"tab-content\" id=\"tab1\">
                <h4> <u> Vous avez obtenu: </u> </h4> <br>
                <h1> <b> <font color='green'> ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "html", null, true);
        echo " /5 </font> </b> </h1> <br>
                <h2> <b> Felicitations! </b> </h2> <br>
                <p>  <b> Vous avez obtenu votre code de la route! </b> </p> <br>    
            </div>
            <div class=\"tab-content\" id=\"tab2\">
                <ul id=\"accordion\">
                    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 29
            echo "                        <h3> Question ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "questionId", array()), "html", null, true);
            echo "</h3>
                        <div>
                            ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "contenu", array()), "html", null, true);
            echo " <br>
                            ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "bonneReponse", array()), "html", null, true);
            echo "<br>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </ul>
            </div>
        </div>

    </div>

    <div style=\"margin-left: 50px; margin-bottom: 50px\" >      
        <a class=\"button medium color\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_show", array("id" => 1, "note" => 0)), "html", null, true);
        echo "\" >
            Refaire le test
        </a> 

        <a class=\"button medium color\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("cdlrcode_accueil");
        echo "\">
            Quitter
        </a>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Question:reponse2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 46,  99 => 42,  90 => 35,  81 => 32,  77 => 31,  71 => 29,  67 => 28,  58 => 22,  39 => 5,  36 => 4,  11 => 2,);
    }
}
