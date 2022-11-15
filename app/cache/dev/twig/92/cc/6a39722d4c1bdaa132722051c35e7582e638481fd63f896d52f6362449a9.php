<?php

/* EntidadesBundle:RtfArquitectura:show.html.twig */
class __TwigTemplate_92cc6a39722d4c1bdaa132722051c35e7582e638481fd63f896d52f6362449a9 extends Twig_Template
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
            <h3>Rtf a la Arquitectura</h3>
        </div>

        <div class=\"panel-body\">

            <div class=\"span8 offset1\">
                <table class=\"record_list\">
                    <tbody>

                        <tr>
                            <th>Numero</th>
                            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numero"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Version</th>
                            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "version"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fechai</th>
                            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechai"), "Y-m-d"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fechaf</th>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaf"), "Y-m-d"), "html", null, true);
        echo "</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <ul class=\"record_actions\">

            <i class=\"icon icon-arrow-left\"></i>  <a class=\"btn-link\"href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("rtfarquitectura");
        echo "\">
                Volver
            </a>

            ";
        // line 42
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "                <i class=\"icon icon-edit\"></i>  <a class=\"btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rtfarquitectura_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                    Editar
                </a>
            ";
        }
        // line 47
        echo "
        </ul>
        <div class=\"span12\">
            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/plan.jpg"), "html", null, true);
        echo "\">
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:RtfArquitectura:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 50,  96 => 47,  88 => 43,  86 => 42,  79 => 38,  67 => 29,  60 => 25,  53 => 21,  46 => 17,  31 => 4,  28 => 3,);
    }
}
