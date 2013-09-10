<?php

/* VMUserBundle:Profile:formulaire.html.twig */
class __TwigTemplate_c86f79f408504c956bf5e0ecee4c4a83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $_trait_0 = $this->env->loadTemplate("form_div_layout.html.twig");
        // line 6
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_0_blocks["base_form_errors"] = $_trait_0_blocks["form_errors"]; unset($_trait_0_blocks["form_errors"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_errors' => array($this, 'block_form_errors'),
                'range_widget' => array($this, 'block_range_widget'),
                'body' => array($this, 'block_body'),
                'content' => array($this, 'block_content'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_form_errors($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, $this->getContext($context, "errors")) > 0))) {
            // line 13
            echo "    <ul>
        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                echo "            <li>ERREUR : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_range_widget($context, array $blocks = array())
    {
        // line 23
        ob_start();
        // line 24
        echo "    <input type=\"range\" id=\"vm_userbundle_usertype_age\" value=\"0\" min=\"8\" name=\"vm_userbundle_usertype[age]\" onchange=\"showValue(this.value)\"/>
     <span id=\"value_age\" />  
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "
";
        // line 32
        if (array_key_exists("form", $context)) {
            // line 33
            echo "    


    ";
            // line 36
            $this->displayBlock('content', $context, $blocks);
            // line 151
            echo "   
            
";
        }
        // line 154
        echo "      
           ";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        echo " 
            
    <div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
         ";
        // line 40
        if (array_key_exists("editer", $context)) {
            echo " MODIFICATION ";
        } else {
            echo " ENREGISTREMENT ";
        }
        echo "PROFIL
       </div>
            
      <div class=\"panel-body\">
          <p style=\"color:red;\">
              Les champs marqués d'un astérisque sont obligatoires.
              ";
        // line 46
        if (array_key_exists("editer", $context)) {
            // line 47
            echo "                  Si vous ne saisissez pas un nouveau mot de passe, votre mot de passe actuel est conservé. 
              ";
        }
        // line 49
        echo "          </p>
          
          <p class=\"text-info\">
              ";
        // line 52
        if ((!array_key_exists("editer", $context))) {
            // line 53
            echo "                  <b>Attention</b>, pour le moment l'ajout d'une photo personalisée ne peut être modifiée
                  ensuite. Sinon, il vous faudra supprimer votre compte et le recréer.
                  Si vous ne sélectionnez aucune photo, une photo par défaut sera attribuée à votre profil.
              ";
        }
        // line 57
        echo "          </p>
        
   <form class=\"\" method=\"post\" action=\"";
        // line 59
        if (array_key_exists("editer", $context)) {
            echo $this->env->getExtension('routing')->getPath("vm_user_edit");
        } else {
            echo $this->env->getExtension('routing')->getPath("vm_user_ajout");
        }
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " >
       <table>
       ";
        // line 61
        if (array_key_exists("editer", $context)) {
            // line 62
            echo "                ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photoperso") == true)) {
                // line 63
                echo "                ( actuelle : <a class=\"photo\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"), "html", null, true);
                echo "\" href=\"#\" style=\"cursor: pointer;\" rel=\"popover\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photo"), "html", null, true);
                echo "</a> )
                ";
            }
            // line 64
            echo "  

      ";
        }
        // line 66
        echo " 
        
              ";
        // line 69
        echo "                
      <tr>
      ";
        // line 72
        echo "      ";
        // line 73
        echo "      <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'errors');
        echo "</span></td>
      <td>";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget', array("help" => "foobar"));
        echo "</td> 
       </tr>
      
      <tr> 
        ";
        // line 80
        echo "      ";
        // line 81
        echo "      <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'errors');
        echo "</span></td>
      <td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'widget');
        echo "</td>      
     </tr>
     
      <tr>
      ";
        // line 88
        echo "       <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
        echo "</span></td>
      <td>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
        echo "</td>   
     </tr>

      
        <tr>
       ";
        // line 96
        echo "       <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "realname"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "realname"), 'errors');
        echo "</span></td>
      <td>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "realname"), 'widget');
        echo "</td>
      </tr>
 
       
       ";
        // line 103
        echo "      ";
        if (array_key_exists("editer", $context)) {
            // line 104
            echo "      
                ";
            // line 105
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photoperso") == false)) {
                // line 106
                echo "                    <tr>
                      <td>";
                // line 107
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'label');
                echo "</td>
                      <td><span class=\"text-warning\">";
                // line 108
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'errors');
                echo "</span></td>
                     <td>";
                // line 109
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'widget');
                echo "</td>
                    </tr>   
                ";
            }
            // line 112
            echo "       ";
        } else {
            // line 113
            echo "              <tr>
                      <td>";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'label');
            echo "</td>
                     <td><span class=\"text-warning\">";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'errors');
            echo "</span></td>
                     <td>";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'widget');
            echo "</td>
                    </tr>        
       ";
        }
        // line 119
        echo "        
                    ";
        // line 120
        if ((!array_key_exists("editer", $context))) {
            // line 121
            echo "         <tr>
      ";
            // line 123
            echo "                <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'label');
            echo "</td>
         <td><span class=\"text-warning\">";
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'errors');
            echo "</span></td>
         <td>";
            // line 125
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'widget');
            echo " </td>  
      </tr>
                ";
        }
        // line 128
        echo "      
        <tr>
      ";
        // line 131
        echo "         <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'label');
        echo "</td>
        <td><span class=\"text-warning\">";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'errors');
        echo "</span></td>
         <td>";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'widget');
        echo " </td>  
      </tr>
      
      <tr>
      ";
        // line 138
        echo "      <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "age"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "age"), 'errors');
        echo "</span></td>
      <td>";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "age"), 'widget');
        echo "</td>   
      </tr>  
      
      </table>
      ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
        echo "
       
      <input type=\"submit\" value=\"";
        // line 146
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

    // line 157
    public function block_javascripts($context, array $blocks = array())
    {
        // line 158
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
        <script language=\"javascript\" type=\"text/javascript\"> 
     (function(\$) { 
        \$(\"a.photo\").popover({trigger: 'hover',html:true, content: function() { var photo=\$(this).attr('id')+'-'+\$(this).html();
               return \"<img class='img-rounded' width=50 src='/bundles/vmuser/photo/\"+photo+\"' />\"; },
                delay: { show: 500, hide: 10} });

        \$(\"#value_age\").html(\"8 ans\");            

  }(jQuery));
  
    function showValue(value)
    {
    document.getElementById(\"value_age\").innerHTML=value+\" ans\";    
    }    
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
        return array (  397 => 158,  394 => 157,  375 => 144,  364 => 139,  359 => 138,  348 => 132,  339 => 128,  333 => 125,  329 => 124,  324 => 123,  321 => 121,  319 => 120,  316 => 119,  310 => 116,  306 => 115,  302 => 114,  299 => 113,  296 => 112,  290 => 109,  286 => 108,  282 => 107,  279 => 106,  277 => 105,  274 => 104,  271 => 103,  260 => 97,  231 => 83,  222 => 81,  213 => 75,  198 => 69,  174 => 61,  153 => 53,  127 => 40,  14 => 6,  84 => 43,  20 => 1,  104 => 13,  100 => 32,  65 => 36,  53 => 32,  77 => 25,  110 => 47,  58 => 17,  34 => 4,  352 => 133,  349 => 150,  344 => 14,  330 => 12,  326 => 10,  320 => 8,  317 => 7,  300 => 140,  293 => 138,  280 => 132,  265 => 127,  262 => 126,  256 => 124,  251 => 122,  223 => 109,  202 => 72,  191 => 89,  188 => 88,  172 => 77,  160 => 72,  148 => 68,  146 => 49,  114 => 154,  90 => 29,  81 => 35,  441 => 246,  421 => 245,  417 => 241,  380 => 146,  376 => 209,  373 => 208,  370 => 207,  366 => 182,  363 => 181,  357 => 5,  345 => 251,  343 => 131,  332 => 201,  327 => 200,  307 => 181,  263 => 142,  255 => 96,  239 => 118,  234 => 115,  232 => 114,  226 => 109,  218 => 104,  194 => 66,  190 => 83,  186 => 82,  161 => 65,  155 => 64,  152 => 63,  124 => 55,  97 => 31,  70 => 26,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 211,  381 => 120,  379 => 119,  374 => 116,  368 => 140,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 183,  305 => 95,  298 => 139,  294 => 90,  285 => 89,  283 => 133,  278 => 86,  268 => 85,  264 => 98,  258 => 81,  252 => 80,  247 => 90,  241 => 128,  229 => 113,  220 => 80,  214 => 69,  177 => 80,  169 => 76,  140 => 46,  132 => 61,  128 => 49,  107 => 36,  61 => 35,  273 => 130,  269 => 94,  254 => 123,  243 => 89,  240 => 86,  238 => 88,  235 => 74,  230 => 82,  227 => 82,  224 => 71,  221 => 77,  219 => 107,  217 => 75,  208 => 68,  204 => 73,  179 => 63,  159 => 57,  143 => 56,  135 => 53,  119 => 36,  102 => 33,  71 => 19,  67 => 32,  63 => 19,  59 => 13,  38 => 6,  94 => 30,  89 => 20,  85 => 23,  75 => 17,  68 => 5,  56 => 12,  87 => 24,  21 => 2,  26 => 5,  93 => 28,  88 => 44,  78 => 28,  46 => 26,  27 => 5,  44 => 22,  31 => 7,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 75,  163 => 59,  158 => 67,  156 => 66,  151 => 52,  142 => 47,  138 => 60,  136 => 56,  121 => 50,  117 => 44,  105 => 46,  91 => 31,  62 => 14,  49 => 20,  24 => 4,  25 => 3,  19 => 2,  79 => 26,  72 => 24,  69 => 33,  47 => 8,  40 => 7,  37 => 13,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 65,  131 => 52,  123 => 47,  120 => 53,  115 => 47,  111 => 37,  108 => 47,  101 => 45,  98 => 31,  96 => 33,  83 => 36,  74 => 14,  66 => 15,  55 => 25,  52 => 23,  50 => 14,  43 => 5,  41 => 14,  35 => 5,  32 => 4,  29 => 3,  209 => 74,  203 => 78,  199 => 67,  193 => 73,  189 => 64,  187 => 84,  182 => 66,  176 => 62,  173 => 65,  168 => 72,  164 => 74,  162 => 57,  154 => 70,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 151,  106 => 36,  103 => 32,  99 => 31,  95 => 42,  92 => 33,  86 => 43,  82 => 22,  80 => 43,  73 => 19,  64 => 24,  60 => 19,  57 => 25,  54 => 11,  51 => 10,  48 => 9,  45 => 12,  42 => 16,  39 => 12,  36 => 7,  33 => 8,  30 => 6,);
    }
}
