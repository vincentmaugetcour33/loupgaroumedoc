<?php

/* ::base.html.twig */
class __TwigTemplate_51823c956fb83996fb7db5ecaac109ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
      
        <div class=\"container-fluid\">
               <!-- En-tête du layout -->
               <div class=\"page-header\">En-tête du site Le monstre du Médoc</div>
                          
               <!-- Menu principal du layout -->
                          <div class=\"navbar \">
                          <div class=\"navbar-inner\">
                              <div class=\"container\">
                              <ul class=\"nav nav-pills nav-justified\">
                                <li class=\"active \"><a href=\"/\">Accueil</a></li>
                                <li><a href=\"\">Galleries</a></li>
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("vm_blog_biographie");
        echo "\">Biographie</a></li>
                              ";
        // line 36
        echo "                                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list");
        echo "\">Commentaires</a></li>
                              </ul>
                                      </div>
                           </div>
                       </div>                     
             
               <!-- Centre de la page -->    
               <div class=\"row-fluid\">    
                       <div class=\"span9\">
                        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "                       </div>
                       
                       <div class=\"span3\">
                           Test2
                       
                      </div>
                           
                </div>             
                     

                       
                       
                <div class=\"page-footer\">   
                
                    Pied-de-page du site Le monstre du Médoc
                    WEBMESTRE : ";
        // line 62
        echo twig_escape_filter($this->env, (($this->getContext($context, "webmaster_nom") . " - ") . $this->getContext($context, "webmaster_email")), "html", null, true);
        echo "
                
               </div>
              
        
            </div>
             
               
                
                
       
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Patrice Mauget - Monstre du Médoc";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
             <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "                ";
        // line 13
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/js/jquery.js"), "html", null, true);
        echo "\"></script>
                ";
        // line 17
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/js/popup.js"), "html", null, true);
        echo "\"></script>          
        ";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "                       ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 46,  161 => 45,  155 => 18,  150 => 17,  146 => 15,  142 => 14,  137 => 13,  135 => 12,  132 => 11,  126 => 8,  121 => 7,  118 => 6,  112 => 5,  94 => 62,  77 => 47,  75 => 45,  62 => 36,  58 => 34,  42 => 20,  40 => 11,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }
}
