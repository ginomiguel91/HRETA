<?php

/* EntidadesBundle:InformeNc:new.html.twig */
class __TwigTemplate_f643129b8ac7c12dbb7a919df0527723104132d69f4361711191f33b97b566fd extends Twig_Template
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
        // line 4
        echo "<div class=\"panel span6 offset1\">
        <div class=\"panel-header\">

            <h3>Registro de  informe</h3>
        </div>
        <div class=\"panel-body\">

            <div class=\"span6 offset3\">
                ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <br>
                <div class=\"pull-right\">
                    <button type=\"submit\" class=\"btn\"  />Aceptar</button>

                    <a class=\"btn\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("informenc", array("reject" => true));
        echo "\">
                        Cancelar
                    </a>
                </div>
                <br>
                ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:InformeNc:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  55 => 18,  47 => 13,  43 => 12,  33 => 4,  30 => 3,  25 => 2,);
    }
}
