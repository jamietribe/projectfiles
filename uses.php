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
	echo '<h2>Uses</h2>';
	echo '<p id="info">' .$row['uses']. "</p>\n\r";
	$db->close();
?>




