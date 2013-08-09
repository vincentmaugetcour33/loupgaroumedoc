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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo " <h1>Le monstre du Médoc</h1>
  ";
        // line 11
        echo "  ";
        $this->displayBlock('vmblog_body', $context, $blocks);
        // line 13
        echo " 
";
    }

    // line 11
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 12
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
        return array (  57 => 12,  54 => 11,  49 => 13,  46 => 11,  43 => 9,  40 => 8,  33 => 5,  30 => 4,  31 => 4,  28 => 3,);
    }
}
