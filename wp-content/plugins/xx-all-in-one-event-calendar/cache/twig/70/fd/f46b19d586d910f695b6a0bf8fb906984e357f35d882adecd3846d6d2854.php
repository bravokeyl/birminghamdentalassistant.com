<?php

/* banner-image.twig */
class __TwigTemplate_70fdf46b19d586d910f695b6a0bf8fb906984e357f35d882adecd3846d6d2854 extends Twig_Template
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
        echo "<p class=\"ai1ec-banner-image-block hide-if-no-js ";
        echo (((isset($context["src"]) ? $context["src"] : null)) ? ("") : ("ai1ec-hidden"));
        echo "\">
\t<a href=\"#\">
\t\t<img width=\"100%\" class=\"ai1ec-set-banner-image\"
\t\t\tsrc=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : null), "html_attr");
        echo "\">
\t</a>
\t<input type=\"hidden\" name=\"ai1ec_banner_image\"
\t\tvalue=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : null), "html_attr");
        echo "\">
</p>
<p class=\"ai1ec-set-banner-block hide-if-no-js ";
        // line 9
        echo (((isset($context["src"]) ? $context["src"] : null)) ? ("ai1ec-hidden") : (""));
        echo "\">
\t<a href=\"#\" class=\"ai1ec-set-banner-image\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["set_text"]) ? $context["set_text"] : null), "html", null, true);
        echo "</a>
</p>
<p class=\"ai1ec-remove-banner-block hide-if-no-js ";
        // line 12
        echo (((isset($context["src"]) ? $context["src"] : null)) ? ("") : ("ai1ec-hidden"));
        echo "\">
\t<a class=\"ai1ec-remove-banner\" href=\"#\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["remove_text"]) ? $context["remove_text"] : null), "html", null, true);
        echo "</a>
</p>
<div class=\"media-toolbar ai1ec-hidden ai1ec-media-toolbar\">
\t<div class=\"media-toolbar-primary search-form\">
\t\t<a href=\"#\" class=\"button media-button button-primary button-large
\t\t\tai1ec-save-banner-image\">
\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["set_text"]) ? $context["set_text"] : null), "html", null, true);
        echo "
\t\t</a>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "banner-image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 24,  92 => 18,  69 => 19,  163 => 31,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  76 => 12,  156 => 33,  141 => 30,  134 => 26,  130 => 23,  121 => 24,  106 => 21,  99 => 19,  83 => 14,  80 => 13,  95 => 19,  88 => 32,  77 => 26,  84 => 36,  78 => 33,  74 => 13,  55 => 7,  53 => 18,  68 => 14,  66 => 11,  62 => 12,  59 => 19,  44 => 5,  49 => 13,  26 => 4,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 29,  145 => 31,  135 => 61,  112 => 47,  98 => 42,  90 => 17,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 17,  56 => 14,  52 => 14,  48 => 5,  40 => 8,  22 => 2,  127 => 22,  123 => 33,  119 => 51,  114 => 23,  110 => 22,  102 => 20,  96 => 27,  91 => 16,  87 => 16,  79 => 23,  73 => 24,  63 => 16,  57 => 14,  46 => 12,  29 => 4,  19 => 1,  58 => 17,  45 => 4,  37 => 9,  35 => 7,  51 => 6,  43 => 11,  41 => 10,  168 => 36,  162 => 35,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 29,  133 => 24,  128 => 57,  124 => 21,  120 => 25,  116 => 37,  113 => 36,  109 => 20,  104 => 43,  97 => 17,  89 => 28,  86 => 30,  81 => 27,  71 => 28,  67 => 10,  64 => 24,  60 => 11,  54 => 13,  50 => 13,  47 => 12,  24 => 3,  42 => 3,  38 => 3,  31 => 5,  28 => 5,  39 => 7,  34 => 7,  32 => 7,  27 => 4,  23 => 3,  20 => 1,  36 => 7,  33 => 6,  30 => 5,  25 => 4,);
    }
}
