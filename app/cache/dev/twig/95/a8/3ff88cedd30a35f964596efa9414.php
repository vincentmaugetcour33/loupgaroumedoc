<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_95a83ff88cedd30a35f964596efa9414 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, "trace")));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  199 => 91,  187 => 84,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  36 => 7,  57 => 16,  54 => 21,  30 => 3,  61 => 18,  58 => 17,  53 => 22,  44 => 10,  31 => 5,  28 => 6,  24 => 4,  48 => 13,  37 => 10,  27 => 4,  22 => 2,  19 => 1,  223 => 87,  220 => 86,  214 => 18,  209 => 17,  205 => 15,  201 => 92,  196 => 90,  194 => 12,  191 => 11,  183 => 82,  181 => 7,  178 => 6,  172 => 5,  161 => 121,  150 => 102,  134 => 88,  132 => 86,  111 => 70,  99 => 61,  95 => 60,  86 => 28,  71 => 40,  67 => 39,  41 => 9,  38 => 13,  33 => 10,  23 => 1,  77 => 25,  74 => 16,  69 => 25,  66 => 15,  60 => 13,  50 => 8,  45 => 12,  42 => 14,  35 => 4,  63 => 19,  56 => 9,  52 => 15,  46 => 7,  43 => 8,  40 => 8,  32 => 12,  29 => 5,);
    }
}
