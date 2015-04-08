<?php

/* CdlrcodeBundle::base.html.twig */
class __TwigTemplate_12b587f30acb185fc56241521b4ec9fa411e55ef70d09760a6e64f8788b78e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("CdlrcodeBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'container' => array($this, 'block_container'),
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
        echo "<html>
    <head>
        
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyASLkqFZIzy6z-T-FBIEtPV4caB-Q-ns-w\"> </script>
        <script type=\"text/javascript\">
            function initialize()
            {
                var lat=document.getElementById('lat').value;
                var long=document.getElementById('long').value;
                var marker;
                var mapOptions = { 
                //center: {lat: -34.397, lng:150.644}, 
                zoom: 8};
                var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
                var myLatlng= new google.maps.LatLng(long,lat);
                var mapOptions = {
                    zoom: 13,
                    center: myLatlng
                }
                    var map= new google.maps.Map(document.getElementById(\"map-canvas\"), mapOptions);
                    marker= new google.maps.Marker({position: myLatlng, map: map, title:\"Nous sommes ici\"});
            }
            google.maps.event.addDomListener(window,'load',initialize);
         </script>
    </head>
    <body>
        ";
        // line 30
        $this->displayBlock('container', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
    }

    // line 30
    public function block_container($context, array $blocks = array())
    {
        // line 31
        echo "        ";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  76 => 30,  70 => 32,  68 => 30,  40 => 4,  37 => 3,  11 => 2,);
    }
}
