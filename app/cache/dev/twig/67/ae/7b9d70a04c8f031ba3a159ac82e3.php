<?php

/* @WebProfiler/Profiler/base_js.html.twig */
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
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  75 => 28,  62 => 24,  26 => 3,  77 => 25,  61 => 18,  58 => 17,  49 => 20,  39 => 12,  31 => 7,  24 => 2,  48 => 13,  27 => 5,  19 => 1,  494 => 258,  468 => 257,  464 => 252,  432 => 223,  428 => 222,  424 => 221,  420 => 220,  416 => 219,  412 => 218,  409 => 217,  406 => 216,  402 => 191,  399 => 190,  393 => 5,  381 => 263,  379 => 216,  368 => 210,  363 => 209,  345 => 192,  343 => 190,  319 => 169,  310 => 163,  296 => 154,  288 => 148,  280 => 144,  274 => 140,  272 => 139,  267 => 136,  265 => 133,  259 => 121,  251 => 116,  242 => 109,  226 => 94,  220 => 92,  218 => 91,  213 => 89,  208 => 87,  204 => 86,  187 => 71,  179 => 69,  173 => 68,  170 => 67,  162 => 65,  156 => 64,  148 => 58,  142 => 55,  139 => 54,  137 => 53,  133 => 51,  120 => 41,  115 => 39,  110 => 37,  106 => 36,  100 => 33,  96 => 32,  92 => 31,  84 => 27,  82 => 26,  78 => 24,  37 => 10,  28 => 6,  22 => 2,  79 => 29,  69 => 21,  66 => 25,  63 => 19,  56 => 10,  50 => 15,  45 => 12,  42 => 12,  35 => 4,  32 => 6,  113 => 42,  108 => 41,  103 => 38,  99 => 36,  93 => 34,  87 => 28,  85 => 31,  80 => 29,  76 => 23,  70 => 26,  67 => 22,  65 => 15,  60 => 13,  52 => 15,  46 => 14,  44 => 11,  41 => 11,  33 => 8,  30 => 5,);
    }
}
