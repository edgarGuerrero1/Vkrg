<?php
	 // llamar la conexion de base de datos
	require 'conexionDB.php';
	$sql ="SELECT foto_index FROM ImgPrincipalE order by id_imgIndex DESC limit 1";

	if($result = mysqli_query($conexion, $sql)){
	    if(mysqli_num_rows($result) > 0){
	       
	        while($row = mysqli_fetch_array($result)){
	        
	            
	                		echo "<img class='w3-image' width='500' height='600' src=imgIndexPrincipal/" . $row['foto_index']."></img>";
			
	        }
	        // Close result set
	        mysqli_free_result($result);
	    } 
	    else{
	        echo "No records matching your query were found.";
	    }
	} 
	else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
	}
	
?>
