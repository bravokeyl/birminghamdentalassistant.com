<?php

/* captcha/recaptcha/challenge.twig */
class __TwigTemplate_0aaa4ba5781b15aad143ead2d0ddb31cf05f6ab74784b9253fe937041083cb46 extends Twig_Template
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
        echo "<div class=\"ai1ec-captcha ai1ec-recaptcha\" data-provider=\"recaptcha\"
     data-placeholder=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["verification_words"]) ? $context["verification_words"] : null), "html_attr");
        echo "\"
     data-captcha-key=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["recaptcha_key"]) ? $context["recaptcha_key"] : null), "html_attr");
        echo "\">
\t<div class=\"ai1ec-initializing-message\">
\t\t";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["loading_recaptcha"]) ? $context["loading_recaptcha"] : null), "html", null, true);
        echo "
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "captcha/recaptcha/challenge.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  21 => 2,  47 => 12,  41 => 11,  37 => 7,  27 => 4,  23 => 3,  66 => 14,  60 => 13,  54 => 11,  48 => 8,  44 => 11,  34 => 7,  29 => 4,  22 => 2,  40 => 6,  35 => 7,  32 => 6,  26 => 3,  24 => 3,  78 => 30,  75 => 28,  69 => 26,  67 => 25,  61 => 22,  56 => 20,  49 => 16,  39 => 10,  33 => 9,  31 => 5,  25 => 4,  19 => 1,);
    }
}
