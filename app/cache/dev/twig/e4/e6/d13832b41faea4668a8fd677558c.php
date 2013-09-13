<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_e4e6d13832b41faea4668a8fd677558c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Web Configurator Bundle";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  112 => 39,  110 => 38,  107 => 37,  74 => 22,  72 => 21,  49 => 12,  34 => 4,  113 => 40,  104 => 37,  100 => 36,  91 => 34,  77 => 25,  73 => 23,  62 => 16,  47 => 9,  45 => 11,  98 => 34,  87 => 33,  53 => 11,  89 => 30,  75 => 24,  63 => 21,  50 => 10,  102 => 33,  92 => 31,  85 => 23,  78 => 24,  65 => 17,  27 => 7,  60 => 20,  58 => 13,  40 => 11,  97 => 5,  88 => 30,  84 => 27,  69 => 33,  94 => 5,  82 => 26,  67 => 18,  52 => 23,  20 => 1,  96 => 35,  79 => 26,  57 => 19,  54 => 19,  37 => 7,  381 => 154,  378 => 153,  373 => 14,  359 => 12,  355 => 10,  349 => 8,  346 => 7,  329 => 143,  327 => 142,  322 => 141,  312 => 136,  309 => 135,  294 => 133,  286 => 130,  282 => 129,  279 => 128,  273 => 126,  271 => 125,  268 => 124,  251 => 123,  243 => 120,  238 => 117,  236 => 116,  233 => 115,  227 => 111,  223 => 109,  207 => 98,  203 => 97,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  108 => 47,  105 => 46,  101 => 33,  95 => 34,  90 => 29,  86 => 43,  83 => 31,  81 => 35,  76 => 27,  70 => 24,  68 => 12,  61 => 23,  59 => 26,  56 => 16,  36 => 9,  33 => 9,  71 => 23,  64 => 11,  55 => 12,  48 => 16,  30 => 7,  39 => 10,  29 => 3,  26 => 6,  51 => 37,  44 => 11,  42 => 8,  35 => 5,  31 => 3,  43 => 6,  41 => 7,  25 => 3,  24 => 2,  46 => 13,  38 => 7,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
