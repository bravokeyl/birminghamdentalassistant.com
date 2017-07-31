<?php

/* ticketing/manage.twig */
class __TwigTemplate_658b96be42360e2532bf5fb2588ab7a469de466da32a564c67077cc00a797f7e extends Twig_Template
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
        echo "<div class=\"wrap timely ticketing\">
\t<h2>";
        // line 2
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h2>
\t<div id=\"poststuff\">
\t\t<div class=\"ai1ec-tickets-manage\">
\t\t\t<ul class=\"ai1ec-nav ai1ec-nav-tabs\">
\t\t\t\t<li class=\"ai1ec-active\">
\t\t\t\t\t<a href=\"#ai1ec_settings\" data-toggle=\"ai1ec-tab\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["settings_text"]) ? $context["settings_text"] : null), "html", null, true);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#ai1ec_sales\" data-toggle=\"ai1ec-tab\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["sales_text"]) ? $context["sales_text"] : null), "html", null, true);
        echo "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"ai1ec-tab-content ai1ec-form-horizontal\">
\t\t\t\t<div class=\"ai1ec-tab-pane ai1ec-active\" id=\"ai1ec_settings\">
\t\t\t\t\t<form action=\"\" method=\"POST\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"ai1ec_save_settings\" value=\"1\">
\t\t\t\t\t\t<ul class=\"ai1ec-payment-method ai1ec-panel\">
\t\t\t\t\t\t\t<h4>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["currency_text"]) ? $context["currency_text"] : null), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<li class=\"ai1ec-payment-type\">
\t\t\t\t\t\t\t\t<select name=\"ai1ec_currency\" id=\"ai1ec_currency\"
\t\t\t\t\t\t\t\t        class=\"ai1ec-required\">
\t\t\t\t\t\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paypal_currencies"]) ? $context["paypal_currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ite"]) {
            // line 23
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ite"]) ? $context["ite"] : null), "code"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t";
            // line 24
            if (((isset($context["currency"]) ? $context["currency"] : null) && ($this->getAttribute((isset($context["ite"]) ? $context["ite"] : null), "code") == (isset($context["currency"]) ? $context["currency"] : null)))) {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t\t\tselected=\"selected\"
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["ite"]) ? $context["ite"] : null), "note")) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ite"]) ? $context["ite"] : null), "note"), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 29
            echo ">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ite"]) ? $context["ite"] : null), "code"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ite"]) ? $context["ite"] : null), "description"), "html");
            echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<h4>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["select_payment_text"]) ? $context["select_payment_text"] : null), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<li class=\"ai1ec-payment-type\">
\t\t\t\t\t\t\t\t<label for=\"ai1ec_payment_paypal\" class=\"ai1ec-hidden\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"ai1ec_payment_method\"
\t\t\t\t\t\t\t\t\t\tchecked='checked'
\t\t\t\t\t\t\t\t\t\tid=\"ai1ec_payment_paypal\" value=\"paypal\">
\t\t\t\t\t\t\t\t\t";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["paypal_text"]) ? $context["paypal_text"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"ai1ec-payment-details ai1ec-active
\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-ticket-field-error\">
\t\t\t\t\t\t\t\t\t\t";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["required_text"]) ? $context["required_text"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input name=\"ai1ec_paypal_email\" type=\"email\"
\t\t\t\t\t\t\t\t\t\t";
        // line 49
        if ((isset($context["paypal_email"]) ? $context["paypal_email"] : null)) {
            echo " value='";
            echo twig_escape_filter($this->env, (isset($context["paypal_email"]) ? $context["paypal_email"] : null), "html", null, true);
            echo "' ";
        }
        // line 50
        echo "\t\t\t\t\t\t\t\t\t\t   placeholder=\"Valid PayPal Email\" class=\"ai1ec-required\"/>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-ticket-field-error\">
