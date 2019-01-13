<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Cloud Music : The best music platform in the world</title>
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script type="text/javascript">
		$(window).on('scroll', function() 
		{
			if ($(window).scrollTop()) {
				$('nav').addClass('black');
			}
			else{
				$('nav').removeClass('black');
			}
		}
		)
	</script>
</head>
<body>
<div class="wrapper">
		<nav>
		<div class="logo" >
			<img src="img/Untitled.PNG">
		</div>
		<ul>
			<li><a href="index.php" class="active">HOME</a></li>
			<li><a href="genre/genre1.php">GENRE</a></li>
			<li><a href="team/team.php">CREATOR</a></li>
			<form id="searchbox" action="">
		    <input id="search" type="text" placeholder="Search... ">
		    <input id="submit" type="submit" value="Search">
			</form>
			
			
		</ul>
	</nav>



	<section class="sec1"></section>
	<section class="content">
				<p>
			<b> Cloud Music</b> 
		</p>
		<p>
		Discover and stream a constantly expanding mix of music from emerging and major artists around the world.

		</p>
		<br>
		
		<img src="img/semm.png" width="20%" height="20%" style="display: block; margin: auto;">
		<br>
		<br>
		<br>
		<center>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		<?php include('../errors.php'); ?>
		<label for="file">Filename =</label> 
		<input name="file" type="file" /><br><br>
		<button type="submit" value="upload audio" name="upload">Upload</button>
		</form>
	</center>
	<br>
	<br>
	<br>
		<center>
			<table width="1000" border="0">
				<h2>Hear what’s trending for free in the SoundCloud community</h2>
					<tr>
					    <td>
					        <ul>
								<li><h4>  PENDHOZA - Kimchil Hokya Hokya</h4></li>
					        </ul>
					    </td>    
					    <td>
					        <audio controls width="150" height="100">
					               <source src="musik/(7.36 MB) PENDHOZA - Kimchil Hokya Hokya.mp3.ogg" type="audio/ogg">
					               <source src="musik/(7.36 MB) PENDHOZA - Kimchil Hokya Hokya.mp3.mp3" type="audio/mp3" >
					                Your browser does not support the audio element.
					        </audio>
					    </td>
					    <td>
					      <center>
					         <a href="musik/(7.36 MB) PENDHOZA - Kimchil Hokya Hokya.mp3.mp3" target="_blank"><img alt="Download Button" src="img/unnamed.png" width="200" height="100"/></a>
					      </center>   
					    </td>
					</tr>
					<tr>
					    <td>
					        <ul>
					          <li><h4>DEEN ASSALAM ( COVER by SABYAN )</h4></li>
					        </ul>
					    </td>    
					    <td>
					        <audio controls width="150" height="100">
					               <source src="musik/DEEN ASSALAM ( COVER by SABYAN ).ogg" type="audio/ogg">
					               <source src="musik/DEEN ASSALAM ( COVER by SABYAN ).mp3" type="audio/mp3" >
					                Your browser does not support the audio element.
					        </audio>
					    </td>
					    <td>
					      <center>
					         <a href="musik/DEEN ASSALAM ( COVER by SABYAN ).mp3" target="_blank"><img alt="Download Button" src="img/unnamed.png" width="200" height="100"/></a>
					      </center>   
					    </td>
					</tr>
			</table>

			</section>

</div>


<br><br>
</form>
<br><br>
 <div id="footer">
 	
 	
 	<center>
 	<a href="">Copyright &copy;
 	<script language="javascript" type="text/javascript">
 		var today = new Date()
 		var year = today.getFullYear()
 		document.write(year)
 	</script> Cloud Music</a><br>	
 	<hr>
 	<!-- email -->
    <a href="https://www.gmail.com/" target="_blank">
        <img src="img/email.png" alt="Buffer" width="40px" />
    </a>
    &nbsp; &nbsp;
    <!-- facebook -->
    <a href="https://www.facebook.com/" target="_blank">
        <img src="img/facebook.png" alt="Buffer"width="40px" />
    </a>
    &nbsp; &nbsp; &nbsp;
    <!-- ig -->
    <a href="https://www.instagram.com/" target="_blank">
        <img src="img/ig.png" alt="Buffer"width="40px" />
    </a>
    &nbsp; &nbsp; &nbsp;
    <!-- twitter -->
    <a href="https://www.twitter.com/" target="_blank">
        <img src="img/twitter.png" alt="Buffer" width="40px" />
    </a>
<br>

</center>

 </div>
 
</body>
</html>
