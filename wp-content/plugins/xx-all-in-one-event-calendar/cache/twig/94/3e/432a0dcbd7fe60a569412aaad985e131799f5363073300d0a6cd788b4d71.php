<?php

/* event-popup.twig */
class __TwigTemplate_943e432a0dcbd7fe60a569412aaad985e131799f5363073300d0a6cd788b4d71 extends Twig_Template
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
        echo "<div class=\"ai1ec-popover ai1ec-popup ";
        echo twig_escape_filter($this->env, (isset($context["popup_classes"]) ? $context["popup_classes"] : null), "html", null, true);
        echo "
\tai1ec-event-instance-id-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
        echo "\">

\t";
        // line 4
        $context["category_colors"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "category_colors"), "method");
        // line 5
        echo "\t";
        if ((!twig_test_empty((isset($context["category_colors"]) ? $context["category_colors"] : null)))) {
            // line 6
            echo "\t\t<div class=\"ai1ec-color-swatches\">";
            echo (isset($context["category_colors"]) ? $context["category_colors"] : null);
            echo "</div>
\t";
        }
        // line 8
        echo "
\t<span class=\"ai1ec-popup-title\">
\t\t<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
        echo "\"
\t\t   class=\"ai1ec-load-event\"
\t\t\t>";
        // line 12
        echo $this->env->getExtension('ai1ec')->truncate($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title"));
        echo "</a>
\t\t";
        // line 13
        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))))) {
            // line 14
            echo "\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t>";
            // line 15
            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 17
        echo "\t\t";
        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))))) {
            // line 18
            echo "\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\thref=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
            echo "\"
\t\t\t\t>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 23
        echo "\t</span>

\t";
        // line 25
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link")))) {
            // line 26
            echo "\t\t<a class=\"post-edit-link\" href=\"";
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
            echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
            echo "
\t\t</a>
\t";
        }
        // line 30
        echo "
\t<div class=\"ai1ec-event-time\">
\t\t";
        // line 32
        if (twig_test_empty((isset($context["popup_timespan"]) ? $context["popup_timespan"] : null))) {
            // line 33
            echo "\t\t\t";
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "timespan_short");
            echo "
\t\t";
        } else {
            // line 35
            echo "\t\t\t";
            echo (isset($context["popup_timespan"]) ? $context["popup_timespan"] : null);
            echo "
\t\t";
        }
        // line 37
        echo "\t</div>

\t";
        // line 39
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped")))) {
            // line 40
            echo "\t\t<a class=\"ai1ec-load-event\"
\t\t\thref=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
            echo "\">
\t\t\t";
            // line 42
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
            echo "
\t\t</a>
\t";
        }
        // line 45
        echo "
\t";
        // line 46
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")))) {
            // line 47
            echo "\t\t<div class=\"ai1ec-popup-excerpt\">";
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
            echo "</div>
\t";
        }
        // line 49
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 42,  123 => 41,  120 => 40,  118 => 39,  114 => 37,  108 => 35,  102 => 33,  100 => 32,  96 => 30,  90 => 27,  79 => 23,  63 => 17,  55 => 14,  86 => 26,  70 => 20,  58 => 15,  43 => 13,  319 => 95,  317 => 94,  313 => 93,  310 => 92,  307 => 84,  305 => 83,  302 => 82,  295 => 78,  291 => 77,  287 => 75,  285 => 74,  282 => 73,  280 => 72,  277 => 71,  275 => 70,  271 => 69,  269 => 68,  253 => 66,  238 => 65,  236 => 64,  220 => 62,  218 => 59,  213 => 56,  208 => 54,  205 => 53,  203 => 52,  199 => 51,  195 => 49,  189 => 46,  186 => 45,  180 => 42,  177 => 41,  175 => 40,  170 => 38,  163 => 36,  159 => 35,  155 => 34,  152 => 33,  134 => 32,  117 => 31,  111 => 29,  105 => 27,  103 => 26,  95 => 24,  91 => 23,  87 => 22,  83 => 25,  77 => 20,  50 => 14,  45 => 14,  42 => 13,  99 => 25,  89 => 27,  85 => 26,  80 => 25,  74 => 21,  72 => 22,  68 => 20,  64 => 19,  62 => 17,  57 => 17,  53 => 13,  46 => 12,  36 => 10,  28 => 4,  38 => 7,  51 => 15,  21 => 2,  47 => 15,  41 => 11,  37 => 7,  27 => 4,  23 => 3,  66 => 18,  60 => 13,  54 => 15,  48 => 8,  44 => 10,  34 => 6,  29 => 4,  22 => 2,  40 => 8,  35 => 7,  32 => 7,  26 => 5,  24 => 2,  78 => 30,  75 => 21,  69 => 26,  67 => 25,  61 => 22,  56 => 18,  49 => 12,  39 => 12,  33 => 9,  31 => 5,  25 => 3,  19 => 1,);
    }
}
