<?php

/* VMBlogBundle:Commentaire:comlist.html.twig */
class __TwigTemplate_c99bf366efe661f74682e4b5a6728809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VMBlogBundle::base.html.twig");

        $this->blocks = array(
            'vmblog_stylesheet' => array($this, 'block_vmblog_stylesheet'),
            'vmblog_body' => array($this, 'block_vmblog_body'),
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

    // line 3
    public function block_vmblog_stylesheet($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        $this->displayParentBlock("vmblog_stylesheet", $context, $blocks);
        echo "
      <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/css/commentaire.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 9
        echo " 
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
    ";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
";
        // line 14
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 15
            echo "    <div id=\"formulaire\">
         ";
            // line 17
            echo "         <div class=\"row\">";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("VMBlogBundle:Commentaire:ajoutcommentaire"), array());
            echo "</div>   
    </div> 
";
        }
        // line 20
        echo "      
 <div id=\"liste_commentaire\">
 
";
        // line 23
        if ((!twig_test_empty($this->getContext($context, "entities")))) {
            // line 24
            echo "     
    ";
            // line 26
            echo "     <div class=\"row\">
        <div class=\"pull-right\">
            <a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("tri" => "asc"));
            echo "\">Par  date croissante</a>
            /
            <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("tri" => "desc"));
            echo "\" >Par  date décroissante</a>
        </div>
     </div>        
    ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 34
                echo "
          <div class=\"row\" id=";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo ">
           <div id=\"operations\" class=\"input-group input-group-sm\">
                
                ";
                // line 38
                if (($this->getAttribute($this->getContext($context, "entity"), "user") == $this->getAttribute($this->getContext($context, "app"), "user"))) {
                    // line 39
                    echo "                   <div class=\"panel panel-success\">
               ";
                } else {
                    // line 41
                    echo "                   <div class=\"panel panel-info\">       
               ";
                }
                // line 43
                echo "                       <div class=\"panel-heading\">
                           <table>
                               <tr>
                                   <td>
                                       
                                           <div class='thumbnail'>
                                            <img width=\"30\" src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmuser/photo/" . $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "photo"))), "html", null, true);
                echo "\" />
                                           </div>
                                          
                                   </td>
                                   <td><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_user", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "page" => $this->getContext($context, "current_page"))), "html", null, true);
                echo "\"><u>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "user"), "username"), "html", null, true);
                echo "</u></a></td>
                                   <td style=\"text-align:right;\" class=\"col-sm-offset-9 pull-right\">
                                       ";
                // line 55
                if ((twig_date_format_filter($this->env, "now", "m/d/Y") == twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "m/d/Y"))) {
                    // line 56
                    echo "                                              aujourd'hui à ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "h:m"), "html", null, true);
                    echo "
                                      ";
                } else {
                    // line 58
                    echo "                                              Le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "d/m/Y à h:m"), "html", null, true);
                    echo "
                                      ";
                }
                // line 60
                echo "                                   </td>
                                   
                                       ";
                // line 62
                if ($this->getAttribute($this->getContext($context, "app"), "user")) {
                    // line 63
                    echo "                    ";
                    if (($this->getAttribute($this->getContext($context, "entity"), "statut") == "modere")) {
                        // line 64
                        echo "                        ";
                        if (($this->getAttribute($this->getContext($context, "entity"), "user") == $this->getAttribute($this->getContext($context, "app"), "user"))) {
                            // line 65
                            echo "                           <td>
                      <div class=\"input-group-btn\"> 
                         <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
                          <ul style=\"margin-top:-70px;\" class=\"dropdown-menu pull-right\" id=";
                            // line 68
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                            echo ">
                            <li id=\"edit\"><a href=\"#\" rel=\"popover\" id=\"editer_commentaire\">Modifier</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\" id=\"supprimer_commentaire\">Supprimer</a></li>
                        </ul>
                     </div><!-- /btn-group -->
                    
                         ";
                        }
                        // line 76
                        echo "                    ";
                    }
                    // line 77
                    echo "                 ";
                }
                // line 78
                echo "                                   
                               </tr>
                            </table>
                              
                       
                       </div>
                       <div class=\"panel-body \" >";
                // line 84
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
            // line 95
            echo "
";
        } else {
            // line 97
            echo "     
    Il n'y a aucun commentaire
    
 ";
        }
        // line 101
        echo " 
";
        // line 102
        if (($this->getContext($context, "last_page") > 1)) {
            // line 103
            echo "    <div class=\"\">
     <ul class=\"pagination\">
        <li>
           <a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => 1));
            echo "\"> <span> << </span> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\"><span> Précédent </span> </a>
        </li>

     ";
            // line 109
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 110
                echo "       
        ";
                // line 111
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    // line 112
                    echo "           <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
       ";
                } else {
                    // line 114
                    echo "           <li>
               <a href=\"";
                    // line 115
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
            </li>
       ";
                }
                // line 118
                echo "          
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "   <li>
      <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\">Suivant</a><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\"> <span> >> </span></a>
   </li>
    </ul>
       </div>
 ";
        }
        // line 126
        echo "<div class=\"pagination_desc\"><strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "total_commentaires"), "html", null, true);
        echo "</strong> commentaires dans la page
 ";
        // line 127
        if (($this->getContext($context, "last_page") > 1)) {
            // line 128
            echo " - page <strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "current_page"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getContext($context, "last_page"), "html", null, true);
            echo "</strong> ";
        }
        echo "</div>
</div>
</div>

 <script language=\"javascript\">
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
        return array (  302 => 128,  300 => 127,  295 => 126,  285 => 121,  282 => 120,  275 => 118,  267 => 115,  264 => 114,  258 => 112,  256 => 111,  253 => 110,  249 => 109,  241 => 106,  236 => 103,  234 => 102,  231 => 101,  225 => 97,  221 => 95,  204 => 84,  196 => 78,  193 => 77,  190 => 76,  179 => 68,  174 => 65,  171 => 64,  168 => 63,  166 => 62,  162 => 60,  156 => 58,  150 => 56,  148 => 55,  141 => 53,  134 => 49,  126 => 43,  122 => 41,  118 => 39,  116 => 38,  110 => 35,  107 => 34,  103 => 33,  97 => 30,  92 => 28,  88 => 26,  85 => 24,  83 => 23,  78 => 20,  71 => 17,  68 => 15,  66 => 14,  63 => 13,  55 => 11,  49 => 10,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