\t\t\t\t\t\t\t\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["required_text"]) ? $context["required_text"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input name=\"ai1ec_first_name\" type=\"text\"
\t\t\t\t\t\t\t\t\t\t";
        // line 55
        if ((isset($context["first_name"]) ? $context["first_name"] : null)) {
            echo " value='";
            echo twig_escape_filter($this->env, (isset($context["first_name"]) ? $context["first_name"] : null), "html", null, true);
            echo "' ";
        }
        // line 56
        echo "\t\t\t\t\t\t\t\t\t\t   placeholder=\"PayPal First Name\" class=\"ai1ec-required\"/>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-ticket-field-error\">
\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["required_text"]) ? $context["required_text"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input name=\"ai1ec_last_name\" type=\"text\"
\t\t\t\t\t\t\t\t\t\t";
        // line 61
        if ((isset($context["last_name"]) ? $context["last_name"] : null)) {
            echo " value='";
            echo twig_escape_filter($this->env, (isset($context["last_name"]) ? $context["last_name"] : null), "html", null, true);
            echo "' ";
        }
        // line 62
        echo "\t\t\t\t\t\t\t\t\t\t   placeholder=\"PayPal Last Name\" class=\"ai1ec-required\"/>
\t\t\t\t\t\t\t\t\t<div>\t  
\t\t\t\t\t\t\t\t\t\t<h6>* Make sure you are using exactly the same First and Last names as found in your <a href=\"https://www.paypal.com/myaccount/settings/\" target=\"_blank\">PayPal account settings</a>.</h6>\t\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"ai1ec-payment-type\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"#\" name=\"ai1ec_tickets_submit\"
\t\t\t\t\t\t\t   class=\"ai1ec-btn ai1ec-btn-primary ai1ec-btn-lg\">
\t\t\t\t\t\t\t\t";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["save_changes_text"]) ? $context["save_changes_text"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<div class=\"ai1ec-tab-pane\" id=\"ai1ec_sales\">
\t\t\t\t\t<table class=\"ai1ec-ticket-sales\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"ai1ec-hidden-sm\">";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["date_text"]) ? $context["date_text"] : null), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["event_text"]) ? $context["event_text"] : null), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th class=\"ai1ec-hidden-sm\">";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["purchaser_text"]) ? $context["purchaser_text"] : null), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["email_text"]) ? $context["email_text"] : null), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["tickets_text"]) ? $context["tickets_text"] : null), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["total_text"]) ? $context["total_text"] : null), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t<th>";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) ? $context["purchases"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            // line 95
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-visible-sm\">
\t\t\t\t\t\t\t\t\t\t";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "event_title"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "created_at"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"ai1ec-hidden-sm\">
\t\t\t\t\t\t\t\t\t";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "event_title"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"ai1ec-hidden-sm\">
\t\t\t\t\t\t\t\t\t";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "purchaser_name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-visible-sm\">
\t\t\t\t\t\t\t\t\t\t";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "purchaser_name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "email"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-visible-sm\">
\t\t\t\t\t\t\t\t\t\t";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "ticket_count"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "ticket_count"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 120
            if ($this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "symbol", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "symbol"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "total"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "currency"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["purchase"]) ? $context["purchase"] : null), "status"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
        // line 130
        echo "</div>";
        // line 131
        echo "
";
    }

    public function getTemplateName()
    {
        return "ticketing/manage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 131,  295 => 130,  288 => 124,  279 => 121,  270 => 120,  265 => 118,  260 => 116,  253 => 112,  248 => 110,  241 => 106,  235 => 103,  229 => 100,  224 => 98,  219 => 95,  215 => 94,  208 => 90,  200 => 88,  196 => 87,  192 => 86,  188 => 85,  184 => 84,  171 => 74,  151 => 61,  125 => 50,  105 => 41,  72 => 28,  65 => 25,  117 => 24,  92 => 33,  69 => 27,  163 => 31,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  76 => 12,  156 => 33,  141 => 56,  134 => 26,  130 => 23,  121 => 24,  106 => 21,  99 => 19,  83 => 14,  80 => 13,  95 => 19,  88 => 32,  77 => 26,  84 => 36,  78 => 29,  74 => 13,  55 => 7,  53 => 18,  68 => 14,  66 => 11,  62 => 12,  59 => 19,  44 => 5,  49 => 13,  26 => 4,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 89,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 29,  145 => 58,  135 => 55,  112 => 47,  98 => 42,  90 => 17,  70 => 25,  61 => 19,  21 => 2,  129 => 52,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 17,  56 => 14,  52 => 14,  48 => 5,  40 => 8,  22 => 2,  127 => 22,  123 => 33,  119 => 49,  114 => 23,  110 => 22,  102 => 20,  96 => 35,  91 => 16,  87 => 16,  79 => 23,  73 => 24,  63 => 24,  57 => 14,  46 => 12,  29 => 4,  19 => 1,  58 => 23,  45 => 4,  37 => 9,  35 => 9,  51 => 6,  43 => 11,  41 => 10,  168 => 36,  162 => 35,  159 => 50,  157 => 62,  153 => 46,  146 => 44,  137 => 29,  133 => 24,  128 => 57,  124 => 21,  120 => 25,  116 => 37,  113 => 46,  109 => 20,  104 => 43,  97 => 17,  89 => 28,  86 => 30,  81 => 30,  71 => 28,  67 => 10,  64 => 24,  60 => 11,  54 => 22,  50 => 13,  47 => 18,  24 => 3,  42 => 3,  38 => 3,  31 => 5,  28 => 5,  39 => 7,  34 => 7,  32 => 7,  27 => 4,  23 => 3,  20 => 1,  36 => 10,  33 => 8,  30 => 7,  25 => 4,);
    }
}
