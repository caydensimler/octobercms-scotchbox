<?php

/* /var/www/public/themes/ksoft-ksoft-bulma/partials/site/_header-nav.htm */
class __TwigTemplate_fd73efc2da9beabca2b19c5b64f759080eb6f79b33de06b4614cf3eb52ebce6e extends Twig_Template
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
        echo "<nav class=\"navbar is-transparent\">

  <div class=\"navbar-brand\">
    <a class=\"navbar-item\" href=\"/\">
      <img src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/bulma-white.png");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "\">
    </a>
    <a class=\"navbar-item is-hidden-desktop\" href=\"https://github.com/\" target=\"_blank\">
      <span class=\"icon\">
        <i class=\"fa fa-github\"></i>
      </span>
    </a>
    <a class=\"navbar-item is-hidden-desktop\" href=\"https://twitter.com/\" target=\"_blank\">
      <span class=\"icon\">
        <i class=\"fa fa-twitter\"></i>
      </span>
    </a>
    <div class=\"navbar-burger burger\" data-target=\"topMenu\">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id=\"topMenu\" class=\"navbar-menu\">
    <div class=\"navbar-end\">

      <div class=\"navbar-item has-dropdown is-hoverable\">
        <div class=\"navbar-link is-title\">Elements</div>
        <div class=\"navbar-dropdown is-boxed\">
          <div class=\"columns is-gapless is-multiline is-mobile\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 32
            echo "            <div class=\"column is-half\">
              <a href=\"/elements/";
            // line 33
            echo twig_escape_filter($this->env, $context["element"], "html", null, true);
            echo "\" class=\"navbar-item";
            if ((($context["show_element"] ?? null) == $context["element"])) {
                echo " is-active";
            }
            echo "\">";
            echo call_user_func_array($this->env->getFunction('str_studly')->getCallable(), array("studly", $context["element"]));
            echo "</a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "          </div>
          <hr class=\"navbar-divider is-hidden-touch\">
          <div class=\"navbar-item is-hidden-touch\">
            More elements in &nbsp;<span class=\"tag is-primary\"><a href=\"http://bulma.io\" class=\"is-bold is-primary\" target=\"_blank\">Bulma.io</a></span>
          </div>
        </div>
      </div>

      <div class=\"navbar-item has-dropdown is-hoverable\">
        <div class=\"navbar-link is-title\">Vue Components</div>
        <div class=\"navbar-dropdown is-boxed\">
          ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "buefyEl", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 48
            echo "            <a href=\"/components/";
            echo twig_escape_filter($this->env, $context["component"], "html", null, true);
            echo "\" class=\"navbar-item";
            if ((($context["show_element"] ?? null) == $context["component"])) {
                echo " is-active";
            }
            echo "\">";
            echo call_user_func_array($this->env->getFunction('str_studly')->getCallable(), array("studly", $context["component"]));
            echo "</a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "          <hr class=\"navbar-divider is-hidden-touch\">
          <div class=\"navbar-item is-hidden-touch\">
            More components in &nbsp;<span class=\"tag is-primary\"><a href=\"https://buefy.github.io\" class=\"is-boldn is-info\" target=\"_blank\">Buefy</a></span>
          </div>
        </div>
      </div>

      <div class=\"navbar-item has-dropdown is-hoverable\">
        <div class=\"navbar-link is-title\">Examples</div>
        <div class=\"navbar-dropdown is-boxed\">
          ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "pagesExamples", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 61
            echo "            <a href=\"/page-examples/";
            echo twig_escape_filter($this->env, $context["component"], "html", null, true);
            echo "\" class=\"navbar-item";
            if ((($context["show_element"] ?? null) == $context["component"])) {
                echo " is-active";
            }
            echo "\">";
            echo call_user_func_array($this->env->getFunction('str_studly')->getCallable(), array("studly", $context["component"]));
            echo "</a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </div>
     </div>
     <div class=\"navbar-item has-dropdown is-hoverable\">
       <div class=\"navbar-link is-title\">Colors</div>
       <div class=\"navbar-dropdown is-boxed\">
         <div class=\"columns is-gapless is-multiline is-mobile\">
           ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["color_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 70
            echo "           <div class=\"column is-half\">
             <a href=\"?color=";
            // line 71
            echo twig_escape_filter($this->env, $context["component"], "html", null, true);
            echo "\" class=\"navbar-item";
            if ((($context["css_file_values"] ?? null) == $context["component"])) {
                echo " is-active";
            }
            echo "\">";
            echo call_user_func_array($this->env->getFunction('str_studly')->getCallable(), array("studly", $context["component"]));
            echo "</a>
           </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "           <hr class=\"navbar-divider is-hidden-touch\">
           <div class=\"navbar-item is-hidden-touch\">
             Customize your color using SASS
           </div>
         </div>
       </div>
     </div>

        <span class=\"navbar-item has-text-centered\">
          <a class=\"button is-default\">
            <span class=\"icon\">
                  <i class=\"fa fa-download\"></i>
            </span>
            <span>Free Download</span>
          </a>
        </span>
      </div>
  </div>

</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/ksoft-ksoft-bulma/partials/site/_header-nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 74,  156 => 71,  153 => 70,  149 => 69,  141 => 63,  126 => 61,  122 => 60,  110 => 50,  95 => 48,  91 => 47,  78 => 36,  63 => 33,  60 => 32,  56 => 31,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar is-transparent\">

  <div class=\"navbar-brand\">
    <a class=\"navbar-item\" href=\"/\">
      <img src=\"{{ 'assets/images/bulma-white.png'|theme }}\" alt=\"{{ this.theme.site_name }}\">
    </a>
    <a class=\"navbar-item is-hidden-desktop\" href=\"https://github.com/\" target=\"_blank\">
      <span class=\"icon\">
        <i class=\"fa fa-github\"></i>
      </span>
    </a>
    <a class=\"navbar-item is-hidden-desktop\" href=\"https://twitter.com/\" target=\"_blank\">
      <span class=\"icon\">
        <i class=\"fa fa-twitter\"></i>
      </span>
    </a>
    <div class=\"navbar-burger burger\" data-target=\"topMenu\">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id=\"topMenu\" class=\"navbar-menu\">
    <div class=\"navbar-end\">

      <div class=\"navbar-item has-dropdown is-hoverable\">
        <div class=\"navbar-link is-title\">Elements</div>
        <div class=\"navbar-dropdown is-boxed\">
          <div class=\"columns is-gapless is-multiline is-mobile\">
            {% for element in this.theme.config.elements %}
            <div class=\"column is-half\">
              <a href=\"/elements/{{element}}\" class=\"navbar-item{% if show_element == element %} is-active{% endif %}\">{{str_studly(element)}}</a>
            </div>
            {% endfor %}
          </div>
          <hr class=\"navbar-divider is-hidden-touch\">
          <div class=\"navbar-item is-hidden-touch\">
            More elements in &nbsp;<span class=\"tag is-primary\"><a href=\"http://bulma.io\" class=\"is-bold is-primary\" target=\"_blank\">Bulma.io</a></span>
          </div>
        </div>
      </div>

      <div class=\"navbar-item has-dropdown is-hoverable\">
        <div class=\"navbar-link is-title\">Vue Components</div>
        <div class=\"navbar-dropdown is-boxed\">
          {% for component in this.theme.config.buefyEl %}
            <a href=\"/components/{{component}}\" class=\"navbar-item{% if show_element == component %} is-active{% endif %}\">{{str_studly(component)}}</a>
          {% endfor %}
          <hr class=\"navbar-divider is-hidden-touch\">
          <div class=\"navbar-item is-hidden-touch\">
            More components in &nbsp;<span class=\"tag is-primary\"><a href=\"https://buefy.github.io\" class=\"is-boldn is-info\" target=\"_blank\">Buefy</a></span>
          </div>
        </div>
      </div>

      <div class=\"navbar-item has-dropdown is-hoverable\">
        <div class=\"navbar-link is-title\">Examples</div>
        <div class=\"navbar-dropdown is-boxed\">
          {% for component in this.theme.config.pagesExamples %}
            <a href=\"/page-examples/{{component}}\" class=\"navbar-item{% if show_element == component %} is-active{% endif %}\">{{str_studly(component)}}</a>
          {% endfor %}
        </div>
     </div>
     <div class=\"navbar-item has-dropdown is-hoverable\">
       <div class=\"navbar-link is-title\">Colors</div>
       <div class=\"navbar-dropdown is-boxed\">
         <div class=\"columns is-gapless is-multiline is-mobile\">
           {% for component in color_values %}
           <div class=\"column is-half\">
             <a href=\"?color={{component}}\" class=\"navbar-item{% if css_file_values == component %} is-active{% endif %}\">{{str_studly(component)}}</a>
           </div>
           {% endfor %}
           <hr class=\"navbar-divider is-hidden-touch\">
           <div class=\"navbar-item is-hidden-touch\">
             Customize your color using SASS
           </div>
         </div>
       </div>
     </div>

        <span class=\"navbar-item has-text-centered\">
          <a class=\"button is-default\">
            <span class=\"icon\">
                  <i class=\"fa fa-download\"></i>
            </span>
            <span>Free Download</span>
          </a>
        </span>
      </div>
  </div>

</nav>", "/var/www/public/themes/ksoft-ksoft-bulma/partials/site/_header-nav.htm", "");
    }
}
