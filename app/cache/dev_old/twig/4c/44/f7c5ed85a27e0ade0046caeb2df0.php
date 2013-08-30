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
        return array (  48 => 13,  37 => 9,  36 => 13,  27 => 5,  24 => 8,  22 => 3,  19 => 2,  293 => 144,  290 => 143,  284 => 18,  279 => 17,  275 => 15,  271 => 14,  266 => 13,  264 => 12,  261 => 11,  253 => 8,  251 => 7,  248 => 6,  242 => 5,  229 => 174,  215 => 162,  196 => 145,  194 => 143,  168 => 122,  156 => 113,  152 => 112,  146 => 108,  141 => 95,  126 => 82,  122 => 81,  118 => 80,  107 => 71,  102 => 57,  95 => 52,  92 => 51,  87 => 48,  81 => 44,  72 => 38,  68 => 37,  62 => 34,  58 => 32,  41 => 20,  38 => 19,  33 => 7,  23 => 1,  79 => 17,  76 => 16,  69 => 18,  66 => 16,  60 => 13,  50 => 9,  45 => 8,  42 => 11,  35 => 11,  63 => 14,  56 => 31,  52 => 29,  46 => 13,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}
