<?php

/* /var/www/public/themes/ksoft-ksoft-bulma/partials/parts/_callout_newsletter.htm */
class __TwigTemplate_f1f667ab0d10ed044fa3e648de1c49a5fadd28f79760616da853867c795e67a8 extends Twig_Template
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
        echo "<section id=\"newsletter\" class=\"hero is-light\">
  <div class=\"hero-body\">
    <div class=\"container\">
      <!-- Begin MailChimp Signup Form -->
      <div id=\"mc_embed_signup\" class=\"columns is-vcentered\">
        <div class=\"column is-one-third is-left\">
          <p class=\"title\">Our <strong>Newsletter</strong></p>
          <p class=\"subtitle\">Get notified when is ready!</p>
        </div>

        <div class=\"column\">
          <form method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate=\"novalidate\">

            <div id=\"mc_embed_signup_scroll\">
              <div class=\"field has-addons\">
                <div class=\"control has-icons-left is-expanded\">
                  <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"input is-flat required email\" placeholder=\"email address\" required=\"\" aria-required=\"true\">
                  <span class=\"icon is-small is-left\">
                    <i class=\"fa fa-envelope\"></i>
                  </span>
                </div>
                <div class=\"control\">
                  <input type=\"submit\" value=\"Subscribe\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"button is-primary\">
                </div>
              </div>

              <div id=\"mce-responses\">
                <div class=\"notification is-danger response\" id=\"mce-error-response\" style=\"display:none\"></div>
                <div class=\"notification is-success response\" id=\"mce-success-response\" style=\"display:none\"></div>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\">
                <input type=\"text\" name=\"b_b43b93fe633f0560b2a72a69c_52585e8803\" tabindex=\"-1\" value=\"\">
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--End mc_embed_signup-->
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/ksoft-ksoft-bulma/partials/parts/_callout_newsletter.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"newsletter\" class=\"hero is-light\">
  <div class=\"hero-body\">
    <div class=\"container\">
      <!-- Begin MailChimp Signup Form -->
      <div id=\"mc_embed_signup\" class=\"columns is-vcentered\">
        <div class=\"column is-one-third is-left\">
          <p class=\"title\">Our <strong>Newsletter</strong></p>
          <p class=\"subtitle\">Get notified when is ready!</p>
        </div>

        <div class=\"column\">
          <form method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate=\"novalidate\">

            <div id=\"mc_embed_signup_scroll\">
              <div class=\"field has-addons\">
                <div class=\"control has-icons-left is-expanded\">
                  <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"input is-flat required email\" placeholder=\"email address\" required=\"\" aria-required=\"true\">
                  <span class=\"icon is-small is-left\">
                    <i class=\"fa fa-envelope\"></i>
                  </span>
                </div>
                <div class=\"control\">
                  <input type=\"submit\" value=\"Subscribe\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"button is-primary\">
                </div>
              </div>

              <div id=\"mce-responses\">
                <div class=\"notification is-danger response\" id=\"mce-error-response\" style=\"display:none\"></div>
                <div class=\"notification is-success response\" id=\"mce-success-response\" style=\"display:none\"></div>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\">
                <input type=\"text\" name=\"b_b43b93fe633f0560b2a72a69c_52585e8803\" tabindex=\"-1\" value=\"\">
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--End mc_embed_signup-->
    </div>
  </div>
</section>", "/var/www/public/themes/ksoft-ksoft-bulma/partials/parts/_callout_newsletter.htm", "");
    }
}
