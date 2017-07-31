<?php

/* widget-creator/page.twig */
class __TwigTemplate_e899403e3822a81b09e1353e7f59c289e98765518f100d96487c0db3f3f06c8d extends Twig_Template
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
        echo "<div class=\"wrap\">
\t";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->screen_icon(), "html", null, true);
        echo "
\t<h2>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
\t<div id=\"poststuff\">
\t\t<div class=\"metabox-holder\">
\t\t\t<div class=\"post-box-container left-side timely\">
\t\t\t\t<div class=\"ai1ec-tab-content-container ai1ec-form-horizontal\">
\t\t\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "screen"), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "action"), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "object")), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "widget-creator/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 43,  126 => 40,  100 => 31,  85 => 25,  297 => 131,  295 => 130,  288 => 124,  279 => 121,  270 => 120,  265 => 118,  260 => 116,  253 => 112,  248 => 110,  241 => 106,  235 => 103,  229 => 100,  224 => 98,  219 => 95,  215 => 94,  208 => 90,  200 => 88,  196 => 87,  192 => 86,  188 => 85,  184 => 84,  171 => 74,  151 => 61,  125 => 50,  105 => 41,  72 => 28,  65 => 25,  117 => 24,  92 => 33,  69 => 27,  163 => 31,  148 => 28,  144 => 27,  140 => 49,  136 => 25,  76 => 12,  156 => 33,  141 => 56,  134 => 45,  130 => 23,  121 => 38,  106 => 21,  99 => 19,  83 => 24,  80 => 13,  95 => 30,  88 => 32,  77 => 26,  84 => 36,  78 => 23,  74 => 22,  55 => 7,  53 => 18,  68 => 18,  66 => 11,  62 => 12,  59 => 19,  44 => 5,  49 => 13,  26 => 3,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 89,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 29,  145 => 58,  135 => 55,  112 => 47,  98 => 42,  90 => 17,  70 => 25,  61 => 19,  21 => 2,  129 => 52,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 17,  56 => 14,  52 => 14,  48 => 5,  40 => 8,  22 => 2,  127 => 22,  123 => 33,  119 => 49,  114 => 23,  110 => 22,  102 => 20,  96 => 35,  91 => 16,  87 => 16,  79 => 23,  73 => 24,  63 => 24,  57 => 14,  46 => 12,  29 => 4,  19 => 1,  58 => 14,  45 => 4,  37 => 9,  35 => 9,  51 => 6,  43 => 10,  41 => 13,  168 => 36,  162 => 35,  159 => 50,  157 => 62,  153 => 46,  146 => 44,  137 => 29,  133 => 24,  128 => 57,  124 => 21,  120 => 25,  116 => 35,  113 => 46,  109 => 33,  104 => 43,  97 => 17,  89 => 27,  86 => 30,  81 => 30,  71 => 28,  67 => 10,  64 => 24,  60 => 11,  54 => 13,  50 => 12,  47 => 11,  24 => 2,  42 => 3,  38 => 3,  31 => 6,  28 => 5,  39 => 8,  34 => 8,  32 => 7,  27 => 4,  23 => 3,  20 => 1,  36 => 10,  33 => 5,  30 => 7,  25 => 4,);
    }
}
