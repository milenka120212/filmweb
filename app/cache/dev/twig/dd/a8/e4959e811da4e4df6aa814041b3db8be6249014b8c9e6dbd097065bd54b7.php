<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_dda8e4959e811da4e4df6aa814041b3db8be6249014b8c9e6dbd097065bd54b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FilmwebWebsiteBundle::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'gatunki' => array($this, 'block_gatunki'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FilmwebWebsiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_821d1a9ab11cfa37ee10441c8a2b5f84a54e1cbe296cd077ec34dac92498795a = $this->env->getExtension("native_profiler");
        $__internal_821d1a9ab11cfa37ee10441c8a2b5f84a54e1cbe296cd077ec34dac92498795a->enter($__internal_821d1a9ab11cfa37ee10441c8a2b5f84a54e1cbe296cd077ec34dac92498795a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_821d1a9ab11cfa37ee10441c8a2b5f84a54e1cbe296cd077ec34dac92498795a->leave($__internal_821d1a9ab11cfa37ee10441c8a2b5f84a54e1cbe296cd077ec34dac92498795a_prof);

    }

    // line 3
    public function block_gatunki($context, array $blocks = array())
    {
        $__internal_a836e2c83ce4365389d78f7763a7aa95dad0711f58227982bd678008293fbe1b = $this->env->getExtension("native_profiler");
        $__internal_a836e2c83ce4365389d78f7763a7aa95dad0711f58227982bd678008293fbe1b->enter($__internal_a836e2c83ce4365389d78f7763a7aa95dad0711f58227982bd678008293fbe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gatunki"));

        
        $__internal_a836e2c83ce4365389d78f7763a7aa95dad0711f58227982bd678008293fbe1b->leave($__internal_a836e2c83ce4365389d78f7763a7aa95dad0711f58227982bd678008293fbe1b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a4440e1a1e0f7b56aa146b558629ffdc56879c94234849a5ccdb3f9b3692801 = $this->env->getExtension("native_profiler");
        $__internal_1a4440e1a1e0f7b56aa146b558629ffdc56879c94234849a5ccdb3f9b3692801->enter($__internal_1a4440e1a1e0f7b56aa146b558629ffdc56879c94234849a5ccdb3f9b3692801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Rejestracja";
        
        $__internal_1a4440e1a1e0f7b56aa146b558629ffdc56879c94234849a5ccdb3f9b3692801->leave($__internal_1a4440e1a1e0f7b56aa146b558629ffdc56879c94234849a5ccdb3f9b3692801_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_61018fc68dc918dad2509765855bc183c7f3dd783afd3cb91c15c867edebee38 = $this->env->getExtension("native_profiler");
        $__internal_61018fc68dc918dad2509765855bc183c7f3dd783afd3cb91c15c867edebee38->enter($__internal_61018fc68dc918dad2509765855bc183c7f3dd783afd3cb91c15c867edebee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .fos_user_registration_register div {
            display: block;
            margin: 0px;
            margin-left: 14%;
        }
        .fos_user_registration_register div label {
            float: left;
            width: 15%;
            text-align: right;
            padding-right: 10px;
            font-weight: bold;
        }
        .fos_user_registration_register div input {
            margin-bottom: 16px;
            margin-right: 6px;
            outline: 0 none;
            padding: 3px 3px 3px 5px;
            font-size: 12px;
            line-height:15px;
        }
        .fos_user_registration_register div>input:focus {
            box-shadow: 0 0 5px blue;
        }
        .fos_user_registration_register div>input[type=\"submit\"] {
            margin-left: 230px;
            width: 12%;
        }
    </style>
    ";
        // line 35
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_61018fc68dc918dad2509765855bc183c7f3dd783afd3cb91c15c867edebee38->leave($__internal_61018fc68dc918dad2509765855bc183c7f3dd783afd3cb91c15c867edebee38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  73 => 6,  67 => 5,  55 => 4,  44 => 3,  11 => 1,);
    }
}
