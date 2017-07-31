<?php

/* buttons.twig */
class __TwigTemplate_a93238b4edfff2b09421aaa142e63cdb68db832b987dbd8259d76df8c9157ceb extends Twig_Template
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
        echo "<div class=\"ai1ec-sas-actions ai1ec-btn-group ai1ec-clearfix\">
\t";
        // line 2
        echo (isset($context["action_buttons"]) ? $context["action_buttons"] : null);
        if ((isset($context["tickets_button"]) ? $context["tickets_button"] : null)) {
            // line 3
            echo "<a href=\"#\" target=\"_blank\" class=\"ai1ec-sas-action ai1ec-btn ai1ec-btn-primary
\t\t\t";
            // line 4
            if ((isset($context["single"]) ? $context["single"] : null)) {
                echo "ai1ec-btn-sm";
            } else {
                echo "ai1ec-btn-xs";
            }
            // line 5
            echo "\t\t\tai1ec-btn-sm ai1ec-sas-action-tickets\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket\"></i>
\t\t\t<span class=\"ai1ec-hidden-xs\">";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["text_tickets"]) ? $context["text_tickets"] : null), "html", null, true);
            echo "</span>
\t\t</a>
\t";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  38 => 7,  51 => 15,  21 => 2,  47 => 12,  41 => 11,  37 => 7,  27 => 4,  23 => 3,  66 => 14,  60 => 13,  54 => 11,  48 => 8,  44 => 10,  34 => 5,  29 => 6,  22 => 2,  40 => 6,  35 => 7,  32 => 6,  26 => 3,  24 => 3,  78 => 30,  75 => 28,  69 => 26,  67 => 25,  61 => 22,  56 => 20,  49 => 16,  39 => 10,  33 => 7,  31 => 5,  25 => 3,  19 => 1,);
    }
}
