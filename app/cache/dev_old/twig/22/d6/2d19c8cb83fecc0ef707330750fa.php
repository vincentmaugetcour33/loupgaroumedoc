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
        return array (  36 => 13,  27 => 9,  24 => 8,  22 => 7,  19 => 2,  293 => 144,  290 => 143,  284 => 18,  279 => 17,  275 => 15,  271 => 14,  266 => 13,  264 => 12,  261 => 11,  253 => 8,  251 => 7,  248 => 6,  242 => 5,  229 => 174,  215 => 162,  196 => 145,  194 => 143,  168 => 122,  156 => 113,  152 => 112,  146 => 108,  141 => 95,  126 => 82,  122 => 81,  118 => 80,  107 => 71,  102 => 57,  95 => 52,  92 => 51,  87 => 48,  81 => 44,  72 => 38,  68 => 37,  62 => 34,  58 => 32,  41 => 20,  38 => 19,  33 => 11,  23 => 1,  79 => 17,  76 => 16,  69 => 18,  66 => 16,  60 => 13,  50 => 9,  45 => 8,  42 => 15,  35 => 11,  63 => 14,  56 => 31,  52 => 29,  46 => 13,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}
