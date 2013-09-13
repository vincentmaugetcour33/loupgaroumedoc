<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_d6aa56396e41a142277206ee54efee4a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Erreur site Loup-Garou, le monstre du Médoc</title>
    </head>
    <body>
        <h1>Bonjour ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo ",</h1>
        <h2>Le serveur a rencontré l'erreur suivante : ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Si vous êtes véritablement bloqué, contactez-moi à cette adresse [";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["webmaster_mail"]) ? $context["webmaster_mail"] : $this->getContext($context, "webmaster_mail")), "html", null, true);
        echo "] en formulant 
            l'opération/actions que vous avez faite qui ont conduit à ce problème.
            Je rectifierai cela le plus tôt possible.
            
            Décolé pour ce dysfonctionnement.
            ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["webmaster_nom"]) ? $context["webmaster_nom"] : $this->getContext($context, "webmaster_nom")), "html", null, true);
        echo "
        </div>
    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  38 => 12,  32 => 9,  28 => 8,  22 => 2,  19 => 1,);
    }
}
