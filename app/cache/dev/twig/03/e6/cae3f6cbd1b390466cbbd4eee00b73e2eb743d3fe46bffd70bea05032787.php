<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_03e6cae3f6cbd1b390466cbbd4eee00b73e2eb743d3fe46bffd70bea05032787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "HRETA | AUTENTICAR";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div id=\"wrapper\" style=\"padding-bottom: 30px\">
        <div id=\"login_box\">
            <div id=\"login_top\">

                <div id=\"logo\"></div>
            </div>
            <div id=\"login_bottom\">

                <div id=\"grafica_login\">

                    <div class=\"logo\"><img class=\"img_logo\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/entidades/images/logo-login2.png"), "html", null, true);
        echo "\" alt=\"\"></div>  

                </div>
                <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"form-horizontal\" role=\"form\" >
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fos_csrf_provider"]) ? $context["fos_csrf_provider"] : $this->getContext($context, "fos_csrf_provider")), "generateCsrfToken", array(0 => "authenticate"), "method"), "html", null, true);
        echo "\" />


                    ";
        // line 26
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 27
            echo "                        <div class=\"form-group\">
                            <div class=\"col-md-7\"> 
                                ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo " 
                            </div>        
                        </div> 
                    ";
        }
        // line 33
        echo "                    <div class=\"form-group\">
                        <div class=\"col-md-7\"> 
                            <input type=\"text\" id=\"username\" placeholder=\"usuario\" name=\"_username\" class=\"form-control\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                        </div>        
                    </div> 

                    <div class=\"form-group\">        
                        <div class=\"col-md-7\">            
                            <input type=\"password\" id=\"password\" placeholder=\"contraseña\" name=\"_password\" class=\"form-control\" required=\"required\" />
                        </div>        
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-md-3\"></div>
                        <div class=\"col-md-7\">
                            <div class=\"checkbox\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                <label for=\"remember_me\">Recordar contraseña</label>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-md-3\"></div>
                        <div class=\"col-md-7\">
                            <div class=\"buttons-align-rhoda\">
                                <button type=\"submit\" id=\"_submit \"  class=\"btn btn-default\" name=\"_submit\" >Entrar</button>

                            </div>
                        </div>
                    </div>
                    <div><a  href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Registrarme en HRETA </a></div> 

                </form>


            </div>
        </div>


    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 64,  100 => 35,  96 => 33,  89 => 29,  85 => 27,  83 => 26,  77 => 23,  73 => 22,  67 => 19,  55 => 9,  52 => 8,  46 => 3,  42 => 8,  37 => 6,  33 => 5,  29 => 4,  24 => 3,  21 => 1,);
    }
}
