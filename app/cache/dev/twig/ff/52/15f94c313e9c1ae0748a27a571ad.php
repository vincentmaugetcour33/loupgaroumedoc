<?php

/* VMBlogBundle::base.html.twig */
class __TwigTemplate_ff5215f94c313e9c1ae0748a27a571ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'vmblog_stylesheet' => array($this, 'block_vmblog_stylesheet'),
            'body' => array($this, 'block_body'),
            'vmblog_body' => array($this, 'block_vmblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo " 
    ";
        // line 9
        $this->displayBlock('vmblog_stylesheet', $context, $blocks);
    }

    public function block_vmblog_stylesheet($context, array $blocks = array())
    {
        // line 10
        echo "    ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo " <!--<h1>Blog - Loup-Garou, le monstre du Médoc</h1>-->
  ";
        // line 16
        echo "  ";
        $this->displayBlock('vmblog_body', $context, $blocks);
        // line 18
        echo "  

  
";
    }

    // line 16
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 17
        echo "  ";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  69 => 18,  66 => 16,  63 => 14,  60 => 13,  50 => 9,  45 => 8,  35 => 4,  32 => 3,  352 => 151,  349 => 150,  344 => 14,  330 => 12,  326 => 10,  320 => 8,  317 => 7,  300 => 140,  298 => 139,  293 => 138,  283 => 133,  280 => 132,  273 => 130,  265 => 127,  262 => 126,  256 => 124,  254 => 123,  251 => 122,  247 => 121,  239 => 118,  234 => 115,  232 => 114,  229 => 113,  223 => 109,  219 => 107,  202 => 96,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  108 => 47,  105 => 46,  101 => 45,  95 => 42,  90 => 40,  86 => 38,  83 => 36,  81 => 35,  76 => 16,  70 => 28,  68 => 27,  64 => 25,  61 => 23,  59 => 22,  56 => 10,  48 => 19,  42 => 7,  38 => 16,  36 => 7,  33 => 6,  30 => 5,);
    }
}
