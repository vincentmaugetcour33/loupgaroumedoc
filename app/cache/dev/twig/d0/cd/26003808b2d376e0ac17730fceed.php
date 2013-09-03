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
            ";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("biographie.vie_auteur", array(), "messages");
        // line 16
        echo "       </div>
       <div class=\"tab-pane\" id=\"livres\">
            
            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "livres_secondaires"));
        foreach ($context['_seq'] as $context["key"] => $context["livre"]) {
            // line 20
            echo "                   <div class=\"clearfix\">
                        <div id=\"couverture\" style=\"width:80px;\" class=\"thumbnail pull-left\">
                                <img title=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "titre"), "html", null, true);
            echo "\" width=100 style=\"cursor: pointer;\" rel=\"popover\" 
                                 src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmblog/images/" . $this->getAttribute($this->getContext($context, "livre"), "couverture"))), "html", null, true);
            echo "\" alt=\"photo ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "titre"), "html", null, true);
            echo "\" />
                       </div>
                       
                         <div style=\"\">EDITION :       ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "edition"), "html", null, true);
            echo "    </div>
                         <div style=\"\">LIEN INTERNET :      <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "url"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "url"), "html", null, true);
            echo " </a>   </div>
                     </div>               
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " 
                 
       </div>
    </div>

      
    <br/>

  
 
";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
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
        return array (  106 => 43,  103 => 42,  89 => 29,  78 => 27,  74 => 26,  66 => 23,  62 => 22,  58 => 20,  54 => 19,  49 => 16,  47 => 15,  35 => 6,  32 => 4,  29 => 3,);
    }
}
