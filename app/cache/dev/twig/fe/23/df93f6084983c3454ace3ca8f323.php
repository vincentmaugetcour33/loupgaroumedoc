<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_fe23df93f6084983c3454ace3ca8f323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute($this->getContext($context, "collector"), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 126,  357 => 123,  353 => 121,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  288 => 101,  274 => 97,  263 => 95,  255 => 93,  231 => 83,  212 => 78,  190 => 76,  174 => 65,  104 => 32,  175 => 65,  100 => 39,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  380 => 160,  373 => 156,  361 => 146,  342 => 137,  338 => 135,  329 => 131,  325 => 129,  315 => 110,  303 => 106,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  200 => 72,  197 => 71,  185 => 74,  181 => 65,  178 => 66,  165 => 60,  153 => 56,  150 => 55,  134 => 54,  113 => 48,  53 => 12,  34 => 5,  84 => 24,  20 => 1,  118 => 49,  77 => 25,  58 => 14,  110 => 46,  352 => 151,  349 => 150,  330 => 12,  326 => 10,  320 => 127,  317 => 7,  300 => 105,  293 => 138,  280 => 132,  265 => 96,  262 => 98,  256 => 96,  251 => 122,  239 => 118,  232 => 114,  194 => 70,  191 => 67,  188 => 88,  172 => 64,  160 => 72,  148 => 68,  146 => 67,  114 => 50,  90 => 27,  81 => 23,  418 => 222,  394 => 168,  358 => 188,  354 => 187,  351 => 120,  348 => 140,  344 => 119,  335 => 134,  323 => 128,  321 => 112,  310 => 178,  292 => 161,  290 => 159,  234 => 115,  223 => 109,  215 => 98,  207 => 75,  202 => 77,  161 => 63,  155 => 64,  152 => 63,  124 => 55,  97 => 40,  70 => 19,  76 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 221,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 189,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 121,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 80,  169 => 76,  140 => 58,  132 => 44,  128 => 43,  107 => 36,  61 => 15,  273 => 130,  269 => 94,  254 => 123,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 107,  227 => 81,  224 => 81,  221 => 77,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 75,  159 => 61,  143 => 51,  135 => 53,  119 => 40,  102 => 40,  71 => 19,  67 => 20,  63 => 18,  59 => 16,  38 => 7,  94 => 5,  89 => 38,  85 => 24,  75 => 19,  68 => 5,  56 => 16,  87 => 34,  21 => 2,  26 => 12,  93 => 39,  88 => 25,  78 => 28,  46 => 10,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 76,  171 => 61,  166 => 75,  163 => 62,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 60,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 23,  49 => 11,  24 => 8,  25 => 3,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 12,  37 => 7,  22 => 7,  246 => 93,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 53,  115 => 49,  111 => 47,  108 => 47,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 30,  66 => 32,  55 => 13,  52 => 12,  50 => 14,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 4,  209 => 94,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 75,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 74,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 61,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 36,  103 => 21,  99 => 31,  95 => 42,  92 => 27,  86 => 43,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 27,  57 => 25,  54 => 24,  51 => 13,  48 => 13,  45 => 9,  42 => 21,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
