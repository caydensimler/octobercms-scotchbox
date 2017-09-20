<?php

/* /var/www/public/plugins/caydensimler/craigslist/components/subcategories/default.htm */
class __TwigTemplate_867c27332c35c465290e1bfbe854c3b73c9e2526bab2f4140434663635117745 extends Twig_Template
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
        $context["subcategories"] = $this->getAttribute(($context["__SELF__"] ?? null), "subcategories", array());
        // line 2
        echo "

<ul>
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 6
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subcategory", array()), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/plugins/caydensimler/craigslist/components/subcategories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set subcategories = __SELF__.subcategories %}


<ul>
\t{% for subcategory in subcategories %}
\t\t<li>{{ subcategory.subcategory }}</li>
\t{% endfor %}
</ul>", "/var/www/public/plugins/caydensimler/craigslist/components/subcategories/default.htm", "");
    }
}
