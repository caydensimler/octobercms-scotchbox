<?php

/* /var/www/public/themes/demo/partials/site/header.htm */
class __TwigTemplate_9263d241fb6c99789fa6c62ecc10d1127b51cd12705218446ef4a2a656e5042b extends Twig_Template
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
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Craigslist Clone</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 16
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("posts");
        echo "\">All</a></li>

                ";
        // line 18
        if (($context["user"] ?? null)) {
            // line 19
            echo "                    <li class=\"";
            if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "create")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("create");
            echo "\">Create</a></li>
                    <li class=\"";
            // line 20
            if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "login")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\">Account</a></li>
                    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign Out</a></li>
                ";
        } else {
            // line 23
            echo "                    <li class=\"";
            if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "login")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\">Login/Register</a></li>
                ";
        }
        // line 25
        echo "
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  69 => 23,  59 => 20,  50 => 19,  48 => 18,  39 => 16,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Craigslist Clone</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'posts' %}active{% endif %}\"><a href=\"{{ 'posts'|page }}\">All</a></li>

                {% if user %}
                    <li class=\"{% if this.page.id == 'create' %}active{% endif %}\"><a href=\"{{ 'create'|page }}\">Create</a></li>
                    <li class=\"{% if this.page.id == 'login' %}active{% endif %}\"><a href=\"{{ 'login'|page }}\">Account</a></li>
                    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign Out</a></li>
                {% else %}
                    <li class=\"{% if this.page.id == 'login' %}active{% endif %}\"><a href=\"{{ 'login'|page }}\">Login/Register</a></li>
                {% endif %}

            </ul>
        </div>
    </div>
</nav>", "/var/www/public/themes/demo/partials/site/header.htm", "");
    }
}
