<?php

/* CdlrcodeBundle:Cours:ajout.html.twig */
class __TwigTemplate_1cbdc7a8e99dd7137b3916edecef13cf35a3e74decf9acb56a328f2a98dbe9c2 extends Twig_Template
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
