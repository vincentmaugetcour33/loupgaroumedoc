<?php

/* VMBlogBundle:Commentaire:formulaire.html.twig */
class __TwigTemplate_2667c755693936710bfd9bc02905033d extends Twig_Template
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
        // line 1
        if (array_key_exists("form", $context)) {
            // line 2
            echo "
   <form class=\"form-inline\" method=\"post\" action=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list");
            echo "\" ";
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
            echo ">
      <div class=\"form-group\">";
            // line 4
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "auteur"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Auteur")));
            echo "</div>
      <div class=\"form-group\">";
            // line 5
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Commentaire")));
            echo "</div>
    <input type=\"submit\" class=\"btn btn-default\" />
    ";
            // line 8
            echo "  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Commentaire:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  36 => 5,  32 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
