var app = angular.module('StarterApp', ['timer', 'ngMaterial', 'ngMdIcons', 'ngMessages', 'material.svgAssetsCache']);

app.config(function ($mdIconProvider) {
    $mdIconProvider
        .iconSet("call", 'img/icons/sets/communication-icons.svg', 24)
        .iconSet("social", 'img/icons/sets/social-icons.svg', 24);
})


app.filter('numberEx', ['numberFilter', '$locale',
    function (number, $locale) {

        var formats = $locale.NUMBER_FORMATS;
        return function (input, fractionSize) {
            //Get formatted value
            var formattedValue = number(input, fractionSize);

            //get the decimalSepPosition
            var decimalIdx = formattedValue.indexOf(formats.DECIMAL_SEP);

            //If no decimal just return
            if (decimalIdx == -1) return formattedValue;


            var whole = formattedValue.substring(0, decimalIdx);
            var decimal = (Number(formattedValue.substring(decimalIdx)) || "").toString();

            return whole + decimal.substring(1);
        };
    }
]);


app.filter('calculatetax', ['numberFilter', '$locale',
    function (number, $locale) {

        var formats = $locale.NUMBER_FORMATS;
        return function (input, fractionSize) {
            //Get formatted value
            var formattedValue = number(input, fractionSize);

            //get the decimalSepPosition
            var decimalIdx = formattedValue.indexOf(formats.DECIMAL_SEP);

            //If no decimal just return
            if (decimalIdx == -1) return formattedValue;


            var whole = formattedValue.substring(0, decimalIdx);
            var decimal = (Number(formattedValue.substring(decimalIdx)) || "").toString();

            return whole + decimal.substring(1);
        };
    }
]);


