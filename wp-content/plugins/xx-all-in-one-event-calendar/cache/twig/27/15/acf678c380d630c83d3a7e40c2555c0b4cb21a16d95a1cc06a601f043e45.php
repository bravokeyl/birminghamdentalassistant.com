<?php

/* subscribe-buttons.twig */
class __TwigTemplate_2715acf678c380d630c83d3a7e40c2555c0b4cb21a16d95a1cc06a601f043e45 extends Twig_Template
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
        $context["alignment"] = (((isset($context["alignment"]) ? $context["alignment"] : null)) ? ((isset($context["alignment"]) ? $context["alignment"] : null)) : ("left"));
        // line 2
        $context["placement"] = (((isset($context["placement"]) ? $context["placement"] : null)) ? ((isset($context["placement"]) ? $context["placement"] : null)) : ("down"));
        // line 3
        $context["alignment2"] = ((("left" == (isset($context["alignment"]) ? $context["alignment"] : null))) ? ("right") : ("left"));
        // line 4
        $context["button_classes"] = (((isset($context["button_classes"]) ? $context["button_classes"] : null)) ? ((isset($context["button_classes"]) ? $context["button_classes"] : null)) : ("ai1ec-btn-sm"));
        // line 5
        echo "<div class=\"ai1ec-subscribe-dropdown ai1ec-dropdown";
        if (((isset($context["placement"]) ? $context["placement"] : null) == "up")) {
            echo " ai1ec-dropup";
        }
        echo " ai1ec-btn
\tai1ec-btn-default ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["button_classes"]) ? $context["button_classes"] : null), "html_attr");
        echo "\">
\t<span role=\"button\" class=\"ai1ec-dropdown-toggle ai1ec-subscribe\"
\t\t\tdata-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"ai1ec-fa ai1ec-icon-rss ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t<span class=\"ai1ec-hidden-xs\">
\t\t\t";
        // line 11
        if ((!twig_test_empty((isset($context["subscribe_label"]) ? $context["subscribe_label"] : null)))) {
            // line 12
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["subscribe_label"]) ? $context["subscribe_label"] : null), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t";
            if ((isset($context["is_filtered"]) ? $context["is_filtered"] : null)) {
                // line 15
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["text_filtered"]) ? $context["text_filtered"] : null), "html", null, true);
                echo "
\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["text_subscribe"]) ? $context["text_subscribe"] : null), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t";
        }
        // line 20
        echo "\t\t\t<span class=\"ai1ec-caret\"></span>
\t\t</span>
\t</span>
\t";
        // line 23
        $context["url"] = (strtr((isset($context["export_url"]) ? $context["export_url"] : null), array("webcal://" => "http://")) . (isset($context["url_args"]) ? $context["url_args"] : null));
        // line 24
        echo "\t";
        $context["url_no_html"] = ((strtr((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null), array("webcal://" => "http://")) . (isset($context["url_args"]) ? $context["url_args"] : null)) . "&&");
        // line 25
        echo "\t<ul class=\"ai1ec-dropdown-menu ai1ec-pull-";
        echo twig_escape_filter($this->env, (isset($context["alignment2"]) ? $context["alignment2"] : null), "html", null, true);
        echo "\" role=\"menu\">
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t\tdata-placement=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "timely"), "html", null, true);
        echo "\"
\t\t\t\thref=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-lg ai1ec-fa-fw ai1ec-icon-timely\"></i>
\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "timely"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "google"), "html", null, true);
        echo "\"
\t\t\t  href=\"https://www.google.com/calendar/render?cid=";
        // line 37
        echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["url_no_html"]) ? $context["url_no_html"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-google ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "google"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "outlook"), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 45
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-windows ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "outlook"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "apple"), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 53
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-apple ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "apple"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t";
        // line 59
        $context["export_url_no_html_http"] = strtr((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null), array("webcal://" => "http://"));
        // line 60
        echo "\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t  data-placement=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "plaintext"), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 62
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html_http"]) ? $context["export_url_no_html_http"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-calendar ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "plaintext"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t  data-placement=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title"), "xml"), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html_attr");
        echo "&xml=true\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-file-text ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label"), "xml"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>
</div>

";
        // line 78
        if ((isset($context["show_get_calendar"]) ? $context["show_get_calendar"] : null)) {
            // line 79
            echo "\t<a href=\"https://time.ly\" target=\"_blank\"
\t\tclass=\"ai1ec-btn ai1ec-btn-default ai1ec-get-calendar
\t\t\t";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["button_classes"]) ? $context["button_classes"] : null), "html_attr");
            echo "\">
\t\t<small class=\"ai1ec-fa-stack ai1ec-text-info ai1ec-fa-fw\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-square ai1ec-fa-stack-2x\"></i>
\t\t\t<i class=\"ai1ec-fa ai1ec-icon-timely ai1ec-fa-stack-1x ai1ec-fa-inverse ai1ec-fa-lg\"></i>
\t\t</small>
\t\t<span class=\"ai1ec-hidden-xs\">";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["text_get_calendar"]) ? $context["text_get_calendar"] : null), "html", null, true);
            echo "</span>
