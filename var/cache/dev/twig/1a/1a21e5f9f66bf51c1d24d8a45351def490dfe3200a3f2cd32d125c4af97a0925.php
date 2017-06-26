<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_37e19360468c85475410f4d697017a98e83c6676c254fc1857be6ba06718334b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a321828b7e71317110882f0860e9ab27133def1aee650116308b52bb4b4e8cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a321828b7e71317110882f0860e9ab27133def1aee650116308b52bb4b4e8cf3->enter($__internal_a321828b7e71317110882f0860e9ab27133def1aee650116308b52bb4b4e8cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b638d006dc2ebdb213c7c48da7001849d635c480eed57f821844939dd0d4e38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b638d006dc2ebdb213c7c48da7001849d635c480eed57f821844939dd0d4e38d->enter($__internal_b638d006dc2ebdb213c7c48da7001849d635c480eed57f821844939dd0d4e38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a321828b7e71317110882f0860e9ab27133def1aee650116308b52bb4b4e8cf3->leave($__internal_a321828b7e71317110882f0860e9ab27133def1aee650116308b52bb4b4e8cf3_prof);

        
        $__internal_b638d006dc2ebdb213c7c48da7001849d635c480eed57f821844939dd0d4e38d->leave($__internal_b638d006dc2ebdb213c7c48da7001849d635c480eed57f821844939dd0d4e38d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c1ce381437c6f78a05985ae1f569d84517eae983fec7cacee8baaeaa65af30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1ce381437c6f78a05985ae1f569d84517eae983fec7cacee8baaeaa65af30d->enter($__internal_5c1ce381437c6f78a05985ae1f569d84517eae983fec7cacee8baaeaa65af30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0fcf0c7d909d8679b910ffb18de2fb3d2036b6811fce5c87a32438356ab65203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fcf0c7d909d8679b910ffb18de2fb3d2036b6811fce5c87a32438356ab65203->enter($__internal_0fcf0c7d909d8679b910ffb18de2fb3d2036b6811fce5c87a32438356ab65203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0fcf0c7d909d8679b910ffb18de2fb3d2036b6811fce5c87a32438356ab65203->leave($__internal_0fcf0c7d909d8679b910ffb18de2fb3d2036b6811fce5c87a32438356ab65203_prof);

        
        $__internal_5c1ce381437c6f78a05985ae1f569d84517eae983fec7cacee8baaeaa65af30d->leave($__internal_5c1ce381437c6f78a05985ae1f569d84517eae983fec7cacee8baaeaa65af30d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c895101f6756f81ebd29fce3465a1e2ecb3b210a7a85c203e831fd6976b1a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c895101f6756f81ebd29fce3465a1e2ecb3b210a7a85c203e831fd6976b1a90->enter($__internal_3c895101f6756f81ebd29fce3465a1e2ecb3b210a7a85c203e831fd6976b1a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_804f157ccb694b97754946a2cd505eb58f7acae4298e3ed10610fcacf0ed295e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804f157ccb694b97754946a2cd505eb58f7acae4298e3ed10610fcacf0ed295e->enter($__internal_804f157ccb694b97754946a2cd505eb58f7acae4298e3ed10610fcacf0ed295e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_804f157ccb694b97754946a2cd505eb58f7acae4298e3ed10610fcacf0ed295e->leave($__internal_804f157ccb694b97754946a2cd505eb58f7acae4298e3ed10610fcacf0ed295e_prof);

        
        $__internal_3c895101f6756f81ebd29fce3465a1e2ecb3b210a7a85c203e831fd6976b1a90->leave($__internal_3c895101f6756f81ebd29fce3465a1e2ecb3b210a7a85c203e831fd6976b1a90_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d80097a0992e36969e589825daedc91b51bd365fb4165332b5f61bb51ab1133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d80097a0992e36969e589825daedc91b51bd365fb4165332b5f61bb51ab1133->enter($__internal_7d80097a0992e36969e589825daedc91b51bd365fb4165332b5f61bb51ab1133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39cdc69e0afffedce7f3ac79d91de1184cd6d66268c1455e1580083a2a1efc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cdc69e0afffedce7f3ac79d91de1184cd6d66268c1455e1580083a2a1efc29->enter($__internal_39cdc69e0afffedce7f3ac79d91de1184cd6d66268c1455e1580083a2a1efc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39cdc69e0afffedce7f3ac79d91de1184cd6d66268c1455e1580083a2a1efc29->leave($__internal_39cdc69e0afffedce7f3ac79d91de1184cd6d66268c1455e1580083a2a1efc29_prof);

        
        $__internal_7d80097a0992e36969e589825daedc91b51bd365fb4165332b5f61bb51ab1133->leave($__internal_7d80097a0992e36969e589825daedc91b51bd365fb4165332b5f61bb51ab1133_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/tesonet/fullstack-party/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
