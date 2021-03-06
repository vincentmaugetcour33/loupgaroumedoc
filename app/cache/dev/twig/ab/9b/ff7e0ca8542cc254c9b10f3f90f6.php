<?php

/* VMBlogBundle:Image:image_list.html.twig */
class __TwigTemplate_ab9bff7e0ca8542cc254c9b10f3f90f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VMBlogBundle::base.html.twig");

        $this->blocks = array(
            'vmblog_body' => array($this, 'block_vmblog_body'),
            'vmblog_stylesheet' => array($this, 'block_vmblog_stylesheet'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VMBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 4
        echo "
 ";
        // line 5
        if ((!twig_test_empty((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images"))))) {
            // line 6
            echo "    
    ";
            // line 7
            $this->displayBlock('vmblog_stylesheet', $context, $blocks);
            // line 16
            echo " ";
            // line 22
            echo "       ";
            // line 26
            echo "     ";
            // line 29
            echo "

<ul id=\"galerie\"> 
    ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
            foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                // line 33
                echo "    <li>
        <a href=\"#\">
            <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmblog/images/" . $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "url"))), "html", null, true);
                echo "\" alt=\"\" /> 
            <strong>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "description"), "html", null, true);
                echo "</strong>
        </a> 
    </li> 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "</ul>

";
        } else {
            // line 43
            echo "
Il n'y a aucune image dans la galerie

";
        }
        // line 47
        echo "



<!--</script>-->


";
    }

    // line 7
    public function block_vmblog_stylesheet($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("vmblog_stylesheet", $context, $blocks);
        echo "
    ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vmblog/css/image.css"), "html", null, true);
        echo "\" type=\"text/css\" /> 
     
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Image:image_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 13,  97 => 7,  53 => 32,  77 => 25,  58 => 17,  113 => 42,  34 => 4,  386 => 157,  380 => 155,  377 => 154,  372 => 14,  358 => 12,  354 => 10,  348 => 8,  329 => 145,  327 => 144,  286 => 132,  282 => 131,  279 => 130,  271 => 127,  236 => 118,  233 => 117,  223 => 111,  194 => 90,  191 => 89,  188 => 88,  172 => 77,  160 => 72,  146 => 67,  124 => 55,  114 => 50,  90 => 29,  81 => 35,  70 => 24,  494 => 258,  468 => 257,  464 => 252,  432 => 223,  428 => 222,  424 => 221,  420 => 220,  416 => 219,  412 => 218,  406 => 216,  399 => 190,  363 => 209,  345 => 7,  343 => 190,  319 => 169,  310 => 163,  296 => 154,  288 => 148,  280 => 144,  274 => 140,  272 => 139,  267 => 136,  265 => 133,  259 => 121,  251 => 125,  242 => 109,  226 => 94,  218 => 91,  213 => 89,  170 => 67,  148 => 68,  137 => 53,  110 => 47,  100 => 8,  84 => 27,  65 => 36,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 217,  407 => 131,  402 => 191,  398 => 129,  393 => 5,  387 => 122,  384 => 121,  381 => 263,  379 => 216,  374 => 116,  368 => 210,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 143,  314 => 99,  312 => 138,  309 => 137,  305 => 95,  298 => 91,  294 => 135,  285 => 89,  283 => 88,  278 => 86,  268 => 126,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 80,  169 => 76,  140 => 55,  132 => 61,  128 => 49,  107 => 46,  61 => 35,  273 => 128,  269 => 94,  254 => 92,  243 => 122,  240 => 86,  238 => 119,  235 => 74,  230 => 82,  227 => 113,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 87,  204 => 98,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 22,  63 => 19,  59 => 22,  94 => 28,  89 => 20,  85 => 31,  75 => 40,  68 => 25,  56 => 21,  87 => 32,  21 => 2,  26 => 6,  93 => 34,  88 => 6,  78 => 24,  27 => 5,  44 => 22,  31 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 75,  163 => 62,  158 => 67,  156 => 64,  151 => 63,  142 => 55,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 46,  91 => 31,  62 => 23,  49 => 20,  25 => 3,  24 => 4,  46 => 26,  38 => 6,  28 => 6,  19 => 2,  79 => 26,  72 => 16,  69 => 21,  47 => 8,  40 => 7,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 65,  131 => 52,  123 => 47,  120 => 53,  115 => 39,  111 => 37,  108 => 41,  101 => 45,  98 => 31,  96 => 33,  83 => 36,  74 => 14,  66 => 32,  55 => 10,  52 => 15,  50 => 14,  43 => 7,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 71,  182 => 66,  176 => 64,  173 => 68,  168 => 72,  164 => 74,  162 => 65,  154 => 70,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 51,  130 => 41,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 34,  106 => 36,  103 => 38,  99 => 36,  95 => 42,  92 => 31,  86 => 47,  82 => 26,  80 => 43,  73 => 19,  64 => 24,  60 => 19,  57 => 33,  54 => 21,  51 => 19,  48 => 29,  45 => 12,  42 => 16,  39 => 12,  36 => 7,  33 => 8,  30 => 3,);
    }
}
