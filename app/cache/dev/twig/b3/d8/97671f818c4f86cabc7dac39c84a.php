<?php

/* VMBlogBundle:helper:twitterButton.html.twig */
class __TwigTemplate_b3d897671f818c4f86cabc7dac39c84a extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (((!array_key_exists("url", $context)) || ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == null))) {
            // line 4
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "uri");
        }
        // line 6
        echo "
";
        // line 7
        ob_start();
        // line 8
        echo " <a href=\"https://twitter.com/share\" class=\"twitter-share-button\"

   data-text=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "\" 
   data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\"
   data-lang=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "\"

   ";
        // line 14
        if ((!((isset($context["via"]) ? $context["via"] : $this->getContext($context, "via")) === false))) {
            // line 15
            echo "     data-via=\"";
            echo twig_escape_filter($this->env, (isset($context["via"]) ? $context["via"] : $this->getContext($context, "via")), "html", null, true);
            echo "\"
   ";
        }
        // line 17
        echo "
   ";
        // line 18
        if ((!((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")) === false))) {
            // line 19
            echo "     data-hashtags=\"";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
            echo "\"
   ";
        }
        // line 21
        echo " >";
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
        echo "</a>

 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:helper:twitterButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  61 => 18,  58 => 17,  49 => 20,  39 => 12,  31 => 7,  24 => 4,  48 => 13,  27 => 5,  19 => 2,  494 => 258,  468 => 257,  464 => 252,  432 => 223,  428 => 222,  424 => 221,  420 => 220,  416 => 219,  412 => 218,  409 => 217,  406 => 216,  402 => 191,  399 => 190,  393 => 5,  381 => 263,  379 => 216,  368 => 210,  363 => 209,  345 => 192,  343 => 190,  319 => 169,  310 => 163,  296 => 154,  288 => 148,  280 => 144,  274 => 140,  272 => 139,  267 => 136,  265 => 133,  259 => 121,  251 => 116,  242 => 109,  226 => 94,  220 => 92,  218 => 91,  213 => 89,  208 => 87,  204 => 86,  187 => 71,  179 => 69,  173 => 68,  170 => 67,  162 => 65,  156 => 64,  148 => 58,  142 => 55,  139 => 54,  137 => 53,  133 => 51,  120 => 41,  115 => 39,  110 => 37,  106 => 36,  100 => 33,  96 => 32,  92 => 31,  84 => 27,  82 => 26,  78 => 24,  37 => 10,  28 => 6,  22 => 3,  79 => 17,  69 => 21,  66 => 32,  63 => 19,  56 => 10,  50 => 14,  45 => 12,  42 => 11,  35 => 4,  32 => 3,  113 => 42,  108 => 41,  103 => 38,  99 => 36,  93 => 34,  87 => 28,  85 => 31,  80 => 29,  76 => 23,  70 => 24,  67 => 22,  65 => 15,  60 => 13,  52 => 15,  46 => 12,  44 => 11,  41 => 11,  33 => 8,  30 => 3,);
    }
}
