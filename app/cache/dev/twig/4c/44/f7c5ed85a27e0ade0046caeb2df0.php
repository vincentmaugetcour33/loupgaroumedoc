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
        return array (  48 => 13,  27 => 5,  19 => 2,  494 => 258,  468 => 257,  464 => 252,  432 => 223,  428 => 222,  424 => 221,  420 => 220,  416 => 219,  412 => 218,  409 => 217,  406 => 216,  402 => 191,  399 => 190,  393 => 5,  381 => 263,  379 => 216,  368 => 210,  363 => 209,  345 => 192,  343 => 190,  319 => 169,  310 => 163,  296 => 154,  288 => 148,  280 => 144,  274 => 140,  272 => 139,  267 => 136,  265 => 133,  259 => 121,  251 => 116,  242 => 109,  226 => 94,  220 => 92,  218 => 91,  213 => 89,  208 => 87,  204 => 86,  187 => 71,  179 => 69,  173 => 68,  170 => 67,  162 => 65,  156 => 64,  148 => 58,  142 => 55,  139 => 54,  137 => 53,  133 => 51,  120 => 41,  115 => 39,  110 => 37,  106 => 36,  100 => 33,  96 => 32,  92 => 31,  84 => 27,  82 => 26,  78 => 24,  37 => 9,  28 => 5,  22 => 3,  79 => 17,  69 => 18,  66 => 16,  63 => 14,  56 => 10,  50 => 9,  45 => 8,  42 => 11,  35 => 4,  32 => 3,  113 => 42,  108 => 41,  103 => 38,  99 => 36,  93 => 34,  87 => 28,  85 => 31,  80 => 29,  76 => 23,  70 => 24,  67 => 22,  65 => 15,  60 => 13,  52 => 15,  46 => 12,  44 => 11,  41 => 10,  33 => 7,  30 => 3,);
    }
}
