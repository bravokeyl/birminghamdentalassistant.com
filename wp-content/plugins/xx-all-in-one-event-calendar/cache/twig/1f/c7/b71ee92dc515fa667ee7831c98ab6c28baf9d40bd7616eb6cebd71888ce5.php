<?php

/* select2_multiselect.twig */
class __TwigTemplate_1fc7b71ee92dc515fa667ee7831c98ab6c28baf9d40bd7616eb6cebd71888ce5 extends Twig_Template
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
        echo "<div 
\t";
        // line 2
        if (((isset($context["container_class"]) ? $context["container_class"] : null) != false)) {
            // line 3
            echo "\t\tclass=\"";
            echo twig_escape_filter($this->env, (isset($context["container_class"]) ? $context["container_class"] : null), "html", null, true);
            echo "\"
\t";
        }
        // line 5
        echo "\t>
\t";
        // line 6
        $context["__internal_3425da8cd677205bc031244d6d5a38f23f039e580f38b55d365fb72badc79657"] = $this->env->loadTemplate("form-elements/select.twig");
        // line 7
        echo "\t";
        echo $context["__internal_3425da8cd677205bc031244d6d5a38f23f039e580f38b55d365fb72badc79657"]->getselect((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null), (isset($context["select2_args"]) ? $context["select2_args"] : null), (isset($context["options"]) ? $context["options"] : null));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "select2_multiselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 24,  92 => 18,  69 => 19,  163 => 31,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  76 => 12,  156 => 33,  141 => 30,  134 => 26,  130 => 23,  121 => 24,  106 => 21,  99 => 19,  83 => 14,  80 => 13,  95 => 19,  88 => 32,  77 => 26,  84 => 36,  78 => 33,  74 => 13,  55 => 7,  53 => 18,  68 => 14,  66 => 11,  62 => 12,  59 => 15,  44 => 5,  49 => 13,  26 => 3,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 29,  145 => 31,  135 => 61,  112 => 47,  98 => 42,  90 => 17,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 17,  56 => 14,  52 => 14,  48 => 5,  40 => 8,  22 => 2,  127 => 22,  123 => 33,  119 => 51,  114 => 23,  110 => 22,  102 => 20,  96 => 27,  91 => 16,  87 => 16,  79 => 23,  73 => 24,  63 => 16,  57 => 14,  46 => 10,  29 => 4,  19 => 1,  58 => 17,  45 => 4,  37 => 6,  35 => 7,  51 => 6,  43 => 11,  41 => 8,  168 => 36,  162 => 35,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 29,  133 => 24,  128 => 57,  124 => 21,  120 => 25,  116 => 37,  113 => 36,  109 => 20,  104 => 43,  97 => 17,  89 => 28,  86 => 30,  81 => 27,  71 => 28,  67 => 10,  64 => 24,  60 => 11,  54 => 13,  50 => 14,  47 => 12,  24 => 3,  42 => 3,  38 => 3,  31 => 5,  28 => 5,  39 => 7,  34 => 7,  32 => 6,  27 => 4,  23 => 3,  20 => 1,  36 => 7,  33 => 6,  30 => 5,  25 => 4,);
    }
}
