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
        return array (  77 => 25,  61 => 18,  58 => 17,  49 => 20,  39 => 12,  31 => 7,  48 => 13,  27 => 5,  34 => 15,  26 => 12,  24 => 4,  19 => 2,  441 => 246,  421 => 245,  417 => 241,  384 => 211,  380 => 210,  376 => 209,  373 => 208,  370 => 207,  366 => 182,  363 => 181,  357 => 5,  345 => 251,  343 => 207,  332 => 201,  327 => 200,  309 => 183,  307 => 181,  263 => 142,  255 => 136,  247 => 132,  241 => 128,  239 => 127,  234 => 124,  232 => 121,  226 => 109,  218 => 104,  209 => 97,  194 => 84,  190 => 83,  186 => 82,  169 => 67,  161 => 65,  155 => 64,  152 => 63,  144 => 61,  138 => 60,  130 => 54,  124 => 51,  121 => 50,  119 => 49,  115 => 47,  102 => 37,  97 => 35,  92 => 33,  88 => 32,  82 => 29,  78 => 28,  72 => 24,  64 => 20,  54 => 12,  51 => 11,  37 => 10,  28 => 6,  22 => 3,  79 => 17,  76 => 16,  69 => 21,  66 => 32,  63 => 19,  56 => 10,  50 => 14,  45 => 12,  42 => 11,  35 => 4,  32 => 3,  75 => 27,  70 => 23,  60 => 13,  52 => 15,  46 => 12,  44 => 11,  41 => 11,  33 => 8,  30 => 3,);
    }
}
