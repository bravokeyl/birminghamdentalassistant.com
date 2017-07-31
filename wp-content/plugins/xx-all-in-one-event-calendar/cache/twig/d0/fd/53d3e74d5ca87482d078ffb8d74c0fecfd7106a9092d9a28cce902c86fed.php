<?php

/* event-single.twig */
class __TwigTemplate_d0fd53d3e74d5ca87482d078ffb8d74c0fecfd7106a9092d9a28cce902c86fed extends Twig_Template
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
        echo "<div class=\"timely ai1ec-single-event
\tai1ec-event-id-";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["post_id"]) ? $context["post_id"] : null), "html", null, true);
        echo "
\tai1ec-event-instance-id-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["instance_id"]) ? $context["instance_id"] : null), "html", null, true);
        echo "
\t";
        // line 4
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
            echo "ai1ec-multiday";
        }
        // line 5
        echo "\t";
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
            echo "ai1ec-allday";
        }
        echo "\">

<a id=\"ai1ec-event\"></a>

<div class=\"ai1ec-actions\">
\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t";
        // line 11
        echo (isset($context["back_to_calendar"]) ? $context["back_to_calendar"] : null);
        echo "
\t</div>

\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t";
        // line 15
        if ((!twig_test_empty((isset($context["ticket_url"]) ? $context["ticket_url"] : null)))) {
            // line 16
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["ticket_url"]) ? $context["ticket_url"] : null), "html_attr");
            echo "\" target=\"_blank\"
\t\t\t\tclass=\"ai1ec-tickets ai1ec-btn ai1ec-btn-sm ai1ec-btn-primary
\t\t\t\t\tai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["tickets_url_label"]) ? $context["tickets_url_label"] : null), "html_attr");
            echo "\"
\t\t\t\t\tdata-placement=\"left\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket ai1ec-fa-fw\"></i>
\t\t\t\t<span class=\"ai1ec-hidden-xs\">
\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["tickets_url_label"]) ? $context["tickets_url_label"] : null), "html", null, true);
            echo "
\t\t\t\t</span>
\t\t\t</a>
\t\t";
        }
        // line 27
        echo "\t\t";
        if ((isset($context["show_subscribe_buttons"]) ? $context["show_subscribe_buttons"] : null)) {
            // line 28
            echo "\t\t\t";
            $this->env->loadTemplate("subscribe-buttons.twig")->display(array_merge($context, array("export_url" => (isset($context["subscribe_url"]) ? $context["subscribe_url"] : null), "export_url_no_html" => (isset($context["subscribe_url_no_html"]) ? $context["subscribe_url_no_html"] : null), "subscribe_label" => (isset($context["text_add_calendar"]) ? $context["text_add_calendar"] : null), "text" => (isset($context["subscribe_buttons_text"]) ? $context["subscribe_buttons_text"] : null))));
            // line 34
            echo "\t\t";
        }
        // line 35
        echo "\t</div>

\t";
        // line 37
        if ((isset($context["extra_buttons"]) ? $context["extra_buttons"] : null)) {
            // line 38
            echo "\t\t";
            echo (isset($context["extra_buttons"]) ? $context["extra_buttons"] : null);
            echo "
\t";
        }
        // line 40
        echo "</div>

";
        // line 42
        if (twig_test_empty((isset($context["map"]) ? $context["map"] : null))) {
            // line 43
            echo "\t";
            $context["col1"] = "ai1ec-col-sm-3";
            // line 44
            echo "\t";
            $context["col2"] = "ai1ec-col-sm-9";
            // line 45
            echo "\t<div class=\"ai1ec-event-details ai1ec-clearfix\">
";
        } else {
            // line 47
            echo "\t";
            $context["col1"] = "ai1ec-col-sm-4 ai1ec-col-md-5";
            // line 48
            echo "\t";
            $context["col2"] = "ai1ec-col-sm-8 ai1ec-col-md-7";
            // line 49
            echo "\t<div class=\"ai1ec-event-details ai1ec-row\">
\t\t<div class=\"ai1ec-map ai1ec-col-sm-5 ai1ec-col-sm-push-7\">
\t\t\t";
            // line 51
            echo (isset($context["map"]) ? $context["map"] : null);
            echo "
\t\t</div>
\t\t<div class=\"ai1ec-col-sm-7 ai1ec-col-sm-pull-5\">
";
        }
        // line 55
        echo "
