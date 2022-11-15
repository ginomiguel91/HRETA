<?php

/* EntidadesBundle:Usuario:index.html.twig */
class __TwigTemplate_fbf72e7a5b697f5be28716586f1bc2d87903991e99c15396085640f3ce7bd099 extends Twig_Template
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
        echo "
    <div class=\"panel span9\">
        <div class=\"panel-header\">
            <h3>Listado de usuarios registrados</h3> 
        </div>
        <div class=\"panel-body\">

            <div class=\"span12\">
                <table id=\"grid_example\">
                    <thead >
                        <tr>
                            <th>Usuario</th>
                            <th >Correo</th>      

                            <th >Nombre</th>
                            <th >Apellidos</th>
                            <th >Acciones</th>

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>

                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos"), "html", null, true);
            echo "</td>
                                <td>
                                    <ul style=\"list-style-type: none;\">
                                        <li>
                                            <i class=\" icon-search\"></i> <a class=\"btn-link\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Mostrar</a>

                                        </li>
                                        ";
            // line 38
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 39
                echo "                                            <li>
                                                <i class=\" icon-edit\"></i>  <a class=\"btn-link\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">Editar</a>

                                            </li>
                                            <li>
                                                <i class=\"icon-remove-circle\"></i><a id=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "\"href=\"#eliminar_modal\" role=\"button\" class=\"btn-link btn-remove\" data-toggle=\"modal\">Eliminar</a>

                                            </li>
                                        ";
            }
            // line 48
            echo "                                    </ul>


                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </tbody>
                </table>

                <ul class=\"pager\">
                    ";
        // line 58
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 59
            echo "                        <li>
                            <a  href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("usuario_new");
            echo "\">Crear</a>
                        </li>
                    ";
        }
        // line 63
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
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-danger")));
        // line 88
        echo "
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


";
    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        // line 104
        echo "    <script>

        \$('.btn-remove').click(function() {
            var ruta = '";
        // line 107
        echo $this->env->getExtension('routing')->getPath("usuario_delete", array("id" => "-1"));
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
        return "EntidadesBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 107,  185 => 104,  182 => 103,  168 => 90,  164 => 88,  162 => 86,  137 => 63,  131 => 60,  128 => 59,  126 => 58,  120 => 54,  109 => 48,  102 => 44,  95 => 40,  92 => 39,  90 => 38,  84 => 35,  77 => 31,  73 => 30,  68 => 28,  62 => 27,  59 => 26,  55 => 25,  32 => 4,  29 => 3,);
    }
}
