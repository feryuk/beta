<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();


?>


    <body layout="row" ng-controller="AppCtrl">


    <md-sidenav layout="column" class="md-sidenav-left md-whiteframe-z2" md-component-id="left"
                md-is-locked-open="$mdMedia('gt-md')">
        <md-toolbar class="md-tall md-hue-2">
            <span flex></span>
            <div layout="column" class="md-toolbar-tools-bottom inset">


                <div>income-tax.co.uk</div>
                <div><h3>Interactive UK income tax calculator</h3></div>
            </div>
        </md-toolbar>
        <md-list>
            <md-item ng-repeat="item in menu">
                <a>
                    <md-item-content md-ink-ripple layout="row" layout-align="start center">
                        <div class="inset">
                            <ng-md-icon icon="{{item.icon}}"></ng-md-icon>
                        </div>
                        <div class="inset">{{item.title}}
                        </div>
                    </md-item-content>
                </a>
            </md-item>
            <md-divider></md-divider>
            <md-subheader>Useful income tax info</md-subheader>
            <md-item ng-repeat="item in admin">
                <a>
                    <md-item-content md-ink-ripple layout="row" layout-align="start center">
                        <div class="inset">
                            <ng-md-icon icon="{{item.icon}}"></ng-md-icon>
                        </div>
                        <div class="inset">{{item.title}}
                        </div>
                    </md-item-content>
                </a>
            </md-item>
        </md-list>
    </md-sidenav>
    <div layout="column" class="relative" layout-fill role="main">

        <md-toolbar ng-show="!showSearch">
            <div class="md-toolbar-tools">
                <md-button ng-click="toggleSidenav('left')" hide-gt-md aria-label="Menu">
                    <ng-md-icon icon="menu"></ng-md-icon>
                </md-button>
                <h1>
                    UK Tax Calculator
                </h1>
                <span flex></span>
                <md-button aria-label="Search" ng-click="showSearch = !showSearch">
                    <ng-md-icon icon="search"></ng-md-icon>
                </md-button>
                <md-button aria-label="Open Settings" ng-click="showListBottomSheet($event)">
                    <ng-md-icon icon="more_vert"></ng-md-icon>
                </md-button>
            </div>
            <md-tabs md-stretch-tabs class="md-primary" md-selected="data.selectedIndex" style=" display: none">
                <md-tab id="tab1" aria-controls="tab1-content">
                    Tax Calculator 2017
                </md-tab>
                <md-tab id="tab2" aria-controls="tab2-content">
                    Other calculators
                </md-tab>
            </md-tabs>
        </md-toolbar>
        <md-toolbar class="md-hue-1" ng-show="showSearch">
            <div class="md-toolbar-tools">
                <md-button ng-click="showSearch = !showSearch" aria-label="Back">
                    <ng-md-icon icon="arrow_back"></ng-md-icon>
                </md-button>
                <h3 flex="10">
                    Back
                </h3>
                <md-input-container md-theme="input" flex>
                    <label>&nbsp;</label>
                    <input ng-model="search.who" placeholder="enter search">
                </md-input-container>
                <md-button aria-label="Search" ng-click="showSearch = !showSearch">
                    <ng-md-icon icon="search"></ng-md-icon>
                </md-button>
                <md-button aria-label="Open Settings" ng-click="showListBottomSheet($event)">
                    <ng-md-icon icon="more_vert"></ng-md-icon>
                </md-button>
            </div>

        </md-toolbar>
        <md-content flex md-scroll-y>
            <ui-view layout="column" layout-fill layout-padding class="main_view">
                <div class="inset" hide-sm></div>
                <ng-switch on="data.selectedIndex" class="tabpanel-container">
                    <div role="tabpanel"
                         id="tab1-content"
                         aria-labelledby="tab1"
                         ng-switch-when="0"
                         md-swipe-left="next()"
                         md-swipe-right="previous()"
                         layout="row" layout-align="center center">


                        <md-card flex-gt-sm="100" flex-gt-md="90" class="main_card">


                            <md-card-content>
                                <h2>Calculate your income tax</h2>
                                Use the interactive income tax calculator below to find out more about how much tax you
                                should pay to HMRC, depending on your income and other factors.
                                <br>
                                <br>
                                <br>


                                <md-slider-container class="select_value earnings_main_slider">

                                    <span class="your_income">Your income</span>
                                    <div class="gross_earnings_holder">


                                        <select ng-model="select_period"
                                                class="md-button md-default-theme income_period_select"
                                                ng-change="setWhatsSelected(select_period)">
                                            <option value="yearly" selected>Yearly</option>
                                            <option value="monthly">Monthly</option>
                                            <option value="weekly">Weekly</option>
                                            <option value="daily">Daily</option>
                                            <option value="hourly">Hourly</option>
                                        </select>
                                        <span class="income_value">£<input id="tt" flex="" type="number"
                                                                           ng-model="earningsSliders.yearly"
                                                                           aria-label="red"
                                                                           aria-controls="red-slider"
                                                                           class="gross_income_input hidden_input  yearly_input visible_input"

                                            ><input id="tt" flex="" type="number"
                                                    ng-model="earningsSliders.monthly" aria-label="red"
                                                    aria-controls="red-slider"
                                                    class="gross_income_input hidden_input monthly_input"

                                            ><input id="tt" flex="" type="number"
                                                    ng-model="earningsSliders.weekly" aria-label="red"
                                                    aria-controls="red-slider"
                                                    class="gross_income_input hidden_input weekly_input"

                                            ><input id="tt" flex="" type="number"
                                                    ng-model="earningsSliders.daily" aria-label="red"
                                                    aria-controls="red-slider"
                                                    class="gross_income_input hidden_input daily_input"

                                            ><input id="tt" flex="" type="{{hourlyInputType}}"
                                                    ng-model="earningsSliders.hourly" aria-label="red"
                                                    aria-controls="red-slider"
                                                    class="gross_income_input hidden_input hourly_input"
                                                    ng-click="setHourlyInputType('number'); removeToFixedFromHourly()"
                                                    step="0.01"
                                                    ng-blur="setHourlyInputType('text'); setToFixedToHourly()"


                                            ></span>
                                    </div>

                                    <div class="earning_sliders hidden_slider visible_slider yearly_slider">


                                        <md-slider ng-model="earningsSliders.yearly" flex="" min="0" aria-label="red"
                                                   id="red-slider" step="100"
                                                   max="100000">
                                        </md-slider>

                                    </div>

                                    <div class="earning_sliders hidden_slider   monthly_slider">

                                        <md-slider ng-model="earningsSliders.monthly" flex="" min="0" aria-label="red"
                                                   id="red-slider" step="50"
                                                   max="9000">
                                        </md-slider>
                                    </div>
                                    <div class=" earning_sliders hidden_slider   weekly_slider">

                                        <md-slider ng-model="earningsSliders.weekly" flex="" min="0" aria-label="red"
                                                   id="red-slider" step="10"
                                                   max="2500">
                                        </md-slider>
                                    </div>
                                    <div class=" earning_sliders hidden_slider  daily_slider">

                                        <md-slider ng-model="earningsSliders.daily" flex="" min="0" aria-label="red"
                                                   id="red-slider" step="5"
                                                   max="1000">
                                        </md-slider>
                                    </div>
                                    <div class=" earning_sliders hidden_slider  hourly_slider">

                                        <md-slider ng-model="earningsSliders.hourly" flex="" min="0" aria-label="red"
                                                   id="red-slider" step="0.05"
                                                   max="100">
                                        </md-slider>
                                    </div>
                                    <hr style="  clear: both; margin-top: 20px;">


                                    <div class="gross_earnings_holder">
                                        <span class="your_income">Weekly hours</span>
                                        <input flex="" type="number"
                                               ng-model="earningsSliders.weekly_hours"
                                               aria-label="red" step="0.5"
                                               class="hours_per_week_input"
                                               aria-controls="red-slider">


                                    </div>
                                    <md-slider flex="" ng-model="earningsSliders.weekly_hours" min="0" max="65"
                                               step="0.5"
                                               aria-label="red" id="red-slider"
                                               class="md-primary weekly_hours_slider">
                                    </md-slider>


                                </md-slider-container>
                                Draw income bands and percentage of tax paid in the slider background
                                £20000 after tax value calculator pages {{yearlyAllowance}}<br>
                                <div>{{greeting}} {{data}}</div>

                                <md-progress-linear class="results_loader" md-mode="indeterminate" ng-show="isLoading"></md-progress-linear>
