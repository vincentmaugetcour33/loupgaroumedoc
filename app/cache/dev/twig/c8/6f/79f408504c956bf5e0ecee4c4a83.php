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
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
            echo ">
      
      ";
            // line 32
            if (array_key_exists("editer", $context)) {
                // line 33
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'errors');
                echo "
            ";
                // line 34
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'label');
                echo " ( actuelle : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photo"), "html", null, true);
                echo " )   
            ";
                // line 35
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "file"), 'widget');
                echo "
      ";
            }
            // line 36
            echo " 
            
      ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "
      <input type=\"submit\" value=\"";
            // line 39
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
        // line 45
        echo "
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
        return array (  114 => 45,  101 => 39,  97 => 38,  93 => 36,  88 => 35,  82 => 34,  77 => 33,  75 => 32,  62 => 30,  57 => 28,  46 => 24,  41 => 21,  36 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
