var $jscomp = $jscomp || {};
$jscomp.scope = {};
$jscomp.createTemplateTagFirstArg = function (a) {
    return (a.raw = a);
};
$jscomp.createTemplateTagFirstArgWithRaw = function (a, b) {
    a.raw = b;
    return a;
};
$jscomp.ASSUME_ES5 = !1;
$jscomp.ASSUME_NO_NATIVE_MAP = !1;
$jscomp.ASSUME_NO_NATIVE_SET = !1;
$jscomp.SIMPLE_FROUND_POLYFILL = !1;
$jscomp.ISOLATE_POLYFILLS = !1;
$jscomp.FORCE_POLYFILL_PROMISE = !1;
$jscomp.FORCE_POLYFILL_PROMISE_WHEN_NO_UNHANDLED_REJECTION = !1;
$jscomp.defineProperty =
    $jscomp.ASSUME_ES5 || "function" == typeof Object.defineProperties
        ? Object.defineProperty
        : function (a, b, c) {
              if (a == Array.prototype || a == Object.prototype) return a;
              a[b] = c.value;
              return a;
          };
$jscomp.getGlobal = function (a) {
    a = [
        "object" == typeof globalThis && globalThis,
        a,
        "object" == typeof window && window,
        "object" == typeof self && self,
        "object" == typeof global && global,
    ];
    for (var b = 0; b < a.length; ++b) {
        var c = a[b];
        if (c && c.Math == Math) return c;
    }
    throw Error("Cannot find global object");
};
$jscomp.global = $jscomp.getGlobal(this);
$jscomp.IS_SYMBOL_NATIVE =
    "function" === typeof Symbol && "symbol" === typeof Symbol("x");
$jscomp.TRUST_ES6_POLYFILLS =
    !$jscomp.ISOLATE_POLYFILLS || $jscomp.IS_SYMBOL_NATIVE;
$jscomp.polyfills = {};
$jscomp.propertyToPolyfillSymbol = {};
$jscomp.POLYFILL_PREFIX = "$jscp$";
var $jscomp$lookupPolyfilledValue = function (a, b, c) {
    if (!c || null != a) {
        c = $jscomp.propertyToPolyfillSymbol[b];
        if (null == c) return a[b];
        c = a[c];
        return void 0 !== c ? c : a[b];
    }
};
$jscomp.polyfill = function (a, b, c, d) {
    b &&
        ($jscomp.ISOLATE_POLYFILLS
            ? $jscomp.polyfillIsolated(a, b, c, d)
            : $jscomp.polyfillUnisolated(a, b, c, d));
};
$jscomp.polyfillUnisolated = function (a, b, c, d) {
    c = $jscomp.global;
    a = a.split(".");
    for (d = 0; d < a.length - 1; d++) {
        var e = a[d];
        if (!(e in c)) return;
        c = c[e];
    }
    a = a[a.length - 1];
    d = c[a];
    b = b(d);
    b != d &&
        null != b &&
        $jscomp.defineProperty(c, a, {
            configurable: !0,
            writable: !0,
            value: b,
        });
};
$jscomp.polyfillIsolated = function (a, b, c, d) {
    var e = a.split(".");
    a = 1 === e.length;
    d = e[0];
    d = !a && d in $jscomp.polyfills ? $jscomp.polyfills : $jscomp.global;
    for (var g = 0; g < e.length - 1; g++) {
        var m = e[g];
        if (!(m in d)) return;
        d = d[m];
    }
    e = e[e.length - 1];
    c = $jscomp.IS_SYMBOL_NATIVE && "es6" === c ? d[e] : null;
    b = b(c);
    null != b &&
        (a
            ? $jscomp.defineProperty($jscomp.polyfills, e, {
                  configurable: !0,
                  writable: !0,
                  value: b,
              })
            : b !== c &&
              (void 0 === $jscomp.propertyToPolyfillSymbol[e] &&
                  ((c = (1e9 * Math.random()) >>> 0),
                  ($jscomp.propertyToPolyfillSymbol[e] =
                      $jscomp.IS_SYMBOL_NATIVE
                          ? $jscomp.global.Symbol(e)
                          : $jscomp.POLYFILL_PREFIX + c + "$" + e)),
              $jscomp.defineProperty(d, $jscomp.propertyToPolyfillSymbol[e], {
                  configurable: !0,
                  writable: !0,
                  value: b,
              })));
};
$jscomp.underscoreProtoCanBeSet = function () {
    var a = { a: !0 },
        b = {};
    try {
        return (b.__proto__ = a), b.a;
    } catch (c) {}
    return !1;
};
$jscomp.setPrototypeOf =
    $jscomp.TRUST_ES6_POLYFILLS && "function" == typeof Object.setPrototypeOf
        ? Object.setPrototypeOf
        : $jscomp.underscoreProtoCanBeSet()
        ? function (a, b) {
              a.__proto__ = b;
              if (a.__proto__ !== b)
                  throw new TypeError(a + " is not extensible");
              return a;
          }
        : null;
