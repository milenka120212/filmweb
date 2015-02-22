<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3360564a701d90bcd560ada261a1913141a5e8a4b5414a0a96066f6bed52164d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bfbf596cd951194f6a43e4ef6a70921eb132651c8f927a79aeb399b4b5c935b = $this->env->getExtension("native_profiler");
        $__internal_1bfbf596cd951194f6a43e4ef6a70921eb132651c8f927a79aeb399b4b5c935b->enter($__internal_1bfbf596cd951194f6a43e4ef6a70921eb132651c8f927a79aeb399b4b5c935b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bfbf596cd951194f6a43e4ef6a70921eb132651c8f927a79aeb399b4b5c935b->leave($__internal_1bfbf596cd951194f6a43e4ef6a70921eb132651c8f927a79aeb399b4b5c935b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6cb74a202a6d802e2456bba7668a671e2b7f8f6138efe4721c5072fe2b5ffea = $this->env->getExtension("native_profiler");
        $__internal_a6cb74a202a6d802e2456bba7668a671e2b7f8f6138efe4721c5072fe2b5ffea->enter($__internal_a6cb74a202a6d802e2456bba7668a671e2b7f8f6138efe4721c5072fe2b5ffea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a6cb74a202a6d802e2456bba7668a671e2b7f8f6138efe4721c5072fe2b5ffea->leave($__internal_a6cb74a202a6d802e2456bba7668a671e2b7f8f6138efe4721c5072fe2b5ffea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c0baa74fe315afeb8dcf0ea423def88c8db1a760db74841e6b5b4ff7d8c8eb1 = $this->env->getExtension("native_profiler");
        $__internal_6c0baa74fe315afeb8dcf0ea423def88c8db1a760db74841e6b5b4ff7d8c8eb1->enter($__internal_6c0baa74fe315afeb8dcf0ea423def88c8db1a760db74841e6b5b4ff7d8c8eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6c0baa74fe315afeb8dcf0ea423def88c8db1a760db74841e6b5b4ff7d8c8eb1->leave($__internal_6c0baa74fe315afeb8dcf0ea423def88c8db1a760db74841e6b5b4ff7d8c8eb1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_54cdf5d93be88db60ff6621c6b1648ecc49056f4495b0856f68e9835046bb180 = $this->env->getExtension("native_profiler");
        $__internal_54cdf5d93be88db60ff6621c6b1648ecc49056f4495b0856f68e9835046bb180->enter($__internal_54cdf5d93be88db60ff6621c6b1648ecc49056f4495b0856f68e9835046bb180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
        
        $__internal_54cdf5d93be88db60ff6621c6b1648ecc49056f4495b0856f68e9835046bb180->leave($__internal_54cdf5d93be88db60ff6621c6b1648ecc49056f4495b0856f68e9835046bb180_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 12,  80 => 11,  66 => 8,  60 => 7,  50 => 4,  44 => 3,  11 => 1,);
    }
}
