<?php

/* captcha/nocaptcha/challenge.twig */
class __TwigTemplate_c7b4ce46e9ae5c124b3dbcfdc4840954da6e06763de6bef42553c2fec4a6f949 extends Twig_Template
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
        ob_start();
        // line 2
        echo "<div class=\"ai1ec-captcha ai1ec-nocaptcha\" data-provider=\"nocaptcha\"
     data-captcha-key=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["nocaptcha_key"]) ? $context["nocaptcha_key"] : null), "html_attr");
        echo "\">
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "captcha/nocaptcha/challenge.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  21 => 2,  47 => 12,  41 => 11,  37 => 7,  27 => 4,  23 => 3,  66 => 14,  60 => 13,  54 => 11,  48 => 8,  44 => 11,  34 => 7,  29 => 4,  22 => 2,  40 => 6,  35 => 7,  32 => 6,  26 => 5,  24 => 3,  78 => 30,  75 => 28,  69 => 26,  67 => 25,  61 => 22,  56 => 20,  49 => 16,  39 => 10,  33 => 9,  31 => 5,  25 => 4,  19 => 1,);
    }
}
