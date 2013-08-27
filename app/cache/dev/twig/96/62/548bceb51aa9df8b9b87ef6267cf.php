<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9662548bceb51aa9df8b9b87ef6267cf extends Twig_Template
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
        echo "
<div class=\"fos_user_user_show\">
     <ul>
  <li>Identifiant : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo " </li>
  
  ";
        // line 12
        echo " 
  <li>     Sexe : ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "sexe")) > 0)) {
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "sexe"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li> 
 
  <li>  Age  : ";
        // line 15
        if (($this->getAttribute($this->getContext($context, "user"), "age") > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "age"), "html", null, true);
            echo "     ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> Ville :    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "ville")) > 0)) {
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "ville"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> Email :";
        // line 19
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email")) > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
  </ul>
  <hr/> <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("vm_blog_homepage");
        echo "\">Retour</a>   
    ";
        // line 24
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  88 => 21,  77 => 19,  66 => 17,  55 => 15,  44 => 13,  41 => 12,  36 => 9,  31 => 6,  28 => 5,);
    }
}
