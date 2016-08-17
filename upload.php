<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<title>File Upload</title>

		<!-- Google web fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<style>
			.myHead, div img{
				background-color: white;
				width:auto;
				height: 100px;
			}
			div span{
				position: absolute;
				right: 30px;
				font-size: 17px;

			}

			
		</style>

	</head>

	<body>

		<div class="myHead"><img src="assets\img\logo.jpg">ระบบจัดการไฟล์โรงเรียน<span>นายจาตุรนต์ พรลาภวิวัฒน์ยิ่ง&nbsp;
		<a href="logout.php">(ออกจากระบบ)</a></span></div>

		<form id="upload" method="post" action="upload2.php" enctype="multipart/form-data">
			<div id="drop">
				Drop Here

				<a>Browse</a>
				<input type="file" name="file" /><br /> 
			</div>

			<ul>
				<!-- The file uploads will be shown here -->
			</ul>

		</form>

		
        
		<!-- JavaScript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="assets/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="assets/js/jquery.ui.widget.js"></script>
		<script src="assets/js/jquery.iframe-transport.js"></script>
		<script src="assets/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="assets/js/script.js"></script>

		
		
			if ($_SESSION['start'] + 600 < time()) {
		     session_unset();
		     header("Location: login.php");
		    } else {
		     $_SESSION['start'] = time();
		    }
		


	</body>
</html>