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
\t\t<hr class=\"postContactBorder\">
\t</div>

\t<div class=\"col-xs-12 invisible\"><h4>kjasd;fkj</h4></div>
\t
\t<div class=\"col-xs-12 text-center postImageGallery\">
\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "image_gallery", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 20
                echo "
\t\t\t<a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\">
\t\t\t\t<img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "thumb", array(0 => 200, 1 => 200, 2 => array("mode" => "crop")), "method"), "html", null, true);
                echo "\">
\t\t\t</a>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t</div>

\t<div class=\"col-xs-12 text-center postBody\">
\t\t";
            // line 28
            echo $this->getAttribute(($context["record"] ?? null), "body", array());
            echo "
\t</div>

\t<div class=\"col-xs-12 text-center\">
\t\t<h3>Categories</h3>

\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["record"] ?? null), "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 35
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_title", array()), "html", null, true);
                echo "
\t\t\t<br>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t</div>

";
        } else {
            // line 41
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
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
        return array (  107 => 41,  102 => 38,  92 => 35,  88 => 34,  79 => 28,  74 => 25,  65 => 22,  61 => 21,  58 => 20,  54 => 19,  44 => 12,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
\t\t<hr class=\"postContactBorder\">
\t</div>

\t<div class=\"col-xs-12 invisible\"><h4>kjasd;fkj</h4></div>
\t
\t<div class=\"col-xs-12 text-center postImageGallery\">
\t\t{% for image in record.image_gallery %}

\t\t\t<a href=\"{{ image.path }}\">
\t\t\t\t<img src=\"{{ image.thumb(200, 200, {'mode':'crop'})  }}\">
\t\t\t</a>
\t\t{% endfor %}
\t</div>

\t<div class=\"col-xs-12 text-center postBody\">
\t\t{{ record.body|raw }}
\t</div>

\t<div class=\"col-xs-12 text-center\">
\t\t<h3>Categories</h3>

\t\t{% for category in record.categories %}
\t\t\t{{ category.category_title }}
\t\t\t<br>
\t\t{% endfor %}
\t</div>

{% else %}
    {{ notFoundMessage }}
{% endif %}", "/var/www/public/themes/demo/pages/post-single.htm", "");
    }
}
