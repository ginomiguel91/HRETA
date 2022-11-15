<?php

/* EntidadesBundle:Usuario:show.html.twig */
class __TwigTemplate_8ef76e06cefef31c0061c1e129f7076a89c4754bc1eed3d4908a9eab3bbfa38c extends Twig_Template
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
        // line 5
        echo "<div class=\"panel span6 offset1\">
        <div class=\"panel-header\">
            <h3>Usuario</h3>
        </div>
        <div class=\"panel-body\">

            <div class=\"span8 offset1\">
                <table class=\"records_list\">
                    <tbody>
                        <tr>
                            <th>Usuario</th>
                            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
        echo "</td>
                        </tr>

                        <tr>
                            <th>Correo</th>
                            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nombre</th>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Apellidos</th>
                            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos"), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <ul class=\"record_actions\">

            <i class=\"icon icon-arrow-left\"></i> <a  href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo "\">
                Volver
            </a>

            ";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 46
            echo "                <i class=\"icon icon-edit\"></i><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                    Editar
                </a>
            ";
        }
        // line 50
        echo "
        </ul>
        <div class=\"span12\">
            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/user.png"), "html", null, true);
        echo "\">
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:Usuario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 53,  101 => 50,  93 => 46,  91 => 45,  84 => 41,  73 => 33,  66 => 29,  59 => 25,  52 => 21,  44 => 16,  31 => 5,  28 => 3,);
    }
}
