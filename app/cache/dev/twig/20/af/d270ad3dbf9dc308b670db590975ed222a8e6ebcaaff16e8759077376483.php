<?php

/* EntidadesBundle:Proyecto:index.html.twig */
class __TwigTemplate_20afd270ad3dbf9dc308b670db590975ed222a8e6ebcaaff16e8759077376483 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"panel span9\">
        <div class=\"panel-header\">
            <h3>Listado de proyectos registrados</h3> 
        </div>
        <div class=\"panel-body\">

            <div class=\"span12\">
                <table id=\"grid_example\">
                    <thead >
                        <tr>

                            <th>Nombre</th>
                            <th>Versión</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "                            <tr>

                                ";
            // line 24
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idexped")) {
                // line 25
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
                echo "</td>
                                ";
            } else {
                // line 27
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
                echo "</td>
                                ";
            }
            // line 29
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "version"), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
            echo "</td>
                                <td>


                                    <ul style=\"list-style-type: none;\">
                                        <li>
                                            <i class=\" icon-search\"></i> <a class=\"btn-link\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Mostrar</a>

                                        </li>
                                        ";
            // line 39
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 40
                echo "                                            <li>
                                                <i class=\" icon-edit\"></i>  <a class=\"btn-link\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">Editar</a>

                                            </li>
                                            <li>
                                                <i class=\"icon-remove-circle\"></i><a id=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "\"href=\"#eliminar_modal\" role=\"button\" class=\"btn-link btn-remove\" data-toggle=\"modal\">Eliminar</a>

                                            </li>
                                        ";
            }
            // line 49
            echo "                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </tbody>
                </table>

                <ul class=\"pager\">
                    ";
        // line 57
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "                        <li>
                            <a  href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("proyecto_new");
            echo "\">Crear</a>
                        </li>
                    ";
        }
        // line 62
        echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"eliminar_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Confirmar eliminar</h4>
                </div>
                <div class=\"modal-body\">
                    ¿Est&aacute; seguro que quiere eliminar el elemento seleccionado?                                                
                </div>
                <div class=\"modal-footer\">

                    <!-- /.cambiar esto aki por start y end, borrar el comentario despues de arreglado -->
                    <form method=\"post\" class=\"text-center\" action=\"\">  
                        <input name=\"_method\" value=\"DELETE\" type=\"hidden\">
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-danger")));
        // line 83
        echo "
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        ";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


";
    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        // line 96
        echo "    <script>

        \$('.btn-remove').click(function() {
            var ruta = '";
        // line 99
        echo $this->env->getExtension('routing')->getPath("proyecto_delete", array("id" => "-1"));
        echo "';
            ruta = ruta.replace('-1', \$(this).attr('id'));
            \$('form').attr('action', ruta);
        });

        \$('[data-toggle=\"tooltip\"]').tooltip();

    </script>
";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:Proyecto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 99,  183 => 96,  180 => 95,  166 => 85,  162 => 83,  160 => 81,  139 => 62,  133 => 59,  130 => 58,  128 => 57,  122 => 53,  113 => 49,  106 => 45,  99 => 41,  96 => 40,  94 => 39,  88 => 36,  79 => 30,  74 => 29,  68 => 27,  62 => 25,  60 => 24,  56 => 22,  52 => 21,  32 => 3,  29 => 2,);
    }
}
