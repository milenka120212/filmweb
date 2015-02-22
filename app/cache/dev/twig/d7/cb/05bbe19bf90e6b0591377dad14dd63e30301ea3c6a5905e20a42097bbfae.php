<?php

/* FilmwebWebsiteBundle:MoviesList:movies_by_genre_ajax.html.twig */
class __TwigTemplate_d7cb05bbe19bf90e6b0591377dad14dd63e30301ea3c6a5905e20a42097bbfae extends Twig_Template
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
        $__internal_542986c15422d9e58d23e2c3b9de0e8cb1111f720ffb666a9dc8e28062bf8c10 = $this->env->getExtension("native_profiler");
        $__internal_542986c15422d9e58d23e2c3b9de0e8cb1111f720ffb666a9dc8e28062bf8c10->enter($__internal_542986c15422d9e58d23e2c3b9de0e8cb1111f720ffb666a9dc8e28062bf8c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmwebWebsiteBundle:MoviesList:movies_by_genre_ajax.html.twig"));

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filmy"]) ? $context["filmy"] : $this->getContext($context, "filmy")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 2
            echo "    <div class=\"leftbox\">
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => strtr($this->getAttribute($context["film"], "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getNazwa", array()), "html", null, true);
            echo "</h3></a>
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => strtr($this->getAttribute($context["film"], "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
            <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["film"], "getImgUrl", array())), "html", null, true);
            echo "\" width=\"80\" height=\"110\" alt=\"photo 1\" class=\"left\" />
        </a>
        <p><b>Rok:</b> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getRokPremiery", array()), "html", null, true);
            echo "</p>
        <p><b>Dlugość:</b> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getDlugosc", array()), "html", null, true);
            echo "</p>
        <p><b>Cena:</b> <b>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getCena", array()), "html", null, true);
            echo "</b> zł.</p>
        <p class=\"readmore\"><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => strtr($this->getAttribute($context["film"], "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">Zobać więcej</a></p>
        <div class=\"clear\"></div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_542986c15422d9e58d23e2c3b9de0e8cb1111f720ffb666a9dc8e28062bf8c10->leave($__internal_542986c15422d9e58d23e2c3b9de0e8cb1111f720ffb666a9dc8e28062bf8c10_prof);

    }

    public function getTemplateName()
    {
        return "FilmwebWebsiteBundle:MoviesList:movies_by_genre_ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  52 => 9,  48 => 8,  44 => 7,  39 => 5,  35 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
