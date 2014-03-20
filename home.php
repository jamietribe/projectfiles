 <html>
<head>
<title>The Human Project</title>
<link rel="stylesheet" href="master.css" type="text/css">
</head>
<?php
	require_once('includes/config.php');
	//query the database and store the results
	//in the $myData variable
	$sql = 'SELECT * FROM maladies';
	
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
	width: 108%;
	top: -19px;
}
#popup {
	background: rgba(200,200,200,0.60);
	-webkit-border-radius: 20px 20px 20px 20px;
	border-radius: 20px 20px 20px 20px;
	left: 75%;
	opacity: 0.69;
	position: absolute;
	top: 222px;
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
#popup4 {
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
	top: 43%;
	width: 14%;
}
#popup2:after {
	content: url(images/tab_arrow_05.png);
	position: absolute;
	top: 0;
	left: -15px;
	-moz-transform: scaleX(-1);
	-o-transform: scaleX(-1);
	-webkit-transform: scaleX(-1);
	transform: scaleX(-1);
	filter: FlipH;
	-ms-filter: "FlipH";
}
#popup2 li{
color: #020246;
    font-family: "Century Gothic";
    font-size: 16px;
    line-height: 48px;
    text-align: left;
    text-decoration: none;	
}
#popup2 a{
	text-decoration:none;	
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
	 
	    display: none;
    height: 60px;
    left: -65px;
    position: absolute;
    top: 5px;
    width: 52px;
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
  

<section class="humanbody">
  <ul class="bodyselection">
      <a href="#" id="head_part">head</a>  
   <div id="head"><img src="head.gif"/></div>
   <img class="hbody" src="images/human_body2.png" />
    </ul>
     <section id="head_list">
    
        <ul>
        <li class="eyesl eyes"><a href="parts.php?part=eyes">eyesl</a></li>
        <li class="eyesr eyes"><a href="parts.php?part=eyes">eyesr   </a></li>
        <li class="nose"><a href="parts.php?part=nose">nose  </a></li>
        <li class="earsl ears"><a href="parts.php?part=ears">earsl   </a></li>
        <li class="earsr ears"><a href="parts.php?part=ears">earsr   </a></li>
        <li class="mouth"><a href="parts.php?part=mouth">mouth   </a></li>
        <li class="skinl skin"><a href="parts.php?part=skin">skinl</a></li>
        <li class="skinr skin"><a href="parts.php?part=skin">skinr </a></li>
        <li class="brain"><a href="parts.php?part=brain">brain   </a></li>
        <li class="hair"><a href="parts.php?part=hair">hair   </a></li>
        </ul>
</section>
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
<div id="popup2"></div>
<div id="popup3"></div>
<div id="popup4"></div>
<div id="navcontainer">
  <ul id="navlist">
    <li class="active"><a id="info" href="#" data-info id="current">information</a></li>
    <li><a id="usez" href="#" data-uses>uses</a></li>
    <li><a id="interact" href="#" data-interact>interactions</a></li>
    <li><a href="#">videos</a></li>
    <li><a href="#">shop</a></li>
  </ul>
</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script> 
   $(document).ready(function(e) {
	   
		$('.hbody').show();
		$('#popup').hide();
		$('#popup2').hide();
		$('#navcontainer').hide();
	    //$('#popup4').hide();
		$('#head').hide();
		$('#head_list').hide();


    	$('.vhs a').click(function(e){
			e.preventDefault();

			$('#popup2').load(this.href, function(e){
				$('#popup2').show('slow');
				$('#popup').hide();
				$('#popup3').hide();
				$('#navcontainer').hide();
				$('#head').hide();
				$('#head_list').hide();
				$('.hbody').show();

				$('#popup2 a').click(function(e){
					e.preventDefault();
					$('#popup3').html('');
					$('#navcontainer').show('fast'});
					
					$('#popup3').load(e.target.href, function(e){
						$('#popup3').show();
						$('#popup2').hide();
						$('#head').hide();
						$('#head_list').hide();
					 	$('.hbody').show();
					});
				});
			});	
		});
	

		$('.maladies a').click(function(e){
			e.preventDefault();
		 	$('#popup3').hide();
		 	$('#navcontainer').hide();
		 	$('#head').hide();
		 	$('#head_list').hide();
		  	$('.hbody').show();
		 
			$('#popup').load(this.href, function(){
				var height=$('#popup').height();
				var top=e.pageY - height/2 + 'px' ;
			 
				$('#popup').css('top',top)
				$('#popup').show('slow');
			 	$('#popup2').hide();

				$('#popup a').click(function(e){
					e.preventDefault();
				 	$('#popup3').html('');
			  		$('#popup3').show();
			  		$('.hbody').show();
			  
					$('#popup3').load(this.href);
				 	$('#navcontainer').show();
				 	$('#popup').hide();
				  	$('#popup2').hide();
				  	//$('#popup4').hide();
				});
			});	
		});

			$('#head_part')	.click( function(){
			$('#head').show();
			$('#head_list').show();
			$('.hbody').hide();
			$('#popup').hide();
			$('#popup2').hide();
			$('#popup3').hide();
			//$('#popup4').hide();
		});

		$('.wrapper').click(function(e){
			e.preventDefault();
			$('#popup').hide();
			$('#popup2').hide();
			$('#popup3').hide();
			//$('#popup4').hide(); 
		});
	
	$('#head_list a').click(function(e){
		e.preventDefault();
		$('#popup4').load(e.target.href, function(e){
			$('#popup4').show();
			$('#popup4 a').click(function(e){
				e.preventDefault();	
				$('#popup3').load(this.href,function(e){
					$('#popup3').show();	
				});
				$('#navcontainer').show();
				$('#popup').hide();
				$('#popup2').hide();
				$('#popup4').hide();
			});
		});
	});
	
});
   </script>
</body>
</html>
