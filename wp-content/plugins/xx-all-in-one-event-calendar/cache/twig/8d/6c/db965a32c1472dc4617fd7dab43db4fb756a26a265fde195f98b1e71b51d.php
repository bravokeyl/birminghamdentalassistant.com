<?php

/* event-excerpt.twig */
class __TwigTemplate_8d6cdb965a32c1472dc4617fd7dab43db4fb756a26a265fde195f98b1e71b51d extends Twig_Template
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
        echo "<div class=\"timely ai1ec-excerpt\">
\t<div class=\"ai1ec-time\">
\t\t<strong>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["text_when"]) ? $context["text_when"] : null), "html", null, true);
        echo "</strong>
\t\t";
        // line 4
        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null));
        echo "
\t</div>
\t";
        // line 6
        if ((!twig_test_empty((isset($context["location"]) ? $context["location"] : null)))) {
            // line 7
            echo "\t\t<div class=\"ai1ec-location\">
\t\t\t<strong>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["text_where"]) ? $context["text_where"] : null), "html", null, true);
            echo "</strong>
\t\t\t";
            // line 9
            echo (isset($context["location"]) ? $context["location"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "event-excerpt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  88 => 32,  77 => 26,  84 => 36,  78 => 33,  74 => 31,  55 => 20,  53 => 18,  68 => 21,  66 => 20,  62 => 18,  59 => 21,  44 => 12,  49 => 16,  26 => 5,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 72,  145 => 68,  135 => 61,  112 => 47,  98 => 42,  90 => 31,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 27,  56 => 13,  52 => 12,  48 => 13,  40 => 8,  22 => 2,  127 => 34,  123 => 33,  119 => 51,  114 => 30,  110 => 29,  102 => 28,  96 => 27,  91 => 33,  87 => 24,  79 => 23,  73 => 24,  63 => 18,  57 => 15,  46 => 10,  29 => 5,  19 => 1,  58 => 17,  45 => 9,  37 => 8,  35 => 7,  51 => 14,  43 => 11,  41 => 9,  168 => 48,  162 => 79,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 38,  133 => 37,  128 => 57,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 43,  97 => 36,  89 => 28,  86 => 30,  81 => 27,  71 => 23,  67 => 21,  64 => 24,  60 => 18,  54 => 15,  50 => 14,  47 => 12,  24 => 2,  42 => 11,  38 => 7,  31 => 5,  28 => 2,  39 => 9,  34 => 7,  32 => 6,  27 => 4,  23 => 3,  20 => 1,  36 => 10,  33 => 10,  30 => 5,  25 => 4,);
    }
}
