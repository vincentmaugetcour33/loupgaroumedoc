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
        echo " <h1>Blog - Loup-Garou, le monstre du Médoc</h1>
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
        return array (  77 => 17,  74 => 16,  69 => 18,  66 => 16,  60 => 13,  50 => 9,  45 => 8,  42 => 7,  35 => 4,  63 => 14,  56 => 10,  52 => 15,  46 => 13,  43 => 11,  40 => 10,  32 => 3,  29 => 3,);
    }
}
