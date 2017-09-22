<?php

/* /var/www/public/themes/demo/pages/subcategories.htm */
class __TwigTemplate_964c3a99d0b231f4904f581825101b24df5822fe9284776aeaa1751ff37b53f7 extends Twig_Template
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
        $context["record"] = $this->getAttribute(($context["builderDetails"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = $this->getAttribute(($context["builderDetails"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = $this->getAttribute(($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "
     <div class=\"col-xs-12 text-center postTitle\">
    \t";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), ($context["displayColumn"] ?? null)), "html", null, true);
            echo "
    </div>

    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "posts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 12
                echo "
\t    <div class=\"col-xs-6 text-center\">

\t\t\t<div class=\"col-xs-12 postTitle\">
\t\t\t\t<a href=\"/post/";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 17
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["post"], "title", array())) > 25)) ? ((twig_slice($this->env, $this->getAttribute($context["post"], "title", array()), 0, 25) . "...")) : ($this->getAttribute($context["post"], "title", array()))), "html", null, true);
                echo "</a>
\t\t\t</div>

\t\t\t<div class=\"col-xs-12 postPrice\">
\t\t\t\t\$";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "price", array()), "html", null, true);
                echo "
\t\t\t</div>

\t        <div class=\"col-xs-12 text-center\">
\t            <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "image", array()), "thumb", array(0 => 200, 1 => 200, 2 => array("mode" => "crop")), "method"), "html", null, true);
                echo "\">
\t        </div>

\t    </div>

\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "
";
        } else {
            // line 33
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/demo/pages/subcategories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 33,  80 => 31,  68 => 25,  61 => 21,  54 => 17,  50 => 16,  44 => 12,  40 => 11,  34 => 8,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}

     <div class=\"col-xs-12 text-center postTitle\">
    \t{{ attribute(record, displayColumn) }}
    </div>

    {% for post in record.posts %}

\t    <div class=\"col-xs-6 text-center\">

\t\t\t<div class=\"col-xs-12 postTitle\">
\t\t\t\t<a href=\"/post/{{ post.slug }}\">
\t\t\t\t{{ post.title|length > 25 ? post.title|slice(0, 25) ~ '...' : post.title }}</a>
\t\t\t</div>

\t\t\t<div class=\"col-xs-12 postPrice\">
\t\t\t\t\${{ post.price }}
\t\t\t</div>

\t        <div class=\"col-xs-12 text-center\">
\t            <img src=\"{{ post.image.thumb(200, 200, {'mode':'crop'})  }}\">
\t        </div>

\t    </div>

\t{% endfor %}

{% else %}
    {{ notFoundMessage }}
{% endif %}", "/var/www/public/themes/demo/pages/subcategories.htm", "");
    }
}
