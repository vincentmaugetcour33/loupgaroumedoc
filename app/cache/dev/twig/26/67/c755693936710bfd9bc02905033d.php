<?php

/* VMBlogBundle:Commentaire:formulaire.html.twig */
class __TwigTemplate_2667c755693936710bfd9bc02905033d extends Twig_Template
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
        // line 1
        if (array_key_exists("form", $context)) {
            // line 2
            echo "
   <form class=\"form-inline\" method=\"post\" action=\"";
            // line 3
            if (array_key_exists("editer", $context)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_edit", array("id" => (isset($context["id_commentaire"]) ? $context["id_commentaire"] : $this->getContext($context, "id_commentaire")))), "html", null, true);
            } else {
                echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_ajout");
            }
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">
      ";
            // line 4
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
       ";
            // line 6
            echo "      <div class=\"form-group\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'widget', array("attr" => array("class" => "tinymce form-control input-sm col-sm-9", "data-theme" => "bbcode", "placeholder" => "Saisissez votre commentaire")));
            echo "</div>
      <div class=\"form-group\">";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "</div>
      <input type=\"submit\" value=\"";
            // line 8
            if (array_key_exists("editer", $context)) {
                echo "Modifier ce commentaire";
            } else {
                echo "Ajouter";
            }
            echo "\" class=\"btn btn-default\" />
    ";
            // line 10
            echo "  </form>
 ";
            // line 11
            echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit(array("plugins" => "charmap"));
            // line 12
            echo "
";
        }
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Commentaire:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  58 => 11,  55 => 10,  47 => 8,  43 => 7,  34 => 4,  24 => 3,  21 => 2,  19 => 1,  352 => 151,  349 => 150,  344 => 14,  330 => 12,  326 => 10,  320 => 8,  317 => 7,  300 => 140,  298 => 139,  293 => 138,  283 => 133,  280 => 132,  273 => 130,  265 => 127,  262 => 126,  256 => 124,  254 => 123,  251 => 122,  247 => 121,  239 => 118,  234 => 115,  232 => 114,  229 => 113,  223 => 109,  219 => 107,  202 => 96,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  108 => 47,  105 => 46,  101 => 45,  95 => 42,  90 => 40,  86 => 38,  83 => 36,  81 => 35,  76 => 32,  70 => 28,  68 => 27,  64 => 14,  61 => 23,  59 => 22,  56 => 21,  48 => 19,  42 => 18,  38 => 6,  36 => 7,  33 => 6,  30 => 5,);
    }
}
