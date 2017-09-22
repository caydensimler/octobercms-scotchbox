<?php

/* /var/www/public/themes/demo/pages/home.htm */
class __TwigTemplate_e6040ea2e9f3db2ce44d80b0217de2967a5a67c6210701ba638ba24112c330e4 extends Twig_Template
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
        $context["records"] = $this->getAttribute(($context["builderList"] ?? null), "records", array());
        // line 2
        $context["displayColumn"] = $this->getAttribute(($context["builderList"] ?? null), "displayColumn", array());
        // line 3
        $context["noRecordsMessage"] = $this->getAttribute(($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 4
        $context["detailsPage"] = $this->getAttribute(($context["builderList"] ?? null), "detailsPage", array());
        // line 5
        $context["detailsKeyColumn"] = $this->getAttribute(($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 6
        $context["detailsUrlParameter"] = $this->getAttribute(($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 7
        echo "

<div class=\"col-xs-4 text-center categoriesHolderSidebar\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            echo "        <div class=\"col-xs-12 categoriesList\">
            ";
            // line 13
            echo "            ";
            ob_start();
            // line 14
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 15
                echo "                    <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => $this->getAttribute($context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 17
            echo "
                <a href=\"/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "category_title", array()), "html", null, true);
            echo "</a>

                ";
            // line 20
            if (($context["detailsPage"] ?? null)) {
                // line 21
                echo "                    </a>
                ";
            }
            // line 23
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 24
            echo "        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>

";
        // line 30
        if (($this->getAttribute(($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 31
            echo "    <ul class=\"pagination\">
        ";
            // line 32
            if (($this->getAttribute(($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 33
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 35
            echo "
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 37
                echo "            <li class=\"";
                echo ((($this->getAttribute(($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 38
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
        ";
            // line 42
            if (($this->getAttribute(($context["records"] ?? null), "lastPage", array()) > $this->getAttribute(($context["records"] ?? null), "currentPage", array()))) {
                // line 43
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 45
            echo "    </ul>
";
        }
        // line 47
        echo "

<!-- Posts -->

";
        // line 51
        $context["records"] = $this->getAttribute(($context["builderList2"] ?? null), "records", array());
        // line 52
        $context["displayColumn"] = $this->getAttribute(($context["builderList2"] ?? null), "displayColumn", array());
        // line 53
        $context["noRecordsMessage"] = $this->getAttribute(($context["builderList2"] ?? null), "noRecordsMessage", array());
        // line 54
        $context["detailsPage"] = $this->getAttribute(($context["builderList2"] ?? null), "detailsPage", array());
        // line 55
        $context["detailsKeyColumn"] = $this->getAttribute(($context["builderList2"] ?? null), "detailsKeyColumn", array());
        // line 56
        $context["detailsUrlParameter"] = $this->getAttribute(($context["builderList2"] ?? null), "detailsUrlParameter", array());
        // line 57
        echo "
<div class=\"col-xs-8 postsHolderMain\">
    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 60
            echo "        <div class=\"col-xs-12 col-md-6 col-lg-4 text-center postsBody\">
            ";
            // line 62
            echo "            ";
            ob_start();
            // line 63
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 64
                echo "                    <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => $this->getAttribute($context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 66
            echo "
                <div class=\"col-xs-12 postTitle\">";
            // line 67
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["record"], "title", array())) > 15)) ? ((twig_slice($this->env, $this->getAttribute($context["record"], "title", array()), 0, 15) . "...")) : ($this->getAttribute($context["record"], "title", array()))), "html", null, true);
            echo "</div>

                <div class=\"col-xs-12 postPrice\">\$";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "price", array()), "html", null, true);
            echo "</div>

                <div class=\"col-xs-12 text-center\">

                    ";
            // line 73
            if (twig_test_empty($this->getAttribute($context["record"], "image", array()))) {
                // line 74
                echo "                        <img src=\"/storage/app/media/filler_image.jpg\" alt=\"filler image\">
                    ";
            } else {
                // line 76
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["record"], "image", array()), "thumb", array(0 => 100, 1 => 100, 2 => array("mode" => "crop")), "method"), "html", null, true);
                echo "\">
                    ";
            }
            // line 78
            echo "                </div>

                <div class=\"col-xs-12 postsDetails\">";
            // line 80
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["record"], "body", array()), 45));
            echo "</div>

                ";
            // line 82
            if (($context["detailsPage"] ?? null)) {
                // line 83
                echo "                    </a>
                ";
            }
            // line 85
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 86
            echo "        
            
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 92,  240 => 90,  232 => 86,  229 => 85,  225 => 83,  223 => 82,  218 => 80,  214 => 78,  208 => 76,  204 => 74,  202 => 73,  195 => 69,  190 => 67,  187 => 66,  181 => 64,  178 => 63,  175 => 62,  172 => 60,  167 => 59,  163 => 57,  161 => 56,  159 => 55,  157 => 54,  155 => 53,  153 => 52,  151 => 51,  145 => 47,  141 => 45,  135 => 43,  133 => 42,  130 => 41,  119 => 38,  114 => 37,  110 => 36,  107 => 35,  101 => 33,  99 => 32,  96 => 31,  94 => 30,  90 => 28,  81 => 26,  75 => 24,  72 => 23,  68 => 21,  66 => 20,  59 => 18,  56 => 17,  50 => 15,  47 => 14,  44 => 13,  41 => 11,  36 => 10,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


<div class=\"col-xs-4 text-center categoriesHolderSidebar\">
    {% for record in records %}
        <div class=\"col-xs-12 categoriesList\">
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                <a href=\"/{{ record.slug }}\">{{ record.category_title }}</a>

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
        </div>
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</div>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}


<!-- Posts -->

{% set records = builderList2.records %}
{% set displayColumn = builderList2.displayColumn %}
{% set noRecordsMessage = builderList2.noRecordsMessage %}
{% set detailsPage = builderList2.detailsPage %}
{% set detailsKeyColumn = builderList2.detailsKeyColumn %}
{% set detailsUrlParameter = builderList2.detailsUrlParameter %}

<div class=\"col-xs-8 postsHolderMain\">
    {% for record in records %}
        <div class=\"col-xs-12 col-md-6 col-lg-4 text-center postsBody\">
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                <div class=\"col-xs-12 postTitle\">{{ record.title|length > 15 ? record.title|slice(0, 15) ~ '...' : record.title }}</div>

                <div class=\"col-xs-12 postPrice\">\${{ record.price }}</div>

                <div class=\"col-xs-12 text-center\">

                    {% if record.image is empty %}
                        <img src=\"/storage/app/media/filler_image.jpg\" alt=\"filler image\">
                    {% else %}
                        <img src=\"{{ record.image.thumb(100, 100, {'mode':'crop'})  }}\">
                    {% endif %}
                </div>

                <div class=\"col-xs-12 postsDetails\">{{ html_limit(record.body, 45) | raw }}</div>

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
        
            
        </div>
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</div>", "/var/www/public/themes/demo/pages/home.htm", "");
    }
}
