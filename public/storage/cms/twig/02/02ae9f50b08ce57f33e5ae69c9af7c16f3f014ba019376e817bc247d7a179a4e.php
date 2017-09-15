<?php

/* /var/www/public/themes/bayramoff-theme-cleanblog/partials/analytics.htm */
class __TwigTemplate_a6be89c63f2e908bf401500d519976dac965b5084a21707e63e5668a97346489 extends Twig_Template
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
        echo "<!-- YOUR ANALYTICS CODE HERE -->";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/bayramoff-theme-cleanblog/partials/analytics.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- YOUR ANALYTICS CODE HERE -->", "/var/www/public/themes/bayramoff-theme-cleanblog/partials/analytics.htm", "");
    }
}
