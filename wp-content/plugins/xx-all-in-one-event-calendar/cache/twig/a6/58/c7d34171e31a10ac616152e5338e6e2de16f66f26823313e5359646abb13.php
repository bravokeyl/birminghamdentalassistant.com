<?php

/* event-single-full.twig */
class __TwigTemplate_a658c7d34171e31a10ac616152e5338e6e2de16f66f26823313e5359646abb13 extends Twig_Template
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
        echo "<article>
\t<header>
\t\t<h1>";
        // line 3
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h1>
\t</header>
\t<div class=\"entry-content\">
\t\t";
        // line 6
        echo (isset($context["event_details"]) ? $context["event_details"] : null);
        echo "
\t\t";
        // line 7
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
\t</div>
\t";
        // line 9
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "event-single-full.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  51 => 15,  21 => 2,  47 => 12,  41 => 11,  37 => 7,  27 => 4,  23 => 3,  66 => 14,  60 => 13,  54 => 11,  48 => 8,  44 => 11,  34 => 7,  29 => 6,  22 => 2,  40 => 6,  35 => 7,  32 => 6,  26 => 3,  24 => 3,  78 => 30,  75 => 28,  69 => 26,  67 => 25,  61 => 22,  56 => 20,  49 => 16,  39 => 10,  33 => 7,  31 => 5,  25 => 4,  19 => 1,);
    }
}
