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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmuser/photo/" . $this->getAttribute($this->getContext($context, "membre"), "photo"))), "html", null, true);
        echo "\" />
        </div>
          INFORMATIONS MEMBRE ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "username"), "html", null, true);
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
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "sexe")) > 0)) {
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "sexe"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li> 
 
  <li>  Age  : ";
        // line 24
        if (($this->getAttribute($this->getContext($context, "membre"), "age") > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "age"), "html", null, true);
            echo "     ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> Ville :    ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "ville")) > 0)) {
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "ville"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "current_page"), "tri" => "desc")), "html", null, true);
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
        return array (  90 => 29,  302 => 128,  300 => 127,  295 => 126,  282 => 120,  275 => 118,  267 => 115,  253 => 110,  249 => 109,  236 => 103,  234 => 102,  231 => 101,  225 => 97,  190 => 76,  174 => 65,  150 => 56,  148 => 55,  134 => 49,  126 => 43,  118 => 39,  110 => 35,  97 => 30,  371 => 148,  357 => 17,  353 => 15,  349 => 14,  344 => 13,  342 => 12,  339 => 11,  331 => 8,  329 => 7,  326 => 6,  320 => 5,  277 => 166,  256 => 111,  212 => 111,  185 => 96,  180 => 93,  165 => 80,  161 => 79,  81 => 41,  58 => 32,  23 => 1,  76 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 147,  365 => 111,  362 => 18,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 121,  283 => 88,  278 => 86,  268 => 85,  264 => 114,  258 => 112,  252 => 80,  247 => 78,  241 => 106,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 34,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 120,  221 => 95,  219 => 76,  217 => 75,  208 => 110,  204 => 84,  179 => 68,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 13,  59 => 14,  38 => 19,  94 => 28,  89 => 20,  85 => 24,  75 => 17,  68 => 24,  56 => 31,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 26,  78 => 20,  46 => 9,  27 => 4,  44 => 7,  31 => 6,  28 => 5,  201 => 105,  196 => 78,  183 => 82,  171 => 64,  166 => 62,  163 => 62,  158 => 67,  156 => 58,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 34,  49 => 10,  24 => 3,  25 => 3,  19 => 1,  79 => 26,  72 => 38,  69 => 18,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 78,  145 => 46,  139 => 68,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 53,  98 => 52,  96 => 33,  83 => 23,  74 => 14,  66 => 14,  55 => 11,  52 => 29,  50 => 9,  43 => 8,  41 => 20,  35 => 4,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 77,  189 => 71,  187 => 97,  182 => 66,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 60,  154 => 58,  149 => 51,  147 => 70,  144 => 49,  141 => 53,  133 => 67,  130 => 66,  125 => 44,  122 => 41,  116 => 38,  112 => 42,  109 => 58,  106 => 36,  103 => 33,  99 => 31,  95 => 28,  92 => 28,  86 => 43,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 22,  54 => 21,  51 => 19,  48 => 13,  45 => 8,  42 => 12,  39 => 6,  36 => 5,  33 => 6,  30 => 7,);
    }
}
