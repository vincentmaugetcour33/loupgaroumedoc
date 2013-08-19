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
   <form class=\"form-inline\" action=\"";
            // line 3
            if (array_key_exists("commentaire", $context)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vm_blog_commentaire_edit", array("id" => $this->getAttribute($this->getContext($context, "commentaire"), "id"))), "html", null, true);
            } else {
                echo $this->env->getExtension('routing')->getPath("vm_blog_commentaire_list");
            }
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
;
            echo ">
    ";
            // line 4
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
    ";
            // line 7
            echo "  </form>
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
        return array (  40 => 7,  35 => 4,  24 => 3,  21 => 2,  22 => 2,  19 => 1,);
    }
}
