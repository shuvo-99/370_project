<?php
session_start();

	include("connection.php");
	include("functions.php");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>
<title>Receiver Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="receiver_css/style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-dark mb-5">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item nav-text">
          <a href="donor_index.php" class="btn" role="button">Home</a>
        </li> -->

        <li class="nav-item nav-text">
          <a href="msg_query.php" class="btn text-white" role="button">Send Message</a>
        </li>

        <li class="nav-item nav-text">      
          <a href="inbox.php" class="btn text-white" role="button">Inbox</a>
        </li>
        
      </ul>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
      
      <a href="logout.php" class="btn btn-warning ms-2" role="button">Log Out</a>      
    </form>
  </div>
</nav>


<p>

  <button class="btn btn-primary btn-lg btn-block mb-5" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Request as an Individual
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">


  <form class="p-3" action="receiver_request.php" method="post">
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="personal_userid">User Id</label>
      <input type="text" class="form-control" name="personal_userId" placeholder="User Id">
    </div>
   <div class="form-group col-md-6">
      <label for="personal_nid">NID</label>
      <input type="text" class="form-control" name="personal_nid" placeholder="NID">
    </div>

    <div class="form-group col-md-6">
    <label for="personal_name">Name</label>
    <input type="text" class="form-control" name="personal_name" placeholder="Your Name">
  </div>


    <div class="form-group col-md-6">
      <label for="personal_email">Email</label>
      <input type="email" class="form-control" name="personal_email" placeholder="Email">
    </div>

    <div class="form-group col-md-6">
      <label for="personal_product">Product</label>
      <input type="text" class="form-control" name="personal_product" placeholder="Product you need">
    </div>

    <div class="form-group col-md-6">
      <label for="personal_product_quantity">Product Quantity</label>
      <input type="number" class="form-control" name="personal_product_quantity" placeholder="Quantity of your product">
    </div>


    <div class="form-group col-md-6">
      <label for="personal_amount">Amount</label>
      <input type="number" class="form-control" name="personal_amount" placeholder="Amount you need">
    </div>


</div>



    <div class="form-group">
    <label for="perosnal_address">Address</label>
    <input type="text" class="form-control" name="personal_address" placeholder="Address">
  </div>
  </div>

  <div class="form-group mb-4 ml-4 mr-4">
    <label for="personal_whyrequest">Tell us Briefly about Your Request</label>
    <textarea class="form-control" name="personal_whyrequest" rows="3"></textarea>
  </div>




  <button type="submit" class="btn btn-primary mb-4 ml-4 mr-4">Submit</button>
</form>

</div>









<p>

  <button class="btn btn-primary btn-lg btn-block mt-5" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
  Request as an Organization
  </button>
</p>
<div class="collapse" id="collapseExample2">
  <div class="card card-body">

 <form class="p-3" action="org_receiver_request.php" method="post">
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="org_userId">User Id</label>
      <input type="text" class="form-control" name="org_userId" placeholder="User Id">
    </div>
   <div class="form-group col-md-6">
      <label for="org_licence">Licence Number</label>
      <input type="text" class="form-control" name="org_licence" placeholder="NID">
    </div>

    <div class="form-group col-md-6">
    <label for="org_name">Organization Name</label>
    <input type="text" class="form-control" name="org_name" placeholder="Your Organization Name">
  </div>


    <div class="form-group col-md-6">
      <label for="org_email">Email</label>
      <input type="email" class="form-control" name="org_email" placeholder="Email">
    </div>


    <div class="form-group col-md-6">
      <label for="org_product">Product</label>
      <input type="text" class="form-control" name="org_product" placeholder="Product you need">
    </div>

    <div class="form-group col-md-6">
      <label for="org_product_quantity">Product Quantity</label>
      <input type="number" class="form-control" name="org_product_quantity" placeholder="Quantity of your product">
    </div>


    <div class="form-group col-md-6">
      <label for="org_amount">Amount</label>
      <input type="number" class="form-control" name="org_amount" placeholder="Amount your organization need">
    </div>



</div>







    <div class="form-group">
    <label for="org_address">Organization Address</label>
    <input type="text" class="form-control" name="org_address" placeholder="Organization Address">
  </div>
  </div>

  <div class="form-group mb-4 ml-4 mr-4">
    <label for="org_whyrequest">Tell us Briefly about Your Request</label>
    <textarea class="form-control " name="org_whyrequest" rows="3"></textarea>
  </div>




  <button type="submit" class="btn btn-primary mb-4 ml-4 mr-4">Submit</button>
</form>
</div>
            List of all donors:
            <br>
						<table style="border:1px solid black;margin-left:auto;margin-right:auto;">
							<tr>
								<th>  <font size="2"> Receiver Name </font></th>
								<th>  <font size="2"> Receiver ID </font></th>
							</tr>
							<?php

								$con= mysqli_connect("localhost","root","", "charity");
								$sql= 'SELECT * from users WHERE utype="donor"';
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


<!-- <a href="logout.php">Logout</a> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
