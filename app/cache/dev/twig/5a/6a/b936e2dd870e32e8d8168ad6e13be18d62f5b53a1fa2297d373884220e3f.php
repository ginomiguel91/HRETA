<?php

/* EntidadesBundle:Proyecto:graficaVistaAspectos.html.twig */
class __TwigTemplate_5a6ab936e2dd870e32e8d8168ad6e13be18d62f5b53a1fa2297d373884220e3f extends Twig_Template
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
            <h3>Aspectos por vistas</h3> 
        </div>
        <div class=\"panel-body\">

            <div class=\"span12\">
                <div style=\"width:100%\">
                    <div>
                        <canvas id=\"canvas\" height=\"450\" width=\"600\"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </div>



";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "    <script  src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/chart/src/Chart.Core.js"), "html", null, true);
        echo "\"></script>
    <script  src= \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/chart/src/Chart.Bar.js"), "html", null, true);
        echo "\"></script>


 
    <script>

        var lineChartData = {
            labels:";
        // line 32
        echo twig_jsonencode_filter((isset($context["vista"]) ? $context["vista"] : $this->getContext($context, "vista")));
        echo ",
                    datasets: [
                        {
                            label: \"My Second dataset\",
                            fillColor: \"rgba(151,187,205,0.2)\",
                            strokeColor: \"rgba(151,187,205,1)\",
                            pointColor: \"rgba(151,187,205,1)\",
                            pointStrokeColor: \"#fff\",
                            pointHighlightFill: \"#fff\",
                            pointHighlightStroke: \"rgba(151,187,205,1)\",
                            data: ";
        // line 42
        echo twig_jsonencode_filter((isset($context["aspectos"]) ? $context["aspectos"] : $this->getContext($context, "aspectos")));
        echo ",
                        }
                    ]

        }

        window.onload = function() {
            var ctx = document.getElementById(\"canvas\").getContext(\"2d\");
            window.myLine = new Chart(ctx).Bar(lineChartData, {
                responsive: true
            });
        }


    </script>
";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:Proyecto:graficaVistaAspectos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 42,  73 => 32,  63 => 25,  58 => 24,  55 => 23,  32 => 3,  29 => 2,);
    }
}
