! function(e) {
    function t(t) {
        for (var r, a, c = t[0], u = t[1], s = t[2], f = 0, d = []; f < c.length; f++) a = c[f], Object.prototype.hasOwnProperty.call(o, a) && o[a] && d.push(o[a][0]), o[a] = 0;
        for (r in u) Object.prototype.hasOwnProperty.call(u, r) && (e[r] = u[r]);
        for (l && l(t); d.length;) d.shift()();
        return i.push.apply(i, s || []), n()
    }

    function n() {
        for (var e, t = 0; t < i.length; t++) {
            for (var n = i[t], r = !0, c = 1; c < n.length; c++) {
                var u = n[c];
                0 !== o[u] && (r = !1)
            }
            r && (i.splice(t--, 1), e = a(a.s = n[0]))
        }
        return e
    }
    var r = {},
        o = {
            4: 0
        },
        i = [];

    function a(t) {
        if (r[t]) return r[t].exports;
        var n = r[t] = {
            i: t,
            l: !1,
            exports: {}
        };
        return e[t].call(n.exports, n, n.exports, a), n.l = !0, n.exports
    }
    a.m = e, a.c = r, a.d = function(e, t, n) {
        a.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    }, a.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, a.t = function(e, t) {
        if (1 & t && (e = a(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (a.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var r in e) a.d(n, r, function(t) {
                return e[t]
            }.bind(null, r));
        return n
    }, a.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return a.d(t, "a", t), t
    }, a.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, a.p = "/assets/";
    var c = window.webpackJsonp = window.webpackJsonp || [],
        u = c.push.bind(c);
    c.push = t, c = c.slice();
    for (var s = 0; s < c.length; s++) t(c[s]);
    var l = u;
    i.push([255, 0]), n()
}({
    0: function(e, t, n) {
        "use strict";
        n.d(t, "c", (function() {
            return l
        })), n.d(t, "e", (function() {
            return f
        })), n.d(t, "d", (function() {
            return m
        })), n.d(t, "n", (function() {
            return y
        })), n.d(t, "g", (function() {
            return P
        })), n.d(t, "h", (function() {
            return q
        })), n.d(t, "f", (function() {
            return A
        })), n.d(t, "i", (function() {
            return R
        })), n.d(t, "m", (function() {
            return w
        })), n.d(t, "b", (function() {
            return O
        })), n.d(t, "j", (function() {
            return j
        })), n.d(t, "l", (function() {
            return T
        })), n.d(t, "k", (function() {
            return L
        })), n.d(t, "a", (function() {
            return k
        }));
        n(26), n(8), n(31), n(13);
        var r = n(11),
            o = (n(14), n(20), n(41), n(25), n(16), void 0),
            i = function(e, t, n) {
                var r = null,
                    i = !1;
                try {
                    r = JSON.parse(t), i = !0
                } catch (e) {
                    r = t
                }
                o.response = r, o.message = e, o.status = n, o.toString = function() {
                    return "".concat(this.message, "\nResponse:\n").concat(i ? JSON.stringify(this.response, null, 2) : this.response)
                }
            };

        function a(e) {
            return (a = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
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
                }))), n.push.apply(n, r)
            }
            return n
        }

        function u(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? c(Object(n), !0).forEach((function(t) {
                    s(e, t, n[t])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : c(Object(n)).forEach((function(t) {
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
        var l = function(e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    n = {
                        credentials: "same-origin"
                    },
                    r = {
                        "X-Requested-With": "XMLHttpRequest"
                    },
                    o = u(u(u({}, n), t), {}, {
                        headers: u(u({}, r), t.headers)
                    }),
                    c = o.body instanceof File,
                    s = o.body instanceof FormData,
                    l = "object" === a(o.body);
                o.body && l && !c && !s && (o.body = JSON.stringify(o.body));
                var f = null;
                return fetch(e, o).then((function(e) {
                    return -1 !== [200, 201, 301, 302, 400, 403].indexOf((f = e).status) ? f.json() : f.text()
                })).catch((function(e) {
                    throw f ? new i("Request failed with status ".concat(f.status, "."), e, f.status) : new i(e.toString(), null, "REQUEST_FAILED")
                }))
            },
            f = function(e) {
                var t = document.getElementById(e);
                if (t) return t.innerHTML;
                throw new Error('Template "'.concat(e, '" not found.'))
            },
            d = {
                TRY: "₺",
                USD: "$",
                EUR: "€"
            },
            m = function(e) {
                return void 0 !== d[e] ? d[e] : e
            },
            p = n(7),
            h = n.n(p);

        function g(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))), n.push.apply(n, r)
            }
            return n
        }

        function b(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? g(Object(n), !0).forEach((function(t) {
                    v(e, t, n[t])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : g(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }))
            }
            return e
        }

        function v(e, t, n) {
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
                    return h.a.set("USER_DATA", b(b({}, e), {}, {
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
                P && n.querySelectorAll(e).forEach((function(e) {
                    if (!e.classList.contains("is-touchable")) {
                        var n = function() {
                                e.classList.remove(t), document.removeEventListener("click", r)
                            },
                            r = function(t) {
                                e.contains(t.target) || n()
                            };
                        e.addEventListener("click", (function() {
                            e.classList.add(t), setTimeout((function() {
                                document.addEventListener("click", r)
                            }), 100)
                        })), e.classList.add("is-touchable")
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
            j = new(n(39).a)({
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
            E = n(18),
            S = n(4);
        E.defineFilter("trans", (function(e) {
            return Object(S.a)(e)
        }));
        var k = E,
            T = function(e) {
                var t = e.systemMessages,
                    n = function(e) {
                        t[e].forEach((function(t) {
                            "errors" === e ? j.error(t) : j.success(t)
                        }))
                    };
                for (var r in t) n(r)
            },
            L = function(e) {
                e.requestFullscreen ? e.requestFullscreen() : e.webkitRequestFullscreen ? e.webkitRequestFullscreen() : e.mozRequestFullScreen ? e.mozRequestFullScreen() : e.msRequestFullscreen ? e.msRequestFullscreen() : j.error("Fullscreen API is not supported by your browser!")
            },
            P = (/^((?!chrome|android).)*safari/i.test(navigator.userAgent), "ontouchstart" in document.documentElement),
            R = window.location.pathname.split("/")[1] || r.default.defaultLocale,
            A = function() {
                return window.innerWidth > 1e3
            },
            q = window.location.hostname.includes("vip") || window.location.hostname.includes("stg")
    },
    1: function(e, t, n) {
        "use strict";
        n.d(t, "k", (function() {
            return r
        })), n.d(t, "l", (function() {
            return o
        })), n.d(t, "i", (function() {
            return i
        })), n.d(t, "j", (function() {
            return a
        })), n.d(t, "c", (function() {
            return c
        })), n.d(t, "d", (function() {
            return u
        })), n.d(t, "h", (function() {
            return s
        })), n.d(t, "n", (function() {
            return l
        })), n.d(t, "b", (function() {
            return f
        })), n.d(t, "f", (function() {
            return d
        })), n.d(t, "g", (function() {
            return m
        })), n.d(t, "e", (function() {
            return p
        })), n.d(t, "a", (function() {
            return h
        })), n.d(t, "m", (function() {
            return g
        }));
        var r = "modal-sign-up",
            o = "modal-sign-up-finalize",
            i = "modal-sign-in",
            a = "modal-sign-in-tfa",
            c = "modal-confirm-email",
            u = "modal-forgot-password",
            s = "modal-reset-password",
            l = "modal-welcome",
            f = "modal-bet-details",
            d = "modal-ios-add-to-home",
            m = "modal-pwa-qr",
            p = "modal-iframe-game",
            h = "modal-active-bonus",
            g = "modal-terms"
    },
    10: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return m
        }));
        n(5), n(14), n(8), n(13), n(6);
        var r = n(22),
            o = n(1),
            i = n(0),
            a = n(21),
            c = n(27);

        function u(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }
        var s = [o.i, o.k],
            l = [o.i, o.k],
            f = {
                ignoreCloseClick: !1
            };
        var d = {
                onShow: function(e) {
                    if (document.querySelectorAll(".modal.is-open").forEach((function(t) {
                            e.id !== t.id && (t.classList.remove("is-open"), t.setAttribute("aria-hidden", "true"))
                        })), -1 !== l.indexOf(e.id) && a.a.scale(), e.id === o.k || e.id === o.m) try {
                        $zopim.livechat.button.hide()
                    } catch (e) {}
                },
                onClose: function(e) {
                    if (history.pushState("", "", location.href.split("#")[0]), e.id === o.e && (document.getElementById(e.id).querySelector("#modal-iframe-game-content").innerHTML = ""), e.id === o.k || e.id === o.m) try {
                        $zopim.livechat.button.show()
                    } catch (e) {}
                    try {
                        Object(c.a)() || $zopim.livechat.button.show()
                    } catch (e) {}
                },
                openTrigger: "data-show-modal",
                closeTrigger: "data-modal-close",
                disableScroll: !0,
                disableFocus: !1,
                awaitOpenAnimation: !1,
                awaitCloseAnimation: !0,
                debugMode: !1
            },
            m = function() {
                function e() {
                    ! function(e, t) {
                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t, n, a;
                return t = e, a = [{
                    key: "init",
                    value: function() {
                        var e = this;
                        r.default.init(d), this.checkHash(), this.checkOverlayClick(), "onhashchange" in window && window.addEventListener("hashchange", (function() {
                            e.checkHash()
                        }))
                    }
                }, {
                    key: "show",
                    value: function(e) {
                        -1 !== s.indexOf(e) && i.n.isAuthed() || r.default.show(e, d)
                    }
                }, {
                    key: "close",
                    value: function(e) {
                        var t = i.n.isAuthed();
                        i.h && !t || e !== o.m && r.default.close(e, d)
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
                            })), t.addEventListener("click", (function(n) {
                                n.target.classList.contains("modal__overlay") && (f.ignoreCloseClick ? f.ignoreCloseClick = !1 : e.close(t.id))
                            }))
                        }))
                    }
                }], (n = null) && u(t.prototype, n), a && u(t, a), e
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
    12: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return r
        })), n.d(t, "b", (function() {
            return o
        })), n.d(t, "c", (function() {
            return i
        })), n.d(t, "d", (function() {
            return a
        }));
        var r = "EVENT_AJAX_FORM",
            o = "EVENT_LOGOUT",
            i = "EVENT_USER_LOGIN",
            a = "EVENT_USER_REGISTER"
    },
    144: function(e, t, n) {
        "use strict";
        var r = n(0),
            o = n(2);

        function i(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }
        var a = function() {
                function e() {
                    ! function(e, t) {
                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                    }(this, e)
                }
                var t, n, a;
                return t = e, a = [{
                    key: "getWinnerList",
                    value: function() {
                        var e = {
                            period: 1,
                            size: 50
                        };
                        return Object(r.c)(Object(o.b)("/{locale}/games/stat/game-winner-list?period={period}&size={size}", e), {
                            method: "GET"
                        })
                    }
                }], (n = null) && i(t.prototype, n), a && i(t, a), e
            }(),
            c = (n(35), n(113), n(8), n(13), n(11)),
            u = c.default.winners.limit,
            s = {
                separator: " ",
                precision: 0
            },
            l = function(e) {
                for (var t = [], n = e.length > u ? u : e.length, i = 0; i < n; i++) {
                    var a = e[i],
                        l = Object(o.a)(a.amountWon, s).format(),
                        d = Object(r.d)(a.currencySymbol);
                    t.push({
                        image: a.imageUrl,
                        url: a.playForRealUrl,
                        playerName: c.default.winners.hideNames ? f(a.playerName) : a.playerName,
                        gameName: a.gameName,
                        currencySymbol: d,
                        amount: l
                    })
                }
                return t
            },
            f = function(e) {
                return e.split("").map((function(e, t) {
                    return t > 0 && " " !== e ? "*" : e
                })).join("")
            },
            d = n(10),
            m = n(1),
            p = n(18),
            h = Object(r.e)("winners-template"),
            g = {
                list: document.querySelector(".c-winners-list")
            };
        g.list && (a.getWinnerList().then((function(e) {
            g.list.innerHTML = p.Render(h, {
                list: l(e.winners)
            }), g.list.classList.remove("skeleton")
        })).catch((function(e) {
            return console.log(e)
        })), g.list.onclick = function(e) {
            r.n.isAuthed() || (e.preventDefault(), d.a.show(m.i))
        })
    },
    145: function(e, t, n) {
        "use strict";
        var r = n(80),
            o = n(58),
            i = n(9),
            a = n(0),
            c = {
                slider: document.querySelector(".c-main-slider"),
                list: document.querySelector(".c-banner-list")
            },
            u = {
                banners: []
            },
            s = Object(a.e)("banner-item-template"),
            l = Object(i.a)(),
            f = null;
        if (c.slider) {
            var d = function() {
                    f = new r.a(c.slider, h)
                },
                m = function() {
                    f && f.destroy(), c.list.innerHTML = a.a.Render(s, {
                        list: u.banners
                    }), d()
                },
                p = c.slider.querySelector(".c-button-prev"),
                h = {
                    slidesPerView: "auto",
                    loop: !0,
                    autoplay: {
                        delay: 3e3,
                        disableOnInteraction: !0
                    },
                    lazy: {
                        loadPrevNext: !0
                    },
                    navigation: {
                        nextEl: c.slider.querySelector(".c-button-next"),
                        prevEl: p
                    },
                    pagination: {
                        type: "bullets",
                        clickable: !0,
                        el: c.slider.querySelector(".c-pagination")
                    }
                };
            d(), l && o.a.getBanners(l).then((function(e) {
                u.banners = e.banners, u.banners.length && m()
            }))
        }
    },
    15: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return l
        }));
        var r = n(36),
            o = n.n(r),
            i = n(0),
            a = n(2),
            c = n(9),
            u = n(3);

        function s(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }
        var l = function() {
            function e() {
                ! function(e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t, n, r;
            return t = e, r = [{
                key: "getCasinoGames",
                value: function(e, t) {
                    var n = Object(a.b)(u.e, {
                            slug: e
                        }),
                        r = t ? "?" + o.a.stringify(t) : "";
                    return Object(i.c)(n + r, {
                        method: "GET"
                    })
                }
            }, {
                key: "getSearchGames",
                value: function(e) {
                    var t = Object(a.b)(u.f),
                        n = e ? "?" + o.a.stringify(e) : "";
                    return Object(i.c)(t + n, {
                        method: "GET"
                    })
                }
            }, {
                key: "getGameTags",
                value: function(e) {
                    var t = Object(a.b)(u.g, {
                        slug: e
                    });
                    return Object(i.c)(t, {
                        method: "GET"
                    })
                }
            }, {
                key: "getRecentlyPlayed",
                value: function() {
                    var e = Object(a.b)(u.i);
                    return Object(i.c)(e, {
                        method: "GET"
                    })
                }
            }, {
                key: "sendFeedback",
                value: function(e) {
                    var t = Object(a.b)(u.h);
                    return Object(i.c)(t, {
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
                    var e = Object(a.b)(u.j);
                    return Object(i.c)(e, {
                        method: "GET"
                    })
                }
            }], (n = null) && s(t.prototype, n), r && s(t, r), e
        }()
    },
    2: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return l
        })), n.d(t, "b", (function() {
            return d
        }));
        n(16), n(64), n(57), n(65), n(8), n(25), n(34), n(13);
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
            i = function(e) {
                return Math.pow(10, e)
            },
            a = /(\d)(?=(\d{3})+\b)/g,
            c = /(\d)(?=(\d\d)+\d\b)/g;

        function u(e, t) {
            if (!(this instanceof u)) return new u(e, t);
            var n = Object.assign({}, r, t),
                o = i(n.precision),
                l = s(e, n);
            this.intValue = l, this.value = l / o, n.increment = n.increment || 1 / o, n.useVedic ? n.groups = c : n.groups = a, this.s = n, this.p = o
        }

        function s(e, t) {
            var n = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2],
                r = 0,
                a = t.decimal,
                c = t.errorOnInvalid,
                s = t.precision,
                l = i(s),
                f = "number" == typeof e;
            if (f || e instanceof u) r = (f ? e : e.value) * l;
            else if ("string" == typeof e) {
                var d = new RegExp("[^-\\d" + a + "]", "g"),
                    m = new RegExp("\\" + a, "g");
                r = (r = e.replace(/\((.*)\)/, "-$1").replace(d, "").replace(m, ".") * l) || 0
            } else {
                if (c) throw Error("Invalid Input");
                r = 0
            }
            return r = r.toFixed(4), n ? o(r) : r
        }
        u.prototype = {
            add: function(e) {
                var t = this.intValue,
                    n = this.s,
                    r = this.p;
                return u((t += s(e, n)) / r, n)
            },
            subtract: function(e) {
                var t = this.intValue,
                    n = this.s,
                    r = this.p;
                return u((t -= s(e, n)) / r, n)
            },
            multiply: function(e) {
                var t = this.intValue,
                    n = this.s;
                return u((t *= e) / i(n.precision), n)
            },
            divide: function(e) {
                var t = this.intValue,
                    n = this.s;
                return u(t /= s(e, n, !1), n)
            },
            distribute: function(e) {
                for (var t = this.intValue, n = this.p, r = this.s, o = [], i = Math[t >= 0 ? "floor" : "ceil"](t / e), a = Math.abs(t - i * e); 0 !== e; e--) {
                    var c = u(i / n, r);
                    a-- > 0 && (c = t >= 0 ? c.add(1 / n) : c.subtract(1 / n)), o.push(c)
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
                    i = t.symbol,
                    a = t.separator,
                    c = t.decimal,
                    u = t.groups,
                    s = (this + "").replace(/^-/, "").split("."),
                    l = s[0],
                    f = s[1];
                return void 0 === e && (e = o), (this.value >= 0 ? n : r).replace("!", e ? i : "").replace("#", "".concat(l.replace(u, "$1" + a)).concat(f ? c + f : ""))
            },
            toString: function() {
                var e, t, n = this.intValue,
                    r = this.p,
                    i = this.s;
                return (e = n / r, t = i.increment, o(e / t) * t).toFixed(i.precision)
            },
            toJSON: function() {
                return this.value
            }
        };
        var l = u,
            f = (n(35), n(0)),
            d = function(e, t) {
                for (var n in (t = t || {}).locale = f.i, t) e = e.split("{" + n + "}").join(t[n]);
                return e
            }
    },
    21: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return o
        }));
        n(5), n(6);

        function r(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }
        var o = function() {
            function e() {
                ! function(e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t, n, o;
            return t = e, o = [{
                key: "init",
                value: function() {
                    this.scale(), window.addEventListener("resize", this.scale)
                }
            }, {
                key: "scale",
                value: function() {
                    document.querySelectorAll(".g-recaptcha").forEach((function(e) {
                        var t = e.parentNode.offsetWidth,
                            n = t / 304;
                        e.style.transform = "scale(" + n + ")", e.style.transformOrigin = "left top", e.style.marginBottom = t > 304 ? "36px" : "-20px"
                    }))
                }
            }], (n = null) && r(t.prototype, n), o && r(t, o), e
        }()
    },
    255: function(e, t, n) {
        e.exports = n(274)
    },
    27: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return r
        }));
        n(26), n(31);
        var r = function() {
            return window.location.pathname.includes("/sportsbook") || window.location.pathname.includes("/in-play") || window.location.pathname.includes("/e-sports")
        }
    },
    274: function(e, t, n) {
        "use strict";
        n.r(t);
        n(145), n(144), n(5), n(6);
        var r = n(0),
            o = n(12),
            i = n(15),
            a = n(3),
            c = n(9),
            u = n(80),
            s = Object(r.e)("game-item-template"),
            l = {
                sliders: document.querySelectorAll(".c-game-slider"),
                buttonPrev: ".c-button-prev",
                buttonNext: ".c-button-next",
                list: ".c-game-slider-list"
            },
            f = {
                "filter[limit]": 30,
                "filter[country]": "UA"
            };
        l.sliders.length && l.sliders.forEach((function(e) {
            var t = e.querySelector(l.buttonPrev),
                n = e.querySelector(l.buttonNext),
                d = e.querySelector(l.list),
                m = e.dataset.slider;

            function p() {
                d.classList.remove("skeleton"), new u.a(e.querySelector(".swiper-container"), {
                    slidesPerView: "auto",
                    lazy: {
                        loadPrevNext: !0,
                        loadPrevNextAmount: 7
                    },
                    navigation: {
                        nextEl: n,
                        prevEl: t
                    }
                }), Object(c.b)(d)
            }

            function h() {
                r.n.isAuthed() ? i.a.getRecommendedGames().then((function(e) {
                    e.casino && e.casino.length ? (d.innerHTML = r.a.Render(s, {
                        list: Object(c.e)(e.casino)
                    }), p()) : i.a.getCasinoGames(a.d, f).then((function(e) {
                        d.innerHTML = r.a.Render(s, {
                            list: Object(c.e)(e.casino)
                        }), p()
                    })).catch((function(e) {
                        return console.log(e)
                    }))
                })).catch((function(e) {
                    return console.log(e)
                })) : i.a.getCasinoGames(a.d, f).then((function(e) {
                    d.innerHTML = r.a.Render(s, {
                        list: Object(c.e)(e.casino)
                    }), p()
                })).catch((function(e) {
                    return console.log(e)
                }))
            }
            m !== a.d ? i.a.getCasinoGames(m, f).then((function(e) {
                d.innerHTML = r.a.Render(s, {
                    list: Object(c.e)(e.casino)
                }), p()
            })).catch((function(e) {
                return console.log(e)
            })) : m === a.d && (h(), window.addEventListener(o.c, (function() {
                setTimeout((function() {
                    h()
                }), 1e3)
            })), window.addEventListener(o.b, (function() {
                h()
            })))
        }));
        n(90)
    },
    29: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return r
        })), n.d(t, "b", (function() {
            return o
        }));
        n(16);
        var r = function(e, t) {
                for (var n = arguments.length, r = new Array(n > 2 ? n - 2 : 0), o = 2; o < n; o++) r[o - 2] = arguments[o];
                var i = function() {
                        return a = !0
                    },
                    a = !0;
                return function(n) {
                    a && (a = !1, setTimeout(i, t), e.apply(void 0, [n].concat(r)))
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
        })), n.d(t, "f", (function() {
            return o
        })), n.d(t, "g", (function() {
            return i
        })), n.d(t, "i", (function() {
            return a
        })), n.d(t, "h", (function() {
            return c
        })), n.d(t, "j", (function() {
            return u
        })), n.d(t, "b", (function() {
            return s
        })), n.d(t, "c", (function() {
            return l
        })), n.d(t, "d", (function() {
            return f
        })), n.d(t, "a", (function() {
            return d
        })), n.d(t, "k", (function() {
            return m
        }));
        var r = "/{locale}/casino/{slug}.json",
            o = "/{locale}/games/search.json",
            i = "/{locale}/casino/gametag/categories-for-game-category/{slug}",
            a = "/{locale}/profile/recently-played.json",
            c = "/{locale}/games/feedback",
            u = "/{locale}/games/recommended.json",
            s = 16,
            l = "most-popular",
            f = "recommended",
            d = "FEEDBACK_STACK",
            m = {
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
            return a
        })), n.d(t, "a", (function() {
            return c
        }));
        n(35), n(8), n(13);
        var r = n(0),
            o = n(2),
            i = "__TRANSLATION_STORE__",
            a = function() {
                Object(r.c)(Object(o.b)("/{locale}/translation")).then((function(e) {
                    return window[i] = e.translations[r.i]
                })).catch((function(e) {
                    return console.log(e)
                }))
            },
            c = function(e, t) {
                var n = window[i] && window[i][e] || e;
                for (var r in t || {}) n = (n = n.split("%" + r + "%").join(t[r])).split("{" + r + "}").join(t[r]);
                return n
            }
    },
    45: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return i
        }));
        n(5), n(6);
        var r = n(59);

        function o(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }
        var i = function() {
            function e() {
                ! function(e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t, n, i;
            return t = e, i = [{
                key: "init",
                value: function() {
                    document.querySelectorAll(".scroll-bar").forEach((function(e) {
                        new r.a(e, {
                            autoHide: !1,
                            forceVisible: !0
                        })
                    }))
                }
            }], (n = null) && o(t.prototype, n), i && o(t, i), e
        }()
    },
    55: function(e, t) {},
    58: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return u
        }));
        var r = n(0),
            o = n(2),
            i = "/{locale}/banner/{position}/0/0/casino_banners_carousel.json",
            a = n(11);

        function c(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }
        var u = function() {
            function e() {
                ! function(e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var t, n, u;
            return t = e, u = [{
                key: "getBanners",
                value: function() {
                    var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : a.default.mainBannerPosition,
                        t = Object(o.b)(i, {
                            position: e
                        });
                    return Object(r.c)(t, {
                        method: "GET"
                    })
                }
            }], (n = null) && c(t.prototype, n), u && c(t, u), e
        }()
    },
    9: function(e, t, n) {
        "use strict";
        n.d(t, "e", (function() {
            return c
        })), n.d(t, "a", (function() {
            return u
        })), n.d(t, "c", (function() {
            return s
        })), n.d(t, "b", (function() {
            return l
        })), n.d(t, "d", (function() {
            return f
        })), n.d(t, "f", (function() {
            return d
        }));
        n(14), n(38), n(8), n(34);
        var r = n(7),
            o = n.n(r),
            i = n(0),
            a = n(3),
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
            u = function() {
                var e = /\/casino\/(.+)\/?/g.exec(window.location.pathname);
                return !!e && e[1] || null
            },
            s = function(e) {
                return -1 !== window.location.pathname.indexOf(e)
            },
            l = function(e) {
                Object(i.m)(".c-game-item", "is-active", e)
            },
            f = function(e, t) {
                return "number" == typeof t || "boolean" == typeof t ? String(t) : t
            },
            d = function(e) {
                var t = o.a.get(a.a) || [];
                t.push(e), o.a.set(a.a, t)
            }
    },
    90: function(e, t, n) {
        "use strict";
        n(5), n(26), n(14), n(89), n(38), n(143), n(8), n(31), n(76), n(6);
        var r = n(0),
            o = n(29),
            i = n(15),
            a = n(9),
            c = n(3),
            u = n(12),
            s = n(45),
            l = n(79),
            f = n.n(l),
            d = Object(r.e)("game-item-template"),
            m = Object(a.a)(),
            p = {
                list: document.querySelector(".c-game-list"),
                search: document.querySelector(".c-search-input"),
                searchToggle: document.querySelector(".c-game-search-toggle"),
                footer: document.querySelector(".footer"),
                platforms: document.querySelectorAll(".c-game-platform-item"),
                noResults: document.querySelector(".c-no-results-message"),
                tags: document.querySelector(".c-game-filter-tags"),
                tagsItemSelector: ".c-game-filter-tags-item"
            },
            h = {
                "filter[limit]": 9999,
                "filter[country]": "UA"
            },
            g = {
                games: [],
                searchGames: [],
                originalGames: [],
                filteredGames: [],
                step: 0
            },
            b = null;
        if (p.list && (location.href.includes("casino") && !m && location.assign(location.pathname + "/" + c.d), y(), i.a.getSearchGames(h).then((function(e) {
                g.searchGames = e.casino, b = new f.a(g.searchGames, c.k)
            })), p.tags)) {
            var v = Object(r.e)("game-filter-tags-template");
            i.a.getGameTags("slots").then((function(e) {
                e.gameTagCategories.forEach((function(e) {
                    var t = r.a.Render(v, {
                        title: e.name,
                        list: e.gameTags
                    });
                    p.tags.insertAdjacentHTML("beforeend", t)
                })), document.querySelectorAll(p.tagsItemSelector).forEach((function(e) {
                    e.onchange = function() {
                        return w()
                    }
                })), s.a.init()
            }))
        }

        function y() {
            r.n.isAuthed() && m === c.d ? i.a.getRecommendedGames().then((function(e) {
                e.casino && e.casino.length ? (g.games = e.casino, E(), j()) : i.a.getCasinoGames(m, h).then((function(e) {
                    g.games = e.casino, E(), j()
                })).catch((function(e) {
                    return console.log(e)
                }))
            })).catch((function(e) {
                return console.log(e)
            })) : i.a.getCasinoGames(m, h).then((function(e) {
                g.games = e.casino, E(), j()
            })).catch((function(e) {
                return console.log(e)
            }))
        }

        function w() {
            var e = document.querySelectorAll(p.tagsItemSelector),
                t = [],
                n = [],
                o = [],
                i = g.games;
            e.forEach((function(e) {
                e.checked && t.push(e.value)
            })), p.platforms.length && p.platforms.forEach((function(e) {
                var t = e.querySelector("input");
                t.checked && n.push(t.value)
            })), 0 === t.length && 0 === n.length && (g.step = 0, E(), document.addEventListener("scroll", O)), 0 !== n.length && (i = [], g.games.forEach((function(e) {
                n.includes(e.platformCode) && i.push(e)
            }))), 0 !== t.length ? i.forEach((function(e) {
                e.gameTags.forEach((function(n) {
                    t.includes(n) && o.push(e)
                }))
            })) : o = i, p.list.innerHTML = r.a.Render(d, {
                list: Object(a.e)(o)
            }), Object(a.b)(p.list), document.removeEventListener("scroll", O)
        }

        function O() {
            var e = window.innerHeight,
                t = document.body.clientHeight,
                n = p.footer.clientHeight;
            window.scrollY > t - e - n && S()
        }

        function j() {
            var e = {};
            p.platforms.forEach((function(t) {
                t.dataset.platformCode && (e[t.dataset.platformCode] = !1)
            })), g.games.forEach((function(t) {
                -1 !== Object.keys(e).indexOf(t.platformCode) && (e[t.platformCode] = !0)
            })), p.platforms.forEach((function(t) {
                t.dataset.platformCode && !e[t.dataset.platformCode] && (t.parentNode.style.display = "none")
            }))
        }

        function E() {
            var e = g.step * c.b,
                t = e + c.b,
                n = g.games.sort((function(e, t) {
                    return t.zingScore - e.zingScore
                })).slice(e, t),
                o = r.a.Render(d, {
                    list: Object(a.e)(n, e)
                });
            0 === g.step ? (p.list.innerHTML = o, p.list.classList.remove("skeleton"), document.addEventListener("scroll", O)) : p.list.insertAdjacentHTML("beforeend", o), g.step * c.b >= g.games.length && document.removeEventListener("scroll", O), Object(a.b)(p.list)
        }
        var S = Object(o.a)((function() {
            g.step = g.step + 1, E()
        }), 250);
        p.search.onkeyup = function(e) {
            var t = e.target.value,
                n = b.search(t);
            p.list.innerHTML = r.a.Render(d, {
                list: Object(a.e)(n)
            }), "" === t ? (g.step = 0, E()) : Object(a.b)(p.list), p.noResults.style.display = 0 === n.length && t.length > c.k.minMatchCharLength ? "" : "none", p.list && (p.list.dataset.category = n.length > 0 ? "search" : "")
        }, p.platforms.forEach((function(e) {
            e.querySelector("input").onchange = function() {
                return w()
            }
        })), window.addEventListener(u.c, (function() {
            setTimeout((function() {
                g.step = 0, y()
            }), 1e3)
        }))
    }
});
//# sourceMappingURL=home.js.map