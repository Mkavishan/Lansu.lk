<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Lansu.lk</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <script src="js/jquery.js"></script><!--DON'T MOVE THIS INTO BELOW (Anushka)-->

</head><!--/head-->
=======
<?php include "header.php" ?>
>>>>>>> 7d87c2e2da4812547301461e63cf791308cbcba0

<body>
	<div class="container">
		<div class="well well-sm" style="background-color:#ebebe0;">
			<div class="row">
				<div class="col-sm-2">
					<button type="button" class="btn btn-warning btn-md btn-block" data-toggle="modal" data-target="#myModal1">Area</button>
						<!-- Modal 1 -->
						<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
							    <div class="modal-header">
							      <button type="button" class="close" data-dismiss="modal">&times;</button>
							      <h4 class="modal-title">Select Area</h4>
							    </div>
							    
							    <div class="modal-body">
							    	<div class="row">
						              <p>Select District</p>
						              <!-- District here -->
						              <button type="button" id="amparaId"onclick="showItem(this.value);" value="Ampara" class="btn btn-default btn-block">Ampara</button>
						              <button type="button" class="btn btn-default btn-block">Anuradhapura</button>
						              <button type="button" class="btn btn-default btn-block">Badulla</button>
						              <button type="button" class="btn btn-default btn-block">Batticaloa</button>
						              <button type="button" class="btn btn-default btn-block">Colombo</button>
						              <button type="button" class="btn btn-default btn-block">Galle</button>  
						              <button type="button" class="btn btn-default btn-block">Gampaha</button>
						              <button type="button" class="btn btn-default btn-block">Hambantota</button>
						              <button type="button" class="btn btn-default btn-block">Jaffna</button>
						              <button type="button" class="btn btn-default btn-block">Kalutara</button>
						              <button type="button" class="btn btn-default btn-block">Kandy</button>
						              <button type="button" class="btn btn-default btn-block">Kegalle</button>
						              <button type="button" class="btn btn-default btn-block">Kilinochchi</button>
						              <button type="button" class="btn btn-default btn-block">Kurunegala</button>
						              <button type="button" class="btn btn-default btn-block">Mannar</button>
						              <button type="button" class="btn btn-default btn-block">Matale</button>
						              <button type="button" class="btn btn-default btn-block">Matara</button>
						              <button type="button" class="btn btn-default btn-block">Monaragala</button>
						              <button type="button" class="btn btn-default btn-block">Mullaitivu</button>
						              <button type="button" class="btn btn-default btn-block">Nuwara Eliya</button>
						              <button type="button" class="btn btn-default btn-block">Polonnaruwa</button>
						              <button type="button" class="btn btn-default btn-block">Puttalam</button>
						              <button type="button" class="btn btn-default btn-block">Ratnapura</button>
						              <button type="button" class="btn btn-default btn-block">Trincomalee</button>
						              <button type="button" class="btn btn-default btn-block">Vavuniya</button>		
						              					               
							      </div>
							  </div>
							    <div class="modal-footer">
							      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    </div>
							  </div>
							</div>
						</div>
				</div>	
				<div class="col-sm-2">
					<button type="button" class="btn btn-warning btn-md btn-block" data-toggle="modal" data-target="#myModal2">Category</button>
						<!-- Modal 2 -->
						<div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
							    <div class="modal-header">
							      <button type="button" class="close" data-dismiss="modal">&times;</button>
							      <h4 class="modal-title">Modal Header</h4>
							    </div>
							    <div class="modal-body">
							      <p>This is a large modal.</p>
							      <!-- Item category here -->
							      <button type="button" class="btn btn-default btn-block">Computers</button>
							      <button type="button" class="btn btn-default btn-block">Houses</button>
							      <button type="button" class="btn btn-default btn-block">Vehicles</button>
							      <button type="button" class="btn btn-default btn-block">Lands</button>
							      <button type="button" class="btn btn-default btn-block">Electronics</button>
							    </div>
							    <div class="modal-footer">
							      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    </div>
							  </div>
							</div>
						</div>
				</div>
				<div class="col-sm-1">
					<label class="control-label pull-left" for="price">Search Now:</label>
					
				</div>	
				<div class="col-sm-2">
					<input type="text" class="form-control pull-left" id="price" placeholder="Search..">
				</div>	
				<div class="col-sm-1">
					<label class="control-label pull-left" for="closing_date">Closing Date:</label>
				</div>	
				<div class="col-sm-2">
					<input type="date" class="form-control pull-left" id="closing_date">
				</div>	
				<div class="col-sm-2">
					<button type="submit" class="btn btn-warning btn-block">Search</button>
				</div>					
			</div>
		</div>
		<div class="row" id="item_area">

		</div>
	</div>
	<script src="js/itemSearch.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>