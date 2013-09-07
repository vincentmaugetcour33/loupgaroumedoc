<?php

/* VMUserBundle:Security:login.html.twig */
class __TwigTemplate_22d62d19c8cb83fecc0ef707330750fa extends Twig_Template
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
        echo " 
";
        // line 7
        echo "  ";
        // line 8
        echo "  ";
        // line 12
        echo "  ";
        // line 13
        echo "  <form class=\"form-inline\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
 
    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
   
    <input type=\"submit\" value=\"Connexion\" />
  </form>
 ";
    }

    public function getTemplateName()
    {
        return "VMUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 15,  26 => 12,  24 => 8,  19 => 2,  418 => 222,  398 => 221,  394 => 218,  362 => 189,  358 => 188,  354 => 187,  351 => 186,  348 => 185,  344 => 160,  341 => 159,  335 => 5,  323 => 227,  321 => 185,  310 => 178,  292 => 161,  290 => 159,  246 => 120,  234 => 112,  230 => 107,  223 => 102,  215 => 98,  209 => 94,  207 => 93,  202 => 90,  187 => 77,  183 => 76,  179 => 75,  169 => 67,  161 => 65,  155 => 64,  152 => 63,  144 => 61,  138 => 60,  130 => 54,  124 => 51,  119 => 49,  115 => 47,  102 => 37,  97 => 35,  92 => 33,  88 => 32,  82 => 29,  78 => 28,  72 => 24,  70 => 23,  64 => 20,  54 => 12,  51 => 11,  33 => 7,  28 => 13,  22 => 7,  79 => 17,  76 => 16,  69 => 18,  66 => 21,  60 => 13,  56 => 10,  50 => 9,  45 => 8,  42 => 7,  121 => 50,  118 => 32,  107 => 23,  103 => 21,  99 => 19,  80 => 17,  74 => 15,  68 => 14,  63 => 14,  46 => 12,  40 => 8,  37 => 9,  35 => 4,  32 => 3,  29 => 3,);
    }
}
