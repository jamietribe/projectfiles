<?php
 require_once('includes/config.php');
 $section = $GET['s'];
 $sql = 'SELECT * FROM remedies INNER JOIN sections WHERE mal_id = ' + $section;
 $myData = $db->query($sql);

while($row = $myData->fetch_assoc())
{
 echo $row['section_name'];
}

 ?>
