<?php

/* FilmwebWebsiteBundle::base.html.twig */
class __TwigTemplate_5d79737f2104bee9c72580aa79545570e2e5fabc9ad1d6a3f49f6f48fb18db9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'gatunki' => array($this, 'block_gatunki'),
            'body' => array($this, 'block_body'),
            'filmPreview' => array($this, 'block_filmPreview'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1d272cde44450dcdaefbb8dbf03f48fa09948b27b168362366ddb42624fba1b = $this->env->getExtension("native_profiler");
        $__internal_b1d272cde44450dcdaefbb8dbf03f48fa09948b27b168362366ddb42624fba1b->enter($__internal_b1d272cde44450dcdaefbb8dbf03f48fa09948b27b168362366ddb42624fba1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmwebWebsiteBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/filmweb/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/filmweb/images/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/filmweb/images/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
  <script type=\"text/javascript\">
    function loadAjax(genre) {
      var path = '/~s173383/app_dev.php/genre-ajax/';

      \$(document).ready(function() {
        \$(\"#body .inner\").load(path + genre);
      });

    }

    \$(document).ready(function() {
      \$(\"#genres_header\").click(function () {
        \$(\".genre\").toggle(\"slow\");
      });
    });

  </script>
</head>
<body>

<div id=\"wrapper\">
  <div id=\"inner\">
    <div id=\"header\">
      <h1><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/filmweb/images/logo.gif"), "html", null, true);
        echo "\" width=\"519\" height=\"63\" alt=\"Online Movie Store\" /></h1>
      <div id=\"nav\"> 
          <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Strona główna</a> |
          ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 37
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a> |
            <a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Wyloguj się</a>
          ";
        } else {
            // line 40
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Zaloguj się</a> |
            <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Rejestracja</a>
          ";
        }
        // line 43
        echo "      </div>
      <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => "1", "slug_name" => "Harry-Potter-i-więzień-Azkabanu")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/filmweb/images/header_1.jpg"), "html", null, true);
        echo "\" width=\"744\" height=\"145\" alt=\"Harry Potter cd\" /></a>
      <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => "1", "slug_name" => "Harry-Potter-i-więzień-Azkabanu")), "html", null, true);
        echo "\">
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/filmweb/images/header_2.jpg"), "html", null, true);
        echo "\" width=\"745\" height=\"48\" alt=\"\" /></a> </div>
    <!-- end header -->
    ";
        // line 48
        $this->displayBlock('gatunki', $context, $blocks);
        // line 77
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "    <!-- end body -->
    <div class=\"clear\"></div>
    <div id=\"footer\">© filmweb.pl</div>
      <!-- end footnav -->
    </div>
    <!-- end footer -->
  </div>
  <!-- end inner -->
</div>

