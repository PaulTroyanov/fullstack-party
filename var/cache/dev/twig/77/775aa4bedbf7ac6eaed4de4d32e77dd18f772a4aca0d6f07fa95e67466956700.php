<?php

/* default/index.html.twig */
class __TwigTemplate_dab6337d00581a26d1c8ed562aca107fe7f58597abcfd001538f6ed44bbd6fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1595fd1fb28fba64dcce699dda954e166f23097081dcee571019b71b261a078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1595fd1fb28fba64dcce699dda954e166f23097081dcee571019b71b261a078->enter($__internal_a1595fd1fb28fba64dcce699dda954e166f23097081dcee571019b71b261a078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_7b6e9405390f4f1ca8b8e83ad601e75985b0a57afac30108c14c478491dd4551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6e9405390f4f1ca8b8e83ad601e75985b0a57afac30108c14c478491dd4551->enter($__internal_7b6e9405390f4f1ca8b8e83ad601e75985b0a57afac30108c14c478491dd4551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1595fd1fb28fba64dcce699dda954e166f23097081dcee571019b71b261a078->leave($__internal_a1595fd1fb28fba64dcce699dda954e166f23097081dcee571019b71b261a078_prof);

        
        $__internal_7b6e9405390f4f1ca8b8e83ad601e75985b0a57afac30108c14c478491dd4551->leave($__internal_7b6e9405390f4f1ca8b8e83ad601e75985b0a57afac30108c14c478491dd4551_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb5e06ac5b46fc5a9837e8a7ffaa5c7aa52b45e5dfb2141fba56f9e26822c041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5e06ac5b46fc5a9837e8a7ffaa5c7aa52b45e5dfb2141fba56f9e26822c041->enter($__internal_eb5e06ac5b46fc5a9837e8a7ffaa5c7aa52b45e5dfb2141fba56f9e26822c041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e96645182352f66ab1218f070e623dabb1fffd40055c7d79040a618f13135b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e96645182352f66ab1218f070e623dabb1fffd40055c7d79040a618f13135b3->enter($__internal_7e96645182352f66ab1218f070e623dabb1fffd40055c7d79040a618f13135b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">

        </div>
    </div>
";
        
        $__internal_7e96645182352f66ab1218f070e623dabb1fffd40055c7d79040a618f13135b3->leave($__internal_7e96645182352f66ab1218f070e623dabb1fffd40055c7d79040a618f13135b3_prof);

        
        $__internal_eb5e06ac5b46fc5a9837e8a7ffaa5c7aa52b45e5dfb2141fba56f9e26822c041->leave($__internal_eb5e06ac5b46fc5a9837e8a7ffaa5c7aa52b45e5dfb2141fba56f9e26822c041_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">

        </div>
    </div>
{% endblock %}
", "default/index.html.twig", "/Applications/MAMP/htdocs/tesonet/fullstack-party/app/Resources/views/default/index.html.twig");
    }
}
