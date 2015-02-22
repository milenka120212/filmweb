<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_980c2bac0d8e5603d7fedf76599cacf95ad9ec47e5d3a28a4cd871a04c8c2840 extends Twig_Template
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
        $__internal_ee69e4bee9952ad2e0e7493cf594a840a406fd0771b006b2380eb049d5faa0c4 = $this->env->getExtension("native_profiler");
        $__internal_ee69e4bee9952ad2e0e7493cf594a840a406fd0771b006b2380eb049d5faa0c4->enter($__internal_ee69e4bee9952ad2e0e7493cf594a840a406fd0771b006b2380eb049d5faa0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ee69e4bee9952ad2e0e7493cf594a840a406fd0771b006b2380eb049d5faa0c4->leave($__internal_ee69e4bee9952ad2e0e7493cf594a840a406fd0771b006b2380eb049d5faa0c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
