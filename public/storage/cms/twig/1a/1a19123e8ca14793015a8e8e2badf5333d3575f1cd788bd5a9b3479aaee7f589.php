<?php

/* /var/www/public/themes/socialite/layouts/default.htm */
class __TwigTemplate_7e416dd213b04d344dc1536c2ed94082387a118ebe017c1104c9bddc0e3cc9fb extends Twig_Template
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
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
\t\t<link href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "    </head>
    <body>

        <!-- NAVBAR -->
        <section id=\"layout-content\">
            ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "        </section>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 24
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 25
        echo "        </section>


        <!-- Scripts -->
        <script src=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 32
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 33
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 34
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/socialite/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  95 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  70 => 25,  68 => 24,  62 => 20,  58 => 19,  51 => 14,  48 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
\t\t<link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body>

        <!-- NAVBAR -->
        <section id=\"layout-content\">
            {% partial \"header\" %}
        </section>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>


        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/var/www/public/themes/socialite/layouts/default.htm", "");
    }
}
