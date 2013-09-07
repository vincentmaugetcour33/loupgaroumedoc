<?php

/* VMBlogBundle:Image:image_list.html.twig */
class __TwigTemplate_ab9bff7e0ca8542cc254c9b10f3f90f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VMBlogBundle::base.html.twig");

        $this->blocks = array(
            'vmblog_body' => array($this, 'block_vmblog_body'),
            'vmblog_stylesheet' => array($this, 'block_vmblog_stylesheet'),
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
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 4
        echo "
 ";
        // line 5
        if ((!twig_test_empty($this->getContext($context, "images")))) {
            // line 6
            echo "    
    ";
            // line 7
            $this->displayBlock('vmblog_stylesheet', $context, $blocks);
            // line 16
            echo " ";
            // line 22
            echo "       ";
            // line 26
            echo "     ";
            // line 29
            echo "

<ul id=\"galerie\"> 
    ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
            foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                // line 33
                echo "    <li>
        <a href=\"#\">
            <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmblog/images/" . $this->getAttribute($this->getContext($context, "image"), "url"))), "html", null, true);
                echo "\" alt=\"\" /> 
            <strong>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "description"), "html", null, true);
                echo "</strong>
        </a> 
    </li> 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "</ul>

";
        } else {
            // line 43
            echo "
Il n'y a aucune image dans la galerie

";
        }
        // line 47
        echo "



<!--</script>-->


";
    }

    // line 7
    public function block_vmblog_stylesheet($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("vmblog_stylesheet", $context, $blocks);
        echo "
    ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/css/image.css"), "html", null, true);
        echo "\" type=\"text/css\" /> 
     
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Image:image_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 13,  100 => 8,  97 => 7,  86 => 47,  80 => 43,  75 => 40,  65 => 36,  61 => 35,  57 => 33,  53 => 32,  48 => 29,  46 => 26,  44 => 22,  42 => 16,  40 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
