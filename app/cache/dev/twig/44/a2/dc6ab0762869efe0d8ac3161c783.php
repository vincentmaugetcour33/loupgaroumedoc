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
        echo "<MARQUEE DIRECTION=\"up\" SCROLLAMOUNT=\"2\">
";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getContext($context, "liste_extraits"), ($this->getContext($context, "choix") - 1), array(), "array"), "section") . ": ") . $this->getAttribute($this->getAttribute($this->getContext($context, "liste_extraits"), ($this->getContext($context, "choix") - 1), array(), "array"), "contenu")), "html", null, true);
        echo "
 </MARQUEE>
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
        return array (  22 => 2,  19 => 1,  194 => 61,  191 => 60,  185 => 24,  180 => 23,  176 => 21,  172 => 20,  167 => 19,  165 => 18,  162 => 17,  158 => 16,  149 => 10,  144 => 9,  139 => 8,  137 => 7,  134 => 6,  128 => 5,  110 => 76,  94 => 62,  92 => 60,  87 => 57,  83 => 56,  71 => 46,  67 => 45,  63 => 44,  52 => 35,  41 => 26,  38 => 25,  35 => 17,  33 => 6,  29 => 5,  23 => 1,);
    }
}
