<?php

/* /var/www/public/plugins/romaldyminaya/socialite/components/loginbutton/default.htm */
class __TwigTemplate_b47986eee74b6c878e6469f5664b6d7507a56665fd6c5d4de50c7592d172e4c4 extends Twig_Template
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
        echo " <!-- Social login Buttons -->
<loginbuttons>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["providers"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["provider"]) {
            // line 4
            echo "        ";
            if ($this->getAttribute($context["provider"], "is_activated", array())) {
                // line 5
                echo "            <a href=\"";
                echo call_user_func_array($this->env->getFunction('route')->getCallable(), array($context["key"]));
                echo "\" class=\"btn btn-lg btn-social btn-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                <i class=\"fa fa-";
                // line 6
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"></i> &nbsp; ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "
            </a>
        ";
            }
            // line 9
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</loginbuttons>
 <!-- /Social login Buttons -->";
    }

    public function getTemplateName()
    {
        return "/var/www/public/plugins/romaldyminaya/socialite/components/loginbutton/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  45 => 9,  37 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <!-- Social login Buttons -->
<loginbuttons>
    {% for key, provider in providers %}
        {% if provider.is_activated %}
            <a href=\"{{ route(key) }}\" class=\"btn btn-lg btn-social btn-{{ key }}\">
                <i class=\"fa fa-{{ key }}\"></i> &nbsp; {{ key }}
            </a>
        {% endif %}
    {% endfor %}
</loginbuttons>
 <!-- /Social login Buttons -->", "/var/www/public/plugins/romaldyminaya/socialite/components/loginbutton/default.htm", "");
    }
}
