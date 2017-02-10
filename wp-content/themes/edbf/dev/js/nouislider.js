/**
 * Created by Feri on 15/11/2016.
 */
/*! nouislider - 8.0.2 - 2015-07-06 13:22:09 */

!function (a) {
    if ("function" == typeof define && define.amd)define([], a); else if ("object" == typeof exports) {
        var b = require("fs");
        module.exports = a(), module.exports.css = function () {
            return b.readFileSync(__dirname + "/nouislider.min.css", "utf8")
        }
    } else window.noUiSlider = a()
}(function () {
    "use strict";
    function a(a) {
        return a.filter(function (a) {
            return this[a] ? !1 : this[a] = !0
        }, {})
    }

    function b(a, b) {
        return Math.round(a / b) * b
    }

    function c(a) {
        var b = a.getBoundingClientRect(), c = a.ownerDocument, d = c.defaultView || c.parentWindow, e = c.documentElement, f = d.pageXOffset;
        return /webkit.*Chrome.*Mobile/i.test(navigator.userAgent) && (f = 0), {
            top: b.top + d.pageYOffset - e.clientTop,
            left: b.left + f - e.clientLeft
        }
    }

    function d(a) {
        return "number" == typeof a && !isNaN(a) && isFinite(a)
    }

    function e(a) {
        var b = Math.pow(10, 7);
        return Number((Math.round(a * b) / b).toFixed(7))
    }

    function f(a, b, c) {
        j(a, b), setTimeout(function () {
            k(a, b)
        }, c)
    }

    function g(a) {
        return Math.max(Math.min(a, 100), 0)
    }

    function h(a) {
        return Array.isArray(a) ? a : [a]
    }

    function i(a) {
        var b = a.split(".");
        return b.length > 1 ? b[1].length : 0
    }

    function j(a, b) {
        a.classList ? a.classList.add(b) : a.className += " " + b
    }

    function k(a, b) {
        a.classList ? a.classList.remove(b) : a.className = a.className.replace(new RegExp("(^|\\b)" + b.split(" ").join("|") + "(\\b|$)", "gi"), " ")
    }

    function l(a, b) {
        a.classList ? a.classList.contains(b) : new RegExp("(^| )" + b + "( |$)", "gi").test(a.className)
    }

    function m(a, b) {
        return 100 / (b - a)
    }

    function n(a, b) {
        return 100 * b / (a[1] - a[0])
    }

    function o(a, b) {
        return n(a, a[0] < 0 ? b + Math.abs(a[0]) : b - a[0])
    }

    function p(a, b) {
        return b * (a[1] - a[0]) / 100 + a[0]
    }

    function q(a, b) {
        for (var c = 1; a >= b[c];)c += 1;
        return c
    }

    function r(a, b, c) {
        if (c >= a.slice(-1)[0])return 100;
        var d, e, f, g, h = q(c, a);
        return d = a[h - 1], e = a[h], f = b[h - 1], g = b[h], f + o([d, e], c) / m(f, g)
    }

    function s(a, b, c) {
        if (c >= 100)return a.slice(-1)[0];
        var d, e, f, g, h = q(c, b);
        return d = a[h - 1], e = a[h], f = b[h - 1], g = b[h], p([d, e], (c - f) * m(f, g))
    }

    function t(a, c, d, e) {
        if (100 === e)return e;
        var f, g, h = q(e, a);
        return d ? (f = a[h - 1], g = a[h], e - f > (g - f) / 2 ? g : f) : c[h - 1] ? a[h - 1] + b(e - a[h - 1], c[h - 1]) : e
    }

    function u(a, b, c) {
        var e;
        if ("number" == typeof b && (b = [b]), "[object Array]" !== Object.prototype.toString.call(b))throw new Error("noUiSlider: 'range' contains invalid value.");
        if (e = "min" === a ? 0 : "max" === a ? 100 : parseFloat(a), !d(e) || !d(b[0]))throw new Error("noUiSlider: 'range' value isn't numeric.");
        c.xPct.push(e), c.xVal.push(b[0]), e ? c.xSteps.push(isNaN(b[1]) ? !1 : b[1]) : isNaN(b[1]) || (c.xSteps[0] = b[1])
    }

    function v(a, b, c) {
        return b ? void(c.xSteps[a] = n([c.xVal[a], c.xVal[a + 1]], b) / m(c.xPct[a], c.xPct[a + 1])) : !0
    }

    function w(a, b, c, d) {
        this.xPct = [], this.xVal = [], this.xSteps = [d || !1], this.xNumSteps = [!1], this.snap = b, this.direction = c;
        var e, f = [];
        for (e in a)a.hasOwnProperty(e) && f.push([a[e], e]);
        for (f.sort(function (a, b) {
            return a[0] - b[0]
        }), e = 0; e < f.length; e++)u(f[e][1], f[e][0], this);
        for (this.xNumSteps = this.xSteps.slice(0), e = 0; e < this.xNumSteps.length; e++)v(e, this.xNumSteps[e], this)
    }

    function x(a, b) {
        if (!d(b))throw new Error("noUiSlider: 'step' is not numeric.");
        a.singleStep = b
    }

    function y(a, b) {
        if ("object" != typeof b || Array.isArray(b))throw new Error("noUiSlider: 'range' is not an object.");
        if (void 0 === b.min || void 0 === b.max)throw new Error("noUiSlider: Missing 'min' or 'max' in 'range'.");
        a.spectrum = new w(b, a.snap, a.dir, a.singleStep)
    }

    function z(a, b) {
        if (b = h(b), !Array.isArray(b) || !b.length || b.length > 2)throw new Error("noUiSlider: 'start' option is incorrect.");
        a.handles = b.length, a.start = b
    }

    function A(a, b) {
        if (a.snap = b, "boolean" != typeof b)throw new Error("noUiSlider: 'snap' option must be a boolean.")
    }

    function B(a, b) {
        if (a.animate = b, "boolean" != typeof b)throw new Error("noUiSlider: 'animate' option must be a boolean.")
    }

    function C(a, b) {
        if ("lower" === b && 1 === a.handles)a.connect = 1; else if ("upper" === b && 1 === a.handles)a.connect = 2; else if (b === !0 && 2 === a.handles)a.connect = 3; else {
            if (b !== !1)throw new Error("noUiSlider: 'connect' option doesn't match handle count.");
            a.connect = 0
        }
    }

    function D(a, b) {
        switch (b) {
            case"horizontal":
                a.ort = 0;
                break;
            case"vertical":
                a.ort = 1;
                break;
            default:
                throw new Error("noUiSlider: 'orientation' option is invalid.")
        }
    }

    function E(a, b) {
        if (!d(b))throw new Error("noUiSlider: 'margin' option must be numeric.");
        if (a.margin = a.spectrum.getMargin(b), !a.margin)throw new Error("noUiSlider: 'margin' option is only supported on linear sliders.")
    }

    function F(a, b) {
        if (!d(b))throw new Error("noUiSlider: 'limit' option must be numeric.");
        if (a.limit = a.spectrum.getMargin(b), !a.limit)throw new Error("noUiSlider: 'limit' option is only supported on linear sliders.")
    }

    function G(a, b) {
        switch (b) {
            case"ltr":
                a.dir = 0;
                break;
            case"rtl":
                a.dir = 1, a.connect = [0, 2, 1, 3][a.connect];
                break;
            default:
                throw new Error("noUiSlider: 'direction' option was not recognized.")
        }
    }

    function H(a, b) {
        if ("string" != typeof b)throw new Error("noUiSlider: 'behaviour' must be a string containing options.");
        var c = b.indexOf("tap") >= 0, d = b.indexOf("drag") >= 0, e = b.indexOf("fixed") >= 0, f = b.indexOf("snap") >= 0;
        a.events = {tap: c || f, drag: d, fixed: e, snap: f}
    }

    function I(a, b) {
        if (a.format = b, "function" == typeof b.to && "function" == typeof b.from)return !0;
        throw new Error("noUiSlider: 'format' requires 'to' and 'from' methods.")
    }

    function J(a) {
        var b, c = {margin: 0, limit: 0, animate: !0, format: U};
        b = {
            step: {r: !1, t: x},
            start: {r: !0, t: z},
            connect: {r: !0, t: C},
            direction: {r: !0, t: G},
            snap: {r: !1, t: A},
            animate: {r: !1, t: B},
            range: {r: !0, t: y},
            orientation: {r: !1, t: D},
            margin: {r: !1, t: E},
            limit: {r: !1, t: F},
            behaviour: {r: !0, t: H},
            format: {r: !1, t: I}
        };
        var d = {connect: !1, direction: "ltr", behaviour: "tap", orientation: "horizontal"};
        return Object.keys(d).forEach(function (b) {
            void 0 === a[b] && (a[b] = d[b])
        }), Object.keys(b).forEach(function (d) {
            var e = b[d];
            if (void 0 === a[d]) {
                if (e.r)throw new Error("noUiSlider: '" + d + "' is required.");
                return !0
            }
            e.t(c, a[d])
        }), c.pips = a.pips, c.style = c.ort ? "top" : "left", c
    }

    function K(a, b, c) {
        var d = a + b[0], e = a + b[1];
        return c ? (0 > d && (e += Math.abs(d)), e > 100 && (d -= e - 100), [g(d), g(e)]) : [d, e]
    }

    function L(a) {
        a.preventDefault();
        var b, c, d = 0 === a.type.indexOf("touch"), e = 0 === a.type.indexOf("mouse"), f = 0 === a.type.indexOf("pointer"), g = a;
        return 0 === a.type.indexOf("MSPointer") && (f = !0), d && (b = a.changedTouches[0].pageX, c = a.changedTouches[0].pageY), (e || f) && (b = a.clientX + window.pageXOffset, c = a.clientY + window.pageYOffset), g.points = [b, c], g.cursor = e || f, g
    }

    function M(a, b) {
        var c = document.createElement("div"), d = document.createElement("div"), e = ["-lower", "-upper"];
        return a && e.reverse(), j(d, T[3]), j(d, T[3] + e[b]), j(c, T[2]), c.appendChild(d), c
    }

    function N(a, b, c) {
        switch (a) {
            case 1:
                j(b, T[7]), j(c[0], T[6]);
                break;
            case 3:
                j(c[1], T[6]);
            case 2:
                j(c[0], T[7]);
            case 0:
                j(b, T[6])
        }
    }

    function O(a, b, c) {
        var d, e = [];
        for (d = 0; a > d; d += 1)e.push(c.appendChild(M(b, d)));
        return e
    }

    function P(a, b, c) {
        j(c, T[0]), j(c, T[8 + a]), j(c, T[4 + b]);
        var d = document.createElement("div");
        return j(d, T[1]), c.appendChild(d), d
    }

    function Q(b, d) {
        function e(a, b, c) {
            if ("range" === a || "steps" === a)return M.xVal;
            if ("count" === a) {
                var d, e = 100 / (b - 1), f = 0;
                for (b = []; (d = f++ * e) <= 100;)b.push(d);
                a = "positions"
            }
            return "positions" === a ? b.map(function (a) {
                return M.fromStepping(c ? M.getStep(a) : a)
            }) : "values" === a ? c ? b.map(function (a) {
                return M.fromStepping(M.getStep(M.toStepping(a)))
            }) : b : void 0
        }

        function m(b, c, d) {
            var e = M.direction, f = {}, g = M.xVal[0], h = M.xVal[M.xVal.length - 1], i = !1, j = !1, k = 0;
            return M.direction = 0, d = a(d.slice().sort(function (a, b) {
                return a - b
            })), d[0] !== g && (d.unshift(g), i = !0), d[d.length - 1] !== h && (d.push(h), j = !0), d.forEach(function (a, e) {
                var g, h, l, m, n, o, p, q, r, s, t = a, u = d[e + 1];
                if ("steps" === c && (g = M.xNumSteps[e]), g || (g = u - t), t !== !1 && void 0 !== u)for (h = t; u >= h; h += g) {
                    for (m = M.toStepping(h), n = m - k, q = n / b, r = Math.round(q), s = n / r, l = 1; r >= l; l += 1)o = k + l * s, f[o.toFixed(5)] = ["x", 0];
                    p = d.indexOf(h) > -1 ? 1 : "steps" === c ? 2 : 0, !e && i && (p = 0), h === u && j || (f[m.toFixed(5)] = [h, p]), k = m
                }
            }), M.direction = e, f
        }

        function n(a, b, c) {
            function e(a) {
                return ["-normal", "-large", "-sub"][a]
            }

            function f(a, b, c) {
                return 'class="' + b + " " + b + "-" + h + " " + b + e(c[1]) + '" style="' + d.style + ": " + a + '%"'
            }

            function g(a, d) {
                M.direction && (a = 100 - a), d[1] = d[1] && b ? b(d[0], d[1]) : d[1], i.innerHTML += "<div " + f(a, "noUi-marker", d) + "></div>", d[1] && (i.innerHTML += "<div " + f(a, "noUi-value", d) + ">" + c.to(d[0]) + "</div>")
            }

            var h = ["horizontal", "vertical"][d.ort], i = document.createElement("div");
            return j(i, "noUi-pips"), j(i, "noUi-pips-" + h), Object.keys(a).forEach(function (b) {
                g(b, a[b])
            }), i
        }

        function o(a) {
            var b = a.mode, c = a.density || 1, d = a.filter || !1, f = a.values || !1, g = a.stepped || !1, h = e(b, f, g), i = m(c, b, h), j = a.format || {to: Math.round};
            return I.appendChild(n(i, d, j))
        }

        function p() {
            return G["offset" + ["Width", "Height"][d.ort]]
        }

        function q(a, b) {
            void 0 !== b && (b = Math.abs(b - d.dir)), Object.keys(R).forEach(function (c) {
                var d = c.split(".")[0];
                a === d && R[c].forEach(function (a) {
                    a(h(B()), b, r(Array.prototype.slice.call(Q)))
                })
            })
        }

        function r(a) {
            return 1 === a.length ? a[0] : d.dir ? a.reverse() : a
        }

        function s(a, b, c, e) {
            var f = function (b) {
                return I.hasAttribute("disabled") ? !1 : l(I, T[14]) ? !1 : (b = L(b), a === S.start && void 0 !== b.buttons && b.buttons > 1 ? !1 : (b.calcPoint = b.points[d.ort], void c(b, e)))
            }, g = [];
            return a.split(" ").forEach(function (a) {
                b.addEventListener(a, f, !1), g.push([a, f])
            }), g
        }

        function t(a, b) {
            var c, d, e = b.handles || H, f = !1, g = 100 * (a.calcPoint - b.start) / p(), h = e[0] === H[0] ? 0 : 1;
            if (c = K(g, b.positions, e.length > 1), f = y(e[0], c[h], 1 === e.length), e.length > 1) {
                if (f = y(e[1], c[h ? 0 : 1], !1) || f)for (d = 0; d < b.handles.length; d++)q("slide", d)
            } else f && q("slide", h)
        }

        function u(a, b) {
            var c = G.getElementsByClassName(T[15]), d = b.handles[0] === H[0] ? 0 : 1;
            c.length && k(c[0], T[15]), a.cursor && (document.body.style.cursor = "", document.body.removeEventListener("selectstart", document.body.noUiListener));
            var e = document.documentElement;
            e.noUiListeners.forEach(function (a) {
                e.removeEventListener(a[0], a[1])
            }), k(I, T[12]), q("set", d), q("change", d)
        }

        function v(a, b) {
            var c = document.documentElement;
            if (1 === b.handles.length && (j(b.handles[0].children[0], T[15]), b.handles[0].hasAttribute("disabled")))return !1;
            a.stopPropagation();
            var d = s(S.move, c, t, {
                start: a.calcPoint,
                handles: b.handles,
                positions: [J[0], J[H.length - 1]]
            }), e = s(S.end, c, u, {handles: b.handles});
            if (c.noUiListeners = d.concat(e), a.cursor) {
                document.body.style.cursor = getComputedStyle(a.target).cursor, H.length > 1 && j(I, T[12]);
                var f = function () {
                    return !1
                };
                document.body.noUiListener = f, document.body.addEventListener("selectstart", f, !1)
            }
        }

        function w(a) {
            var b, e, g = a.calcPoint, h = 0;
            return a.stopPropagation(), H.forEach(function (a) {
                h += c(a)[d.style]
            }), b = h / 2 > g || 1 === H.length ? 0 : 1, g -= c(G)[d.style], e = 100 * g / p(), d.events.snap || f(I, T[14], 300), H[b].hasAttribute("disabled") ? !1 : (y(H[b], e), q("slide", b), q("set", b), q("change", b), void(d.events.snap && v(a, {handles: [H[h]]})))
        }

        function x(a) {
            var b, c;
            if (!a.fixed)for (b = 0; b < H.length; b += 1)s(S.start, H[b].children[0], v, {handles: [H[b]]});
            a.tap && s(S.start, G, w, {handles: H}), a.drag && (c = [G.getElementsByClassName(T[7])[0]], j(c[0], T[10]), a.fixed && c.push(H[c[0] === H[0] ? 1 : 0].children[0]), c.forEach(function (a) {
                s(S.start, a, v, {handles: H})
            }))
        }

        function y(a, b, c) {
            var e = a !== H[0] ? 1 : 0, f = J[0] + d.margin, h = J[1] - d.margin, i = J[0] + d.limit, l = J[1] - d.limit;
            return H.length > 1 && (b = e ? Math.max(b, f) : Math.min(b, h)), c !== !1 && d.limit && H.length > 1 && (b = e ? Math.min(b, i) : Math.max(b, l)), b = M.getStep(b), b = g(parseFloat(b.toFixed(7))), b === J[e] ? !1 : (a.style[d.style] = b + "%", a.previousSibling || (k(a, T[17]), b > 50 && j(a, T[17])), J[e] = b, Q[e] = M.fromStepping(b), q("update", e), !0)
        }

        function z(a, b) {
            var c, e, f;
            for (d.limit && (a += 1), c = 0; a > c; c += 1)e = c % 2, f = b[e], null !== f && f !== !1 && ("number" == typeof f && (f = String(f)), f = d.format.from(f), (f === !1 || isNaN(f) || y(H[e], M.toStepping(f), c === 3 - d.dir) === !1) && q("update", e))
        }

        function A(a) {
            var b, c, e = h(a);
            for (d.dir && d.handles > 1 && e.reverse(), d.animate && -1 !== J[0] && f(I, T[14], 300), b = H.length > 1 ? 3 : 1, 1 === e.length && (b = 1), z(b, e), c = 0; c < H.length; c++)q("set", c)
        }

        function B() {
            var a, b = [];
            for (a = 0; a < d.handles; a += 1)b[a] = d.format.to(Q[a]);
            return r(b)
        }

        function C() {
            T.forEach(function (a) {
                a && k(I, a)
            }), I.innerHTML = "", delete I.noUiSlider
        }

        function D() {
            var a = J.map(function (a, b) {
                var c = M.getApplicableStep(a), d = i(String(c[2])), e = Q[b], f = 100 === a ? null : c[2], g = Number((e - c[2]).toFixed(d)), h = 0 === a ? null : g >= c[1] ? c[2] : c[0] || !1;
                return [h, f]
            });
            return r(a)
        }

        function E(a, b) {
            R[a] = R[a] || [], R[a].push(b), "update" === a.split(".")[0] && H.forEach(function (a, b) {
                q("update", b)
            })
        }

        function F(a) {
            var b = a.split(".")[0], c = a.substring(b.length);
            Object.keys(R).forEach(function (a) {
                var d = a.split(".")[0], e = a.substring(d.length);
                b && b !== d || c && c !== e || delete R[a]
            })
        }

        var G, H, I = b, J = [-1, -1], M = d.spectrum, Q = [], R = {};
        if (I.noUiSlider)throw new Error("Slider was already initialized.");
        return G = P(d.dir, d.ort, I), H = O(d.handles, d.dir, G), N(d.connect, I, H), x(d.events), d.pips && o(d.pips), {
            destroy: C,
            steps: D,
            on: E,
            off: F,
            get: B,
            set: A
        }
    }

    function R(a, b) {
        if (!a.nodeName)throw new Error("noUiSlider.create requires a single element.");
        var c = J(b, a), d = Q(a, c);
        d.set(c.start), a.noUiSlider = d
    }

    var S = window.navigator.pointerEnabled ? {
        start: "pointerdown",
        move: "pointermove",
        end: "pointerup"
    } : window.navigator.msPointerEnabled ? {
        start: "MSPointerDown",
        move: "MSPointerMove",
        end: "MSPointerUp"
    } : {
        start: "mousedown touchstart",
        move: "mousemove touchmove",
        end: "mouseup touchend"
    }, T = ["noUi-target", "noUi-base", "noUi-origin", "noUi-handle", "noUi-horizontal", "noUi-vertical", "noUi-background", "noUi-connect", "noUi-ltr", "noUi-rtl", "noUi-dragable", "", "noUi-state-drag", "", "noUi-state-tap", "noUi-active", "", "noUi-stacking"];
    w.prototype.getMargin = function (a) {
        return 2 === this.xPct.length ? n(this.xVal, a) : !1
    }, w.prototype.toStepping = function (a) {
        return a = r(this.xVal, this.xPct, a), this.direction && (a = 100 - a), a
    }, w.prototype.fromStepping = function (a) {
        return this.direction && (a = 100 - a), e(s(this.xVal, this.xPct, a))
    }, w.prototype.getStep = function (a) {
        return this.direction && (a = 100 - a), a = t(this.xPct, this.xSteps, this.snap, a), this.direction && (a = 100 - a), a
    }, w.prototype.getApplicableStep = function (a) {
        var b = q(a, this.xPct), c = 100 === a ? 2 : 1;
        return [this.xNumSteps[b - 2], this.xVal[b - c], this.xNumSteps[b - c]]
    }, w.prototype.convert = function (a) {
        return this.getStep(this.toStepping(a))
    };
    var U = {
        to: function (a) {
            return a.toFixed(2)
        }, from: Number
    };
    return {create: R}
});