<!doctype html><!--[if lt IE 7 ]>
<html lang="en" class="no-js ie6"> <![endif]--><!--[if IE 7 ]>
<html lang="en" class="no-js ie7"> <![endif]--><!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> <![endif]--><!--[if IE 9 ]>
<html lang="en" class="no-js ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js" itemscope itemtype="http://schema.org/UK Tax Calculator"><!--<![endif]-->
<head>
    <script src="//load.sumome.com/"
            data-sumo-site-id="cf6f6c27908e9e8e2a152540facba0b150cd8d9c0b152fa1974168ebc6fa5341" async="async"></script>
    <meta charset="utf-8">
    <link rel="manifest" href="manifest.json"><!--Digital window verification 001 -->
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <!-- :[ Force latest IE rendering engine ]: -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script type="text/javascript">window.NREUM || (NREUM = {}), __nr_require = function (e, t, n) {
            function r(n) {
                if (!t[n]) {
                    var o = t[n] = {exports: {}};
                    e[n][0].call(o.exports, function (t) {
                        var o = e[n][1][t];
                        return r(o || t)
                    }, o, o.exports)
                }
                return t[n].exports
            }

            if ("function" == typeof __nr_require)return __nr_require;
            for (var o = 0; o < n.length; o++)r(n[o]);
            return r
        }({
            1: [function (e, t, n) {
                function r() {
                }

                function o(e, t, n) {
                    return function () {
                        return i(e, [(new Date).getTime()].concat(u(arguments)), t ? null : this, n), t ? void 0 : this
                    }
                }

                var i = e("handle"), a = e(2), u = e(3), c = e("ee").get("tracer"), f = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = f);
                var s = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit"], l = "api-", p = l + "ixn-";
                a(s, function (e, t) {
                    f[t] = o(l + t, !0, "api")
                }), f.addPageAction = o(l + "addPageAction", !0), f.setCurrentRouteName = o(l + "routeName", !0), t.exports = newrelic, f.interaction = function () {
                    return (new r).get()
                };
                var d = r.prototype = {
                    createTracer: function (e, t) {
                        var n = {}, r = this, o = "function" == typeof t;
                        return i(p + "tracer", [Date.now(), e, n], r), function () {
                            if (c.emit((o ? "" : "no-") + "fn-start", [Date.now(), r, o], n), o)try {
                                return t.apply(this, arguments)
                            } finally {
                                c.emit("fn-end", [Date.now()], n)
                            }
                        }
                    }
                };
                a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function (e, t) {
                    d[t] = o(p + t)
                }), newrelic.noticeError = function (e) {
                    "string" == typeof e && (e = new Error(e)), i("err", [e, (new Date).getTime()])
                }
            }, {}], 2: [function (e, t, n) {
                function r(e, t) {
                    var n = [], r = "", i = 0;
                    for (r in e)o.call(e, r) && (n[i] = t(r, e[r]), i += 1);
                    return n
                }

                var o = Object.prototype.hasOwnProperty;
                t.exports = r
            }, {}], 3: [function (e, t, n) {
                function r(e, t, n) {
                    t || (t = 0), "undefined" == typeof n && (n = e ? e.length : 0);
                    for (var r = -1, o = n - t || 0, i = Array(o < 0 ? 0 : o); ++r < o;)i[r] = e[t + r];
                    return i
                }

                t.exports = r
            }, {}], ee: [function (e, t, n) {
                function r() {
                }

                function o(e) {
                    function t(e) {
                        return e && e instanceof r ? e : e ? c(e, u, i) : i()
                    }

                    function n(n, r, o) {
                        if (!p.aborted) {
                            e && e(n, r, o);
                            for (var i = t(o), a = v(n), u = a.length, c = 0; c < u; c++)a[c].apply(i, r);
                            var f = s[w[n]];
                            return f && f.push([y, n, r, i]), i
                        }
                    }

                    function d(e, t) {
                        b[e] = v(e).concat(t)
                    }

                    function v(e) {
                        return b[e] || []
                    }

                    function g(e) {
                        return l[e] = l[e] || o(n)
                    }

                    function m(e, t) {
                        f(e, function (e, n) {
                            t = t || "feature", w[n] = t, t in s || (s[t] = [])
                        })
                    }

                    var b = {}, w = {}, y = {
                        on: d,
                        emit: n,
                        get: g,
                        listeners: v,
                        context: t,
                        buffer: m,
                        abort: a,
                        aborted: !1
                    };
                    return y
                }

                function i() {
                    return new r
                }

                function a() {
                    (s.api || s.feature) && (p.aborted = !0, s = p.backlog = {})
                }

                var u = "nr@context", c = e("gos"), f = e(2), s = {}, l = {}, p = t.exports = o();
                p.backlog = s
            }, {}], gos: [function (e, t, n) {
                function r(e, t, n) {
                    if (o.call(e, t))return e[t];
                    var r = n();
                    if (Object.defineProperty && Object.keys)try {
                        return Object.defineProperty(e, t, {value: r, writable: !0, enumerable: !1}), r
                    } catch (i) {
                    }
                    return e[t] = r, r
                }

                var o = Object.prototype.hasOwnProperty;
                t.exports = r
            }, {}], handle: [function (e, t, n) {
                function r(e, t, n, r) {
                    o.buffer([e], r), o.emit(e, t, n)
                }

                var o = e("ee").get("handle");
                t.exports = r, r.ee = o
            }, {}], id: [function (e, t, n) {
                function r(e) {
                    var t = typeof e;
                    return !e || "object" !== t && "function" !== t ? -1 : e === window ? 0 : a(e, i, function () {
                        return o++
                    })
                }

                var o = 1, i = "nr@id", a = e("gos");
                t.exports = r
            }, {}], loader: [function (e, t, n) {
                function r() {
                    if (!h++) {
                        var e = y.info = NREUM.info, t = l.getElementsByTagName("script")[0];
                        if (setTimeout(f.abort, 3e4), !(e && e.licenseKey && e.applicationID && t))return f.abort();
                        c(b, function (t, n) {
                            e[t] || (e[t] = n)
                        }), u("mark", ["onload", a()], null, "api");
                        var n = l.createElement("script");
                        n.src = "https://" + e.agent, t.parentNode.insertBefore(n, t)
                    }
                }

                function o() {
                    "complete" === l.readyState && i()
                }

                function i() {
                    u("mark", ["domContent", a()], null, "api")
                }

                function a() {
                    return (new Date).getTime()
                }

                var u = e("handle"), c = e(2), f = e("ee"), s = window, l = s.document, p = "addEventListener", d = "attachEvent", v = s.XMLHttpRequest, g = v && v.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    CT: clearTimeout,
                    XHR: v,
                    REQ: s.Request,
                    EV: s.Event,
                    PR: s.Promise,
                    MO: s.MutationObserver
                }, e(1);
                var m = "" + location, b = {
                    beacon: "bam.nr-data.net",
                    errorBeacon: "bam.nr-data.net",
                    agent: "js-agent.newrelic.com/nr-998.min.js"
                }, w = v && g && g[p] && !/CriOS/.test(navigator.userAgent), y = t.exports = {
                    offset: a(),
                    origin: m,
                    features: {},
                    xhrWrappable: w
                };
                l[p] ? (l[p]("DOMContentLoaded", i, !1), s[p]("load", r, !1)) : (l[d]("onreadystatechange", o), s[d]("onload", r)), u("mark", ["firstbyte", a()], null, "api");
                var h = 0
            }, {}]
        }, {}, ["loader"]);</script>
    <meta name="google-site-verification" content="cdleocIWyVQwUnGa2yicg1WglRfpcPP3MtQCFfpd_18"/>
    <title>#1 UK Income Tax Calculator 2016 &amp Salary Calculator since 1998!</title>
    <meta property="fb:admins" content="576458867"/>
    <meta property="og:title" content="#1 UK Income Tax Calculator 2016 &amp Salary Calculator since 1998!"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="//listentotaxman.com/"/>
    <meta property="og:image" content="//listentotaxman.com/style/img/listen-to-taxman-gold-260.png"/>
    <meta property="og:description"
          content="Calculate your 2016/2017 UK wage now with our free salary calculator. #1 since 98 our payslip shows take home net pay &amp; tax paid on your gross wages"/>
    <meta name="application-name" content="ListenToTaxman"/>
    <meta name="msapplication-TileColor" content="#d6aa3a"/>
    <meta name="msapplication-TileImage" content="/media/i/listen-to-taxman-gold-260.png"/>
    <meta name="description"
          content="Calculate your 2016/2017 UK wage now with our free salary calculator. #1 since 98 our payslip shows take home net pay &amp; tax paid on your gross wages"/>
    <meta name="Keywords"
          content="salary calculator, tax calculator, paye tax calculator, income tax, national insurance, take home pay, hmrc tax, hmrc self assessment, hmrc tax calculator"/>
    <meta name="google-site-verification" content="auDMlNsI2N-g2id3FMilidf72Du_RxzuNqbTw-8sJig"/>
    <meta name="author" content="Paul Langan, LTTNetwork.com">
    <!-- :[ Optimize mobile viewpost - link: //j.mp/bplateviewport ]: -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- remove the search for browserconfig.xml by IE11 users -->
    <meta name="msapplication-config" content="none"/><!-- :[ Browser will always ask for them ]: -->
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="//listentotaxman.com/style/img/listen-to-taxman-gold-260.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="image_src" type="image/jpeg" href="//listentotaxman.com/style/img/listen-to-taxman-gold-260.png"/>
    <!--[if IE]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/style/html2012.css" type="text/css">
    <link rel="stylesheet" href="/style/superfish.css" type="text/css">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css"> -->
    <!-- Add the following three tags inside head -->
    <meta itemprop="name" content="Listentotaxman.com">
    <meta itemprop="description"
          content="Calculate your 2016/2017 UK wage now with our free salary calculator. #1 since 98 our payslip shows take home net pay &amp; tax paid on your gross wages">
    <meta itemprop="image" content="//listentotaxman.com/media/i/listen-to-taxman-gold-2014.png">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script> (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-2035280-2', 'auto');
        ga('send', 'pageview');
        function _gaLt(event) {
            var el = event.srcElement || event.target;
            /* Loop up the tree through parent elements if clicked element is not a link (eg: an image in a link) */
            while (el && (typeof el.tagName == 'undefined' || el.tagName.toLowerCase() != 'a' || !el.href))    el = el.parentNode;
            if (el && el.href) {
                if (el.href.indexOf(location.host) == -1) { /* external link */
                    ga("send", "event", "Outgoing Links", el.href, document.location.pathname + document.location.search);
                    /* if target not set then delay opening of window by 0.5s to allow tracking */
                    if (!el.target || el.target.match(/^_(self|parent|top)$/i)) {
                        setTimeout(function () {
                            document.location.href = el.href;
                        }.bind(el), 500);
                        /* Prevent standard click */
                        event.preventDefault ? event.preventDefault() : event.returnValue = !1;
                    }
                }
            }
        }
        /* Attach the event to all clicks in the document after page has loaded */
        var w = window;
        w.addEventListener ? w.addEventListener("load", function () {
            document.body.addEventListener("click", _gaLt, !1)
        }, !1) : w.attachEvent && w.attachEvent("onload", function () {
            document.body.attachEvent("onclick", _gaLt)
        }); </script>
</head><!-- :[ Using body class for more control over styles ]: -->
<body class="">
<div class='login'></div>
<div id="fb-root"></div><!--	-->
<header>
    <!-- :[ We're using "inside" class here in case you have a full width header background, so the fixed width goes to .inside ]: --><a
        class="hreflogo" href="/uk-tax-calculator/" title="UK Tax Calculator - Listentotaxman Home"><img
            src="//listentotaxman.com/media/i/listen-to-taxman-gold-2014.png" align="left"
            style="padding:0px 4px 0px 0px" width="80" height="80" alt="listentotaxman" title="UK Tax Calculator"/></a>
    <div class="inside"><h1><a class="white" href="//listentotaxman.com/uk-tax-calculator/">ListenToTaxman<sup
                    style="font-size:small">&reg;</sup> Income Tax Calculator</a></h1>
        <h2>2016 / 2017 Salary &amp; HMRC Tax Calculator</h2>
        <h3>Wage calculator: Number 1 free UK tax calculator since 1998., national insurance, HMRC taxes and net
            pay</h3>
        <!--<span style="float:right; margin-right:50px;" class="top-nav-buttons"><a href="mailto:support@listentotaxman.com">Have a question / request? email me</a><a href="mailto:sales@listentotaxman.com">Advertise with us</a></span>-->
    </div><!-- :[ Navigation ]: -->
    <nav>
        <ul class="sf-menu">
            <li><a href="/m/">Mobile</a></li>
            <li><a href="//listentotaxman.com/uk-tax-calculator/">Tax Calculator</a></li>
            <li><a href="/uk-tax/uk-tax-calendar/">Tax Calendar</a></li>
            <li><a href="/uk-tax/tax-guides/">Tax Guides</a>
                <ul>
                    <li></li>
                    <li class="favourite"><a title="Contractors - LTD Company v Umbrella?"
                                             href="/uk-tax/tax-guides/contractors-limited-vs-umbrella.html">Contractors
                            - LTD Company v Umbrella?</a></li>
                    <li class="favourite"><a title="Landlord Tax Guide"
                                             href="/uk-tax/tax-guides/landlord-tax-guide.html">Landlord Tax Guide</a>
                    </li>
                    <li class="favourite"><a title="Self Assessment - Expenses for Self Employed"
                                             href="/uk-tax/tax-guides/self-assessment-expenses-for-self-employed.html">Self
                            Assessment - Expenses for Self Employed</a></li>
                    <li class="favourite"><a title="Self Assessment Guide by Listentotaxman"
                                             href="/uk-tax/tax-guides/self-assessment-tax-guide.html">Self Assessment
                            Guide by Listentotaxman</a></li>
                    <li class="favourite"><a title="Personal Tax Allowances and Rates 2016/17"
                                             href="/uk-tax/tax-guides/personal-tax-allowances-and-rates-2016-2017.html">Personal
                            Tax Allowances and Rates 2016/17</a></li>
                    <li class="favourite"><a title="Inheritance Tax Guide- Your need to know Guide"
                                             href="/uk-tax/tax-guides/guide-death-inheritance-tax-guide.html">Inheritance
                            Tax Guide- Your need to know Guide</a></li>
                    <li class="favourite"><a title="Tax Basics for Contractors"
                                             href="/uk-tax/tax-guides/tax-basics-for-contractors.html">Tax Basics for
                            Contractors</a></li>
                    <li class="favourite"><a title="10 personal finance tips freelancers &amp; contractors need to know"
                                             href="/uk-tax/tax-guides/10-ten-personal-finance-tips-for-freelancers-and-contractors.html">10
                            personal finance tips freelancers &amp; contractors need to know</a></li>
                    <li class="favourite"><a
                            title="End of Tax Year planning-Use your Allowances to reduce your tax bill."
                            href="/uk-tax/tax-guides/end-of-year-tax-planning-advice.html">End of Tax Year planning-Use
                            your Allowances to reduce your tax bill.</a></li>
                    <li class="favourite"><a title="Guide to the Changes to Stamp Duty"
                                             href="/uk-tax/tax-guides/stamp-duty-changes-2014.html">Guide to the Changes
                            to Stamp Duty</a><!--
SELECT id,image,thumb,title,coalesce(linktext,title) as linkText,summary, sections.sectionName, sectionCode, articleDate, articles.sectionID, pageField1, pageField2, pageField3, date_format(coalesce(articleDate,publishDate),'%d/%m/%y') AS aShortDate, date_format(coalesce(articleDate,publishDate),'%D %b') AS aMediumDate, date_format(coalesce(articleDate,publishDate),'%D %M %Y') AS aLongDate, date_format(coalesce(articleDate,publishDate), '%Y-%m-%dT%H:%i:%sZ') isoDate, date_format(coalesce(articleDate,publishDate), '%a, %d %b %Y %T GMT') AS gmtDate, memberName, memberEmail, format(hitsDay,0) as hitsDay, format(hitsWeek,0) as hitsWeek, format(hitsMonth,0) as hitsMonth, format(hitsAll,0) as hitsAll, pageField1, pageField2, pageField3, coalesce(permalink, id) as permalink FROM articles left join members on articles.authorID=members.memberID LEFT JOIN sections on articles.sectionID=sections.sectionID WHERE status=1 AND link=1 AND active=1 and (publishDate<=now() or publishDate=0) AND (expireDate >=now() or expireDate=0) AND sections.sectionStatus=1 AND sections.sectionCode='tax-guides' ORDER BY rank, isFavourite DESC, articleDate DESC LIMIT 0,512 WHERE:: WHERE::
--></li>
                </ul>
            </li>
            <li class="right">
                <div class="adunit" id="Nav_text_link_1" data-dimensions="180x34"></div>
            </li>
            <li class="right">
                <div class="adunit" id="Nav_text_link_2" data-dimensions="180x34"></div>
            </li>
            <!--<li class="right nohover"><img src="/style/img/listentotaxman-qr-code.png" width="24" height="24" class="showQRCode" style="padding-top:6px" /><ul><li class="nohover"><img src="/style/img/listentotaxman-qr-code.png" width="256" height="256" class="showQRCode" /></li></ul></li>-->
        </ul>
        <div class="far-right"><a href="http://www.facebook.com/listentotaxman"><img class="nav"
                                                                                     src="//listentotaxman.com/style/img/fb-fff-lo.png"
                                                                                     width="15" height="27"
                                                                                     alt="facebook"/></a></div>
        <div class="far-right"><a href="http://www.twitter.com/listentotaxman"><img class="nav"
                                                                                    src="//listentotaxman.com/style/img/tw-fff-lo.png"
                                                                                    width="29" height="27"
                                                                                    alt="twitter"/></a></div>
    </nav>
</header><!-- :[ End header ]: -->
<div id="calculator">
    <div id="calculator-wrap">
        <div style="padding:2px 2px 0px 6px;text-align:left; clear:left;">
            <!-- <div id="Osborne-728x90" class="adunit" data-dimensions="728x90,970x90"></div> -->
            <!-- 728x90 Leaderboard-top-calc -->
            <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-8609723574532278" data-ad-slot="5505906270"></ins>
            <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script>
        </div>
        <form name="frmcalc" action="/index.php" method="get" id="frmcalc" style="padding:0px;margin:0px;">
            <div id="calculator-input"><input type="hidden" name="ab" value="a"/><input type="hidden" name="c"
                                                                                        value="1"/>
                <table border="0" cellpadding="3" cellspacing="0" id="tblcalculator" style="border:1px solid #666666;"
                       align="left">
                    <tr>
                        <th colspan="2" class="black1 tleft">&nbsp;&nbsp;Your pay details</th>
                    </tr>
                    <tr>
                        <td align="left" class="light2"><label for="yr"><a id="tipSelectYear" href="#tip_selectyear"
                                                                           class="tipIcon" tabindex="500"><img
                                        src="//listentotaxman.com/media/i/tip/q.gif" width="16" height="16" hspace="3"
                                        border="0" alt="?"/></a> Select tax year</label></td>
                        <td align="right" bgcolor="#EFF8D3" class="light2"><select name="yr" class="sel handleYear"
                                                                                   id="yr" style="width:80px"
                                                                                   defaultValue="2016">
                                <option value="2016" selected="selected">2016/17</option>
                                <option value="2015">2015/16</option>
                                <option value="2014">2014/15</option>
                                <option value="2013">2013/14</option>
                                <option value="2012">2012/13</option>
                                <option value="2011">2011/12</option>
                                <option value="2010">2010/11</option>
                                <option value="2009">2009/10</option>
                                <option value="2008">2008/09</option>
                                <option value="2007">2007/08</option>
                                <option value="2006">2006/07</option>
                                <option value="2005">2005/06</option>
                                <option value="2004">2004/05</option>
                                <option value="2003">2003/04</option>
                                <option value="2002">2002/03</option>
                                <option value="2001">2001/02</option>
                                <option value="2000">2000/01</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" class="light1"><a class="tipIcon" href="#tip_marriedblindwidow"
                                                                       tabindex="500"><img
                                    src="//listentotaxman.com/media/i/tip/q.gif" width="16" height="16" hspace="3"
                                    border="0" alt="?"/></a><input defaultValue="n" id="married" class="handleReturn"
                                                                   type="checkbox" value="y" name="married"/> <label
                                for="married">Married</label>
                            <!--<label for="widow"> Widow</label><input id="widow" class="handleReturn" type="checkbox" value="y" name="widow" />--><input
                                defaultValue="n" id="blind" class="handleReturn" type="checkbox" value="y"
                                name="blind"/><label for="blind"> Blind</label> <input defaultValue="n" id="exNI"
                                                                                       type="checkbox" value="y"
                                                                                       name="exNI"/> <label for="exNI">I
                                pay no NI</label></td>
                    </tr>
                    <tr>
                        <td align="left" class="blue2"><label for="student"><a href="#tip_student" class="tipIcon"
                                                                               tabindex="500"><img
                                        src="//listentotaxman.com/media/i/tip/q.gif" width="16" height="16" hspace="3"
                                        border="0" alt="?"/></a>Repay Student Loan?</label></td>
                        <td align="right" class="blue2"><select name="plan" id="plan" class="sel handleReturn" id="plan"
                                                                defaultValue="0">
                                <option value="0" selected="selected">No</option>
                                <option value="1">Yes (Plan 1)</option>
                                <option value="2">Yes (Plan 2)</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td align="left" class="light1"><label for="age"><a href="#tip_selectage" class="tipIcon"
                                                                            tabindex="500"><img
                                        src="//listentotaxman.com/media/i/tip/q.gif" width="16" height="16" hspace="3"
                                        border="0" alt="?"/></a>Age</label></td>
                        <td align="right" class="light1"><select name="age" class="sel handleReturn" id="age"
                                                                 style="width:80px" defaultValue="0">
                                <option value="3">female 60 - 65</option>
                                <option value="0" selected="selected">under 65</option>
                                <option value="1">65 - 74</option>
                                <option value="2">over 75</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td align="left" class="light2"><label for="add"><a href="#tip_additionalallowances"
                                                                            class="tipIcon" tabindex="500"><img
                                        src="//listentotaxman.com/media/i/tip/q.gif" width="16" height="16" hspace="3"
                                        border="0" alt="?"/></a>Any Allowances/ -Deductions</label></td>
                        <td align="right" class="light2"><input defaultValue="0" id="add" type="text"
                                                                class="sel handleReturn" name="add" size="8" value="0"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" nowrap="nowrap" class="light1"><label for="code"><a href="#tip_code"
                                                                                             class="tipIcon"
                                                                                             tabindex="500"><img
                                        src="//listentotaxman.com/media/i/tip/q.gif" width="16" height="16" hspace="3"
                                        border="0" alt="?"/></a>Tax code (optional)</label></td>
                        <td align="right" class="light1"><input defaultValue="0" id="code" dplaceholder="tax code"
                                                                type="text" class="sel handleReturn" name="code"
                                                                size="8" value=""/></td>
                    </tr>
                    <tr>
                        <td align="left" nowrap="nowrap" bgcolor="#333333" class="bright"><label for="pension"><a
                                    href="#tip_pension" class="tipIcon" tabindex="500"><img
                                        src="//listentotaxman.com/media/i/tip/q.gif" width="16" height="16" hspace="3"
                                        border="0" alt="?"/></a>Pension Contribution (% or amount) </label></td>
                        <td align="left" nowrap="nowrap" bgcolor="#333333" class="tright"><input defaultValue="0"
                                                                                                 id="pension"
                                                                                                 placeholder="pension"
                                                                                                 type="text"
                                                                                                 class="sel handleReturn"
                                                                                                 name="pension" size="8"
                                                                                                 value="0"/></td>
                    </tr>
                    <tr>
                        <td align="" class="purple1" colspan="2"><label for="childcare"><a href="#tip_childcare"
                                                                                           class="tipIcon"
                                                                                           tabindex="500"><img
                                        src="//listentotaxman.com/media/i/tip/q.gif" width="16" height="16" hspace="3"
                                        border="0" alt="?"/></a>Childcare Vouchers</label><span style="float:right;">&pound;<input
                                    defaultValue="0" id="childcare" placeholder="childcare" type="text" name="childcare"
                                    size="6" value="0" class="handleReturn"/> per<select defaultValue="12"
                                                                                         name="childcare_freq"
                                                                                         id="childcare_freq"
                                                                                         style="width:80px"><option
                                        value="53">week</option> <option value="12" selected="selected">month</option> </select> </span>
                        </td>
                    </tr>
                    <tr id="childcare_options">
                        <td align="left" class="purple1" colspan="2"><label for="childcare"><a
                                    href="#tip_childcareoptions" class="tipIcon" tabindex="500"><img
                                        src="//listentotaxman.com/media/i/tip/q.gif" width="16" height="16" hspace="3"
                                        border="0" alt="?"/></a>Did you sign up before April 6 2011?</label><span
                                style="float:right;"><input defaultValue="n" id="childcare_pre2011" type="checkbox"
                                                            name="childcare_pre2011" class="handleReturn"/></span></td>
                    </tr>
                    <tr>
                        <td align="right" nowrap="nowrap" style="background-color:#fc0;" colspan="2" style>
                            <table width="100%" style="width:100%">
                                <tr>
                                    <td>
                                        <!-- <label for="ingr"><a href="#tip_grossincometime" class="tipIcon" tabindex="500"><img src="//listentotaxman.com/media/i/tip/q.gif" width="16" height="16" hspace="3" border="0" alt="?" /></a> -->
                                        I earn <em style="color:#666">(pre-tax)</em></label></td>
                                    <td><span class="currencyinput">&pound;<input id="ingr" type="text"
                                                                                  placeholder="gross wage"
                                                                                  class="sel handleReturn" name="ingr"
                                                                                  size="8" value=""/></span></td>
                                    <td>per</td>
                                    <td><select defaultValue="1" name="time" id="time" class="handleReturn"
                                                style="width:100px">
                                            <option value="1" selected="selected">year</option>
                                            <option value="12">month [12 Months]</option>
                                            <option value="13">4 weeks</option>
                                            <option value="26">2 weekly</option>
                                            <option value="52">week [52 Weeks]</option>
                                            <option value="260">day [5 Day Week]</option>
                                            <option value="1950">hour [37.5 Hour Week]</option>
                                        </select></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" nowrap="nowrap" class="red1" style="background-color:#ffffff" colspan="2">
                            <!-- <a href="#tip_email" class="tipIcon" tabindex="500"><img src="//listentotaxman.com/media/i/tip/q.gif" width="16" height="16" hspace="3" border="0" alt="?" /></a> --><span
                                class="calculateButtonSpan"><input type="submit" id="calculate" name="calculate"
                                                                   value="Calculate My Wage" class="sel"
                                                                   rel="nofollow"/></span></td>
                    </tr>
                </table> <!--END:TAX CALC--></div> <!--calculator-input-->
            <div id="calculator-results">
                <table border="0" align="right" cellpadding="3" cellspacing="0" id="tblresults">
                    <thead>
                    <tr class="row-summary">
                        <th class="row-label" id="thWageSummary">Salary Summary
                            <div id="viewColumns"><span>View</span>
                                <ul>
                                    <li><input name="vw[]" id="vw[pct]" type="checkbox" value="pct" checked="checked"
                                               readonly="true"/><label for="vw[pct]">%</label></li>
                                    <li><input name="vw[]" id="vw[yr]" type="checkbox" value="yr" checked="checked"
                                               readonly="true"/><label for="vw[yr]">Year</label></li>
                                    <li><input name="vw[]" id="vw[mth]" type="checkbox" value="mth" checked="checked"
                                               readonly="true" checked="checked"/><label for="vw[mth]">Month</label>
                                    </li>
                                    <li><input name="vw[]" id="vw[fourwk]" type="checkbox" value="fourwk"/><label
                                            for="vw[fourwk]">4 Week</label></li>
                                    <li><input name="vw[]" id="vw[twowk]" type="checkbox" value="twowk"/><label
                                            for="vw[twowk]">2 Week</label></li>
                                    <li><input name="vw[]" id="vw[wk]" type="checkbox" value="wk"
                                               checked="checked"/><label for="vw[wk]">1 Week</label></li>
                                    <li><input name="vw[]" id="vw[day]" type="checkbox" value="day"/><label
                                            for="vw[day]">Day</label></li>
                                </ul>
                            </div>
                        </th>
                        <th class="pct">%</th>
                        <th class="yr">Yearly</th>
                        <th class="mth">Monthly</th>
                        <th class="wk">Week</th>
                        <th class="twowk">2 Weeks</th>
                        <th class="fourwk">4 Weeks</th>
                        <th class="day">Day</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="row-gross">
                        <td class="row-label">Gross Pay</td>
                        <td class="pct">100%</td>
                        <td class="yr">&pound;0.00</td>
                        <td class="mth">&pound;0.00</td>
                        <td class="wk">&pound;0.00</td>
                        <td class="twowk">&pound;0.00</td>
                        <td class="fourwk">&pound;0.00</td>
                        <td class="day">&pound;0.00</td>
                    </tr>
                    <tr class="row-tfa">
                        <td class="row-label">Tax free allowance</td>
                        <td class="pct">0%</td>
                        <td class="yr">&pound;11,000.00</td>
                        <td class="mth">&pound;916.67</td>
                        <td class="wk">&pound;211.54</td>
                        <td class="twowk">&pound;423.08</td>
                        <td class="fourwk">&pound;846.15</td>
                        <td class="day">&pound;42.31</td>
                    </tr>
                    <tr class="row-taxable">
                        <td class="row-label">Total taxable</td>
                        <td class="pct">0%</td>
                        <td class="yr">&pound;0.00</td>
                        <td class="mth">&pound;0.00</td>
                        <td class="wk">&pound;0.00</td>
                        <td class="twowk">&pound;0.00</td>
                        <td class="fourwk">&pound;0.00</td>
                        <td class="day">&pound;0.00</td>
                    </tr>
                    <tr class="row-taxbands">
                        <td class="row-label"><img src="//listentotaxman.com/media/i/minus-lo.gif" id="toggle-tax-bands"
                                                   class="hand nav" align="absbottom" width="15" height="15" alt="x"
                                                   title="View tax payable in each band"/>Total Tax due
                        </td>
                        <td class="pct">0%</td>
                        <td class="yr">&pound;0.00</td>
                        <td class="mth">&pound;0.00</td>
                        <td class="wk">&pound;0.00</td>
                        <td class="twowk">&pound;0.00</td>
                        <td class="fourwk">&pound;0.00</td>
                        <td class="day">&pound;0.00</td>
                    </tr>
                    <tr id="row-taxband-0" class="tax-bands">
                        <td class="row-label">20% rate</td>
                        <td class="pct">0%</td>
                        <td class="yr">&pound;0.00</td>
                        <td class="mth">&pound;0.00</td>
                        <td class="wk">&pound;0.00</td>
                        <td class="twowk">&pound;0.00</td>
                        <td class="fourwk">&pound;0.00</td>
                        <td class="day">&pound;0.00</td>
                    </tr>
                    <tr id="row-taxband-1" class="tax-bands">
                        <td class="row-label">40% rate</td>
                        <td class="pct">0%</td>
                        <td class="yr">&pound;0.00</td>
                        <td class="mth">&pound;0.00</td>
                        <td class="wk">&pound;0.00</td>
                        <td class="twowk">&pound;0.00</td>
                        <td class="fourwk">&pound;0.00</td>
                        <td class="day">&pound;0.00</td>
                    </tr>
                    <tr id="row-taxband-2" class="tax-bands">
                        <td class="row-label">45% rate</td>
                        <td class="pct">0%</td>
                        <td class="yr">&pound;0.00</td>
                        <td class="mth">&pound;0.00</td>
                        <td class="wk">&pound;0.00</td>
                        <td class="twowk">&pound;0.00</td>
                        <td class="fourwk">&pound;0.00</td>
                        <td class="day">&pound;0.00</td>
                    </tr>
                    <tr class="row-ni">
                        <td class="row-label">National Insurance</td>
                        <td class="pct">0%</td>
                        <td class="yr">&pound;0.00</td>
                        <td class="mth">&pound;0.00</td>
                        <td class="wk">&pound;0.00</td>
                        <td class="twowk">&pound;0.00</td>
                        <td class="fourwk">&pound;0.00</td>
                        <td class="day">&pound;0.00</td>
                    </tr>
                    <tr class="row-total-deductions">
                        <td class="row-label">Total Deductions</td>
                        <td class="pct">0%</td>
                        <td class="yr">&pound;0.00</td>
                        <td class="mth">&pound;0.00</td>
                        <td class="wk">&pound;0.00</td>
                        <td class="twowk">&pound;0.00</td>
                        <td class="fourwk">&pound;0.00</td>
                        <td class="day">&pound;0.00</td>
                    </tr>
                    <tr class="row-net-wage">
                        <td class="row-label">Net Wage</td>
                        <td class="pct"><span>0%</span></td>
                        <td class="yr"><span>&pound;0.00</span></td>
                        <td class="mth"><span>&pound;0.00</span></td>
                        <td class="wk"><span>&pound;0.00</span></td>
                        <td class="twowk"><span>&pound;0.00</span></td>
                        <td class="fourwk"><span>&pound;0.00</span></td>
                        <td class="day"><span>&pound;0.00</span></td>
                    </tr>
                    <tr class="row-employers-ni">
                        <td class="row-label">Employers NI</td>
                        <td class="pct">0%</td>
                        <td class="yr">&pound;0.00</td>
                        <td class="mth">&pound;0.00</td>
                        <td class="wk">&pound;0.00</td>
                        <td class="twowk">&pound;0.00</td>
                        <td class="fourwk">&pound;0.00</td>
                        <td class="day">&pound;0.00</td>
                    </tr>
                    <tr class="row-previous-year">
                        <td class="row-label">Net change from 2015</td>
                        <td class="pct">&nbsp;</td>
                        <td class="yr">&pound;0.00</td>
                        <td class="mth">&pound;0.00</td>
                        <td class="wk">&pound;0.00</td>
                        <td class="twowk">&pound;0.00</td>
                        <td class="fourwk">&pound;0.00</td>
                        <td class="day">&pound;0.00</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr class="iphone-advert-results">
                        <td colspan="8" class="iphone-banner" style="background-color:#f37021">
                            <div id="Results_footer_300_60" class="adunit" data-dimensions="380x60"
                                 style="text-align:right"></div>
                            <!-- <a href="//listentotaxman.com/r.php?code=itunes-results-banner" title="Click here to purchase the listentotaxman uk tax calculator iphone app"><img src="advertisers/ltt/iphone-advert-results-2012.png" alt="iphone-advert-results-2012" /></a> -->
                            <!-- <a href="/r.php?c=edenredad" title="Get more information about Childcare Vouchers from Edenred"><img align="right" src="advertisers/edenred/ltt_ad4.jpg" alt="edenred childcare vouchers" /></a> -->
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div><!--calculator-results-->
            <style type="text/css"> .responsive-homepage-mpu {
                    display: inline-block;
                    width: 300px;
                    height: 250px;
                    padding-left: 8px;
                }

                @media (max-width: 1200px) {
                    .responsive-homepage-mpu {
                        ddisplay: none;
                    }
                } </style>
            <div class="calculator-right-ads" style="padding-top: 0px;padding-left:2px">
                <!--remove padding when not showing leaderboard-->
                <div class="calculator-ads" style="padding-right:0px">
                    <div id="125x125-1" class="adunit" data-dimensions="125x125"></div>
                    <div id="125x125-2" class="adunit" data-dimensions="125x125"></div>
                    <div id="125x125-3" class="adunit" data-dimensions="125x125"></div>
                </div>
                <div class="calculator-ads" style="">
                    <div id="125x125-4" class="adunit" data-dimensions="125x125"></div>
                    <div id="125x125-5" class="adunit" data-dimensions="125x125"></div>
                    <div id="125x125-6" class="adunit" data-dimensions="125x125"></div>
                </div>
            </div>
    </div>
</div><!--calculator-wrap--></form>
<div id="wrap"><!-- :[ Your Content ]: -->
    <div class="taxnews" id="lttTaxNews">
        <div class="mpu"> <!-- 336x280 mpu -->
            <ins class="adsbygoogle" google_ad_region="test"
                 style="padding-left:8px;display:inline-block;width:336px;height:280px"
                 data-ad-client="ca-pub-8609723574532278" data-ad-slot="4414007619"></ins>
            <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- 300 x 250 medium, bottom -->
            <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px"
                 data-ad-client="ca-pub-8609723574532278" data-ad-slot="2264413853"></ins>
            <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- responsive homepage-mpu -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8609723574532278"
                 data-ad-slot="7550884415" data-ad-format="auto"></ins>
            <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        </div>
        <div class="content"><h1>Latest News</h1>
            <div style="">
                <div class="summaries">
                    <div class="card cardNew"><h2><a title="Highlights of Philip Hammond's Autumn Statement"
                                                     href="/uk-tax/news/autumn-statement-2016-highlights.html"><span
                                    class="articleDate">23/11/16</span> Highlights of Philip Hammond's Autumn Statement</a>
                        </h2>
                        <p>The main talking points of the Autumn Statement</p></div>
                    <div class="card cardNew"><h2><a
                                title="Tax Calendar: Important Dates &amp; Deadlines December 2016 - January 2017"
                                href="/uk-tax/news/tax-calendar-october-november-2016.html"><span class="articleDate">04/10/16</span>
                                Tax Calendar: Important Dates &amp; Deadlines December 2016 - January 2017</a></h2>
                        <p>Now updated with January dates, here's a list of important tax dates and deadlines for the
                            coming months.</p></div>
                    <div class="card cardNew"><h2><a
                                title="Tax Credit overpayment problems predicted as the disregard drops back to 2005 level."
                                href="/uk-tax/news/tax-credit-overpayment-problems-predicted.html"><span
                                    class="articleDate">27/06/16</span> Tax Credit overpayment problems predicted as the
                                disregard drops back to 2005 level.</a></h2>
                        <p>Over payments likely to become a problem again -drop in the Tax Credit Disregard from &#163;5,000
                            to &#163;2,500. Renew your Tax Credits before July 31st.</p></div>
                    <div class="card cardNew"><h2><a
                                title="2015/16 End of year tax planning-use your allowances to reduce your tax bill"
                                href="/uk-tax/news/use-allowances-to-reduce-your-tax-in-bill-end-of-year-tax-planning.html"><span
                                    class="articleDate">01/04/16</span> 2015/16 End of year tax planning-use your
                                allowances to reduce your tax bill</a></h2>
                        <p>Some tax savings tips that can be implemented before April 5th.</p></div>
                    <div class="card cardNew"><h2><a title="Check your Tax Credits, or you could be out of pocket"
                                                     href="/uk-tax/news/check-your-tax-credits-or-be-out-of-pocket.html"><span
                                    class="articleDate">27/03/16</span> Check your Tax Credits, or you could be out of
                                pocket</a></h2>
                        <p>Double check details or you could end up owing money back. There has been another drop in the
                            Tax Credit Disregard.</p></div>
                    <div class="card cardNew"><h2><a title="2016/17 updates now live on the calculator"
                                                     href="/uk-tax/news/234-updates-are-live-for-uk-tax-calcuator.html"><span
                                    class="articleDate">16/03/16</span> 2016/17 updates now live on the calculator</a>
                        </h2>
                        <p>The changes from April 5th are now live on the calculator, includes the changes to marriage
                            allowances.. If you select the 2016/2017 value from the UK Tax Year field, you should be
                            good to go. Here are the allowances, rates, and changes to them, explained.</p></div>
                    <div class="card cardNew"><h2><a title="Talking points from todays Budget Announcement."
                                                     href="/uk-tax/news/236-talking-points-from-april-budget-2016.html"><span
                                    class="articleDate">16/03/16</span> Talking points from todays Budget Announcement.</a>
                        </h2>
                        <p>New lifetime ISA for under 40's; Sugar Tax on soft drink companies; Increase in ISA limit;
                            Decrease in Corporation Tax; Increased tightening of tax loopholes; all schools in England
                            to become academies; Increase in the Higher Income Threshold to &#163;45,000; Longer school
                            days.</p></div><!--
SELECT id,image,thumb,title,coalesce(linktext,title) as linkText,summary, sections.sectionName, sectionCode, articleDate, articles.sectionID, pageField1, pageField2, pageField3, date_format(coalesce(articleDate,publishDate),'%d/%m/%y') AS aShortDate, date_format(coalesce(articleDate,publishDate),'%D %b') AS aMediumDate, date_format(coalesce(articleDate,publishDate),'%D %M %Y') AS aLongDate, date_format(coalesce(articleDate,publishDate), '%Y-%m-%dT%H:%i:%sZ') isoDate, date_format(coalesce(articleDate,publishDate), '%a, %d %b %Y %T GMT') AS gmtDate, memberName, memberEmail, format(hitsDay,0) as hitsDay, format(hitsWeek,0) as hitsWeek, format(hitsMonth,0) as hitsMonth, format(hitsAll,0) as hitsAll, pageField1, pageField2, pageField3, coalesce(permalink, id) as permalink FROM articles left join members on articles.authorID=members.memberID LEFT JOIN sections on articles.sectionID=sections.sectionID WHERE status=1 AND link=1 AND active=1 and (publishDate<=now() or publishDate=0) AND (expireDate >=now() or expireDate=0) AND sections.sectionStatus=1 AND sections.sectionCode='news' AND articleDate >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR) ORDER BY rank, articleDate DESC LIMIT 0,10 WHERE:: WHERE::
-->
                    <div class="card"><h2><a title="Contracting / Freelancing - 10 pitfalls to avoid"
                                             href="/uk-tax/news/10-pitfalls-to-avoid-when-contracting-or-freelancing.html"><span
                                    class="articleDate">01/09/14</span> Contracting / Freelancing - 10 pitfalls to avoid</a>
                        </h2>
                        <p>Get it right and contracting gives you the best of all worlds: flexible working patterns,
                            uncapped income, tax breaks and an ever-growing network of contacts. There are, however,
                            potential pitfalls - here are ten to consciously avoid.</p></div>
                    <div class="card"><h2><a
                                title="Tax Calendar: Important Dates &amp; Deadlines December 2016 - January 2017"
                                href="/uk-tax/news/tax-calendar-october-november-2016.html"><span class="articleDate">04/10/16</span>
                                Tax Calendar: Important Dates &amp; Deadlines December 2016 - January 2017</a></h2>
                        <p>Now updated with January dates, here's a list of important tax dates and deadlines for the
                            coming months.</p></div>
                    <div class="card"><h2><a title="Self Assessment -Expenses you can claim back as an employee"
                                             href="/uk-tax/news/self-assessment-expenses-for-employees.html"><span
                                    class="articleDate">27/01/14</span> Self Assessment -Expenses you can claim back as
                                an employee</a></h2>
                        <p>Wondering what everyday work expenses you can claim back on your self assessment form? Here
                            are some expenses that a PAYE paying employee can claim. Note these can be back dated to
                            also!</p></div>
                    <div class="card"><h2><a
                                title="Tax Credit overpayment problems predicted as the disregard drops back to 2005 level."
                                href="/uk-tax/news/tax-credit-overpayment-problems-predicted.html"><span
                                    class="articleDate">27/06/16</span> Tax Credit overpayment problems predicted as the
                                disregard drops back to 2005 level.</a></h2>
                        <p>Over payments likely to become a problem again -drop in the Tax Credit Disregard from &#163;5,000
                            to &#163;2,500. Renew your Tax Credits before July 31st.</p></div>
                    <div class="card"><h2><a title="Last minute return? Self Assessment checklist and tips"
                                             href="/uk-tax/news/81-self-assessment-checklist-and-tips.html"><span
                                    class="articleDate">25/01/15</span> Last minute return? Self Assessment checklist
                                and tips</a></h2>
                        <p>Some last minute tips and links that may help you complete your Self Assessment form and
                            avoid any fines or penalties.</p></div><!--
SELECT id,image,thumb,title,coalesce(linktext,title) as linkText,summary, sections.sectionName, sectionCode, articleDate, articles.sectionID, pageField1, pageField2, pageField3, date_format(coalesce(articleDate,publishDate),'%d/%m/%y') AS aShortDate, date_format(coalesce(articleDate,publishDate),'%D %b') AS aMediumDate, date_format(coalesce(articleDate,publishDate),'%D %M %Y') AS aLongDate, date_format(coalesce(articleDate,publishDate), '%Y-%m-%dT%H:%i:%sZ') isoDate, date_format(coalesce(articleDate,publishDate), '%a, %d %b %Y %T GMT') AS gmtDate, memberName, memberEmail, format(hitsDay,0) as hitsDay, format(hitsWeek,0) as hitsWeek, format(hitsMonth,0) as hitsMonth, format(hitsAll,0) as hitsAll, pageField1, pageField2, pageField3, coalesce(permalink, id) as permalink FROM articles left join members on articles.authorID=members.memberID LEFT JOIN sections on articles.sectionID=sections.sectionID WHERE status=1 AND link=1 AND active=1 and (publishDate<=now() or publishDate=0) AND (expireDate >=now() or expireDate=0) AND sections.sectionStatus=1 AND sections.sectionCode='news' AND isFavourite='y' ORDER BY rank, articleDate DESC LIMIT 0,5 WHERE:: WHERE::
--></div>
                <h1>Our Recommended Articles</h1>
                <div class="card"><h3><a class="tooltip"
                                         title="Contracting / Freelancing - 10 pitfalls to avoid - Get it right and contracting gives you the best of all worlds: flexible working patterns, uncapped income, tax breaks and an ever-growing network of contacts. There are, however, potential pitfalls - here are ten to consciously avoid."
                                         href="/uk-tax/news/10-pitfalls-to-avoid-when-contracting-or-freelancing.html"><span
                                class="articleDate">01/09/14</span>Contracting / Freelancing - 10 pitfalls to avoid
                            more...</a></h3></div>
                <div class="card"><h3><a class="tooltip"
                                         title="Tax Calendar: Important Dates &amp; Deadlines December 2016 - January 2017 - Now updated with January dates, here's a list of important tax dates and deadlines for the coming months."
                                         href="/uk-tax/news/tax-calendar-october-november-2016.html"><span
                                class="articleDate">04/10/16</span>Tax Calendar: Important Dates &amp; Deadlines
                            December 2016 - January 2017 more...</a></h3></div>
                <div class="card"><h3><a class="tooltip"
                                         title="Self Assessment -Expenses you can claim back as an employee - Wondering what everyday work expenses you can claim back on your self assessment form? Here are some expenses that a PAYE paying employee can claim. Note these can be back dated to also!"
                                         href="/uk-tax/news/self-assessment-expenses-for-employees.html"><span
                                class="articleDate">27/01/14</span>Self Assessment -Expenses you can claim back as an
                            employee more...</a></h3></div>
                <div class="card"><h3><a class="tooltip"
                                         title="Tax Credit overpayment problems predicted as the disregard drops back to 2005 level. - Over payments likely to become a problem again -drop in the Tax Credit Disregard from &#163;5,000 to &#163;2,500. Renew your Tax Credits before July 31st."
                                         href="/uk-tax/news/tax-credit-overpayment-problems-predicted.html"><span
                                class="articleDate">27/06/16</span>Tax Credit overpayment problems predicted as the
                            disregard drops back to 2005 level. more...</a></h3></div>
                <div class="card"><h3><a class="tooltip"
                                         title="Last minute return? Self Assessment checklist and tips - Some last minute tips and links that may help you complete your Self Assessment form and avoid any fines or penalties."
                                         href="/uk-tax/news/81-self-assessment-checklist-and-tips.html"><span
                                class="articleDate">25/01/15</span>Last minute return? Self Assessment checklist and
                            tips more...</a></h3></div>
                <div class="card"><h3><a class="tooltip"
                                         title="Forgot about Self Assessment deadline? Have a look at the fines - Here we show just how much a late return and /or a late payment on your self assessment could cost you."
                                         href="/uk-tax/news/self-assessment-deadline-fines.html"><span
                                class="articleDate">18/12/13</span>Forgot about Self Assessment deadline? Have a look at
                            the fines more...</a></h3></div>
                <div class="card"><h3><a class="tooltip"
                                         title="Carry forward past years pension allowances - Previous years unused pension allowances can be carried forward so you can exceed the &#163;40,000 tax free limit this year. Higher earners should make the most of their pension allowance now, as it is under threat."
                                         href="/uk-tax/news/79-do-not-forget-to-carry-forward-past-years-pension-allowances.html"><span
                                class="articleDate">16/12/13</span>Carry forward past years pension allowances
                            more...</a></h3></div>
                <div class="card"><h3><a class="tooltip"
                                         title="HMRC goes after property tax evaders - The next group of tax evaders to go under the HMRC spotlight are those who have sold second property's, both within and outside the UK."
                                         href="/uk-tax/news/103-hmrc-goes-after-property-tax-evaders.html"><span
                                class="articleDate">06/03/13</span>HMRC goes after property tax evaders more...</a></h3>
                </div>
                <div class="card"><h3><a class="tooltip"
                                         title="Soften the Child Benefit blow with these tips - Tips to reduce the financial blow of the recent changes to Child Benefit."
                                         href="/uk-tax/news/86-soften-the-child-benefit-blow-with-these-tips.html"><span
                                class="articleDate">13/02/13</span>Soften the Child Benefit blow with these tips more...</a>
                    </h3></div>
                <div class="card"><h3><a class="tooltip"
                                         title="Home Working Allowance - If you are working from home you may be entitled to claim the working from home allowance? At &#163;216 a year tax free, it is worth finding out if you qualify."
                                         href="/uk-tax/news/48-how-working-allowance.html"><span class="articleDate">04/10/12</span>Home
                            Working Allowance more...</a></h3></div><!--
SELECT id,image,thumb,title,coalesce(linktext,title) as linkText,summary, sections.sectionName, sectionCode, articleDate, articles.sectionID, pageField1, pageField2, pageField3, date_format(coalesce(articleDate,publishDate),'%d/%m/%y') AS aShortDate, date_format(coalesce(articleDate,publishDate),'%D %b') AS aMediumDate, date_format(coalesce(articleDate,publishDate),'%D %M %Y') AS aLongDate, date_format(coalesce(articleDate,publishDate), '%Y-%m-%dT%H:%i:%sZ') isoDate, date_format(coalesce(articleDate,publishDate), '%a, %d %b %Y %T GMT') AS gmtDate, memberName, memberEmail, format(hitsDay,0) as hitsDay, format(hitsWeek,0) as hitsWeek, format(hitsMonth,0) as hitsMonth, format(hitsAll,0) as hitsAll, pageField1, pageField2, pageField3, coalesce(permalink, id) as permalink FROM articles left join members on articles.authorID=members.memberID LEFT JOIN sections on articles.sectionID=sections.sectionID WHERE status=1 AND link=1 AND active=1 and (publishDate<=now() or publishDate=0) AND (expireDate >=now() or expireDate=0) AND sections.sectionStatus=1 AND sections.sectionCode='news' AND isFavourite='y' ORDER BY rank, isFavourite DESC, articleDate DESC LIMIT 0,512 WHERE:: WHERE::
--><h1>Most read this past month</h1>
                <div class="card">
                    <ol><!---->
                        <li><a class="tooltip"
                               title="Self Assessment -Expenses you can claim back as an employee - Wondering what everyday work expenses you can claim back on your self assessment form? Here are some expenses that a PAYE paying employee can claim. Note these can be back dated to also! href="><span
                                    class="articleDate">27/01/14</span>Self Assessment -Expenses you can claim back as
                                an employee more...</a></li><!--
-->
                        <li><a class="tooltip"
                               title="Tax Calendar: Important Dates &amp; Deadlines December 2016 - January 2017 - Now updated with January dates, here's a list of important tax dates and deadlines for the coming months. href="><span
                                    class="articleDate">04/10/16</span>Tax Calendar: Important Dates &amp; Deadlines
                                December 2016 - January 2017 more...</a></li><!--
-->
                        <li><a class="tooltip"
                               title="2014/15 Tax rates and Thresholds are live - The changes from April 5th are now live on the calculator. If you select the 2014/2015 value from the UK Tax Year field, you should be good to go. href="><span
                                    class="articleDate">17/03/14</span>2014/15 Tax rates and Thresholds are live more...</a>
                        </li><!--
-->
                        <li><a class="tooltip"
                               title="Summary of 2015/16 budget changes - Annual Tax Return to be abolished. New Home Buyers ISA. Personal Allowance to increase to &pound;11,000 in 2 years. Read on to see how the budget will affect your take home wage. href="><span
                                    class="articleDate">18/03/15</span>Summary of 2015/16 budget changes more...</a>
                        </li><!--
-->
                        <li><a class="tooltip"
                               title="Forgot about Self Assessment deadline? Have a look at the fines - Here we show just how much a late return and /or a late payment on your self assessment could cost you. href="><span
                                    class="articleDate">18/12/13</span>Forgot about Self Assessment deadline? Have a
                                look at the fines more...</a></li><!--
-->
                        <li><a class="tooltip"
                               title="Contracting / Freelancing - 10 pitfalls to avoid - Get it right and contracting gives you the best of all worlds: flexible working patterns, uncapped income, tax breaks and an ever-growing network of contacts. There are, however, potential pitfalls - here are ten to consciously avoid. href="><span
                                    class="articleDate">01/09/14</span>Contracting / Freelancing - 10 pitfalls to avoid
                                more...</a></li><!--
-->
                        <li><a class="tooltip"
                               title="Home Working Allowance - If you are working from home you may be entitled to claim the working from home allowance? At &#163;216 a year tax free, it is worth finding out if you qualify. href="><span
                                    class="articleDate">04/10/12</span>Home Working Allowance more...</a></li><!--
-->
                        <li><a class="tooltip"
                               title="2016/17 updates now live on the calculator - The changes from April 5th are now live on the calculator, includes the changes to marriage allowances.. If you select the 2016/2017 value from the UK Tax Year field, you should be good to go. Here are the allowances, rates, and changes to them, explained. href="><span
                                    class="articleDate">16/03/16</span>2016/17 updates now live on the calculator
                                more...</a></li><!--
-->
                        <li><a class="tooltip"
                               title="2014/15 end of Tax Year planning-Use your Allowances to reduce your tax bill. - Last minute Tax Planning. Our basic guide to what annual allowances you have and how to use them to reduce your tax bill. href="><span
                                    class="articleDate">11/02/15</span>2014/15 end of Tax Year planning-Use your
                                Allowances to reduce your tax bill. more...</a></li><!--
-->
                        <li><a class="tooltip"
                               title="Last minute return? Self Assessment checklist and tips - Some last minute tips and links that may help you complete your Self Assessment form and avoid any fines or penalties. href="><span
                                    class="articleDate">25/01/15</span>Last minute return? Self Assessment checklist and
                                tips more...</a></li><!--<!--
SELECT id,image,thumb,title,coalesce(linktext,title) as linkText,summary, sections.sectionName, sectionCode, articleDate, articles.sectionID, pageField1, pageField2, pageField3, date_format(coalesce(articleDate,publishDate),'%d/%m/%y') AS aShortDate, date_format(coalesce(articleDate,publishDate),'%D %b') AS aMediumDate, date_format(coalesce(articleDate,publishDate),'%D %M %Y') AS aLongDate, date_format(coalesce(articleDate,publishDate), '%Y-%m-%dT%H:%i:%sZ') isoDate, date_format(coalesce(articleDate,publishDate), '%a, %d %b %Y %T GMT') AS gmtDate, memberName, memberEmail, format(hitsDay,0) as hitsDay, format(hitsWeek,0) as hitsWeek, format(hitsMonth,0) as hitsMonth, format(hitsAll,0) as hitsAll, pageField1, pageField2, pageField3, coalesce(permalink, id) as permalink FROM articles left join members on articles.authorID=members.memberID LEFT JOIN sections on articles.sectionID=sections.sectionID WHERE status=1 AND link=1 AND active=1 and (publishDate<=now() or publishDate=0) AND (expireDate >=now() or expireDate=0) AND sections.sectionStatus=1 AND sections.sectionCode='news' ORDER BY hitsMonth+0 DESC LIMIT 0,10 WHERE:: WHERE::
-->-->
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="taxnews" id="webTaxNews"><h1>Tax Guides</h1>
        <div style="">
            <div class="summaries">
                <div class="card cardNew"><h2><a title="Contractors - LTD Company v Umbrella?"
                                                 href="/uk-tax/tax-guides/contractors-limited-vs-umbrella.html"><span
                                class="articleDate">16/05/16</span>Contractors - LTD Company v Umbrella?</a></h2><img
                        src="/media/i/bookmark.png" class="bookmark" style="width:22px;float:right;"
                        alt="bookmark.png"/>
                    <p>What are the benefits for contractors of setting up a Limited Company vs Umbrella Company? Read
                        our guide, see how much you could take home in each setup.</p></div>
                <div class="card cardNew"><h2><a title="Landlord Tax Guide"
                                                 href="/uk-tax/tax-guides/landlord-tax-guide.html"><span
                                class="articleDate">27/05/16</span>Landlord Tax Guide</a></h2><img
                        src="/media/i/bookmark.png" class="bookmark" style="width:22px;float:right;"
                        alt="bookmark.png"/>
                    <p>In our detailed Landlord Tax Guide, our experts tell you what you can claim in expenses and a
                        comprehensive insight into HMRC tax rules</p></div>
                <div class="card cardNew"><h2><a title="Self Assessment - Expenses for Self Employed"
                                                 href="/uk-tax/tax-guides/self-assessment-expenses-for-self-employed.html"><span
                                class="articleDate">22/04/16</span>Self Assessment - Expenses for Self Employed</a></h2>
                    <img src="/media/i/bookmark.png" class="bookmark" style="width:22px;float:right;"
                         alt="bookmark.png"/>
                    <p>Tips on what business expenses you can claim when self employed.</p></div>
                <div class="card cardNew"><h2><a title="Personal Tax Allowances and Rates 2016/17"
                                                 href="/uk-tax/tax-guides/personal-tax-allowances-and-rates-2016-2017.html"><span
                                class="articleDate">26/04/16</span>Personal Tax Allowances and Rates 2016/17</a></h2>
                    <img src="/media/i/bookmark.png" class="bookmark" style="width:22px;float:right;"
                         alt="bookmark.png"/>
                    <p>We've listed the various tax rates, personal tax free allowances, national insurance bands which
                        have been updated now for the 2016/2017 Tax Year</p></div><!--
SELECT id,image,thumb,title,coalesce(linktext,title) as linkText,summary, sections.sectionName, sectionCode, articleDate, articles.sectionID, pageField1, pageField2, pageField3, date_format(coalesce(articleDate,publishDate),'%d/%m/%y') AS aShortDate, date_format(coalesce(articleDate,publishDate),'%D %b') AS aMediumDate, date_format(coalesce(articleDate,publishDate),'%D %M %Y') AS aLongDate, date_format(coalesce(articleDate,publishDate), '%Y-%m-%dT%H:%i:%sZ') isoDate, date_format(coalesce(articleDate,publishDate), '%a, %d %b %Y %T GMT') AS gmtDate, memberName, memberEmail, format(hitsDay,0) as hitsDay, format(hitsWeek,0) as hitsWeek, format(hitsMonth,0) as hitsMonth, format(hitsAll,0) as hitsAll, pageField1, pageField2, pageField3, coalesce(permalink, id) as permalink FROM articles left join members on articles.authorID=members.memberID LEFT JOIN sections on articles.sectionID=sections.sectionID WHERE status=1 AND link=1 AND active=1 and (publishDate<=now() or publishDate=0) AND (expireDate >=now() or expireDate=0) AND sections.sectionStatus=1 AND sections.sectionCode='tax-guides' AND articleDate >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR) ORDER BY rank, isFavourite DESC, articleDate DESC LIMIT 0,14 WHERE:: WHERE::
-->
                <div class="card"><h2><a title="Self Assessment Guide by Listentotaxman"
                                         href="/uk-tax/tax-guides/self-assessment-tax-guide.html"><span
                                class="articleDate">02/10/15</span>Self Assessment Guide by Listentotaxman</a></h2>
                    <p>Our guide to making your online self assessment return with tips on reducing you tax bill and
                        avoiding fines.</p></div>
                <div class="card"><h2><a title="Inheritance Tax Guide- Your need to know Guide"
                                         href="/uk-tax/tax-guides/guide-death-inheritance-tax-guide.html"><span
                                class="articleDate">10/03/14</span>Inheritance Tax Guide- Your need to know Guide</a>
                    </h2>
                    <p>Our basic guide to Inheritance Tax (IHT) and how you can save by a bit of forward planning.</p>
                </div>
                <div class="card"><h2><a title="Tax Basics for Contractors"
                                         href="/uk-tax/tax-guides/tax-basics-for-contractors.html"><span
                                class="articleDate">25/10/13</span>Tax Basics for Contractors</a></h2>
                    <p>Our Guide to tax, VAT, NI for Contractors, including tax saving tips.</p></div>
                <div class="card"><h2><a title="10 personal finance tips freelancers &amp; contractors need to know"
                                         href="/uk-tax/tax-guides/10-ten-personal-finance-tips-for-freelancers-and-contractors.html"><span
                                class="articleDate">02/10/15</span>10 personal finance tips freelancers &amp;
                            contractors need to know</a></h2>
                    <p>Organised properly, freelancing/contracting can be the most rewarding way to make a living.
                        Skilful tax planning can transform your finances - and with 15% of the workforce self-employed,
                        financial services providers are at last offering the support contractors and freelancers
                        need.</p></div>
                <div class="card"><h2><a title="End of Tax Year planning-Use your Allowances to reduce your tax bill."
                                         href="/uk-tax/tax-guides/end-of-year-tax-planning-advice.html"><span
                                class="articleDate">24/03/15</span>End of Tax Year planning-Use your Allowances to
                            reduce your tax bill.</a></h2>
                    <p>Last minute Tax Planning. Our basic guide to what annual allowances you have and how to use them
                        to reduce your tax bill.</p></div>
                <div class="card"><h2><a title="Guide to the Changes to Stamp Duty"
                                         href="/uk-tax/tax-guides/stamp-duty-changes-2014.html"><span
                                class="articleDate">03/12/14</span>Guide to the Changes to Stamp Duty</a></h2>
                    <p>The Listentotaxman guide to the changes to Stamp duty from the 4th of Dec 2014.</p></div><!--
SELECT id,image,thumb,title,coalesce(linktext,title) as linkText,summary, sections.sectionName, sectionCode, articleDate, articles.sectionID, pageField1, pageField2, pageField3, date_format(coalesce(articleDate,publishDate),'%d/%m/%y') AS aShortDate, date_format(coalesce(articleDate,publishDate),'%D %b') AS aMediumDate, date_format(coalesce(articleDate,publishDate),'%D %M %Y') AS aLongDate, date_format(coalesce(articleDate,publishDate), '%Y-%m-%dT%H:%i:%sZ') isoDate, date_format(coalesce(articleDate,publishDate), '%a, %d %b %Y %T GMT') AS gmtDate, memberName, memberEmail, format(hitsDay,0) as hitsDay, format(hitsWeek,0) as hitsWeek, format(hitsMonth,0) as hitsMonth, format(hitsAll,0) as hitsAll, pageField1, pageField2, pageField3, coalesce(permalink, id) as permalink FROM articles left join members on articles.authorID=members.memberID LEFT JOIN sections on articles.sectionID=sections.sectionID WHERE status=1 AND link=1 AND active=1 and (publishDate<=now() or publishDate=0) AND (expireDate >=now() or expireDate=0) AND sections.sectionStatus=1 AND sections.sectionCode='tax-guides' AND articleDate < DATE_SUB(CURDATE(), INTERVAL 1 YEAR) ORDER BY rank, isFavourite DESC, articleDate DESC LIMIT 0,14 WHERE::1 year WHERE::year
--></div>
        </div>
        <h1>News from around the web</h1>
        <div style="">
            <div class="summaries">
                <div class="card"><h2><a title="Minimum wage changes for the under 24's this month"
                                         href="/uk-tax/taxnewslinks/248-minimum-wage-changes-for-under-24.html"><span
                                class="articleDate">06/10/16</span> Minimum wage changes for the under 24's this
                            month</a></h2>
                    <p>Those on the minimum wage under 24 years old, and those on Apprenticeships will see an increase
                        in their wage packets this month. <span class="hitCount" title="1:703||7:703||30:703">703</span>
                    </p></div><!--
SELECT id,image,thumb,title,coalesce(linktext,title) as linkText,summary, sections.sectionName, sectionCode, articleDate, articles.sectionID, pageField1, pageField2, pageField3, date_format(coalesce(articleDate,publishDate),'%d/%m/%y') AS aShortDate, date_format(coalesce(articleDate,publishDate),'%D %b') AS aMediumDate, date_format(coalesce(articleDate,publishDate),'%D %M %Y') AS aLongDate, date_format(coalesce(articleDate,publishDate), '%Y-%m-%dT%H:%i:%sZ') isoDate, date_format(coalesce(articleDate,publishDate), '%a, %d %b %Y %T GMT') AS gmtDate, memberName, memberEmail, format(hitsDay,0) as hitsDay, format(hitsWeek,0) as hitsWeek, format(hitsMonth,0) as hitsMonth, format(hitsAll,0) as hitsAll, pageField1, pageField2, pageField3, coalesce(permalink, id) as permalink FROM articles left join members on articles.authorID=members.memberID LEFT JOIN sections on articles.sectionID=sections.sectionID WHERE status=1 AND link=1 AND active=1 and (publishDate<=now() or publishDate=0) AND (expireDate >=now() or expireDate=0) AND sections.sectionStatus=1 AND sections.sectionCode='taxnewslinks' AND articleDate >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH) ORDER BY rank, articleDate DESC LIMIT 0,15 WHERE:: WHERE::
--></div>
        </div>
    </div>
    <div class="taxnews-wide" id="footerContent">
        <div class="inside"><h2>Personal Tax Free Allowances 2016-2017</h2>
            <p>&nbsp;</p>
            <table class="stripe" border="0" cellpadding="5">
                <thead>
                <tr>
                    <th>Allowance</th>
                    <th class="tright">2015/16</th>
                    <th class="tright">2016/17</th>
                    <th class="tright">Change</th>
                </tr>
                </thead>
                <tbody>
                <tr class="even">
                    <td>Basic</td>
                    <td class="tright">&pound;10,600</td>
                    <td class="tright">&pound;11,000</td>
                    <td class="tright">+ &pound;400</td>
                </tr>
                <tr class="odd">
                    <td>People born between 6th April 1938 - 5th April 1948</td>
                    <td class="tright">&pound;10.600</td>
                    <td class="tright">&pound;11,000</td>
                    <td class="tright">+ &pound;400</td>
                </tr>
                <tr class="even">
                    <td>People born before 6th April 1938</td>
                    <td class="tright">&pound;10.660</td>
                    <td class="tright">&pound;11,000</td>
                    <td class="tright">+ &pound;340</td>
                </tr>
                <tr class="odd">
                    <td>Married Couples Allowance ( if born before 6th April 1935)</td>
                    <td class="tright">&pound;8,355</td>
                    <td class="tright">&pound;8,165</td>
                    <td class="tright">+ &pound;190</td>
                </tr>
                <tr class="even">
                    <td>Blind Person's Allowance</td>
                    <td class="tright">&pound;2,290</td>
                    <td class="tright">&pound;2,290</td>
                    <td class="tright">none</td>
                </tr>
                </tbody>
            </table>
            <h2>&nbsp;Income Tax Bands</h2>
            <table class="stripe" border="0" cellpadding="5">
                <thead>
                <tr>
                    <th style="width: 50%;">Tax Rate</th>
                    <th>2015/16</th>
                    <th>2016/17</th>
                    <th>Change</th>
                </tr>
                </thead>
                <tbody>
                <tr class="odd">
                    <td>Basic rate 20%</td>
                    <td class="tright">&pound;0 -&pound;31,785</td>
                    <td class="tright">&pound;0 -&pound;32,000</td>
                    <td class="tright">+ &pound;215</td>
                </tr>
                <tr class="even">
                    <td>Higher Rate 40%</td>
                    <td class="tright">&pound;31,785 - &pound;150,000</td>
                    <td class="tright">&pound;32,000 - &pound;150,000</td>
                    <td class="tright">- &pound;215</td>
                </tr>
                <tr class="odd">
                    <td>Additional Rate 45%</td>
                    <td class="tright">&pound;150,001+</td>
                    <td class="tright">&pound;150,001+</td>
                    <td class="tright">no change</td>
                </tr>
                <tr class="even">
                    <td colspan="4"><em><strong>NOTE: These rates are applied after your tax free allowance has been
                                deducted from your gross wage.</strong></em></td>
                </tr>
                </tbody>
            </table>
            <h2>National Insurance Bands</h2>
            <table class="stripe" border="0" cellpadding="5">
                <thead>
                <tr>
                    <th>Description</th>
                    <th>2015/16</th>
                    <th>2016/17</th>
                </tr>
                </thead>
                <tbody>
                <tr class="odd">
                    <td>Weekly Lower earnings limit, primary Class 1</td>
                    <td class="tright">&pound;112</td>
                    <td class="tright">&pound;112</td>
                </tr>
                <tr class="even">
                    <td>Weekly Upper earnings limit, primary Class 1</td>
                    <td class="tright">&pound;815</td>
                    <td class="tright">&pound;827</td>
                </tr>
                <tr class="odd">
                    <td>Weekly Primary threshold</td>
                    <td class="tright">&pound;155</td>
                    <td class="tright">&pound;155</td>
                </tr>
                <tr class="even">
                    <td>Weekly Secondary threshold</td>
                    <td class="tright">&pound;156</td>
                    <td class="tright">&pound;156</td>
                </tr>
                <tr class="odd">
                    <td>Weekly Upper Secondary Threshold for U21&rsquo;s</td>
                    <td class="tright">&pound;815</td>
                    <td class="tright">&pound;827</td>
                </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>
            <p>Click here for a comprehensive breakdown of the full <a title="UK Tax Rates and Tables 2014 2015"
                                                                       href="http://listentotaxman.com/uk-tax/tax-rates/">tax
                    rates &amp; tables</a> for this tax year</p>
            <ol>
                <li>The Personal Tax Free Allowance reduces where the income is above &pound;100, 000 - by &pound;1 for
                    every &pound;2 of income above the &pound;100,000 limit. This reduction applies irrespective of age.
                </li>
                <li>2. These allowances reduce where the income is above the income limit for age-related allowances
                    by &pound;1 for every &pound;2 of income above the limit. For the 2010-11 year the Personal
                    Allowance for people aged 65 to 74 and 75 and over can be reduced below the basic Personal Allowance
                    where the income is above &pound;100,000.
                </li>
                <li>Relief for the Married Couple's Allowance is given at the rate of 10 per cent.</li>
            </ol>
            <p>* The 10 per cent starting rate applies to savings income only. If your non-savings income is above this
                limit then the 10 per cent starting rate for savings will not apply.</p>
            <p>As always, this calculator is an organic tool, evolving based on your suggestions. If you feel you would
                like a feature added to the calculator, let me know <a href="mailto:support@listentotaxman.com">support@listentotaxman.com</a>
            </p>
            <p>The UK PAYE tax calculator / salary calculator is active since 1998. We are happy to be considered as the
                number one calculator on the internet for calculating earnings, proving an invaluable tool alongside any
                small business accounting solution or corporate payroll software. This simple tool calculates tax paid
                and national insurance contributions. The most recent rates and bands from HMRC inland revenue and UK
                budget decisions. </p>
            <p>Tested on a</div>
    </div>
