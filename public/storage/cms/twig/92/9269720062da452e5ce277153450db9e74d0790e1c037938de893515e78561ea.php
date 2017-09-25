<?php

/* /var/www/public/themes/demo/pages/post-single.htm */
class __TwigTemplate_ba15a16066728cd732296ef909c936013269ae7b9e8403382cbe969370cfac1a extends Twig_Template
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
\t<div class=\"col-xs-12 text-center postTitle\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "title", array()), "html", null, true);
            echo "</div>

\t<div class=\"col-xs-12 text-center postPrice\">
\t\t\$";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "price", array()), "html", null, true);
            echo " 
\t\t<br>
\t\t";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "contact_email", array()), "html", null, true);
            echo "
\t</div>
\t
\t<div class=\"col-xs-12 text-center postImageGallery\">
\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "image_gallery", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 17
                echo "
\t\t\t<a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\">
\t\t\t\t<img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "thumb", array(0 => 100, 1 => 100, 2 => array("mode" => "crop")), "method"), "html", null, true);
                echo "\">
\t\t\t</a>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t</div>

\t<div class=\"col-xs-12 text-center postBody\">
\t\t";
            // line 25
            echo $this->getAttribute(($context["record"] ?? null), "body", array());
            echo "
\t</div>

\t<div class=\"col-xs-12 col-md-6 text-center\">
\t\t<h3>Categories</h3>

\t\t<div class=\"col-xs-12 categoryBox\">
\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "\t\t\t\t<a href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_title", array()), "html", null, true);
                echo "</a>
\t\t\t\t<br>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t</div>
\t</div>


\t<div class=\"col-xs-12 col-md-6 text-center\">
\t\t<h3>Sub-Categories</h3>

\t\t<div class=\"col-xs-12 categoryBox\">
\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "subcategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subcategories"]) {
                // line 45
                echo "\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<a href=\"/subcategory/";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategories"], "slug", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcategories"], "subcategory", array()), "html", null, true);
                echo "</a>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategories'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t</div>
\t</div>

";
        } else {
            // line 53
            echo "    <div class=\"col-xs-12 text-center\"><h1>Post not found.</h1></div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/demo/pages/post-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  130 => 49,  119 => 46,  116 => 45,  112 => 44,  102 => 36,  90 => 33,  86 => 32,  76 => 25,  71 => 22,  62 => 19,  58 => 18,  55 => 17,  51 => 16,  44 => 12,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
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

\t<div class=\"col-xs-12 text-center postTitle\">{{ record.title }}</div>

\t<div class=\"col-xs-12 text-center postPrice\">
\t\t\${{ record.price }} 
\t\t<br>
\t\t{{ record.contact_email }}
\t</div>
\t
\t<div class=\"col-xs-12 text-center postImageGallery\">
\t\t{% for image in record.image_gallery %}

\t\t\t<a href=\"{{ image.path }}\">
\t\t\t\t<img src=\"{{ image.thumb(100, 100, {'mode':'crop'})  }}\">
\t\t\t</a>
\t\t{% endfor %}
\t</div>

\t<div class=\"col-xs-12 text-center postBody\">
\t\t{{ record.body|raw }}
\t</div>

\t<div class=\"col-xs-12 col-md-6 text-center\">
\t\t<h3>Categories</h3>

\t\t<div class=\"col-xs-12 categoryBox\">
\t\t\t{% for category in record.categories %}
\t\t\t\t<a href=\"/{{ category.slug }}\">{{ category.category_title }}</a>
\t\t\t\t<br>
\t\t\t{% endfor %}
\t\t</div>
\t</div>


\t<div class=\"col-xs-12 col-md-6 text-center\">
\t\t<h3>Sub-Categories</h3>

\t\t<div class=\"col-xs-12 categoryBox\">
\t\t\t{% for subcategories in record.subcategories %}
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<a href=\"/subcategory/{{ subcategories.slug }}\">{{ subcategories.subcategory }}</a>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>

{% else %}
    <div class=\"col-xs-12 text-center\"><h1>Post not found.</h1></div>
{% endif %}", "/var/www/public/themes/demo/pages/post-single.htm", "");
    }
}
