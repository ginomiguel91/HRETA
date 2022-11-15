<?php

/* EntidadesBundle:DocumentoArquitectura:index.html.twig */
class __TwigTemplate_1199eb83234ded3d07aa1ee50c19bd5bb5eff4f53cb20b231f7c6c1ee195e961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "<div class=\"panel span9\">
        <div class=\"panel-header\">
            <h3>Listado de Documentos Registrados</h3> 
        </div>
        <div class=\"panel-body\">

            <div class=\"span12\">



                <table id=\"grid_example\">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Versión</th>
                            <th>Aplica al proyecto</th>
                            <th>Causa no aplicar</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "                            <tr>
                                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evalDocument", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "idexped" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idexped"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tblTipoDocid"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "version"), "html", null, true);
            echo "</td>

                                ";
            // line 30
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aplicaAlProyecto")) {
                // line 31
                echo "                                    <td>SI</td>
                                ";
            } else {
                // line 33
                echo "                                    <td>NO</td>
                                ";
            }
            // line 35
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "causaNoAplicar"), "html", null, true);
            echo "</td>
                                <td>


                                    <ul style=\"list-style-type: none;\">
                                        <li>
                                            <i class=\" icon-search\"></i> <a class=\"btn-link\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documentoarquitectura_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "idexped" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idexped"), "id"))), "html", null, true);
            echo "\">Mostrar</a>

                                        </li>
                                        <li>
                                            <i class=\" icon-edit\"></i>  <a class=\"btn-link\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documentoarquitectura_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "idexped" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idexped"), "id"))), "html", null, true);
            echo "\">Editar</a>

                                        </li>
                                        <!--  <li>
                                              <i class=\"icon-remove-circle\"></i><a id=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\"href=\"#eliminar_modal\" role=\"button\" class=\"btn-link btn-remove\" data-toggle=\"modal\">Eliminar</a>
  
                                          </li> -->
                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </tbody>
                </table>

                <ul class=\"pager\">
                    <!--
                    <li>
                        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documentoarquitectura_new", array("idexped" => (isset($context["idexped"]) ? $context["idexped"] : $this->getContext($context, "idexped")))), "html", null, true);
        echo "\">
                            Crear Documento
                        </a>
                    </li>
                    -->
                </ul>

            </div>
        </div>
    </div>        



";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        echo "
";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:DocumentoArquitectura:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 77,  146 => 76,  128 => 62,  120 => 56,  107 => 49,  100 => 45,  93 => 41,  83 => 35,  79 => 33,  75 => 31,  73 => 30,  68 => 28,  62 => 27,  59 => 26,  55 => 25,  32 => 4,  29 => 3,);
    }
}
