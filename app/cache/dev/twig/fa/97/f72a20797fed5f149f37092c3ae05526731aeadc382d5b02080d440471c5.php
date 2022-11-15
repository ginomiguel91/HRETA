<?php

/* EntidadesBundle:DocumentoArquitectura:evaluacion.html.twig */
class __TwigTemplate_fa97f72a20797fed5f149f37092c3ae05526731aeadc382d5b02080d440471c5 extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"panel span9 \">
        <div class=\"panel-header\">
            <h3 title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tblTipoDocid"), "descripcion"), "html", null, true);
        echo "\"> Evaluación  de Documento: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tblTipoDocid"), "denominador"), "html", null, true);
        echo " </h3>
              
        </div>


        <div class=\"panel-body\">

            <div class=\"span12\">

                <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evalDocumentSave", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "idexped" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idexped"), "id"))), "html", null, true);
        echo "\" method=\"POST\">
                    <table id=\"grid_example\">
                        <thead>
                            <tr>
                                <th>Satisfecho</th>
                                <th>Observaciones</th>
                                <th>Aspecto a Evaluar</th>
                        </thead>
                        <tbody>

                            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluaciones"]) ? $context["evaluaciones"] : $this->getContext($context, "evaluaciones")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["eval"]) {
            // line 28
            echo "                                <tr>
                                    <td class=\"span1 center\" >   

                                        ";
            // line 31
            if ($this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "satisfecho")) {
                // line 32
                echo "                                            <input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "id"), "html", null, true);
                echo "}\" type=\"checkbox\" name=\"choose";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "id"), "html", null, true);
                echo "\" checked=\"checked\">
                                            <label for=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "id"), "html", null, true);
                echo "}\"></label>
                                        ";
            } else {
                // line 35
                echo "                                            <input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "id"), "html", null, true);
                echo "}\" type=\"checkbox\" name=\"choose";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "id"), "html", null, true);
                echo "\">
                                            <label for=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "id"), "html", null, true);
                echo "}\"></label>
                                        ";
            }
            // line 38
            echo "                                    </td> 
                                    <td class=\"span6\">


                                        <textarea name=\"observacion";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "id"), "html", null, true);
            echo "\" rows=\"4\" style=\"width: 100%\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "observaciones"), "html", null, true);
            echo " </textarea>
                                    </td>
                                    <td class=\"span5\">
                                        ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aspectos"]) ? $context["aspectos"] : $this->getContext($context, "aspectos")), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array"), "nombre"), "html", null, true);
            echo "


                                    </td>
                                </tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
                        </tbody>
                    </table>
                    <br>
                    <div class=\"pull-right\">
                        <button type=\"submit\" class=\"btn\"  />Aceptar</button>

                        <a class=\"btn\"href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("documentoarquitectura", array("idexped" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idexped"), "id"))), "html", null, true);
        echo "\">
                            Cancelar
                        </a>


                    </div>
                </form>
                <br><br>
            </div>

        </div>
    </div>

   
";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:DocumentoArquitectura:evaluacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 58,  145 => 51,  125 => 45,  117 => 42,  111 => 38,  106 => 36,  99 => 35,  94 => 33,  87 => 32,  85 => 31,  80 => 28,  63 => 27,  50 => 17,  36 => 8,  31 => 5,  28 => 4,);
    }
}
