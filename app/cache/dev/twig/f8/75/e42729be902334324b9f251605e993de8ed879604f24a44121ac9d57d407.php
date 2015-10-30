<?php

/* ITSSTicketsBundle:Page:index.html.twig */
class __TwigTemplate_f875e42729be902334324b9f251605e993de8ed879604f24a44121ac9d57d407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ITSSTicketsBundle:Page:index.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        echo "              
    <div class=\"row\">
        <div class=\"col-xs-10 col-sm-10\">
            <h2 >Bring the best of your system</h2>
            <p><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"color: #696969;\">Information Technologies Solutions &amp; Services (ITSS) develops and delivers banking technology solutions and services to banks and financial institutions all around the world.</span></span></p>
            <p><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"color: #696969;\">Thanks its consultants strong banking expertise , ITSS offers a complete range of services such as custom software development, testing services, product development, implementation services, application services, business and technology consulting.</span></span></p>
            <p><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"color: #696969;\">ITSS is specialized in:</span></span></p>
            <ul>
                <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"color: #696969;\">T24 Banking System</span></span></li>
                <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"color: #696969;\">Infosys Finacle core Banking Solution</span></span></li>
                <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"color: #696969;\">Avaloq Banking System</span></span></li>
                <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"color: #696969;\">Software development, Testing and Implementation</span></span></li>
                <li><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"color: #696969;\">Technical and Business Consulting</span></span></li>
            </ul>
            <p><span style=\"font-family: arial,helvetica,sans-serif;\"><span style=\"color: #696969;\">ITSS has a global footprint with offices in Switzerland (HQ), Luxembourg, Morocco, Singapore, Mexico, India, Kenya and Ghana.</span></span></p>
        </div>
        <div class=\"col-xs-12 col-sm-4\">&nbsp;</div>
        <div class=\"clearfix\">&nbsp;</div>
    </div>              
";
    }

    public function getTemplateName()
    {
        return "ITSSTicketsBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  11 => 1,);
    }
}
