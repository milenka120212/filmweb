<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_908d043e1699c755245541ade2ac7a98da0ce4644eb8edc493480d0ea420bd03 extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df01abbc8ad19eca18575db10f76a60a625fe2082b65f2b3f1371bebe4491556 = $this->env->getExtension("native_profiler");
        $__internal_df01abbc8ad19eca18575db10f76a60a625fe2082b65f2b3f1371bebe4491556->enter($__internal_df01abbc8ad19eca18575db10f76a60a625fe2082b65f2b3f1371bebe4491556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df01abbc8ad19eca18575db10f76a60a625fe2082b65f2b3f1371bebe4491556->leave($__internal_df01abbc8ad19eca18575db10f76a60a625fe2082b65f2b3f1371bebe4491556_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03a1ae3fd3052cb2ab3bedbdce0be3bfb589e7c6608a14a6fc51b975bc485e40 = $this->env->getExtension("native_profiler");
        $__internal_03a1ae3fd3052cb2ab3bedbdce0be3bfb589e7c6608a14a6fc51b975bc485e40->enter($__internal_03a1ae3fd3052cb2ab3bedbdce0be3bfb589e7c6608a14a6fc51b975bc485e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <span>
            <svg width=\"24\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 24 28\" enable-background=\"new 0 0 24 28\" xml:space=\"preserve\"><polygon fill=\"#3F3F3F\" points=\"18.4,3.8 12.8,9.4 16.3,9.4 16.3,21.1 14.1,21.1 9.9,25.3 16.3,25.3 20.5,25.3 20.5,21.1 20.5,9.4 23.9,9.4\"/><polygon fill=\"#3F3F3F\" points=\"5.6,25.3 11.2,19.7 7.7,19.7 7.7,8 9.9,8 14.1,3.8 7.7,3.8 3.5,3.8 3.5,8 3.5,19.7 0.1,19.7\"/></svg>
            <span class=\"sf-toolbar-ajax-requests\">0</span>
        </span>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b>AJAX requests</b>
            <span class=\"sf-toolbar-ajax-info\"></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        
        $__internal_03a1ae3fd3052cb2ab3bedbdce0be3bfb589e7c6608a14a6fc51b975bc485e40->leave($__internal_03a1ae3fd3052cb2ab3bedbdce0be3bfb589e7c6608a14a6fc51b975bc485e40_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  55 => 10,  48 => 4,  42 => 3,  11 => 1,);
    }
}
