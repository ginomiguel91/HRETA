<?php

/* EntidadesBundle:DocumentoArquitectura:pdf.html.twig */
class __TwigTemplate_856e40c59fd9c895cbabd2641d2eec3f3501f06b7f5e7feae80b686eac08f57b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div  id=\"container\" style=\"padding-top: 100px\">
    <img src=\"E:\\AppServ\\htdocs\\T\\web\\bundles\\entidades\\images\\uci1.jpg\" style=\"margin-top: 100px; height: 213px; width: 317px\">
    <div class=\"row\">

        <div  style=\"margin-left: 50%\">

            <h2 style=\"color: #000000\">DIRECCIÓN DE GESTIÓN DE PROYECTOS</h2>   
        </div>
        <div   style=\"margin-left: 50%\">
            <h1 style=\"color: #003bb3\">Dictamen sobre el estado de 
                elaboración del Artefacto:
                Diseño de la Arquitectura de 
                Software.</h1>   

        </div>

        <div  style=\"margin-left:50%\">
            <h1 style=\"color: #003bb3\">Proyecto: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["expediente"]) ? $context["expediente"] : $this->getContext($context, "expediente")), "idproy"), "html", null, true);
        echo "</h1>
        </div>
        <div  style=\"margin-left:50%\">
            <h2 style=\"color: #003bb3\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["expediente"]) ? $context["expediente"] : $this->getContext($context, "expediente")), "idproy"), "descripcion"), "html", null, true);
        echo "</h2>
        </div>
    </div>



    <div style=\"height:  400px;\"></div>

    <div style=\"text-align: center; margin-bottom: 100px\" >
        <h4> Universidad de las Ciencias Informáticas
            Carretera a San Antonio Km 2 1/2 . Torrens. Boyeros. Ciudad de La Habana. Cuba
            Teléfono: + 53 (7) 837 2402 Fax: + 53 (7) 837 2407 E-mail: ip@uci.cu</h4>
    </div>

    <div style=\" margin-bottom: 50px\" >
        <h1>Leyenda</h1>
        <div><img src=\"E:\\AppServ\\htdocs\\T\\web\\bundles\\entidades\\images\\NS.png\"> <b>Aprobada</b></div>
        <br>
        <div> <img src=\"E:\\AppServ\\htdocs\\T\\web\\bundles\\entidades\\images\\S.png\" > <b>Aprobada con riesgos que deben ser monitorizados por la gerencia del proyecto.</b></div>
        <br>
        <div> <img src=\"E:\\AppServ\\htdocs\\T\\web\\bundles\\entidades\\images\\NS.png\" ><b> Rechazada debe ser modificada y presentada en otra iteración.</b></div>
    </div>

    <div style=\" margin-bottom: 50px\" >
        <h1>Objetivo</h1>
        <div><b>Dictaminar el nivel de análisis arquitectónico basándose en la documentación de las  principales decisiones 
                arquitectónicas y su argumentación sustentada en las restricciones, características del producto, así como la 
                identificación  y  evaluación  adecuada  de  las  metas  de  arquitectónicas  basadas  en  requisitos  y  escenarios 
                arquitectónicamente significativos.</b></div>
    </div>
    <div style=\" margin-bottom: 50px\" >
        <h1>Alcance</h1>
        <div><b>Aplicable a productos desarrollados o diseños de por desarrollar, extendible además  a línea de productos, 
                ecosistemas de digitales o de software, arquitecturas de referencia de centros de desarrollo o cualquier otro 
                nivel organizacional. </b></div>
    </div>



    ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : $this->getContext($context, "docs")));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 62
            echo "        <div style=\"overflow-y: auto\">
            <div style=\"text-align: center; margin-bottom: 0px\" >
                <h2>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "tblTipoDocid"), "html", null, true);
            echo "</h2>
            </div>
            <table >
                <thead >
                    <tr>
                        <th style=\"text-align: center; width: 10%;\">Satisfecho </th>
                        <th style=\"text-align: center; width: 45%;\">Aspecto a evaluar</th> 
                        <th style=\"text-align: center; width: 45%;\">Observaciones</th> 

                    </tr>
                </thead>
                <tbody>
                    ";
            // line 76
            if ((!twig_test_empty($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "evaluacion")))) {
                echo "                
                        ";
                // line 77
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "evaluacion"));
                foreach ($context['_seq'] as $context["_key"] => $context["eval"]) {
                    // line 78
                    echo "                            <tr>
                                ";
                    // line 79
                    if ($this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "satisfecho")) {
                        echo "                          
                                    <td style=\"text-align: center !important;\">  <img src=\"E:\\AppServ\\htdocs\\T\\web\\bundles\\entidades\\images\\S.png\" ></td>
                                    ";
                    } else {
                        // line 82
                        echo "                                    <td style=\"text-align: center !important;\"><img src=\"E:\\AppServ\\htdocs\\T\\web\\bundles\\entidades\\images\\NS.png\"></td>
                                    ";
                    }
                    // line 84
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "tblAspectosid"), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eval"]) ? $context["eval"] : $this->getContext($context, "eval")), "observaciones"), "html", null, true);
                    echo "</td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eval'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                    ";
            } else {
                // line 89
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "tblTipoDocid"), "aspectos"));
                foreach ($context['_seq'] as $context["_key"] => $context["aspecto"]) {
                    // line 90
                    echo "                            <tr>
                                <td style=\"text-align: center !important;\"><img src=\"E:\\AppServ\\htdocs\\T\\web\\bundles\\entidades\\images\\NS.png\"></td>
                                <td>";
                    // line 92
                    echo twig_escape_filter($this->env, (isset($context["aspecto"]) ? $context["aspecto"] : $this->getContext($context, "aspecto")), "html", null, true);
                    echo "</td>
                                <td></td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aspecto'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                    ";
            }
            // line 97
            echo "
                </tbody>
            </table>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "

    <style>
        table, th, td {
            border: 1px solid black;
        } 

        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        table {
            width: 100%;
        }



        td {           
            vertical-align: central;
            text-align: justify;
            padding: 5px;

        }

        table, td, th {
            border: 1px solid black;
        }

        th {
            background-color: #BEDCF0;
            color: black;
        }
    </style>
</div>";
    }

    public function getTemplateName()
    {
        return "EntidadesBundle:DocumentoArquitectura:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 102,  170 => 97,  167 => 96,  157 => 92,  153 => 90,  148 => 89,  145 => 88,  136 => 85,  131 => 84,  127 => 82,  121 => 79,  118 => 78,  114 => 77,  110 => 76,  95 => 64,  91 => 62,  87 => 61,  45 => 22,  39 => 19,  19 => 1,);
    }
}
