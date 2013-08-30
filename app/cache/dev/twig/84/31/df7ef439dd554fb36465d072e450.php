<?php

/* VMBlogBundle:Default:index.html.twig */
class __TwigTemplate_8431df7ef439dd554fb36465d072e450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VMBlogBundle::base.html.twig");

        $this->blocks = array(
            'vmblog_stylesheets' => array($this, 'block_vmblog_stylesheets'),
            'vmblog_body' => array($this, 'block_vmblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VMBlogBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_vmblog_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    


   
";
    }

    // line 10
    public function block_vmblog_body($context, array $blocks = array())
    {
        // line 11
        echo "   
        <div id=\"flashmessage\">
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "                <div class=\"alert\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "
                </div> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        
        </div>


   ";
        // line 22
        echo "  ";
        echo $this->env->getExtension('vm_social_bar')->getSocialButtons();
        echo "
   <br/>
   ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "titre"), "html", null, true);
        echo "<br/>
   ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "livre"), "resume"), "html", null, true);
        echo "
   
   <hr/>
   EXTRAIT (AU HASARD)
   ";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VMBlogBundle:Extrait:index"));
        echo " 
 
   
 <script language=\"javascript\" type=\"text/javascript\">
 \$(document).ready(function() 
 {
    \$(\"ul.nav > li#accueil\").addClass('active');  
   });
</script>  
  
   
 
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  79 => 25,  75 => 24,  69 => 22,  63 => 17,  54 => 15,  51 => 14,  47 => 13,  43 => 11,  40 => 10,  32 => 4,  29 => 3,);
    }
}
