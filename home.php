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
	left: 18%;
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
	left: 70%;
	opacity: 0.69;
	position:fixed;
	width: 170px;
	top:27%;
}
#popup tab {
	content: url(images/tab_arrow_05.png);
	position: absolute;
	top: -31px;
	right: -15px;
}
#popup3 {
	background-color: rgba(200, 200, 200, 0.8);
	border-radius: 20px;
	height: auto;
	left: 15%;
	position: fixed;
	top: 36%;
	width: 71%;
}
#popup4 {
	background-color: rgba(200, 200, 200, 0.8);
	border-radius: 20px;
	height: auto;
	left: 17%;
	position: fixed;
	top: 31%;
	width: 13%;
}
#popup4 ul {
	list-style: none outside none;
}
#popup4 a {
	color: #020246;
	text-decoration: none;
}
#popup2 {
	background-color: rgba(200, 200, 200, 0.8);
	border-radius: 20px;
	height: auto;
	left: 19%;
	position: fixed;
	top: 32%;
	width: 14%;
	overflow: auto;
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
#popup4 li {
	color: #020246;
	font-family: "Century Gothic";
	font-size: 16px;
	line-height: 48px;
	text-align: left;
	text-decoration: none;
}
#popup3 h2 {
	color: #0E1F41;
	font-family: "Century Gothic";
	font-size: 27px;
	font-weight: bold;
	line-height: 0.6;
	padding-left: 60px;
	text-align: left;
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
.bodyselection a {
	 height: 71px;
    left: 67%;
    position: absolute;
    top: 7%;
    width: 45px;
}

 


#navcontainer {
	left: 30%;
	position: fixed;
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
	height: 60px;
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
	left: -149px;
	position: absolute;
	top: -35px;
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
            <td class="imput" ><input class="bar" type="text" name="zoom_query" style=" background:url(images/search_tab.png) no-repeat; height:67px; padding:0px 19px; font-size: 20px; position:relative; color:#ECEAEA; font-family: "Century Gothic";"></td>
            <td class="search_button" style=" "><input type="submit" value="" style="border-style: none; background:url(images/search_icon.png) no-repeat; width: 36px; height: 53px; border-style: none; left: -99px;position: relative; top: -24px;"></td>
          </tr>
        </table>
      </form>
    </header>
  </section>
  <p class="sup text">Select a Suppliment </p>
  <img class="sup-img" src="images/azbkg.png"/>
  
  <p class="mal text">Select a Ailment</p>
  <img class="mal-img" src="images/mal_bkg.png"/>
  
  <a class="clear" href=""><img src="images/back_btn.png"/>
  <p class="clearall">clear</p>
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
      <a href="#" id="head_part"> </a>
      <div id="head"><img src="images/head.png" style="margin-left: 189px;
    margin-top:61px;"/></div>
      <img class="hbody" src="images/human_body2.png" />
    </ul>
    <section id="head_list">
      <ul>
        <li><a class="eyesl eyes" href="parts.php?part=eyes"></a></li>
        <li><a class="eyesr eyes" href="parts.php?part=eyes"></a></li>
        <li><a class="nose" href="parts.php?part=nose"></a> </li>
        <li><a class="earsl ears" href="parts.php?part=ears"></a></li>
        <li><a class="earsr ears" href="parts.php?part=ears"></a></li>
        <li><a class="mouth" href="parts.php?part=mouth"></a></li>
        <li><a class="skinl skin" href="parts.php?part=skin"></a></li>
        <li><a class="skinr skin" href="parts.php?part=skin"></a></li>
        <li><a class="brain" href="parts.php?part=brain"></a></li>
        <li><a class="hair" href="parts.php?part=hair"></a></li>
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
<div id="popup3">
<span class="dblue">  </span>
<span class="lblue">  </span>
<span class="dblue">  </span>

</div>
<div id="popup4"></div>
<div id="navcontainer">
  <ul id="navlist">
    <li class="active"><a id="info" href="#" data-info id="current">information</a></li>
    <li><a id="usez" href="#" data-uses>uses</a></li>
    <li><a id="interact" href="#" data-interact>interactions</a></li>
    <li><a href="#">videos</a></li>
    <li><a href="https://www.nutritionhouseactive.com/">shop</a></li>
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
					$('#navcontainer').show('fast');
					
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
				var top=e.pageY - height/0 + 'px' ;
			 
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
					$('#head').hide();
					$('#head_list').hide();
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
			$('#popup4').hide(); 
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


		$('.clear').click(function(e){
			e.preventDefault();
			$('#popup').hide();
		 	$('#popup2').hide();
			$('#popup3').hide();
		 	$('#popup4').hide();
		 	$('#navcontainer').hide();
		 	$('#head').hide();
		 	$('#head_list').hide();
		  	$('.hbody').show();
		});
	});


</script>
</body>
</html>
