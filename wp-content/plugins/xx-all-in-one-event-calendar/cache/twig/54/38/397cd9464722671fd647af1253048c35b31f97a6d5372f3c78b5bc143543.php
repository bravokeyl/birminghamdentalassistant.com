<?php

/* form-elements/select.twig */
class __TwigTemplate_5438397cd9464722671fd647af1253048c35b31f97a6d5372f3c78b5bc143543 extends Twig_Template
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
    }

    // line 1
    public function getselect($_id = null, $_name = "", $_attributes = array(), $_options = array())
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "name" => $_name,
            "attributes" => $_attributes,
            "options" => $_options,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            if (((isset($context["name"]) ? $context["name"] : null) == "")) {
                // line 3
                echo "\t\t";
                $context["name"] = (isset($context["id"]) ? $context["id"] : null);
                // line 4
                echo "\t";
            }
            // line 5
            echo "\t<select
\t\tname=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
\t\tid=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"
\t\tclass=\"ai1ec-form-control ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class"), "html", null, true);
            echo "\"
\t\t";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 10
                echo "\t\t\t";
                if (((isset($context["attribute"]) ? $context["attribute"] : null) != "class")) {
                    // line 11
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "\"
\t\t\t";
                }
                // line 13
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t>
\t\t";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 16
                echo "\t\t\t";
                if ($this->env->getExtension('ai1ec')->is_string((isset($context["key"]) ? $context["key"] : null))) {
                    // line 17
                    echo "\t\t\t\t<optgroup label=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\">
\t\t\t\t\t";
                    // line 18
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["option"]) ? $context["option"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                        // line 19
                        echo "\t\t\t\t\t\t<option
\t\t\t\t\t\t\tvalue=\"";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "value"), "html", null, true);
                        echo "\"
\t\t\t\t\t\t";
                        // line 21
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "args"));
                        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                            // line 22
                            echo "\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                            echo "=\"";
                            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                            echo "\"
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 24
                        echo "\t\t\t\t\t\t>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "text"), "html", null, true);
                        echo "</option>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "\t\t\t\t</optgroup>
\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t<option
\t\t\t\t\tvalue=\"";
                    // line 29
                    echo $this->env->getExtension('ai1ec')->dropdown_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value"));
                    echo "\"
\t\t\t\t";
                    // line 30
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "args"));
                    foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                        // line 31
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "\"
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "\t\t\t\t>";
                    echo $this->env->getExtension('ai1ec')->dropdown_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "text"));
                    echo "</option>
\t\t\t";
                }
                // line 35
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t</select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "form-elements/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 33,  141 => 30,  134 => 28,  130 => 26,  121 => 24,  106 => 21,  99 => 19,  83 => 15,  80 => 14,  95 => 18,  88 => 32,  77 => 26,  84 => 36,  78 => 33,  74 => 13,  55 => 8,  53 => 18,  68 => 21,  66 => 11,  62 => 18,  59 => 9,  44 => 5,  49 => 16,  26 => 3,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 72,  145 => 31,  135 => 61,  112 => 47,  98 => 42,  90 => 17,  70 => 25,  61 => 19,  21 => 1,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 27,  56 => 13,  52 => 12,  48 => 13,  40 => 8,  22 => 2,  127 => 34,  123 => 33,  119 => 51,  114 => 30,  110 => 22,  102 => 20,  96 => 27,  91 => 33,  87 => 16,  79 => 23,  73 => 24,  63 => 10,  57 => 14,  46 => 10,  29 => 4,  19 => 1,  58 => 17,  45 => 9,  37 => 6,  35 => 2,  51 => 7,  43 => 11,  41 => 4,  168 => 36,  162 => 35,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 29,  133 => 37,  128 => 57,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 43,  97 => 36,  89 => 28,  86 => 30,  81 => 27,  71 => 23,  67 => 21,  64 => 24,  60 => 18,  54 => 15,  50 => 14,  47 => 6,  24 => 2,  42 => 8,  38 => 3,  31 => 5,  28 => 2,  39 => 9,  34 => 7,  32 => 5,  27 => 4,  23 => 3,  20 => 1,  36 => 10,  33 => 10,  30 => 5,  25 => 4,);
    }
}
