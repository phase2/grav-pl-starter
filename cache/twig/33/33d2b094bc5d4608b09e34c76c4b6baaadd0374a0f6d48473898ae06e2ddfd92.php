<?php

/* partials/base-root.html.twig */
class __TwigTemplate_22660adb7c203bbf91a7e77d8079db703d17883c219538f2505c9a062ddedfab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'page' => array($this, 'block_page'),
            'navigation' => array($this, 'block_navigation'),
            'titlebar' => array($this, 'block_titlebar'),
            'messages' => array($this, 'block_messages'),
            'widgets' => array($this, 'block_widgets'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
            'content_bottom' => array($this, 'block_content_bottom'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute(($context["uri"] ?? null), "extension", array(), "method") == "json")) {
            $this->loadTemplate("default.json.twig", "partials/base-root.html.twig", 1)->display($context);
        } else {
            // line 2
            echo "    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    ";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 32
            echo "    </head>
    ";
            // line 33
            $this->displayBlock('body', $context, $blocks);
            // line 115
            echo "    </html>
";
        }
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        if (($context["title"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " | ";
        } else {
            if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html", null, true);
                echo " | ";
            }
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html", null, true);
        echo "</title>
        ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "description", array())) {
            // line 9
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "description", array()), "html", null, true);
            echo "\">
        ";
        } else {
            // line 11
            echo "            <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "description", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", array())) {
            // line 14
            echo "            <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "robots", array()), "html", null, true);
            echo "\">
        ";
        } else {
            // line 16
            echo "            <meta name=\"robots\" content=\"noindex, nofollow\">
        ";
        }
        // line 18
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["base_url_simple"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/favicon.png\">

        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->loadTemplate("partials/javascript-config.html.twig", "partials/base-root.html.twig", 26)->display($context);
        // line 27
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    ";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        $this->loadTemplate("partials/stylesheets.html.twig", "partials/base-root.html.twig", 22)->display($context);
        // line 23
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
        ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "            ";
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base-root.html.twig", 28)->display($context);
        // line 29
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
        ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "    <body class=\"";
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "sidebar", array()), "size", array()) == "small")) ? ("sidebar-closed") : (""));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "body_classes", array()), "html", null, true);
        echo "\">
        ";
        // line 35
        $this->displayBlock('page', $context, $blocks);
        // line 112
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 113
        echo "    </body>
    ";
    }

    // line 35
    public function block_page($context, array $blocks = array())
    {
        // line 36
        echo "        <div class=\"remodal-bg\">

            ";
        // line 38
        $this->displayBlock('navigation', $context, $blocks);
        // line 41
        echo "
            <main id=\"admin-main\" >
                ";
        // line 43
        $this->loadTemplate("partials/nav-toggle.html.twig", "partials/base-root.html.twig", 43)->display($context);
        // line 44
        echo "                <div id=\"titlebar\" class=\"titlebar\">
                    ";
        // line 45
        $this->displayBlock('titlebar', $context, $blocks);
        // line 46
        echo "                </div>

                <div class=\"content-wrapper\">
                    <div class=\"";
        // line 49
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "content_padding", array())) {
            echo "content-padding";
        }
        echo "\">
                        ";
        // line 50
        $this->displayBlock('messages', $context, $blocks);
        // line 53
        echo "
                        ";
        // line 54
        $this->displayBlock('widgets', $context, $blocks);
        // line 55
        echo "                        <div class=\"default-box-shadow\">
                            ";
        // line 56
        $this->displayBlock('content_top', $context, $blocks);
        // line 57
        echo "                            <div class=\"admin-block\">";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "</div>
                            ";
        // line 60
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "show_github_msg", array())) {
            // line 61
            echo "                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADMIN_REPORT_ISSUE"), "html", null, true);
            echo "</a></div>
                            ";
        }
        // line 63
        echo "                            ";
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 64
        echo "                        </div>
                        ";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "                    </div>
                </div>

                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
        echo "</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.METADATA"), "html", null, true);
        echo " for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
                        <p class=\"bigger\">
                            ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>

            </main>
            <div id='overlay'></div>
        </div>
        ";
    }

    // line 38
    public function block_navigation($context, array $blocks = array())
    {
        // line 39
        echo "                ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base-root.html.twig", 39)->display($context);
        // line 40
        echo "            ";
    }

    // line 45
    public function block_titlebar($context, array $blocks = array())
    {
    }

    // line 50
    public function block_messages($context, array $blocks = array())
    {
        // line 51
        echo "                            ";
        $this->loadTemplate("partials/messages.html.twig", "partials/base-root.html.twig", 51)->display($context);
        // line 52
        echo "                        ";
    }

    // line 54
    public function block_widgets($context, array $blocks = array())
    {
    }

    // line 56
    public function block_content_top($context, array $blocks = array())
    {
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
    }

    // line 63
    public function block_content_bottom($context, array $blocks = array())
    {
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        // line 66
        echo "                        <footer id=\"footer\">
                             <a href=\"http://getgrav.org\">Grav</a> v<span class=\"grav-version\">";
        // line 67
        echo twig_escape_filter($this->env, twig_constant("GRAV_VERSION"), "html", null, true);
        echo "</span> - Admin v";
        echo twig_escape_filter($this->env, ($context["admin_version"] ?? null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.WAS_MADE_WITH")), "html", null, true);
        echo " <i class=\"fa fa-heart\"></i> ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BY")), "html", null, true);
        echo " <a href=\"http://www.rockettheme.com\">RocketTheme</a>.
                        </footer>
                        ";
    }

    // line 112
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base-root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 112,  356 => 67,  353 => 66,  350 => 65,  345 => 63,  340 => 58,  335 => 56,  330 => 54,  326 => 52,  323 => 51,  320 => 50,  315 => 45,  311 => 40,  308 => 39,  305 => 38,  292 => 103,  288 => 102,  281 => 98,  276 => 96,  267 => 90,  258 => 84,  249 => 78,  243 => 75,  236 => 70,  234 => 65,  231 => 64,  228 => 63,  222 => 61,  220 => 60,  217 => 59,  215 => 58,  213 => 57,  211 => 56,  208 => 55,  206 => 54,  203 => 53,  201 => 50,  195 => 49,  190 => 46,  188 => 45,  185 => 44,  183 => 43,  179 => 41,  177 => 38,  173 => 36,  170 => 35,  165 => 113,  162 => 112,  160 => 35,  153 => 34,  150 => 33,  143 => 29,  140 => 28,  137 => 27,  130 => 23,  127 => 22,  124 => 21,  120 => 31,  117 => 27,  115 => 26,  112 => 25,  110 => 21,  104 => 19,  101 => 18,  97 => 16,  91 => 14,  88 => 13,  82 => 11,  76 => 9,  74 => 8,  61 => 7,  58 => 6,  55 => 5,  49 => 115,  47 => 33,  44 => 32,  42 => 5,  37 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if uri.extension() == 'json' %}{% include 'default.json.twig' %}{% else %}
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if title %}{{ title }} | {% else %}{% if header.title %}{{ header.title }} | {% endif %}{% endif %}{{ site.title }}</title>
        {% if header.description %}
            <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
            <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
            <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% else %}
            <meta name=\"robots\" content=\"noindex, nofollow\">
        {% endif %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url_simple }}{{ theme_url }}/images/favicon.png\">

        {% block stylesheets %}
            {% include 'partials/stylesheets.html.twig' %}
            {{ assets.css()|raw }}
        {% endblock %}

        {% include 'partials/javascript-config.html.twig' %}
        {% block javascripts %}
            {% include 'partials/javascripts.html.twig' %}
            {{ assets.js()|raw }}
        {% endblock %}
    {% endblock %}
    </head>
    {% block body %}
    <body class=\"{{ config.plugins.admin.sidebar.size == 'small' ? 'sidebar-closed' : '' }} {{ config.plugins.admin.body_classes }}\">
        {% block page %}
        <div class=\"remodal-bg\">

            {% block navigation %}
                {% include 'partials/nav.html.twig' %}
            {% endblock %}

            <main id=\"admin-main\" >
                {% include 'partials/nav-toggle.html.twig' %}
                <div id=\"titlebar\" class=\"titlebar\">
                    {% block titlebar %}{% endblock %}
                </div>

                <div class=\"content-wrapper\">
                    <div class=\"{% if config.plugins.admin.content_padding %}content-padding{% endif %}\">
                        {% block messages %}
                            {% include 'partials/messages.html.twig' %}
                        {% endblock %}

                        {% block widgets %}{% endblock %}
                        <div class=\"default-box-shadow\">
                            {% block content_top %}{% endblock %}
                            <div class=\"admin-block\">
                                {%- block content %}{% endblock -%}
                            </div>
                            {% if config.plugins.admin.show_github_msg %}
                            <div class=\"notice alert\"><i class=\"fa fa-github\"></i> <a href=\"https://github.com/getgrav/grav-plugin-admin/issues\" target=\"_blank\">{{ 'PLUGIN_ADMIN.ADMIN_REPORT_ISSUE'|tu }}</a></div>
                            {% endif %}
                            {% block content_bottom %}{% endblock %}
                        </div>
                        {% block footer %}
                        <footer id=\"footer\">
                             <a href=\"http://getgrav.org\">Grav</a> v<span class=\"grav-version\">{{ constant('GRAV_VERSION') }}</span> - Admin v{{ admin_version }} - {{ \"PLUGIN_ADMIN.WAS_MADE_WITH\"|tu|lower }} <i class=\"fa fa-heart\"></i> {{ \"PLUGIN_ADMIN.BY\"|tu|lower }} <a href=\"http://www.rockettheme.com\">RocketTheme</a>.
                        </footer>
                        {% endblock %}
                    </div>
                </div>

                <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.ERROR\"|tu }}</h1>
                        <div class=\"error-content\"></div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"metadata\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1><span>{{ \"PLUGIN_ADMIN.METADATA\"|tu }} for</span> <strong></strong></h1>
                        <div class=\"metadata-preview\">
                            <div class=\"meta-preview\"></div>
                            <div class=\"meta-content\"></div>
                        </div>
                        <div class=\"button-bar\">
                            <a class=\"button remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\">{{ \"PLUGIN_ADMIN.CLOSE\"|tu }}</a>
                        </div>
                    </form>
                </div>
                <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
                    <form>
                        <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
                        <p class=\"bigger\">
                            {{ \"PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC\"|tu }}
                        </p>
                        <br>
                        <div class=\"button-bar\">
                            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
                            <button data-remodal-action=\"confirm\" class=\"button remodal-confirm disable-after-click\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
                        </div>
                    </form>
                </div>

            </main>
            <div id='overlay'></div>
        </div>
        {% endblock page %}
    {% block bottom %}{% endblock %}
    </body>
    {% endblock body %}
    </html>
{% endif %}
", "partials/base-root.html.twig", "/var/www/user/plugins/admin/themes/grav/templates/partials/base-root.html.twig");
    }
}
