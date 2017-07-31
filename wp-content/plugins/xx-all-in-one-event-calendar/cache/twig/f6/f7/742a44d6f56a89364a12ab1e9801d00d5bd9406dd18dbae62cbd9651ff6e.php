<?php

/* setting/select-fieldsets.twig */
class __TwigTemplate_f6f7742a44d6f56a89364a12ab1e9801d00d5bd9406dd18dbae62cbd9651ff6e extends Twig_Template
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
        echo "<fieldset id=\"ai1ec-fieldset-";
        echo twig_escape_filter($this->env, (isset($context["parent_id"]) ? $context["parent_id"] : null), "html", null, true);
        echo "\" class=\"ai1ec-setting-fieldset ai1ec-";
        echo twig_escape_filter($this->env, (isset($context["parent_id"]) ? $context["parent_id"] : null), "html", null, true);
        echo " ai1ec-";
        echo twig_escape_filter($this->env, (isset($context["select_id"]) ? $context["select_id"] : null), "html", null, true);
        echo "
\t";
        // line 2
        if ((!(isset($context["visible"]) ? $context["visible"] : null))) {
            echo " ai1ec-hidden";
        }
        echo "\">
\t";
        // line 3
        echo (isset($context["contents"]) ? $context["contents"] : null);
        echo "
</fieldset>";
    }

    public function getTemplateName()
    {
        return "setting/select-fieldsets.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  68 => 21,  66 => 20,  62 => 18,  59 => 20,  44 => 11,  49 => 9,  26 => 2,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 72,  145 => 68,  135 => 61,  112 => 47,  98 => 36,  90 => 31,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 27,  56 => 11,  52 => 14,  48 => 19,  40 => 14,  22 => 2,  127 => 34,  123 => 33,  119 => 51,  114 => 30,  110 => 29,  102 => 28,  96 => 27,  91 => 25,  87 => 24,  79 => 23,  73 => 26,  63 => 18,  57 => 15,  46 => 12,  29 => 5,  19 => 1,  58 => 12,  45 => 9,  37 => 5,  35 => 5,  51 => 10,  43 => 7,  41 => 12,  168 => 48,  162 => 79,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 38,  133 => 37,  128 => 57,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 43,  97 => 39,  89 => 28,  86 => 30,  81 => 29,  71 => 27,  67 => 26,  64 => 18,  60 => 22,  54 => 15,  50 => 16,  47 => 15,  24 => 2,  42 => 7,  38 => 11,  31 => 3,  28 => 2,  39 => 9,  34 => 3,  32 => 6,  27 => 3,  23 => 3,  20 => 1,  36 => 10,  33 => 10,  30 => 5,  25 => 4,);
    }
}
