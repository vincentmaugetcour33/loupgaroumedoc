<?php

/* VMBlogBundle:Default:biographie.html.twig */
class __TwigTemplate_d0cd26003808b2d376e0ac17730fceed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VMBlogBundle::base.html.twig");

        $this->blocks = array(
            'vmblog_body' => array($this, 'block_vmblog_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 4
        echo " 
    ";
        // line 6
        echo "    ";
        echo " <br/>
    
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#parcours\" data-toggle=\"tab\">Mon parcours</a></li>
        <li><a href=\"#livres\" data-toggle=\"tab\">Mes livres</a></li>
    </ul>
    
    <div class=\"tab-content\">
       <div class=\"tab-pane active\" id=\"parcours\">
            <p style=\"text-align:justify;text-indent:40px;\">
                ";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("biographie.vie_auteur", array(), "messages");
        // line 17
        echo "            </p>    
       </div>
       <div class=\"tab-pane\" id=\"livres\">
            
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres_secondaires"]) ? $context["livres_secondaires"] : $this->getContext($context, "livres_secondaires")));
        foreach ($context['_seq'] as $context["key"] => $context["livre"]) {
            // line 22
            echo "                   <div class=\"clearfix\">
                        <div id=\"couverture\" style=\"width:80px;\" class=\"thumbnail pull-left\">
                                <img title=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "titre"), "html", null, true);
            echo "\" width=100 style=\"cursor: pointer;\" rel=\"popover\" 
                                 src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmblog/images/" . $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "couverture"))), "html", null, true);
            echo "\" alt=\"photo ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "titre"), "html", null, true);
            echo "\" />
                       </div>
                       
                         <div style=\"\">EDITION :       ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "edition"), "html", null, true);
            echo "    </div>
                         <div style=\"\">LIEN INTERNET :      <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "url"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "url"), "html", null, true);
            echo " </a>   </div>
                     </div>               
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " 
                 
       </div>
    </div>



  
  
    
    
 
";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
    <script language=\"javascript\" type=\"text/javascript\"> 
 (function(\$) { 
    \$(\"ul.nav > li#accueil\").removeClass('active');  
   \$(\"ul.nav > li#biographie\").addClass('active');
   \$(\"img\").popover({trigger: 'hover',html:true, content: function() { var couverture=\$(this).attr('src');
           return \"<img class='img-rounded' width=150 src='\"+couverture+\"' />\"; },
            delay: { show: 500, hide: 10} });
}(jQuery));
</script>

";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Default:biographie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  386 => 157,  380 => 155,  377 => 154,  372 => 14,  358 => 12,  354 => 10,  348 => 8,  329 => 145,  327 => 144,  286 => 132,  282 => 131,  279 => 130,  271 => 127,  236 => 118,  233 => 117,  223 => 111,  194 => 90,  191 => 89,  188 => 88,  172 => 77,  160 => 72,  146 => 67,  124 => 55,  114 => 50,  90 => 29,  81 => 35,  70 => 28,  494 => 258,  468 => 257,  464 => 252,  432 => 223,  428 => 222,  424 => 221,  420 => 220,  416 => 219,  412 => 218,  406 => 216,  399 => 190,  363 => 209,  345 => 7,  343 => 190,  319 => 169,  310 => 163,  296 => 154,  288 => 148,  280 => 144,  274 => 140,  272 => 139,  267 => 136,  265 => 133,  259 => 121,  251 => 125,  242 => 109,  226 => 94,  218 => 91,  213 => 89,  170 => 67,  148 => 68,  137 => 53,  110 => 47,  100 => 33,  84 => 27,  65 => 15,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 217,  407 => 131,  402 => 191,  398 => 129,  393 => 5,  387 => 122,  384 => 121,  381 => 263,  379 => 216,  374 => 116,  368 => 210,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 143,  314 => 99,  312 => 138,  309 => 137,  305 => 95,  298 => 91,  294 => 135,  285 => 89,  283 => 88,  278 => 86,  268 => 126,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 80,  169 => 76,  140 => 55,  132 => 61,  128 => 49,  107 => 46,  61 => 23,  273 => 128,  269 => 94,  254 => 92,  243 => 122,  240 => 86,  238 => 119,  235 => 74,  230 => 82,  227 => 113,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 87,  204 => 98,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 14,  59 => 22,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 25,  56 => 21,  87 => 28,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 24,  27 => 4,  44 => 12,  31 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 75,  163 => 62,  158 => 67,  156 => 64,  151 => 63,  142 => 55,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 46,  91 => 31,  62 => 23,  49 => 19,  25 => 3,  24 => 3,  46 => 7,  38 => 6,  28 => 5,  19 => 1,  79 => 26,  72 => 16,  69 => 18,  47 => 8,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 65,  131 => 52,  123 => 47,  120 => 53,  115 => 39,  111 => 37,  108 => 47,  101 => 45,  98 => 31,  96 => 33,  83 => 36,  74 => 14,  66 => 16,  55 => 10,  52 => 21,  50 => 17,  43 => 7,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 71,  182 => 66,  176 => 64,  173 => 68,  168 => 72,  164 => 74,  162 => 65,  154 => 70,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 41,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 42,  92 => 31,  86 => 38,  82 => 26,  80 => 29,  73 => 19,  64 => 24,  60 => 22,  57 => 22,  54 => 21,  51 => 19,  48 => 16,  45 => 8,  42 => 12,  39 => 9,  36 => 7,  33 => 6,  30 => 5,);
    }
}
