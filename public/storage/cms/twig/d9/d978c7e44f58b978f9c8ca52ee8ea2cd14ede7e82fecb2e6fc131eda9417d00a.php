<?php

/* /var/www/public/plugins/caydensimler/contact/components/contactform/default.htm */
class __TwigTemplate_7f2a8735a3532a515284638ad75498627744af8eb084e7aa02ab6e68a970b172 extends Twig_Template
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
        echo "<form data-request=\"onSend\">

\t<div class=\"contactContainer\">
\t\t<label class=\"contactFormHeader col-xs-offset-2 col-xs-8\">Name</label>
\t\t<input type=\"text\" name=\"name\" class=\"col-xs-offset-2 col-xs-8\">
\t</div>

\t<div class=\"contactContainer\">
\t\t<label class=\"contactFormHeader col-xs-offset-2 col-xs-8\">Email</label>
\t\t<input type=\"text\" name=\"email\" class=\"col-xs-offset-2 col-xs-8\">
\t</div>

\t<div class=\"contactContainer\">
\t\t<label class=\"contactFormHeader col-xs-offset-2 col-xs-8\">Message</label>
\t\t<textarea name=\"content\" class=\"col-xs-offset-2 col-xs-8\" rows=\"5\"></textarea>
\t</div>

\t<div class=\"col-xs-12 text-center contactContainer\">
\t\t<button type=\"submit\" class=\"btn btn-secondary contactButton\">Send</button>
\t</div>

</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/plugins/caydensimler/contact/components/contactform/default.htm";
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
        return new Twig_Source("<form data-request=\"onSend\">

\t<div class=\"contactContainer\">
\t\t<label class=\"contactFormHeader col-xs-offset-2 col-xs-8\">Name</label>
\t\t<input type=\"text\" name=\"name\" class=\"col-xs-offset-2 col-xs-8\">
\t</div>

\t<div class=\"contactContainer\">
\t\t<label class=\"contactFormHeader col-xs-offset-2 col-xs-8\">Email</label>
\t\t<input type=\"text\" name=\"email\" class=\"col-xs-offset-2 col-xs-8\">
\t</div>

\t<div class=\"contactContainer\">
\t\t<label class=\"contactFormHeader col-xs-offset-2 col-xs-8\">Message</label>
\t\t<textarea name=\"content\" class=\"col-xs-offset-2 col-xs-8\" rows=\"5\"></textarea>
\t</div>

\t<div class=\"col-xs-12 text-center contactContainer\">
\t\t<button type=\"submit\" class=\"btn btn-secondary contactButton\">Send</button>
\t</div>

</form>", "/var/www/public/plugins/caydensimler/contact/components/contactform/default.htm", "");
    }
}
