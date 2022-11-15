<?php

/* EntidadesBundle:NoConformidad:index.html.twig */
class __TwigTemplate_41cc6a4d3c8fa2ff4a859aea4548f10773b2423a6c8db35c7f835e12343e87a1 extends Twig_Template
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
        echo " 
   <div class=\"panel span9\">
        <div class=\"panel-header\">
            <h3>Listado de incidencias </h3> 
        </div>
        <div class=\"panel-body\">

            <div class=\"span12\">
    <table id=\"grid_example\">
        
        
         <thead >
            <tr>
             
                <th>Tipo</th>
                <th>Asunto</th>
                <th>Fecha</th>
                <th>Fecha de Solución</th>
                <th> Descripción</th>
                <th> Acciones</th>
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
                
                <td >";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipo"), "html", null, true);
            echo "</td>
                <td >";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "asunto"), "html", null, true);
            echo "</td>
                <td >";
            // line 30
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaSolucion")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaSolucion"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td >";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
            echo "</td>
                <td >
                
                
                
                 <ul style=\"list-style-type: none;\">
                                        <li>
                                            <i class=\" icon-search\"></i> <a class=\"btn-link\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noconformidad_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Mostrar</a>

                                        </li>
                                        <li>
                                            <i class=\" icon-edit\"></i>  <a class=\"btn-link\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noconformidad_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Editar</a>

                                        </li>
                                        <li>
                                            <i class=\"icon-remove-circle\"></i><a id=\"";
            // line 47
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
        // line 54
        echo "        </tbody>
        
   
   
    </table>   
     <ul class=\"pager\">
        <li>
<a  href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("noconformidad_new");
        echo "\">Crear  </a>
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
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-danger")));
        // line 87
        echo "
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                                ";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                            </form>

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

      
    ";
    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        // line 100
        echo "    <script>
        
        \$('.btn-remove').click(function() {
            var ruta = '";
        // line 103
        echo $this->env->getExtension('routing')->getPath("noconformidad_delete", array("id" => "-1"));
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
        return "EntidadesBundle:NoConformidad:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 103,  180 => 100,  177 => 99,  163 => 89,  159 => 87,  157 => 85,  130 => 61,  121 => 54,  108 => 47,  101 => 43,  94 => 39,  84 => 32,  78 => 31,  72 => 30,  68 => 29,  64 => 28,  60 => 26,  56 => 25,  29 => 2,);
    }
}
