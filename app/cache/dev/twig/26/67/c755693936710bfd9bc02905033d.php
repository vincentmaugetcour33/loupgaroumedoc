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
            echo "<div class=\"well\">
   
   <form action=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_ajout");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
            echo ">
    ";
            // line 5
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
    <input type=\"button\" value=\"annuler\"  onclick=\"document.location='/app_dev.php/commentaire/1'\" class=\"btn btn-primary\" />
  </form>
</div>
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
        return array (  32 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
