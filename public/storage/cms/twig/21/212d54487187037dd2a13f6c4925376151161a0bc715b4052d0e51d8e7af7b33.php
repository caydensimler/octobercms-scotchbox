<?php

/* /var/www/public/themes/ksoft-ksoft-bulma/partials/site/_header.htm */
class __TwigTemplate_a1e0483bbf96d686d6f52bf4d2da31e6415324006f485cdbba69d5ca2c1bf6b1 extends Twig_Template
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
        echo "<div class=\"hero-head\">
  <div class=\"container\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/_header-nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/ksoft-ksoft-bulma/partials/site/_header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"hero-head\">
  <div class=\"container\">
    {% partial 'site/_header-nav' %}
  </div>
</div>", "/var/www/public/themes/ksoft-ksoft-bulma/partials/site/_header.htm", "");
    }
}
