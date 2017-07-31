<?php

/* filter-menu.twig */
class __TwigTemplate_1f25bacc16e82305cef35f2d4954e3a58cf88f86b74ba3bdfdb3edd107c03a6d extends Twig_Template
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
        if ((!array_key_exists("hide_toolbar", $context))) {
            // line 2
            echo "\t";
            if (array_key_exists("ai1ec_before_filter_menu", $context)) {
                // line 3
                echo "\t\t";
                echo (isset($context["ai1ec_before_filter_menu"]) ? $context["ai1ec_before_filter_menu"] : null);
                echo "
\t";
            }
            // line 5
            echo "\t<div class=\"timely ai1ec-calendar-toolbar ai1ec-clearfix
\t";
            // line 6
            if (((((twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)) && twig_test_empty((isset($context["tags"]) ? $context["tags"] : null))) && (!array_key_exists("additional_filters", $context))) && twig_test_empty((isset($context["contribution_buttons"]) ? $context["contribution_buttons"] : null))) && (!array_key_exists("additional_buttons", $context)))) {
                // line 12
                echo "\t\tai1ec-hidden
\t";
            }
            // line 14
            echo "\t\">
\t\t<ul class=\"ai1ec-nav ai1ec-nav-pills ai1ec-pull-left ai1ec-filters\">
\t\t\t";
            // line 16
            echo (isset($context["categories"]) ? $context["categories"] : null);
            echo "
\t\t\t";
            // line 17
            echo (isset($context["tags"]) ? $context["tags"] : null);
            echo "
\t\t\t";
            // line 18
            if (array_key_exists("additional_filters", $context)) {
                // line 19
                echo "\t\t\t\t";
                echo (isset($context["additional_filters"]) ? $context["additional_filters"] : null);
                echo "
\t\t\t";
            }
            // line 21
            echo "\t\t</ul>
\t\t<div class=\"ai1ec-pull-right\">
\t\t";
            // line 23
            if (array_key_exists("additional_buttons", $context)) {
                // line 24
                echo "\t\t\t";
                echo (isset($context["additional_buttons"]) ? $context["additional_buttons"] : null);
                echo "
\t\t";
            }
            // line 26
            echo "\t\t</div>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "filter-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  30 => 5,  169 => 52,  161 => 47,  157 => 46,  149 => 40,  146 => 39,  107 => 28,  98 => 25,  94 => 23,  81 => 21,  210 => 81,  204 => 78,  190 => 70,  184 => 69,  176 => 64,  171 => 62,  165 => 61,  162 => 60,  160 => 59,  153 => 55,  148 => 53,  142 => 52,  115 => 39,  110 => 37,  104 => 36,  73 => 23,  65 => 24,  59 => 21,  784 => 250,  777 => 245,  775 => 244,  758 => 241,  756 => 240,  748 => 238,  742 => 236,  740 => 235,  736 => 234,  731 => 232,  727 => 231,  720 => 227,  716 => 225,  710 => 222,  706 => 221,  703 => 220,  701 => 219,  697 => 217,  692 => 215,  688 => 214,  684 => 212,  681 => 211,  676 => 209,  673 => 208,  671 => 207,  667 => 206,  663 => 205,  659 => 203,  653 => 201,  651 => 200,  648 => 199,  644 => 198,  642 => 197,  638 => 196,  634 => 195,  630 => 194,  623 => 189,  618 => 187,  615 => 186,  613 => 185,  609 => 184,  603 => 181,  599 => 179,  593 => 178,  591 => 177,  587 => 175,  583 => 173,  580 => 172,  576 => 170,  574 => 169,  570 => 167,  563 => 165,  557 => 164,  551 => 163,  545 => 162,  539 => 161,  535 => 160,  530 => 159,  527 => 158,  524 => 157,  521 => 156,  518 => 155,  516 => 154,  512 => 153,  508 => 152,  504 => 151,  500 => 150,  493 => 149,  488 => 148,  484 => 147,  480 => 146,  476 => 145,  471 => 143,  466 => 142,  463 => 141,  459 => 140,  454 => 137,  450 => 135,  441 => 131,  435 => 129,  432 => 128,  426 => 127,  418 => 125,  415 => 124,  411 => 123,  405 => 120,  400 => 118,  394 => 117,  391 => 116,  387 => 115,  384 => 114,  382 => 113,  374 => 111,  357 => 110,  353 => 109,  347 => 105,  345 => 104,  329 => 102,  327 => 101,  311 => 96,  298 => 92,  281 => 83,  274 => 81,  272 => 80,  268 => 78,  263 => 76,  260 => 75,  258 => 74,  254 => 73,  250 => 72,  246 => 70,  240 => 68,  235 => 66,  231 => 65,  229 => 64,  225 => 63,  221 => 62,  217 => 61,  211 => 57,  206 => 79,  201 => 53,  197 => 52,  193 => 50,  187 => 49,  185 => 48,  181 => 47,  173 => 44,  168 => 42,  164 => 41,  154 => 38,  150 => 37,  147 => 36,  141 => 34,  139 => 37,  132 => 34,  129 => 45,  82 => 21,  112 => 29,  101 => 26,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 42,  123 => 44,  120 => 40,  118 => 32,  114 => 37,  108 => 27,  102 => 33,  100 => 32,  96 => 31,  90 => 23,  79 => 23,  63 => 23,  55 => 14,  86 => 22,  70 => 20,  58 => 15,  43 => 16,  319 => 99,  317 => 94,  313 => 97,  310 => 92,  307 => 95,  305 => 83,  302 => 93,  295 => 78,  291 => 88,  287 => 86,  285 => 74,  282 => 73,  280 => 72,  277 => 82,  275 => 70,  271 => 69,  269 => 68,  253 => 66,  238 => 67,  236 => 64,  220 => 62,  218 => 86,  213 => 56,  208 => 54,  205 => 53,  203 => 54,  199 => 51,  195 => 72,  189 => 46,  186 => 45,  180 => 42,  177 => 41,  175 => 40,  170 => 38,  163 => 36,  159 => 39,  155 => 34,  152 => 33,  134 => 47,  117 => 31,  111 => 30,  105 => 27,  103 => 26,  95 => 30,  91 => 29,  87 => 22,  83 => 25,  77 => 20,  50 => 14,  45 => 10,  42 => 9,  99 => 25,  89 => 27,  85 => 28,  80 => 25,  74 => 19,  72 => 22,  68 => 20,  64 => 19,  62 => 18,  57 => 15,  53 => 19,  46 => 12,  36 => 8,  28 => 5,  38 => 7,  51 => 18,  21 => 2,  47 => 17,  41 => 11,  37 => 8,  27 => 5,  23 => 3,  66 => 18,  60 => 10,  54 => 14,  48 => 8,  44 => 12,  34 => 7,  29 => 9,  22 => 2,  40 => 9,  35 => 12,  32 => 6,  26 => 3,  24 => 3,  78 => 25,  75 => 24,  69 => 15,  67 => 25,  61 => 16,  56 => 18,  49 => 12,  39 => 14,  33 => 6,  31 => 5,  25 => 4,  19 => 1,);
    }
}
