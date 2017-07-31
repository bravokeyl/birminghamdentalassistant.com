<?php

/* month.twig */
class __TwigTemplate_a54faca929c567a44d5e4e2e7cf06d45c14508bd3d07f5bdfb60a7ddce3ec07a extends Twig_Template
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
        echo (isset($context["navigation"]) ? $context["navigation"] : null);
        echo "

<table class=\"ai1ec-month-view ai1ec-popover-boundary
\t";
        // line 4
        if ((isset($context["has_product_buy_button"]) ? $context["has_product_buy_button"] : null)) {
            echo " ai1ec-has-product-buy-button";
        }
        // line 5
        echo "\t";
        if ((isset($context["month_word_wrap"]) ? $context["month_word_wrap"] : null)) {
            echo "ai1ec-word-wrap";
        }
        echo "\">
\t<thead>
\t\t<tr>
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weekdays"]) ? $context["weekdays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weekday"]) {
            // line 9
            echo "\t\t\t\t<th scope=\"col\" class=\"ai1ec-weekday\">";
            echo twig_escape_filter($this->env, (isset($context["weekday"]) ? $context["weekday"] : null), "html", null, true);
            echo "</th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weekday'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cell_array"]) ? $context["cell_array"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["week"]) {
            // line 15
            echo "\t\t\t";
            $context["added_stretcher"] = false;
            // line 16
            echo "\t\t\t<tr class=\"ai1ec-week\">
\t\t\t\t";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["week"]) ? $context["week"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 18
                echo "
\t\t\t\t\t";
                // line 19
                if ($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "date")) {
                    // line 20
                    echo "\t\t\t\t\t\t<td ";
                    if ($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "today")) {
                        echo "class=\"ai1ec-today\"";
                    }
                    echo ">
\t\t\t\t\t\t\t";
                    // line 22
                    echo "\t\t\t\t\t\t\t";
                    if ((!(isset($context["added_stretcher"]) ? $context["added_stretcher"] : null))) {
                        // line 23
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-day-stretcher\"></div>
\t\t\t\t\t\t\t\t";
                        // line 24
                        $context["added_stretcher"] = true;
                        // line 25
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 26
                    echo "
\t\t\t\t\t\t\t<div class=\"ai1ec-day\">
\t\t\t\t\t\t\t\t<div class=\"ai1ec-date\">
\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-view\"
\t\t\t\t\t\t\t\t\t\t";
                    // line 30
                    echo (isset($context["data_type"]) ? $context["data_type"] : null);
                    echo "
\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day"]) ? $context["day"] : null), "date_link"), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t\t\t>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["day"]) ? $context["day"] : null), "date"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                    // line 35
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["day"]) ? $context["day"] : null), "events"));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t";
                        // line 37
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t\t\tdata-start-day=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "start_day"), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-end-day=\"";
                            // line 39
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "multiday_end_day"), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-start-truncated=\"";
                            // line 40
                            echo (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "start_truncated")) ? ("true") : ("false"));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-end-truncated=\"";
                            // line 41
                            echo (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "end_truncated")) ? ("true") : ("false"));
                            echo "\"
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 43
                        echo "\t\t\t\t\t\t\t\t\t\tdata-instance-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event
\t\t\t\t\t\t\t\t\t\t\tai1ec-popup-trigger
\t\t\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 48
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        // line 49
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
                            echo "ai1ec-multiday";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t>

\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event\"
\t\t\t\t\t\t\t\t\t\t\t style=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "color_style"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 54
                        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url")))) {
                            // line 55
                            echo "\t\t\t\t\t\t\t\t\t\t\t\tdata-ticket-url=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 56
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 58
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 60
                        if ((!$this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday"))) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 62
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "short_start_time"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 65
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-popover ai1ec-popup ai1ec-popup-in-";
                        // line 68
                        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                        echo "-view
\t\t\t\t\t\t\t\t\t            ai1ec-event-id-";
                        // line 69
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t            ai1ec-event-instance-id-";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t            ";
                        // line 71
                        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url")))) {
                            // line 72
                            echo "\t\t\t\t\t\t\t\t\t                ai1ec-has-tickets-button
\t\t\t\t\t\t\t\t\t            ";
                        }
                        // line 73
                        echo ">
\t\t\t\t\t\t\t\t\t            \">
\t\t\t\t\t\t\t\t\t\t";
                        // line 75
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors")) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-color-swatches\">";
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors");
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-popup-title\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                        // line 81
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 82
                        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))) {
                            // line 83
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 84
                            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t";
                        // line 88
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link")) {
                            // line 89
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 90
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 91
                            echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 94
                        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 96
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "popup_timespan");
                        echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 100
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 101
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 103
                        echo (isset($context["action_buttons"]) ? $context["action_buttons"] : null);
                        echo "

\t\t\t\t\t\t\t\t\t\t";
                        // line 105
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")) {
                            // line 106
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-popup-excerpt\">";
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                } else {
                    // line 112
                    echo " ";
                    // line 113
                    echo "\t\t\t\t\t\t<td class=\"ai1ec-empty\"></td>
\t\t\t\t\t";
                }
                // line 114
                echo " ";
                // line 115
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo " ";
            // line 117
            echo "\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo " ";
        // line 119
        echo "\t</tbody>
</table>

