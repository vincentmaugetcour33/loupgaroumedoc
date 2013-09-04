<?php

/* VMBlogBundle:helper:socialButtons.html.twig */
class __TwigTemplate_4c44f7c5ed85a27e0ade0046caeb2df0 extends Twig_Template
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
        // line 2
        echo " <form class='pull-right form-inline'>
";
        // line 3
        if ((!($this->getContext($context, "facebook") === false))) {
            echo " 
    <div class=\"form-group button facebookButton\"> 
        ";
            // line 5
            echo $this->env->getExtension('vm_social_bar')->getFacebookLikeButton($this->getContext($context, "facebook"));
            echo "
    </div>
";
        }
        // line 7
        echo " 

";
        // line 9
        if ((!($this->getContext($context, "twitter") === false))) {
            echo " 
    <div class=\"form-group button twitterButton\"> 
        ";
            // line 11
            echo $this->env->getExtension('vm_social_bar')->getTwitterButton($this->getContext($context, "twitter"));
            echo " 
    </div> 
";
        }
        // line 13
        echo " 
         </form>";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:helper:socialButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  37 => 9,  27 => 5,  22 => 3,  19 => 2,  79 => 17,  76 => 16,  69 => 18,  66 => 16,  60 => 13,  50 => 9,  45 => 8,  42 => 11,  35 => 4,  32 => 3,  78 => 27,  73 => 26,  63 => 14,  56 => 10,  52 => 14,  46 => 12,  44 => 11,  41 => 10,  33 => 7,  30 => 3,);
    }
}