\t<div class=\"ai1ec-time ai1ec-row\">
\t\t<div class=\"ai1ec-field-label ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["text_when"]) ? $context["text_when"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-field-value ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
        echo " dt-duration\">
\t\t\t";
        // line 59
        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null));
        echo "
\t\t\t";
        // line 60
        if ($this->getAttribute((isset($context["timezone_info"]) ? $context["timezone_info"] : null), "show_timezone")) {
            // line 61
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["timezone_info"]) ? $context["timezone_info"] : null), "using_calendar_tz")) {
                // line 62
                echo "\t\t\t\t\t<span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timezone_info"]) ? $context["timezone_info"] : null), "calendar_timezone"), "html", null, true);
                echo "</span>
\t\t\t\t";
            } else {
                // line 64
                echo "\t\t\t\t\t<span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timezone_info"]) ? $context["timezone_info"] : null), "event_timezone"), "html", null, true);
                echo "</span>
\t\t\t\t";
            }
            // line 66
            echo "\t\t\t";
        }
        // line 67
        echo "\t\t\t";
        $this->env->loadTemplate("recurrence.twig")->display($context);
        // line 68
        echo "\t\t</div>
\t\t<div class=\"ai1ec-hidden dt-start\">";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-hidden dt-end\">";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : null), "html", null, true);
        echo "</div>
\t</div>

\t";
        // line 73
        if ((!twig_test_empty((isset($context["location"]) ? $context["location"] : null)))) {
            // line 74
            echo "\t\t<div class=\"ai1ec-location ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_where"]) ? $context["text_where"] : null), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " p-location\">
\t\t\t\t";
            // line 77
            echo (isset($context["location"]) ? $context["location"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 81
        echo "
\t";
        // line 82
        if ((((!twig_test_empty((isset($context["cost"]) ? $context["cost"] : null))) || $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_free")) && twig_test_empty((isset($context["tickets_block"]) ? $context["tickets_block"] : null)))) {
            // line 83
            echo "\t\t<div class=\"ai1ec-cost ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_cost"]) ? $context["text_cost"] : null), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 86
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_free")) ? ((isset($context["text_free"]) ? $context["text_free"] : null)) : ((isset($context["cost"]) ? $context["cost"] : null))), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 90
        echo "
\t";
        // line 91
        if ((!twig_test_empty((isset($context["tickets_block"]) ? $context["tickets_block"] : null)))) {
            // line 92
            echo "\t\t<div class=\"ai1ec-cost ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["text_tickets"]) ? $context["text_tickets"] : null), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 97
            echo (isset($context["tickets_block"]) ? $context["tickets_block"] : null);
            echo "
\t\t\t</div>
\t\t</div>";
            // line 100
            echo "\t";
        }
        // line 101
        echo "
\t";
        // line 102
        if ((!twig_test_empty((isset($context["contact"]) ? $context["contact"] : null)))) {
            // line 103
            echo "\t\t<div class=\"ai1ec-contact ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text_contact"]) ? $context["text_contact"] : null), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo "\">";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "</div>
\t\t</div>
\t";
        }
        // line 108
        echo "
\t";
        // line 109
        if ((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)))) {
            // line 110
            echo "\t\t<div class=\"ai1ec-categories ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["text_categories"]) ? $context["text_categories"] : null), "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t";
            // line 116
            echo (isset($context["categories"]) ? $context["categories"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 120
        echo "
\t";
        // line 121
        if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
            // line 122
            echo "\t\t<div class=\"ai1ec-tags ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
            echo " ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-tags ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["text_tags"]) ? $context["text_tags"] : null), "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
            echo " ai1ec-col-xs-10\">
\t\t\t\t";
            // line 128
            echo (isset($context["tags"]) ? $context["tags"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 132
        echo "\t
\t";
        // line 133
        if ((!twig_test_empty((isset($context["filter_groups"]) ? $context["filter_groups"] : null)))) {
            // line 134
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
                // line 135
                echo "\t\t\t<div class=\"ai1ec-categories ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-field-label ";
                // line 136
                echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
                echo " ai1ec-col-xs-1\">
\t\t\t\t\t<i class=\"ai1ec-fa ";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "icon_name"), "html", null, true);
                echo " ai1ec-tooltip-trigger\"
\t\t\t\t\t\ttitle=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "text"), "html_attr");
                echo "\"></i>
\t\t\t\t</div>\t\t
\t\t\t\t<div class=\"ai1ec-field-value ";
                // line 140
                echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
                echo " ai1ec-col-xs-10\">
\t\t\t\t\t";
                // line 141
                echo $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "html_value");
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t
\t";
        }
        // line 146
        echo "
