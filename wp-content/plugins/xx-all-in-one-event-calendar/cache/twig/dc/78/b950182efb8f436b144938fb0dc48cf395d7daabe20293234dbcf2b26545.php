<?php

/* recurrence.twig */
class __TwigTemplate_dc78b950182efb8f436b144938fb0dc48cf395d7daabe20293234dbcf2b26545 extends Twig_Template
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
        if ((!twig_test_empty((isset($context["recurrence"]) ? $context["recurrence"] : null)))) {
            // line 2
            echo "\t<div class=\"ai1ec-recurrence ai1ec-btn-group\">
\t\t<button class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs
\t\t\tai1ec-tooltip-trigger ai1ec-disabled ai1ec-text-muted\"
\t\t\tdata-html=\"true\"
\t\t\ttitle=\"";
            // line 6
            ob_start();
            // line 7
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, strtr((isset($context["recurrence"]) ? $context["recurrence"] : null), array("; " => "
")), "html_attr");
            echo "
\t\t\t\t";
            // line 8
            if ((!twig_test_empty((isset($context["exclude"]) ? $context["exclude"] : null)))) {
                // line 9
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, ((("<div class=\"ai1ec-recurrence-exclude\">" . Ai1ec_I18n::__("Excludes: ")) . (isset($context["exclude"]) ? $context["exclude"] : null)) . "</div>"), "html_attr");
                echo "
\t\t\t\t";
            }
            // line 11
            echo "\t\t\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-repeat\"></i>
\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Repeats"), "html", null, true);
            echo "
\t\t</button>

\t\t";
            // line 16
            if ((!twig_test_empty((isset($context["edit_instance_url"]) ? $context["edit_instance_url"] : null)))) {
                // line 17
                echo "\t\t\t<a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs ai1ec-tooltip-trigger
\t\t\t\tai1ec-text-muted\"
\t\t\t\ttitle=\"";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["edit_instance_text"]) ? $context["edit_instance_text"] : null), "html_attr");
                echo "\"
