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
        return array (  84 => 37,  20 => 1,  118 => 50,  77 => 25,  58 => 28,  110 => 46,  352 => 151,  349 => 150,  330 => 12,  326 => 10,  320 => 8,  317 => 7,  300 => 140,  293 => 138,  280 => 132,  265 => 127,  262 => 126,  256 => 124,  251 => 122,  239 => 118,  232 => 114,  194 => 90,  191 => 89,  188 => 88,  172 => 77,  160 => 72,  148 => 68,  146 => 67,  114 => 50,  90 => 29,  81 => 35,  418 => 222,  394 => 218,  358 => 188,  354 => 187,  351 => 186,  348 => 185,  344 => 14,  335 => 5,  323 => 227,  321 => 185,  310 => 178,  292 => 161,  290 => 159,  234 => 115,  223 => 109,  215 => 98,  207 => 93,  202 => 96,  161 => 65,  155 => 64,  152 => 63,  124 => 55,  97 => 40,  70 => 26,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 221,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 189,  360 => 109,  355 => 106,  341 => 159,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 139,  294 => 90,  285 => 89,  283 => 133,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 121,  241 => 77,  229 => 113,  220 => 70,  214 => 69,  177 => 80,  169 => 76,  140 => 55,  132 => 44,  128 => 43,  107 => 36,  61 => 18,  273 => 130,  269 => 94,  254 => 123,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 75,  159 => 61,  143 => 46,  135 => 53,  119 => 49,  102 => 37,  71 => 19,  67 => 32,  63 => 28,  59 => 17,  38 => 10,  94 => 5,  89 => 38,  85 => 32,  75 => 33,  68 => 5,  56 => 16,  87 => 25,  21 => 2,  26 => 5,  93 => 39,  88 => 44,  78 => 28,  46 => 12,  27 => 5,  44 => 11,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 76,  171 => 61,  166 => 75,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 60,  136 => 56,  121 => 33,  117 => 44,  105 => 46,  91 => 31,  62 => 23,  49 => 20,  24 => 4,  25 => 3,  19 => 2,  79 => 26,  72 => 24,  69 => 33,  47 => 14,  40 => 12,  37 => 7,  22 => 3,  246 => 120,  157 => 56,  145 => 46,  139 => 65,  131 => 52,  123 => 47,  120 => 53,  115 => 49,  111 => 37,  108 => 47,  101 => 45,  98 => 31,  96 => 34,  83 => 36,  74 => 30,  66 => 32,  55 => 25,  52 => 15,  50 => 14,  43 => 12,  41 => 14,  35 => 6,  32 => 5,  29 => 4,  209 => 94,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 74,  162 => 57,  154 => 70,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 55,  130 => 54,  125 => 44,  122 => 42,  116 => 51,  112 => 42,  109 => 34,  106 => 36,  103 => 21,  99 => 19,  95 => 42,  92 => 33,  86 => 43,  82 => 42,  80 => 17,  73 => 32,  64 => 24,  60 => 27,  57 => 25,  54 => 24,  51 => 19,  48 => 13,  45 => 12,  42 => 21,  39 => 12,  36 => 7,  33 => 8,  30 => 6,);
    }
}
