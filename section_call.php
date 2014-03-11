<?php
 require_once('includes/config.php');

 $section = $_GET['s'];
 if(is_numeric($section)) intval($section);

 $sql = "SELECT sections.section_name, sections.section_id, remedies.ma_id
 FROM sections, remedies
 WHERE sections.section_id = remedies.section_id 
 AND remedies.ma_id =".$section;
 
 $myData = $db->query($sql);
echo '<nav>';
echo '<ul>;';
echo '<li><a href="">information</a></li>';
echo '<li><a href="">uses</a></li>';
echo '<li><a href="">interactions</a></li>';
echo '<li><a href="">videos</a></li>';
echo '<li><a href="">shop</a></li>';
echo '</ul></nav>;'
echo '<ul>';
while($row = $myData->fetch_assoc())
{
 	echo "<li><a href='getSecDetails.php?id=".$row['section_id']."'>" .$row['section_name']. '</a></li>'."\n\r";
}
echo '</ul>';
$db->close();
 ?>
