<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_78793559f8be4f64f6608ab2fc83a747 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 39,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  361 => 146,  351 => 141,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  315 => 125,  300 => 121,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  216 => 79,  213 => 78,  200 => 72,  185 => 66,  181 => 65,  178 => 66,  165 => 60,  153 => 56,  150 => 55,  134 => 54,  113 => 48,  81 => 23,  70 => 19,  114 => 42,  34 => 15,  118 => 49,  77 => 32,  323 => 128,  320 => 127,  303 => 122,  301 => 127,  296 => 126,  286 => 112,  265 => 114,  259 => 112,  257 => 111,  250 => 109,  242 => 106,  237 => 103,  232 => 101,  226 => 84,  222 => 95,  205 => 84,  197 => 71,  194 => 70,  191 => 67,  180 => 68,  175 => 65,  172 => 64,  167 => 62,  127 => 43,  84 => 24,  404 => 208,  380 => 160,  348 => 140,  344 => 174,  340 => 173,  334 => 171,  330 => 146,  327 => 145,  321 => 5,  307 => 171,  297 => 164,  276 => 118,  234 => 112,  223 => 102,  215 => 98,  207 => 75,  202 => 90,  161 => 63,  155 => 64,  152 => 63,  124 => 44,  104 => 33,  90 => 27,  58 => 17,  53 => 12,  76 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 207,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 172,  322 => 101,  314 => 99,  312 => 124,  309 => 213,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 120,  278 => 106,  268 => 115,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 63,  140 => 58,  132 => 51,  128 => 49,  107 => 23,  61 => 18,  273 => 96,  269 => 94,  254 => 110,  243 => 88,  240 => 86,  238 => 85,  235 => 102,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 75,  159 => 61,  143 => 56,  135 => 46,  119 => 40,  102 => 40,  71 => 19,  67 => 24,  63 => 29,  59 => 14,  38 => 6,  94 => 35,  89 => 29,  85 => 25,  75 => 27,  68 => 29,  56 => 16,  87 => 34,  21 => 2,  26 => 12,  93 => 28,  88 => 34,  78 => 27,  46 => 13,  27 => 3,  44 => 11,  31 => 5,  28 => 13,  201 => 92,  196 => 90,  183 => 76,  171 => 61,  166 => 71,  163 => 60,  158 => 62,  156 => 58,  151 => 59,  142 => 53,  138 => 60,  136 => 56,  121 => 50,  117 => 38,  105 => 34,  91 => 27,  62 => 22,  49 => 14,  24 => 8,  25 => 3,  19 => 1,  79 => 26,  72 => 30,  69 => 21,  47 => 14,  40 => 12,  37 => 6,  22 => 7,  246 => 93,  157 => 58,  145 => 46,  139 => 45,  131 => 52,  123 => 42,  120 => 43,  115 => 43,  111 => 47,  108 => 34,  101 => 32,  98 => 30,  96 => 37,  83 => 33,  74 => 15,  66 => 30,  55 => 16,  52 => 15,  50 => 14,  43 => 12,  41 => 21,  35 => 6,  32 => 5,  29 => 7,  209 => 94,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 55,  147 => 54,  144 => 61,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 42,  109 => 34,  106 => 43,  103 => 21,  99 => 31,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 32,  73 => 20,  64 => 23,  60 => 27,  57 => 28,  54 => 19,  51 => 19,  48 => 13,  45 => 10,  42 => 11,  39 => 12,  36 => 7,  33 => 4,  30 => 3,);
    }
}
