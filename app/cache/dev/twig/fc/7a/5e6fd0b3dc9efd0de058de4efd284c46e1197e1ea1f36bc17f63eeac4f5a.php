<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fc7a5e6fd0b3dc9efd0de058de4efd284c46e1197e1ea1f36bc17f63eeac4f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ITSSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ITSSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "


        <div class=\"login-box\">
            <div class=\"login-logo\">
                <span><b>ITSS</b>Tickets</span>
            </div><!-- /.login-logo -->
            <div class=\"login-box-body\">
                <p class=\"login-box-msg\">Sign in to start your session</p>
                <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-8\">    
                            <div class=\"checkbox icheck\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" > ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                </label>
                            </div>                        
                        </div><!-- /.col -->
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                ";
        // line 45
        echo "
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.3 -->
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/icheck.min.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
        <script>
            \$(function () {
                \$('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </form>



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
        return array (  113 => 54,  108 => 52,  103 => 50,  96 => 45,  88 => 38,  80 => 33,  70 => 26,  61 => 22,  55 => 19,  51 => 18,  40 => 9,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
