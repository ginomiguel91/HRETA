<?php

/* base.html.twig */
class __TwigTemplate_20a0e380cb318dc8d64964412b75c17e3f1c538675a23ad84a5755662f33248b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'flashMessage' => array($this, 'block_flashMessage'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html><head>
        <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 184
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/favicon.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"wrap\">
            <div class=\"container-fluid\" style=\"margin-bottom: 35px; position: relative;z-index: 2;\">
                <div class=\"header\">
                    <div class=\"logo_grafica\">
                        <div class=\"logo\"><img class=\"img_logo\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                        <div class=\"grafica\"><img class=\"grafica\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/grafica.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                    </div>

                    <div class=\"usuario\" align=\"left\">
                        <div class=\"other-opt\">

                            <ul id=\"help-opt\" class=\"nav nav-pills\">
                                <li class=\"dropdown\">
                                    <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Ayuda <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("doc/HRETA.pdf"), "html", null, true);
        echo "\">Manual</a></li>
                                        <li><a href=\"";
        // line 203
        echo $this->env->getExtension('routing')->getPath("acercade");
        echo "\">Acerca de...</a></li>
                                    </ul>
                                </li>

                            </ul>


                        </div>
                        <div class=\"content_avatar\">
                            <div class=\"avatar\"><img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/avatar_defauld.png"), "html", null, true);
        echo "\" alt=\"\"></div>

                        </div>
                        <div class=\"user-opt\">
                            <ul id=\"user-opt\" class=\"nav nav-pills\">
                                <li class=\"dropdown\">
                                    <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\"><b style=\"color: #0162B1;\">Usuario:</b> ";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "html", null, true);
        echo "<b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">

                                        <li><a href=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
        echo "\"><i class=\"icon-user\"></i>Perfil</a></li>
                                        <li><a href=\"";
        // line 222
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"icon-off\" ></i>Desconectarse</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id=\"action_menu\">

                    <ul class=\"nav nav-pills\" style=\"display: inline-block\">

                        <li>
                            <a href=\"";
        // line 236
        echo $this->env->getExtension('routing')->getPath("entidades_homepage");
        echo "\">Portada</a>
                        </li>

                        <li class=\"divider-vertical\"></li>
                            ";
        // line 240
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 241
            echo "                            <li class=\"dropdown\">

                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Administración<b class=\"caret\"></b></a>

                                <ul class=\"dropdown-menu\">


                                    <li><a href=\"";
            // line 248
            echo $this->env->getExtension('routing')->getPath("expedientearquitectura_new");
            echo "\">Registrar expediente</a></li>
                                    <li class=\"dropdown-submenu\">
                                        <a tabindex=\"-1\" href=\"#\">Usuarios</a>
                                        <ul class=\"dropdown-menu\">
                                            <li> <a href=\"";
            // line 252
            echo $this->env->getExtension('routing')->getPath("usuario_new");
            echo "\">Registrar usuario</a></li>
                                            <li> <a href=\"";
            // line 253
            echo $this->env->getExtension('routing')->getPath("usuario");
            echo "\">Ver usuarios</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href=\"";
            // line 256
            echo $this->env->getExtension('routing')->getPath("proyecto_new");
            echo "\">Registrar   proyecto </a></li>

                                    <li><a href=\"";
            // line 258
            echo $this->env->getExtension('routing')->getPath("rtfarquitectura_new");
            echo "\" >Registrar RTF </a></li>





                                </ul>
                            </li>
                        ";
        }
        // line 267
        echo "                        <li class=\"divider-vertical\"></li>





                    </ul>


                </div>
            </div>


            <div class=\"container-fluid\">
                <div class=\"row-fluid\">
                    <div class=\"span3\" style=\"position: relative;z-index: 1;\">
                        <div class=\"well sidebar-nav\" style=\"height: auto; min-height: 800px; margin-bottom: 0;background: #F4F4F4; border:0; border-right: 1px solid #ADADAD; border-radius: 0\">

                            <br><br>    

                            <div id=\"accordion2\" class=\"accordion\">
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a href=\"#collapse1\" data-parent=\"#accordion\" data-toggle=\"collapse\"
                                           class=\"accordion-toggle collapsed\">
                                            <i class=\"icon-arrow-down\"></i> Revisiones e incidencias
                                        </a>
                                    </div>
                                    <div class=\"accordion-body collapse in\" id=\"collapse1\">
                                        <div class=\"accordion-inner\">
                                            <i class=\"icon-tag\"></i> <a href=\"";
        // line 297
        echo $this->env->getExtension('routing')->getPath("rtfarquitectura");
        echo "\" >Revisiones Técnicas Formales  </a>
                                            <br>
                                            <i class=\"icon-tag\"> </i> <a href=\"";
        // line 299
        echo $this->env->getExtension('routing')->getPath("informenc_new");
        echo "\">Informe de incidencias</a>
                                            <br>
                                            <i class=\"icon-tag\"> </i> <a href=\"";
        // line 301
        echo $this->env->getExtension('routing')->getPath("noconformidad");
        echo "\">Ver incidencias</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a href=\"#collapse2\" data-parent=\"#accordion\" data-toggle=\"collapse\"
                                           class=\"accordion-toggle collapsed\">
                                            <i class=\"icon-arrow-down\"></i>Proyectos  y expedientes  
                                        </a>
                                    </div>
                                    <div class=\"accordion-body collapse in\" id=\"collapse2\">
                                        <div class=\"accordion-inner\">
                                            <i class=\"icon-tag\"></i> <a href=\"";
        // line 314
        echo $this->env->getExtension('routing')->getPath("expedientearquitectura");
        echo "\"> Ver expedientes</a>
                                            <br>  
                                            <i class=\"icon-tag\"></i> <a href=\"";
        // line 316
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "\"> Ver  proyectos </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a href=\"#collapse3\" data-parent=\"#accordion\" data-toggle=\"collapse\"
                                           class=\"accordion-toggle collapsed\">
                                            <i class=\"icon-arrow-down\"></i>Evaluación arquitectónica
                                        </a>
                                    </div>
                                    <div class=\"accordion-body collapse in\" id=\"collapse3\" >
                                        <div class=\"accordion-inner\">
                                            <i class=\"icon-tag\"></i> <a href=\"";
        // line 329
        echo $this->env->getExtension('routing')->getPath("aspectos");
        echo "\"> Ver aspectos a evaluar </a>
                                            <br>  
                                            <i class=\"icon-tag\"></i> <a href=\"";
        // line 331
        echo $this->env->getExtension('routing')->getPath("aspectos_new");
        echo "\"> Registrar aspecto a evaluar </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"accordion-group\">
                                    <div class=\"accordion-heading\">
                                        <a href=\"#collapse4\" data-parent=\"#accordion\" data-toggle=\"collapse\"
                                           class=\"accordion-toggle collapsed\">
                                            <i class=\"icon-arrow-down\"></i>Reportes generales
                                        </a>
                                    </div>
                                    <div class=\"accordion-body collapse in\" id=\"collapse4\">
                                        <div class=\"accordion-inner\">
                                            <i class=\"icon-tag\"></i> <a href=\"";
        // line 344
        echo $this->env->getExtension('routing')->getPath("grafica_tipo_proyectos");
        echo "\">Proyectos por tipos</a>
                                            <br>
                                            <i class=\"icon-tag\"></i> <a href=\"";
        // line 346
        echo $this->env->getExtension('routing')->getPath("grafica_vista_aspectos");
        echo "\">Aspectos por vista</a>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <br><br>


                            <br><br>





                        </div>

                    </div>  
                    <!--/span-->
                    <br>
                    <div class=\"span9\">
                        ";
        // line 369
        $this->displayBlock('flashMessage', $context, $blocks);
        // line 384
        echo "                    </div>
                ";
        // line 385
        $this->displayBlock('body', $context, $blocks);
        // line 386
        echo "                <!--/span-->
            </div>

            <div id=\"footer\">

                <img alt=\"\"src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/mini.png"), "html", null, true);
        echo "\" class=\"img_mini\">

                <p style=\"display: inline-block;margin-left: 5px;vertical-align: top;\" class=\"footer_text\" align=\"left\">
                    Universidad de las Ciencias Informáticas. HRETA, Producto Registrado. © 2015
                </p>
            </div>
        </div>


    </div>


    <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/jquery-ui.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/bootstrap.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/bootstrap-slider.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/jquery.dataTables.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/jquery.ui.combobox.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/jquery.ui.menubar.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/jquery.ui.datepicker.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/jquery.ui.core.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/jquery.ui.widget.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/tab.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/acord.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/toolbar.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/js/datepicker.js"), "html", null, true);
        echo "\"type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(\"#hreta_entidadesbundle_rtfarquitectura_fechai\").datepicker();
        \$(\"#hreta_entidadesbundle_rtfarquitectura_fechaf\").datepicker();
        \$(\"#hreta_entidadesbundle_noconformidad_fecha\").datepicker();
        \$(\"#hreta_entidadesbundle_noconformidad_fechaSolucion\").datepicker();
    </script>
    <script type=\"text/javascript\">

        \$(function() {
            \$('.aplica').on('change', function() {
                if (this.checked) {
                    \$('.causa').hide();
                    \$('.isRequired').removeAttr('required');

                } else {
                    \$('.causa').show();
                    \$('.isRequired').attr('required', '');

                }

            });
            \$('.aplica').change();
        });




    </script>
    <script>

        \$(\"h3\").tooltip({
            position: {
                at: \"right+10 top-20\"
            }
        });
    </script>
";
        // line 453
        $this->displayBlock('javascripts', $context, $blocks);
        // line 454
        echo "</body>
</html>
";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "HRETA | REVISOR";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/css/bootstrap.css"), "html", null, true);
        echo "\"rel=\"stylesheet\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/css/datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/css/theme.ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">   
            <style>
                textarea{
                    resize: none;
                    height: 90%;    
                }

                .header {
                    border-bottom: 1px solid #0162B1;
                    height: 60px;
                    background: white;
                }

                .logo_grafica {
                    height: 60px;
                    display: inline;
                }

                .logo {
                    height: 60px;

                    background: #ffffff; /* Old browsers */

                    background: -moz-linear-gradient(top, #ffffff 0%, #ffffff 32%, #dedede 100%); /* FF3.6+ */
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(32%, #ffffff), color-stop(100%, #dedede)); /* Chrome,Safari4+ */
                    background: -webkit-linear-gradient(top, #ffffff 0%, #ffffff 32%, #dedede 100%); /* Chrome10+,Safari5.1+ */
                    background: -o-linear-gradient(top, #ffffff 0%, #ffffff 32%, #dedede 100%); /* Opera 11.10+ */
                    background: -ms-linear-gradient(top, #ffffff 0%, #ffffff 32%, #dedede 100%); /* IE10+ */
                    background: linear-gradient(to bottom, #ffffff 0%, #ffffff 32%, #dedede 100%); /* W3C */
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dedede', GradientType=0); /* IE6-9 */

                    float: left;
                }

                .img_logo {
                    margin: 8px 0 8px 1em;
                }

                .img_mini {
                    display: inline-block;
                    margin: 4px 5px 0 12px;
                    opacity: .5;

                }

                .footer_text {
                    opacity: .6;
                }

                .grafica {
                    height: 60px;
                    float: left;
                    width: 256px;
                }

                .usuario {
                    background: #D2D2D2;
                    height: 60px;
                    float: right;
                    padding: 0 12px 0 0;
                }

                .content_avatar {
                    padding: 3px;
                    height: 46px;
                    width: 46px;
                    background: #FFFFFF;
                    margin: 4px 6px;
                    border-radius: 4px;
                    float: left;
                }

                .avatar {
                    height: 46px;
                    width: 46px;
                    overflow: hidden;
                }

                .user-opt {

                    display: inline-block;

                }

                .other-opt {
                    background: none repeat scroll 0 0 white;
                    float: left;
                    height: 60px;
                    padding: 0 12px 0 0;

                }

                #wrap {
                    height: auto !important;
                    margin: 0 auto -60px;
                    min-height: 100%;
                }

                #help-opt, #user-opt {
                    margin-top: 12px;
                }

                .container-fluid {
                    padding-left: 0;
                    padding-right: 0;
                }

                html, body {
                    height: 100%;
                }

                body {
                    font-size: 75%;
                    font-family: \"Arial\";
                    background-color: #EBEBEB;

                }

                *:focus {
                    outline: 0 !important;
                }

                #footer {
                    bottom: 0;
                    display: block;
                    height: 35px;
                    left: 0;
                    margin: 0;
                    right: 0;
                    width: auto;
                    background: none repeat scroll 0 0 #0162B1;
                    overflow: hidden;
                }

                div#action_menu {
                    background: none repeat scroll 0 0 #EBEBEB;
                    border-bottom: 1px solid #0162B1;
                    box-shadow: 0 2px 3px #D2D2D2;
                    position: absolute;
                    top: 61px;
                    width: 100%;
                    height: 35px;
                }

                div#action_menu > ul {
                    margin-top: 1px;
                }

                #footer p {
                    color: #FFFFFF;
                    margin-top: 10px;
                }

                .form-horizontal .control-label {
                    width: auto;
                }

                .form-horizontal .controls {
                    margin-left: 80px;
                }

                .align-fix {
                    margin-left: -15px;
                    margin-top: 1px;
                    padding-right: 15px
                }

                .margin-correct {
                    margin-right: 13px;
                }

            </style>
        ";
    }

    // line 369
    public function block_flashMessage($context, array $blocks = array())
    {
        // line 370
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 371
            echo "                                <div class=\"alert alert-success\">
                                    <i class=\"icon-warning-sign\"></i><button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                        ";
            // line 373
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage"))), "html", null, true);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 376
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 377
            echo "                                <div class=\"alert alert-error\">
                                    <i class=\"icon-warning-sign\"></i><button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                        ";
            // line 379
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage"))), "html", null, true);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        echo "
                        ";
    }

    // line 385
    public function block_body($context, array $blocks = array())
    {
    }

    // line 453
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  680 => 453,  675 => 385,  670 => 382,  661 => 379,  657 => 377,  652 => 376,  643 => 373,  639 => 371,  634 => 370,  631 => 369,  454 => 11,  450 => 10,  446 => 9,  442 => 8,  437 => 7,  434 => 6,  428 => 3,  422 => 454,  420 => 453,  380 => 416,  376 => 415,  372 => 414,  368 => 413,  364 => 412,  360 => 411,  356 => 410,  352 => 409,  348 => 408,  344 => 407,  340 => 406,  336 => 405,  332 => 404,  328 => 403,  313 => 391,  306 => 386,  304 => 385,  301 => 384,  299 => 369,  273 => 346,  268 => 344,  252 => 331,  247 => 329,  231 => 316,  226 => 314,  210 => 301,  205 => 299,  200 => 297,  168 => 267,  156 => 258,  151 => 256,  145 => 253,  141 => 252,  134 => 248,  125 => 241,  123 => 240,  116 => 236,  99 => 222,  95 => 221,  89 => 218,  80 => 212,  68 => 203,  64 => 202,  51 => 192,  47 => 191,  36 => 184,  34 => 6,  24 => 1,  69 => 33,  63 => 30,  54 => 24,  31 => 3,  28 => 3,);
    }
}
