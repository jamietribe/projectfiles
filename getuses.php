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
?>



<?php
	$row = $myData->fetch_assoc();
	echo '<p id="name">' .$row['section_name']. "</p>\n\r";
	 echo '<p id="info">' .$row['uses']. "</p>\n\r";
?>




<?php
	echo '<p id="info">' .$row['interactions']. "</p>\n\r";

	$sql2 = "SELECT * 
	FROM interactions 
	WHERE section_id ='".$id. "'";
	$myData2 = $db->query($sql2);

	while($item = $myData2->fetch_assoc())
	{
		echo $item['severity']."\n\r";
		echo $item['drug_name']."\n\r";
		echo "<br>";
	}