<?php

/* tickets.twig */
class __TwigTemplate_e4330994e9c50bc0b09959c48de5c85f8b69b6ac28d19de7239d1377ac664873 extends Twig_Template
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
        echo "<div class=\"timely-tickets-row\">
\t<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["tickets_checkout_url"]) ? $context["tickets_checkout_url"] : null), "html", null, true);
        echo "\" method=\"GET\" target=\"_blank\">
\t\t<input type=\"hidden\" name=\"event_id\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["api_event_id"]) ? $context["api_event_id"] : null), "html", null, true);
        echo "\">
\t\t<table class=\"ai1ec-table\">
\t\t<tbody>
\t\t";
        // line 6
        $context["first_ticket"] = true;
        // line 7
        echo "\t\t";
        $context["has_active_tickets"] = false;
        // line 8
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 9
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") != "hidden")) {
                // line 10
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"ai1ec-tickets-amount\">
\t\t\t\t\t\t";
                // line 12
                if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "availability") == null)) {
                    // line 13
                    echo "\t\t\t\t\t\t\t";
                    $context["has_active_tickets"] = true;
                    // line 14
                    echo "\t\t\t\t\t\t\t<select class=\"select2 ai1ec-select2\"
\t\t\t\t\t\t\t\t\tname=\"ticket_type_";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "ticket_type_id"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 16
                    $context["value_to_select"] = 0;
                    // line 17
                    echo "\t\t\t\t\t\t\t";
                    if ((0 < $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "buy_min_limit"))) {
                        // line 18
                        echo "\t\t\t\t\t\t\t\t<option ";
                        if ((0 == (isset($context["value_to_select"]) ? $context["value_to_select"] : null))) {
                            echo "selected";
                        }
                        echo ">0</option>
\t\t\t\t\t\t\t";
                    }
                    // line 19
                    echo "\t
\t\t\t\t\t\t\t";
                    // line 20
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "buy_min_limit"), $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "buy_max_available")));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 21
                        echo "\t\t\t\t\t\t\t\t<option ";
                        if (((isset($context["i"]) ? $context["i"] : null) == (isset($context["value_to_select"]) ? $context["value_to_select"] : null))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t\t\t\t\t<div class=\"ai1ec-tickets-availability\">
\t\t\t\t\t\t\t\t";
                    // line 26
                    echo $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "availability");
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 28
                echo "\t
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"ai1ec-tickets-info ";
                // line 30
                if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "availability") != null)) {
                    echo "ai1ec-tickets-info-inactive";
                }
                echo "\">
\t\t\t\t\t\t<div class=\"ai1ec-tickets-title\">
\t\t\t\t\t\t\t<b>";
                // line 32
                if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "symbol", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "symbol"), "html", null, true);
                } else {
                    echo "\$";
                }
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "ticket_price"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "currency"), "html", null, true);
                echo "</b>&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "ticket_name"), "html", null, true);
                echo "
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"ai1ec-tickets-description\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "description"), "html", null, true);
                echo "</div>
\t\t\t\t\t</td>\t\t\t\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t";
            }
            // line 37
            echo "\t\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t";
        if (((isset($context["has_active_tickets"]) ? $context["has_active_tickets"] : null) == true)) {
            // line 40
            echo "\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"#\" id=\"ai1ec_tickets_submit\"
\t\t\t\t\t   target=\"_blank\" class=\"ai1ec-btn ai1ec-btn-sm ai1ec-btn-primary\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket\"
\t\t\t\t\t       title=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["buy_tickets_text"]) ? $context["buy_tickets_text"] : null), "html_attr");
            echo "\"></i>
