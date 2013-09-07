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
        return array (  175 => 65,  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  315 => 125,  303 => 122,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  233 => 87,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  185 => 66,  181 => 65,  178 => 66,  165 => 60,  153 => 56,  134 => 54,  113 => 48,  34 => 15,  299 => 129,  287 => 123,  271 => 116,  267 => 101,  248 => 94,  225 => 98,  215 => 95,  205 => 91,  198 => 89,  174 => 79,  150 => 55,  100 => 39,  84 => 24,  20 => 1,  53 => 12,  77 => 38,  58 => 17,  110 => 48,  352 => 151,  349 => 150,  344 => 14,  330 => 12,  326 => 10,  320 => 127,  317 => 138,  300 => 121,  293 => 138,  280 => 132,  265 => 127,  262 => 98,  256 => 96,  251 => 122,  223 => 109,  202 => 96,  191 => 67,  188 => 88,  172 => 64,  160 => 72,  148 => 68,  146 => 65,  114 => 50,  90 => 27,  81 => 23,  420 => 243,  416 => 240,  380 => 160,  376 => 209,  373 => 156,  370 => 207,  366 => 182,  363 => 181,  357 => 5,  345 => 249,  343 => 207,  332 => 201,  327 => 200,  307 => 181,  263 => 142,  255 => 136,  239 => 118,  234 => 115,  232 => 114,  226 => 84,  218 => 96,  194 => 70,  190 => 86,  186 => 82,  161 => 63,  155 => 64,  152 => 63,  124 => 55,  97 => 46,  70 => 19,  76 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 244,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 211,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 183,  305 => 95,  298 => 120,  294 => 127,  285 => 89,  283 => 122,  278 => 106,  268 => 85,  264 => 84,  258 => 111,  252 => 108,  247 => 121,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 80,  169 => 76,  140 => 58,  132 => 44,  128 => 43,  107 => 36,  61 => 18,  273 => 130,  269 => 94,  254 => 123,  243 => 106,  240 => 104,  238 => 103,  235 => 102,  230 => 82,  227 => 81,  224 => 71,  221 => 97,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 61,  143 => 46,  135 => 53,  119 => 40,  102 => 40,  71 => 36,  67 => 24,  63 => 28,  59 => 14,  38 => 6,  94 => 5,  89 => 20,  85 => 32,  75 => 27,  68 => 5,  56 => 16,  87 => 34,  21 => 2,  26 => 12,  93 => 28,  88 => 44,  78 => 28,  46 => 13,  27 => 3,  44 => 20,  31 => 5,  28 => 13,  201 => 90,  196 => 88,  183 => 81,  171 => 61,  166 => 73,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 60,  136 => 56,  121 => 50,  117 => 44,  105 => 34,  91 => 31,  62 => 31,  49 => 14,  24 => 8,  25 => 3,  19 => 1,  79 => 41,  72 => 24,  69 => 33,  47 => 14,  40 => 12,  37 => 7,  22 => 7,  246 => 93,  157 => 71,  145 => 46,  139 => 63,  131 => 52,  123 => 42,  120 => 53,  115 => 50,  111 => 47,  108 => 47,  101 => 45,  98 => 31,  96 => 37,  83 => 33,  74 => 30,  66 => 33,  55 => 16,  52 => 15,  50 => 14,  43 => 12,  41 => 14,  35 => 6,  32 => 5,  29 => 4,  209 => 92,  203 => 73,  199 => 67,  193 => 87,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 74,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 61,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 42,  116 => 39,  112 => 42,  109 => 34,  106 => 9,  103 => 32,  99 => 31,  95 => 45,  92 => 33,  86 => 43,  82 => 42,  80 => 32,  73 => 20,  64 => 23,  60 => 27,  57 => 25,  54 => 24,  51 => 19,  48 => 27,  45 => 10,  42 => 21,  39 => 12,  36 => 7,  33 => 4,  30 => 3,);
    }
}
