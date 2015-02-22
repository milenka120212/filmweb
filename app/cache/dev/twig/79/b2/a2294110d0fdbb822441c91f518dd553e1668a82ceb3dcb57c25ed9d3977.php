<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_79b2a2294110d0fdbb822441c91f518dd553e1668a82ceb3dcb57c25ed9d3977 extends Twig_Template
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
        $__internal_d2eea99371ee697f55bb310117201297688ce9808a9d48fba91c69be01d66ca2 = $this->env->getExtension("native_profiler");
        $__internal_d2eea99371ee697f55bb310117201297688ce9808a9d48fba91c69be01d66ca2->enter($__internal_d2eea99371ee697f55bb310117201297688ce9808a9d48fba91c69be01d66ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_d2eea99371ee697f55bb310117201297688ce9808a9d48fba91c69be01d66ca2->leave($__internal_d2eea99371ee697f55bb310117201297688ce9808a9d48fba91c69be01d66ca2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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
