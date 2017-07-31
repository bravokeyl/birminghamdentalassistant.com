<?php

/* setting/custom.twig */
class __TwigTemplate_f0915421eb30386d27f75f584e4cc07ba290c43e8fc2c085f751b0c25ad606bb extends Twig_Template
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
        echo "<label class=\"ai1ec-control-label ai1ec-col-sm-5\" for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t";
        // line 2
        echo (isset($context["label"]) ? $context["label"] : null);
        echo "
</label>
<div class=\"ai1ec-col-sm-7\">
\t";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/custom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 72,  145 => 68,  135 => 61,  112 => 47,  98 => 36,  90 => 31,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 27,  56 => 21,  52 => 20,  48 => 19,  40 => 14,  22 => 2,  127 => 34,  123 => 33,  119 => 51,  114 => 30,  110 => 29,  102 => 28,  96 => 27,  91 => 25,  87 => 24,  79 => 23,  73 => 26,  63 => 18,  57 => 15,  46 => 12,  29 => 5,  19 => 1,  58 => 12,  45 => 9,  37 => 9,  35 => 5,  51 => 14,  43 => 9,  41 => 9,  168 => 48,  162 => 79,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 38,  133 => 37,  128 => 57,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 43,  97 => 39,  89 => 28,  86 => 30,  81 => 29,  71 => 27,  67 => 26,  64 => 18,  60 => 22,  54 => 15,  50 => 12,  47 => 11,  24 => 2,  42 => 7,  38 => 6,  31 => 6,  28 => 3,  39 => 5,  34 => 7,  32 => 4,  27 => 3,  23 => 2,  20 => 1,  36 => 6,  33 => 10,  30 => 5,  25 => 4,);
    }
}
