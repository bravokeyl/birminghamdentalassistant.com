<?php

/* setting/categories-color-picker.twig */
class __TwigTemplate_1db441d4c46644d462caf5fabce3486fec28bb3dee4455a13411a01b9c384550 extends Twig_Template
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
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            // line 2
            echo "\t<tr class=\"form-field\">
\t\t<th scope=\"row\" valign=\"top\">
\t\t\t<label for=\"tag-color\">
\t\t\t\t";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
\t\t\t</label>
\t\t</th>
\t\t<td>
\t\t\t<div id=\"tag-color\">
\t\t\t\t<div id=\"tag-color-background\" ";
            // line 10
            echo (isset($context["style"]) ? $context["style"] : null);
            echo "></div>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"tag-color-value\" id=\"tag-color-value\"
\t\t\t\tvalue=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : null), "html", null, true);
            echo "\">
\t\t\t<p class=\"description\">";
            // line 14
            echo (isset($context["description"]) ? $context["description"] : null);
            echo ".</p>
\t\t</td>
\t</tr>
";
        } else {
            // line 18
            echo "\t<div class=\"form-field\">
\t\t<label for=\"tag-color\">
\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
\t\t</label>
\t\t<div id=\"tag-color\">
\t\t\t<div id=\"tag-color-background\"></div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"tag-color-value\" id=\"tag-color-value\" value=\"\">
\t\t<p>";
            // line 26
            echo (isset($context["description"]) ? $context["description"] : null);
            echo ".</p>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/categories-color-picker.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  53 => 17,  68 => 21,  66 => 20,  62 => 18,  59 => 20,  44 => 14,  49 => 9,  26 => 5,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 72,  145 => 68,  135 => 61,  112 => 47,  98 => 36,  90 => 31,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 27,  56 => 13,  52 => 11,  48 => 19,  40 => 13,  22 => 2,  127 => 34,  123 => 33,  119 => 51,  114 => 30,  110 => 29,  102 => 28,  96 => 27,  91 => 25,  87 => 24,  79 => 23,  73 => 26,  63 => 18,  57 => 15,  46 => 8,  29 => 5,  19 => 1,  58 => 12,  45 => 9,  37 => 5,  35 => 5,  51 => 18,  43 => 7,  41 => 12,  168 => 48,  162 => 79,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 38,  133 => 37,  128 => 57,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 43,  97 => 39,  89 => 28,  86 => 30,  81 => 29,  71 => 27,  67 => 26,  64 => 26,  60 => 22,  54 => 15,  50 => 16,  47 => 15,  24 => 2,  42 => 7,  38 => 5,  31 => 3,  28 => 2,  39 => 9,  34 => 10,  32 => 6,  27 => 3,  23 => 3,  20 => 1,  36 => 10,  33 => 10,  30 => 5,  25 => 4,);
    }
}
