<?php

/* /var/www/public/themes/ksoft-ksoft-bulma/layouts/default.htm */
class __TwigTemplate_0bf06df50e37e216528318cd4a2ac8147635a10ac1e89b6fe848dd2952f1105d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array()), $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array(), "any", false, true), "site_slogan", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array(), "any", false, true), "site_slogan", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "description", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "description", array()))), "html", null, true);
        echo "</title>
        <meta name=\"title\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array()), $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "description", array()))) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "description", array()))), "html", null, true);
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "keywords", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_author", array()), "html", null, true);
        echo "\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Webpack+Bulma+Vue+Font-Awesome\">
        <link rel=\"canonical\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_url", array()), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icon.png");
        echo "\">
        <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/icon?family=Material+Icons\">

        ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "use_minified", array())) {
            // line 17
            echo "          ";
            $context["colorCss"] = (("assets/css/colors/" . ($context["css_file_values"] ?? null)) . ".min.css");
            // line 18
            echo "          ";
            $context["appCss"] = "assets/css/app.min.css";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "          ";
            $context["colorCss"] = (("assets/css/colors/" . ($context["css_file_values"] ?? null)) . ".css");
            // line 21
            echo "          ";
            $context["appCss"] = "assets/css/app.css";
            // line 22
            echo "        ";
        }
        // line 23
        echo "        <link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => ($context["colorCss"] ?? null), 1 => ($context["appCss"] ?? null)));
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/less/app.less", 1 => "assets/less/demo.less"));
        // line 28
        echo "\" rel=\"stylesheet\">

        ";
        // line 30
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_material_icons", array())) {
            // line 31
            echo "        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_animate_css", array())) {
            // line 35
            echo "        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css\" rel=\"stylesheet\">
        ";
        }
        // line 37
        echo "
        ";
        // line 38
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 39
        echo "
        ";
        // line 40
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_css", array())) {
            // line 41
            echo "        <style>
        ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_css", array()), "html", null, true);
            echo "
        </style>
        ";
        }
        // line 45
        echo "
        ";
        // line 46
        $context['__placeholder_head_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('head', $context['__placeholder_head_default_contents']);
        unset($context['__placeholder_head_default_contents']);        // line 47
        echo "    </head>
    <body class=\"page-";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()), "html", null, true);
        echo " oc-layout-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "layout", array()), "id", array()), "html", null, true);
        echo " oc-page-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()), "html", null, true);
        echo "\">

        <div class=\"oc-bulma-app\">
            ";
        // line 51
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 52
        echo "        </div>




        <!-- Scripts -->
        ";
        // line 58
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "use_minified", array())) {
            // line 59
            echo "          <script src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/scripts/main.min.js");
            echo "\"></script>
        ";
        } else {
            // line 61
            echo "          <script src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/scripts/main.js");
            echo "\"></script>
        ";
        }
        // line 63
        echo "

        ";
        // line 65
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_wow_js", array())) {
            // line 66
            echo "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/graingert-wow/1.2.0/wow.min.js\"></script>
        <script> new WOW().init(); </script>
        ";
        }
        // line 69
        echo "
        ";
        // line 70
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_octobercms_framework", array())) {
            // line 71
            echo "            ";
            echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
            echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
            // line 72
            echo "        ";
        }
        // line 73
        echo "
        ";
        // line 74
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 75
        echo "
        ";
        // line 76
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_js", array())) {
            // line 77
            echo "            <script type=\"text/javascript\">
                ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "custom_js", array()), "html", null, true);
            echo "
            </script>
        ";
        }
        // line 81
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/ksoft-ksoft-bulma/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 81,  211 => 78,  208 => 77,  206 => 76,  203 => 75,  200 => 74,  197 => 73,  194 => 72,  186 => 71,  184 => 70,  181 => 69,  176 => 66,  174 => 65,  170 => 63,  164 => 61,  158 => 59,  156 => 58,  148 => 52,  146 => 51,  136 => 48,  133 => 47,  131 => 46,  128 => 45,  122 => 42,  119 => 41,  117 => 40,  114 => 39,  111 => 38,  108 => 37,  104 => 35,  102 => 34,  99 => 33,  95 => 31,  93 => 30,  89 => 28,  87 => 25,  81 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  61 => 16,  55 => 13,  51 => 12,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{{ this.theme.site_name }} - {{ this.page.meta_title | default(this.page.title) }} | {{ this.theme.site_slogan | default(this.theme.config.description) }}</title>
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
        <meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
        <meta name=\"author\" content=\"{{ this.theme.site_author }}\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Webpack+Bulma+Vue+Font-Awesome\">
        <link rel=\"canonical\" href=\"{{ this.theme.site_url }}\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/icon.png'|theme }}\">
        <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/icon?family=Material+Icons\">

        {% if this.theme.use_minified %}
          {% set colorCss = 'assets/css/colors/' ~ css_file_values ~ '.min.css' %}
          {% set appCss = 'assets/css/app.min.css' %}
        {% else %}
          {% set colorCss = 'assets/css/colors/' ~ css_file_values ~ '.css' %}
          {% set appCss = 'assets/css/app.css' %}
        {% endif %}
        <link href=\"{{ [colorCss,appCss]|theme }}\" rel=\"stylesheet\">

        <link href=\"{{ [
            'assets/less/app.less',
            'assets/less/demo.less'
        ]|theme }}\" rel=\"stylesheet\">

        {% if this.theme.load_material_icons %}
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        {% endif %}

        {% if this.theme.load_animate_css %}
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css\" rel=\"stylesheet\">
        {% endif %}

        {% styles %}

        {% if this.theme.custom_css %}
        <style>
        {{ this.theme.custom_css }}
        </style>
        {% endif %}

        {% placeholder head %}
    </head>
    <body class=\"page-{{ this.page.id }} oc-layout-{{ this.layout.id }} oc-page-{{ this.page.id }}\">

        <div class=\"oc-bulma-app\">
            {% page %}
        </div>




        <!-- Scripts -->
        {% if this.theme.use_minified %}
          <script src=\"{{ 'assets/scripts/main.min.js'|theme }}\"></script>
        {% else %}
          <script src=\"{{ 'assets/scripts/main.js'|theme }}\"></script>
        {% endif %}


        {% if this.theme.load_wow_js %}
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/graingert-wow/1.2.0/wow.min.js\"></script>
        <script> new WOW().init(); </script>
        {% endif %}

        {% if this.theme.load_octobercms_framework %}
            {% framework extras %}
        {% endif %}

        {% scripts %}

        {% if this.theme.custom_js %}
            <script type=\"text/javascript\">
                {{ this.theme.custom_js }}
            </script>
        {% endif %}

    </body>
</html>", "/var/www/public/themes/ksoft-ksoft-bulma/layouts/default.htm", "");
    }
}
