<?php

/* /var/www/public/themes/demo/pages/login.htm */
class __TwigTemplate_4fa679f3871d5321a9b229ff2f4749a660f9a8b50c300ce04127fdbc0fcaf533 extends Twig_Template
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
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "
    <div class=\"row\">

       \t<div class=\"col-xs-12 invisible\"><h6>invisible text</h3></div>


        <div class=\"col-xs-12 text-center\">
            <h3>Login or signup with Facebook or Google.</h3>
        </div>
        <div class=\"col-xs-12 text-center\">
        \t";
            // line 12
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("socialiteLoginbuttons"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 13
            echo "        </div>
        
        <div class=\"col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6\">
            <h3 class=\"text-center\">Sign in to an existing account</h3>
            ";
            // line 17
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "        </div>

        <div class=\"col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6\">
            <h3 class=\"text-center\">Register a new account</h3>
            ";
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "        </div>

    </div>


";
        } else {
            // line 29
            echo "
    ";
            // line 30
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 31
            echo "
    <h2 class=\"text-center\">
    \tWelcome to your account page, ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", array()), "html", null, true);
            echo ".
    </h2>

\t<hr>

    <h3 class=\"text-center\">You can edit your information below.</h3>


    <div class=\"col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6\">
    \t";
            // line 42
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 43
            echo "    </div>
\t
\t<div class=\"col-xs-12 text-center\">
    \t";
            // line 46
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 47
            echo "\t</div>

";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/demo/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 47,  97 => 46,  92 => 43,  88 => 42,  76 => 33,  72 => 31,  68 => 30,  65 => 29,  57 => 23,  53 => 22,  47 => 18,  43 => 17,  37 => 13,  33 => 12,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not user %}

    <div class=\"row\">

       \t<div class=\"col-xs-12 invisible\"><h6>invisible text</h3></div>


        <div class=\"col-xs-12 text-center\">
            <h3>Login or signup with Facebook or Google.</h3>
        </div>
        <div class=\"col-xs-12 text-center\">
        \t{% component 'socialiteLoginbuttons' %}
        </div>
        
        <div class=\"col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6\">
            <h3 class=\"text-center\">Sign in to an existing account</h3>
            {% partial account ~ '::signin' %}
        </div>

        <div class=\"col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6\">
            <h3 class=\"text-center\">Register a new account</h3>
            {% partial account ~ '::register' %}
        </div>

    </div>


{% else %}

    {% partial account ~ '::activation_check' %}

    <h2 class=\"text-center\">
    \tWelcome to your account page, {{ user.name }}.
    </h2>

\t<hr>

    <h3 class=\"text-center\">You can edit your information below.</h3>


    <div class=\"col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6\">
    \t{% partial account ~ '::update' %}
    </div>
\t
\t<div class=\"col-xs-12 text-center\">
    \t{% partial account ~ '::deactivate_link' %}
\t</div>

{% endif %}", "/var/www/public/themes/demo/pages/login.htm", "");
    }
}
