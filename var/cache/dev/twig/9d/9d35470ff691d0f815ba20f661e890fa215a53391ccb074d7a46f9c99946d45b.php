<?php

/* base.html.twig */
class __TwigTemplate_f7b003358f4a53f0c14248e2ed054f0f02616937183a703fcac4f6e10255eeb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff4f1487bfa3994596a39f37de8a0104e67db3dbf5f5c0d0ad3206d9a4b72a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4f1487bfa3994596a39f37de8a0104e67db3dbf5f5c0d0ad3206d9a4b72a91->enter($__internal_ff4f1487bfa3994596a39f37de8a0104e67db3dbf5f5c0d0ad3206d9a4b72a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c9857c0ec7b8ab4bfc8310f9d3ef24984c2c1fb432403bd2454ae5b92bdf46f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9857c0ec7b8ab4bfc8310f9d3ef24984c2c1fb432403bd2454ae5b92bdf46f4->enter($__internal_c9857c0ec7b8ab4bfc8310f9d3ef24984c2c1fb432403bd2454ae5b92bdf46f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ff4f1487bfa3994596a39f37de8a0104e67db3dbf5f5c0d0ad3206d9a4b72a91->leave($__internal_ff4f1487bfa3994596a39f37de8a0104e67db3dbf5f5c0d0ad3206d9a4b72a91_prof);

        
        $__internal_c9857c0ec7b8ab4bfc8310f9d3ef24984c2c1fb432403bd2454ae5b92bdf46f4->leave($__internal_c9857c0ec7b8ab4bfc8310f9d3ef24984c2c1fb432403bd2454ae5b92bdf46f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7ee0bd87bc01dc00aa25fbce6d72dc9ee16e65da7cbcc9eb917bc5dc4b767a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ee0bd87bc01dc00aa25fbce6d72dc9ee16e65da7cbcc9eb917bc5dc4b767a2->enter($__internal_c7ee0bd87bc01dc00aa25fbce6d72dc9ee16e65da7cbcc9eb917bc5dc4b767a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5e5c0c2a2b85cb82a8b1691df69e7dba0c1ae1a48dce180ae1aed4c44020153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e5c0c2a2b85cb82a8b1691df69e7dba0c1ae1a48dce180ae1aed4c44020153->enter($__internal_a5e5c0c2a2b85cb82a8b1691df69e7dba0c1ae1a48dce180ae1aed4c44020153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a5e5c0c2a2b85cb82a8b1691df69e7dba0c1ae1a48dce180ae1aed4c44020153->leave($__internal_a5e5c0c2a2b85cb82a8b1691df69e7dba0c1ae1a48dce180ae1aed4c44020153_prof);

        
        $__internal_c7ee0bd87bc01dc00aa25fbce6d72dc9ee16e65da7cbcc9eb917bc5dc4b767a2->leave($__internal_c7ee0bd87bc01dc00aa25fbce6d72dc9ee16e65da7cbcc9eb917bc5dc4b767a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f504615fa5aafdf0549f8bd73c86b4843d9ffa9c476d633dcfb90307cdc89667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f504615fa5aafdf0549f8bd73c86b4843d9ffa9c476d633dcfb90307cdc89667->enter($__internal_f504615fa5aafdf0549f8bd73c86b4843d9ffa9c476d633dcfb90307cdc89667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b251737d4617d873901cc022bc567d47e0499ac520580009bfa826b2def651bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b251737d4617d873901cc022bc567d47e0499ac520580009bfa826b2def651bf->enter($__internal_b251737d4617d873901cc022bc567d47e0499ac520580009bfa826b2def651bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b251737d4617d873901cc022bc567d47e0499ac520580009bfa826b2def651bf->leave($__internal_b251737d4617d873901cc022bc567d47e0499ac520580009bfa826b2def651bf_prof);

        
        $__internal_f504615fa5aafdf0549f8bd73c86b4843d9ffa9c476d633dcfb90307cdc89667->leave($__internal_f504615fa5aafdf0549f8bd73c86b4843d9ffa9c476d633dcfb90307cdc89667_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cbd48cbe74f013626b30dac5d981374c8782586c8da1608229cf6cabf893049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cbd48cbe74f013626b30dac5d981374c8782586c8da1608229cf6cabf893049->enter($__internal_2cbd48cbe74f013626b30dac5d981374c8782586c8da1608229cf6cabf893049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa9bdcb6b32930c12c2dcd527f2898d53855bb260b8c715af1f9af40339e4668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9bdcb6b32930c12c2dcd527f2898d53855bb260b8c715af1f9af40339e4668->enter($__internal_fa9bdcb6b32930c12c2dcd527f2898d53855bb260b8c715af1f9af40339e4668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa9bdcb6b32930c12c2dcd527f2898d53855bb260b8c715af1f9af40339e4668->leave($__internal_fa9bdcb6b32930c12c2dcd527f2898d53855bb260b8c715af1f9af40339e4668_prof);

        
        $__internal_2cbd48cbe74f013626b30dac5d981374c8782586c8da1608229cf6cabf893049->leave($__internal_2cbd48cbe74f013626b30dac5d981374c8782586c8da1608229cf6cabf893049_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4da4ac3d236dea5d06c30a05d65443a994ccba66213d7089ebc72a9d2e7cb255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da4ac3d236dea5d06c30a05d65443a994ccba66213d7089ebc72a9d2e7cb255->enter($__internal_4da4ac3d236dea5d06c30a05d65443a994ccba66213d7089ebc72a9d2e7cb255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_69b668327516247f64faf0ec9df72cae2481c280a9f75f72515cb8a01db60152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b668327516247f64faf0ec9df72cae2481c280a9f75f72515cb8a01db60152->enter($__internal_69b668327516247f64faf0ec9df72cae2481c280a9f75f72515cb8a01db60152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_69b668327516247f64faf0ec9df72cae2481c280a9f75f72515cb8a01db60152->leave($__internal_69b668327516247f64faf0ec9df72cae2481c280a9f75f72515cb8a01db60152_prof);

        
        $__internal_4da4ac3d236dea5d06c30a05d65443a994ccba66213d7089ebc72a9d2e7cb255->leave($__internal_4da4ac3d236dea5d06c30a05d65443a994ccba66213d7089ebc72a9d2e7cb255_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/tesonet/fullstack-party/app/Resources/views/base.html.twig");
    }
}
