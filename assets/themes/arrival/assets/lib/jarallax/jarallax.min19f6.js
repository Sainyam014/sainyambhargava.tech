!(function (o) {
    var n = {};
    function i(e) {
        if (n[e]) return n[e].exports;
        var t = (n[e] = { i: e, l: !1, exports: {} });
        return o[e].call(t.exports, t, t.exports, i), (t.l = !0), t.exports;
    }
    (i.m = o),
        (i.c = n),
        (i.d = function (e, t, o) {
            i.o(e, t) ||
                Object.defineProperty(e, t, { enumerable: !0, get: o });
        }),
        (i.r = function (e) {
            "undefined" != typeof Symbol &&
                Symbol.toStringTag &&
                Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module",
                }),
                Object.defineProperty(e, "__esModule", { value: !0 });
        }),
        (i.t = function (t, e) {
            if ((1 & e && (t = i(t)), 8 & e)) return t;
            if (4 & e && "object" == typeof t && t && t.__esModule) return t;
            var o = Object.create(null);
            if (
                (i.r(o),
                Object.defineProperty(o, "default", {
                    enumerable: !0,
                    value: t,
                }),
                2 & e && "string" != typeof t)
            )
                for (var n in t)
                    i.d(
                        o,
                        n,
                        function (e) {
                            return t[e];
                        }.bind(null, n)
                    );
            return o;
        }),
        (i.n = function (e) {
            var t =
                e && e.__esModule
                    ? function () {
                          return e.default;
                      }
                    : function () {
                          return e;
                      };
            return i.d(t, "a", t), t;
        }),
        (i.o = function (e, t) {
            return Object.prototype.hasOwnProperty.call(e, t);
        }),
        (i.p = ""),
        i((i.s = 11));
})([
    ,
    ,
    function (e, t, o) {
        "use strict";
        e.exports = function (e) {
            "complete" === document.readyState ||
            "interactive" === document.readyState
                ? e.call()
                : document.attachEvent
                ? document.attachEvent("onreadystatechange", function () {
                      "interactive" === document.readyState && e.call();
                  })
                : document.addEventListener &&
                  document.addEventListener("DOMContentLoaded", e);
        };
    },
    ,
    function (o, e, t) {
        "use strict";
        (function (e) {
            var t;
            (t =
                "undefined" != typeof window
                    ? window
                    : void 0 !== e
                    ? e
                    : "undefined" != typeof self
                    ? self
                    : {}),
                (o.exports = t);
        }).call(this, t(5));
    },
    function (e, t, o) {
        "use strict";
        var n,
            i =
                "function" == typeof Symbol &&
                "symbol" == typeof Symbol.iterator
                    ? function (e) {
                          return typeof e;
                      }
                    : function (e) {
                          return e &&
                              "function" == typeof Symbol &&
                              e.constructor === Symbol &&
                              e !== Symbol.prototype
                              ? "symbol"
                              : typeof e;
                      };
        n = (function () {
            return this;
        })();
        try {
            n = n || Function("return this")() || (0, eval)("this");
        } catch (e) {
            "object" ===
                ("undefined" == typeof window ? "undefined" : i(window)) &&
                (n = window);
        }
        e.exports = n;
    },
    ,
    ,
    ,
    ,
    ,
    function (e, t, o) {
        e.exports = o(12);
    },
    function (e, t, o) {
        "use strict";
        var n =
                "function" == typeof Symbol &&
                "symbol" == typeof Symbol.iterator
                    ? function (e) {
                          return typeof e;
                      }
                    : function (e) {
                          return e &&
                              "function" == typeof Symbol &&
                              e.constructor === Symbol &&
                              e !== Symbol.prototype
                              ? "symbol"
                              : typeof e;
                      },
            i = l(o(2)),
            a = o(4),
            r = l(o(13));
        function l(e) {
            return e && e.__esModule ? e : { default: e };
        }
        var s = a.window.jarallax;
        if (
            ((a.window.jarallax = r.default),
            (a.window.jarallax.noConflict = function () {
                return (a.window.jarallax = s), this;
            }),
            void 0 !== a.jQuery)
        ) {
            var c = function () {
                var e = arguments || [];
                Array.prototype.unshift.call(e, this);
                var t = r.default.apply(a.window, e);
                return "object" !== (void 0 === t ? "undefined" : n(t))
                    ? t
                    : this;
            };
            c.constructor = r.default.constructor;
            var u = a.jQuery.fn.jarallax;
            (a.jQuery.fn.jarallax = c),
                (a.jQuery.fn.jarallax.noConflict = function () {
                    return (a.jQuery.fn.jarallax = u), this;
                });
        }
        (0, i.default)(function () {
            (0, r.default)(document.querySelectorAll("[data-jarallax]"));
        });
    },
    function (e, j, S) {
        "use strict";
        (function (e) {
            Object.defineProperty(j, "__esModule", { value: !0 });
            var d = function (e, t) {
                    if (Array.isArray(e)) return e;
                    if (Symbol.iterator in Object(e))
                        return (function (e, t) {
                            var o = [],
                                n = !0,
                                i = !1,
                                a = void 0;
                            try {
                                for (
                                    var r, l = e[Symbol.iterator]();
                                    !(n = (r = l.next()).done) &&
                                    (o.push(r.value), !t || o.length !== t);
                                    n = !0
                                );
                            } catch (e) {
                                (i = !0), (a = e);
                            } finally {
                                try {
                                    !n && l.return && l.return();
                                } finally {
                                    if (i) throw a;
                                }
                            }
                            return o;
                        })(e, t);
                    throw new TypeError(
                        "Invalid attempt to destructure non-iterable instance"
                    );
                },
                t = (function () {
                    function n(e, t) {
                        for (var o = 0; o < t.length; o++) {
                            var n = t[o];
                            (n.enumerable = n.enumerable || !1),
                                (n.configurable = !0),
                                "value" in n && (n.writable = !0),
                                Object.defineProperty(e, n.key, n);
                        }
                    }
                    return function (e, t, o) {
                        return t && n(e.prototype, t), o && n(e, o), e;
                    };
                })(),
                p =
                    "function" == typeof Symbol &&
                    "symbol" == typeof Symbol.iterator
                        ? function (e) {
                              return typeof e;
                          }
                        : function (e) {
                              return e &&
                                  "function" == typeof Symbol &&
                                  e.constructor === Symbol &&
                                  e !== Symbol.prototype
                                  ? "symbol"
                                  : typeof e;
                          },
                o = a(S(2)),
                n = a(S(14)),
                i = S(4);
            function a(e) {
                return e && e.__esModule ? e : { default: e };
            }
            var s =
                    -1 < navigator.userAgent.indexOf("MSIE ") ||
                    -1 < navigator.userAgent.indexOf("Trident/") ||
                    -1 < navigator.userAgent.indexOf("Edge/"),
                r = (function () {
                    for (
                        var e = "transform WebkitTransform MozTransform".split(
                                " "
                            ),
                            t = document.createElement("div"),
                            o = 0;
                        o < e.length;
                        o++
                    )
                        if (t && void 0 !== t.style[e[o]]) return e[o];
                    return !1;
                })(),
                b = void 0,
                v = void 0,
                l = void 0,
                c = !1,
                u = !1;
            function m(e) {
                (b =
                    i.window.innerWidth ||
                    document.documentElement.clientWidth),
                    (v =
                        i.window.innerHeight ||
                        document.documentElement.clientHeight),
                    "object" !== (void 0 === e ? "undefined" : p(e)) ||
                        ("load" !== e.type && "dom-loaded" !== e.type) ||
                        (c = !0);
            }
            m(),
                i.window.addEventListener("resize", m),
                i.window.addEventListener("orientationchange", m),
                i.window.addEventListener("load", m),
                (0, o.default)(function () {
                    m({ type: "dom-loaded" });
                });
            var f = [],
                y = !1;
            function g() {
                if (f.length) {
                    l =
                        void 0 !== i.window.pageYOffset
                            ? i.window.pageYOffset
                            : (
                                  document.documentElement ||
                                  document.body.parentNode ||
                                  document.body
                              ).scrollTop;
                    var t = c || !y || y.width !== b || y.height !== v,
                        o = u || t || !y || y.y !== l;
                    (u = c = !1),
                        (t || o) &&
                            (f.forEach(function (e) {
                                t && e.onResize(), o && e.onScroll();
                            }),
                            (y = { width: b, height: v, y: l })),
                        (0, n.default)(g);
                }
            }
            var h =
                    !!e.ResizeObserver &&
                    new e.ResizeObserver(function (e) {
                        e &&
                            e.length &&
                            (0, n.default)(function () {
                                e.forEach(function (e) {
                                    e.target &&
                                        e.target.jarallax &&
                                        (c || e.target.jarallax.onResize(),
                                        (u = !0));
                                });
                            });
                    }),
                x = 0,
                w = (function () {
                    function u(e, t) {
                        !(function (e, t) {
                            if (!(e instanceof t))
                                throw new TypeError(
                                    "Cannot call a class as a function"
                                );
                        })(this, u);
                        var o = this;
                        (o.instanceID = x++),
                            (o.$item = e),
                            (o.defaults = {
                                type: "scroll",
                                speed: 0.5,
                                imgSrc: null,
                                imgElement: ".jarallax-img",
                                imgSize: "cover",
                                imgPosition: "50% 50%",
                                imgRepeat: "no-repeat",
                                keepImg: !1,
                                elementInViewport: null,
                                zIndex: -100,
                                disableParallax: !1,
                                disableVideo: !1,
                                automaticResize: !0,
                                videoSrc: null,
                                videoStartTime: 0,
                                videoEndTime: 0,
                                videoVolume: 0,
                                videoPlayOnlyVisible: !0,
                                onScroll: null,
                                onInit: null,
                                onDestroy: null,
                                onCoverImage: null,
                            });
                        var n = o.$item.getAttribute("data-jarallax"),
                            i = JSON.parse(n || "{}");
                        n &&
                            console.warn(
                                "Detected usage of deprecated data-jarallax JSON options, you should use pure data-attribute options. See info here - https://github.com/nk-o/jarallax/issues/53"
                            );
                        var a = o.$item.dataset || {},
                            r = {};
                        if (
                            (Object.keys(a).forEach(function (e) {
                                var t =
                                    e.substr(0, 1).toLowerCase() + e.substr(1);
                                t && void 0 !== o.defaults[t] && (r[t] = a[e]);
                            }),
                            (o.options = o.extend({}, o.defaults, i, r, t)),
                            (o.pureOptions = o.extend({}, o.options)),
                            Object.keys(o.options).forEach(function (e) {
                                "true" === o.options[e]
                                    ? (o.options[e] = !0)
                                    : "false" === o.options[e] &&
                                      (o.options[e] = !1);
                            }),
                            (o.options.speed = Math.min(
                                2,
                                Math.max(-1, parseFloat(o.options.speed))
                            )),
                            (o.options.noAndroid || o.options.noIos) &&
                                (console.warn(
                                    "Detected usage of deprecated noAndroid or noIos options, you should use disableParallax option. See info here - https://github.com/nk-o/jarallax/#disable-on-mobile-devices"
                                ),
                                o.options.disableParallax ||
                                    (o.options.noIos && o.options.noAndroid
                                        ? (o.options.disableParallax =
                                              /iPad|iPhone|iPod|Android/)
                                        : o.options.noIos
                                        ? (o.options.disableParallax =
                                              /iPad|iPhone|iPod/)
                                        : o.options.noAndroid &&
                                          (o.options.disableParallax =
                                              /Android/))),
                            "string" == typeof o.options.disableParallax &&
                                (o.options.disableParallax = new RegExp(
                                    o.options.disableParallax
                                )),
                            o.options.disableParallax instanceof RegExp)
                        ) {
                            var l = o.options.disableParallax;
                            o.options.disableParallax = function () {
                                return l.test(navigator.userAgent);
                            };
                        }
                        if (
                            ("function" != typeof o.options.disableParallax &&
                                (o.options.disableParallax = function () {
                                    return !1;
                                }),
                            "string" == typeof o.options.disableVideo &&
                                (o.options.disableVideo = new RegExp(
                                    o.options.disableVideo
                                )),
                            o.options.disableVideo instanceof RegExp)
                        ) {
                            var s = o.options.disableVideo;
                            o.options.disableVideo = function () {
                                return s.test(navigator.userAgent);
                            };
                        }
                        "function" != typeof o.options.disableVideo &&
                            (o.options.disableVideo = function () {
                                return !1;
                            });
                        var c = o.options.elementInViewport;
                        c &&
                            "object" === (void 0 === c ? "undefined" : p(c)) &&
                            void 0 !== c.length &&
                            (c = d(c, 1)[0]);
                        c instanceof Element || (c = null),
                            (o.options.elementInViewport = c),
                            (o.image = {
                                src: o.options.imgSrc || null,
                                $container: null,
                                useImgTag: !1,
                                position: /iPad|iPhone|iPod|Android/.test(
                                    navigator.userAgent
                                )
                                    ? "absolute"
                                    : "fixed",
                            }),
                            o.initImg() && o.canInitParallax() && o.init();
                    }
                    return (
                        t(u, [
                            {
                                key: "css",
                                value: function (t, o) {
                                    return "string" == typeof o
                                        ? i.window
                                              .getComputedStyle(t)
                                              .getPropertyValue(o)
                                        : (o.transform &&
                                              r &&
                                              (o[r] = o.transform),
                                          Object.keys(o).forEach(function (e) {
                                              t.style[e] = o[e];
                                          }),
                                          t);
                                },
                            },
                            {
                                key: "extend",
                                value: function (o) {
                                    var n = arguments;
                                    return (
                                        (o = o || {}),
                                        Object.keys(arguments).forEach(
                                            function (t) {
                                                n[t] &&
                                                    Object.keys(n[t]).forEach(
                                                        function (e) {
                                                            o[e] = n[t][e];
                                                        }
                                                    );
                                            }
                                        ),
                                        o
                                    );
                                },
                            },
                            {
                                key: "getWindowData",
                                value: function () {
                                    return { width: b, height: v, y: l };
                                },
                            },
                            {
                                key: "initImg",
                                value: function () {
                                    var e = this,
                                        t = e.options.imgElement;
                                    return (
                                        t &&
                                            "string" == typeof t &&
                                            (t = e.$item.querySelector(t)),
                                        t instanceof Element || (t = null),
                                        t &&
                                            (e.options.keepImg
                                                ? (e.image.$item = t.cloneNode(
                                                      !0
                                                  ))
                                                : ((e.image.$item = t),
                                                  (e.image.$itemParent =
                                                      t.parentNode)),
                                            (e.image.useImgTag = !0)),
                                        !!e.image.$item ||
                                            (null === e.image.src &&
                                                (e.image.src = e
                                                    .css(
                                                        e.$item,
                                                        "background-image"
                                                    )
                                                    .replace(/^url\(['"]?/g, "")
                                                    .replace(/['"]?\)$/g, "")),
                                            !(
                                                !e.image.src ||
                                                "none" === e.image.src
                                            ))
                                    );
                                },
                            },
                            {
                                key: "canInitParallax",
                                value: function () {
                                    return r && !this.options.disableParallax();
                                },
                            },
                            {
                                key: "init",
                                value: function () {
                                    var e = this,
                                        t = {
                                            position: "absolute",
                                            top: 0,
                                            left: 0,
                                            width: "100%",
                                            height: "100%",
                                            overflow: "hidden",
                                            pointerEvents: "none",
                                        },
                                        o = {};
                                    if (!e.options.keepImg) {
                                        var n = e.$item.getAttribute("style");
                                        if (
                                            (n &&
                                                e.$item.setAttribute(
                                                    "data-jarallax-original-styles",
                                                    n
                                                ),
                                            e.image.useImgTag)
                                        ) {
                                            var i =
                                                e.image.$item.getAttribute(
                                                    "style"
                                                );
                                            i &&
                                                e.image.$item.setAttribute(
                                                    "data-jarallax-original-styles",
                                                    i
                                                );
                                        }
                                    }
                                    if (
                                        ("static" ===
                                            e.css(e.$item, "position") &&
                                            e.css(e.$item, {
                                                position: "relative",
                                            }),
                                        "auto" === e.css(e.$item, "z-index") &&
                                            e.css(e.$item, { zIndex: 0 }),
                                        (e.image.$container =
                                            document.createElement("div")),
                                        e.css(e.image.$container, t),
                                        e.css(e.image.$container, {
                                            "z-index": e.options.zIndex,
                                        }),
                                        s &&
                                            e.css(e.image.$container, {
                                                opacity: 0.9999,
                                            }),
                                        e.image.$container.setAttribute(
                                            "id",
                                            "jarallax-container-" + e.instanceID
                                        ),
                                        e.$item.appendChild(e.image.$container),
                                        e.image.useImgTag
                                            ? (o = e.extend(
                                                  {
                                                      "object-fit":
                                                          e.options.imgSize,
                                                      "object-position":
                                                          e.options.imgPosition,
                                                      "font-family":
                                                          "object-fit: " +
                                                          e.options.imgSize +
                                                          "; object-position: " +
                                                          e.options
                                                              .imgPosition +
                                                          ";",
                                                      "max-width": "none",
                                                  },
                                                  t,
                                                  o
                                              ))
                                            : ((e.image.$item =
                                                  document.createElement(
                                                      "div"
                                                  )),
                                              e.image.src &&
                                                  (o = e.extend(
                                                      {
                                                          "background-position":
                                                              e.options
                                                                  .imgPosition,
                                                          "background-size":
                                                              e.options.imgSize,
                                                          "background-repeat":
                                                              e.options
                                                                  .imgRepeat,
                                                          "background-image":
                                                              'url("' +
                                                              e.image.src +
                                                              '")',
                                                      },
                                                      t,
                                                      o
                                                  ))),
                                        ("opacity" !== e.options.type &&
                                            "scale" !== e.options.type &&
                                            "scale-opacity" !==
                                                e.options.type &&
                                            1 !== e.options.speed) ||
                                            (e.image.position = "absolute"),
                                        "fixed" === e.image.position)
                                    )
                                        for (
                                            var a = 0, r = e.$item;
                                            null !== r &&
                                            r !== document &&
                                            0 === a;

                                        ) {
                                            var l =
                                                e.css(r, "-webkit-transform") ||
                                                e.css(r, "-moz-transform") ||
                                                e.css(r, "transform");
                                            l &&
                                                "none" !== l &&
                                                ((a = 1),
                                                (e.image.position =
                                                    "absolute")),
                                                (r = r.parentNode);
                                        }
                                    (o.position = e.image.position),
                                        e.css(e.image.$item, o),
                                        e.image.$container.appendChild(
                                            e.image.$item
                                        ),
                                        e.onResize(),
                                        e.onScroll(!0),
                                        e.options.automaticResize &&
                                            h &&
                                            h.observe(e.$item),
                                        e.options.onInit &&
                                            e.options.onInit.call(e),
                                        "none" !==
                                            e.css(
                                                e.$item,
                                                "background-image"
                                            ) &&
                                            e.css(e.$item, {
                                                "background-image": "none",
                                            }),
                                        e.addToParallaxList();
                                },
                            },
                            {
                                key: "addToParallaxList",
                                value: function () {
                                    f.push(this), 1 === f.length && g();
                                },
                            },
                            {
                                key: "removeFromParallaxList",
                                value: function () {
                                    var o = this;
                                    f.forEach(function (e, t) {
                                        e.instanceID === o.instanceID &&
                                            f.splice(t, 1);
                                    });
                                },
                            },
                            {
                                key: "destroy",
                                value: function () {
                                    var e = this;
                                    e.removeFromParallaxList();
                                    var t = e.$item.getAttribute(
                                        "data-jarallax-original-styles"
                                    );
                                    if (
                                        (e.$item.removeAttribute(
                                            "data-jarallax-original-styles"
                                        ),
                                        t
                                            ? e.$item.setAttribute("style", t)
                                            : e.$item.removeAttribute("style"),
                                        e.image.useImgTag)
                                    ) {
                                        var o = e.image.$item.getAttribute(
                                            "data-jarallax-original-styles"
                                        );
                                        e.image.$item.removeAttribute(
                                            "data-jarallax-original-styles"
                                        ),
                                            o
                                                ? e.image.$item.setAttribute(
                                                      "style",
                                                      t
                                                  )
                                                : e.image.$item.removeAttribute(
                                                      "style"
                                                  ),
                                            e.image.$itemParent &&
                                                e.image.$itemParent.appendChild(
                                                    e.image.$item
                                                );
                                    }
                                    e.$clipStyles &&
                                        e.$clipStyles.parentNode.removeChild(
                                            e.$clipStyles
                                        ),
                                        e.image.$container &&
                                            e.image.$container.parentNode.removeChild(
                                                e.image.$container
                                            ),
                                        e.options.onDestroy &&
                                            e.options.onDestroy.call(e),
                                        delete e.$item.jarallax;
                                },
                            },
                            {
                                key: "clipContainer",
                                value: function () {
                                    if ("fixed" === this.image.position) {
                                        var e = this,
                                            t =
                                                e.image.$container.getBoundingClientRect(),
                                            o = t.width,
                                            n = t.height;
                                        if (!e.$clipStyles)
                                            (e.$clipStyles =
                                                document.createElement(
                                                    "style"
                                                )),
                                                e.$clipStyles.setAttribute(
                                                    "type",
                                                    "text/css"
                                                ),
                                                e.$clipStyles.setAttribute(
                                                    "id",
                                                    "jarallax-clip-" +
                                                        e.instanceID
                                                ),
                                                (
                                                    document.head ||
                                                    document.getElementsByTagName(
                                                        "head"
                                                    )[0]
                                                ).appendChild(e.$clipStyles);
                                        var i =
                                            "#jarallax-container-" +
                                            e.instanceID +
                                            " {\n           clip: rect(0 " +
                                            o +
                                            "px " +
                                            n +
                                            "px 0);\n           clip: rect(0, " +
                                            o +
                                            "px, " +
                                            n +
                                            "px, 0);\n        }";
                                        e.$clipStyles.styleSheet
                                            ? (e.$clipStyles.styleSheet.cssText =
                                                  i)
                                            : (e.$clipStyles.innerHTML = i);
                                    }
                                },
                            },
                            {
                                key: "coverImage",
                                value: function () {
                                    var e = this,
                                        t =
                                            e.image.$container.getBoundingClientRect(),
                                        o = t.height,
                                        n = e.options.speed,
                                        i =
                                            "scroll" === e.options.type ||
                                            "scroll-opacity" === e.options.type,
                                        a = 0,
                                        r = o,
                                        l = 0;
                                    return (
                                        i &&
                                            (n < 0
                                                ? ((a = n * Math.max(o, v)),
                                                  v < o && (a -= n * (o - v)))
                                                : (a = n * (o + v)),
                                            1 < n
                                                ? (r = Math.abs(a - v))
                                                : n < 0
                                                ? (r = a / n + Math.abs(a))
                                                : (r += (v - o) * (1 - n)),
                                            (a /= 2)),
                                        (e.parallaxScrollDistance = a),
                                        (l = i ? (v - r) / 2 : (o - r) / 2),
                                        e.css(e.image.$item, {
                                            height: r + "px",
                                            marginTop: l + "px",
                                            left:
                                                "fixed" === e.image.position
                                                    ? t.left + "px"
                                                    : "0",
                                            width: t.width + "px",
                                        }),
                                        e.options.onCoverImage &&
                                            e.options.onCoverImage.call(e),
                                        {
                                            image: { height: r, marginTop: l },
                                            container: t,
                                        }
                                    );
                                },
                            },
                            {
                                key: "isVisible",
                                value: function () {
                                    return this.isElementInViewport || !1;
                                },
                            },
                            {
                                key: "onScroll",
                                value: function (e) {
                                    var t = this,
                                        o = t.$item.getBoundingClientRect(),
                                        n = o.top,
                                        i = o.height,
                                        a = {},
                                        r = o;
                                    if (
                                        (t.options.elementInViewport &&
                                            (r =
                                                t.options.elementInViewport.getBoundingClientRect()),
                                        (t.isElementInViewport =
                                            0 <= r.bottom &&
                                            0 <= r.right &&
                                            r.top <= v &&
                                            r.left <= b),
                                        e || t.isElementInViewport)
                                    ) {
                                        var l = Math.max(0, n),
                                            s = Math.max(0, i + n),
                                            c = Math.max(0, -n),
                                            u = Math.max(0, n + i - v),
                                            d = Math.max(0, i - (n + i - v)),
                                            p = Math.max(0, -n + v - i),
                                            m = 1 - (2 * (v - n)) / (v + i),
                                            f = 1;
                                        if (
                                            (i < v
                                                ? (f = 1 - (c || u) / i)
                                                : s <= v
                                                ? (f = s / v)
                                                : d <= v && (f = d / v),
                                            ("opacity" !== t.options.type &&
                                                "scale-opacity" !==
                                                    t.options.type &&
                                                "scroll-opacity" !==
                                                    t.options.type) ||
                                                ((a.transform =
                                                    "translate3d(0,0,0)"),
                                                (a.opacity = f)),
                                            "scale" === t.options.type ||
                                                "scale-opacity" ===
                                                    t.options.type)
                                        ) {
                                            var y = 1;
                                            t.options.speed < 0
                                                ? (y -= t.options.speed * f)
                                                : (y +=
                                                      t.options.speed *
                                                      (1 - f)),
                                                (a.transform =
                                                    "scale(" +
                                                    y +
                                                    ") translate3d(0,0,0)");
                                        }
                                        if (
                                            "scroll" === t.options.type ||
                                            "scroll-opacity" === t.options.type
                                        ) {
                                            var g =
                                                t.parallaxScrollDistance * m;
                                            "absolute" === t.image.position &&
                                                (g -= n),
                                                (a.transform =
                                                    "translate3d(0," +
                                                    g +
                                                    "px,0)");
                                        }
                                        t.css(t.image.$item, a),
                                            t.options.onScroll &&
                                                t.options.onScroll.call(t, {
                                                    section: o,
                                                    beforeTop: l,
                                                    beforeTopEnd: s,
                                                    afterTop: c,
                                                    beforeBottom: u,
                                                    beforeBottomEnd: d,
                                                    afterBottom: p,
                                                    visiblePercent: f,
                                                    fromViewportCenter: m,
                                                });
                                    }
                                },
                            },
                            {
                                key: "onResize",
                                value: function () {
                                    this.coverImage(), this.clipContainer();
                                },
                            },
                        ]),
                        u
                    );
                })(),
                $ = function (e) {
                    ("object" ===
                    ("undefined" == typeof HTMLElement
                        ? "undefined"
                        : p(HTMLElement))
                        ? e instanceof HTMLElement
                        : e &&
                          "object" === (void 0 === e ? "undefined" : p(e)) &&
                          null !== e &&
                          1 === e.nodeType &&
                          "string" == typeof e.nodeName) && (e = [e]);
                    for (
                        var t = arguments[1],
                            o = Array.prototype.slice.call(arguments, 2),
                            n = e.length,
                            i = 0,
                            a = void 0;
                        i < n;
                        i++
                    )
                        if (
                            ("object" === (void 0 === t ? "undefined" : p(t)) ||
                            void 0 === t
                                ? e[i].jarallax ||
                                  (e[i].jarallax = new w(e[i], t))
                                : e[i].jarallax &&
                                  (a = e[i].jarallax[t].apply(
                                      e[i].jarallax,
                                      o
                                  )),
                            void 0 !== a)
                        )
                            return a;
                    return e;
                };
            ($.constructor = w), (j.default = $);
        }).call(this, S(5));
    },
    function (e, t, o) {
        "use strict";
        var n = o(4),
            i =
                n.requestAnimationFrame ||
                n.webkitRequestAnimationFrame ||
                n.mozRequestAnimationFrame ||
                function (e) {
                    var t = +new Date(),
                        o = Math.max(0, 16 - (t - a)),
                        n = setTimeout(e, o);
                    return (a = t), n;
                },
            a = +new Date();
        var r =
            n.cancelAnimationFrame ||
            n.webkitCancelAnimationFrame ||
            n.mozCancelAnimationFrame ||
            clearTimeout;
        Function.prototype.bind && ((i = i.bind(n)), (r = r.bind(n))),
            ((e.exports = i).cancel = r);
    },
]);
