<?php

/* SensioDistributionBundle:Configurator:steps.html.twig */
class __TwigTemplate_326af7dc3d6029136b208711e3beae25 extends Twig_Template
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
        echo "<div class=\"symfony-block-steps\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "
      ";
            // line 4
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1))) {
                // line 5
                echo "          <span class=\"selected\">Step ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 7
                echo "          <span>Step ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</span>
      ";
            }
            // line 9
            echo "
      ";
            // line 10
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) {
                // line 11
                echo "        &gt;
      ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  80 => 24,  115 => 40,  112 => 39,  110 => 38,  107 => 37,  74 => 22,  72 => 21,  49 => 12,  34 => 4,  113 => 40,  104 => 31,  100 => 36,  91 => 29,  77 => 25,  73 => 23,  62 => 14,  47 => 10,  45 => 9,  98 => 29,  87 => 26,  53 => 11,  89 => 35,  75 => 22,  63 => 21,  50 => 10,  102 => 30,  92 => 31,  85 => 26,  78 => 24,  65 => 17,  27 => 7,  60 => 20,  58 => 14,  40 => 11,  97 => 5,  88 => 28,  84 => 25,  69 => 21,  94 => 5,  82 => 25,  67 => 16,  52 => 13,  20 => 1,  96 => 35,  79 => 26,  57 => 19,  54 => 15,  37 => 7,  381 => 154,  378 => 153,  373 => 14,  359 => 12,  355 => 10,  349 => 8,  346 => 7,  329 => 143,  327 => 142,  322 => 141,  312 => 136,  309 => 135,  294 => 133,  286 => 130,  282 => 129,  279 => 128,  273 => 126,  271 => 125,  268 => 124,  251 => 123,  243 => 120,  238 => 117,  236 => 116,  233 => 115,  227 => 111,  223 => 109,  207 => 98,  203 => 97,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  108 => 33,  105 => 46,  101 => 33,  95 => 34,  90 => 27,  86 => 43,  83 => 31,  81 => 30,  76 => 27,  70 => 19,  68 => 20,  61 => 23,  59 => 17,  56 => 12,  36 => 5,  33 => 4,  71 => 23,  64 => 19,  55 => 12,  48 => 11,  30 => 3,  39 => 10,  29 => 4,  26 => 3,  51 => 37,  44 => 8,  42 => 7,  35 => 5,  31 => 5,  43 => 9,  41 => 7,  25 => 3,  24 => 2,  46 => 10,  38 => 6,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
