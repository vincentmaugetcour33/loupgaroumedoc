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
        return array (  175 => 65,  118 => 49,  462 => 202,  449 => 198,  446 => 197,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  401 => 172,  361 => 146,  351 => 141,  338 => 135,  325 => 129,  323 => 128,  315 => 125,  303 => 122,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  216 => 79,  200 => 72,  185 => 66,  178 => 66,  165 => 60,  150 => 55,  113 => 48,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 187,  800 => 186,  792 => 182,  789 => 181,  787 => 180,  784 => 179,  776 => 175,  774 => 174,  771 => 173,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  742 => 160,  740 => 159,  737 => 158,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  706 => 148,  703 => 147,  701 => 146,  698 => 145,  690 => 139,  688 => 138,  687 => 137,  686 => 136,  685 => 135,  680 => 134,  674 => 132,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  649 => 121,  645 => 120,  640 => 119,  634 => 117,  631 => 116,  629 => 115,  626 => 114,  610 => 110,  608 => 109,  605 => 108,  589 => 104,  587 => 103,  584 => 102,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  538 => 90,  520 => 89,  518 => 88,  515 => 87,  506 => 82,  503 => 81,  500 => 80,  494 => 78,  492 => 77,  487 => 76,  484 => 75,  481 => 74,  471 => 72,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  426 => 58,  414 => 52,  408 => 176,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  371 => 35,  350 => 26,  342 => 137,  335 => 134,  313 => 15,  311 => 14,  308 => 13,  288 => 4,  281 => 385,  276 => 378,  266 => 363,  253 => 339,  250 => 338,  248 => 94,  245 => 332,  233 => 87,  225 => 295,  215 => 277,  212 => 276,  210 => 267,  207 => 75,  197 => 71,  184 => 230,  181 => 65,  134 => 54,  129 => 145,  126 => 144,  397 => 158,  394 => 168,  375 => 144,  364 => 139,  359 => 138,  348 => 140,  339 => 128,  333 => 125,  329 => 131,  324 => 123,  321 => 121,  319 => 120,  316 => 16,  310 => 116,  306 => 115,  302 => 114,  299 => 8,  296 => 112,  290 => 5,  286 => 112,  282 => 107,  279 => 106,  277 => 105,  274 => 104,  271 => 371,  260 => 360,  231 => 83,  222 => 294,  213 => 78,  198 => 69,  174 => 214,  153 => 56,  127 => 40,  14 => 6,  84 => 24,  20 => 1,  104 => 87,  100 => 39,  65 => 36,  53 => 12,  77 => 25,  110 => 47,  58 => 17,  34 => 15,  352 => 133,  349 => 150,  344 => 24,  330 => 12,  326 => 10,  320 => 127,  317 => 7,  300 => 121,  293 => 6,  280 => 132,  265 => 127,  262 => 98,  256 => 96,  251 => 122,  223 => 109,  202 => 263,  191 => 67,  188 => 88,  172 => 64,  160 => 72,  148 => 68,  146 => 178,  114 => 108,  90 => 27,  81 => 23,  441 => 196,  421 => 245,  417 => 241,  380 => 160,  376 => 209,  373 => 156,  370 => 207,  366 => 33,  363 => 32,  357 => 5,  345 => 251,  343 => 131,  332 => 20,  327 => 200,  307 => 181,  263 => 362,  255 => 350,  239 => 118,  234 => 115,  232 => 114,  226 => 84,  218 => 104,  194 => 70,  190 => 83,  186 => 236,  161 => 63,  155 => 64,  152 => 63,  124 => 129,  97 => 31,  70 => 19,  76 => 25,  480 => 162,  474 => 161,  469 => 71,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 211,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 22,  322 => 101,  314 => 99,  312 => 124,  309 => 183,  305 => 95,  298 => 120,  294 => 90,  285 => 3,  283 => 133,  278 => 106,  268 => 370,  264 => 98,  258 => 351,  252 => 80,  247 => 90,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 80,  169 => 207,  140 => 58,  132 => 44,  128 => 43,  107 => 36,  61 => 17,  273 => 377,  269 => 94,  254 => 123,  243 => 324,  240 => 323,  238 => 309,  235 => 308,  230 => 300,  227 => 298,  224 => 71,  221 => 77,  219 => 107,  217 => 286,  208 => 68,  204 => 264,  179 => 221,  159 => 193,  143 => 46,  135 => 53,  119 => 40,  102 => 40,  71 => 19,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 57,  89 => 47,  85 => 32,  75 => 17,  68 => 5,  56 => 12,  87 => 34,  21 => 2,  26 => 12,  93 => 28,  88 => 32,  78 => 28,  46 => 13,  27 => 3,  44 => 22,  31 => 5,  28 => 13,  201 => 92,  196 => 90,  183 => 82,  171 => 213,  166 => 206,  163 => 59,  158 => 62,  156 => 58,  151 => 59,  142 => 47,  138 => 60,  136 => 165,  121 => 50,  117 => 44,  105 => 34,  91 => 33,  62 => 14,  49 => 14,  24 => 8,  25 => 4,  19 => 1,  79 => 32,  72 => 24,  69 => 13,  47 => 8,  40 => 12,  37 => 8,  22 => 7,  246 => 93,  157 => 56,  145 => 46,  139 => 166,  131 => 157,  123 => 42,  120 => 53,  115 => 47,  111 => 47,  108 => 47,  101 => 86,  98 => 31,  96 => 37,  83 => 33,  74 => 30,  66 => 12,  55 => 13,  52 => 12,  50 => 14,  43 => 12,  41 => 14,  35 => 6,  32 => 5,  29 => 3,  209 => 74,  203 => 73,  199 => 262,  193 => 73,  189 => 237,  187 => 84,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 200,  162 => 59,  154 => 60,  149 => 179,  147 => 54,  144 => 173,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 42,  116 => 39,  112 => 42,  109 => 102,  106 => 101,  103 => 32,  99 => 31,  95 => 42,  92 => 33,  86 => 46,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 27,  57 => 25,  54 => 11,  51 => 12,  48 => 9,  45 => 9,  42 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
