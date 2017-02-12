<?php
/**
 * Created by PhpStorm.
 * User: Feri
 * Date: 23/01/2017
 * Time: 19:43
 */

?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>eCommerce Products Page | Materialize - Material Design Admin Template</title>

    <!-- Favicons-->
    <link rel="icon" href="/beta/test/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="/beta/test/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="/beta/test/images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
   
    <link href="/beta/test/css/materialize.min.css?fhfhuhvcjgfghvjhty" type="text/css" rel="stylesheet" media="screen,projection">
       <link href="/beta/wp-content/plugins/edbf/css/nouislider.css" type="text/css" rel="stylesheet" media="screen,projection">
       
    <link href="/beta/test/css/style.min.css?<?php echo time();?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="/beta/test/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
   
   <link href="/beta/wp-content/themes/edbf/style.min.css?<?php echo time();?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="/beta/test/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/beta/test/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/beta/test/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body>


<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="/beta/test/images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                </ul>
               <form id="search_form"> <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="mdi-action-search"></i>
                    <input id="search" type="text" name="q" class="header-search-input z-depth-2" placeholder="Explore Materialize" autocomplete="false"/>
                </div></form>
                <ul class="right hide-on-med-and-down">
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><img src="/beta/test/images/flag-icons/United-States.png" alt="USA" /></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

                        </a>
                    </li>
                    <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                    </li>
                </ul>
                <!-- translation-button -->
                <ul id="translation-dropdown" class="dropdown-content">
                    <li>
                        <a href="#!"><img src="/beta/test/images/flag-icons/United-States.png" alt="English" />  <span class="language-select">English</span></a>
                    </li>
                    <li>
                        <a href="#!"><img src="/beta/test/images/flag-icons/France.png" alt="French" />  <span class="language-select">French</span></a>
                    </li>
                    <li>
                        <a href="#!"><img src="/beta/test/images/flag-icons/China.png" alt="Chinese" />  <span class="language-select">Chinese</span></a>
                    </li>
                    <li>
                        <a href="#!"><img src="/beta/test/images/flag-icons/Germany.png" alt="German" />  <span class="language-select">German</span></a>
                    </li>

                </ul>
                <!-- notifications-dropdown -->
                <ul id="notifications-dropdown" class="dropdown-content">
                    <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->



<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

