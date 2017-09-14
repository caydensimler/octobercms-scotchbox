<?php

/* /var/www/public/themes/socialite/partials/header.htm */
class __TwigTemplate_61229b53e21d85bd6df326667ea8c369c4f01e895bcdd11b5eadfc06ec308887 extends Twig_Template
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
        echo "<!-- NAVBAR -->
\t
\t<div class=\"col-xs-12 navbarMain\">
\t\t";
        // line 4
        if (($context["user"] ?? null)) {
            // line 5
            echo "\t\t\t<div class=\"col-xs-2 signOutLink\">
\t\t\t\t<a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
\t\t\t</div>
\t\t";
        } else {
            // line 9
            echo "    \t\t<div class=\"col-xs-2 signOutLink\">
    \t\t\t<a href=\"";
            // line 10
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\">Login</a>
    \t\t</div>
\t\t";
        }
        // line 13
        echo "\t</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/socialite/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  35 => 10,  32 => 9,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- NAVBAR -->
\t
\t<div class=\"col-xs-12 navbarMain\">
\t\t{% if user %}
\t\t\t<div class=\"col-xs-2 signOutLink\">
\t\t\t\t<a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
\t\t\t</div>
\t\t{% else %}
    \t\t<div class=\"col-xs-2 signOutLink\">
    \t\t\t<a href=\"{{ 'login'|page }}\">Login</a>
    \t\t</div>
\t\t{% endif %}
\t</div>", "/var/www/public/themes/socialite/partials/header.htm", "");
    }
}