\t</a>
";
        }
    }

    public function getTemplateName()
    {
        return "subscribe-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 81,  204 => 78,  190 => 70,  184 => 69,  176 => 64,  171 => 62,  165 => 61,  162 => 60,  160 => 59,  153 => 55,  148 => 53,  142 => 52,  115 => 39,  110 => 37,  104 => 36,  73 => 23,  65 => 19,  59 => 17,  784 => 250,  777 => 245,  775 => 244,  758 => 241,  756 => 240,  748 => 238,  742 => 236,  740 => 235,  736 => 234,  731 => 232,  727 => 231,  720 => 227,  716 => 225,  710 => 222,  706 => 221,  703 => 220,  701 => 219,  697 => 217,  692 => 215,  688 => 214,  684 => 212,  681 => 211,  676 => 209,  673 => 208,  671 => 207,  667 => 206,  663 => 205,  659 => 203,  653 => 201,  651 => 200,  648 => 199,  644 => 198,  642 => 197,  638 => 196,  634 => 195,  630 => 194,  623 => 189,  618 => 187,  615 => 186,  613 => 185,  609 => 184,  603 => 181,  599 => 179,  593 => 178,  591 => 177,  587 => 175,  583 => 173,  580 => 172,  576 => 170,  574 => 169,  570 => 167,  563 => 165,  557 => 164,  551 => 163,  545 => 162,  539 => 161,  535 => 160,  530 => 159,  527 => 158,  524 => 157,  521 => 156,  518 => 155,  516 => 154,  512 => 153,  508 => 152,  504 => 151,  500 => 150,  493 => 149,  488 => 148,  484 => 147,  480 => 146,  476 => 145,  471 => 143,  466 => 142,  463 => 141,  459 => 140,  454 => 137,  450 => 135,  441 => 131,  435 => 129,  432 => 128,  426 => 127,  418 => 125,  415 => 124,  411 => 123,  405 => 120,  400 => 118,  394 => 117,  391 => 116,  387 => 115,  384 => 114,  382 => 113,  374 => 111,  357 => 110,  353 => 109,  347 => 105,  345 => 104,  329 => 102,  327 => 101,  311 => 96,  298 => 92,  281 => 83,  274 => 81,  272 => 80,  268 => 78,  263 => 76,  260 => 75,  258 => 74,  254 => 73,  250 => 72,  246 => 70,  240 => 68,  235 => 66,  231 => 65,  229 => 64,  225 => 63,  221 => 62,  217 => 61,  211 => 57,  206 => 79,  201 => 53,  197 => 52,  193 => 50,  187 => 49,  185 => 48,  181 => 47,  173 => 44,  168 => 42,  164 => 41,  154 => 38,  150 => 37,  147 => 36,  141 => 34,  139 => 33,  132 => 31,  129 => 45,  82 => 21,  112 => 29,  101 => 32,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 42,  123 => 44,  120 => 40,  118 => 39,  114 => 37,  108 => 27,  102 => 33,  100 => 32,  96 => 31,  90 => 23,  79 => 23,  63 => 11,  55 => 14,  86 => 22,  70 => 20,  58 => 15,  43 => 13,  319 => 99,  317 => 94,  313 => 97,  310 => 92,  307 => 95,  305 => 83,  302 => 93,  295 => 78,  291 => 88,  287 => 86,  285 => 74,  282 => 73,  280 => 72,  277 => 82,  275 => 70,  271 => 69,  269 => 68,  253 => 66,  238 => 67,  236 => 64,  220 => 62,  218 => 86,  213 => 56,  208 => 54,  205 => 53,  203 => 54,  199 => 51,  195 => 72,  189 => 46,  186 => 45,  180 => 42,  177 => 41,  175 => 40,  170 => 38,  163 => 36,  159 => 39,  155 => 34,  152 => 33,  134 => 47,  117 => 31,  111 => 29,  105 => 27,  103 => 26,  95 => 30,  91 => 29,  87 => 22,  83 => 25,  77 => 20,  50 => 14,  45 => 14,  42 => 11,  99 => 25,  89 => 27,  85 => 28,  80 => 25,  74 => 23,  72 => 22,  68 => 20,  64 => 19,  62 => 18,  57 => 17,  53 => 15,  46 => 12,  36 => 8,  28 => 5,  38 => 7,  51 => 7,  21 => 2,  47 => 15,  41 => 11,  37 => 7,  27 => 5,  23 => 3,  66 => 18,  60 => 10,  54 => 12,  48 => 8,  44 => 12,  34 => 6,  29 => 9,  22 => 2,  40 => 9,  35 => 12,  32 => 7,  26 => 5,  24 => 4,  78 => 25,  75 => 24,  69 => 15,  67 => 25,  61 => 22,  56 => 18,  49 => 12,  39 => 7,  33 => 9,  31 => 5,  25 => 4,  19 => 1,);
    }
}