app.controller('AppCtrl', ['$scope', '$mdBottomSheet', '$timeout', '$mdSidenav','$mdDialog', function ($scope, $mdBottomSheet, $timeout, $mdSidenav) {

    $scope.toggleSidenav = function (menuId) {
        $mdSidenav(menuId).open();
    };


    $scope.menu = [

        {
            link: '',
            title: 'Tax calculator 2017',
            icon: 'business'
        },
        {
            link: '',
            title: 'Tax calculator 2016',
            icon: 'business'
        },
        {
            link: '',
            title: 'Tax calculator 2015',
            icon: 'business'
        },


        {
            link: '',
            title: 'PAYE Calculator',
            icon: 'business'
        }
    ];
    $scope.admin = [
        {
            link: '',
            title: 'Income tax explained',
            icon: 'info'
        },
        {
            link: '',
            title: 'Income tax rates',
            icon: 'info'
        },

        {
            link: 'showListBottomSheet($event)',
            title: 'Claim back income tax',
            icon: 'info'
        },
        {
            link: 'showListBottomSheet($event)',
            title: 'Useful links',
            icon: 'info'
        }
    ];
    $scope.activity = [
        {
            what: 'Brunch this weekend?',
            who: 'Ali Conners',
            when: '3:08PM',
            notes: " I'll be in your neighborhood doing errands"
        },
        {
            what: 'Summer BBQ',
            who: 'to Alex, Scott, Jennifer',
            when: '3:08PM',
            notes: "Wish I could come out but I'm out of town this weekend"
        },
        {
            what: 'Oui Oui',
            who: 'Sandra Adams',
            when: '3:08PM',
            notes: "Do you have Paris recommendations? Have you ever been?"
        },
        {
            what: 'Birthday Gift',
            who: 'Trevor Hansen',
            when: '3:08PM',
            notes: "Have any ideas of what we should get Heidi for her birthday?"
        },
        {
            what: 'Recipe to try',
            who: 'Brian Holt',
            when: '3:08PM',
            notes: "We should eat this: Grapefruit, Squash, Corn, and Tomatillo tacos"
        },
    ];

    $scope.basicslider = function (value) {

        var slidex = '<md-slider-container> <span>R</span> <md-slider flex="" min="0" max="' + value + '" ng-model="color.red" aria-label="red" id="red-slider"> </md-slider>  <md-input-container> <input flex="" type="number" ng-model="color.red" aria-label="red" aria-controls="red-slider"> </md-input-container> </md-slider-container>'


    };


    $scope.working_weeks = 52;


    $scope.earningsSliders = {
        yearly: 30000,
        monthly: 30000 / 12,
        weekly: 30000 / $scope.working_weeks,
        daily: 30000 / ($scope.working_weeks * 5),
        hourly: 30000 / ($scope.working_weeks * 37.5),
        weekly_hours: 37.5


    };
    // The model of the dropdown select box
    $scope.select_period = 'yearly';
    $scope.hourlyInputToFixed = 1;
    /*********************** Tax Allowances **********************/

    // the default yearly allowance
    $scope.initialYearlyAllowance = 11000;
    $scope.yearlyAllowance = 11000;
    $scope.yearlyAllowanceErningLimit = 100000;


    /*********************** Tax limits **********************/
    // this is the limit where the high tax kicks in,
    // this is after the personal allowance has been taken off
    $scope.highTaxLimit = 32000;
    $scope.highestTaxLimit = 150000;


    /*********************** Tax rates **********************/
    // the basic tax rate
    $scope.basicTax = 20;

    // the tax rate above 43K
    $scope.highTax = 40;
    // the highest tax, for earnings above
    $scope.highestTax = 45;


    /*********************** National insurance yearly threshold **********************/
    $scope.nationalInsuranceYearlyThreshold = 8060;

    $scope.nationalInsuranceUpperLimit = 43000;

    $scope.nationalInsuranceRateA = 12;

    $scope.nationalInsuranceRateB = 2;


    // this is a model that will be modified by the ng-change on the select_period model
    $scope.whatsSelected = 'yearly';

    // the hourly rate input type
    $scope.hourlyInputType = 'text';

    // The model of the weekly hours slider
    $scope.earningsSliders.weekly_hours = 37.5;

    $scope.timeInMs = 0;


    var timeoutCalculator;

    var calculateDelay = 600;


// http://localhost/edbf/wordpress/wp-content/themes/taxcalculatorxxx/requests/get-wages-by-country-from-database.php?sfdgdfg


    $scope.earnings_by_countries = [ {country: 'Australia', wage : 41646}, {country: 'Austria', wage : 38257}, {country: 'Belgium', wage : 39600}, {country: 'Canada', wage : 39717}, {country: 'Czech Republic', wage : 18005}, {country: 'Denmark', wage : 41527}, {country: 'Finland', wage : 33813}, {country: 'France', wage : 34245}, {country: 'Germany', wage : 37294}, {country: 'Greece', wage : 20929}, {country: 'Hungary', wage : 16602}, {country: 'Ireland', wage : 38248}, {country: 'Italy', wage : 28341}, {country: 'Japan', wage : 29703}, {country: 'South Korea', wage : 27486}, {country: 'Luxembourg', wage : 50115}, {country: 'Mexico', wage : 12342}, {country: 'Netherlands', wage : 42064}, {country: 'Norway', wage : 42261}, {country: 'Poland', wage : 19922}, {country: 'Portugal', wage : 20011}, {country: 'Slovakia', wage : 18289}, {country: 'Spain', wage : 30155}, {country: 'Sweden', wage : 33961}, {country: 'Switzerland', wage : 48472}, {country: 'United Kingdom', wage : 34355}, {country: 'United States', wage : 48741}, {country: 'Estonia', wage : 17901}, {country: 'Israel', wage : 24733}, {country: 'Slovenia', wage : 27466}, {country: 'Chile', wage : 19298}, {country: 'Latvia', wage : 17033}]



    //********************************************************************
    //*********************** Watchers ***********************************
    //********************************************************************


    // watch the change in the yearly earnings model
    $scope.$watch('earningsSliders.yearly', function (newValues, oldValues, scope) {

        angular.element(document.querySelectorAll('.results_container_loaded')).removeClass('visible_container');
        angular.element(document.querySelectorAll('.results_container_loaded')).addClass('opaque_container');

        angular.element(document.querySelectorAll('.results_loader')).removeClass('hidden_input');
        angular.element(document.querySelectorAll('.results_loader')).addClass('visible_input');



        // this model will be updated by all other model watchers,
        // therefore it will be the only one that will update the rest
        // of the models all at once
        //if ($scope.whatsSelected != 'yearly') {
        // update the monthly earnings model, round it to numbers only
        $scope.earningsSliders.monthly = $scope.earningsSliders.yearly / 12;
        $scope.earningsSliders.monthly = Math.round($scope.earningsSliders.monthly.toFixed(0)) * 1;
        //}
        // update the weekly earnings model, round it to numbers only
        $scope.earningsSliders.weekly = $scope.earningsSliders.yearly / $scope.working_weeks;
        $scope.earningsSliders.weekly = Math.round($scope.earningsSliders.weekly).toFixed(0) * 1;

        // update the monthly earnings model, round it to numbers only
        $scope.earningsSliders.daily = $scope.earningsSliders.yearly / ($scope.working_weeks * 5);
        $scope.earningsSliders.daily = parseFloat($scope.earningsSliders.daily.toFixed(2));

        // update the monthly earnings model, round it to numbers only


        if ($scope.whatsSelected == 'hourly') {
            // if the hourly slider is selected, don't do anything
            // to allow the input to be freely edited

        } else {
            $scope.earningsSliders.hourly = $scope.earningsSliders.yearly / ($scope.working_weeks * $scope.earningsSliders.weekly_hours);
            $scope.earningsSliders.hourly = parseFloat(Math.round($scope.earningsSliders.hourly * 100) / 100).toFixed(2);
        }




        $timeout.cancel(timeoutCalculator);
         timeoutCalculator = $timeout(function () {
            $scope.calculateIncomeTax();
            // variables to pass to google charts (piechart)
            var piechart_values = {
                take_home: $scope.takeHome.yearly,
                tax: $scope.incomeTax.yearly,
                national_insurance: $scope.nationalInsurance.yearly
            }
             google.charts.setOnLoadCallback(function () {
                 drawChart(piechart_values);
                 drawChartx($scope.earnings_by_countries, $scope.earningsSliders.yearly);
             });

             angular.element(document.querySelectorAll('.results_container_loaded')).removeClass('opaque_container');
             angular.element(document.querySelectorAll('.results_container_loaded')).addClass('visible_container');

             angular.element(document.querySelectorAll('.results_loader')).removeClass('visible_input');
             angular.element(document.querySelectorAll('.results_loader')).addClass('hidden_input');
        }, calculateDelay);




    });


    // watch the monthly earnings slider
    $scope.$watch('earningsSliders.monthly', function (newValues, oldValues, scope) {

        if ($scope.whatsSelected == 'monthly') {
            // update the yearly slider, that in turn will update all the rest of the models
            $scope.earningsSliders.yearly = $scope.earningsSliders.monthly * 12;
            $scope.earningsSliders.yearly = Math.round($scope.earningsSliders.yearly).toFixed(0) * 1;
        }
    });

    // watch the weekly earnings slider
    $scope.$watch('earningsSliders.weekly', function (newValues, oldValues, scope) {

        if ($scope.whatsSelected == 'weekly') {
            // update the yearly slider, that in turn will update all the rest of the models
            $scope.earningsSliders.yearly = $scope.earningsSliders.weekly * $scope.working_weeks;
            $scope.earningsSliders.yearly = Math.round($scope.earningsSliders.yearly).toFixed(0) * 1;
        }
    });

    // watch the daily earnings slider
    $scope.$watch('earningsSliders.daily', function (newValues, oldValues, scope) {

        if ($scope.whatsSelected == 'daily') {
            // update the yearly slider, that in turn will update all the rest of the models
            $scope.earningsSliders.yearly = $scope.earningsSliders.daily * 5 * $scope.working_weeks;
            $scope.earningsSliders.yearly = Math.round($scope.earningsSliders.yearly).toFixed(0) * 1;
        }

    });


    $scope.$watch('earningsSliders.hourly', function (newValues, oldValues, scope) {

        if ($scope.whatsSelected == 'hourly') {
            $scope.earningsSliders.yearly = ($scope.earningsSliders.hourly * $scope.working_weeks * $scope.earningsSliders.weekly_hours).toFixed(2) * 1;


            if ($scope.hourlyInputToFixed == 1) {
                var eeee = $scope.earningsSliders.hourly * 1;

                $scope.earningsSliders.hourly = parseFloat(Math.round(eeee * 100) / 100).toFixed(2);
            }
        }

        $timeout.cancel(timeoutCalculator);
         timeoutCalculator = $timeout(function () {
            $scope.calculateIncomeTax();
            // variables to pass to google charts (piechart)
            var piechart_values = {
                take_home: $scope.takeHome.yearly,
                tax: $scope.incomeTax.yearly,
                national_insurance: $scope.nationalInsurance.yearly
            }
             google.charts.setOnLoadCallback(function () {
                 drawChart(piechart_values);
                 drawChartx($scope.earnings_by_countries, $scope.earningsSliders.yearly);
             });

             angular.element(document.querySelectorAll('.results_container_loaded')).removeClass('opaque_container');
             angular.element(document.querySelectorAll('.results_container_loaded')).addClass('visible_container');

             angular.element(document.querySelectorAll('.results_loader')).removeClass('visible_input');
             angular.element(document.querySelectorAll('.results_loader')).addClass('hidden_input');
        }, calculateDelay);


    });

    $scope.$watch('earningsSliders.weekly_hours', function (newValues, oldValues, scope) {

        angular.element(document.querySelectorAll('.results_container_loaded')).removeClass('visible_container');
        angular.element(document.querySelectorAll('.results_container_loaded')).addClass('opaque_container');

        angular.element(document.querySelectorAll('.results_loader')).removeClass('hidden_input');
        angular.element(document.querySelectorAll('.results_loader')).addClass('visible_input');



        if ($scope.whatsSelected == 'hourly') {

            $scope.earningsSliders.yearly = $scope.earningsSliders.hourly * $scope.earningsSliders.weekly_hours * $scope.working_weeks;
            $scope.earningsSliders.monthly = ($scope.earningsSliders.hourly * $scope.earningsSliders.weekly_hours * $scope.working_weeks) / 12;
            $scope.earningsSliders.weekly = $scope.earningsSliders.hourly * $scope.earningsSliders.weekly_hours;
            $scope.earningsSliders.daily = ($scope.earningsSliders.hourly * $scope.earningsSliders.weekly_hours) / 5;


        } else {

            $scope.earningsSliders.hourly = $scope.earningsSliders.weekly / $scope.earningsSliders.weekly_hours;
            var eeee = $scope.earningsSliders.hourly * 1;

            $scope.earningsSliders.hourly = parseFloat(Math.round(eeee * 100) / 100).toFixed(2);

            if ($scope.hourlyInputToFixed == 1) {
                var eeee = $scope.earningsSliders.hourly * 1;

                $scope.earningsSliders.hourly = parseFloat(Math.round(eeee * 100) / 100).toFixed(2);
            }
        }

        $timeout.cancel(timeoutCalculator);
         timeoutCalculator = $timeout(function () {
            $scope.calculateIncomeTax();
            // variables to pass to google charts (piechart)
            var piechart_values = {
                take_home: $scope.takeHome.yearly,
                tax: $scope.incomeTax.yearly,
                national_insurance: $scope.nationalInsurance.yearly
            }
            google.charts.setOnLoadCallback(function () {
                drawChart(piechart_values);
                drawChartx($scope.earnings_by_countries, $scope.earningsSliders.yearly);
            });


             // google.charts.setOnLoadCallback(function () {
             //
             // });

             angular.element(document.querySelectorAll('.results_container_loaded')).removeClass('opaque_container');
             angular.element(document.querySelectorAll('.results_container_loaded')).addClass('visible_container');

             angular.element(document.querySelectorAll('.results_loader')).removeClass('visible_input');
             angular.element(document.querySelectorAll('.results_loader')).addClass('hidden_input');
        }, calculateDelay);
    });


    //********************************************************************
    //*********************** Watchers end ***********************************
    //********************************************************************


    /************************* Calculate tax ***********************/
    $scope.calculateIncomeTax = function () {


        if ($scope.earningsSliders.yearly > $scope.yearlyAllowanceErningLimit) {

            var sumAboveAllowanceEarningLimit = $scope.earningsSliders.yearly - $scope.yearlyAllowanceErningLimit;

            // the yearly allowance limit drops with £1 for every £2 earned above 100K
            var reduceAllowanceLimitCoeff = sumAboveAllowanceEarningLimit / 2;


            $scope.yearlyAllowance = $scope.initialYearlyAllowance - reduceAllowanceLimitCoeff;
            if ($scope.yearlyAllowance < 1) {
                $scope.yearlyAllowance = 0;
            }

        } else {
            $scope.yearlyAllowance = $scope.initialYearlyAllowance;
        }


        // there is no tax under the yearly allowance
        if ($scope.earningsSliders.yearly < $scope.yearlyAllowance) {

            $scope.incomeTax = {
                yearly: 0,
                monthly: 0,
                weekly: 0,
                daily: 0,
                hourly: 0

            }


        } else {



            // calculate tax over the high tax limit
            // get the extra percentage that will be extracted from the extra taxable sum
            var hightaxearnings = $scope.yearlyAllowance + $scope.highTaxLimit;

            var yearlyHighTax = 0;
            var monthlyHighTax = 0;
            var weeklyHighTax = 0;
            var dailyHighTax = 0;
            var hourlyHighTax = 0;

            var highEarningExtraTax = 0;
            if ($scope.earningsSliders.yearly > hightaxearnings) {

                var highTaxExtraPercentage = $scope.highTax - $scope.basicTax;

                var taxableWithHighTaxSum = $scope.earningsSliders.yearly - $scope.yearlyAllowance - $scope.highTaxLimit;

                // calculate the high earning tax for income above after £43K
                highEarningExtraTax = (highTaxExtraPercentage / 100) * taxableWithHighTaxSum;


                yearlyHighTax = highEarningExtraTax;
                monthlyHighTax = highEarningExtraTax / 12;
                weeklyHighTax = highEarningExtraTax / $scope.working_weeks;
                dailyHighTax = highEarningExtraTax / ($scope.working_weeks * 5);

                // no need to define the hourly high tax as we just split the weekkly final tax into the weekly hours
                hourlyHighTax = weeklyHighTax / $scope.earningsSliders.weekly_hours;
            }

            // calculate tax at the basic rate
            var taxableAmountBasic = $scope.earningsSliders.yearly - $scope.yearlyAllowance;
            var yearly = Math.round((yearlyHighTax + ($scope.basicTax / 100) * taxableAmountBasic) / 1) * 1;
            var monthly = Math.round(monthlyHighTax + ((($scope.basicTax / 100) * taxableAmountBasic) / 12) / 1) * 1;
            var weekly = Math.round(weeklyHighTax + (( ($scope.basicTax / 100) * taxableAmountBasic) / $scope.working_weeks) / 1) * 1;
            var daily = dailyHighTax + (( ($scope.basicTax / 100) * taxableAmountBasic) / ($scope.working_weeks * 5))

            var hourly = yearly / ($scope.working_weeks * $scope.earningsSliders.weekly_hours);
            hourly = hourly.toFixed(2);

            $scope.incomeTax = {
                yearly: yearly,
                monthly: monthly,
                weekly: weekly,
                daily: daily,
                hourly: hourly

            }


        }

        $scope.calculateNationalInsurance();
        $scope.calculateTakeHome();

    }


    /************************* Calculate National Insurance ***********************/
    $scope.calculateNationalInsurance = function () {


        if ($scope.earningsSliders.yearly < $scope.nationalInsuranceYearlyThreshold) {


            $scope.nationalInsurance = {
                yearly: 0,
                monthly: 0,
                weekly: 0,
                daily: 0,
                hourly: 0

            }


        }

        else {

            var basicNationalInsuranceableSum = $scope.earningsSliders.yearly;

            var highEarningsNationalInsuranceableSum = 0;

            var yearlyHighEarningNationalInsurance = 0;


            if ($scope.earningsSliders.yearly > $scope.nationalInsuranceUpperLimit) {

                basicNationalInsuranceableSum = $scope.nationalInsuranceUpperLimit;

                highEarningsNationalInsuranceableSum = $scope.earningsSliders.yearly - $scope.nationalInsuranceUpperLimit;

                yearlyHighEarningNationalInsurance = ($scope.nationalInsuranceRateB / 100) * highEarningsNationalInsuranceableSum;


            }
            console.log(yearlyHighEarningNationalInsurance);


            var nationalInsuranceCoeffA = basicNationalInsuranceableSum - $scope.nationalInsuranceYearlyThreshold;

            var firstBandNationalInsurance = ($scope.nationalInsuranceRateA / 100) * nationalInsuranceCoeffA + yearlyHighEarningNationalInsurance;

            var monthlyNationalInsurance = firstBandNationalInsurance / 12;
            var weeklyNationalInsurance = firstBandNationalInsurance / $scope.working_weeks;

            var dailyNationalInsurance = weeklyNationalInsurance / 5;

            var hourlyNationalInsurance = weeklyNationalInsurance / $scope.earningsSliders.weekly_hours;

            //var nationalInsuranceContributionaA = $scope.earningsSliders.yearly;


            $scope.nationalInsurance = {
                yearly: firstBandNationalInsurance,
                monthly: monthlyNationalInsurance,
                weekly: weeklyNationalInsurance,
                daily: dailyNationalInsurance,
                hourly: hourlyNationalInsurance

            }

        }
    }


    $scope.calculateTakeHome = function () {


        $scope.totalDeductable = {

            yearly: $scope.nationalInsurance.yearly + $scope.incomeTax.yearly,
            monthly: $scope.nationalInsurance.monthly + $scope.incomeTax.monthly,
            weekly: $scope.nationalInsurance.weekly + $scope.incomeTax.weekly,
            daily: $scope.nationalInsurance.daily + $scope.incomeTax.daily,
            hourly: $scope.nationalInsurance.hourly + $scope.incomeTax.hourly * 1

        }


        $scope.takeHome = {
            yearly: $scope.earningsSliders.yearly - $scope.totalDeductable.yearly,
            monthly: $scope.earningsSliders.monthly - $scope.totalDeductable.monthly,
            weekly: $scope.earningsSliders.weekly - $scope.totalDeductable.weekly,
            daily: $scope.earningsSliders.daily - $scope.totalDeductable.daily,
            hourly: $scope.earningsSliders.hourly - $scope.totalDeductable.hourly,

            //$scope.nationalInsurance.hourly

        }


    }


    $scope.isLoading = true;


// this will hide and show the relevant sliders,
// depending on the value of the earnings period select dropdown
    $scope.setWhatsSelected = function (whats) {

        $scope.whatsSelected = whats;
        angular.element(document.querySelectorAll('.earning_sliders')).removeClass('visible_slider');
        angular.element(document.querySelector('.' + whats + '_slider')).addClass('visible_slider');

        angular.element(document.querySelectorAll('.gross_income_input')).removeClass('visible_input');
        angular.element(document.querySelector('.' + whats + '_input')).addClass('visible_input');

    }

    $scope.setHourlyInputType = function (whats) {

        $scope.hourlyInputType = whats;

    }

    $scope.removeToFixedFromHourly = function () {

        $scope.hourlyInputToFixed = 0;


    }

    $scope.setToFixedToHourly = function () {

        $scope.hourlyInputToFixed = 1;


    }


    $scope.alert = '';
    $scope.showListBottomSheet = function ($event) {
        $scope.alert = '';
        $mdBottomSheet.show({
            template: '<md-bottom-sheet class="md-list md-has-header"> <md-subheader>Settings</md-subheader> <md-list> <md-item ng-repeat="item in items"><md-item-content md-ink-ripple flex class="inset"> <a flex aria-label="{{item.name}}" ng-click="listItemClick($index)"> <span class="md-inline-list-icon-label">{{ item.name }}</span> </a></md-item-content> </md-item> </md-list></md-bottom-sheet>',
            controller: 'ListBottomSheetCtrl',
            targetEvent: $event
        }).then(function (clickedItem) {
            $scope.alert = clickedItem.name + ' clicked!';
        });
    };


}]);


