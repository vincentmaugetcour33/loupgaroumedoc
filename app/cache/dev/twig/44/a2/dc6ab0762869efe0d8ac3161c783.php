<?php

/* VMBlogBundle:Extrait:index.html.twig */
class __TwigTemplate_44a2dc6ab0762869efe0d8ac3161c783 extends Twig_Template
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
        echo "<marquee direction=\"up\" scrollamount=\"4\" style=\"height:110px;\">
       ";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getContext($context, "liste_extraits"), ($this->getContext($context, "choix") - 1), array(), "array"), "section") . ": ") . $this->getAttribute($this->getAttribute($this->getContext($context, "liste_extraits"), ($this->getContext($context, "choix") - 1), array(), "array"), "contenu")), "html", null, true);
        echo "
</marquee>
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Extrait:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  61 => 18,  52 => 15,  41 => 11,  58 => 17,  39 => 12,  31 => 7,  28 => 6,  24 => 4,  48 => 13,  37 => 10,  33 => 8,  27 => 5,  22 => 2,  19 => 1,  79 => 17,  76 => 16,  69 => 21,  63 => 19,  60 => 13,  56 => 10,  50 => 14,  45 => 12,  42 => 11,  35 => 4,  66 => 32,  59 => 19,  55 => 18,  49 => 20,  43 => 11,  40 => 10,  32 => 3,  29 => 3,);
    }
}
