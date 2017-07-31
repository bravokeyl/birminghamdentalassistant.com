<?php

/* setting/twig_cache.twig */
class __TwigTemplate_77551fb1fe7acd7bfd2d35d0e90997f199a0278f4ba2da2aad6046977aade5a6 extends Twig_Template
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
        echo "<div class=\"ai1ec-col-sm-12\">
\t<ul class=\"ai1ec-fa-ul\">
\t\t<li id=\"ai1ec-cache-scan-success\" class=\"ai1ec-text-success";
        // line 3
        if (((isset($context["cache_available"]) ? $context["cache_available"] : null) == false)) {
            echo " ai1ec-hide";
        }
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-check-circle\"></i>
\t\t\t";
        // line 5
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "okcache");
        echo "
\t\t</li>
\t\t<li id=\"ai1ec-cache-scan-danger\" class=\"ai1ec-text-danger";
        // line 7
        if (((isset($context["cache_available"]) ? $context["cache_available"] : null) == true)) {
            echo " ai1ec-hide";
        }
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-times-circle\"></i>
\t\t\t";
        // line 9
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "nocache");
        echo "
\t\t\t<button class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs\" id=\"ai1ec-button-refresh\"
\t\t\t\tdata-loading-text=\"&lt;i class=&quot;ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh ai1ec-fa-spin&quot;&gt;&lt;/i&gt; ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "rescan"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh\"></i>
\t\t\t\t";
        // line 13
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "refresh");
        echo "
\t\t\t</button>
\t\t</li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/twig_cache.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  88 => 32,  77 => 26,  84 => 36,  78 => 33,  74 => 31,  55 => 20,  53 => 18,  68 => 21,  66 => 20,  62 => 18,  59 => 21,  44 => 14,  49 => 16,  26 => 5,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 72,  145 => 68,  135 => 61,  112 => 47,  98 => 42,  90 => 31,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 27,  56 => 13,  52 => 13,  48 => 13,  40 => 13,  22 => 2,  127 => 34,  123 => 33,  119 => 51,  114 => 30,  110 => 29,  102 => 28,  96 => 27,  91 => 33,  87 => 24,  79 => 23,  73 => 24,  63 => 18,  57 => 15,  46 => 12,  29 => 4,  19 => 1,  58 => 17,  45 => 9,  37 => 5,  35 => 7,  51 => 14,  43 => 11,  41 => 12,  168 => 48,  162 => 79,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 38,  133 => 37,  128 => 57,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 43,  97 => 36,  89 => 28,  86 => 30,  81 => 27,  71 => 23,  67 => 21,  64 => 24,  60 => 18,  54 => 15,  50 => 16,  47 => 11,  24 => 2,  42 => 9,  38 => 5,  31 => 5,  28 => 2,  39 => 9,  34 => 6,  32 => 6,  27 => 6,  23 => 3,  20 => 1,  36 => 10,  33 => 10,  30 => 5,  25 => 4,);
    }
}
