<?php

/* organize/tab.twig */
class __TwigTemplate_2e4133d05bb6c6796937bc9a3340d448d39d5e6c81ad15c2e3e8d9fa2be2d09b extends Twig_Template
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
        if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "divider")) {
            // line 2
            echo "\t<li role=\"presentation\" class=\"ai1ec-divider\"></li>
";
        } else {
            // line 4
            echo "\t<li class=\"";
            if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "active")) {
                echo "ai1ec-active";
            }
            // line 5
            echo "\t\tai1ec-taxonomy-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "taxonomy_name"), "html", null, true);
            echo "\">
\t\t<a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "url"), "html_attr");
            echo "\">
\t\t";
            // line 7
            if ((!twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "icon")))) {
                // line 8
                echo "\t\t\t<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "icon"), "html_attr");
                echo " ai1ec-fa-fw\"></i>
\t\t";
            }
            // line 10
            echo "\t\t";
            echo $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name");
            echo "
\t\t</a>

\t\t";
            // line 13
            if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "active") && (!twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "edit_url"))))) {
                // line 14
                echo "\t\t\t<a class=\"ai1ec-taxonomy-edit-link ai1ec-hide button button-primary timely\"
\t\t\t\thref=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "edit_url"), "html_attr");
                echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "edit_label"), "html", null, true);
                echo "
\t\t\t</a>
\t\t";
            }
            // line 19
            echo "\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "organize/tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  163 => 31,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  76 => 12,  156 => 33,  141 => 30,  134 => 28,  130 => 23,  121 => 24,  106 => 21,  99 => 19,  83 => 14,  80 => 13,  95 => 18,  88 => 32,  77 => 26,  84 => 36,  78 => 33,  74 => 13,  55 => 7,  53 => 18,  68 => 21,  66 => 11,  62 => 18,  59 => 15,  44 => 5,  49 => 16,  26 => 3,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 29,  145 => 31,  135 => 61,  112 => 47,  98 => 42,  90 => 17,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 27,  56 => 14,  52 => 12,  48 => 5,  40 => 8,  22 => 2,  127 => 22,  123 => 33,  119 => 51,  114 => 30,  110 => 22,  102 => 20,  96 => 27,  91 => 16,  87 => 16,  79 => 23,  73 => 24,  63 => 16,  57 => 14,  46 => 10,  29 => 4,  19 => 1,  58 => 17,  45 => 4,  37 => 6,  35 => 6,  51 => 6,  43 => 11,  41 => 8,  168 => 36,  162 => 35,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 29,  133 => 24,  128 => 57,  124 => 21,  120 => 38,  116 => 37,  113 => 36,  109 => 20,  104 => 43,  97 => 17,  89 => 28,  86 => 30,  81 => 27,  71 => 11,  67 => 10,  64 => 24,  60 => 18,  54 => 13,  50 => 14,  47 => 10,  24 => 1,  42 => 3,  38 => 3,  31 => 5,  28 => 2,  39 => 7,  34 => 7,  32 => 5,  27 => 4,  23 => 3,  20 => 1,  36 => 10,  33 => 10,  30 => 5,  25 => 4,);
    }
}
