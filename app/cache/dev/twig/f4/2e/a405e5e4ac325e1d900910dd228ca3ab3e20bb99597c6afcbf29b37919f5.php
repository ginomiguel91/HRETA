<?php

/* EntidadesBundle:Default:acercade.html.twig */
class __TwigTemplate_f42ea405e5e4ac325e1d900910dd228ca3ab3e20bb99597c6afcbf29b37919f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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





    <div class=\"panel span9\">
        <div class=\"panel-header\">

            <h3>Acerca de...</h3>
        </div>
        <div class=\"panel-body\">


            <p class=\"text-left\">

                HRETA es una herramienta que contribuirá a automatizar el  proceso de Revisiones Técnicas Formales dirigido a la Arquitectura de un proyecto. La herramienta que se presenta aligera la carga de los revisores al realizar una evaluación preliminar de aspectos automatizables de los  diferentes artefactos  y vistas de la Arquitectura. Se espera con esta herramienta propuesta favorecer la realización de revisiones, con lo cual mejorará la calidad del software al reducir la inyección y propagación de defectos .

                Disfrútela !!!
            </p>

            <div class=\"logo2\"><img class=\"img_logo\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></div>

            <h4>Desarrolladores :</h4>
            <div class=\"row-fluid\">
                <div class=\" span6\">
                    <h3> Gino Miguel Ricardo González</h3>
                    <img class=\"img_logo\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/gino.jpg"), "html", null, true);
        echo "\" style=\"width:200px; height: 200px; margin-left: 0px!important\"></div>
                <div class=\"span6\">
                    <h3 style=\"\"> Yairon Consuegra Cabrera</h3>
                    <img class=\"img_logo \" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/yairon.jpg"), "html", null, true);
        echo "\" style=\"width:200px; height: 200px; margin-left: 0px!important\"></div>
            </div>
        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:Default:acercade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 33,  63 => 30,  54 => 24,  31 => 3,  28 => 2,);
    }
}
