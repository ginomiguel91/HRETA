<?php

/* EntidadesBundle:Proyecto:show.html.twig */
class __TwigTemplate_065d82978873ebf0b10dbbdc8edf23f03bef52cb5942324d67d2ab49212f0d59 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"panel span6 offset1\">
        <div class=\"panel-header\">
            <h3>Proyecto</h3>
        </div>
        <div class=\"panel-body\">

            <div class=\"span8 offset1\">
                <table class=\"record_actions\">
                    <tbody>

                        <tr>
                            <th>Nombre</th>
                            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Versión</th>
                            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "version"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Descripción</th>
                            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <ul class=\"record_actions\">


            <i class=\"icon-arrow-left\"></i><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "\">
                Volver
            </a>

            ";
        // line 39
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "
                <i class=\"icon-edit\"></i> <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                    Editar
                </a>
            ";
        }
        // line 45
        echo "
        </ul>
        <div class=\"span12\">
            <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/proyectos1.jpg"), "html", null, true);
        echo "\">
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:Proyecto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 48,  92 => 45,  85 => 41,  82 => 40,  80 => 39,  73 => 35,  59 => 24,  52 => 20,  45 => 16,  31 => 4,  28 => 3,);
    }
}
