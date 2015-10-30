<?php

/* ITSSTicketsBundle:Projet:index.html.twig */
class __TwigTemplate_d1ad82e26a4398ec955e1577a305c953391360cd8d5008aae786dce0acc05251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ITSSTicketsBundle:Projet:index.html.twig", 1);
        $this->blocks = array(
            'pageheader' => array($this, 'block_pageheader'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageheader($context, array $blocks = array())
    {
        // line 4
        echo "    Project Management
    <small>List of projects</small>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"box\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">Data Table With Full Features</h3>
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-info btn-small\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("itss_tickets_project_see", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"view\"><i class=\"glyphicon glyphicon-search\" ></i></a>
                            <a class=\"btn btn-warning btn-small\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("itss_tickets_project_update", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"update\"><i class=\"glyphicon glyphicon-edit\" ></i></a>
                            <a class=\"btn btn-danger btn-small\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("itss_tickets_project_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"remove\"><i class=\"glyphicon glyphicon-remove\" ></i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->    
";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src='";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "'></script>
    <!-- AdminLTE App -->
    ";
        // line 57
        echo "    <!-- page script -->
    <script type=\"text/javascript\">
        \$(function () {
            \$(\"#example1\").dataTable();
            \$('#example2').dataTable({
                \"bPaginate\": true,
                \"bLengthChange\": false,
                \"bFilter\": false,
                \"bSort\": true,
                \"bInfo\": true,
                \"bAutoWidth\": false
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ITSSTicketsBundle:Projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  124 => 52,  119 => 50,  114 => 48,  110 => 47,  104 => 45,  101 => 44,  87 => 32,  77 => 28,  73 => 27,  69 => 26,  64 => 24,  61 => 23,  57 => 22,  42 => 9,  39 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
