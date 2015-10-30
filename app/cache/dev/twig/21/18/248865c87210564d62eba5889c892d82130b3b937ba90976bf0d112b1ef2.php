<?php

/* ITSSTicketsBundle:Projet:see.html.twig */
class __TwigTemplate_2118248865c87210564d62eba5889c892d82130b3b937ba90976bf0d112b1ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ITSSTicketsBundle:Projet:see.html.twig", 1);
        $this->blocks = array(
            'pageheader' => array($this, 'block_pageheader'),
            'content' => array($this, 'block_content'),
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
    <small>View project</small>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">Project Form</h3>
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <div class=\"col-md-6\" >
                <div class=\"form-group\">
                    <label for=\"name\">Name</label>
                    <input type=\"name\" class=\"form-control\" id=\"exampleInputName\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "\" disabled>                    
                </div>
                <div class=\"form-group\">
                    <label for=\"dateBegin\">Start Date</label>
                    <input type=\"dateBegin\" class=\"form-control\" id=\"exampleInputDateBegin\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateBegin", array()), "Y/m/d"), "html", null, true);
        echo "\" disabled>
                </div>
                <div class=\"form-group\">
                    <label for=\"dateEnd\">End Date</label>
                    <input type=\"dateEnd\" class=\"form-control\" id=\"exampleInputDateEnd\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEnd", array()), "Y/m/d"), "html", null, true);
        echo "\" disabled>
                </div>
            </div>
            <div class=\"col-md-6\" >
                <div class=\"form-group\">
                    <label for=\"statut\">Statut</label>
                    <input type=\"statut\" class=\"form-control\" id=\"exampleInputStatut\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "statut", array()), "html", null, true);
        echo "\" disabled>
                </div>
                <div class=\"form-group\">
                    <label for=\"client\">Client</label>
                    <input type=\"client\" class=\"form-control\" id=\"exampleInputClient\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "client", array()), "html", null, true);
        echo "\" disabled>
                </div>
                <div class=\"form-group\">
                    <label for=\"product\">Product</label>
                    <input type=\"product\" class=\"form-control\" id=\"exampleInputPoduct\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "product", array()), "html", null, true);
        echo "\" disabled>
                </div>               
            </div>
        </div><!-- /.box-body -->

        <div class=\"box-footer\">
        </div>
    </div><!-- /.box -->
";
    }

    public function getTemplateName()
    {
        return "ITSSTicketsBundle:Projet:see.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 39,  81 => 35,  74 => 31,  65 => 25,  58 => 21,  51 => 17,  41 => 9,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
