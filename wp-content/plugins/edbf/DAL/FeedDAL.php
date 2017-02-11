<?php

/**
 * Created by PhpStorm.
 * User: Feri
 * Date: 21/01/2017
 * Time: 09:01
 */
class FeedDAL
{

    private $connection;
    private $connect;

    function __construct()
    {
        $this->connect = new Connect();
        $this->connection = $this->connect->connect();
    }


    public function getResults($low_price, $high_price, $keywords, $order_by = 'price', $asc_desc = 'ASC')
    {


        $keywords_pieces = explode(",", $keywords);

        $the_query = '';
        $and = ' AND ';
        $or = ' OR ';
        foreach ($keywords_pieces as $keywords_piece) {

            $keywords_array = explode(" ", $keywords_piece);

            foreach ($keywords_array as $keyword) {

                $the_query .= "(website = '$keyword') $and";


            }
            $the_query = rtrim($the_query, "AND ");
            $the_query .= $or;


        }

        $the_query = rtrim($the_query, "OR ");
        // echo $the_query;


        $sql = "SELECT * FROM iphonere_wp46.wp_latest_main  WHERE $the_query AND status = 'on'  AND datetime >= DATE_SUB(NOW(), INTERVAL 20 DAY) AND PRICE > 0   ORDER BY $order_by $asc_desc LIMIT 20";

        $result = $this->connection->query($sql);

        while ($row = $result->fetch_assoc()) {

//            if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/vapebot/thumbnails/' . $row["thumbnail"])) {
//                $row['thumbnail'] = "http://www.everydayisblackfriday.co.uk/vapebot/thumbnails/" . $row['thumbnail'];
//            } else {
//                $row['thumbnail'] = "http://www.everydayisblackfriday.co.uk/vapebot/images/noimage/no%20image.jpg";
//            }
//
//
//            if (empty($row['img_code'])) {
//                $row['img_code'] = "http://www.everydayisblackfriday.co.uk/wp-content/uploads/2015/11/discount-sale.png";
//
//            }

            $rows[] = $row;

        }


        return $rows;

    }


    public function getResultsAdvanced($keywords)
    {

        $input_keywords = $keywords;
        $test_keyword = '';
        $keywords = explode(" ", $keywords);
        // create a special keyword so that keywords in can't match it unless exact match
        $special_keyword = implode("x", str_split($input_keywords));
        $keyword_in = "'$special_keyword',";
        $keywords_number = 0;
        $where_statement = '';
        foreach ($keywords as $keyword) {

            $keyword_in .= "'" . $keyword . "',";

            $keywords_number++;
        }


        $keyword_in = rtrim($keyword_in, ',');





        if(!empty($input_keywords)) {


        $where_statement = " WHERE status = 1 AND  (keyword IN('$test_keyword',$keyword_in) OR keyword like '$input_keywords')";
            $query = "SELECT  product_id, SUM( relevance ) AS sum FROM  iphonere_wp46.wp_keywords_to_product  
          $where_statement group by product_id   ORDER BY sum DESC,  status DESC LIMIT 20";

            //$query = "SELECT  product_id, SUM( relevance ) AS sum FROM  iphonere_wp46.wp_keywords_to_product kp  WHERE   keyword IN('nike air max') OR keyword IN('nike', 'air') group by product_id  ORDER BY sum DESC LIMIT 24";
//echo $query;


        } else {

            $query = "SELECT  * FROM  iphonere_wp46.wp_keywords_to_product WHERE keyword NOT NULL 
            ORDER BY product_id ASC LIMIT 8";


        }


       // print_r($query);
        $time1 = microtime(true);

        $product_ids = $this->getResultIds($query);

        $time2 = microtime(true);

        //echo 'sScript execution time: ' . ($time2 - $time1); //value in seconds
        //print_r($product_ids);



        //$explain = $this->testSpeed("EXPLAIN EXTENDED ".$query);
        //print_r($explain);




        $queryb = " SELECT * FROM iphonere_wp46.wp_latest_main WHERE ID IN ($product_ids) ORDER BY FIELD(ID, $product_ids); ";
        $test_datab = $this->testSpeed($queryb);


        $rows = array();
        foreach ($test_datab as $row) {

            if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/vapebot/thumbnails/' . $row["thumbnail"])) {
               $row['thumbnail'] = "http://www.everydayisblackfriday.co.uk/vapebot/thumbnails/" . $row['thumbnail'];
           } else {
                $row['thumbnail'] = "http://www.everydayisblackfriday.co.uk/vapebot/images/noimage/no%20image.jpg";
           }


            if (empty($row['img_code'])) {
                $row['img_code'] = "http://www.everydayisblackfriday.co.uk/wp-content/uploads/2015/11/discount-sale.png";

            }

            $rows[] = $row;

        }


        return $rows;

    }


    public function getSimilarProducts()
    {


        $sql = "SELECT * FROM iphonere_wp46.wp_latest_main WHERE title LIKE '%$keywords%' AND status = 'on' AND price < $high_price AND price > $low_price AND datetime >= DATE_SUB(NOW(), INTERVAL 10 DAY) ORDER BY $order_by $asc_desc LIMIT 25";
        $result = $this->connection->query($sql);
        if ($this->connection->error == '') {
            // the query worked, so fetch results from $result and do stuff with them.
        } else {
            // the query didn't work, so don't try to do anything with $result

            echo 'There was an error';
        }


    }



//
//$query = "
//    SELECT  product_id, SUM( relevance ) AS sum
//    FROM  iphonere_wp46.wp_keywords_to_product kp
//
//
//
//
//
//    WHERE   keyword IN($keyword_in) group by product_id having count(distinct keyword) = 2 ORDER BY sum ASC LIMIT 24";
//
//
//
//
//$queryb = " SELECT * FROM iphonere_wp46.wp_latest_main WHERE ID IN ('1601855','2356040','1213476','2299253','721631','699059','704012') ";
//
//
//$time1 = microtime(true);
//
//$test_data = $feed->testSpeed($query);
//
//$test_datab = $feed->testSpeed($queryb);


    public function testSpeed($query)
    {


        $sql = "$query";
        $result = $this->connection->query($sql);

        $rows = array();
        if ($this->connection->error == '') {
            // the query worked, so fetch results from $result and do stuff with them.
            while ($row = $result->fetch_assoc()) {

                $rows[] = $row;
            }
            return $rows;
        } else {
            // the query didn't work, so don't try to do anything with $result

            //echo 'There was an error';
            return array();
        }

        //$result = $this->connection->query($sql);



    }


    public function getResultIds($query)
    {


        $sql = "$query";
        $result = $this->connection->query($sql);

        //$result = $this->connection->query($sql);

        $rows = [];
        while ($row = $result->fetch_assoc()) {

            $rows[] = $row['product_id'];
        }


        $product_id_list = '';
        foreach ($rows as $product_id) {
            $product_id_list .= "'$product_id',";
        }
        $product_id_list = rtrim($product_id_list, ",");


        return $product_id_list;

    }


}