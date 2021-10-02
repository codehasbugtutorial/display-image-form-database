<?php
	//include dbConfig file  
	require_once 'dbConfig.php'; 

	if( isset($_GET['id']) ){

		//get image id
		$img_id = $_GET['id'];

		//check if image is present
    	$img = $db->query("SELECT * FROM image WHERE id = $img_id"); 

		//no of rows
		$no_of_rows = $img->num_rows;

		if( !$no_of_rows ){
			die("Image not found!");
		}else{

			//Now run update query
			$query = $db->query("DELETE FROM image WHERE id = $img_id");

         	//check if successfully inserted
        	if($query){ 
            	echo "Image has been successfully deleted."; 
            }else{ 
                echo "Something went wrong when deleting image!!!"; 
            }  
		}
	}//end of get check
	else{
		die("Image not found!");
	}