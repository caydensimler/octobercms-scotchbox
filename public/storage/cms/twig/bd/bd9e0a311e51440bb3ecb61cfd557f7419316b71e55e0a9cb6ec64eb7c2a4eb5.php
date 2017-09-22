<?php

/* /var/www/public/themes/demo/pages/posts.htm */
class __TwigTemplate_3f249eb970da50589b5f072b216cf87cceeb5f247c802b382eb78cf1c8a36971 extends Twig_Template
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
<div class=\"col-xs-12 invisible\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In error fuga sequi, incidunt laboriosam, minus ipsa ut eos facere illum, molestiae autem eius maxime iste delectus quis, odit pariatur praesentium.</div>

<div class=\"col-xs-12\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 12
            echo "        <div class=\"col-xs-4 text-center postsBody\">
            ";
            // line 14
            echo "            ";
            ob_start();
            // line 15
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 16
                echo "                    <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => $this->getAttribute($context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 18
            echo "
                <div class=\"col-xs-12 postTitle\">";
            // line 19
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["record"], "title", array())) > 20)) ? ((twig_slice($this->env, $this->getAttribute($context["record"], "title", array()), 0, 20) . "...")) : ($this->getAttribute($context["record"], "title", array()))), "html", null, true);
            echo "</div>

                <div class=\"col-xs-12 postPrice\">\$";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "price", array()), "html", null, true);
            echo "</div>

                <div class=\"col-xs-12 text-center\">

                    ";
            // line 25
            if (twig_test_empty($this->getAttribute($context["record"], "image", array()))) {
                // line 26
                echo "                        <img src=\"/storage/app/media/filler_image.jpg\" alt=\"filler image\">
                    ";
            } else {
                // line 28
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["record"], "image", array()), "thumb", array(0 => 100, 1 => 100, 2 => array("mode" => "crop")), "method"), "html", null, true);
                echo "\">
                    ";
            }
            // line 30
            echo "                </div>

                <div class=\"col-xs-12 postsDetails\">";
            // line 32
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["record"], "body", array()), 50));
            echo "</div>

                ";
            // line 34
            if (($context["detailsPage"] ?? null)) {
                // line 35
                echo "                    </a>
                ";
            }
            // line 37
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 38
            echo "        
            
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</div>

";
        // line 46
        if (($this->getAttribute(($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 47
            echo "    <ul class=\"pagination\">
        ";
            // line 48
            if (($this->getAttribute(($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 49
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 51
            echo "
        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 53
                echo "            <li class=\"";
                echo ((($this->getAttribute(($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 54
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
            // line 57
            echo "
        ";
            // line 58
            if (($this->getAttribute(($context["records"] ?? null), "lastPage", array()) > $this->getAttribute(($context["records"] ?? null), "currentPage", array()))) {
                // line 59
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 61
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/demo/pages/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 61,  164 => 59,  162 => 58,  159 => 57,  148 => 54,  143 => 53,  139 => 52,  136 => 51,  130 => 49,  128 => 48,  125 => 47,  123 => 46,  119 => 44,  110 => 42,  102 => 38,  99 => 37,  95 => 35,  93 => 34,  88 => 32,  84 => 30,  78 => 28,  74 => 26,  72 => 25,  65 => 21,  60 => 19,  57 => 18,  51 => 16,  48 => 15,  45 => 14,  42 => 12,  37 => 11,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
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

<div class=\"col-xs-12 invisible\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In error fuga sequi, incidunt laboriosam, minus ipsa ut eos facere illum, molestiae autem eius maxime iste delectus quis, odit pariatur praesentium.</div>

<div class=\"col-xs-12\">
    {% for record in records %}
        <div class=\"col-xs-4 text-center postsBody\">
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                <div class=\"col-xs-12 postTitle\">{{ record.title|length > 20 ? record.title|slice(0, 20) ~ '...' : record.title }}</div>

                <div class=\"col-xs-12 postPrice\">\${{ record.price }}</div>

                <div class=\"col-xs-12 text-center\">

                    {% if record.image is empty %}
                        <img src=\"/storage/app/media/filler_image.jpg\" alt=\"filler image\">
                    {% else %}
                        <img src=\"{{ record.image.thumb(100, 100, {'mode':'crop'})  }}\">
                    {% endif %}
                </div>

                <div class=\"col-xs-12 postsDetails\">{{ html_limit(record.body, 50) | raw }}</div>

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
{% endif %}", "/var/www/public/themes/demo/pages/posts.htm", "");
    }
}
