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
        return array (  61 => 18,  58 => 17,  49 => 20,  39 => 12,  31 => 7,  28 => 6,  24 => 4,  48 => 13,  37 => 10,  27 => 5,  22 => 2,  19 => 1,  223 => 87,  220 => 86,  214 => 18,  209 => 17,  205 => 15,  201 => 14,  196 => 13,  194 => 12,  191 => 11,  183 => 8,  181 => 7,  178 => 6,  172 => 5,  161 => 121,  150 => 102,  134 => 88,  132 => 86,  111 => 70,  99 => 61,  95 => 60,  86 => 53,  71 => 40,  67 => 39,  41 => 11,  38 => 19,  33 => 8,  23 => 1,  77 => 25,  74 => 16,  69 => 21,  66 => 32,  60 => 13,  50 => 14,  45 => 12,  42 => 11,  35 => 11,  63 => 19,  56 => 10,  52 => 15,  46 => 13,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}
