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
            echo "
      ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
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
        }
        // line 13
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
        return array (  60 => 13,  55 => 10,  47 => 8,  43 => 7,  34 => 4,  24 => 3,  21 => 2,  19 => 1,  470 => 252,  444 => 251,  440 => 246,  408 => 217,  404 => 216,  400 => 215,  396 => 214,  392 => 213,  388 => 212,  378 => 185,  375 => 184,  369 => 5,  357 => 257,  355 => 210,  339 => 203,  321 => 186,  319 => 184,  275 => 145,  267 => 139,  259 => 135,  253 => 131,  246 => 127,  244 => 124,  230 => 107,  221 => 100,  206 => 87,  202 => 86,  198 => 85,  181 => 70,  173 => 68,  167 => 67,  156 => 64,  150 => 63,  142 => 57,  136 => 54,  133 => 53,  131 => 52,  127 => 50,  109 => 38,  104 => 36,  100 => 35,  94 => 32,  84 => 27,  82 => 26,  78 => 24,  65 => 15,  63 => 14,  37 => 12,  28 => 5,  22 => 1,  385 => 211,  382 => 210,  377 => 14,  363 => 12,  359 => 10,  353 => 8,  350 => 7,  344 => 204,  342 => 148,  329 => 143,  327 => 142,  322 => 141,  312 => 136,  309 => 135,  294 => 133,  286 => 130,  282 => 129,  279 => 128,  273 => 126,  271 => 125,  268 => 124,  251 => 130,  243 => 120,  238 => 112,  236 => 116,  233 => 115,  227 => 111,  223 => 109,  207 => 98,  203 => 97,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 66,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 40,  108 => 47,  105 => 46,  101 => 45,  95 => 42,  90 => 31,  86 => 38,  83 => 36,  81 => 35,  76 => 23,  70 => 28,  68 => 27,  64 => 25,  61 => 23,  59 => 22,  56 => 21,  48 => 19,  42 => 18,  38 => 6,  36 => 7,  33 => 7,  30 => 5,);
    }
}
