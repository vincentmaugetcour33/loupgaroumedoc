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
<div id=\"formulaire\">
     ";
        // line 16
        echo "     ";
        // line 17
        echo "        ";
        if (array_key_exists("form", $context)) {
            // line 18
            echo "
            <form class=\"form-inline\" method=\"post\" action=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list");
            echo "\" ";
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
            echo ">
               <div class=\"form-group\">";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "auteur"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Auteur")));
            echo "</div>
               <div class=\"form-group\">";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Commentaire")));
            echo "</div>
             <input type=\"submit\" class=\"btn btn-default\" />
             ";
            // line 24
            echo "           </form>
        ";
        }
        // line 26
        echo "</div> 
      
 <div id=\"liste_commentaire\">
 
";
        // line 30
        if ((!twig_test_empty($this->getContext($context, "entities")))) {
            // line 31
            echo " 
    ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 33
                echo "
          <div class=\"row\" id=";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo ">
           <div id=\"operations\" class=\"input-group input-group-sm\">
                <!--<textarea rows=10 id=\"montrer_commentaire\" class=\"form-control input-xlarge\" readonly>
                    
                   </textarea> -->
                   <span class=\"input-xlarge uneditable-input\" class=\"form-control\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "contenu"), "html", null, true);
                echo "</span>
                <div class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu pull-right\" id=";
                // line 42
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
            // line 54
            echo "
";
        } else {
            // line 56
            echo "     
    Résultat vide
    
 ";
        }
        // line 60
        echo " 
";
        // line 61
        if (($this->getContext($context, "last_page") > 1)) {
            // line 62
            echo "    <div class=\"\">
     <ul class=\"pagination\">
        <li>
           <a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => 1));
            echo "\"> <span> << </span> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\"><span> < </span> </a>
        </li>

     ";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 69
                echo "       
        ";
                // line 70
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    // line 71
                    echo "           <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
       ";
                } else {
                    // line 73
                    echo "           <li>
               <a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
            </li>
       ";
                }
                // line 77
                echo "          
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "   <li>
      <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\"> <span> > </span></a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\"> <span> >> </span></a>
   </li>
    </ul>
       </div>
 ";
        }
        // line 85
        echo "<div class=\"pagination_desc\"><strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "total_commentaires"), "html", null, true);
        echo "</strong> commentaires dans la page
 ";
        // line 86
        if (($this->getContext($context, "last_page") > 1)) {
            // line 87
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
        return array (  227 => 87,  225 => 86,  220 => 85,  210 => 80,  207 => 79,  200 => 77,  192 => 74,  189 => 73,  183 => 71,  181 => 70,  178 => 69,  174 => 68,  166 => 65,  161 => 62,  159 => 61,  156 => 60,  150 => 56,  146 => 54,  128 => 42,  122 => 39,  114 => 34,  111 => 33,  107 => 32,  104 => 31,  102 => 30,  96 => 26,  92 => 24,  87 => 21,  83 => 20,  75 => 19,  72 => 18,  69 => 17,  67 => 16,  63 => 13,  55 => 11,  49 => 10,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
