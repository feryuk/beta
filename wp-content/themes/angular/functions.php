<?php

function get_products_by_keyword($keyword,$low_limit = 0, $high_limit = 30) {

    global $wpdb;
    $products_list = $wpdb->get_results( "SELECT * FROM wp_latest_main WHERE  status = 'on' AND (title LIKE '%$keyword%' OR url LIKE '%$keyword%') LIMIT $low_limit, $high_limit");

    return $products_list;

}



?>