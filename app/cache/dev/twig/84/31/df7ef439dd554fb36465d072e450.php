<?php

/* VMBlogBundle:Default:index.html.twig */
class __TwigTemplate_8431df7ef439dd554fb36465d072e450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VMBlogBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'vmblog_body' => array($this, 'block_vmblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VMBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "


   
";
    }

    // line 10
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 11
        echo " 
   ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "titre"), "html", null, true);
        echo "<br/>
   ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "resume"), "html", null, true);
        echo "
   
 
 
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 12,  45 => 11,  42 => 10,  32 => 4,  29 => 3,);
    }
}
