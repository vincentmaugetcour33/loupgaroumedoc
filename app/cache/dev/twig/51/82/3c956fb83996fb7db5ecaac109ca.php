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
            // asset "77976db_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77976db_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/77976db_bootstrap.min_1.css");
            // line 12
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />   
        ";
            // asset "77976db_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77976db_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/77976db_bootstrap.icon-large.min_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />   
        ";
            // asset "77976db_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77976db_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/77976db_bootstrap-select.min_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />   
        ";
        } else {
            // asset "77976db"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77976db") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/77976db.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />   
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        ";
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
          
    </head>
    <body>
      
        <div class=\"container\">
               <!-- En-tête du layout -->
               <div class=\"page-header well\" style=\"margin-bottom:55px;margin-top:0px;margin-left:-10px;\">";
        // line 23
        echo "                   ";
        // line 24
        echo "                   <!--En-tête du site Loup-garou, le monstre du Médoc-->
                 
                    ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "                       
                        <div id=\"info_login\" class=\"col-sm-offset-8 col-sm-4\">
                      <div class='thumbnail media' style='margin-top:-20px;display:inline-table;'>
                                                                
                        <img width=40 style=\"float:left;\" class=\"img-rounded media-object\" src=\"/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photoPath"), "html", null, true);
            echo "\" />
                          <div class=\"media-body\">    Bonjour ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "  </div>
                          <div class=\"input-group-btn\" > 
                         <button style=\"margin-left:-10px;\" type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Gestion<span class=\"caret\"></span></button>
                          <ul style=\"margin-top:-5px;\" class=\"dropdown-menu pull-right\" id=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
            echo "\">
                            <li id=\"visualiser\"><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("vm_user_profile");
            echo "\"><i class=\"icon-large icon-user icon-white\"></i>Votre profil</a></li> 
                            <li class=\"divider\"/>
                            <li id=\"edit\"><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("vm_user_edit");
            echo "\"><i class=\"icon-large icon-edit\"></i>Modifier</a></li>
                            <li><a href=\"#\" id=\"supprimer_profil\" ><i class=\"icon-large icon-remove\"></i>Supprimer</a></li>
                            <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" id=\"logout\"><i class=\"icon-large icon-off\"></i>Déconnexion</a></li>
                          </ul>
                         </div> 
                             
                         
                      </div>
                   
                      
                       </div>
                      ";
        } else {
            // line 50
            echo "                        <div id=\"bloc_login\">
                            
                        ";
            // line 52
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("VMUserBundle:Security:login"), array());
            // line 53
            echo "                          
                            Nouveau ? Pour vous enregistrer, cliquer <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("vm_user_ajout");
            echo "\">ici</a>     
                            </div>
                    ";
        }
        // line 57
        echo "                         
               </div>
               
               <!-- Message flash pour les notifications utilisateurs -->       
                 <div id=\"flashmessage\">
                    
                ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
                 <span class=\"label label-info\">";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
                  <span class=\"label label-warning\">";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                 </div>
               
                   <div class=\"well\">
                                <p id=\"notes\" class=\"text-warning\">
                                 Ce site constitue une vitrine pour le livre de Patrice Mauget intitulé Loup-Garou, le monstre du Médoc.
                                 En phase d'évolution, ce site peut présenter des problèmes d'affichage sur Internet Explorer.
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
        // line 85
        echo $this->env->getExtension('routing')->getPath("vm_blog_image_list");
        echo "\" id=\"galleries1\">Galerie</a></li>
                                      <li id=\"biographie\"><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("vm_blog_biographie");
        echo "\">Biographie</a></li>
                                      <li id=\"commentaires\"><a href=\"";
        // line 87
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
        // line 100
        echo "                              <div class=\"\">
                               <br>
                               
                               
                               <div class=\"panel panel-info\"> 
                                 <div class=\"panel-heading\">
                                        <span class=\"btn btn-sm btn-info\" disabled=\"disabled\"> 
                                            Auteur : ";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["auteur_nom"]) ? $context["auteur_nom"] : $this->getContext($context, "auteur_nom")), "html", null, true);
        echo "</span>
                                 
                                 
                                 </div>
                                 <div class=\"panel-body\">  
                                     <img height=160px; style=\"width: 80%;display: block;margin: 0 auto; \" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/images/patricemauget.jpg"), "html", null, true);
        echo "\" alt=\"Patrice Mauget - Ecrivain Loup Garou\" />
                                        <hr/>
                                <div id=\"monaccordeon\" style=\"text-align:justify;\"  >
                                    ";
        // line 124
        echo "                                    ";
        // line 127
        echo " 


                                ";
        // line 130
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 131
            echo "                                   <div class=\"accordion-group\">
                                   <button disabled=\"disabled\" id=\"administration\" class=\"btn btn-sm btn-info accordion-heading\" data-toggle=\"data-no-collapse\" data-parent=\"#monaccordeon\" data-target=\"#administration\">Vous êtes administrateur</button>
                                   <div id=\"administration\" class=\"accordion-body collapse in\">
                                     <div class=\"accordion-inner\">  
                                       Vous êtes administrateur, cliquer <a href=\"";
            // line 135
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\">ici</a>
                                    </div>
                                   </div>
                                 </div>
                                   ";
        }
        // line 139
        echo "    
                        
                                 <div class=\"accordion-group\">
                                   <button class=\"btn btn-sm btn-info accordion-heading\" data-toggle=\"collapse\" data-parent=\"#monaccordeon\" data-target=\"#coordonnees\">Mes coordonnéees</button>
                                   <div id=\"coordonnees\" class=\"accordion-body collapse \">
                                     <div class=\"accordion-inner\">
                                        <br/><a href=\"mailto:";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["auteur_email"]) ? $context["auteur_email"] : $this->getContext($context, "auteur_email")), "html", null, true);
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
                                          href=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["pluie_de_vers_url"]) ? $context["pluie_de_vers_url"] : $this->getContext($context, "pluie_de_vers_url")), "html", null, true);
        echo "\"
                                          target=\"_blank\" >
                                           Pluie de vers       
                                         </a></p>
                                         
                                         <p><a 
                                          href=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["genese_interdite_url"]) ? $context["genese_interdite_url"] : $this->getContext($context, "genese_interdite_url")), "html", null, true);
        echo "\"
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
        echo "                       </div>
                       
                       
                       
                       
                       <!--<div class=\"span1 offset1\">
                          Bloc latéral droit
                       </div>-->
                           
                </div>             
                     

                       
                 <!-- Bas de page -->      
                <div class=\"well\" style=\"height:60px;margin-left:-10px;\">   
                
                   ";
        // line 200
        echo "                    <p class=\"text-info pull-right\">WEBMESTRE : ";
        echo twig_escape_filter($this->env, (isset($context["webmaster_nom"]) ? $context["webmaster_nom"] : $this->getContext($context, "webmaster_nom")), "html", null, true);
        echo "</p>
                    <p class=\"text-info \">Pour toute anomalie, contactez-moi <a href=\"mailto:";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["webmaster_email"]) ? $context["webmaster_email"] : $this->getContext($context, "webmaster_email")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["webmaster_email"]) ? $context["webmaster_email"] : $this->getContext($context, "webmaster_email")), "html", null, true);
        echo "</a></p>
               </div>
              
        
            </div>
    
         ";
        // line 207
        $this->displayBlock('javascripts', $context, $blocks);
        // line 254
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
        echo "                                     ";
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
            <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/init.jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/init.standard.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/ready.min.js"), "html", null, true);
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
        // line 243
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "540e3c5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_540e3c5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/540e3c5_bootstrap.min_1.js");
            // line 248
            echo "                           <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "540e3c5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_540e3c5_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/540e3c5_popup_2.js");
            echo "                           <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "540e3c5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_540e3c5_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/540e3c5_bootstrap-select.min_3.js");
            echo "                           <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "540e3c5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_540e3c5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/540e3c5.js");
            echo "                           <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 249
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
        return array (  473 => 249,  447 => 248,  443 => 243,  411 => 214,  407 => 213,  403 => 212,  399 => 211,  395 => 210,  391 => 209,  388 => 208,  385 => 207,  381 => 182,  378 => 181,  372 => 5,  360 => 254,  358 => 207,  347 => 201,  342 => 200,  324 => 183,  322 => 181,  298 => 160,  289 => 154,  275 => 145,  267 => 139,  259 => 135,  253 => 131,  251 => 130,  246 => 127,  244 => 124,  238 => 112,  230 => 107,  221 => 100,  206 => 87,  202 => 86,  198 => 85,  181 => 70,  173 => 68,  167 => 67,  164 => 66,  156 => 64,  150 => 63,  142 => 57,  136 => 54,  133 => 53,  131 => 52,  127 => 50,  114 => 40,  109 => 38,  104 => 36,  100 => 35,  94 => 32,  90 => 31,  84 => 27,  82 => 26,  78 => 24,  76 => 23,  63 => 14,  37 => 12,  28 => 5,  22 => 1,  86 => 32,  81 => 31,  69 => 24,  65 => 15,  60 => 19,  52 => 15,  46 => 12,  44 => 11,  41 => 10,  33 => 7,  30 => 3,);
    }
}
