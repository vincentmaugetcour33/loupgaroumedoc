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
        return array (  66 => 32,  58 => 27,  49 => 20,  39 => 12,  31 => 7,  48 => 13,  42 => 11,  37 => 9,  27 => 5,  34 => 15,  28 => 6,  26 => 12,  24 => 4,  22 => 3,  19 => 2,  75 => 27,  70 => 26,  60 => 19,  52 => 15,  46 => 12,  44 => 11,  41 => 10,  33 => 8,  30 => 3,);
    }
}
