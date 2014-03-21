<?php

require_once('includes/config.php');
    //query the database and store the results
    //in the $myData variable
    $id = $_GET['id'];

    if(is_numeric($id)) intval($id);

    $sql = "SELECT * 
    FROM sections 
    WHERE section_id ='".$id. "'";
    $myData = $db->query($sql);

    $row = $myData->fetch_assoc();
    echo '<p id="name">' .$row['section_name']. "</p>\n\r";
    echo '<h2>Interactions</h2>';
    echo '<p id="uses">' .$row['interactions']. "</p>\n\r";
    
 ?>

<?php

	$sql2 = "SELECT * 
	FROM interactions 
	WHERE section_id ='".$id. "' 
	ORDER BY interactions.severity";
	$myData2 = $db->query($sql2);
	
	$severity = '';
	$temp = '';

	echo '<table class="interactions"><tbody>';
	while($item = $myData2->fetch_assoc())
	{
		$temp = $item['severity'];

		if($temp === $severity)
		{
			echo '<td>';
			echo $item['drug_name'];	
			echo '</td>';
		}
		else
		{
			echo '<tr><th>';
			echo $item['severity'];
			echo '</th><td>';
			echo $item['drug_name'];
			echo '</td>';		
		}	
		
		$severity=$item['severity'];
	}
	echo "</tr>";
	echo '</tbody></table>';


    $db->close();