app.controller('ListBottomSheetCtrl', function ($scope, $mdBottomSheet) {
    $scope.items = [
        {name: 'Share', icon: 'share'},
        {name: 'Upload', icon: 'upload'},
        {name: 'Copy', icon: 'copy'},
        {name: 'Print this page', icon: 'print'},
    ];

    $scope.listItemClick = function ($index) {
        var clickedItem = $scope.items[$index];
        $mdBottomSheet.hide(clickedItem);
    };
});

function DialogController($scope, $mdDialog) {
    $scope.hide = function () {
        $mdDialog.hide();
    };
    $scope.cancel = function () {
        $mdDialog.cancel();
    };
    $scope.answer = function (answer) {
        $mdDialog.hide(answer);
    };
};

app.directive('userAvatar', function () {
    return {
        replace: true,
        template: '<svg class="user-avatar" viewBox="0 0 128 128" height="64" width="64" pointer-events="none" display="block" > <path fill="#FF8A80" d="M0 0h128v128H0z"/> <path fill="#FFE0B2" d="M36.3 94.8c6.4 7.3 16.2 12.1 27.3 12.4 10.7-.3 20.3-4.7 26.7-11.6l.2.1c-17-13.3-12.9-23.4-8.5-28.6 1.3-1.2 2.8-2.5 4.4-3.9l13.1-11c1.5-1.2 2.6-3 2.9-5.1.6-4.4-2.5-8.4-6.9-9.1-1.5-.2-3 0-4.3.6-.3-1.3-.4-2.7-1.6-3.5-1.4-.9-2.8-1.7-4.2-2.5-7.1-3.9-14.9-6.6-23-7.9-5.4-.9-11-1.2-16.1.7-3.3 1.2-6.1 3.2-8.7 5.6-1.3 1.2-2.5 2.4-3.7 3.7l-1.8 1.9c-.3.3-.5.6-.8.8-.1.1-.2 0-.4.2.1.2.1.5.1.6-1-.3-2.1-.4-3.2-.2-4.4.6-7.5 4.7-6.9 9.1.3 2.1 1.3 3.8 2.8 5.1l11 9.3c1.8 1.5 3.3 3.8 4.6 5.7 1.5 2.3 2.8 4.9 3.5 7.6 1.7 6.8-.8 13.4-5.4 18.4-.5.6-1.1 1-1.4 1.7-.2.6-.4 1.3-.6 2-.4 1.5-.5 3.1-.3 4.6.4 3.1 1.8 6.1 4.1 8.2 3.3 3 8 4 12.4 4.5 5.2.6 10.5.7 15.7.2 4.5-.4 9.1-1.2 13-3.4 5.6-3.1 9.6-8.9 10.5-15.2M76.4 46c.9 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6-.1-.9.7-1.6 1.6-1.6zm-25.7 0c.9 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6-.1-.9.7-1.6 1.6-1.6z"/> <path fill="#E0F7FA" d="M105.3 106.1c-.9-1.3-1.3-1.9-1.3-1.9l-.2-.3c-.6-.9-1.2-1.7-1.9-2.4-3.2-3.5-7.3-5.4-11.4-5.7 0 0 .1 0 .1.1l-.2-.1c-6.4 6.9-16 11.3-26.7 11.6-11.2-.3-21.1-5.1-27.5-12.6-.1.2-.2.4-.2.5-3.1.9-6 2.7-8.4 5.4l-.2.2s-.5.6-1.5 1.7c-.9 1.1-2.2 2.6-3.7 4.5-3.1 3.9-7.2 9.5-11.7 16.6-.9 1.4-1.7 2.8-2.6 4.3h109.6c-3.4-7.1-6.5-12.8-8.9-16.9-1.5-2.2-2.6-3.8-3.3-5z"/> <circle fill="#444" cx="76.3" cy="47.5" r="2"/> <circle fill="#444" cx="50.7" cy="47.6" r="2"/> <path fill="#444" d="M48.1 27.4c4.5 5.9 15.5 12.1 42.4 8.4-2.2-6.9-6.8-12.6-12.6-16.4C95.1 20.9 92 10 92 10c-1.4 5.5-11.1 4.4-11.1 4.4H62.1c-1.7-.1-3.4 0-5.2.3-12.8 1.8-22.6 11.1-25.7 22.9 10.6-1.9 15.3-7.6 16.9-10.2z"/> </svg>'
    };
});

