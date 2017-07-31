<?php

/* event-single-footer.twig */
class __TwigTemplate_aa616d3f918f480e4f6f0dabdeee1324d87d759ec18352a21a1cfcee8802f528 extends Twig_Template
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
        echo "<footer class=\"timely ai1ec-event-footer\">
\t";
        // line 2
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ical_feed_url"), "method")))) {
            // line 3
            echo "\t\t";
            echo (isset($context["text_calendar_feed"]) ? $context["text_calendar_feed"] : null);
            echo "
\t\t";
            // line 4
            if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ical_source_url"), "method")))) {
                // line 5
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ical_source_url"), "method"), "html_attr");
                echo "\"
\t\t\t\tclass=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs\" target=\"_blank\">
\t\t\t\t";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["text_view_post"]) ? $context["text_view_post"] : null), "html", null, true);
                echo "
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-external-link\"></i>
\t\t\t</a>
\t\t";
            }
            // line 11
            echo "\t";
        }
        // line 12
        echo "</footer>
";
    }

    public function getTemplateName()
    {
        return "event-single-footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  21 => 2,  47 => 12,  41 => 11,  37 => 7,  27 => 4,  23 => 3,  66 => 14,  60 => 13,  54 => 11,  48 => 8,  44 => 11,  34 => 7,  29 => 4,  22 => 2,  40 => 6,  35 => 7,  32 => 6,  26 => 5,  24 => 3,  78 => 30,  75 => 28,  69 => 26,  67 => 25,  61 => 22,  56 => 20,  49 => 16,  39 => 10,  33 => 9,  31 => 5,  25 => 4,  19 => 1,);
    }
}
