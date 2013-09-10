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
        return array (  441 => 246,  421 => 245,  417 => 241,  380 => 210,  376 => 209,  373 => 208,  370 => 207,  366 => 182,  363 => 181,  357 => 5,  345 => 251,  343 => 207,  332 => 201,  327 => 200,  307 => 181,  263 => 142,  255 => 136,  239 => 127,  234 => 124,  232 => 121,  226 => 109,  218 => 104,  194 => 84,  190 => 83,  186 => 82,  161 => 65,  155 => 64,  152 => 63,  124 => 51,  97 => 35,  70 => 23,  76 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 211,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 183,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 132,  241 => 128,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 67,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 49,  102 => 37,  71 => 19,  67 => 15,  63 => 14,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 10,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 28,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 60,  136 => 56,  121 => 50,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 17,  72 => 24,  69 => 18,  47 => 9,  40 => 8,  37 => 9,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 47,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 21,  55 => 15,  52 => 21,  50 => 9,  43 => 8,  41 => 7,  35 => 4,  32 => 3,  29 => 3,  209 => 97,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 28,  82 => 29,  80 => 19,  73 => 19,  64 => 20,  60 => 13,  57 => 11,  54 => 12,  51 => 11,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 7,  30 => 7,);
    }
}
