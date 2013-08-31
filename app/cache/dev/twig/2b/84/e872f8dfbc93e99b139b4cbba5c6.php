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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmuser/photo/" . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photo"))), "html", null, true);
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
  ";
        // line 29
        echo " 
  <li>     Sexe : ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "sexe")) > 0)) {
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "sexe"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li> 
 
  <li>  Age  : ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "age") > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "age"), "html", null, true);
            echo "     ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> Ville :    ";
        // line 34
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "ville")) > 0)) {
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "ville"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> Email :";
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
            echo "                      <p>Commentaire n°";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo " :";
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
        return array (  124 => 44,  114 => 42,  65 => 30,  77 => 32,  53 => 19,  34 => 6,  90 => 29,  302 => 128,  300 => 127,  295 => 126,  282 => 120,  275 => 118,  267 => 115,  253 => 110,  249 => 109,  236 => 103,  234 => 102,  231 => 101,  225 => 97,  190 => 76,  174 => 65,  150 => 56,  148 => 55,  134 => 49,  126 => 43,  118 => 39,  110 => 35,  97 => 30,  371 => 148,  357 => 17,  353 => 15,  349 => 14,  344 => 13,  342 => 12,  339 => 11,  331 => 8,  329 => 7,  326 => 6,  320 => 5,  277 => 166,  256 => 111,  212 => 111,  185 => 96,  180 => 93,  165 => 80,  161 => 79,  81 => 41,  58 => 17,  23 => 1,  76 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 147,  365 => 111,  362 => 18,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 121,  283 => 88,  278 => 86,  268 => 85,  264 => 114,  258 => 112,  252 => 80,  247 => 78,  241 => 106,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 34,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 120,  221 => 95,  219 => 76,  217 => 75,  208 => 110,  204 => 84,  179 => 68,  159 => 61,  143 => 56,  135 => 46,  119 => 42,  102 => 21,  71 => 25,  67 => 15,  63 => 29,  59 => 17,  38 => 10,  94 => 17,  89 => 20,  85 => 24,  75 => 15,  68 => 24,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 34,  78 => 20,  46 => 15,  27 => 5,  44 => 7,  31 => 5,  28 => 4,  201 => 105,  196 => 78,  183 => 82,  171 => 64,  166 => 62,  163 => 62,  158 => 67,  156 => 58,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 13,  49 => 20,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 38,  69 => 31,  47 => 14,  40 => 12,  37 => 10,  22 => 3,  246 => 90,  157 => 78,  145 => 46,  139 => 68,  131 => 52,  123 => 47,  120 => 43,  115 => 43,  111 => 37,  108 => 36,  101 => 53,  98 => 19,  96 => 33,  83 => 39,  74 => 14,  66 => 30,  55 => 18,  52 => 15,  50 => 28,  43 => 12,  41 => 21,  35 => 4,  32 => 4,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 77,  189 => 71,  187 => 97,  182 => 66,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 60,  154 => 58,  149 => 51,  147 => 70,  144 => 49,  141 => 53,  133 => 67,  130 => 66,  125 => 44,  122 => 41,  116 => 38,  112 => 42,  109 => 58,  106 => 36,  103 => 33,  99 => 36,  95 => 28,  92 => 28,  86 => 28,  82 => 22,  80 => 19,  73 => 32,  64 => 17,  60 => 27,  57 => 20,  54 => 21,  51 => 19,  48 => 13,  45 => 14,  42 => 11,  39 => 8,  36 => 7,  33 => 8,  30 => 7,);
    }
}
