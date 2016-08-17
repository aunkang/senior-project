<!DOCTYPE html>
<html>

	<head>


		<link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<meta charset="utf-8"/>
		<title>File Upload</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="http://vjs.zencdn.net/5.10.7/video-js.css" rel="stylesheet">

		<!-- If you'd like to support IE8 -->
		<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

		<!-- Google web fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<style>
			body{
				font-family: 'Kanit', sans-serif;

			}


			*{margin:0px;padding:0px;color: #6495ED;}
			.myHead{
				background-color: #CAE1FF !important;
				width: auto;
				height: 100px;
				box-shadow: 0px 0px 8px #000;

			}
			
			.myVideo{
				position: relative;
				margin-left: 5%;			
			}

			span.name{
				position:absolute;
			    right: 25px;
			    top: 0;
			    font-size: 16px

			}
			.logo2{
				font-size: 26px;
				position: absolute;
				top: 20px;
			}
			div.content{

			}
		</style>

	</head>

	<body>

		<div data-role="page">
			<div data-role="header" data-position="fixed" class="myHead">
				<div class="in-head">
					<img src="assets\img\logo.png" class="logo1">
					<span class="logo2">ระบบเสริมสร้างการเรียนรู้ของเด็กออทิสติก</span>
					<span class="name">
						นายจาตุรนต์ พรลาภวิวัฒน์ยิ่ง&nbsp;
						<a href="logout.php">(ออกจากระบบ)</a>
					</span>
				</div>	
			</div>


		<!-- <video width="300" controls>
  			<source src="videos/video1.mp4" type="video/mp4"> -->

		
		<div class="content">
		
			<?php 
			for($i=0; $i<=8; $i++) {
				echo "<div class='myVideo'>";
				echo	"<video id='my-video' class='video-js' controls preload='auto' width='300'";
		  		echo		"data-setup='{}'>";
		  		  $video = "video1.mp4"; 
			    	echo "<source src='videos/" .$video. "' type='video/mp4'>";

					

			    echo	"<p class='vjs-no-js'>";
			    echo  		"To view this video please enable JavaScript, and consider upgrading to a web browser that";
			    echo  	"<a href='http://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>";
			    echo	"</p>";
		  		echo "</video>";
		  		echo "</div>";
		  		echo "<br>";
		  		echo "<hr>";
		  		echo "<br>";
			}

			?>

		</div>

	</div>

<!-- 
	<div class="myVideo">
  		<video id="my-video" class="video-js" controls preload="auto" width="300" data-setup="{}">
	    	<source src="videos/video1.mp4" type="video/mp4">

	    	<p class="vjs-no-js">
	      		To view this video please enable JavaScript, and consider upgrading to a web browser that
	      	<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
	    	</p>
  		</video>
  	</div>
 -->



		
		<!-- Simple video example -->

<!-- Video with subtitles -->



  		<script src="http://vjs.zencdn.net/5.10.7/video.js"></script>


		<!-- JavaScript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="assets/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="assets/js/jquery.ui.widget.js"></script>
		<script src="assets/js/jquery.iframe-transport.js"></script>
		<script src="assets/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="assets/js/script.js"></script>



	</body>
</html>