\t";
        // line 147
        if ((!twig_test_empty((isset($context["filter_groups"]) ? $context["filter_groups"] : null)))) {
            // line 148
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
                // line 149
                echo "\t\t\t<div class=\"ai1ec-categories ai1ec-row\">
\t\t\t\t<div class=\"ai1ec-field-label ";
                // line 150
                echo twig_escape_filter($this->env, (isset($context["col1"]) ? $context["col1"] : null), "html", null, true);
                echo " ai1ec-col-xs-1\">
\t\t\t\t\t<i class=\"ai1ec-fa ";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "icon_name"), "html", null, true);
                echo " ai1ec-tooltip-trigger\"
\t\t\t\t\t\ttitle=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "text"), "html_attr");
                echo "\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-field-value ";
                // line 154
                echo twig_escape_filter($this->env, (isset($context["col2"]) ? $context["col2"] : null), "html", null, true);
                echo " ai1ec-col-xs-10\">
\t\t\t\t\t";
                // line 155
                echo $this->getAttribute((isset($context["filter_group"]) ? $context["filter_group"] : null), "html_value");
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "\t";
        }
        // line 160
        echo "
";
        // line 161
        if (twig_test_empty((isset($context["map"]) ? $context["map"] : null))) {
            // line 162
            echo "\t</div>";
        } else {
            // line 164
            echo "\t\t</div>";
            // line 165
            echo "\t</div>";
        }
        // line 167
        echo "
";
        // line 168
        if ((!(isset($context["hide_featured_image"]) ? $context["hide_featured_image"] : null))) {
            // line 169
            echo "\t";
            if (twig_test_empty((isset($context["content_img_url"]) ? $context["content_img_url"] : null))) {
                // line 170
                echo "\t\t";
                echo $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "location_avatar", 2 => "category_avatar"), "timely alignleft", false);
                // line 174
                echo "
