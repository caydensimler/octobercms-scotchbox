<?php

/* /var/www/public/themes/ksoft-ksoft-bulma/partials/site/_footer-nav.htm */
class __TwigTemplate_830996930ff9cdc64d52779507f8e68fd220430b489edbd3965063bba0083df0 extends Twig_Template
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
        echo "<div class=\"columns\">
  <div class=\"column\">
    <h4 class=\"title is-6\">Page examples</h4>
    <ul>
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "pagesExamples", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 6
            echo "      <li><a href=\"/page-examples/";
            echo twig_escape_filter($this->env, $context["element"], "html", null, true);
            echo "\" class=\"";
            if ((($context["show_element"] ?? null) == $context["element"])) {
                echo " active";
            }
            echo "\">";
            echo call_user_func_array($this->env->getFunction('str_studly')->getCallable(), array("studly", $context["element"]));
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
  </div>
  <div class=\"column\">
    <h4 class=\"title is-6\">Html &amp; CSS Elements</h4>
    <ul>
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 14
            echo "      <li><a href=\"/elements/";
            echo twig_escape_filter($this->env, $context["element"], "html", null, true);
            echo "\" class=\"";
            if ((($context["show_element"] ?? null) == $context["element"])) {
                echo " active";
            }
            echo "\">";
            echo call_user_func_array($this->env->getFunction('str_studly')->getCallable(), array("studly", $context["element"]));
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>
  </div>
  <div class=\"column\">
    <h4 class=\"title is-6\">VueJs Elements</h4>
    <ul>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "buefyEl", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 22
            echo "    <li><a href=\"/components/";
            echo twig_escape_filter($this->env, $context["component"], "html", null, true);
            echo "\" class=\"";
            if ((($context["show_element"] ?? null) == $context["component"])) {
                echo " active";
            }
            echo "\">";
            echo call_user_func_array($this->env->getFunction('str_studly')->getCallable(), array("studly", $context["component"]));
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
  </div>
  <div class=\"column\">
    <h4 class=\"title is-6\">Our partners</h4>
    <figure class=\"image is-128x128\">
      <img src=\"http://bulma.io/images/placeholders/256x256.png\">
    </figure>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/ksoft-ksoft-bulma/partials/site/_footer-nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  81 => 22,  77 => 21,  70 => 16,  55 => 14,  51 => 13,  44 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"columns\">
  <div class=\"column\">
    <h4 class=\"title is-6\">Page examples</h4>
    <ul>
      {% for element in this.theme.config.pagesExamples %}
      <li><a href=\"/page-examples/{{element}}\" class=\"{% if show_element == element %} active{% endif %}\">{{str_studly(element)}}</a></li>
      {% endfor %}
    </ul>
  </div>
  <div class=\"column\">
    <h4 class=\"title is-6\">Html &amp; CSS Elements</h4>
    <ul>
      {% for element in this.theme.config.elements %}
      <li><a href=\"/elements/{{element}}\" class=\"{% if show_element == element %} active{% endif %}\">{{str_studly(element)}}</a></li>
      {% endfor %}
    </ul>
  </div>
  <div class=\"column\">
    <h4 class=\"title is-6\">VueJs Elements</h4>
    <ul>
    {% for component in this.theme.config.buefyEl %}
    <li><a href=\"/components/{{component}}\" class=\"{% if show_element == component %} active{% endif %}\">{{str_studly(component)}}</a></li>
    {% endfor %}
    </ul>
  </div>
  <div class=\"column\">
    <h4 class=\"title is-6\">Our partners</h4>
    <figure class=\"image is-128x128\">
      <img src=\"http://bulma.io/images/placeholders/256x256.png\">
    </figure>
  </div>
</div>", "/var/www/public/themes/ksoft-ksoft-bulma/partials/site/_footer-nav.htm", "");
    }
}
