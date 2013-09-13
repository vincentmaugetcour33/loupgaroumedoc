<?php

/* VMBlogBundle:Commentaire:profilecommentaire.html.twig */
class __TwigTemplate_5f95ee4e173909af2e9290b3804634cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
          <table><tr>
          <td><div style=\"float:left;\" class='thumbnail'>
          <img align=\"center\" width=\"30px\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "photoPath")), "html", null, true);
        echo "\" />
        </div>
          INFORMATIONS MEMBRE ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "username"), "html", null, true);
        echo "
          </td></tr></table>
          </div>
      
          <div class=\"panel-body\">
          <ul>
  ";
        // line 19
        echo "  
  ";
        // line 21
        echo " 
  <li>     Sexe : ";
        // line 22
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "sexe")) > 0)) {
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "sexe"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li> 
 
  <li>  Age  : ";
        // line 24
        if (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "age") > 0)) {
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "age"), "html", null, true);
            echo "     ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
  <li> Ville :    ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "ville")) > 0)) {
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "ville"), "html", null, true);
            echo "    ";
        } else {
            echo " non renseigné";
        }
        echo "</li>
 
 ";
        // line 29
        echo "</ul>
                    </div>
</div>
          
      <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list", array("page" => (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "tri" => "desc")), "html", null, true);
        echo "\">Retour</a> 

";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Commentaire:profilecommentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  79 => 26,  57 => 22,  54 => 21,  37 => 10,  381 => 154,  378 => 153,  373 => 14,  359 => 12,  355 => 10,  349 => 8,  346 => 7,  329 => 143,  327 => 142,  322 => 141,  312 => 136,  309 => 135,  294 => 133,  286 => 130,  282 => 129,  279 => 128,  273 => 126,  271 => 125,  268 => 124,  251 => 123,  243 => 120,  238 => 117,  236 => 116,  233 => 115,  227 => 111,  223 => 109,  207 => 98,  203 => 97,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  108 => 47,  105 => 46,  101 => 45,  95 => 42,  90 => 29,  86 => 38,  83 => 36,  81 => 35,  76 => 32,  70 => 28,  68 => 24,  61 => 23,  59 => 22,  56 => 21,  36 => 7,  33 => 6,  71 => 19,  64 => 25,  55 => 15,  48 => 19,  30 => 5,  39 => 9,  29 => 4,  26 => 6,  51 => 19,  44 => 12,  42 => 12,  35 => 5,  31 => 6,  43 => 6,  41 => 5,  25 => 3,  24 => 2,  46 => 17,  38 => 16,  32 => 4,  28 => 5,  22 => 2,  19 => 1,);
    }
}
