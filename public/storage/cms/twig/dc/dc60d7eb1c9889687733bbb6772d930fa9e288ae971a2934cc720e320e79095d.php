<?php

/* /var/www/public/themes/socialite/pages/successfully-signed.htm */
class __TwigTemplate_9395bac619784c98af13fe6304669032889fb7b09263b58b7abed5f22d1e269a extends Twig_Template
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
        echo "<h2> 
\t";
        // line 2
        if (($this->getAttribute(($context["user"] ?? null), "rs_provider", array()) == "facebook")) {
            // line 3
            echo "\tFacebook
\t";
        } else {
            // line 5
            echo "\tRegular
\t";
        }
        // line 7
        echo "\tSign On Successful! Welcome ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", array()), "html", null, true);
        echo ".
</h2>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/socialite/pages/successfully-signed.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2> 
\t{% if user.rs_provider == 'facebook' %}
\tFacebook
\t{% else %}
\tRegular
\t{% endif %}
\tSign On Successful! Welcome {{ user.name }}.
</h2>", "/var/www/public/themes/socialite/pages/successfully-signed.htm", "");
    }
}
