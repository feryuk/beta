/**
 * Created by Feri on 15/11/2016.
 */
/*!
 Waypoints Sticky Element Shortcut - 3.1.1
 Copyright © 2011-2015 Caleb Troughton
 Licensed under the MIT license.
 https://github.com/imakewebthings/waypoints/blog/master/licenses.txt
 */
!function () {
    "use strict";
    function t(s) {
        this.options = e.extend({}, i.defaults, t.defaults, s), this.element = this.options.element, this.$element = e(this.element), this.createWrapper(), this.createWaypoint()
    }

    var e = window.jQuery, i = window.Waypoint;
    t.prototype.createWaypoint = function () {
        var t = this.options.handler;
        this.waypoint = new i(e.extend({}, this.options, {
            element: this.wrapper, handler: e.proxy(function (e) {
                var i = this.options.direction.indexOf(e) > -1, s = i ? this.$element.outerHeight(!0) : "";
                this.$wrapper.height(s), this.$element.toggleClass(this.options.stuckClass, i), t && t.call(this, e)
            }, this)
        }))
    }, t.prototype.createWrapper = function () {
        this.$element.wrap(this.options.wrapper), this.$wrapper = this.$element.parent(), this.wrapper = this.$wrapper[0]
    }, t.prototype.destroy = function () {
        this.$element.parent()[0] === this.wrapper && (this.waypoint.destroy(), this.$element.removeClass(this.options.stuckClass).unwrap())
    }, t.defaults = {
        wrapper: '<div class="sticky-wrapper" />',
        stuckClass: "stuck",
        direction: "down right"
    }, i.Sticky = t
}();