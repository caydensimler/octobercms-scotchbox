<?php

/* /var/www/public/themes/test/pages/homepage.htm */
class __TwigTemplate_176d0375a8a061d7bba825cbb980bdc76ac7bcc9fb05e8fc363c9b2127ee4937 extends Twig_Template
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
        echo "<h2>TEST</h2>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/test/pages/homepage.htm";
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
        return new Twig_Source("<h2>TEST</h2>", "/var/www/public/themes/test/pages/homepage.htm", "");
    }
}
