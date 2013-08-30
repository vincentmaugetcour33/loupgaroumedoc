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
        return array (  77 => 25,  61 => 18,  49 => 20,  39 => 12,  31 => 7,  28 => 6,  48 => 13,  37 => 10,  36 => 13,  27 => 5,  24 => 4,  22 => 2,  19 => 1,  293 => 144,  290 => 143,  284 => 18,  279 => 17,  275 => 15,  271 => 14,  266 => 13,  264 => 12,  261 => 11,  253 => 8,  251 => 7,  248 => 6,  242 => 5,  229 => 174,  215 => 162,  196 => 145,  194 => 143,  168 => 122,  156 => 113,  152 => 112,  146 => 108,  141 => 95,  126 => 82,  122 => 81,  118 => 80,  107 => 71,  102 => 57,  95 => 52,  92 => 51,  87 => 48,  81 => 44,  72 => 38,  68 => 37,  62 => 34,  58 => 17,  41 => 11,  38 => 19,  33 => 8,  23 => 1,  79 => 17,  76 => 16,  69 => 21,  66 => 32,  60 => 13,  50 => 14,  45 => 12,  42 => 11,  35 => 11,  63 => 19,  56 => 31,  52 => 15,  46 => 13,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}
