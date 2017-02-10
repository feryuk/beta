/* http://keith-wood.name/countdown.html
 Countdown for jQuery v2.0.0.
 Written by Keith Wood (kbwood{at}iinet.com.au) January 2008.
 Available under the MIT (https://github.com/jquery/jquery/blob/master/MIT-LICENSE.txt) license.
 Please attribute the author if you use it. */

!function (e) {
    var t = "countdown", i = 0, s = 1, n = 2, o = 3, a = 4, r = 5, l = 6;
    e.JQPlugin.createPlugin({
        name: t,
        defaultOptions: {
            until: null,
            since: null,
            timezone: null,
            serverSync: null,
            format: "dHMS",
            layout: "",
            compact: !1,
            padZeroes: !1,
            significant: 0,
            description: "",
            expiryUrl: "",
            expiryText: "",
            alwaysExpire: !1,
            onExpiry: null,
            onTick: null,
            tickInterval: 1
        },
        regionalOptions: {
            "": {
                labels: ["Years", "Months", "Weeks", "DAYS", "HRS", "MIN", "SEC"],
                labels1: ["Year", "Month", "Week", "Day", "Hour", "Minute", "Second"],
                compactLabels: ["y", "m", "w", "d"],
                whichLabels: null,
                digits: ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"],
                timeSeparator: ":",
                isRTL: !1
            }
        },
        _getters: ["getTimes"],
        _rtlClass: t + "-rtl",
        _sectionClass: t + "-section",
        _amountClass: t + "-amount",
        _periodClass: t + "-period",
        _rowClass: t + "-row",
        _holdingClass: t + "-holding",
        _showClass: t + "-show",
        _descrClass: t + "-descr",
        _timerElems: [],
        _init: function () {
            function t(e) {
                var r = 1e12 > e ? n ? performance.now() + performance.timing.navigationStart : s() : e || s();
                r - a >= 1e3 && (i._updateElems(), a = r), o(t)
            }

            var i = this;
            this._super(), this._serverSyncs = [];
            var s = "function" == typeof Date.now ? Date.now : function () {
                return (new Date).getTime()
            }, n = window.performance && "function" == typeof window.performance.now, o = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || null, a = 0;
            !o || e.noRequestAnimationFrame ? (e.noRequestAnimationFrame = null, setInterval(function () {
                i._updateElems()
            }, 980)) : (a = window.animationStartTime || window.webkitAnimationStartTime || window.mozAnimationStartTime || window.oAnimationStartTime || window.msAnimationStartTime || s(), o(t))
        },
        UTCDate: function (e, t, i, s, n, o, a, r) {
            "object" == typeof t && t.constructor == Date && (r = t.getMilliseconds(), a = t.getSeconds(), o = t.getMinutes(), n = t.getHours(), s = t.getDate(), i = t.getMonth(), t = t.getFullYear());
            var l = new Date;
            return l.setUTCFullYear(t), l.setUTCDate(1), l.setUTCMonth(i || 0), l.setUTCDate(s || 1), l.setUTCHours(n || 0), l.setUTCMinutes((o || 0) - (Math.abs(e) < 30 ? 60 * e : e)), l.setUTCSeconds(a || 0), l.setUTCMilliseconds(r || 0), l
        },
        periodsToSeconds: function (e) {
            return 31557600 * e[0] + 2629800 * e[1] + 604800 * e[2] + 86400 * e[3] + 3600 * e[4] + 60 * e[5] + e[6]
        },
        _instSettings: function () {
            return {_periods: [0, 0, 0, 0, 0, 0, 0]}
        },
        _addElem: function (e) {
            this._hasElem(e) || this._timerElems.push(e)
        },
        _hasElem: function (t) {
            return e.inArray(t, this._timerElems) > -1
        },
        _removeElem: function (t) {
            this._timerElems = e.map(this._timerElems, function (e) {
                return e == t ? null : e
            })
        },
        _updateElems: function () {
            for (var e = this._timerElems.length - 1; e >= 0; e--)this._updateCountdown(this._timerElems[e])
        },
        _optionsChanged: function (t, i, s) {
            s.layout && (s.layout = s.layout.replace(/&lt;/g, "<").replace(/&gt;/g, ">")), this._resetExtraLabels(i.options, s);
            var n = i.options.timezone != s.timezone;
            e.extend(i.options, s), this._adjustSettings(t, i, null != s.until || null != s.since || n);
            var o = new Date;
            (i._since && i._since < o || i._until && i._until > o) && this._addElem(t[0]), this._updateCountdown(t, i)
        },
        _updateCountdown: function (t, i) {
            if (t = t.jquery ? t : e(t), i = i || t.data(this.name)) {
                if (t.html(this._generateHTML(i)).toggleClass(this._rtlClass, i.options.isRTL), e.isFunction(i.options.onTick)) {
                    var s = "lap" != i._hold ? i._periods : this._calculatePeriods(i, i._show, i.options.significant, new Date);
                    (1 == i.options.tickInterval || this.periodsToSeconds(s) % i.options.tickInterval == 0) && i.options.onTick.apply(t[0], [s])
                }
                var n = "pause" != i._hold && (i._since ? i._now.getTime() < i._since.getTime() : i._now.getTime() >= i._until.getTime());
                if (n && !i._expiring) {
                    if (i._expiring = !0, this._hasElem(t[0]) || i.options.alwaysExpire) {
                        if (this._removeElem(t[0]), e.isFunction(i.options.onExpiry) && i.options.onExpiry.apply(t[0], []), i.options.expiryText) {
                            var o = i.options.layout;
                            i.options.layout = i.options.expiryText, this._updateCountdown(t[0], i), i.options.layout = o
                        }
                        i.options.expiryUrl && (window.location = i.options.expiryUrl)
                    }
                    i._expiring = !1
                } else"pause" == i._hold && this._removeElem(t[0])
            }
        },
        _resetExtraLabels: function (e, t) {
            var i = !1;
            for (var s in t)if ("whichLabels" != s && s.match(/[Ll]abels/)) {
                i = !0;
                break
            }
            if (i)for (var s in e)s.match(/[Ll]abels[02-9]|compactLabels1/) && (e[s] = null)
        },
        _adjustSettings: function (t, i, s) {
            for (var n, o = 0, a = null, r = 0; r < this._serverSyncs.length; r++)if (this._serverSyncs[r][0] == i.options.serverSync) {
                a = this._serverSyncs[r][1];
                break
            }
            if (null != a)o = i.options.serverSync ? a : 0, n = new Date; else {
                var l = e.isFunction(i.options.serverSync) ? i.options.serverSync.apply(t[0], []) : null;
                n = new Date, o = l ? n.getTime() - l.getTime() : 0, this._serverSyncs.push([i.options.serverSync, o])
            }
            var _ = i.options.timezone;
            _ = null == _ ? -n.getTimezoneOffset() : _, (s || !s && null == i._until && null == i._since) && (i._since = i.options.since, null != i._since && (i._since = this.UTCDate(_, this._determineTime(i._since, null)), i._since && o && i._since.setMilliseconds(i._since.getMilliseconds() + o)), i._until = this.UTCDate(_, this._determineTime(i.options.until, n)), o && i._until.setMilliseconds(i._until.getMilliseconds() + o)), i._show = this._determineShow(i)
        },
        _preDestroy: function (e) {
            this._removeElem(e[0]), e.empty()
        },
        pause: function (e) {
            this._hold(e, "pause")
        },
        lap: function (e) {
            this._hold(e, "lap")
        },
        resume: function (e) {
            this._hold(e, null)
        },
        toggle: function (t) {
            var i = e.data(t, this.name) || {};
            this[i._hold ? "resume" : "pause"](t)
        },
        toggleLap: function (t) {
            var i = e.data(t, this.name) || {};
            this[i._hold ? "resume" : "lap"](t)
        },
        _hold: function (t, i) {
            var s = e.data(t, this.name);
            if (s) {
                if ("pause" == s._hold && !i) {
                    s._periods = s._savePeriods;
                    var n = s._since ? "-" : "+";
                    s[s._since ? "_since" : "_until"] = this._determineTime(n + s._periods[0] + "y" + n + s._periods[1] + "o" + n + s._periods[2] + "w" + n + s._periods[3] + "d" + n + s._periods[4] + "h" + n + s._periods[5] + "m" + n + s._periods[6] + "s"), this._addElem(t)
                }
                s._hold = i, s._savePeriods = "pause" == i ? s._periods : null, e.data(t, this.name, s), this._updateCountdown(t, s)
            }
        },
        getTimes: function (t) {
            var i = e.data(t, this.name);
            return i ? "pause" == i._hold ? i._savePeriods : i._hold ? this._calculatePeriods(i, i._show, i.options.significant, new Date) : i._periods : null
        },
        _determineTime: function (e, t) {
            var i = this, s = function (e) {
                var t = new Date;
                return t.setTime(t.getTime() + 1e3 * e), t
            }, n = function (e) {
                e = e.toLowerCase();
                for (var t = new Date, s = t.getFullYear(), n = t.getMonth(), o = t.getDate(), a = t.getHours(), r = t.getMinutes(), l = t.getSeconds(), _ = /([+-]?[0-9]+)\s*(s|m|h|d|w|o|y)?/g, p = _.exec(e); p;) {
                    switch (p[2] || "s") {
                        case"s":
                            l += parseInt(p[1], 10);
                            break;
                        case"m":
                            r += parseInt(p[1], 10);
                            break;
                        case"h":
                            a += parseInt(p[1], 10);
                            break;
                        case"d":
                            o += parseInt(p[1], 10);
                            break;
                        case"w":
                            o += 7 * parseInt(p[1], 10);
                            break;
                        case"o":
                            n += parseInt(p[1], 10), o = Math.min(o, i._getDaysInMonth(s, n));
                            break;
                        case"y":
                            s += parseInt(p[1], 10), o = Math.min(o, i._getDaysInMonth(s, n))
                    }
                    p = _.exec(e)
                }
                return new Date(s, n, o, a, r, l, 0)
            }, o = null == e ? t : "string" == typeof e ? n(e) : "number" == typeof e ? s(e) : e;
            return o && o.setMilliseconds(0), o
        },
        _getDaysInMonth: function (e, t) {
            return 32 - new Date(e, t, 32).getDate()
        },
        _normalLabels: function (e) {
            return e
        },
        _generateHTML: function (t) {
            var _ = this;
            t._periods = t._hold ? t._periods : this._calculatePeriods(t, t._show, t.options.significant, new Date);
            for (var p = !1, u = 0, c = t.options.significant, h = e.extend({}, t._show), d = i; l >= d; d++)p |= "?" == t._show[d] && t._periods[d] > 0, h[d] = "?" != t._show[d] || p ? t._show[d] : null, u += h[d] ? 1 : 0, c -= t._periods[d] > 0 ? 1 : 0;
            for (var m = [!1, !1, !1, !1, !1, !1, !1], d = l; d >= i; d--)t._show[d] && (t._periods[d] ? m[d] = !0 : (m[d] = c > 0, c--));
            var g = t.options.compact ? t.options.compactLabels : t.options.labels, w = t.options.whichLabels || this._normalLabels, f = function (e) {
                var i = t.options["compactLabels" + w(t._periods[e])];
                return h[e] ? _._translateDigits(t, t._periods[e]) + (i ? i[e] : g[e]) + " " : ""
            }, D = t.options.padZeroes ? 2 : 1, y = function (e) {
                var i = t.options["labels" + w(t._periods[e])];
                return !t.options.significant && h[e] || t.options.significant && m[e] ? '<span class="' + _._sectionClass + '"><span class="' + _._amountClass + '">' + _._minDigits(t, t._periods[e], D) + '</span><span class="' + _._periodClass + '">' + (i ? i[e] : g[e]) + "</span></span>" : ""
            };
            return t.options.layout ? this._buildLayout(t, h, t.options.layout, t.options.compact, t.options.significant, m) : (t.options.compact ? '<span class="' + this._rowClass + " " + this._amountClass + (t._hold ? " " + this._holdingClass : "") + '">' + f(i) + f(s) + f(n) + f(o) + (h[a] ? this._minDigits(t, t._periods[a], 2) : "") + (h[r] ? (h[a] ? t.options.timeSeparator : "") + this._minDigits(t, t._periods[r], 2) : "") + (h[l] ? (h[a] || h[r] ? t.options.timeSeparator : "") + this._minDigits(t, t._periods[l], 2) : "") : '<span class="' + this._rowClass + " " + this._showClass + (t.options.significant || u) + (t._hold ? " " + this._holdingClass : "") + '">' + y(i) + y(s) + y(n) + y(o) + y(a) + y(r) + y(l)) + "</span>" + (t.options.description ? '<span class="' + this._rowClass + " " + this._descrClass + '">' + t.options.description + "</span>" : "")
        },
        _buildLayout: function (t, _, p, u, c, h) {
            for (var d = t.options[u ? "compactLabels" : "labels"], m = t.options.whichLabels || this._normalLabels, g = function (e) {
                return (t.options[(u ? "compactLabels" : "labels") + m(t._periods[e])] || d)[e]
            }, w = function (e, i) {
                return t.options.digits[Math.floor(e / i) % 10]
            }, f = {
                desc: t.options.description,
                sep: t.options.timeSeparator,
                yl: g(i),
                yn: this._minDigits(t, t._periods[i], 1),
                ynn: this._minDigits(t, t._periods[i], 2),
                ynnn: this._minDigits(t, t._periods[i], 3),
                y1: w(t._periods[i], 1),
                y10: w(t._periods[i], 10),
                y100: w(t._periods[i], 100),
                y1000: w(t._periods[i], 1e3),
                ol: g(s),
                on: this._minDigits(t, t._periods[s], 1),
                onn: this._minDigits(t, t._periods[s], 2),
                onnn: this._minDigits(t, t._periods[s], 3),
                o1: w(t._periods[s], 1),
                o10: w(t._periods[s], 10),
                o100: w(t._periods[s], 100),
                o1000: w(t._periods[s], 1e3),
                wl: g(n),
                wn: this._minDigits(t, t._periods[n], 1),
                wnn: this._minDigits(t, t._periods[n], 2),
                wnnn: this._minDigits(t, t._periods[n], 3),
                w1: w(t._periods[n], 1),
                w10: w(t._periods[n], 10),
                w100: w(t._periods[n], 100),
                w1000: w(t._periods[n], 1e3),
                dl: g(o),
                dn: this._minDigits(t, t._periods[o], 1),
                dnn: this._minDigits(t, t._periods[o], 2),
                dnnn: this._minDigits(t, t._periods[o], 3),
                d1: w(t._periods[o], 1),
                d10: w(t._periods[o], 10),
                d100: w(t._periods[o], 100),
                d1000: w(t._periods[o], 1e3),
                hl: g(a),
                hn: this._minDigits(t, t._periods[a], 1),
                hnn: this._minDigits(t, t._periods[a], 2),
                hnnn: this._minDigits(t, t._periods[a], 3),
                h1: w(t._periods[a], 1),
                h10: w(t._periods[a], 10),
                h100: w(t._periods[a], 100),
                h1000: w(t._periods[a], 1e3),
                ml: g(r),
                mn: this._minDigits(t, t._periods[r], 1),
                mnn: this._minDigits(t, t._periods[r], 2),
                mnnn: this._minDigits(t, t._periods[r], 3),
                m1: w(t._periods[r], 1),
                m10: w(t._periods[r], 10),
                m100: w(t._periods[r], 100),
                m1000: w(t._periods[r], 1e3),
                sl: g(l),
                sn: this._minDigits(t, t._periods[l], 1),
                snn: this._minDigits(t, t._periods[l], 2),
                snnn: this._minDigits(t, t._periods[l], 3),
                s1: w(t._periods[l], 1),
                s10: w(t._periods[l], 10),
                s100: w(t._periods[l], 100),
                s1000: w(t._periods[l], 1e3)
            }, D = p, y = i; l >= y; y++) {
                var v = "yowdhms".charAt(y), T = new RegExp("\\{" + v + "<\\}([\\s\\S]*)\\{" + v + ">\\}", "g");
                D = D.replace(T, !c && _[y] || c && h[y] ? "$1" : "")
            }
            return e.each(f, function (e, t) {
                var i = new RegExp("\\{" + e + "\\}", "g");
                D = D.replace(i, t)
            }), D
        },
        _minDigits: function (e, t, i) {
            return t = "" + t, t.length >= i ? this._translateDigits(e, t) : (t = "0000000000" + t, this._translateDigits(e, t.substr(t.length - i)))
        },
        _translateDigits: function (e, t) {
            return ("" + t).replace(/[0-9]/g, function (t) {
                return e.options.digits[t]
            })
        },
        _determineShow: function (e) {
            var t = e.options.format, _ = [];
            return _[i] = t.match("y") ? "?" : t.match("Y") ? "!" : null, _[s] = t.match("o") ? "?" : t.match("O") ? "!" : null, _[n] = t.match("w") ? "?" : t.match("W") ? "!" : null, _[o] = t.match("d") ? "?" : t.match("D") ? "!" : null, _[a] = t.match("h") ? "?" : t.match("H") ? "!" : null, _[r] = t.match("m") ? "?" : t.match("M") ? "!" : null, _[l] = t.match("s") ? "?" : t.match("S") ? "!" : null, _
        },
        _calculatePeriods: function (e, t, _, p) {
            e._now = p, e._now.setMilliseconds(0);
            var u = new Date(e._now.getTime());
            e._since ? p.getTime() < e._since.getTime() ? e._now = p = u : p = e._since : (u.setTime(e._until.getTime()), p.getTime() > e._until.getTime() && (e._now = p = u));
            var c = [0, 0, 0, 0, 0, 0, 0];
            if (t[i] || t[s]) {
                var h = this._getDaysInMonth(p.getFullYear(), p.getMonth()), d = this._getDaysInMonth(u.getFullYear(), u.getMonth()), m = u.getDate() == p.getDate() || u.getDate() >= Math.min(h, d) && p.getDate() >= Math.min(h, d), g = function (e) {
                    return 60 * (60 * e.getHours() + e.getMinutes()) + e.getSeconds()
                }, w = Math.max(0, 12 * (u.getFullYear() - p.getFullYear()) + u.getMonth() - p.getMonth() + (u.getDate() < p.getDate() && !m || m && g(u) < g(p) ? -1 : 0));
                c[i] = t[i] ? Math.floor(w / 12) : 0, c[s] = t[s] ? w - 12 * c[i] : 0, p = new Date(p.getTime());
                var f = p.getDate() == h, D = this._getDaysInMonth(p.getFullYear() + c[i], p.getMonth() + c[s]);
                p.getDate() > D && p.setDate(D), p.setFullYear(p.getFullYear() + c[i]), p.setMonth(p.getMonth() + c[s]), f && p.setDate(D)
            }
            var y = Math.floor((u.getTime() - p.getTime()) / 1e3), v = function (e, i) {
                c[e] = t[e] ? Math.floor(y / i) : 0, y -= c[e] * i
            };
            if (v(n, 604800), v(o, 86400), v(a, 3600), v(r, 60), v(l, 1), y > 0 && !e._since)for (var T = [1, 12, 4.3482, 7, 24, 60, 60], M = l, C = 1, b = l; b >= i; b--)t[b] && (c[M] >= C && (c[M] = 0, y = 1), y > 0 && (c[b]++, y = 0, M = b, C = 1)), C *= T[b];
            if (_)for (var b = i; l >= b; b++)_ && c[b] ? _-- : _ || (c[b] = 0);
            return c
        }
    })
}(jQuery);