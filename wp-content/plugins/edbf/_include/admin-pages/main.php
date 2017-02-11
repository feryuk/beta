<?php
/**
 * Created by PhpStorm.
 * User: Feri
 * Date: 20/01/2017
 * Time: 22:24
 */





$key_1_value = get_post_meta( get_the_ID(), 'keword_a', true );

// Check if the custom field has a value.
if ( ! empty( $key_1_value ) ) {
    echo $key_1_value;
}



 $feed = new FeedDAL();
 $results = $feed->getResults(100, 1100, 'led tv', 'datetime', 'DESC');

echo $results;







//phpinfo();
?>





testtt testtt
