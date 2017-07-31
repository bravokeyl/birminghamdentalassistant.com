<?php

/* event-map.twig */
class __TwigTemplate_9c3c1820db174d7efba416743bbb9bf744e8454155f8129f69296092b49c45d3 extends Twig_Template
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
        if ((isset($context["hide_maps_until_clicked"]) ? $context["hide_maps_until_clicked"] : null)) {
            // line 2
            echo "\t<div class=\"ai1ec-gmap-placeholder\">
\t\t<strong>
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-map-marker\"></i>
\t\t\t";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["text_view_map"]) ? $context["text_view_map"] : null), "html", null, true);
            echo "
\t\t</strong>
\t</div>
";
        }
        // line 9
        echo "<div class=\"ai1ec-gmap-container ";
        if ((isset($context["hide_maps_until_clicked"]) ? $context["hide_maps_until_clicked"] : null)) {
            echo "ai1ec-gmap-container-hidden";
        }
        echo "\">
\t<div id=\"ai1ec-gmap-canvas\"></div>
\t<input type=\"hidden\" id=\"ai1ec-gmap-address\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : null), "html_attr");
        echo "\" />

\t<a class=\"ai1ec-gmap-link ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs ai1ec-tooltip-trigger\"
\t\thref=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["gmap_url_link"]) ? $context["gmap_url_link"] : null), "html_attr");
        echo "\" target=\"_blank\"
\t\ttitle=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["text_full_map"]) ? $context["text_full_map"] : null), "html", null, true);
        echo "\"
\t\tdata-placement=\"bottom\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-search-plus ai1ec-fa-lg\"></i>
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "event-map.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  21 => 2,  47 => 14,  41 => 11,  37 => 8,  27 => 4,  23 => 3,  66 => 14,  60 => 13,  54 => 11,  48 => 8,  44 => 7,  34 => 7,  29 => 4,  22 => 2,  40 => 6,  35 => 7,  32 => 6,  26 => 5,  24 => 3,  78 => 30,  75 => 28,  69 => 26,  67 => 25,  61 => 22,  56 => 20,  49 => 16,  39 => 10,  33 => 9,  31 => 7,  25 => 4,  19 => 1,);
    }
}
