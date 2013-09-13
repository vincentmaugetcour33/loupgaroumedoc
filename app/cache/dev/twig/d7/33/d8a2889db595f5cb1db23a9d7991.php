<?php

/* VMUserBundle:Profile:formulaire_email.html.twig */
class __TwigTemplate_d733d8a2889db595f5cb1db23a9d7991 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"panel panel-info\"> 
      <div class=\"panel-heading\">
          RECUPERATION PROFIL
       </div>
            
      <div class=\"panel-body\">      
   <form class=\"form-inline\" method=\"post\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("vm_user_trouve");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
      ";
        // line 14
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
     ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
          ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo " ";
        // line 17
        echo "       ";
        // line 18
        echo "<input type=\"submit\" class=\"btn btn-default\" />
      <input type=\"button\" value=\"annuler\"  onclick=\"javascript:history.back()\" class=\"btn btn-primary\" />
  </form>
              </div></div>
              


";
    }

    public function getTemplateName()
    {
        return "VMUserBundle:Profile:formulaire_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  58 => 17,  40 => 12,  97 => 5,  88 => 44,  84 => 43,  69 => 33,  94 => 5,  82 => 42,  67 => 32,  52 => 23,  20 => 1,  96 => 33,  79 => 26,  57 => 25,  54 => 24,  37 => 13,  381 => 154,  378 => 153,  373 => 14,  359 => 12,  355 => 10,  349 => 8,  346 => 7,  329 => 143,  327 => 142,  322 => 141,  312 => 136,  309 => 135,  294 => 133,  286 => 130,  282 => 129,  279 => 128,  273 => 126,  271 => 125,  268 => 124,  251 => 123,  243 => 120,  238 => 117,  236 => 116,  233 => 115,  227 => 111,  223 => 109,  207 => 98,  203 => 97,  194 => 90,  191 => 89,  188 => 88,  177 => 80,  172 => 77,  169 => 76,  166 => 75,  164 => 74,  160 => 72,  154 => 70,  148 => 68,  146 => 67,  139 => 65,  132 => 61,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  108 => 47,  105 => 46,  101 => 45,  95 => 42,  90 => 29,  86 => 43,  83 => 36,  81 => 35,  76 => 32,  70 => 28,  68 => 5,  61 => 23,  59 => 26,  56 => 21,  36 => 7,  33 => 6,  71 => 19,  64 => 25,  55 => 16,  48 => 19,  30 => 6,  39 => 9,  29 => 4,  26 => 5,  51 => 15,  44 => 12,  42 => 12,  35 => 5,  31 => 5,  43 => 6,  41 => 14,  25 => 3,  24 => 2,  46 => 14,  38 => 16,  32 => 4,  28 => 4,  22 => 2,  19 => 1,);
    }
}
