<?php 
//get unique id
$up_id = uniqid(); 
?>
<?php

//process the forms and upload the files
if ($_POST) {

//specify folder for file upload
$folder = "uploads/"; 

//specify redirect URL
$redirect = "upload99.php?success";

//upload the file
move_uploaded_file($_FILES["file"]["tmp_name"], "$folder" . $_FILES["file"]["name"]);

//do whatever else needs to be done (insert information into database, etc...)

//redirect user
header('Location: '.$redirect); die;
}
//

?>


<html  class="no-js">
	<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Demo for the tutorial: Styling and Customizing File Inputs the Smart Way" />
		<meta name="keywords" content="cutom file input, styling, label, cross-browser, accessible, input type file" />
		<meta name="author" content="Osvaldas Valutis for Codrops" />
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		<style>
			.navbar-default {
			    background-color: white !important;
			}
			.progress_outer {
		        border: 1px solid #000;
		    }
		    .progress {
		        width: 20%;
		        background: black;
		        height: 20px;  
		    }
			
		</style>
	
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>


		<script>

$(document).ready(function() { 
//

//show the progress bar only if a file field was clicked
	var show_bar = 0;
    $('input[type="file"]').click(function(){
		show_bar = 1;
    });

//show iframe on form submit
    $("#form1").submit(function(){

		if (show_bar === 1) { 
			$('#upload_frame').show();
			function set () {
				$('#upload_frame').attr('src','upload_frame.php?up_id=<?php echo $up_id; ?>');
			}
			setTimeout(set);
		}
    });
//

});

</script>







	</head>
	<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">

        <a class="pull-left" href="#"><img style=" width: 64px;" src="assets/img/logo.png">ระบบเสริมสร้างการเรียนรู้ของเด็กออทิสติก</a>

      </div>
        <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"> นายจาตุรนต์ พรลาภวิวัฒน์ยิ่ง</span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
    </ul>

      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
<div class="container">
	<div class="content">
		<div class="box">

		<?php if (isset($_GET['success'])) { ?>
		  <span class="notice">Your file has been uploaded.</span>
		  <?php } ?>
			<form action="" method="POST" enctype="multipart/form-data" name="form1" id="form1">
				<input type="file" name="file" id="file-5" class="inputfile inputfile-4"/>
						<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose a file&hellip;</span></label>
						<br><input class="btn btn-danger" name="submit" value="submit" type="submit">
			</form>

    	</div>
	</div>
</div>

  		<script src="js/custom-file-input.js"></script>		


</body>

</html>