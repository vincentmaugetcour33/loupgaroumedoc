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
        if ((!((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")) === false))) {
            echo " 
    <div class=\"form-group button facebookButton\"> 
        ";
            // line 5
            echo $this->env->getExtension('vm_social_bar')->getFacebookLikeButton((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")));
            echo "
    </div>
";
        }
        // line 7
        echo " 

";
        // line 9
        if ((!((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")) === false))) {
            echo " 
    <div class=\"form-group button twitterButton\"> 
        ";
            // line 11
            echo $this->env->getExtension('vm_social_bar')->getTwitterButton((isset($context["twitter"]) ? $context["twitter"] : $this->getContext($context, "twitter")));
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
        return array (  48 => 13,  27 => 5,  34 => 15,  26 => 12,  24 => 8,  19 => 2,  441 => 246,  421 => 245,  417 => 241,  384 => 211,  380 => 210,  376 => 209,  373 => 208,  370 => 207,  366 => 182,  363 => 181,  357 => 5,  345 => 251,  343 => 207,  332 => 201,  327 => 200,  309 => 183,  307 => 181,  263 => 142,  255 => 136,  247 => 132,  241 => 128,  239 => 127,  234 => 124,  232 => 121,  226 => 109,  218 => 104,  209 => 97,  194 => 84,  190 => 83,  186 => 82,  169 => 67,  161 => 65,  155 => 64,  152 => 63,  144 => 61,  138 => 60,  130 => 54,  124 => 51,  121 => 50,  119 => 49,  115 => 47,  102 => 37,  97 => 35,  92 => 33,  88 => 32,  82 => 29,  78 => 28,  72 => 24,  64 => 20,  54 => 12,  51 => 11,  37 => 9,  28 => 13,  22 => 3,  79 => 17,  76 => 16,  69 => 18,  66 => 21,  63 => 14,  56 => 10,  50 => 9,  45 => 8,  42 => 11,  35 => 4,  32 => 3,  75 => 27,  70 => 23,  60 => 13,  52 => 15,  46 => 12,  44 => 11,  41 => 10,  33 => 7,  30 => 3,);
    }
}
