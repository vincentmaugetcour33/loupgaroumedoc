<?php

/* VMBlogBundle:helper:facebookButton.html.twig */
class __TwigTemplate_49e61830d685d84989979a95cde940f1 extends Twig_Template
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
        echo "     <a href=\"#\" 
  onclick=\"
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(
        '";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "uri"), "html", null, true);
        echo "'), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;\">
   <div class=\"facebookButton\">Partager commentaire</div>
    </a>

 ";
        // line 20
        echo " <div id=\"fb-root\"></div>

 <script>
     (function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = \"//connect.facebook.net/";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "locale"), "html", null, true);
        echo "/all.js#xfbml=1\";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
 </script>

 <div class=\"fb-like\" data-href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\" data-send=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "send"), "html", null, true);
        echo "\" data-layout=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "layout"), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "width"), "html", null, true);
        echo "\" data-show-faces=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "showFaces"), "html", null, true);
        echo "\">
 </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:helper:facebookButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  39 => 12,  31 => 7,  48 => 13,  37 => 9,  27 => 5,  34 => 15,  28 => 6,  26 => 12,  24 => 4,  22 => 3,  19 => 2,  374 => 149,  371 => 148,  365 => 18,  360 => 17,  356 => 15,  352 => 14,  347 => 13,  345 => 12,  342 => 11,  334 => 8,  332 => 7,  329 => 6,  323 => 5,  279 => 167,  260 => 150,  258 => 148,  226 => 121,  214 => 112,  210 => 111,  203 => 106,  195 => 102,  189 => 98,  187 => 97,  182 => 94,  167 => 81,  163 => 80,  159 => 79,  149 => 71,  141 => 69,  135 => 68,  132 => 67,  124 => 65,  118 => 64,  111 => 59,  109 => 58,  103 => 56,  101 => 53,  98 => 52,  86 => 43,  81 => 41,  72 => 38,  68 => 37,  58 => 27,  52 => 29,  41 => 20,  38 => 19,  33 => 8,  23 => 1,  79 => 17,  76 => 39,  69 => 18,  66 => 32,  63 => 14,  60 => 13,  56 => 10,  50 => 9,  42 => 11,  35 => 11,  62 => 34,  55 => 31,  51 => 14,  45 => 8,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}
