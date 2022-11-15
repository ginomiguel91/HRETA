<?php

/* EntidadesBundle:Proyecto:graficaTipoProyectos.html.twig */
class __TwigTemplate_1aa6103061c6884c86760f0cf602a6a79d0dd27df2b803c80b4a8389ca9294e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"panel span9\">
        <div class=\"panel-header\">
            <h3>Proyectos por tipos</h3> 
        </div>
        <div class=\"panel-body\">

            <div class=\"span12\">
                <div id=\"canvas-holder\" class=\"offset3\" style=\"width: 50%\">
                    <canvas id=\"chart-area\" width=\"100\" height=\"100\"/>
                </div>

            </div>
        </div>
    </div>



";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "    <script  src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/chart/src/Chart.Core.js"), "html", null, true);
        echo "\"></script>
    <script  src= \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/chart/src/Chart.Doughnut.js"), "html", null, true);
        echo "\"></script>

    <script>


        var doughnutData =";
        // line 28
        echo twig_jsonencode_filter((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo " ;
                window.onload = function() {
                    var ctx = document.getElementById(\"chart-area\").getContext(\"2d\");
                    window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive: true});
                };


    </script>
";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:Proyecto:graficaTipoProyectos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  61 => 23,  56 => 22,  53 => 21,  32 => 3,  29 => 2,);
    }
}
