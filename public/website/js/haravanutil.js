if (void 0 === Haravan) var Haravan = {};
function floatToString(t, e) {
    var a = t.toFixed(e).toString();
    return (
        a.replace(".", Haravan.decimal),
        a.match("^[." + Haravan.decimal + "]d+") ? "0" + a : a
    );
}
(Haravan.cultures = [
    {
        code: "vi-VN",
        thousands: ",",
        decimal: ".",
        numberdecimal: 0,
        money_format: "",
    },
    {
        code: "en-US",
        thousands: ",",
        decimal: ".",
        numberdecimal: 2,
        money_format: "",
    },
]),
    (Haravan.getCulture = function (t) {
        var e;
        for (n = 0; n < Haravan.cultures.length; n++)
            if (Haravan.cultures[n].code == t) {
                e = Haravan.cultures[n];
                break;
            }
        return e || (e = Haravan.cultures[0]), e;
    }),
    (Haravan.format = Haravan.getCulture(Haravan.culture)),
    (Haravan.money_format = ""),
    (Haravan.each = function (t, e) {
        for (var a = 0; a < t.length; a++) e(t[a], a);
    }),
    (Haravan.map = function (t, e) {
        for (var a = [], r = 0; r < t.length; r++) a.push(e(t[r], r));
        return a;
    }),
    (Haravan.arrayIncludes = function (t, e) {
        for (var a = 0; a < t.length; a++) if (t[a] == e) return !0;
        return !1;
    }),
    (Haravan.uniq = function (t) {
        for (var e = [], a = 0; a < t.length; a++)
            Haravan.arrayIncludes(e, t[a]) || e.push(t[a]);
        return e;
    }),
    (Haravan.isDefined = function (t) {
        return void 0 !== t;
    }),
    (Haravan.getClass = function (t) {
        return Object.prototype.toString.call(t).slice(8, -1);
    }),
    (Haravan.extend = function (t, e) {
        function a() {}
        (a.prototype = e.prototype),
            (t.prototype = new a()),
            (t.prototype.constructor = t),
            (t.baseConstructor = e),
            (t.superClass = e.prototype);
    }),
    (Haravan.urlParam = function (t) {
        var e = RegExp("[?&]" + t + "=([^&]*)").exec(window.location.search);
        return e && decodeURIComponent(e[1].replace(/\+/g, " "));
    }),
    (Haravan.Product = function (t) {
        Haravan.isDefined(t) && this.update(t);
    }),
    (Haravan.Product.prototype.update = function (t) {
        for (property in t) this[property] = t[property];
    }),
    (Haravan.Product.prototype.optionNames = function () {
        return "Array" == Haravan.getClass(this.options) ? this.options : [];
    }),
    (Haravan.Product.prototype.optionValues = function (t) {
        if (!Haravan.isDefined(this.variants)) return null;
        var e = Haravan.map(this.variants, function (e) {
            var a = "option" + (t + 1);
            return null == e[a] ? null : e[a];
        });
        return null == e[0] ? null : Haravan.uniq(e);
    }),
    (Haravan.Product.prototype.getVariant = function (t) {
        var e = null;
        return (
            t.length != this.options.length ||
                Haravan.each(this.variants, function (a) {
                    for (var r = !0, n = 0; n < t.length; n++)
                        a["option" + (n + 1)] != t[n] && (r = !1);
                    1 != r || (e = a);
                }),
            e
        );
    }),
    (Haravan.Product.prototype.getVariantById = function (t) {
        for (var e = 0; e < this.variants.length; e++) {
            var a = this.variants[e];
            if (t == a.id) return a;
        }
        return null;
    }),
    (Haravan.formatMoney = function (t, e) {
        "string" == typeof (t /= 100) &&
            (t = t.replace(Haravan.format.thousands, ""));
        var a = "",
            r = /\{\{\s*(\w+)\s*\}\}/,
            n = e || this.money_format;
        function o(t) {
            return t.replace(
                /(\d)(?=(\d\d\d)+(?!\d))/g,
                "$1" + Haravan.format.thousands
            );
        }
        switch (n.match(r)[1]) {
            case "amount":
                a = o(floatToString(t, Haravan.format.numberdecimal));
                break;
            case "amount_no_decimals":
                a = o(floatToString(t, 0));
                break;
            case "amount_with_comma_separator":
                a = floatToString(t, Haravan.format.numberdecimal).replace(
                    /\./,
                    ","
                );
                break;
            case "amount_no_decimals_with_comma_separator":
                a = o(floatToString(t, 0)).replace(/\./, ",");
        }
        return n.replace(r, a);
    }),
    (Haravan.OptionSelectors = function (t, e) {
        return (
            (this.selectorDivClass = "selector-wrapper"),
            (this.selectorClass = "single-option-selector"),
            (this.variantIdFieldIdSuffix = "-variant-id"),
            (this.variantIdField = null),
            (this.historyState = null),
            (this.selectors = []),
            (this.domIdPrefix = t),
            (this.product = new Haravan.Product(e.product)),
            (this.onVariantSelected = Haravan.isDefined(e.onVariantSelected)
                ? e.onVariantSelected
                : function () {}),
            this.replaceSelector(t),
            this.initDropdown(),
            e.enableHistoryState &&
                (this.historyState = new Haravan.OptionSelectors.HistoryState(
                    this
                )),
            !0
        );
    }),
    (Haravan.OptionSelectors.prototype.initDropdown = function () {
        var t = { initialLoad: !0 };
        if (!this.selectVariantFromDropdown(t)) {
            var e = this;
            setTimeout(function () {
                e.selectVariantFromParams(t) ||
                    e.fireOnChangeForFirstDropdown.call(e, t);
            });
        }
    }),
    (Haravan.OptionSelectors.prototype.fireOnChangeForFirstDropdown = function (
        t
    ) {
        !this.selectors &&
            !this.selectors.length &&
            this.selectors.length > 0 &&
            this.selectors[0].element.onchange(t);
    }),
    (Haravan.OptionSelectors.prototype.selectVariantFromParamsOrDropdown =
        function (t) {
            this.selectVariantFromParams(t) ||
                this.selectVariantFromDropdown(t);
        }),
    (Haravan.OptionSelectors.prototype.replaceSelector = function (t) {
        var e = document.getElementById(t);
        if (null != e) {
            var a = e.parentNode;
            Haravan.each(this.buildSelectors(), function (t) {
                a.insertBefore(t, e);
            }),
                (e.style.display = "none"),
                (this.variantIdField = e);
        }
    }),
    (Haravan.OptionSelectors.prototype.selectVariantFromDropdown = function (
        t
    ) {
        var e = document.getElementById(this.domIdPrefix);
        if (!e) return !1;
        if (null != (e = e.querySelector("[selected]"))) {
            var a = e.value;
            return this.selectVariant(a, t);
        }
        return !1;
    }),
    (Haravan.OptionSelectors.prototype.selectVariantFromParams = function (t) {
        var e = Haravan.urlParam("variant");
        return this.selectVariant(e, t);
    }),
    (Haravan.OptionSelectors.prototype.selectVariant = function (t, e) {
        var a = this.product.getVariantById(t);
        if (null == a) return !1;
        for (var r = 0; r < this.selectors.length; r++) {
            var n = this.selectors[r].element,
                o = a[n.getAttribute("data-option")];
            null != o && this.optionExistInSelect(n, o) && (n.value = o);
        }
        return (
            "undefined" != typeof jQuery
                ? jQuery(this.selectors[0].element).trigger("change", e)
                : this.selectors[0].element.onchange(e),
            !0
        );
    }),
    (Haravan.OptionSelectors.prototype.optionExistInSelect = function (t, e) {
        for (var a = 0; a < t.options.length; a++)
            if (t.options[a].value == e) return !0;
    }),
    (Haravan.OptionSelectors.prototype.insertSelectors = function (t, e) {
        Haravan.isDefined(e) && this.setMessageElement(e),
            (this.domIdPrefix =
                "product-" + this.product.id + "-variant-selector");
        var a = document.getElementById(t);
        if (!a) return !1;
        Haravan.each(this.buildSelectors(), function (t) {
            a.appendChild(t);
        });
    }),
    (Haravan.OptionSelectors.prototype.buildSelectors = function () {
        for (var t = 0; t < this.product.optionNames().length; t++) {
            var e = new Haravan.SingleOptionSelector(
                this,
                t,
                this.product.optionNames()[t],
                this.product.optionValues(t)
            );
            (e.element.disabled = !1), this.selectors.push(e);
        }
        var a = this.selectorDivClass,
            r = this.product.optionNames();
        return Haravan.map(this.selectors, function (t) {
            var e = document.createElement("div");
            if ((e.setAttribute("class", a), r.length > 1)) {
                var n = document.createElement("label");
                (n.htmlFor = t.element.id),
                    (n.innerHTML = t.name),
                    e.appendChild(n);
            }
            return e.appendChild(t.element), e;
        });
    }),
    (Haravan.OptionSelectors.prototype.selectedValues = function () {
        for (var t = [], e = 0; e < this.selectors.length; e++) {
            var a = this.selectors[e].element.value;
            t.push(a);
        }
        return t;
    }),
    (Haravan.OptionSelectors.prototype.updateSelectors = function (t, e) {
        var a = this.selectedValues(),
            r = this.product.getVariant(a);
        r
            ? ((this.variantIdField.disabled = !1),
              (this.variantIdField.value = r.id))
            : (this.variantIdField.disabled = !0),
            this.onVariantSelected(r, this, e),
            null != this.historyState &&
                this.historyState.onVariantChange(r, this, e);
    }),
    (Haravan.OptionSelectorsFromDOM = function (t, e) {
        var a = e.optionNames || [],
            r = e.priceFieldExists || !0,
            n = e.delimiter || "/",
            o = this.createProductFromSelector(t, a, r, n);
        (e.product = o),
            Haravan.OptionSelectorsFromDOM.baseConstructor.call(this, t, e);
    }),
    Haravan.extend(Haravan.OptionSelectorsFromDOM, Haravan.OptionSelectors),
    (Haravan.OptionSelectorsFromDOM.prototype.createProductFromSelector =
        function (t, e, a, r) {
            Haravan.isDefined(a) || (a = !0), Haravan.isDefined(r) || (r = "/");
            var n = document.getElementById(t);
            if (!n) return !1;
            var o = n.childNodes,
                i = (n.parentNode, e.length),
                s = [];
            Haravan.each(o, function (t, n) {
                if (1 == t.nodeType && "option" == t.tagName.toLowerCase()) {
                    var o = t.innerHTML.split(
                        new RegExp("\\s*\\" + r + "\\s*")
                    );
                    0 == e.length && (i = o.length - (a ? 1 : 0));
                    var l = o.slice(0, i),
                        c = a ? o[i] : "",
                        u =
                            (t.getAttribute("value"),
                            {
                                available: !t.disabled,
                                id: parseFloat(t.value),
                                price: c,
                                option1: l[0],
                                option2: l[1],
                                option3: l[2],
                            });
                    s.push(u);
                }
            });
            var l = { variants: s };
            if (0 == e.length) {
                l.options = [];
                for (var c = 0; c < i; c++) l.options[c] = "option " + (c + 1);
            } else l.options = e;
            return l;
        }),
    (Haravan.SingleOptionSelector = function (t, e, a, r) {
        if (
            ((this.multiSelector = t),
            (this.values = r),
            (this.index = e),
            (this.name = a),
            (this.element = document.createElement("select")),
            null != this.values)
        )
            for (var n = 0; n < this.values.length; n++) {
                var o = document.createElement("option");
                (o.value = r[n]),
                    (o.innerHTML = r[n]),
                    this.element.appendChild(o);
            }
        return (
            this.element.setAttribute(
                "class",
                this.multiSelector.selectorClass
            ),
            this.element.setAttribute("data-option", "option" + (e + 1)),
            (this.element.id = t.domIdPrefix + "-option-" + e),
            (this.element.onchange = function (a, r) {
                (r = r || {}), t.updateSelectors(e, r);
            }),
            !0
        );
    }),
    (Haravan.Image = {
        preload: function (t, e) {
            for (var a = 0; a < t.length; a++) {
                var r = t[a];
                this.loadImage(this.getSizedImageUrl(r, e));
            }
        },
        loadImage: function (t) {
            new Image().src = t;
        },
        switchImage: function (t, e, a) {
            if (t) {
                var r = this.imageSize(e.src),
                    n = this.getSizedImageUrl(t.src, r);
                a ? a(n, t, e) : (e.src = n);
            }
        },
        imageSize: function (t) {
            var e = t.match(
                /(1024x1024|2048x2048|pico|icon|thumb|small|compact|medium|large|grande)\./
            );
            return null != e ? e[1] : null;
        },
        getSizedImageUrl: function (t, e) {
            if (null == e) return t;
            if ("master" == e) return this.removeProtocol(t);
            var a = t.match(
                /\.(jpg|jpeg|gif|png|bmp|bitmap|tiff|tif)(\?v=\d+)?/
            );
            if (null != a) {
                var r = t.split(a[0]),
                    n = a[0];
                return this.removeProtocol(r[0] + "_" + e + n);
            }
            return null;
        },
        removeProtocol: function (t) {
            return t.replace(/http(s)?:/, "");
        },
    }),
    (Haravan.OptionSelectors.HistoryState = function (t) {
        this.browserSupports() && this.register(t);
    }),
    (Haravan.OptionSelectors.HistoryState.prototype.register = function (t) {
        window.addEventListener("popstate", function (e) {
            t.selectVariantFromParamsOrDropdown({ popStateCall: !0 });
        });
    }),
    (Haravan.OptionSelectors.HistoryState.prototype.onVariantChange = function (
        t,
        e,
        a
    ) {
        this.browserSupports() &&
            (!t ||
                a.initialLoad ||
                a.popStateCall ||
                window.history.pushState(
                    {},
                    document.title,
                    "?variant=" + t.id
                ));
    }),
    (Haravan.OptionSelectors.HistoryState.prototype.browserSupports =
        function () {
            return window.history && window.history.pushState;
        });
const debounce = (t, e) => {
        let a;
        return function () {
            const r = this,
                n = arguments;
            clearTimeout(a), (a = setTimeout(() => t.apply(r, n), e));
        };
    },
    throttle = (t, e) => {
        let a;
        return function () {
            const r = arguments;
            a || (t.apply(this, r), (a = !0), setTimeout(() => (a = !1), e));
        };
    };
