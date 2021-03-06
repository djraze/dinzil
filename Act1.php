<!DOCTYPE html>

<?php
	if(isset($_POST['boton'])){
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		if($uname == "ADMIN" && $pass == "ADMIN123"){
			echo '<script>alert("Succesfully LOG IN")</script>';
		}
		else{
			echo '<script> function myFunction(){
				window.location.href="http://localhost/acts(reboya)/Act1.php";} </script>';
			echo '<script>alert("WRONG PASSWORD OR USERNAME!!")</script>';
		}
	}

?>

<html>
<head>

	<style>
		body{
			background-image: url("bg.jpg");
			background-repeat: no-repeat;
		}

		button { 
			background-color: #1a1a1a;
			font-family: Times New Roman;
			font-size: 20px;
			border: none;
			cursor: pointer;
			color: white;
			width: 150px;
			height: 50px;
			border-radius: 4px;
		}

		button:hover {
 		 opacity: 0.8;
		}

		label {
			font-family: Times New Roman;
			color: #262626;
			font-size: 20px;
		}

		input[type=text], input[type=password]{
			width: 200px;
			height: 30px;
		}

		.login1{
			padding: 50px;
			width: 250px;
			background-color: #737373;
			position: absolute;
			left: 550px;
			bottom: 275px;
		}

		.logo{
			position: absolute;
			left: 675px;
			bottom: 530px;
			

		}

	</style>
</head>
<body>



<center>
	

<form action="" method="post">
<div class="login1">
    <label for="uname"><b>Username:</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br><br>
    <label for="password"><b>Password:</b></label><br>
    <input type="password" placeholder="Enter Password" name="pass" required>
    <br><br>    
    <button type="submit" name="boton">LOG IN!</button>

  </div>  
   <div class = "logo">
  	<img src="cat.gif" alt="cat" style="width: 100px; height: 100px;border-radius: 50%;">
  	
  </div> 
</form>	 
</center>

</body>
</html>