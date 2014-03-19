<?php
	require_once('includes/config.php');
	
	$l = $_GET['l'];
	$l = $db->real_escape_string($l);
	if(strlen($l) > 1) $l = 'a';

	//query the database and store the results
	//in the $myData variable
	$sql = "SELECT * FROM sections WHERE letter='$l'";
	$myData = $db->query($sql);
	
?>


<body>
<div class="gridContainer clearfix">
<section class="main">
 
<ul>
<?php
   while($row = $myData->fetch_assoc())
	{
	 	echo '<li><a href="getSecDetails.php?id='.$row['section_id'].'">' 
	 	.$row['section_name']. '</a></li>'."\n\r";	 
	}
	
	$db->close();
	
?>

