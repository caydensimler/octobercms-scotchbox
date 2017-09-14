<?php

/* /var/www/public/themes/test/partials/sidebar.htm */
class __TwigTemplate_fe02a095cdd68f75f973ecfde4cfe05e751a9a9c33892b2212c62bf4887fff46 extends Twig_Template
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
        echo "<div class=\"sidebarContainer col-xs-2\">
\t
\t<div class=\"col-xs-5\">
\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Et dolore beatae explicabo illum alias voluptatem, nulla, est sapiente modi asperiores facilis quibusdam soluta ut inventore culpa error architecto, odit ea.
\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/test/partials/sidebar.htm";
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
        return new Twig_Source("<div class=\"sidebarContainer col-xs-2\">
\t
\t<div class=\"col-xs-5\">
\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Et dolore beatae explicabo illum alias voluptatem, nulla, est sapiente modi asperiores facilis quibusdam soluta ut inventore culpa error architecto, odit ea.
\t</div>

</div>", "/var/www/public/themes/test/partials/sidebar.htm", "");
    }
}
