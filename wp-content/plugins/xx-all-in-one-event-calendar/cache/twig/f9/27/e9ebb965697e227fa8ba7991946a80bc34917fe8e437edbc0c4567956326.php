<?php

/* pagination.twig */
class __TwigTemplate_f927e9ebb965697e227fa8ba7991946a80bc34917fe8e437edbc0c4567956326 extends Twig_Template
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
        echo "<div class=\"ai1ec-pagination ai1ec-btn-group\">
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "\t\t";
            if (twig_test_iterable((isset($context["link"]) ? $context["link"] : null))) {
                // line 4
                echo "\t\t\t<a class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "class"), "html", null, true);
                echo " ai1ec-load-view ai1ec-btn ai1ec-btn-sm
\t\t\t\tai1ec-btn-default ";
                // line 5
                if ((!$this->getAttribute((isset($context["link"]) ? $context["link"] : null), "enabled"))) {
                    echo "ai1ec-disabled";
                }
                echo "\"
\t\t\t\t";
                // line 6
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo "
\t\t\t\thref=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "href"), "html_attr");
                echo "\">
\t\t\t\t";
                // line 8
                echo $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "text");
                echo "
\t\t\t</a>
\t\t";
            } else {
                // line 11
                echo "\t\t\t";
                echo (isset($context["link"]) ? $context["link"] : null);
                echo "
\t\t";
            }
            // line 13
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  60 => 13,  54 => 11,  48 => 8,  44 => 7,  34 => 5,  29 => 4,  22 => 2,  40 => 6,  35 => 7,  32 => 6,  26 => 3,  24 => 3,  78 => 30,  75 => 28,  69 => 26,  67 => 25,  61 => 22,  56 => 20,  49 => 16,  39 => 10,  33 => 8,  31 => 7,  25 => 4,  19 => 1,);
    }
}
