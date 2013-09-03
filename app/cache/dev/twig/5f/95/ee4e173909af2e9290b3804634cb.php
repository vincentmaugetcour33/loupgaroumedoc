<?php

/* VMBlogBundle:Commentaire:profilecommentaire.html.twig */
class __TwigTemplate_5f95ee4e173909af2e9290b3804634cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
          <table><tr>
          <td><div style=\"float:left;\" class='thumbnail'>
          <img align=\"center\" width=\"30px\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmuser/photo/" . $this->getAttribute($this->getContext($context, "membre"), "photo"))), "html", null, true);
        echo "\" />
        </div>
          INFORMATIONS MEMBRE ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "username"), "html", null, true);
        echo "
          </td></tr></table>
          </div>
      
          <div class=\"panel-body\">
          <ul>
  ";
        // line 19
        echo "  
  ";
        // line 21
        echo " 
  <li>     Sexe : ";
        // line 22
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "sexe")) > 0)) {
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "sexe"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li> 
 
  <li>  Age  : ";
        // line 24
        if (($this->getAttribute($this->getContext($context, "membre"), "age") > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "age"), "html", null, true);
            echo "     ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> Ville :    ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "ville")) > 0)) {
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "membre"), "ville"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
 ";
        // line 29
        echo "</ul>
                    </div>
</div>
          
      <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => $this->getContext($context, "current_page"), "tri" => "desc")), "html", null, true);
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
        return array (  96 => 33,  90 => 29,  79 => 26,  68 => 24,  57 => 22,  54 => 21,  51 => 19,  42 => 12,  37 => 10,  31 => 6,  28 => 5,);
    }
}
