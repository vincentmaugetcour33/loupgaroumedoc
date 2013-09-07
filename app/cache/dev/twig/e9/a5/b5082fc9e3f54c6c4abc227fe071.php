<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_e9a5b5082fc9e3f54c6c4abc227fe071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ($this->getContext($context, "tokens")) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tokens"));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "elements"), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  244 => 136,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  358 => 151,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  302 => 125,  296 => 121,  290 => 119,  281 => 114,  276 => 111,  259 => 103,  253 => 100,  222 => 83,  210 => 77,  184 => 63,  170 => 84,  127 => 35,  353 => 149,  324 => 113,  321 => 135,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  288 => 118,  274 => 110,  231 => 83,  212 => 78,  104 => 32,  175 => 58,  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  315 => 131,  303 => 106,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  233 => 87,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 69,  185 => 74,  181 => 65,  178 => 59,  165 => 83,  153 => 77,  134 => 39,  113 => 48,  34 => 5,  299 => 129,  287 => 123,  271 => 116,  267 => 101,  248 => 97,  225 => 98,  215 => 95,  205 => 91,  198 => 89,  174 => 65,  150 => 55,  100 => 39,  84 => 27,  20 => 1,  53 => 12,  77 => 38,  58 => 25,  110 => 48,  352 => 151,  349 => 150,  344 => 119,  330 => 12,  326 => 138,  320 => 127,  317 => 138,  300 => 105,  293 => 120,  280 => 132,  265 => 105,  262 => 98,  256 => 96,  251 => 122,  223 => 109,  202 => 77,  191 => 67,  188 => 90,  172 => 57,  160 => 72,  148 => 68,  146 => 65,  114 => 50,  90 => 42,  81 => 23,  420 => 243,  416 => 240,  380 => 158,  376 => 209,  373 => 156,  370 => 207,  366 => 182,  363 => 153,  357 => 123,  345 => 147,  343 => 146,  332 => 116,  327 => 114,  307 => 128,  263 => 95,  255 => 101,  239 => 118,  234 => 115,  232 => 88,  226 => 84,  218 => 96,  194 => 68,  190 => 76,  186 => 82,  161 => 63,  155 => 47,  152 => 46,  124 => 55,  97 => 46,  70 => 15,  76 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 244,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 211,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 127,  285 => 89,  283 => 115,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 108,  247 => 121,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 80,  169 => 76,  140 => 58,  132 => 44,  128 => 43,  107 => 36,  61 => 12,  273 => 130,  269 => 107,  254 => 123,  243 => 92,  240 => 104,  238 => 103,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 97,  219 => 107,  217 => 75,  208 => 76,  204 => 72,  179 => 80,  159 => 61,  143 => 51,  135 => 53,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 18,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 41,  21 => 2,  26 => 12,  93 => 28,  88 => 25,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 90,  196 => 92,  183 => 81,  171 => 61,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 59,  138 => 60,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 8,  25 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 12,  37 => 7,  22 => 7,  246 => 96,  157 => 71,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 50,  111 => 47,  108 => 47,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 30,  66 => 33,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 6,  32 => 4,  29 => 3,  209 => 92,  203 => 73,  199 => 93,  193 => 87,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 74,  162 => 59,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 32,  99 => 23,  95 => 34,  92 => 28,  86 => 43,  82 => 19,  80 => 27,  73 => 33,  64 => 23,  60 => 27,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
