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
<div class=\"\">
     ";
        // line 12
        echo "     ";
        $this->env->loadTemplate("VMBlogBundle:Commentaire:formulaire.html.twig")->display(array_merge($context, array("form" => $this->getContext($context, "form"))));
        echo "   
  
 <div id=\"liste_commentaire\">
 
";
        // line 16
        if ((!twig_test_empty($this->getContext($context, "entities")))) {
            // line 17
            echo " 
    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 19
                echo "

        <div class=\"row\" id=";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo ">
           <div id=\"operations\" class=\"input-group input-group-sm\">
                <input style=\"cursor:pointer;\" type=\"text\" rel=\"popover\" id=\"montrer_commentaire\" class=\"form-control input-lg\" readonly value=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "contenu"), 115, true, "[...]"), "html", null, true);
                echo "\" placeholder=\"Commentaire\">
                <div class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu pull-right\" id=";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo ">
                        <li id=\"edit\"><a href=\"#\" rel=\"popover\" id=\"editer_commentaire\">Modifier</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\" id=\"supprimer_commentaire\">Supprimer</a></li>
                    </ul>
                </div><!-- /btn-group -->

            </div>
            
          </div>

     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
";
        } else {
            // line 40
            echo "     
    Résultat vide
    
 ";
        }
        // line 44
        echo " 
";
        // line 45
        if (($this->getContext($context, "last_page") > 1)) {
            // line 46
            echo "    <div class=\"\">
     <ul class=\"pagination\">
        <li>
           <a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => 1));
            echo "\"> <span> << </span> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\"><span> < </span> </a>
        </li>

     ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 53
                echo "       
        ";
                // line 54
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    // line 55
                    echo "           <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
       ";
                } else {
                    // line 57
                    echo "           <li>
               <a href=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
            </li>
       ";
                }
                // line 61
                echo "          
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "   <li>
      <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\"> <span> > </span></a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\"> <span> >> </span></a>
   </li>
    </ul>
       </div>
 ";
        }
        // line 69
        echo "<div class=\"pagination_desc\"><strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "total_commentaires"), "html", null, true);
        echo "</strong> commentaires dans la page
 ";
        // line 70
        if (($this->getContext($context, "last_page") > 1)) {
            // line 71
            echo " - page <strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "current_page"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getContext($context, "last_page"), "html", null, true);
            echo "</strong> ";
        }
        echo "</div>
</div>
</div>

<script language=\"javascript\" type=\"text/javascript\">
       \$(document).ready(function() {   
          \$.data(document.body, 'popup',0);
         
          \$(\"body\").on(\"click\", \"#editer_commentaire\", (function()
          {
             if (\$.data(document.body, 'popup') == 0) 
                  {  
            var identifiant = parseInt(\$(this).parent().parent().attr(\"id\"));
            \$.ajax({
               type: \"POST\",
               url: Routing.generate('vm_blog_commentaire_edit', { id: identifiant }),
               cache:false,
               success: function(data)
               {
               \$(\"#\"+identifiant+\"> #edit > #editer_commentaire\").popover({'content':data,html:true,placement:'bottom'});
               \$.data(document.body, 'popup',1);
               \$(\"#\"+identifiant+\" #edit > #editer_commentaire\").click();
               }
             });
             }
            else { \$.data(document.body, 'popup', 0); }
          }));
          
              
          \$(\"body\").on(\"mouseover\", \"#montrer_commentaire\", (function()
          { 
            if (\$.data(document.body, 'popup') == 0) 
                {
            var identifiant = parseInt(\$(this).parent().parent().attr(\"id\"));
            \$.ajax({
               type: \"POST\",
               url: Routing.generate('vm_blog_commentaire_show', { id: identifiant }),
               cache:false,
               success: function(data)
               {
               \$(\"#\"+identifiant+\"> #operations > #montrer_commentaire\").popover({html:true,delay: { show:500,hide:10}, 'title':'Commentaire',trigger:'click','content':data,html:true,placement:'bottom'});
               \$.data(document.body, 'popup',1);
               \$(\"#\"+identifiant+\"> #operations > #montrer_commentaire\").click();
               \$(\"#\"+identifiant+\"> #operations > #montrer_commentaire\").mouseout(function ()
                {
                    \$(this).popover('destroy'); setInterval(function(){
                    \$.data(document.body, 'popup',0);
                    },3000);
                });
               
               }
             });
             }
           // else { \$.data(document.body, 'popup', 0); }
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
        
    });
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
        return array (  181 => 71,  179 => 70,  174 => 69,  164 => 64,  161 => 63,  154 => 61,  146 => 58,  143 => 57,  137 => 55,  135 => 54,  132 => 53,  128 => 52,  120 => 49,  115 => 46,  113 => 45,  110 => 44,  104 => 40,  100 => 38,  82 => 26,  76 => 23,  71 => 21,  67 => 19,  63 => 18,  60 => 17,  58 => 16,  50 => 12,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
