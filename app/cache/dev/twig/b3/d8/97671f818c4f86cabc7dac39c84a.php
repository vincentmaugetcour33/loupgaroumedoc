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
        return array (  77 => 25,  61 => 18,  49 => 20,  39 => 12,  31 => 7,  28 => 6,  24 => 4,  48 => 13,  37 => 10,  27 => 5,  22 => 3,  19 => 2,  295 => 144,  292 => 143,  286 => 18,  281 => 17,  277 => 15,  273 => 14,  268 => 13,  266 => 12,  263 => 11,  255 => 8,  253 => 7,  250 => 6,  244 => 5,  231 => 174,  217 => 162,  198 => 145,  196 => 143,  170 => 122,  158 => 113,  154 => 112,  148 => 108,  143 => 95,  128 => 82,  124 => 81,  120 => 80,  109 => 71,  104 => 57,  97 => 52,  94 => 51,  84 => 44,  72 => 38,  68 => 37,  62 => 34,  58 => 17,  41 => 11,  38 => 19,  33 => 8,  23 => 1,  79 => 17,  76 => 39,  69 => 21,  66 => 32,  60 => 13,  50 => 14,  45 => 12,  42 => 11,  35 => 11,  63 => 19,  56 => 31,  52 => 15,  46 => 13,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}
