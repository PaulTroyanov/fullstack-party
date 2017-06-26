<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_58d981d2330bafbb977c78bb1637dee8987d33acaa98a9130d9658072bf46244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d10940241b0c5ce21ea426231f5b3210ada1ffe999b2695de7eb386931a6c658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10940241b0c5ce21ea426231f5b3210ada1ffe999b2695de7eb386931a6c658->enter($__internal_d10940241b0c5ce21ea426231f5b3210ada1ffe999b2695de7eb386931a6c658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_273a8b5e280e583b1f89b2264bf1926010734e03df7312121f35aa73e07776bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273a8b5e280e583b1f89b2264bf1926010734e03df7312121f35aa73e07776bf->enter($__internal_273a8b5e280e583b1f89b2264bf1926010734e03df7312121f35aa73e07776bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d10940241b0c5ce21ea426231f5b3210ada1ffe999b2695de7eb386931a6c658->leave($__internal_d10940241b0c5ce21ea426231f5b3210ada1ffe999b2695de7eb386931a6c658_prof);

        
        $__internal_273a8b5e280e583b1f89b2264bf1926010734e03df7312121f35aa73e07776bf->leave($__internal_273a8b5e280e583b1f89b2264bf1926010734e03df7312121f35aa73e07776bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_865d69989361d6e74c275c80c51e6a7ffb7497c11ca8f7b412539ac940ad0c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865d69989361d6e74c275c80c51e6a7ffb7497c11ca8f7b412539ac940ad0c39->enter($__internal_865d69989361d6e74c275c80c51e6a7ffb7497c11ca8f7b412539ac940ad0c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c503e45f70d81a1dc96eef4b9cc6da66fa82d7a84bb1c9f6a833d6ab95118d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c503e45f70d81a1dc96eef4b9cc6da66fa82d7a84bb1c9f6a833d6ab95118d1->enter($__internal_3c503e45f70d81a1dc96eef4b9cc6da66fa82d7a84bb1c9f6a833d6ab95118d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3c503e45f70d81a1dc96eef4b9cc6da66fa82d7a84bb1c9f6a833d6ab95118d1->leave($__internal_3c503e45f70d81a1dc96eef4b9cc6da66fa82d7a84bb1c9f6a833d6ab95118d1_prof);

        
        $__internal_865d69989361d6e74c275c80c51e6a7ffb7497c11ca8f7b412539ac940ad0c39->leave($__internal_865d69989361d6e74c275c80c51e6a7ffb7497c11ca8f7b412539ac940ad0c39_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e0b19e45e67239f8adc22bd2f71a4a1a387cd32904d5e4121dae4cc75ec2bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0b19e45e67239f8adc22bd2f71a4a1a387cd32904d5e4121dae4cc75ec2bae->enter($__internal_7e0b19e45e67239f8adc22bd2f71a4a1a387cd32904d5e4121dae4cc75ec2bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fbc7125cae984e99158c941d7188ee424cfa77fa2dbcda3e5ccf194f6262bb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc7125cae984e99158c941d7188ee424cfa77fa2dbcda3e5ccf194f6262bb7e->enter($__internal_fbc7125cae984e99158c941d7188ee424cfa77fa2dbcda3e5ccf194f6262bb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fbc7125cae984e99158c941d7188ee424cfa77fa2dbcda3e5ccf194f6262bb7e->leave($__internal_fbc7125cae984e99158c941d7188ee424cfa77fa2dbcda3e5ccf194f6262bb7e_prof);

        
        $__internal_7e0b19e45e67239f8adc22bd2f71a4a1a387cd32904d5e4121dae4cc75ec2bae->leave($__internal_7e0b19e45e67239f8adc22bd2f71a4a1a387cd32904d5e4121dae4cc75ec2bae_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_df9dd3d7096993b5f109b16e47b9ca0f350264ca23d07447f7f04fdccd6d82ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9dd3d7096993b5f109b16e47b9ca0f350264ca23d07447f7f04fdccd6d82ab->enter($__internal_df9dd3d7096993b5f109b16e47b9ca0f350264ca23d07447f7f04fdccd6d82ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2f89ed62309f0dadae304318d9d6f1152e14cfe5f63b5a6f3617cdffaef6a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f89ed62309f0dadae304318d9d6f1152e14cfe5f63b5a6f3617cdffaef6a0a->enter($__internal_b2f89ed62309f0dadae304318d9d6f1152e14cfe5f63b5a6f3617cdffaef6a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2f89ed62309f0dadae304318d9d6f1152e14cfe5f63b5a6f3617cdffaef6a0a->leave($__internal_b2f89ed62309f0dadae304318d9d6f1152e14cfe5f63b5a6f3617cdffaef6a0a_prof);

        
        $__internal_df9dd3d7096993b5f109b16e47b9ca0f350264ca23d07447f7f04fdccd6d82ab->leave($__internal_df9dd3d7096993b5f109b16e47b9ca0f350264ca23d07447f7f04fdccd6d82ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/tesonet/fullstack-party/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
