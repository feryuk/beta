/**
 * Created by Feri on 15/11/2016.
 */
function floatToString(e, t) {
    var n = e.toFixed(t).toString();
    return n.match(/^\.\d+/) ? "0" + n : n
}
"undefined" == typeof window.Shopify && (window.Shopify = {}), Shopify.each = function (e, t) {
    for (var n = 0; n < e.length; n++)t(e[n], n)
}, Shopify.map = function (e, t) {
    for (var n = [], r = 0; r < e.length; r++)n.push(t(e[r], r));
    return n
}, Shopify.arrayIncludes = function (e, t) {
    for (var n = 0; n < e.length; n++)if (e[n] == t)return !0;
    return !1
}, Shopify.uniq = function (e) {
    for (var t = [], n = 0; n < e.length; n++)Shopify.arrayIncludes(t, e[n]) || t.push(e[n]);
    return t
}, Shopify.isDefined = function (e) {
    return "undefined" == typeof e ? !1 : !0
}, Shopify.getClass = function (e) {
    return Object.prototype.toString.call(e).slice(8, -1)
}, Shopify.extend = function (e, t) {
    function n() {
    }

    n.prototype = t.prototype, e.prototype = new n, e.prototype.constructor = e, e.baseConstructor = t, e.superClass = t.prototype
}, Shopify.locationSearch = function () {
    return window.location.search
}, Shopify.locationHash = function () {
    return window.location.hash
}, Shopify.replaceState = function (e) {
    window.history.replaceState({}, document.title, e)
}, Shopify.urlParam = function (e) {
    var t = RegExp("[?&]" + e + "=([^&#]*)").exec(Shopify.locationSearch());
    return t && decodeURIComponent(t[1].replace(/\+/g, " "))
}, Shopify.newState = function (e, t) {
    var n;
    return n = Shopify.urlParam(e) ? Shopify.locationSearch().replace(RegExp("(" + e + "=)[^&#]+"), "$1" + t) : "" === Shopify.locationSearch() ? "?" + e + "=" + t : Shopify.locationSearch() + "&" + e + "=" + t, n + Shopify.locationHash()
}, Shopify.setParam = function (e, t) {
    Shopify.replaceState(Shopify.newState(e, t))
}, Shopify.Product = function (e) {
    Shopify.isDefined(e) && this.update(e)
}, Shopify.Product.prototype.update = function (e) {
    for (property in e)this[property] = e[property]
}, Shopify.Product.prototype.optionNames = function () {
    return "Array" == Shopify.getClass(this.options) ? this.options : []
}, Shopify.Product.prototype.optionValues = function (e) {
    if (!Shopify.isDefined(this.variants))return null;
    var t = Shopify.map(this.variants, function (t) {
        var n = "option" + (e + 1);
        return void 0 == t[n] ? null : t[n]
    });
    return null == t[0] ? null : Shopify.uniq(t)
}, Shopify.Product.prototype.getVariant = function (e) {
    var t = null;
    return e.length != this.options.length ? t : (Shopify.each(this.variants, function (n) {
        for (var r = !0, i = 0; i < e.length; i++) {
            var o = "option" + (i + 1);
            n[o] != e[i] && (r = !1)
        }
        return 1 == r ? void(t = n) : void 0
    }), t)
}, Shopify.Product.prototype.getVariantById = function (e) {
    for (var t = 0; t < this.variants.length; t++) {
        var n = this.variants[t];
        if (e == n.id)return n
    }
    return null
}, Shopify.money_format = "${{amount}}", Shopify.formatMoney = function (e, t) {
    function n(e, t) {
        return "undefined" == typeof e ? t : e
    }

    function r(e, t, r, i) {
        if (t = n(t, 2), r = n(r, ","), i = n(i, "."), isNaN(e) || null == e)return 0;
        e = (e / 100).toFixed(t);
        var o = e.split("."), a = o[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + r), s = o[1] ? i + o[1] : "";
        return a + s
    }

    "string" == typeof e && (e = e.replace(".", ""));
    var i = "", o = /\{\{\s*(\w+)\s*\}\}/, a = t || this.money_format;
    switch (a.match(o)[1]) {
        case"amount":
            i = r(e, 2);
            break;
        case"amount_no_decimals":
            i = r(e, 0);
            break;
        case"amount_with_comma_separator":
            i = r(e, 2, ".", ",");
            break;
        case"amount_no_decimals_with_comma_separator":
            i = r(e, 0, ".", ",");
            break;
        case"amount_no_decimals_with_space_separator":
            i = r(e, 0, " ")
    }
    return a.replace(o, i)
}, Shopify.OptionSelectors = function (e, t) {
    return this.selectorDivClass = "selector-wrapper", this.selectorClass = "single-option-selector", this.variantIdFieldIdSuffix = "-variant-id", this.variantIdField = null, this.historyState = null, this.selectors = [], this.domIdPrefix = e, this.product = new Shopify.Product(t.product), this.onVariantSelected = Shopify.isDefined(t.onVariantSelected) ? t.onVariantSelected : function () {
    }, this.replaceSelector(e), this.initDropdown(), t.enableHistoryState && (this.historyState = new Shopify.OptionSelectors.HistoryState(this)), !0
}, Shopify.OptionSelectors.prototype.initDropdown = function () {
    var e = {initialLoad: !0}, t = this.selectVariantFromDropdown(e);
    if (!t) {
        var n = this;
        setTimeout(function () {
            n.selectVariantFromParams(e) || n.fireOnChangeForFirstDropdown.call(n, e)
        })
    }
}, Shopify.OptionSelectors.prototype.fireOnChangeForFirstDropdown = function (e) {
    this.selectors[0].element.onchange(e)
}, Shopify.OptionSelectors.prototype.selectVariantFromParamsOrDropdown = function (e) {
    var t = this.selectVariantFromParams(e);
    t || this.selectVariantFromDropdown(e)
}, Shopify.OptionSelectors.prototype.replaceSelector = function (e) {
    var t = document.getElementById(e), n = t.parentNode;
    Shopify.each(this.buildSelectors(), function (e) {
        n.insertBefore(e, t)
    }), t.style.display = "none", this.variantIdField = t
}, Shopify.OptionSelectors.prototype.selectVariantFromDropdown = function (e) {
    var t = document.getElementById(this.domIdPrefix).querySelector("[selected]");
    if (t || (t = document.getElementById(this.domIdPrefix).querySelector('[selected="selected"]')), !t)return !1;
    var n = t.value;
    return this.selectVariant(n, e)
}, Shopify.OptionSelectors.prototype.selectVariantFromParams = function (e) {
    var t = Shopify.urlParam("variant");
    return this.selectVariant(t, e)
}, Shopify.OptionSelectors.prototype.selectVariant = function (e, t) {
    var n = this.product.getVariantById(e);
    if (null == n)return !1;
    for (var r = 0; r < this.selectors.length; r++) {
        var i = this.selectors[r].element, o = i.getAttribute("data-option"), a = n[o];
        null != a && this.optionExistInSelect(i, a) && (i.value = a)
    }
    return "undefined" != typeof jQuery ? jQuery(this.selectors[0].element).trigger("change", t) : this.selectors[0].element.onchange(t), !0
}, Shopify.OptionSelectors.prototype.optionExistInSelect = function (e, t) {
    for (var n = 0; n < e.options.length; n++)if (e.options[n].value == t)return !0
}, Shopify.OptionSelectors.prototype.insertSelectors = function (e, t) {
    Shopify.isDefined(t) && this.setMessageElement(t), this.domIdPrefix = "product-" + this.product.id + "-variant-selector";
    var n = document.getElementById(e);
    Shopify.each(this.buildSelectors(), function (e) {
        n.appendChild(e)
    })
}, Shopify.OptionSelectors.prototype.buildSelectors = function () {
    for (var e = 0; e < this.product.optionNames().length; e++) {
        var t = new Shopify.SingleOptionSelector(this, e, this.product.optionNames()[e], this.product.optionValues(e));
        t.element.disabled = !1, this.selectors.push(t)
    }
    var n = this.selectorDivClass, r = this.product.optionNames(), i = Shopify.map(this.selectors, function (e) {
        var t = document.createElement("div");
        if (t.setAttribute("class", n), r.length > 1) {
            var i = document.createElement("label");
            i.htmlFor = e.element.id, i.innerHTML = e.name, t.appendChild(i)
        }
        return t.appendChild(e.element), t
    });
    return i
}, Shopify.OptionSelectors.prototype.selectedValues = function () {
    for (var e = [], t = 0; t < this.selectors.length; t++) {
        var n = this.selectors[t].element.value;
        e.push(n)
    }
    return e
}, Shopify.OptionSelectors.prototype.updateSelectors = function (e, t) {
    var n = this.selectedValues(), r = this.product.getVariant(n);
    r ? (this.variantIdField.disabled = !1, this.variantIdField.value = r.id) : this.variantIdField.disabled = !0, this.onVariantSelected(r, this, t), null != this.historyState && this.historyState.onVariantChange(r, this, t)
}, Shopify.OptionSelectorsFromDOM = function (e, t) {
    var n = t.optionNames || [], r = t.priceFieldExists || !0, i = t.delimiter || "/", o = this.createProductFromSelector(e, n, r, i);
    t.product = o, Shopify.OptionSelectorsFromDOM.baseConstructor.call(this, e, t)
}, Shopify.extend(Shopify.OptionSelectorsFromDOM, Shopify.OptionSelectors), Shopify.OptionSelectorsFromDOM.prototype.createProductFromSelector = function (e, t, n, r) {
    if (!Shopify.isDefined(n))var n = !0;
    if (!Shopify.isDefined(r))var r = "/";
    var i = document.getElementById(e), o = i.childNodes, a = (i.parentNode, t.length), s = [];
    Shopify.each(o, function (e, i) {
        if (1 == e.nodeType && "option" == e.tagName.toLowerCase()) {
            var o = e.innerHTML.split(new RegExp("\\s*\\" + r + "\\s*"));
            0 == t.length && (a = o.length - (n ? 1 : 0));
            var u = o.slice(0, a), l = n ? o[a] : "", c = (e.getAttribute("value"), {
                available: e.disabled ? !1 : !0,
                id: parseFloat(e.value),
                price: l,
                option1: u[0],
                option2: u[1],
                option3: u[2]
            });
            s.push(c)
        }
    });
    var u = {variants: s};
    if (0 == t.length) {
        u.options = [];
        for (var l = 0; a > l; l++)u.options[l] = "option " + (l + 1)
    } else u.options = t;
    return u
}, Shopify.SingleOptionSelector = function (e, t, n, r) {
    this.multiSelector = e, this.values = r, this.index = t, this.name = n, this.element = document.createElement("select");
    for (var i = 0; i < r.length; i++) {
        var o = document.createElement("option");
        o.value = r[i], o.innerHTML = r[i], this.element.appendChild(o)
    }
    return this.element.setAttribute("class", this.multiSelector.selectorClass), this.element.setAttribute("data-option", "option" + (t + 1)), this.element.id = e.domIdPrefix + "-option-" + t, this.element.onchange = function (n, r) {
        r = r || {}, e.updateSelectors(t, r)
    }, !0
}, Shopify.Image = {
    preload: function (e, t) {
        for (var n = 0; n < e.length; n++) {
            var r = e[n];
            this.loadImage(this.getSizedImageUrl(r, t))
        }
    }, loadImage: function (e) {
        (new Image).src = e
    }, switchImage: function (e, t, n) {
        if (e && t) {
            var r = this.imageSize(t.src), i = this.getSizedImageUrl(e.src, r);
            n ? n(i, e, t) : t.src = i
        }
    }, imageSize: function (e) {
        var t = e.match(/.+_((?:pico|icon|thumb|small|compact|medium|large|grande)|\d{1,4}x\d{0,4}|x\d{1,4})[_\.@]/);
        return null !== t ? t[1] : null
    }, getSizedImageUrl: function (e, t) {
        if (null == t)return e;
        if ("master" == t)return this.removeProtocol(e);
        var n = e.match(/\.(jpg|jpeg|gif|png|bmp|bitmap|tiff|tif)(\?v=\d+)?$/i);
        if (null != n) {
            var r = e.split(n[0]), i = n[0];
            return this.removeProtocol(r[0] + "_" + t + i)
        }
        return null
    }, removeProtocol: function (e) {
        return e.replace(/http(s)?:/, "")
    }
}, Shopify.OptionSelectors.HistoryState = function (e) {
    this.browserSupports() && this.register(e)
}, Shopify.OptionSelectors.HistoryState.prototype.register = function (e) {
    window.addEventListener("popstate", function (t) {
        e.selectVariantFromParamsOrDropdown({popStateCall: !0})
    })
}, Shopify.OptionSelectors.HistoryState.prototype.onVariantChange = function (e, t, n) {
    this.browserSupports() && (!e || n.initialLoad || n.popStateCall || Shopify.setParam("variant", e.id))
}, Shopify.OptionSelectors.HistoryState.prototype.browserSupports = function () {
    return window.history && window.history.replaceState
};