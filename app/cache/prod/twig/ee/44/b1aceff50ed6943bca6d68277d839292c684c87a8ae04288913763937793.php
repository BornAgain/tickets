<?php

/* ::layout.html.twig */
class __TwigTemplate_ee44b1aceff50ed6943bca6d68277d839292c684c87a8ae04288913763937793 extends Twig_Template
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
        // line 42
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
                    <!-- Navbar Right Menu -->
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <!-- User Account Menu -->
                            <li class=\"dropdown user user-menu\">
                                <!-- Menu Toggle Button -->
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <!-- The user image in the navbar-->
                                    <img src=\"dist/img/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\"/>
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class=\"hidden-xs\">K-Rep Bank</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- The user image in the menu -->
                                    <li class=\"user-header\">
                                        <img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\" />
                                        <p>
                                            ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "
                                            <small>Welcome ...</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Followers</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Sales</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Friends</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        <div class=\"pull-left\">
                                            <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">

                    <!-- Sidebar user panel (optional) -->
                    <div class=\"user-panel\">
                        <div class=\"pull-left image\">
                            <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/avatar5.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                        </div>
                        <div class=\"pull-left info\">
                            <p>K-Rep Bank</p>
                            <!-- Status -->
                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                        </div>
                    </div>

                    <!-- search form (Optional) -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
                            <span class=\"input-group-btn\">
                                <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">HEADER</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class=\"active\"><a href=\"#\"><span>Link</span></a><</li>
                        <li class=\"treeview\">
                            <a href=\"#\"><span>TICKET MANAGEMENT</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("itss_tickets_ticket_index");
        echo "\">List Tickets</a></li>
                                <li><a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("itss_tickets_ticket_add");
        echo "\">Add Ticket</a></li>
                            </ul>
                        </li>                         
                        ";
        // line 167
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 168
            echo "                        <li class=\"treeview\">
                            <a href=\"#\"><span>PROJECT MANAGEMENT</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"";
            // line 171
            echo $this->env->getExtension('routing')->getPath("itss_tickets_project_index");
            echo "\">List Projects</a></li>
                                <li><a href=\"";
            // line 172
            echo $this->env->getExtension('routing')->getPath("itss_tickets_project_add");
            echo "\">Add Project</a></li>
                            </ul>
                        </li>            
                        <li class=\"treeview\">
                            <a href=\"#\"><span>CLIENT MANAGEMENT</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"";
            // line 178
            echo $this->env->getExtension('routing')->getPath("itss_tickets_client_index");
            echo "\">List Clients</a></li>
                                <li><a href=\"";
            // line 179
            echo $this->env->getExtension('routing')->getPath("itss_tickets_client_add");
            echo "\">Add Client</a></li>
                            </ul>
                        </li>
                        ";
        }
        // line 183
        echo "                    </ul><!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        ";
        // line 193
        $this->displayBlock('pageheader', $context, $blocks);
        // line 197
        echo "                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                        <li class=\"active\">Here</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class=\"content\">

                    ";
        // line 207
        $this->displayBlock('content', $context, $blocks);
        // line 210
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
        // line 225
        $this->displayBlock('javascripts', $context, $blocks);
        // line 248
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
            
            
            
                <!-- jvectormap -->
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 193
    public function block_pageheader($context, array $blocks = array())
    {
        // line 194
        echo "                            Page Header
                            <small>Optional description</small>
                        ";
    }

    // line 207
    public function block_content($context, array $blocks = array())
    {
        // line 208
        echo "                        <p></p>
                    ";
    }

    // line 225
    public function block_javascripts($context, array $blocks = array())
    {
        // line 226
        echo "            <!-- REQUIRED JS SCRIPTS -->

            <!-- jQuery 2.1.3 -->
            <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap 3.3.2 JS -->
            <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- AdminLTE App -->
            <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <!-- FastClick -->
            <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
            <!-- CK Editor -->
            <script src=\"//cdn.ckeditor.com/4.4.3/standard/ckeditor.js\"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    



            <!-- Optionally, you can add Slimscroll and FastClick plugins. 
                  Both of these plugins are recommended to enhance the 
                  user experience -->
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 240,  367 => 236,  361 => 233,  356 => 231,  351 => 229,  346 => 226,  343 => 225,  338 => 208,  335 => 207,  329 => 194,  326 => 193,  320 => 40,  312 => 35,  307 => 33,  291 => 20,  283 => 15,  274 => 9,  270 => 7,  267 => 6,  261 => 5,  256 => 248,  254 => 225,  237 => 210,  235 => 207,  223 => 197,  221 => 193,  209 => 183,  202 => 179,  198 => 178,  189 => 172,  185 => 171,  180 => 168,  178 => 167,  172 => 164,  168 => 163,  137 => 135,  116 => 117,  91 => 95,  36 => 42,  34 => 6,  30 => 5,  24 => 1,);
    }
}
