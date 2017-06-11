<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/notice-is.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>


	<section class="screen"><!--  wrap section 1 -->
      <div class="top">
			<a href="home.php"><div class="back"><img src="img/back.png"></div></a>
			<!-- back -->
			<div class="menu">ADD</div> <!-- menu -->
			<div class="bm"></div>
		</div> <!-- top -->



<?php 
            if(isset($_POST['namebottom'])){


	$title = $_POST["title"];
	$note = $_POST["note"];


	include "connect.php";
	if($conn->connect_error){
		exit();
	}
	else{
		$sql = "INSERT INTO notification(title, note) VALUES ('".$title."','".$note."');";
		//exit();
		if($conn->query($sql)){
			?>

					<div class="true">
						<i class="fa fa-check fa-5x"></i><br>
						Register Successful
					</div>
				<?php
			header("Refresh:3;url=notice-is.php");

		}else{
			?>

					<div class="true">
						<i class="fa fa-times fa-5x"></i><br>
						Register Failed
					</div>
				<?php
			// header("Refresh:3;url=login.php");
		}

	}
	}


 ?>







    	<form name="signup-form" method="POST" action="notice-is.php">
    	

            <div class="form-fild">
              <input type="text" name="title" placeholder="TITLE">
            </div>
          
            <div class="note">
              <textarea type="text" name="note" placeholder="Note"></textarea>
            </div>


           <button type="submit" value="namebottom">SAVE</button></a>

          </form>





    </section><!--  wrap section 1 -->



	

</body>
</html>