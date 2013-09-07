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
        return array (  299 => 129,  287 => 123,  271 => 116,  267 => 115,  248 => 107,  225 => 98,  215 => 95,  205 => 91,  198 => 89,  174 => 79,  150 => 66,  100 => 47,  84 => 43,  20 => 1,  53 => 30,  77 => 38,  58 => 17,  110 => 48,  352 => 151,  349 => 150,  344 => 14,  330 => 12,  326 => 10,  320 => 139,  317 => 138,  300 => 140,  293 => 138,  280 => 132,  265 => 127,  262 => 114,  256 => 124,  251 => 122,  223 => 109,  202 => 96,  191 => 89,  188 => 88,  172 => 77,  160 => 72,  148 => 68,  146 => 65,  114 => 50,  90 => 29,  81 => 35,  420 => 243,  416 => 240,  380 => 210,  376 => 209,  373 => 208,  370 => 207,  366 => 182,  363 => 181,  357 => 5,  345 => 249,  343 => 207,  332 => 201,  327 => 200,  307 => 181,  263 => 142,  255 => 136,  239 => 118,  234 => 115,  232 => 114,  226 => 109,  218 => 96,  194 => 90,  190 => 86,  186 => 82,  161 => 65,  155 => 64,  152 => 63,  124 => 55,  97 => 46,  70 => 26,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 244,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 211,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 135,  309 => 183,  305 => 95,  298 => 139,  294 => 127,  285 => 89,  283 => 122,  278 => 121,  268 => 85,  264 => 84,  258 => 111,  252 => 108,  247 => 121,  241 => 128,  229 => 99,  220 => 70,  214 => 69,  177 => 80,  169 => 76,  140 => 55,  132 => 58,  128 => 57,  107 => 46,  61 => 18,  273 => 130,  269 => 94,  254 => 123,  243 => 106,  240 => 104,  238 => 103,  235 => 102,  230 => 82,  227 => 81,  224 => 71,  221 => 97,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 61,  143 => 56,  135 => 53,  119 => 49,  102 => 8,  71 => 36,  67 => 32,  63 => 19,  59 => 17,  38 => 16,  94 => 5,  89 => 20,  85 => 25,  75 => 27,  68 => 5,  56 => 16,  87 => 25,  21 => 2,  26 => 5,  93 => 28,  88 => 44,  78 => 28,  46 => 24,  27 => 5,  44 => 20,  31 => 5,  28 => 4,  201 => 90,  196 => 88,  183 => 81,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 60,  136 => 56,  121 => 55,  117 => 44,  105 => 46,  91 => 31,  62 => 31,  49 => 20,  24 => 4,  25 => 3,  19 => 2,  79 => 41,  72 => 24,  69 => 33,  47 => 14,  40 => 12,  37 => 7,  22 => 3,  246 => 90,  157 => 71,  145 => 46,  139 => 63,  131 => 52,  123 => 56,  120 => 53,  115 => 50,  111 => 37,  108 => 47,  101 => 45,  98 => 31,  96 => 33,  83 => 43,  74 => 14,  66 => 33,  55 => 25,  52 => 15,  50 => 14,  43 => 8,  41 => 14,  35 => 6,  32 => 5,  29 => 4,  209 => 92,  203 => 78,  199 => 67,  193 => 87,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 74,  162 => 72,  154 => 70,  149 => 51,  147 => 58,  144 => 61,  141 => 64,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 34,  106 => 9,  103 => 32,  99 => 7,  95 => 45,  92 => 33,  86 => 43,  82 => 42,  80 => 29,  73 => 37,  64 => 24,  60 => 30,  57 => 25,  54 => 24,  51 => 19,  48 => 27,  45 => 12,  42 => 21,  39 => 12,  36 => 7,  33 => 8,  30 => 6,);
    }
}
