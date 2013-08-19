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

    // line 2
    public function block_vmblog_stylesheet($context, array $blocks = array())
    {
        // line 3
        echo "     ";
        $this->displayParentBlock("vmblog_stylesheet", $context, $blocks);
        echo "
    
          <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/css/commentaire.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
   
";
    }

    // line 9
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 10
        echo " 
<div class=\"\">Commentaires
     ";
        // line 13
        echo "     ";
        $this->env->loadTemplate("VMBlogBundle:Commentaire:formulaire.html.twig")->display(array_merge($context, array("form" => $this->getContext($context, "form"))));
        echo "   
  
<div id=\"\"><ul>
 ";
        // line 16
        if ((!twig_test_empty($this->getContext($context, "entities")))) {
            // line 17
            echo " ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 18
                echo "
 <ul style=\"list-style-type:none;\">
    <li id=";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo ">
        <a href=\"#\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "auteur"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "contenu"), "html", null, true);
                echo "</a>
        ";
                // line 23
                echo "        <a href=\"#\" class=\"btn \" id=\"editer_commentaire\"> <i class=\"icon-edit\"></i>Editer</a>
        <a href=\"#\" class=\"btn \" id=\"supprimer_commentaire\"> <i class=\"icon-trash\"></i>Supprimer</a>
     </li>
</ul>
        
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo " ";
        } else {
            // line 30
            echo " Résultat vide
 ";
        }
        // line 32
        echo " ";
        if (($this->getContext($context, "last_page") > 1)) {
            // line 33
            echo "<div class=\"\">
 <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => 1));
            echo "\"> <span> << </span> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\"><span> < </span> </a>
<ul>
    <ul>";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                echo "</ul>
</ul>
<ul>
<ul>";
                // line 39
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    echo "</ul>
</ul>

<ul>
    <li>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</li>
</ul>
</ul>
<ul>
    <ul>";
                } else {
                    // line 47
                    echo "</ul>
</ul>
<ul>
<ul>
    <li><a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
</ul>
    </ul>
<ul>
<ul>";
                }
                // line 55
                echo "</ul>
</ul>
<ul>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "</ul>
 <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\"> <span> > </span></a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\"> <span> >> </span></a></div>
 ";
        }
        // line 60
        echo "<div class=\"pagination_desc\"><strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "total_commentaires"), "html", null, true);
        echo "</strong> commentaires dans la page
 ";
        // line 61
        if (($this->getContext($context, "last_page") > 1)) {
            // line 62
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
        return array (  175 => 62,  173 => 61,  168 => 60,  161 => 58,  158 => 57,  150 => 55,  140 => 51,  134 => 47,  126 => 43,  119 => 39,  111 => 36,  104 => 34,  101 => 33,  98 => 32,  94 => 30,  91 => 29,  80 => 23,  74 => 21,  70 => 20,  66 => 18,  61 => 17,  59 => 16,  52 => 13,  48 => 10,  45 => 9,  38 => 5,  32 => 3,  29 => 2,);
    }
}
