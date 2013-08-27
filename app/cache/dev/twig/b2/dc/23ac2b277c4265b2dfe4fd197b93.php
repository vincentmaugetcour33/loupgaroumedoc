<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b2dc23ac2b277c4265b2dfe4fd197b93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Group:edit_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  100 => 21,  58 => 17,  76 => 27,  53 => 19,  34 => 6,  250 => 99,  248 => 98,  233 => 92,  215 => 86,  212 => 85,  206 => 83,  197 => 80,  184 => 74,  137 => 47,  223 => 89,  205 => 15,  194 => 12,  191 => 11,  181 => 7,  178 => 6,  172 => 5,  161 => 121,  150 => 102,  134 => 88,  23 => 1,  77 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 86,  214 => 18,  177 => 65,  169 => 66,  140 => 55,  132 => 86,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 97,  240 => 86,  238 => 85,  235 => 74,  230 => 91,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 82,  179 => 72,  159 => 61,  143 => 50,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 39,  63 => 19,  59 => 14,  38 => 19,  94 => 28,  89 => 20,  85 => 24,  75 => 17,  68 => 18,  56 => 16,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 20,  46 => 13,  27 => 5,  44 => 12,  31 => 4,  28 => 3,  201 => 81,  196 => 13,  183 => 8,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 39,  105 => 40,  91 => 27,  62 => 13,  49 => 20,  24 => 4,  25 => 3,  19 => 2,  79 => 18,  72 => 26,  69 => 21,  47 => 7,  40 => 11,  37 => 10,  22 => 3,  246 => 90,  157 => 59,  145 => 46,  139 => 45,  131 => 45,  123 => 42,  120 => 40,  115 => 43,  111 => 70,  108 => 36,  101 => 32,  98 => 31,  96 => 19,  83 => 23,  74 => 16,  66 => 32,  55 => 11,  52 => 15,  50 => 14,  43 => 11,  41 => 11,  35 => 10,  32 => 8,  29 => 4,  209 => 17,  203 => 78,  199 => 67,  193 => 73,  189 => 77,  187 => 84,  182 => 73,  176 => 64,  173 => 68,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 52,  144 => 49,  141 => 49,  133 => 55,  130 => 41,  125 => 43,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 61,  95 => 60,  92 => 17,  86 => 53,  82 => 22,  80 => 19,  73 => 15,  64 => 17,  60 => 19,  57 => 17,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  39 => 8,  36 => 6,  33 => 8,  30 => 7,);
    }
}
