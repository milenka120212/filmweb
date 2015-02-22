<?php

/* FilmwebWebsiteBundle:Default:index.html.twig */
class __TwigTemplate_d5b65b6b6f5534950416b9d0282bc42bacc26a5c687e69c71c582c3499739efe extends Twig_Template
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
            'filmPreview' => array($this, 'block_filmPreview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FilmwebWebsiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64aef867058d2adb20085844b9d71004cfd3a30c1816fe8aa462fb731f7e8709 = $this->env->getExtension("native_profiler");
        $__internal_64aef867058d2adb20085844b9d71004cfd3a30c1816fe8aa462fb731f7e8709->enter($__internal_64aef867058d2adb20085844b9d71004cfd3a30c1816fe8aa462fb731f7e8709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmwebWebsiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64aef867058d2adb20085844b9d71004cfd3a30c1816fe8aa462fb731f7e8709->leave($__internal_64aef867058d2adb20085844b9d71004cfd3a30c1816fe8aa462fb731f7e8709_prof);

    }

    // line 4
    public function block_filmPreview($context, array $blocks = array())
    {
        $__internal_18a19cae986b440191ebe7e7ebc8302d80d401334e787430db85913221ba0aa0 = $this->env->getExtension("native_profiler");
        $__internal_18a19cae986b440191ebe7e7ebc8302d80d401334e787430db85913221ba0aa0->enter($__internal_18a19cae986b440191ebe7e7ebc8302d80d401334e787430db85913221ba0aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filmPreview"));

        // line 5
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filmy"]) ? $context["filmy"] : $this->getContext($context, "filmy")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 6
            echo "        <div class=\"leftbox\">
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => strtr($this->getAttribute($context["film"], "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getNazwa", array()), "html", null, true);
            echo "</h3></a>
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => strtr($this->getAttribute($context["film"], "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["film"], "getImgUrl", array())), "html", null, true);
            echo "\" width=\"80\" height=\"110\" alt=\"photo 1\" class=\"left\" />
            </a>
            <p><b>Rok:</b> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getRokPremiery", array()), "html", null, true);
            echo "</p>
            <p><b>Dlugość:</b> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getDlugosc", array()), "html", null, true);
            echo "</p>
            <p><b>Cena:</b> <b>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getCena", array()), "html", null, true);
            echo "</b> zł.</p>
            <p class=\"readmore\"><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => $this->getAttribute($context["film"], "getNazwa", array()))), "html", null, true);
            echo "\">Zobać więcej</a></p>
            <div class=\"clear\"></div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_18a19cae986b440191ebe7e7ebc8302d80d401334e787430db85913221ba0aa0->leave($__internal_18a19cae986b440191ebe7e7ebc8302d80d401334e787430db85913221ba0aa0_prof);

    }

    public function getTemplateName()
    {
        return "FilmwebWebsiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  79 => 13,  75 => 12,  71 => 11,  66 => 9,  62 => 8,  56 => 7,  53 => 6,  48 => 5,  42 => 4,  11 => 1,);
    }
}
