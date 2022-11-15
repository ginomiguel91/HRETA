<?php

/* EntidadesBundle:InformeNc:index.html.twig */
class __TwigTemplate_0ff36075c0212d37113f81be2360eca3280d59f3ae1969ffa17ff4f8e18d9530 extends Twig_Template
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
        // line 7
        echo "<div class=\"panel span9\">
        <div class=\"panel-header\">
            <h3>Listado de informes registrados</h3> 
        </div>
        <div class=\"panel-body\">

            <div class=\"span12\">

    <table id=\"grid_example\">
        <thead>
            <tr>
             
                <th>Número</th>
                <th>Acuerdos</th>
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
            echo "            <tr>
    
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numero"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "acuerdos"), "html", null, true);
            echo "</td>
                <td>
              
                
                <ul style=\"list-style-type: none;\">
                                        <li>
                                            <i class=\" icon-search\"></i> <a class=\"btn-link\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informenc_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Mostrar</a>

                                        </li>
                                        <li>
                                            <i class=\" icon-edit\"></i>  <a class=\"btn-link\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informenc_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Editar</a>

                                        </li>
                                        <li>
                                            <i class=\"icon-remove-circle\"></i><a id=\"";
            // line 43
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
        // line 50
        echo "        
           

        </tbody>
        
      
    </table>

        <ul class=\"pager\">
 <li>
            <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("informenc_new");
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
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-danger")));
        // line 89
        echo "
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                                ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                            </form>

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
    
    ";
    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        // line 101
        echo "    <script>
        
        \$('.btn-remove').click(function() {
            var ruta = '";
        // line 104
        echo $this->env->getExtension('routing')->getPath("informenc_delete", array("id" => "-1"));
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
        return "EntidadesBundle:InformeNc:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 104,  164 => 101,  161 => 100,  148 => 91,  144 => 89,  142 => 87,  112 => 60,  100 => 50,  87 => 43,  80 => 39,  73 => 35,  64 => 29,  60 => 28,  56 => 26,  52 => 25,  32 => 7,  29 => 3,);
    }
}
