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
                'selectsexe_widget' => array($this, 'block_selectsexe_widget'),
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_form_errors($context, array $blocks = array())
    {
        // line 10
        echo "              ";
        ob_start();
        // line 11
        echo "              ";
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 12
            echo "              <ul>
                  ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "                      <li>ERREUR : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                echo "</li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "              </ul>
              ";
        }
        // line 18
        echo "          ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 19
        echo "          ";
    }

    // line 22
    public function block_range_widget($context, array $blocks = array())
    {
        // line 23
        echo "        ";
        ob_start();
        // line 24
        echo "            <input type=\"range\" id=\"vm_userbundle_usertype_age\" value=\"0\" min=\"8\" name=\"vm_userbundle_usertype[age]\" onchange=\"showValue(this.value)\"/>
             <span id=\"value_age\" />  
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 27
        echo "        ";
    }

    // line 29
    public function block_selectsexe_widget($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        ob_start();
        // line 31
        echo "             
            ";
        // line 32
        if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
            // line 33
            echo "                ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 34
            echo "             <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " 
                 class=\"selectpicker\" data-width=\"auto\"
                 data-header=\"Vous êtes ?\" 
                    style=\"height:100%;\" >
                  ";
            // line 42
            echo "                  
                  ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 44
                echo "                        <option ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                    // line 45
                    echo "                                     data-icon=\"icon-large icon-user\"
                                ";
                } else {
                    // line 47
                    echo "                                    data-icon=\"icon-large icon-girl\"
                                ";
                }
                // line 49
                echo "                             value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "value"), "html", null, true);
                echo "\">
                              ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "label"), "html", null, true);
                echo "
                        </option>
                  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "   
             </select>
             ";
        }
        // line 55
        echo "               
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 57
        echo "        ";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
        echo "
