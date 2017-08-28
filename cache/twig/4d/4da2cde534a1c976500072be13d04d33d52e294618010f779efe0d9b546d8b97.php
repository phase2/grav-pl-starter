<?php

/* partials/messages.html.twig */
class __TwigTemplate_db7881f157d0aa910c2a800f6fb2ac418bfcda90ccdf3c85db38ed5c59fce6da extends Twig_Template
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
        $context["admin_messages"] = twig_array_merge($this->getAttribute(($context["admin"] ?? null), "messages", array()), $this->getAttribute(($context["admin"] ?? null), "getTempMessages", array(), "method"));
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, ($context["admin_messages"] ?? null)), "html", null, true);
        echo "
";
        // line 3
        $context["form_message"] = $this->getAttribute(($context["form"] ?? null), "message", array());
        // line 4
        echo "<div id=\"messages\" class=\"top-notifications-container";
        echo (((twig_length_filter($this->env, ($context["admin_messages"] ?? null)) || ($context["form_message"] ?? null))) ? (" default-box-shadow") : (""));
        echo "\">
    <div class=\"single-notification info alert hidden\" data-gpm-grav></div>";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admin_messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "<div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "scope", array()));
            echo " alert\">";
            echo $this->getAttribute($context["message"], "message", array());
            echo "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        if (($context["form_message"] ?? null)) {
            // line 10
            echo "<div class=\"error alert\">";
            echo ($context["form_message"] ?? null);
            echo "</div>";
        }
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugin_messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "<div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "scope", array()));
            echo " alert\">";
            echo $this->getAttribute($context["message"], "message", array());
            echo "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  57 => 13,  53 => 12,  48 => 10,  46 => 9,  36 => 7,  32 => 6,  27 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set admin_messages = admin.messages|merge(admin.getTempMessages()) %}
{{ dump(admin_messages) }}
{% set form_message = form.message %}
<div id=\"messages\" class=\"top-notifications-container{{ admin_messages|length or form_message ? ' default-box-shadow' : '' }}\">
    <div class=\"single-notification info alert hidden\" data-gpm-grav></div>
    {%- for message in admin_messages -%}
    <div class=\"{{ message.scope|e }} alert\">{{ message.message|raw }}</div>
    {%- endfor -%}
    {%- if form_message -%}
    <div class=\"error alert\">{{ form_message|raw }}</div>
    {%- endif -%}
    {%- for message in plugin_messages -%}
        <div class=\"{{ message.scope|e }} alert\">{{ message.message|raw }}</div>
    {%- endfor -%}
</div>
", "partials/messages.html.twig", "/var/www/user/plugins/admin/themes/grav/templates/partials/messages.html.twig");
    }
}
