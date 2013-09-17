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
<p id=\"notes\" class=\"text-warning\">
                                 Pour le moment, la modification de commentaires n'affiche pas le champ avec les boutons.                En phase d'évolution, ce site peut présenter des problèmes d'affichage sur Internet Explorer.
                                 Je m'applique à remédier à ce problème.
                                </p> 
";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
    ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo " 
";
        // line 25
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 26
            echo "    <div id=\"formulaire\">
         ";
            // line 28
            echo "         <div class=\"row\">
                <div class=\"col-sm-9\" style=\"margin-left:-15px;\">
                  ";
            // line 30
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("VMBlogBundle:Commentaire:ajoutcommentaire"), array());
            // line 31
            echo "                </div>
         </div>        
    </div> 
";
        }
        // line 35
        echo "      
 <div id=\"liste_commentaire\">
 
";
        // line 38
        if ((!twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))))) {
            // line 39
            echo "     
    ";
            // line 41
            echo "     <div class=\"row\">
        <div class=\"pull-right\">
            <a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("tri" => "asc"));
            echo "\">Par  date croissante</a>
            /
            <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("tri" => "desc"));
            echo "\" >Par  date décroissante</a>
        </div>
     </div>        
    ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 49
                echo "
          <div class=\"row\" id=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "\">
           <div id=\"operations\" class=\"input-group input-group-sm\">
                
                ";
                // line 53
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user") == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
                    // line 54
                    echo "                   <div class=\"panel panel-success\">
               ";
                } else {
                    // line 56
                    echo "                   <div class=\"panel panel-info\">       
               ";
                }
                // line 58
                echo "                       <div class=\"panel-heading\">
                           <table>
                               <tr>
                                   <td>
                                       
                                           <div class='thumbnail'>
                                            <img width=\"30\" src=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "photoPath")), "html", null, true);
                echo "\" />
                                           </div>
                                          
                                   </td>
                                   <td><a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_user", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "page" => (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))), "html", null, true);
                echo "\"><u>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user"), "username"), "html", null, true);
                echo "</u></a></td>
                                   <td style=\"text-align:right;\" class=\"col-sm-offset-9 pull-right\">
                                       ";
                // line 70
                if ((twig_date_format_filter($this->env, "now", "m/d/Y") == twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "m/d/Y"))) {
                    // line 71
                    echo "                                              aujourd'hui à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "h:m"), "html", null, true);
                    echo "
                                      ";
                } else {
                    // line 73
                    echo "                                              Le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "d/m/Y à h:m"), "html", null, true);
                    echo "
                                      ";
                }
                // line 75
                echo "                                   </td>
                                   
                                       ";
                // line 77
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
                    // line 78
                    echo "                    ";
                    if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "statut") == "modere")) {
                        // line 79
                        echo "                        ";
                        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user") == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
                            // line 80
                            echo "                           <td>
                      <div class=\"input-group-btn\"> 
                         <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
                          <ul style=\"margin-top:inherit;\" class=\"dropdown-menu pull-right\" id=";
                            // line 83
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                            echo ">
                            <li id=\"edit\"><a href=\"#\" rel=\"popover\" id=\"editer_commentaire\"><i class=\"icon-large icon-edit\"></i>Modifier</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\" id=\"supprimer_commentaire\"><i class=\"icon-large icon-remove\"></i>Supprimer</a></li>
                        </ul>
                     </div><!-- /btn-group -->
                    
                         ";
                        }
                        // line 91
                        echo "                    ";
                    }
                    // line 92
                    echo "                 ";
                }
                // line 93
                echo "                                   
                               </tr>
                            </table>
                              
                       
                       </div>
                       <div class=\"panel-body \" >
                            
                                ";
                // line 101
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu");
                echo "
                            
                       </div>
                   </div>
                
                   
                   </div>

          
            
          </div>

     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "
