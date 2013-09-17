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
                         ";
            // line 29
            echo "                       
                        <div id=\"info_login\" class=\"col-sm-offset-8 col-sm-4\">
                      <div class='thumbnail media' style='margin-top:-20px;display:inline-table;'>
                                                                
                        <img width=40 style=\"float:left;\" class=\"img-rounded media-object\" src=\"/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "photoPath"), "html", null, true);
            echo "\" />
                          <div class=\"media-body\">    Bonjour ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "   </div>
                        ";
            // line 36
            echo "<div class=\"input-group-btn\" > 
                         <button style=\"margin-left:-10px;\" type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Gestion<span class=\"caret\"></span></button>
                          <ul style=\"margin-top:-5px;\" class=\"dropdown-menu pull-right\" id=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "html", null, true);
            echo "\">
                            <li id=\"visualiser\"><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("vm_user_profile");
            echo "\"><i class=\"icon-large icon-user icon-white\"></i>Votre profil</a></li> 
                            <li class=\"divider\"/>
                            <li id=\"edit\"><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("vm_user_edit");
            echo "\"><i class=\"icon-large icon-edit\"></i>Modifier</a></li>
                            <li><a href=\"#\" id=\"supprimer_profil\" ><i class=\"icon-large icon-remove\"></i>Supprimer</a></li>
                            <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" id=\"logout\"><i class=\"icon-large icon-off\"></i>Déconnexion</a></li>
                          </ul>
                         </div> 
                             
                         
                      </div>
                   
                      
                       </div>
                      ";
        } else {
            // line 53
            echo "                        <div id=\"bloc_login\">
                            
                        ";
            // line 55
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("VMUserBundle:Security:login"), array());
            // line 56
            echo "                          
                            Nouveau ? Pour vous enregistrer, cliquer <a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("vm_user_ajout");
            echo "\">ici</a>     
                            </div>
                    ";
        }
        // line 60
        echo "                         
               </div>
               
               <!-- Message flash pour les notifications utilisateurs -->       
                 <div id=\"flashmessage\">
                    
                ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
                 <span class=\"label label-info\">";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                
                 ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
                  <span class=\"label label-warning\">";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                 </div>
               
                   <div class=\"well\">
                                <p id=\"notes\" class=\"text-info\">
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
        // line 88
        echo $this->env->getExtension('routing')->getPath("vm_blog_image_list");
        echo "\" id=\"galleries1\">Galerie</a></li>
                                      <li id=\"biographie\"><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("vm_blog_biographie");
        echo "\">Biographie</a></li>
                                      <li id=\"commentaires\">
                                          <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("tri" => "desc"));
        echo "\">
                                              Commentaires
                                              ";
        // line 93
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 94
            echo "                                               ";
            // line 95
            echo "                                              ";
        }
        // line 96
        echo "                                          </a>
                                          
                                      </li>
                                    </ul>
                                </div>
                           </div>
                       </div>                     
             
               <!-- Centre de la page -->    
               <div class=\"row\">    
                       <div class=\"col-sm-2\">
                       
                           
                           <div class=\"row\">
                              ";
        // line 111
        echo "                              <div class=\"\">
                               <br>
                               
                               
                               <div class=\"panel panel-info\"> 
                                 <div class=\"panel-heading\">
                                        <span class=\"btn btn-sm btn-info\" disabled=\"disabled\"> 
                                            Auteur : ";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["auteur_nom"]) ? $context["auteur_nom"] : $this->getContext($context, "auteur_nom")), "html", null, true);
        echo "</span>
                                 
                                 
                                 </div>
                                 <div class=\"panel-body\">  
                                     <img height=160px; style=\"width: 80%;display: block;margin: 0 auto; \" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/images/patricemauget.jpg"), "html", null, true);
        echo "\" alt=\"Patrice Mauget - Ecrivain Loup Garou\" />
                                        <hr/>
                                <div id=\"monaccordeon\" style=\"text-align:justify;\"  >
                                    ";
        // line 135
        echo "                                    ";
        // line 138
        echo " 


                                ";
        // line 141
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 142
            echo "                                   <div class=\"accordion-group\">
                                   <button disabled=\"disabled\" id=\"administration\" class=\"btn btn-sm btn-info accordion-heading\" data-toggle=\"data-no-collapse\" data-parent=\"#monaccordeon\" data-target=\"#administration\">Vous êtes administrateur</button>
                                   <div id=\"administration\" class=\"accordion-body collapse in\">
                                     <div class=\"accordion-inner\">  
                                       Vous êtes administrateur, cliquer <a href=\"#";
            // line 146
            echo "\">ici</a>
                                    </div>
                                   </div>
                                 </div>
                                   ";
        }
        // line 150
        echo "    
                        
                                 <div class=\"accordion-group\">
                                   <button class=\"btn btn-sm btn-info accordion-heading\" data-toggle=\"collapse\" data-parent=\"#monaccordeon\" data-target=\"#coordonnees\">Mes coordonnéees</button>
                                   <div id=\"coordonnees\" class=\"accordion-body collapse \">
                                     <div class=\"accordion-inner\">
                                        <br/><a href=\"mailto:";
        // line 156
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
        // line 165
        echo twig_escape_filter($this->env, (isset($context["pluie_de_vers_url"]) ? $context["pluie_de_vers_url"] : $this->getContext($context, "pluie_de_vers_url")), "html", null, true);
        echo "\"
                                          target=\"_blank\" >
                                           Pluie de vers       
                                         </a></p>
                                         
                                         <p><a 
                                          href=\"";
        // line 171
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
        // line 192
        $this->displayBlock('body', $context, $blocks);
        // line 194
        echo "                       </div>
                       
                       
                       
                       
                       <!--<div class=\"span1 offset1\">
                          Bloc latéral droit
                       </div>-->
                           
                </div>             
                     

                       
                 <!-- Bas de page -->      
                <div class=\"well\" style=\"height:60px;margin-left:-10px;\">   
                
                   ";
        // line 211
        echo "                    <p class=\"text-info pull-right\">WEBMESTRE : ";
        echo twig_escape_filter($this->env, (isset($context["webmaster_nom"]) ? $context["webmaster_nom"] : $this->getContext($context, "webmaster_nom")), "html", null, true);
        echo "</p>
                    <p class=\"text-info \">Pour toute anomalie, contactez-moi <a href=\"mailto:";
        // line 212
        echo twig_escape_filter($this->env, (isset($context["webmaster_email"]) ? $context["webmaster_email"] : $this->getContext($context, "webmaster_email")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["webmaster_email"]) ? $context["webmaster_email"] : $this->getContext($context, "webmaster_email")), "html", null, true);
        echo "</a></p>
               </div>
              
        
            </div>
    
         ";
        // line 218
        $this->displayBlock('javascripts', $context, $blocks);
        // line 268
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

    // line 192
    public function block_body($context, array $blocks = array())
    {
        // line 193
        echo "                                     ";
    }

    // line 218
    public function block_javascripts($context, array $blocks = array())
    {
        // line 219
        echo "               
            <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 221
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/init.jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/init.standard.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/js/ready.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
             <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stfalcontinymce/vendor/tinymce/tinymce.jquery.min.js"), "html", null, true);
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
        // line 256
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "540e3c5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_540e3c5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/540e3c5_bootstrap.min_1.js");
            // line 261
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
        // line 262
        echo "   
            
            ";
        // line 265
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
        return array (  503 => 265,  499 => 262,  473 => 261,  469 => 256,  437 => 227,  433 => 226,  429 => 225,  425 => 224,  421 => 223,  417 => 222,  413 => 221,  409 => 220,  406 => 219,  403 => 218,  399 => 193,  396 => 192,  390 => 5,  378 => 268,  376 => 218,  365 => 212,  360 => 211,  342 => 194,  340 => 192,  316 => 171,  307 => 165,  293 => 156,  285 => 150,  278 => 146,  272 => 142,  270 => 141,  265 => 138,  263 => 135,  257 => 123,  249 => 118,  240 => 111,  224 => 96,  221 => 95,  219 => 94,  217 => 93,  212 => 91,  207 => 89,  203 => 88,  186 => 73,  178 => 71,  172 => 70,  169 => 69,  161 => 67,  155 => 66,  147 => 60,  141 => 57,  138 => 56,  136 => 55,  132 => 53,  119 => 43,  114 => 41,  109 => 39,  105 => 38,  101 => 36,  97 => 34,  93 => 33,  87 => 29,  84 => 27,  82 => 26,  78 => 24,  76 => 23,  65 => 15,  63 => 14,  37 => 12,  33 => 7,  28 => 5,  22 => 1,);
    }
}
