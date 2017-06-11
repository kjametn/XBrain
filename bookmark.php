<?php 
	$book_id = $_GET["book_id"];
include "connect.php";
	if($conn->connect_error){
		exit();
	}
	else{
		$sql = "SELECT * FROM book WHERE book_id = '".$book_id."'";
		$result = $conn->query($sql);
		//exit();
		

	}



 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bookmark.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
	<title></title>
</head>
<body>
	<section class="screen">
		<div class="top">
			<a href="home.php"><div class="back"><img src="img/back.png"></div></a>
			<!-- back -->
			<div class="menu">BOOKMARK</div> <!-- menu -->
			<div class="bm"></div>
		</div> <!-- top -->


		<div class="scrollbar" id="style-3">


			<?php
      include "connect.php";
      if($conn->connect_error){
        exit();
      }
      else{
        $sql = "SELECT * FROM bookmark WHERE 1 ORDER BY date DESC";
        $result = $conn->query($sql);// รันคอมมาน sql

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          ?>

		    
			<div class="box">
				<div class="book-pic">
					<img src="img/<?php echo $row['book_pic'];?>">
				</div> <!-- book-pic -->
				 <div class="book-type"><?php echo $row["book_type"]?> - <gr>
				 <?php echo $row["date"]?></gr></div> <!-- book-type -->
				 <div class="book-head"><?php echo $row["head"]?></div> <!-- book-head -->
				 <div class="book-text"><?php echo $row["text"]?></div> <!-- 
				 book-text -->

			</div> <!-- box -->
			    <?php
          }
        }
      }
    ?>
		

			
			<div class="force-overflow"></div>
		</div> <!-- scrollbar -->

      
	</section> <!-- screen -->
</body>
</html>