\t\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["buy_tickets_text"]) ? $context["buy_tickets_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 52
        echo "\t\t</tbody>
\t\t</table>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "tickets.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 52,  161 => 47,  157 => 46,  149 => 40,  146 => 39,  107 => 28,  98 => 25,  94 => 23,  81 => 21,  210 => 81,  204 => 78,  190 => 70,  184 => 69,  176 => 64,  171 => 62,  165 => 61,  162 => 60,  160 => 59,  153 => 55,  148 => 53,  142 => 52,  115 => 39,  110 => 37,  104 => 36,  73 => 23,  65 => 19,  59 => 17,  784 => 250,  777 => 245,  775 => 244,  758 => 241,  756 => 240,  748 => 238,  742 => 236,  740 => 235,  736 => 234,  731 => 232,  727 => 231,  720 => 227,  716 => 225,  710 => 222,  706 => 221,  703 => 220,  701 => 219,  697 => 217,  692 => 215,  688 => 214,  684 => 212,  681 => 211,  676 => 209,  673 => 208,  671 => 207,  667 => 206,  663 => 205,  659 => 203,  653 => 201,  651 => 200,  648 => 199,  644 => 198,  642 => 197,  638 => 196,  634 => 195,  630 => 194,  623 => 189,  618 => 187,  615 => 186,  613 => 185,  609 => 184,  603 => 181,  599 => 179,  593 => 178,  591 => 177,  587 => 175,  583 => 173,  580 => 172,  576 => 170,  574 => 169,  570 => 167,  563 => 165,  557 => 164,  551 => 163,  545 => 162,  539 => 161,  535 => 160,  530 => 159,  527 => 158,  524 => 157,  521 => 156,  518 => 155,  516 => 154,  512 => 153,  508 => 152,  504 => 151,  500 => 150,  493 => 149,  488 => 148,  484 => 147,  480 => 146,  476 => 145,  471 => 143,  466 => 142,  463 => 141,  459 => 140,  454 => 137,  450 => 135,  441 => 131,  435 => 129,  432 => 128,  426 => 127,  418 => 125,  415 => 124,  411 => 123,  405 => 120,  400 => 118,  394 => 117,  391 => 116,  387 => 115,  384 => 114,  382 => 113,  374 => 111,  357 => 110,  353 => 109,  347 => 105,  345 => 104,  329 => 102,  327 => 101,  311 => 96,  298 => 92,  281 => 83,  274 => 81,  272 => 80,  268 => 78,  263 => 76,  260 => 75,  258 => 74,  254 => 73,  250 => 72,  246 => 70,  240 => 68,  235 => 66,  231 => 65,  229 => 64,  225 => 63,  221 => 62,  217 => 61,  211 => 57,  206 => 79,  201 => 53,  197 => 52,  193 => 50,  187 => 49,  185 => 48,  181 => 47,  173 => 44,  168 => 42,  164 => 41,  154 => 38,  150 => 37,  147 => 36,  141 => 34,  139 => 37,  132 => 34,  129 => 45,  82 => 21,  112 => 29,  101 => 26,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 42,  123 => 44,  120 => 40,  118 => 32,  114 => 37,  108 => 27,  102 => 33,  100 => 32,  96 => 31,  90 => 23,  79 => 23,  63 => 17,  55 => 14,  86 => 22,  70 => 20,  58 => 15,  43 => 13,  319 => 99,  317 => 94,  313 => 97,  310 => 92,  307 => 95,  305 => 83,  302 => 93,  295 => 78,  291 => 88,  287 => 86,  285 => 74,  282 => 73,  280 => 72,  277 => 82,  275 => 70,  271 => 69,  269 => 68,  253 => 66,  238 => 67,  236 => 64,  220 => 62,  218 => 86,  213 => 56,  208 => 54,  205 => 53,  203 => 54,  199 => 51,  195 => 72,  189 => 46,  186 => 45,  180 => 42,  177 => 41,  175 => 40,  170 => 38,  163 => 36,  159 => 39,  155 => 34,  152 => 33,  134 => 47,  117 => 31,  111 => 30,  105 => 27,  103 => 26,  95 => 30,  91 => 29,  87 => 22,  83 => 25,  77 => 20,  50 => 14,  45 => 10,  42 => 9,  99 => 25,  89 => 27,  85 => 28,  80 => 25,  74 => 19,  72 => 22,  68 => 20,  64 => 19,  62 => 18,  57 => 15,  53 => 15,  46 => 12,  36 => 8,  28 => 5,  38 => 7,  51 => 13,  21 => 2,  47 => 15,  41 => 11,  37 => 8,  27 => 5,  23 => 3,  66 => 18,  60 => 10,  54 => 14,  48 => 8,  44 => 12,  34 => 7,  29 => 9,  22 => 2,  40 => 9,  35 => 12,  32 => 6,  26 => 3,  24 => 4,  78 => 25,  75 => 24,  69 => 15,  67 => 25,  61 => 16,  56 => 18,  49 => 12,  39 => 7,  33 => 9,  31 => 5,  25 => 4,  19 => 1,);
    }
}
