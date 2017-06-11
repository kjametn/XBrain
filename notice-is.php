<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/notice-is.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <link rel="stylesheet" href="css/stylebot.css">
   
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
            if(isset($_POST['btnsave'])&&$_POST['btnsave']=='save'){
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
						<div id="popup1" class="overlay">
				  			<div class="popup">
				    			<h1 class="add">ADD REMINDER</h1>

					<form name="signup-form" method="POST" action="regis_api.php">
				    			<select id="theComboExample" class="theCombo">
    								<option value="">Today</option>
    								<option value="1">Tomorrow</option>
    								<option value="2">Next Sunday</option>
    								<option value="2">Pick a date...</option>
  								</select>
  								<select id="theComboExample" class="theCombo">
    								<option value="">08:00</option>
    								<option value="1">13:00</option>
    								<option value="2">18:00</option>
    								<option value="2">20:00</option>
  								</select>
  								<select id="theComboExample" class="theCombo2">
    								<option value="">Not Repeat</option>
    								<option value="1">Dialy</option>
    								<option value="2">Weekly</option>
  								</select>
				    			<a href="notice-is.php"><div class="cancel">CANCEL</div></a> <!-- cancel -->		    
				    			
				    			<button type="submit" value="save" name="save" class="save">SAVE</button>	
				    		</form>



				  			</div>
						</div>
					<?php
						

					}else{
					?>

						<div class="true">
							<i class="fa fa-times fa-5x"></i><br>
							insert Failed
						</div>
					<?php
			// header("Refresh:3;url=login.php");
					}
				}
				$_POST['btnsave'] ='';
			}
 		?>
    	<form name="signup-form" method="POST" action="notice-is.php">
            <div class="form-fild">
              <input type="text" name="title" placeholder="TITLE">
            </div>
            <div class="note">
              <textarea type="text" name="note" placeholder="Note"></textarea>
            </div>
			<button type="submit" value="save" name="btnsave">SAVE</button>
		 </form>





    </section><!--  wrap section 1 -->



	

</body>
</html>