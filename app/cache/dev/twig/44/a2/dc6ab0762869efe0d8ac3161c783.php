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
        echo "<marquee direction=\"up\" scrollamount=\"2\" style=\"text-indent:40px;text-align: justify;height:110px;\">
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
        return array (  77 => 25,  69 => 21,  63 => 19,  61 => 18,  50 => 14,  45 => 12,  66 => 32,  58 => 17,  49 => 20,  39 => 12,  31 => 7,  28 => 6,  24 => 4,  48 => 13,  42 => 11,  37 => 10,  27 => 5,  22 => 2,  19 => 1,  75 => 27,  70 => 26,  60 => 19,  52 => 15,  46 => 12,  44 => 11,  41 => 11,  33 => 8,  30 => 3,);
    }
}
