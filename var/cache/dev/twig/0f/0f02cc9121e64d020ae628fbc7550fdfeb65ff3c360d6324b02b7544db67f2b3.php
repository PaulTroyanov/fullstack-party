<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2851c4304a49605bec688a98e6cbf0a86b4cb7131ff22c6c996a8f8be31c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c1deebed7596e736ff224928bbc0420ad07e26c255b74812dc8fd42ded767173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1deebed7596e736ff224928bbc0420ad07e26c255b74812dc8fd42ded767173->enter($__internal_c1deebed7596e736ff224928bbc0420ad07e26c255b74812dc8fd42ded767173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3a8e3adb6946f135e744eb88e74433bf03d37ceb0e22213dcf878a35d56ff9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8e3adb6946f135e744eb88e74433bf03d37ceb0e22213dcf878a35d56ff9d2->enter($__internal_3a8e3adb6946f135e744eb88e74433bf03d37ceb0e22213dcf878a35d56ff9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1deebed7596e736ff224928bbc0420ad07e26c255b74812dc8fd42ded767173->leave($__internal_c1deebed7596e736ff224928bbc0420ad07e26c255b74812dc8fd42ded767173_prof);

        
        $__internal_3a8e3adb6946f135e744eb88e74433bf03d37ceb0e22213dcf878a35d56ff9d2->leave($__internal_3a8e3adb6946f135e744eb88e74433bf03d37ceb0e22213dcf878a35d56ff9d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_55f404e60b25a5158c1504d2612f3e9d8999837fb62b7c7f080b816f469ecdcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f404e60b25a5158c1504d2612f3e9d8999837fb62b7c7f080b816f469ecdcb->enter($__internal_55f404e60b25a5158c1504d2612f3e9d8999837fb62b7c7f080b816f469ecdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec730220dd47ba340cf8b2af1bb4d81ade8e356f8c09944c1e27d1a09f49a6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec730220dd47ba340cf8b2af1bb4d81ade8e356f8c09944c1e27d1a09f49a6ce->enter($__internal_ec730220dd47ba340cf8b2af1bb4d81ade8e356f8c09944c1e27d1a09f49a6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ec730220dd47ba340cf8b2af1bb4d81ade8e356f8c09944c1e27d1a09f49a6ce->leave($__internal_ec730220dd47ba340cf8b2af1bb4d81ade8e356f8c09944c1e27d1a09f49a6ce_prof);

        
        $__internal_55f404e60b25a5158c1504d2612f3e9d8999837fb62b7c7f080b816f469ecdcb->leave($__internal_55f404e60b25a5158c1504d2612f3e9d8999837fb62b7c7f080b816f469ecdcb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf0e3cd42ab64043431ce730fa3273661d66a2f9ccecc9fa57e8e779ac2804fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0e3cd42ab64043431ce730fa3273661d66a2f9ccecc9fa57e8e779ac2804fc->enter($__internal_bf0e3cd42ab64043431ce730fa3273661d66a2f9ccecc9fa57e8e779ac2804fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1232cc423b9a5b590c823e2e40c720ca6864a4746d62fc61dd4458b45e131cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1232cc423b9a5b590c823e2e40c720ca6864a4746d62fc61dd4458b45e131cf2->enter($__internal_1232cc423b9a5b590c823e2e40c720ca6864a4746d62fc61dd4458b45e131cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1232cc423b9a5b590c823e2e40c720ca6864a4746d62fc61dd4458b45e131cf2->leave($__internal_1232cc423b9a5b590c823e2e40c720ca6864a4746d62fc61dd4458b45e131cf2_prof);

        
        $__internal_bf0e3cd42ab64043431ce730fa3273661d66a2f9ccecc9fa57e8e779ac2804fc->leave($__internal_bf0e3cd42ab64043431ce730fa3273661d66a2f9ccecc9fa57e8e779ac2804fc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4033c642f0cce58f0861bd6dc76192e2672bff2c632d8a43192dc2446d09abac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4033c642f0cce58f0861bd6dc76192e2672bff2c632d8a43192dc2446d09abac->enter($__internal_4033c642f0cce58f0861bd6dc76192e2672bff2c632d8a43192dc2446d09abac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa641af214f2cca87076c64c11a1e65d98d05eff3bf3ff585c00ad554f3e1c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa641af214f2cca87076c64c11a1e65d98d05eff3bf3ff585c00ad554f3e1c45->enter($__internal_aa641af214f2cca87076c64c11a1e65d98d05eff3bf3ff585c00ad554f3e1c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aa641af214f2cca87076c64c11a1e65d98d05eff3bf3ff585c00ad554f3e1c45->leave($__internal_aa641af214f2cca87076c64c11a1e65d98d05eff3bf3ff585c00ad554f3e1c45_prof);

        
        $__internal_4033c642f0cce58f0861bd6dc76192e2672bff2c632d8a43192dc2446d09abac->leave($__internal_4033c642f0cce58f0861bd6dc76192e2672bff2c632d8a43192dc2446d09abac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/tesonet/fullstack-party/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
