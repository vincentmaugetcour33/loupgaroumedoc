<?php

/* VMUserBundle:Profile:profileshow.html.twig */
class __TwigTemplate_2b84e872f8dfbc93e99b139b4cbba5c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
          <table><tr>
          <td><div style=\"float:left;\" class='thumbnail'>
          <img align=\"center\" width=30 src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photoPath")), "html", null, true);
        echo "\" />
        </div>
          INFORMATIONS PROFIL ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "
          </td></tr></table>
          </div>
      
          <div class=\"panel-body\">
              
              <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#infos\" data-toggle=\"tab\">Mes caractéristiques</a></li>
               ";
        // line 20
        if ((!twig_test_empty((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires"))))) {
            echo " 
                    <li><a href=\"#comment\" data-toggle=\"tab\">Mes commentaires</a></li>
               ";
        }
        // line 22
        echo "  
              </ul>
              
              <div class=\"tab-content\">
                  <div class=\"tab-pane active\" id=\"infos\">
          <ul>
  ";
        // line 29
        echo "  
  <li><b>Nom/prénom  :</b>";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "realname")) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "realname"), "html", null, true);
            echo " ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li>   <b>  Sexe :</b> ";
        // line 32
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "sexe")) > 0)) {
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "sexe"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li> 
 
  <li> <b> Age  :</b> ";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "age") > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "age"), "html", null, true);
            echo "     ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> <b>Ville :   </b> ";
        // line 36
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "ville")) > 0)) {
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "ville"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li><b> Email :</b>";
        // line 38
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "email")) > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "email"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
  </ul>
                    </div>
        
              
              <div class=\"tab-pane\" id=\"comment\">
                 
                <table class=\"table table-hover\">
                ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["key"] => $context["com"]) {
            // line 47
            echo "                      <tr>
                          <td><b>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["com"]) ? $context["com"] : $this->getContext($context, "com")), "contenu"), "html", null, true);
            echo "</b></td>
                          <td><em><font class=\"text-info\">";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["com"]) ? $context["com"] : $this->getContext($context, "com")), "date"), "d/m/Y"), "html", null, true);
            echo "</font></em></td>
                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                 </table>
                      
              </div>
          </div>
              </div>
        </div>
           <a onclick=\"javascript:history.back();\" href=\"#\">Retour</a>   

