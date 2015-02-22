<?php

/* FilmwebWebsiteBundle:UserOrders:user_orders.html.twig */
class __TwigTemplate_fcaa62eda15200f3aa7f12ecb32685ac23d5cc2091e8185adc5008dcfc4cd209 extends Twig_Template
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
        $__internal_7bb229265f1c45cd6dffa1df2baceee11e0edc5d928232f8b0a927b9e3117078 = $this->env->getExtension("native_profiler");
        $__internal_7bb229265f1c45cd6dffa1df2baceee11e0edc5d928232f8b0a927b9e3117078->enter($__internal_7bb229265f1c45cd6dffa1df2baceee11e0edc5d928232f8b0a927b9e3117078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmwebWebsiteBundle:UserOrders:user_orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bb229265f1c45cd6dffa1df2baceee11e0edc5d928232f8b0a927b9e3117078->leave($__internal_7bb229265f1c45cd6dffa1df2baceee11e0edc5d928232f8b0a927b9e3117078_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f33b7e6180aff61cd34093d7f1a25cb51e5c3ade8d5587bafd293891e3883001 = $this->env->getExtension("native_profiler");
        $__internal_f33b7e6180aff61cd34093d7f1a25cb51e5c3ade8d5587bafd293891e3883001->enter($__internal_f33b7e6180aff61cd34093d7f1a25cb51e5c3ade8d5587bafd293891e3883001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Moje filmy";
        
        $__internal_f33b7e6180aff61cd34093d7f1a25cb51e5c3ade8d5587bafd293891e3883001->leave($__internal_f33b7e6180aff61cd34093d7f1a25cb51e5c3ade8d5587bafd293891e3883001_prof);

    }

    // line 4
    public function block_filmPreview($context, array $blocks = array())
    {
        $__internal_3de0cfdda1da8910d0bf3f70ccac7ffabcc2bd1143f83a1f91b9fdec9d8110a1 = $this->env->getExtension("native_profiler");
        $__internal_3de0cfdda1da8910d0bf3f70ccac7ffabcc2bd1143f83a1f91b9fdec9d8110a1->enter($__internal_3de0cfdda1da8910d0bf3f70ccac7ffabcc2bd1143f83a1f91b9fdec9d8110a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filmPreview"));

        // line 5
        echo "    <br />
    <table id=\"order-table\">
        <tr class=\"order-table-header\">
            <th>Obrazek</th>
            <th>Nazwa filmu</th>
            <th>Data zamówienia</th>
            <th>Data zwrotu</th>
            <th>Status transakcji</th>
        </tr>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 15
            echo "            <tr class=\"order-table-row\">
                <td class=\"order-table-data\">
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getImgUrl", array())), "html", null, true);
            echo "\" height=\"82.5\" width=\"60\"/>
                    </a>
                </td>
                <td class=\"order-table-data\">
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), "html", null, true);
            echo "
                    </a>
                </td>
                <td class=\"order-table-data\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getDataZamowienia", array()), "format", array(0 => "H:i:s d-m-Y"), "method"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getDataZwrotu", array()), "format", array(0 => "H:i:s d-m-Y"), "method"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdStatus", array()), "getStatus", array()), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\">
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getVideoUrl", array())), "html", null, true);
            echo "\" class=\"html5lightbox\" data-width=\"1024\" data-height=\"768\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/filmweb/images/video-play.png"), "html", null, true);
            echo "\" height=\"45px\" width=\"45px\" alt=\"Oglądaj\"/>
                    </a>
                </td>
            </tr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "          ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expiredOrders"]) ? $context["expiredOrders"] : $this->getContext($context, "expiredOrders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 43
            echo "            <tr class=\"order-table-row\">
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getImgUrl", array())), "html", null, true);
            echo "\" height=\"82.5\" width=\"60\"/>
                    </a>
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), "html", null, true);
            echo "
                    </a>
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getDataZamowienia", array()), "format", array(0 => "H:i:s d-m-Y"), "method"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\" style=\"color: red;\">
                    ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getDataZwrotu", array()), "format", array(0 => "H:i:s d-m-Y"), "method"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdStatus", array()), "getStatus", array()), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </table>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/filmweb/html5lightbox/html5lightbox.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3de0cfdda1da8910d0bf3f70ccac7ffabcc2bd1143f83a1f91b9fdec9d8110a1->leave($__internal_3de0cfdda1da8910d0bf3f70ccac7ffabcc2bd1143f83a1f91b9fdec9d8110a1_prof);

    }

    public function getTemplateName()
    {
        return "FilmwebWebsiteBundle:UserOrders:user_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 66,  190 => 65,  180 => 61,  174 => 58,  168 => 55,  161 => 51,  157 => 50,  150 => 46,  146 => 45,  142 => 43,  137 => 42,  126 => 37,  120 => 36,  114 => 33,  108 => 30,  102 => 27,  95 => 23,  91 => 22,  84 => 18,  80 => 17,  76 => 15,  72 => 14,  61 => 5,  55 => 4,  43 => 3,  11 => 1,);
    }
}
