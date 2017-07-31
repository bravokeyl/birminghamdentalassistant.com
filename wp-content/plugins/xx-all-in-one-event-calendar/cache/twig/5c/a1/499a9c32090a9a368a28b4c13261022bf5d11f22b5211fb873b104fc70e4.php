<?php

/* agenda.twig */
class __TwigTemplate_5ca1499a9c32090a9a368a28b4c13261022bf5d11f22b5211fb873b104fc70e4 extends Twig_Template
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

<div class=\"ai1ec-agenda-view";
        // line 3
        if ((isset($context["has_product_buy_button"]) ? $context["has_product_buy_button"] : null)) {
            echo " ai1ec-has-product-buy-button";
        }
        echo "\">
\t";
        // line 4
        if (twig_test_empty((isset($context["dates"]) ? $context["dates"] : null))) {
            // line 5
            echo "\t\t<p class=\"ai1ec-no-results\">
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["text_upcoming_events"]) ? $context["text_upcoming_events"] : null), "html", null, true);
            echo "
\t\t</p>
\t";
        } else {
            // line 9
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) ? $context["dates"] : null));
            foreach ($context['_seq'] as $context["date"] => $context["date_info"]) {
                // line 10
                echo "\t\t\t<div class=\"ai1ec-date
\t\t\t\t";
                // line 11
                if ((!twig_test_empty($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "today")))) {
                    echo "ai1ec-today";
                }
                echo "\">
\t\t\t\t<a class=\"ai1ec-date-title ai1ec-load-view\"
\t\t\t\t\thref=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "href"), "html_attr");
                echo "\"
\t\t\t\t\t";
                // line 14
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo ">
\t\t\t\t\t<div class=\"ai1ec-month\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "month"), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"ai1ec-day\">";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "day"), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"ai1ec-weekday\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "weekday"), "html", null, true);
                echo "</div>
\t\t\t\t\t";
                // line 18
                if ((isset($context["show_year_in_agenda_dates"]) ? $context["show_year_in_agenda_dates"] : null)) {
                    // line 19
                    echo "\t\t\t\t\t\t<div class=\"ai1ec-year\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "year"), "html", null, true);
                    echo "</div>
\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t</a>
\t\t\t\t<div class=\"ai1ec-date-events\">
\t\t\t\t\t";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["date_info"]) ? $context["date_info"] : null), "events"));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 24
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 25
                        echo "\t\t\t\t\t\t\t<div class=\"ai1ec-event
\t\t\t\t\t\t\t\tai1ec-event-id-";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 28
                        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
                            echo "ai1ec-allday";
                        }
                        // line 29
                        echo "\t\t\t\t\t\t\t\t";
                        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
                            echo "ai1ec-expanded";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t";
                        // line 30
                        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url")))) {
                            // line 31
                            echo "\t\t\t\t\t\t\t\t\tdata-ticket-url=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                            echo "\"
\t\t\t\t\t\t\t\t";
                        }
                        // line 33
                        echo "\t\t\t\t\t\t\t\tdata-end=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "end"), "html", null, true);
                        echo "\">

\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-header\">
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-toggle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-minus-circle ai1ec-fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-plus-circle ai1ec-fa-lg\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 41
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title");
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 42
                        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))))) {
                            // line 43
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 44
                            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 46
                        echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                        // line 47
                        echo (isset($context["action_buttons"]) ? $context["action_buttons"] : null);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 48
                        $context["edit_post_link"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
                        // line 49
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["edit_post_link"]) ? $context["edit_post_link"] : null)))) {
                            // line 50
                            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\" href=\"";
                            echo (isset($context["edit_post_link"]) ? $context["edit_post_link"] : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                            // line 51
                            echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 54
                        echo "
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t ";
                        // line 56
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "timespan_short");
                        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                        // line 61
                        echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-summary ";
                        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
                            echo "ai1ec-expanded";
                        }
                        echo "\">

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-description\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 64
                        if ((twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "content_img_url")) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped"))))) {
                            // line 65
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 66
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 67
                            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 70
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_content");
                        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-summary-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-btn-group ai1ec-actions\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 75
                        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))))) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary
\t\t\t\t\t\t\t\t\t\t\t\t\t\tai1ec-btn-xs ai1ec-buy-tickets\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                            // line 79
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>";
                            // line 80
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-read-more ai1ec-btn ai1ec-btn-default
\t\t\t\t\t\t\t\t\t\t\t\tai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 85
                        echo twig_escape_filter($this->env, (isset($context["text_read_more"]) ? $context["text_read_more"] : null), "html", null, true);
                        echo " <i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        // line 88
                        $context["categories"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "categories_html");
                        // line 89
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["tags"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "tags_html");
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)))) {
                            // line 91
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-categories\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-field-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 94
                            echo twig_escape_filter($this->env, (isset($context["text_categories"]) ? $context["text_categories"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 96
                            echo (isset($context["categories"]) ? $context["categories"] : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
                            // line 100
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-tags\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-field-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-tags\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 103
                            echo twig_escape_filter($this->env, (isset($context["text_tags"]) ? $context["text_tags"] : null), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 105
                            echo (isset($context["tags"]) ? $context["tags"] : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo " ";
                    // line 113
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 114
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['date'], $context['date_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo " ";
            // line 117
            echo "\t";
        }
        echo " ";
        // line 118
        echo "</div>

<div class=\"ai1ec-pull-left\">";
        // line 120
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "agenda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 117,  320 => 116,  303 => 112,  293 => 108,  244 => 85,  227 => 79,  198 => 65,  196 => 64,  156 => 47,  145 => 43,  143 => 42,  121 => 31,  119 => 30,  97 => 25,  92 => 24,  84 => 21,  76 => 18,  355 => 122,  350 => 119,  348 => 118,  341 => 117,  339 => 116,  332 => 115,  330 => 120,  326 => 118,  324 => 112,  312 => 114,  306 => 106,  304 => 105,  299 => 103,  294 => 101,  290 => 100,  283 => 96,  279 => 94,  273 => 91,  266 => 89,  264 => 88,  255 => 90,  252 => 89,  242 => 80,  232 => 76,  230 => 75,  226 => 73,  222 => 76,  216 => 70,  212 => 69,  194 => 61,  192 => 60,  183 => 56,  137 => 41,  124 => 38,  122 => 37,  113 => 35,  93 => 26,  88 => 23,  52 => 12,  71 => 26,  30 => 4,  169 => 52,  161 => 49,  157 => 48,  149 => 46,  146 => 39,  107 => 32,  98 => 25,  94 => 23,  81 => 21,  210 => 81,  204 => 78,  190 => 70,  184 => 69,  176 => 54,  171 => 53,  165 => 50,  162 => 49,  160 => 48,  153 => 46,  148 => 44,  142 => 43,  115 => 39,  110 => 37,  104 => 27,  73 => 19,  65 => 24,  59 => 21,  784 => 250,  777 => 245,  775 => 244,  758 => 241,  756 => 240,  748 => 238,  742 => 236,  740 => 235,  736 => 234,  731 => 232,  727 => 231,  720 => 227,  716 => 225,  710 => 222,  706 => 221,  703 => 220,  701 => 219,  697 => 217,  692 => 215,  688 => 214,  684 => 212,  681 => 211,  676 => 209,  673 => 208,  671 => 207,  667 => 206,  663 => 205,  659 => 203,  653 => 201,  651 => 200,  648 => 199,  644 => 198,  642 => 197,  638 => 196,  634 => 195,  630 => 194,  623 => 189,  618 => 187,  615 => 186,  613 => 185,  609 => 184,  603 => 181,  599 => 179,  593 => 178,  591 => 177,  587 => 175,  583 => 173,  580 => 172,  576 => 170,  574 => 169,  570 => 167,  563 => 165,  557 => 164,  551 => 163,  545 => 162,  539 => 161,  535 => 160,  530 => 159,  527 => 158,  524 => 157,  521 => 156,  518 => 155,  516 => 154,  512 => 153,  508 => 152,  504 => 151,  500 => 150,  493 => 149,  488 => 148,  484 => 147,  480 => 146,  476 => 145,  471 => 143,  466 => 142,  463 => 141,  459 => 140,  454 => 137,  450 => 135,  441 => 131,  435 => 129,  432 => 128,  426 => 127,  418 => 125,  415 => 124,  411 => 123,  405 => 120,  400 => 118,  394 => 117,  391 => 116,  387 => 115,  384 => 114,  382 => 113,  374 => 111,  357 => 110,  353 => 109,  347 => 105,  345 => 104,  329 => 102,  327 => 101,  311 => 96,  298 => 92,  281 => 83,  274 => 99,  272 => 80,  268 => 96,  263 => 94,  260 => 86,  258 => 91,  254 => 73,  250 => 88,  246 => 81,  240 => 84,  235 => 66,  231 => 80,  229 => 64,  225 => 63,  221 => 62,  217 => 61,  211 => 70,  206 => 79,  201 => 66,  197 => 62,  193 => 50,  187 => 61,  185 => 48,  181 => 47,  173 => 44,  168 => 42,  164 => 41,  154 => 38,  150 => 37,  147 => 36,  141 => 34,  139 => 41,  132 => 34,  129 => 39,  82 => 22,  112 => 29,  101 => 26,  144 => 49,  138 => 47,  136 => 46,  133 => 40,  127 => 33,  123 => 44,  120 => 40,  118 => 32,  114 => 37,  108 => 28,  102 => 33,  100 => 26,  96 => 31,  90 => 25,  79 => 23,  63 => 16,  55 => 14,  86 => 22,  70 => 18,  58 => 14,  43 => 16,  319 => 110,  317 => 94,  313 => 97,  310 => 92,  307 => 95,  305 => 113,  302 => 93,  295 => 78,  291 => 88,  287 => 105,  285 => 74,  282 => 103,  280 => 72,  277 => 100,  275 => 70,  271 => 69,  269 => 90,  253 => 66,  238 => 78,  236 => 82,  220 => 75,  218 => 86,  213 => 56,  208 => 68,  205 => 67,  203 => 65,  199 => 51,  195 => 72,  189 => 46,  186 => 45,  180 => 56,  177 => 55,  175 => 54,  170 => 51,  163 => 36,  159 => 39,  155 => 34,  152 => 33,  134 => 47,  117 => 36,  111 => 30,  105 => 27,  103 => 31,  95 => 30,  91 => 29,  87 => 22,  83 => 25,  77 => 20,  50 => 11,  45 => 10,  42 => 9,  99 => 30,  89 => 27,  85 => 23,  80 => 25,  74 => 19,  72 => 17,  68 => 16,  64 => 15,  62 => 18,  57 => 15,  53 => 19,  46 => 10,  36 => 8,  28 => 5,  38 => 8,  51 => 11,  21 => 2,  47 => 10,  41 => 9,  37 => 8,  27 => 4,  23 => 3,  66 => 17,  60 => 14,  54 => 14,  48 => 8,  44 => 12,  34 => 7,  29 => 5,  22 => 2,  40 => 9,  35 => 6,  32 => 5,  26 => 3,  24 => 3,  78 => 19,  75 => 20,  69 => 15,  67 => 25,  61 => 16,  56 => 13,  49 => 11,  39 => 7,  33 => 6,  31 => 5,  25 => 4,  19 => 1,);
    }
}
