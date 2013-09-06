<?php

/* VMUserBundle:Profile:email_modif.txt.twig */
class __TwigTemplate_ed7d65961a32bb522270b343dfa930c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/css/bootstrap.min.css"), "html", null, true);
        echo "\">
      
    </head>
      
    
    <body>
    
    <p>
        Bonjour ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "realname"), "html", null, true);
        echo ",
        Vous avez modifié des paramètres de vote compte sur le site Loup-Garou, le monstre du Médoc.
    </p>

 <div class=\"panel panel-info\"> 
        <div class=\"panel-heading\">
             Vos identifiants de connexion :
        </div>

        <div class=\"panel-body\">        
            <p>LOGIN : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</p>

            <p>MOT DE PASSE : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "password"), "html", null, true);
        echo "</p>
        </div>
  </div>        

    <p>
       Vous pouvez désormais vous connecter en allant sur notre site :
       
       <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getContext($context, "url_site"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "url_site"), "html", null, true);
        echo "</a>
    </p>
    

    <p>
       En vous disant à bientôt.
       Cordialement,
     </p>      
      
        <address>
            ";
        // line 43
        echo twig_escape_filter($this->env, $this->getContext($context, "webmaster_nom"), "html", null, true);
        echo "
            Responsable du site ";
        // line 44
        echo twig_escape_filter($this->env, $this->getContext($context, "site_nom"), "html", null, true);
        echo "
        </address>
   
     
</body></html>     ";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Patrice Mauget - Loup-garou, le monstre du Médoc";
    }

    public function getTemplateName()
    {
        return "VMUserBundle:Profile:email_modif.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 5,  88 => 44,  84 => 43,  69 => 33,  59 => 26,  54 => 24,  41 => 14,  30 => 6,  26 => 5,  20 => 1,);
    }
}
