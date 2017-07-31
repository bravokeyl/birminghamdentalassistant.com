<?php

/* widget-creator/super-widget-contents.twig */
class __TwigTemplate_4b73ad41c82ac11e1da2a2b82814007e2577ceed36443b62877d9d35f45941e0 extends Twig_Template
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
        echo "<p>";
        echo (isset($context["text_common_info"]) ? $context["text_common_info"] : null);
        echo "</p>
";
        // line 2
        if ((isset($context["display_alert"]) ? $context["display_alert"] : null)) {
            // line 3
            echo "\t<div class=\"ai1ec-alert ai1ec-alert-warning\">
\t\t";
            // line 4
            echo (isset($context["text_alert"]) ? $context["text_alert"] : null);
            echo "
\t\t";
            // line 5
            echo (isset($context["text_alternatives"]) ? $context["text_alternatives"] : null);
            echo "
\t</div>
";
        }
        // line 8
        echo "<div class=\"ai1ec-col-md-12\">
\t<ul class=\"ai1ec-nav ai1ec-nav-pills\" role=\"tablist\">
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            // line 11
            echo "\t\t\t<li>
\t\t\t\t<a href=\"#";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html_attr");
            echo "\" data-toggle=\"ai1ec-tab\" >
\t\t\t\t\t<i class=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "icon"), "html", null, true);
            echo " ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t\t";
            // line 14
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name");
            echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t</ul>
</div>
<div class=\"ai1ec-col-md-6\">
\t<div class=\"ai1ec-tab-content\">
\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            // line 23
            echo "\t\t\t<div class=\"ai1ec-tab-pane\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 24
            if ((!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "requirements")))) {
                // line 25
                echo "\t\t\t\t\t<div class=\"ai1ec-alert ai1ec-alert-info\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-info-circle ai1ec-fa-fw\"></i>
\t\t\t\t\t\t";
                // line 27
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "requirements");
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "elements"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 31
                echo "\t\t\t\t\t";
                echo (isset($context["element"]) ? $context["element"] : null);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t</div>
</div>
<div class=\"ai1ec-col-md-6\">
\t<p><strong>";
        // line 38
        echo (isset($context["text_paste"]) ? $context["text_paste"] : null);
        echo "</strong></p>
\t<pre id=\"ai1ec-superwidget-code\" class=\"ai1ec-autoselect\"
\t\t data-widget-url=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["siteurl"]) ? $context["siteurl"] : null), "html_attr");
        echo "?ai1ec_js_widget\"></pre>
\t<div class=\"ai1ec-alert ai1ec-alert-info\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-info-circle ai1ec-fa-fw\"></i>
\t\t";
        // line 43
        echo sprintf((isset($context["text_updated_code"]) ? $context["text_updated_code"] : null), "https://time.ly/document/manage-add-ons/embed-calendar-sites-super-widget/");
        // line 45
        echo "
\t</div>
</div>
<br clear=\"all\" />
<h2 id=\"widget-preview-title\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["text_preview"]) ? $context["text_preview"] : null), "html", null, true);
        echo "</h2>
<div id=\"ai1ec-superwidget-preview\" class=\"ai1ec-well ai1ec-hidden\"></div>
";
    }

    public function getTemplateName()
    {
        return "widget-creator/super-widget-contents.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 43,  126 => 40,  100 => 31,  85 => 25,  297 => 131,  295 => 130,  288 => 124,  279 => 121,  270 => 120,  265 => 118,  260 => 116,  253 => 112,  248 => 110,  241 => 106,  235 => 103,  229 => 100,  224 => 98,  219 => 95,  215 => 94,  208 => 90,  200 => 88,  196 => 87,  192 => 86,  188 => 85,  184 => 84,  171 => 74,  151 => 61,  125 => 50,  105 => 41,  72 => 28,  65 => 25,  117 => 24,  92 => 33,  69 => 27,  163 => 31,  148 => 28,  144 => 27,  140 => 49,  136 => 25,  76 => 12,  156 => 33,  141 => 56,  134 => 45,  130 => 23,  121 => 38,  106 => 21,  99 => 19,  83 => 24,  80 => 13,  95 => 30,  88 => 32,  77 => 26,  84 => 36,  78 => 23,  74 => 22,  55 => 7,  53 => 18,  68 => 18,  66 => 11,  62 => 12,  59 => 19,  44 => 5,  49 => 13,  26 => 3,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 89,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 29,  145 => 58,  135 => 55,  112 => 47,  98 => 42,  90 => 17,  70 => 25,  61 => 19,  21 => 2,  129 => 52,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 17,  56 => 14,  52 => 14,  48 => 5,  40 => 8,  22 => 2,  127 => 22,  123 => 33,  119 => 49,  114 => 23,  110 => 22,  102 => 20,  96 => 35,  91 => 16,  87 => 16,  79 => 23,  73 => 24,  63 => 24,  57 => 14,  46 => 12,  29 => 4,  19 => 1,  58 => 14,  45 => 4,  37 => 9,  35 => 9,  51 => 6,  43 => 10,  41 => 10,  168 => 36,  162 => 35,  159 => 50,  157 => 62,  153 => 46,  146 => 44,  137 => 29,  133 => 24,  128 => 57,  124 => 21,  120 => 25,  116 => 35,  113 => 46,  109 => 33,  104 => 43,  97 => 17,  89 => 27,  86 => 30,  81 => 30,  71 => 28,  67 => 10,  64 => 24,  60 => 11,  54 => 13,  50 => 12,  47 => 11,  24 => 2,  42 => 3,  38 => 3,  31 => 6,  28 => 5,  39 => 8,  34 => 7,  32 => 7,  27 => 4,  23 => 3,  20 => 1,  36 => 10,  33 => 5,  30 => 7,  25 => 4,);
    }
}
