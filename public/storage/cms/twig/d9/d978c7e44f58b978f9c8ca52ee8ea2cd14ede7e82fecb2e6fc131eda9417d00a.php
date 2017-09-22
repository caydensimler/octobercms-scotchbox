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
\t\t<input type=\"text\" name=\"name\" class=\"col-xs-offset-2 col-xs-8\" placeholder=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "first", array(0 => "name"), "method"), "html", null, true);
        echo "\">
\t</div>

\t<div class=\"contactContainer\">
\t\t<label class=\"contactFormHeader col-xs-offset-2 col-xs-8\">Email</label>
\t\t<input type=\"text\" name=\"email\" class=\"col-xs-offset-2 col-xs-8\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "first", array(0 => "email"), "method"), "html", null, true);
        echo "\">
\t</div>

\t<div class=\"contactContainer\">
\t\t<label class=\"contactFormHeader col-xs-offset-2 col-xs-8\">Message</label>
\t\t<textarea name=\"message\" class=\"col-xs-offset-2 col-xs-8\" rows=\"5\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "first", array(0 => "message"), "method"), "html", null, true);
        echo "\"></textarea>
\t</div>

\t<div class=\"col-xs-12 text-center contactContainer\">
\t\t<button type=\"submit\" class=\"btn btn-secondary contactButton\">Send</button>
\t</div>

\t<div class=\"col-xs-12\">
\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["errors"] ?? null), "all", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 24
            echo "\t\t\t<!-- <div class=\"contactPageError text-center\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</li> -->
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t</div>
\t

</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/plugins/caydensimler/contact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 26,  56 => 24,  52 => 23,  41 => 15,  33 => 10,  25 => 5,  19 => 1,);
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
\t\t<input type=\"text\" name=\"name\" class=\"col-xs-offset-2 col-xs-8\" placeholder=\"{{ errors.first('name') }}\">
\t</div>

\t<div class=\"contactContainer\">
\t\t<label class=\"contactFormHeader col-xs-offset-2 col-xs-8\">Email</label>
\t\t<input type=\"text\" name=\"email\" class=\"col-xs-offset-2 col-xs-8\" placeholder=\"{{ errors.first('email') }}\">
\t</div>

\t<div class=\"contactContainer\">
\t\t<label class=\"contactFormHeader col-xs-offset-2 col-xs-8\">Message</label>
\t\t<textarea name=\"message\" class=\"col-xs-offset-2 col-xs-8\" rows=\"5\" placeholder=\"{{ errors.first('message') }}\"></textarea>
\t</div>

\t<div class=\"col-xs-12 text-center contactContainer\">
\t\t<button type=\"submit\" class=\"btn btn-secondary contactButton\">Send</button>
\t</div>

\t<div class=\"col-xs-12\">
\t\t{% for error in errors.all() %}
\t\t\t<!-- <div class=\"contactPageError text-center\">{{ error }}</li> -->
\t\t{% endfor %}
\t</div>
\t

</form>", "/var/www/public/plugins/caydensimler/contact/components/contactform/default.htm", "");
    }
}
