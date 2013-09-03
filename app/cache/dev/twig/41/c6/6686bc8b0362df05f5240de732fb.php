<?php

/* VMUserBundle:Profile:email.txt.twig */
class __TwigTemplate_41c66686bc8b0362df05f5240de732fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Bonjour ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "realname"), "html", null, true);
        echo ",
 
Heureux de vous avoir comme membre sur le site Loup-Garou, le monstre du Médoc.

Voici vos identifiants de connexion :

LOGIN : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "

MOT DE PASSE : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "password"), "html", null, true);
        echo "

En vous disant à bientôt,

Cordialement,

";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "webmaster_nom"), "html", null, true);
        echo "
Responsable du site ";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "site_nom"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "VMUserBundle:Profile:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 16,  43 => 15,  34 => 9,  29 => 7,  19 => 1,);
    }
}
