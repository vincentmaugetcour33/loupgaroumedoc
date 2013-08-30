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
        Les champs marqués d'un astérisque sont obligatoires.
    
";
            // line 21
            echo "
    <div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
          ENREGISTREMENT PROFIL
       </div>
            
      <div class=\"panel-body\">      
   <form class=\"form-inline\" method=\"post\" action=\"";
            // line 28
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
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
      ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
            echo "
     ";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "
      ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "
      <input type=\"submit\" class=\"btn btn-default\" />
      <input type=\"button\" value=\"annuler\"  onclick=\"javascript:history.back()\" class=\"btn btn-primary\" />
  </form>
              </div></div>
              
";
        }
        // line 39
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
        return array (  83 => 39,  73 => 32,  69 => 31,  65 => 30,  61 => 29,  50 => 28,  41 => 21,  36 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
