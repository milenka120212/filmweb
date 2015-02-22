<?php

/* FilmwebWebsiteBundle:Order:order_information.html.twig */
class __TwigTemplate_a7d99d117bcf472bd48424b6ff4d742723357398179ec83fd6f11c778d3287e5 extends Twig_Template
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
            'title' => array($this, 'block_title'),
            'filmPreview' => array($this, 'block_filmPreview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FilmwebWebsiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c18acec2f234c34ce98e4d5d70a85115194752a63f5725661acfe625fc6c4e9 = $this->env->getExtension("native_profiler");
        $__internal_2c18acec2f234c34ce98e4d5d70a85115194752a63f5725661acfe625fc6c4e9->enter($__internal_2c18acec2f234c34ce98e4d5d70a85115194752a63f5725661acfe625fc6c4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmwebWebsiteBundle:Order:order_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c18acec2f234c34ce98e4d5d70a85115194752a63f5725661acfe625fc6c4e9->leave($__internal_2c18acec2f234c34ce98e4d5d70a85115194752a63f5725661acfe625fc6c4e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85a618649172131f2cb3ba313f9b593193480861217cb2086ace1025a64960e1 = $this->env->getExtension("native_profiler");
        $__internal_85a618649172131f2cb3ba313f9b593193480861217cb2086ace1025a64960e1->enter($__internal_85a618649172131f2cb3ba313f9b593193480861217cb2086ace1025a64960e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Zamówienie";
        
        $__internal_85a618649172131f2cb3ba313f9b593193480861217cb2086ace1025a64960e1->leave($__internal_85a618649172131f2cb3ba313f9b593193480861217cb2086ace1025a64960e1_prof);

    }

    // line 4
    public function block_filmPreview($context, array $blocks = array())
    {
        $__internal_cd07becf6e5425c1246698c860af71112ce7dbdbf791f1ff88c43d5ae8ca83ad = $this->env->getExtension("native_profiler");
        $__internal_cd07becf6e5425c1246698c860af71112ce7dbdbf791f1ff88c43d5ae8ca83ad->enter($__internal_cd07becf6e5425c1246698c860af71112ce7dbdbf791f1ff88c43d5ae8ca83ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filmPreview"));

        // line 5
        echo "    <style>

    </style>
    <h1 align=\"center\">Zamówienie</h1>
    <table class=\"tftable\" border=\"0\">
        <tr><td><b>Imię:</b></td><td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Nazwisko:</b></td><td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getSurname", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Nazwa filmu:</b></td><td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getNazwa", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Email:</b></td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getEmail", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Cena:</b></td><td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getCena", array()), "html", null, true);
        echo " zł</td></tr>
        <tr><td><b>Data wypożyczenia:</b></td><td>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["dataWypozyczenia"]) ? $context["dataWypozyczenia"] : $this->getContext($context, "dataWypozyczenia")), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Data zwrotu:</b></td><td>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["dataZwrotu"]) ? $context["dataZwrotu"] : $this->getContext($context, "dataZwrotu")), "html", null, true);
        echo "</td></tr>
    </table>
    <br />
    <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("order");
        echo "\" method=\"POST\" align=\"center\">
        <input type=\"hidden\" name=\"movieId\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getId", array()), "html", null, true);
        echo "\"/>
        <input  type=\"submit\" value=\"Dalej\"/>
    </form>
";
        
        $__internal_cd07becf6e5425c1246698c860af71112ce7dbdbf791f1ff88c43d5ae8ca83ad->leave($__internal_cd07becf6e5425c1246698c860af71112ce7dbdbf791f1ff88c43d5ae8ca83ad_prof);

    }

    public function getTemplateName()
    {
        return "FilmwebWebsiteBundle:Order:order_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  98 => 19,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  61 => 5,  55 => 4,  43 => 3,  11 => 1,);
    }
}