";
        } else {
            // line 116
            echo "     
    Il n'y a aucun commentaire
    
 ";
        }
        // line 120
        echo " 
";
        // line 121
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 122
            echo "    <div class=\"\">
     <ul class=\"pagination\">
        <li>
           <a href=\"";
            // line 125
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => 1));
            echo "\"> <span> << </span> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo "\"><span> Précédent </span> </a>
        </li>

     ";
            // line 128
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 129
                echo "       
        ";
                // line 130
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                    // line 131
                    echo "           <li class=\"active\" ><a style=\"color:red;\" href=\"#\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a></li>
       ";
                } else {
                    // line 133
                    echo "           <li>
               <a  style=\"background-color:";
                    // line 134
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "#D2B48C", 1 => "#9ACD32"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
                    echo "\"
                   href=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
            </li>
       ";
                }
                // line 138
                echo "          
   ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "   <li>
      <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo "\">Suivant</a><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
            echo "\"> <span> >> </span></a>
   </li>
    </ul>
       </div>
 ";
        }
        // line 146
        echo "<div class=\"pagination_desc\"><strong>";
        echo twig_escape_filter($this->env, (isset($context["total_commentaires"]) ? $context["total_commentaires"] : $this->getContext($context, "total_commentaires")), "html", null, true);
        echo "</strong> commentaires dans la page
 ";
        // line 147
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 148
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

    // line 157
    public function block_javascripts($context, array $blocks = array())
    {
        // line 158
        echo "      ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
       
        ";
        // line 160
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit(array("forced_root_block" => "p", "force_br_newlines" => true, "force_p_newlines" => false));
        // line 164
        echo "       
            
      <script language=\"javascript\" type=\"text/javascript\">
       (function(\$) {   
          
          \$(\"ul.nav > li#commentaires\").addClass('active');
          
          \$(\"body\").on(\"click\", \"#editer_commentaire\", (function()
          {
           var identifiant = parseInt(\$(this).parent().parent().attr(\"id\"));
            tinyMCE.triggerSave();
            \$.ajax({
               type: \"POST\",
               url: Routing.generate('vm_blog_commentaire_edit', { id: identifiant }),
               cache:false,
               success: function(data)
               {
                  // \$(\"#formulaire\").tinymce({ });   
                  \$(\"#formulaire\").html(data);
                  tinymce.init({selector:'textarea',width: 800,
                      plugins: \"emoticons preview advlist autolink lists link image charmap preview anchor searchreplace visualblocks fullscreen insertdatetime contextmenu paste\",
                      toolbar: \"insertfile undo redo styleselect bold italic alignleft aligncenter alignright alignjustify bullist numlist outdent indent emoticons link image preview\"

                      });
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
        return array (  391 => 164,  389 => 160,  383 => 158,  380 => 157,  375 => 14,  361 => 12,  357 => 10,  351 => 8,  348 => 7,  332 => 148,  330 => 147,  325 => 146,  315 => 141,  312 => 140,  297 => 138,  289 => 135,  285 => 134,  282 => 133,  276 => 131,  274 => 130,  271 => 129,  254 => 128,  246 => 125,  241 => 122,  239 => 121,  236 => 120,  230 => 116,  226 => 114,  207 => 101,  197 => 93,  194 => 92,  191 => 91,  180 => 83,  175 => 80,  172 => 79,  169 => 78,  167 => 77,  163 => 75,  157 => 73,  151 => 71,  149 => 70,  142 => 68,  135 => 64,  127 => 58,  123 => 56,  119 => 54,  117 => 53,  111 => 50,  108 => 49,  104 => 48,  98 => 45,  93 => 43,  89 => 41,  86 => 39,  84 => 38,  79 => 35,  73 => 31,  71 => 30,  67 => 28,  64 => 26,  62 => 25,  59 => 24,  51 => 22,  45 => 21,  38 => 16,  36 => 7,  33 => 6,  30 => 5,);
    }
}
