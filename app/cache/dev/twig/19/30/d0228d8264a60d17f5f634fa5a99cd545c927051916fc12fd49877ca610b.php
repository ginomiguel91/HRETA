<?php

/* EntidadesBundle:ExpedienteArquitectura:index.html.twig */
class __TwigTemplate_1930d0228d8264a60d17f5f634fa5a99cd545c927051916fc12fd49877ca610b extends Twig_Template
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
        // line 5
        echo "<div class=\"panel span9\">
        <div class=\"panel-header\">
            <h3>Listado de expedientes registrados</h3> 
        </div>
        <div class=\"panel-body\">

            <div class=\"span12\">



                <table id=\"grid_example\">
                    <thead>
                        <tr>

                            <th>Versión</th>
                            <th>Datos del Expediente</th>
                            <th>Proyecto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "                            <tr>
                                ";
            // line 28
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id")) {
                // line 29
                echo "                                    <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documentoarquitectura", array("idexped" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "version"), "html", null, true);
                echo "</td>
                                ";
            } else {
                // line 31
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "version"), "html", null, true);
                echo "</td>
                                ";
            }
            // line 33
            echo "                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datosDelExpediente"), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idproy"), "html", null, true);
            echo "</td>
                                <td>



                                    <ul style=\"list-style-type: none;\">
                                        <li>
                                            <i class=\" icon-search\"></i> <a class=\"btn-link\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expedientearquitectura_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Mostrar</a>

                                        </li>
                                        ";
            // line 44
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 45
                echo "                                            <li>
                                                <i class=\" icon-edit\"></i>  <a class=\"btn-link\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expedientearquitectura_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">Editar</a>

                                            </li>
                                            <li>
                                                <i class=\"icon-remove-circle\"></i><a id=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "\"href=\"#eliminar_modal\" role=\"button\" class=\"btn-link btn-remove\" data-toggle=\"modal\">Eliminar</a>

                                            </li>
                                        ";
            }
            // line 54
            echo "                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </tbody>
                </table>

                <ul class=\"pager\">
                    ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 63
            echo "                        <li>
                            <a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("expedientearquitectura_new");
            echo "\">
                                Crear 
                            </a>
                        </li>
                    ";
        }
        // line 69
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
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-danger")));
        // line 90
        echo "
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        ";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->




";
    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        // line 105
        echo "    <script>

        \$('.btn-remove').click(function() {
            var ruta = '";
        // line 108
        echo $this->env->getExtension('routing')->getPath("expedientearquitectura_delete", array("id" => "-1"));
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
        return "EntidadesBundle:ExpedienteArquitectura:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 108,  192 => 105,  189 => 104,  173 => 92,  169 => 90,  167 => 88,  146 => 69,  138 => 64,  135 => 63,  133 => 62,  127 => 58,  118 => 54,  111 => 50,  104 => 46,  101 => 45,  99 => 44,  93 => 41,  83 => 34,  78 => 33,  72 => 31,  64 => 29,  62 => 28,  59 => 27,  55 => 26,  32 => 5,  29 => 3,);
    }
}
