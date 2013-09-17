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
        echo "     <a href=\"#\" 
  onclick=\"
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(
        '";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "uri"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "/all.js#xfbml=1\";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
 </script>

 <div class=\"fb-like\" data-href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" data-send=\"";
        echo twig_escape_filter($this->env, (isset($context["send"]) ? $context["send"] : $this->getContext($context, "send")), "html", null, true);
        echo "\" data-layout=\"";
        echo twig_escape_filter($this->env, (isset($context["layout"]) ? $context["layout"] : $this->getContext($context, "layout")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-show-faces=\"";
        echo twig_escape_filter($this->env, (isset($context["showFaces"]) ? $context["showFaces"] : $this->getContext($context, "showFaces")), "html", null, true);
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
        return array (  58 => 27,  49 => 20,  39 => 12,  31 => 7,  24 => 4,  48 => 13,  27 => 5,  19 => 2,  494 => 258,  468 => 257,  464 => 252,  432 => 223,  428 => 222,  424 => 221,  420 => 220,  416 => 219,  412 => 218,  409 => 217,  406 => 216,  402 => 191,  399 => 190,  393 => 5,  381 => 263,  379 => 216,  368 => 210,  363 => 209,  345 => 192,  343 => 190,  319 => 169,  310 => 163,  296 => 154,  288 => 148,  280 => 144,  274 => 140,  272 => 139,  267 => 136,  265 => 133,  259 => 121,  251 => 116,  242 => 109,  226 => 94,  220 => 92,  218 => 91,  213 => 89,  208 => 87,  204 => 86,  187 => 71,  179 => 69,  173 => 68,  170 => 67,  162 => 65,  156 => 64,  148 => 58,  142 => 55,  139 => 54,  137 => 53,  133 => 51,  120 => 41,  115 => 39,  110 => 37,  106 => 36,  100 => 33,  96 => 32,  92 => 31,  84 => 27,  82 => 26,  78 => 24,  37 => 9,  28 => 6,  22 => 3,  79 => 17,  69 => 18,  66 => 32,  63 => 14,  56 => 10,  50 => 9,  45 => 8,  42 => 11,  35 => 4,  32 => 3,  113 => 42,  108 => 41,  103 => 38,  99 => 36,  93 => 34,  87 => 28,  85 => 31,  80 => 29,  76 => 23,  70 => 24,  67 => 22,  65 => 15,  60 => 13,  52 => 15,  46 => 12,  44 => 11,  41 => 10,  33 => 8,  30 => 3,);
    }
}
