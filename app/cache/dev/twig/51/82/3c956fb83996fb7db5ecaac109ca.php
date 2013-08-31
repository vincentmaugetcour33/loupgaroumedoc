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
      
        <div class=\"container\">
               <!-- En-tête du layout -->
               <div class=\"page-header\">
                   ";
        // line 29
        echo "                   En-tête du site Loup-garou, le monstre du Médoc
                    
                    ";
        // line 31
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 32
            echo "                       <div class=\"col-sm-offset-8 col-sm-4\">
                      <div class='thumbnail' style='margin-top:-20px;display:inline-table;'>
                          <img width=40 style=\"float:left;\" class=\"img-rounded\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmuser/photo/" . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photo"))), "html", null, true);
            echo "\"/>
                         
                          <div class=\"input-group-btn\" > 
                         <button style=\"margin-left:-10px;\" type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "<span class=\"caret\"></span></button>
                          <ul style=\"margin-top:30px;\" class=\"dropdown-menu pull-right\" id=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"), "html", null, true);
            echo "\">
                            <li id=\"visualiser\"><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("vm_user_profile");
            echo "\">Votre profil</a></li> 
                            <li class=\"divider\"/>
                            <li id=\"edit\"><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("vm_user_edit");
            echo "\">Modifier</a></li>
                            <li><a href=\"#\" id=\"supprimer_profil\">Supprimer</a></li>
                            <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" id=\"logout\">Déconnexion</a></li>
                          </ul>
                         </div> 
                      
                      </div>
                   
                      
                       </div>
                      ";
        } else {
            // line 52
            echo "                        ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("VMUserBundle:Security:login"), array());
            // line 53
            echo "                           ";
            // line 56
            echo "                            Nouveau ? Pour vous enregistrer, cliquer <a href=\"";
            echo $this->env->getExtension('routing')->getPath("vm_user_ajout");
            echo "\">ici</a>     
                      ";
        }
        // line 58
        echo "               </div>
               
               <!-- Message flash pour les notifications utilisateurs -->       
                 <div id=\"flashmessage\">
                    
                ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
                 <span class=\"label label-info\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                
                 ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
                  <span class=\"label label-warning\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                 </div>
               
               <!-- Menu principal du layout -->
                          <div class=\"navbar \">
                          <div class=\"navbar-inner\">
                              <div class=\"container\">
                                    <ul class=\"nav nav-pills nav-justified\">
                                      <li id=\"accueil\"><a href=\"/\">Accueil</a></li>
                                      <li id=\"galleries\"><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("vm_blog_image_list");
        echo "\">Galerie</a></li>
                                      <li id=\"biographie\"><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("vm_blog_biographie");
        echo "\">Biographie</a></li>
                                      <li id=\"commentaires\"><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("tri" => "desc"));
        echo "\">Commentaires</a></li>
                                    </ul>
                                </div>
                           </div>
                       </div>                     
             
               <!-- Centre de la page -->    
               <div class=\"row\">    
                       <div class=\"col-sm-2\">
                       
                           
                           <div class=\"row\">
                              ";
        // line 93
        echo "                              <div class=\"span12 well\">
                               <br>
                               <div id=\"monaccordeon\">
                                 ";
        // line 96
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 97
            echo "                                   <div class=\"accordion-group\">
                                   <button disabled=\"disabled\" id=\"administration\" class=\"btn btn-sm btn-info accordion-heading\" data-toggle=\"data-no-collapse\" data-parent=\"#monaccordeon\" data-target=\"#administration\">Vous êtes administrateur</button>
                                   <div id=\"administration\" class=\"accordion-body collapse in\">
                                     <div class=\"accordion-inner\">  
                                       Vous êtes administrateur, cliquer <a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\">ici</a>
                                    </div>
                                   </div>
                                 </div>
                                   ";
        }
        // line 105
        echo "    
                                  <div class=\"accordion-group\">
                                   <button disabled=\"disabled\" id=\"presentation\" class=\"btn btn-sm btn-info accordion-heading\" data-toggle=\"data-no-collapse\" data-parent=\"#monaccordeon\" data-target=\"#presentation\">Qui suis-je ?</button>
                                   <div id=\"presentation\" class=\"accordion-body collapse in\">
                                     <div class=\"accordion-inner\">  
                                         Auteur : ";
        // line 110
        echo twig_escape_filter($this->env, $this->getContext($context, "auteur_nom"), "html", null, true);
        echo "
                                         <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/images/patricemauget.jpg"), "html", null, true);
        echo "\" alt=\"Patrice mauget\" />
                                         
                                    </div>
                                   </div>
                                 </div>
                                 <div class=\"accordion-group\">
                                   <button class=\"btn btn-sm btn-primary accordion-heading\" data-toggle=\"collapse\" data-parent=\"#monaccordeon\" data-target=\"#coordonnees\">Mes coordonnéees</button>
                                   <div id=\"coordonnees\" class=\"accordion-body collapse \">
                                     <div class=\"accordion-inner\">
                                        <br/><a href=\"mailto:";
        // line 120
        echo twig_escape_filter($this->env, $this->getContext($context, "auteur_email"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("biographie.mail_auteur", array(), "messages");
        echo "</a>
                                     </div>
                                      </div>     
                                 </div>
                                 <div class=\"accordion-group\">
                                   <button class=\"btn btn-sm btn-primary accordion-heading\" data-toggle=\"collapse\" data-parent=\"#monaccordeon\" data-target=\"#liens_divers\">Mes liens divers</button>
                                   <div id=\"liens_divers\" class=\"accordion-body collapse\">
                                     <div class=\"accordion-inner\">Rajouter des liens sur d'autres sites (mollat,amazon,...)</div>
                                    </div>
                               </div>
                            </div>
                               
                     </div>        
                       </div>
                           
                        <!-- Bloc pour la connexion utilisateur -->
                        
                       
                      </div>
                      
                       <div class=\"col-sm-offset-1 col-sm-9\">
                         <div id=\"notes\" style=\"color:red;\">
                             Ce site constitue une vitrine pour le livre intitulé Loup-Garou, le monstre du Médoc.
                             Il peut contenir quelques défaillances dans la gestion utilisateurs/commentaires.
                             Je m'applique à rectifier et améliorer le site. Ce message ne sera plus présent une fois le
                             site pleinement fonctionnel.
                         </div>  
                        ";
        // line 147
        $this->displayBlock('body', $context, $blocks);
        // line 149
        echo "                        
                      
                       </div>
                       
                       
                       <!--<div class=\"span1 offset1\">
                          Bloc latéral droit
                       </div>-->
                           
                </div>             
                     

                       
                       
                <div class=\"page-footer\">   
                
                    Pied-de-page du site Loup-garou, le monstre du Médoc
                    <p class=\"pull-right\">WEBMESTRE : ";
        // line 166
        echo twig_escape_filter($this->env, (($this->getContext($context, "webmaster_nom") . " - ") . $this->getContext($context, "webmaster_email")), "html", null, true);
        echo "</p>
                
               </div>
              
        
            </div>
    
        
         <script language=\"javascript\" type=\"text/javascript\">
 \$(document).ready(function() 
 {
     \$(\"body\").on(\"click\", \"#supprimer_profil\", (function()
          { 
            if (confirm(\"Souhaitez-vous réellement supprimer votre profil de connexion ? \")) 
            {
                \$.ajax({
                   type: \"POST\",
                   url: Routing.generate('vm_user_supprime'),
                   cache:false,
                   success: function(data)
                   {
                    //alert(\"Vous n'avez plus de profil. Pour vous connecter, il faudra vous réinscrire.\");
                    alert(\$(\"a#logout\").html()); //click();
                   }
                 });
             }
             
          }));
  
    
 });
</script>  
        
                
        
       
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Patrice Mauget - Loup-garou, le monstre du Médoc";
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
             <!--<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css\" rel=\"stylesheet\">-->
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

    // line 147
    public function block_body($context, array $blocks = array())
    {
        // line 148
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
        return array (  371 => 148,  368 => 147,  362 => 18,  357 => 17,  353 => 15,  349 => 14,  344 => 13,  342 => 12,  339 => 11,  331 => 8,  329 => 7,  326 => 6,  320 => 5,  277 => 166,  258 => 149,  256 => 147,  224 => 120,  212 => 111,  208 => 110,  201 => 105,  193 => 101,  187 => 97,  185 => 96,  180 => 93,  165 => 80,  161 => 79,  157 => 78,  147 => 70,  139 => 68,  133 => 67,  130 => 66,  122 => 64,  116 => 63,  109 => 58,  103 => 56,  101 => 53,  98 => 52,  86 => 43,  81 => 41,  76 => 39,  72 => 38,  68 => 37,  62 => 34,  58 => 32,  56 => 31,  52 => 29,  38 => 19,  35 => 11,  33 => 6,  29 => 5,  23 => 1,  83 => 39,  73 => 32,  69 => 31,  65 => 30,  61 => 29,  50 => 28,  41 => 20,  36 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
