<?php

/* VMBlogBundle:User:registration.email.twig */
class __TwigTemplate_e2f8f1211269ded96e04a242edc0f0b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body_text', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        echo "Confirmation d'inscription";
    }

    // line 5
    public function block_body_text($context, array $blocks = array())
    {
        // line 7
        echo "Bonjour ";
        echo $this->getAttribute($this->getContext($context, "user"), "username");
        echo " !

Vous devez confirmé voter inscription [....] en cliquant sur le lien suivant : ";
        // line 9
        echo $this->getContext($context, "confirmationUrl");
        echo "

Amicalement,
Administrateur de monsiteweb.com
";
    }

    // line 16
    public function block_body_html($context, array $blocks = array())
    {
        // line 17
        echo "
     
    ";
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "VMBlogBundle:User:registration.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  100 => 21,  77 => 25,  53 => 19,  34 => 5,  90 => 29,  302 => 128,  300 => 127,  282 => 120,  275 => 118,  267 => 115,  256 => 111,  249 => 109,  236 => 103,  234 => 102,  225 => 97,  190 => 76,  174 => 65,  150 => 56,  134 => 49,  126 => 43,  118 => 39,  110 => 35,  295 => 126,  292 => 143,  286 => 18,  281 => 17,  277 => 15,  266 => 12,  263 => 11,  255 => 8,  253 => 110,  250 => 6,  244 => 5,  231 => 101,  198 => 145,  170 => 122,  148 => 55,  124 => 81,  104 => 57,  97 => 30,  84 => 44,  58 => 17,  23 => 1,  76 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 121,  283 => 88,  278 => 86,  268 => 13,  264 => 114,  258 => 112,  252 => 80,  247 => 78,  241 => 106,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 82,  107 => 34,  61 => 18,  273 => 14,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 95,  219 => 76,  217 => 162,  208 => 68,  204 => 84,  179 => 68,  159 => 61,  143 => 95,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 16,  59 => 14,  38 => 19,  94 => 51,  89 => 20,  85 => 24,  75 => 17,  68 => 24,  56 => 16,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 26,  78 => 20,  46 => 13,  27 => 4,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 78,  183 => 82,  171 => 64,  166 => 62,  163 => 62,  158 => 113,  156 => 58,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 13,  49 => 20,  24 => 4,  25 => 3,  19 => 2,  79 => 26,  72 => 26,  69 => 21,  47 => 9,  40 => 10,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 80,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 19,  83 => 23,  74 => 14,  66 => 17,  55 => 11,  52 => 15,  50 => 14,  43 => 11,  41 => 11,  35 => 16,  32 => 15,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 77,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 63,  164 => 59,  162 => 60,  154 => 112,  149 => 51,  147 => 58,  144 => 49,  141 => 53,  133 => 55,  130 => 41,  125 => 44,  122 => 41,  116 => 38,  112 => 42,  109 => 71,  106 => 36,  103 => 33,  99 => 31,  95 => 28,  92 => 17,  86 => 28,  82 => 22,  80 => 19,  73 => 15,  64 => 17,  60 => 13,  57 => 20,  54 => 9,  51 => 19,  48 => 7,  45 => 5,  42 => 11,  39 => 3,  36 => 6,  33 => 8,  30 => 5,);
    }
}