</div>
<footer>
    <div class="taxnews-wide">
        <div class="inside">
            <!-- :[ Inside class here exists for the same purpose of the inside class of the header ]: -->
            <!-- :[ You can also add HTML5 badge here from W3C schools :) ]: -->
            <div class="tip" id="tip_selectyear"><strong>Select Year: </strong>This salary calculator has the capability
                to display your pay details, as they would have been, back as far as 1999. Remember that the tax year
                begins on April 6th of each year
            </div>
            <div class="tip" id="tip_marriedblindwidow"><strong>Married:</strong> Married couples over the age of 65 may
                have an increased tfa, and do not pay national insurance. <br/> <strong>Blind; </strong>Additional
                allowance is made available to blind persons. <br/>
                <!--<strong>Widow; </strong>An additional allowance is available to people who lost a partner. <strong> <br />-->
                No NI</strong>; Click this if you want to exclude national insurance contributions from the calculations
            </div>
            <div class="tip" id="tip_student"><strong>Student Loan Repayment:</strong> If you were a student, and
                availed of a student loan, you will begin to repay this loan once your earnings go above a certain
                threshold. This years threshold begins at &pound;15,000. Student loans will be repaid at a rate of 9% of
                the additional income over and above this threshold. Click to include the repayment in your
                calculations.
            </div>
            <div class="tip" id="tip_selectage"><strong>Age Group:</strong> Additional allowances, and reduced / no
                National Insurance contributions are available for individuals over the age of 60* who are still in
                employment.
            </div>
            <div class="tip" id="tip_additionalallowances"><strong>Additional Allowances/ Deductions:</strong> If you
                have any additional allowances you wish to include in your calculations, include them here. Equally, if
                you have any deductions that you would like to take into consideration; add them here with a minus (-)
                symbol in front of the amount.
            </div>
            <div class="tip" id="tip_code" style="width:400px"><strong>Tax Code:</strong> If you know your code, include
                it here. By including your code, all other calculations will be disregarded.
            </div>
            <div class="tip" id="tip_childcare"><strong>Childcare Vouchers:</strong> If your employer provides childcare
                vouchers, you can reduce your tax liability by sacrificing a portion of your salary for the same value
                in childcare vouchers. If you are a higher rate tax payer, you stand to lose out if you have not signed
                up to a childcare voucher scheme by April 5th 2011.
            </div>
            <div class="tip" id="tip_childcareoptions">If you signed up to your Childcare Voucher scheme before April
                6th 2011, and are a higher or top rate tax payer, then you are entitled to higher tax savings from
                Childcare Vouchers.
            </div>
            <div class="tip" id="tip_grossincometime"><strong>Gross Income Per Year / Month / Week / Day:</strong>
                Select the time for which you are paid. All calculations will be based on an full years income at the
                rate specified. E.g. if you specify you are earning &pound;2,000 per mth, the calculator will provide a
                breakdown of earnings based on a full years salary of &pound;24,000 ( or &pound;2,000 x 12 ).
            </div>
            <div class="tip" id="tip_wagesummary"><strong>Wage Summary:</strong> Select the columns you would like to
                display on the wage summary table.
            </div>
            <div class="tip" id="tip_pension"><strong>Pension:</strong>If you currently have a pension enter the amount
                that you pay into the pension on a regular basis. This can be entered in a percentage format e.g. 4%, or
                in a numeric format e.g. 500. <strong>Note</strong>When entering pension in a numeric format please use
                the same frequency as you used to enter your gross salary. E.g. if you specified an annual gross salary,
                the amount entered in the pension box will be for your annual pension contributions .
            </div>
            <div class="tip" id="tip_email"><strong>Email Address:</strong>Enter your email address and we'll save your
                details for next time.
            </div>
        </div>
    </div><!-- Responsive Footer -->
    <!-- <ins class="adsbygoogle" google_ad_region= "test" style="display:block" data-ad-client="ca-pub-8609723574532278" data-ad-slot="2635576415" data-ad-format="horizontal"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script> -->
