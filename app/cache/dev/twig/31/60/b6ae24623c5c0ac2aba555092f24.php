<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_3160b6ae24623c5c0ac2aba555092f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 328,  339 => 316,  295 => 275,  806 => 488,  788 => 484,  745 => 476,  723 => 473,  702 => 470,  694 => 468,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  244 => 136,  389 => 160,  378 => 157,  367 => 155,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  302 => 125,  232 => 88,  155 => 47,  127 => 35,  357 => 123,  324 => 113,  318 => 111,  306 => 107,  297 => 276,  291 => 102,  231 => 83,  190 => 76,  118 => 49,  449 => 198,  439 => 195,  429 => 188,  415 => 180,  401 => 172,  373 => 156,  361 => 152,  351 => 120,  338 => 135,  323 => 128,  320 => 127,  315 => 131,  300 => 105,  289 => 113,  275 => 105,  262 => 98,  256 => 96,  216 => 79,  200 => 72,  185 => 74,  178 => 59,  165 => 83,  150 => 55,  152 => 46,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 487,  800 => 186,  792 => 485,  789 => 181,  787 => 180,  784 => 482,  776 => 175,  774 => 174,  771 => 481,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  742 => 475,  740 => 159,  737 => 158,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  706 => 472,  703 => 147,  701 => 146,  698 => 469,  690 => 467,  688 => 138,  687 => 137,  686 => 466,  685 => 135,  680 => 134,  674 => 132,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  649 => 121,  645 => 460,  640 => 119,  634 => 117,  631 => 116,  629 => 115,  626 => 114,  610 => 110,  608 => 109,  605 => 108,  589 => 104,  587 => 103,  584 => 102,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  538 => 90,  520 => 406,  518 => 88,  515 => 404,  506 => 82,  503 => 81,  500 => 80,  487 => 76,  484 => 75,  481 => 74,  471 => 72,  459 => 69,  456 => 68,  442 => 62,  433 => 60,  426 => 58,  405 => 49,  403 => 48,  390 => 43,  385 => 41,  371 => 156,  366 => 33,  350 => 26,  344 => 318,  335 => 134,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  266 => 363,  263 => 95,  260 => 360,  255 => 101,  250 => 338,  248 => 97,  225 => 295,  222 => 83,  215 => 277,  212 => 78,  210 => 77,  207 => 75,  202 => 77,  197 => 69,  186 => 236,  181 => 65,  174 => 65,  161 => 63,  134 => 39,  129 => 145,  126 => 144,  495 => 192,  492 => 77,  478 => 180,  473 => 178,  466 => 174,  462 => 202,  450 => 64,  446 => 197,  441 => 196,  431 => 189,  422 => 184,  419 => 155,  417 => 154,  414 => 52,  408 => 176,  404 => 149,  400 => 47,  397 => 147,  394 => 168,  388 => 42,  375 => 139,  369 => 137,  353 => 149,  342 => 317,  332 => 116,  325 => 129,  321 => 135,  316 => 16,  307 => 128,  303 => 106,  292 => 99,  270 => 102,  257 => 89,  253 => 100,  245 => 332,  234 => 76,  184 => 63,  180 => 55,  175 => 58,  153 => 77,  14 => 6,  20 => 1,  104 => 31,  97 => 5,  53 => 11,  77 => 25,  58 => 15,  113 => 40,  34 => 4,  386 => 159,  380 => 158,  377 => 37,  372 => 138,  358 => 151,  354 => 10,  348 => 140,  329 => 131,  327 => 114,  286 => 112,  282 => 131,  279 => 130,  271 => 371,  236 => 77,  233 => 87,  223 => 111,  194 => 68,  191 => 67,  188 => 90,  172 => 57,  160 => 72,  146 => 178,  124 => 129,  114 => 108,  90 => 27,  81 => 24,  70 => 19,  494 => 78,  468 => 257,  464 => 252,  432 => 223,  428 => 59,  424 => 221,  420 => 220,  416 => 219,  412 => 218,  406 => 216,  399 => 190,  363 => 153,  345 => 147,  343 => 146,  319 => 169,  310 => 163,  296 => 121,  288 => 118,  280 => 144,  274 => 110,  272 => 139,  267 => 101,  265 => 105,  259 => 103,  251 => 125,  242 => 109,  226 => 84,  218 => 91,  213 => 78,  170 => 84,  148 => 68,  137 => 53,  110 => 38,  100 => 36,  84 => 25,  65 => 17,  76 => 27,  480 => 162,  474 => 161,  469 => 71,  461 => 70,  457 => 172,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 158,  423 => 57,  413 => 134,  409 => 217,  407 => 131,  402 => 191,  398 => 129,  393 => 5,  387 => 164,  384 => 142,  381 => 263,  379 => 216,  374 => 36,  368 => 34,  365 => 111,  362 => 132,  360 => 109,  355 => 150,  341 => 118,  337 => 22,  322 => 143,  314 => 110,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 135,  285 => 3,  283 => 115,  278 => 98,  268 => 370,  264 => 84,  258 => 94,  252 => 80,  247 => 83,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 80,  169 => 207,  140 => 58,  132 => 46,  128 => 49,  107 => 37,  61 => 12,  273 => 377,  269 => 107,  254 => 92,  243 => 92,  240 => 323,  238 => 309,  235 => 89,  230 => 300,  227 => 86,  224 => 81,  221 => 70,  219 => 76,  217 => 286,  208 => 76,  204 => 264,  179 => 221,  159 => 193,  143 => 51,  135 => 53,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 21,  59 => 17,  94 => 38,  89 => 30,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  27 => 4,  44 => 8,  31 => 3,  201 => 66,  196 => 92,  183 => 82,  171 => 213,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 44,  138 => 54,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 29,  62 => 14,  49 => 12,  25 => 4,  24 => 2,  46 => 14,  38 => 6,  28 => 3,  19 => 1,  79 => 29,  72 => 21,  69 => 17,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 11,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 200,  162 => 59,  154 => 60,  149 => 179,  147 => 75,  144 => 42,  141 => 73,  133 => 51,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 47,  106 => 51,  103 => 30,  99 => 23,  95 => 34,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