$jscomp.arrayIteratorImpl = function (a) {
    var b = 0;
    return function () {
        return b < a.length ? { done: !1, value: a[b++] } : { done: !0 };
    };
};
$jscomp.arrayIterator = function (a) {
    return { next: $jscomp.arrayIteratorImpl(a) };
};
$jscomp.makeIterator = function (a) {
    var b =
        "undefined" != typeof Symbol && Symbol.iterator && a[Symbol.iterator];
    if (b) return b.call(a);
    if ("number" == typeof a.length) return $jscomp.arrayIterator(a);
    throw Error(String(a) + " is not an iterable or ArrayLike");
};
$jscomp.generator = {};
$jscomp.generator.ensureIteratorResultIsObject_ = function (a) {
    if (!(a instanceof Object))
        throw new TypeError("Iterator result " + a + " is not an object");
};
$jscomp.generator.Context = function () {
    this.isRunning_ = !1;
    this.yieldAllIterator_ = null;
    this.yieldResult = void 0;
    this.nextAddress = 1;
    this.finallyAddress_ = this.catchAddress_ = 0;
    this.finallyContexts_ = this.abruptCompletion_ = null;
};
$jscomp.generator.Context.prototype.start_ = function () {
    if (this.isRunning_) throw new TypeError("Generator is already running");
    this.isRunning_ = !0;
};
$jscomp.generator.Context.prototype.stop_ = function () {
    this.isRunning_ = !1;
};
$jscomp.generator.Context.prototype.jumpToErrorHandler_ = function () {
    this.nextAddress = this.catchAddress_ || this.finallyAddress_;
};
$jscomp.generator.Context.prototype.next_ = function (a) {
    this.yieldResult = a;
};
$jscomp.generator.Context.prototype.throw_ = function (a) {
    this.abruptCompletion_ = { exception: a, isException: !0 };
    this.jumpToErrorHandler_();
};
$jscomp.generator.Context.prototype["return"] = function (a) {
    this.abruptCompletion_ = { return: a };
    this.nextAddress = this.finallyAddress_;
};
$jscomp.generator.Context.prototype.jumpThroughFinallyBlocks = function (a) {
    this.abruptCompletion_ = { jumpTo: a };
    this.nextAddress = this.finallyAddress_;
};
$jscomp.generator.Context.prototype.yield = function (a, b) {
    this.nextAddress = b;
    return { value: a };
};
$jscomp.generator.Context.prototype.yieldAll = function (a, b) {
    var c = $jscomp.makeIterator(a),
        d = c.next();
    $jscomp.generator.ensureIteratorResultIsObject_(d);
    if (d.done) (this.yieldResult = d.value), (this.nextAddress = b);
    else return (this.yieldAllIterator_ = c), this.yield(d.value, b);
};
$jscomp.generator.Context.prototype.jumpTo = function (a) {
    this.nextAddress = a;
};
$jscomp.generator.Context.prototype.jumpToEnd = function () {
    this.nextAddress = 0;
};
$jscomp.generator.Context.prototype.setCatchFinallyBlocks = function (a, b) {
    this.catchAddress_ = a;
    void 0 != b && (this.finallyAddress_ = b);
};
$jscomp.generator.Context.prototype.setFinallyBlock = function (a) {
    this.catchAddress_ = 0;
    this.finallyAddress_ = a || 0;
};
$jscomp.generator.Context.prototype.leaveTryBlock = function (a, b) {
    this.nextAddress = a;
    this.catchAddress_ = b || 0;
};
$jscomp.generator.Context.prototype.enterCatchBlock = function (a) {
    this.catchAddress_ = a || 0;
    a = this.abruptCompletion_.exception;
    this.abruptCompletion_ = null;
    return a;
};
$jscomp.generator.Context.prototype.enterFinallyBlock = function (a, b, c) {
    c
        ? (this.finallyContexts_[c] = this.abruptCompletion_)
        : (this.finallyContexts_ = [this.abruptCompletion_]);
    this.catchAddress_ = a || 0;
    this.finallyAddress_ = b || 0;
};
$jscomp.generator.Context.prototype.leaveFinallyBlock = function (a, b) {
    var c = this.finallyContexts_.splice(b || 0)[0];
    if ((c = this.abruptCompletion_ = this.abruptCompletion_ || c)) {
        if (c.isException) return this.jumpToErrorHandler_();
        void 0 != c.jumpTo && this.finallyAddress_ < c.jumpTo
            ? ((this.nextAddress = c.jumpTo), (this.abruptCompletion_ = null))
            : (this.nextAddress = this.finallyAddress_);
    } else this.nextAddress = a;
};
$jscomp.generator.Context.prototype.forIn = function (a) {
    return new $jscomp.generator.Context.PropertyIterator(a);
};
$jscomp.generator.Context.PropertyIterator = function (a) {
    this.object_ = a;
    this.properties_ = [];
    for (var b in a) this.properties_.push(b);
    this.properties_.reverse();
};
$jscomp.generator.Context.PropertyIterator.prototype.getNext = function () {
    for (; 0 < this.properties_.length; ) {
        var a = this.properties_.pop();
        if (a in this.object_) return a;
    }
    return null;
};
$jscomp.generator.Engine_ = function (a) {
    this.context_ = new $jscomp.generator.Context();
    this.program_ = a;
};
$jscomp.generator.Engine_.prototype.next_ = function (a) {
    this.context_.start_();
    if (this.context_.yieldAllIterator_)
        return this.yieldAllStep_(
            this.context_.yieldAllIterator_.next,
            a,
            this.context_.next_
        );
    this.context_.next_(a);
    return this.nextStep_();
};
$jscomp.generator.Engine_.prototype.return_ = function (a) {
    this.context_.start_();
    var b = this.context_.yieldAllIterator_;
    if (b)
        return this.yieldAllStep_(
            "return" in b
                ? b["return"]
                : function (c) {
                      return { value: c, done: !0 };
                  },
            a,
            this.context_["return"]
        );
    this.context_["return"](a);
    return this.nextStep_();
};
$jscomp.generator.Engine_.prototype.throw_ = function (a) {
    this.context_.start_();
    if (this.context_.yieldAllIterator_)
        return this.yieldAllStep_(
            this.context_.yieldAllIterator_["throw"],
            a,
            this.context_.next_
        );
    this.context_.throw_(a);
    return this.nextStep_();
};
$jscomp.generator.Engine_.prototype.yieldAllStep_ = function (a, b, c) {
    try {
        var d = a.call(this.context_.yieldAllIterator_, b);
        $jscomp.generator.ensureIteratorResultIsObject_(d);
        if (!d.done) return this.context_.stop_(), d;
        var e = d.value;
    } catch (g) {
        return (
            (this.context_.yieldAllIterator_ = null),
            this.context_.throw_(g),
            this.nextStep_()
        );
    }
    this.context_.yieldAllIterator_ = null;
    c.call(this.context_, e);
    return this.nextStep_();
};
$jscomp.generator.Engine_.prototype.nextStep_ = function () {
    for (; this.context_.nextAddress; )
        try {
            var a = this.program_(this.context_);
            if (a) return this.context_.stop_(), { value: a.value, done: !1 };
        } catch (b) {
            (this.context_.yieldResult = void 0), this.context_.throw_(b);
        }
    this.context_.stop_();
    if (this.context_.abruptCompletion_) {
        a = this.context_.abruptCompletion_;
        this.context_.abruptCompletion_ = null;
        if (a.isException) throw a.exception;
        return { value: a["return"], done: !0 };
    }
    return { value: void 0, done: !0 };
};
$jscomp.generator.Generator_ = function (a) {
    this.next = function (b) {
        return a.next_(b);
    };
    this["throw"] = function (b) {
        return a.throw_(b);
    };
    this["return"] = function (b) {
        return a.return_(b);
    };
    this[Symbol.iterator] = function () {
        return this;
    };
};
$jscomp.generator.createGenerator = function (a, b) {
    var c = new $jscomp.generator.Generator_(new $jscomp.generator.Engine_(b));
    $jscomp.setPrototypeOf &&
        a.prototype &&
        $jscomp.setPrototypeOf(c, a.prototype);
    return c;
};
$jscomp.asyncExecutePromiseGenerator = function (a) {
    function b(d) {
        return a.next(d);
    }
    function c(d) {
        return a["throw"](d);
    }
    return new Promise(function (d, e) {
        function g(m) {
            m.done
                ? d(m.value)
                : Promise.resolve(m.value).then(b, c).then(g, e);
        }
        g(a.next());
    });
};
$jscomp.asyncExecutePromiseGeneratorFunction = function (a) {
    return $jscomp.asyncExecutePromiseGenerator(a());
};
$jscomp.asyncExecutePromiseGeneratorProgram = function (a) {
    return $jscomp.asyncExecutePromiseGenerator(
        new $jscomp.generator.Generator_(new $jscomp.generator.Engine_(a))
    );
};
var MewTab = (function () {
    return function (a, b) {
        a = void 0 === a ? {} : a;
        var c = JSON.parse(
                '{"tabContainer":"[data-tab]","slideContainerClass":"swiper-container","view":"ajaxtab","noItem":"Kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o trong danh m\u1ee5c n\u00e0y.","useSlide":true,"slideConfig":{"spaceBetween":10,"loop":false,"speed":300,"autoplay":{"delay":4000,"disableOnInteraction":false},"breakpoints":{"576":{"slidesPerView":1},"768":{"slidesPerView":3},"992":{"slidesPerView":3},"1200":{"slidesPerView":3}}}}'
            ),
            d =
                "undefined" === typeof a
                    ? Object.assign({}, c)
                    : Object.assign({}, c, a),
            e = document,
            g = {},
            m = function (l, f) {
                return fetch(
                    "" + window.location.origin + l + "?view=" + f
                ).then(function (h) {
                    return h.text();
                });
            };
        g.bindEvent = function (l) {
            l.addEventListener("click", function (f) {
                var h = null;
                "undefined" !== typeof f.target.dataset.pos
                    ? (f.preventDefault(), (h = f.target))
                    : null !== f.target.closest("[data-pos]") &&
                      (f.preventDefault(),
                      (h = f.target.closest("[data-pos]")));
                if (null !== h) {
                    console.log(h);
                    var p = h.getAttribute("href"),
                        q = h.dataset.pos;
                    f = h.closest("" + d.tabContainer);
                    null !== f &&
                        ((f = f.querySelectorAll("[data-pos-content]")),
                        h
                            .closest("" + d.tabContainer)
                            .querySelectorAll("[data-pos]")
                            .forEach(function (k) {
                                return k.classList.remove("active");
                            }),
                        h.classList.add("active"),
                        f.forEach(function (k) {
                            var r;
                            return $jscomp.asyncExecutePromiseGeneratorProgram(
                                function (n) {
                                    if (1 == n.nextAddress)
                                        return (
                                            console.log(
                                                q,
                                                k.dataset.posContent
                                            ),
                                            k.dataset.posContent !== q
                                                ? (k.classList.remove("active"),
                                                  n.jumpTo(0))
                                                : k.classList.contains("loaded")
                                                ? (k.classList.add(
                                                      "loaded",
                                                      "active"
                                                  ),
                                                  n.jumpTo(0))
                                                : "/" === p
                                                ? ((k.innerHTML =
                                                      '<div class="col-12 mt-2 mb-2"><p class="alert alert-warning mb-0">' +
                                                      d.noItem +
                                                      "</p></div>"),
                                                  k.classList.add(
                                                      "loaded",
                                                      "active"
                                                  ),
                                                  n.jumpTo(0))
                                                : n.yield(m(p, "" + d.view), 5)
                                        );
                                    r = n.yieldResult;
                                    k.innerHTML = r;
                                    k.classList.add("loaded", "active");
                                    g.initSlide(k);
                                    "function" === typeof b && b(k);
                                    n.jumpToEnd();
                                }
                            );
                        }));
                }
            });
        };
        g.initSlide = function (l) {
            if (null !== l && d.useSlide) {
                var f = Date.now();
                l.classList.contains("" + d.slideContainerClass) &&
                    (l.classList.add(d.slideContainerClass + "-" + f),
                    new Swiper(
                        "." + d.slideContainerClass + "-" + f,
                        d.slideConfig
                    ));
            }
        };
        g.init = function () {
            if ("IntersectionObserver" in window) {
                var l = new IntersectionObserver(function (f, h) {
                    f.forEach(function (p) {
                        p.isIntersecting &&
                            (g.bindEvent(p.target), h.unobserve(p.target));
                    });
                });
                e.querySelectorAll("" + d.tabContainer).forEach(function (f) {
                    return l.observe(f);
                });
            }
        };
        return g;
    };
})();
