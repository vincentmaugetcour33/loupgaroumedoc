<?php

/* VMBlogBundle:Commentaire:comlist.html.twig */
class __TwigTemplate_c99bf366efe661f74682e4b5a6728809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VMBlogBundle::base.html.twig");

        $this->blocks = array(
            'vmblog_body' => array($this, 'block_vmblog_body'),
            'vmblog_stylesheet' => array($this, 'block_vmblog_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VMBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 6
        echo " 
";
        // line 7
        $this->displayBlock('vmblog_stylesheet', $context, $blocks);
        // line 16
        echo " 

";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo " 
";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 23
            echo "    <div id=\"formulaire\">
         ";
            // line 25
            echo "         <div class=\"row\">
                <div class=\"col-sm-9\" style=\"margin-left:-15px;\">
                  ";
            // line 27
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("VMBlogBundle:Commentaire:ajoutcommentaire"), array());
            // line 28
            echo "                </div>
         </div>        
    </div> 
";
        }
        // line 32
        echo "      
 <div id=\"liste_commentaire\">
 
";
        // line 35
        if ((!twig_test_empty($this->getContext($context, "entities")))) {
            // line 36
            echo "     
    ";
            // line 38
            echo "     <div class=\"row\">
        <div class=\"pull-right\">
            <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("tri" => "asc"));
            echo "\">Par  date croissante</a>
            /
            <a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("tri" => "desc"));
            echo "\" >Par  date décroissante</a>
        </div>
     </div>        
    ";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 46
                echo "
          <div class=\"row\" id=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo "\">
           <div id=\"operations\" class=\"input-group input-group-sm\">
                
                ";
                // line 50
                if (($this->getAttribute($this->getContext($context, "entity"), "user") == $this->getAttribute($this->getContext($context, "app"), "user"))) {
                    // line 51
                    echo "                   <div class=\"panel panel-success\">
               ";
                } else {
                    // line 53
                    echo "                   <div class=\"panel panel-info\">       
               ";
                }
                // line 55
                echo "                       <div class=\"panel-heading\">
                           <table>
                               <tr>
                                   <td>
                                       
                                           <div class='thumbnail'>
                                            <img width=\"30\" src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "photoPath")), "html", null, true);
                echo "\" />
                                           </div>
                                          
                                   </td>
                                   <td><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_user", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "page" => $this->getContext($context, "current_page"))), "html", null, true);
                echo "\"><u>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "username"), "html", null, true);
                echo "</u></a></td>
                                   <td style=\"text-align:right;\" class=\"col-sm-offset-9 pull-right\">
                                       ";
                // line 67
                if ((twig_date_format_filter($this->env, "now", "m/d/Y") == twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "m/d/Y"))) {
                    // line 68
                    echo "                                              aujourd'hui à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "h:m"), "html", null, true);
                    echo "
                                      ";
                } else {
                    // line 70
                    echo "                                              Le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "d/m/Y à h:m"), "html", null, true);
                    echo "
                                      ";
                }
                // line 72
                echo "                                   </td>
                                   
                                       ";
                // line 74
                if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                    // line 75
                    echo "                    ";
                    if (($this->getAttribute($this->getContext($context, "entity"), "statut") == "modere")) {
                        // line 76
                        echo "                        ";
                        if (($this->getAttribute($this->getContext($context, "entity"), "user") == $this->getAttribute($this->getContext($context, "app"), "user"))) {
                            // line 77
                            echo "                           <td>
                      <div class=\"input-group-btn\"> 
                         <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
                          <ul style=\"margin-top:-70px;\" class=\"dropdown-menu pull-right\" id=";
                            // line 80
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                            echo ">
                            <li id=\"edit\"><a href=\"#\" rel=\"popover\" id=\"editer_commentaire\">Modifier</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\" id=\"supprimer_commentaire\">Supprimer</a></li>
                        </ul>
                     </div><!-- /btn-group -->
                    
                         ";
                        }
                        // line 88
                        echo "                    ";
                    }
                    // line 89
                    echo "                 ";
                }
                // line 90
                echo "                                   
                               </tr>
                            </table>
                              
                       
                       </div>
                       <div class=\"panel-body \" >";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "contenu"), "html", null, true);
                echo "</div>
                   </div>
                
                   
                   </div>

          
            
          </div>

     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "
";
        } else {
            // line 109
            echo "     
    Il n'y a aucun commentaire
    
 ";
        }
        // line 113
        echo " 
