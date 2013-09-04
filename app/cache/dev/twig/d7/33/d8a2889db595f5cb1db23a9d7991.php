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
        return array (  34 => 6,  118 => 32,  77 => 25,  323 => 139,  320 => 138,  303 => 128,  301 => 127,  296 => 126,  286 => 121,  265 => 114,  259 => 112,  257 => 111,  250 => 109,  242 => 106,  237 => 103,  232 => 101,  226 => 97,  222 => 95,  205 => 84,  197 => 78,  194 => 77,  191 => 76,  180 => 68,  175 => 65,  172 => 64,  167 => 62,  127 => 43,  84 => 23,  404 => 208,  380 => 204,  348 => 175,  344 => 174,  340 => 173,  334 => 171,  330 => 146,  327 => 145,  321 => 5,  307 => 171,  297 => 164,  276 => 118,  234 => 112,  223 => 102,  215 => 98,  207 => 93,  202 => 90,  161 => 65,  155 => 64,  152 => 63,  124 => 51,  104 => 33,  90 => 39,  58 => 17,  53 => 12,  76 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 207,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 172,  322 => 101,  314 => 99,  312 => 98,  309 => 213,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 120,  278 => 147,  268 => 115,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 63,  140 => 55,  132 => 51,  128 => 49,  107 => 23,  61 => 18,  273 => 96,  269 => 94,  254 => 110,  243 => 88,  240 => 86,  238 => 85,  235 => 102,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 75,  159 => 61,  143 => 56,  135 => 49,  119 => 39,  102 => 32,  71 => 19,  67 => 14,  63 => 13,  59 => 17,  38 => 5,  94 => 35,  89 => 29,  85 => 25,  75 => 27,  68 => 29,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 27,  46 => 24,  27 => 5,  44 => 11,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 76,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 66,  151 => 56,  142 => 53,  138 => 60,  136 => 56,  121 => 33,  117 => 38,  105 => 40,  91 => 27,  62 => 22,  49 => 20,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 30,  69 => 21,  47 => 14,  40 => 12,  37 => 6,  22 => 3,  246 => 120,  157 => 58,  145 => 46,  139 => 45,  131 => 52,  123 => 41,  120 => 40,  115 => 43,  111 => 35,  108 => 34,  101 => 32,  98 => 30,  96 => 33,  83 => 25,  74 => 15,  66 => 32,  55 => 15,  52 => 15,  50 => 14,  43 => 15,  41 => 21,  35 => 5,  32 => 4,  29 => 7,  209 => 94,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 55,  147 => 58,  144 => 61,  141 => 48,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 48,  112 => 42,  109 => 34,  106 => 43,  103 => 21,  99 => 19,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 32,  73 => 26,  64 => 13,  60 => 13,  57 => 28,  54 => 19,  51 => 19,  48 => 13,  45 => 12,  42 => 11,  39 => 12,  36 => 7,  33 => 8,  30 => 3,);
    }
}
