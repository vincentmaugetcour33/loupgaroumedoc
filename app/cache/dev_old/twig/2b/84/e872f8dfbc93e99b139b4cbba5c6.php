<?php

/* VMUserBundle:Profile:profileshow.html.twig */
class __TwigTemplate_2b84e872f8dfbc93e99b139b4cbba5c6 extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
          <table><tr>
          <td><div style=\"float:left;\" class='thumbnail'>
          <img align=\"center\" width=30 src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "photoPath")), "html", null, true);
        echo "\" />
        </div>
          INFORMATIONS PROFIL ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "
          </td></tr></table>
          </div>
      
          <div class=\"panel-body\">
              
              <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#infos\" data-toggle=\"tab\">Mes caractéristiques</a></li>
               <li><a href=\"#comment\" data-toggle=\"tab\">Mes commentaires</a></li>
             </ul>
              
              <div class=\"tab-content\">
                  <div class=\"tab-pane active\" id=\"infos\">
          <ul>
  ";
        // line 27
        echo "  
  <li><b>Nom/prénom  :</b>";
        // line 28
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "realname")) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "realname"), "html", null, true);
            echo " ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li>   <b>  Sexe :</b> ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "sexe")) > 0)) {
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "sexe"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li> 
 
  <li> <b> Age  :</b> ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "age") > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "age"), "html", null, true);
            echo "     ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> <b>Ville :   </b> ";
        // line 34
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "ville")) > 0)) {
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "ville"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li><b> Email :</b>";
        // line 36
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "email")) > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "email"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
  </ul>
                    </div>
        
              
              <div class=\"tab-pane\" id=\"comment\">
                ";
        // line 42
        if (twig_test_empty($this->getContext($context, "commentaires"))) {
            echo " Vous n'avez saisi aucun commentaire ";
        }
        echo "  
                ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "commentaires"));
        foreach ($context['_seq'] as $context["key"] => $context["com"]) {
            // line 44
            echo "                      <p><b>Commentaire n°";
            echo twig_escape_filter($this->env, ($this->getContext($context, "key") + 1), "html", null, true);
            echo " :</b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "com"), "contenu"), "html", null, true);
            echo "</p>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                 
                      
              </div>
          </div>
              </div>
        </div>
           <a onclick=\"javascript:history.back();\" href=\"#\">Retour</a>   

";
    }

    public function getTemplateName()
    {
        return "VMUserBundle:Profile:profileshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 46,  132 => 44,  128 => 43,  122 => 42,  107 => 36,  96 => 34,  85 => 32,  74 => 30,  63 => 28,  60 => 27,  43 => 12,  38 => 10,  31 => 5,  28 => 4,);
    }
}
