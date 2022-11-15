<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_e6d2590108f2732d2e40576e78563e058f49b25a8fa3fe816ef8f5843ef07b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/favicon.png"), "html", null, true);
        echo "\" />

<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<div id=\"wrapper\">


    <div id=\"\" style=\"text-align: center\">
        <div id=\"login_top\" style=\"height: 30%\">

            <div id=\"logo\"></div>
        </div>

        <div id=\"login_bottom\" style=\"\">
            <div id=\"grafica_login\" >
                <div class=\"logo\"><img class=\"img_logo\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/logo-login2.png"), "html", null, true);
        echo "\" style=\"\"></div>  

            </div>
            <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal fos_user_registration_register\" role=\"form\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                <div class=\"form-group\">

                    <div class=\"col-md-7\">
                        <div class=\"form-error-hreta\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'errors');
        echo "
                        </div>            
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre")));
        echo "
                    </div>        
                </div>

                <div class=\"form-group\">

                    <div class=\"col-md-7\">
                        <div class=\"form-error-hreta\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos"), 'errors');
        echo "
                        </div>            
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellidos")));
        echo "
                    </div>        
                </div>    

                <div class=\"form-group\">

                    <div class=\"col-md-7\"> 
                        <div class=\"form-error-hreta\">
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "
                        </div>
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Usuario")));
        echo "                    
                    </div>        
                </div>    

                <div class=\"form-group\">

                    <div class=\"col-md-7\">
                        <div class=\"form-error-hreta\">
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
                        </div>           
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Correo")));
        echo "
                    </div>        
                </div>    

                <div class=\"form-group\">

                    <div class=\"col-md-7\">  
                        <div class=\"form-error-hreta\">
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'errors');
        echo "
                        </div>
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Contraseña")));
        echo "                    
                    </div>        
                </div>       

                <div class=\"form-group\">

                    <div class=\"col-md-7\">
                        <div class=\"form-error-hret\">
                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'errors');
        echo "
                        </div>           
                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirmar contraseña")));
        echo "
                    </div>        
                </div>

                <div class=\"form-group\">
                    <div class=\"col-md-7\">
                        <div class=\"buttons-align-rhoda\" align=\"center\">

                            <button type=\"submit\" id=\"_submit\"  class=\"btn btn-default\" name=\"_submit\" >Registrar</button>
                        </div>
                    </div>
                </div>
                <div> <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Autenticar</a></div>
                    ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </form>
        </div>
    </div>

</div>



";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "HRETA | REGISTRAR";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 3,  178 => 95,  174 => 94,  159 => 82,  154 => 80,  143 => 72,  138 => 70,  127 => 62,  122 => 60,  111 => 52,  106 => 50,  95 => 42,  90 => 40,  79 => 32,  74 => 30,  65 => 24,  59 => 23,  53 => 20,  37 => 7,  33 => 6,  23 => 3,  20 => 1,  25 => 3,  21 => 1,  31 => 4,  28 => 4,);
    }
}
