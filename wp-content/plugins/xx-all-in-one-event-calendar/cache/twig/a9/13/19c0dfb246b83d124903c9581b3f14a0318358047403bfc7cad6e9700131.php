<?php

/* theme-options/font.twig */
class __TwigTemplate_a91319c0dfb246b83d124903c9581b3f14a0318358047403bfc7cad6e9700131 extends Twig_Template
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
        // line 2
        $context["__internal_50ce7d6577757e95918a40fa127a0291f69ba1286a82272638f9c597efe39495"] = $this->env->loadTemplate("form-elements/select.twig");
        // line 3
        $context["__internal_916db0a071ebc29aa9aa0bc41995a5f77571aac86d7e0490ced36d911cba0887"] = $this->env->loadTemplate("form-elements/input.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_variable($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"ai1ec-col-sm-6 ai1ec-col-xs-9\">
    ";
        // line 6
        echo $context["__internal_50ce7d6577757e95918a40fa127a0291f69ba1286a82272638f9c597efe39495"]->getselect($this->getAttribute((isset($context["select"]) ? $context["select"] : null), "id"), $this->getAttribute((isset($context["select"]) ? $context["select"] : null), "id"), $this->getAttribute((isset($context["select"]) ? $context["select"] : null), "args"), $this->getAttribute((isset($context["select"]) ? $context["select"] : null), "options"));
        echo "
    ";
        // line 7
        echo $context["__internal_916db0a071ebc29aa9aa0bc41995a5f77571aac86d7e0490ced36d911cba0887"]->getinput($this->getAttribute((isset($context["input"]) ? $context["input"] : null), "id"), $this->getAttribute((isset($context["input"]) ? $context["input"] : null), "id"), $this->getAttribute((isset($context["input"]) ? $context["input"] : null), "value"), "text", $this->getAttribute((isset($context["input"]) ? $context["input"] : null), "args"));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "theme-options/font.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  51 => 8,  43 => 9,  41 => 8,  168 => 48,  162 => 51,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 42,  133 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 32,  97 => 31,  89 => 28,  86 => 27,  81 => 24,  71 => 20,  67 => 19,  64 => 18,  60 => 17,  54 => 14,  50 => 12,  47 => 12,  24 => 2,  42 => 7,  38 => 6,  31 => 3,  28 => 2,  39 => 5,  34 => 4,  32 => 4,  27 => 3,  23 => 2,  20 => 1,  36 => 6,  33 => 4,  30 => 5,  25 => 2,);
    }
}
