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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photoPath")), "html", null, true);
        echo "\" />
        </div>
          INFORMATIONS PROFIL ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "
          </td></tr></table>
          </div>
      
          <div class=\"panel-body\">
              
              <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#infos\" data-toggle=\"tab\">Mes caractéristiques</a></li>
               <li><a href=\"#comment\" data-toggle=\"tab\">Mes commentaires</a></li>
             </ul>
              
              <div class=\"tab-content\">
                  <div class=\"tab-pane active\" id=\"infos\">
          <ul>
  ";
        // line 27
        echo "  
  <li><b>Nom/prénom  :</b>";
        // line 28
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "realname")) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "realname"), "html", null, true);
            echo " ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li>   <b>  Sexe :</b> ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "sexe")) > 0)) {
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "sexe"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li> 
 
  <li> <b> Age  :</b> ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "age") > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "age"), "html", null, true);
            echo "     ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> <b>Ville :   </b> ";
        // line 34
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "ville")) > 0)) {
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "ville"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li><b> Email :</b>";
        // line 36
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "email")) > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "email"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
  </ul>
                    </div>
        
              
              <div class=\"tab-pane\" id=\"comment\">
                ";
        // line 42
        if (twig_test_empty($this->getContext($context, "commentaires"))) {
            echo " Vous n'avez saisi aucun commentaire ";
        }
        echo "  
                ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "commentaires"));
        foreach ($context['_seq'] as $context["key"] => $context["com"]) {
            // line 44
            echo "                      <p><b>Commentaire n°";
            echo twig_escape_filter($this->env, ($this->getContext($context, "key") + 1), "html", null, true);
            echo " :</b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "com"), "contenu"), "html", null, true);
            echo "</p>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                 
                      
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
        return array (  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 187,  800 => 186,  792 => 182,  789 => 181,  787 => 180,  784 => 179,  776 => 175,  774 => 174,  771 => 173,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  742 => 160,  740 => 159,  737 => 158,  730 => 153,  720 => 152,  715 => 151,  712 => 150,  706 => 148,  703 => 147,  701 => 146,  698 => 145,  690 => 139,  688 => 138,  687 => 137,  686 => 136,  685 => 135,  680 => 134,  674 => 132,  671 => 131,  669 => 130,  666 => 129,  657 => 123,  653 => 122,  649 => 121,  645 => 120,  640 => 119,  634 => 117,  631 => 116,  629 => 115,  626 => 114,  610 => 110,  608 => 109,  605 => 108,  589 => 104,  587 => 103,  584 => 102,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  538 => 90,  520 => 89,  518 => 88,  515 => 87,  506 => 82,  503 => 81,  500 => 80,  494 => 78,  492 => 77,  487 => 76,  484 => 75,  481 => 74,  471 => 72,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  426 => 58,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  371 => 35,  350 => 26,  342 => 23,  335 => 21,  313 => 15,  311 => 14,  308 => 13,  288 => 4,  281 => 385,  276 => 378,  266 => 363,  253 => 339,  250 => 338,  248 => 333,  245 => 332,  233 => 301,  225 => 295,  215 => 277,  212 => 276,  210 => 267,  207 => 266,  197 => 246,  184 => 230,  181 => 229,  134 => 158,  129 => 145,  126 => 144,  397 => 158,  394 => 157,  375 => 144,  364 => 139,  359 => 138,  348 => 132,  339 => 128,  333 => 125,  329 => 124,  324 => 123,  321 => 121,  319 => 120,  316 => 16,  310 => 116,  306 => 115,  302 => 114,  299 => 8,  296 => 112,  290 => 5,  286 => 108,  282 => 107,  279 => 106,  277 => 105,  274 => 104,  271 => 371,  260 => 360,  231 => 83,  222 => 294,  213 => 75,  198 => 69,  174 => 214,  153 => 53,  127 => 40,  14 => 6,  84 => 41,  20 => 1,  104 => 87,  100 => 32,  65 => 36,  53 => 32,  77 => 25,  110 => 47,  58 => 17,  34 => 4,  352 => 133,  349 => 150,  344 => 24,  330 => 12,  326 => 10,  320 => 8,  317 => 7,  300 => 140,  293 => 6,  280 => 132,  265 => 127,  262 => 126,  256 => 124,  251 => 122,  223 => 109,  202 => 263,  191 => 243,  188 => 88,  172 => 77,  160 => 72,  148 => 68,  146 => 178,  114 => 108,  90 => 29,  81 => 40,  441 => 246,  421 => 245,  417 => 241,  380 => 146,  376 => 209,  373 => 208,  370 => 207,  366 => 33,  363 => 32,  357 => 5,  345 => 251,  343 => 131,  332 => 20,  327 => 200,  307 => 181,  263 => 362,  255 => 350,  239 => 118,  234 => 115,  232 => 114,  226 => 109,  218 => 104,  194 => 245,  190 => 83,  186 => 236,  161 => 199,  155 => 64,  152 => 63,  124 => 129,  97 => 31,  70 => 26,  76 => 31,  480 => 162,  474 => 161,  469 => 71,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 211,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 27,  341 => 105,  337 => 22,  322 => 101,  314 => 99,  312 => 98,  309 => 183,  305 => 95,  298 => 139,  294 => 90,  285 => 3,  283 => 133,  278 => 384,  268 => 370,  264 => 98,  258 => 351,  252 => 80,  247 => 90,  241 => 128,  229 => 113,  220 => 287,  214 => 69,  177 => 80,  169 => 207,  140 => 46,  132 => 44,  128 => 43,  107 => 36,  61 => 2,  273 => 377,  269 => 94,  254 => 123,  243 => 324,  240 => 323,  238 => 309,  235 => 308,  230 => 300,  227 => 298,  224 => 71,  221 => 77,  219 => 107,  217 => 286,  208 => 68,  204 => 264,  179 => 221,  159 => 193,  143 => 46,  135 => 53,  119 => 114,  102 => 33,  71 => 19,  67 => 32,  63 => 28,  59 => 13,  38 => 10,  94 => 57,  89 => 47,  85 => 32,  75 => 17,  68 => 5,  56 => 12,  87 => 24,  21 => 2,  26 => 5,  93 => 28,  88 => 44,  78 => 28,  46 => 14,  27 => 5,  44 => 22,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 213,  166 => 206,  163 => 59,  158 => 67,  156 => 192,  151 => 185,  142 => 47,  138 => 60,  136 => 165,  121 => 128,  117 => 44,  105 => 46,  91 => 56,  62 => 14,  49 => 20,  24 => 4,  25 => 3,  19 => 2,  79 => 32,  72 => 24,  69 => 13,  47 => 8,  40 => 12,  37 => 13,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 166,  131 => 157,  123 => 47,  120 => 53,  115 => 47,  111 => 107,  108 => 47,  101 => 86,  98 => 31,  96 => 34,  83 => 36,  74 => 30,  66 => 12,  55 => 16,  52 => 23,  50 => 14,  43 => 12,  41 => 14,  35 => 5,  32 => 4,  29 => 3,  209 => 74,  203 => 78,  199 => 262,  193 => 73,  189 => 237,  187 => 84,  182 => 66,  176 => 220,  173 => 65,  168 => 72,  164 => 200,  162 => 57,  154 => 186,  149 => 179,  147 => 58,  144 => 173,  141 => 172,  133 => 55,  130 => 54,  125 => 44,  122 => 42,  116 => 113,  112 => 42,  109 => 102,  106 => 101,  103 => 32,  99 => 68,  95 => 42,  92 => 33,  86 => 46,  82 => 22,  80 => 43,  73 => 19,  64 => 3,  60 => 27,  57 => 25,  54 => 11,  51 => 15,  48 => 9,  45 => 12,  42 => 16,  39 => 12,  36 => 7,  33 => 8,  30 => 6,);
    }
}
