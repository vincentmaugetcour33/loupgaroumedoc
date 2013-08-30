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
                echo "        <td><img style=\"cursor: pointer;\" class=\"\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "description"), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vmblog/images/" . $this->getAttribute($this->getContext($context, "image"), "url"))), "html", null, true);
                echo "\" rel=\"popover\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "alt"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "image"), "alt"), "html", null, true);
                echo "\" /></td>
        ";
                // line 15
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
            // line 17
            echo "    </tbody></table>
";
        } else {
            // line 19
            echo "Il n'y a aucune image dans la galerie
";
        }
        // line 21
        echo "
<script language=\"javascript\" type=\"text/javascript\">
 \$(document).ready(function() 
 {
   
   \$(\"ul.nav > li#galleries\").addClass('active');
   \$(\"img\").popover({placement:'left',trigger: 'hover',html:true, content: function() { return '<img class=\"img-rounded\" width=\"250px;\" src=\"'+\$(this).attr('src')+'\"/><div>'+\$(this).attr('id')+'</div>'; }, delay: { show: 500, hide: 10} });
 });
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
        return array (  100 => 21,  77 => 25,  53 => 19,  34 => 5,  90 => 29,  302 => 128,  300 => 127,  282 => 120,  275 => 118,  267 => 115,  256 => 111,  249 => 109,  236 => 103,  234 => 102,  225 => 97,  190 => 76,  174 => 65,  150 => 56,  134 => 49,  126 => 43,  118 => 39,  110 => 35,  295 => 126,  292 => 143,  286 => 18,  281 => 17,  277 => 15,  266 => 12,  263 => 11,  255 => 8,  253 => 110,  250 => 6,  244 => 5,  231 => 101,  198 => 145,  170 => 122,  148 => 55,  124 => 81,  104 => 57,  97 => 30,  84 => 44,  58 => 17,  23 => 1,  76 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 121,  283 => 88,  278 => 86,  268 => 13,  264 => 114,  258 => 112,  252 => 80,  247 => 78,  241 => 106,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 82,  107 => 34,  61 => 18,  273 => 14,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 95,  219 => 76,  217 => 162,  208 => 68,  204 => 84,  179 => 68,  159 => 61,  143 => 95,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 19,  59 => 14,  38 => 19,  94 => 51,  89 => 20,  85 => 24,  75 => 17,  68 => 24,  56 => 16,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 26,  78 => 20,  46 => 13,  27 => 5,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 78,  183 => 82,  171 => 64,  166 => 62,  163 => 62,  158 => 113,  156 => 58,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 13,  49 => 20,  24 => 4,  25 => 3,  19 => 2,  79 => 26,  72 => 26,  69 => 21,  47 => 9,  40 => 10,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 80,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 19,  83 => 23,  74 => 14,  66 => 32,  55 => 11,  52 => 15,  50 => 14,  43 => 11,  41 => 11,  35 => 4,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 77,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 60,  154 => 112,  149 => 51,  147 => 58,  144 => 49,  141 => 53,  133 => 55,  130 => 41,  125 => 44,  122 => 41,  116 => 38,  112 => 42,  109 => 71,  106 => 36,  103 => 33,  99 => 31,  95 => 28,  92 => 17,  86 => 28,  82 => 22,  80 => 19,  73 => 15,  64 => 17,  60 => 13,  57 => 20,  54 => 21,  51 => 19,  48 => 13,  45 => 12,  42 => 11,  39 => 8,  36 => 6,  33 => 8,  30 => 7,);
    }
}
