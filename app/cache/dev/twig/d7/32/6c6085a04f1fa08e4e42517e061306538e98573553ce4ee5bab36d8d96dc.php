<?php

/* EntidadesBundle:Usuario:new.html.twig */
class __TwigTemplate_d7326c6085a04f1fa08e4e42517e061306538e98573553ce4ee5bab36d8d96dc extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "::theme.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"panel span6 offset1\">
        <div class=\"panel-header\">

            <h3>Registro de  usuario</h3>
        </div>
        <div class=\"panel-body\">

            <div class=\"span6 offset3\">
                ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <br>
                <div class=\"pull-right\">
                    <button type=\"submit\" class=\"btn\"  />Aceptar</button>
  
                    <a class=\"btn\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("usuario", array("reject" => true));
        echo "\">
                        Cancelar
                    </a>
                </div>
                <br>
                ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>


    ";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:Usuario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  55 => 19,  47 => 14,  43 => 13,  33 => 5,  30 => 3,  25 => 2,);
    }
}
