<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_82a27d130ce15297a8da89548b7eda81f377b1b06654ca2c23eb82e2847a52f5 extends Twig_Template
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
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f03fcbc661b65e299ca6f72de8797a02d682c6a10543f1ee7abe7cefcab45340 = $this->env->getExtension("native_profiler");
        $__internal_f03fcbc661b65e299ca6f72de8797a02d682c6a10543f1ee7abe7cefcab45340->enter($__internal_f03fcbc661b65e299ca6f72de8797a02d682c6a10543f1ee7abe7cefcab45340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f03fcbc661b65e299ca6f72de8797a02d682c6a10543f1ee7abe7cefcab45340->leave($__internal_f03fcbc661b65e299ca6f72de8797a02d682c6a10543f1ee7abe7cefcab45340_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee671a7072c581e27373760edf700a07ad883f262541922b34a7da0363010f8e = $this->env->getExtension("native_profiler");
        $__internal_ee671a7072c581e27373760edf700a07ad883f262541922b34a7da0363010f8e->enter($__internal_ee671a7072c581e27373760edf700a07ad883f262541922b34a7da0363010f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mój profil";
        
        $__internal_ee671a7072c581e27373760edf700a07ad883f262541922b34a7da0363010f8e->leave($__internal_ee671a7072c581e27373760edf700a07ad883f262541922b34a7da0363010f8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7559624afe0eaf92382914c133b27441d71d333b3769d65fe8e75b6557fa21d = $this->env->getExtension("native_profiler");
        $__internal_a7559624afe0eaf92382914c133b27441d71d333b3769d65fe8e75b6557fa21d->enter($__internal_a7559624afe0eaf92382914c133b27441d71d333b3769d65fe8e75b6557fa21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <style>
        form {
            margin: 2.5%;
        }
        form div {
            display: block;
        }
        form div>label {
            float: left;
            width: 15%;
            font-weight: bold;
        }
        form div input[type=\"text\"], input[type=\"email\"], input[type=\"password\"] {
            margin-bottom: 16px;
            margin-right: 6px;
            outline: 0 none;
            padding: 3px 3px 3px 5px;
            font-size: 12px;
            line-height:15px;
        }
        form div>input:focus {
            box-shadow: 0 0 5px  blue;
        }
        form div input[type=\"submit\"] {
            margin-top: 0.5%;
            margin-left: 112px;
            width: 18%;
        }
    </style>
";
        // line 33
        $this->env->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig")->display($context);
        
        $__internal_a7559624afe0eaf92382914c133b27441d71d333b3769d65fe8e75b6557fa21d->leave($__internal_a7559624afe0eaf92382914c133b27441d71d333b3769d65fe8e75b6557fa21d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  61 => 4,  55 => 3,  43 => 2,  11 => 1,);
    }
}
