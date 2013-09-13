<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_840b4e904db121f9c3810a9c23fec808 extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                ";
            // line 13
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array"), (64 | 256)), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  87 => 32,  53 => 15,  89 => 30,  75 => 24,  63 => 21,  50 => 18,  102 => 33,  92 => 28,  85 => 23,  78 => 18,  65 => 11,  27 => 7,  60 => 18,  58 => 18,  40 => 12,  97 => 5,  88 => 44,  84 => 27,  69 => 33,  94 => 5,  82 => 42,  67 => 22,  52 => 23,  20 => 1,  96 => 30,  79 => 26,  57 => 20,  54 => 19,  37 => 7,  381 => 154,  378 => 153,  373 => 14,  359 => 12,  355 => 10,  349 => 8,  346 => 7,  329 => 143,  327 => 142,  322 => 141,  312 => 136,  309 => 135,  294 => 133,  286 => 130,  282 => 129,  279 => 128,  273 => 126,  271 => 125,  268 => 124,  251 => 123,  243 => 120,  238 => 117,  236 => 116,  233 => 115,  227 => 111,  223 => 109,  207 => 98,  203 => 97,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  108 => 47,  105 => 46,  101 => 45,  95 => 34,  90 => 29,  86 => 43,  83 => 31,  81 => 35,  76 => 27,  70 => 24,  68 => 12,  61 => 23,  59 => 26,  56 => 16,  36 => 10,  33 => 9,  71 => 23,  64 => 21,  55 => 38,  48 => 16,  30 => 6,  39 => 10,  29 => 3,  26 => 6,  51 => 37,  44 => 11,  42 => 11,  35 => 9,  31 => 8,  43 => 6,  41 => 14,  25 => 3,  24 => 2,  46 => 13,  38 => 12,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
