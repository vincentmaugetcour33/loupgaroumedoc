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
        return array (  58 => 27,  49 => 20,  39 => 12,  31 => 7,  28 => 6,  24 => 4,  48 => 13,  37 => 9,  27 => 5,  22 => 3,  19 => 2,  223 => 87,  220 => 86,  214 => 18,  209 => 17,  205 => 15,  201 => 14,  196 => 13,  194 => 12,  191 => 11,  183 => 8,  181 => 7,  178 => 6,  172 => 5,  161 => 121,  150 => 102,  134 => 88,  132 => 86,  111 => 70,  99 => 61,  95 => 60,  86 => 53,  71 => 40,  67 => 39,  41 => 20,  38 => 19,  33 => 8,  23 => 1,  77 => 17,  74 => 16,  69 => 18,  66 => 32,  60 => 13,  50 => 9,  45 => 8,  42 => 11,  35 => 11,  63 => 38,  56 => 10,  52 => 29,  46 => 13,  43 => 11,  40 => 10,  32 => 3,  29 => 5,);
    }
}
