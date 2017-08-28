<?php

/* forms/field.html.twig */
class __TwigTemplate_8623fc45d4535269040c0d6f315c531b0f9d21727d47f5df1c72c20730b3c20b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) && ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) &&  !($context["toggleableChecked"] ?? null));
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 5
        $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", array()) == "vertical");
        // line 6
        $context["field_name"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())));
        // line 7
        echo "
";
        // line 8
        if (($this->getAttribute(($context["field"] ?? null), "yaml", array()) && twig_test_iterable(($context["value"] ?? null)))) {
            // line 9
            echo "    ";
            $context["value"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->toYamlFilter(($context["value"] ?? null));
        }
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"form-field grid";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", array())) {
            echo " form-field-toggleable";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "outerclasses", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "field_classes", array()), "html", null, true);
        echo "\">
        ";
        // line 14
        $this->displayBlock('contents', $context, $blocks);
        // line 84
        echo "    </div>
";
    }

    // line 14
    public function block_contents($context, array $blocks = array())
    {
        // line 15
        echo "            <div class=\"form-label";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3";
        }
        echo "\">
                ";
        // line 16
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", array())) {
            // line 17
            echo "                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "\">
                        <input type=\"checkbox\"
                               id=\"toggleable_";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()), "html", null, true);
            echo "\"
                               ";
            // line 20
            if (($context["toggleableChecked"] ?? null)) {
                echo "value=\"1\"";
            }
            // line 21
            echo "                               name=\"toggleable_";
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "\"
                               ";
            // line 22
            if (($context["toggleableChecked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 23
            echo "                        >
                        <label for=\"toggleable_";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()), "html", null, true);
            echo "\"></label>
                    </span>
                ";
        }
        // line 27
        echo "                <label";
        echo (($this->getAttribute(($context["field"] ?? null), "toggleable", array())) ? (((" class=\"toggleable\" for=\"toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", array())) . "\"")) : (""));
        echo ">
                ";
        // line 28
        $this->displayBlock('label', $context, $blocks);
        // line 36
        echo "                </label>
            </div>
            <div class=\"form-data";
        // line 38
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3";
        }
        echo "\"
                ";
        // line 39
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 44
        echo "            >
                ";
        // line 45
        $this->displayBlock('group', $context, $blocks);
        // line 77
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", array())) {
            // line 78
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array()), "html", null, true);
            echo "\">
                        <span class=\"form-description\">";
            // line 79
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "description", array()));
            echo "</span>
                    </div>
                ";
        }
        // line 82
        echo "            </div>
        ";
    }

    // line 28
    public function block_label($context, array $blocks = array())
    {
        // line 29
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 30
            echo "                    <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "help", array())), "html");
            echo "\">";
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array()));
            echo "</span>
                    ";
        } else {
            // line 32
            echo "                    ";
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array()));
            echo "
                    ";
        }
        // line 34
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 39
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 40
        echo "                data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", array()), "html", null, true);
        echo "\"
                data-grav-disabled=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
                data-grav-default=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 45
    public function block_group($context, array $blocks = array())
    {
        // line 46
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 76
        echo "                ";
    }

    // line 46
    public function block_input($context, array $blocks = array())
    {
        // line 47
        echo "                        <div class=\"form-input-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array()), "html", null, true);
        echo "\">
                            ";
        // line 48
        $this->displayBlock('prepend', $context, $blocks);
        // line 49
        echo "                            <input
                                ";
        // line 51
        echo "                                name=\"";
        echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
        echo "\"
                                value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html", null, true);
        echo "\"
                                ";
        // line 53
        if ($this->getAttribute(($context["field"] ?? null), "key", array())) {
            // line 54
            echo "                                    data-key-observe=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . ($context["field_name"] ?? null))), "html", null, true);
            echo "\"
                                ";
        }
        // line 56
        echo "                                ";
        // line 57
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 72
        echo "                            />
                            ";
        // line 73
        $this->displayBlock('append', $context, $blocks);
        // line 74
        echo "                        </div>
                    ";
    }

    // line 48
    public function block_prepend($context, array $blocks = array())
    {
    }

    // line 57
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 58
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
            echo "\" ";
        }
        // line 59
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        // line 60
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 61
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 62
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "placeholder", array())), "html", null, true);
            echo "\"";
        }
        // line 63
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 64
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 65
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 66
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", array()), "html", null, true);
            echo "\"";
        }
        // line 67
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 68
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array()), "html", null, true);
            echo "\"";
        }
        // line 69
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array()))), "html", null, true);
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 70
($context["field"] ?? null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "title", array()))), "html", null, true);
            echo "\" ";
        }
        // line 71
        echo "                                ";
    }

    // line 73
    public function block_append($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 73,  358 => 71,  352 => 70,  345 => 69,  338 => 68,  333 => 67,  326 => 66,  321 => 65,  316 => 64,  311 => 63,  304 => 62,  299 => 61,  292 => 60,  285 => 59,  278 => 58,  275 => 57,  270 => 48,  265 => 74,  263 => 73,  260 => 72,  257 => 57,  255 => 56,  249 => 54,  247 => 53,  243 => 52,  238 => 51,  235 => 49,  233 => 48,  226 => 47,  223 => 46,  219 => 76,  216 => 46,  213 => 45,  207 => 42,  203 => 41,  198 => 40,  195 => 39,  188 => 34,  182 => 32,  174 => 30,  171 => 29,  168 => 28,  163 => 82,  157 => 79,  150 => 78,  147 => 77,  145 => 45,  142 => 44,  140 => 39,  134 => 38,  130 => 36,  128 => 28,  123 => 27,  117 => 24,  114 => 23,  110 => 22,  105 => 21,  101 => 20,  97 => 19,  91 => 17,  89 => 16,  82 => 15,  79 => 14,  74 => 84,  72 => 14,  58 => 13,  52 => 12,  49 => 11,  45 => 9,  43 => 8,  40 => 7,  38 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (value is null ? field.default : value) %}
{% set vertical = field.style == 'vertical' %}
{% set field_name = (scope ~ field.name)|fieldName %}

