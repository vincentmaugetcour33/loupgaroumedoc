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
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 4
        echo " 
<div class=\"\">Commentaires
     ";
        // line 7
        echo "     ";
        $this->env->loadTemplate("VMBlogBundle:Commentaire:formulaire.html.twig")->display(array_merge($context, array("form" => $this->getContext($context, "form"))));
        echo "   
  
<div id=\"\"><ul>
 ";
        // line 10
        if ((!twig_test_empty($this->getContext($context, "entities")))) {
            // line 11
            echo " ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 12
                echo "
 <ul style=\"list-style-type:none;\">
    <li id=";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo ">
        <a href=\"#\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "auteur"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "contenu"), "html", null, true);
                echo "</a>
        ";
                // line 17
                echo "        <a href=\"#\" class=\"btn \" id=\"editer_commentaire\"> <i class=\"icon-edit\"></i>Editer</a>
        <a href=\"#\" class=\"btn \" id=\"supprimer_commentaire\"> <i class=\"icon-trash\"></i>Supprimer</a>
     </li>
</ul>
        
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo " ";
        } else {
            // line 24
            echo " Résultat vide
 ";
        }
        // line 26
        echo " ";
        if (($this->getContext($context, "last_page") > 1)) {
            // line 27
            echo "<div class=\"\">
 <a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => 1));
            echo "\"> <span> << </span> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\"><span> < </span> </a>
<ol>
<ol>";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                echo "</ol>
</ol>
<ol>
<ol>";
                // line 33
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    echo "</ol>
</ol>
<ol>
<ol>
    <li>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</li>
</ol>
</ol>
<ol>
<ol>";
                } else {
                    // line 41
                    echo "</ol>
</ol>
<ol>
<ol>
    <li><a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
</ol>
</ol>
<ol>
<ol>";
                }
                // line 49
                echo "</ol>
</ol>
<ol>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "</ol>
 <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\"> <span> > </span></a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\"> <span> >> </span></a></div>
 ";
        }
        // line 54
        echo "<div class=\"pagination_desc\"><strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "total_commentaires"), "html", null, true);
        echo "</strong> commentaires dans la page
 ";
        // line 55
        if (($this->getContext($context, "last_page") > 1)) {
            // line 56
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
            var identifiant = parseInt(\$(this).parent().attr(\"id\"));
            \$.ajax({
               type: \"POST\",
               url: Routing.generate('vm_blog_commentaire_edit', { id: identifiant }),
               cache:false,
               success: function(data)
               {
               \$(\"#\"+identifiant+\" > #editer_commentaire\").popover({'content':data,html:true,placement:'bottom'});
               \$.data(document.body, 'popup',1);
               \$(\"#\"+identifiant+\" #editer_commentaire\").click();
               }
             });
             }
            else { \$.data(document.body, 'popup', 0); }
          }));
          
              
          \$(\"body\").on(\"click\", \"#montrer_commentaire\", (function()
          { 
            if (\$.data(document.body, 'popup') == 0) 
                  {
            var identifiant = parseInt(\$(this).parent().attr(\"id\"));
            \$.ajax({
               type: \"POST\",
               url: Routing.generate('vm_blog_commentaire_show', { id: identifiant }),
               cache:false,
               success: function(data)
               {
               \$(\"#\"+identifiant+\" >#montrer_commentaire\").popover({'delay': { hide:500}, 'title':'Commentaire','trigger':'hover','content':data,html:true,placement:'bottom'});
               \$.data(document.body, 'popup',1);
               \$(\"#\"+identifiant+\" > #montrer_commentaire\").mouseover();
               
               }
             });
             }
            else { \$.data(document.body, 'popup', 0); }
          }));
          
          \$(\"body\").on(\"click\", \"#supprimer_commentaire\", (function()
          { 
            if (confirm(\"Souhaitez-vous réellement supprimer ce commentaire ?\")) 
            {
                var identifiant = parseInt(\$(this).parent().attr(\"id\"));
                \$.ajax({
                   type: \"POST\",
                   url: Routing.generate('vm_blog_commentaire_supprime', { id: identifiant }),
                   cache:false,
                   success: function(data)
                   {
                    alert(\"Commentaire supprimé\");
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
        return array (  158 => 56,  156 => 55,  151 => 54,  144 => 52,  141 => 51,  133 => 49,  123 => 45,  117 => 41,  109 => 37,  102 => 33,  94 => 30,  87 => 28,  84 => 27,  81 => 26,  77 => 24,  74 => 23,  63 => 17,  57 => 15,  53 => 14,  49 => 12,  44 => 11,  42 => 10,  35 => 7,  31 => 4,  28 => 3,);
    }
}
