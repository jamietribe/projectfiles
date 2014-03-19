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
	echo '<p id="uses">' .$row['info']. "</p>\n\r";
	//echo '<p id="info">' .$row['uses']. "</p>\n\r";
?>


	 


<?php 
	
	echo '<script>';
	echo 'var id = ' . $id .';'; 
?>

<?php
$js = <<<END
	$('#usez').click(function(e){
		e.preventDefault();
		$('#popup3').load('uses.php?id=' + id);
	});

	$('#interact').click(function(e){
		e.preventDefault();
		$('#popup3').load('interact.php?id=' + id);
	});

	$('#info').click(function(e){
		e.preventDefault();
		$('#popup3').load('info.php?id=' + id);
	});
END;
echo $js;
echo '</script>';



$db->close();
?>
 
