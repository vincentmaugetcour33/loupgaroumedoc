<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9826b5332bdf78249713176fc7f94136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  87 => 32,  53 => 15,  89 => 30,  75 => 24,  63 => 21,  50 => 18,  102 => 33,  92 => 28,  85 => 23,  78 => 18,  65 => 11,  27 => 7,  60 => 18,  58 => 18,  40 => 12,  97 => 5,  88 => 44,  84 => 27,  69 => 33,  94 => 5,  82 => 42,  67 => 22,  52 => 23,  20 => 1,  96 => 30,  79 => 26,  57 => 20,  54 => 19,  37 => 7,  381 => 154,  378 => 153,  373 => 14,  359 => 12,  355 => 10,  349 => 8,  346 => 7,  329 => 143,  327 => 142,  322 => 141,  312 => 136,  309 => 135,  294 => 133,  286 => 130,  282 => 129,  279 => 128,  273 => 126,  271 => 125,  268 => 124,  251 => 123,  243 => 120,  238 => 117,  236 => 116,  233 => 115,  227 => 111,  223 => 109,  207 => 98,  203 => 97,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  108 => 47,  105 => 46,  101 => 45,  95 => 34,  90 => 29,  86 => 43,  83 => 31,  81 => 35,  76 => 27,  70 => 24,  68 => 12,  61 => 23,  59 => 26,  56 => 16,  36 => 10,  33 => 9,  71 => 23,  64 => 21,  55 => 38,  48 => 16,  30 => 6,  39 => 10,  29 => 3,  26 => 6,  51 => 37,  44 => 11,  42 => 8,  35 => 5,  31 => 8,  43 => 6,  41 => 14,  25 => 3,  24 => 2,  46 => 13,  38 => 6,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
