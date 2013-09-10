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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_edit", array("id" => $this->getContext($context, "id_commentaire"))), "html", null, true);
            } else {
                echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_ajout");
            }
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
            echo ">
      ";
            // line 4
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
       ";
            // line 6
            echo "      <div class=\"form-group\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'widget', array("attr" => array("class" => "form-control input-sm col-sm-9", "placeholder" => "Saisissez votre commentaire")));
            echo "</div>
      <div class=\"form-group\">";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
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
            echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
            echo "
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
        return array (  58 => 11,  34 => 4,  352 => 151,  349 => 150,  344 => 14,  330 => 12,  326 => 10,  320 => 8,  317 => 7,  300 => 140,  293 => 138,  280 => 132,  265 => 127,  262 => 126,  256 => 124,  251 => 122,  223 => 109,  202 => 96,  191 => 89,  188 => 88,  172 => 77,  160 => 72,  148 => 68,  146 => 67,  114 => 50,  90 => 40,  81 => 35,  441 => 246,  421 => 245,  417 => 241,  380 => 210,  376 => 209,  373 => 208,  370 => 207,  366 => 182,  363 => 181,  357 => 5,  345 => 251,  343 => 207,  332 => 201,  327 => 200,  307 => 181,  263 => 142,  255 => 136,  239 => 118,  234 => 115,  232 => 114,  226 => 109,  218 => 104,  194 => 90,  190 => 83,  186 => 82,  161 => 65,  155 => 64,  152 => 63,  124 => 55,  97 => 35,  70 => 28,  76 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 211,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 183,  305 => 95,  298 => 139,  294 => 90,  285 => 89,  283 => 133,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 121,  241 => 128,  229 => 113,  220 => 70,  214 => 69,  177 => 80,  169 => 76,  140 => 55,  132 => 61,  128 => 49,  107 => 36,  61 => 23,  273 => 130,  269 => 94,  254 => 123,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 49,  102 => 37,  71 => 19,  67 => 15,  63 => 13,  59 => 22,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 27,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 28,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 75,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 60,  136 => 56,  121 => 50,  117 => 44,  105 => 46,  91 => 27,  62 => 23,  49 => 19,  24 => 3,  25 => 3,  19 => 1,  79 => 17,  72 => 24,  69 => 18,  47 => 8,  40 => 8,  37 => 9,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 65,  131 => 52,  123 => 47,  120 => 53,  115 => 47,  111 => 37,  108 => 47,  101 => 45,  98 => 31,  96 => 31,  83 => 36,  74 => 14,  66 => 21,  55 => 10,  52 => 21,  50 => 9,  43 => 7,  41 => 7,  35 => 4,  32 => 3,  29 => 3,  209 => 97,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 74,  162 => 57,  154 => 70,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 42,  92 => 33,  86 => 38,  82 => 29,  80 => 19,  73 => 19,  64 => 25,  60 => 13,  57 => 11,  54 => 12,  51 => 11,  48 => 19,  45 => 8,  42 => 18,  39 => 9,  36 => 7,  33 => 6,  30 => 5,);
    }
}
