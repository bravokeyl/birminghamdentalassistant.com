<?php

/* event-excerpt.twig */
class __TwigTemplate_33e16cf8aa9822e97c186ffb4cb4ca897e21f410bfd489328566d22b282224cc extends Twig_Template
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
        echo "<div class=\"timely ai1ec-excerpt\">
\t<div class=\"ai1ec-time\">
\t\t<strong>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["text_when"]) ? $context["text_when"] : null), "html", null, true);
        echo "</strong>
\t\t";
        // line 4
        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null));
        echo "
\t</div>
\t";
        // line 6
        if ((!twig_test_empty((isset($context["location"]) ? $context["location"] : null)))) {
            // line 7
            echo "\t\t<div class=\"ai1ec-location\">
\t\t\t<strong>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["text_where"]) ? $context["text_where"] : null), "html", null, true);
            echo "</strong>
\t\t\t";
            // line 9
            echo (isset($context["location"]) ? $context["location"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "event-excerpt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  41 => 9,  37 => 8,  27 => 4,  23 => 3,  66 => 14,  60 => 13,  54 => 11,  48 => 8,  44 => 7,  34 => 7,  29 => 4,  22 => 2,  40 => 6,  35 => 7,  32 => 6,  26 => 3,  24 => 3,  78 => 30,  75 => 28,  69 => 26,  67 => 25,  61 => 22,  56 => 20,  49 => 16,  39 => 10,  33 => 8,  31 => 7,  25 => 4,  19 => 1,);
    }
}
