<?php

/* CdlrcodeBundle:Cours:ajout.html.twig */
class __TwigTemplate_bcf3566898a1036c7dd45746cf4d6c94b6037eb42dcac81b8fedafc307b6dc4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form class=\"form\" method=\"post\" enctype=\"multipart/form-data\" align=\"center\" >
    <h2>Ajouter un cours</h2>
    <table>
        <tr>
            <th>Titre</th><td><input type=\"text\" name=\"fichier\">
            </td>
        </tr>
        <tr>
            <th>Catégorie</th>
            <td>
                <select>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>

                </select>
            </td>
        </tr>
        <tr>
            <TD>
                <input type=\"file\"</td>
            <td><button class=\"btn\" type=\"\"submit>Upload</button>

            </td>
        </tr>
    </table>
</form>";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Cours:ajout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
