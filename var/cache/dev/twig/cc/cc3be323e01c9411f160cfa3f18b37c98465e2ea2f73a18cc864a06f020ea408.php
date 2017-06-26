<?php

/* issue/issue.html.twig */
class __TwigTemplate_d503d3c570762ac694a5ccb379e60e67939a8d11862ee2ff85a5731612751abe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "issue/issue.html.twig", 1);
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
        $__internal_cc6370308c2e7d27a25492d0368d788ad1eb18753e0f4a36fd88e09d9e205dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6370308c2e7d27a25492d0368d788ad1eb18753e0f4a36fd88e09d9e205dff->enter($__internal_cc6370308c2e7d27a25492d0368d788ad1eb18753e0f4a36fd88e09d9e205dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "issue/issue.html.twig"));

        $__internal_043562c5f9d4e04227679b4267035f108d0e4897183417806a06861fdcc4bf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043562c5f9d4e04227679b4267035f108d0e4897183417806a06861fdcc4bf90->enter($__internal_043562c5f9d4e04227679b4267035f108d0e4897183417806a06861fdcc4bf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "issue/issue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc6370308c2e7d27a25492d0368d788ad1eb18753e0f4a36fd88e09d9e205dff->leave($__internal_cc6370308c2e7d27a25492d0368d788ad1eb18753e0f4a36fd88e09d9e205dff_prof);

        
        $__internal_043562c5f9d4e04227679b4267035f108d0e4897183417806a06861fdcc4bf90->leave($__internal_043562c5f9d4e04227679b4267035f108d0e4897183417806a06861fdcc4bf90_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_192ceab266caf2dcd12db9ffa09ba6889c675af0cbb500acb56e4f1164370b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192ceab266caf2dcd12db9ffa09ba6889c675af0cbb500acb56e4f1164370b47->enter($__internal_192ceab266caf2dcd12db9ffa09ba6889c675af0cbb500acb56e4f1164370b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4848bad287b7009e1329365c405d8383ec958606982465447fb366fe0b0a6e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4848bad287b7009e1329365c405d8383ec958606982465447fb366fe0b0a6e4f->enter($__internal_4848bad287b7009e1329365c405d8383ec958606982465447fb366fe0b0a6e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["issue"] ?? $this->getContext($context, "issue")), "getText", array(), "method"), "html", null, true);
        echo "
        </div>
    </div>
";
        
        $__internal_4848bad287b7009e1329365c405d8383ec958606982465447fb366fe0b0a6e4f->leave($__internal_4848bad287b7009e1329365c405d8383ec958606982465447fb366fe0b0a6e4f_prof);

        
        $__internal_192ceab266caf2dcd12db9ffa09ba6889c675af0cbb500acb56e4f1164370b47->leave($__internal_192ceab266caf2dcd12db9ffa09ba6889c675af0cbb500acb56e4f1164370b47_prof);

    }

    public function getTemplateName()
    {
        return "issue/issue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
        {{ issue.getText() }}
        </div>
    </div>
{% endblock %}
", "issue/issue.html.twig", "/Applications/MAMP/htdocs/tesonet/fullstack-party/app/Resources/views/issue/issue.html.twig");
    }
}
