/**
 * Created by Feri on 18/11/2016.
 */
define("export-b", ["require", "exports"], function (require, exports) {
    "use strict";
    var Elephantb = (function () {
        function Elephantb() {
        }
        Elephantb.prototype.nameb = function () {
            console.log("cattttttttddddddddttttt");
        };
        return Elephantb;
    }());
    exports.Elephantb = Elephantb;
    var Horseb = (function () {
        function Horseb() {
        }
        Horseb.prototype.nameb = function () {
            console.log("cattttttttttt");
        };
        return Horseb;
    }());
    exports.Horseb = Horseb;
});
define("search", ["require", "exports", "export-b"], function (require, exports, animalsb) {
    "use strict";
    var AnimalPanel;
    (function (AnimalPanel) {
        var animalb = new animalsb.Elephantb();
        animalb.nameb();
        alert(animalb.nameb);
    })(AnimalPanel || (AnimalPanel = {}));
});
