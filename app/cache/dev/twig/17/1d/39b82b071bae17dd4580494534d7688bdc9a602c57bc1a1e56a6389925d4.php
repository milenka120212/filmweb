<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_171d39b82b071bae17dd4580494534d7688bdc9a602c57bc1a1e56a6389925d4 extends Twig_Template
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
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8b600dada1a9418c2c583ffc56bdd46b088b3097a54fd95063350550d8bfbc2 = $this->env->getExtension("native_profiler");
        $__internal_c8b600dada1a9418c2c583ffc56bdd46b088b3097a54fd95063350550d8bfbc2->enter($__internal_c8b600dada1a9418c2c583ffc56bdd46b088b3097a54fd95063350550d8bfbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $context["__internal_54cd3e66e786ac3912f9b49c92ab05af952d6a1fe06d1cb011c6844975d24763"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8b600dada1a9418c2c583ffc56bdd46b088b3097a54fd95063350550d8bfbc2->leave($__internal_c8b600dada1a9418c2c583ffc56bdd46b088b3097a54fd95063350550d8bfbc2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6adab18a84ca0fdc21c6d927c546379229916dac50d211d0fdbbc1c6987e4d0a = $this->env->getExtension("native_profiler");
        $__internal_6adab18a84ca0fdc21c6d927c546379229916dac50d211d0fdbbc1c6987e4d0a->enter($__internal_6adab18a84ca0fdc21c6d927c546379229916dac50d211d0fdbbc1c6987e4d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"26\" height=\"34\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 34\" enable-background=\"new 0 0 26 34\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15.5 14.8c0.5-0.6 0.9-1.4 0.9-2.3c0-1.9-1.5-3.4-3.4-3.4s-3.4 1.5-3.4 3.4c0 0.9 0.3 1.7 0.9 2.3L3.2 34 h2.5l0.4-1.1l6.8-4.3l6.8 4.3l0.4 1.1h2.5L15.5 14.8z M16 22.6l-2.1-1l1.4-0.7L16 22.6z M13 16c0.1 0 0.3 0 0.4 0l1.6 4.2l-2 1 l-2-1l1.6-4.2C12.7 15.9 12.9 16 13 16z M12.1 21.6l-2.1 1l0.6-1.7L12.1 21.6z M7 30.7L8.8 26l2.9 1.8L7 30.7z M9.3 24.7l0.4-1 L13 22l3.4 1.7l0.4 1L13 27L9.3 24.7z M14.3 27.8l2.9-1.8l1.8 4.7L14.3 27.8z\"/><g><path fill=\"#3F3F3F\" d=\"M6.2 6.2c0.7-0.7 1.7-1.1 2.7-1.1v1.3c-0.7 0-1.3 0.2-1.8 0.7S6.4 8.2 6.4 8.9H5.1 C5.1 7.9 5.5 6.9 6.2 6.2z\"/><path fill=\"#3F3F3F\" d=\"M2.5 8.9c0-1.7 0.7-3.3 1.9-4.5s2.8-1.9 4.5-1.9l0 1.3c-1.4 0-2.6 0.5-3.6 1.5S3.8 7.5 3.8 8.9 C3.8 8.9 2.5 8.9 2.5 8.9z\"/><path fill=\"#3F3F3F\" d=\"M5.6 0.7C6.6 0.2 7.7 0 8.9 0l0 0v1.3c-2 0-4 0.8-5.4 2.2S1.3 6.9 1.3 8.9H0c0-1.2 0.2-2.3 0.7-3.3 c0.4-1.1 1.1-2.1 2-2.9S4.4 1.1 5.6 0.7L5.6 0.7z\"/></g><g><path fill=\"#3F3F3F\" d=\"M20.9 8.9h-1.3c0-0.7-0.2-1.3-0.7-1.8c-0.5-0.5-1.1-0.7-1.8-0.7V5.1c1 0 2 0.4 2.7 1.1 C20.5 6.9 20.9 7.9 20.9 8.9z\"/><path fill=\"#3F3F3F\" d=\"M22.2 8.9c0-1.4-0.5-2.6-1.5-3.6c-1-1-2.2-1.5-3.6-1.5V2.5c1.7 0 3.3 0.7 4.5 1.9s1.9 2.8 1.9 4.5 C23.5 8.9 22.2 8.9 22.2 8.9z\"/><path fill=\"#3F3F3F\" d=\"M20.5 0.7c1.1 0.4 2.1 1.1 2.9 2s1.5 1.8 2 2.9C25.8 6.6 26 7.7 26 8.9h-1.3c0-2-0.8-4-2.2-5.4 s-3.4-2.2-5.4-2.2V0l0 0C18.3 0 19.4 0.2 20.5 0.7L20.5 0.7z\"/></g></g></svg></span>
    <strong>Events</strong>
</span>
";
        
        $__internal_6adab18a84ca0fdc21c6d927c546379229916dac50d211d0fdbbc1c6987e4d0a->leave($__internal_6adab18a84ca0fdc21c6d927c546379229916dac50d211d0fdbbc1c6987e4d0a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4514e2c4a94f11fdfe7960f34758a38c903e9d115c2f541570d0f5578f0d214c = $this->env->getExtension("native_profiler");
        $__internal_4514e2c4a94f11fdfe7960f34758a38c903e9d115c2f541570d0f5578f0d214c->enter($__internal_4514e2c4a94f11fdfe7960f34758a38c903e9d115c2f541570d0f5578f0d214c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
        
        $__internal_4514e2c4a94f11fdfe7960f34758a38c903e9d115c2f541570d0f5578f0d214c->leave($__internal_4514e2c4a94f11fdfe7960f34758a38c903e9d115c2f541570d0f5578f0d214c_prof);

    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_51a7cfd3f64f66375ab78ec7220fc8463d187aaee1ff24a45f0b62397b9e6e2f = $this->env->getExtension("native_profiler");
        $__internal_51a7cfd3f64f66375ab78ec7220fc8463d187aaee1ff24a45f0b62397b9e6e2f->enter($__internal_51a7cfd3f64f66375ab78ec7220fc8463d187aaee1ff24a45f0b62397b9e6e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "event", array()), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            echo $context["__internal_54cd3e66e786ac3912f9b49c92ab05af952d6a1fe06d1cb011c6844975d24763"]->getdisplay_listener($context["listener"]);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>

    <h2>Not Called Listeners</h2>

    ";
        // line 41
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array())) {
            // line 42
            echo "        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            $context["listeners"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array());
            // line 48
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), $context["listener"], array(), "array"), "event", array()), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                echo $context["__internal_54cd3e66e786ac3912f9b49c92ab05af952d6a1fe06d1cb011c6844975d24763"]->getdisplay_listener($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), $context["listener"], array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </table>
    ";
        } else {
            // line 56
            echo "        <p>
            <strong>No uncalled listeners</strong>.
        </p>
        <p>

            All listeners were called for this request or an error occurred
            when trying to collect uncalled listeners (in which case check the
            logs to get more information).

        </p>
    ";
        }
        
        $__internal_51a7cfd3f64f66375ab78ec7220fc8463d187aaee1ff24a45f0b62397b9e6e2f->leave($__internal_51a7cfd3f64f66375ab78ec7220fc8463d187aaee1ff24a45f0b62397b9e6e2f_prof);

    }

    // line 69
    public function getdisplay_listener($__listener__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $__listener__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8350dfa32cf95ce1a7e60549934be668ecae3acd6fd4a7f4cd07cb29759f9c40 = $this->env->getExtension("native_profiler");
            $__internal_8350dfa32cf95ce1a7e60549934be668ecae3acd6fd4a7f4cd07cb29759f9c40->enter($__internal_8350dfa32cf95ce1a7e60549934be668ecae3acd6fd4a7f4cd07cb29759f9c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_listener"));

            // line 70
            echo "    ";
            if (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type", array()) == "Closure")) {
                // line 71
                echo "        Closure
    ";
            } elseif (($this->getAttribute(            // line 72
(isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type", array()) == "Function")) {
                // line 73
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file", array()), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line", array()));
                // line 74
                echo "        ";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function", array()), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function", array()), "html", null, true);
                }
                // line 75
                echo "    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type", array()) == "Method")) {
                // line 76
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file", array()), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line", array()));
                // line 77
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "class", array()));
                echo "::";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method", array()), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method", array()), "html", null, true);
                }
                // line 78
                echo "    ";
            }
            
            $__internal_8350dfa32cf95ce1a7e60549934be668ecae3acd6fd4a7f4cd07cb29759f9c40->leave($__internal_8350dfa32cf95ce1a7e60549934be668ecae3acd6fd4a7f4cd07cb29759f9c40_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 78,  228 => 77,  225 => 76,  222 => 75,  211 => 74,  208 => 73,  206 => 72,  203 => 71,  200 => 70,  186 => 69,  168 => 56,  164 => 54,  155 => 51,  151 => 50,  148 => 49,  143 => 48,  141 => 47,  134 => 42,  132 => 41,  126 => 37,  117 => 34,  113 => 33,  110 => 32,  106 => 31,  97 => 24,  91 => 23,  79 => 16,  73 => 14,  70 => 13,  64 => 12,  53 => 6,  47 => 5,  40 => 1,  38 => 3,  11 => 1,);
    }
}
