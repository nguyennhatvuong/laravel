/*! Pickr 1.8.1 MIT | https://github.com/Simonwep/pickr */
!(function (t, e) {
    "object" == typeof exports && "object" == typeof module ? (module.exports = e()) : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? (exports.Pickr = e()) : (t.Pickr = e());
})(window, function () {
    return (function (t) {
        var e = {};
        function r(n) {
            if (e[n]) return e[n].exports;
            var o = (e[n] = { i: n, l: !1, exports: {} });
            return t[n].call(o.exports, o, o.exports, r), (o.l = !0), o.exports;
        }
        return (
            (r.m = t),
            (r.c = e),
            (r.d = function (t, e, n) {
                r.o(t, e) || Object.defineProperty(t, e, { enumerable: !0, get: n });
            }),
            (r.r = function (t) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(t, "__esModule", { value: !0 });
            }),
            (r.t = function (t, e) {
                if ((1 & e && (t = r(t)), 8 & e)) return t;
                if (4 & e && "object" == typeof t && t && t.__esModule) return t;
                var n = Object.create(null);
                if ((r.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: t }), 2 & e && "string" != typeof t))
                    for (var o in t)
                        r.d(
                            n,
                            o,
                            function (e) {
                                return t[e];
                            }.bind(null, o)
                        );
                return n;
            }),
            (r.n = function (t) {
                var e =
                    t && t.__esModule
                        ? function () {
                              return t.default;
                          }
                        : function () {
                              return t;
                          };
                return r.d(e, "a", e), e;
            }),
            (r.o = function (t, e) {
                return Object.prototype.hasOwnProperty.call(t, e);
            }),
            (r.p = ""),
            r((r.s = 140))
        );
    })([
        function (t, e, r) {
            var n = r(3),
                o = r(14).f,
                i = r(13),
                a = r(16),
                c = r(44),
                u = r(77),
                s = r(82);
            t.exports = function (t, e) {
                var r,
                    l,
                    f,
                    p,
                    v,
                    h = t.target,
                    d = t.global,
                    g = t.stat;
                if ((r = d ? n : g ? n[h] || c(h, {}) : (n[h] || {}).prototype))
                    for (l in e) {
                        if (((p = e[l]), (f = t.noTargetGet ? (v = o(r, l)) && v.value : r[l]), !s(d ? l : h + (g ? "." : "#") + l, t.forced) && void 0 !== f)) {
                            if (typeof p == typeof f) continue;
                            u(p, f);
                        }
                        (t.sham || (f && f.sham)) && i(p, "sham", !0), a(r, l, p, t);
                    }
            };
        },
        function (t, e) {
            t.exports = function (t) {
                try {
                    return !!t();
                } catch (t) {
                    return !0;
                }
            };
        },
        function (t, e, r) {
            var n = r(3),
                o = r(31),
                i = r(5),
                a = r(46),
                c = r(51),
                u = r(84),
                s = o("wks"),
                l = n.Symbol,
                f = u ? l : (l && l.withoutSetter) || a;
            t.exports = function (t) {
                return (i(s, t) && (c || "string" == typeof s[t])) || (c && i(l, t) ? (s[t] = l[t]) : (s[t] = f("Symbol." + t))), s[t];
            };
        },
        function (t, e, r) {
            (function (e) {
                var r = function (t) {
                    return t && t.Math == Math && t;
                };
                t.exports =
                    r("object" == typeof globalThis && globalThis) ||
                    r("object" == typeof window && window) ||
                    r("object" == typeof self && self) ||
                    r("object" == typeof e && e) ||
                    (function () {
                        return this;
                    })() ||
                    Function("return this")();
            }.call(this, r(108)));
        },
        function (t, e, r) {
            var n = r(7);
            t.exports = function (t) {
                if (!n(t)) throw TypeError(String(t) + " is not an object");
                return t;
            };
        },
        function (t, e, r) {
            var n = r(12),
                o = {}.hasOwnProperty;
            t.exports = function (t, e) {
                return o.call(n(t), e);
            };
        },
        function (t, e, r) {
            var n = r(1);
            t.exports = !n(function () {
                return (
                    7 !=
                    Object.defineProperty({}, 1, {
                        get: function () {
                            return 7;
                        },
                    })[1]
                );
            });
        },
        function (t, e) {
            t.exports = function (t) {
                return "object" == typeof t ? null !== t : "function" == typeof t;
            };
        },
        function (t, e, r) {
            var n = r(6),
                o = r(74),
                i = r(4),
                a = r(19),
                c = Object.defineProperty;
            e.f = n
                ? c
                : function (t, e, r) {
                      if ((i(t), (e = a(e, !0)), i(r), o))
                          try {
                              return c(t, e, r);
                          } catch (t) {}
                      if ("get" in r || "set" in r) throw TypeError("Accessors not supported");
                      return "value" in r && (t[e] = r.value), t;
                  };
        },
        function (t, e, r) {
            var n = r(17),
                o = Math.min;
            t.exports = function (t) {
                return t > 0 ? o(n(t), 9007199254740991) : 0;
            };
        },
        function (t, e, r) {
            var n = r(28),
                o = r(11);
            t.exports = function (t) {
                return n(o(t));
            };
        },
        function (t, e) {
            t.exports = function (t) {
                if (null == t) throw TypeError("Can't call method on " + t);
                return t;
            };
        },
        function (t, e, r) {
            var n = r(11);
            t.exports = function (t) {
                return Object(n(t));
            };
        },
        function (t, e, r) {
            var n = r(6),
                o = r(8),
                i = r(18);
            t.exports = n
                ? function (t, e, r) {
                      return o.f(t, e, i(1, r));
                  }
                : function (t, e, r) {
                      return (t[e] = r), t;
                  };
        },
        function (t, e, r) {
            var n = r(6),
                o = r(43),
                i = r(18),
                a = r(10),
                c = r(19),
                u = r(5),
                s = r(74),
                l = Object.getOwnPropertyDescriptor;
            e.f = n
                ? l
                : function (t, e) {
                      if (((t = a(t)), (e = c(e, !0)), s))
                          try {
                              return l(t, e);
                          } catch (t) {}
                      if (u(t, e)) return i(!o.f.call(t, e), t[e]);
                  };
        },
        function (t, e) {
            var r = {}.toString;
            t.exports = function (t) {
                return r.call(t).slice(8, -1);
            };
        },
        function (t, e, r) {
            var n = r(3),
                o = r(13),
                i = r(5),
                a = r(44),
                c = r(76),
                u = r(29),
                s = u.get,
                l = u.enforce,
                f = String(String).split("String");
            (t.exports = function (t, e, r, c) {
                var u,
                    s = !!c && !!c.unsafe,
                    p = !!c && !!c.enumerable,
                    v = !!c && !!c.noTargetGet;
                "function" == typeof r && ("string" != typeof e || i(r, "name") || o(r, "name", e), (u = l(r)).source || (u.source = f.join("string" == typeof e ? e : ""))),
                    t !== n ? (s ? !v && t[e] && (p = !0) : delete t[e], p ? (t[e] = r) : o(t, e, r)) : p ? (t[e] = r) : a(e, r);
            })(Function.prototype, "toString", function () {
                return ("function" == typeof this && s(this).source) || c(this);
            });
        },
        function (t, e) {
            var r = Math.ceil,
                n = Math.floor;
            t.exports = function (t) {
                return isNaN((t = +t)) ? 0 : (t > 0 ? n : r)(t);
            };
        },
        function (t, e) {
            t.exports = function (t, e) {
                return { enumerable: !(1 & t), configurable: !(2 & t), writable: !(4 & t), value: e };
            };
        },
        function (t, e, r) {
            var n = r(7);
            t.exports = function (t, e) {
                if (!n(t)) return t;
                var r, o;
                if (e && "function" == typeof (r = t.toString) && !n((o = r.call(t)))) return o;
                if ("function" == typeof (r = t.valueOf) && !n((o = r.call(t)))) return o;
                if (!e && "function" == typeof (r = t.toString) && !n((o = r.call(t)))) return o;
                throw TypeError("Can't convert object to primitive value");
            };
        },
        function (t, e) {
            t.exports = !1;
        },
        function (t, e, r) {
            var n = r(86),
                o = r(28),
                i = r(12),
                a = r(9),
                c = r(53),
                u = [].push,
                s = function (t) {
                    var e = 1 == t,
                        r = 2 == t,
                        s = 3 == t,
                        l = 4 == t,
                        f = 6 == t,
                        p = 7 == t,
                        v = 5 == t || f;
                    return function (h, d, g, y) {
                        for (var b, m, w = i(h), x = o(w), S = n(d, g, 3), _ = a(x.length), O = 0, A = y || c, E = e ? A(h, _) : r || p ? A(h, 0) : void 0; _ > O; O++)
                            if ((v || O in x) && ((m = S((b = x[O]), O, w)), t))
                                if (e) E[O] = m;
                                else if (m)
                                    switch (t) {
                                        case 3:
                                            return !0;
                                        case 5:
                                            return b;
                                        case 6:
                                            return O;
                                        case 2:
                                            u.call(E, b);
                                    }
                                else
                                    switch (t) {
                                        case 4:
                                            return !1;
                                        case 7:
                                            u.call(E, b);
                                    }
                        return f ? -1 : s || l ? l : E;
                    };
                };
            t.exports = { forEach: s(0), map: s(1), filter: s(2), some: s(3), every: s(4), find: s(5), findIndex: s(6), filterOut: s(7) };
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(39);
            n({ target: "RegExp", proto: !0, forced: /./.exec !== o }, { exec: o });
        },
        function (t, e, r) {
            var n = r(58),
                o = r(16),
                i = r(116);
            n || o(Object.prototype, "toString", i, { unsafe: !0 });
        },
        function (t, e, r) {
            "use strict";
            var n = r(19),
                o = r(8),
                i = r(18);
            t.exports = function (t, e, r) {
                var a = n(e);
                a in t ? o.f(t, a, i(0, r)) : (t[a] = r);
            };
        },
        function (t, e, r) {
            var n = r(1),
                o = r(2),
                i = r(52),
                a = o("species");
            t.exports = function (t) {
                return (
                    i >= 51 ||
                    !n(function () {
                        var e = [];
                        return (
                            ((e.constructor = {})[a] = function () {
                                return { foo: 1 };
                            }),
                            1 !== e[t](Boolean).foo
                        );
                    })
                );
            };
        },
        function (t, e) {
            t.exports = {};
        },
        function (t, e, r) {
            var n = r(0),
                o = r(110);
            n({ target: "Object", stat: !0, forced: Object.assign !== o }, { assign: o });
        },
        function (t, e, r) {
            var n = r(1),
                o = r(15),
                i = "".split;
            t.exports = n(function () {
                return !Object("z").propertyIsEnumerable(0);
            })
                ? function (t) {
                      return "String" == o(t) ? i.call(t, "") : Object(t);
                  }
                : Object;
        },
        function (t, e, r) {
            var n,
                o,
                i,
                a = r(109),
                c = r(3),
                u = r(7),
                s = r(13),
                l = r(5),
                f = r(45),
                p = r(30),
                v = r(32),
                h = c.WeakMap;
            if (a || f.state) {
                var d = f.state || (f.state = new h()),
                    g = d.get,
                    y = d.has,
                    b = d.set;
                (n = function (t, e) {
                    if (y.call(d, t)) throw new TypeError("Object already initialized");
                    return (e.facade = t), b.call(d, t, e), e;
                }),
                    (o = function (t) {
                        return g.call(d, t) || {};
                    }),
                    (i = function (t) {
                        return y.call(d, t);
                    });
            } else {
                var m = p("state");
                (v[m] = !0),
                    (n = function (t, e) {
                        if (l(t, m)) throw new TypeError("Object already initialized");
                        return (e.facade = t), s(t, m, e), e;
                    }),
                    (o = function (t) {
                        return l(t, m) ? t[m] : {};
                    }),
                    (i = function (t) {
                        return l(t, m);
                    });
            }
            t.exports = {
                set: n,
                get: o,
                has: i,
                enforce: function (t) {
                    return i(t) ? o(t) : n(t, {});
                },
                getterFor: function (t) {
                    return function (e) {
                        var r;
                        if (!u(e) || (r = o(e)).type !== t) throw TypeError("Incompatible receiver, " + t + " required");
                        return r;
                    };
                },
            };
        },
        function (t, e, r) {
            var n = r(31),
                o = r(46),
                i = n("keys");
            t.exports = function (t) {
                return i[t] || (i[t] = o(t));
            };
        },
        function (t, e, r) {
            var n = r(20),
                o = r(45);
            (t.exports = function (t, e) {
                return o[t] || (o[t] = void 0 !== e ? e : {});
            })("versions", []).push({ version: "3.12.1", mode: n ? "pure" : "global", copyright: "© 2021 Denis Pushkarev (zloirock.ru)" });
        },
        function (t, e) {
            t.exports = {};
        },
        function (t, e, r) {
            var n = r(79),
                o = r(3),
                i = function (t) {
                    return "function" == typeof t ? t : void 0;
                };
            t.exports = function (t, e) {
                return arguments.length < 2 ? i(n[t]) || i(o[t]) : (n[t] && n[t][e]) || (o[t] && o[t][e]);
            };
        },
        function (t, e, r) {
            var n = r(80),
                o = r(48).concat("length", "prototype");
            e.f =
                Object.getOwnPropertyNames ||
                function (t) {
                    return n(t, o);
                };
        },
        function (t, e, r) {
            var n = r(80),
                o = r(48);
            t.exports =
                Object.keys ||
                function (t) {
                    return n(t, o);
                };
        },
        function (t, e, r) {
            var n,
                o = r(4),
                i = r(112),
                a = r(48),
                c = r(32),
                u = r(113),
                s = r(75),
                l = r(30),
                f = l("IE_PROTO"),
                p = function () {},
                v = function (t) {
                    return "<script>" + t + "</script>";
                },
                h = function () {
                    try {
                        n = document.domain && new ActiveXObject("htmlfile");
                    } catch (t) {}
                    var t, e;
                    h = n
                        ? (function (t) {
                              t.write(v("")), t.close();
                              var e = t.parentWindow.Object;
                              return (t = null), e;
                          })(n)
                        : (((e = s("iframe")).style.display = "none"), u.appendChild(e), (e.src = String("javascript:")), (t = e.contentWindow.document).open(), t.write(v("document.F=Object")), t.close(), t.F);
                    for (var r = a.length; r--; ) delete h.prototype[a[r]];
                    return h();
                };
            (c[f] = !0),
                (t.exports =
                    Object.create ||
                    function (t, e) {
                        var r;
                        return null !== t ? ((p.prototype = o(t)), (r = new p()), (p.prototype = null), (r[f] = t)) : (r = h()), void 0 === e ? r : i(r, e);
                    });
        },
        function (t, e, r) {
            var n = r(3),
                o = r(85),
                i = r(114),
                a = r(13);
            for (var c in o) {
                var u = n[c],
                    s = u && u.prototype;
                if (s && s.forEach !== i)
                    try {
                        a(s, "forEach", i);
                    } catch (t) {
                        s.forEach = i;
                    }
            }
        },
        function (t, e, r) {
            var n = r(15);
            t.exports =
                Array.isArray ||
                function (t) {
                    return "Array" == n(t);
                };
        },
        function (t, e, r) {
            "use strict";
            var n,
                o,
                i = r(89),
                a = r(90),
                c = r(31),
                u = RegExp.prototype.exec,
                s = c("native-string-replace", String.prototype.replace),
                l = u,
                f = ((n = /a/), (o = /b*/g), u.call(n, "a"), u.call(o, "a"), 0 !== n.lastIndex || 0 !== o.lastIndex),
                p = a.UNSUPPORTED_Y || a.BROKEN_CARET,
                v = void 0 !== /()??/.exec("")[1];
            (f || v || p) &&
                (l = function (t) {
                    var e,
                        r,
                        n,
                        o,
                        a = this,
                        c = p && a.sticky,
                        l = i.call(a),
                        h = a.source,
                        d = 0,
                        g = t;
                    return (
                        c &&
                            (-1 === (l = l.replace("y", "")).indexOf("g") && (l += "g"),
                            (g = String(t).slice(a.lastIndex)),
                            a.lastIndex > 0 && (!a.multiline || (a.multiline && "\n" !== t[a.lastIndex - 1])) && ((h = "(?: " + h + ")"), (g = " " + g), d++),
                            (r = new RegExp("^(?:" + h + ")", l))),
                        v && (r = new RegExp("^" + h + "$(?!\\s)", l)),
                        f && (e = a.lastIndex),
                        (n = u.call(c ? r : a, g)),
                        c ? (n ? ((n.input = n.input.slice(d)), (n[0] = n[0].slice(d)), (n.index = a.lastIndex), (a.lastIndex += n[0].length)) : (a.lastIndex = 0)) : f && n && (a.lastIndex = a.global ? n.index + n[0].length : e),
                        v &&
                            n &&
                            n.length > 1 &&
                            s.call(n[0], r, function () {
                                for (o = 1; o < arguments.length - 2; o++) void 0 === arguments[o] && (n[o] = void 0);
                            }),
                        n
                    );
                }),
                (t.exports = l);
        },
        function (t, e, r) {
            "use strict";
            var n = r(6),
                o = r(3),
                i = r(82),
                a = r(16),
                c = r(5),
                u = r(15),
                s = r(117),
                l = r(19),
                f = r(1),
                p = r(36),
                v = r(34).f,
                h = r(14).f,
                d = r(8).f,
                g = r(95).trim,
                y = o.Number,
                b = y.prototype,
                m = "Number" == u(p(b)),
                w = function (t) {
                    var e,
                        r,
                        n,
                        o,
                        i,
                        a,
                        c,
                        u,
                        s = l(t, !1);
                    if ("string" == typeof s && s.length > 2)
                        if (43 === (e = (s = g(s)).charCodeAt(0)) || 45 === e) {
                            if (88 === (r = s.charCodeAt(2)) || 120 === r) return NaN;
                        } else if (48 === e) {
                            switch (s.charCodeAt(1)) {
                                case 66:
                                case 98:
                                    (n = 2), (o = 49);
                                    break;
                                case 79:
                                case 111:
                                    (n = 8), (o = 55);
                                    break;
                                default:
                                    return +s;
                            }
                            for (a = (i = s.slice(2)).length, c = 0; c < a; c++) if ((u = i.charCodeAt(c)) < 48 || u > o) return NaN;
                            return parseInt(i, n);
                        }
                    return +s;
                };
            if (i("Number", !y(" 0o1") || !y("0b1") || y("+0x1"))) {
                for (
                    var x,
                        S = function (t) {
                            var e = arguments.length < 1 ? 0 : t,
                                r = this;
                            return r instanceof S &&
                                (m
                                    ? f(function () {
                                          b.valueOf.call(r);
                                      })
                                    : "Number" != u(r))
                                ? s(new y(w(e)), r, S)
                                : w(e);
                        },
                        _ = n ? v(y) : "MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,isFinite,isInteger,isNaN,isSafeInteger,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,parseFloat,parseInt,isInteger,fromString,range".split(","),
                        O = 0;
                    _.length > O;
                    O++
                )
                    c(y, (x = _[O])) && !c(S, x) && d(S, x, h(y, x));
                (S.prototype = b), (b.constructor = S), a(o, "Number", S);
            }
        },
        function (t, e, r) {
            "use strict";
            var n = r(10),
                o = r(50),
                i = r(26),
                a = r(29),
                c = r(97),
                u = a.set,
                s = a.getterFor("Array Iterator");
            (t.exports = c(
                Array,
                "Array",
                function (t, e) {
                    u(this, { type: "Array Iterator", target: n(t), index: 0, kind: e });
                },
                function () {
                    var t = s(this),
                        e = t.target,
                        r = t.kind,
                        n = t.index++;
                    return !e || n >= e.length ? ((t.target = void 0), { value: void 0, done: !0 }) : "keys" == r ? { value: n, done: !1 } : "values" == r ? { value: e[n], done: !1 } : { value: [n, e[n]], done: !1 };
                },
                "values"
            )),
                (i.Arguments = i.Array),
                o("keys"),
                o("values"),
                o("entries");
        },
        function (t, e, r) {
            var n = r(0),
                o = r(12),
                i = r(35);
            n(
                {
                    target: "Object",
                    stat: !0,
                    forced: r(1)(function () {
                        i(1);
                    }),
                },
                {
                    keys: function (t) {
                        return i(o(t));
                    },
                }
            );
        },
        function (t, e, r) {
            "use strict";
            var n = {}.propertyIsEnumerable,
                o = Object.getOwnPropertyDescriptor,
                i = o && !n.call({ 1: 2 }, 1);
            e.f = i
                ? function (t) {
                      var e = o(this, t);
                      return !!e && e.enumerable;
                  }
                : n;
        },
        function (t, e, r) {
            var n = r(3),
                o = r(13);
            t.exports = function (t, e) {
                try {
                    o(n, t, e);
                } catch (r) {
                    n[t] = e;
                }
                return e;
            };
        },
        function (t, e, r) {
            var n = r(3),
                o = r(44),
                i = n["__core-js_shared__"] || o("__core-js_shared__", {});
            t.exports = i;
        },
        function (t, e) {
            var r = 0,
                n = Math.random();
            t.exports = function (t) {
                return "Symbol(" + String(void 0 === t ? "" : t) + ")_" + (++r + n).toString(36);
            };
        },
        function (t, e, r) {
            var n = r(17),
                o = Math.max,
                i = Math.min;
            t.exports = function (t, e) {
                var r = n(t);
                return r < 0 ? o(r + e, 0) : i(r, e);
            };
        },
        function (t, e) {
            t.exports = ["constructor", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "toLocaleString", "toString", "valueOf"];
        },
        function (t, e) {
            e.f = Object.getOwnPropertySymbols;
        },
        function (t, e, r) {
            var n = r(2),
                o = r(36),
                i = r(8),
                a = n("unscopables"),
                c = Array.prototype;
            null == c[a] && i.f(c, a, { configurable: !0, value: o(null) }),
                (t.exports = function (t) {
                    c[a][t] = !0;
                });
        },
        function (t, e, r) {
            var n = r(52),
                o = r(1);
            t.exports =
                !!Object.getOwnPropertySymbols &&
                !o(function () {
                    return !String(Symbol()) || (!Symbol.sham && n && n < 41);
                });
        },
        function (t, e, r) {
            var n,
                o,
                i = r(3),
                a = r(83),
                c = i.process,
                u = c && c.versions,
                s = u && u.v8;
            s ? (o = (n = s.split("."))[0] < 4 ? 1 : n[0] + n[1]) : a && (!(n = a.match(/Edge\/(\d+)/)) || n[1] >= 74) && (n = a.match(/Chrome\/(\d+)/)) && (o = n[1]), (t.exports = o && +o);
        },
        function (t, e, r) {
            var n = r(7),
                o = r(38),
                i = r(2)("species");
            t.exports = function (t, e) {
                var r;
                return o(t) && ("function" != typeof (r = t.constructor) || (r !== Array && !o(r.prototype)) ? n(r) && null === (r = r[i]) && (r = void 0) : (r = void 0)), new (void 0 === r ? Array : r)(0 === e ? 0 : e);
            };
        },
        function (t, e, r) {
            "use strict";
            var n = r(17),
                o = r(11);
            t.exports = function (t) {
                var e = String(o(this)),
                    r = "",
                    i = n(t);
                if (i < 0 || i == 1 / 0) throw RangeError("Wrong number of repetitions");
                for (; i > 0; (i >>>= 1) && (e += e)) 1 & i && (r += e);
                return r;
            };
        },
        function (t, e, r) {
            "use strict";
            r(22);
            var n = r(16),
                o = r(39),
                i = r(1),
                a = r(2),
                c = r(13),
                u = a("species"),
                s = RegExp.prototype,
                l = !i(function () {
                    var t = /./;
                    return (
                        (t.exec = function () {
                            var t = [];
                            return (t.groups = { a: "7" }), t;
                        }),
                        "7" !== "".replace(t, "$<a>")
                    );
                }),
                f = "$0" === "a".replace(/./, "$0"),
                p = a("replace"),
                v = !!/./[p] && "" === /./[p]("a", "$0"),
                h = !i(function () {
                    var t = /(?:)/,
                        e = t.exec;
                    t.exec = function () {
                        return e.apply(this, arguments);
                    };
                    var r = "ab".split(t);
                    return 2 !== r.length || "a" !== r[0] || "b" !== r[1];
                });
            t.exports = function (t, e, r, p) {
                var d = a(t),
                    g = !i(function () {
                        var e = {};
                        return (
                            (e[d] = function () {
                                return 7;
                            }),
                            7 != ""[t](e)
                        );
                    }),
                    y =
                        g &&
                        !i(function () {
                            var e = !1,
                                r = /a/;
                            return (
                                "split" === t &&
                                    (((r = {}).constructor = {}),
                                    (r.constructor[u] = function () {
                                        return r;
                                    }),
                                    (r.flags = ""),
                                    (r[d] = /./[d])),
                                (r.exec = function () {
                                    return (e = !0), null;
                                }),
                                r[d](""),
                                !e
                            );
                        });
                if (!g || !y || ("replace" === t && (!l || !f || v)) || ("split" === t && !h)) {
                    var b = /./[d],
                        m = r(
                            d,
                            ""[t],
                            function (t, e, r, n, i) {
                                var a = e.exec;
                                return a === o || a === s.exec ? (g && !i ? { done: !0, value: b.call(e, r, n) } : { done: !0, value: t.call(r, e, n) }) : { done: !1 };
                            },
                            { REPLACE_KEEPS_$0: f, REGEXP_REPLACE_SUBSTITUTES_UNDEFINED_CAPTURE: v }
                        ),
                        w = m[0],
                        x = m[1];
                    n(String.prototype, t, w),
                        n(
                            s,
                            d,
                            2 == e
                                ? function (t, e) {
                                      return x.call(t, this, e);
                                  }
                                : function (t) {
                                      return x.call(t, this);
                                  }
                        );
                }
                p && c(s[d], "sham", !0);
            };
        },
        function (t, e, r) {
            "use strict";
            var n = r(92).charAt;
            t.exports = function (t, e, r) {
                return e + (r ? n(t, e).length : 1);
            };
        },
        function (t, e, r) {
            var n = r(15),
                o = r(39);
            t.exports = function (t, e) {
                var r = t.exec;
                if ("function" == typeof r) {
                    var i = r.call(t, e);
                    if ("object" != typeof i) throw TypeError("RegExp exec method returned something other than an Object or null");
                    return i;
                }
                if ("RegExp" !== n(t)) throw TypeError("RegExp#exec called on incompatible receiver");
                return o.call(t, e);
            };
        },
        function (t, e, r) {
            var n = {};
            (n[r(2)("toStringTag")] = "z"), (t.exports = "[object z]" === String(n));
        },
        function (t, e, r) {
            "use strict";
            var n = r(16),
                o = r(4),
                i = r(1),
                a = r(89),
                c = RegExp.prototype,
                u = c.toString,
                s = i(function () {
                    return "/a/b" != u.call({ source: "a", flags: "b" });
                }),
                l = "toString" != u.name;
            (s || l) &&
                n(
                    RegExp.prototype,
                    "toString",
                    function () {
                        var t = o(this),
                            e = String(t.source),
                            r = t.flags;
                        return "/" + e + "/" + String(void 0 === r && t instanceof RegExp && !("flags" in c) ? a.call(t) : r);
                    },
                    { unsafe: !0 }
                );
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(1),
                i = r(38),
                a = r(7),
                c = r(12),
                u = r(9),
                s = r(24),
                l = r(53),
                f = r(25),
                p = r(2),
                v = r(52),
                h = p("isConcatSpreadable"),
                d =
                    v >= 51 ||
                    !o(function () {
                        var t = [];
                        return (t[h] = !1), t.concat()[0] !== t;
                    }),
                g = f("concat"),
                y = function (t) {
                    if (!a(t)) return !1;
                    var e = t[h];
                    return void 0 !== e ? !!e : i(t);
                };
            n(
                { target: "Array", proto: !0, forced: !d || !g },
                {
                    concat: function (t) {
                        var e,
                            r,
                            n,
                            o,
                            i,
                            a = c(this),
                            f = l(a, 0),
                            p = 0;
                        for (e = -1, n = arguments.length; e < n; e++)
                            if (y((i = -1 === e ? a : arguments[e]))) {
                                if (p + (o = u(i.length)) > 9007199254740991) throw TypeError("Maximum allowed index exceeded");
                                for (r = 0; r < o; r++, p++) r in i && s(f, p, i[r]);
                            } else {
                                if (p >= 9007199254740991) throw TypeError("Maximum allowed index exceeded");
                                s(f, p++, i);
                            }
                        return (f.length = p), f;
                    },
                }
            );
        },
        function (t, e, r) {
            var n = r(8).f,
                o = r(5),
                i = r(2)("toStringTag");
            t.exports = function (t, e, r) {
                t && !o((t = r ? t : t.prototype), i) && n(t, i, { configurable: !0, value: e });
            };
        },
        function (t, e, r) {
            var n = r(3),
                o = r(85),
                i = r(41),
                a = r(13),
                c = r(2),
                u = c("iterator"),
                s = c("toStringTag"),
                l = i.values;
            for (var f in o) {
                var p = n[f],
                    v = p && p.prototype;
                if (v) {
                    if (v[u] !== l)
                        try {
                            a(v, u, l);
                        } catch (t) {
                            v[u] = l;
                        }
                    if ((v[s] || a(v, s, f), o[f]))
                        for (var h in i)
                            if (v[h] !== i[h])
                                try {
                                    a(v, h, i[h]);
                                } catch (t) {
                                    v[h] = i[h];
                                }
                }
            }
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(3),
                i = r(33),
                a = r(20),
                c = r(6),
                u = r(51),
                s = r(84),
                l = r(1),
                f = r(5),
                p = r(38),
                v = r(7),
                h = r(4),
                d = r(12),
                g = r(10),
                y = r(19),
                b = r(18),
                m = r(36),
                w = r(35),
                x = r(34),
                S = r(124),
                _ = r(49),
                O = r(14),
                A = r(8),
                E = r(43),
                j = r(13),
                P = r(16),
                C = r(31),
                k = r(30),
                I = r(32),
                T = r(46),
                R = r(2),
                L = r(103),
                N = r(104),
                M = r(61),
                D = r(29),
                F = r(21).forEach,
                B = k("hidden"),
                U = R("toPrimitive"),
                H = D.set,
                $ = D.getterFor("Symbol"),
                G = Object.prototype,
                V = o.Symbol,
                W = i("JSON", "stringify"),
                z = O.f,
                Y = A.f,
                X = S.f,
                K = E.f,
                q = C("symbols"),
                J = C("op-symbols"),
                Q = C("string-to-symbol-registry"),
                Z = C("symbol-to-string-registry"),
                tt = C("wks"),
                et = o.QObject,
                rt = !et || !et.prototype || !et.prototype.findChild,
                nt =
                    c &&
                    l(function () {
                        return (
                            7 !=
                            m(
                                Y({}, "a", {
                                    get: function () {
                                        return Y(this, "a", { value: 7 }).a;
                                    },
                                })
                            ).a
                        );
                    })
                        ? function (t, e, r) {
                              var n = z(G, e);
                              n && delete G[e], Y(t, e, r), n && t !== G && Y(G, e, n);
                          }
                        : Y,
                ot = function (t, e) {
                    var r = (q[t] = m(V.prototype));
                    return H(r, { type: "Symbol", tag: t, description: e }), c || (r.description = e), r;
                },
                it = s
                    ? function (t) {
                          return "symbol" == typeof t;
                      }
                    : function (t) {
                          return Object(t) instanceof V;
                      },
                at = function (t, e, r) {
                    t === G && at(J, e, r), h(t);
                    var n = y(e, !0);
                    return h(r), f(q, n) ? (r.enumerable ? (f(t, B) && t[B][n] && (t[B][n] = !1), (r = m(r, { enumerable: b(0, !1) }))) : (f(t, B) || Y(t, B, b(1, {})), (t[B][n] = !0)), nt(t, n, r)) : Y(t, n, r);
                },
                ct = function (t, e) {
                    h(t);
                    var r = g(e),
                        n = w(r).concat(ft(r));
                    return (
                        F(n, function (e) {
                            (c && !ut.call(r, e)) || at(t, e, r[e]);
                        }),
                        t
                    );
                },
                ut = function (t) {
                    var e = y(t, !0),
                        r = K.call(this, e);
                    return !(this === G && f(q, e) && !f(J, e)) && (!(r || !f(this, e) || !f(q, e) || (f(this, B) && this[B][e])) || r);
                },
                st = function (t, e) {
                    var r = g(t),
                        n = y(e, !0);
                    if (r !== G || !f(q, n) || f(J, n)) {
                        var o = z(r, n);
                        return !o || !f(q, n) || (f(r, B) && r[B][n]) || (o.enumerable = !0), o;
                    }
                },
                lt = function (t) {
                    var e = X(g(t)),
                        r = [];
                    return (
                        F(e, function (t) {
                            f(q, t) || f(I, t) || r.push(t);
                        }),
                        r
                    );
                },
                ft = function (t) {
                    var e = t === G,
                        r = X(e ? J : g(t)),
                        n = [];
                    return (
                        F(r, function (t) {
                            !f(q, t) || (e && !f(G, t)) || n.push(q[t]);
                        }),
                        n
                    );
                };
            (u ||
                (P(
                    (V = function () {
                        if (this instanceof V) throw TypeError("Symbol is not a constructor");
                        var t = arguments.length && void 0 !== arguments[0] ? String(arguments[0]) : void 0,
                            e = T(t),
                            r = function (t) {
                                this === G && r.call(J, t), f(this, B) && f(this[B], e) && (this[B][e] = !1), nt(this, e, b(1, t));
                            };
                        return c && rt && nt(G, e, { configurable: !0, set: r }), ot(e, t);
                    }).prototype,
                    "toString",
                    function () {
                        return $(this).tag;
                    }
                ),
                P(V, "withoutSetter", function (t) {
                    return ot(T(t), t);
                }),
                (E.f = ut),
                (A.f = at),
                (O.f = st),
                (x.f = S.f = lt),
                (_.f = ft),
                (L.f = function (t) {
                    return ot(R(t), t);
                }),
                c &&
                    (Y(V.prototype, "description", {
                        configurable: !0,
                        get: function () {
                            return $(this).description;
                        },
                    }),
                    a || P(G, "propertyIsEnumerable", ut, { unsafe: !0 }))),
            n({ global: !0, wrap: !0, forced: !u, sham: !u }, { Symbol: V }),
            F(w(tt), function (t) {
                N(t);
            }),
            n(
                { target: "Symbol", stat: !0, forced: !u },
                {
                    for: function (t) {
                        var e = String(t);
                        if (f(Q, e)) return Q[e];
                        var r = V(e);
                        return (Q[e] = r), (Z[r] = e), r;
                    },
                    keyFor: function (t) {
                        if (!it(t)) throw TypeError(t + " is not a symbol");
                        if (f(Z, t)) return Z[t];
                    },
                    useSetter: function () {
                        rt = !0;
                    },
                    useSimple: function () {
                        rt = !1;
                    },
                }
            ),
            n(
                { target: "Object", stat: !0, forced: !u, sham: !c },
                {
                    create: function (t, e) {
                        return void 0 === e ? m(t) : ct(m(t), e);
                    },
                    defineProperty: at,
                    defineProperties: ct,
                    getOwnPropertyDescriptor: st,
                }
            ),
            n({ target: "Object", stat: !0, forced: !u }, { getOwnPropertyNames: lt, getOwnPropertySymbols: ft }),
            n(
                {
                    target: "Object",
                    stat: !0,
                    forced: l(function () {
                        _.f(1);
                    }),
                },
                {
                    getOwnPropertySymbols: function (t) {
                        return _.f(d(t));
                    },
                }
            ),
            W) &&
                n(
                    {
                        target: "JSON",
                        stat: !0,
                        forced:
                            !u ||
                            l(function () {
                                var t = V();
                                return "[null]" != W([t]) || "{}" != W({ a: t }) || "{}" != W(Object(t));
                            }),
                    },
                    {
                        stringify: function (t, e, r) {
                            for (var n, o = [t], i = 1; arguments.length > i; ) o.push(arguments[i++]);
                            if (((n = e), (v(e) || void 0 !== t) && !it(t)))
                                return (
                                    p(e) ||
                                        (e = function (t, e) {
                                            if (("function" == typeof n && (e = n.call(this, t, e)), !it(e))) return e;
                                        }),
                                    (o[1] = e),
                                    W.apply(null, o)
                                );
                        },
                    }
                );
            V.prototype[U] || j(V.prototype, U, V.prototype.valueOf), M(V, "Symbol"), (I[B] = !0);
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(21).filter;
            n(
                { target: "Array", proto: !0, forced: !r(25)("filter") },
                {
                    filter: function (t) {
                        return o(this, t, arguments.length > 1 ? arguments[1] : void 0);
                    },
                }
            );
        },
        function (t, e, r) {
            var n = r(0),
                o = r(1),
                i = r(10),
                a = r(14).f,
                c = r(6),
                u = o(function () {
                    a(1);
                });
            n(
                { target: "Object", stat: !0, forced: !c || u, sham: !c },
                {
                    getOwnPropertyDescriptor: function (t, e) {
                        return a(i(t), e);
                    },
                }
            );
        },
        function (t, e, r) {
            var n = r(0),
                o = r(6),
                i = r(78),
                a = r(10),
                c = r(14),
                u = r(24);
            n(
                { target: "Object", stat: !0, sham: !o },
                {
                    getOwnPropertyDescriptors: function (t) {
                        for (var e, r, n = a(t), o = c.f, s = i(n), l = {}, f = 0; s.length > f; ) void 0 !== (r = o(n, (e = s[f++]))) && u(l, e, r);
                        return l;
                    },
                }
            );
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(7),
                i = r(38),
                a = r(47),
                c = r(9),
                u = r(10),
                s = r(24),
                l = r(2),
                f = r(25)("slice"),
                p = l("species"),
                v = [].slice,
                h = Math.max;
            n(
                { target: "Array", proto: !0, forced: !f },
                {
                    slice: function (t, e) {
                        var r,
                            n,
                            l,
                            f = u(this),
                            d = c(f.length),
                            g = a(t, d),
                            y = a(void 0 === e ? d : e, d);
                        if (i(f) && ("function" != typeof (r = f.constructor) || (r !== Array && !i(r.prototype)) ? o(r) && null === (r = r[p]) && (r = void 0) : (r = void 0), r === Array || void 0 === r)) return v.call(f, g, y);
                        for (n = new (void 0 === r ? Array : r)(h(y - g, 0)), l = 0; g < y; g++, l++) g in f && s(n, l, f[g]);
                        return (n.length = l), n;
                    },
                }
            );
        },
        function (t, e, r) {
            var n = r(6),
                o = r(8).f,
                i = Function.prototype,
                a = i.toString,
                c = /^\s*function ([^ (]*)/;
            n &&
                !("name" in i) &&
                o(i, "name", {
                    configurable: !0,
                    get: function () {
                        try {
                            return a.call(this).match(c)[1];
                        } catch (t) {
                            return "";
                        }
                    },
                });
        },
        function (t, e, r) {
            var n = r(0),
                o = r(125);
            n(
                {
                    target: "Array",
                    stat: !0,
                    forced: !r(130)(function (t) {
                        Array.from(t);
                    }),
                },
                { from: o }
            );
        },
        function (t, e, r) {
            "use strict";
            var n = r(92).charAt,
                o = r(29),
                i = r(97),
                a = o.set,
                c = o.getterFor("String Iterator");
            i(
                String,
                "String",
                function (t) {
                    a(this, { type: "String Iterator", string: String(t), index: 0 });
                },
                function () {
                    var t,
                        e = c(this),
                        r = e.string,
                        o = e.index;
                    return o >= r.length ? { value: void 0, done: !0 } : ((t = n(r, o)), (e.index += t.length), { value: t, done: !1 });
                }
            );
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(6),
                i = r(3),
                a = r(5),
                c = r(7),
                u = r(8).f,
                s = r(77),
                l = i.Symbol;
            if (o && "function" == typeof l && (!("description" in l.prototype) || void 0 !== l().description)) {
                var f = {},
                    p = function () {
                        var t = arguments.length < 1 || void 0 === arguments[0] ? void 0 : String(arguments[0]),
                            e = this instanceof p ? new l(t) : void 0 === t ? l() : l(t);
                        return "" === t && (f[e] = !0), e;
                    };
                s(p, l);
                var v = (p.prototype = l.prototype);
                v.constructor = p;
                var h = v.toString,
                    d = "Symbol(test)" == String(l("test")),
                    g = /^Symbol\((.*)\)[^)]+$/;
                u(v, "description", {
                    configurable: !0,
                    get: function () {
                        var t = c(this) ? this.valueOf() : this,
                            e = h.call(t);
                        if (a(f, t)) return "";
                        var r = d ? e.slice(7, -1) : e.replace(g, "$1");
                        return "" === r ? void 0 : r;
                    },
                }),
                    n({ global: !0, forced: !0 }, { Symbol: p });
            }
        },
        function (t, e, r) {
            r(104)("iterator");
        },
        function (t, e, r) {
            "use strict";
            var n = r(55),
                o = r(102),
                i = r(4),
                a = r(11),
                c = r(133),
                u = r(56),
                s = r(9),
                l = r(57),
                f = r(39),
                p = r(90).UNSUPPORTED_Y,
                v = [].push,
                h = Math.min;
            n(
                "split",
                2,
                function (t, e, r) {
                    var n;
                    return (
                        (n =
                            "c" == "abbc".split(/(b)*/)[1] || 4 != "test".split(/(?:)/, -1).length || 2 != "ab".split(/(?:ab)*/).length || 4 != ".".split(/(.?)(.?)/).length || ".".split(/()()/).length > 1 || "".split(/.?/).length
                                ? function (t, r) {
                                      var n = String(a(this)),
                                          i = void 0 === r ? 4294967295 : r >>> 0;
                                      if (0 === i) return [];
                                      if (void 0 === t) return [n];
                                      if (!o(t)) return e.call(n, t, i);
                                      for (
                                          var c, u, s, l = [], p = (t.ignoreCase ? "i" : "") + (t.multiline ? "m" : "") + (t.unicode ? "u" : "") + (t.sticky ? "y" : ""), h = 0, d = new RegExp(t.source, p + "g");
                                          (c = f.call(d, n)) && !((u = d.lastIndex) > h && (l.push(n.slice(h, c.index)), c.length > 1 && c.index < n.length && v.apply(l, c.slice(1)), (s = c[0].length), (h = u), l.length >= i));

                                      )
                                          d.lastIndex === c.index && d.lastIndex++;
                                      return h === n.length ? (!s && d.test("")) || l.push("") : l.push(n.slice(h)), l.length > i ? l.slice(0, i) : l;
                                  }
                                : "0".split(void 0, 0).length
                                ? function (t, r) {
                                      return void 0 === t && 0 === r ? [] : e.call(this, t, r);
                                  }
                                : e),
                        [
                            function (e, r) {
                                var o = a(this),
                                    i = null == e ? void 0 : e[t];
                                return void 0 !== i ? i.call(e, o, r) : n.call(String(o), e, r);
                            },
                            function (t, o) {
                                var a = r(n, t, this, o, n !== e);
                                if (a.done) return a.value;
                                var f = i(t),
                                    v = String(this),
                                    d = c(f, RegExp),
                                    g = f.unicode,
                                    y = (f.ignoreCase ? "i" : "") + (f.multiline ? "m" : "") + (f.unicode ? "u" : "") + (p ? "g" : "y"),
                                    b = new d(p ? "^(?:" + f.source + ")" : f, y),
                                    m = void 0 === o ? 4294967295 : o >>> 0;
                                if (0 === m) return [];
                                if (0 === v.length) return null === l(b, v) ? [v] : [];
                                for (var w = 0, x = 0, S = []; x < v.length; ) {
                                    b.lastIndex = p ? 0 : x;
                                    var _,
                                        O = l(b, p ? v.slice(x) : v);
                                    if (null === O || (_ = h(s(b.lastIndex + (p ? x : 0)), v.length)) === w) x = u(v, x, g);
                                    else {
                                        if ((S.push(v.slice(w, x)), S.length === m)) return S;
                                        for (var A = 1; A <= O.length - 1; A++) if ((S.push(O[A]), S.length === m)) return S;
                                        x = w = _;
                                    }
                                }
                                return S.push(v.slice(w)), S;
                            },
                        ]
                    );
                },
                p
            );
        },
        function (t, e, r) {
            var n = r(6),
                o = r(1),
                i = r(75);
            t.exports =
                !n &&
                !o(function () {
                    return (
                        7 !=
                        Object.defineProperty(i("div"), "a", {
                            get: function () {
                                return 7;
                            },
                        }).a
                    );
                });
        },
        function (t, e, r) {
            var n = r(3),
                o = r(7),
                i = n.document,
                a = o(i) && o(i.createElement);
            t.exports = function (t) {
                return a ? i.createElement(t) : {};
            };
        },
        function (t, e, r) {
            var n = r(45),
                o = Function.toString;
            "function" != typeof n.inspectSource &&
                (n.inspectSource = function (t) {
                    return o.call(t);
                }),
                (t.exports = n.inspectSource);
        },
        function (t, e, r) {
            var n = r(5),
                o = r(78),
                i = r(14),
                a = r(8);
            t.exports = function (t, e) {
                for (var r = o(e), c = a.f, u = i.f, s = 0; s < r.length; s++) {
                    var l = r[s];
                    n(t, l) || c(t, l, u(e, l));
                }
            };
        },
        function (t, e, r) {
            var n = r(33),
                o = r(34),
                i = r(49),
                a = r(4);
            t.exports =
                n("Reflect", "ownKeys") ||
                function (t) {
                    var e = o.f(a(t)),
                        r = i.f;
                    return r ? e.concat(r(t)) : e;
                };
        },
        function (t, e, r) {
            var n = r(3);
            t.exports = n;
        },
        function (t, e, r) {
            var n = r(5),
                o = r(10),
                i = r(81).indexOf,
                a = r(32);
            t.exports = function (t, e) {
                var r,
                    c = o(t),
                    u = 0,
                    s = [];
                for (r in c) !n(a, r) && n(c, r) && s.push(r);
                for (; e.length > u; ) n(c, (r = e[u++])) && (~i(s, r) || s.push(r));
                return s;
            };
        },
        function (t, e, r) {
            var n = r(10),
                o = r(9),
                i = r(47),
                a = function (t) {
                    return function (e, r, a) {
                        var c,
                            u = n(e),
                            s = o(u.length),
                            l = i(a, s);
                        if (t && r != r) {
                            for (; s > l; ) if ((c = u[l++]) != c) return !0;
                        } else for (; s > l; l++) if ((t || l in u) && u[l] === r) return t || l || 0;
                        return !t && -1;
                    };
                };
            t.exports = { includes: a(!0), indexOf: a(!1) };
        },
        function (t, e, r) {
            var n = r(1),
                o = /#|\.prototype\./,
                i = function (t, e) {
                    var r = c[a(t)];
                    return r == s || (r != u && ("function" == typeof e ? n(e) : !!e));
                },
                a = (i.normalize = function (t) {
                    return String(t).replace(o, ".").toLowerCase();
                }),
                c = (i.data = {}),
                u = (i.NATIVE = "N"),
                s = (i.POLYFILL = "P");
            t.exports = i;
        },
        function (t, e, r) {
            var n = r(33);
            t.exports = n("navigator", "userAgent") || "";
        },
        function (t, e, r) {
            var n = r(51);
            t.exports = n && !Symbol.sham && "symbol" == typeof Symbol.iterator;
        },
        function (t, e) {
            t.exports = {
                CSSRuleList: 0,
                CSSStyleDeclaration: 0,
                CSSValueList: 0,
                ClientRectList: 0,
                DOMRectList: 0,
                DOMStringList: 0,
                DOMTokenList: 1,
                DataTransferItemList: 0,
                FileList: 0,
                HTMLAllCollection: 0,
                HTMLCollection: 0,
                HTMLFormElement: 0,
                HTMLSelectElement: 0,
                MediaList: 0,
                MimeTypeArray: 0,
                NamedNodeMap: 0,
                NodeList: 1,
                PaintRequestList: 0,
                Plugin: 0,
                PluginArray: 0,
                SVGLengthList: 0,
                SVGNumberList: 0,
                SVGPathSegList: 0,
                SVGPointList: 0,
                SVGStringList: 0,
                SVGTransformList: 0,
                SourceBufferList: 0,
                StyleSheetList: 0,
                TextTrackCueList: 0,
                TextTrackList: 0,
                TouchList: 0,
            };
        },
        function (t, e, r) {
            var n = r(87);
            t.exports = function (t, e, r) {
                if ((n(t), void 0 === e)) return t;
                switch (r) {
                    case 0:
                        return function () {
                            return t.call(e);
                        };
                    case 1:
                        return function (r) {
                            return t.call(e, r);
                        };
                    case 2:
                        return function (r, n) {
                            return t.call(e, r, n);
                        };
                    case 3:
                        return function (r, n, o) {
                            return t.call(e, r, n, o);
                        };
                }
                return function () {
                    return t.apply(e, arguments);
                };
            };
        },
        function (t, e) {
            t.exports = function (t) {
                if ("function" != typeof t) throw TypeError(String(t) + " is not a function");
                return t;
            };
        },
        function (t, e, r) {
            "use strict";
            var n = r(1);
            t.exports = function (t, e) {
                var r = [][t];
                return (
                    !!r &&
                    n(function () {
                        r.call(
                            null,
                            e ||
                                function () {
                                    throw 1;
                                },
                            1
                        );
                    })
                );
            };
        },
        function (t, e, r) {
            "use strict";
            var n = r(4);
            t.exports = function () {
                var t = n(this),
                    e = "";
                return t.global && (e += "g"), t.ignoreCase && (e += "i"), t.multiline && (e += "m"), t.dotAll && (e += "s"), t.unicode && (e += "u"), t.sticky && (e += "y"), e;
            };
        },
        function (t, e, r) {
            "use strict";
            var n = r(1);
            function o(t, e) {
                return RegExp(t, e);
            }
            (e.UNSUPPORTED_Y = n(function () {
                var t = o("a", "y");
                return (t.lastIndex = 2), null != t.exec("abcd");
            })),
                (e.BROKEN_CARET = n(function () {
                    var t = o("^r", "gy");
                    return (t.lastIndex = 2), null != t.exec("str");
                }));
        },
        function (t, e, r) {
            "use strict";
            var n = r(55),
                o = r(4),
                i = r(9),
                a = r(11),
                c = r(56),
                u = r(57);
            n("match", 1, function (t, e, r) {
                return [
                    function (e) {
                        var r = a(this),
                            n = null == e ? void 0 : e[t];
                        return void 0 !== n ? n.call(e, r) : new RegExp(e)[t](String(r));
                    },
                    function (t) {
                        var n = r(e, t, this);
                        if (n.done) return n.value;
                        var a = o(t),
                            s = String(this);
                        if (!a.global) return u(a, s);
                        var l = a.unicode;
                        a.lastIndex = 0;
                        for (var f, p = [], v = 0; null !== (f = u(a, s)); ) {
                            var h = String(f[0]);
                            (p[v] = h), "" === h && (a.lastIndex = c(s, i(a.lastIndex), l)), v++;
                        }
                        return 0 === v ? null : p;
                    },
                ];
            });
        },
        function (t, e, r) {
            var n = r(17),
                o = r(11),
                i = function (t) {
                    return function (e, r) {
                        var i,
                            a,
                            c = String(o(e)),
                            u = n(r),
                            s = c.length;
                        return u < 0 || u >= s
                            ? t
                                ? ""
                                : void 0
                            : (i = c.charCodeAt(u)) < 55296 || i > 56319 || u + 1 === s || (a = c.charCodeAt(u + 1)) < 56320 || a > 57343
                            ? t
                                ? c.charAt(u)
                                : i
                            : t
                            ? c.slice(u, u + 2)
                            : a - 56320 + ((i - 55296) << 10) + 65536;
                    };
                };
            t.exports = { codeAt: i(!1), charAt: i(!0) };
        },
        function (t, e, r) {
            var n = r(58),
                o = r(15),
                i = r(2)("toStringTag"),
                a =
                    "Arguments" ==
                    o(
                        (function () {
                            return arguments;
                        })()
                    );
            t.exports = n
                ? o
                : function (t) {
                      var e, r, n;
                      return void 0 === t
                          ? "Undefined"
                          : null === t
                          ? "Null"
                          : "string" ==
                            typeof (r = (function (t, e) {
                                try {
                                    return t[e];
                                } catch (t) {}
                            })((e = Object(t)), i))
                          ? r
                          : a
                          ? o(e)
                          : "Object" == (n = o(e)) && "function" == typeof e.callee
                          ? "Arguments"
                          : n;
                  };
        },
        function (t, e, r) {
            var n = r(4),
                o = r(118);
            t.exports =
                Object.setPrototypeOf ||
                ("__proto__" in {}
                    ? (function () {
                          var t,
                              e = !1,
                              r = {};
                          try {
                              (t = Object.getOwnPropertyDescriptor(Object.prototype, "__proto__").set).call(r, []), (e = r instanceof Array);
                          } catch (t) {}
                          return function (r, i) {
                              return n(r), o(i), e ? t.call(r, i) : (r.__proto__ = i), r;
                          };
                      })()
                    : void 0);
        },
        function (t, e, r) {
            var n = r(11),
                o = "[" + r(96) + "]",
                i = RegExp("^" + o + o + "*"),
                a = RegExp(o + o + "*$"),
                c = function (t) {
                    return function (e) {
                        var r = String(n(e));
                        return 1 & t && (r = r.replace(i, "")), 2 & t && (r = r.replace(a, "")), r;
                    };
                };
            t.exports = { start: c(1), end: c(2), trim: c(3) };
        },
        function (t, e) {
            t.exports = "\t\n\v\f\r                　\u2028\u2029\ufeff";
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(119),
                i = r(99),
                a = r(94),
                c = r(61),
                u = r(13),
                s = r(16),
                l = r(2),
                f = r(20),
                p = r(26),
                v = r(98),
                h = v.IteratorPrototype,
                d = v.BUGGY_SAFARI_ITERATORS,
                g = l("iterator"),
                y = function () {
                    return this;
                };
            t.exports = function (t, e, r, l, v, b, m) {
                o(r, e, l);
                var w,
                    x,
                    S,
                    _ = function (t) {
                        if (t === v && P) return P;
                        if (!d && t in E) return E[t];
                        switch (t) {
                            case "keys":
                            case "values":
                            case "entries":
                                return function () {
                                    return new r(this, t);
                                };
                        }
                        return function () {
                            return new r(this);
                        };
                    },
                    O = e + " Iterator",
                    A = !1,
                    E = t.prototype,
                    j = E[g] || E["@@iterator"] || (v && E[v]),
                    P = (!d && j) || _(v),
                    C = ("Array" == e && E.entries) || j;
                if (
                    (C && ((w = i(C.call(new t()))), h !== Object.prototype && w.next && (f || i(w) === h || (a ? a(w, h) : "function" != typeof w[g] && u(w, g, y)), c(w, O, !0, !0), f && (p[O] = y))),
                    "values" == v &&
                        j &&
                        "values" !== j.name &&
                        ((A = !0),
                        (P = function () {
                            return j.call(this);
                        })),
                    (f && !m) || E[g] === P || u(E, g, P),
                    (p[e] = P),
                    v)
                )
                    if (((x = { values: _("values"), keys: b ? P : _("keys"), entries: _("entries") }), m)) for (S in x) (d || A || !(S in E)) && s(E, S, x[S]);
                    else n({ target: e, proto: !0, forced: d || A }, x);
                return x;
            };
        },
        function (t, e, r) {
            "use strict";
            var n,
                o,
                i,
                a = r(1),
                c = r(99),
                u = r(13),
                s = r(5),
                l = r(2),
                f = r(20),
                p = l("iterator"),
                v = !1;
            [].keys && ("next" in (i = [].keys()) ? (o = c(c(i))) !== Object.prototype && (n = o) : (v = !0));
            var h =
                null == n ||
                a(function () {
                    var t = {};
                    return n[p].call(t) !== t;
                });
            h && (n = {}),
                (f && !h) ||
                    s(n, p) ||
                    u(n, p, function () {
                        return this;
                    }),
                (t.exports = { IteratorPrototype: n, BUGGY_SAFARI_ITERATORS: v });
        },
        function (t, e, r) {
            var n = r(5),
                o = r(12),
                i = r(30),
                a = r(120),
                c = i("IE_PROTO"),
                u = Object.prototype;
            t.exports = a
                ? Object.getPrototypeOf
                : function (t) {
                      return (t = o(t)), n(t, c) ? t[c] : "function" == typeof t.constructor && t instanceof t.constructor ? t.constructor.prototype : t instanceof Object ? u : null;
                  };
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(21).find,
                i = r(50),
                a = !0;
            "find" in [] &&
                Array(1).find(function () {
                    a = !1;
                }),
                n(
                    { target: "Array", proto: !0, forced: a },
                    {
                        find: function (t) {
                            return o(this, t, arguments.length > 1 ? arguments[1] : void 0);
                        },
                    }
                ),
                i("find");
        },
        function (t, e, r) {
            "use strict";
            var n,
                o = r(0),
                i = r(14).f,
                a = r(9),
                c = r(122),
                u = r(11),
                s = r(123),
                l = r(20),
                f = "".startsWith,
                p = Math.min,
                v = s("startsWith");
            o(
                { target: "String", proto: !0, forced: !!(l || v || ((n = i(String.prototype, "startsWith")), !n || n.writable)) && !v },
                {
                    startsWith: function (t) {
                        var e = String(u(this));
                        c(t);
                        var r = a(p(arguments.length > 1 ? arguments[1] : void 0, e.length)),
                            n = String(t);
                        return f ? f.call(e, n, r) : e.slice(r, r + n.length) === n;
                    },
                }
            );
        },
        function (t, e, r) {
            var n = r(7),
                o = r(15),
                i = r(2)("match");
            t.exports = function (t) {
                var e;
                return n(t) && (void 0 !== (e = t[i]) ? !!e : "RegExp" == o(t));
            };
        },
        function (t, e, r) {
            var n = r(2);
            e.f = n;
        },
        function (t, e, r) {
            var n = r(79),
                o = r(5),
                i = r(103),
                a = r(8).f;
            t.exports = function (t) {
                var e = n.Symbol || (n.Symbol = {});
                o(e, t) || a(e, t, { value: i.f(t) });
            };
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(21).map;
            n(
                { target: "Array", proto: !0, forced: !r(25)("map") },
                {
                    map: function (t) {
                        return o(this, t, arguments.length > 1 ? arguments[1] : void 0);
                    },
                }
            );
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(136).start;
            n(
                { target: "String", proto: !0, forced: r(137) },
                {
                    padStart: function (t) {
                        return o(this, t, arguments.length > 1 ? arguments[1] : void 0);
                    },
                }
            );
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(28),
                i = r(10),
                a = r(88),
                c = [].join,
                u = o != Object,
                s = a("join", ",");
            n(
                { target: "Array", proto: !0, forced: u || !s },
                {
                    join: function (t) {
                        return c.call(i(this), void 0 === t ? "," : t);
                    },
                }
            );
        },
        function (t, e) {
            var r;
            r = (function () {
                return this;
            })();
            try {
                r = r || new Function("return this")();
            } catch (t) {
                "object" == typeof window && (r = window);
            }
            t.exports = r;
        },
        function (t, e, r) {
            var n = r(3),
                o = r(76),
                i = n.WeakMap;
            t.exports = "function" == typeof i && /native code/.test(o(i));
        },
        function (t, e, r) {
            "use strict";
            var n = r(6),
                o = r(1),
                i = r(35),
                a = r(49),
                c = r(43),
                u = r(12),
                s = r(28),
                l = Object.assign,
                f = Object.defineProperty;
            t.exports =
                !l ||
                o(function () {
                    if (
                        n &&
                        1 !==
                            l(
                                { b: 1 },
                                l(
                                    f({}, "a", {
                                        enumerable: !0,
                                        get: function () {
                                            f(this, "b", { value: 3, enumerable: !1 });
                                        },
                                    }),
                                    { b: 2 }
                                )
                            ).b
                    )
                        return !0;
                    var t = {},
                        e = {},
                        r = Symbol();
                    return (
                        (t[r] = 7),
                        "abcdefghijklmnopqrst".split("").forEach(function (t) {
                            e[t] = t;
                        }),
                        7 != l({}, t)[r] || "abcdefghijklmnopqrst" != i(l({}, e)).join("")
                    );
                })
                    ? function (t, e) {
                          for (var r = u(t), o = arguments.length, l = 1, f = a.f, p = c.f; o > l; )
                              for (var v, h = s(arguments[l++]), d = f ? i(h).concat(f(h)) : i(h), g = d.length, y = 0; g > y; ) (v = d[y++]), (n && !p.call(h, v)) || (r[v] = h[v]);
                          return r;
                      }
                    : l;
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(81).includes,
                i = r(50);
            n(
                { target: "Array", proto: !0 },
                {
                    includes: function (t) {
                        return o(this, t, arguments.length > 1 ? arguments[1] : void 0);
                    },
                }
            ),
                i("includes");
        },
        function (t, e, r) {
            var n = r(6),
                o = r(8),
                i = r(4),
                a = r(35);
            t.exports = n
                ? Object.defineProperties
                : function (t, e) {
                      i(t);
                      for (var r, n = a(e), c = n.length, u = 0; c > u; ) o.f(t, (r = n[u++]), e[r]);
                      return t;
                  };
        },
        function (t, e, r) {
            var n = r(33);
            t.exports = n("document", "documentElement");
        },
        function (t, e, r) {
            "use strict";
            var n = r(21).forEach,
                o = r(88)("forEach");
            t.exports = o
                ? [].forEach
                : function (t) {
                      return n(this, t, arguments.length > 1 ? arguments[1] : void 0);
                  };
        },
        function (t, e, r) {
            r(0)({ target: "String", proto: !0 }, { repeat: r(54) });
        },
        function (t, e, r) {
            "use strict";
            var n = r(58),
                o = r(93);
            t.exports = n
                ? {}.toString
                : function () {
                      return "[object " + o(this) + "]";
                  };
        },
        function (t, e, r) {
            var n = r(7),
                o = r(94);
            t.exports = function (t, e, r) {
                var i, a;
                return o && "function" == typeof (i = e.constructor) && i !== r && n((a = i.prototype)) && a !== r.prototype && o(t, a), t;
            };
        },
        function (t, e, r) {
            var n = r(7);
            t.exports = function (t) {
                if (!n(t) && null !== t) throw TypeError("Can't set " + String(t) + " as a prototype");
                return t;
            };
        },
        function (t, e, r) {
            "use strict";
            var n = r(98).IteratorPrototype,
                o = r(36),
                i = r(18),
                a = r(61),
                c = r(26),
                u = function () {
                    return this;
                };
            t.exports = function (t, e, r) {
                var s = e + " Iterator";
                return (t.prototype = o(n, { next: i(1, r) })), a(t, s, !1, !0), (c[s] = u), t;
            };
        },
        function (t, e, r) {
            var n = r(1);
            t.exports = !n(function () {
                function t() {}
                return (t.prototype.constructor = null), Object.getPrototypeOf(new t()) !== t.prototype;
            });
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(47),
                i = r(17),
                a = r(9),
                c = r(12),
                u = r(53),
                s = r(24),
                l = r(25)("splice"),
                f = Math.max,
                p = Math.min;
            n(
                { target: "Array", proto: !0, forced: !l },
                {
                    splice: function (t, e) {
                        var r,
                            n,
                            l,
                            v,
                            h,
                            d,
                            g = c(this),
                            y = a(g.length),
                            b = o(t, y),
                            m = arguments.length;
                        if ((0 === m ? (r = n = 0) : 1 === m ? ((r = 0), (n = y - b)) : ((r = m - 2), (n = p(f(i(e), 0), y - b))), y + r - n > 9007199254740991)) throw TypeError("Maximum allowed length exceeded");
                        for (l = u(g, n), v = 0; v < n; v++) (h = b + v) in g && s(l, v, g[h]);
                        if (((l.length = n), r < n)) {
                            for (v = b; v < y - n; v++) (d = v + r), (h = v + n) in g ? (g[d] = g[h]) : delete g[d];
                            for (v = y; v > y - n + r; v--) delete g[v - 1];
                        } else if (r > n) for (v = y - n; v > b; v--) (d = v + r - 1), (h = v + n - 1) in g ? (g[d] = g[h]) : delete g[d];
                        for (v = 0; v < r; v++) g[v + b] = arguments[v + 2];
                        return (g.length = y - n + r), l;
                    },
                }
            );
        },
        function (t, e, r) {
            var n = r(102);
            t.exports = function (t) {
                if (n(t)) throw TypeError("The method doesn't accept regular expressions");
                return t;
            };
        },
        function (t, e, r) {
            var n = r(2)("match");
            t.exports = function (t) {
                var e = /./;
                try {
                    "/./"[t](e);
                } catch (r) {
                    try {
                        return (e[n] = !1), "/./"[t](e);
                    } catch (t) {}
                }
                return !1;
            };
        },
        function (t, e, r) {
            var n = r(10),
                o = r(34).f,
                i = {}.toString,
                a = "object" == typeof window && window && Object.getOwnPropertyNames ? Object.getOwnPropertyNames(window) : [];
            t.exports.f = function (t) {
                return a && "[object Window]" == i.call(t)
                    ? (function (t) {
                          try {
                              return o(t);
                          } catch (t) {
                              return a.slice();
                          }
                      })(t)
                    : o(n(t));
            };
        },
        function (t, e, r) {
            "use strict";
            var n = r(86),
                o = r(12),
                i = r(126),
                a = r(128),
                c = r(9),
                u = r(24),
                s = r(129);
            t.exports = function (t) {
                var e,
                    r,
                    l,
                    f,
                    p,
                    v,
                    h = o(t),
                    d = "function" == typeof this ? this : Array,
                    g = arguments.length,
                    y = g > 1 ? arguments[1] : void 0,
                    b = void 0 !== y,
                    m = s(h),
                    w = 0;
                if ((b && (y = n(y, g > 2 ? arguments[2] : void 0, 2)), null == m || (d == Array && a(m)))) for (r = new d((e = c(h.length))); e > w; w++) (v = b ? y(h[w], w) : h[w]), u(r, w, v);
                else for (p = (f = m.call(h)).next, r = new d(); !(l = p.call(f)).done; w++) (v = b ? i(f, y, [l.value, w], !0) : l.value), u(r, w, v);
                return (r.length = w), r;
            };
        },
        function (t, e, r) {
            var n = r(4),
                o = r(127);
            t.exports = function (t, e, r, i) {
                try {
                    return i ? e(n(r)[0], r[1]) : e(r);
                } catch (e) {
                    throw (o(t), e);
                }
            };
        },
        function (t, e, r) {
            var n = r(4);
            t.exports = function (t) {
                var e = t.return;
                if (void 0 !== e) return n(e.call(t)).value;
            };
        },
        function (t, e, r) {
            var n = r(2),
                o = r(26),
                i = n("iterator"),
                a = Array.prototype;
            t.exports = function (t) {
                return void 0 !== t && (o.Array === t || a[i] === t);
            };
        },
        function (t, e, r) {
            var n = r(93),
                o = r(26),
                i = r(2)("iterator");
            t.exports = function (t) {
                if (null != t) return t[i] || t["@@iterator"] || o[n(t)];
            };
        },
        function (t, e, r) {
            var n = r(2)("iterator"),
                o = !1;
            try {
                var i = 0,
                    a = {
                        next: function () {
                            return { done: !!i++ };
                        },
                        return: function () {
                            o = !0;
                        },
                    };
                (a[n] = function () {
                    return this;
                }),
                    Array.from(a, function () {
                        throw 2;
                    });
            } catch (t) {}
            t.exports = function (t, e) {
                if (!e && !o) return !1;
                var r = !1;
                try {
                    var i = {};
                    (i[n] = function () {
                        return {
                            next: function () {
                                return { done: (r = !0) };
                            },
                        };
                    }),
                        t(i);
                } catch (t) {}
                return r;
            };
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(95).trim;
            n(
                { target: "String", proto: !0, forced: r(132)("trim") },
                {
                    trim: function () {
                        return o(this);
                    },
                }
            );
        },
        function (t, e, r) {
            var n = r(1),
                o = r(96);
            t.exports = function (t) {
                return n(function () {
                    return !!o[t]() || "​᠎" != "​᠎"[t]() || o[t].name !== t;
                });
            };
        },
        function (t, e, r) {
            var n = r(4),
                o = r(87),
                i = r(2)("species");
            t.exports = function (t, e) {
                var r,
                    a = n(t).constructor;
                return void 0 === a || null == (r = n(a)[i]) ? e : o(r);
            };
        },
        function (t, e, r) {
            "use strict";
            var n = r(55),
                o = r(4),
                i = r(9),
                a = r(17),
                c = r(11),
                u = r(56),
                s = r(135),
                l = r(57),
                f = Math.max,
                p = Math.min;
            n("replace", 2, function (t, e, r, n) {
                var v = n.REGEXP_REPLACE_SUBSTITUTES_UNDEFINED_CAPTURE,
                    h = n.REPLACE_KEEPS_$0,
                    d = v ? "$" : "$0";
                return [
                    function (r, n) {
                        var o = c(this),
                            i = null == r ? void 0 : r[t];
                        return void 0 !== i ? i.call(r, o, n) : e.call(String(o), r, n);
                    },
                    function (t, n) {
                        if ((!v && h) || ("string" == typeof n && -1 === n.indexOf(d))) {
                            var c = r(e, t, this, n);
                            if (c.done) return c.value;
                        }
                        var g = o(t),
                            y = String(this),
                            b = "function" == typeof n;
                        b || (n = String(n));
                        var m = g.global;
                        if (m) {
                            var w = g.unicode;
                            g.lastIndex = 0;
                        }
                        for (var x = []; ; ) {
                            var S = l(g, y);
                            if (null === S) break;
                            if ((x.push(S), !m)) break;
                            "" === String(S[0]) && (g.lastIndex = u(y, i(g.lastIndex), w));
                        }
                        for (var _, O = "", A = 0, E = 0; E < x.length; E++) {
                            S = x[E];
                            for (var j = String(S[0]), P = f(p(a(S.index), y.length), 0), C = [], k = 1; k < S.length; k++) C.push(void 0 === (_ = S[k]) ? _ : String(_));
                            var I = S.groups;
                            if (b) {
                                var T = [j].concat(C, P, y);
                                void 0 !== I && T.push(I);
                                var R = String(n.apply(void 0, T));
                            } else R = s(j, y, P, C, I, n);
                            P >= A && ((O += y.slice(A, P) + R), (A = P + j.length));
                        }
                        return O + y.slice(A);
                    },
                ];
            });
        },
        function (t, e, r) {
            var n = r(12),
                o = Math.floor,
                i = "".replace,
                a = /\$([$&'`]|\d{1,2}|<[^>]*>)/g,
                c = /\$([$&'`]|\d{1,2})/g;
            t.exports = function (t, e, r, u, s, l) {
                var f = r + t.length,
                    p = u.length,
                    v = c;
                return (
                    void 0 !== s && ((s = n(s)), (v = a)),
                    i.call(l, v, function (n, i) {
                        var a;
                        switch (i.charAt(0)) {
                            case "$":
                                return "$";
                            case "&":
                                return t;
                            case "`":
                                return e.slice(0, r);
                            case "'":
                                return e.slice(f);
                            case "<":
                                a = s[i.slice(1, -1)];
                                break;
                            default:
                                var c = +i;
                                if (0 === c) return n;
                                if (c > p) {
                                    var l = o(c / 10);
                                    return 0 === l ? n : l <= p ? (void 0 === u[l - 1] ? i.charAt(1) : u[l - 1] + i.charAt(1)) : n;
                                }
                                a = u[c - 1];
                        }
                        return void 0 === a ? "" : a;
                    })
                );
            };
        },
        function (t, e, r) {
            var n = r(9),
                o = r(54),
                i = r(11),
                a = Math.ceil,
                c = function (t) {
                    return function (e, r, c) {
                        var u,
                            s,
                            l = String(i(e)),
                            f = l.length,
                            p = void 0 === c ? " " : String(c),
                            v = n(r);
                        return v <= f || "" == p ? l : ((u = v - f), (s = o.call(p, a(u / p.length))).length > u && (s = s.slice(0, u)), t ? l + s : s + l);
                    };
                };
            t.exports = { start: c(!1), end: c(!0) };
        },
        function (t, e, r) {
            var n = r(83);
            t.exports = /Version\/10(?:\.\d+){1,2}(?: [\w./]+)?(?: Mobile\/\w+)? Safari\//.test(n);
        },
        function (t, e, r) {
            "use strict";
            var n = r(0),
                o = r(17),
                i = r(139),
                a = r(54),
                c = r(1),
                u = (1).toFixed,
                s = Math.floor,
                l = function (t, e, r) {
                    return 0 === e ? r : e % 2 == 1 ? l(t, e - 1, r * t) : l(t * t, e / 2, r);
                },
                f = function (t, e, r) {
                    for (var n = -1, o = r; ++n < 6; ) (o += e * t[n]), (t[n] = o % 1e7), (o = s(o / 1e7));
                },
                p = function (t, e) {
                    for (var r = 6, n = 0; --r >= 0; ) (n += t[r]), (t[r] = s(n / e)), (n = (n % e) * 1e7);
                },
                v = function (t) {
                    for (var e = 6, r = ""; --e >= 0; )
                        if ("" !== r || 0 === e || 0 !== t[e]) {
                            var n = String(t[e]);
                            r = "" === r ? n : r + a.call("0", 7 - n.length) + n;
                        }
                    return r;
                };
            n(
                {
                    target: "Number",
                    proto: !0,
                    forced:
                        (u && ("0.000" !== (8e-5).toFixed(3) || "1" !== (0.9).toFixed(0) || "1.25" !== (1.255).toFixed(2) || "1000000000000000128" !== (0xde0b6b3a7640080).toFixed(0))) ||
                        !c(function () {
                            u.call({});
                        }),
                },
                {
                    toFixed: function (t) {
                        var e,
                            r,
                            n,
                            c,
                            u = i(this),
                            s = o(t),
                            h = [0, 0, 0, 0, 0, 0],
                            d = "",
                            g = "0";
                        if (s < 0 || s > 20) throw RangeError("Incorrect fraction digits");
                        if (u != u) return "NaN";
                        if (u <= -1e21 || u >= 1e21) return String(u);
                        if ((u < 0 && ((d = "-"), (u = -u)), u > 1e-21))
                            if (
                                ((r =
                                    (e =
                                        (function (t) {
                                            for (var e = 0, r = t; r >= 4096; ) (e += 12), (r /= 4096);
                                            for (; r >= 2; ) (e += 1), (r /= 2);
                                            return e;
                                        })(u * l(2, 69, 1)) - 69) < 0
                                        ? u * l(2, -e, 1)
                                        : u / l(2, e, 1)),
                                (r *= 4503599627370496),
                                (e = 52 - e) > 0)
                            ) {
                                for (f(h, 0, r), n = s; n >= 7; ) f(h, 1e7, 0), (n -= 7);
                                for (f(h, l(10, n, 1), 0), n = e - 1; n >= 23; ) p(h, 1 << 23), (n -= 23);
                                p(h, 1 << n), f(h, 1, 1), p(h, 2), (g = v(h));
                            } else f(h, 0, r), f(h, 1 << -e, 0), (g = v(h) + a.call("0", s));
                        return (g = s > 0 ? d + ((c = g.length) <= s ? "0." + a.call("0", s - c) + g : g.slice(0, c - s) + "." + g.slice(c - s)) : d + g);
                    },
                }
            );
        },
        function (t, e, r) {
            var n = r(15);
            t.exports = function (t) {
                if ("number" != typeof t && "Number" != n(t)) throw TypeError("Incorrect invocation");
                return +t;
            };
        },
        function (t, e, r) {
            "use strict";
            r.r(e);
            var n = {};
            r.r(n),
                r.d(n, "on", function () {
                    return l;
                }),
                r.d(n, "off", function () {
                    return f;
                }),
                r.d(n, "createElementFromString", function () {
                    return p;
                }),
                r.d(n, "createFromTemplate", function () {
                    return v;
                }),
                r.d(n, "eventPath", function () {
                    return h;
                }),
                r.d(n, "resolveElement", function () {
                    return d;
                }),
                r.d(n, "adjustableInputNumbers", function () {
                    return g;
                });
            r(27), r(111), r(37), r(115), r(22), r(91), r(23), r(59), r(60), r(40), r(41), r(62), r(121), r(42), r(100), r(101), r(63), r(64), r(65), r(66), r(67), r(68), r(69), r(70), r(71), r(72), r(131), r(73), r(134);
            function o(t, e) {
                var r = Object.keys(t);
                if (Object.getOwnPropertySymbols) {
                    var n = Object.getOwnPropertySymbols(t);
                    e &&
                        (n = n.filter(function (e) {
                            return Object.getOwnPropertyDescriptor(t, e).enumerable;
                        })),
                        r.push.apply(r, n);
                }
                return r;
            }
            function i(t) {
                for (var e = 1; e < arguments.length; e++) {
                    var r = null != arguments[e] ? arguments[e] : {};
                    e % 2
                        ? o(Object(r), !0).forEach(function (e) {
                              a(t, e, r[e]);
                          })
                        : Object.getOwnPropertyDescriptors
                        ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r))
                        : o(Object(r)).forEach(function (e) {
                              Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e));
                          });
                }
                return t;
            }
            function a(t, e, r) {
                return e in t ? Object.defineProperty(t, e, { value: r, enumerable: !0, configurable: !0, writable: !0 }) : (t[e] = r), t;
            }
            function c(t, e) {
                var r = ("undefined" != typeof Symbol && t[Symbol.iterator]) || t["@@iterator"];
                if (r) return (r = r.call(t)).next.bind(r);
                if (
                    Array.isArray(t) ||
                    (r = (function (t, e) {
                        if (!t) return;
                        if ("string" == typeof t) return u(t, e);
                        var r = Object.prototype.toString.call(t).slice(8, -1);
                        "Object" === r && t.constructor && (r = t.constructor.name);
                        if ("Map" === r || "Set" === r) return Array.from(t);
                        if ("Arguments" === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)) return u(t, e);
                    })(t)) ||
                    (e && t && "number" == typeof t.length)
                ) {
                    r && (t = r);
                    var n = 0;
                    return function () {
                        return n >= t.length ? { done: !0 } : { done: !1, value: t[n++] };
                    };
                }
                throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
            }
            function u(t, e) {
                (null == e || e > t.length) && (e = t.length);
                for (var r = 0, n = new Array(e); r < e; r++) n[r] = t[r];
                return n;
            }
            function s(t, e, r, n) {
                var o = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : {};
                e instanceof HTMLCollection || e instanceof NodeList ? (e = Array.from(e)) : Array.isArray(e) || (e = [e]), Array.isArray(r) || (r = [r]);
                for (var a, u = c(e); !(a = u()).done; )
                    for (var s, l = a.value, f = c(r); !(s = f()).done; ) {
                        var p = s.value;
                        l[t](p, n, i({ capture: !1 }, o));
                    }
                return Array.prototype.slice.call(arguments, 1);
            }
            var l = s.bind(null, "addEventListener"),
                f = s.bind(null, "removeEventListener");
            function p(t) {
                var e = document.createElement("div");
                return (e.innerHTML = t.trim()), e.firstElementChild;
            }
            function v(t) {
                var e = function (t, e) {
                    var r = t.getAttribute(e);
                    return t.removeAttribute(e), r;
                };
                return (function t(r) {
                    var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                        o = e(r, ":obj"),
                        i = e(r, ":ref"),
                        a = o ? (n[o] = {}) : n;
                    i && (n[i] = r);
                    for (var c = 0, u = Array.from(r.children); c < u.length; c++) {
                        var s = u[c],
                            l = e(s, ":arr"),
                            f = t(s, l ? {} : a);
                        l && (a[l] || (a[l] = [])).push(Object.keys(f).length ? f : s);
                    }
                    return n;
                })(p(t));
            }
            function h(t) {
                var e = t.path || (t.composedPath && t.composedPath());
                if (e) return e;
                var r = t.target.parentElement;
                for (e = [t.target, r]; (r = r.parentElement); ) e.push(r);
                return e.push(document, window), e;
            }
            function d(t) {
                return t instanceof Element
                    ? t
                    : "string" == typeof t
                    ? t.split(/>>/g).reduce(function (t, e, r, n) {
                          return (t = t.querySelector(e)), r < n.length - 1 ? t.shadowRoot : t;
                      }, document)
                    : null;
            }
            function g(t) {
                var e =
                    arguments.length > 1 && void 0 !== arguments[1]
                        ? arguments[1]
                        : function (t) {
                              return t;
                          };
                function r(r) {
                    var n = [0.001, 0.01, 0.1][Number(r.shiftKey || 2 * r.ctrlKey)] * (r.deltaY < 0 ? 1 : -1),
                        o = 0,
                        i = t.selectionStart;
                    (t.value = t.value.replace(/[\d.]+/g, function (t, r) {
                        return r <= i && r + t.length >= i ? ((i = r), e(Number(t), n, o)) : (o++, t);
                    })),
                        t.focus(),
                        t.setSelectionRange(i, i),
                        r.preventDefault(),
                        t.dispatchEvent(new Event("input"));
                }
                l(t, "focus", function () {
                    return l(window, "wheel", r, { passive: !1 });
                }),
                    l(t, "blur", function () {
                        return f(window, "wheel", r);
                    });
            }
            r(105), r(106), r(107);
            var y = Math.min,
                b = Math.max,
                m = Math.floor,
                w = Math.round;
            function x(t, e, r) {
                (e /= 100), (r /= 100);
                var n = m((t = (t / 360) * 6)),
                    o = t - n,
                    i = r * (1 - e),
                    a = r * (1 - o * e),
                    c = r * (1 - (1 - o) * e),
                    u = n % 6;
                return [255 * [r, a, i, i, c, r][u], 255 * [c, r, r, a, i, i][u], 255 * [i, i, c, r, r, a][u]];
            }
            function S(t, e, r) {
                return x(t, e, r).map(function (t) {
                    return w(t).toString(16).padStart(2, "0");
                });
            }
            function _(t, e, r) {
                var n = x(t, e, r),
                    o = n[0] / 255,
                    i = n[1] / 255,
                    a = n[2] / 255,
                    c = y(1 - o, 1 - i, 1 - a);
                return [100 * (1 === c ? 0 : (1 - o - c) / (1 - c)), 100 * (1 === c ? 0 : (1 - i - c) / (1 - c)), 100 * (1 === c ? 0 : (1 - a - c) / (1 - c)), 100 * c];
            }
            function O(t, e, r) {
                var n = ((2 - (e /= 100)) * (r /= 100)) / 2;
                return 0 !== n && (e = 1 === n ? 0 : n < 0.5 ? (e * r) / (2 * n) : (e * r) / (2 - 2 * n)), [t, 100 * e, 100 * n];
            }
            function A(t, e, r) {
                var n,
                    o,
                    i = y((t /= 255), (e /= 255), (r /= 255)),
                    a = b(t, e, r),
                    c = a - i;
                if (0 === c) n = o = 0;
                else {
                    o = c / a;
                    var u = ((a - t) / 6 + c / 2) / c,
                        s = ((a - e) / 6 + c / 2) / c,
                        l = ((a - r) / 6 + c / 2) / c;
                    t === a ? (n = l - s) : e === a ? (n = 1 / 3 + u - l) : r === a && (n = 2 / 3 + s - u), n < 0 ? (n += 1) : n > 1 && (n -= 1);
                }
                return [360 * n, 100 * o, 100 * a];
            }
            function E(t, e, r, n) {
                (e /= 100), (r /= 100);
                var o = 255 * (1 - y(1, (t /= 100) * (1 - (n /= 100)) + n)),
                    i = 255 * (1 - y(1, e * (1 - n) + n)),
                    a = 255 * (1 - y(1, r * (1 - n) + n));
                return [].concat(A(o, i, a));
            }
            function j(t, e, r) {
                e /= 100;
                var n = ((2 * (e *= (r /= 100) < 0.5 ? r : 1 - r)) / (r + e)) * 100,
                    o = 100 * (r + e);
                return [t, isNaN(n) ? 0 : n, o];
            }
            function P(t) {
                return A.apply(
                    void 0,
                    t.match(/.{2}/g).map(function (t) {
                        return parseInt(t, 16);
                    })
                );
            }
            function C(t) {
                t = t.match(/^[a-zA-Z]+$/)
                    ? (function (t) {
                          if ("black" === t.toLowerCase()) return "#000";
                          var e = document.createElement("canvas").getContext("2d");
                          return (e.fillStyle = t), "#000" === e.fillStyle ? null : e.fillStyle;
                      })(t)
                    : t;
                var e,
                    r = {
                        cmyk: /^cmyk[\D]+([\d.]+)[\D]+([\d.]+)[\D]+([\d.]+)[\D]+([\d.]+)/i,
                        rgba: /^((rgba)|rgb)[\D]+([\d.]+)[\D]+([\d.]+)[\D]+([\d.]+)[\D]*?([\d.]+|$)/i,
                        hsla: /^((hsla)|hsl)[\D]+([\d.]+)[\D]+([\d.]+)[\D]+([\d.]+)[\D]*?([\d.]+|$)/i,
                        hsva: /^((hsva)|hsv)[\D]+([\d.]+)[\D]+([\d.]+)[\D]+([\d.]+)[\D]*?([\d.]+|$)/i,
                        hexa: /^#?(([\dA-Fa-f]{3,4})|([\dA-Fa-f]{6})|([\dA-Fa-f]{8}))$/i,
                    },
                    n = function (t) {
                        return t.map(function (t) {
                            return /^(|\d+)\.\d+|\d+$/.test(t) ? Number(t) : void 0;
                        });
                    };
                t: for (var o in r)
                    if ((e = r[o].exec(t))) {
                        var i = function (t) {
                            return !!e[2] == ("number" == typeof t);
                        };
                        switch (o) {
                            case "cmyk":
                                var a = n(e),
                                    c = a[1],
                                    u = a[2],
                                    s = a[3],
                                    l = a[4];
                                if (c > 100 || u > 100 || s > 100 || l > 100) break t;
                                return { values: E(c, u, s, l), type: o };
                            case "rgba":
                                var f = n(e),
                                    p = f[3],
                                    v = f[4],
                                    h = f[5],
                                    d = f[6];
                                if (p > 255 || v > 255 || h > 255 || d < 0 || d > 1 || !i(d)) break t;
                                return { values: [].concat(A(p, v, h), [d]), a: d, type: o };
                            case "hexa":
                                var g = e[1];
                                (4 !== g.length && 3 !== g.length) ||
                                    (g = g
                                        .split("")
                                        .map(function (t) {
                                            return t + t;
                                        })
                                        .join(""));
                                var y = g.substring(0, 6),
                                    b = g.substring(6);
                                return (b = b ? parseInt(b, 16) / 255 : void 0), { values: [].concat(P(y), [b]), a: b, type: o };
                            case "hsla":
                                var m = n(e),
                                    w = m[3],
                                    x = m[4],
                                    S = m[5],
                                    _ = m[6];
                                if (w > 360 || x > 100 || S > 100 || _ < 0 || _ > 1 || !i(_)) break t;
                                return { values: [].concat(j(w, x, S), [_]), a: _, type: o };
                            case "hsva":
                                var O = n(e),
                                    C = O[3],
                                    k = O[4],
                                    I = O[5],
                                    T = O[6];
                                if (C > 360 || k > 100 || I > 100 || T < 0 || T > 1 || !i(T)) break t;
                                return { values: [C, k, I, T], a: T, type: o };
                        }
                    }
                return { values: null, type: null };
            }
            r(138);
            function k() {
                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                    e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                    r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0,
                    n = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 1,
                    o = function (t, e) {
                        return function () {
                            var r = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : -1;
                            return e(
                                ~r
                                    ? t.map(function (t) {
                                          return Number(t.toFixed(r));
                                      })
                                    : t
                            );
                        };
                    },
                    i = {
                        h: t,
                        s: e,
                        v: r,
                        a: n,
                        toHSVA: function () {
                            var t = [i.h, i.s, i.v, i.a];
                            return (
                                (t.toString = o(t, function (t) {
                                    return "hsva(" + t[0] + ", " + t[1] + "%, " + t[2] + "%, " + i.a + ")";
                                })),
                                t
                            );
                        },
                        toHSLA: function () {
                            var t = [].concat(O(i.h, i.s, i.v), [i.a]);
                            return (
                                (t.toString = o(t, function (t) {
                                    return "hsla(" + t[0] + ", " + t[1] + "%, " + t[2] + "%, " + i.a + ")";
                                })),
                                t
                            );
                        },
                        toRGBA: function () {
                            var t = [].concat(x(i.h, i.s, i.v), [i.a]);
                            return (
                                (t.toString = o(t, function (t) {
                                    return "rgba(" + t[0] + ", " + t[1] + ", " + t[2] + ", " + i.a + ")";
                                })),
                                t
                            );
                        },
                        toCMYK: function () {
                            var t = _(i.h, i.s, i.v);
                            return (
                                (t.toString = o(t, function (t) {
                                    return "cmyk(" + t[0] + "%, " + t[1] + "%, " + t[2] + "%, " + t[3] + "%)";
                                })),
                                t
                            );
                        },
                        toHEXA: function () {
                            var t = S(i.h, i.s, i.v),
                                e =
                                    i.a >= 1
                                        ? ""
                                        : Number((255 * i.a).toFixed(0))
                                              .toString(16)
                                              .toUpperCase()
                                              .padStart(2, "0");
                            return (
                                e && t.push(e),
                                (t.toString = function () {
                                    return "#" + t.join("").toUpperCase();
                                }),
                                t
                            );
                        },
                        clone: function () {
                            return k(i.h, i.s, i.v, i.a);
                        },
                    };
                return i;
            }
            var I = function (t) {
                return Math.max(Math.min(t, 1), 0);
            };
            function T(t) {
                var e = {
                        options: Object.assign(
                            {
                                lock: null,
                                onchange: function () {
                                    return 0;
                                },
                                onstop: function () {
                                    return 0;
                                },
                            },
                            t
                        ),
                        _keyboard: function (t) {
                            var r = e.options,
                                n = t.type,
                                o = t.key;
                            if (document.activeElement === r.wrapper) {
                                var i = e.options.lock,
                                    a = "ArrowUp" === o,
                                    c = "ArrowRight" === o,
                                    u = "ArrowDown" === o,
                                    s = "ArrowLeft" === o;
                                if ("keydown" === n && (a || c || u || s)) {
                                    var l = 0,
                                        f = 0;
                                    "v" === i ? (l = a || c ? 1 : -1) : "h" === i ? (l = a || c ? -1 : 1) : ((f = a ? -1 : u ? 1 : 0), (l = s ? -1 : c ? 1 : 0)),
                                        e.update(I(e.cache.x + 0.01 * l), I(e.cache.y + 0.01 * f)),
                                        t.preventDefault();
                                } else o.startsWith("Arrow") && (e.options.onstop(), t.preventDefault());
                            }
                        },
                        _tapstart: function (t) {
                            l(document, ["mouseup", "touchend", "touchcancel"], e._tapstop), l(document, ["mousemove", "touchmove"], e._tapmove), t.cancelable && t.preventDefault(), e._tapmove(t);
                        },
                        _tapmove: function (t) {
                            var r = e.options,
                                n = e.cache,
                                o = r.lock,
                                i = r.element,
                                a = r.wrapper.getBoundingClientRect(),
                                c = 0,
                                u = 0;
                            if (t) {
                                var s = t && t.touches && t.touches[0];
                                (c = t ? (s || t).clientX : 0),
                                    (u = t ? (s || t).clientY : 0),
                                    c < a.left ? (c = a.left) : c > a.left + a.width && (c = a.left + a.width),
                                    u < a.top ? (u = a.top) : u > a.top + a.height && (u = a.top + a.height),
                                    (c -= a.left),
                                    (u -= a.top);
                            } else n && ((c = n.x * a.width), (u = n.y * a.height));
                            "h" !== o && (i.style.left = "calc(" + (c / a.width) * 100 + "% - " + i.offsetWidth / 2 + "px)"),
                                "v" !== o && (i.style.top = "calc(" + (u / a.height) * 100 + "% - " + i.offsetHeight / 2 + "px)"),
                                (e.cache = { x: c / a.width, y: u / a.height });
                            var l = I(c / a.width),
                                f = I(u / a.height);
                            switch (o) {
                                case "v":
                                    return r.onchange(l);
                                case "h":
                                    return r.onchange(f);
                                default:
                                    return r.onchange(l, f);
                            }
                        },
                        _tapstop: function () {
                            e.options.onstop(), f(document, ["mouseup", "touchend", "touchcancel"], e._tapstop), f(document, ["mousemove", "touchmove"], e._tapmove);
                        },
                        trigger: function () {
                            e._tapmove();
                        },
                        update: function () {
                            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                                r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                                n = e.options.wrapper.getBoundingClientRect(),
                                o = n.left,
                                i = n.top,
                                a = n.width,
                                c = n.height;
                            "h" === e.options.lock && (r = t), e._tapmove({ clientX: o + a * t, clientY: i + c * r });
                        },
                        destroy: function () {
                            var t = e.options,
                                r = e._tapstart,
                                n = e._keyboard;
                            f(document, ["keydown", "keyup"], n), f([t.wrapper, t.element], "mousedown", r), f([t.wrapper, t.element], "touchstart", r, { passive: !1 });
                        },
                    },
                    r = e.options,
                    n = e._tapstart,
                    o = e._keyboard;
                return l([r.wrapper, r.element], "mousedown", n), l([r.wrapper, r.element], "touchstart", n, { passive: !1 }), l(document, ["keydown", "keyup"], o), e;
            }
            function R() {
                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                t = Object.assign(
                    {
                        onchange: function () {
                            return 0;
                        },
                        className: "",
                        elements: [],
                    },
                    t
                );
                var e = l(t.elements, "click", function (e) {
                    t.elements.forEach(function (r) {
                        return r.classList[e.target === r ? "add" : "remove"](t.className);
                    }),
                        t.onchange(e),
                        e.stopPropagation();
                });
                return {
                    destroy: function () {
                        return f.apply(n, e);
                    },
                };
            }
            function L(t, e) {
                var r = ("undefined" != typeof Symbol && t[Symbol.iterator]) || t["@@iterator"];
                if (r) return (r = r.call(t)).next.bind(r);
                if (
                    Array.isArray(t) ||
                    (r = (function (t, e) {
                        if (!t) return;
                        if ("string" == typeof t) return N(t, e);
                        var r = Object.prototype.toString.call(t).slice(8, -1);
                        "Object" === r && t.constructor && (r = t.constructor.name);
                        if ("Map" === r || "Set" === r) return Array.from(t);
                        if ("Arguments" === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)) return N(t, e);
                    })(t)) ||
                    (e && t && "number" == typeof t.length)
                ) {
                    r && (t = r);
                    var n = 0;
                    return function () {
                        return n >= t.length ? { done: !0 } : { done: !1, value: t[n++] };
                    };
                }
                throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
            }
            function N(t, e) {
                (null == e || e > t.length) && (e = t.length);
                for (var r = 0, n = new Array(e); r < e; r++) n[r] = t[r];
                return n;
            }
            function M(t, e) {
                var r = Object.keys(t);
                if (Object.getOwnPropertySymbols) {
                    var n = Object.getOwnPropertySymbols(t);
                    e &&
                        (n = n.filter(function (e) {
                            return Object.getOwnPropertyDescriptor(t, e).enumerable;
                        })),
                        r.push.apply(r, n);
                }
                return r;
            }
            function D(t) {
                for (var e = 1; e < arguments.length; e++) {
                    var r = null != arguments[e] ? arguments[e] : {};
                    e % 2
                        ? M(Object(r), !0).forEach(function (e) {
                              F(t, e, r[e]);
                          })
                        : Object.getOwnPropertyDescriptors
                        ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r))
                        : M(Object(r)).forEach(function (e) {
                              Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e));
                          });
                }
                return t;
            }
            function F(t, e, r) {
                return e in t ? Object.defineProperty(t, e, { value: r, enumerable: !0, configurable: !0, writable: !0 }) : (t[e] = r), t;
            }
            /*! NanoPop 2.1.0 MIT | https://github.com/Simonwep/nanopop */ var B = {
                    variantFlipOrder: { start: "sme", middle: "mse", end: "ems" },
                    positionFlipOrder: { top: "tbrl", right: "rltb", bottom: "btrl", left: "lrbt" },
                    position: "bottom",
                    margin: 8,
                },
                U = function (t, e, r) {
                    var n = D(D({ container: document.documentElement.getBoundingClientRect() }, B), r),
                        o = n.container,
                        i = n.margin,
                        a = n.position,
                        c = n.variantFlipOrder,
                        u = n.positionFlipOrder,
                        s = e.style,
                        l = s.left,
                        f = s.top;
                    (e.style.left = "0"), (e.style.top = "0");
                    for (
                        var p,
                            v = t.getBoundingClientRect(),
                            h = e.getBoundingClientRect(),
                            d = { t: v.top - h.height - i, b: v.bottom + i, r: v.right + i, l: v.left - h.width - i },
                            g = { vs: v.left, vm: v.left + v.width / 2 + -h.width / 2, ve: v.left + v.width - h.width, hs: v.top, hm: v.bottom - v.height / 2 - h.height / 2, he: v.bottom - h.height },
                            y = a.split("-"),
                            b = y[0],
                            m = y[1],
                            w = void 0 === m ? "middle" : m,
                            x = u[b],
                            S = c[w],
                            _ = o.top,
                            O = o.left,
                            A = o.bottom,
                            E = o.right,
                            j = L(x);
                        !(p = j()).done;

                    ) {
                        var P = p.value,
                            C = "t" === P || "b" === P,
                            k = d[P],
                            I = C ? ["top", "left"] : ["left", "top"],
                            T = I[0],
                            R = I[1],
                            N = C ? [h.height, h.width] : [h.width, h.height],
                            M = N[1],
                            F = C ? [A, E] : [E, A],
                            U = F[1],
                            H = C ? [_, O] : [O, _],
                            $ = H[1];
                        if (!(k < H[0] || k + N[0] > F[0]))
                            for (var G, V = L(S); !(G = V()).done; ) {
                                var W = G.value,
                                    z = g[(C ? "v" : "h") + W];
                                if (!(z < $ || z + M > U)) return (e.style[R] = z - h[R] + "px"), (e.style[T] = k - h[T] + "px"), P + W;
                            }
                    }
                    return (e.style.left = l), (e.style.top = f), null;
                };
            function H(t, e) {
                var r = ("undefined" != typeof Symbol && t[Symbol.iterator]) || t["@@iterator"];
                if (r) return (r = r.call(t)).next.bind(r);
                if (
                    Array.isArray(t) ||
                    (r = (function (t, e) {
                        if (!t) return;
                        if ("string" == typeof t) return $(t, e);
                        var r = Object.prototype.toString.call(t).slice(8, -1);
                        "Object" === r && t.constructor && (r = t.constructor.name);
                        if ("Map" === r || "Set" === r) return Array.from(t);
                        if ("Arguments" === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)) return $(t, e);
                    })(t)) ||
                    (e && t && "number" == typeof t.length)
                ) {
                    r && (t = r);
                    var n = 0;
                    return function () {
                        return n >= t.length ? { done: !0 } : { done: !1, value: t[n++] };
                    };
                }
                throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
            }
            function $(t, e) {
                (null == e || e > t.length) && (e = t.length);
                for (var r = 0, n = new Array(e); r < e; r++) n[r] = t[r];
                return n;
            }
            function G(t, e) {
                var r = Object.keys(t);
                if (Object.getOwnPropertySymbols) {
                    var n = Object.getOwnPropertySymbols(t);
                    e &&
                        (n = n.filter(function (e) {
                            return Object.getOwnPropertyDescriptor(t, e).enumerable;
                        })),
                        r.push.apply(r, n);
                }
                return r;
            }
            function V(t, e, r) {
                return e in t ? Object.defineProperty(t, e, { value: r, enumerable: !0, configurable: !0, writable: !0 }) : (t[e] = r), t;
            }
            var W = (function () {
                function t(e) {
                    var r = this;
                    V(this, "_initializingActive", !0),
                        V(this, "_recalc", !0),
                        V(this, "_nanopop", null),
                        V(this, "_root", null),
                        V(this, "_color", k()),
                        V(this, "_lastColor", k()),
                        V(this, "_swatchColors", []),
                        V(this, "_setupAnimationFrame", null),
                        V(this, "_eventListener", { init: [], save: [], hide: [], show: [], clear: [], change: [], changestop: [], cancel: [], swatchselect: [] }),
                        (this.options = e = Object.assign(
                            (function (t) {
                                for (var e = 1; e < arguments.length; e++) {
                                    var r = null != arguments[e] ? arguments[e] : {};
                                    e % 2
                                        ? G(Object(r), !0).forEach(function (e) {
                                              V(t, e, r[e]);
                                          })
                                        : Object.getOwnPropertyDescriptors
                                        ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(r))
                                        : G(Object(r)).forEach(function (e) {
                                              Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(r, e));
                                          });
                                }
                                return t;
                            })({}, t.DEFAULT_OPTIONS),
                            e
                        ));
                    var n = e,
                        o = n.swatches,
                        i = n.components,
                        a = n.theme,
                        c = n.sliders,
                        u = n.lockOpacity,
                        s = n.padding;
                    ["nano", "monolith"].includes(a) && !c && (e.sliders = "h"), i.interaction || (i.interaction = {});
                    var l = i.preview,
                        f = i.opacity,
                        p = i.hue,
                        v = i.palette;
                    (i.opacity = !u && f),
                        (i.palette = v || l || f || p),
                        this._preBuild(),
                        this._buildComponents(),
                        this._bindEvents(),
                        this._finalBuild(),
                        o &&
                            o.length &&
                            o.forEach(function (t) {
                                return r.addSwatch(t);
                            });
                    var h,
                        d,
                        g,
                        y,
                        b = this._root,
                        m = b.button,
                        w = b.app;
                    (this._nanopop =
                        ((d = w),
                        (g = { margin: s }),
                        (y = "object" != typeof (h = m) || h instanceof HTMLElement ? D({ reference: h, popper: d }, g) : h),
                        {
                            update: function () {
                                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : y,
                                    e = Object.assign(y, t),
                                    r = e.reference,
                                    n = e.popper;
                                if (!n || !r) throw new Error("Popper- or reference-element missing.");
                                return U(r, n, y);
                            },
                        })),
                        m.setAttribute("role", "button"),
                        m.setAttribute("aria-label", this._t("btn:toggle"));
                    var x = this;
                    this._setupAnimationFrame = requestAnimationFrame(function t() {
                        if (!w.offsetWidth) return requestAnimationFrame(t);
                        x.setColor(e.default),
                            x._rePositioningPicker(),
                            e.defaultRepresentation && ((x._representation = e.defaultRepresentation), x.setColorRepresentation(x._representation)),
                            e.showAlways && x.show(),
                            (x._initializingActive = !1),
                            x._emit("init");
                    });
                }
                var e = t.prototype;
                return (
                    (e._preBuild = function () {
                        for (var t, e, r, n, o, i, a, c, u, s, l, f, p = this.options, h = 0, g = ["el", "container"]; h < g.length; h++) {
                            var y = g[h];
                            p[y] = d(p[y]);
                        }
                        (this._root =
                            ((e = (t = this).options),
                            (r = e.components),
                            (n = e.useAsButton),
                            (o = e.inline),
                            (i = e.appClass),
                            (a = e.theme),
                            (c = e.lockOpacity),
                            (u = function (t) {
                                return t ? "" : 'style="display:none" hidden';
                            }),
                            (l = v(
                                '\n      <div :ref="root" class="pickr">\n\n        ' +
                                    (n ? "" : '<button type="button" :ref="button" class="pcr-button"></button>') +
                                    '\n\n        <div :ref="app" class="pcr-app ' +
                                    (i || "") +
                                    '" data-theme="' +
                                    a +
                                    '" ' +
                                    (o ? 'style="position: unset"' : "") +
                                    ' aria-label="' +
                                    (s = function (e) {
                                        return t._t(e);
                                    })("ui:dialog") +
                                    '" role="window">\n          <div class="pcr-selection" ' +
                                    u(r.palette) +
                                    '>\n            <div :obj="preview" class="pcr-color-preview" ' +
                                    u(r.preview) +
                                    '>\n              <button type="button" :ref="lastColor" class="pcr-last-color" aria-label="' +
                                    s("btn:last-color") +
                                    '"></button>\n              <div :ref="currentColor" class="pcr-current-color"></div>\n            </div>\n\n            <div :obj="palette" class="pcr-color-palette">\n              <div :ref="picker" class="pcr-picker"></div>\n              <div :ref="palette" class="pcr-palette" tabindex="0" aria-label="' +
                                    s("aria:palette") +
                                    '" role="listbox"></div>\n            </div>\n\n            <div :obj="hue" class="pcr-color-chooser" ' +
                                    u(r.hue) +
                                    '>\n              <div :ref="picker" class="pcr-picker"></div>\n              <div :ref="slider" class="pcr-hue pcr-slider" tabindex="0" aria-label="' +
                                    s("aria:hue") +
                                    '" role="slider"></div>\n            </div>\n\n            <div :obj="opacity" class="pcr-color-opacity" ' +
                                    u(r.opacity) +
                                    '>\n              <div :ref="picker" class="pcr-picker"></div>\n              <div :ref="slider" class="pcr-opacity pcr-slider" tabindex="0" aria-label="' +
                                    s("aria:opacity") +
                                    '" role="slider"></div>\n            </div>\n          </div>\n\n          <div class="pcr-swatches ' +
                                    (r.palette ? "" : "pcr-last") +
                                    '" :ref="swatches"></div>\n\n          <div :obj="interaction" class="pcr-interaction" ' +
                                    u(Object.keys(r.interaction).length) +
                                    '>\n            <input :ref="result" class="pcr-result" type="text" spellcheck="false" ' +
                                    u(r.interaction.input) +
                                    ' aria-label="' +
                                    s("aria:input") +
                                    '">\n\n            <input :arr="options" class="pcr-type" data-type="HEXA" value="' +
                                    (c ? "HEX" : "HEXA") +
                                    '" type="button" ' +
                                    u(r.interaction.hex) +
                                    '>\n            <input :arr="options" class="pcr-type" data-type="RGBA" value="' +
                                    (c ? "RGB" : "RGBA") +
                                    '" type="button" ' +
                                    u(r.interaction.rgba) +
                                    '>\n            <input :arr="options" class="pcr-type" data-type="HSLA" value="' +
                                    (c ? "HSL" : "HSLA") +
                                    '" type="button" ' +
                                    u(r.interaction.hsla) +
                                    '>\n            <input :arr="options" class="pcr-type" data-type="HSVA" value="' +
                                    (c ? "HSV" : "HSVA") +
                                    '" type="button" ' +
                                    u(r.interaction.hsva) +
                                    '>\n            <input :arr="options" class="pcr-type" data-type="CMYK" value="CMYK" type="button" ' +
                                    u(r.interaction.cmyk) +
                                    '>\n\n            <input :ref="save"  class="pcr-save" value="' +
                                    s("btn:save") +
                                    '" type="button" ' +
                                    u(r.interaction.save) +
                                    ' aria-label="' +
                                    s("aria:btn:save") +
                                    '">\n            <input :ref="cancel" class="pcr-cancel" value="' +
                                    s("btn:cancel") +
                                    '" type="button" ' +
                                    u(r.interaction.cancel) +
                                    ' aria-label="' +
                                    s("aria:btn:cancel") +
                                    '">\n            <input :ref="clear" class="pcr-clear" value="' +
                                    s("btn:clear") +
                                    '" type="button" ' +
                                    u(r.interaction.clear) +
                                    ' aria-label="' +
                                    s("aria:btn:clear") +
                                    '">\n          </div>\n        </div>\n      </div>\n    '
                            )),
                            (f = l.interaction).options.find(function (t) {
                                return !t.hidden && !t.classList.add("active");
                            }),
                            (f.type = function () {
                                return f.options.find(function (t) {
                                    return t.classList.contains("active");
                                });
                            }),
                            l)),
                            p.useAsButton && (this._root.button = p.el),
                            p.container.appendChild(this._root.root);
                    }),
                    (e._finalBuild = function () {
                        var t = this.options,
                            e = this._root;
                        if ((t.container.removeChild(e.root), t.inline)) {
                            var r = t.el.parentElement;
                            t.el.nextSibling ? r.insertBefore(e.app, t.el.nextSibling) : r.appendChild(e.app);
                        } else t.container.appendChild(e.app);
                        t.useAsButton ? t.inline && t.el.remove() : t.el.parentNode.replaceChild(e.root, t.el),
                            t.disabled && this.disable(),
                            t.comparison || ((e.button.style.transition = "none"), t.useAsButton || (e.preview.lastColor.style.transition = "none")),
                            this.hide();
                    }),
                    (e._buildComponents = function () {
                        var t = this,
                            e = this,
                            r = this.options.components,
                            n = (e.options.sliders || "v").repeat(2),
                            o = n.match(/^[vh]+$/g) ? n : [],
                            i = o[0],
                            a = o[1],
                            c = function () {
                                return t._color || (t._color = t._lastColor.clone());
                            },
                            u = {
                                palette: T({
                                    element: e._root.palette.picker,
                                    wrapper: e._root.palette.palette,
                                    onstop: function () {
                                        return e._emit("changestop", "slider", e);
                                    },
                                    onchange: function (t, n) {
                                        if (r.palette) {
                                            var o = c(),
                                                i = e._root,
                                                a = e.options,
                                                u = i.preview,
                                                s = u.lastColor,
                                                l = u.currentColor;
                                            e._recalc && ((o.s = 100 * t), (o.v = 100 - 100 * n), o.v < 0 && (o.v = 0), e._updateOutput("slider"));
                                            var f = o.toRGBA().toString(0);
                                            (this.element.style.background = f),
                                                (this.wrapper.style.background =
                                                    "\n                        linear-gradient(to top, rgba(0, 0, 0, " +
                                                    o.a +
                                                    "), transparent),\n                        linear-gradient(to left, hsla(" +
                                                    o.h +
                                                    ", 100%, 50%, " +
                                                    o.a +
                                                    "), rgba(255, 255, 255, " +
                                                    o.a +
                                                    "))\n                    "),
                                                a.comparison ? a.useAsButton || e._lastColor || s.style.setProperty("--pcr-color", f) : ((i.button.style.color = f), i.button.classList.remove("clear"));
                                            for (var p, v = o.toHEXA().toString(), h = H(e._swatchColors); !(p = h()).done; ) {
                                                var d = p.value,
                                                    g = d.el,
                                                    y = d.color;
                                                g.classList[v === y.toHEXA().toString() ? "add" : "remove"]("pcr-active");
                                            }
                                            l.style.setProperty("--pcr-color", f);
                                        }
                                    },
                                }),
                                hue: T({
                                    lock: "v" === a ? "h" : "v",
                                    element: e._root.hue.picker,
                                    wrapper: e._root.hue.slider,
                                    onstop: function () {
                                        return e._emit("changestop", "slider", e);
                                    },
                                    onchange: function (t) {
                                        if (r.hue && r.palette) {
                                            var n = c();
                                            e._recalc && (n.h = 360 * t), (this.element.style.backgroundColor = "hsl(" + n.h + ", 100%, 50%)"), u.palette.trigger();
                                        }
                                    },
                                }),
                                opacity: T({
                                    lock: "v" === i ? "h" : "v",
                                    element: e._root.opacity.picker,
                                    wrapper: e._root.opacity.slider,
                                    onstop: function () {
                                        return e._emit("changestop", "slider", e);
                                    },
                                    onchange: function (t) {
                                        if (r.opacity && r.palette) {
                                            var n = c();
                                            e._recalc && (n.a = Math.round(100 * t) / 100), (this.element.style.background = "rgba(0, 0, 0, " + n.a + ")"), u.palette.trigger();
                                        }
                                    },
                                }),
                                selectable: R({
                                    elements: e._root.interaction.options,
                                    className: "active",
                                    onchange: function (t) {
                                        (e._representation = t.target.getAttribute("data-type").toUpperCase()), e._recalc && e._updateOutput("swatch");
                                    },
                                }),
                            };
                        this._components = u;
                    }),
                    (e._bindEvents = function () {
                        var t = this,
                            e = this._root,
                            r = this.options,
                            n = [
                                l(e.interaction.clear, "click", function () {
                                    return t._clearColor();
                                }),
                                l([e.interaction.cancel, e.preview.lastColor], "click", function () {
                                    t.setHSVA.apply(t, (t._lastColor || t._color).toHSVA().concat([!0])), t._emit("cancel");
                                }),
                                l(e.interaction.save, "click", function () {
                                    !t.applyColor() && !r.showAlways && t.hide();
                                }),
                                l(e.interaction.result, ["keyup", "input"], function (e) {
                                    t.setColor(e.target.value, !0) && !t._initializingActive && (t._emit("change", t._color, "input", t), t._emit("changestop", "input", t)), e.stopImmediatePropagation();
                                }),
                                l(e.interaction.result, ["focus", "blur"], function (e) {
                                    (t._recalc = "blur" === e.type), t._recalc && t._updateOutput(null);
                                }),
                                l(
                                    [e.palette.palette, e.palette.picker, e.hue.slider, e.hue.picker, e.opacity.slider, e.opacity.picker],
                                    ["mousedown", "touchstart"],
                                    function () {
                                        return (t._recalc = !0);
                                    },
                                    { passive: !0 }
                                ),
                            ];
                        if (!r.showAlways) {
                            var o = r.closeWithKey;
                            n.push(
                                l(e.button, "click", function () {
                                    return t.isOpen() ? t.hide() : t.show();
                                }),
                                l(document, "keyup", function (e) {
                                    return t.isOpen() && (e.key === o || e.code === o) && t.hide();
                                }),
                                l(
                                    document,
                                    ["touchstart", "mousedown"],
                                    function (r) {
                                        t.isOpen() &&
                                            !h(r).some(function (t) {
                                                return t === e.app || t === e.button;
                                            }) &&
                                            t.hide();
                                    },
                                    { capture: !0 }
                                )
                            );
                        }
                        if (r.adjustableNumbers) {
                            var i = { rgba: [255, 255, 255, 1], hsva: [360, 100, 100, 1], hsla: [360, 100, 100, 1], cmyk: [100, 100, 100, 100] };
                            g(e.interaction.result, function (e, r, n) {
                                var o = i[t.getColorRepresentation().toLowerCase()];
                                if (o) {
                                    var a = o[n],
                                        c = e + (a >= 100 ? 1e3 * r : r);
                                    return c <= 0 ? 0 : Number((c < a ? c : a).toPrecision(3));
                                }
                                return e;
                            });
                        }
                        if (r.autoReposition && !r.inline) {
                            var a = null,
                                c = this;
                            n.push(
                                l(
                                    window,
                                    ["scroll", "resize"],
                                    function () {
                                        c.isOpen() &&
                                            (r.closeOnScroll && c.hide(),
                                            null === a
                                                ? ((a = setTimeout(function () {
                                                      return (a = null);
                                                  }, 100)),
                                                  requestAnimationFrame(function t() {
                                                      c._rePositioningPicker(), null !== a && requestAnimationFrame(t);
                                                  }))
                                                : (clearTimeout(a),
                                                  (a = setTimeout(function () {
                                                      return (a = null);
                                                  }, 100))));
                                    },
                                    { capture: !0 }
                                )
                            );
                        }
                        this._eventBindings = n;
                    }),
                    (e._rePositioningPicker = function () {
                        var t = this.options;
                        if (!t.inline && !this._nanopop.update({ container: document.body.getBoundingClientRect(), position: t.position })) {
                            var e = this._root.app,
                                r = e.getBoundingClientRect();
                            (e.style.top = (window.innerHeight - r.height) / 2 + "px"), (e.style.left = (window.innerWidth - r.width) / 2 + "px");
                        }
                    }),
                    (e._updateOutput = function (t) {
                        var e = this._root,
                            r = this._color,
                            n = this.options;
                        if (e.interaction.type()) {
                            var o = "to" + e.interaction.type().getAttribute("data-type");
                            e.interaction.result.value = "function" == typeof r[o] ? r[o]().toString(n.outputPrecision) : "";
                        }
                        !this._initializingActive && this._recalc && this._emit("change", r, t, this);
                    }),
                    (e._clearColor = function () {
                        var t = arguments.length > 0 && void 0 !== arguments[0] && arguments[0],
                            e = this._root,
                            r = this.options;
                        r.useAsButton || (e.button.style.color = "rgba(0, 0, 0, 0.15)"),
                            e.button.classList.add("clear"),
                            r.showAlways || this.hide(),
                            (this._lastColor = null),
                            this._initializingActive || t || (this._emit("save", null), this._emit("clear"));
                    }),
                    (e._parseLocalColor = function (t) {
                        var e = C(t),
                            r = e.values,
                            n = e.type,
                            o = e.a,
                            i = this.options.lockOpacity,
                            a = void 0 !== o && 1 !== o;
                        return r && 3 === r.length && (r[3] = void 0), { values: !r || (i && a) ? null : r, type: n };
                    }),
                    (e._t = function (e) {
                        return this.options.i18n[e] || t.I18N_DEFAULTS[e];
                    }),
                    (e._emit = function (t) {
                        for (var e = this, r = arguments.length, n = new Array(r > 1 ? r - 1 : 0), o = 1; o < r; o++) n[o - 1] = arguments[o];
                        this._eventListener[t].forEach(function (t) {
                            return t.apply(void 0, n.concat([e]));
                        });
                    }),
                    (e.on = function (t, e) {
                        return this._eventListener[t].push(e), this;
                    }),
                    (e.off = function (t, e) {
                        var r = this._eventListener[t] || [],
                            n = r.indexOf(e);
                        return ~n && r.splice(n, 1), this;
                    }),
                    (e.addSwatch = function (t) {
                        var e = this,
                            r = this._parseLocalColor(t).values;
                        if (r) {
                            var n = this._swatchColors,
                                o = this._root,
                                i = k.apply(void 0, r),
                                a = p('<button type="button" style="--pcr-color: ' + i.toRGBA().toString(0) + '" aria-label="' + this._t("btn:swatch") + '"/>');
                            return (
                                o.swatches.appendChild(a),
                                n.push({ el: a, color: i }),
                                this._eventBindings.push(
                                    l(a, "click", function () {
                                        e.setHSVA.apply(e, i.toHSVA().concat([!0])), e._emit("swatchselect", i), e._emit("change", i, "swatch", e);
                                    })
                                ),
                                !0
                            );
                        }
                        return !1;
                    }),
                    (e.removeSwatch = function (t) {
                        var e = this._swatchColors[t];
                        if (e) {
                            var r = e.el;
                            return this._root.swatches.removeChild(r), this._swatchColors.splice(t, 1), !0;
                        }
                        return !1;
                    }),
                    (e.applyColor = function () {
                        var t = arguments.length > 0 && void 0 !== arguments[0] && arguments[0],
                            e = this._root,
                            r = e.preview,
                            n = e.button,
                            o = this._color.toRGBA().toString(0);
                        return (
                            r.lastColor.style.setProperty("--pcr-color", o),
                            this.options.useAsButton || n.style.setProperty("--pcr-color", o),
                            n.classList.remove("clear"),
                            (this._lastColor = this._color.clone()),
                            this._initializingActive || t || this._emit("save", this._color),
                            this
                        );
                    }),
                    (e.destroy = function () {
                        var t = this;
                        cancelAnimationFrame(this._setupAnimationFrame),
                            this._eventBindings.forEach(function (t) {
                                return f.apply(n, t);
                            }),
                            Object.keys(this._components).forEach(function (e) {
                                return t._components[e].destroy();
                            });
                    }),
                    (e.destroyAndRemove = function () {
                        var t = this;
                        this.destroy();
                        var e = this._root,
                            r = e.root,
                            n = e.app;
                        r.parentElement && r.parentElement.removeChild(r),
                            n.parentElement.removeChild(n),
                            Object.keys(this).forEach(function (e) {
                                return (t[e] = null);
                            });
                    }),
                    (e.hide = function () {
                        return !!this.isOpen() && (this._root.app.classList.remove("visible"), this._emit("hide"), !0);
                    }),
                    (e.show = function () {
                        return !this.options.disabled && !this.isOpen() && (this._root.app.classList.add("visible"), this._rePositioningPicker(), this._emit("show", this._color), this);
                    }),
                    (e.isOpen = function () {
                        return this._root.app.classList.contains("visible");
                    }),
                    (e.setHSVA = function () {
                        var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 360,
                            e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                            r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0,
                            n = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 1,
                            o = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
                            i = this._recalc;
                        if (((this._recalc = !1), t < 0 || t > 360 || e < 0 || e > 100 || r < 0 || r > 100 || n < 0 || n > 1)) return !1;
                        this._color = k(t, e, r, n);
                        var a = this._components,
                            c = a.hue,
                            u = a.opacity,
                            s = a.palette;
                        return c.update(t / 360), u.update(n), s.update(e / 100, 1 - r / 100), o || this.applyColor(), i && this._updateOutput(), (this._recalc = i), !0;
                    }),
                    (e.setColor = function (t) {
                        var e = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
                        if (null === t) return this._clearColor(e), !0;
                        var r = this._parseLocalColor(t),
                            n = r.values,
                            o = r.type;
                        if (n) {
                            var i = o.toUpperCase(),
                                a = this._root.interaction.options,
                                c = a.find(function (t) {
                                    return t.getAttribute("data-type") === i;
                                });
                            if (c && !c.hidden)
                                for (var u, s = H(a); !(u = s()).done; ) {
                                    var l = u.value;
                                    l.classList[l === c ? "add" : "remove"]("active");
                                }
                            return !!this.setHSVA.apply(this, n.concat([e])) && this.setColorRepresentation(i);
                        }
                        return !1;
                    }),
                    (e.setColorRepresentation = function (t) {
                        return (
                            (t = t.toUpperCase()),
                            !!this._root.interaction.options.find(function (e) {
                                return e.getAttribute("data-type").startsWith(t) && !e.click();
                            })
                        );
                    }),
                    (e.getColorRepresentation = function () {
                        return this._representation;
                    }),
                    (e.getColor = function () {
                        return this._color;
                    }),
                    (e.getSelectedColor = function () {
                        return this._lastColor;
                    }),
                    (e.getRoot = function () {
                        return this._root;
                    }),
                    (e.disable = function () {
                        return this.hide(), (this.options.disabled = !0), this._root.button.classList.add("disabled"), this;
                    }),
                    (e.enable = function () {
                        return (this.options.disabled = !1), this._root.button.classList.remove("disabled"), this;
                    }),
                    t
                );
            })();
            V(W, "utils", n),
                V(W, "version", "1.8.1"),
                V(W, "I18N_DEFAULTS", {
                    "ui:dialog": "color picker dialog",
                    "btn:toggle": "toggle color picker dialog",
                    "btn:swatch": "color swatch",
                    "btn:last-color": "use previous color",
                    "btn:save": "Save",
                    "btn:cancel": "Cancel",
                    "btn:clear": "Clear",
                    "aria:btn:save": "save and close",
                    "aria:btn:cancel": "cancel and close",
                    "aria:btn:clear": "clear and close",
                    "aria:input": "color input field",
                    "aria:palette": "color selection area",
                    "aria:hue": "hue selection slider",
                    "aria:opacity": "selection slider",
                }),
                V(W, "DEFAULT_OPTIONS", {
                    appClass: null,
                    theme: "classic",
                    useAsButton: !1,
                    padding: 8,
                    disabled: !1,
                    comparison: !0,
                    closeOnScroll: !1,
                    outputPrecision: 0,
                    lockOpacity: !1,
                    autoReposition: !0,
                    container: "body",
                    components: { interaction: {} },
                    i18n: {},
                    swatches: null,
                    inline: !1,
                    sliders: null,
                    default: "#42445a",
                    defaultRepresentation: null,
                    position: "bottom-middle",
                    adjustableNumbers: !0,
                    showAlways: !1,
                    closeWithKey: "Escape",
                }),
                V(W, "create", function (t) {
                    return new W(t);
                });
            e.default = W;
        },
    ]).default;
});
//# sourceMappingURL=pickr.es5.min.js.map
  components= {
            preview: true,
            opacity: true,
            hue: true,
            interaction: {
                hex: true,
                rgba: true,
                input: true,
                clear: true,
                save: true,
            }
        };