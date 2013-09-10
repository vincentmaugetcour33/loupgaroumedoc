<?php

/* VMBlogBundle:Default:biographie.html.twig */
class __TwigTemplate_d0cd26003808b2d376e0ac17730fceed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VMBlogBundle::base.html.twig");

        $this->blocks = array(
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
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 4
        echo " 
    ";
        // line 6
        echo "    ";
        echo " <br/>
    
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#parcours\" data-toggle=\"tab\">Mon parcours</a></li>
        <li><a href=\"#livres\" data-toggle=\"tab\">Mes livres</a></li>
    </ul>
    
    <div class=\"tab-content\">
       <div class=\"tab-pane active\" id=\"parcours\">
            <p style=\"text-align:justify;text-indent:40px;\">
                ";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("biographie.vie_auteur", array(), "messages");
        // line 17
        echo "            </p>    
       </div>
       <div class=\"tab-pane\" id=\"livres\">
            
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres_secondaires"]) ? $context["livres_secondaires"] : $this->getContext($context, "livres_secondaires")));
        foreach ($context['_seq'] as $context["key"] => $context["livre"]) {
            // line 22
            echo "                   <div class=\"clearfix\">
                        <div id=\"couverture\" style=\"width:80px;\" class=\"thumbnail pull-left\">
                                <img title=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "titre"), "html", null, true);
            echo "\" width=100 style=\"cursor: pointer;\" rel=\"popover\" 
                                 src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmblog/images/" . $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "couverture"))), "html", null, true);
            echo "\" alt=\"photo ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "titre"), "html", null, true);
            echo "\" />
                       </div>
                       
                         <div style=\"\">EDITION :       ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "edition"), "html", null, true);
            echo "    </div>
                         <div style=\"\">LIEN INTERNET :      <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "url"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "url"), "html", null, true);
            echo " </a>   </div>
                     </div>               
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " 
                 
       </div>
    </div>



  
  
    
    
 
";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
    <script language=\"javascript\" type=\"text/javascript\"> 
 (function(\$) { 
    \$(\"ul.nav > li#accueil\").removeClass('active');  
   \$(\"ul.nav > li#biographie\").addClass('active');
   \$(\"img\").popover({trigger: 'hover',html:true, content: function() { var couverture=\$(this).attr('src');
           return \"<img class='img-rounded' width=150 src='\"+couverture+\"' />\"; },
            delay: { show: 500, hide: 10} });
}(jQuery));
</script>

";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Default:biographie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 47,  107 => 46,  91 => 31,  80 => 29,  76 => 28,  68 => 25,  64 => 24,  60 => 22,  56 => 21,  50 => 17,  48 => 16,  35 => 6,  32 => 4,  29 => 3,);
    }
}
