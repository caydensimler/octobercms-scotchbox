<?php

/* /var/www/public/themes/bayramoff-theme-cleanblog/layouts/mainLayout.htm */
class __TwigTemplate_ef81063fbf1243aebea1f5069e749f55153e6712b2d3bc6bc8d2ab0e1cbc579d extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<body>


";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav_menu"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "


";
        // line 10
        echo $this->env->getExtension('CMS')->pageFunction();
        echo "  
  

";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("analytics"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/bayramoff-theme-cleanblog/layouts/mainLayout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  48 => 14,  44 => 13,  38 => 10,  33 => 7,  29 => 6,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'header' %}

<body>


{% partial 'nav_menu' %}



{% page %}  
  

{% partial 'analytics' %}
{% partial 'footer' %}

</body>
</html>", "/var/www/public/themes/bayramoff-theme-cleanblog/layouts/mainLayout.htm", "");
    }
}
