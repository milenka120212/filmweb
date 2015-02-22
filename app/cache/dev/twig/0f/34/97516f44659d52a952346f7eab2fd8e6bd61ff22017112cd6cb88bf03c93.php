<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0f3497516f44659d52a952346f7eab2fd8e6bd61ff22017112cd6cb88bf03c93 extends Twig_Template
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
        $__internal_1b2017f93cc2044fa0116c405b185184b0f85f73a07729d674281ad761deb8a1 = $this->env->getExtension("native_profiler");
        $__internal_1b2017f93cc2044fa0116c405b185184b0f85f73a07729d674281ad761deb8a1->enter($__internal_1b2017f93cc2044fa0116c405b185184b0f85f73a07729d674281ad761deb8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b2017f93cc2044fa0116c405b185184b0f85f73a07729d674281ad761deb8a1->leave($__internal_1b2017f93cc2044fa0116c405b185184b0f85f73a07729d674281ad761deb8a1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb5345fd6765f42216b07e2e2882473c39190fd8eccd1742edf570e340ae95d8 = $this->env->getExtension("native_profiler");
        $__internal_eb5345fd6765f42216b07e2e2882473c39190fd8eccd1742edf570e340ae95d8->enter($__internal_eb5345fd6765f42216b07e2e2882473c39190fd8eccd1742edf570e340ae95d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Logowanie";
        
        $__internal_eb5345fd6765f42216b07e2e2882473c39190fd8eccd1742edf570e340ae95d8->leave($__internal_eb5345fd6765f42216b07e2e2882473c39190fd8eccd1742edf570e340ae95d8_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92fe34a4debc8648a0df245cf71148bba9d758ba387339b643cde329334f5878 = $this->env->getExtension("native_profiler");
        $__internal_92fe34a4debc8648a0df245cf71148bba9d758ba387339b643cde329334f5878->enter($__internal_92fe34a4debc8648a0df245cf71148bba9d758ba387339b643cde329334f5878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "    <style>
        a {
            text-decoration: none;
            color: blue;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
<form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><p align=\"center\">Nie posiadam konta</p></a>
";
        
        $__internal_92fe34a4debc8648a0df245cf71148bba9d758ba387339b643cde329334f5878->leave($__internal_92fe34a4debc8648a0df245cf71148bba9d758ba387339b643cde329334f5878_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  110 => 31,  105 => 29,  98 => 25,  93 => 23,  89 => 22,  84 => 20,  80 => 19,  69 => 10,  63 => 8,  61 => 7,  55 => 6,  43 => 4,  11 => 1,);
    }
}
