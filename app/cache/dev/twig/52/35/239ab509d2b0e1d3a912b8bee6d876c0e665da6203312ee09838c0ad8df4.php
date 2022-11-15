<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_5235239ab509d2b0e1d3a912b8bee6d876c0e665da6203312ee09838c0ad8df4 extends Twig_Template
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
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  19 => 1,  680 => 453,  675 => 385,  670 => 382,  661 => 379,  657 => 377,  652 => 376,  643 => 373,  639 => 371,  634 => 370,  631 => 369,  454 => 11,  450 => 10,  446 => 9,  442 => 8,  437 => 7,  434 => 6,  428 => 3,  422 => 454,  420 => 453,  380 => 416,  376 => 415,  372 => 414,  368 => 413,  364 => 412,  360 => 411,  356 => 410,  352 => 409,  348 => 408,  344 => 407,  340 => 406,  336 => 405,  332 => 404,  328 => 403,  313 => 391,  306 => 386,  304 => 385,  301 => 384,  299 => 369,  273 => 346,  268 => 344,  252 => 331,  247 => 329,  231 => 316,  226 => 314,  210 => 301,  205 => 299,  200 => 297,  168 => 267,  156 => 258,  151 => 256,  145 => 253,  141 => 252,  134 => 248,  125 => 241,  123 => 240,  116 => 236,  99 => 222,  95 => 221,  89 => 218,  80 => 212,  68 => 203,  64 => 202,  51 => 192,  47 => 191,  36 => 184,  34 => 6,  24 => 2,  102 => 66,  87 => 54,  61 => 31,  31 => 3,  28 => 3,);
    }
}
