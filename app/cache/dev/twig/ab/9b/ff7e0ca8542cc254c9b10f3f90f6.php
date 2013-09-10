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
        if ((!twig_test_empty($this->getContext($context, "images")))) {
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
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
            foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                // line 33
                echo "    <li>
        <a href=\"#\">
            <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmblog/images/" . $this->getAttribute($this->getContext($context, "image"), "url"))), "html", null, true);
                echo "\" alt=\"\" /> 
            <strong>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "description"), "html", null, true);
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
        return array (  104 => 13,  100 => 8,  65 => 36,  53 => 32,  77 => 25,  110 => 47,  58 => 17,  34 => 4,  352 => 151,  349 => 150,  344 => 14,  330 => 12,  326 => 10,  320 => 8,  317 => 7,  300 => 140,  293 => 138,  280 => 132,  265 => 127,  262 => 126,  256 => 124,  251 => 122,  223 => 109,  202 => 96,  191 => 89,  188 => 88,  172 => 77,  160 => 72,  148 => 68,  146 => 67,  114 => 50,  90 => 29,  81 => 35,  441 => 246,  421 => 245,  417 => 241,  380 => 210,  376 => 209,  373 => 208,  370 => 207,  366 => 182,  363 => 181,  357 => 5,  345 => 251,  343 => 207,  332 => 201,  327 => 200,  307 => 181,  263 => 142,  255 => 136,  239 => 118,  234 => 115,  232 => 114,  226 => 109,  218 => 104,  194 => 90,  190 => 83,  186 => 82,  161 => 65,  155 => 64,  152 => 63,  124 => 55,  97 => 7,  70 => 26,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 211,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 183,  305 => 95,  298 => 139,  294 => 90,  285 => 89,  283 => 133,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 121,  241 => 128,  229 => 113,  220 => 70,  214 => 69,  177 => 80,  169 => 76,  140 => 55,  132 => 61,  128 => 49,  107 => 46,  61 => 35,  273 => 130,  269 => 94,  254 => 123,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 49,  102 => 37,  71 => 19,  67 => 15,  63 => 19,  59 => 22,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 40,  68 => 25,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 28,  46 => 26,  27 => 5,  44 => 22,  31 => 7,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 75,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 60,  136 => 56,  121 => 50,  117 => 44,  105 => 46,  91 => 31,  62 => 23,  49 => 20,  24 => 4,  25 => 3,  19 => 2,  79 => 26,  72 => 24,  69 => 21,  47 => 8,  40 => 7,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 65,  131 => 52,  123 => 47,  120 => 53,  115 => 47,  111 => 37,  108 => 47,  101 => 45,  98 => 31,  96 => 33,  83 => 36,  74 => 14,  66 => 32,  55 => 10,  52 => 15,  50 => 14,  43 => 7,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 97,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 74,  162 => 57,  154 => 70,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 42,  92 => 33,  86 => 47,  82 => 29,  80 => 43,  73 => 19,  64 => 24,  60 => 19,  57 => 33,  54 => 21,  51 => 19,  48 => 29,  45 => 12,  42 => 16,  39 => 12,  36 => 7,  33 => 8,  30 => 3,);
    }
}
