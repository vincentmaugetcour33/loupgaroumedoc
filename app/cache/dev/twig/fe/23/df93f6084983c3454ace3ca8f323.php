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
        return array (  363 => 126,  357 => 123,  353 => 121,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  288 => 101,  274 => 97,  265 => 96,  263 => 95,  255 => 93,  212 => 78,  202 => 77,  104 => 32,  175 => 65,  161 => 63,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  303 => 106,  289 => 113,  286 => 112,  270 => 102,  262 => 98,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  191 => 67,  185 => 74,  181 => 65,  178 => 66,  172 => 64,  165 => 60,  153 => 56,  113 => 48,  84 => 24,  70 => 19,  100 => 39,  77 => 25,  53 => 12,  34 => 5,  90 => 27,  302 => 128,  300 => 105,  295 => 126,  282 => 120,  267 => 101,  256 => 96,  249 => 109,  236 => 103,  234 => 102,  231 => 83,  225 => 97,  190 => 76,  174 => 65,  150 => 55,  148 => 55,  134 => 54,  110 => 35,  97 => 30,  293 => 144,  290 => 143,  284 => 18,  279 => 17,  275 => 105,  271 => 14,  266 => 13,  261 => 11,  253 => 110,  251 => 7,  248 => 94,  242 => 5,  215 => 162,  194 => 70,  152 => 112,  146 => 108,  126 => 43,  118 => 49,  81 => 23,  58 => 14,  23 => 1,  76 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 121,  283 => 100,  278 => 98,  268 => 85,  264 => 114,  258 => 94,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 34,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 81,  224 => 81,  221 => 95,  219 => 76,  217 => 75,  208 => 68,  204 => 84,  179 => 68,  159 => 61,  143 => 51,  135 => 53,  119 => 40,  102 => 40,  71 => 17,  67 => 20,  63 => 18,  59 => 16,  38 => 7,  94 => 28,  89 => 20,  85 => 24,  75 => 19,  68 => 24,  56 => 16,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 25,  78 => 20,  46 => 10,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  201 => 92,  196 => 78,  183 => 82,  171 => 64,  166 => 62,  163 => 62,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 54,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 13,  49 => 11,  24 => 8,  25 => 3,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 10,  37 => 10,  22 => 7,  246 => 93,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 40,  115 => 43,  111 => 47,  108 => 36,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 14,  66 => 17,  55 => 13,  52 => 12,  50 => 14,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 77,  189 => 71,  187 => 75,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 36,  103 => 33,  99 => 31,  95 => 52,  92 => 27,  86 => 28,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 13,  57 => 20,  54 => 9,  51 => 13,  48 => 7,  45 => 9,  42 => 15,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
