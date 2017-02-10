<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
$modulenr = 2;

global $wpdb;
$image = $wpdb->get_row( "SELECT * FROM wp_nominet WHERE ID = $modulenr" );

$headline = $image->headline;

$tagline = $image->tagline;

$button = $image->button;


?>

<html>

<head>

<style>

body {
	
	background:#ebebeb;
	
	
}


.nomidiv {
	background:#3cb9d5;
	width:470px;
	height:650px;
	margin:0 auto;
	margin-top:70px;
	border:1px solid silver;
	text-align:center;
	color:#fff;
	
	
	 
	
}

.nomibox {
	width:370px;
	height:300px;
	background:black;
	margin:0 auto;
	margin-top:50px;
	margin-bottom: 30px;
	
	
	
	
}

.nomih {
	
	
	
	
}

.nomip {
	padding:0px 18px 0px 18px;
	font-size:1.2em;
	
	
	
}

.nomibutton {
	
 
 text-transform: uppercase;
    background: white;
    margin-top: 17px;
    font-size: 1.3em;
    padding: 10px 50px;
    border: 1px solid #fff;
    color: #ec265d;
	word-spacing: 2px;
}	
	
}


</style>

</head>



<body>
<div class="nomidiv">


<div class="nomibox" >

 


</div>


<h1 class="nomih"><?php echo $headline;?></h1>


<p class="nomip">
<?php echo $tagline;?>


</p>

<input class="nomibutton" type=button value ="<?php echo $button;?>">


</div>






</body>
</html>