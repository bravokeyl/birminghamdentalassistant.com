<?php

/* setting/enabled-views.twig */
class __TwigTemplate_e0be9029cc923fc647cc9fe9735ba608a9ba80e9e5a13e2eeaf05ccd663cb0ec extends Twig_Template
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
        echo "<div class=\"ai1ec-admin-view-settings ai1ec-form-group\">
\t<label class=\"ai1ec-control-label ai1ec-col-lg-5\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "</label>
\t<div class=\"ai1ec-col-lg-7\">
\t\t<table class=\"ai1ec-table ai1ec-table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\"></th>
\t\t\t\t\t<th scope=\"col\" colspan=\"2\" class=\"ai1ec-text-center\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-desktop ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["text_desktop"]) ? $context["text_desktop"] : null), "html", null, true);
        echo "
\t\t\t\t\t</th>
\t\t\t\t\t<th scope=\"col\" colspan=\"2\" class=\"ai1ec-text-center\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-mobile ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["text_mobile"]) ? $context["text_mobile"] : null), "html", null, true);
        echo "
\t\t\t\t\t</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\"></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["text_enabled"]) ? $context["text_enabled"] : null), "html", null, true);
        echo "</small></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["text_default"]) ? $context["text_default"] : null), "html", null, true);
        echo "</small></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["text_enabled"]) ? $context["text_enabled"] : null), "html", null, true);
        echo "</small></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["text_default"]) ? $context["text_default"] : null), "html", null, true);
        echo "</small></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["views"]) ? $context["views"] : null));
        foreach ($context['_seq'] as $context["view"] => $context["args"]) {
            // line 27
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "longname"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-view\" type=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"view_";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : null), "html", null, true);
            echo "_enabled\" value=\"1\"
\t\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "enabled"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-default-view\" type=\"radio\"
\t\t\t\t\t\t\t\tname=\"default_calendar_view\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : null), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "default"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-view\" type=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"view_";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : null), "html", null, true);
            echo "_enabled_mobile\" value=\"1\"
\t\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "enabled_mobile"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-default-view\" type=\"radio\"
\t\t\t\t\t\t\t\tname=\"default_calendar_view_mobile\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : null), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "default_mobile"), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['view'], $context['args'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/enabled-views.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 29,  56 => 21,  52 => 20,  48 => 19,  40 => 14,  22 => 2,  127 => 34,  123 => 33,  119 => 49,  114 => 30,  110 => 29,  102 => 28,  96 => 27,  91 => 25,  87 => 24,  79 => 23,  73 => 22,  63 => 18,  57 => 15,  46 => 12,  29 => 7,  19 => 1,  58 => 12,  45 => 9,  37 => 9,  35 => 5,  51 => 14,  43 => 9,  41 => 10,  168 => 48,  162 => 51,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 38,  133 => 37,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 43,  97 => 39,  89 => 28,  86 => 34,  81 => 24,  71 => 27,  67 => 26,  64 => 18,  60 => 22,  54 => 14,  50 => 12,  47 => 12,  24 => 5,  42 => 7,  38 => 6,  31 => 4,  28 => 3,  39 => 5,  34 => 4,  32 => 4,  27 => 3,  23 => 2,  20 => 1,  36 => 6,  33 => 10,  30 => 5,  25 => 2,);
    }
}
