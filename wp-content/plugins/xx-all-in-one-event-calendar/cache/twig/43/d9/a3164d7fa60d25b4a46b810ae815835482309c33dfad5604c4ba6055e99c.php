<?php

/* organize/header.twig */
class __TwigTemplate_43d9a3164d7fa60d25b4a46b810ae815835482309c33dfad5604c4ba6055e99c extends Twig_Template
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
        echo "<div class=\"timely ai1ec-taxonomy-header ai1ec-hide\">
\t<h1>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["text_title"]) ? $context["text_title"] : null), "html", null, true);
        echo "</h1>
\t<ul class=\"ai1ec-nav ai1ec-nav-tabs\">
\t\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taxonomies"]) ? $context["taxonomies"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomy"]) {
            // line 5
            echo "\t\t\t";
            if ((!twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "children")))) {
                // line 6
                echo "\t\t\t\t<li class=\"";
                if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "active")) {
                    echo "ai1ec-active";
                }
                // line 7
                echo "\t\t\t\t\tai1ec-taxonomy-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "taxonomy_name"), "html", null, true);
                echo "
\t\t\t\t\tai1ec-dropdown\" role=\"presentation\">
\t\t\t\t\t<a data-toggle=\"ai1ec-dropdown\" href=\"#\" class=\"ai1ec-dropdown-toggle\"
\t\t\t\t\t\trole=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t";
                // line 11
                if ((!twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "icon")))) {
                    // line 12
                    echo "\t\t\t\t\t\t\t<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "icon"), "html_attr");
                    echo " ai1ec-fa-fw\"></i>
\t\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name"), "html", null, true);
                echo " <span class=\"ai1ec-caret\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"ai1ec-dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "children"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["taxonomy2"]) {
                    // line 18
                    echo "\t\t\t\t\t\t\t";
                    $this->env->loadTemplate("organize/tab.twig")->display(array_merge($context, array("taxonomy" => (isset($context["taxonomy2"]) ? $context["taxonomy2"] : null))));
                    // line 19
                    echo "\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t";
                $this->env->loadTemplate("organize/tab.twig")->display($context);
                // line 24
                echo "\t\t\t";
            }
            // line 25
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "organize/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 24,  92 => 18,  69 => 19,  163 => 31,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  76 => 12,  156 => 33,  141 => 30,  134 => 26,  130 => 23,  121 => 24,  106 => 21,  99 => 19,  83 => 14,  80 => 13,  95 => 19,  88 => 32,  77 => 26,  84 => 36,  78 => 33,  74 => 13,  55 => 7,  53 => 18,  68 => 14,  66 => 11,  62 => 12,  59 => 15,  44 => 5,  49 => 16,  26 => 3,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 29,  145 => 31,  135 => 61,  112 => 47,  98 => 42,  90 => 17,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 17,  56 => 14,  52 => 7,  48 => 5,  40 => 8,  22 => 2,  127 => 22,  123 => 33,  119 => 51,  114 => 23,  110 => 22,  102 => 20,  96 => 27,  91 => 16,  87 => 16,  79 => 23,  73 => 24,  63 => 16,  57 => 14,  46 => 10,  29 => 4,  19 => 1,  58 => 17,  45 => 4,  37 => 6,  35 => 6,  51 => 6,  43 => 11,  41 => 8,  168 => 36,  162 => 35,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 29,  133 => 24,  128 => 57,  124 => 21,  120 => 25,  116 => 37,  113 => 36,  109 => 20,  104 => 43,  97 => 17,  89 => 28,  86 => 30,  81 => 27,  71 => 11,  67 => 10,  64 => 24,  60 => 11,  54 => 13,  50 => 14,  47 => 6,  24 => 1,  42 => 3,  38 => 3,  31 => 5,  28 => 2,  39 => 7,  34 => 7,  32 => 5,  27 => 4,  23 => 3,  20 => 1,  36 => 10,  33 => 10,  30 => 5,  25 => 4,);
    }
}
