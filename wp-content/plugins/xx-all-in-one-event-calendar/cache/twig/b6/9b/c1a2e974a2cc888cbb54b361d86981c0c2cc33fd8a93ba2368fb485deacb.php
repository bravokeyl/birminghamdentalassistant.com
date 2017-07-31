<?php

/* setting/categories-image.twig */
class __TwigTemplate_b69bc1a2e974a2cc888cbb54b361d86981c0c2cc33fd8a93ba2368fb485deacb extends Twig_Template
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
            echo "
\t<tr class=\"form-field\">
\t\t<th scope=\"row\" valign=\"top\">
\t\t\t<label for=\"tag-color\">
\t\t\t\t";
            // line 6
            echo (isset($context["section_name"]) ? $context["section_name"] : null);
            echo "
\t\t\t</label>
\t\t</th>
\t\t<td>

\t\t\t<img src='";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["image_src"]) ? $context["image_src"] : null), "html", null, true);
            echo "' ";
            echo twig_escape_filter($this->env, (isset($context["image_style"]) ? $context["image_style"] : null), "html", null, true);
            echo " alt='' id='ai1ec_category_imag_preview' />
\t\t\t<input type=\"hidden\" name=\"ai1ec_category_image_url\" id=\"ai1ec_category_image_url\" value=\"\">
\t\t\t<input class=\"button at-upload_image_button\" type=\"button\" id='ai1ec_category_image_uploader' value=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "\">

\t\t\t";
            // line 15
            if ((isset($context["image_src"]) ? $context["image_src"] : null)) {
                // line 16
                echo "\t\t\t<p>
\t\t\t\t<input type=\"checkbox\" style=\"width:auto;\" name=\"ai1ec_category_image_url_remove\" id=\"ai1ec_category_image_url_remove\" value=\"1\" />
\t\t\t\t<label for=\"ai1ec_category_image_url_remove\">";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["remove_label"]) ? $context["remove_label"] : null), "html", null, true);
                echo "</label>
\t\t\t</p>
\t\t\t";
            }
            // line 21
            echo "
\t\t\t<div class=\"desc-field\">
\t\t\t\t<p class=\"description\">
\t\t\t\t\t";
            // line 24
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t</td>
\t</tr>

";
        } else {
            // line 31
            echo "\t<div class=\"form-field\">
\t\t<label for=\"ai1ec_image_field_id\">
\t\t\t";
            // line 33
            echo (isset($context["section_name"]) ? $context["section_name"] : null);
            echo "
\t\t</label>

\t\t<img src='";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["image_src"]) ? $context["image_src"] : null), "html", null, true);
            echo "' ";
            echo twig_escape_filter($this->env, (isset($context["image_style"]) ? $context["image_style"] : null), "html", null, true);
            echo " alt='' id='ai1ec_category_imag_preview' />
\t\t<input type=\"hidden\" name=\"ai1ec_category_image_url\" id=\"ai1ec_category_image_url\" value=\"\">
\t\t<input class=\"button at-upload_image_button\" type=\"button\" id='ai1ec_category_image_uploader' value=\"";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "\">

\t\t<div class=\"desc-field\">
\t\t\t<p class=\"description\">
\t\t\t\t";
            // line 42
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
\t\t\t</p>
\t\t</div>
\t</div>

";
        }
    }

    public function getTemplateName()
    {
        return "setting/categories-image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 36,  78 => 33,  74 => 31,  55 => 20,  53 => 18,  68 => 21,  66 => 20,  62 => 18,  59 => 21,  44 => 14,  49 => 16,  26 => 5,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 72,  145 => 68,  135 => 61,  112 => 47,  98 => 42,  90 => 31,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 27,  56 => 13,  52 => 11,  48 => 19,  40 => 13,  22 => 2,  127 => 34,  123 => 33,  119 => 51,  114 => 30,  110 => 29,  102 => 28,  96 => 27,  91 => 38,  87 => 24,  79 => 23,  73 => 26,  63 => 18,  57 => 15,  46 => 8,  29 => 5,  19 => 1,  58 => 12,  45 => 9,  37 => 5,  35 => 11,  51 => 18,  43 => 7,  41 => 12,  168 => 48,  162 => 79,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 38,  133 => 37,  128 => 57,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 43,  97 => 39,  89 => 28,  86 => 30,  81 => 29,  71 => 27,  67 => 26,  64 => 24,  60 => 22,  54 => 15,  50 => 16,  47 => 15,  24 => 2,  42 => 13,  38 => 5,  31 => 3,  28 => 2,  39 => 9,  34 => 10,  32 => 6,  27 => 6,  23 => 3,  20 => 1,  36 => 10,  33 => 10,  30 => 5,  25 => 4,);
    }
}
