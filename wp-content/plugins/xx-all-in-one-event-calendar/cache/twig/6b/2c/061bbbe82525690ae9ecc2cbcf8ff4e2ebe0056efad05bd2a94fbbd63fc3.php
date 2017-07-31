<?php

/* timely-menu-icon.twig */
class __TwigTemplate_6b2c061bbbe82525690ae9ecc2cbcf8ff4e2ebe0056efad05bd2a94fbbd63fc3 extends Twig_Template
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
        echo "<style type=\"text/css\" media=\"all\">
  @font-face {
    font-family: 'Timely Icons';
    src:url('";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["admin_theme_font_url"]) ? $context["admin_theme_font_url"] : null), "html", null, true);
        echo "timely-icons.eot');
    src:url('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["admin_theme_font_url"]) ? $context["admin_theme_font_url"] : null), "html", null, true);
        echo "timely-icons.eot?#iefix') format('embedded-opentype'),
    url('";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["admin_theme_font_url"]) ? $context["admin_theme_font_url"] : null), "html", null, true);
        echo "timely-icons.svg#Timely-Icons') format('svg'),
    url('";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["admin_theme_font_url"]) ? $context["admin_theme_font_url"] : null), "html", null, true);
        echo "timely-icons.woff') format('woff'),
    url('";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["admin_theme_font_url"]) ? $context["admin_theme_font_url"] : null), "html", null, true);
        echo "timely-icons.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
  }
  ";
        // line 12
        if ((isset($context["before_font_icons"]) ? $context["before_font_icons"] : null)) {
            // line 13
            echo "  #menu-posts-ai1ec_event > .menu-icon-post > div.wp-menu-image {
    background-image: url('";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["admin_theme_img_url"]) ? $context["admin_theme_img_url"] : null), "html", null, true);
            echo "/timely-admin-menu.png') !important;
  }
  ";
        } else {
            // line 17
            echo "  #menu-posts-ai1ec_event > .menu-icon-post > div.wp-menu-image:before {
    content:        '\\21' !important;
    display:        inline-block !important;
    font-family:    'Timely Icons' !important;
    font-style:     normal !important;
    font-weight:    normal !important;
    speak:          none !important;
    vertical-align: baseline !important;
    line-height:    16px !important;
  }
  ";
        }
        // line 28
        echo "</style>
";
    }

    public function getTemplateName()
    {
        return "timely-menu-icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 24,  92 => 18,  69 => 19,  163 => 31,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  76 => 12,  156 => 33,  141 => 30,  134 => 26,  130 => 23,  121 => 24,  106 => 21,  99 => 19,  83 => 14,  80 => 13,  95 => 19,  88 => 32,  77 => 26,  84 => 36,  78 => 33,  74 => 13,  55 => 7,  53 => 18,  68 => 14,  66 => 11,  62 => 12,  59 => 15,  44 => 5,  49 => 13,  26 => 3,  284 => 153,  271 => 143,  264 => 139,  256 => 134,  246 => 126,  237 => 123,  232 => 122,  228 => 121,  221 => 117,  214 => 113,  204 => 106,  197 => 102,  186 => 94,  179 => 90,  169 => 83,  152 => 29,  145 => 31,  135 => 61,  112 => 47,  98 => 42,  90 => 17,  70 => 25,  61 => 19,  21 => 2,  129 => 53,  115 => 48,  108 => 44,  93 => 38,  82 => 33,  75 => 17,  56 => 14,  52 => 14,  48 => 5,  40 => 8,  22 => 2,  127 => 22,  123 => 33,  119 => 51,  114 => 23,  110 => 22,  102 => 20,  96 => 27,  91 => 16,  87 => 16,  79 => 23,  73 => 24,  63 => 16,  57 => 14,  46 => 10,  29 => 4,  19 => 1,  58 => 17,  45 => 4,  37 => 6,  35 => 6,  51 => 6,  43 => 11,  41 => 8,  168 => 36,  162 => 35,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 29,  133 => 24,  128 => 57,  124 => 21,  120 => 25,  116 => 37,  113 => 36,  109 => 20,  104 => 43,  97 => 17,  89 => 28,  86 => 30,  81 => 27,  71 => 28,  67 => 10,  64 => 24,  60 => 11,  54 => 13,  50 => 14,  47 => 12,  24 => 4,  42 => 3,  38 => 3,  31 => 5,  28 => 5,  39 => 7,  34 => 7,  32 => 6,  27 => 4,  23 => 3,  20 => 1,  36 => 7,  33 => 10,  30 => 5,  25 => 4,);
    }
}
