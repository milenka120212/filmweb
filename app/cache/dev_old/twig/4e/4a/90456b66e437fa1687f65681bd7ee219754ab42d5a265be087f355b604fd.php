<?php

/* base.html.twig */
class __TwigTemplate_4e4a90456b66e437fa1687f65681bd7ee219754ab42d5a265be087f355b604fd extends Twig_Template
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
        $__internal_9a41d34b1802724a6065496a44e673aef079c91bcd61e9a778a900d66be5304d = $this->env->getExtension("native_profiler");
        $__internal_9a41d34b1802724a6065496a44e673aef079c91bcd61e9a778a900d66be5304d->enter($__internal_9a41d34b1802724a6065496a44e673aef079c91bcd61e9a778a900d66be5304d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_9a41d34b1802724a6065496a44e673aef079c91bcd61e9a778a900d66be5304d->leave($__internal_9a41d34b1802724a6065496a44e673aef079c91bcd61e9a778a900d66be5304d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cb3f2d76929e6fb27f0d535087f35ca72f664558096397d01860c74ecc82737 = $this->env->getExtension("native_profiler");
        $__internal_4cb3f2d76929e6fb27f0d535087f35ca72f664558096397d01860c74ecc82737->enter($__internal_4cb3f2d76929e6fb27f0d535087f35ca72f664558096397d01860c74ecc82737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4cb3f2d76929e6fb27f0d535087f35ca72f664558096397d01860c74ecc82737->leave($__internal_4cb3f2d76929e6fb27f0d535087f35ca72f664558096397d01860c74ecc82737_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a69c62a600046353240de3b1e314a3eda8aba8b7a0ca2dada2c5d6fa88e9914d = $this->env->getExtension("native_profiler");
        $__internal_a69c62a600046353240de3b1e314a3eda8aba8b7a0ca2dada2c5d6fa88e9914d->enter($__internal_a69c62a600046353240de3b1e314a3eda8aba8b7a0ca2dada2c5d6fa88e9914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a69c62a600046353240de3b1e314a3eda8aba8b7a0ca2dada2c5d6fa88e9914d->leave($__internal_a69c62a600046353240de3b1e314a3eda8aba8b7a0ca2dada2c5d6fa88e9914d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2432c4183f25f64c62858e43808a98e12adf2db6e71cfff4bd3290cc1a593f4 = $this->env->getExtension("native_profiler");
        $__internal_e2432c4183f25f64c62858e43808a98e12adf2db6e71cfff4bd3290cc1a593f4->enter($__internal_e2432c4183f25f64c62858e43808a98e12adf2db6e71cfff4bd3290cc1a593f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e2432c4183f25f64c62858e43808a98e12adf2db6e71cfff4bd3290cc1a593f4->leave($__internal_e2432c4183f25f64c62858e43808a98e12adf2db6e71cfff4bd3290cc1a593f4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f687246ce114f9f4ebc792604689fe91aa8d8736afe4fe6d5324e8eebbb4d74 = $this->env->getExtension("native_profiler");
        $__internal_5f687246ce114f9f4ebc792604689fe91aa8d8736afe4fe6d5324e8eebbb4d74->enter($__internal_5f687246ce114f9f4ebc792604689fe91aa8d8736afe4fe6d5324e8eebbb4d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f687246ce114f9f4ebc792604689fe91aa8d8736afe4fe6d5324e8eebbb4d74->leave($__internal_5f687246ce114f9f4ebc792604689fe91aa8d8736afe4fe6d5324e8eebbb4d74_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
