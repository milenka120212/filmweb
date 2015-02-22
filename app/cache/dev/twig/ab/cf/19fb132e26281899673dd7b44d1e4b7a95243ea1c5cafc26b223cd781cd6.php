<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_abcf19fb132e26281899673dd7b44d1e4b7a95243ea1c5cafc26b223cd781cd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca68f92f38609b46a843012ee6026a690b9cb5452ddf20a829b172c09c6b9cb6 = $this->env->getExtension("native_profiler");
        $__internal_ca68f92f38609b46a843012ee6026a690b9cb5452ddf20a829b172c09c6b9cb6->enter($__internal_ca68f92f38609b46a843012ee6026a690b9cb5452ddf20a829b172c09c6b9cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca68f92f38609b46a843012ee6026a690b9cb5452ddf20a829b172c09c6b9cb6->leave($__internal_ca68f92f38609b46a843012ee6026a690b9cb5452ddf20a829b172c09c6b9cb6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d580df72f64d509006fa26a0eab1f46c9a35173726e859d2c153acf7c7d9913 = $this->env->getExtension("native_profiler");
        $__internal_6d580df72f64d509006fa26a0eab1f46c9a35173726e859d2c153acf7c7d9913->enter($__internal_6d580df72f64d509006fa26a0eab1f46c9a35173726e859d2c153acf7c7d9913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d580df72f64d509006fa26a0eab1f46c9a35173726e859d2c153acf7c7d9913->leave($__internal_6d580df72f64d509006fa26a0eab1f46c9a35173726e859d2c153acf7c7d9913_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_399b527851b46076fd386c473ea805e94a81bb587d2e9a15ebd822e72ab407a5 = $this->env->getExtension("native_profiler");
        $__internal_399b527851b46076fd386c473ea805e94a81bb587d2e9a15ebd822e72ab407a5->enter($__internal_399b527851b46076fd386c473ea805e94a81bb587d2e9a15ebd822e72ab407a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_399b527851b46076fd386c473ea805e94a81bb587d2e9a15ebd822e72ab407a5->leave($__internal_399b527851b46076fd386c473ea805e94a81bb587d2e9a15ebd822e72ab407a5_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33b767ec8355e47fede0fe9ce64aaae82d399a44f744f54c66e13f4ad8715a3e = $this->env->getExtension("native_profiler");
        $__internal_33b767ec8355e47fede0fe9ce64aaae82d399a44f744f54c66e13f4ad8715a3e->enter($__internal_33b767ec8355e47fede0fe9ce64aaae82d399a44f744f54c66e13f4ad8715a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33b767ec8355e47fede0fe9ce64aaae82d399a44f744f54c66e13f4ad8715a3e->leave($__internal_33b767ec8355e47fede0fe9ce64aaae82d399a44f744f54c66e13f4ad8715a3e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  72 => 13,  61 => 7,  55 => 6,  44 => 3,  11 => 1,);
    }
}
