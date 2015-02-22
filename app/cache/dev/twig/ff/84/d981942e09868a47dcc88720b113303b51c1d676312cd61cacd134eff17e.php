<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_ff84d981942e09868a47dcc88720b113303b51c1d676312cd61cacd134eff17e extends Twig_Template
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
        $__internal_094efd94ad7a5c873ad0b9c0f7815485cc724e6d8ea70bc6b0f3ac81c1442954 = $this->env->getExtension("native_profiler");
        $__internal_094efd94ad7a5c873ad0b9c0f7815485cc724e6d8ea70bc6b0f3ac81c1442954->enter($__internal_094efd94ad7a5c873ad0b9c0f7815485cc724e6d8ea70bc6b0f3ac81c1442954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094efd94ad7a5c873ad0b9c0f7815485cc724e6d8ea70bc6b0f3ac81c1442954->leave($__internal_094efd94ad7a5c873ad0b9c0f7815485cc724e6d8ea70bc6b0f3ac81c1442954_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cda7f99bf620161ff07ed721322099c8ee403c0b7ffded111c7913fd159f24f2 = $this->env->getExtension("native_profiler");
        $__internal_cda7f99bf620161ff07ed721322099c8ee403c0b7ffded111c7913fd159f24f2->enter($__internal_cda7f99bf620161ff07ed721322099c8ee403c0b7ffded111c7913fd159f24f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
        
        $__internal_cda7f99bf620161ff07ed721322099c8ee403c0b7ffded111c7913fd159f24f2->leave($__internal_cda7f99bf620161ff07ed721322099c8ee403c0b7ffded111c7913fd159f24f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  58 => 9,  55 => 8,  53 => 7,  48 => 6,  42 => 5,  11 => 1,);
    }
}
