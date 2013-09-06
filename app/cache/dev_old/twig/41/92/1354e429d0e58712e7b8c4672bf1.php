<?php

/* VMUserBundle:Profile:email_ajout.txt.twig */
class __TwigTemplate_41921354e429d0e58712e7b8c4672bf1 extends Twig_Template
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://monstredumedoc.localhost/app_dev.php/web/bundles/vmblog/css/bootstrap.min.css\">
      
    </head>
    
<body>
    
    <p>
      <img src= ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "photoPath"), "html", null, true);
        echo " />Bonjour ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "realname"), "html", null, true);
        echo ",
      Heureux de vous avoir comme membre sur le site Loup-Garou, le monstre du Médoc.
    </p>

    <div class=\"panel panel-info\"> 
        <div class=\"panel-heading\">
             Vos identifiants de connexion :
        </div>

        <div class=\"panel-body\">        
            <p>LOGIN : ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</p>

            <p>MOT DE PASSE : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "password"), "html", null, true);
        echo "</p>
        </div>
  </div>        

    <p>
       Vous pouvez désormais vous connecter en allant sur notre site :
       
       <a href=\"";
        // line 32
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
        // line 42
        echo twig_escape_filter($this->env, $this->getContext($context, "webmaster_nom"), "html", null, true);
        echo "
            Responsable du site ";
        // line 43
        echo twig_escape_filter($this->env, $this->getContext($context, "site_nom"), "html", null, true);
        echo "
        </address>

</body></html>    ";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Patrice Mauget - Loup-garou, le monstre du Médoc";
    }

    public function getTemplateName()
    {
        return "VMUserBundle:Profile:email_ajout.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 5,  86 => 43,  82 => 42,  67 => 32,  57 => 25,  52 => 23,  37 => 13,  26 => 5,  20 => 1,);
    }
}