<div class=\"ai1ec-pull-left\">";
        // line 122
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "month.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 122,  350 => 119,  348 => 118,  341 => 117,  339 => 116,  332 => 115,  330 => 114,  326 => 113,  324 => 112,  312 => 108,  306 => 106,  304 => 105,  299 => 103,  294 => 101,  290 => 100,  283 => 96,  279 => 94,  273 => 91,  266 => 89,  264 => 88,  255 => 84,  252 => 83,  242 => 80,  232 => 76,  230 => 75,  226 => 73,  222 => 72,  216 => 70,  212 => 69,  194 => 61,  192 => 60,  183 => 56,  137 => 41,  124 => 38,  122 => 37,  113 => 35,  93 => 26,  88 => 24,  52 => 12,  71 => 26,  30 => 5,  169 => 52,  161 => 49,  157 => 48,  149 => 46,  146 => 39,  107 => 32,  98 => 25,  94 => 23,  81 => 21,  210 => 81,  204 => 78,  190 => 70,  184 => 69,  176 => 64,  171 => 53,  165 => 61,  162 => 60,  160 => 59,  153 => 47,  148 => 53,  142 => 43,  115 => 39,  110 => 37,  104 => 36,  73 => 19,  65 => 24,  59 => 21,  784 => 250,  777 => 245,  775 => 244,  758 => 241,  756 => 240,  748 => 238,  742 => 236,  740 => 235,  736 => 234,  731 => 232,  727 => 231,  720 => 227,  716 => 225,  710 => 222,  706 => 221,  703 => 220,  701 => 219,  697 => 217,  692 => 215,  688 => 214,  684 => 212,  681 => 211,  676 => 209,  673 => 208,  671 => 207,  667 => 206,  663 => 205,  659 => 203,  653 => 201,  651 => 200,  648 => 199,  644 => 198,  642 => 197,  638 => 196,  634 => 195,  630 => 194,  623 => 189,  618 => 187,  615 => 186,  613 => 185,  609 => 184,  603 => 181,  599 => 179,  593 => 178,  591 => 177,  587 => 175,  583 => 173,  580 => 172,  576 => 170,  574 => 169,  570 => 167,  563 => 165,  557 => 164,  551 => 163,  545 => 162,  539 => 161,  535 => 160,  530 => 159,  527 => 158,  524 => 157,  521 => 156,  518 => 155,  516 => 154,  512 => 153,  508 => 152,  504 => 151,  500 => 150,  493 => 149,  488 => 148,  484 => 147,  480 => 146,  476 => 145,  471 => 143,  466 => 142,  463 => 141,  459 => 140,  454 => 137,  450 => 135,  441 => 131,  435 => 129,  432 => 128,  426 => 127,  418 => 125,  415 => 124,  411 => 123,  405 => 120,  400 => 118,  394 => 117,  391 => 116,  387 => 115,  384 => 114,  382 => 113,  374 => 111,  357 => 110,  353 => 109,  347 => 105,  345 => 104,  329 => 102,  327 => 101,  311 => 96,  298 => 92,  281 => 83,  274 => 81,  272 => 80,  268 => 78,  263 => 76,  260 => 86,  258 => 74,  254 => 73,  250 => 82,  246 => 81,  240 => 68,  235 => 66,  231 => 65,  229 => 64,  225 => 63,  221 => 62,  217 => 61,  211 => 57,  206 => 79,  201 => 53,  197 => 62,  193 => 50,  187 => 58,  185 => 48,  181 => 47,  173 => 44,  168 => 42,  164 => 41,  154 => 38,  150 => 37,  147 => 36,  141 => 34,  139 => 37,  132 => 34,  129 => 39,  82 => 22,  112 => 29,  101 => 26,  144 => 49,  138 => 47,  136 => 46,  133 => 40,  127 => 42,  123 => 44,  120 => 40,  118 => 32,  114 => 37,  108 => 27,  102 => 33,  100 => 32,  96 => 31,  90 => 25,  79 => 23,  63 => 16,  55 => 14,  86 => 22,  70 => 18,  58 => 14,  43 => 16,  319 => 110,  317 => 94,  313 => 97,  310 => 92,  307 => 95,  305 => 83,  302 => 93,  295 => 78,  291 => 88,  287 => 86,  285 => 74,  282 => 73,  280 => 72,  277 => 82,  275 => 70,  271 => 69,  269 => 90,  253 => 66,  238 => 78,  236 => 64,  220 => 71,  218 => 86,  213 => 56,  208 => 68,  205 => 53,  203 => 65,  199 => 51,  195 => 72,  189 => 46,  186 => 45,  180 => 42,  177 => 55,  175 => 54,  170 => 38,  163 => 36,  159 => 39,  155 => 34,  152 => 33,  134 => 47,  117 => 36,  111 => 30,  105 => 27,  103 => 31,  95 => 30,  91 => 29,  87 => 22,  83 => 25,  77 => 20,  50 => 11,  45 => 10,  42 => 9,  99 => 30,  89 => 27,  85 => 23,  80 => 25,  74 => 19,  72 => 22,  68 => 20,  64 => 19,  62 => 18,  57 => 15,  53 => 19,  46 => 12,  36 => 8,  28 => 5,  38 => 8,  51 => 11,  21 => 2,  47 => 10,  41 => 8,  37 => 8,  27 => 4,  23 => 3,  66 => 17,  60 => 15,  54 => 14,  48 => 8,  44 => 12,  34 => 7,  29 => 5,  22 => 2,  40 => 9,  35 => 6,  32 => 6,  26 => 3,  24 => 3,  78 => 25,  75 => 20,  69 => 15,  67 => 25,  61 => 16,  56 => 14,  49 => 12,  39 => 7,  33 => 6,  31 => 5,  25 => 4,  19 => 1,);
    }
}
