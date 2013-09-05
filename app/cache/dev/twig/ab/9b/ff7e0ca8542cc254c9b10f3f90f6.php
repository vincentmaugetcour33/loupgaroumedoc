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
            'javascripts' => array($this, 'block_javascripts'),
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
            // line 8
            echo "<table id=\"\" class=\"table table-striped\">
        <caption>GALERIE</caption>
        <tbody>
        <tr>
    ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                // line 13
                echo "        <td><img style=\"cursor: pointer;border: 2px solid ";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "blue", 1 => "green"), $this->getAttribute($this->getContext($context, "loop"), "index0")), "html", null, true);
                echo "\" 
                 class=\"\" id=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "description"), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmblog/images/" . $this->getAttribute($this->getContext($context, "image"), "url"))), "html", null, true);
                echo "\" 
                 rel=\"popover\" alt=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "alt"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "alt"), "html", null, true);
                echo "\" /></td>
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 6) == 0)) {
                    echo "</tr><tr>";
                }
                echo "    
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </tbody></table>
";
        } else {
            // line 21
            echo "Il n'y a aucune image dans la galerie
";
        }
        // line 23
        echo "



<!--</script>-->


";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script language=\"javascript\" type=\"text/javascript\">
(function(\$) 
 {
   
   \$(\"ul.nav > li#galleries\").addClass('active');
   \$(\"img\").popover({placement:'left',trigger: 'hover',html:true, content: function() { 
    return \"<img class='img-rounded' width=250 src='\"+\$(this).attr('src')+\"' /><div>\"+\$(this).attr('id')+\"</div>\"; },
    delay: { show: 500, hide: 10} });
 }(jQuery));
 </script>
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
        return array (  118 => 32,  77 => 25,  58 => 17,  110 => 47,  352 => 151,  349 => 150,  330 => 12,  326 => 10,  320 => 8,  317 => 7,  300 => 140,  293 => 138,  280 => 132,  265 => 127,  262 => 126,  256 => 124,  251 => 122,  239 => 118,  232 => 114,  194 => 90,  191 => 89,  188 => 88,  172 => 77,  160 => 72,  148 => 68,  146 => 67,  114 => 50,  90 => 29,  81 => 35,  418 => 222,  394 => 218,  358 => 188,  354 => 187,  351 => 186,  348 => 185,  344 => 14,  335 => 5,  323 => 227,  321 => 185,  310 => 178,  292 => 161,  290 => 159,  234 => 115,  223 => 109,  215 => 98,  207 => 93,  202 => 96,  161 => 65,  155 => 64,  152 => 63,  124 => 55,  97 => 35,  70 => 26,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 221,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 189,  360 => 109,  355 => 106,  341 => 159,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 139,  294 => 90,  285 => 89,  283 => 133,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 121,  241 => 77,  229 => 113,  220 => 70,  214 => 69,  177 => 80,  169 => 76,  140 => 55,  132 => 61,  128 => 49,  107 => 23,  61 => 18,  273 => 130,  269 => 94,  254 => 123,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 107,  227 => 81,  224 => 71,  221 => 77,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 75,  159 => 61,  143 => 56,  135 => 53,  119 => 49,  102 => 37,  71 => 19,  67 => 15,  63 => 13,  59 => 22,  38 => 16,  94 => 28,  89 => 20,  85 => 25,  75 => 27,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 28,  46 => 12,  27 => 5,  44 => 11,  31 => 7,  28 => 6,  201 => 92,  196 => 90,  183 => 76,  171 => 61,  166 => 75,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 60,  136 => 56,  121 => 33,  117 => 44,  105 => 46,  91 => 31,  62 => 23,  49 => 20,  24 => 4,  25 => 3,  19 => 2,  79 => 26,  72 => 24,  69 => 21,  47 => 9,  40 => 8,  37 => 6,  22 => 3,  246 => 120,  157 => 56,  145 => 46,  139 => 65,  131 => 52,  123 => 47,  120 => 53,  115 => 47,  111 => 37,  108 => 47,  101 => 45,  98 => 31,  96 => 33,  83 => 36,  74 => 15,  66 => 32,  55 => 15,  52 => 15,  50 => 14,  43 => 8,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 94,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 74,  162 => 57,  154 => 70,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 55,  130 => 54,  125 => 44,  122 => 43,  116 => 51,  112 => 42,  109 => 34,  106 => 36,  103 => 21,  99 => 19,  95 => 42,  92 => 33,  86 => 38,  82 => 29,  80 => 17,  73 => 19,  64 => 24,  60 => 19,  57 => 22,  54 => 21,  51 => 19,  48 => 13,  45 => 12,  42 => 11,  39 => 12,  36 => 7,  33 => 8,  30 => 3,);
    }
}
