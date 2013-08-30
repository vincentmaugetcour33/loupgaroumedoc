<?php

/* VMUserBundle:Profile:formulaire_email.html.twig */
class __TwigTemplate_d733d8a2889db595f5cb1db23a9d7991 extends Twig_Template
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
    <div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
          RECUPERATION PROFIL
       </div>
            
      <div class=\"panel-body\">      
   <form class=\"form-inline\" method=\"post\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("vm_user_trouve");
        echo "\">
      <input type='email' name='email' required=\"required\" value='Votre adresse e-mail*'/>
      <input type=\"submit\" class=\"btn btn-default\" />
      <input type=\"button\" value=\"annuler\"  onclick=\"javascript:history.back()\" class=\"btn btn-primary\" />
  </form>
              </div></div>
              


";
    }

    public function getTemplateName()
    {
        return "VMUserBundle:Profile:formulaire_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  31 => 5,  28 => 4,);
    }
}
