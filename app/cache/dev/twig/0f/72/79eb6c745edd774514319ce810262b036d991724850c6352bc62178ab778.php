<?php

/* EntidadesBundle:Default:index.html.twig */
class __TwigTemplate_0f7279eb6c745edd774514319ce810262b036d991724850c6352bc62178ab778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "
    <div class=\"span9\" style=\"position:relative;z-index: 0;\">
        <div class=\"align-fix\">
            <div style=\"margin-bottom: 18px;\" class=\"tabbable\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab1\">Inicio</a></li>
                    <li class=\"\"><a data-toggle=\"tab\" href=\"#tab2\">Centro FORTES</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div id=\"tab1\" class=\"tab-pane active\">
                        <div class=\"row-fluid\">

                        </div>


                        <div class=\"panel\">

                            <div class=\"panel-body\">
                                <div class=\"alert alert-block\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                    <h4>Bienvenido(a):</h4>
                                    La Arquitectura es única , la evaluación de la Calidad es suya ...
                                </div>

                                <form class=\"bs-docs-example form-horizontal\">
                                    <div class=\"row-fluid\">

                                        <div class=\"logo2\"><img class=\"img_logo\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/portada_center.png"), "html", null, true);
        echo "\" alt=\"\"></div>

                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                    <div id=\"tab2\" class=\"tab-pane\">

                        <div class=\"row-fluid\">

                            <strong>Misión:</strong>

                            <p class=\"text-left\">Desarrollar tecnologías que permitan ofrecer servicios y productos para la implementación de soluciones de formación, aplicando las TIC, en las organizaciones, con los respectivos modelos de formación y sus condiciones tecnológicas; garantizando así la calidad de las soluciones y el desarrollo formativo de los recursos humanos, a partir de investigaciones que combinen los contenidos pedagógicos, comunicativos y tecnológicos más avanzados, integrando así los procesos académicos, productivos e investigativos. </p>
                            <strong>Visión:</strong>
                            <p>
                                Centro especializado en tecnologías para la formación; a partir de los proyectos y contratos que establece se posibilita la visibilidad; la calidad en las producciones que desarrolla y las investigaciones científicas de alto valor agregado.

                                Posee alianzas estratégicas y convenios con organizaciones y comunidades de desarrollo internacionales, que permiten desarrollar proyectos y participar en redes interdisciplinarias e interinstitucionales afines a las líneas de investigación y desarrollo del Centro.

                            </p>   
                            <div class=\"logo2\"><img class=\"img_logo\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/Iogo-fortes-large.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                        </div>  

                    </div>

                </div>
            </div>
            <!--/row-->
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 53,  60 => 30,  31 => 3,  28 => 2,);
    }
}
