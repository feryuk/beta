<?php
echo "<h1>Nominet Main Settings</h1>";



?>
<?php
wp_enqueue_script('jquery');
wp_enqueue_media();
?>



	<style>input[type=text] {
		
		margin-right:20px;
		
	}
	
	</style>
	
	<div style="width:90%; margin:0px auto; border:1px solid grey; text-align:center;">
	
	<?php
	
	
	
	  global $wpdb;


  $nomidb = $wpdb->get_results( "SELECT * from ". $wpdb->prefix ."nominet");


foreach ( $nomidb as $nomidbrows ) 
{
$mnr = $nomidbrows->ID;



echo '<div id="nomidiv'.$mnr.'" style="width:90%; border:1px solid lightblue; margin:0px auto; margin-bottom:10px; margin-top:10px; padding:20px;"><h3>Module '.$mnr.'</h3> <input type="hidden" id="modid'.$mnr.'" value="'.$mnr.'"> Headline: <input type="text" id="headline'.$mnr.'" value="'. $nomidbrows->headline .'" placeholder="Headline text"> Tagline: <input type="text" id="tagline'.$mnr.'" value="'. $nomidbrows->tagline .'" placeholder="Headline text"> Button: <input type="text" id="button'.$mnr.'" value="'. $nomidbrows->button .'" placeholder="Headline text">  Image: <input type="text" name="image_url'.$mnr.'" id="image_url'.$mnr.'" value="'. $nomidbrows->image_url .'" > <input type="button" name="upload-btn'.$mnr.'" id="upload-btn'.$mnr.'" class="button-secondary" value="Upload Image">  <input type="button" style="cursor:pointer;" id="savebtn'.$mnr.'"  value="SAVE MODULE '.$mnr.'"></div>';




}
	
	
	
	
	
	

	
	
	?>
	
	<div id="success"></div>
	
	
	
	
	
	
	
		
<script type="text/javascript">







jQuery(document).ready(function($){
    $('input[id^="savebtn"]').click(function() {
		
		 $('#success').html("<span style='font-size:2em; color:blue; padding-bottom:15px;'> Please wait.....</span>");
		  var modnrawx = event.srcElement.id;
			var modulenr = modnrawx.replace("savebtn", "");
		
	
		
		
	
	theimage = document.getElementById('image_url'+modulenr).value;
	
	theheadline = document.getElementById('headline'+modulenr).value;
	
	thetagline = document.getElementById('tagline'+modulenr).value;
	
	thebutton = document.getElementById('button'+modulenr).value;
	
	
	
	
	
	
	
	$.ajax({
   url: '<?php echo site_url(); ?>/wp-content/plugins/nominet/admin/update.php',
   type: 'POST',
   data: {'nomiid': modulenr,  'headline': theheadline, 'tagline': thetagline, 'button': thebutton, 'imageurl': theimage },
   dataType: 'text',
   success: function(response, textStatus, jqXHR) {
	   
     $('#success').html("<span style='font-size:2em; color:red; padding-bottom:15px;'> Data for module <strong>"+modulenr+'</strong> successfully saved.</span>');
   },
   error: function(jqXHR, textStatus, errorThrown){
     alert(textStatus, errorThrown);
  }
});
		
		
		
		
		
		
		
		
		
		
		
		
		
		
    });
});
</script>
	
	
	
	
	
	
	
	
	
	
	
	
	

<script type="text/javascript">
jQuery(document).ready(function($){
    $('input[id^="upload-btn"]').click(function(e) {
		
		
		  var modnraw = event.srcElement.id;
			var modnr = modnraw.replace("upload-btn", "");
		
		
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            multiple: false
        }).open()
        .on('select', function(e){
            
            var uploaded_image = image.state().get('selection').first();
            
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            
            $('#image_url'+modnr).val(image_url);
        });
    });
});
</script>
	
	
<div style="width:90%; text-align:center; padding:20px;">
	
<?php


for ($no = 1 ; $no < 6; $no++){ 

$sep = '|';

if ($no == 5) {$sep = '';}

echo ' <a href="'.site_url().'/wp-content/plugins/nominet/include/module'.$no.'.php" target="_blank">Module '.$no.'</a> '.$sep.' ';

}


?>

</div>

