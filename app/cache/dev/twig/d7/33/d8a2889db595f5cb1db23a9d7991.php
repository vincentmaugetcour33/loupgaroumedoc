<?php

/* VMUserBundle:Profile:formulaire_email.html.twig */
class __TwigTemplate_d733d8a2889db595f5cb1db23a9d7991 extends Twig_Template
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
          RECUPERATION PROFIL
       </div>
            
      <div class=\"panel-body\">      
   <form class=\"form-inline\" method=\"post\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("vm_user_trouve");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
        echo " >
      ";
        // line 14
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label');
        echo "
     ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
        echo "
          ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo " ";
        // line 17
        echo "       ";
        // line 18
        echo "<input type=\"submit\" class=\"btn btn-default\" />
      <input type=\"button\" value=\"annuler\"  onclick=\"javascript:history.back()\" class=\"btn btn-primary\" />
  </form>
              </div></div>
              


";
    }

    public function getTemplateName()
    {
        return "VMUserBundle:Profile:formulaire_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  77 => 25,  53 => 19,  34 => 6,  90 => 29,  302 => 128,  300 => 127,  295 => 126,  282 => 120,  275 => 118,  267 => 115,  256 => 111,  253 => 110,  249 => 109,  236 => 103,  234 => 102,  231 => 101,  225 => 97,  190 => 76,  174 => 65,  150 => 56,  148 => 55,  134 => 49,  126 => 43,  110 => 35,  97 => 30,  378 => 149,  375 => 148,  369 => 18,  364 => 17,  356 => 14,  351 => 13,  349 => 12,  346 => 11,  338 => 8,  336 => 7,  333 => 6,  327 => 5,  279 => 167,  260 => 150,  226 => 121,  210 => 111,  195 => 102,  167 => 81,  124 => 65,  118 => 39,  81 => 41,  58 => 17,  23 => 1,  76 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 15,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 121,  283 => 88,  278 => 86,  268 => 85,  264 => 114,  258 => 112,  252 => 80,  247 => 78,  241 => 106,  229 => 73,  220 => 70,  214 => 112,  177 => 65,  169 => 60,  140 => 55,  132 => 67,  128 => 49,  107 => 34,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 95,  219 => 76,  217 => 75,  208 => 68,  204 => 84,  179 => 68,  159 => 79,  143 => 56,  135 => 68,  119 => 42,  102 => 21,  71 => 25,  67 => 15,  63 => 19,  59 => 17,  38 => 19,  94 => 17,  89 => 20,  85 => 24,  75 => 15,  68 => 24,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 26,  78 => 20,  46 => 15,  27 => 5,  44 => 7,  31 => 5,  28 => 4,  201 => 92,  196 => 78,  183 => 82,  171 => 64,  166 => 62,  163 => 80,  158 => 67,  156 => 58,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 13,  49 => 20,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 38,  69 => 31,  47 => 14,  40 => 12,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 59,  108 => 36,  101 => 53,  98 => 19,  96 => 33,  83 => 39,  74 => 14,  66 => 32,  55 => 15,  52 => 15,  50 => 28,  43 => 11,  41 => 21,  35 => 4,  32 => 4,  29 => 7,  209 => 82,  203 => 106,  199 => 67,  193 => 77,  189 => 98,  187 => 97,  182 => 94,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 60,  154 => 58,  149 => 71,  147 => 58,  144 => 49,  141 => 53,  133 => 55,  130 => 41,  125 => 44,  122 => 41,  116 => 38,  112 => 42,  109 => 58,  106 => 36,  103 => 33,  99 => 31,  95 => 28,  92 => 28,  86 => 28,  82 => 22,  80 => 19,  73 => 32,  64 => 17,  60 => 13,  57 => 20,  54 => 21,  51 => 14,  48 => 13,  45 => 14,  42 => 11,  39 => 8,  36 => 7,  33 => 8,  30 => 7,);
    }
}
