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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("vm_blog_biographie");
        echo "\">Biographie</a></li>
                              ";
        // line 31
        echo "                                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("vm_blog_com_list");
        echo "\">Commentaires</a></li>
                              </ul>
                                      </div>
                           </div>
                       </nav>                     
                          
                     <div id=\"content\" class=\"span9\">
                        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "                     </div>
                     
                <div id=\"footer\" class=\"hero-unit\">
                    <h1>Pied-de-page du site Le monstre du Médoc</h1>
                    <h3>WEBMESTRE : ";
        // line 44
        echo twig_escape_filter($this->env, (($this->getContext($context, "webmaster_nom") . " - ") . $this->getContext($context, "webmaster_email")), "html", null, true);
        echo "</h3>
                </div>  
                 <!--</div>-->
              
        
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
        ";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "                ";
        // line 12
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
              ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "                        ";
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
        return array (  134 => 39,  131 => 38,  125 => 13,  120 => 12,  118 => 11,  115 => 10,  108 => 7,  105 => 6,  99 => 5,  81 => 44,  75 => 40,  73 => 38,  62 => 31,  58 => 29,  42 => 15,  40 => 10,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
