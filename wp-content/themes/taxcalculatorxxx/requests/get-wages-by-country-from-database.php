<?php
//header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");

include('../../../../wp-blog-header.php');


global $wpdb;




//////////////////////////////////////////////////////////////////////////////////////////////////// get the website rules from the rules table
$resultsrules = $wpdb->get_results("SELECT * FROM wp_income_by_countries WHERE country NOT LIKE ''");


foreach ( $resultsrules as $getitrules )  {

    $country = $getitrules->country;
    $wage = $getitrules->wage_in_usd;



    $outp .= ' {country: \''.$country.'\', wage : '.$wage.'},';
}

$results = "[$outp]";


echo $results;