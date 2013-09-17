<?php

/* VMBlogBundle:Commentaire:profilecommentaire.html.twig */
class __TwigTemplate_5f95ee4e173909af2e9290b3804634cb extends Twig_Template
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
          <table><tr>
          <td><div style=\"float:left;\" class='thumbnail'>
          <img align=\"center\" width=\"30px\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "photoPath")), "html", null, true);
        echo "\" />
        </div>
          INFORMATIONS MEMBRE ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "username"), "html", null, true);
        echo "
          </td></tr></table>
          </div>
      
          <div class=\"panel-body\">
          <ul>
  ";
        // line 19
        echo "  
  ";
        // line 21
        echo " 
  <li>     Sexe : ";
        // line 22
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "sexe")) > 0)) {
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "sexe"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li> 
 
  <li>  Age  : ";
        // line 24
        if (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "age") > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "age"), "html", null, true);
            echo "     ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> Ville :    ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "ville")) > 0)) {
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "ville"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
 ";
        // line 29
        echo "</ul>
                    </div>
</div>
          
      <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "tri" => "desc")), "html", null, true);
        echo "\">Retour</a> 

";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Commentaire:profilecommentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  386 => 157,  380 => 155,  377 => 154,  372 => 14,  358 => 12,  354 => 10,  348 => 8,  329 => 145,  327 => 144,  286 => 132,  282 => 131,  279 => 130,  271 => 127,  236 => 118,  233 => 117,  223 => 111,  194 => 90,  191 => 89,  188 => 88,  172 => 77,  160 => 72,  146 => 67,  124 => 55,  114 => 50,  90 => 29,  81 => 35,  70 => 28,  494 => 258,  468 => 257,  464 => 252,  432 => 223,  428 => 222,  424 => 221,  420 => 220,  416 => 219,  412 => 218,  406 => 216,  399 => 190,  363 => 209,  345 => 7,  343 => 190,  319 => 169,  310 => 163,  296 => 154,  288 => 148,  280 => 144,  274 => 140,  272 => 139,  267 => 136,  265 => 133,  259 => 121,  251 => 125,  242 => 109,  226 => 94,  218 => 91,  213 => 89,  170 => 67,  148 => 68,  137 => 53,  110 => 37,  100 => 33,  84 => 27,  65 => 15,  76 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 217,  407 => 131,  402 => 191,  398 => 129,  393 => 5,  387 => 122,  384 => 121,  381 => 263,  379 => 216,  374 => 116,  368 => 210,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 143,  314 => 99,  312 => 138,  309 => 137,  305 => 95,  298 => 91,  294 => 135,  285 => 89,  283 => 88,  278 => 86,  268 => 126,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 80,  169 => 76,  140 => 55,  132 => 61,  128 => 49,  107 => 36,  61 => 23,  273 => 128,  269 => 94,  254 => 92,  243 => 122,  240 => 86,  238 => 119,  235 => 74,  230 => 82,  227 => 113,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 87,  204 => 98,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 14,  59 => 22,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 24,  56 => 21,  87 => 28,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 24,  27 => 4,  44 => 12,  31 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 75,  163 => 62,  158 => 67,  156 => 64,  151 => 63,  142 => 55,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 46,  91 => 27,  62 => 23,  49 => 19,  25 => 3,  24 => 3,  46 => 7,  38 => 6,  28 => 5,  19 => 1,  79 => 26,  72 => 16,  69 => 18,  47 => 8,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 65,  131 => 52,  123 => 47,  120 => 53,  115 => 39,  111 => 37,  108 => 47,  101 => 45,  98 => 31,  96 => 33,  83 => 36,  74 => 14,  66 => 16,  55 => 10,  52 => 21,  50 => 9,  43 => 7,  41 => 7,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 71,  182 => 66,  176 => 64,  173 => 68,  168 => 72,  164 => 74,  162 => 65,  154 => 70,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 41,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 42,  92 => 31,  86 => 38,  82 => 26,  80 => 19,  73 => 19,  64 => 25,  60 => 13,  57 => 22,  54 => 21,  51 => 19,  48 => 19,  45 => 8,  42 => 12,  39 => 9,  36 => 7,  33 => 6,  30 => 5,);
    }
}
