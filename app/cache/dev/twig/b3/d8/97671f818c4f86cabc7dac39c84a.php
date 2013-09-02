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
        if (((!array_key_exists("url", $context)) || ($this->getContext($context, "url") == null))) {
            // line 4
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "uri");
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
        echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
        echo "\" 
   data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\"
   data-lang=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "locale"), "html", null, true);
        echo "\"

   ";
        // line 14
        if ((!($this->getContext($context, "via") === false))) {
            // line 15
            echo "     data-via=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "via"), "html", null, true);
            echo "\"
   ";
        }
        // line 17
        echo "
   ";
        // line 18
        if ((!($this->getContext($context, "tag") === false))) {
            // line 19
            echo "     data-hashtags=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "tag"), "html", null, true);
            echo "\"
   ";
        }
        // line 21
        echo " >";
        echo twig_escape_filter($this->env, $this->getContext($context, "text"), "html", null, true);
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
        return array (  77 => 25,  61 => 18,  49 => 20,  39 => 12,  31 => 7,  48 => 13,  37 => 10,  27 => 5,  34 => 15,  28 => 6,  26 => 12,  24 => 4,  22 => 3,  19 => 2,  374 => 149,  371 => 148,  365 => 18,  360 => 17,  356 => 15,  352 => 14,  347 => 13,  345 => 12,  342 => 11,  334 => 8,  332 => 7,  329 => 6,  323 => 5,  279 => 167,  260 => 150,  258 => 148,  226 => 121,  214 => 112,  210 => 111,  203 => 106,  195 => 102,  189 => 98,  187 => 97,  182 => 94,  167 => 81,  163 => 80,  159 => 79,  149 => 71,  141 => 69,  135 => 68,  132 => 67,  124 => 65,  118 => 64,  111 => 59,  109 => 58,  103 => 56,  101 => 53,  98 => 52,  86 => 43,  81 => 41,  72 => 38,  68 => 37,  58 => 17,  52 => 15,  41 => 11,  38 => 19,  33 => 8,  23 => 1,  79 => 17,  76 => 39,  69 => 21,  66 => 32,  63 => 19,  60 => 13,  56 => 10,  50 => 14,  42 => 11,  35 => 11,  62 => 34,  55 => 31,  51 => 14,  45 => 12,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}