";
        // line 114
        if (($this->getContext($context, "last_page") > 1)) {
            // line 115
            echo "    <div class=\"\">
     <ul class=\"pagination\">
        <li>
           <a href=\"";
            // line 118
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => 1));
            echo "\"> <span> << </span> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\"><span> Précédent </span> </a>
        </li>

     ";
            // line 121
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 122
                echo "       
        ";
                // line 123
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    // line 124
                    echo "           <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
       ";
                } else {
                    // line 126
                    echo "           <li>
               <a href=\"";
                    // line 127
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
            </li>
       ";
                }
                // line 130
                echo "          
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "   <li>
      <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\">Suivant</a><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\"> <span> >> </span></a>
   </li>
    </ul>
       </div>
 ";
        }
        // line 138
        echo "<div class=\"pagination_desc\"><strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "total_commentaires"), "html", null, true);
        echo "</strong> commentaires dans la page
 ";
        // line 139
        if (($this->getContext($context, "last_page") > 1)) {
            // line 140
            echo " - page <strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "current_page"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getContext($context, "last_page"), "html", null, true);
            echo "</strong> ";
        }
        echo "</div>
</div>
</div>

 
 
 
";
    }

    // line 7
    public function block_vmblog_stylesheet($context, array $blocks = array())
    {
        // line 8
        echo "     ";
        $this->displayParentBlock("vmblog_stylesheet", $context, $blocks);
        echo "
     
     ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ac1f387_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac1f387_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ac1f387_commentaire_1.css");
            // line 12
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />   
     ";
        } else {
            // asset "ac1f387"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac1f387") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ac1f387.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" />   
     ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "
";
    }

    // line 150
    public function block_javascripts($context, array $blocks = array())
    {
        // line 151
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
      <script language=\"javascript\" type=\"text/javascript\">
       (function(\$) {   
          
          \$(\"ul.nav > li#commentaires\").addClass('active');
          
          \$(\"body\").on(\"click\", \"#editer_commentaire\", (function()
          {
           var identifiant = parseInt(\$(this).parent().parent().attr(\"id\"));
            
            \$.ajax({
               type: \"POST\",
               url: Routing.generate('vm_blog_commentaire_edit', { id: identifiant }),
               cache:false,
               success: function(data)
               {
               \$(\"#formulaire\").html(data);
               }
             });
            
          }));
          
              
          \$(\"body\").on(\"click\", \"#supprimer_commentaire\", (function()
          { 
            if (confirm(\"Souhaitez-vous réellement supprimer ce commentaire ?\")) 
            {
                var identifiant = parseInt(\$(this).parent().parent().attr(\"id\"));
                \$.ajax({
                   type: \"POST\",
                   url: Routing.generate('vm_blog_commentaire_supprime', { id: identifiant }),
                   cache:false,
                   success: function(data)
                   {
                    alert(\"Commentaire supprimé\");
                    \$(\"div#\"+identifiant).remove();
                }
                 });
             }
             
          }));
        
    }(jQuery));


 </script>   
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Commentaire:comlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 151,  349 => 150,  344 => 14,  330 => 12,  326 => 10,  320 => 8,  317 => 7,  300 => 140,  293 => 138,  280 => 132,  265 => 127,  262 => 126,  256 => 124,  251 => 122,  223 => 109,  202 => 96,  191 => 89,  188 => 88,  172 => 77,  160 => 72,  148 => 68,  146 => 67,  114 => 50,  90 => 40,  81 => 35,  441 => 246,  421 => 245,  417 => 241,  380 => 210,  376 => 209,  373 => 208,  370 => 207,  366 => 182,  363 => 181,  357 => 5,  345 => 251,  343 => 207,  332 => 201,  327 => 200,  307 => 181,  263 => 142,  255 => 136,  239 => 118,  234 => 115,  232 => 114,  226 => 109,  218 => 104,  194 => 90,  190 => 83,  186 => 82,  161 => 65,  155 => 64,  152 => 63,  124 => 55,  97 => 35,  70 => 28,  76 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 211,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 183,  305 => 95,  298 => 139,  294 => 90,  285 => 89,  283 => 133,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 121,  241 => 128,  229 => 113,  220 => 70,  214 => 69,  177 => 80,  169 => 76,  140 => 55,  132 => 61,  128 => 49,  107 => 36,  61 => 23,  273 => 130,  269 => 94,  254 => 123,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 49,  102 => 37,  71 => 19,  67 => 15,  63 => 14,  59 => 22,  38 => 16,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 27,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 28,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 75,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 60,  136 => 56,  121 => 50,  117 => 44,  105 => 46,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 17,  72 => 24,  69 => 18,  47 => 9,  40 => 8,  37 => 9,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 65,  131 => 52,  123 => 47,  120 => 53,  115 => 47,  111 => 37,  108 => 47,  101 => 45,  98 => 31,  96 => 31,  83 => 36,  74 => 14,  66 => 21,  55 => 15,  52 => 21,  50 => 9,  43 => 8,  41 => 7,  35 => 4,  32 => 3,  29 => 3,  209 => 97,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 74,  162 => 57,  154 => 70,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 42,  92 => 33,  86 => 38,  82 => 29,  80 => 19,  73 => 19,  64 => 25,  60 => 13,  57 => 11,  54 => 12,  51 => 11,  48 => 19,  45 => 8,  42 => 18,  39 => 9,  36 => 7,  33 => 6,  30 => 5,);
    }
}
