<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_d21266528f9ac5898187713775db9b3b extends Twig_Template
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
        echo "<div class=\"block\">
    ";
        // line 2
        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) > 0)) {
            // line 3
            echo "        <h2>
            <span><small>[";
            // line 4
            echo twig_escape_filter($this->env, (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) - (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position"))) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1), "html", null, true);
            echo "]</small></span>
            ";
            // line 5
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class"));
            echo ": ";
            echo $this->env->getExtension('code')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true)));
            echo "&nbsp;
            ";
            // line 6
            ob_start();
            // line 7
            echo "            <a href=\"#\" onclick=\"toggle('traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "', 'traces'); switchIcons('icon-traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-open', 'icon-traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-close'); return false;\">
                <img class=\"toggle\" id=\"icon-traces-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: ";
            echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("inline") : ("none"));
            echo "\" />
                <img class=\"toggle\" id=\"icon-traces-";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: ";
            echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("none") : ("inline"));
            echo "\" />
            </a>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "        </h2>
    ";
        } else {
            // line 14
            echo "        <h2>Stack Trace</h2>
    ";
        }
        // line 16
        echo "
    <a id=\"traces-link-";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
        echo "\"></a>
    <ol class=\"traces list-exception\" id=\"traces-";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
        echo "\" style=\"display: ";
        echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("block") : ("none"));
        echo "\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            $this->env->loadTemplate("TwigBundle:Exception:trace.html.twig")->display(array("prefix" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "i" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
            // line 22
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  85 => 19,  75 => 17,  72 => 16,  50 => 8,  41 => 7,  201 => 92,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  168 => 72,  163 => 70,  158 => 67,  142 => 59,  138 => 57,  133 => 55,  123 => 47,  117 => 44,  115 => 43,  112 => 42,  62 => 23,  49 => 19,  39 => 6,  98 => 40,  93 => 9,  88 => 6,  80 => 41,  78 => 40,  44 => 9,  22 => 2,  57 => 12,  54 => 21,  40 => 8,  51 => 20,  46 => 10,  37 => 8,  32 => 12,  27 => 4,  25 => 4,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 187,  800 => 186,  792 => 182,  789 => 181,  787 => 180,  784 => 179,  776 => 175,  774 => 174,  771 => 173,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  742 => 160,  740 => 159,  737 => 158,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  706 => 148,  703 => 147,  701 => 146,  698 => 145,  690 => 139,  688 => 138,  687 => 137,  686 => 136,  685 => 135,  680 => 134,  674 => 132,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  649 => 121,  645 => 120,  640 => 119,  634 => 117,  631 => 116,  629 => 115,  626 => 114,  610 => 110,  608 => 109,  605 => 108,  589 => 104,  587 => 103,  584 => 102,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  538 => 90,  520 => 89,  518 => 88,  515 => 87,  506 => 82,  503 => 81,  500 => 80,  494 => 78,  492 => 77,  487 => 76,  484 => 75,  481 => 74,  471 => 72,  469 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 385,  278 => 384,  276 => 378,  266 => 363,  263 => 362,  260 => 360,  258 => 351,  255 => 350,  253 => 339,  250 => 338,  248 => 333,  245 => 332,  240 => 323,  235 => 308,  230 => 300,  225 => 295,  222 => 294,  220 => 287,  217 => 286,  215 => 277,  212 => 276,  210 => 267,  207 => 266,  202 => 263,  199 => 91,  197 => 246,  189 => 237,  186 => 236,  184 => 230,  181 => 229,  179 => 221,  176 => 220,  174 => 214,  171 => 73,  161 => 199,  159 => 193,  156 => 66,  151 => 63,  149 => 179,  144 => 173,  141 => 172,  136 => 56,  134 => 158,  131 => 157,  129 => 145,  126 => 144,  121 => 46,  119 => 114,  111 => 107,  109 => 102,  106 => 101,  104 => 87,  99 => 68,  96 => 67,  94 => 22,  91 => 31,  89 => 20,  84 => 41,  79 => 18,  74 => 20,  71 => 19,  69 => 25,  66 => 24,  60 => 13,  55 => 14,  47 => 8,  43 => 8,  34 => 4,  24 => 3,  21 => 2,  19 => 1,  386 => 157,  380 => 155,  377 => 37,  372 => 14,  358 => 12,  354 => 10,  348 => 8,  345 => 7,  329 => 145,  327 => 144,  322 => 143,  312 => 138,  309 => 137,  294 => 135,  286 => 132,  282 => 131,  279 => 130,  273 => 377,  271 => 371,  268 => 370,  251 => 125,  243 => 324,  238 => 309,  236 => 118,  233 => 301,  227 => 298,  223 => 111,  204 => 264,  194 => 245,  191 => 243,  188 => 88,  177 => 80,  172 => 77,  169 => 207,  166 => 71,  164 => 200,  160 => 72,  154 => 186,  148 => 68,  146 => 178,  139 => 166,  132 => 61,  124 => 129,  120 => 53,  116 => 113,  114 => 108,  108 => 47,  105 => 40,  101 => 24,  95 => 42,  90 => 40,  86 => 28,  83 => 36,  81 => 40,  76 => 31,  70 => 28,  68 => 14,  64 => 12,  61 => 2,  59 => 22,  56 => 9,  48 => 19,  42 => 9,  38 => 6,  36 => 7,  33 => 5,  30 => 3,);
    }
}
