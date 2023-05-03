// код Query + брабочтик вплывающих меню (poperjs)
! // обрабочтик вплывающих меню
    function(e, t) {
        e = window;
        "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : e.Popper = t()
    }(this, function() {
        "use strict";

        function e(e) {
            // нажатие на кнопку открытия всплывающего меню
            return e && "[object Function]" === {}.toString.call(e)
        }

        function D(e, t) {
            // закрыть все всплывающие подменю
            return e.some(function(e) {
                var n = e.name;
                return e.enabled && n === t
            })
        }

        function W() {
            var e, t;
            this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = (e = this.reference, t = this.state, H(e).removeEventListener("resize", t.updateBound), t.scrollParents.forEach(function(e) {
                e.removeEventListener("scroll", t.updateBound)
            }), t.updateBound = null, t.scrollParents = [], t.scrollElement = null, t.eventsEnabled = !1, t))
        }

        function R(e) {
            return "" !== e && !isNaN(parseFloat(e)) && isFinite(e)
        }

        var M = Math.min,
            X = Math.floor,
            B = Math.round,
            I = Math.max,
            F = "undefined" != typeof window && "undefined" != typeof document && "undefined" != typeof navigator,
            $ = function() {
                for (var e = ["Edge", "Trident", "Firefox"], t = 0; t < e.length; t += 1)
                    if (F && 0 <= navigator.userAgent.indexOf(e[t])) return 1;
                return 0
            }(),
            _ = F && window.Promise ? function(e) {
                var t = !1;
                return function() {
                    t || (t = !0, window.Promise.resolve().then(function() {
                        t = !1, e()
                    }))
                }
            } : function(e) {
                var t = !1;
                return function() {
                    t || (t = !0, setTimeout(function() {
                        t = !1, e()
                    }, $))
                }
            },
            U = F && !(!window.MSInputMethodContext || !document.documentMode),
            z = F && /MSIE 10/.test(navigator.userAgent),
            V = function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            },
            K = function() {
                function e(e, t) {
                    for (var n, r = 0; r < t.length; r++)(n = t[r]).enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
                return function(t, n, r) {
                    return n && e(t.prototype, n), r && e(t, r), t
                }
            }(),

            Q = Object.assign || function(e) {
                for (var t, n = 1; n < arguments.length; n++)
                    for (var r in t = arguments[n]) Object.prototype.hasOwnProperty.call(t, r) && (e[r] = t[r]);
                return e
            },
            J = F && /Firefox/i.test(navigator.userAgent),
            Z = ["auto-start", "auto", "auto-end", "top-start", "top", "top-end", "right-start", "right", "right-end", "bottom-end", "bottom", "bottom-start", "left-end", "left", "left-start"],
            ee = Z.slice(3),
            te = "flip",
            ne = "clockwise",
            re = "counterclockwise",
            ie = function() {
                // нихуясе
                function t(n, r) {
                    var i = this,
                        o = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : {};
                    V(this, t), this.scheduleUpdate = function() {
                        return requestAnimationFrame(i.update)
                    }, this.update = _(this.update.bind(this)), this.options = Q({}, t.Defaults, o), this.state = {
                        isDestroyed: !1,
                        isCreated: !1,
                        scrollParents: []
                    }, this.reference = n && n.jquery ? n[0] : n, this.popper = r && r.jquery ? r[0] : r, this.options.modifiers = {}, Object.keys(Q({}, t.Defaults.modifiers, o.modifiers)).forEach(function(e) {
                        i.options.modifiers[e] = Q({}, t.Defaults.modifiers[e] || {}, o.modifiers ? o.modifiers[e] : {})
                    }), this.modifiers = Object.keys(this.options.modifiers).map(function(e) {
                        return Q({
                            name: e
                        }, i.options.modifiers[e])
                    }).sort(function(e, t) {
                        return e.order - t.order
                    }), this.modifiers.forEach(function(t) {
                        t.enabled && e(t.onLoad) && t.onLoad(i.reference, i.popper, i.options, t, i.state)
                    }), this.update();
                    var s = this.options.eventsEnabled;
                    s && this.enableEventListeners(), this.state.eventsEnabled = s
                }
                return K(t, [{
                    key: "update",
                    value: function() {
                        return function() {
                            if (!this.state.isDestroyed) {
                                var e = {
                                    instance: this,
                                    styles: {},
                                    arrowStyles: {},
                                    attributes: {},
                                    flipped: !1,
                                    offsets: {}
                                };
                                e.offsets.reference = E(this.state, this.popper, this.reference, this.options.positionFixed), e.placement = T(this.options.placement, e.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), e.originalPlacement = e.placement, e.positionFixed = this.options.positionFixed, e.offsets.popper = L(this.popper, e.offsets.reference, e.placement), e.offsets.popper.position = this.options.positionFixed ? "fixed" : "absolute", e = A(this.modifiers, e), this.state.isCreated ? this.options.onUpdate(e) : (this.state.isCreated = !0, this.options.onCreate(e))
                            }
                        }.call(this)
                    }
                }, {
                    // закрыть меню
                    key: "destroy",
                    value: function() {
                        return function() {
                            return this.state.isDestroyed = !0, D(this.modifiers, "applyStyle") && (this.popper.removeAttribute("x-placement"), this.popper.style.position = "", this.popper.style.top = "", this.popper.style.left = "", this.popper.style.right = "", this.popper.style.bottom = "", this.popper.style.willChange = "", this.popper.style[N("transform")] = ""), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this
                        }.call(this)
                    }
                }, {
                    // открыть меню
                    key: "disableEventListeners",
                    value: function() {
                        return W.call(this)
                    }
                }]), t
            }();
        return ie.Utils = ("undefined" == typeof window ? global : window).PopperUtils, ie.placements = Z, ie.Defaults = {
            modifiers: {
            }
        }, ie
    })
