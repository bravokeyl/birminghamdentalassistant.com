<?php

/* widget.twig */
class __TwigTemplate_5dd773750481354d81ed8097491f321553b77d6cdc59276d9122a7dde91c0eb3 extends Twig_Template
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
        echo (isset($context["before_widget"]) ? $context["before_widget"] : null);
        echo "

";
        // line 3
        if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
            // line 4
            echo "\t";
            echo (((isset($context["before_title"]) ? $context["before_title"] : null) . (isset($context["title"]) ? $context["title"] : null)) . (isset($context["after_title"]) ? $context["after_title"] : null));
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        echo (isset($context["widget_html"]) ? $context["widget_html"] : null);
        echo "

";
        // line 9
        echo (isset($context["after_widget"]) ? $context["after_widget"] : null);
    }

    public function getTemplateName()
    {
        return "widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  35 => 7,  32 => 6,  26 => 4,  24 => 3,  78 => 30,  75 => 28,  69 => 26,  67 => 25,  61 => 22,  56 => 20,  49 => 16,  39 => 10,  33 => 8,  31 => 7,  25 => 4,  19 => 1,);
    }
}
