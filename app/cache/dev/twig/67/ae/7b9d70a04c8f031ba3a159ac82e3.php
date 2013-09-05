<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_67ae7b9d70a04c8f031ba3a159ac82e3 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  244 => 136,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  307 => 128,  302 => 125,  296 => 121,  281 => 114,  276 => 111,  259 => 103,  253 => 100,  222 => 83,  210 => 77,  184 => 63,  170 => 84,  127 => 35,  363 => 153,  357 => 123,  353 => 149,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  288 => 118,  274 => 110,  263 => 95,  255 => 101,  231 => 83,  212 => 78,  190 => 76,  174 => 65,  104 => 32,  175 => 58,  100 => 39,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  380 => 158,  373 => 156,  361 => 152,  342 => 137,  338 => 135,  329 => 131,  325 => 129,  315 => 131,  303 => 106,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  248 => 97,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  200 => 72,  197 => 69,  185 => 74,  181 => 65,  178 => 59,  165 => 83,  153 => 77,  150 => 55,  134 => 39,  113 => 48,  53 => 12,  34 => 5,  84 => 40,  20 => 1,  118 => 49,  77 => 25,  58 => 25,  110 => 46,  352 => 151,  349 => 150,  330 => 12,  326 => 138,  320 => 127,  317 => 7,  300 => 105,  293 => 120,  280 => 132,  265 => 105,  262 => 98,  256 => 96,  251 => 122,  239 => 118,  232 => 88,  194 => 68,  191 => 67,  188 => 90,  172 => 57,  160 => 72,  148 => 68,  146 => 67,  114 => 50,  90 => 42,  81 => 23,  418 => 222,  394 => 168,  358 => 151,  354 => 187,  351 => 120,  348 => 140,  344 => 119,  335 => 134,  323 => 128,  321 => 135,  310 => 178,  292 => 161,  290 => 119,  234 => 115,  223 => 109,  215 => 98,  207 => 75,  202 => 77,  161 => 63,  155 => 47,  152 => 46,  124 => 55,  97 => 40,  70 => 15,  76 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 221,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 189,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 121,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 80,  169 => 76,  140 => 58,  132 => 44,  128 => 43,  107 => 36,  61 => 12,  273 => 130,  269 => 107,  254 => 123,  243 => 92,  240 => 86,  238 => 85,  235 => 89,  230 => 107,  227 => 86,  224 => 81,  221 => 77,  219 => 107,  217 => 75,  208 => 76,  204 => 72,  179 => 75,  159 => 61,  143 => 51,  135 => 53,  119 => 40,  102 => 24,  71 => 19,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 38,  85 => 24,  75 => 19,  68 => 30,  56 => 16,  87 => 41,  21 => 2,  26 => 12,  93 => 39,  88 => 25,  78 => 28,  46 => 13,  27 => 7,  44 => 20,  31 => 8,  28 => 3,  201 => 92,  196 => 92,  183 => 76,  171 => 61,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 59,  138 => 60,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 8,  25 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 12,  37 => 7,  22 => 7,  246 => 96,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 49,  111 => 47,  108 => 47,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 30,  66 => 32,  55 => 24,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 9,  32 => 6,  29 => 4,  209 => 94,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 74,  162 => 59,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 21,  99 => 23,  95 => 42,  92 => 43,  86 => 43,  82 => 19,  80 => 27,  73 => 33,  64 => 23,  60 => 27,  57 => 25,  54 => 24,  51 => 13,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
