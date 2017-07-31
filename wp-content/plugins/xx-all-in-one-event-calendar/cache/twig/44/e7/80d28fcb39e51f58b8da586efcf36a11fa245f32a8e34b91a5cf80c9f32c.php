<?php

/* setting/textarea.twig */
class __TwigTemplate_44e780d28fcb39e51f58b8da586efcf36a11fa245f32a8e34b91a5cf80c9f32c extends Twig_Template
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
        echo "<label class=\"ai1ec-col-sm-12\" for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t";
        // line 2
        echo (isset($context["label"]) ? $context["label"] : null);
        echo "
</label>
<div class=\"ai1ec-col-sm-12\">
\t";
        // line 5
        if (array_key_exists("append", $context)) {
            // line 6
            echo "\t\t<div class=\"ai1ec-input-group\">
\t";
        }
        // line 8
        echo "
\t";
        // line 9
        $context["__internal_bf7f0f8f7e4a2de51486ef5546b0f365525589d92da50543f414510a76dab40b"] = $this->env->loadTemplate("form-elements/textarea.twig");
        // line 10
        echo "\t";
        ob_start();
        // line 11
        echo "\t";
        echo $context["__internal_bf7f0f8f7e4a2de51486ef5546b0f365525589d92da50543f414510a76dab40b"]->gettextarea((isset($context["id"]) ? $context["id"] : null), (isset($context["id"]) ? $context["id"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["input_args"]) ? $context["input_args"] : null));
        echo "

\t";
        // line 13
        if (array_key_exists("append", $context)) {
            // line 14
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">";
            echo twig_escape_filter($this->env, (isset($context["append"]) ? $context["append"] : null), "html", null, true);
            echo "</span>
\t\t</div>
\t";
        }
        // line 17
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 18
        echo "</div>

";
        // line 20
        if (array_key_exists("help", $context)) {
            // line 21
            echo "\t<div class=\"ai1ec-col-sm-12 ai1ec-help-block\">";
            echo (isset($context["help"]) ? $context["help"] : null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  66 => 20,  62 => 18,  59 => 17,  44 => 11,  49 => 9,  26 => 2,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 72,  145 => 68,  135 => 61,  112 => 47,  98 => 36,  90 => 31,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 27,  56 => 11,  52 => 14,  48 => 19,  40 => 14,  22 => 2,  127 => 34,  123 => 33,  119 => 51,  114 => 30,  110 => 29,  102 => 28,  96 => 27,  91 => 25,  87 => 24,  79 => 23,  73 => 26,  63 => 18,  57 => 15,  46 => 12,  29 => 5,  19 => 1,  58 => 12,  45 => 9,  37 => 5,  35 => 5,  51 => 10,  43 => 7,  41 => 10,  168 => 48,  162 => 79,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 38,  133 => 37,  128 => 57,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 43,  97 => 39,  89 => 28,  86 => 30,  81 => 29,  71 => 27,  67 => 26,  64 => 18,  60 => 22,  54 => 15,  50 => 13,  47 => 11,  24 => 2,  42 => 7,  38 => 6,  31 => 3,  28 => 2,  39 => 9,  34 => 4,  32 => 6,  27 => 3,  23 => 2,  20 => 1,  36 => 8,  33 => 10,  30 => 5,  25 => 4,);
    }
}
