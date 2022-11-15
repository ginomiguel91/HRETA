<?php

/* EntidadesBundle:RtfArquitectura:index.html.twig */
class __TwigTemplate_e09ffd9b97907766b0399172259fd52c11b3594b5b03944c78413c74fb1453e8 extends Twig_Template
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
            <h3>Listado de revisiones registradas</h3> 
        </div>
        <div class=\"panel-body\">

            <div class=\"span12\">
                <table id=\"grid_example\">
                    <thead>
                        <tr>

                            <th>Número</th>
                            <th>Versión</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha de Fin</th>


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

                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numero"), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "version"), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechai")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechai"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 31
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaf")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaf"), "Y-m-d"), "html", null, true);
            }
            echo "</td>

                                <td>

                                    <ul style=\"list-style-type: none;\">
                                        <li> 
                                            <i class=\" icon-search\"></i> <a class=\"btn-link\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rtfarquitectura_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Mostrar</a>

                                        </li>
                                        ";
            // line 40
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 41
                echo "                                            <li>
                                                <i class=\" icon-edit\"></i>  <a class=\"btn-link\" href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rtfarquitectura_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">Editar</a>

                                            </li>

                                            <li>
                                                <i class=\"icon-remove-circle\"></i><a id=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "\"href=\"#eliminar_modal\" role=\"button\" class=\"btn-link btn-remove\" data-toggle=\"modal\">Eliminar</a>

                                            </li>
                                        ";
            }
            // line 51
            echo "                                        <li>
                                            <i class=\" icon-print\"></i>  <a class=\"btn-link\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Dictamen</a>

                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </tbody>
                </table>

                <ul class=\"pager\">
                    ";
        // line 63
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 64
            echo "                        <li>
                            <a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("rtfarquitectura_new");
            echo "\">
                                Crear 
                            </a>        
                        </li>
                    ";
        }
        // line 70
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
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-danger")));
        // line 91
        echo "
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        ";
        // line 93
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
        echo $this->env->getExtension('routing')->getPath("rtfarquitectura_delete", array("id" => "-1"));
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
        return "EntidadesBundle:RtfArquitectura:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 108,  193 => 105,  190 => 104,  176 => 93,  172 => 91,  170 => 89,  149 => 70,  141 => 65,  138 => 64,  136 => 63,  130 => 59,  117 => 52,  114 => 51,  107 => 47,  99 => 42,  96 => 41,  94 => 40,  88 => 37,  77 => 31,  71 => 30,  67 => 29,  63 => 28,  59 => 26,  55 => 25,  32 => 4,  29 => 3,);
    }
}
