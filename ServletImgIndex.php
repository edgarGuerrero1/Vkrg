<?php
	 // llamar la conexion de base de datos
	require 'conexionDB.php';
	$sql ="SELECT * FROM vestidoe order by id_vestido DESC";
	//	$sql ="SELECT * FROM vestidoe order by id_vestido DESC limit 3";

	if($result = mysqli_query($conexion, $sql)){
	    if(mysqli_num_rows($result) > 0){
	       
	        while($row = mysqli_fetch_array($result)){
	        
	                echo "<table>";	
	                	echo "<tr>";
	                		echo "<td><img class='w3-image' width='1000' height='500' src=imgIndex/" . $row['foto']."></img></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td><p>" . $row['marca_vestido'] . "</p></td>";  
						echo "</tr>";
	                echo "</table>";    
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
