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
          <p class=\"text-info\">
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
          
          <p class=\"text-warning\">
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
     
      ";
            // line 45
            if (array_key_exists("editer", $context)) {
                // line 46
                echo "        ( actuelle : <a class=\"photo\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"), "html", null, true);
                echo "\" href=\"#\" style=\"cursor: pointer;\" rel=\"popover\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photo"), "html", null, true);
                echo "</a> )
           ";
                // line 50
                echo "      ";
            }
            echo " 
        
      
      
      ";
            // line 55
            echo "      ";
            // line 56
            echo "      ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'label');
            echo "
      <span class=\"text-warning\">";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'errors');
            echo "</span>
      ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget');
            echo " 
       <br/>
      
        ";
            // line 62
            echo "      ";
            // line 63
            echo "      ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'label');
            echo "
      <span class=\"text-warning\">";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'errors');
            echo "</span>
      ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'widget');
            echo "        
     <br/>
     
      ";
            // line 69
            echo "       ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label');
            echo "
      <span class=\"text-warning\">";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'errors');
            echo "</span>
      ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
            echo "   
     <br/>

      
      ";
            // line 76
            echo "       ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "realname"), 'label');
            echo "
       <span class=\"text-warning\">";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "realname"), 'errors');
            echo "</span>
      ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "realname"), 'widget');
            echo "
      <br/>
 
      
       ";
            // line 83
            echo "      ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'label');
            echo "
        <span class=\"text-warning\">";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'errors');
            echo "</span>
      ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sexe"), 'widget');
            echo "
      <br/>
        
      ";
            // line 89
            echo "       ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'label');
            echo "
         <span class=\"text-warning\">";
            // line 90
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'errors');
            echo "</span>
      ";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'widget');
            echo "   
      <br/>
      
      ";
            // line 95
            echo "      ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "age"), 'label');
            echo "
          <span class=\"text-warning\">";
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "age"), 'errors');
            echo "</span>
      ";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "age"), 'widget');
            echo "   
      <br/>  
      
      ";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "
        
      <input type=\"submit\" value=\"";
            // line 102
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
        // line 108
        echo "
";
    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        // line 112
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
        return array (  251 => 112,  248 => 111,  243 => 108,  230 => 102,  225 => 100,  219 => 97,  215 => 96,  210 => 95,  204 => 91,  200 => 90,  195 => 89,  189 => 85,  185 => 84,  180 => 83,  173 => 78,  169 => 77,  164 => 76,  157 => 71,  153 => 70,  148 => 69,  142 => 65,  138 => 64,  133 => 63,  131 => 62,  125 => 58,  121 => 57,  116 => 56,  114 => 55,  106 => 50,  97 => 46,  95 => 45,  83 => 43,  79 => 41,  73 => 37,  71 => 36,  66 => 33,  62 => 31,  60 => 30,  47 => 24,  42 => 21,  37 => 7,  35 => 6,  32 => 5,  29 => 4,);
    }
}
