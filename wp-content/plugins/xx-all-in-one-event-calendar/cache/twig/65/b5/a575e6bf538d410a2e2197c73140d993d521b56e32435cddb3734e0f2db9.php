<?php

/* theme-options/color-picker.twig */
class __TwigTemplate_65b5a575e6bf538d410a2e2197c73140d993d521b56e32435cddb3734e0f2db9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("theme-options/base_option.twig");

        $this->blocks = array(
            'variable' => array($this, 'block_variable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "theme-options/base_option.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_variable($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "<div class=\"ai1ec-col-sm-6 ai1ec-col-xs-9\">
  <div class=\"ai1ec-input-group color colorpickers\"
    data-color=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"
    data-color-format=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : null), "html", null, true);
        echo "\">
  \t<input type=\"text\" id=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"ai1ec-form-control\"
      ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["readonly"]) ? $context["readonly"] : null), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\">
  \t<span class=\"ai1ec-input-group-addon\">
      <i style=\"background-color: ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"></i>
    </span>
  </div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "theme-options/color-picker.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  45 => 9,  37 => 7,  35 => 5,  51 => 10,  43 => 9,  41 => 8,  168 => 48,  162 => 51,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 42,  133 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 32,  97 => 31,  89 => 28,  86 => 27,  81 => 24,  71 => 20,  67 => 19,  64 => 18,  60 => 17,  54 => 14,  50 => 12,  47 => 12,  24 => 2,  42 => 7,  38 => 6,  31 => 4,  28 => 3,  39 => 5,  34 => 4,  32 => 4,  27 => 3,  23 => 2,  20 => 1,  36 => 6,  33 => 5,  30 => 5,  25 => 2,);
    }
}