<div class="results_container_loaded visible_container opaque_container">

                                <div class="income_tax_results_table_container">


                                    <div class="results_row results_header">
                                        <div class="results_cell"></div>
                                        <div class="results_cell">Year</div>
                                        <div class="results_cell">Month</div>
                                        <div class="results_cell" hide-xs hide-sm>Week</div>
                                        <div class="results_cell" hide-xs hide-sm>Day</div>

                                        <div class="results_cell">Hour</div>

                                    </div>

                                    <div class="results_row salary_row">
                                        <div class="results_cell">Salary</div>
                                        <div class="results_cell">£{{earningsSliders.yearly | number : fractionSize}}
                                        </div>
                                        <div class="results_cell">£{{earningsSliders.monthly | number : fractionSize}}
                                        </div>
                                        <div class="results_cell" hide-xs hide-sm>£{{earningsSliders.weekly | number :
                                            fractionSize}}
                                        </div>
                                        <div class="results_cell" hide-xs hide-sm>£{{earningsSliders.daily | number :
                                            2}}
                                        </div>
                                        <div class="results_cell">£{{earningsSliders.hourly | number : 2}}</div>


                                    </div>

                                    <div class="results_row tax_row">
                                        <div class="results_cell">Tax</div>
                                        <div class="results_cell">£{{incomeTax.yearly | number : fractionSize}}</div>
                                        <div class="results_cell">£{{incomeTax.monthly | number : fractionSize}}</div>
                                        <div class="results_cell" hide-xs hide-sm>£{{incomeTax.weekly | number :
                                            fractionSize}}
                                        </div>
                                        <div class="results_cell" hide-xs hide-sm>£{{incomeTax.daily | number : 2}}
                                        </div>
                                        <div class="results_cell">£{{incomeTax.hourly | number : 2}}</div>


                                    </div>

                                    <div class="results_row ni_row">
                                        <div class="results_cell">NI</div>
                                        <div class="results_cell">£{{nationalInsurance.yearly | number : 0 }}</div>
                                        <div class="results_cell">£{{nationalInsurance.monthly | number : 0}}</div>
                                        <div class="results_cell" hide-xs hide-sm>£{{nationalInsurance.weekly | number :
                                            0}}
                                        </div>
                                        <div class="results_cell" hide-xs hide-sm>£{{nationalInsurance.daily | number :
                                            2}}
                                        </div>
                                        <div class="results_cell">£{{nationalInsurance.hourly | number : 2}}</div>


                                    </div>

                                    <div class="results_row net_pay_row">
                                        <div class="results_cell">Take home</div>
                                        <div class="results_cell">£{{takeHome.yearly | number : 0 }}</div>
                                        <div class="results_cell">£{{takeHome.monthly | number : 0 }}</div>
                                        <div class="results_cell" hide-xs hide-sm>£{{takeHome.weekly | number : 0 }}
                                        </div>
                                        <div class="results_cell" hide-xs hide-sm>£{{takeHome.daily | number : 0 }}
                                        </div>
                                        <div class="results_cell">£{{takeHome.hourly | number : 2 }}</div>


                                    </div>

                                </div>

