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
        return array (  35 => 4,  26 => 3,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 41,  78 => 40,  46 => 7,  44 => 9,  36 => 7,  32 => 6,  27 => 4,  22 => 2,  57 => 12,  54 => 11,  40 => 8,  33 => 4,  30 => 3,  165 => 61,  146 => 50,  144 => 49,  139 => 48,  132 => 46,  129 => 45,  121 => 43,  111 => 39,  105 => 35,  97 => 31,  90 => 27,  82 => 24,  75 => 22,  72 => 21,  69 => 20,  65 => 18,  62 => 17,  53 => 14,  50 => 13,  45 => 12,  43 => 8,  38 => 9,  31 => 4,  28 => 3,);
    }
}
