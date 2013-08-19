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
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "  
             <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
          
    </head>
    <body>
      
        <div class=\"container-fluid\">
               <!-- En-tête du layout -->
               <div class=\"page-header\">
                   ";
        // line 29
        echo "                   En-tête du site Le monstre du Médoc
               </div>
                          
               <!-- Menu principal du layout -->
                          <div class=\"navbar \">
                          <div class=\"navbar-inner\">
                              <div class=\"container\">
                                    <ul class=\"nav nav-pills nav-justified\">
                                      <li class=\"active \"><a href=\"/\">Accueil</a></li>
                                      <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("vm_blog_image_list");
        echo "\">Galleries</a></li>
                                      <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("vm_blog_biographie");
        echo "\">Biographie</a></li>
                                      <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list");
        echo "\">Commentaires</a></li>
                                    </ul>
                                </div>
                           </div>
                       </div>                     
             
               <!-- Centre de la page -->    
               <div class=\"row-fluid\">    
                   <div class=\"span2 offset1\">
                          ";
        // line 50
        echo "                           ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VMBlogBundle:Extrait:index"));
        echo " ";
        // line 51
        echo "                       </div>
                      
                       <div class=\"span9\">
                        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "                       </div>
                       
                       <!--<div class=\"span1 offset1\">
                          Bloc latéral droit
                       </div>-->
                           
                </div>             
                     

                       
                       
                <div class=\"page-footer\">   
                
                    Pied-de-page du site Le monstre du Médoc
                    <p class=\"pull-right\">WEBMESTRE : ";
        // line 70
        echo twig_escape_filter($this->env, (($this->getContext($context, "webmaster_nom") . " - ") . $this->getContext($context, "webmaster_email")), "html", null, true);
        echo "</p>
                
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
        echo "            ";
        // line 8
        echo "             <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
             
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/js/popup.js"), "html", null, true);
        echo "\"></script>          
        ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
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
        return array (  179 => 55,  176 => 54,  170 => 18,  165 => 17,  157 => 14,  152 => 13,  147 => 11,  139 => 8,  137 => 7,  128 => 5,  110 => 70,  92 => 54,  87 => 51,  83 => 50,  71 => 40,  67 => 39,  63 => 38,  41 => 20,  35 => 11,  33 => 6,  23 => 1,  175 => 62,  173 => 61,  168 => 60,  161 => 15,  158 => 57,  150 => 12,  140 => 51,  134 => 6,  126 => 43,  119 => 39,  111 => 36,  104 => 34,  101 => 33,  98 => 32,  94 => 56,  91 => 29,  80 => 23,  74 => 21,  70 => 20,  66 => 18,  61 => 17,  59 => 16,  52 => 29,  48 => 10,  45 => 9,  38 => 19,  32 => 3,  29 => 5,);
    }
}