";
    }

    public function getTemplateName()
    {
        return "VMUserBundle:Profile:profileshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 187,  800 => 186,  792 => 182,  789 => 181,  787 => 180,  784 => 179,  776 => 175,  774 => 174,  771 => 173,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  742 => 160,  740 => 159,  737 => 158,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  706 => 148,  703 => 147,  701 => 146,  698 => 145,  690 => 139,  688 => 138,  687 => 137,  686 => 136,  685 => 135,  680 => 134,  674 => 132,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  649 => 121,  645 => 120,  640 => 119,  634 => 117,  631 => 116,  629 => 115,  626 => 114,  610 => 110,  608 => 109,  605 => 108,  589 => 104,  587 => 103,  584 => 102,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  538 => 90,  520 => 89,  518 => 88,  515 => 87,  506 => 82,  503 => 81,  500 => 80,  487 => 76,  484 => 75,  481 => 74,  471 => 72,  459 => 69,  456 => 68,  442 => 62,  433 => 60,  426 => 58,  405 => 49,  403 => 48,  390 => 43,  385 => 41,  371 => 35,  366 => 33,  350 => 26,  344 => 24,  335 => 21,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  281 => 385,  276 => 378,  266 => 363,  263 => 362,  260 => 360,  255 => 350,  250 => 338,  248 => 333,  225 => 295,  222 => 294,  215 => 277,  212 => 276,  210 => 267,  207 => 266,  202 => 263,  197 => 246,  186 => 236,  181 => 229,  174 => 214,  161 => 199,  134 => 158,  129 => 145,  126 => 144,  495 => 192,  492 => 77,  478 => 180,  473 => 178,  466 => 174,  462 => 173,  450 => 64,  446 => 166,  441 => 165,  431 => 159,  422 => 157,  419 => 155,  417 => 154,  414 => 52,  408 => 50,  404 => 149,  400 => 47,  397 => 147,  394 => 146,  388 => 42,  375 => 139,  369 => 137,  353 => 130,  342 => 23,  332 => 20,  325 => 113,  321 => 112,  316 => 16,  307 => 105,  303 => 104,  292 => 99,  270 => 92,  257 => 89,  253 => 339,  245 => 332,  234 => 76,  184 => 230,  180 => 55,  175 => 52,  153 => 49,  14 => 6,  20 => 1,  104 => 36,  97 => 5,  53 => 32,  77 => 25,  58 => 17,  113 => 42,  34 => 4,  386 => 157,  380 => 141,  377 => 37,  372 => 138,  358 => 131,  354 => 10,  348 => 8,  329 => 145,  327 => 144,  286 => 132,  282 => 131,  279 => 130,  271 => 371,  236 => 77,  233 => 301,  223 => 111,  194 => 245,  191 => 243,  188 => 60,  172 => 77,  160 => 72,  146 => 178,  124 => 129,  114 => 108,  90 => 29,  81 => 40,  70 => 24,  494 => 78,  468 => 257,  464 => 252,  432 => 223,  428 => 59,  424 => 221,  420 => 220,  416 => 219,  412 => 218,  406 => 216,  399 => 190,  363 => 32,  345 => 7,  343 => 190,  319 => 169,  310 => 163,  296 => 102,  288 => 4,  280 => 144,  274 => 140,  272 => 139,  267 => 136,  265 => 133,  259 => 121,  251 => 125,  242 => 109,  226 => 94,  218 => 91,  213 => 66,  170 => 67,  148 => 68,  137 => 53,  110 => 47,  100 => 29,  84 => 41,  65 => 14,  76 => 31,  480 => 162,  474 => 161,  469 => 71,  461 => 70,  457 => 172,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 158,  423 => 57,  413 => 134,  409 => 217,  407 => 131,  402 => 191,  398 => 129,  393 => 5,  387 => 122,  384 => 142,  381 => 263,  379 => 216,  374 => 36,  368 => 34,  365 => 111,  362 => 132,  360 => 109,  355 => 27,  341 => 105,  337 => 22,  322 => 143,  314 => 110,  312 => 138,  309 => 137,  305 => 95,  298 => 103,  294 => 135,  285 => 3,  283 => 94,  278 => 384,  268 => 370,  264 => 84,  258 => 351,  252 => 80,  247 => 83,  241 => 77,  229 => 73,  220 => 287,  214 => 69,  177 => 80,  169 => 207,  140 => 55,  132 => 46,  128 => 49,  107 => 46,  61 => 2,  273 => 377,  269 => 94,  254 => 92,  243 => 324,  240 => 323,  238 => 309,  235 => 308,  230 => 300,  227 => 298,  224 => 71,  221 => 70,  219 => 76,  217 => 286,  208 => 188,  204 => 264,  179 => 221,  159 => 193,  143 => 49,  135 => 53,  119 => 114,  102 => 32,  71 => 30,  67 => 32,  63 => 19,  59 => 26,  94 => 57,  89 => 47,  85 => 22,  75 => 40,  68 => 29,  56 => 21,  87 => 32,  21 => 2,  26 => 5,  93 => 34,  88 => 23,  78 => 18,  27 => 5,  44 => 5,  31 => 5,  201 => 66,  196 => 63,  183 => 82,  171 => 213,  166 => 206,  163 => 62,  158 => 50,  156 => 192,  151 => 185,  142 => 44,  138 => 54,  136 => 47,  121 => 128,  117 => 44,  105 => 46,  91 => 56,  62 => 23,  49 => 9,  25 => 3,  24 => 4,  46 => 14,  38 => 10,  28 => 4,  19 => 2,  79 => 32,  72 => 16,  69 => 13,  47 => 8,  40 => 12,  37 => 13,  22 => 3,  246 => 90,  157 => 56,  145 => 45,  139 => 48,  131 => 157,  123 => 47,  120 => 53,  115 => 38,  111 => 107,  108 => 41,  101 => 86,  98 => 31,  96 => 67,  83 => 36,  74 => 20,  66 => 12,  55 => 16,  52 => 10,  50 => 14,  43 => 12,  41 => 14,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 185,  199 => 262,  193 => 73,  189 => 237,  187 => 71,  182 => 66,  176 => 220,  173 => 68,  168 => 72,  164 => 200,  162 => 65,  154 => 186,  149 => 179,  147 => 58,  144 => 173,  141 => 172,  133 => 51,  130 => 41,  125 => 43,  122 => 42,  116 => 113,  112 => 42,  109 => 102,  106 => 101,  103 => 30,  99 => 68,  95 => 42,  92 => 31,  86 => 46,  82 => 32,  80 => 43,  73 => 19,  64 => 3,  60 => 22,  57 => 25,  54 => 20,  51 => 15,  48 => 29,  45 => 12,  42 => 16,  39 => 12,  36 => 7,  33 => 8,  30 => 6,);
    }
}
