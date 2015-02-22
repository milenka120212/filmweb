<?php

/* default/index.html.twig */
class __TwigTemplate_779fbb5e9bf999e2ef3aac12da40b4c76c6a1e8b712fdf44f41e28d3f87fbeb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9197d3cd5a00384f0570e7abf7f635beb954f667bbc0525f4919898cb91aeb28 = $this->env->getExtension("native_profiler");
        $__internal_9197d3cd5a00384f0570e7abf7f635beb954f667bbc0525f4919898cb91aeb28->enter($__internal_9197d3cd5a00384f0570e7abf7f635beb954f667bbc0525f4919898cb91aeb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9197d3cd5a00384f0570e7abf7f635beb954f667bbc0525f4919898cb91aeb28->leave($__internal_9197d3cd5a00384f0570e7abf7f635beb954f667bbc0525f4919898cb91aeb28_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95bdd5b9815894f15036ee87da389c16e9686b2b1c4a1fb7b3f47c2a791c3e31 = $this->env->getExtension("native_profiler");
        $__internal_95bdd5b9815894f15036ee87da389c16e9686b2b1c4a1fb7b3f47c2a791c3e31->enter($__internal_95bdd5b9815894f15036ee87da389c16e9686b2b1c4a1fb7b3f47c2a791c3e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_95bdd5b9815894f15036ee87da389c16e9686b2b1c4a1fb7b3f47c2a791c3e31->leave($__internal_95bdd5b9815894f15036ee87da389c16e9686b2b1c4a1fb7b3f47c2a791c3e31_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  42 => 3,  11 => 1,);
    }
}
