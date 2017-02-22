<?php
/**
 * Created by PhpStorm.
 * User: Feri
 * Date: 23/01/2017
 * Time: 19:21
 */

?>


<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START CONTENT -->
<section id="content">

    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->
        <div class="header-search-wrapper grey hide-on-large-only">
            <i class="mdi-action-search active"></i>
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title">eCommerce Products Page</h5>
                    <ol class="breadcrumbs">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">eCommerce Products Page</li>
                        <li class="active">
                           
                           </ul>
                        
                        
                        </li>
                    </ol>
   
                   
                </div>
               
            </div>
        </div>
       
    </div>
    <!--breadcrumbs end-->


    <!--start container-->
    <div class="container">

       
        <!-- Start Page Loading -->
        <!--                <div id="loader-wrapper">-->
        <!--                    <div id="loader"></div>-->
        <!--                    <div class="loader-section section-left"></div>-->
        <!--                    <div class="loader-section section-right"></div>-->
        <!--                </div>-->
        <!-- End Page Loading -->

        <div class="section">
            <!-- statr products list -->
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
            <div id="products" class="row products-row">
                <div class="product-sizer"></div>


                <?php // the_content();


                $feed = new FeedDAL();
                $results = $feed->getResultsAdvanced('nike');


                // print_r($results);
                foreach ($results as $result) {


                    $title = $result["title"];
                    // $title = $result["ruledepth"];
                    $img_code = $result["img_code"];
                    $website = $result["website"];

                    $image = $result["thumbnail"];


//                    if(file_exists($_SERVER['DOCUMENT_ROOT']. '/vapebot/thumbnails/' . $result["thumbnail"]))
//                {
//
//
//                    $image =  "http://www.everydayisblackfriday.co.uk/vapebot/thumbnails/" . $result["thumbnail"];
//                }
//
//
//
//
//                else {
//                    $image =  "http://www.everydayisblackfriday.co.uk/vapebot/images/noimage/no%20image.jpg";
//                }




                    ?>


                    <div class="product">
                        <div class="card">
                            <p class=" grey-text  ultra-small center-align product-title"><a href="#"
                                                                             class="grey-text text-lighten-1"><?php echo $title;?></a>
                            </p>
                            <div class="center-align grey-text text-lighten-2 mega-small"><?php echo $website;?></div>
                            <div class="card-image waves-effect waves-block waves-light">




                                <a href="#"><img src="<?php echo $image; ?>" alt="product-img">
                                </a>
                            </div>
                            <ul class="card-action-buttons">

                                <li><a class="btn-floating waves-effect waves-light red accent-2"><i
                                            class="mdi-action-favorite"></i></a>
                                </li>
                                <li><a class="btn-floating waves-effect waves-light light-blue"><i
                                            class="mdi-action-info activator"></i></a>
                                </li>
                            </ul>
                            <div class="card-content">

                                <div class="row">
                                    <div class="col s8">

                                    </div>
                                    <div class="col s4 no-padding">
                                        <a href="#"></a><img src="<?php echo $img_code;?>" alt="amazon"
                                                             class="responsive-img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><i
                                        class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                                <p>Here is some more information about this product that is only revealed once clicked
                                    on.</p>
                            </div>
                        </div>
                    </div>

                    <?php


                }


                ?>





            </div>
            <!--/ end items list -->
        </div>
        <!-- Floating Action Button -->
        <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
            <a class="btn-floating btn-large">
                <i class="mdi-action-stars"></i>
            </a>
            <ul>
                <li><a href="css-helpers.html" class="btn-floating red"><i
                            class="large mdi-communication-live-help"></i></a></li>
                <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i
                            class="large mdi-device-now-widgets"></i></a></li>
                <li><a href="app-calendar.html" class="btn-floating green"><i
                            class="large mdi-editor-insert-invitation"></i></a></li>
                <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a>
                </li>
            </ul>
        </div>
        <!-- Floating Action Button -->
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START RIGHT SIDEBAR NAV-->
<aside id="right-sidebar-nav">
    <ul id="chat-out" class="side-nav rightside-navigation">
        <li class="li-hover">
            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
            <div id="right-search" class="row">
                <form class="col s12">
                    <div class="input-field">
                        <i class="mdi-action-search prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Search</label>
                    </div>
                </form>
            </div>
        </li>
        <li class="li-hover">
            <ul class="chat-collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent
                        Activity
                    </div>
                    <div class="collapsible-body recent-activity">
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">just now</a>
                                <p>Jim Doe Purchased new equipments for zonal office.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Yesterday</a>
                                <p>Your Next flight for USA will be on 15th August 2015.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Last Week</a>
                                <p>Jessy Jay open a new store at S.G Road.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales
                        Repoart
                    </div>
                    <div class="collapsible-body sales-repoart">
                        <div class="sales-repoart-list  chat-out-list row">
                            <div class="col s8">Target Salse</div>
                            <div class="col s4"><span id="sales-line-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Payment Due</div>
                            <div class="col s4"><span id="sales-bar-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Delivery</div>
                            <div class="col s4"><span id="sales-line-2"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Progress</div>
                            <div class="col s4"><span id="sales-bar-2"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates
                    </div>
                    <div class="collapsible-body favorite-associates">
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="/beta/test/images/avatar.jpg" alt=""
                                                     class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Eileen Sideways</p>
                                <p class="place">Los Angeles, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="/beta/test/images/avatar.jpg" alt=""
                                                     class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Zaham Sindil</p>
                                <p class="place">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="/beta/test/images/avatar.jpg" alt=""
                                                     class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Renov Leongal</p>
                                <p class="place">Cebu City, Philippines</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="/beta/test/images/avatar.jpg" alt=""
                                                     class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Weno Carasbong</p>
                                <p>Tokyo, Japan</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="/beta/test/images/avatar.jpg" alt=""
                                                     class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Nusja Nawancali</p>
                                <p class="place">Bangkok, Thailand</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<!-- LEFT RIGHT SIDEBAR NAV-->

</div>
<!-- END WRAPPER -->

</div>
<!-- END MAIN -->
