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
<div class=\"articles\"><h2 > Commentaires
        <a href=\"#\" id=\"ajouter_commentaire\">Ajout</a>
        ";
        // line 8
        echo "        <div id=\"form\"></div>

<div id=\"list_articles\"><ul>
 ";
        // line 11
        if ((!twig_test_empty($this->getContext($context, "entities")))) {
            // line 12
            echo " ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 13
                echo "<ul>
    <li><a href=\"#\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "contenu"), "html", null, true);
                echo "</a></li>
</ul>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo " ";
        } else {
            // line 18
            echo " Résultat vide
 ";
        }
        // line 20
        echo " ";
        if (($this->getContext($context, "last_page") > 1)) {
            // line 21
            echo "<div class=\"pagination_sector\">
 <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("vm_blog_com_list", array("page" => 1));
            echo "\"> &<span> prec </span> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_com_list", array("page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\"> &<span> prec </span> </a>
<ol>
<ol>";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                echo "</ol>
</ol>
<ol>
<ol>";
                // line 27
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    echo "</ol>
</ol>
<ol>
<ol>
    <li>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</li>
</ol>
</ol>
<ol>
<ol>";
                } else {
                    // line 35
                    echo "</ol>
</ol>
<ol>
<ol>
    <li><a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_com_list", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
</ol>
</ol>
<ol>
<ol>";
                }
                // line 43
                echo "</ol>
</ol>
<ol>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "</ol>
 <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_com_list", array("page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\"> <span> suiv </span>& </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_com_list", array("page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\"> <span> suiv </span>&</a></div>
 ";
        }
        // line 48
        echo "<div class=\"pagination_desc\"><strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "total_commentaires"), "html", null, true);
        echo "</strong> commentaires dans la page
 ";
        // line 49
        if (($this->getContext($context, "last_page") > 1)) {
            // line 50
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
        \$(\"body\").on(\"click\", \"#ajouter_commentaire\", (function()
        {
         \$.ajax({
            type: \"POST\",
            url: \"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_ajout");
        echo "\",
            cache: false,
            success: function(data) {
                \$(\"#form\").html(data);
                 }
                 
             });
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
        return array (  162 => 60,  144 => 50,  142 => 49,  137 => 48,  130 => 46,  127 => 45,  119 => 43,  109 => 39,  103 => 35,  95 => 31,  88 => 27,  80 => 24,  73 => 22,  70 => 21,  67 => 20,  63 => 18,  60 => 17,  51 => 14,  48 => 13,  43 => 12,  41 => 11,  36 => 8,  31 => 4,  28 => 3,);
    }
}
