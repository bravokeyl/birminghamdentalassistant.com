<?php

/* theme-options/page.twig */
class __TwigTemplate_93258ffeefdb7cc88b2ceebeb99c01d6127558f2032d79cdd2c8f438717cc6a9 extends Twig_Template
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
        echo "<div class=\"post-box-container left-side timely\">
\t";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "screen"), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "action"), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "object")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "theme-options/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 48,  162 => 51,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 42,  133 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 32,  97 => 31,  89 => 28,  86 => 27,  81 => 24,  71 => 20,  67 => 19,  64 => 18,  60 => 17,  54 => 14,  50 => 12,  47 => 11,  24 => 2,  42 => 10,  38 => 8,  31 => 3,  28 => 2,  39 => 5,  34 => 4,  32 => 5,  27 => 3,  23 => 2,  20 => 1,  36 => 5,  33 => 4,  30 => 5,  25 => 2,);
    }
}
