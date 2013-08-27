<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ddb865d5787a5afe704519eb0b5977ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
";
        // line 5
        echo " 
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  ";
        // line 10
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 11
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
      ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo " 
  ";
        // line 17
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo " 
";
    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 18
        echo "  ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  66 => 17,  55 => 15,  46 => 12,  36 => 10,  27 => 7,  24 => 5,  21 => 2,  277 => 122,  274 => 121,  268 => 18,  263 => 17,  259 => 15,  255 => 14,  250 => 13,  248 => 12,  245 => 11,  237 => 8,  235 => 7,  232 => 6,  226 => 5,  211 => 148,  197 => 137,  181 => 123,  179 => 121,  153 => 100,  141 => 91,  137 => 90,  128 => 83,  113 => 70,  109 => 69,  105 => 68,  94 => 59,  89 => 45,  85 => 43,  81 => 40,  76 => 38,  73 => 37,  67 => 34,  61 => 19,  58 => 17,  56 => 31,  52 => 29,  41 => 11,  38 => 19,  35 => 11,  33 => 8,  29 => 5,  23 => 1,);
    }
}