";
        // line 62
        if (array_key_exists("form", $context)) {
            // line 63
            echo "    


    ";
            // line 66
            $this->displayBlock('content', $context, $blocks);
            // line 185
            echo "   
            
";
        }
        // line 188
        echo "      
           ";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        echo " 
            
    <div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
         ";
        // line 70
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
        // line 76
        if (array_key_exists("editer", $context)) {
            // line 77
            echo "                  Si vous ne saisissez pas un nouveau mot de passe, votre mot de passe actuel est conservé. 
              ";
        }
        // line 79
        echo "          </p>
          
          <p class=\"text-info\">
              ";
        // line 82
        if ((!array_key_exists("editer", $context))) {
            // line 83
            echo "                  <b>Attention</b>, pour le moment l'ajout d'une photo personalisée ne peut être modifiée
                  ensuite. Sinon, il vous faudra supprimer votre compte et le recréer.
                  Si vous ne sélectionnez aucune photo, une photo par défaut sera attribuée à votre profil.
              ";
        }
        // line 87
        echo "          </p>
        
   <form class=\"\" method=\"post\" action=\"";
        // line 89
        if (array_key_exists("editer", $context)) {
            echo $this->env->getExtension('routing')->getPath("vm_user_edit");
        } else {
            echo $this->env->getExtension('routing')->getPath("vm_user_ajout");
        }
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
       <table>
       ";
        // line 91
        if (array_key_exists("editer", $context)) {
            // line 92
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photoperso") == true)) {
                // line 93
                echo "                ( actuelle : <a class=\"photo\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
                echo "\" href=\"#\" style=\"cursor: pointer;\" rel=\"popover\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photo"), "html", null, true);
                echo "</a> )
                ";
            }
            // line 94
            echo "  

      ";
        }
        // line 96
        echo " 
        
              ";
        // line 99
        echo "                
      <tr>
      ";
        // line 102
        echo "      ";
        // line 103
        echo "      <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "</span></td>
      <td>";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("help" => "foobar"));
        echo "</td> 
       </tr>
      
      <tr> 
        ";
        // line 110
        echo "      ";
        // line 111
        echo "      <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'errors');
        echo "</span></td>
      <td>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "</td>      
     </tr>
     
      <tr>
      ";
        // line 118
        echo "       <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "</span></td>
      <td>
               ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                <i class=\"icon-large icon-envelope\" style=\"margin-bottom:-5px;\"></i>
         
      </td>   
     </tr>

      
        <tr>
       ";
        // line 130
        echo "       <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realname"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realname"), 'errors');
        echo "</span></td>
      <td>";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realname"), 'widget');
        echo "</td>
      </tr>
 
       
       ";
        // line 137
        echo "      ";
        if (array_key_exists("editer", $context)) {
            // line 138
            echo "      
                ";
            // line 139
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photoperso") == false)) {
                // line 140
                echo "                    <tr>
                      <td>";
                // line 141
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'label');
                echo "</td>
                      <td><span class=\"text-warning\">";
                // line 142
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'errors');
                echo "</span></td>
                     <td>";
                // line 143
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'widget');
                echo "</td>
                    </tr>   
                ";
            }
            // line 146
            echo "       ";
        } else {
            // line 147
            echo "              <tr>
                      <td>";
            // line 148
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'label');
            echo "</td>
                     <td><span class=\"text-warning\">";
            // line 149
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'errors');
            echo "</span></td>
                     <td>";
            // line 150
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'widget');
            echo "</td>
                    </tr>        
       ";
        }
        // line 153
        echo "        
                    ";
        // line 154
        if ((!array_key_exists("editer", $context))) {
            // line 155
            echo "         <tr>
      ";
            // line 157
            echo "                <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
            echo "</td>
         <td><span class=\"text-warning\">";
            // line 158
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors');
            echo "</span></td>
         <td>";
            // line 159
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
            echo " </td>  
      </tr>
                ";
        }
        // line 162
        echo "      
        <tr>
      ";
        // line 165
        echo "         <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'label');
        echo "</td>
        <td><span class=\"text-warning\">";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'errors');
        echo "</span></td>
         <td>";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'widget');
        echo " </td>  
      </tr>
      
      <tr>
      ";
        // line 172
        echo "      <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age"), 'errors');
        echo "</span></td>
      <td>";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age"), 'widget');
        echo "</td>   
      </tr>  
      
      </table>
      ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
       
      <input type=\"submit\" value=\"";
        // line 180
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

    // line 191
    public function block_javascripts($context, array $blocks = array())
    {
        // line 192
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
        <script language=\"javascript\" type=\"text/javascript\"> 
     (function(\$) { 
         // active le plugin pour la personalisation du champ select
        \$('.selectpicker').selectpicker('deselectAll');
        
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
        return array (  495 => 192,  492 => 191,  478 => 180,  473 => 178,  466 => 174,  462 => 173,  450 => 167,  446 => 166,  441 => 165,  431 => 159,  422 => 157,  419 => 155,  417 => 154,  414 => 153,  408 => 150,  404 => 149,  400 => 148,  397 => 147,  394 => 146,  388 => 143,  375 => 139,  369 => 137,  353 => 130,  342 => 121,  332 => 118,  325 => 113,  321 => 112,  316 => 111,  307 => 105,  303 => 104,  292 => 99,  270 => 92,  257 => 89,  253 => 87,  245 => 82,  234 => 76,  184 => 57,  180 => 55,  175 => 52,  153 => 49,  14 => 6,  20 => 1,  104 => 13,  97 => 5,  53 => 32,  77 => 25,  58 => 12,  113 => 42,  34 => 4,  386 => 157,  380 => 141,  377 => 140,  372 => 138,  358 => 131,  354 => 10,  348 => 8,  329 => 145,  327 => 144,  286 => 132,  282 => 131,  279 => 130,  271 => 127,  236 => 77,  233 => 117,  223 => 111,  194 => 62,  191 => 61,  188 => 60,  172 => 77,  160 => 72,  146 => 67,  124 => 55,  114 => 34,  90 => 29,  81 => 19,  70 => 24,  494 => 258,  468 => 257,  464 => 252,  432 => 223,  428 => 222,  424 => 221,  420 => 220,  416 => 219,  412 => 218,  406 => 216,  399 => 190,  363 => 209,  345 => 7,  343 => 190,  319 => 169,  310 => 163,  296 => 102,  288 => 96,  280 => 144,  274 => 140,  272 => 139,  267 => 136,  265 => 133,  259 => 121,  251 => 125,  242 => 109,  226 => 94,  218 => 91,  213 => 66,  170 => 67,  148 => 68,  137 => 53,  110 => 47,  100 => 29,  84 => 43,  65 => 14,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 172,  453 => 151,  444 => 149,  440 => 148,  437 => 162,  435 => 146,  430 => 144,  427 => 158,  423 => 142,  413 => 134,  409 => 217,  407 => 131,  402 => 191,  398 => 129,  393 => 5,  387 => 122,  384 => 142,  381 => 263,  379 => 216,  374 => 116,  368 => 210,  365 => 111,  362 => 132,  360 => 109,  355 => 106,  341 => 105,  337 => 119,  322 => 143,  314 => 110,  312 => 138,  309 => 137,  305 => 95,  298 => 103,  294 => 135,  285 => 89,  283 => 94,  278 => 86,  268 => 91,  264 => 84,  258 => 81,  252 => 80,  247 => 83,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 80,  169 => 76,  140 => 55,  132 => 61,  128 => 49,  107 => 46,  61 => 13,  273 => 93,  269 => 94,  254 => 92,  243 => 122,  240 => 79,  238 => 119,  235 => 74,  230 => 82,  227 => 113,  224 => 71,  221 => 70,  219 => 76,  217 => 75,  208 => 188,  204 => 98,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 32,  63 => 19,  59 => 26,  94 => 5,  89 => 20,  85 => 22,  75 => 40,  68 => 5,  56 => 21,  87 => 32,  21 => 2,  26 => 5,  93 => 34,  88 => 23,  78 => 18,  27 => 5,  44 => 5,  31 => 7,  201 => 66,  196 => 63,  183 => 82,  171 => 61,  166 => 75,  163 => 62,  158 => 50,  156 => 64,  151 => 63,  142 => 44,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 46,  91 => 24,  62 => 23,  49 => 9,  25 => 3,  24 => 4,  46 => 26,  38 => 6,  28 => 6,  19 => 2,  79 => 26,  72 => 16,  69 => 33,  47 => 8,  40 => 7,  37 => 13,  22 => 3,  246 => 90,  157 => 56,  145 => 45,  139 => 65,  131 => 52,  123 => 47,  120 => 53,  115 => 39,  111 => 33,  108 => 41,  101 => 45,  98 => 31,  96 => 27,  83 => 36,  74 => 16,  66 => 32,  55 => 11,  52 => 10,  50 => 14,  43 => 7,  41 => 14,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 185,  199 => 67,  193 => 73,  189 => 71,  187 => 71,  182 => 66,  176 => 64,  173 => 68,  168 => 72,  164 => 74,  162 => 65,  154 => 70,  149 => 47,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 41,  125 => 43,  122 => 42,  116 => 51,  112 => 42,  109 => 32,  106 => 31,  103 => 30,  99 => 36,  95 => 42,  92 => 31,  86 => 43,  82 => 42,  80 => 43,  73 => 19,  64 => 24,  60 => 19,  57 => 25,  54 => 24,  51 => 19,  48 => 29,  45 => 12,  42 => 16,  39 => 12,  36 => 7,  33 => 8,  30 => 6,);
    }
}