app.config(function ($mdThemingProvider) {
    var customBlueMap = $mdThemingProvider.extendPalette('light-blue', {
        'contrastDefaultColor': 'light',
        'contrastDarkColors': ['50'],
        '50': 'ffffff'
    });
    $mdThemingProvider.definePalette('customBlue', customBlueMap);
    $mdThemingProvider.theme('default')
        .primaryPalette('customBlue', {
            'default': '500',
            'hue-1': '50'
        })
        .accentPalette('pink');
    $mdThemingProvider.theme('input', 'default')
        .primaryPalette('grey')
});

var piechart_values = {
    take_home: 30000,
    tax: 11000,
    national_insurance: 2000
}









google.charts.load("current", {packages: ["corechart"]});



google.charts.setOnLoadCallback(function () {
    drawChart(piechart_values);
});



function drawChart(piechart_values) {


    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Take home', piechart_values.take_home],
        ['Tax', piechart_values.tax],
        ['National insurance', piechart_values.national_insurance],

    ]);

    var options = {
        title: 'My Salary Breakdown',
        legend: {position: "bottom"},
        is3D: true,
        chartArea: {top: 1}
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
}














google.charts.load("current", {packages: ["bar"]});


var earnings_by_countries = [ {country: 'Australia', wage : 41646}, {country: 'Austria', wage : 38257}, {country: 'Belgium', wage : 39600}, {country: 'Canada', wage : 39717}, {country: 'Czech Republic', wage : 18005}, {country: 'Denmark', wage : 41527}, {country: 'Finland', wage : 33813}, {country: 'France', wage : 34245}, {country: 'Germany', wage : 37294}, {country: 'Greece', wage : 20929}, {country: 'Hungary', wage : 16602}, {country: 'Ireland', wage : 38248}, {country: 'Italy', wage : 28341}, {country: 'Japan', wage : 29703}, {country: 'South Korea', wage : 27486}, {country: 'Luxembourg', wage : 50115}, {country: 'Mexico', wage : 12342}, {country: 'Netherlands', wage : 42064}, {country: 'Norway', wage : 42261}, {country: 'Poland', wage : 19922}, {country: 'Portugal', wage : 20011}, {country: 'Slovakia', wage : 18289}, {country: 'Spain', wage : 30155}, {country: 'Sweden', wage : 33961}, {country: 'Switzerland', wage : 48472}, {country: 'United Kingdom', wage : 34355}, {country: 'United States', wage : 48741}, {country: 'Estonia', wage : 17901}, {country: 'Israel', wage : 24733}, {country: 'Slovenia', wage : 27466}, {country: 'Chile', wage : 19298}, {country: 'Latvia', wage : 17033}]

