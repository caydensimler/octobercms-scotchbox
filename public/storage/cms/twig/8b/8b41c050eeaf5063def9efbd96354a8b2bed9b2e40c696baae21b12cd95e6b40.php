<?php

/* /var/www/public/themes/bayramoff-theme-cleanblog/pages/clean-blog-contact.htm */
class __TwigTemplate_a2c9a78c5bb00f38f05381bfce8c44a493ba9538a65cb48516e7feb5e8262737 extends Twig_Template
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
        echo "<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class=\"intro-header\" style=\"background-image: url('";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/contact-bg.jpg");
        echo "')\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <div class=\"page-heading\">
                        <h1>Contact Me</h1>
                        <hr class=\"small\">
                        <span class=\"subheading\">Have questions? I have answers (maybe).</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                    <div class=\"row control-group\">
                        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                            <label>Name</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Name\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"row control-group\">
                        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                            <label>Email Address</label>
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"row control-group\">
                        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                            <label>Phone Number</label>
                            <input type=\"tel\" class=\"form-control\" placeholder=\"Phone Number\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"row control-group\">
                        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                            <label>Message</label>
                            <textarea rows=\"5\" class=\"form-control\" placeholder=\"Message\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <br>
                    <div id=\"success\"></div>
                    <div class=\"row\">
                        <div class=\"form-group col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-default\">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/bayramoff-theme-cleanblog/pages/clean-blog-contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class=\"intro-header\" style=\"background-image: url('{{ 'assets/img/contact-bg.jpg'|theme }}')\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <div class=\"page-heading\">
                        <h1>Contact Me</h1>
                        <hr class=\"small\">
                        <span class=\"subheading\">Have questions? I have answers (maybe).</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                    <div class=\"row control-group\">
                        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                            <label>Name</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Name\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"row control-group\">
                        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                            <label>Email Address</label>
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"row control-group\">
                        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                            <label>Phone Number</label>
                            <input type=\"tel\" class=\"form-control\" placeholder=\"Phone Number\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"row control-group\">
                        <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                            <label>Message</label>
                            <textarea rows=\"5\" class=\"form-control\" placeholder=\"Message\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <br>
                    <div id=\"success\"></div>
                    <div class=\"row\">
                        <div class=\"form-group col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-default\">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>", "/var/www/public/themes/bayramoff-theme-cleanblog/pages/clean-blog-contact.htm", "");
    }
}
