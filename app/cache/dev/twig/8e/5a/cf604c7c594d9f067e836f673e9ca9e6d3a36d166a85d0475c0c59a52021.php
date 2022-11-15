<?php

/* EntidadesBundle:DocumentoArquitectura:edit.html.twig */
class __TwigTemplate_8e5acf604c7c594d9f067e836f673e9ca9e6d3a36d166a85d0475c0c59a52021 extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "::theme.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"panel span6 offset1\">
        <div class=\"panel-header\">
            <h3>Edición  de Documento</h3>
        </div>
        <div class=\"panel-body\">

            <div class=\"span6 offset3\">
                ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "version"), 'label');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "version"), 'widget', array("attr" => array("class" => "span12 ")));
        echo "

                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "aplicaAlProyecto"), 'widget', array("attr" => array("class" => "aplica")));
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "aplicaAlProyecto"), 'label');
        echo "


               
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "causaNoAplicar"), 'widget', array("attr" => array("class" => "span12 causa isRequired")));
        echo "
                <br>
                <br>
                <div class=\"pull-right\">
                    <button type=\"submit\" class=\"btn\"  />Aceptar</button>
                  ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                    <a class=\"btn\"href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documentoarquitectura", array("idexped" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idexped"), "id")), array("reject" => true)), "html", null, true);
        echo "\">
                        Cancelar
                    </a>
                  
                   
                </div>
                <br>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:DocumentoArquitectura:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  74 => 26,  66 => 21,  59 => 17,  55 => 16,  50 => 14,  46 => 13,  42 => 12,  33 => 5,  30 => 4,  25 => 2,);
    }
}
