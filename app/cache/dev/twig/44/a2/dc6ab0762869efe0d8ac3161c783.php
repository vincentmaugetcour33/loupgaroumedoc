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
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["liste_extraits"]) ? $context["liste_extraits"] : $this->getContext($context, "liste_extraits")), ((isset($context["choix"]) ? $context["choix"] : $this->getContext($context, "choix")) - 1), array(), "array"), "section") . ": ") . $this->getAttribute($this->getAttribute((isset($context["liste_extraits"]) ? $context["liste_extraits"] : $this->getContext($context, "liste_extraits")), ((isset($context["choix"]) ? $context["choix"] : $this->getContext($context, "choix")) - 1), array(), "array"), "contenu")), "html", null, true);
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
        return array (  77 => 25,  61 => 18,  58 => 17,  49 => 20,  39 => 12,  31 => 7,  48 => 13,  27 => 5,  34 => 15,  26 => 12,  24 => 4,  19 => 1,  441 => 246,  421 => 245,  417 => 241,  384 => 211,  380 => 210,  376 => 209,  373 => 208,  370 => 207,  366 => 182,  363 => 181,  357 => 5,  345 => 251,  343 => 207,  332 => 201,  327 => 200,  309 => 183,  307 => 181,  263 => 142,  255 => 136,  247 => 132,  241 => 128,  239 => 127,  234 => 124,  232 => 121,  226 => 109,  218 => 104,  209 => 97,  194 => 84,  190 => 83,  186 => 82,  169 => 67,  161 => 65,  155 => 64,  152 => 63,  144 => 61,  138 => 60,  130 => 54,  124 => 51,  121 => 50,  119 => 49,  115 => 47,  102 => 37,  97 => 35,  92 => 33,  88 => 32,  82 => 29,  78 => 28,  72 => 24,  64 => 20,  54 => 12,  51 => 11,  37 => 10,  28 => 6,  22 => 2,  79 => 17,  76 => 16,  69 => 21,  66 => 32,  63 => 19,  56 => 10,  50 => 14,  45 => 12,  42 => 11,  35 => 4,  32 => 3,  75 => 27,  70 => 23,  60 => 13,  52 => 15,  46 => 12,  44 => 11,  41 => 11,  33 => 8,  30 => 3,);
    }
}
