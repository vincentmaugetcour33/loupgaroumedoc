<?php

/* VMBlogBundle:Commentaire:comshow.html.twig */
class __TwigTemplate_58f27eac13bf3e162691ff8551ebd791 extends Twig_Template
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
        echo "
        contenu : 
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "contenu"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Commentaire:comshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
