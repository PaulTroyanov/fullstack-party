<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_62265a9cd7197fbb49809379707fe782ce87377e8ee238cdcd5a24424201951e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95e29a6b9c512bc83985d102f466a4f24c1ff6dda2540241f5af0f7fff102c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e29a6b9c512bc83985d102f466a4f24c1ff6dda2540241f5af0f7fff102c21->enter($__internal_95e29a6b9c512bc83985d102f466a4f24c1ff6dda2540241f5af0f7fff102c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_56a96f1da05267efd02df4d0419ca333a94268b6c5fc81c02a04b4712cae35b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a96f1da05267efd02df4d0419ca333a94268b6c5fc81c02a04b4712cae35b0->enter($__internal_56a96f1da05267efd02df4d0419ca333a94268b6c5fc81c02a04b4712cae35b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e29a6b9c512bc83985d102f466a4f24c1ff6dda2540241f5af0f7fff102c21->leave($__internal_95e29a6b9c512bc83985d102f466a4f24c1ff6dda2540241f5af0f7fff102c21_prof);

        
        $__internal_56a96f1da05267efd02df4d0419ca333a94268b6c5fc81c02a04b4712cae35b0->leave($__internal_56a96f1da05267efd02df4d0419ca333a94268b6c5fc81c02a04b4712cae35b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e9ed19b35561636fdb85e6f24f7c7d7a7499358a9a62eaf848b882d855887c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9ed19b35561636fdb85e6f24f7c7d7a7499358a9a62eaf848b882d855887c0->enter($__internal_1e9ed19b35561636fdb85e6f24f7c7d7a7499358a9a62eaf848b882d855887c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca54ba9ec87c1ae57e42ce4dfea74b20488449ef2435dd9aded59c003743b22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca54ba9ec87c1ae57e42ce4dfea74b20488449ef2435dd9aded59c003743b22f->enter($__internal_ca54ba9ec87c1ae57e42ce4dfea74b20488449ef2435dd9aded59c003743b22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ca54ba9ec87c1ae57e42ce4dfea74b20488449ef2435dd9aded59c003743b22f->leave($__internal_ca54ba9ec87c1ae57e42ce4dfea74b20488449ef2435dd9aded59c003743b22f_prof);

        
        $__internal_1e9ed19b35561636fdb85e6f24f7c7d7a7499358a9a62eaf848b882d855887c0->leave($__internal_1e9ed19b35561636fdb85e6f24f7c7d7a7499358a9a62eaf848b882d855887c0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_89b2f572b884459a0f3915616c3517042ba59227aa53ce3ed81e028408fdb4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b2f572b884459a0f3915616c3517042ba59227aa53ce3ed81e028408fdb4f7->enter($__internal_89b2f572b884459a0f3915616c3517042ba59227aa53ce3ed81e028408fdb4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5eb0aaa0085a68a0fe2609d03c0d00ac72b311c6f17e67f54046314012e26ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb0aaa0085a68a0fe2609d03c0d00ac72b311c6f17e67f54046314012e26ea2->enter($__internal_5eb0aaa0085a68a0fe2609d03c0d00ac72b311c6f17e67f54046314012e26ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5eb0aaa0085a68a0fe2609d03c0d00ac72b311c6f17e67f54046314012e26ea2->leave($__internal_5eb0aaa0085a68a0fe2609d03c0d00ac72b311c6f17e67f54046314012e26ea2_prof);

        
        $__internal_89b2f572b884459a0f3915616c3517042ba59227aa53ce3ed81e028408fdb4f7->leave($__internal_89b2f572b884459a0f3915616c3517042ba59227aa53ce3ed81e028408fdb4f7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_82d021f3e09f73121e300e3d2e105468f4c388b87914ddf8df636a2c78652453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d021f3e09f73121e300e3d2e105468f4c388b87914ddf8df636a2c78652453->enter($__internal_82d021f3e09f73121e300e3d2e105468f4c388b87914ddf8df636a2c78652453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb8261cc4022c6d1e970b75714ce16f8d26ca0956015f1c22ddc791100c203be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8261cc4022c6d1e970b75714ce16f8d26ca0956015f1c22ddc791100c203be->enter($__internal_cb8261cc4022c6d1e970b75714ce16f8d26ca0956015f1c22ddc791100c203be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cb8261cc4022c6d1e970b75714ce16f8d26ca0956015f1c22ddc791100c203be->leave($__internal_cb8261cc4022c6d1e970b75714ce16f8d26ca0956015f1c22ddc791100c203be_prof);

        
        $__internal_82d021f3e09f73121e300e3d2e105468f4c388b87914ddf8df636a2c78652453->leave($__internal_82d021f3e09f73121e300e3d2e105468f4c388b87914ddf8df636a2c78652453_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/tesonet/fullstack-party/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