</body>
<!-- end wrapper -->
</html>
";
        
        $__internal_b1d272cde44450dcdaefbb8dbf03f48fa09948b27b168362366ddb42624fba1b->leave($__internal_b1d272cde44450dcdaefbb8dbf03f48fa09948b27b168362366ddb42624fba1b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_90a093aee34cb8be9c085c156c0c325f9765eb64acd5f941d2c6ea0c800afb6c = $this->env->getExtension("native_profiler");
        $__internal_90a093aee34cb8be9c085c156c0c325f9765eb64acd5f941d2c6ea0c800afb6c->enter($__internal_90a093aee34cb8be9c085c156c0c325f9765eb64acd5f941d2c6ea0c800afb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Wypożyczalnia filmów ";
        
        $__internal_90a093aee34cb8be9c085c156c0c325f9765eb64acd5f941d2c6ea0c800afb6c->leave($__internal_90a093aee34cb8be9c085c156c0c325f9765eb64acd5f941d2c6ea0c800afb6c_prof);

    }

    // line 48
    public function block_gatunki($context, array $blocks = array())
    {
        $__internal_8e42815c1141614e18c5a7ec1341eceb7b220c9dfb8b9f0cbc12057b3d34f3d5 = $this->env->getExtension("native_profiler");
        $__internal_8e42815c1141614e18c5a7ec1341eceb7b220c9dfb8b9f0cbc12057b3d34f3d5->enter($__internal_8e42815c1141614e18c5a7ec1341eceb7b220c9dfb8b9f0cbc12057b3d34f3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gatunki"));

        // line 49
        echo "    <dl id=\"browse\">
      <dt id=\"genres_header\">Dostępne kategorie</dt>
          <dd class=\"genre\"><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Wszystkie</a></dd>
      ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gatunki"]) ? $context["gatunki"] : $this->getContext($context, "gatunki")));
        foreach ($context['_seq'] as $context["_key"] => $context["gatunek"]) {
            // line 53
            echo "          <dd class=\"genre\" onclick=\"loadAjax('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatunek"], "getNazwaGatunku", array()), "html", null, true);
            echo "')\"><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatunek"], "getNazwaGatunku", array()), "html", null, true);
            echo "</a></dd>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gatunek'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "      <dt>
      </dt>

      ";
        // line 58
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 59
            echo "        <dd class=\"userOrders\">
          <table class=\"tftable\">
            <tr>
              <td>
                <a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("myOrders");
            echo "\">
                <img alt=\"Moje zamówienia\" src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/filmweb/images/my_orders.png"), "html", null, true);
            echo "\" height=\"60px\" width=\"60px\"/>
                  </a>
              </td>
              <td>
                <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("myOrders");
            echo "\" style=\"text-decoration: none\"><p>Moje filmy</p></a>
              </td>
            </tr>
           </table>
        </dd>
      ";
        }
        // line 74
        echo "
    </dl>
     ";
        
        $__internal_8e42815c1141614e18c5a7ec1341eceb7b220c9dfb8b9f0cbc12057b3d34f3d5->leave($__internal_8e42815c1141614e18c5a7ec1341eceb7b220c9dfb8b9f0cbc12057b3d34f3d5_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fae01a41663bdd2242acfd268563de66b55c23f596a6a26469db408ecb65b94 = $this->env->getExtension("native_profiler");
        $__internal_8fae01a41663bdd2242acfd268563de66b55c23f596a6a26469db408ecb65b94->enter($__internal_8fae01a41663bdd2242acfd268563de66b55c23f596a6a26469db408ecb65b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "    <div id=\"body\">
      <div class=\"inner\">
        ";
        // line 80
        $this->displayBlock('filmPreview', $context, $blocks);
        // line 82
        echo "      </div>
      <!-- end .inner -->
    </div>
    ";
        
        $__internal_8fae01a41663bdd2242acfd268563de66b55c23f596a6a26469db408ecb65b94->leave($__internal_8fae01a41663bdd2242acfd268563de66b55c23f596a6a26469db408ecb65b94_prof);

    }

    // line 80
    public function block_filmPreview($context, array $blocks = array())
    {
        $__internal_087f825be24614332f1a62c6afacb002eae8ed950123aaa2478db275c5ee8e1c = $this->env->getExtension("native_profiler");
        $__internal_087f825be24614332f1a62c6afacb002eae8ed950123aaa2478db275c5ee8e1c->enter($__internal_087f825be24614332f1a62c6afacb002eae8ed950123aaa2478db275c5ee8e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filmPreview"));

        // line 81
        echo "        ";
        
        $__internal_087f825be24614332f1a62c6afacb002eae8ed950123aaa2478db275c5ee8e1c->leave($__internal_087f825be24614332f1a62c6afacb002eae8ed950123aaa2478db275c5ee8e1c_prof);

    }

    public function getTemplateName()
    {
        return "FilmwebWebsiteBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 81,  253 => 80,  243 => 82,  241 => 80,  237 => 78,  231 => 77,  222 => 74,  213 => 68,  206 => 64,  202 => 63,  196 => 59,  194 => 58,  189 => 55,  178 => 53,  174 => 52,  170 => 51,  166 => 49,  160 => 48,  148 => 4,  128 => 86,  125 => 77,  123 => 48,  118 => 46,  114 => 45,  108 => 44,  105 => 43,  100 => 41,  95 => 40,  90 => 38,  83 => 37,  81 => 36,  77 => 35,  72 => 33,  44 => 8,  40 => 7,  36 => 6,  31 => 4,  26 => 1,);
    }
}
