<?php

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_d69f120dfd7052d179c923357b94831eabcdb704b39b32a657d13e9e053beb0c extends Twig_Template
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
        $__internal_360adb124d17d895b0edaf1eef6fe4e7624262512a0212a615285c75ca594b41 = $this->env->getExtension("native_profiler");
        $__internal_360adb124d17d895b0edaf1eef6fe4e7624262512a0212a615285c75ca594b41->enter($__internal_360adb124d17d895b0edaf1eef6fe4e7624262512a0212a615285c75ca594b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_360adb124d17d895b0edaf1eef6fe4e7624262512a0212a615285c75ca594b41->leave($__internal_360adb124d17d895b0edaf1eef6fe4e7624262512a0212a615285c75ca594b41_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9b8fd38b4c4e0050629d066556185d7dadd6db1128e6d22391e4950cc100de7 = $this->env->getExtension("native_profiler");
        $__internal_b9b8fd38b4c4e0050629d066556185d7dadd6db1128e6d22391e4950cc100de7->enter($__internal_b9b8fd38b4c4e0050629d066556185d7dadd6db1128e6d22391e4950cc100de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <a href=\"http://symfony.com/\">
            <svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#010202\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg>
            <span>
                ";
        // line 9
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "
                ";
        }
        // line 14
        echo "            </span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 19
            echo "            <div class=\"sf-toolbar-info-piece\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</b>
            </div>
        ";
        }
        // line 23
        echo "        <div class=\"sf-toolbar-info-piece\">
            Symfony <b>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
        echo "</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <a href=\"http://symfony.com/doc/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
        echo "/index.html\" rel=\"help\">Symfony Documentation</a>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">
            <svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><g><path fill=\"#010202\" d=\"M8 11.5c-0.2-0.1-0.4-0.1-0.7-0.1s-0.5 0-0.8 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0 c0 0-0.1 0-0.1 0v0l-0.9 3.3c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0.1 0c0 0 0.1 0 0.1 0c0.3 0 0.7 0 1 0 c0.3 0 0.6-0.1 0.8-0.2c0.2-0.1 0.4-0.3 0.6-0.5c0.2-0.3 0.3-0.6 0.4-1.1c0.1-0.4 0.1-0.7 0.1-0.9C8.3 11.7 8.1 11.6 8 11.5z\"/><path fill=\"#010202\" d=\"M21.3 11.5c-0.2-0.1-0.4-0.1-0.7-0.1s-0.5 0-0.8 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0 s-0.1 0-0.1 0v0l-0.9 3.3c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0c0 0 0 0 0.1 0c0 0 0.1 0 0.1 0c0.3 0 0.7 0 1 0 c0.3 0 0.6-0.1 0.8-0.2c0.2-0.1 0.4-0.3 0.6-0.5c0.2-0.3 0.3-0.6 0.4-1.1c0.1-0.4 0.1-0.7 0.1-0.9C21.6 11.7 21.5 11.6 21.3 11.5z\"/><path fill=\"#010202\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M9.8 12.9 c0 0.2-0.1 0.4-0.2 0.6c-0.1 0.2-0.2 0.4-0.2 0.6c-0.1 0.2-0.2 0.4-0.3 0.5S8.8 14.9 8.7 15c-0.2 0.2-0.4 0.3-0.6 0.5 c-0.2 0.1-0.4 0.2-0.6 0.3c-0.2 0.1-0.4 0.1-0.6 0.1c-0.2 0-0.4 0-0.7 0H4.8L4.2 18H2.7l2.1-7.9h2.9c0.4 0 0.8 0.1 1.1 0.2 c0.3 0.1 0.5 0.3 0.7 0.6c0.2 0.2 0.3 0.5 0.3 0.9C10 12.1 9.9 12.4 9.8 12.9z M13.7 15.9l0.9-3.5c0.1-0.2 0.1-0.3 0.1-0.5 c0-0.1 0-0.2-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1 0-0.3-0.1-0.5-0.1l-1.2 0l-1.2 4.5H10L12.1 8h1.5l-0.6 2.1h1.4 c0.4 0 0.7 0 1 0.1s0.5 0.2 0.7 0.3c0.2 0.1 0.3 0.4 0.3 0.6c0 0.3 0 0.6-0.1 1l-1 3.7H13.7z M23 13.4c-0.1 0.2-0.2 0.4-0.2 0.6 c-0.1 0.2-0.2 0.4-0.3 0.5S22.2 14.9 22 15c-0.2 0.2-0.4 0.3-0.6 0.5c-0.2 0.1-0.4 0.2-0.6 0.3c-0.2 0.1-0.4 0.1-0.6 0.1 c-0.2 0-0.4 0-0.7 0h-1.3L17.6 18h-1.5l2.1-7.9h2.9c0.4 0 0.8 0.1 1.1 0.2c0.3 0.1 0.5 0.3 0.7 0.6c0.2 0.2 0.3 0.5 0.3 0.9 c0 0.3 0 0.7-0.1 1.1C23.1 13.1 23.1 13.3 23 13.4z\"/></g></svg>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "    ";
        ob_start();
        // line 39
        echo "        ";
        ob_start();
        // line 40
        echo "            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP</b>
                <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 46
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 47
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 54
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 55
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 56
        echo "
    ";
        // line 58
        echo "    ";
        ob_start();
        echo "sf-toolbar-status sf-toolbar-status-";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("green") : ("red"));
        $context["debug_status_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "    ";
        ob_start();
        // line 60
        echo "        <svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M5 17H1c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C6 16.6 5.6 17 5 17z\"/><path fill=\"#3F3F3F\" d=\"M19 17h-4c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C20 16.6 19.6 17 19 17z\"/><path fill=\"#3F3F3F\" d=\"M12.1 20h-4c-0.5 0-1-0.4-1-1v-7c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C13.1 19.5 12.6 20 12.1 20z\"/><rect x=\"9.1\" y=\"5.8\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"16\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"2.1\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"9.1\" y=\"20.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"2.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"16.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/></g></svg>
        <span class=\"sf-toolbar-info-piece-additional-detail ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
        echo "\"> </span>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "</span>
        ";
        // line 63
        if ((("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array())) || ("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array())))) {
            // line 64
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-info-with-delimiter\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 69
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 70
        echo "    ";
        ob_start();
        // line 71
        echo "        ";
        ob_start();
        // line 72
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()))) {
            // line 73
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Name</b>
                    <span>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 78
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()))) {
            // line 79
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 84
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array()))) {
            // line 85
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
            echo "\">";
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("en") : ("dis"));
            echo "abled</span>
                </div>
            ";
        }
        // line 90
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token</b>
                <span>
                    ";
        // line 93
        if ((isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))) {
            // line 94
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 96
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "
                    ";
        }
        // line 98
        echo "                </span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 101
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 102
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_b9b8fd38b4c4e0050629d066556185d7dadd6db1128e6d22391e4950cc100de7->leave($__internal_b9b8fd38b4c4e0050629d066556185d7dadd6db1128e6d22391e4950cc100de7_prof);

    }

    // line 105
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c3e4bdd6e83f0158dbb4b7efe0dcb1df583eb945dc6c52002ba8543930adc4d = $this->env->getExtension("native_profiler");
        $__internal_3c3e4bdd6e83f0158dbb4b7efe0dcb1df583eb945dc6c52002ba8543930adc4d->enter($__internal_3c3e4bdd6e83f0158dbb4b7efe0dcb1df583eb945dc6c52002ba8543930adc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 106
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M5 17H1c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C6 16.6 5.6 17 5 17z\"/><path fill=\"#3F3F3F\" d=\"M19 17h-4c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C20 16.6 19.6 17 19 17z\"/><path fill=\"#3F3F3F\" d=\"M12.1 20h-4c-0.5 0-1-0.4-1-1v-7c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C13.1 19.5 12.6 20 12.1 20z\"/><rect x=\"9.1\" y=\"5.8\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"16\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"2.1\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"9.1\" y=\"20.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"2.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"16.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/></g></svg></span>
    <strong>Config</strong>
</span>
";
        
        $__internal_3c3e4bdd6e83f0158dbb4b7efe0dcb1df583eb945dc6c52002ba8543930adc4d->leave($__internal_3c3e4bdd6e83f0158dbb4b7efe0dcb1df583eb945dc6c52002ba8543930adc4d_prof);

    }

    // line 112
    public function block_panel($context, array $blocks = array())
    {
        $__internal_062038f7b691224e1d962152e26cfeb0b366974960275317a86751f8a08c49e1 = $this->env->getExtension("native_profiler");
        $__internal_062038f7b691224e1d962152e26cfeb0b366974960275317a86751f8a08c49e1->enter($__internal_062038f7b691224e1d962152e26cfeb0b366974960275317a86751f8a08c49e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 113
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            ";
        // line 120
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 121
            echo "                <th>Application</th>
                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo " (on Symfony ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo ")</td>
            ";
        } else {
            // line 124
            echo "                <th>Symfony version</th>
                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</td>
            ";
        }
        // line 127
        echo "        </tr>
        ";
        // line 128
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()))) {
            // line 129
            echo "            <tr>
                <th>Application name</th>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 134
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()))) {
            // line 135
            echo "            <tr>
                <th>Environment</th>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 140
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array()))) {
            // line 141
            echo "            <tr>
                <th>Debug</th>
                <td>";
            // line 143
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
            echo "</td>
            </tr>
        ";
        }
        // line 146
        echo "    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 160
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 164
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 168
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxcache", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 172
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasapc", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Zend OPcache</th>
            <td>";
        // line 176
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haszendopcache", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 180
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haseaccelerator", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Full PHP configuration</th>
            <td><a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\"><code>phpinfo</code></a></td>
        </tr>
    </table>

    ";
        // line 188
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array())) {
            // line 189
            echo "        <h2>Active bundles</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
            ";
            // line 195
            $context["bundles"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array());
            // line 196
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 197
                echo "            <tr>
                <th>";
                // line 198
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                <td>";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")), $context["name"], array(), "array"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "        </table>
    ";
        }
        
        $__internal_062038f7b691224e1d962152e26cfeb0b366974960275317a86751f8a08c49e1->leave($__internal_062038f7b691224e1d962152e26cfeb0b366974960275317a86751f8a08c49e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 202,  482 => 199,  478 => 198,  475 => 197,  470 => 196,  468 => 195,  460 => 189,  458 => 188,  451 => 184,  444 => 180,  437 => 176,  430 => 172,  423 => 168,  416 => 164,  409 => 160,  402 => 156,  390 => 146,  384 => 143,  380 => 141,  377 => 140,  371 => 137,  367 => 135,  364 => 134,  358 => 131,  354 => 129,  352 => 128,  349 => 127,  344 => 125,  341 => 124,  332 => 122,  329 => 121,  327 => 120,  318 => 113,  312 => 112,  301 => 106,  295 => 105,  287 => 102,  284 => 101,  279 => 98,  273 => 96,  265 => 94,  263 => 93,  258 => 90,  250 => 87,  246 => 85,  243 => 84,  237 => 81,  233 => 79,  230 => 78,  224 => 75,  220 => 73,  217 => 72,  214 => 71,  211 => 70,  208 => 69,  202 => 66,  198 => 65,  195 => 64,  193 => 63,  189 => 62,  185 => 61,  182 => 60,  179 => 59,  173 => 58,  170 => 56,  167 => 55,  164 => 54,  158 => 51,  151 => 47,  147 => 46,  140 => 42,  136 => 40,  133 => 39,  130 => 38,  122 => 34,  119 => 33,  116 => 31,  113 => 30,  107 => 27,  101 => 24,  98 => 23,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  76 => 14,  70 => 12,  62 => 10,  60 => 9,  55 => 6,  52 => 5,  50 => 4,  44 => 3,  11 => 1,);
    }
}
