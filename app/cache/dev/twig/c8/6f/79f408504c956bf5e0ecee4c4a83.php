<?php

/* VMUserBundle:Profile:formulaire.html.twig */
class __TwigTemplate_c86f79f408504c956bf5e0ecee4c4a83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
";
        // line 6
        if (array_key_exists("form", $context)) {
            // line 7
            echo "    
        
    
";
            // line 21
            echo "
    <div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
         ";
            // line 24
            if (array_key_exists("editer", $context)) {
                echo " MODIFICATION ";
            } else {
                echo " ENREGISTREMENT ";
            }
            echo "PROFIL
       </div>
            
      <div class=\"panel-body\"> <font color=\"red\"> Les champs marqués d'un astérisque sont obligatoires.</font>  
          ";
            // line 28
            if (array_key_exists("editer", $context)) {
                echo " Si vous ne saisissez pas un nouveau mot de passe, votre mot de
                                     passe actuel est conservé. ";
            }
            // line 30
            echo "   <form class=\"form-inline\" method=\"post\" action=\"";
            if (array_key_exists("editer", $context)) {
                echo $this->env->getExtension('routing')->getPath("vm_user_edit");
            } else {
                echo $this->env->getExtension('routing')->getPath("vm_user_ajout");
            }
            echo "\" enctype=\"multipart/form-data\">
      
      ";
            // line 32
            if (array_key_exists("editer", $context)) {
                // line 33
                echo "        ( actuelle : <a class=\"photo\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"), "html", null, true);
                echo "\" href=\"#\" style=\"cursor: pointer;\" rel=\"popover\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photo"), "html", null, true);
                echo "</a> )
           ";
                // line 37
                echo "      ";
            }
            echo " 
        ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
            echo "    
      ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "
      <input type=\"submit\" value=\"";
            // line 40
            if (array_key_exists("editer", $context)) {
                echo "Modifier";
            } else {
                echo "Ajouter";
            }
            echo "\" class=\"btn btn-default\" />
      <input type=\"button\" value=\"annuler\"  onclick=\"javascript:history.back()\" class=\"btn btn-primary\" />
  </form>
              </div></div>
              
";
        }
        // line 46
        echo "
";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
        <script language=\"javascript\" type=\"text/javascript\"> 
     (function(\$) { 
        \$(\"a.photo\").popover({trigger: 'hover',html:true, content: function() { var photo=\$(this).attr('id')+'-'+\$(this).html();
               return \"<img class='img-rounded' width=50 src='/bundles/vmuser/photo/\"+photo+\"' />\"; },
                delay: { show: 500, hide: 10} });

    }(jQuery));
    </script>
";
    }

    public function getTemplateName()
    {
        return "VMUserBundle:Profile:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  20 => 1,  118 => 50,  77 => 25,  58 => 28,  110 => 46,  352 => 151,  349 => 150,  330 => 12,  326 => 10,  320 => 8,  317 => 7,  300 => 140,  293 => 138,  280 => 132,  265 => 127,  262 => 126,  256 => 124,  251 => 122,  239 => 118,  232 => 114,  194 => 90,  191 => 89,  188 => 88,  172 => 77,  160 => 72,  148 => 68,  146 => 67,  114 => 50,  90 => 29,  81 => 35,  418 => 222,  394 => 218,  358 => 188,  354 => 187,  351 => 186,  348 => 185,  344 => 14,  335 => 5,  323 => 227,  321 => 185,  310 => 178,  292 => 161,  290 => 159,  234 => 115,  223 => 109,  215 => 98,  207 => 93,  202 => 96,  161 => 65,  155 => 64,  152 => 63,  124 => 55,  97 => 40,  70 => 26,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 221,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 189,  360 => 109,  355 => 106,  341 => 159,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 139,  294 => 90,  285 => 89,  283 => 133,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 121,  241 => 77,  229 => 113,  220 => 70,  214 => 69,  177 => 80,  169 => 76,  140 => 55,  132 => 61,  128 => 49,  107 => 23,  61 => 18,  273 => 130,  269 => 94,  254 => 123,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 75,  159 => 61,  143 => 56,  135 => 53,  119 => 49,  102 => 37,  71 => 19,  67 => 32,  63 => 30,  59 => 26,  38 => 16,  94 => 5,  89 => 38,  85 => 25,  75 => 33,  68 => 5,  56 => 21,  87 => 25,  21 => 2,  26 => 5,  93 => 39,  88 => 44,  78 => 28,  46 => 12,  27 => 5,  44 => 11,  31 => 7,  28 => 6,  201 => 92,  196 => 90,  183 => 76,  171 => 61,  166 => 75,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 60,  136 => 56,  121 => 33,  117 => 44,  105 => 46,  91 => 31,  62 => 23,  49 => 20,  24 => 4,  25 => 3,  19 => 2,  79 => 26,  72 => 24,  69 => 33,  47 => 24,  40 => 8,  37 => 7,  22 => 3,  246 => 120,  157 => 56,  145 => 46,  139 => 65,  131 => 52,  123 => 47,  120 => 53,  115 => 49,  111 => 37,  108 => 47,  101 => 45,  98 => 31,  96 => 33,  83 => 36,  74 => 15,  66 => 32,  55 => 25,  52 => 23,  50 => 14,  43 => 8,  41 => 14,  35 => 6,  32 => 5,  29 => 4,  209 => 94,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 74,  162 => 57,  154 => 70,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 34,  106 => 36,  103 => 21,  99 => 19,  95 => 42,  92 => 33,  86 => 43,  82 => 42,  80 => 17,  73 => 32,  64 => 24,  60 => 19,  57 => 25,  54 => 24,  51 => 19,  48 => 13,  45 => 12,  42 => 21,  39 => 12,  36 => 7,  33 => 8,  30 => 6,);
    }
}
