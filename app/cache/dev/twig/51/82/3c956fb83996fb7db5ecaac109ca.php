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
                                <li class=\"active \"><a href=\"#\">Accueil</a></li>
                                <li><a href=\"#\">Galleries</a></li>
                                <li><a href=\"#\">Biographie</a></li>
                                <li><a href=\"#\">Commentaires</a></li>
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
                     

                 <!--</div>-->
                   

         
            </div>
             
               ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
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

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "                ";
        // line 45
        echo "                <!--<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>-->
                <script type=\"text/javascript\" src=\"";
        // line 46
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
        return array (  117 => 46,  114 => 45,  112 => 44,  109 => 43,  105 => 33,  102 => 32,  95 => 7,  92 => 6,  86 => 5,  77 => 48,  75 => 43,  64 => 34,  62 => 32,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
