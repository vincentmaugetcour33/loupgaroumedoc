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
        return array (  495 => 192,  492 => 191,  478 => 180,  473 => 178,  466 => 174,  462 => 173,  457 => 172,  450 => 167,  446 => 166,  441 => 165,  437 => 162,  431 => 159,  427 => 158,  422 => 157,  419 => 155,  417 => 154,  414 => 153,  408 => 150,  404 => 149,  400 => 148,  397 => 147,  394 => 146,  388 => 143,  384 => 142,  380 => 141,  377 => 140,  375 => 139,  372 => 138,  369 => 137,  362 => 132,  358 => 131,  353 => 130,  342 => 121,  337 => 119,  332 => 118,  325 => 113,  321 => 112,  316 => 111,  314 => 110,  307 => 105,  303 => 104,  298 => 103,  296 => 102,  292 => 99,  288 => 96,  283 => 94,  273 => 93,  270 => 92,  268 => 91,  257 => 89,  253 => 87,  247 => 83,  245 => 82,  240 => 79,  236 => 77,  234 => 76,  221 => 70,  213 => 66,  208 => 188,  203 => 185,  201 => 66,  196 => 63,  194 => 62,  191 => 61,  188 => 60,  184 => 57,  180 => 55,  175 => 52,  158 => 50,  153 => 49,  149 => 47,  145 => 45,  142 => 44,  125 => 43,  122 => 42,  114 => 34,  111 => 33,  109 => 32,  106 => 31,  103 => 30,  100 => 29,  96 => 27,  91 => 24,  88 => 23,  85 => 22,  81 => 19,  78 => 18,  74 => 16,  65 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  49 => 9,  44 => 5,  14 => 6,);
    }
}
