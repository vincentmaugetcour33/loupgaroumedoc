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
        // line 15
        echo "   <p style=\"clear:both;text-indent:50px;text-align: justify;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "resume"), "html", null, true);
        echo "</p>
   
   <hr/>
   EXTRAIT (AU HASARD)
   ";
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VMBlogBundle:Extrait:index"));
        echo " 
 
   ";
        // line 21
        if (array_key_exists("document", $context)) {
            // line 22
            echo "    
   ";
            // line 24
            echo "   <span class=\"pull-right\">
          
       <i class=\"icon-large icon-file\"></i>
       
       <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmblog/document/" . $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "url"))), "html", null, true);
            echo "\" target=\"_blank\">
         ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "libelle"), "html", null, true);
            echo "
       </a>
       ";
            // line 31
            if ((twig_date_format_filter($this->env, "now", "m/d/Y") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "date"), "m/d/Y"))) {
                // line 32
                echo "         aujourd'hui à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "date"), "h:m"), "html", null, true);
                echo "
       ";
            } else {
                // line 34
                echo "         Le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "date"), "d/m/Y à h:m"), "html", null, true);
                echo "
       ";
            }
            // line 36
            echo "   </span>
   ";
        }
        // line 38
        echo " 
";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  
 ";
        // line 42
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
        return array (  113 => 42,  108 => 41,  103 => 38,  99 => 36,  93 => 34,  87 => 32,  85 => 31,  80 => 29,  76 => 28,  70 => 24,  67 => 22,  65 => 21,  60 => 19,  52 => 15,  46 => 12,  44 => 11,  41 => 10,  33 => 4,  30 => 3,);
    }
}
