<!DOCTYPE html>
<html>

<head>


    
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.1/angular-material.min.css">
    <link rel="stylesheet" href="https://material.angularjs.org/1.1.1/docs.css">


    <style>
        .toolbardemoBasicUsage md-toolbar md-icon.md-default-theme {
            color: white; }


    </style>
</head>

<body ng-cloak="" ng-app="MyApp" >





<div ng-controller="AppCtrl" class="toolbardemoBasicUsage">

    <md-content>

        <br>

        <md-toolbar >
            <div class="md-toolbar-tools">
                <md-button ng-click="openLeftMenu()" class="md-icon-button"  >
                    <md-icon md-svg-icon="img/icons/menu.svg"></md-icon>
                </md-button>
                <h2>
                    <span>Toolbar with Disabled/Enabled Icon Buttons</span>
                </h2>
                <span flex=""></span>
                <md-button class="md-icon-button" aria-label="Favorite">
                    <md-icon md-svg-icon="img/icons/favorite.svg" style="color: greenyellow;"></md-icon>
                </md-button>
                <md-button class="md-icon-button" aria-label="More">
                    <md-icon md-svg-icon="img/icons/more_vert.svg"></md-icon>
                </md-button>
            </div>

        </md-toolbar>



    </md-content>
</div>

<!--
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that can be foundin the LICENSE file at http://material.angularjs.org/HEAD/license.
-->













<div layout="row" ng-controller="MyController">


    <md-sidenav md-component-id="left" class="md-sidenav-left">
        Left Nav!

        <md-button ng-click="openLeftMenu()">
            Open Left Menu
        </md-button>        <form>
            <md-input-container>
                <label for="testInput">Test input</label>
                <input id="testInput" type="text" ng-model="data" md-autofocus>
            </md-input-container>
        </form>

    </md-sidenav>

    <md-content>
        Center Content

    </md-content>


    <div   class="flexbox-parent">
        <div layout="row" layout-align="center center"  style="min-height: 500px">
            <div flex="15">First line</div>
            <div flex="15">Second line</div>
        </div>
    </div>



</div>