</div>

                                <div layout="row" layout-sm="column">


                                    <div flex>
                                        <md-card>

                                            <md-card-content>
                                                <h4>Compare gross income to other countries' average</h4>

                                                <div class="results_container_loaded visible_container opaque_container">


                                                <div id="barchart_colors"></div>


                                                </div>
                                            </md-card-content>
                                            <div class="md-actions" layout="row" layout-align="end center">
                                                <md-button>Save</md-button>
                                                <md-button>View</md-button>
                                            </div>
                                        </md-card>
                                    </div>
                                    <div flex>
                                        <md-card>




                                            <md-card-content>


                                                <h4>Percentage of income you take home</h4>
                                                <div class="results_container_loaded visible_container opaque_container">
                                                <div id="piechart_3d" style="width: 100%; height: 400px;"></div>
                                                    </div>
                                            </md-card-content>
                                            <div class="md-actions" layout="row" layout-align="end center">
                                                <md-button>Save</md-button>
                                                <md-button>View</md-button>
                                            </div>


                                        </md-card>
                                    </div>



                                </div>


<!--                                <div class='md-padding' layout="row">-->
<!--                                    <div layout="row" class="results_container">-->
<!--                                        <div class="parent">-->
<!--                                            <md-card>-->
<!---->
<!--                                                <md-card-content>-->
<!--                                                    <h2>Income tax results</h2>-->
<!---->
<!--                                                </md-card-content>-->
<!--                                                <div class="md-actions" layout="row" layout-align="end center">-->
<!--                                                    <md-button>Save</md-button>-->
<!--                                                    <md-button>View</md-button>-->
<!--                                                </div>-->
<!--                                            </md-card>-->
<!--                                        </div>-->
<!---->
<!---->
<!--                                        <div class="parent">-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->


                            </md-card-content>


                        </md-card>
                    </div>
                    <div role="tabpanel"
                         id="tab2-content"
                         aria-labelledby="tab2"
                         ng-switch-when="1"
                         md-swipe-left="next()"
                         md-swipe-right="previous()"
                         layout="row" layout-align="center center">
                        <md-card flex-gt-sm="90" flex-gt-md="80">
                            <md-card-content>
                                <h2>Favorites</h2>
                                Test b
                            </md-card-content>
                        </md-card>
                    </div>

                </ng-switch>

            </ui-view>
        </md-content>
    </div>


<?php get_footer(); ?>