<?php

/* EntidadesBundle:ExpedienteArquitectura:show.html.twig */
class __TwigTemplate_a2323d9db01dc2bec6290393076a2c405bcc95ada541e2403f10bf3953f61026 extends Twig_Template
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
        // line 4
        echo "<div class=\"panel span6 offset1\">
        <div class=\"panel-header\">
            <h3>Expediente de Arquitectura</h3>
        </div>
        <div class=\"panel-body\">

            <div class=\"span8 offset1\">
                <table class=\"record_actions\">
                    <tbody>

                        <tr>
                            <th>Versión</th>
                            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "version"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Datos del expediente</th>
                            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datosDelExpediente"), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <ul class=\"record_actions\">

            <i class=\"icon-arrow-left\"></i>   <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("expedientearquitectura");
        echo "\">
                Volver
            </a>

            ";
        // line 32
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 33
            echo "                <i class=\"icon-edit\"></i> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expedientearquitectura_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                    Editar
                </a>
            ";
        }
        // line 37
        echo "
        </ul>


    </div>

";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:ExpedienteArquitectura:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 37,  72 => 33,  70 => 32,  63 => 28,  52 => 20,  45 => 16,  31 => 4,  28 => 2,);
    }
}
