<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_7e8e8cb4aa598d6276bd79f7b9a23403 extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "    at ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "trace"), "class") . $this->getAttribute($this->getContext($context, "trace"), "type")) . $this->getAttribute($this->getContext($context, "trace"), "function")), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($this->getContext($context, "trace"), "args")), "html", null, true);
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "file"), "html", null, true);
            echo " line ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "line"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  26 => 5,  87 => 20,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  64 => 12,  56 => 9,  50 => 8,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  91 => 31,  69 => 25,  66 => 15,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  40 => 8,  30 => 3,  374 => 149,  371 => 148,  365 => 18,  360 => 17,  356 => 15,  352 => 14,  347 => 13,  345 => 12,  342 => 11,  334 => 8,  332 => 7,  329 => 6,  323 => 5,  279 => 167,  260 => 150,  258 => 148,  226 => 121,  214 => 112,  210 => 111,  203 => 106,  195 => 102,  189 => 98,  187 => 84,  182 => 94,  167 => 81,  163 => 70,  159 => 79,  149 => 71,  141 => 69,  135 => 68,  132 => 67,  124 => 65,  118 => 64,  111 => 59,  109 => 58,  103 => 56,  101 => 24,  98 => 40,  86 => 28,  81 => 41,  76 => 39,  72 => 16,  68 => 14,  62 => 23,  58 => 32,  55 => 13,  52 => 29,  41 => 9,  38 => 13,  35 => 7,  33 => 6,  29 => 4,  23 => 1,);
    }
}
