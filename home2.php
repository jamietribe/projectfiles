<html>
<head>
<title>The Human Project</title>
<link rel="stylesheet" href="master.css" type="text/css">
<meta name="robots" content="noindex">
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
	background: url(images/background.png) fixed center top;
	width: 100%;
}
.wrapper {
	width: 100%;
}
.maladies ul {
	list-style: none;
}
.maladies li {
	background-color: rgba( 2, 21, 55, 0.8 );
	width: 135px;
	margin-bottom: 20px;
	padding: 10px;
}
.maladies li a {
	display: block;
	text-align: center;
	font-size: 20px;
	font-family: "Century Gothic";
	color: rgb( 160, 164, 177 );
	text-decoration: none;
}
maladies a {
	text-decoration: none;
}
#popup ul {
	left: -26px;
	list-style: none outside none;
	min-height: 2em;
	width: 97px;
	text-decoration: none;
}
#popup li {
	text-decoration: none;
	font-size: 16px;
	font-family: "Century Gothic";
	color: rgb( 2, 2, 70 );
	line-height: 48px;
	text-align: left;
	z-index: 86;
}
#popup a {
	color: rgb( 2, 2, 70 );
	border-bottom: 1px rgba( 255, 255, 255, 0.078 );
	text-decoration: none;
}
.bodyselection {
	height: 1200px;
	padding-left: 143px;
	padding-top: 40px;
	width: 270px;
}
header {
	background-color: #FFFFFF;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 5;
}
.logo {
	margin-left: 125px;
}
.search_bar {
	width: 100%;
}
.search {
	left: 10%;
	position: fixed;
	top: 90px;
	width: 70%;
}
.imput {
	border: 0 solid;
	height: 17px;
	left: 16%;
	padding: 0 3px;
	position: relative;
	width: 100%;
}
search_button {
	background: url("searchbutton3.gif") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
	border-style: none;
	height: 20px;
	left: 138px;
	position: relative;
	width: 24px;
}
.bar {
	border: 0 solid;
	height: 41px;
	padding: 0 3px;
	position: relative;
	width: 1021px;
	top: -19px;
}
#popup {
	background: none repeat scroll 0 0 rgba(200, 200, 200, 0.6);
	border-radius: 20px;
	left: 66%;
	opacity: 0.69;
	position: fixed;
	top: 214px;
	width: 170px;
}
#popup:after {
	content: url(images/tab_arrow_05.png);
	position: absolute;
	top: -31px;
	right: -15px;
}
#popup3 {
	-webkit-border-radius: 20px 20px 20px 20px;
	border-radius: 20px 20px 20px 20px;
	background-color: rgba(200, 200, 200, 0.8);
	height: auto;
	left: 11%;
	position: fixed;
	top: 43%;
	width: 74%;
}
#popup2 {
	background-color: rgba(200, 200, 200, 0.8);
	border-radius: 20px;
	height: auto;
	left: 19%;
	position: fixed;
	top: 30%;
	width: 14%;
}
#popup2 li {
	color: #020246;
	font-family: "Century Gothic";
	font-size: 16px;
	line-height: 48px;
	text-align: left;
	text-decoration: none;
}
#popup2 a {
	text-decoration: none;
	color: #020246;
}
#name {
	font-size: 30px;
	font-family: "Century Gothic";
	color: rgb( 14, 31, 65 );
	font-weight: bold;
	line-height: 0.6;
	text-align: left;
	padding-left: 20px;
}
#uses {
	font-size: 1.1em;
	font-family: "Century Gothic";
	color: rgb( 0, 0, 0 );
	line-height: 1.5;
	text-align: left;
	padding-left: 52px;
	padding-right: 35px;
	z-index: 791;
}
#info {
	font-size: 1.1em;
	font-family: "Century Gothic";
	color: rgb( 0, 0, 0 );
	line-height: 1.5;
	text-align: left;
	padding-left: 52px;
	padding-right: 35px;
	z-index: 791;
}
.bodyselection li {
	border: 1px red solid;
}
#navcontainer {
	left: 30%;
	position: absolute;
	top: 20%;
	border: 1px solid red;
}
#navcontainer ul {
	background-image: url("images/nav_bar.png");
	background-repeat: no-repeat;
	color: #FFFFFF;
	float: left;
	font-family: arial, helvetica, sans-serif;
	height: 53px;
	left: -182px;
	margin-left: 0;
	padding-left: 0;
	position: absolute;
	right: 15px;
	top: -24px;
	width: 900px;
}
#navcontainer ul li {
	display: inline;
}
#navcontainer ul li a {
	font-size: 18px;
	padding: 5px 46px;
	font-family: "Century Gothic";
	color: #ebe9e9;
	text-decoration: none;
	float: left;
}
#navcontainer ul li a:hover {
	color: #fff;
}
#head {
	 
	height: 60px;
	left: 129px;
	position: absolute;
	top: 38px;
	width: 52px;
	display:none;
}
</style>

