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
            
      <div class=\"panel-body\">
          <p style=\"color:red;\">
              Les champs marqués d'un astérisque sont obligatoires.
              ";
            // line 30
            if (array_key_exists("editer", $context)) {
                // line 31
                echo "                  Si vous ne saisissez pas un nouveau mot de passe, votre mot de passe actuel est conservé. 
              ";
            }
            // line 33
            echo "          </p>
          
          <p class=\"text-info\">
              ";
            // line 36
            if ((!array_key_exists("editer", $context))) {
                // line 37
                echo "                  <b>Attention</b>, pour le moment l'ajout d'une photo personalisée ne peut être modifiée
                  ensuite. Sinon, il vous faudra supprimer votre compte et le recréer.
                  Si vous ne sélectionnez aucune photo, une photo par défaut sera attribuée à votre profil.
              ";
            }
            // line 41
            echo "          </p>
        
   <form class=\"\" method=\"post\" action=\"";
            // line 43
            if (array_key_exists("editer", $context)) {
                echo $this->env->getExtension('routing')->getPath("vm_user_edit");
            } else {
                echo $this->env->getExtension('routing')->getPath("vm_user_ajout");
            }
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
            echo " >
       <table>
       ";
            // line 45
            if (array_key_exists("editer", $context)) {
                // line 46
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photoperso") == true)) {
                    // line 47
                    echo "                ( actuelle : <a class=\"photo\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"), "html", null, true);
                    echo "\" href=\"#\" style=\"cursor: pointer;\" rel=\"popover\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photo"), "html", null, true);
                    echo "</a> )
                ";
                }
                // line 48
                echo "  

      ";
            }
            // line 50
            echo " 
        
      
      <tr>
      ";
            // line 55
            echo "      ";
            // line 56
            echo "      <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'label');
            echo "</td>
      <td><span class=\"text-warning\">";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'errors');
            echo "</span></td>
      <td>";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget');
            echo "</td> 
       </tr>
      
      <tr> 
        ";
            // line 63
            echo "      ";
            // line 64
            echo "      <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'label');
            echo "</td>
      <td><span class=\"text-warning\">";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'errors');
            echo "</span></td>
      <td>";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'widget');
            echo "</td>      
     </tr>
     
      <tr>
      ";
            // line 71
            echo "       <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label');
            echo "</td>
      <td><span class=\"text-warning\">";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
            echo "</span></td>
      <td>";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
            echo "</td>   
     </tr>

      
        <tr>
       ";
            // line 79
            echo "                <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "realname"), 'label');
            echo "</td>
       <td><span class=\"text-warning\">";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "realname"), 'errors');
            echo "</span></td>
      <td>";
            // line 81
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "realname"), 'widget');
            echo "</td>
      </tr>
 
       
       ";
            // line 86
            echo "      ";
            if (array_key_exists("editer", $context)) {
                // line 87
                echo "      
                ";
                // line 88
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photoperso") == false)) {
                    // line 89
                    echo "                    <tr>
                      <td>";
                    // line 90
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'label');
                    echo "</td>
                      <td><span class=\"text-warning\">";
                    // line 91
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'errors');
                    echo "</span></td>
                     <td>";
                    // line 92
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'widget');
                    echo "</td>
                    </tr>   
                ";
                }
                // line 95
                echo "       ";
            } else {
                // line 96
                echo "              <tr>
                      <td>";
                // line 97
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'label');
                echo "</td>
                      <td><span class=\"text-warning\">";
                // line 98
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'errors');
                echo "</span></td>
                     <td>";
                // line 99
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'widget');
                echo "</td>
                    </tr>        
       ";
            }
            // line 102
            echo "        
        
        <tr>
      ";
            // line 106
            echo "                <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'label');
            echo "</td>
         <td><span class=\"text-warning\">";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'errors');
            echo "</span></td>
         <td>";
            // line 108
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'widget');
            echo " </td>  
      </tr>
      
      <tr>
      ";
            // line 113
            echo "      <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "age"), 'label');
            echo "</td>
      <td><span class=\"text-warning\">";
            // line 114
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "age"), 'errors');
            echo "</span></td>
      <td>";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "age"), 'widget');
            echo "</td>   
      </tr>  
      
      </table>
      ";
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "_token"), 'widget');
            echo "
       
      <input type=\"submit\" value=\"";
            // line 121
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
        // line 127
        echo "
";
    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        // line 131
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
        return array (  298 => 131,  295 => 130,  290 => 127,  277 => 121,  272 => 119,  265 => 115,  261 => 114,  256 => 113,  249 => 108,  245 => 107,  240 => 106,  235 => 102,  229 => 99,  225 => 98,  221 => 97,  218 => 96,  215 => 95,  209 => 92,  205 => 91,  201 => 90,  198 => 89,  196 => 88,  193 => 87,  190 => 86,  183 => 81,  179 => 80,  174 => 79,  166 => 73,  162 => 72,  157 => 71,  150 => 66,  146 => 65,  141 => 64,  139 => 63,  132 => 58,  128 => 57,  123 => 56,  121 => 55,  115 => 50,  110 => 48,  100 => 47,  97 => 46,  95 => 45,  83 => 43,  79 => 41,  73 => 37,  71 => 36,  66 => 33,  62 => 31,  60 => 30,  47 => 24,  42 => 21,  37 => 7,  35 => 6,  32 => 5,  29 => 4,);
    }
}
