<?php
/**
 * Created by PhpStorm.
 * User: Feri
 * Date: 22/01/2017
 * Time: 11:05
 */

//require ($_SERVER['DOCUMENT_ROOT'] . '/wp-blog-header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/beta/wp-content/plugins/edbf/config/config.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/beta/wp-content/plugins/edbf/db/connect.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/beta/wp-content/plugins/edbf/DAL/FeedDAL.php');
 $feed = new FeedDAL();

$time1 = microtime(true);
$keywords = $_GET['q'];
$order_by = $_GET['order_by'];
$asc_desc = $_GET['asc_desc'];
$low_price = $_GET['low_price'];
$high_price = $_GET['high_price'];
   
 $results = $feed->getResultsAdvanced($keywords, $low_price, $high_price, $order_by, $asc_desc);


$time2 = microtime(true);
// echo 'script execution time: ' . ($time2 - $time1); //value in seconds
   
if(empty($results)) {
    $results = null;
}

$to_return = json_encode($results);

//$to_return = preg_replace('/^[\pZ\pC]+|[\pZ\pC]+$/u','',$to_return);

//str_replace(array("\r", "\n", "\t", "\v"), '-', "\r\n\t\r\v\n\t");

$regex = '/(\s|\\\\[rntv]{1})/';
$to_return = preg_replace($regex, ' ', $to_return);

$to_return = str_replace(array("\r", "\n", "\t", "\v"),"",$to_return);
header('Content-Type: application/json');
echo $to_return;
