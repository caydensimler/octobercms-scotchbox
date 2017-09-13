<?php

/* /var/www/public/themes/ksoft-ksoft-bulma/partials/site/_footer.htm */
class __TwigTemplate_2cc239335bacef2df40ab95ecad574d41868967554488c86b3f6d428ed9f241e extends Twig_Template
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
        echo "<footer>
  <div class=\"section is-medium footer-menu\">
    <div class=\"container is-primary\">

      ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/_footer-nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
    </div>
  </div>

  <div class=\"section footer-credits\">
    <div class=\"container is-primary\">
      <div class=\"content has-text-centered is-primary\">
        <p>
          <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_url", array()), "html", null, true);
        echo "\">© ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array(), "any", false, true), "site_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array(), "any", false, true), "site_name", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "name", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "name", array()))), "html", null, true);
        echo "</a>
          a theme by <a href=\"http://sunnyface.com\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array(), "any", false, true), "site_author", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array(), "any", false, true), "site_author", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "author", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "config", array()), "author", array()))), "html", null, true);
        echo "</a>.
          Powered with <a href=\"https://laravel.com\">Laravel</a> and <a href=\"https://octobercms.com\">OctoberCMS</a>.
        </p>
        ";
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "social_icon_size", array()) != "is-hidden")) {
            // line 19
            echo "        <div class=\"social-media-icons\">
            ";
            // line 20
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "social_media", array())) {
                // line 21
                echo "                <div class=\"columns is-mobile is-centered\">
                    <div class=\"column is-narrow\">
                        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "social_media", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                    // line 24
                    echo "                        <a class=\"icon hvr-grow ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "social_icon_size", array()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "url", array()), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "icon", array()), "html", null, true);
                    echo "\"></i></a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                    </div>
                </div>
            ";
            } else {
                // line 29
                echo "                <a class=\"icon hvr-grow ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "social_icon_size", array()), "html", null, true);
                echo "\" href=\"https://github.com/kikoseijo/oc-bulma-theme\" target=\"_blank\">
                    <i class=\"fa fa-github\"></i>
                </a>
            ";
            }
            // line 33
            echo "        </div>
        ";
        }
        // line 35
        echo "
        <p>
        </p>
      </div>
    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/ksoft-ksoft-bulma/partials/site/_footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  92 => 33,  84 => 29,  79 => 26,  66 => 24,  62 => 23,  58 => 21,  56 => 20,  53 => 19,  51 => 18,  45 => 15,  39 => 14,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
  <div class=\"section is-medium footer-menu\">
    <div class=\"container is-primary\">

      {% partial 'site/_footer-nav' %}

    </div>
  </div>

  <div class=\"section footer-credits\">
    <div class=\"container is-primary\">
      <div class=\"content has-text-centered is-primary\">
        <p>
          <a href=\"{{ this.theme.site_url }}\">© {{ this.theme.site_name | default(this.theme.config.name) }}</a>
          a theme by <a href=\"http://sunnyface.com\">{{ this.theme.site_author | default(this.theme.config.author) }}</a>.
          Powered with <a href=\"https://laravel.com\">Laravel</a> and <a href=\"https://octobercms.com\">OctoberCMS</a>.
        </p>
        {% if this.theme.social_icon_size != 'is-hidden' %}
        <div class=\"social-media-icons\">
            {% if this.theme.social_media %}
                <div class=\"columns is-mobile is-centered\">
                    <div class=\"column is-narrow\">
                        {% for social in this.theme.social_media %}
                        <a class=\"icon hvr-grow {{ this.theme.social_icon_size }}\" href=\"{{social.url}}\" target=\"_blank\"><i class=\"{{social.icon}}\"></i></a>
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                <a class=\"icon hvr-grow {{ this.theme.social_icon_size }}\" href=\"https://github.com/kikoseijo/oc-bulma-theme\" target=\"_blank\">
                    <i class=\"fa fa-github\"></i>
                </a>
            {% endif %}
        </div>
        {% endif %}

        <p>
        </p>
      </div>
    </div>
  </div>
</footer>", "/var/www/public/themes/ksoft-ksoft-bulma/partials/site/_footer.htm", "");
    }
}
