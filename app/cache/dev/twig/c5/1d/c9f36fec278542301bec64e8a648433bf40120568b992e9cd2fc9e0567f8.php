<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_c51dc9f36fec278542301bec64e8a648433bf40120568b992e9cd2fc9e0567f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a557afafdbd8ae25f0643f0fd5c360bfe0241bf6d2a24d16eb9c57e983e43455 = $this->env->getExtension("native_profiler");
        $__internal_a557afafdbd8ae25f0643f0fd5c360bfe0241bf6d2a24d16eb9c57e983e43455->enter($__internal_a557afafdbd8ae25f0643f0fd5c360bfe0241bf6d2a24d16eb9c57e983e43455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_a557afafdbd8ae25f0643f0fd5c360bfe0241bf6d2a24d16eb9c57e983e43455->leave($__internal_a557afafdbd8ae25f0643f0fd5c360bfe0241bf6d2a24d16eb9c57e983e43455_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  25 => 3,  22 => 2,);
    }
}
