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
        return array (  91 => 35,  83 => 30,  75 => 28,  70 => 26,  30 => 5,  26 => 3,  77 => 25,  61 => 18,  49 => 20,  39 => 12,  31 => 7,  28 => 6,  24 => 2,  48 => 13,  37 => 10,  27 => 5,  22 => 2,  19 => 1,  295 => 144,  292 => 143,  286 => 18,  281 => 17,  277 => 15,  273 => 14,  268 => 13,  266 => 12,  263 => 11,  255 => 8,  253 => 7,  250 => 6,  244 => 5,  231 => 174,  217 => 162,  198 => 145,  196 => 143,  170 => 122,  158 => 113,  154 => 112,  148 => 108,  143 => 95,  128 => 82,  124 => 81,  120 => 80,  109 => 71,  104 => 57,  97 => 52,  94 => 51,  84 => 44,  72 => 38,  68 => 37,  62 => 24,  58 => 17,  41 => 11,  38 => 19,  33 => 8,  23 => 1,  79 => 29,  76 => 39,  69 => 21,  66 => 25,  60 => 13,  50 => 15,  45 => 12,  42 => 12,  35 => 11,  63 => 19,  56 => 31,  52 => 15,  46 => 14,  43 => 11,  40 => 10,  32 => 6,  29 => 5,);
    }
}
