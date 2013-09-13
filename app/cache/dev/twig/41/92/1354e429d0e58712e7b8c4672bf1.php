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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photoPath"), "html", null, true);
        echo " />Bonjour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "realname"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</p>

            <p>MOT DE PASSE : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password"), "html", null, true);
        echo "</p>
        </div>
  </div>        

    <p>
       Vous pouvez désormais vous connecter en allant sur notre site :
       
       <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["url_site"]) ? $context["url_site"] : $this->getContext($context, "url_site")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["url_site"]) ? $context["url_site"] : $this->getContext($context, "url_site")), "html", null, true);
        echo "</a>
    </p>
    

    <p>
       En vous disant à bientôt.
       Cordialement,
     </p>      
      
        <address>
            ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["webmaster_nom"]) ? $context["webmaster_nom"] : $this->getContext($context, "webmaster_nom")), "html", null, true);
        echo "
            Responsable du site ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["site_nom"]) ? $context["site_nom"] : $this->getContext($context, "site_nom")), "html", null, true);
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
        return array (  94 => 5,  82 => 42,  67 => 32,  52 => 23,  20 => 1,  96 => 33,  79 => 26,  57 => 25,  54 => 21,  37 => 13,  381 => 154,  378 => 153,  373 => 14,  359 => 12,  355 => 10,  349 => 8,  346 => 7,  329 => 143,  327 => 142,  322 => 141,  312 => 136,  309 => 135,  294 => 133,  286 => 130,  282 => 129,  279 => 128,  273 => 126,  271 => 125,  268 => 124,  251 => 123,  243 => 120,  238 => 117,  236 => 116,  233 => 115,  227 => 111,  223 => 109,  207 => 98,  203 => 97,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  108 => 47,  105 => 46,  101 => 45,  95 => 42,  90 => 29,  86 => 43,  83 => 36,  81 => 35,  76 => 32,  70 => 28,  68 => 24,  61 => 23,  59 => 22,  56 => 21,  36 => 7,  33 => 6,  71 => 19,  64 => 25,  55 => 15,  48 => 19,  30 => 5,  39 => 9,  29 => 4,  26 => 5,  51 => 19,  44 => 12,  42 => 12,  35 => 5,  31 => 6,  43 => 6,  41 => 5,  25 => 3,  24 => 2,  46 => 17,  38 => 16,  32 => 4,  28 => 5,  22 => 2,  19 => 1,);
    }
}
