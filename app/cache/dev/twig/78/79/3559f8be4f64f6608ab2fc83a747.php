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
        return array (  175 => 65,  100 => 39,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  338 => 135,  335 => 134,  325 => 129,  323 => 128,  315 => 125,  303 => 122,  289 => 113,  286 => 112,  270 => 102,  262 => 98,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 67,  181 => 65,  178 => 66,  172 => 64,  153 => 56,  113 => 48,  84 => 24,  70 => 19,  124 => 44,  114 => 42,  65 => 30,  77 => 32,  53 => 12,  34 => 15,  90 => 27,  302 => 128,  300 => 121,  295 => 126,  282 => 120,  275 => 105,  267 => 101,  253 => 110,  249 => 109,  236 => 103,  234 => 102,  231 => 101,  225 => 97,  190 => 76,  174 => 65,  150 => 55,  148 => 55,  134 => 54,  126 => 43,  118 => 49,  110 => 35,  97 => 30,  371 => 148,  357 => 17,  353 => 15,  349 => 14,  344 => 13,  342 => 137,  339 => 11,  331 => 8,  329 => 131,  326 => 6,  320 => 127,  277 => 166,  256 => 96,  212 => 111,  185 => 66,  180 => 93,  165 => 60,  161 => 63,  81 => 23,  58 => 17,  23 => 1,  76 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 147,  365 => 111,  362 => 18,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 121,  283 => 88,  278 => 106,  268 => 85,  264 => 114,  258 => 112,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 34,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 120,  221 => 95,  219 => 76,  217 => 75,  208 => 110,  204 => 84,  179 => 68,  159 => 61,  143 => 56,  135 => 46,  119 => 40,  102 => 40,  71 => 25,  67 => 24,  63 => 29,  59 => 14,  38 => 6,  94 => 17,  89 => 20,  85 => 24,  75 => 15,  68 => 24,  56 => 16,  87 => 34,  21 => 2,  26 => 12,  93 => 28,  88 => 34,  78 => 20,  46 => 13,  27 => 3,  44 => 7,  31 => 5,  28 => 13,  201 => 105,  196 => 78,  183 => 82,  171 => 64,  166 => 62,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 50,  117 => 44,  105 => 34,  91 => 27,  62 => 13,  49 => 14,  24 => 8,  25 => 3,  19 => 1,  79 => 26,  72 => 38,  69 => 31,  47 => 14,  40 => 12,  37 => 10,  22 => 7,  246 => 93,  157 => 78,  145 => 46,  139 => 68,  131 => 52,  123 => 42,  120 => 43,  115 => 43,  111 => 47,  108 => 36,  101 => 53,  98 => 19,  96 => 37,  83 => 33,  74 => 14,  66 => 30,  55 => 16,  52 => 15,  50 => 28,  43 => 12,  41 => 21,  35 => 6,  32 => 5,  29 => 7,  209 => 82,  203 => 73,  199 => 67,  193 => 77,  189 => 71,  187 => 97,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 67,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 42,  109 => 58,  106 => 36,  103 => 33,  99 => 31,  95 => 28,  92 => 28,  86 => 28,  82 => 22,  80 => 32,  73 => 20,  64 => 23,  60 => 27,  57 => 20,  54 => 21,  51 => 19,  48 => 13,  45 => 10,  42 => 11,  39 => 8,  36 => 7,  33 => 4,  30 => 3,);
    }
}
