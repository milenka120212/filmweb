<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8e47e151707587ef30224536c43ea52bb3a69d2ffa084411369a1301d4eb9740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f42b4ff1d9ee677b1a85faa1432ad69646550d089b83ab5aad2c7c27da4172f1 = $this->env->getExtension("native_profiler");
        $__internal_f42b4ff1d9ee677b1a85faa1432ad69646550d089b83ab5aad2c7c27da4172f1->enter($__internal_f42b4ff1d9ee677b1a85faa1432ad69646550d089b83ab5aad2c7c27da4172f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f42b4ff1d9ee677b1a85faa1432ad69646550d089b83ab5aad2c7c27da4172f1->leave($__internal_f42b4ff1d9ee677b1a85faa1432ad69646550d089b83ab5aad2c7c27da4172f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f2d8ed3992cc096b1970d9813c8bdea346f26d4700772c666da54c660164a71 = $this->env->getExtension("native_profiler");
        $__internal_7f2d8ed3992cc096b1970d9813c8bdea346f26d4700772c666da54c660164a71->enter($__internal_7f2d8ed3992cc096b1970d9813c8bdea346f26d4700772c666da54c660164a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        
        $__internal_7f2d8ed3992cc096b1970d9813c8bdea346f26d4700772c666da54c660164a71->leave($__internal_7f2d8ed3992cc096b1970d9813c8bdea346f26d4700772c666da54c660164a71_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  42 => 3,  11 => 1,);
    }
}
