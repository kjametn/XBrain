<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/regis.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />

</head>
<body>
<!-- <?php 
	$datet = $_POST["datet"];
	$timet = $_POST["timet"];
	$repeat = $_POST["repeat"];


	include "connect.php";
	if($conn->connect_error){
		exit();
	}
	else{
		$sql = "INSERT INTO reminder(datet, timet, repeat) VALUES ('".$datet."','".$timet."','".$repeat."');";
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


 ?> -->

<section class="screen"><!--  wrap section 1 -->
      <div class="top">
			<a href="notice-is.php"><div class="back"><img src="img/back.png"></div></a>
			<!-- back -->
			<div class="menu">NOTIFICATIONS</div> <!-- menu -->
			<div class="bm"></div>
		</div> <!-- top -->

	<div class="big-box">


		<?php
      include "connect.php";
      if($conn->connect_error){
        exit();
      }
      else{
      	$sql = "SELECT * FROM notification INNER JOIN reminder ON reminder.noti_id = notification.noti_id";
      		
       // $sql = "SELECT * FROM notification WHERE 1 ORDER BY title";

        $result = $conn->query($sql);// รันคอมมาน sql

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          ?>

            <div class="box">
				<p class="title"><?php echo $row["title"]?></p>
				<p class="note"><?php echo $row["note"]?></p>
				<p class="time"><?php echo $row["date"]?>, <?php echo $row["time"]?></p>
			</div>




          <?php
          }
        }
      }
    ?>


    	<a href="notice-is.php"><button class="bt" type="submit" value="save" name="btnsave">+</button></a>
    	<h1 class="h">Push + to add notification</h1>
    	<p class="t">Note something thats
        remind you</p>





		

	</div>
	



    </section><!--  wrap section 1 -->




 </body>
 </html>
