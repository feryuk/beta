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

jhggfvhgvj
    <div ng-controller="AppCtrl" ng-cloak="" class="sliderdemoVertical" ng-app="MyApp">


        <md-content layout="row" layout-padding="">
            <md-slider-container class="hourlyRate" flex="">
                <md-input-container>
                    £{{vol}}/h<input flex="" type="hidden" ng-model="vol" aria-label="volume" aria-controls="volume-slider">
                </md-input-container>
                <md-slider ng-model="vol" min="0" max="150" step="0.1" aria-label="volume" id="volume-slider" class="md-accent" md-vertical="" md-range=""></md-slider>

                <h5>Hourly rate</h5>
            </md-slider-container>
            <md-slider-container flex="">
                <md-input-container>
                    £<input flex="" type="number" ng-model="bass" aria-label="bass" aria-controls="bass-slider">
                </md-input-container>
                <md-slider md-discrete="" ng-model="bass" min="0" max="100" step="10" aria-label="bass" class="md-primary" md-vertical=""></md-slider>

                <h5>Bass</h5>
            </md-slider-container>
            <div flex="" layout="column" layout-align="center center">
                <md-slider-container ng-disabled="readonly">
                    <md-input-container>
                        <input flex="" type="number" ng-model="master" aria-label="master" aria-controls="master-slider">
                    </md-input-container>
                    <md-slider flex="" ng-model="master" md-discrete="" aria-label="Master" md-vertical="" step="10" ng-readonly="readonly"></md-slider>
                    <h5>Master</h5>
                </md-slider-container>
                <md-checkbox ng-model="readonly">Read only</md-checkbox>
            </div>
        </md-content>
    </div>

    <!--
    Copyright 2016 Google Inc. All Rights Reserved.
    Use of this source code is governed by an MIT-style license that can be foundin the LICENSE file at http://material.angularjs.org/HEAD/license.
    -->


<?php get_footer(); ?>