</footer><!-- :[ The (load last) stuff ]: -->
<!-- :[ Load jQuery (and any other library if you like) from Google CDN ]:<script type="text/javascript" src="https://www.google.com/jsapi"></script>-->
<!-- :[ google.load('libraryName', 'libraryVersion') ]:<script type="text/javascript">google.load('jquery', '1.5.1');</script>-->
<!-- :[ Fallback to local if the CDN didn't load ]:<script>!window.jQuery && document.write(unescape('%3Cscript src="style/js/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>-->
<!-- :[ Help IE understand what we're doing ]: --><!--[if lt IE 9]>
<script src="//ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
<div class="tooltip"></div>
<style type="text/css">.ui-widget {
        font-size: 10px;
    }</style>
<script type="text/javascript" language="JavaScript">var firstPage = true;</script>
<!-- :[ Javascripts are all in the bottom of the document except for modernizr and LESS]: -->
<!-- <script src="/style/js/superfish.min.js"></script> -->
<script type="text/javascript"> /* jQuery Superfish Menu Plugin - v1.7.4 */
    ;
    (function (e) {
        "use strict";
        var s = function () {
            var s = {
                bcClass: "sf-breadcrumb",
                menuClass: "sf-js-enabled",
                anchorClass: "sf-with-ul",
                menuArrowClass: "sf-arrows"
            }, o = function () {
                var s = /iPhone|iPad|iPod/i.test(navigator.userAgent);
                return s && e(window).load(function () {
                    e("body").children().on("click", e.noop)
                }), s
            }(), n = function () {
                var e = document.documentElement.style;
                return "behavior" in e && "fill" in e && /iemobile/i.test(navigator.userAgent)
            }(), t = function (e, o) {
                var n = s.menuClass;
                o.cssArrows && (n += " " + s.menuArrowClass), e.toggleClass(n)
            }, i = function (o, n) {
                return o.find("li." + n.pathClass).slice(0, n.pathLevels).addClass(n.hoverClass + " " + s.bcClass).filter(function () {
                    return e(this).children(n.popUpSelector).hide().show().length
                }).removeClass(n.pathClass)
            }, r = function (e) {
                e.children("a").toggleClass(s.anchorClass)
            }, a = function (e) {
                var s = e.css("ms-touch-action");
                s = "pan-y" === s ? "auto" : "pan-y", e.css("ms-touch-action", s)
            }, l = function (s, t) {
                var i = "li:has(" + t.popUpSelector + ")";
                e.fn.hoverIntent && !t.disableHI ? s.hoverIntent(u, p, i) : s.on("mouseenter.superfish", i, u).on("mouseleave.superfish", i, p);
                var r = "MSPointerDown.superfish";
                o || (r += " touchend.superfish"), n && (r += " mousedown.superfish"), s.on("focusin.superfish", "li", u).on("focusout.superfish", "li", p).on(r, "a", t, h)
            }, h = function (s) {
                var o = e(this), n = o.siblings(s.data.popUpSelector);
                n.length > 0 && n.is(":hidden") && (o.one("click.superfish", !1), "MSPointerDown" === s.type ? o.trigger("focus") : e.proxy(u, o.parent("li"))())
            }, u = function () {
                var s = e(this), o = d(s);
                clearTimeout(o.sfTimer), s.siblings().superfish("hide").end().superfish("show")
            }, p = function () {
                var s = e(this), n = d(s);
                o ? e.proxy(f, s, n)() : (clearTimeout(n.sfTimer), n.sfTimer = setTimeout(e.proxy(f, s, n), n.delay))
            }, f = function (s) {
                s.retainPath = e.inArray(this[0], s.$path) > -1, this.superfish("hide"), this.parents("." + s.hoverClass).length || (s.onIdle.call(c(this)), s.$path.length && e.proxy(u, s.$path)())
            }, c = function (e) {
                return e.closest("." + s.menuClass)
            }, d = function (e) {
                return c(e).data("sf-options")
            };
            return {
                hide: function (s) {
                    if (this.length) {
                        var o = this, n = d(o);
                        if (!n)return this;
                        var t = n.retainPath === !0 ? n.$path : "", i = o.find("li." + n.hoverClass).add(this).not(t).removeClass(n.hoverClass).children(n.popUpSelector), r = n.speedOut;
                        s && (i.show(), r = 0), n.retainPath = !1, n.onBeforeHide.call(i), i.stop(!0, !0).animate(n.animationOut, r, function () {
                            var s = e(this);
                            n.onHide.call(s)
                        })
                    }
                    return this
                }, show: function () {
                    var e = d(this);
                    if (!e)return this;
                    var s = this.addClass(e.hoverClass), o = s.children(e.popUpSelector);
                    return e.onBeforeShow.call(o), o.stop(!0, !0).animate(e.animation, e.speed, function () {
                        e.onShow.call(o)
                    }), this
                }, destroy: function () {
                    return this.each(function () {
                        var o, n = e(this), i = n.data("sf-options");
                        return i ? (o = n.find(i.popUpSelector).parent("li"), clearTimeout(i.sfTimer), t(n, i), r(o), a(n), n.off(".superfish").off(".hoverIntent"), o.children(i.popUpSelector).attr("style", function (e, s) {
                            return s.replace(/display[^;]+;?/g, "")
                        }), i.$path.removeClass(i.hoverClass + " " + s.bcClass).addClass(i.pathClass), n.find("." + i.hoverClass).removeClass(i.hoverClass), i.onDestroy.call(n), n.removeData("sf-options"), void 0) : !1
                    })
                }, init: function (o) {
                    return this.each(function () {
                        var n = e(this);
                        if (n.data("sf-options"))return !1;
                        var h = e.extend({}, e.fn.superfish.defaults, o), u = n.find(h.popUpSelector).parent("li");
                        h.$path = i(n, h), n.data("sf-options", h), t(n, h), r(u), a(n), l(n, h), u.not("." + s.bcClass).superfish("hide", !0), h.onInit.call(this)
                    })
                }
            }
        }();
        e.fn.superfish = function (o) {
            return s[o] ? s[o].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof o && o ? e.error("Method " + o + " does not exist on jQuery.fn.superfish") : s.init.apply(this, arguments)
        }, e.fn.superfish.defaults = {
            popUpSelector: "ul,.sf-mega",
            hoverClass: "sfHover",
            pathClass: "overrideThisToUse",
            pathLevels: 1,
            delay: 800,
            animation: {opacity: "show"},
            animationOut: {opacity: "hide"},
            speed: "normal",
            speedOut: "fast",
            cssArrows: !0,
            disableHI: !1,
            onInit: e.noop,
            onBeforeShow: e.noop,
            onShow: e.noop,
            onBeforeHide: e.noop,
            onHide: e.noop,
            onIdle: e.noop,
            onDestroy: e.noop
        }, e.fn.extend({hideSuperfishUl: s.hide, showSuperfishUl: s.show})
    })(jQuery);
    (function (e) {
        e.fn.supersubs = function (t) {
            var n = e.extend({}, e.fn.supersubs.defaults, t);
            return this.each(function () {
                var t = e(this);
                var r = e.meta ? e.extend({}, n, t.data()) : n;
                $ULs = t.find("ul").show();
                var i = e('<li id="menu-fontsize">&#8212;</li>').css({
                    padding: 0,
                    position: "absolute",
                    top: "-999em",
                    width: "auto"
                }).appendTo(t)[0].clientWidth;
                e("#menu-fontsize").remove();
                $ULs.each(function (t) {
                    var n = e(this);
                    var s = n.children();
                    var u = s.children("a");
                    var a = s.css("white-space", "nowrap").css("float");
                    n.add(s).add(u).css({"float": "none", width: "auto"});
                    var f = n[0].clientWidth / i;
                    f += r.extraWidth;
                    if (f > r.maxWidth) {
                        f = r.maxWidth
                    } else if (f < r.minWidth) {
                        f = r.minWidth
                    }
                    f += "em";
                    n.css("width", f);
                    s.css({"float": a, width: "100%", "white-space": "normal"}).each(function () {
                        var t = e(this).children("ul");
                        var n = t.css("left") !== undefined ? "left" : "right";
                        t.css(n, "100%")
                    })
                }).hide()
            })
        };
        e.fn.supersubs.defaults = {minWidth: 9, maxWidth: 25, extraWidth: 0}
    })(jQuery) </script>
<script type="text/javascript">/** jQuery DFP v2.3.0 */ !function (a, b) {
        "use strict";
        !function (b) {
            "function" == typeof define && define.amd ? define(["jquery"], b) : b("object" == typeof exports ? require("jquery") : a.jQuery || a.Zepto)
        }(function (c) {
            var d = this, e = "", f = 0, g = 0, h = 0, i = ".adunit", j = !1, k = "googleAdUnit", l = function (a, b, d) {
                var g, i;
                f = 0, h = 0, e = a, i = c(b), t(), g = m(d), c(function () {
                    n(g, i), o(g, i)
                })
            }, m = function (d) {
                var e = {
                    setTargeting: {},
                    setCategoryExclusion: "",
                    setLocation: "",
                    enableSingleRequest: !0,
                    collapseEmptyDivs: "original",
                    refreshExisting: !0,
                    disablePublisherConsole: !1,
                    disableInitialLoad: !1,
                    noFetch: !1,
                    namespace: b,
                    sizeMapping: {}
                };
                if ("undefined" == typeof d.setUrlTargeting || d.setUrlTargeting) {
                    var f = p(d.url);
                    c.extend(!0, e.setTargeting, {UrlHost: f.Host, UrlPath: f.Path, UrlQuery: f.Query})
                }
                return c.extend(!0, e, d), e.googletag && a.googletag.cmd.push(function () {
                    c.extend(!0, a.googletag, e.googletag)
                }), e
            }, n = function (b, d) {
                var g = a.googletag;
                d.each(function () {
                    var a = c(this);
                    f++;
                    var d = r(a, b), h = q(a, d), i = s(a);
                    a.data("existingContent", a.html()), a.html("").addClass("display-none"), g.cmd.push(function () {
                        var f, j = a.data(k);
                        if (j)f = j; else {
                            var l;
                            l = "" === e ? d : "/" + e + "/" + d, a.data("outofpage") ? f = g.defineOutOfPageSlot(l, h) : (f = g.defineSlot(l, i, h), a.data("companion") && (f = f.addService(g.companionAds()))), f = f.addService(g.pubads())
                        }
                        var m = a.data("targeting");
                        m && c.each(m, function (a, b) {
                            f.setTargeting(a, b)
                        });
                        var n = a.data("exclusions");
                        if (n) {
                            var o, p = n.split(",");
                            c.each(p, function (a, b) {
                                o = c.trim(b), o.length > 0 && f.setCategoryExclusion(o)
                            })
                        }
                        var q = a.data("size-mapping");
                        if (q && b.sizeMapping[q]) {
                            var r = g.sizeMapping();
                            c.each(b.sizeMapping[q], function (a, b) {
                                r.addSize(b.browser, b.ad_sizes)
                            }), f.defineSizeMapping(r.build())
                        }
                        a.data(k, f), "function" == typeof b.beforeEachAdLoaded && b.beforeEachAdLoaded.call(this, a)
                    })
                }), g.cmd.push(function () {
                    var a = g.pubads();
                    b.enableSingleRequest && a.enableSingleRequest(), c.each(b.setTargeting, function (b, c) {
                        a.setTargeting(b, c)
                    });
                    var e = b.setLocation;
                    if ("object" == typeof e && ("number" == typeof e.latitude && "number" == typeof e.longitude && "number" == typeof e.precision ? a.setLocation(e.latitude, e.longitude, e.precision) : "number" == typeof e.latitude && "number" == typeof e.longitude && a.setLocation(e.latitude, e.longitude)), b.setCategoryExclusion.length > 0) {
                        var i, j = b.setCategoryExclusion.split(",");
                        c.each(j, function (b, d) {
                            i = c.trim(d), i.length > 0 && a.setCategoryExclusion(i)
                        })
                    }
                    b.collapseEmptyDivs && a.collapseEmptyDivs(), b.disablePublisherConsole && a.disablePublisherConsole(), b.companionAds && (g.companionAds().setRefreshUnfilledSlots(!0), b.disableInitialLoad || a.enableVideoAds()), b.disableInitialLoad && a.disableInitialLoad(), b.noFetch && a.noFetch(), a.addEventListener("slotRenderEnded", function (a) {
                        h++;
                        var e = c("#" + a.slot.getSlotId().getDomId()), g = a.isEmpty ? "none" : "block", i = e.data("existingContent");
                        "none" === g && c.trim(i).length > 0 && "original" === b.collapseEmptyDivs && (e.show().html(i), g = "block display-original"), e.removeClass("display-none").addClass("display-" + g), "function" == typeof b.afterEachAdLoaded && b.afterEachAdLoaded.call(this, e, a), "function" == typeof b.afterAllAdsLoaded && h === f && b.afterAllAdsLoaded.call(this, d)
                    }), g.enableServices()
                })
            }, o = function (b, d) {
                d.each(function () {
                    var d = c(this), e = d.data(k), f = a.googletag;
                    f.cmd.push(b.refreshExisting && e && d.hasClass("display-block") ? function () {
                        f.pubads().refresh([e])
                    } : function () {
                        f.display(d.attr("id"))
                    })
                })
            }, p = function (b) {
                var c = (b || a.location.toString()).match(/^(([^:/?#]+):)?(\/\/([^/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?/), d = c[4] || "", e = (c[5] || "").replace(/(.)\/$/, "$1"), f = c[7] || "", g = f.replace(/\=/gi, ":").split("&");
                return {Host: d, Path: e, Query: g}
            }, q = function (a, b) {
                return g++, a.attr("id") || a.attr("id", b.replace(/[^A-z0-9]/g, "_") + "-auto-gen-id-" + g).attr("id")
            }, r = function (a, b) {
                var c = a.data("adunit") || b.namespace || a.attr("id") || "";
                return "function" == typeof b.alterAdUnitName && (c = b.alterAdUnitName.call(this, c, a)), c
            }, s = function (a) {
                var b = [], d = a.data("dimensions");
                if (d) {
                    var e = d.split(",");
                    c.each(e, function (a, c) {
                        var d = c.split("x");
                        b.push([parseInt(d[0], 10), parseInt(d[1], 10)])
                    })
                } else b.push([a.width(), a.height()]);
                return b
            }, t = function () {
                if (j = j || c('script[src*="googletagservices.com/tag/js/gpt.js"]').length, !j) {
                    a.googletag = a.googletag || {}, a.googletag.cmd = a.googletag.cmd || [];
                    var b = document.createElement("script");
                    b.async = !0, b.type = "text/javascript", b.onerror = function () {
                        u()
                    };
                    var d = "https:" === document.location.protocol;
                    b.src = (d ? "https:" : "http:") + "//www.googletagservices.com/tag/js/gpt.js";
                    var e = document.getElementsByTagName("script")[0];
                    e.parentNode.insertBefore(b, e), "none" === b.style.display && u()
                }
            }, u = function () {
                var b = a.googletag, e = b.cmd;
                setTimeout(function () {
                    var a = function (a, c, d, e) {
                        return b.ads.push(d), b.ads[d] = {
                            renderEnded: function () {
                            }, addService: function () {
                                return this
                            }
                        }, b.ads[d]
                    };
                    b = {
                        cmd: {
                            push: function (a) {
                                a.call(d)
                            }
                        }, ads: [], pubads: function () {
                            return this
                        }, noFetch: function () {
                            return this
                        }, disableInitialLoad: function () {
                            return this
                        }, disablePublisherConsole: function () {
                            return this
                        }, enableSingleRequest: function () {
                            return this
                        }, setTargeting: function () {
                            return this
                        }, collapseEmptyDivs: function () {
                            return this
                        }, enableServices: function () {
                            return this
                        }, defineSlot: function (b, c, d) {
                            return a(b, c, d, !1)
                        }, defineOutOfPageSlot: function (b, c) {
                            return a(b, [], c, !0)
                        }, display: function (a) {
                            return b.ads[a].renderEnded.call(d), this
                        }
                    }, c.each(e, function (a, c) {
                        b.cmd.push(c)
                    })
                }, 50)
            };
            c.dfp = c.fn.dfp = function (a, c) {
                c = c || {}, a === b && (a = e), "object" == typeof a && (c = a, a = c.dfpID || e);
                var d = this;
                return "function" == typeof this && (d = i), l(a, d, c), this
            }
        })
    }(window); </script><!-- <script src="/style/js/jquery.dfp.min.js"></script> -->
<!-- <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> -->
<!-- <script src="/style/js/calculator.js"></script> -->
<script type="text/javascript">$.fn.putCursorAtEnd = function () {
        return this.each(function () {
            if ($(this).focus(), this.setSelectionRange) {
                var t = 2 * $(this).val().length;
                this.setSelectionRange(t, t)
            } else $(this).val($(this).val());
            this.scrollTop = 999999
        })
    }, $.fn.digits = function () {
        return this.each(function () {
            $(this).val($(this).val().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"))
        })
    }, $.fn.toggleClick = function () {
        var t = arguments;
        return this.click(function () {
            var i = $(this).data("iteration") || 0;
            t[i].apply(this, arguments), i = (i + 1) % t.length, $(this).data("iteration", i)
        })
    }, $(document).ready(function () {
        $(".card").on("click", function () {
            return 1 == $(this).find("a").size() ? (window.location = $(this).find("a").attr("href"), !1) : void 0
        }), firstPage, $("#ingr").keypress(function (t) {
            return 13 == t.which ? ($("#frmcalc").submit(), !1) : void 0
        }), $("#ingr").focusout(function () {
            var t = $(this).val().replace(/[^\d\.]/g, "");
            $(this).val(t), $(this).digits()
        }), $("#frmcalc :input").change(function () {
            $(this).addClass("changed")
        }), $("#frmcalc :input").keypress(function () {
            $(this).addClass("changed")
        }), $("#frmcalc").submit(function (t) {
            $("#frmcalc :input:not(.changed)").attr("disabled", "disabled");
            var i = $("#ingr").val().replace(/[^\d\.]/g, "");
            $("#frmcalc :input").each(function (t) {
                $(this).attr("disabled") && (!$(this).attr("defaultValue") || $(this).attr("defaultValue") == $(this).val() || "" == $(this).val().trim() && 0 == $(this).val().trim() || $(this).prop("disabled", !1))
            }), $("#frmcalc #ingr").attr("disabled", "disabled"), $(this).attr("action", "/" + i)
        }), $("body").append("<p id='tooltip'></p>"), $(".tooltip, .tipIcon").hover(function (t) {
            try {
                clearTimeout($("#tooltip").data("timeout")), xOffset = -15, yOffset = 15;
                var i = "";
                if ("undefined" != typeof $(this).data("tooltipContent"))i = $(this).data("tooltipContent"); else {
                    "undefined" != typeof $(this).attr("title") && $(this).data("oldTitle", $(this).attr("title"));
                    var e = $($(this).attr("href"));
                    e.length ? (i = e.html(), e.attr("style") ? (-1 !== e.attr("style").indexOf("width") && $("#tooltip").css("width", e.css("width")), -1 !== e.attr("style").indexOf("height") && $("#tooltip").css("height", e.css("height"))) : $("#tooltip").removeAttr("style")) : i = $(this).attr("title"), $(this).data("tooltipContent", i)
                }
                i.length && (this.title = "", $("#tooltip").html(i).css({
                    top: t.pageY - xOffset + "px",
                    left: t.pageX + yOffset + "px"
                }).fadeIn("fast"))
            } catch (t) {
            }
        }, function () {
            try {
                "undefined" != typeof $(this).data("oldTitle") && $(this).attr("title", $(this).data("oldTitle")), $("#tooltip").data("timeout", setTimeout($.proxy(function () {
                    $("#tooltip").fadeOut(250)
                }, this), 1e3))
            } catch (t) {
            }
        }), $("#tooltip").hover(function () {
            clearTimeout($("#tooltip").data("timeout"))
        }, function () {
            $("#tooltip").data("timeout", setTimeout($.proxy(function () {
                $("#tooltip").fadeOut(250)
            }, this), 1e3))
        }), $(".row-pension-hmrc").hide(), 0 == $("#childcare").val() ? $("#childcare_options").hide() : $("#childcare_options").show(), $(".nav").hover(function () {
            this.src = this.src.replace(/-lo./, "-hi.")
        }, function () {
            this.src = this.src.replace(/-hi./, "-lo.")
        }), $("#childcare").focus(function () {
            $("#childcare_options").show()
        }).blur(function () {
            0 == $(this).val() && $("#childcare_options").hide()
        }), $("#toggle-tax-bands").on("click", function () {
            if ($(".tax-bands").is(":visible"))try {
                $(".tax-bands").hide(), this.src = this.src.replace(/minus/, "plus")
            } catch (t) {
            } else try {
                $(".tax-bands").show(), this.src = this.src.replace(/plus/, "minus")
            } catch (t) {
            }
        }), $("#toggle-pension-hmrc").toggleClick(function () {
            try {
                $(".row-pension-hmrc").show(), this.src = this.src.replace(/plus/, "minus")
            } catch (t) {
            }
        }, function () {
            try {
                $(".row-pension-hmrc").hide(), this.src = this.src.replace(/minus/, "plus")
            } catch (t) {
            }
        }), $("input[id^=vw]").each(function (t) {
            var i = "." + $(this).val();
            $(i).hide(), $(this).is(":checked") && $(i).show()
        }), $("input[id^=vw]").click(function (t) {
            var i = "." + $(this).val();
            $(this).is(":checked") ? $(i).show() : $(i).hide();
            var e = $("input[id^=vw]").filter(":checked").length, s = 880 + 48 * e;
            s = 900 + 48 * e, $("#calculator").css("min-width", s)
        }), SetiPhoneAppLinkClosed = function () {
            $.cookie("iPhoneAppLinkClosed", 1, {expires: 30}), $("#get-app-prompt").hide()
        }, $("#ingr").digits(), $("#ingr").putCursorAtEnd(), $("ul.sf-menu").supersubs({
            minWidth: 10,
            maxWidth: 27,
            extraWidth: 1
        }).superfish({delay: 1200, disableShadows: !1}), $("#viewColumns ul").hide(), setTimeout(function () {
            $("#viewColumns ul").fadeOut(250)
        }, 1e3);
        var t;
        $("#viewColumns").hover(function (t) {
            clearTimeout($.data(this, "timeout")), $(this).find("ul").show()
        }, function (t) {
            $.data(this, "timeout", setTimeout($.proxy(function () {
                $(this).find("ul").fadeOut(250)
            }, this), 1e3))
        }), $(".stripe tbody tr:even").addClass("even"), $(".stripe tbody tr:odd").addClass("odd")
    }); </script>
<script>$.dfp({dfpID: '85172052'});</script>
<!-- 'It is your responsibility to notify your visitors about cookies used on your blog. See http://www.blogger.com/go/cookiechoices for more details.' -->
<!-- <script src="/style/js/cookiechoices.js" defer></script> --><!--/style/js/cookiechoices.js-->
<script type="text/javascript"> !function (e) {
        if (e.cookieChoices)return e.cookieChoices;
        var n = e.document, t = "textContent" in n.body, o = function () {
            function e(e, t, o, i) {
                var l = n.createElement("div");
                l.className = g, l.appendChild(a(e));
                var d = n.createElement("span");
                d.className = C, l.appendChild(d), o && i && d.appendChild(r(o, i)), d.appendChild(c(t));
                var s = n.createElement("div");
                return s.id = h, s.className = u + " " + v, s.appendChild(l), s
            }

            function o() {
                var e = n.createElement("style");
                e.className = v, e.type = "text/css", i(e, "." + u + " { position:fixed;width:100%;background-color:#444;margin:0;left:0;bottom:0;padding:0;z-index:4000;text-align:center;color:#fff;line-height:140%;padding:10px 0;font-family:roboto,Arial; } ." + u + " ." + g + " { position:relative;width:initial;margin:0;left:0;top:0; } ." + u + " ." + x + " { display:inline-block;vertical-align:middle;font-size:16px;margin:10px 20px;color:#ccc;max-width:800px;text-align:left; }." + u + " ." + C + " { display:inline-block;vertical-align:middle;white-space:nowrap;margin:0 10px; } ." + u + " ." + k + ":hover { color: #fff; } ." + u + " ." + k + " { font-weight:bold;text-transform:UPPERCASE;white-space:nowrap;color:#eee;margin-left:8px;padding:0 6px; text-decoration:none; }"), n.getElementsByTagName("head")[0].appendChild(e)
            }

            function i(e, n) {
                t ? e.textContent = n : e.innerText = n
            }

            function a(e) {
                var t = n.createElement("span");
                return i(t, e), t.className = x, t
            }

            function c(e) {
                var t = n.createElement("a");
                return i(t, e), t.id = b, t.href = "#", t.className = k, t
            }

            function r(e, t) {
                var o = n.createElement("a");
                return i(o, e), o.href = t, o.target = "_blank", o.className = k, o
            }

            function l(e) {
                return p(), s(), e.stopPropagation && e.stopPropagation(), e.cancelBubble = !0, !1
            }

            function d(t, i, a, c) {
                if (m()) {
                    s(), o();
                    var r = e(t, i, a, c), d = n.createDocumentFragment();
                    d.appendChild(r), n.body.appendChild(d.cloneNode(!0)), n.getElementById(b).onclick = l
                }
            }

            function s() {
                var e = n.getElementById(h);
                null != e && e.parentNode.removeChild(e)
            }

            function p() {
                var e = new Date;
                e.setFullYear(e.getFullYear() + 1), n.cookie = f + "=y; expires=" + e.toGMTString()
            }

            function m() {
                return !n.cookie.match(new RegExp(f + "=([^;]+)"))
            }

            var f = "displayCookieConsent", h = "cookieChoiceInfo", u = "cookie-choices-info", g = "cookie-choices-inner", x = "cookie-choices-text", C = "cookie-choices-buttons", k = "cookie-choices-button", v = "singleton-element", b = "cookieChoiceDismiss", E = {};
            return E.showCookieConsentBar = d, E
        }();
        return e.cookieChoices = o, o
    }(this);</script>
<script type="text/javascript"> document.addEventListener('DOMContentLoaded', function (event) {
        window.cookieChoices && cookieChoices.showCookieConsentBar && cookieChoices.showCookieConsentBar((window.cookieOptions && cookieOptions.msg) || 'This site uses cookies to deliver its services, to personalise ads and to analyse traffic. Information about your use of this site is shared with third parties, like Google. By using this site, you agree to its use of cookies.', (window.cookieOptions && cookieOptions.close) || 'Ok', (window.cookieOptions && cookieOptions.learn) || 'More info', (window.cookieOptions && cookieOptions.link) || 'http://listentotaxman.com/uk-tax/227.html');
    });</script>
<div class="afs_ads">&nbsp;</div>
<!-- <script src="/style/js/fuckadblock.js"></script><script>if(typeof fuckAdBlock === 'undefined') { alert("We've detected that you're using an adblocker. I just wanted to let you know that unless you disable the adblocker, I cannot continue to maintain this free to use site, and the calculate button ceases to work. Your call."); $('#calculate').attr("disabled", true); var img = $("<img />"); img.attr("src", "calculatedisabled.png"); $('#calculate').val("Disable the adblocker first, and then reload this page."); }</script> -->
<script type="text/javascript">window.NREUM || (NREUM = {});
    NREUM.info = {
        "beacon": "bam.nr-data.net",
        "licenseKey": "1ab78be209",
        "applicationID": "2849658",
        "transactionName": "ZgBaZEJUVhBYURZQWV9KbUJZGlENXVcaF0ZZFQ==",
        "queueTime": 0,
        "applicationTime": 192,
        "atts": "SkdZEgpORR4=",
        "errorBeacon": "bam.nr-data.net",
        "agent": ""
    }</script>
</body>
</html>