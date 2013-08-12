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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
           <div class=\"container\">
                <div id=\"header\" class=\"hero-unit\">
                 <h1>En-tête du site Le monstre du Médoc</h1>
                 </div>
               
                 <!--<div class=\"container\">-->
                      <nav class=\"navbar \">
                          <div class=\"navbar-inner\">
                              <div class=\"container\">
                              <ul class=\"nav nav-pills nav-justified\">
                                <li class=\"active \"><a href=\"/\">Accueil</a></li>
                                <li><a href=\"\">Galleries</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("vm_blog_biographie");
        echo "\">Biographie</a></li>
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list");
        echo "\">Commentaires</a></li>
                              </ul>
                                      </div>
                           </div>
                       </nav>                     
                          
                     <div id=\"content\" class=\"span9\">
                        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "                     </div>
                     
                <div id=\"footer\" class=\"hero-unit\">
                    <h1>Pied-de-page du site Le monstre du Médoc</h1>
                    <h3>WEBMESTRE : ";
        // line 38
        echo twig_escape_filter($this->env, (($this->getContext($context, "webmaster_nom") . " - ") . $this->getContext($context, "webmaster_email")), "html", null, true);
        echo "</h3>
                </div>  
                 <!--</div>-->
              
        
            </div>
             
               ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "                
                
       
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "                        ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "                ";
        // line 47
        echo "                <!--<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>-->
                <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
              ";
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
        return array (  128 => 48,  125 => 47,  123 => 46,  120 => 45,  116 => 33,  113 => 32,  106 => 7,  103 => 6,  97 => 5,  88 => 50,  86 => 45,  76 => 38,  70 => 34,  68 => 32,  58 => 25,  54 => 24,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
