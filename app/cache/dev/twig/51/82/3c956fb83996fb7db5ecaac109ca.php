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
        // line 12
        echo "            
        
       
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
          
    </head>
    <body>
      
        <div class=\"container\">
               <!-- En-tête du layout -->
               <div class=\"page-header\">
                   ";
        // line 24
        echo "                   En-tête du site Loup-garou, le monstre du Médoc
                    
                    ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "                       <div id=\"info_login\" class=\"col-sm-offset-8 col-sm-4\">
                      <div class='thumbnail' style='margin-top:-20px;display:inline-table;'>
                                                                
                        <img width=40 style=\"float:left;\" class=\"img-rounded\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmuser/photo/" . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photo"))), "html", null, true);
            echo "\"/>
                         
                          <div class=\"input-group-btn\" > 
                         <button style=\"margin-left:-10px;\" type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "<span class=\"caret\"></span></button>
                          <ul style=\"margin-top:30px;\" class=\"dropdown-menu pull-right\" id=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"), "html", null, true);
            echo "\">
                            <li id=\"visualiser\"><a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("vm_user_profile");
            echo "\">Votre profil</a></li> 
                            <li class=\"divider\"/>
                            <li id=\"edit\"><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("vm_user_edit");
            echo "\">Modifier</a></li>
                            <li><a href=\"#\" id=\"supprimer_profil\" >Supprimer</a></li>
                            <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" id=\"logout\">Déconnexion</a></li>
                          </ul>
                         </div> 
                      
                      </div>
                   
                      
                       </div>
                      ";
        } else {
            // line 48
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
               
               <!-- Menu principal du layout -->
                          <div class=\"navbar \">
                          <div class=\"navbar-inner\">
                              <div class=\"container\">
                                    <ul class=\"nav nav-pills nav-justified\">
                                      <li id=\"accueil\"><a href=\"/\">Accueil</a></li>
                                      <li id=\"galleries\"><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("vm_blog_image_list");
        echo "\" id=\"galleries1\">Galerie</a></li>
                                      <li id=\"biographie\"><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("vm_blog_biographie");
        echo "\">Biographie</a></li>
                                      <li id=\"commentaires\"><a href=\"";
        // line 77
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
        // line 90
        echo "                              <div class=\"span12 well\">
                               <br>
                               <div id=\"monaccordeon\">
                                 ";
        // line 93
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 94
            echo "                                   <div class=\"accordion-group\">
                                   <button disabled=\"disabled\" id=\"administration\" class=\"btn btn-sm btn-info accordion-heading\" data-toggle=\"data-no-collapse\" data-parent=\"#monaccordeon\" data-target=\"#administration\">Vous êtes administrateur</button>
                                   <div id=\"administration\" class=\"accordion-body collapse in\">
                                     <div class=\"accordion-inner\">  
                                       Vous êtes administrateur, cliquer <a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\">ici</a>
                                    </div>
                                   </div>
                                 </div>
                                   ";
        }
        // line 102
        echo "    
                                  <div class=\"accordion-group\">
                                   <button disabled=\"disabled\" id=\"presentation\" class=\"btn btn-sm btn-info accordion-heading\" data-toggle=\"data-no-collapse\" data-parent=\"#monaccordeon\" data-target=\"#presentation\">Qui suis-je ?</button>
                                   <div id=\"presentation\" class=\"accordion-body collapse in\">
                                     <div class=\"accordion-inner\">  
                                         Auteur : ";
        // line 107
        echo twig_escape_filter($this->env, $this->getContext($context, "auteur_nom"), "html", null, true);
        echo "
                                         ";
        // line 112
        echo "                                      <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/images/patricemauget.jpg"), "html", null, true);
        echo "\" alt=\"Patrice Mauget - Ecrivain Loup Garou\" />
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
                            Je m'applique à améliorer le site. 
                         </div>  
                        ";
        // line 145
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "                        
                      
                       </div>
                       
                       
                       <!--<div class=\"span1 offset1\">
                          Bloc latéral droit
                       </div>-->
                           
                </div>             
                     

                       
                 <!-- Bas de page -->      
                <div class=\"page-footer\">   
                
                    Pied-de-page du site Loup-garou, le monstre du Médoc
                    <p class=\"pull-right\">WEBMESTRE : ";
        // line 164
        echo twig_escape_filter($this->env, (($this->getContext($context, "webmaster_nom") . " - ") . $this->getContext($context, "webmaster_email")), "html", null, true);
        echo "</p>
                
               </div>
              
        
            </div>
    
         ";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 213
        echo "

        
                
        
       
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Patrice Mauget - Loup-garou, le monstre du Médoc";
    }

    // line 145
    public function block_body($context, array $blocks = array())
    {
        // line 146
        echo "                       ";
    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        // line 172
        echo "               
            <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 174
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            <script src=\"";
        // line 175
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
        // line 204
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ea73278_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ea73278_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ea73278_bootstrap.min_1.js");
            // line 207
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
        // line 208
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
        return array (  404 => 208,  384 => 207,  380 => 204,  348 => 175,  344 => 174,  340 => 173,  337 => 172,  334 => 171,  330 => 146,  327 => 145,  321 => 5,  309 => 213,  307 => 171,  297 => 164,  278 => 147,  276 => 145,  246 => 120,  234 => 112,  230 => 107,  223 => 102,  215 => 98,  209 => 94,  207 => 93,  202 => 90,  187 => 77,  183 => 76,  179 => 75,  169 => 67,  161 => 65,  155 => 64,  152 => 63,  144 => 61,  138 => 60,  130 => 54,  124 => 51,  121 => 50,  119 => 49,  116 => 48,  104 => 39,  99 => 37,  94 => 35,  90 => 34,  86 => 33,  80 => 30,  75 => 27,  73 => 26,  69 => 24,  58 => 15,  53 => 12,  37 => 9,  33 => 7,  28 => 5,  22 => 1,);
    }
}
