<?php

/* VMBlogBundle:Default:commentaire.html.twig */
class __TwigTemplate_e39bab5746217b039f79ce443ae6dc2b extends Twig_Template
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
        // line 6
        echo "<div class=\"count\">
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pagination"), "getTotalItemCount"), "html", null, true);
        echo " commentaires
</div>
<table>
<tr>
";
        // line 12
        echo "    <!--<th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Id", "c.id");
        echo "</th>-->
    <th";
        // line 13
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "c.auteur"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Auteur", "c.auteur");
        echo "</th>
    <th";
        // line 14
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "c.contenu"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->getContext($context, "pagination"), "Contenu", "c.contenu");
        echo "</th>
</tr>

";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 19
            echo "<tr ";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
    <!--<td></td>-->
    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "auteur"), "html", null, true);
            echo "</td>
    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "commentaire"), "contenu"), "html", null, true);
            echo "</td>
</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>
";
        // line 27
        echo "<div class=\"navigation\">
    ";
        // line 28
        echo $this->env->getExtension('knp_pagination')->render($this->getContext($context, "pagination"));
        echo "
</div> 
 
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Default:commentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 25,  84 => 19,  134 => 46,  100 => 33,  77 => 22,  70 => 20,  34 => 6,  129 => 48,  127 => 44,  124 => 43,  110 => 7,  90 => 46,  58 => 25,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 49,  128 => 49,  107 => 6,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 28,  102 => 32,  71 => 19,  67 => 18,  63 => 15,  59 => 14,  38 => 9,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 33,  105 => 40,  91 => 27,  62 => 26,  49 => 13,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 33,  69 => 25,  47 => 9,  40 => 10,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 47,  131 => 52,  123 => 47,  120 => 34,  115 => 43,  111 => 37,  108 => 36,  101 => 5,  98 => 31,  96 => 22,  83 => 25,  74 => 35,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 9,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 27,  112 => 42,  109 => 34,  106 => 37,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 39,  73 => 19,  64 => 18,  60 => 16,  57 => 14,  54 => 24,  51 => 14,  48 => 12,  45 => 11,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 4,);
    }
}
