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
        return array (  61 => 18,  58 => 17,  53 => 22,  44 => 16,  31 => 7,  28 => 6,  24 => 4,  48 => 13,  37 => 10,  27 => 5,  22 => 3,  19 => 2,  223 => 87,  220 => 86,  214 => 18,  209 => 17,  205 => 15,  201 => 14,  196 => 13,  194 => 12,  191 => 11,  183 => 8,  181 => 7,  178 => 6,  172 => 5,  161 => 121,  150 => 102,  134 => 88,  132 => 86,  111 => 70,  99 => 61,  95 => 60,  86 => 53,  71 => 40,  67 => 39,  41 => 11,  38 => 19,  33 => 8,  23 => 1,  77 => 25,  74 => 16,  69 => 21,  66 => 16,  60 => 13,  50 => 14,  45 => 12,  42 => 11,  35 => 9,  63 => 19,  56 => 10,  52 => 15,  46 => 13,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}