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
        return array (  48 => 13,  37 => 9,  27 => 5,  34 => 15,  28 => 13,  26 => 12,  24 => 8,  22 => 3,  19 => 2,  374 => 149,  371 => 148,  365 => 18,  360 => 17,  356 => 15,  352 => 14,  347 => 13,  345 => 12,  342 => 11,  334 => 8,  332 => 7,  329 => 6,  323 => 5,  279 => 167,  260 => 150,  258 => 148,  226 => 121,  214 => 112,  210 => 111,  203 => 106,  195 => 102,  189 => 98,  187 => 97,  182 => 94,  167 => 81,  163 => 80,  159 => 79,  149 => 71,  141 => 69,  135 => 68,  132 => 67,  124 => 65,  118 => 64,  111 => 59,  109 => 58,  103 => 56,  101 => 53,  98 => 52,  86 => 43,  81 => 41,  72 => 38,  68 => 37,  58 => 32,  52 => 29,  41 => 20,  38 => 19,  33 => 7,  23 => 1,  79 => 17,  76 => 39,  69 => 18,  66 => 16,  63 => 14,  60 => 13,  56 => 10,  50 => 9,  42 => 11,  35 => 11,  62 => 34,  55 => 31,  51 => 14,  45 => 8,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}
