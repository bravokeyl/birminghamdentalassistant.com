<?php

/* setting/page.twig */
class __TwigTemplate_84a6c5284ab521b3c47b938e332f63481454c6f1376259daf34884343b8b6740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base_page.twig");

        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_layout($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"post-box-container column-1-ai1ec left-side timely\">
\t";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "screen"), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "action"), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "object")), "html", null, true);
        echo "
\t";
        // line 5
        if (array_key_exists("submit", $context)) {
            // line 6
            echo "\t\t";
            $context["__internal_4bbf5f346eb0142a3234eac1a56a9ac86afcd9bca055f0fffa83893f8d2b2368"] = $this->env->loadTemplate("form-elements/input.twig");
            // line 7
            echo "\t\t<div class=\"ai1ec-pull-right\">
\t\t\t";
            // line 8
            echo $context["__internal_4bbf5f346eb0142a3234eac1a56a9ac86afcd9bca055f0fffa83893f8d2b2368"]->getbutton($this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id"), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id"), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "value"), "submit", $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "args"));
            echo "
\t\t</div>
\t";
        }
        // line 11
        echo "</div>
<div class=\"post-box-container column-2-ai1ec right-side timely\">
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["support"]) ? $context["support"] : null), "screen"), $this->getAttribute((isset($context["support"]) ? $context["support"] : null), "action"), $this->getAttribute((isset($context["support"]) ? $context["support"] : null), "object")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  68 => 21,  66 => 20,  62 => 18,  59 => 20,  44 => 11,  49 => 9,  26 => 2,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 72,  145 => 68,  135 => 61,  112 => 47,  98 => 36,  90 => 31,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 27,  56 => 13,  52 => 11,  48 => 19,  40 => 6,  22 => 2,  127 => 34,  123 => 33,  119 => 51,  114 => 30,  110 => 29,  102 => 28,  96 => 27,  91 => 25,  87 => 24,  79 => 23,  73 => 26,  63 => 18,  57 => 15,  46 => 8,  29 => 5,  19 => 1,  58 => 12,  45 => 9,  37 => 5,  35 => 5,  51 => 10,  43 => 7,  41 => 12,  168 => 48,  162 => 79,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 38,  133 => 37,  128 => 57,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 43,  97 => 39,  89 => 28,  86 => 30,  81 => 29,  71 => 27,  67 => 26,  64 => 18,  60 => 22,  54 => 15,  50 => 16,  47 => 15,  24 => 2,  42 => 7,  38 => 5,  31 => 3,  28 => 2,  39 => 9,  34 => 4,  32 => 6,  27 => 3,  23 => 3,  20 => 1,  36 => 10,  33 => 10,  30 => 5,  25 => 4,);
    }
}