var your_wage = 30000;

google.charts.setOnLoadCallback(function () {
    drawChartx(earnings_by_countries, your_wage);
});




function drawChartx(earnings_by_countries, your_wage) {



    var datav=[];
    var Header= ['United States', 'Wage', {role: 'style'}];
    var your_wage_array = ['Your wage', your_wage, 'color: #3366CC; opacity: 1' ]
    datav.push(Header);
    datav.push(your_wage_array);
    for (var i = 0; i < earnings_by_countries.length; i++) {
        var temp=[];
        temp.push(earnings_by_countries[i].country , earnings_by_countries[i].wage, 'color: #3366CC; opacity: 0.3'  );


        datav.push(temp);
    }

    datav = datav.sort(function(a,b) {
        return b[1] - a[1];
    });


    var data = google.visualization.arrayToDataTable(datav);

    var options = {
        title: 'My Salary Breakdown',
        legend: {position: "bottom"},
        is3D: true,
        chartArea: {top: 1},
        height: 1000
    };

    var chart = new google.visualization.BarChart(document.getElementById('barchart_colors'));
    chart.draw(data, options);
}






function sortByKey(array, key) {
    return array.sort(function(a, b) {
        var x = a[key]; var y = b[key];
        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    });
}






//
//
// function drawStuff() {
//
//     var datax = new google.visualization.arrayToDataTable([
//         ['Move', 'Percentage ', {
//             role: 'style'
//         }],
//         ['Keyword research', 50, 'color: #3366CC; opacity:' + 1],
//         ['Targeted keywords', 50, 'color: #DC3912;opacity:' + 1],
//         ['Keyword tracking', 50, 'color: #FF9900;opacity:' + 1],
//         ['On-site optimization', 50, 'color: #66AA00; opacity:' + 1],
//         ['Ongoing link building', 50, 'color: #990099; opacity:' + 1],
//         ['Competitor research', 50, 'color: #3B3EAC; opacity:' + 1],
//         ['Competitor link imitation', 50, 'color: #0099C6; opacity:' + 1],
//         ['Monopoly on Google', 50, 'color: red; opacity:' + 1],
//         ['Authority in your niche', 50, 'color: green; opacity:' + 1],
//         ['Advanced link building', 50, 'color: #B82E2E; opacity:' + 1],
//         ['Blog article creation', 50, 'color: #316395; opacity:' + 1],
//         ['Social media posting', 50, 'color: #994499; opacity:' + 1],
//         ['Customer support', 50, 'color: #DD4477; opacity:' + 1]
//     ]);
//     var options = {
//         hAxis: {
//             viewWindowMode: 'explicit',
//             viewWindow: {
//                 max: 101,
//                 min: 0
//             }
//         },
//
//
//         title: "SEO Features depending on monthly budget",
//         subtitle: 'Sales, Expenses, and Profit: 2014-2017',
//
//         height: 800,
//
//         bar: {
//             groupWidth: '71%'
//         },
//         legend: {
//             position: 'none'
//         },
//     };
//     var chartx = new google.visualization.BarChart(document.getElementById('barchart_colors'));
//     chartx.draw(datax, options);
//
//
//
//
// }









//AppCtrl.$inject = ['$scope'];