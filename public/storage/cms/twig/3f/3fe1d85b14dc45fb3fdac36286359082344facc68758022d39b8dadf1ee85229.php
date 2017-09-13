<?php

/* /var/www/public/themes/test/pages/home.htm */
class __TwigTemplate_9eac9ef11d3b029f2cf6d5049320b8efbe54a9b7b3d6b1d43f798d7740fb9c6e extends Twig_Template
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
        echo "<h2 class=\"testOne\">Lorem ipsum dolor.</h2>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/test/pages/home.htm";
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
        return new Twig_Source("<h2 class=\"testOne\">Lorem ipsum dolor.</h2>", "/var/www/public/themes/test/pages/home.htm", "");
    }
}
