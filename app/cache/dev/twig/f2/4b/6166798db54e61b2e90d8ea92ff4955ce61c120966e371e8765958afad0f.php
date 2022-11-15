<?php

/* EntidadesBundle:Proyecto:new.html.twig */
class __TwigTemplate_f24b6166798db54e61b2e90d8ea92ff4955ce61c120966e371e8765958afad0f extends Twig_Template
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
        // line 6
        echo "<div class=\"panel span6 offset1\">
        <div class=\"panel-header\">

            <h3>Registro de  proyecto</h3>
        </div>
        <div class=\"panel-body\">

            <div class=\"span6 offset3\">
                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <br>
                <div class=\"pull-right\">
                    <button type=\"submit\" class=\"btn\"  />Aceptar</button>

                    <a class=\"btn\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("proyecto", array("reject" => true));
        echo "\">
                        Cancelar
                    </a>
                </div>
                <br>
                ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:Proyecto:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 25,  55 => 20,  47 => 15,  43 => 14,  33 => 6,  30 => 3,  25 => 2,);
    }
}