{% if field.yaml and value is iterable %}
    {% set value = value|toYaml %}
{% endif %}

{% block field %}
    <div class=\"form-field grid{% if vertical %} vertical{% endif %}{% if field.toggleable %} form-field-toggleable{% endif %} {{ field.outerclasses }} {{ field.field_classes }}\">
        {% block contents %}
            <div class=\"form-label{% if not vertical %} block size-1-3{% endif %}\">
                {% if field.toggleable %}
                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"{{ field_name }}\">
                        <input type=\"checkbox\"
                               id=\"toggleable_{{ field.name }}\"
                               {% if toggleableChecked %}value=\"1\"{% endif %}
                               name=\"toggleable_{{ field_name }}\"
                               {% if toggleableChecked %}checked=\"checked\"{% endif %}
                        >
                        <label for=\"toggleable_{{ field.name }}\"></label>
                    </span>
                {% endif %}
                <label{{ (field.toggleable ? ' class=\"toggleable\" for=\"toggleable_' ~ field.name ~ '\"')|raw }}>
                {% block label %}
                    {% if field.help %}
                    <span class=\"hint--bottom\" data-hint=\"{{ field.help|tu|e('html') }}\">{{ field.label|tu|raw }}</span>
                    {% else %}
                    {{ field.label|tu|raw }}
                    {% endif %}
                    {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                {% endblock %}
                </label>
            </div>
            <div class=\"form-data{% if not vertical %} block size-2-3{% endif %}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ toggleableChecked }}\"
                data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"form-input-wrapper {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ field_name }}\"
                                value=\"{{ value|join(', ') }}\"
                                {% if field.key %}
                                    data-key-observe=\"{{ (scope ~ field_name)|fieldName }}\"
                                {% endif %}
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|tu }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|e|tu }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|e|tu }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.size }} {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">{{ field.description|tu|raw }}</span>
                    </div>
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/field.html.twig", "/var/www/user/plugins/admin/themes/grav/templates/forms/field.html.twig");
    }
}
