<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_fb8ecb55e568039ac756f02ef13d30cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  115 => 40,  112 => 39,  110 => 38,  107 => 37,  74 => 22,  72 => 21,  49 => 12,  34 => 4,  113 => 40,  104 => 37,  100 => 36,  91 => 29,  77 => 25,  73 => 23,  62 => 16,  47 => 9,  45 => 11,  98 => 34,  87 => 33,  53 => 11,  89 => 30,  75 => 22,  63 => 21,  50 => 10,  102 => 33,  92 => 31,  85 => 26,  78 => 24,  65 => 17,  27 => 7,  60 => 20,  58 => 15,  40 => 11,  97 => 5,  88 => 30,  84 => 27,  69 => 33,  94 => 5,  82 => 25,  67 => 18,  52 => 12,  20 => 1,  96 => 35,  79 => 26,  57 => 19,  54 => 19,  37 => 7,  381 => 154,  378 => 153,  373 => 14,  359 => 12,  355 => 10,  349 => 8,  346 => 7,  329 => 143,  327 => 142,  322 => 141,  312 => 136,  309 => 135,  294 => 133,  286 => 130,  282 => 129,  279 => 128,  273 => 126,  271 => 125,  268 => 124,  251 => 123,  243 => 120,  238 => 117,  236 => 116,  233 => 115,  227 => 111,  223 => 109,  207 => 98,  203 => 97,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  108 => 47,  105 => 46,  101 => 33,  95 => 34,  90 => 29,  86 => 43,  83 => 31,  81 => 35,  76 => 27,  70 => 19,  68 => 12,  61 => 23,  59 => 26,  56 => 14,  36 => 9,  33 => 9,  71 => 23,  64 => 17,  55 => 12,  48 => 10,  30 => 7,  39 => 10,  29 => 3,  26 => 6,  51 => 37,  44 => 8,  42 => 7,  35 => 4,  31 => 3,  43 => 6,  41 => 7,  25 => 3,  24 => 2,  46 => 13,  38 => 5,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
