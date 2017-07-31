<?php

/* categories.twig */
class __TwigTemplate_b5633d95de14839f5641ad75e89a427aa6fdfc24b529c6a3f1d8e24779f6f79f extends Twig_Template
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
        echo "<li class=\"ai1ec-dropdown ai1ec-category-filter ai1ec-cat-filter
\t";
        // line 2
        if ((!twig_test_empty((isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null)))) {
            echo "ai1ec-active";
        }
        echo "\"
\tdata-slug=\"cat\">
\t<a class=\"ai1ec-dropdown-toggle\" data-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open\"></i>
\t\t<span class=\"ai1ec-clear-filter ai1ec-tooltip-trigger\"
\t\t\tdata-href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["clear_filter"]) ? $context["clear_filter"] : null), "html", null, true);
        echo "\"
\t\t\t";
        // line 8
        echo (isset($context["data_type"]) ? $context["data_type"] : null);
        echo "
\t\t\ttitle=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["text_clear_category_filter"]) ? $context["text_clear_category_filter"] : null), "html", null, true);
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times-circle\"></i>
\t\t</span>
\t\t";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["text_categories"]) ? $context["text_categories"] : null), "html", null, true);
        echo "
\t\t<span class=\"ai1ec-caret\"></span>
\t</a>
\t<div class=\"ai1ec-dropdown-menu\">
\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 17
            echo "\t\t\t<div data-term=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), "html", null, true);
            echo "\"
\t\t\t\t";
            // line 18
            if (twig_in_filter($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), (isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null))) {
                // line 19
                echo "\t\t\t\t\tclass=\"ai1ec-active\"
\t\t\t\t";
            }
            // line 20
            echo ">
\t\t\t\t<a class=\"ai1ec-load-view ai1ec-category ai1ec-cat\"
\t\t\t\t\t";
            // line 22
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description")))) {
                // line 23
                echo "\t\t\t\t\t\ttitle=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description"), "html_attr");
                echo "\"
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t";
            echo (isset($context["data_type"]) ? $context["data_type"] : null);
            echo "
\t\t\t\t\thref=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "href"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 27
            if (twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color"))) {
                // line 28
                echo "\t\t\t\t\t\t<span class=\"ai1ec-color-swatch-empty\"></span>
\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t";
                echo $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color");
                echo "
\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t";
            echo $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "name");
            echo "
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</div>
</li>

";
    }

    public function getTemplateName()
    {
        return "categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  101 => 32,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 42,  123 => 41,  120 => 40,  118 => 39,  114 => 37,  108 => 35,  102 => 33,  100 => 32,  96 => 30,  90 => 27,  79 => 23,  63 => 17,  55 => 14,  86 => 26,  70 => 20,  58 => 15,  43 => 13,  319 => 95,  317 => 94,  313 => 93,  310 => 92,  307 => 84,  305 => 83,  302 => 82,  295 => 78,  291 => 77,  287 => 75,  285 => 74,  282 => 73,  280 => 72,  277 => 71,  275 => 70,  271 => 69,  269 => 68,  253 => 66,  238 => 65,  236 => 64,  220 => 62,  218 => 59,  213 => 56,  208 => 54,  205 => 53,  203 => 52,  199 => 51,  195 => 49,  189 => 46,  186 => 45,  180 => 42,  177 => 41,  175 => 40,  170 => 38,  163 => 36,  159 => 35,  155 => 34,  152 => 33,  134 => 32,  117 => 31,  111 => 29,  105 => 27,  103 => 26,  95 => 30,  91 => 28,  87 => 22,  83 => 25,  77 => 20,  50 => 14,  45 => 14,  42 => 13,  99 => 25,  89 => 27,  85 => 26,  80 => 25,  74 => 23,  72 => 22,  68 => 20,  64 => 19,  62 => 18,  57 => 17,  53 => 16,  46 => 12,  36 => 8,  28 => 4,  38 => 7,  51 => 15,  21 => 2,  47 => 15,  41 => 11,  37 => 7,  27 => 4,  23 => 3,  66 => 18,  60 => 13,  54 => 15,  48 => 8,  44 => 10,  34 => 6,  29 => 4,  22 => 2,  40 => 9,  35 => 7,  32 => 7,  26 => 5,  24 => 2,  78 => 30,  75 => 21,  69 => 26,  67 => 25,  61 => 22,  56 => 18,  49 => 12,  39 => 12,  33 => 9,  31 => 5,  25 => 3,  19 => 1,);
    }
}
