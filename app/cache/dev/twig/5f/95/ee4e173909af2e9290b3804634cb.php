<?php

/* VMBlogBundle:Commentaire:profilecommentaire.html.twig */
class __TwigTemplate_5f95ee4e173909af2e9290b3804634cb extends Twig_Template
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

    // line 5
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 6
        echo "  <ul>
  <li>Identifiant : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "username"), "html", null, true);
        echo " </li>
  
  ";
        // line 10
        echo " 
  <li>     Sexe : ";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "sexe")) > 0)) {
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "sexe"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li> 
 
  <li>  Age  : ";
        // line 13
        if (($this->getAttribute($this->getContext($context, "membre"), "age") > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "age"), "html", null, true);
            echo "     ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> Ville :    ";
        // line 15
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "ville")) > 0)) {
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "ville"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> Email :";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "email")) > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "email"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
  </ul>
  <hr/> <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("tri" => "asc"));
        echo "\">Retour</a>   

";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Commentaire:profilecommentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  75 => 17,  64 => 15,  53 => 13,  42 => 11,  39 => 10,  34 => 7,  31 => 6,  28 => 5,);
    }
}