\t\t\t\thref=\"";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["edit_instance_url"]) ? $context["edit_instance_url"] : null), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i>
\t\t\t</a>
\t\t";
            }
            // line 24
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "recurrence.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 117,  320 => 116,  303 => 112,  293 => 108,  244 => 85,  227 => 79,  198 => 65,  196 => 64,  156 => 47,  145 => 43,  143 => 42,  121 => 31,  119 => 30,  97 => 25,  92 => 24,  84 => 21,  76 => 18,  355 => 122,  350 => 119,  348 => 118,  341 => 117,  339 => 116,  332 => 115,  330 => 120,  326 => 118,  324 => 112,  312 => 114,  306 => 106,  304 => 105,  299 => 103,  294 => 101,  290 => 100,  283 => 96,  279 => 94,  273 => 91,  266 => 89,  264 => 88,  255 => 90,  252 => 89,  242 => 80,  232 => 76,  230 => 75,  226 => 73,  222 => 76,  216 => 70,  212 => 69,  194 => 61,  192 => 60,  183 => 56,  137 => 41,  124 => 38,  122 => 37,  113 => 35,  93 => 26,  88 => 23,  52 => 12,  71 => 26,  30 => 4,  169 => 52,  161 => 49,  157 => 48,  149 => 46,  146 => 39,  107 => 32,  98 => 25,  94 => 23,  81 => 21,  210 => 81,  204 => 78,  190 => 70,  184 => 69,  176 => 54,  171 => 53,  165 => 50,  162 => 49,  160 => 48,  153 => 46,  148 => 44,  142 => 43,  115 => 39,  110 => 37,  104 => 27,  73 => 19,  65 => 20,  59 => 21,  784 => 250,  777 => 245,  775 => 244,  758 => 241,  756 => 240,  748 => 238,  742 => 236,  740 => 235,  736 => 234,  731 => 232,  727 => 231,  720 => 227,  716 => 225,  710 => 222,  706 => 221,  703 => 220,  701 => 219,  697 => 217,  692 => 215,  688 => 214,  684 => 212,  681 => 211,  676 => 209,  673 => 208,  671 => 207,  667 => 206,  663 => 205,  659 => 203,  653 => 201,  651 => 200,  648 => 199,  644 => 198,  642 => 197,  638 => 196,  634 => 195,  630 => 194,  623 => 189,  618 => 187,  615 => 186,  613 => 185,  609 => 184,  603 => 181,  599 => 179,  593 => 178,  591 => 177,  587 => 175,  583 => 173,  580 => 172,  576 => 170,  574 => 169,  570 => 167,  563 => 165,  557 => 164,  551 => 163,  545 => 162,  539 => 161,  535 => 160,  530 => 159,  527 => 158,  524 => 157,  521 => 156,  518 => 155,  516 => 154,  512 => 153,  508 => 152,  504 => 151,  500 => 150,  493 => 149,  488 => 148,  484 => 147,  480 => 146,  476 => 145,  471 => 143,  466 => 142,  463 => 141,  459 => 140,  454 => 137,  450 => 135,  441 => 131,  435 => 129,  432 => 128,  426 => 127,  418 => 125,  415 => 124,  411 => 123,  405 => 120,  400 => 118,  394 => 117,  391 => 116,  387 => 115,  384 => 114,  382 => 113,  374 => 111,  357 => 110,  353 => 109,  347 => 105,  345 => 104,  329 => 102,  327 => 101,  311 => 96,  298 => 92,  281 => 83,  274 => 99,  272 => 80,  268 => 96,  263 => 94,  260 => 86,  258 => 91,  254 => 73,  250 => 88,  246 => 81,  240 => 84,  235 => 66,  231 => 80,  229 => 64,  225 => 63,  221 => 62,  217 => 61,  211 => 70,  206 => 79,  201 => 66,  197 => 62,  193 => 50,  187 => 61,  185 => 48,  181 => 47,  173 => 44,  168 => 42,  164 => 41,  154 => 38,  150 => 37,  147 => 36,  141 => 34,  139 => 41,  132 => 34,  129 => 39,  82 => 22,  112 => 29,  101 => 26,  144 => 49,  138 => 47,  136 => 46,  133 => 40,  127 => 33,  123 => 44,  120 => 40,  118 => 32,  114 => 37,  108 => 28,  102 => 33,  100 => 26,  96 => 31,  90 => 25,  79 => 23,  63 => 16,  55 => 16,  86 => 22,  70 => 18,  58 => 14,  43 => 11,  319 => 110,  317 => 94,  313 => 97,  310 => 92,  307 => 95,  305 => 113,  302 => 93,  295 => 78,  291 => 88,  287 => 105,  285 => 74,  282 => 103,  280 => 72,  277 => 100,  275 => 70,  271 => 69,  269 => 90,  253 => 66,  238 => 78,  236 => 82,  220 => 75,  218 => 86,  213 => 56,  208 => 68,  205 => 67,  203 => 65,  199 => 51,  195 => 72,  189 => 46,  186 => 45,  180 => 56,  177 => 55,  175 => 54,  170 => 51,  163 => 36,  159 => 39,  155 => 34,  152 => 33,  134 => 47,  117 => 36,  111 => 30,  105 => 27,  103 => 31,  95 => 30,  91 => 29,  87 => 22,  83 => 25,  77 => 20,  50 => 11,  45 => 10,  42 => 9,  99 => 30,  89 => 27,  85 => 23,  80 => 25,  74 => 19,  72 => 24,  68 => 16,  64 => 15,  62 => 18,  57 => 17,  53 => 19,  46 => 10,  36 => 8,  28 => 5,  38 => 8,  51 => 11,  21 => 2,  47 => 10,  41 => 9,  37 => 9,  27 => 6,  23 => 3,  66 => 17,  60 => 14,  54 => 14,  48 => 8,  44 => 12,  34 => 7,  29 => 7,  22 => 2,  40 => 9,  35 => 8,  32 => 5,  26 => 3,  24 => 3,  78 => 19,  75 => 20,  69 => 15,  67 => 25,  61 => 19,  56 => 13,  49 => 13,  39 => 7,  33 => 6,  31 => 5,  25 => 4,  19 => 1,);
    }
}