\t";
            }
        }
        // line 177
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 177,  451 => 174,  448 => 170,  445 => 169,  443 => 168,  440 => 167,  437 => 165,  430 => 161,  427 => 160,  424 => 159,  414 => 155,  410 => 154,  401 => 151,  397 => 150,  389 => 148,  380 => 144,  370 => 141,  366 => 140,  361 => 138,  343 => 133,  340 => 132,  333 => 128,  316 => 122,  314 => 121,  300 => 115,  265 => 103,  257 => 100,  248 => 96,  243 => 94,  239 => 93,  234 => 91,  224 => 86,  214 => 84,  209 => 82,  178 => 70,  174 => 69,  140 => 58,  130 => 55,  116 => 48,  109 => 45,  106 => 44,  322 => 117,  320 => 116,  303 => 112,  293 => 108,  244 => 85,  227 => 79,  198 => 65,  196 => 64,  156 => 47,  145 => 43,  143 => 42,  121 => 31,  119 => 49,  97 => 40,  92 => 24,  84 => 21,  76 => 27,  355 => 122,  350 => 135,  348 => 118,  341 => 117,  339 => 116,  332 => 115,  330 => 120,  326 => 118,  324 => 125,  312 => 114,  306 => 106,  304 => 116,  299 => 103,  294 => 101,  290 => 111,  283 => 96,  279 => 94,  273 => 91,  266 => 89,  264 => 88,  255 => 90,  252 => 97,  242 => 80,  232 => 76,  230 => 75,  226 => 73,  222 => 76,  216 => 70,  212 => 69,  194 => 61,  192 => 60,  183 => 56,  137 => 41,  124 => 38,  122 => 37,  113 => 47,  93 => 26,  88 => 23,  52 => 12,  71 => 26,  30 => 4,  169 => 52,  161 => 49,  157 => 48,  149 => 46,  146 => 39,  107 => 32,  98 => 25,  94 => 23,  81 => 21,  210 => 81,  204 => 78,  190 => 70,  184 => 73,  176 => 54,  171 => 68,  165 => 66,  162 => 49,  160 => 48,  153 => 62,  148 => 60,  142 => 43,  115 => 39,  110 => 37,  104 => 27,  73 => 19,  65 => 20,  59 => 21,  784 => 250,  777 => 245,  775 => 244,  758 => 241,  756 => 240,  748 => 238,  742 => 236,  740 => 235,  736 => 234,  731 => 232,  727 => 231,  720 => 227,  716 => 225,  710 => 222,  706 => 221,  703 => 220,  701 => 219,  697 => 217,  692 => 215,  688 => 214,  684 => 212,  681 => 211,  676 => 209,  673 => 208,  671 => 207,  667 => 206,  663 => 205,  659 => 203,  653 => 201,  651 => 200,  648 => 199,  644 => 198,  642 => 197,  638 => 196,  634 => 195,  630 => 194,  623 => 189,  618 => 187,  615 => 186,  613 => 185,  609 => 184,  603 => 181,  599 => 179,  593 => 178,  591 => 177,  587 => 175,  583 => 173,  580 => 172,  576 => 170,  574 => 169,  570 => 167,  563 => 165,  557 => 164,  551 => 163,  545 => 162,  539 => 161,  535 => 160,  530 => 159,  527 => 158,  524 => 157,  521 => 156,  518 => 155,  516 => 154,  512 => 153,  508 => 152,  504 => 151,  500 => 150,  493 => 149,  488 => 148,  484 => 147,  480 => 146,  476 => 145,  471 => 143,  466 => 142,  463 => 141,  459 => 140,  454 => 137,  450 => 135,  441 => 131,  435 => 164,  432 => 162,  426 => 127,  418 => 125,  415 => 124,  411 => 123,  405 => 152,  400 => 118,  394 => 149,  391 => 116,  387 => 147,  384 => 146,  382 => 113,  374 => 111,  357 => 137,  353 => 136,  347 => 105,  345 => 134,  329 => 127,  327 => 101,  311 => 120,  298 => 92,  281 => 83,  274 => 105,  272 => 80,  268 => 104,  263 => 102,  260 => 101,  258 => 91,  254 => 73,  250 => 88,  246 => 81,  240 => 84,  235 => 66,  231 => 90,  229 => 64,  225 => 63,  221 => 62,  217 => 61,  211 => 83,  206 => 81,  201 => 66,  197 => 62,  193 => 50,  187 => 61,  185 => 48,  181 => 47,  173 => 44,  168 => 67,  164 => 41,  154 => 38,  150 => 61,  147 => 36,  141 => 34,  139 => 41,  132 => 34,  129 => 39,  82 => 34,  112 => 29,  101 => 42,  144 => 59,  138 => 47,  136 => 46,  133 => 40,  127 => 33,  123 => 51,  120 => 40,  118 => 32,  114 => 37,  108 => 28,  102 => 33,  100 => 26,  96 => 31,  90 => 25,  79 => 28,  63 => 16,  55 => 16,  86 => 22,  70 => 18,  58 => 14,  43 => 11,  319 => 123,  317 => 94,  313 => 97,  310 => 92,  307 => 95,  305 => 113,  302 => 93,  295 => 113,  291 => 88,  287 => 110,  285 => 109,  282 => 108,  280 => 72,  277 => 100,  275 => 70,  271 => 69,  269 => 90,  253 => 66,  238 => 78,  236 => 92,  220 => 85,  218 => 86,  213 => 56,  208 => 68,  205 => 67,  203 => 65,  199 => 77,  195 => 76,  189 => 75,  186 => 74,  180 => 56,  177 => 55,  175 => 54,  170 => 51,  163 => 36,  159 => 64,  155 => 34,  152 => 33,  134 => 57,  117 => 36,  111 => 30,  105 => 27,  103 => 43,  95 => 30,  91 => 38,  87 => 22,  83 => 25,  77 => 20,  50 => 11,  45 => 10,  42 => 9,  99 => 30,  89 => 37,  85 => 35,  80 => 25,  74 => 19,  72 => 24,  68 => 16,  64 => 15,  62 => 19,  57 => 17,  53 => 15,  46 => 11,  36 => 8,  28 => 5,  38 => 8,  51 => 11,  21 => 2,  47 => 10,  41 => 9,  37 => 9,  27 => 6,  23 => 3,  66 => 17,  60 => 14,  54 => 14,  48 => 8,  44 => 12,  34 => 5,  29 => 7,  22 => 2,  40 => 9,  35 => 8,  32 => 5,  26 => 3,  24 => 3,  78 => 19,  75 => 20,  69 => 23,  67 => 25,  61 => 19,  56 => 13,  49 => 13,  39 => 7,  33 => 6,  31 => 5,  25 => 4,  19 => 1,);
    }
}
