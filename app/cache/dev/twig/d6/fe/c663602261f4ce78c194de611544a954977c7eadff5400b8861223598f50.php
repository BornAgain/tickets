<?php

/* ::layout_user.html.twig */
class __TwigTemplate_d6fec663602261f4ce78c194de611544a954977c7eadff5400b8861223598f50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageheader' => array($this, 'block_pageheader'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the 
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |  
    |---------------------------------------------------------|
    
    -->
    <body class=\"skin-blue\">
        <div class=\"wrapper\">

            <!-- Main Header -->
            <header class=\"main-header\">

                <!-- Logo -->
                <a href=\"index2.html\" class=\"logo\"><b>ITSS</b> - Tickets</a>

                <!-- Header Navbar -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                </nav>
            </header>


            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 82
        $this->displayBlock('pageheader', $context, $blocks);
        // line 86
        echo "                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                        <li class=\"active\">Here</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class=\"content\">

                    ";
        // line 96
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo "
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class=\"main-footer\">
                <!-- To the right -->
                <div class=\"pull-right hidden-xs\">
                    Anything you want
                </div>
                <!-- Default to the left --> 
                <strong>Copyright &copy; 2015 <a href=\"#\">Company</a>.</strong> All rights reserved.
            </footer>

        </div><!-- ./wrapper -->
        ";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 137
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ITSS - Tickets";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
            <!-- Bootstrap 3.3.2 -->
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Font Awesome Icons -->
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Ionicons -->
            <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Theme style -->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
                  page. However, you can choose any other skin. Make sure you
                  apply the skin class to the body tag so the changes take effect.
            -->
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
                <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <![endif]-->


            <!-- ADD For TICKET -->
            <!-- AdminLTE Skins. Choose a skin from the css/skins 
                     folder instead of downloading all of them to reduce the load. -->
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/skins/_all-skins.min.css\" rel=\"stylesheet"), "html", null, true);
        echo "\" type=\"text/css\" />
            <!-- bootstrap wysihtml5 - text editor -->
            <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />        
        ";
    }

    // line 82
    public function block_pageheader($context, array $blocks = array())
    {
        // line 83
        echo "                            Page Header
                            <small>Optional description</small>
                        ";
    }

    // line 96
    public function block_content($context, array $blocks = array())
    {
        // line 97
        echo "                        <p></p>
                    ";
    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        // line 115
        echo "            <!-- REQUIRED JS SCRIPTS -->

            <!-- jQuery 2.1.3 -->
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap 3.3.2 JS -->
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- AdminLTE App -->
            <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- FastClick -->
            <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
            <!-- CK Editor -->
            <script src=\"//cdn.ckeditor.com/4.4.3/standard/ckeditor.js\"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    



            <!-- Optionally, you can add Slimscroll and FastClick plugins. 
                  Both of these plugins are recommended to enhance the 
                  user experience -->
        ";
    }

    public function getTemplateName()
    {
        return "::layout_user.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  228 => 129,  221 => 125,  215 => 122,  210 => 120,  205 => 118,  200 => 115,  197 => 114,  192 => 97,  189 => 96,  183 => 83,  180 => 82,  174 => 35,  169 => 33,  153 => 20,  145 => 15,  136 => 9,  132 => 7,  129 => 6,  123 => 5,  118 => 137,  116 => 114,  99 => 99,  97 => 96,  85 => 86,  83 => 82,  36 => 37,  34 => 6,  30 => 5,  24 => 1,);
    }
}
