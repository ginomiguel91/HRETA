<?php

/* EntidadesBundle:Aspectos:index.html.twig */
class __TwigTemplate_b8b5989e1f1d25f901ac9d2cb4fcdcd2a3f0557c1046619ae33478c3b131689c extends Twig_Template
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
            <h3>Listado de aspectos registrados</h3> 
        </div>
        <div class=\"panel-body\">

            <div class=\"span12\">
    <table id=\"grid_example\">
        <thead>
            <tr>
             
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
               
                <td style=\"width: 80%\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</td>
                <td style=\"width: 20%\">
       
                         <ul style=\"list-style-type: none;\">
                         <li> 
                             <i class=\" icon-search\"></i> <a class=\"btn-link\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aspectos_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Mostrar</a>

                                        </li>
                                        <li>
                                            <i class=\" icon-edit\"></i>  <a class=\"btn-link\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aspectos_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Editar</a>

                                        </li>
                    
                      
                             <li>
                                            <i class=\"icon-remove-circle\"></i><a id=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\"href=\"#eliminar_modal\" role=\"button\" class=\"btn-link btn-remove\" data-toggle=\"modal\">Eliminar</a>

                                        </li>
                  
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

        <ul class=\"pager\">
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("aspectos_new");
        echo "\">
               Crear 
            </a>
        </li>
    </ul>
                
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
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-danger")));
        // line 77
        echo "
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                                ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                            </form>

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
      
               
                 
               
    ";
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        // line 92
        echo "    <script>
        
        \$('.btn-remove').click(function() {
            var ruta = '";
        // line 95
        echo $this->env->getExtension('routing')->getPath("aspectos_delete", array("id" => "-1"));
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
        return "EntidadesBundle:Aspectos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 95,  155 => 92,  152 => 91,  136 => 79,  132 => 77,  130 => 75,  103 => 51,  96 => 46,  82 => 38,  73 => 32,  66 => 28,  58 => 23,  54 => 21,  50 => 20,  32 => 4,  29 => 3,);
    }
}
