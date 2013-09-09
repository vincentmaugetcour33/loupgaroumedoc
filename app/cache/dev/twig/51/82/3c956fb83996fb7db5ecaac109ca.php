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
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9c381d9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9c381d9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9c381d9_bootstrap.min_1.css");
            // line 9
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />   
        ";
        } else {
            // asset "9c381d9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9c381d9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9c381d9.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />   
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "       
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
          
    </head>
    <body>
      
        <div class=\"container\">
               <!-- En-tête du layout -->
               <div class=\"page-header well\" style=\"margin-bottom:55px;margin-top:0px;margin-left:-10px;\">";
        // line 20
        echo "                   ";
        // line 21
        echo "                   <!--En-tête du site Loup-garou, le monstre du Médoc-->
                 
                    ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 24
            echo "                       
                        <div id=\"info_login\" class=\"col-sm-offset-8 col-sm-4\">
                      <div class='thumbnail media' style='margin-top:-20px;display:inline-table;'>
                                                                
                        <img width=40 style=\"float:left;\" class=\"img-rounded media-object\" src=\"/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photoPath"), "html", null, true);
            echo "\" />
                          <div class=\"media-body\">    Bonjour ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "  </div>
                          <div class=\"input-group-btn\" > 
                         <button style=\"margin-left:-10px;\" type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Gestion<span class=\"caret\"></span></button>
                          <ul style=\"margin-top:-5px;\" class=\"dropdown-menu pull-right\" id=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"), "html", null, true);
            echo "\">
                            <li id=\"visualiser\"><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("vm_user_profile");
            echo "\">Votre profil</a></li> 
                            <li class=\"divider\"/>
                            <li id=\"edit\"><a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("vm_user_edit");
            echo "\">Modifier</a></li>
                            <li><a href=\"#\" id=\"supprimer_profil\" >Supprimer</a></li>
                            <li><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" id=\"logout\">Déconnexion</a></li>
                          </ul>
                         </div> 
                             
                         
                      </div>
                   
                      
                       </div>
                      ";
        } else {
            // line 47
            echo "                        <div id=\"bloc_login\">
                            
                        ";
            // line 49
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("VMUserBundle:Security:login"), array());
            // line 50
            echo "                          
                            Nouveau ? Pour vous enregistrer, cliquer <a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("vm_user_ajout");
            echo "\">ici</a>     
                            </div>
                    ";
        }
        // line 54
        echo "                         
               </div>
               
               <!-- Message flash pour les notifications utilisateurs -->       
                 <div id=\"flashmessage\">
                    
                ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
                 <span class=\"label label-info\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                
                 ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
                  <span class=\"label label-warning\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                 </div>
               
                   <div class=\"well\">
                                <p id=\"notes\" class=\"text-warning\">
                                 Ce site constitue une vitrine pour le livre de Patrice Mauget intitulé Loup-Garou, le monstre du Médoc.
                                 En phase d'évolution, ce site présente des problèmes d'affichage sur Internet Explorer.
                                 Il est donc conseillé d'utiliser le navigateur Firefox.
                                </p> 
                             </div>
               <!-- Menu principal du layout -->
                          <div class=\"navbar \">
                          <div class=\"navbar-inner\">
                              <div class=\"container\">
                                    <ul class=\"nav nav-pills nav-justified\">
                                      <li id=\"accueil\"><a href=\"/\">Accueil</a></li>
                                      <li id=\"galleries\"><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("vm_blog_image_list");
        echo "\" id=\"galleries1\">Galerie</a></li>
                                      <li id=\"biographie\"><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("vm_blog_biographie");
        echo "\">Biographie</a></li>
                                      <li id=\"commentaires\"><a href=\"";
        // line 84
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
        // line 97
        echo "                              <div class=\"\">
                               <br>
                               
                               
                               <div class=\"panel panel-info\"> 
                                 <div class=\"panel-heading\">
                                        <span class=\"btn btn-sm btn-info\" disabled=\"disabled\"> 
                                            Auteur : ";
        // line 104
        echo twig_escape_filter($this->env, $this->getContext($context, "auteur_nom"), "html", null, true);
        echo "</span>
                                 
                                 
                                 </div>
                                 <div class=\"panel-body\">  
                                     <img height=160px; style=\"width: 80%;display: block;margin: 0 auto; \" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/images/patricemauget.jpg"), "html", null, true);
        echo "\" alt=\"Patrice Mauget - Ecrivain Loup Garou\" />
                                        <hr/>
                                <div id=\"monaccordeon\" style=\"text-align:justify;\"  >
                                    ";
        // line 121
        echo "                                    ";
        // line 124
        echo " 


                                ";
        // line 127
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 128
            echo "                                   <div class=\"accordion-group\">
                                   <button disabled=\"disabled\" id=\"administration\" class=\"btn btn-sm btn-info accordion-heading\" data-toggle=\"data-no-collapse\" data-parent=\"#monaccordeon\" data-target=\"#administration\">Vous êtes administrateur</button>
                                   <div id=\"administration\" class=\"accordion-body collapse in\">
                                     <div class=\"accordion-inner\">  
                                       Vous êtes administrateur, cliquer <a href=\"";
            // line 132
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\">ici</a>
                                    </div>
                                   </div>
                                 </div>
                                   ";
        }
        // line 136
        echo "    
                        
                                 <div class=\"accordion-group\">
                                   <button class=\"btn btn-sm btn-info accordion-heading\" data-toggle=\"collapse\" data-parent=\"#monaccordeon\" data-target=\"#coordonnees\">Mes coordonnéees</button>
                                   <div id=\"coordonnees\" class=\"accordion-body collapse \">
                                     <div class=\"accordion-inner\">
                                        <br/><a href=\"mailto:";
        // line 142
        echo twig_escape_filter($this->env, $this->getContext($context, "auteur_email"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("biographie.mail_auteur", array(), "messages");
        echo "</a>
                                     </div>
                                      </div>     
                                 </div>
                                 <div class=\"accordion-group\">
                                   <button class=\"btn btn-sm btn-info accordion-heading\" data-toggle=\"collapse\" data-parent=\"#monaccordeon\" data-target=\"#liens_divers\">Mes liens divers</button>
                                   <div id=\"liens_divers\" class=\"accordion-body collapse\">
                                     <div class=\"accordion-inner\">
                                         <p><a 
                                          href=\"http://www.editions-pantheon.fr/patrice-mauget/poemes/pluie-de-vers.html\"
                                          target=\"_blank\" >
                                           Pluie de vers       
                                         </a></p>
                                         
                                         <p><a 
                                          href=\"http://www.priceminister.com/offer/buy/188922655/la-genese-interdite-de-patrice-mauget.html\"
                                          target=\"_blank\" >
                                           La Genèse Interdite       
                                         </a></p>
                                         
                                         <p>Liens divers</p>
                                     </div>
                                   </div>
                               </div>
                            </div>
                            </div>                
                               </div>
                     </div>        
                       </div>
                           
                        <!-- Bloc pour la connexion utilisateur -->
                        
                       
                      </div>
                      
                       <div class=\"col-sm-offset-1 col-sm-9\">
                         
                           
                          
                        ";
        // line 181
        $this->displayBlock('body', $context, $blocks);
        // line 183
        echo "                        
                      
                       </div>
                       
                       
                       <!--<div class=\"span1 offset1\">
                          Bloc latéral droit
                       </div>-->
                           
                </div>             
                     

                       
                 <!-- Bas de page -->      
                <div class=\"well\" style=\"height:60px;margin-left:-10px;\">   
                
                   ";
        // line 200
        echo "                    <p class=\"text-info pull-right\">WEBMESTRE : ";
        echo twig_escape_filter($this->env, $this->getContext($context, "webmaster_nom"), "html", null, true);
        echo "</p>
                    <p class=\"text-info \">Pour toute anomalie, contactez-moi <a href=\"mailto:";
        // line 201
        echo twig_escape_filter($this->env, $this->getContext($context, "webmaster_email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "webmaster_email"), "html", null, true);
        echo "</a></p>
               </div>
              
        
            </div>
    
         ";
        // line 207
        $this->displayBlock('javascripts', $context, $blocks);
        // line 251
        echo "

        
                
        
       
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Patrice Mauget - Loup-Garou, le monstre du Médoc";
    }

    // line 181
    public function block_body($context, array $blocks = array())
    {
        // line 182
        echo "                       ";
    }

    // line 207
    public function block_javascripts($context, array $blocks = array())
    {
        // line 208
        echo "               
            <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 210
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/js/jquery.js"), "html", null, true);
        echo "\"></script>
           
         
             <script language=\"javascript\" type=\"text/javascript\">
                (function(\$) 
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
                                   \$(\"#info_login\").fadeOut();
                                   location.reload();
                                   //document.getElementById('logout').click()
                                  }
                                });
                            }

                         }));


                }(jQuery));
             </script>

            ";
        // line 241
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ea73278_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ea73278_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ea73278_bootstrap.min_1.js");
            // line 245
            echo "                           <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "ea73278_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ea73278_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ea73278_popup_2.js");
            echo "                           <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "ea73278"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ea73278") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ea73278.js");
            echo "                           <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 246
        echo "   
            
            
                        
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
        return array (  441 => 246,  421 => 245,  417 => 241,  384 => 211,  380 => 210,  376 => 209,  373 => 208,  370 => 207,  366 => 182,  363 => 181,  357 => 5,  345 => 251,  343 => 207,  332 => 201,  327 => 200,  309 => 183,  307 => 181,  263 => 142,  255 => 136,  241 => 128,  226 => 109,  218 => 104,  209 => 97,  190 => 83,  186 => 82,  161 => 65,  155 => 64,  152 => 63,  144 => 61,  138 => 60,  130 => 54,  121 => 50,  119 => 49,  115 => 47,  102 => 37,  97 => 35,  92 => 33,  88 => 32,  82 => 29,  78 => 28,  72 => 24,  66 => 21,  54 => 12,  51 => 11,  37 => 9,  28 => 5,  22 => 1,  352 => 151,  349 => 150,  344 => 14,  330 => 12,  326 => 10,  320 => 8,  317 => 7,  300 => 140,  298 => 139,  293 => 138,  283 => 133,  280 => 132,  273 => 130,  265 => 127,  262 => 126,  256 => 124,  254 => 123,  251 => 122,  247 => 132,  239 => 127,  234 => 124,  232 => 121,  229 => 113,  223 => 109,  219 => 107,  202 => 96,  194 => 84,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 67,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 51,  120 => 53,  116 => 51,  114 => 50,  108 => 47,  105 => 46,  101 => 45,  95 => 42,  90 => 40,  86 => 38,  83 => 36,  81 => 35,  76 => 32,  70 => 23,  68 => 27,  64 => 20,  61 => 23,  59 => 22,  56 => 21,  48 => 19,  42 => 18,  38 => 16,  36 => 7,  33 => 7,  30 => 5,);
    }
}
