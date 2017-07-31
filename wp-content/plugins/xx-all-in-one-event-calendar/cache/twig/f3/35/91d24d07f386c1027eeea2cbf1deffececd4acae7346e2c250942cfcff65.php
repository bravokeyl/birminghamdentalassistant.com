<?php

/* form-elements/input.twig */
class __TwigTemplate_f33591d24d07f386c1027eeea2cbf1deffececd4acae7346e2c250942cfcff65 extends Twig_Template
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
        // line 19
        echo "
";
    }

    // line 1
    public function getinput($_id = null, $_name = "", $_value = "", $_type = "text", $_attributes = array())
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "name" => $_name,
            "value" => $_value,
            "type" => $_type,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            if (((isset($context["name"]) ? $context["name"] : null) == "")) {
                // line 3
                echo "\t\t";
                $context["id"] = (isset($context["name"]) ? $context["name"] : null);
                // line 4
                echo "\t";
            }
            // line 5
            echo "\t<input
\t\ttype=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\"
\t\tname=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
\t\tvalue=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
\t\tid=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"
\t\tclass=\"";
            // line 10
            if (!twig_in_filter((isset($context["type"]) ? $context["type"] : null), array(0 => "radio", 1 => "checkbox"))) {
                echo "ai1ec-form-control";
            }
            // line 11
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class"), "html", null, true);
            echo "\"
\t\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 13
                echo "\t\t\t";
                if (((isset($context["attribute"]) ? $context["attribute"] : null) != "class")) {
                    // line 14
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "\"
\t\t\t";
                }
                // line 16
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t/>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getbutton($_id = null, $_name = "", $_value = "", $_type = "text", $_attributes = array())
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "name" => $_name,
            "value" => $_value,
            "type" => $_type,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "\t";
            if (((isset($context["name"]) ? $context["name"] : null) == "")) {
                // line 22
                echo "\t\t";
                $context["id"] = (isset($context["name"]) ? $context["name"] : null);
                // line 23
                echo "\t";
            }
            // line 24
            echo "\t<button
\t\ttype=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\"
\t\tname=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
\t\tid=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"
\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 29
                echo "\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t>";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "</button>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "form-elements/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 31,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  76 => 12,  156 => 33,  141 => 30,  134 => 28,  130 => 23,  121 => 24,  106 => 21,  99 => 19,  83 => 14,  80 => 13,  95 => 18,  88 => 32,  77 => 26,  84 => 36,  78 => 33,  74 => 13,  55 => 7,  53 => 18,  68 => 21,  66 => 11,  62 => 18,  59 => 8,  44 => 5,  49 => 16,  26 => 3,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 29,  145 => 31,  135 => 61,  112 => 47,  98 => 42,  90 => 17,  70 => 25,  61 => 19,  21 => 1,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 27,  56 => 13,  52 => 12,  48 => 5,  40 => 8,  22 => 2,  127 => 22,  123 => 33,  119 => 51,  114 => 30,  110 => 22,  102 => 20,  96 => 27,  91 => 16,  87 => 16,  79 => 23,  73 => 24,  63 => 9,  57 => 14,  46 => 10,  29 => 4,  19 => 19,  58 => 17,  45 => 4,  37 => 6,  35 => 2,  51 => 6,  43 => 11,  41 => 4,  168 => 36,  162 => 35,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 29,  133 => 24,  128 => 57,  124 => 21,  120 => 38,  116 => 37,  113 => 36,  109 => 20,  104 => 43,  97 => 17,  89 => 28,  86 => 30,  81 => 27,  71 => 11,  67 => 10,  64 => 24,  60 => 18,  54 => 15,  50 => 14,  47 => 6,  24 => 1,  42 => 3,  38 => 3,  31 => 5,  28 => 2,  39 => 2,  34 => 7,  32 => 5,  27 => 4,  23 => 3,  20 => 1,  36 => 10,  33 => 10,  30 => 5,  25 => 4,);
    }
}
