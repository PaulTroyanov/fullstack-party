<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8855a90787bb728770f7455c934bf3a2426e5c79b19c91018f13f76ac873e9a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aff6ee466ea44658764b483abaa73e2e603c0c63f610f575da66abc2b4d24aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff6ee466ea44658764b483abaa73e2e603c0c63f610f575da66abc2b4d24aa3->enter($__internal_aff6ee466ea44658764b483abaa73e2e603c0c63f610f575da66abc2b4d24aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_09d745c92b30a660fb355695f7d46ab098d0f916c8191b4dc080335b906bc581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d745c92b30a660fb355695f7d46ab098d0f916c8191b4dc080335b906bc581->enter($__internal_09d745c92b30a660fb355695f7d46ab098d0f916c8191b4dc080335b906bc581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aff6ee466ea44658764b483abaa73e2e603c0c63f610f575da66abc2b4d24aa3->leave($__internal_aff6ee466ea44658764b483abaa73e2e603c0c63f610f575da66abc2b4d24aa3_prof);

        
        $__internal_09d745c92b30a660fb355695f7d46ab098d0f916c8191b4dc080335b906bc581->leave($__internal_09d745c92b30a660fb355695f7d46ab098d0f916c8191b4dc080335b906bc581_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f186d3b1583e5b722a60aa737eccbc783689a673310b9b29e5738df03945bc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f186d3b1583e5b722a60aa737eccbc783689a673310b9b29e5738df03945bc21->enter($__internal_f186d3b1583e5b722a60aa737eccbc783689a673310b9b29e5738df03945bc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9b719b0b9f690fc9ed3633b2bd9fa01121de17ad27864abdde095af37bad9a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b719b0b9f690fc9ed3633b2bd9fa01121de17ad27864abdde095af37bad9a6d->enter($__internal_9b719b0b9f690fc9ed3633b2bd9fa01121de17ad27864abdde095af37bad9a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9b719b0b9f690fc9ed3633b2bd9fa01121de17ad27864abdde095af37bad9a6d->leave($__internal_9b719b0b9f690fc9ed3633b2bd9fa01121de17ad27864abdde095af37bad9a6d_prof);

        
        $__internal_f186d3b1583e5b722a60aa737eccbc783689a673310b9b29e5738df03945bc21->leave($__internal_f186d3b1583e5b722a60aa737eccbc783689a673310b9b29e5738df03945bc21_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/tesonet/fullstack-party/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
