<?php

/* /var/www/public/themes/ksoft-ksoft-bulma/pages/home.htm */
class __TwigTemplate_d278c01beeb91525beb434779027e7ff14dd91f24079ccdce914f611c5d26819 extends Twig_Template
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
        echo "<!-- Header -->
<section class=\"hero is-fullheight is-primary is-bold\">
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/_header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages/_home-head"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "</section>
<!-- Body -->
";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages/_home-body"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "<!-- Footer -->
";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("parts/_callout_newsletter"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/_footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/ksoft-ksoft-bulma/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  42 => 9,  39 => 8,  35 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header -->
<section class=\"hero is-fullheight is-primary is-bold\">
{% partial 'site/_header' %}
{% partial 'pages/_home-head' %}
</section>
<!-- Body -->
{% partial 'pages/_home-body' %}
<!-- Footer -->
{% partial 'parts/_callout_newsletter' %}
{% partial 'site/_footer' %}", "/var/www/public/themes/ksoft-ksoft-bulma/pages/home.htm", "");
    }
}
