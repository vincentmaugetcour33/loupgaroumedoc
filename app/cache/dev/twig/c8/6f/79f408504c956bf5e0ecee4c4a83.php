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

        $_trait_1 = $this->env->loadTemplate("form_div_layout.html.twig");
        // line 7
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_1_blocks["user_choice_widget_options"] = $_trait_1_blocks["choice_widget_options"]; unset($_trait_1_blocks["choice_widget_options"]);

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'user_choice_widget_options' => array($this, 'block_user_choice_widget_options'),
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_user_choice_widget_options($context, array $blocks = array())
    {
        // line 10
        echo "            ";
        ob_start();
        // line 11
        echo "                ";
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 12
            echo "                    ";
            if (twig_test_iterable((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")))) {
                // line 13
                echo "                        <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["group_label"]) ? $context["group_label"] : $this->getContext($context, "group_label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\">
                            ";
                // line 14
                $context["options"] = (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice"));
                // line 15
                echo "                            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                        </optgroup>
                    ";
            } else {
                // line 18
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmuser/photo/membre_default_homme.jpg"), "html", null, true);
                echo "\" />
                        <option value=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "value"), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</option>
                    ";
            }
            // line 21
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "            ";
    }

    // line 25
    public function block_form_errors($context, array $blocks = array())
    {
        // line 26
        echo "              ";
        ob_start();
        // line 27
        echo "              ";
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 28
            echo "              <ul>
                  ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 30
                echo "                      <li>ERREUR : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                echo "</li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "              </ul>
              ";
        }
        // line 34
        echo "          ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 35
        echo "          ";
    }

    // line 38
    public function block_range_widget($context, array $blocks = array())
    {
        // line 39
        echo "        ";
        ob_start();
        // line 40
        echo "            <input type=\"range\" id=\"vm_userbundle_usertype_age\" value=\"0\" min=\"8\" name=\"vm_userbundle_usertype[age]\" onchange=\"showValue(this.value)\"/>
             <span id=\"value_age\" />  
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 43
        echo "        ";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "
";
        // line 48
        if (array_key_exists("form", $context)) {
            // line 49
            echo "    


    ";
            // line 52
            $this->displayBlock('content', $context, $blocks);
            // line 171
            echo "   
            
";
        }
        // line 174
        echo "      
           ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        echo " 
            
    <div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
         ";
        // line 56
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
        // line 62
        if (array_key_exists("editer", $context)) {
            // line 63
            echo "                  Si vous ne saisissez pas un nouveau mot de passe, votre mot de passe actuel est conservé. 
              ";
        }
        // line 65
        echo "          </p>
          
          <p class=\"text-info\">
              ";
        // line 68
        if ((!array_key_exists("editer", $context))) {
            // line 69
            echo "                  <b>Attention</b>, pour le moment l'ajout d'une photo personalisée ne peut être modifiée
                  ensuite. Sinon, il vous faudra supprimer votre compte et le recréer.
                  Si vous ne sélectionnez aucune photo, une photo par défaut sera attribuée à votre profil.
              ";
        }
        // line 73
        echo "          </p>
        
   <form class=\"\" method=\"post\" action=\"";
        // line 75
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
        // line 77
        if (array_key_exists("editer", $context)) {
            // line 78
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photoperso") == true)) {
                // line 79
                echo "                ( actuelle : <a class=\"photo\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
                echo "\" href=\"#\" style=\"cursor: pointer;\" rel=\"popover\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photo"), "html", null, true);
                echo "</a> )
                ";
            }
            // line 80
            echo "  

      ";
        }
        // line 82
        echo " 
        
              ";
        // line 85
        echo "                
      <tr>
      ";
        // line 88
        echo "      ";
        // line 89
        echo "      <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
        echo "</span></td>
      <td>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("help" => "foobar"));
        echo "</td> 
       </tr>
      
      <tr> 
        ";
        // line 96
        echo "      ";
        // line 97
        echo "      <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'errors');
        echo "</span></td>
      <td>";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "</td>      
     </tr>
     
      <tr>
      ";
        // line 104
        echo "       <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "</span></td>
      <td>
               ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                <i class=\"icon-large icon-envelope\" style=\"margin-bottom:-5px;\"></i>
         
      </td>   
     </tr>

      
        <tr>
       ";
        // line 116
        echo "       <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realname"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realname"), 'errors');
        echo "</span></td>
      <td>";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realname"), 'widget');
        echo "</td>
      </tr>
 
       
       ";
        // line 123
        echo "      ";
        if (array_key_exists("editer", $context)) {
            // line 124
            echo "      
                ";
            // line 125
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photoperso") == false)) {
                // line 126
                echo "                    <tr>
                      <td>";
                // line 127
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'label');
                echo "</td>
                      <td><span class=\"text-warning\">";
                // line 128
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'errors');
                echo "</span></td>
                     <td>";
                // line 129
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'widget');
                echo "</td>
                    </tr>   
                ";
            }
            // line 132
            echo "       ";
        } else {
            // line 133
            echo "              <tr>
                      <td>";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'label');
            echo "</td>
                     <td><span class=\"text-warning\">";
            // line 135
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'errors');
            echo "</span></td>
                     <td>";
            // line 136
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'widget');
            echo "</td>
                    </tr>        
       ";
        }
        // line 139
        echo "        
                    ";
        // line 140
        if ((!array_key_exists("editer", $context))) {
            // line 141
            echo "         <tr>
      ";
            // line 143
            echo "                <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
            echo "</td>
         <td><span class=\"text-warning\">";
            // line 144
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors');
            echo "</span></td>
         <td>";
            // line 145
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
            echo " </td>  
      </tr>
                ";
        }
        // line 148
        echo "      
        <tr>
      ";
        // line 151
        echo "         <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'label');
        echo "</td>
        <td><span class=\"text-warning\">";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'errors');
        echo "</span></td>
         <td>";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'widget');
        echo " </td>  
      </tr>
      
      <tr>
      ";
        // line 158
        echo "      <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age"), 'label');
        echo "</td>
      <td><span class=\"text-warning\">";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age"), 'errors');
        echo "</span></td>
      <td>";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age"), 'widget');
        echo "</td>   
      </tr>  
      
      </table>
      ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
       
      <input type=\"submit\" value=\"";
        // line 166
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

    // line 177
    public function block_javascripts($context, array $blocks = array())
    {
        // line 178
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
        return array (  497 => 178,  494 => 177,  480 => 166,  475 => 164,  468 => 160,  464 => 159,  459 => 158,  452 => 153,  448 => 152,  443 => 151,  439 => 148,  433 => 145,  429 => 144,  424 => 143,  421 => 141,  419 => 140,  416 => 139,  410 => 136,  406 => 135,  402 => 134,  399 => 133,  396 => 132,  390 => 129,  386 => 128,  382 => 127,  379 => 126,  377 => 125,  374 => 124,  371 => 123,  364 => 118,  360 => 117,  355 => 116,  344 => 107,  339 => 105,  334 => 104,  327 => 99,  323 => 98,  318 => 97,  316 => 96,  309 => 91,  305 => 90,  300 => 89,  298 => 88,  294 => 85,  290 => 82,  285 => 80,  275 => 79,  272 => 78,  270 => 77,  259 => 75,  255 => 73,  249 => 69,  247 => 68,  242 => 65,  238 => 63,  236 => 62,  223 => 56,  215 => 52,  210 => 174,  205 => 171,  203 => 52,  198 => 49,  196 => 48,  193 => 47,  190 => 46,  186 => 43,  181 => 40,  178 => 39,  175 => 38,  171 => 35,  168 => 34,  164 => 32,  155 => 30,  151 => 29,  148 => 28,  145 => 27,  142 => 26,  139 => 25,  135 => 23,  132 => 22,  118 => 21,  107 => 19,  102 => 18,  95 => 15,  93 => 14,  88 => 13,  85 => 12,  67 => 11,  64 => 10,  61 => 9,  56 => 5,  23 => 7,  14 => 6,);
    }
}
