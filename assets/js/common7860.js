!function(e) {
    function t(t) {
        for (var r, i, c = t[0], s = t[1], u = t[2], f = 0, d = []; f < c.length; f++)
            i = c[f],
            Object.prototype.hasOwnProperty.call(o, i) && o[i] && d.push(o[i][0]),
            o[i] = 0;
        for (r in s)
            Object.prototype.hasOwnProperty.call(s, r) && (e[r] = s[r]);
        for (l && l(t); d.length;)
            d.shift()();
        return a.push.apply(a, u || []), n()
    }
    function n() {
        for (var e, t = 0; t < a.length; t++) {
            for (var n = a[t], r = !0, c = 1; c < n.length; c++) {
                var s = n[c];
                0 !== o[s] && (r = !1)
            }
            r && (a.splice(t--, 1), e = i(i.s = n[0]))
        }
        return e
    }
    var r = {},
        o = {
            2: 0
        },
        a = [];
    function i(t) {
        if (r[t])
            return r[t].exports;
        var n = r[t] = {
            i: t,
            l: !1,
            exports: {}
        };
        return e[t].call(n.exports, n, n.exports, i), n.l = !0, n.exports
    }
    i.m = e,
    i.c = r,
    i.d = function(e, t, n) {
        i.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    },
    i.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }),
        Object.defineProperty(e, "__esModule", {
            value: !0
        })
    },
    i.t = function(e, t) {
        if (1 & t && (e = i(e)), 8 & t)
            return e;
        if (4 & t && "object" == typeof e && e && e.__esModule)
            return e;
        var n = Object.create(null);
        if (i.r(n), Object.defineProperty(n, "default", {
            enumerable: !0,
            value: e
        }), 2 & t && "string" != typeof e)
            for (var r in e)
                i.d(n, r, function(t) {
                    return e[t]
                }.bind(null, r));
        return n
    },
    i.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return i.d(t, "a", t), t
    },
    i.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    },
    i.p = "/assets/";
    var c = window.webpackJsonp = window.webpackJsonp || [],
        s = c.push.bind(c);
    c.push = t,
    c = c.slice();
    for (var u = 0; u < c.length; u++)
        t(c[u]);
    var l = s;
    a.push([201, 0]),
    n()
}({
    0: function(e, t, n) {
        "use strict";
        n.d(t, "c", (function() {
            return l
        })),
        n.d(t, "e", (function() {
            return f
        })),
        n.d(t, "d", (function() {
            return p
        })),
        n.d(t, "n", (function() {
            return y
        })),
        n.d(t, "g", (function() {
            return L
        })),
        n.d(t, "h", (function() {
            return q
        })),
        n.d(t, "f", (function() {
            return A
        })),
        n.d(t, "i", (function() {
            return P
        })),
        n.d(t, "m", (function() {
            return w
        })),
        n.d(t, "b", (function() {
            return O
        })),
        n.d(t, "j", (function() {
            return j
        })),
        n.d(t, "l", (function() {
            return S
        })),
        n.d(t, "k", (function() {
            return T
        })),
        n.d(t, "a", (function() {
            return k
        }));
        n(26),
        n(8),
        n(31),
        n(13);
        var r = n(11),
            o = (n(14), n(20), n(41), n(25), n(16), void 0),
            a = function(e, t, n) {
                var r = null,
                    a = !1;
                try {
                    r = JSON.parse(t),
                    a = !0
                } catch (e) {
                    r = t
                }
                o.response = r,
                o.message = e,
                o.status = n,
                o.toString = function() {
                    return "".concat(this.message, "\nResponse:\n").concat(a ? JSON.stringify(this.response, null, 2) : this.response)
                }
            };
        function i(e) {
            return (i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            } : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            })(e)
        }
        function c(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))),
                n.push.apply(n, r)
            }
            return n
        }
        function s(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? c(Object(n), !0).forEach((function(t) {
                    u(e, t, n[t])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : c(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }))
            }
            return e
        }
        function u(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n, e
        }
        var l = function(e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    n = {
                        credentials: "same-origin"
                    },
                    r = {
                        "X-Requested-With": "XMLHttpRequest"
                    },
                    o = s(s(s({}, n), t), {}, {
                        headers: s(s({}, r), t.headers)
                    }),
                    c = o.body instanceof File,
                    u = o.body instanceof FormData,
                    l = "object" === i(o.body);
                o.body && l && !c && !u && (o.body = JSON.stringify(o.body));
                var f = null;
                return fetch(e, o).then((function(e) {
                    return -1 !== [200, 201, 301, 302, 400, 403].indexOf((f = e).status) ? f.json() : f.text()
                })).catch((function(e) {
                    throw f ? new a("Request failed with status ".concat(f.status, "."), e, f.status) : new a(e.toString(), null, "REQUEST_FAILED")
                }))
            },
            f = function(e) {
                var t = document.getElementById(e);
                if (t)
                    return t.innerHTML;
                throw new Error('Template "'.concat(e, '" not found.'))
            },
            d = {
                TRY: "₺",
                USD: "$",
                EUR: "€"
            },
            p = function(e) {
                return void 0 !== d[e] ? d[e] : e
            },
            m = n(7),
            h = n.n(m);
        function b(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))),
                n.push.apply(n, r)
            }
            return n
        }
        function v(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? b(Object(n), !0).forEach((function(t) {
                    g(e, t, n[t])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : b(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }))
            }
            return e
        }
        function g(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n, e
        }
        var y = {
                get: function() {
                    return h.a.get("USER_DATA")
                },
                set: function(e) {
                    return h.a.set("USER_DATA", v(v({}, e), {}, {
                        lastUpdate: Date.now()
                    }))
                },
                clear: function() {
                    return h.a.remove("USER_DATA")
                },
                isAuthed: function() {
                    return h.a.has("USER_DATA")
                }
            },
            w = (n(5), n(6), function(e, t) {
                var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : document;
                L && n.querySelectorAll(e).forEach((function(e) {
                    if (!e.classList.contains("is-touchable")) {
                        var n = function() {
                                e.classList.remove(t),
                                document.removeEventListener("click", r)
                            },
                            r = function(t) {
                                e.contains(t.target) || n()
                            };
                        e.addEventListener("click", (function() {
                            e.classList.add(t),
                            setTimeout((function() {
                                document.addEventListener("click", r)
                            }), 100)
                        })),
                        e.classList.add("is-touchable")
                    }
                }))
            }),
            O = function(e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : window,
                    r = new CustomEvent(e, {
                        detail: t
                    });
                n.dispatchEvent(r)
            },
            j = new (n(39).a)({
                duration: 3e3,
                types: [{
                    type: "error",
                    backgroundColor: "",
                    icon: {
                        className: "icon"
                    },
                    duration: 5e3
                }, {
                    type: "success",
                    backgroundColor: "",
                    icon: {
                        className: "icon"
                    }
                }]
            }),
            _ = n(18),
            E = n(4);
        _.defineFilter("trans", (function(e) {
            return Object(E.a)(e)
        }));
        var k = _,
            S = function(e) {
                var t = e.systemMessages,
                    n = function(e) {
                        t[e].forEach((function(t) {
                            "errors" === e ? j.error(t) : j.success(t)
                        }))
                    };
                for (var r in t)
                    n(r)
            },
            T = function(e) {
                e.requestFullscreen ? e.requestFullscreen() : e.webkitRequestFullscreen ? e.webkitRequestFullscreen() : e.mozRequestFullScreen ? e.mozRequestFullScreen() : e.msRequestFullscreen ? e.msRequestFullscreen() : j.error("Fullscreen API is not supported by your browser!")
            },
            L = (/^((?!chrome|android).)*safari/i.test(navigator.userAgent), "ontouchstart" in document.documentElement),
            P = window.location.pathname.split("/")[1] || r.default.defaultLocale,
            A = function() {
                return window.innerWidth > 1e3
            },
            q = window.location.hostname.includes("vip") || window.location.hostname.includes("stg")
    },
    1: function(e, t, n) {
        "use strict";
        n.d(t, "k", (function() {
            return r
        })),
        n.d(t, "l", (function() {
            return o
        })),
        n.d(t, "i", (function() {
            return a
        })),
        n.d(t, "j", (function() {
            return i
        })),
        n.d(t, "c", (function() {
            return c
        })),
        n.d(t, "d", (function() {
            return s
        })),
        n.d(t, "h", (function() {
            return u
        })),
        n.d(t, "n", (function() {
            return l
        })),
        n.d(t, "b", (function() {
            return f
        })),
        n.d(t, "f", (function() {
            return d
        })),
        n.d(t, "g", (function() {
            return p
        })),
        n.d(t, "e", (function() {
            return m
        })),
        n.d(t, "a", (function() {
            return h
        })),
        n.d(t, "m", (function() {
            return b
        }));
        var r = "modal-sign-up",
            o = "modal-sign-up-finalize",
            a = "modal-sign-in",
            i = "modal-sign-in-tfa",
            c = "modal-confirm-email",
            s = "modal-forgot-password",
            u = "modal-reset-password",
            l = "modal-welcome",
            f = "modal-bet-details",
            d = "modal-ios-add-to-home",
            p = "modal-pwa-qr",
            m = "modal-iframe-game",
            h = "modal-active-bonus",
            b = "modal-terms"
    },
    10: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return p
        }));
        n(5),
        n(14),
        n(8),
        n(13),
        n(6);
        var r = n(22),
            o = n(1),
            a = n(0),
            i = n(21),
            c = n(27);
        function s(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var u = [o.i, o.k],
            l = [o.i, o.k],
            f = {
                ignoreCloseClick: !1
            };
        var d = {
                openTrigger: "data-show-modal",
                closeTrigger: "data-modal-close",
                disableScroll: !0,
                disableFocus: !1,
                awaitOpenAnimation: !1,
                awaitCloseAnimation: !0,
                debugMode: !1
            },
            p = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t,
                    n,
                    i;
                return t = e, i = [{
                    key: "init",
                    value: function() {
                        var e = this;
                        r.default.init(d),
                        this.checkHash(),
                        this.checkOverlayClick(),
                        "onhashchange" in window && window.addEventListener("hashchange", (function() {
                            e.checkHash()
                        }))
                    }
                }, {
                    key: "show",
                    value: function(e) {
                        -1 !== u.indexOf(e) && a.n.isAuthed() || r.default.show(e, d)
                    }
                }, {
                    key: "close",
                    value: function(e) {
                        var t = a.n.isAuthed();
                        a.h && !t || e !== o.m && r.default.close(e, d)
                    }
                }, {
                    key: "checkHash",
                    value: function() {
                        var e = location.hash.substr(1);
                        if ("" !== e) {
                            var t = document.querySelector('.modal[data-hash="'.concat(e, '"]:not(.is-open)'));
                            t && this.show(t.id)
                        }
                    }
                }, {
                    key: "checkOverlayClick",
                    value: function() {
                        var e = this;
                        document.querySelectorAll(".modal").forEach((function(t) {
                            t.addEventListener("mousedown", (function(e) {
                                t.addEventListener("mouseup", (function(t) {
                                    e.target !== t.target && (f.ignoreCloseClick = !0)
                                }), {
                                    once: !0
                                })
                            })),
                            t.addEventListener("click", (function(n) {
                                n.target.classList.contains("modal__overlay") && (f.ignoreCloseClick ? f.ignoreCloseClick = !1 : e.close(t.id))
                            }))
                        }))
                    }
                }], (n = null) && s(t.prototype, n), i && s(t, i), e
            }()
    },
    11: function(e, t, n) {
        "use strict";
        n.r(t);
        t.default = {
            defaultLocale: "tr",
            updateBalanceInterval: 20,
            autoSignInAfterSignUp: !0,
            resendTfaCodeTimeout: 30,
            logoutTimeout: 120,
            mainBannerPosition: "trbet_v2_home",
            checkDepositInterval: 10,
            winners: {
                hideNames: !0,
                limit: 5
            },
            sportbook: {
                provider: "scorum",
                bootstrapper: "/js/partner/bootstrapper.min.js?v=3",
                tst: {
                    server: "sport.tst.trbet.com"
                }
            },
            cashier: {
                deposit: {
                    defaultMethod: "TRPAY_BANKWIRE2"
                }
            },
            appcues: {
                apiKey: "1c5adcda-f9ec-4ffb-9a33-83d57779ff10",
                src: "https://fast.appcues.com/120815.js"
            }
        }
    },
    119: function(e, t, n) {
        var r = {
            "./es-us": 70,
            "./es-us.js": 70,
            "./ru": 71,
            "./ru.js": 71
        };
        function o(e) {
            var t = a(e);
            return n(t)
        }
        function a(e) {
            if (!n.o(r, e)) {
                var t = new Error("Cannot find module '" + e + "'");
                throw t.code = "MODULE_NOT_FOUND", t
            }
            return r[e]
        }
        o.keys = function() {
            return Object.keys(r)
        },
        o.resolve = a,
        e.exports = o,
        o.id = 119
    },
    12: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return r
        })),
        n.d(t, "b", (function() {
            return o
        })),
        n.d(t, "c", (function() {
            return a
        })),
        n.d(t, "d", (function() {
            return i
        }));
        var r = "EVENT_AJAX_FORM",
            o = "EVENT_LOGOUT",
            a = "EVENT_USER_LOGIN",
            i = "EVENT_USER_REGISTER"
    },
    15: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return l
        }));
        var r = n(36),
            o = n.n(r),
            a = n(0),
            i = n(2),
            c = n(9),
            s = n(3);
        function u(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var l = function() {
            function e() {
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t,
                n,
                r;
            return t = e, r = [{
                key: "getCasinoGames",
                value: function(e, t) {
                    var n = Object(i.b)(s.e, {
                            slug: e
                        }),
                        r = t ? "?" + o.a.stringify(t) : "";
                    return Object(a.c)(n + r, {
                        method: "GET"
                    })
                }
            }, {
                key: "getSearchGames",
                value: function(e) {
                    var t = Object(i.b)(s.f),
                        n = e ? "?" + o.a.stringify(e) : "";
                    return Object(a.c)(t + n, {
                        method: "GET"
                    })
                }
            }, {
                key: "getGameTags",
                value: function(e) {
                    var t = Object(i.b)(s.g, {
                        slug: e
                    });
                    return Object(a.c)(t, {
                        method: "GET"
                    })
                }
            }, {
                key: "getRecentlyPlayed",
                value: function() {
                    var e = Object(i.b)(s.i);
                    return Object(a.c)(e, {
                        method: "GET"
                    })
                }
            }, {
                key: "sendFeedback",
                value: function(e) {
                    var t = Object(i.b)(s.h);
                    return Object(a.c)(t, {
                        method: "POST",
                        body: JSON.stringify(e, c.d),
                        headers: {
                            "content-type": "application/json"
                        }
                    })
                }
            }, {
                key: "getRecommendedGames",
                value: function() {
                    var e = Object(i.b)(s.j);
                    return Object(a.c)(e, {
                        method: "GET"
                    })
                }
            }], (n = null) && u(t.prototype, n), r && u(t, r), e
        }()
    },
    2: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return l
        })),
        n.d(t, "b", (function() {
            return d
        }));
        n(16),
        n(64),
        n(57),
        n(65),
        n(8),
        n(25),
        n(34),
        n(13);
        var r = {
                symbol: "$",
                separator: ",",
                decimal: ".",
                formatWithSymbol: !1,
                errorOnInvalid: !1,
                precision: 2,
                pattern: "!#",
                negativePattern: "-!#"
            },
            o = function(e) {
                return Math.round(e)
            },
            a = function(e) {
                return Math.pow(10, e)
            },
            i = /(\d)(?=(\d{3})+\b)/g,
            c = /(\d)(?=(\d\d)+\d\b)/g;
        function s(e, t) {
            if (!(this instanceof s))
                return new s(e, t);
            var n = Object.assign({}, r, t),
                o = a(n.precision),
                l = u(e, n);
            this.intValue = l,
            this.value = l / o,
            n.increment = n.increment || 1 / o,
            n.useVedic ? n.groups = c : n.groups = i,
            this.s = n,
            this.p = o
        }
        function u(e, t) {
            var n = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2],
                r = 0,
                i = t.decimal,
                c = t.errorOnInvalid,
                u = t.precision,
                l = a(u),
                f = "number" == typeof e;
            if (f || e instanceof s)
                r = (f ? e : e.value) * l;
            else if ("string" == typeof e) {
                var d = new RegExp("[^-\\d" + i + "]", "g"),
                    p = new RegExp("\\" + i, "g");
                r = (r = e.replace(/\((.*)\)/, "-$1").replace(d, "").replace(p, ".") * l) || 0
            } else {
                if (c)
                    throw Error("Invalid Input");
                r = 0
            }
            return r = r.toFixed(4), n ? o(r) : r
        }
        s.prototype = {
            add: function(e) {
                var t = this.intValue,
                    n = this.s,
                    r = this.p;
                return s((t += u(e, n)) / r, n)
            },
            subtract: function(e) {
                var t = this.intValue,
                    n = this.s,
                    r = this.p;
                return s((t -= u(e, n)) / r, n)
            },
            multiply: function(e) {
                var t = this.intValue,
                    n = this.s;
                return s((t *= e) / a(n.precision), n)
            },
            divide: function(e) {
                var t = this.intValue,
                    n = this.s;
                return s(t /= u(e, n, !1), n)
            },
            distribute: function(e) {
                for (var t = this.intValue, n = this.p, r = this.s, o = [], a = Math[t >= 0 ? "floor" : "ceil"](t / e), i = Math.abs(t - a * e); 0 !== e; e--) {
                    var c = s(a / n, r);
                    i-- > 0 && (c = t >= 0 ? c.add(1 / n) : c.subtract(1 / n)),
                    o.push(c)
                }
                return o
            },
            dollars: function() {
                return ~~this.value
            },
            cents: function() {
                return ~~(this.intValue % this.p)
            },
            format: function(e) {
                var t = this.s,
                    n = t.pattern,
                    r = t.negativePattern,
                    o = t.formatWithSymbol,
                    a = t.symbol,
                    i = t.separator,
                    c = t.decimal,
                    s = t.groups,
                    u = (this + "").replace(/^-/, "").split("."),
                    l = u[0],
                    f = u[1];
                return void 0 === e && (e = o), (this.value >= 0 ? n : r).replace("!", e ? a : "").replace("#", "".concat(l.replace(s, "$1" + i)).concat(f ? c + f : ""))
            },
            toString: function() {
                var e,
                    t,
                    n = this.intValue,
                    r = this.p,
                    a = this.s;
                return (e = n / r, t = a.increment, o(e / t) * t).toFixed(a.precision)
            },
            toJSON: function() {
                return this.value
            }
        };
        var l = s,
            f = (n(35), n(0)),
            d = function(e, t) {
                for (var n in (t = t || {}).locale = f.i, t)
                    e = e.split("{" + n + "}").join(t[n]);
                return e
            }
    },
    201: function(e, t, n) {
        n(11),
        e.exports = n(270)
    },
    202: function(e, t, n) {},
    21: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return o
        }));
        n(5),
        n(6);
        function r(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var o = function() {
            function e() {
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t,
                n,
                o;
            return t = e, o = [{
                key: "init",
                value: function() {
                    this.scale(),
                    window.addEventListener("resize", this.scale)
                }
            }, {
                key: "scale",
                value: function() {
                    document.querySelectorAll(".g-recaptcha").forEach((function(e) {
                        var t = e.parentNode.offsetWidth,
                            n = t / 304;
                        e.style.transform = "scale(" + n + ")",
                        e.style.transformOrigin = "left top",
                        e.style.marginBottom = t > 304 ? "36px" : "-20px"
                    }))
                }
            }], (n = null) && r(t.prototype, n), o && r(t, o), e
        }()
    },
    27: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return r
        }));
        n(26),
        n(31);
        var r = function() {
            return window.location.pathname.includes("/sportsbook") || window.location.pathname.includes("/in-play") || window.location.pathname.includes("/e-sports")
        }
    },
    270: function(e, t, n) {
        "use strict";
        n.r(t);
        n(202),
        n(16),
        n(5),
        n(14),
        n(8),
        n(76),
        n(6);
        var r = n(36),
            o = n.n(r),
            a = n(93),
            i = n(69),
            c = n(195);
        function s(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var u = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t,
                    n,
                    r;
                return t = e, r = [{
                    key: "init",
                    value: function() {
                        Object(c.a)("[data-datepicker]", {
                            nextArrow: '<span class="flatpickr-arrow">',
                            prevArrow: '<span class="flatpickr-arrow">',
                            disableMobile: !0
                        })
                    }
                }], (n = null) && s(t.prototype, n), r && s(t, r), e
            }(),
            l = n(10),
            f = n(191);
        function d(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var p = function() {
            function e() {
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t,
                n,
                r;
            return t = e, r = [{
                key: "init",
                value: function() {
                    document.querySelectorAll("[data-toggle~=dropdown]").forEach((function(e) {
                        e.setAttribute("aria-haspopup", "true"),
                        e.setAttribute("aria-expanded", "false");
                        var t = e.parentNode.querySelector(".dropdown-container"),
                            n = e.dataset.placement || "bottom";
                        function r(e) {
                            t.contains(e.target) || o()
                        }
                        function o() {
                            e.setAttribute("aria-expanded", "false"),
                            t.setAttribute("aria-hidden", "true"),
                            e.parentNode.classList.remove("is-open"),
                            document.removeEventListener("click", r)
                        }
                        t.setAttribute("aria-hidden", "true"),
                        e.onclick = function() {
                            "true" === e.getAttribute("aria-expanded") ? o() : (e.setAttribute("aria-expanded", "true"), t.setAttribute("aria-hidden", "false"), e.parentNode.classList.add("is-open"), new f.a(e, t, {
                                placement: n,
                                modifiers: {
                                    offset: {
                                        offset: "0,10"
                                    }
                                }
                            }), setTimeout((function() {
                                document.addEventListener("click", r)
                            }), 100))
                        }
                    }))
                }
            }], (n = null) && d(t.prototype, n), r && d(t, r), e
        }();
        function m(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var h = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t,
                    n,
                    r;
                return t = e, r = [{
                    key: "init",
                    value: function() {
                        document.querySelectorAll(".c-collapsible-item").forEach((function(e) {
                            e.querySelector(".c-collapsible-item-toggle").onclick = function() {
                                e.classList.toggle("is-open")
                            }
                        })),
                        this.legacy()
                    }
                }, {
                    key: "legacy",
                    value: function() {
                        document.querySelectorAll(".collapsible-item").forEach((function(e) {
                            e.querySelector(".collapsible-item__header").onclick = function() {
                                e.classList.toggle("is-open")
                            }
                        })),
                        document.querySelectorAll("#termsList li").forEach((function(e) {
                            e.querySelector("h3").onclick = function() {
                                e.classList.toggle("open")
                            },
                            e.querySelector(".colapseme, .section-hide").onclick = function() {
                                e.classList.remove("open")
                            }
                        }))
                    }
                }], (n = null) && m(t.prototype, n), r && m(t, r), e
            }(),
            b = n(0);
        function v(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var g = function() {
            function e() {
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t,
                n,
                r;
            return t = e, r = [{
                key: "init",
                value: function() {
                    document.querySelectorAll(".c-field-wrapper-password").forEach((function(e) {
                        var t = e.querySelector(".c-icon-eye"),
                            n = e.querySelector(".c-input-password");
                        t.onclick = function() {
                            n.type = "password" !== n.type ? "password" : "text",
                            n.focus()
                        }
                    }))
                }
            }], (n = null) && v(t.prototype, n), r && v(t, r), e
        }();
        n(38);
        function y(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var w = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t,
                    n,
                    r;
                return t = e, r = [{
                    key: "init",
                    value: function() {
                        document.querySelectorAll('input[type="file"]').forEach((function(e) {
                            e.addEventListener("change", (function(e) {
                                e.preventDefault(),
                                e.target.closest(".field-group").querySelector(".file-name").innerText = e.target.files[0].name
                            }))
                        }))
                    }
                }], (n = null) && y(t.prototype, n), r && y(t, r), e
            }(),
            O = n(54),
            j = n(21);
        function _(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var E = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t,
                    n,
                    r;
                return t = e, r = [{
                    key: "init",
                    value: function() {
                        document.querySelectorAll(".c-tabs").forEach((function(e) {
                            var t = e.querySelectorAll(".c-tabs-list-item"),
                                n = e.querySelectorAll(".c-tabs-section");
                            t.forEach((function(e) {
                                e.addEventListener("click", (function(r) {
                                    r.preventDefault(),
                                    t.forEach((function(t) {
                                        t.classList.toggle("is-current", e.dataset.tab === t.dataset.tab)
                                    })),
                                    n.forEach((function(t) {
                                        t.classList.toggle("is-current", e.dataset.tab === t.dataset.tab)
                                    }))
                                }))
                            }))
                        }))
                    }
                }], (n = null) && _(t.prototype, n), r && _(t, r), e
            }(),
            k = n(45),
            S = n(27);
        function T(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var L = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t,
                    n,
                    r;
                return t = e, r = [{
                    key: "init",
                    value: function() {
                        var e = document.querySelector(".c-scroll-to-top"),
                            t = document.querySelector(".footer");
                        if (t) {
                            var n = t.offsetTop - window.innerHeight,
                                r = Object(S.a)();
                            e.addEventListener("click", (function() {
                                window.scrollTo({
                                    top: 0,
                                    behavior: "smooth"
                                })
                            })),
                            window.addEventListener("scroll", (function() {
                                var t = document.body.scrollTop > n || document.documentElement.scrollTop > n;
                                e.classList.toggle("visible", !r && t)
                            }))
                        }
                    }
                }], (n = null) && T(t.prototype, n), r && T(t, r), e
            }(),
            P = n(7),
            A = n.n(P);
        function q(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var C = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t,
                    n,
                    r;
                return t = e, r = [{
                    key: "setUrl",
                    value: function(e) {
                        var t = document.querySelector(".c-install-app-prompt");
                        t && (t.href = e)
                    }
                }, {
                    key: "show",
                    value: function() {
                        A.a.has("CLOSED_INSTALL_APP_PROMPT") || setTimeout((function() {
                            document.body.classList.toggle("show-install-app-prompt", !0)
                        }), 5e3)
                    }
                }, {
                    key: "init",
                    value: function() {
                        document.querySelector(".c-install-app-prompt").querySelector(".c-install-app-prompt-close").onclick = function(e) {
                            e.preventDefault(),
                            document.body.classList.toggle("show-install-app-prompt", !1),
                            A.a.set("CLOSED_INSTALL_APP_PROMPT", !0)
                        }
                    }
                }], (n = null) && q(t.prototype, n), r && q(t, r), e
            }(),
            x = n(32);
        function I(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var D = function() {
            function e() {
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t,
                n,
                r;
            return t = e, r = [{
                key: "init",
                value: function() {
                    var e = document.getElementById("modal-iframe-game").querySelector(".modal__container"),
                        t = function() {
                            e.style.width = "".concat(window.innerWidth, "px"),
                            e.style.height = "".concat(window.innerHeight, "px")
                        };
                    setTimeout(t, 1e3),
                    window.addEventListener("resize", t),
                    x.isMobile && window.addEventListener("orientationchange", t)
                }
            }], (n = null) && I(t.prototype, n), r && I(t, r), e
        }();
        function N(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        function R() {
            var e = .01 * window.innerHeight;
            document.documentElement.style.setProperty("--vh", "".concat(e, "px"))
        }
        var M = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t,
                    n,
                    r;
                return t = e, r = [{
                    key: "init",
                    value: function() {
                        R(),
                        window.addEventListener("resize", R),
                        x.isMobile && window.addEventListener("orientationchange", R)
                    }
                }], (n = null) && N(t.prototype, n), r && N(t, r), e
            }(),
            U = n(29),
            B = n(2),
            F = {
                separator: ",",
                precision: 0
            },
            G = function() {
                document.body.classList.toggle("is-not-user"),
                document.body.classList.toggle("is-user");

            },
            z = n(42),
            H = function() {
                z.a.updateBalance().then((function(e) {
                    "SUCCESS" === e.status ? b.n.set(e.user) : b.n.clear(),
                    G()
                })).catch((function() {
                    b.n.clear(),
                    G()
                }))
            },
            K = n(92),
            V = function() {
                var e = document.getElementById("gamingtec_register_username").value,
                    t = document.getElementById("gamingtec_register_password").value;
                document.getElementById("username").value = e,
                document.getElementById("password").value = t;
                var n = document.createElement("input");
                n.type = "hidden",
                n.name = "login[_blackbox]",
                n.value = A.a.get(K.a),
                document.querySelector('form[name="login"]').insertBefore(n, document.querySelector('form[name="login"]').childNodes[0]),
                document.querySelector('form[name="login"] button[type="submit"]').click()
            },
            $ = n(11),
            J = function() {
                var e,
                    t,
                    n = document.querySelector(".c-resend-tfa-code-button"),
                    r = document.querySelector(".c-tfa-countdown"),
                    o = function() {
                        t-- > 0 ? (r.style.display = "", r.innerHTML = "(" + t + ")") : (n.disabled = !1, r.style.display = "none", clearInterval(e))
                    };
                n && (n.onclick = function(r) {
                    r.preventDefault(),
                    n.disabled = !0,
                    z.a.getTfaToken().then((function(r) {
                        z.a.resendTfaCode(r._token).then((function(n) {
                            Object(b.l)(n),
                            t = $.default.resendTfaCodeTimeout,
                            e = setInterval(o, 1e3),
                            o()
                        })).catch((function() {
                            return n.disabled = !1
                        }))
                    })).catch((function() {
                        return n.disabled = !1
                    }))
                })
            },
            W = (location.pathname.indexOf("profile"), n(4)),
            Y = n(1),
            X = n(12),
            Z = n(53),
            Q = n(43),
            ee = {
                stepsContainer: document.querySelector(".c-sign-up-steps"),
                email: document.getElementById("gamingtec_register_email"),
                repeatEmail: document.getElementById("gamingtec_register_repeatEmail"),
                password: document.getElementById("gamingtec_register_password"),
                repeatPassword: document.getElementById("gamingtec_register_repeatPassword"),
                securityAnswer: document.getElementById("gamingtec_register_securityAnswer")
            };
        new Z.a({
            target: ee.stepsContainer,
            validator: Q.a,
            clickableItems: !0
        }),
        ee.email && ee.repeatEmail && ee.email.addEventListener("change", (function(e) {
            return ee.repeatEmail.value = e.target.value
        })),
        ee.password && ee.repeatPassword && ee.password.addEventListener("change", (function(e) {
            return ee.repeatPassword.value = e.target.value
        })),
        ee.securityAnswer && (ee.securityAnswer.value = "pleasehashme");
        var te = [a.a, i.b, u, l.a, p, h, g, w, O.b, j.a, E, k.a, L, C, D, M];
        if (Object(W.b)(), G(), b.n.isAuthed() && H(), te.forEach((function(e) {
            void 0 !== e.init && e.init()
        })), b.g && document.body.classList.add("is-touch-device"), o.a.parse(location.search)["show-login"] && l.a.show(Y.i), -1 !== location.pathname.indexOf("reset-password") && l.a.show(Y.h), document.querySelectorAll(".c-show-sign-up-finalize").forEach((function(e) {
            e.onclick = function(e) {
                e.preventDefault(),
                l.a.show(Y.l)
            }
        })), document.querySelector(".c-show-sign-up-finalize-on-page") && l.a.show(Y.l), document.querySelector(".c-show-confirm-email-result") && (window.location.href = "".concat(window.location.origin, "/").concat(b.i, "/#email-verified")), !Object(S.a)())
            
        if (b.h && document.body.classList.add("is-vip-domain"), b.h && !b.n.isAuthed() && (l.a.show(Y.i), "onhashchange" in window)) {
            var re = function(e) {
                e.preventDefault()
            };
            window.addEventListener("hashchange", re),
            window.addEventListener(X.c, (function() {
                window.removeEventListener("hashchange", re)
            }))
        }
        window.addEventListener(X.a, (function(e) {
            var t = e.detail;
            if ("SUCCESS" === t.status)
                switch (t.form) {
                case "gamingtec_register":
                case "gamingtec_quick_signup":
                    Object(b.b)(X.d),
                    $.default.autoSignInAfterSignUp ? (l.a.close(Y.k), V()) : l.a.show(Y.c);
                    break;
                case "login":
                    t.twoFactorAuth ? (l.a.show(Y.j), J()) : (l.a.close(Y.i), b.n.set(t.user), G(), Object(b.b)(X.c));
                    break;
                case "gamingtec_two_fa":
                    t.user && (l.a.close(Y.j), b.n.set(t.user), G(), Object(b.b)(X.c)),
                    t.twoFactorAuthFail && l.a.show(Y.i);
                    break;
                case "gamingtec_forgot_password_step_1_and_2":
                    b.h ? l.a.show(Y.i) : l.a.close(Y.d)
                }
            else
                switch (t.form) {
                case "gamingtec_register":
                case "gamingtec_quick_signup":
                case "login":
                    "undefined" != typeof grecaptcha && grecaptcha.reset()
                }
            Object(b.l)(t)
        })),
        window.addEventListener(X.b, (function() {
            b.n.clear(),
            location.reload()
        })),
        window.addEventListener("message", (function(e) {
            var t = e.data;
            switch (t.command) {
            case "navigateToEvent":
                t.args.Id && (location.href = "/".concat(b.i, "/sportsbook/?eventId=").concat(t.args.Id))
            }
        }));
        var oe = n(52),
            ae = n.n(oe),
            ie = n(3),
            ce = n(15),
            se = 1e3 * $.default.updateBalanceInterval;
        setInterval((function() {
            if (b.n.isAuthed()) {
                var e = b.n.get();
                Date.now() - e.lastUpdate > se && (b.n.set(b.n.get()), H())
            }
        }), se),
        setInterval((function() {
            if (b.n.isAuthed() && A.a.has(ie.a)) {
                var e = A.a.get(ie.a);
                ce.a.sendFeedback(e),
                A.a.remove(ie.a)
            }
        }), 3e3),
        setInterval((function() {
            if (b.n.isAuthed()) {
                var e = b.n.get(),
                    t = ae.a.utc(e.lastLogin).local();
                (ae.a.now() - t) / 1e3 / 60 > $.default.logoutTimeout - 2 && b.j.success(Object(W.a)("you_will_be_logged_out"))
            }
        }), 6e4);
        n(89);
        var ue = n(58),
            le = n(9);
        function fe(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))),
                n.push.apply(n, r)
            }
            return n
        }
        function de(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n, e
        }
        var pe = {
                recentlyPlayed: document.querySelector(".c-welcome-recently-played"),
                mostPopular: document.querySelector(".c-welcome-most-popular"),
                recommended: document.querySelector(".c-welcome-recommended"),
                banner: document.querySelector(".c-welcome-banner")
            },
            me = Object(b.e)("bookmark-game-item-template"),
            he = Object(b.e)("welcome-modal-banner-template");
        function be() {
            var e = x.isMobile ? "mobile_deposit_popup" : "desktop_deposit_popup";
            ue.a.getBanners(e).then((function(e) {
                return function(e) {
                    if (e.length) {
                        var t = e[0];
                        pe.banner.innerHTML = b.a.Render(he, function(e) {
                            for (var t = 1; t < arguments.length; t++) {
                                var n = null != arguments[t] ? arguments[t] : {};
                                t % 2 ? fe(Object(n), !0).forEach((function(t) {
                                    de(e, t, n[t])
                                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : fe(Object(n)).forEach((function(t) {
                                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                                }))
                            }
                            return e
                        }({}, t))
                    }
                }(e.banners)
            })).catch((function(e) {
                return console.log(e)
            }))
        }
        function ve(e) {
            document.querySelector('.c-tabs-list-item[data-tab="'.concat(e, '"]')).style.display = ""
        }
        function ge(e, t) {
            e.innerHTML = b.a.Render(me, {
                list: Object(le.e)(t.slice(0, 6))
            }),
            Object(le.b)(e)
        }
        function ye() {
            be(),
            ce.a.getRecentlyPlayed().then((function(e) {
                return ge(pe.recentlyPlayed, e.games)
            })).catch((function(e) {
                return console.log(e)
            })),
            ce.a.getRecommendedGames().then((function(e) {
                e.casino && e.casino.length ? (ge(pe.recommended, e.casino), ve(ie.d)) : ce.a.getCasinoGames(ie.c).then((function(e) {
                    ge(pe.mostPopular, e.casino),
                    ve(ie.c)
                })).catch((function(e) {
                    return console.log(e)
                }))
            })).catch((function(e) {
                return console.log(e)
            })),
            l.a.show(Y.n)
        }
        window.addEventListener(X.c, (function() {
            return ye()
        })),
        window.addEventListener(X.b, (function() {
            return l.a.hide(Y.n)
        }));
        n(113);
        function we(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))),
                n.push.apply(n, r)
            }
            return n
        }
        function Oe(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? we(Object(n), !0).forEach((function(t) {
                    je(e, t, n[t])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : we(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }))
            }
            return e
        }
        function je(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n, e
        }
        var _e = window[i.a].gamingtec_register_country,
            Ee = ["TR"],
            ke = function(e, t) {
                switch (e) {
                case "tr":
                    return "Türkiye/KKTC";
                case "en":
                    return "Turkey/KKTC";
                default:
                    return t
                }
            };
        _e && (_e.config.choices = _e.config.choices.sort((function(e, t) {
            return Ee.indexOf(t.value) - Ee.indexOf(e.value)
        })), _e._presetChoices = _e._presetChoices.map((function(e) {
            return Oe(Oe({}, e), {}, {
                label: "TR" === e.value ? ke(b.i, e.label) : e.label
            })
        })), _e.destroy(), _e.init());
        n(26),
        n(182),
        n(31);
        var Se = ["keno-1", "krn-table-tennis", "krn-football", "krn-football-league", "krn-football-league-match", "krn-horses", "krn-hounds", "krn-motor-racing", "aviator", "spribe-dice", "spribe-goal", "spribe-keno", "spribe-mines", "spribe-hi-lo", "spribe-mini-roulette", "spribe-plinko", "hilo", "dice", "football-2", "horse-racing-roulette", "hounds", "steeple-chase", "table-tennis", "horses", "motor-racing", "steeple-chase", "mines", "goal", "keno-2", "mini-roulette", "plinko", "tvbet", "live-backgammon", "zeppelin"];
        document.body.addEventListener("click", (function(e) {
            var t = e.target.closest("");
            if (t) {
                var n = b.n.isAuthed(),
                    r = t.href.includes("/game/"),
                    o = t.href.includes("/play-for-real/");
                if (r && n)
                    try {
                        var a = t.closest(".c-game-item"),
                            i = t.closest(".c-game-slider"),
                            c = t.closest(".c-game-list"),
                            s = t.closest(".c-tabs-section"),
                            u = a.dataset.position,
                            f = JSON.parse(a.dataset.game),
                            d = b.n.get(),
                            p = "";
                        i ? p = "main-".concat(i.dataset.slider) : s ? p = "welcome-".concat(s.dataset.tab) : c && c.dataset.category ? p = c.dataset.category : location.href.includes("/casino/") && (p = Object(le.a)());
                        var m = {
                            action: "casino-game-open",
                            uri: {
                                recommendationId: f.zingRecommendationId || ""
                            },
                            parameters: {
                                gameId: x.isMobile ? f.mobileGameId : f.desktopGameId,
                                gameProviderId: f.v3.game.platform.gameLaunchPlatformCode,
                                position: u,
                                sessionKey: d.sessionKey,
                                playerId: d.partyId,
                                category: p,
                                timestamp: (new Date).getTime()
                            }
                        };
                        Object(le.f)(m)
                    } catch (e) {
                        console.log("zing send feedback error", e)
                    }
                if (r && o && !n)
                    return e.preventDefault(), void l.a.show(Y.i);
                if (r && x.isMobile) {
                    e.preventDefault(),
                    l.a.show(Y.e),
                    document.getElementById("modal-iframe-game-content").innerHTML = '<iframe src="'.concat(t, '?mobile=1" class="modal-game-iframe" />'),
                    Se.some((function(e) {
                        return t.href.includes("/".concat(e, "/"))
                    })) && setTimeout((function() {
                        var e = document.querySelector(".modal-game-iframe").contentDocument.querySelector("#gameFrame");
                        e.style.position = "fixed",
                        e.scrolling = "auto"
                    }), 1500);
                }
            }
        }));
        n(183),
        n(185),
        n(13);
        function Te(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var Le = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t,
                    n,
                    r;
                return t = e, r = [{
                    key: "getInfo",
                    value: function(e) {
                        var t = Object(B.b)("/{locale}/{page}.json", {
                            page: e
                        });
                        return Object(b.c)(t, {
                            method: "GET"
                        })
                    }
                }], (n = null) && Te(t.prototype, n), r && Te(t, r), e
            }(),
            Pe = ["2022-06-21"],
            Ae = {
                termsUpdatedAt: "",
                afterLogin: !1,
                afterReg: !1
            },
            qe = {
                updatedAt: document.querySelector(".c-terms-updated-at"),
                desc: document.querySelector(".c-terms-desc"),
                checkbox: document.querySelector(".c-terms-checkbox"),
                acceptBtn: document.querySelector(".c-terms-accept")
            };
        function Ce(e) {
            return e.split(" ")[0] || ""
        }
        function xe() {
            if (b.n.isAuthed()) {
                var e = Ce(b.n.get().termsUpdatedAt);
                Ae.termsUpdatedAt === e || Pe.includes(Ae.termsUpdatedAt) ? A.a.remove("TERMS_NOT_ACCEPTED") : (A.a.set("TERMS_NOT_ACCEPTED", !0), l.a.show(Y.m))
            } else
                setTimeout(xe, 1e3)
        }
        function Ie() {
            A.a.remove("TERMS_NOT_ACCEPTED"),
            l.a.close(Y.m)
        }
        function De() {
            A.a.set("TERMS_UPDATING_KEY", !0),
            qe.acceptBtn.disabled = !0,
            z.a.getToken().then((function(e) {
                z.a.changeTerms(Ae.termsUpdatedAt, e._token).then((function(e) {
                    Object(b.l)(e),
                    Ie(),
                    Ae.afterLogin && l.a.show(Y.n)
                })).catch((function() {
                    A.a.remove("TERMS_UPDATING_KEY"),
                    qe.acceptBtn.disabled = !1
                }))
            })).catch((function() {
                A.a.remove("TERMS_UPDATING_KEY"),
                qe.acceptBtn.disabled = !1
            }))
        }
        function Ne() {
            Le.getInfo("terms-and-conditions").then((function(e) {
                var t = Ce(e.object.updatedAt);
                qe.desc.innerHTML = e.object.description,
                qe.updatedAt.innerHTML = t,
                Ae.termsUpdatedAt = t,
                A.a.has("TERMS_UPDATING_KEY") ? De() : Ae.afterReg ? (A.a.set("TERMS_UPDATING_KEY", !0), setTimeout(De, 2e3)) : xe()
            }))
        }
        b.n.isAuthed() && (A.a.has("TERMS_NOT_ACCEPTED") || A.a.has("TERMS_UPDATING_KEY")) && Ne(),
        qe.acceptBtn && qe.acceptBtn.addEventListener("click", (function(e) {
            e.preventDefault(),
            De()
        })),
        qe.checkbox && qe.checkbox.addEventListener("change", (function(e) {
            e.target.checked ? qe.acceptBtn.disabled = !1 : qe.acceptBtn.disabled = !0
        })),
        window.addEventListener(X.c, (function() {
            Ae.afterLogin = !0,
            Ne()
        })),
        window.addEventListener(X.d, (function() {
            Ae.afterReg = !0
        })),
        window.addEventListener(X.b, Ie);
        var Re = Object(b.e)("bookmark-game-item-template"),
            Me = {
                container: document.querySelector(".c-bookmark-bar"),
                itemClassName: "c-bookmark-bar-item",
                gameListClassName: "c-game-list"
            },
            Ue = "bookmark-bar-list__item--hide";
        Me.container && Me.container.querySelectorAll("." + Me.itemClassName).forEach((function(e) {
            var t = e.querySelector("a"),
                n = t.href + ".json",
                r = t.href.split("/"),
                o = r[r.length - 1];
            e.addEventListener("click", (function(e) {
                e.preventDefault(),
                Object(b.c)(n, {
                    method: "GET"
                }).then((function(e) {
                    return function(e, t) {
                        var n = Me.container.querySelector("." + Me.gameListClassName);
                        n.innerHTML = b.a.Render(Re, {
                            list: Object(le.e)(e)
                        }),
                        n.dataset.category = "bottom-bar-".concat(t)
                    }(e.casino || e.games, o)
                })).catch((function(e) {
                    return console.log(e)
                }))
            })),
            e.classList.remove(Ue),
            -1 === n.indexOf("profile") || b.n.isAuthed() || e.classList.add(Ue)
        }));
        var Be = {
            page: document.querySelector(".c-champions-league-page"),
            content: document.querySelector(".c-champions-league-content")
        };
        Be.page && Le.getInfo("bahisligi").then((function(e) {
            Be.content.innerHTML = e.object.description
        }));
        var Fe = n(194),
            Ge = n.n(Fe),
            ze = (n(20), n(41), function() {
                var e = navigator.userAgent || navigator.vendor || window.opera,
                    t = {
                        userAgent: e
                    };
                return /windows phone/i.test(e) ? (t.os = "Windows Phone", t) : /android/i.test(e) ? (t.os = "Android", t) : /iPad|iPhone|iPod/.test(e) && !window.MSStream ? (t.os = "iOS", t) : (t.os = "other", t)
            }),
            He = function() {
                return new Promise((function(e, t) {
                    self.mainDomain ? e(self.mainDomain) : fetch("https://kv.dogt.xyz/pwa/trbet").then((function(e) {
                        return e.text()
                    })).then((function(t) {
                        self.mainDomain = t,
                        e(t)
                    })).catch((function() {
                        self.mainDomain = "",
                        t("getValidUrlError")
                    }))
                }))
            },
            Ke = window.matchMedia("(display-mode: standalone)").matches,
            Ve = {
                buttons: document.querySelectorAll(".c-add-to-home-screen"),
                qrCode: document.querySelector(".c-pwa-qr-code"),
                pwaLinks: document.querySelectorAll(".c-pwa-promo-desktop")
            };
        function $e() {
            "serviceWorker" in navigator && navigator.serviceWorker.register("/sw.js").then((function(e) {
                dataLayer.push({
                    event: "service_worker_reg_success",
                    clickId: "service_worker_reg_success"
                }),
                console.log("reg success " + e.scope)
            })).catch((function(e) {
                dataLayer.push({
                    event: "service_worker_reg_failed",
                    clickId: "service_worker_reg_failed"
                }),
                console.log("reg failed " + e)
            })),
            Ke || function() {
                var e;
                function t(t) {
                    var n = "iOS" === ze().os,
                        r = t.target.classList.contains("c-pwa-promo-desktop") && x.isChrome;
                    n ? l.a.show(Y.f) : (x.isMobile || r) && (e.prompt(), dataLayer.push({
                        event: "pwa_prompt_clicked",
                        clickId: "pwa_prompt_clicked_btn"
                    }), e.userChoice.then((function(t) {
                        "accepted" === t.outcome ? (dataLayer.push({
                            event: "pwa_prompt_accepted",
                            clickId: "pwa_prompt_accepted_btn"
                        }), console.log("User accepted the prompt")) : (dataLayer.push({
                            event: "pwa_prompt_dismissed",
                            clickId: "pwa_prompt_dismissed_btn"
                        }), console.log("User dismissed the prompt")),
                        e = null
                    })))
                }
                window.addEventListener("beforeinstallprompt", (function(t) {
                    t.preventDefault(),
                    e = t
                })),
                Ve.buttons.forEach((function(e) {
                    e.addEventListener("click", t)
                }))
            }()
        }
        function Je(e) {
            return "https://".concat(e, "/").concat(b.i, "/pwa-promo")
        }
        var We,
            Ye,
            Xe,
            Ze,
            Qe = n(94);
        Object(Qe.a)(),
        We = ze(),
        Ye = "iOS" === We.os,
        Xe = !Ye,
        Ze = {
            operatingSystem: We.os,
            userAgent: We.userAgent,
            isMobile: x.isMobile,
            isPWA: Ke
        },
        dataLayer.push(Ze),
        document.body.classList.toggle("is-android-device", Xe),
        document.body.classList.toggle("is-ios-device", Ye),
        -1 !== "www.trbpwa7.com".indexOf(location.hostname) ? $e() : He().then((function(e) {
            var t;
            -1 !== e.indexOf(location.hostname) ? $e() : (function(e) {
                if (x.isMobile) {
                    var t = Je(e);
                    C.setUrl(t),
                    C.show()
                }
            }(e), t = e, Ve.pwaLinks.forEach((function(e) {
                e.href = Je(t)
            })))
        })),
        x.isMobile || Ve.buttons.forEach((function(e) {
            e.addEventListener("click", (function(e) {
                var t;
                e.target.classList.contains("c-pwa-promo-desktop") || (e.preventDefault(), t = {
                    errorCorrectionLevel: "H",
                    type: "image/svg",
                    margin: 0,
                    quality: 1,
                    width: 240,
                    height: 240
                }, He().then((function(e) {
                    Ge.a.toDataURL("https://".concat(e, "/"), t, (function(e, t) {
                        if (e)
                            throw e;
                        Ve.qrCode && (Ve.qrCode.src = t)
                    }))
                })), l.a.show(Y.g))
            }))
        }))
    },
    29: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return r
        })),
        n.d(t, "b", (function() {
            return o
        }));
        n(16);
        var r = function(e, t) {
                for (var n = arguments.length, r = new Array(n > 2 ? n - 2 : 0), o = 2; o < n; o++)
                    r[o - 2] = arguments[o];
                var a = function() {
                        return i = !0
                    },
                    i = !0;
                return function(n) {
                    i && (i = !1, setTimeout(a, t), e.apply(void 0, [n].concat(r)))
                }
            },
            o = (n(5), n(14), n(6), function(e, t) {
                var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : document;
                n.querySelectorAll(e).forEach((function(e) {
                    -1 !== ["INPUT", "SELECT"].indexOf(e.tagName) ? e.value = t : e.innerHTML = t
                }))
            })
    },
    3: function(e, t, n) {
        "use strict";
        n.d(t, "e", (function() {
            return r
        })),
        n.d(t, "f", (function() {
            return o
        })),
        n.d(t, "g", (function() {
            return a
        })),
        n.d(t, "i", (function() {
            return i
        })),
        n.d(t, "h", (function() {
            return c
        })),
        n.d(t, "j", (function() {
            return s
        })),
        n.d(t, "b", (function() {
            return u
        })),
        n.d(t, "c", (function() {
            return l
        })),
        n.d(t, "d", (function() {
            return f
        })),
        n.d(t, "a", (function() {
            return d
        })),
        n.d(t, "k", (function() {
            return p
        }));
        var r = "/{locale}/casino/{slug}.json",
            o = "/{locale}/games/search.json",
            a = "/{locale}/casino/gametag/categories-for-game-category/{slug}",
            i = "/{locale}/profile/recently-played.json",
            c = "/{locale}/games/feedback",
            s = "/{locale}/games/recommended.json",
            u = 16,
            l = "most-popular",
            f = "recommended",
            d = "FEEDBACK_STACK",
            p = {
                shouldSort: !0,
                threshold: .1,
                location: 0,
                maxPatternLength: 32,
                minMatchCharLength: 1,
                keys: ["name"]
            }
    },
    4: function(e, t, n) {
        "use strict";
        n.d(t, "b", (function() {
            return i
        })),
        n.d(t, "a", (function() {
            return c
        }));
        n(35),
        n(8),
        n(13);
        var r = n(0),
            o = n(2),
            a = "__TRANSLATION_STORE__",
            i = function() {
                Object(r.c)(Object(o.b)("/{locale}/translation")).then((function(e) {
                    return window[a] = e.translations[r.i]
                })).catch((function(e) {
                    return console.log(e)
                }))
            },
            c = function(e, t) {
                var n = window[a] && window[a][e] || e;
                for (var r in t || {})
                    n = (n = n.split("%" + r + "%").join(t[r])).split("{" + r + "}").join(t[r]);
                return n
            }
    },
    42: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return i
        }));
        var r = n(0),
            o = n(2);
        function a(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var i = function() {
            function e() {
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t,
                n,
                i;
            return t = e, i = [{
                key: "updateBalance",
                value: function() {
                    return Object(r.c)(Object(o.b)("/{locale}/profile/update-balance"), {
                        method: "GET"
                    })
                }
            }, {
                key: "getTfaToken",
                value: function() {
                    return Object(r.c)(Object(o.b)("/{locale}/profile/two-fa-token"), {
                        method: "GET"
                    })
                }
            }, {
                key: "resendTfaCode",
                value: function(e) {
                    var t = new FormData;
                    return t.append("_token", e), Object(r.c)(Object(o.b)("/{locale}/profile/resend-two-fa-code"), {
                        method: "POST",
                        body: t
                    })
                }
            }, {
                key: "getBonuses",
                value: function() {
                    return Object(r.c)(Object(o.b)("/api/v1/{locale}/profile/bonus/index.json"), {
                        method: "GET"
                    })
                }
            }, {
                key: "getBetDetails",
                value: function(e, t) {
                    return Object(r.c)(Object(o.b)("/api/v1/{locale}/history/game-round/{platform}/{id}", {
                        platform: e,
                        id: t
                    }), {
                        method: "GET"
                    })
                }
            }, {
                key: "getCountryInfo",
                value: function() {
                    return Object(r.c)(Object(o.b)("/{locale}/country-info"), {
                        method: "GET"
                    })
                }
            }, {
                key: "getToken",
                value: function() {
                    return Object(r.c)(Object(o.b)("/{locale}/profile/preferences/token"), {
                        method: "GET"
                    })
                }
            }, {
                key: "changeTerms",
                value: function(e, t) {
                    var n = new FormData;
                    return n.append("_token", t), n.append("updatedAt", e), Object(r.c)(Object(o.b)("/{locale}/profile/preferences/change-updated-at"), {
                        method: "POST",
                        body: n
                    })
                }
            }], (n = null) && a(t.prototype, n), i && a(t, i), e
        }()
    },
    43: function(e, t, n) {
        "use strict";
        n.d(t, "c", (function() {
            return v
        })),
        n.d(t, "a", (function() {
            return g
        })),
        n.d(t, "b", (function() {
            return y
        })),
        n.d(t, "e", (function() {
            return j
        })),
        n.d(t, "d", (function() {
            return _
        }));
        n(5),
        n(77),
        n(38),
        n(20),
        n(6),
        n(112);
        var r = n(115),
            o = n.n(r),
            a = n(4);
        function i(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))),
                n.push.apply(n, r)
            }
            return n
        }
        function c(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? i(Object(n), !0).forEach((function(t) {
                    s(e, t, n[t])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : i(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }))
            }
            return e
        }
        function s(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n, e
        }
        var u = {
                presence: function() {
                    return Object(a.a)("error.validation.is_required")
                },
                tooShort: function() {
                    return Object(a.a)("error.validation.too_short")
                },
                tooLong: function() {
                    return Object(a.a)("error.validation.too_long")
                },
                required: {
                    email: function() {
                        return Object(a.a)("error.validation.email_is_required")
                    },
                    username: function() {
                        return Object(a.a)("error.validation.username_is_required")
                    },
                    termAndConditions: function() {
                        return Object(a.a)("error.validation.term_and_conditions_is_required")
                    }
                },
                min: {
                    accountNumber: function() {
                        return Object(a.a)("error.validation.account_number_min")
                    }
                },
                max: {
                    accountNumber: function() {
                        return Object(a.a)("error.validation.account_number_max")
                    }
                },
                regex: {
                    email: function() {
                        return Object(a.a)("error.validation.email_invalid")
                    },
                    username: function() {
                        return Object(a.a)("error.validation.username_invalid")
                    },
                    password: function() {
                        return Object(a.a)("error.validation.password_invalid")
                    },
                    first_name: function() {
                        return Object(a.a)("error.validation.first_name_invalid")
                    },
                    last_name: function() {
                        return Object(a.a)("error.validation.last_name_invalid")
                    },
                    mobile_phone: function() {
                        return Object(a.a)("error.validation.mobile_phone_invalid")
                    },
                    postal_code: function() {
                        return Object(a.a)("error.validation.postal_code_invalid")
                    },
                    tfa_code: function() {
                        return Object(a.a)("error.validation.tfa_code_invalid")
                    },
                    accountNumber: function() {
                        return Object(a.a)("error.validation.account_number_invalid")
                    }
                }
            },
            l = {
                email: {
                    presence: !0,
                    email: {
                        message: u.regex.email
                    }
                },
                password: {
                    presence: {
                        allowEmpty: !1,
                        message: u.presence
                    }
                },
                username: {
                    presence: {
                        allowEmpty: !1,
                        message: u.presence
                    },
                    length: {
                        minimum: 8,
                        tooShort: u.tooShort
                    },
                    format: {
                        pattern: "[0-9a-zA-Z_.-]+",
                        flags: "i",
                        message: u.regex.username
                    }
                },
                accountNumber: {
                    presence: {
                        allowEmpty: !1,
                        message: u.presence
                    },
                    length: {
                        minimum: 10,
                        maximum: 11,
                        tooLong: u.max.accountNumber,
                        tooShort: u.min.accountNumber
                    },
                    format: {
                        pattern: "[0-9 +]+",
                        flags: "i",
                        message: u.regex.accountNumber
                    }
                },
                first_name: {
                    format: {
                        pattern: "[a-zA-Z -]+",
                        flags: "i",
                        message: u.regex.first_name
                    }
                },
                last_name: {
                    format: {
                        pattern: "[a-zA-Z -]+",
                        flags: "i",
                        message: u.regex.last_name
                    }
                },
                mobile_phone: {
                    length: {
                        minimum: 10,
                        maximum: 15,
                        tooShort: u.tooShort,
                        tooLong: u.tooLong
                    },
                    format: {
                        pattern: "[0-9 +]+",
                        flags: "i",
                        message: u.regex.mobile_phone
                    }
                },
                postal_code: {
                    format: {
                        pattern: "(?:[a-zA-Z0-9 -]*)",
                        flags: "i",
                        message: u.regex.postal_code
                    }
                },
                tfa_code: {
                    format: {
                        pattern: "[0-9]+",
                        flags: "i",
                        message: u.regex.tfa_code
                    },
                    length: {
                        minimum: 6,
                        maximum: 6,
                        tooShort: u.tooShort,
                        tooLong: u.tooLong
                    }
                },
                term_and_conditions: {
                    presence: {
                        message: u.required.termAndConditions
                    }
                }
            },
            f = {
                fullMessages: !1
            },
            d = function() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                return n = c(c({}, f), n), o.a.async(e, t, n)
            },
            p = n(54);
        function m(e, t) {
            var n;
            if ("undefined" == typeof Symbol || null == e[Symbol.iterator]) {
                if (Array.isArray(e) || (n = function(e, t) {
                    if (!e)
                        return;
                    if ("string" == typeof e)
                        return h(e, t);
                    var n = Object.prototype.toString.call(e).slice(8, -1);
                    "Object" === n && e.constructor && (n = e.constructor.name);
                    if ("Map" === n || "Set" === n)
                        return Array.from(e);
                    if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))
                        return h(e, t)
                }(e)) || t && e && "number" == typeof e.length) {
                    n && (e = n);
                    var r = 0,
                        o = function() {};
                    return {
                        s: o,
                        n: function() {
                            return r >= e.length ? {
                                done: !0
                            } : {
                                done: !1,
                                value: e[r++]
                            }
                        },
                        e: function(e) {
                            throw e
                        },
                        f: o
                    }
                }
                throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }
            var a,
                i = !0,
                c = !1;
            return {
                s: function() {
                    n = e[Symbol.iterator]()
                },
                n: function() {
                    var e = n.next();
                    return i = e.done, e
                },
                e: function(e) {
                    c = !0,
                    a = e
                },
                f: function() {
                    try {
                        i || null == n.return || n.return()
                    } finally {
                        if (c)
                            throw a
                    }
                }
            }
        }
        function h(e, t) {
            (null == t || t > e.length) && (t = e.length);
            for (var n = 0, r = new Array(t); n < t; n++)
                r[n] = e[n];
            return r
        }
        var b = "input:not([type=hidden]), textarea, select",
            v = function(e) {
                var t = e.querySelectorAll(b),
                    n = w(t);
                t.forEach((function(t) {
                    t.addEventListener("change", (function() {
                        var r = O(e);
                        d(r, n).then((function() {
                            _(t.closest(".form-item"))
                        })).catch((function(e) {
                            j(t, e[t.name])
                        }))
                    }))
                }))
            },
            g = function(e) {
                var t = w(e.querySelectorAll(b)),
                    n = O(e),
                    r = d(n, t);
                return r.catch((function(t) {
                    return function(e) {
                        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                        e.querySelectorAll(b).forEach((function(e) {
                            j(e, t[e.name])
                        }))
                    }(e, t)
                })), r
            };
        function y(e) {
            return e.closest(".form-item")
        }
        function w(e) {
            var t = {};
            return e.forEach((function(e) {
                e.required && (e.required = !1, e.classList.add("is-required")),
                e.disabled || (t[e.name] = l[e.dataset.name] || {}, e.classList.contains("is-required") ? t[e.name].presence = t[e.name].presence || {
                    allowEmpty: !1,
                    message: u.presence
                } : t[e.name].presence = !1)
            })), t
        }
        function O(e) {
            var t;
            if (e instanceof HTMLFormElement)
                t = new FormData(e);
            else {
                var n = document.createElement("form");
                n.appendChild(e.cloneNode(!0)),
                t = new FormData(n)
            }
            var r,
                o = {},
                a = m(t.entries());
            try {
                for (a.s(); !(r = a.n()).done;) {
                    var i = r.value;
                    o[i[0]] = i[1];
                    var c = e.querySelector('[name="'.concat(i[0], '"]')).id;
                    window[p.a].hasOwnProperty(c) && (o[i[0]] = window[p.a][c].unmaskedValue)
                }
            } catch (e) {
                a.e(e)
            } finally {
                a.f()
            }
            return o
        }
        function j(e, t) {
            try {
                var n = e.closest(".form-item"),
                    r = n.querySelector(".form-item__explain");
                _(n),
                t ? (n.classList.add("has-error"), t.forEach((function(e) {
                    return function(e, t) {
                        try {
                            var n = document.createElement("span");
                            n.classList.add("help-block"),
                            n.classList.add("error"),
                            n.innerText = t,
                            e.appendChild(n)
                        } catch (e) {}
                    }(r, e)
                }))) : n.classList.add("has-success")
            } catch (e) {}
        }
        function _(e) {
            try {
                e.classList.remove("has-error"),
                e.classList.remove("has-success"),
                e.querySelectorAll(".help-block").forEach((function(e) {
                    e.parentNode.removeChild(e)
                }))
            } catch (e) {}
        }
    },
    45: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return a
        }));
        n(5),
        n(6);
        var r = n(59);
        function o(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var a = function() {
            function e() {
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t,
                n,
                a;
            return t = e, a = [{
                key: "init",
                value: function() {
                    document.querySelectorAll(".scroll-bar").forEach((function(e) {
                        new r.a(e, {
                            autoHide: !1,
                            forceVisible: !0
                        })
                    }))
                }
            }], (n = null) && o(t.prototype, n), a && o(t, a), e
        }()
    },
    53: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return i
        }));
        n(5),
        n(6);
        var r = n(21);
        function o(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function")
        }
        function a(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var i = function() {
            function e() {
                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                o(this, e),
                this.options = {
                    classNames: t.classNames || {},
                    validator: t.validator || null,
                    target: t.target || document,
                    clickableItems: t.clickableItems || !1
                },
                this.state = {
                    currentStep: 1
                },
                this.classNames = {
                    steps: this.options.classNames.steps || "steps",
                    item: this.options.classNames.item || "steps-list__item",
                    section: this.options.classNames.section || "steps-section",
                    isCurrent: this.options.classNames.isCurrent || "is-current",
                    isCompleted: this.options.classNames.isCompleted || "is-completed"
                },
                this.node = {
                    target: this.options.target,
                    container: null,
                    items: null,
                    sections: null,
                    nextButtons: null,
                    prevButtons: null
                },
                this.nextTrigger = this.options.nextTrigger || "[data-next-trigger]",
                this.prevTrigger = this.options.prevTrigger || "[data-prev-trigger]",
                this.init()
            }
            var t,
                n,
                i;
            return t = e, (n = [{
                key: "init",
                value: function() {
                    var e = this;
                    this.node.container = this.node.target.querySelector("." + this.classNames.steps),
                    this.node.container && (this.node.items = this.node.container.querySelectorAll("." + this.classNames.item), this.node.sections = this.node.container.querySelectorAll("." + this.classNames.section), this.node.items.forEach((function(t) {
                        t.classList.contains(e.classNames.isCurrent) && (e.state.currentStep = parseInt(t.dataset.step))
                    })), this.setStep(this.state.currentStep), this.addTriggers())
                }
            }, {
                key: "addTriggers",
                value: function() {
                    var e = this;
                    this.node.nextButtons = this.node.target.querySelectorAll(this.nextTrigger),
                    this.node.prevButtons = this.node.target.querySelectorAll(this.prevTrigger),
                    this.node.nextButtons.forEach((function(t) {
                        t.onclick = function() {
                            return t.disabled || e.next()
                        }
                    })),
                    this.node.prevButtons.forEach((function(t) {
                        t.onclick = function() {
                            return e.prev()
                        }
                    })),
                    this.options.clickableItems && this.node.items.forEach((function(t) {
                        t.onclick = function() {
                            var n = e.state.currentStep,
                                r = parseInt(t.dataset.step);
                            n > r && (e.setStep(r), e.state.currentStep = r),
                            n < r && (e.options.validator ? e.next() : (e.setStep(r), e.state.currentStep = r))
                        }
                    }))
                }
            }, {
                key: "setStep",
                value: function(e) {
                    var t = this;
                    this.node.sections.forEach((function(n) {
                        parseInt(n.dataset.step) === e ? n.classList.add(t.classNames.isCurrent) : n.classList.remove(t.classNames.isCurrent)
                    })),
                    this.node.items.forEach((function(n) {
                        parseInt(n.dataset.step) < e ? (n.classList.add(t.classNames.isCompleted), n.classList.remove(t.classNames.isCurrent)) : parseInt(n.dataset.step) === e ? (n.classList.remove(t.classNames.isCompleted), n.classList.add(t.classNames.isCurrent)) : (n.classList.remove(t.classNames.isCompleted), n.classList.remove(t.classNames.isCurrent))
                    }))
                }
            }, {
                key: "next",
                value: function() {
                    var e = this,
                        t = this.state.currentStep,
                        n = this.node.items.length,
                        o = t + 1 > n ? n : t + 1;
                    this.options.validator ? this.node.sections.forEach((function(n) {
                        parseInt(n.dataset.step) === t && e.options.validator(n).then((function() {
                            e.setStep(o),
                            e.state.currentStep = o
                        })).catch((function(e) {
                            return e
                        }))
                    })) : (this.setStep(o), this.state.currentStep = o),
                    setTimeout(r.a.scale, 200)
                }
            }, {
                key: "prev",
                value: function() {
                    var e = this.state.currentStep,
                        t = e - 1 > 1 ? e - 1 : 1;
                    this.setStep(t),
                    this.state.currentStep = t,
                    setTimeout(r.a.scale, 200)
                }
            }]) && a(t.prototype, n), i && a(t, i), e
        }()
    },
    54: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return s
        })),
        n.d(t, "b", (function() {
            return u
        }));
        n(5),
        n(6);
        var r = n(116);
        function o(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))),
                n.push.apply(n, r)
            }
            return n
        }
        function a(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? o(Object(n), !0).forEach((function(t) {
                    i(e, t, n[t])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : o(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }))
            }
            return e
        }
        function i(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n, e
        }
        function c(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var s = "__MASK_INPUTS_STORE__",
            u = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t,
                    n,
                    o;
                return t = e, o = [{
                    key: "init",
                    value: function() {
                        var e = document.querySelectorAll("[data-input-mask]");
                        window[s] = {},
                        e.forEach((function(e) {
                            var t = e.dataset.inputMask,
                                n = e.id,
                                o = {};
                            if (void 0 !== e.dataset.options)
                                try {
                                    o = JSON.parse(e.dataset.options)
                                } catch (e) {}
                            var i = Object(r.a)(e, a(a({}, o), {}, {
                                mask: t
                            }));
                            n && (window[s][n] = i)
                        }))
                    }
                }], (n = null) && c(t.prototype, n), o && c(t, o), e
            }()
    },
    55: function(e, t) {},
    58: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return s
        }));
        var r = n(0),
            o = n(2),
            a = "/{locale}/banner/{position}/0/0/casino_banners_carousel.json",
            i = n(11);
        function c(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var s = function() {
            function e() {
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t,
                n,
                s;
            return t = e, s = [{
                key: "getBanners",
                value: function() {
                    var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : i.default.mainBannerPosition,
                        t = Object(o.b)(a, {
                            position: e
                        });
                    return Object(r.c)(t, {
                        method: "GET"
                    })
                }
            }], (n = null) && c(t.prototype, n), s && c(t, s), e
        }()
    },
    69: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return u
        })),
        n.d(t, "b", (function() {
            return f
        }));
        n(5),
        n(6);
        var r = n(91),
            o = n.n(r);
        function a(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))),
                n.push.apply(n, r)
            }
            return n
        }
        function i(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? a(Object(n), !0).forEach((function(t) {
                    c(e, t, n[t])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : a(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }))
            }
            return e
        }
        function c(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n, e
        }
        function s(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var u = "__CHOICES_STORE__",
            l = {
                searchEnabled: !1,
                shouldSort: !1,
                itemSelectText: "",
                classNames: {
                    containerOuter: "select",
                    containerInner: "select__inner",
                    input: "select__input",
                    inputCloned: "select__input--cloned",
                    list: "select__list",
                    listItems: "select__list--multiple",
                    listSingle: "select__list--single",
                    listDropdown: "select__list--dropdown",
                    item: "select__item",
                    itemSelectable: "select__item--selectable",
                    itemDisabled: "select__item--disabled",
                    itemChoice: "select__item--choice",
                    placeholder: "select__placeholder",
                    group: "select__group",
                    groupHeading: "select__heading",
                    button: "select__button"
                }
            },
            f = function() {
                function e() {
                    !function(e, t) {
                        if (!(e instanceof t))
                            throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t,
                    n,
                    r;
                return t = e, r = [{
                    key: "init",
                    value: function() {
                        var e = document.querySelectorAll("[data-select]");
                        window[u] = {},
                        e.forEach((function(e) {
                            var t = {},
                                n = e.id;
                            if (void 0 !== e.dataset.options)
                                try {
                                    t = JSON.parse(e.dataset.options)
                                } catch (e) {}
                            var r = new o.a(e, i(i({}, l), t));
                            n && (window[u][n] = r)
                        }))
                    }
                }], (n = null) && s(t.prototype, n), r && s(t, r), e
            }()
    },
    9: function(e, t, n) {
        "use strict";
        n.d(t, "e", (function() {
            return c
        })),
        n.d(t, "a", (function() {
            return s
        })),
        n.d(t, "c", (function() {
            return u
        })),
        n.d(t, "b", (function() {
            return l
        })),
        n.d(t, "d", (function() {
            return f
        })),
        n.d(t, "f", (function() {
            return d
        }));
        n(14),
        n(38),
        n(8),
        n(34);
        var r = n(7),
            o = n.n(r),
            a = n(0),
            i = n(3),
            c = function(e) {
                for (var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0, n = [], r = 0; r < e.length; r++) {
                    var o = e[r];
                    n.push({
                        image: encodeURI(o.imageUrl || "").replace(/'/g, "\\'"),
                        status: o.status,
                        playForRealUrl: o.playForRealUrl,
                        playForFunUrl: o.playForFunUrl,
                        title: o.name,
                        jackpotAmount: o.jackpotAmount,
                        data: JSON.stringify(o),
                        position: t + r
                    })
                }
                return n
            },
            s = function() {
                var e = /\/casino\/(.+)\/?/g.exec(window.location.pathname);
                return !!e && e[1] || null
            },
            u = function(e) {
                return -1 !== window.location.pathname.indexOf(e)
            },
            l = function(e) {
                Object(a.m)(".c-game-item", "is-active", e)
            },
            f = function(e, t) {
                return "number" == typeof t || "boolean" == typeof t ? String(t) : t
            },
            d = function(e) {
                var t = o.a.get(i.a) || [];
                t.push(e),
                o.a.set(i.a, t)
            }
    },
    92: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return r
        }));
        var r = "IOVATION_BLACKBOX"
    },
    93: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return i
        }));
        n(5),
        n(6),
        n(29);
        function r(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value" in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        var o = document.querySelector(".sidebar");
        function a(e) {
            o.contains(e.target) || i.hide()
        }
        var i = function() {
            function e() {
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t,
                n,
                i;
            return t = e, i = [{
                key: "init",
                value: function() {
                    var e = this;
                    document.querySelectorAll("[data-toggle~=sidebar]").forEach((function(t) {
                        t.addEventListener("click", (function() {
                            e.toggle()
                        }))
                    }))
                }
            }, {
                key: "toggle",
                value: function() {
                    o.classList.contains("is-open") ? this.hide() : this.show()
                }
            }, {
                key: "show",
                value: function() {
                    o.classList.add("is-open"),
                    document.body.classList.add("is-open-sidebar"),
                    setTimeout((function() {
                        document.addEventListener("click", a)
                    }), 100)
                }
            }, {
                key: "hide",
                value: function() {
                    o.classList.remove("is-open"),
                    document.body.classList.remove("is-open-sidebar"),
                    setTimeout((function() {
                        document.removeEventListener("click", a)
                    }), 100)
                }
            }], (n = null) && r(t.prototype, n), i && r(t, i), e
        }()
    },
    94: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return l
        })),
        n.d(t, "b", (function() {
            return f
        }));
        n(5),
        n(38),
        n(20),
        n(41),
        n(6),
        n(114);
        var r = n(0),
            o = n(117);
        function a(e, t, n, r, o, a, i) {
            try {
                var c = e[a](i),
                    s = c.value
            } catch (e) {
                return void n(e)
            }
            c.done ? t(s) : Promise.resolve(s).then(r, o)
        }
        var i = function() {
                var e,
                    t = (e = regeneratorRuntime.mark((function e() {
                        var t,
                            n;
                        return regeneratorRuntime.wrap((function(e) {
                            for (;;)
                                switch (e.prev = e.next) {
                                case 0:
                                    return e.next = 2, o.a.load();
                                case 2:
                                    return t = e.sent, e.next = 5, t.get();
                                case 5:
                                    return n = e.sent, e.abrupt("return", n.visitorId);
                                case 7:
                                case "end":
                                    return e.stop()
                                }
                        }), e)
                    })), function() {
                        var t = this,
                            n = arguments;
                        return new Promise((function(r, o) {
                            var i = e.apply(t, n);
                            function c(e) {
                                a(i, r, o, c, s, "next", e)
                            }
                            function s(e) {
                                a(i, r, o, c, s, "throw", e)
                            }
                            c(void 0)
                        }))
                    });
                return function() {
                    return t.apply(this, arguments)
                }
            }(),
            c = n(12),
            s = n(43);
        function u(e, t, n, r, o, a, i) {
            try {
                var c = e[a](i),
                    s = c.value
            } catch (e) {
                return void n(e)
            }
            c.done ? t(s) : Promise.resolve(s).then(r, o)
        }
        var l = function() {
                document.querySelectorAll(".c-ajax-form").forEach((function(e) {
                    Object(s.c)(e),
                    e.onsubmit = function(t) {
                        t.preventDefault(),
                        Object(s.a)(e).then((function() {
                            return f(e)
                        })).catch((function(e) {
                            return console.log(e)
                        }))
                    }
                }))
            },
            f = function() {
                var e,
                    t = (e = regeneratorRuntime.mark((function e(t) {
                        var n,
                            o,
                            a,
                            s,
                            u;
                        return regeneratorRuntime.wrap((function(e) {
                            for (;;)
                                switch (e.prev = e.next) {
                                case 0:
                                    if (t.classList.add("is-loading"), n = t.action, o = t.method, a = new FormData(t), "true" !== t.dataset.fp) {
                                        e.next = 9;
                                        break
                                    }
                                    return e.next = 7, i();
                                case 7:
                                    s = e.sent,
                                    a.append("".concat(t.name, "[_fpid]"), s);
                                case 9:
                                    return u = {
                                        method: o,
                                        body: a
                                    }, e.abrupt("return", Object(r.c)(n, u).then((function(e) {
                                        if ("SUCCESS" === e.status && t.dataset.redirectUrl) {
                                            var n = t.dataset.redirectDelay || 2;
                                            setTimeout((function() {
                                                window.location.href = t.dataset.redirectUrl
                                            }), 1e3 * n)
                                        }
                                        return Object(r.b)(c.a, e), t.classList.remove("is-loading"), e
                                    })).catch((function(e) {
                                        return Object(r.b)(c.a, e), t.classList.remove("is-loading"), e
                                    })));
                                case 11:
                                case "end":
                                    return e.stop()
                                }
                        }), e)
                    })), function() {
                        var t = this,
                            n = arguments;
                        return new Promise((function(r, o) {
                            var a = e.apply(t, n);
                            function i(e) {
                                u(a, r, o, i, c, "next", e)
                            }
                            function c(e) {
                                u(a, r, o, i, c, "throw", e)
                            }
                            i(void 0)
                        }))
                    });
                return function(e) {
                    return t.apply(this, arguments)
                }
            }()
    }
});
//# sourceMappingURL=common.js.map
