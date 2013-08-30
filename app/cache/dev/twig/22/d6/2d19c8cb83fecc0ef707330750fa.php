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
        if ($this->getContext($context, "error")) {
            // line 9
            echo "    <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
  ";
        }
        // line 11
        echo " 
  ";
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
        return array (  42 => 15,  36 => 13,  27 => 9,  24 => 8,  22 => 7,  19 => 2,  314 => 146,  311 => 145,  305 => 18,  300 => 17,  296 => 15,  292 => 14,  287 => 13,  285 => 12,  282 => 11,  274 => 8,  272 => 7,  269 => 6,  263 => 5,  219 => 164,  200 => 147,  198 => 145,  171 => 123,  159 => 114,  155 => 113,  149 => 109,  144 => 96,  129 => 83,  125 => 82,  121 => 81,  110 => 72,  105 => 58,  98 => 53,  95 => 52,  83 => 43,  76 => 39,  72 => 38,  68 => 37,  62 => 34,  58 => 32,  56 => 31,  52 => 29,  41 => 20,  38 => 19,  35 => 11,  33 => 11,  29 => 5,  23 => 1,);
    }
}
