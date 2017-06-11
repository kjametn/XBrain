<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <title>XBrain</title>
  </head>
  <body>

    <section class="screen"><!--  wrap section 1 -->
      <div class="top">MAIN MENU</div> <!-- top -->

      <div class="bg">
         <?php
      include "connect.php";
      if($conn->connect_error){
        exit();
      }
      else{
        $sql = "SELECT * FROM piggipo WHERE 1 ORDER BY first_name";
        $result = $conn->query($sql);// รันคอมมาน sql

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          ?>

            <div class="cir-big">
                <div class="cir-small">
                  <img src="img/<?php echo $row['pro_pic'];?>">
                </div> <!-- cir-small -->
            </div> <!-- cir-big -->

            <div class="pro-name"><?php echo $row["first_name"]?> <?php echo $row["last_name"]?></div> <!-- pro-name -->

          <?php
          }
        }
      }
    ?>
      </div> <!-- bg -->


      <a href="hangman.php"><div class="box1"></div></a>
      <a href="book.php"><div class="box2"></div></a>
      <a href="notice-is.php"><div class="box3"></div></a>
      <a href=""><div class="box4"></div></a>


    </section><!--  wrap section 1 -->
  </body>
</html>
