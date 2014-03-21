 <?php
 require_once('includes/config.php');
 $section = $_GET['part'];
 $sql = "SELECT * FROM parts INNER JOIN sections ON parts.section_id=sections.section_id WHERE parts.part='$section'";
 $myData = $db->query($sql);
 echo "<ul>";
while($row = $myData->fetch_assoc())
{
 echo '<li><a href="getSecDetails.php?id='. $row['section_id'].'">'. $row['section_name']."</a></li>";
}
 echo "</ul>"; 
 ?>