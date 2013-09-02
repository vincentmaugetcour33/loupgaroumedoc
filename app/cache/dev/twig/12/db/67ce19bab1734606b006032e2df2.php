<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_12db67ce19bab1734606b006032e2df2 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($this->getContext($context, "log"), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($this->getContext($context, "log"), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  87 => 20,  31 => 5,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  64 => 12,  56 => 9,  50 => 8,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  91 => 31,  69 => 25,  66 => 15,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 14,  54 => 21,  43 => 8,  40 => 8,  30 => 3,  374 => 149,  371 => 148,  365 => 18,  360 => 17,  356 => 15,  352 => 14,  347 => 13,  345 => 12,  342 => 11,  334 => 8,  332 => 7,  329 => 6,  323 => 5,  279 => 167,  260 => 150,  258 => 148,  226 => 121,  214 => 112,  210 => 111,  203 => 106,  195 => 102,  189 => 98,  187 => 84,  182 => 94,  167 => 81,  163 => 70,  159 => 79,  149 => 71,  141 => 69,  135 => 68,  132 => 67,  124 => 65,  118 => 64,  111 => 59,  109 => 58,  103 => 56,  101 => 24,  98 => 40,  86 => 28,  81 => 41,  76 => 39,  72 => 16,  68 => 14,  62 => 23,  58 => 32,  55 => 13,  52 => 29,  41 => 9,  38 => 19,  35 => 4,  33 => 5,  29 => 5,  23 => 1,);
    }
}
