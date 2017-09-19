<?php

/* /var/www/public/themes/demo/pages/categories-results.htm */
class __TwigTemplate_e26b1c5c9cd42e51fb78373a61877b5637b3e4a785746488eaae745e40b2b2cf extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("builderDetails"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("builderList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/demo/pages/categories-results.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'builderDetails' %}
{% component 'builderList' %}", "/var/www/public/themes/demo/pages/categories-results.htm", "");
    }
}
