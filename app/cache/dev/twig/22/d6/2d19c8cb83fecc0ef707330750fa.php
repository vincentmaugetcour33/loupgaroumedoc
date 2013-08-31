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
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
 
    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
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
        return array (  26 => 12,  24 => 8,  22 => 7,  19 => 2,  371 => 148,  368 => 147,  362 => 18,  357 => 17,  353 => 15,  349 => 14,  344 => 13,  342 => 12,  339 => 11,  331 => 8,  329 => 7,  326 => 6,  320 => 5,  277 => 166,  258 => 149,  256 => 147,  224 => 120,  212 => 111,  208 => 110,  201 => 105,  193 => 101,  187 => 97,  185 => 96,  180 => 93,  165 => 80,  161 => 79,  157 => 78,  147 => 70,  139 => 68,  133 => 67,  130 => 66,  122 => 64,  116 => 63,  109 => 58,  103 => 56,  101 => 53,  98 => 52,  86 => 43,  81 => 41,  76 => 39,  72 => 38,  68 => 37,  62 => 34,  58 => 32,  56 => 31,  52 => 29,  38 => 19,  35 => 11,  33 => 6,  29 => 5,  23 => 1,  83 => 39,  73 => 32,  69 => 31,  65 => 30,  61 => 29,  50 => 28,  41 => 20,  36 => 7,  34 => 15,  31 => 5,  28 => 13,);
    }
}
