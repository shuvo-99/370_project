
<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted

		$dtype = $_POST['dtype'];
		$user_id =  $user_data['user_id'] ;

			if ($dtype==="money"){
				header("Location: money_donor.php");
			}
			if ($dtype==="product"){
				header("Location: product_donor.php");
			}
			die;
		}

?>

<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Easy Charity </title>
  </head>
  <body>
		<head>
 <title>Welcome to Easy Charity!</title>
 <style type="text/css">
  h1 { text-align: center}
 </style>
<body>
 <h1> <font size="+2"> Welcome to Easy Charity! </font></H1>
</body>



			<h1>  <font size="1">Hello <?php echo $user_data['user_name'] ?>, This is your profile. You are  our verified donor.</font>
</h1>

			 	<h1>  <font size="2"> Want to make donation? Find all places and people you can donate right here:

			 </font>
					<br>
  <font size="-1">
		<style type="text/css">
	   h1 { text-align: center}
	  </style>
		<h1>



						<table style="border:1px solid black;margin-left:auto;margin-right:auto;">
							<tr>
								<th>  <font size="2"> Receiver Name </font></th>
								<th>  <font size="2"> Receiver ID </font></th>
							</tr>
							<?php

								$con= mysqli_connect("localhost","root","", "charity");
								$sql= 'SELECT * from users WHERE utype="receiver"';
								$result= $con->query($sql);

								if ($result->num_rows>0){
									while($row= $result-> fetch_assoc()){
									 echo	 "<tr><td>".$row['user_name'] . "</td><td>" .$row['user_id'] . "</td>" ;
									}
								}
								else {
									echo "No results";
								}


								$con->close();
							 ?>
						</table>
						<form method="post">



			        <label for="utype">Choose your donation type:</label>
			        <select name="dtype" id="dtype">
			            <option value="money">Money (cash)</option>
			          <option value="product">Item/Product</option>

			        </select>

			        <input  id="button" type="submit"  value="Press to Proceed">

							 <br>



		         </select>


						</font>
						</h1>
					<br><br>
			     <br><br>
					 <br><br>
		<a href="logout.php">Logout</a>
  </body>
</html> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>