<body>
<div class="wrapper">
  <section>
    <header> <img class="logo" src="images/human_project_logo.png"/> <img class="search_bar" src="images/search_bar_tab.png"/>
      <form class="search" method="get" action="http://www.designedbyj.me/humanproject.com/search.php">
        <table cellpadding="0px" cellspacing="0px">
          <tr>
            <td class="imput" ><input class="bar" type="text" name="zoom_query" style=" background:url(images/search_tab.png); height:67px; padding:0px 3px; position:relative;"></td>
            <td class="search_button" style="border-style:solid;border-color:#4B7B9F;border-width:1px;">Search
              <input type="submit" value="" style="border-style: none; background:url(images/icons_13.png) no-repeat; width: 24px; height: 20px;"></td>
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
  <section class="humanbody bodyselection">
   <a href="#" id="head_part">head</a> 
   <div id="head"><img src="head.gif"/></div>
    
     
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
<div id="popup"> </div>
<div id="popup2"> </div>
<div id="popup3"></div>
<div id="navcontainer">
  <ul id="navlist">
    <li id="active"><a href="#" id="current">information</a></li>
    <li><a href="#">uses</a></li>
    <li><a href="#">interactions</a></li>
    <li><a href="#">videos</a></li>
    <li><a href="#">shop</a></li>
  </ul>
</div>
<div id="popup4"></div>
</div>
<script src="jquery-1.9.1.min.js"></script> 
<script> 
   $(document).ready(function(e) {
	   
	   $('#popup').hide();
	   $('#popup2').hide();
	   $('#navcontainer').hide();
	    $('#popup4').hide()
	   
    	$('.vhs a').click(function(e){
		e.preventDefault();
		var data= $('#popup2').load(this.href, function(){
			$('#popup2').show('slow');
			 $('#popup').hide();
			 $('#popup3').hide();
			 $('#navcontainer').hide();
			  $('#popup4').hide()
			});	
		});
		
			$('#popup2 a').click(function(e){
				e.preventDefault();
				 $('#popup3').html('');
			  $('#popup3').show();
			  $('#navcontainer').show();
				var info=$('#popup3').load(this.href, function(){});
				 $('#popup2').hide();
				  
				
			});
			
			$('.wrapper').click(function(e){
				e.preventDefault();
			  $('#popup').hide();
			   $('#popup2').hide();
			  $('#popup3').hide();
				 $('#popup4').hide();
				  
				
			});
			 
		
		$('.maladies a').click(function(e){
		e.preventDefault();
		 $('#popup4').hide()
		 $('#popup3').hide();
		 $('#navcontainer').hide();
		 
		var data= $('#popup').load(this.href, function(){
			  
		<!--	var height=$('#popup:after').height();-->
	<!--		var top=e.pageY - height/2 + 'px' ;-->
			 
			$('#popup').css('top',top)
			$('#popup').show('slow');
			 $('#popup2').hide();
			  $('#popup4').hide()
			$('#popup a').click(function(e){
				e.preventDefault();
				 $('#popup3').html('');
			  $('#popup3').show();
			  
				var info=$('#popup3').load(this.href, function(){});
				 $('#navcontainer').show();
				 $('#popup').hide();
				  $('#popup2').hide();
				   $('#popup4').hide()
				
				});
 
			});
			
				}); 
				 
	$('#head_part')	.click( function(){
		$('#head').show();
		
	});
	
	
 });
    
</body>
</html>
