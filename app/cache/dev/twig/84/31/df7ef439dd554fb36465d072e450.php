<?php

/* VMBlogBundle:Default:index.html.twig */
class __TwigTemplate_8431df7ef439dd554fb36465d072e450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VMBlogBundle::base.html.twig");

        $this->blocks = array(
            'vmblog_stylesheets' => array($this, 'block_vmblog_stylesheets'),
            'vmblog_body' => array($this, 'block_vmblog_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VMBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_vmblog_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    


   
";
    }

    // line 10
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 11
        echo "      ";
        // line 12
        echo "  ";
        echo $this->env->getExtension('vm_social_bar')->getSocialButtons();
        echo "
   <br/>
   ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "titre"), "html", null, true);
        echo "<br/>
   ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "resume"), "html", null, true);
        echo "
   
   <hr/>
   EXTRAIT (AU HASARD)
   ";
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VMBlogBundle:Extrait:index"));
        echo " 
 

   
 
";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  
 ";
        // line 27
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   <script language=\"javascript\" type=\"text/javascript\">
 (function(\$) 
 {
   
    \$(\"ul.nav > li#accueil\").addClass('active');  
   }(jQuery));
</script>  
  ";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  73 => 26,  63 => 19,  56 => 15,  52 => 14,  46 => 12,  44 => 11,  41 => 10,  33 => 4,  30 => 3,);
    }
}
