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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
    ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
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
        if ((!twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 46
                echo "
          <div class=\"row\" id=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "\">
           <div id=\"operations\" class=\"input-group input-group-sm\">
                
                ";
                // line 50
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user") == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
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
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "photoPath")), "html", null, true);
                echo "\" />
                                           </div>
                                          
                                   </td>
                                   <td><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_user", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "page" => (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))), "html", null, true);
                echo "\"><u>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "username"), "html", null, true);
                echo "</u></a></td>
                                   <td style=\"text-align:right;\" class=\"col-sm-offset-9 pull-right\">
                                       ";
                // line 67
                if ((twig_date_format_filter($this->env, "now", "m/d/Y") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "m/d/Y"))) {
                    // line 68
                    echo "                                              aujourd'hui à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "h:m"), "html", null, true);
                    echo "
                                      ";
                } else {
                    // line 70
                    echo "                                              Le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "d/m/Y à h:m"), "html", null, true);
                    echo "
                                      ";
                }
                // line 72
                echo "                                   </td>
                                   
                                       ";
                // line 74
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
                    // line 75
                    echo "                    ";
                    if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "statut") == "modere")) {
                        // line 76
                        echo "                        ";
                        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user") == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
                            // line 77
                            echo "                           <td>
                      <div class=\"input-group-btn\"> 
                         <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
                          <ul style=\"margin-top:inherit;\" class=\"dropdown-menu pull-right\" id=";
                            // line 80
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
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
                       <div class=\"panel-body \" >
                                    ";
                // line 97
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu");
                echo "
                                        ";
                // line 98
                echo "</div>
                   </div>
                
                   
                   </div>

          
            
          </div>

     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "
";
        } else {
            // line 111
            echo "     
    Il n'y a aucun commentaire
    
 ";
        }
        // line 115
        echo " 
";
        // line 116
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 117
            echo "    <div class=\"\">
     <ul class=\"pagination\">
        <li>
           <a href=\"";
            // line 120
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => 1));
            echo "\"> <span> << </span> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo "\"><span> Précédent </span> </a>
        </li>

     ";
            // line 123
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 124
                echo "       
        ";
                // line 125
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                    // line 126
                    echo "           <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a></li>
       ";
                } else {
                    // line 128
                    echo "           <li>
               <a href=\"";
                    // line 129
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
            </li>
       ";
                }
                // line 132
                echo "          
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "   <li>
      <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo "\">Suivant</a><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
            echo "\"> <span> >> </span></a>
   </li>
    </ul>
       </div>
 ";
        }
        // line 140
        echo "<div class=\"pagination_desc\"><strong>";
        echo twig_escape_filter($this->env, (isset($context["total_commentaires"]) ? $context["total_commentaires"] : $this->getContext($context, "total_commentaires")), "html", null, true);
        echo "</strong> commentaires dans la page
 ";
        // line 141
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 142
            echo " - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />   
     ";
        } else {
            // asset "ac1f387"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac1f387") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ac1f387.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />   
     ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "
";
    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
        // line 153
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
        return array (  356 => 153,  353 => 152,  348 => 14,  334 => 12,  330 => 10,  324 => 8,  321 => 7,  304 => 142,  302 => 141,  297 => 140,  287 => 135,  284 => 134,  277 => 132,  269 => 129,  266 => 128,  260 => 126,  258 => 125,  255 => 124,  251 => 123,  243 => 120,  238 => 117,  236 => 116,  233 => 115,  227 => 111,  223 => 109,  207 => 98,  203 => 97,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  108 => 47,  105 => 46,  101 => 45,  95 => 42,  90 => 40,  86 => 38,  83 => 36,  81 => 35,  76 => 32,  70 => 28,  68 => 27,  64 => 25,  61 => 23,  59 => 22,  56 => 21,  48 => 19,  42 => 18,  38 => 16,  36 => 7,  33 => 6,  30 => 5,);
    }
}
