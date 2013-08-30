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
        return array (  48 => 13,  37 => 9,  27 => 5,  22 => 3,  19 => 2,  295 => 144,  292 => 143,  286 => 18,  281 => 17,  277 => 15,  273 => 14,  268 => 13,  266 => 12,  263 => 11,  255 => 8,  253 => 7,  250 => 6,  244 => 5,  231 => 174,  217 => 162,  198 => 145,  196 => 143,  170 => 122,  158 => 113,  154 => 112,  148 => 108,  143 => 95,  128 => 82,  124 => 81,  120 => 80,  109 => 71,  104 => 57,  97 => 52,  94 => 51,  84 => 44,  72 => 38,  68 => 37,  62 => 34,  58 => 32,  41 => 20,  38 => 19,  33 => 7,  23 => 1,  79 => 17,  76 => 39,  69 => 18,  66 => 16,  60 => 13,  50 => 9,  45 => 8,  42 => 11,  35 => 11,  63 => 14,  56 => 31,  52 => 29,  46 => 13,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}
