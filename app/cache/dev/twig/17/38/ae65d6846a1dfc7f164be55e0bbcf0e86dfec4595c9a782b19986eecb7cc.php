<?php

/* ITSSTicketsBundle:Ticket:see.html.twig */
class __TwigTemplate_1738ae65d6846a1dfc7f164be55e0bbcf0e86dfec4595c9a782b19986eecb7cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ITSSTicketsBundle:Ticket:see.html.twig", 1);
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
        echo "    Ticket Management
    <small>View ticket</small>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice_ticket_add"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "    <div class=\"alert-success\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">Ticket Form</h3>
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <div class=\"form-group\">
                <label for=\"country\">Title</label>
                <span type=\"title\" class=\"form-control\" id=\"exampleInputTitle1\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</span>

            </div>
            <div class=\"form-group\">
                <label for=\"content\">Content</label>
                <div class=\"\" id=\"exampleInputContent1\" style=\"word-wrap: break-word;\">";
        // line 26
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array());
        echo "</div>
            </div>
        </div><!-- /.box-body -->

        <div class=\"box-footer\">
        </div>
    </div><!-- /.box -->
    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
            // line 34
            echo "        <div class=\"box box-primary\">
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <label for=\"cContent\">Comment</label>
                    <span type=\"cContent\" class=\"form-control\" id=\"exampleInputTitle1\">";
            // line 38
            echo $this->getAttribute($context["comm"], "content", array());
            echo "</span>
                </div>
            </div><!-- /.box-body -->
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "       
        <div class=\"box-footer\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
        </div>
    </div><!-- /.box -->
";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "    
        ";
        // line 52
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

            <script type=\"text/javascript\">
                \$(function () {
                    // Replace the <textarea id=\"editor1\"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace('itss_ticketsbundle_comment_content');
                    //bootstrap WYSIHTML5 - text editor
                    \$(\".textarea\").wysihtml5();
                });
            </script>
       
    ";
    }

    public function getTemplateName()
    {
        return "ITSSTicketsBundle:Ticket:see.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 52,  122 => 51,  119 => 50,  111 => 45,  107 => 43,  96 => 38,  90 => 34,  86 => 33,  76 => 26,  68 => 21,  59 => 14,  50 => 11,  47 => 10,  42 => 9,  39 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
