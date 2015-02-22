<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_3e829be29ce7d277a8771f1983f6de235b1575b390f8df4091954f344c4b7c54 extends Twig_Template
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
        $__internal_20a631d81fbaa50f3bd96c43433a34c1d0b16b6a7a18bff9fcc9ebc26168425d = $this->env->getExtension("native_profiler");
        $__internal_20a631d81fbaa50f3bd96c43433a34c1d0b16b6a7a18bff9fcc9ebc26168425d->enter($__internal_20a631d81fbaa50f3bd96c43433a34c1d0b16b6a7a18bff9fcc9ebc26168425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20a631d81fbaa50f3bd96c43433a34c1d0b16b6a7a18bff9fcc9ebc26168425d->leave($__internal_20a631d81fbaa50f3bd96c43433a34c1d0b16b6a7a18bff9fcc9ebc26168425d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ac91bd5924a91543053f40860c8640a9edd18153a543985f6a6cb9167869b8d = $this->env->getExtension("native_profiler");
        $__internal_4ac91bd5924a91543053f40860c8640a9edd18153a543985f6a6cb9167869b8d->enter($__internal_4ac91bd5924a91543053f40860c8640a9edd18153a543985f6a6cb9167869b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array())) {
            // line 5
            echo "        ";
            $context["color_code"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array()) && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array()))) ? ("green") : ("yellow"));
            // line 6
            echo "        ";
            $context["authentication_color_code"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array()) && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array()))) ? ("green") : ("red"));
            // line 7
            echo "        ";
            $context["authentication_color_text"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array()) && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array()))) ? ("Yes") : ("No"));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["color_code"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) ? ("red") : ("black"));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array())) {
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["authentication_color_code"]) ? $context["authentication_color_code"] : $this->getContext($context, "authentication_color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["authentication_color_text"]) ? $context["authentication_color_text"] : $this->getContext($context, "authentication_color_text")), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 21
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()) != null)) {
                // line 22
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                ";
                // line 24
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()));
                echo "
            </div>
            ";
            }
            // line 27
            echo "        ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
            // line 28
            echo "            You are not authenticated.
        ";
        } else {
            // line 30
            echo "            The security is disabled.
        ";
        }
        // line 32
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        <svg width=\"24\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 24 28\" enable-background=\"new 0 0 24 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M8.6 14.6c0-0.4 0-0.6 0-0.9c0.2-0.1 0.5-0.6 0.5-1.1c0.1 0 0.3-0.1 0.4-0.6c0-0.3-0.1-0.4-0.2-0.5 c0.2-0.6 0.6-2.6-0.8-2.8C8.4 8.4 8 8.3 7.5 8.3c-2 0-2.2 1.5-1.8 3.2c-0.1 0-0.2 0.2-0.2 0.5c0.1 0.5 0.3 0.6 0.4 0.6 c0 0.5 0.4 1 0.5 1.1c0 0.3 0 0.6 0 0.9c-0.4 1.1-3 0.8-3.2 2.8h8.5C11.7 15.3 9 15.6 8.6 14.6z\"/><path fill=\"#3F3F3F\" d=\"M18 10.7c-0.2 0-0.4 0-0.5 0.1c-0.2 0.1-0.3 0.2-0.5 0.5c-0.2 0.2-0.3 0.5-0.4 0.8s-0.1 0.6-0.1 0.8 c0 0.4 0.1 0.7 0.3 0.9c0.2 0.2 0.4 0.3 0.6 0.3c0.2 0 0.3 0 0.5-0.1c0.2-0.1 0.3-0.2 0.5-0.4c0.2-0.2 0.3-0.4 0.4-0.7 c0.1-0.3 0.2-0.6 0.2-0.9c0-0.4-0.1-0.7-0.3-0.9C18.5 10.8 18.2 10.7 18 10.7z\"/><path fill=\"#3F3F3F\" d=\"M22.2 6H1.8C1.3 6 1 6.3 1 6.8v14.4c0 0.4 0.3 0.8 0.8 0.8h3.8v-0.8c-0.4 0-0.8-0.3-0.8-0.8 c0-0.4 0.3-0.8 0.8-0.8h1.5c0.4 0 0.8 0.3 0.8 0.8c0 0.4-0.3 0.8-0.8 0.8v0.8h9.9v-0.8c-0.4 0-0.8-0.3-0.8-0.8 c0-0.4 0.3-0.8 0.8-0.8h1.5c0.4 0 0.8 0.3 0.8 0.8c0 0.4-0.3 0.8-0.8 0.8v0.8h3.8c0.4 0 0.8-0.3 0.8-0.8V6.8C23 6.3 22.7 6 22.2 6z M12.4 17.4c0 0.4-0.3 0.8-0.8 0.8H3.3c-0.4 0-0.8-0.3-0.8-0.8V8.3c0-0.4 0.3-0.8 0.8-0.8h8.3c0.4 0 0.8 0.3 0.8 0.8V17.4z M21.4 15.6c-0.4 0.3-0.8 0.6-1.3 0.7c-0.5 0.2-1.1 0.3-1.8 0.3c-0.6 0-1.2-0.1-1.8-0.2c-0.5-0.2-1-0.4-1.4-0.7 c-0.4-0.3-0.7-0.7-0.9-1.1c-0.2-0.5-0.4-1.1-0.4-1.8c0-0.7 0.1-1.4 0.4-2c0.4-0.8 0.9-1.4 1.5-1.8c0.6-0.4 1.4-0.6 2.4-0.6 c0.7 0 1.4 0.1 1.9 0.4c0.6 0.3 1 0.7 1.3 1.3c0.3 0.5 0.4 1 0.4 1.6c0 0.8-0.3 1.6-0.9 2.2c-0.5 0.6-1.1 0.9-1.7 0.9 c-0.2 0-0.4 0-0.5-0.1c-0.1-0.1-0.2-0.1-0.3-0.3c0-0.1-0.1-0.2-0.1-0.4c-0.2 0.2-0.4 0.4-0.6 0.5c-0.2 0.1-0.5 0.2-0.7 0.2 c-0.3 0-0.5-0.1-0.7-0.2c-0.2-0.1-0.4-0.4-0.6-0.7c-0.2-0.3-0.2-0.7-0.2-1c0-0.5 0.1-0.9 0.4-1.4c0.2-0.5 0.5-0.8 0.9-1 c0.3-0.2 0.7-0.3 1-0.3c0.3 0 0.5 0.1 0.7 0.2c0.2 0.1 0.4 0.3 0.6 0.6l0.1-0.7h0.8l-0.6 2.9c-0.1 0.4-0.1 0.6-0.1 0.7 c0 0.1 0 0.1 0.1 0.2c0.1 0.1 0.1 0.1 0.2 0.1c0.2 0 0.4-0.1 0.6-0.3c0.3-0.2 0.6-0.5 0.8-0.9c0.2-0.4 0.3-0.8 0.3-1.2 c0-0.5-0.1-0.9-0.4-1.3c-0.2-0.4-0.6-0.8-1.1-1s-1-0.4-1.6-0.4c-0.7 0-1.3 0.2-1.8 0.5c-0.6 0.3-1 0.8-1.3 1.4 c-0.3 0.6-0.5 1.2-0.5 1.9c0 0.7 0.2 1.3 0.5 1.8c0.3 0.5 0.8 0.9 1.3 1.1c0.6 0.2 1.2 0.4 1.9 0.4c0.8 0 1.4-0.1 1.9-0.4 c0.5-0.3 0.9-0.6 1.1-0.9h0.8C22 14.9 21.8 15.3 21.4 15.6z\"/></g></svg>
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code")), "html", null, true);
        echo "\"></span>
        ";
        // line 36
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array())) {
            echo "<div class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()), "html", null, true);
            echo "</div>";
        }
        // line 37
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_4ac91bd5924a91543053f40860c8640a9edd18153a543985f6a6cb9167869b8d->leave($__internal_4ac91bd5924a91543053f40860c8640a9edd18153a543985f6a6cb9167869b8d_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6095d59db73214f6e265bac0a370ad83fdc18bc9cf775b4ba9084ceff078bdc = $this->env->getExtension("native_profiler");
        $__internal_c6095d59db73214f6e265bac0a370ad83fdc18bc9cf775b4ba9084ceff078bdc->enter($__internal_c6095d59db73214f6e265bac0a370ad83fdc18bc9cf775b4ba9084ceff078bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"42\" height=\"30\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 42 30\" enable-background=\"new 0 0 42 30\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M16.1 15.3c0-0.5 0-0.8 0-1.2c0.2-0.1 0.6-0.8 0.7-1.4c0.2 0 0.4-0.2 0.5-0.8c0-0.4-0.1-0.5-0.2-0.6 c0.3-0.8 0.8-3.4-1.1-3.7C15.7 7.2 15.2 7 14.6 7c-2.6 0-2.9 2-2.4 4.2c-0.1 0.1-0.3 0.3-0.2 0.6c0.1 0.7 0.3 0.8 0.5 0.8 c0.1 0.6 0.5 1.3 0.7 1.4c0 0.4 0 0.8 0 1.2c-0.5 1.4-4 1-4.2 3.7h11.2C20.1 16.3 16.6 16.7 16.1 15.3z\"/><path fill=\"#3F3F3F\" d=\"M28.3 10.2c-0.2 0-0.5 0.1-0.7 0.2c-0.2 0.1-0.4 0.3-0.6 0.6c-0.2 0.3-0.4 0.6-0.5 1s-0.2 0.7-0.2 1.1 c0 0.5 0.1 0.9 0.4 1.2s0.5 0.4 0.8 0.4c0.2 0 0.4-0.1 0.7-0.2c0.2-0.1 0.5-0.3 0.7-0.6s0.4-0.6 0.5-1c0.1-0.4 0.2-0.8 0.2-1.2 c0-0.5-0.1-0.9-0.4-1.2C29 10.3 28.7 10.2 28.3 10.2z\"/><path fill=\"#3F3F3F\" d=\"M34 4H7C6.4 4 6 4.4 6 5v19c0 0.6 0.4 1 1 1h5v-1c-0.6 0-1-0.4-1-1c0-0.6 0.4-1 1-1h2c0.6 0 1 0.4 1 1 c0 0.6-0.4 1-1 1v1h13v-1c-0.6 0-1-0.4-1-1c0-0.6 0.4-1 1-1h2c0.6 0 1 0.4 1 1c0 0.6-0.4 1-1 1v1h5c0.6 0 1-0.4 1-1V5 C35 4.4 34.6 4 34 4z M21 19c0 0.6-0.4 1-1 1H9c-0.6 0-1-0.4-1-1V7c0-0.6 0.4-1 1-1h11c0.6 0 1 0.4 1 1V19z M32.9 16.6 c-0.5 0.4-1 0.7-1.7 1c-0.6 0.2-1.4 0.4-2.3 0.4c-0.8 0-1.6-0.1-2.3-0.3c-0.7-0.2-1.3-0.5-1.8-1c-0.5-0.4-0.9-0.9-1.1-1.5 c-0.3-0.7-0.5-1.5-0.5-2.3c0-0.9 0.2-1.8 0.6-2.6c0.5-1 1.1-1.8 2-2.4C26.5 7.3 27.6 7 28.8 7c0.9 0 1.8 0.2 2.5 0.6 c0.7 0.4 1.3 1 1.8 1.7c0.4 0.7 0.6 1.4 0.6 2.1c0 1.1-0.4 2.1-1.2 2.9c-0.7 0.8-1.4 1.2-2.3 1.2c-0.3 0-0.5 0-0.6-0.1 c-0.2-0.1-0.3-0.2-0.4-0.3c0-0.1-0.1-0.3-0.1-0.5c-0.2 0.3-0.5 0.5-0.8 0.7c-0.3 0.2-0.6 0.3-0.9 0.3c-0.3 0-0.7-0.1-1-0.3 c-0.3-0.2-0.6-0.5-0.8-0.9c-0.2-0.4-0.3-0.9-0.3-1.3c0-0.6 0.2-1.2 0.5-1.8c0.3-0.6 0.7-1.1 1.2-1.4c0.5-0.3 0.9-0.5 1.3-0.5 c0.3 0 0.6 0.1 0.9 0.3c0.3 0.2 0.6 0.4 0.8 0.8l0.2-0.9h1l-0.8 3.8c-0.1 0.5-0.2 0.8-0.2 0.9c0 0.1 0 0.2 0.1 0.3 c0.1 0.1 0.2 0.1 0.3 0.1c0.2 0 0.5-0.1 0.8-0.3c0.4-0.3 0.8-0.7 1-1.2c0.3-0.5 0.4-1 0.4-1.6c0-0.6-0.2-1.2-0.5-1.8 c-0.3-0.6-0.8-1-1.5-1.3s-1.4-0.5-2.1-0.5c-0.9 0-1.7 0.2-2.4 0.6c-0.7 0.4-1.3 1-1.7 1.8C24.2 11 24 11.9 24 12.7 c0 0.9 0.2 1.7 0.6 2.4c0.4 0.7 1 1.2 1.8 1.5c0.8 0.3 1.6 0.5 2.5 0.5c1 0 1.8-0.2 2.5-0.5c0.7-0.3 1.2-0.7 1.5-1.2h1 C33.7 15.8 33.4 16.2 32.9 16.6z\"/></g></svg></span>
    <strong>Security</strong>
</span>
";
        
        $__internal_c6095d59db73214f6e265bac0a370ad83fdc18bc9cf775b4ba9084ceff078bdc->leave($__internal_c6095d59db73214f6e265bac0a370ad83fdc18bc9cf775b4ba9084ceff078bdc_prof);

    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e828aad6a90c4aa55cfff3a4fb78b772e3aa4fedc7f1b788acd4978abd98c33 = $this->env->getExtension("native_profiler");
        $__internal_9e828aad6a90c4aa55cfff3a4fb78b772e3aa4fedc7f1b788acd4978abd98c33->enter($__internal_9e828aad6a90c4aa55cfff3a4fb78b772e3aa4fedc7f1b788acd4978abd98c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 49
        echo "    <h2>Security</h2>
    ";
        // line 50
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array())) {
            // line 51
            echo "        <table>
            <tr>
                <th>Username</th>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Authenticated?</th>
                <td>
                    ";
            // line 59
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array())) {
                // line 60
                echo "                        yes
                    ";
            } else {
                // line 62
                echo "                        no ";
                if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array()))) {
                    echo "<em>(probably because the user has no roles)</em>";
                }
                // line 63
                echo "                    ";
            }
            // line 64
            echo "                </td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array())), "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 70
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "supportsRoleHierarchy", array())) {
                // line 71
                echo "            <tr>
                <th>Inherited Roles</th>
                <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inheritedRoles", array())), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            // line 76
            echo "            ";
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()) != null)) {
                // line 77
                echo "            <tr>
                <th>Token class</th>
                <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            // line 82
            echo "        </table>
    ";
        } elseif ($this->getAttribute(        // line 83
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
            // line 84
            echo "        <p>
            <em>No token</em>
        </p>
    ";
        } else {
            // line 88
            echo "        <p>
            <em>The security component is disabled</em>
        </p>
    ";
        }
        
        $__internal_9e828aad6a90c4aa55cfff3a4fb78b772e3aa4fedc7f1b788acd4978abd98c33->leave($__internal_9e828aad6a90c4aa55cfff3a4fb78b772e3aa4fedc7f1b788acd4978abd98c33_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 88,  246 => 84,  244 => 83,  241 => 82,  235 => 79,  231 => 77,  228 => 76,  222 => 73,  218 => 71,  216 => 70,  211 => 68,  205 => 64,  202 => 63,  197 => 62,  193 => 60,  191 => 59,  183 => 54,  178 => 51,  176 => 50,  173 => 49,  167 => 48,  156 => 42,  150 => 41,  142 => 38,  139 => 37,  133 => 36,  129 => 35,  126 => 34,  123 => 33,  120 => 32,  116 => 30,  112 => 28,  109 => 27,  103 => 24,  99 => 22,  97 => 21,  90 => 19,  81 => 15,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  65 => 9,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  50 => 4,  44 => 3,  11 => 1,);
    }
}
