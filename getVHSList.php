

<html><head><title>test</title></head>
<body>
<div class="gridContainer clearfix">

<section class="main">
<h2>Welcome</h2>
<ul>
<?php
$letters = array('a','b','c','d','e','f','g','h','i','j','k','j','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
   for($i=0; $i < 27; $i++)
	{
		$l = $letters[$i];
		echo "<li><a href='vhs.php?l=$l'>" .$l. '</a></li>'."\n\r";	 
	}
  	 
  	 ?>
  </ul>
  </section>
  </div>
  </body>
  </html>

