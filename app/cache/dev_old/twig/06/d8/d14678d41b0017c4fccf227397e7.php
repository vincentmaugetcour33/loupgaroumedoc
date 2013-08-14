<?php

/* VMBlogBundle:Default:comlist.html.twig */
class __TwigTemplate_06d8d14678d41b0017c4fccf227397e7 extends Twig_Template
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
</pre>
<div id=\"content\">
<div class=\"articles\"><h2 > Commentaires
<div id=\"list_articles\"><ul>
 ";
        // line 9
        if ((!twig_test_empty($this->getContext($context, "entities")))) {
            // line 10
            echo " ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 11
                echo "<ul>
    <li><a href=\"#\">";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "contenu"), "html", null, true);
                echo "</a></li>
</ul>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo " ";
        } else {
            // line 16
            echo " Résultat vide
 ";
        }
        // line 18
        echo " ";
        if (($this->getContext($context, "last_page") > 1)) {
            // line 19
            echo "<div class=\"pagination_sector\">
 <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("vm_blog_com_list", array("page" => 1));
            echo "\"> &<span> prec </span> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_com_list", array("page" => $this->getContext($context, "previous_page"))), "html", null, true);
            echo "\"> &<span> prec </span> </a>
<ol>
<ol>";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "last_page")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                echo "</ol>
</ol>
<ol>
<ol>";
                // line 25
                if (($this->getContext($context, "page") == $this->getContext($context, "current_page"))) {
                    echo "</ol>
</ol>
<ol>
<ol>
    <li>";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</li>
</ol>
</ol>
<ol>
<ol>";
                } else {
                    // line 33
                    echo "</ol>
</ol>
<ol>
<ol>
    <li><a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_com_list", array("page" => $this->getContext($context, "page"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
</ol>
</ol>
<ol>
<ol>";
                }
                // line 41
                echo "</ol>
</ol>
<ol>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "</ol>
 <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_com_list", array("page" => $this->getContext($context, "next_page"))), "html", null, true);
            echo "\"> <span> suiv </span>& </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_com_list", array("page" => $this->getContext($context, "last_page"))), "html", null, true);
            echo "\"> <span> suiv </span>&</a></div>
 ";
        }
        // line 46
        echo "<div class=\"pagination_desc\"><strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "total_commentaires"), "html", null, true);
        echo "</strong> commentaires dans la page
 ";
        // line 47
        if (($this->getContext($context, "last_page") > 1)) {
            // line 48
            echo " - page <strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "current_page"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getContext($context, "last_page"), "html", null, true);
            echo "</strong> ";
        }
        echo "</div>
</div>
</div>
</div>
<pre>



";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Default:comlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 48,  139 => 47,  134 => 46,  127 => 44,  124 => 43,  116 => 41,  106 => 37,  100 => 33,  92 => 29,  85 => 25,  77 => 22,  70 => 20,  67 => 19,  64 => 18,  60 => 16,  57 => 15,  48 => 12,  45 => 11,  40 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
