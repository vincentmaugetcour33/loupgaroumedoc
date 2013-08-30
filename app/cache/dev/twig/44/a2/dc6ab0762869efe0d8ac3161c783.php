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
        return array (  77 => 25,  61 => 18,  49 => 20,  39 => 12,  31 => 7,  28 => 6,  24 => 4,  48 => 13,  37 => 10,  27 => 5,  22 => 2,  19 => 1,  295 => 144,  292 => 143,  286 => 18,  281 => 17,  277 => 15,  273 => 14,  268 => 13,  266 => 12,  263 => 11,  255 => 8,  253 => 7,  250 => 6,  244 => 5,  231 => 174,  217 => 162,  198 => 145,  196 => 143,  170 => 122,  158 => 113,  154 => 112,  148 => 108,  143 => 95,  128 => 82,  124 => 81,  120 => 80,  109 => 71,  104 => 57,  97 => 52,  94 => 51,  84 => 44,  72 => 38,  68 => 37,  62 => 34,  58 => 17,  41 => 11,  38 => 19,  33 => 8,  23 => 1,  79 => 17,  76 => 39,  69 => 21,  66 => 32,  60 => 13,  50 => 14,  45 => 12,  42 => 11,  35 => 11,  63 => 19,  56 => 31,  52 => 15,  46 => 13,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}
