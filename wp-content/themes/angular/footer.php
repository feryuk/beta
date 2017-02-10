






<!-- Angular Material requires Angular.js Libraries -->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-route.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/svg-assets-cache.js"></script>

<!-- Angular Material Library -->
<script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>


<!-- Your application bootstrap  -->
<script type="text/javascript">



    var app = angular.module('MyApp', ['ngMaterial',  'ngMessages', 'material.svgAssetsCache']);



    app.controller('MyController', function($scope, $mdSidenav) {
        $scope.openLeftMenu = function() {
            $mdSidenav('left').toggle();
        };
    });

    app.controller('AppCtrl', function($scope, $mdSidenav) {
        $scope.openLeftMenu = function() {
            $mdSidenav('left').toggle();
        };
    });

    app.controller('BasicDemoCtrl', DemoCtrl);






    function DemoCtrl ($timeout, $q) {
        var self = this;

        // var predefindeChips = document.getElementById("defval").value;
        var predefindeChips = document.getElementById("defval").value;
        var chipsArray = predefindeChips.split(',');


        self.readonly = false;

        // Lists of fruit names and Vegetable objects
        self.fruitNames = chipsArray;
        self.roFruitNames = angular.copy(self.fruitNames);
        self.editableFruitNames = angular.copy(self.fruitNames);


    }



















    /**
     Copyright 2016 Google Inc. All Rights Reserved.
     Use of this source code is governed by an MIT-style license that can be foundin the LICENSE file at http://material.angularjs.org/HEAD/license.
     **/
</script>

</body>


</html>