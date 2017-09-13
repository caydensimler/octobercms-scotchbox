<?php

/* /var/www/public/themes/ksoft-ksoft-bulma/partials/pages/_home-head.htm */
class __TwigTemplate_56f247d4bd88a79e860a28d0f8361189b9a1cfa89ef3b00ae8d04e9cad256895 extends Twig_Template
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
        // line 2
        echo "<div class=\"hero-body\">
  <div class=\"container has-text-centered\">
    <div class=\"columns is-vcentered\">
      <div class=\"column is-5\">
        <figure class=\"image is-4by3\">
          <!-- <img src=\"https://source.unsplash.com/800x600?tech,design\" class=\"home-page-header-promo-img\" alt=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "\"> -->
        </figure>
      </div>
      <div class=\"column is-6 is-offset-1\">
        <h1 class=\"title is-2 wow fadeInUp\">
          Built for developpers
        </h1>
        <h2 class=\"subtitle is-4 wow fadeInUp\" data-wow-delay=\"1s\">
          Best boilerplate with Bulma.io, Vuejs.org &amp; Webpack
        </h2>
        <br>
        <div class=\"field has-addons wow fadeInRightBig\" data-wow-delay=\"2s\">
          <div class=\"control is-expanded\">
          <input class=\"input is-large\" type=\"text\" placeholder=\"Join the newsletter, you@example.org\">
          </div>
          <div class=\"control\">
            <a class=\"button is-large is-primary\">
              Sign Up
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class=\"hero-foot\">
  <div class=\"container has-text-centered\">
      <a id=\"ct-btn-scroll\" href=\"#scrollDown\">
        <span class=\"icon is-large animated bounce\">
          <i class=\"fa fa-angle-double-down\" aria-hidden=\"true\"></i>
        </span>
      </a>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/ksoft-ksoft-bulma/partials/pages/_home-head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 7,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##}
<div class=\"hero-body\">
  <div class=\"container has-text-centered\">
    <div class=\"columns is-vcentered\">
      <div class=\"column is-5\">
        <figure class=\"image is-4by3\">
          <!-- <img src=\"https://source.unsplash.com/800x600?tech,design\" class=\"home-page-header-promo-img\" alt=\"{{ this.page.title }}\"> -->
        </figure>
      </div>
      <div class=\"column is-6 is-offset-1\">
        <h1 class=\"title is-2 wow fadeInUp\">
          Built for developpers
        </h1>
        <h2 class=\"subtitle is-4 wow fadeInUp\" data-wow-delay=\"1s\">
          Best boilerplate with Bulma.io, Vuejs.org &amp; Webpack
        </h2>
        <br>
        <div class=\"field has-addons wow fadeInRightBig\" data-wow-delay=\"2s\">
          <div class=\"control is-expanded\">
          <input class=\"input is-large\" type=\"text\" placeholder=\"Join the newsletter, you@example.org\">
          </div>
          <div class=\"control\">
            <a class=\"button is-large is-primary\">
              Sign Up
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class=\"hero-foot\">
  <div class=\"container has-text-centered\">
      <a id=\"ct-btn-scroll\" href=\"#scrollDown\">
        <span class=\"icon is-large animated bounce\">
          <i class=\"fa fa-angle-double-down\" aria-hidden=\"true\"></i>
        </span>
      </a>
  </div>
</div>", "/var/www/public/themes/ksoft-ksoft-bulma/partials/pages/_home-head.htm", "");
    }
}
