<?php

/* partials/stylesheets.html.twig */
class __TwigTemplate_2a53752957243117e6f1155a4bda52a009977da8564569771a8a57f71346118b extends Twig_Template
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
        // line 1
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css-compiled/nucleus.css")), "method");
        // line 2
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css-compiled/template.css")), "method");
        // line 3
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css-compiled/preset.css")), "method");
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "google_fonts", array())) {
            // line 5
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css-compiled/fonts.css")), "method");
        } else {
            // line 7
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css-compiled/simple-fonts.css")), "method");
        }
        // line 9
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/font-awesome.min.css")), "method");
        // line 10
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/chartist.min.css")), "method");
        // line 11
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/selectize.min.css")), "method");
        // line 12
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/hint.base.min.css")), "method");
        // line 13
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/iconpicker.css")), "method");
        // line 14
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 15
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/nucleus-ie9.css")), "method");
            // line 16
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/pure-0.5.0/grids-min.css")), "method");
        }
    }

    public function getTemplateName()
    {
        return "partials/stylesheets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  47 => 15,  45 => 14,  43 => 13,  41 => 12,  39 => 11,  37 => 10,  35 => 9,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do assets.addCss(theme_url~'/css-compiled/nucleus.css') %}
{% do assets.addCss(theme_url~'/css-compiled/template.css') %}
{% do assets.addCss(theme_url~'/css-compiled/preset.css') %}
{% if config.plugins.admin.google_fonts %}
    {% do assets.addCss(theme_url~'/css-compiled/fonts.css') %}
{% else %}
    {% do assets.addCss(theme_url~'/css-compiled/simple-fonts.css') %}
{% endif %}
{% do assets.addCss(theme_url~'/css/font-awesome.min.css') %}
{% do assets.addCss(theme_url~'/css/chartist.min.css') %}
{% do assets.addCss(theme_url~'/css/selectize.min.css') %}
{% do assets.addCss(theme_url~'/css/hint.base.min.css') %}
{% do assets.addCss(theme_url~'/css/iconpicker.css') %}
{% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
    {% do assets.addCss(theme_url~'/css/nucleus-ie9.css') %}
    {% do assets.addCss(theme_url~'/css/pure-0.5.0/grids-min.css') %}
{% endif %}
", "partials/stylesheets.html.twig", "/var/www/user/plugins/admin/themes/grav/templates/partials/stylesheets.html.twig");
    }
}
