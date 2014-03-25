
<html>
<head>
<title>The Human Project</title>
<link rel="stylesheet" href="master.css" type="text/css">
</head>

<?php
	require_once('includes/config.php');
	//query the database and store the results
	//in the $myData variable
	$sql = 'SELECT * 
  FROM maladies';
	
  $myData = $db->query($sql);

?>

  
<style>
 html {
   background:url(images/background.png) fixed center top;
   width:100%;
   }
.wrapper{width:100%;}
.maladies ul{ list-style:none;
	
}
.maladies li { 
  background-color: rgba( 24, 70,80, 0.800 );
   
 
  width: 135px;
  
  z-index: 99;
  margin-bottom:20px;
  padding:10px;
}

.maladies li a{
display:block;	
text-align:center;

  font-size: 20px;
  font-family: "Century Gothic";
  color: rgb( 160, 164, 177 );
  text-decoration:none;
   
}
maladies a{ text-decoration:none;
	
}
#popup ul{
	left: -26px;
    list-style: none outside none;
    position: absolute;
    width: 97px;
	
}
#popup li{
	text-decoration:none;
	}
#popup a{
	
	
}

.bodyselection{
background: url("images/human_body.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    height: 1200px;
    width: 600px;
	
}

header{
	
	background-color:#FFFFFF;
	position:fixed;
	top:0;
	left:0;
}
.logo{
	 margin-left: 125px;
	
}
.search_bar{
width:100%;	
}
.search{
left: 10%;
    position: fixed;
    top: 90px;
    width: 70%;	
	
}
.imput{
 border: 0 solid;
    height: 17px;
    left: 16%;
    padding: 0 3px;
    position: relative;
    width: 100%;	
	
}
search_button{
background: url("searchbutton3.gif") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-style: none;
    height: 20px;
    left: 138px;
   
    position: relative;
    width: 24px;	
	
}
.bar{
	border: 0 solid;
    height: 41px;
    padding: 0 3px;
    position: relative;
    width: 108%;
	top:-19px;
}
#popup{
background-image: url("images/shape75_05.png");
background-repeat:no-repeat;
    height: 100%;
    left: 79%;
    opacity: 0.431;
    position: absolute;
    top: 222px;
    width: 100%;
    z-index: 63;
}

	

</style>
 
  

 
 
<body>
<div class="wrapper">
<section>
<header>
<img class="logo" src="images/human_project_logo.png"/> 
<img class="search_bar" src="images/search_bar_tab.png"/>
<form class="search" method="get" action="http://www.designedbyj.me/humanproject.com/search.php">
<table cellpadding="0px" cellspacing="0px">
<tr>
<td class="imput" >
<input class="bar" type="text" name="zoom_query" style=" background:url(images/search_tab.png); height:67px; padding:0px 3px; position:relative;">
</td>
<td class="search_button" style="border-style:solid;border-color:#4B7B9F;border-width:1px;">Search
<input type="submit" value="" style="border-style: none; background:url(images/icons_13.png) no-repeat; width: 24px; height: 20px;">
</td>
</tr>
</table>
</form> 

</header>
</section>
  
  <section class="vhs">

<ul>
<?php
$letters = array(
	'a','b','c','d','e','f','g','h','i'
	,'j','k','j','l','m','n','o','p','q'
	,'r','s','t','u','v','w','x','y','z'
);

   for($i=0; $i < 27; $i++)
	{
		$l = $letters[$i];
		echo "<li><a href='vhs.php?l=$l'>" .$l. '</a></li>'."\n\r";	 
	}
  	 
?>
  </ul>
  </section>
 


  <section class="humanbody">
  	<ul class="bodyselection">
  		<li class="head" ><a href="">head</a></li>
  		<li class="neck" ><a href="">neck</a></li>
        <li class="head" ><a href="">arms</a></li>
        <li class="head" ><a href="">chest</a></li>
        <li class="head" ><a href="">abdomne</a></li>
        <li class="head" ><a href="">reproductive</a></li>
  		<li class="head" ><a href="">hands</a></li>
        <li class="head" ><a href="">legs</a></li>
        <li class="head" ><a href="">feet</a></li>
        <li class="head" ><a href="">toes</a></li>
        
  	</ul>
  </section>

  
  <section class="maladies">

   <ul>
    
   <?php
   while($row = $myData->fetch_assoc())
   {
		echo '<li>';
		echo '<a href="section_call.php?s='.$row['ma_id'].'">' .$row['title']. '</a>';	 
		echo '</li>'; 
	}

	$db->close();
  	 ?>
     </ul>
   </section>

   </div>
   
   <div id="popup"></div>
   
   </div>
   <script src="jquery-1.9.1.min.js"></script>
   <script> 
   $(document).ready(function(e) {
	   
	   $('#popup').hide();
	   
    	$('.vhs a').click(function(e){
		e.preventDefault();
		var data= $('#popup').load(this.href, function(){
			$('#popup').show('slow');
			});	
		});
		
		
		$('.maladies a').click(function(e){
		e.preventDefault();
		var data= $('#popup').load(this.href, function(){
			$('#popup').show('slow');
			});	
		});
			
			
		
	
	
});
   </script>
</body>
</html>
