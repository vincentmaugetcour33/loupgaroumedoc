<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4c32e1a0f1f8d128fd4c660f782961d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => $this->getContext($context, "token"))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => $this->getContext($context, "token"))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  100 => 39,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  380 => 160,  373 => 156,  361 => 146,  342 => 137,  338 => 135,  329 => 131,  325 => 129,  315 => 125,  303 => 122,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  200 => 72,  197 => 71,  185 => 66,  181 => 65,  178 => 66,  165 => 60,  153 => 56,  150 => 55,  134 => 54,  113 => 48,  53 => 12,  34 => 15,  84 => 24,  20 => 1,  118 => 49,  77 => 25,  58 => 28,  110 => 46,  352 => 151,  349 => 150,  330 => 12,  326 => 10,  320 => 127,  317 => 7,  300 => 121,  293 => 138,  280 => 132,  265 => 127,  262 => 98,  256 => 96,  251 => 122,  239 => 118,  232 => 114,  194 => 70,  191 => 67,  188 => 88,  172 => 64,  160 => 72,  148 => 68,  146 => 67,  114 => 50,  90 => 27,  81 => 23,  418 => 222,  394 => 168,  358 => 188,  354 => 187,  351 => 141,  348 => 140,  344 => 14,  335 => 134,  323 => 128,  321 => 185,  310 => 178,  292 => 161,  290 => 159,  234 => 115,  223 => 109,  215 => 98,  207 => 75,  202 => 96,  161 => 63,  155 => 64,  152 => 63,  124 => 55,  97 => 40,  70 => 19,  76 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 221,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 189,  360 => 109,  355 => 143,  341 => 159,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 133,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 121,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 80,  169 => 76,  140 => 58,  132 => 44,  128 => 43,  107 => 36,  61 => 17,  273 => 130,  269 => 94,  254 => 123,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 75,  159 => 61,  143 => 46,  135 => 53,  119 => 40,  102 => 40,  71 => 19,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 5,  89 => 38,  85 => 32,  75 => 33,  68 => 5,  56 => 16,  87 => 34,  21 => 2,  26 => 12,  93 => 39,  88 => 32,  78 => 28,  46 => 13,  27 => 3,  44 => 11,  31 => 5,  28 => 13,  201 => 92,  196 => 90,  183 => 76,  171 => 61,  166 => 75,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 60,  136 => 56,  121 => 50,  117 => 44,  105 => 34,  91 => 33,  62 => 23,  49 => 14,  24 => 8,  25 => 3,  19 => 1,  79 => 26,  72 => 24,  69 => 33,  47 => 14,  40 => 12,  37 => 7,  22 => 7,  246 => 93,  157 => 56,  145 => 46,  139 => 65,  131 => 52,  123 => 42,  120 => 53,  115 => 49,  111 => 47,  108 => 47,  101 => 45,  98 => 31,  96 => 37,  83 => 33,  74 => 30,  66 => 32,  55 => 13,  52 => 12,  50 => 14,  43 => 12,  41 => 14,  35 => 6,  32 => 5,  29 => 4,  209 => 94,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 74,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 61,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 42,  116 => 39,  112 => 42,  109 => 34,  106 => 36,  103 => 21,  99 => 31,  95 => 42,  92 => 33,  86 => 43,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 27,  57 => 25,  54 => 24,  51 => 19,  48 => 13,  45 => 9,  42 => 21,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
