<?php

/* VMBlogBundle:Default:index.html.twig */
class __TwigTemplate_8431df7ef439dd554fb36465d072e450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VMBlogBundle::base.html.twig");

        $this->blocks = array(
            'vmblog_stylesheets' => array($this, 'block_vmblog_stylesheets'),
            'vmblog_body' => array($this, 'block_vmblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VMBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_vmblog_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    


   
";
    }

    // line 10
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 11
        echo "    
   ";
        // line 13
        echo "  ";
        echo $this->env->getExtension('vm_social_bar')->getSocialButtons();
        echo "
   <br/>
   ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "titre"), "html", null, true);
        echo "<br/>
   ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "resume"), "html", null, true);
        echo "
   
   <hr/>
   EXTRAIT (AU HASARD)
   ";
        // line 20
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VMBlogBundle:Extrait:index"));
        echo " 
 
   
 <script language=\"javascript\" type=\"text/javascript\">
 \$(document).ready(function() 
 {
    \$(\"ul.nav > li#accueil\").addClass('active');  
   });
</script>  
  
   
 
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  34 => 6,  90 => 29,  302 => 128,  300 => 127,  295 => 126,  282 => 120,  267 => 115,  256 => 111,  249 => 109,  236 => 103,  234 => 102,  231 => 101,  225 => 97,  190 => 76,  174 => 65,  150 => 56,  148 => 55,  134 => 49,  110 => 35,  97 => 30,  293 => 144,  290 => 143,  284 => 18,  279 => 17,  275 => 118,  271 => 14,  266 => 13,  261 => 11,  253 => 110,  251 => 7,  248 => 6,  242 => 5,  215 => 162,  194 => 143,  152 => 112,  146 => 108,  126 => 43,  118 => 39,  81 => 44,  58 => 32,  23 => 1,  76 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 121,  283 => 88,  278 => 86,  268 => 85,  264 => 114,  258 => 112,  252 => 80,  247 => 78,  241 => 106,  229 => 174,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 34,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 95,  219 => 76,  217 => 75,  208 => 68,  204 => 84,  179 => 68,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 57,  71 => 17,  67 => 15,  63 => 20,  59 => 14,  38 => 19,  94 => 28,  89 => 20,  85 => 24,  75 => 17,  68 => 24,  56 => 16,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 26,  78 => 20,  46 => 13,  27 => 4,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 78,  183 => 82,  171 => 64,  166 => 62,  163 => 62,  158 => 67,  156 => 58,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 34,  49 => 10,  24 => 3,  25 => 3,  19 => 1,  79 => 26,  72 => 26,  69 => 18,  47 => 9,  40 => 10,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 34,  83 => 23,  74 => 14,  66 => 14,  55 => 11,  52 => 15,  50 => 9,  43 => 11,  41 => 20,  35 => 4,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 77,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 60,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 53,  133 => 55,  130 => 41,  125 => 44,  122 => 41,  116 => 38,  112 => 42,  109 => 34,  106 => 36,  103 => 33,  99 => 31,  95 => 52,  92 => 28,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 20,  54 => 21,  51 => 19,  48 => 16,  45 => 8,  42 => 12,  39 => 6,  36 => 5,  33 => 6,  30 => 7,);
    }
}
