<?php
session_start();
if (isset($_SESSION["uid"]))
{
  header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Apple Store</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>

	 </div>
	 <div class="navbar navbar-inverse navbar-fixed-top" style="background-color:#383838">
		  <div class="container-fluid">	
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
						  <span class="sr-only">navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
					 </button>
					 <a href="index.php" class="navbar-brand" style="color: white">Apple Store</a>
				</div>
				<div class="collapse navbar-collapse" id="collapse">
					 <ul class="nav navbar-nav">
						  <li><a href="index.php" style="color: white"><span class="glyphicon glyphicon-home" style="color: white" ></span> Home </a></li>

						  <li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
						  <li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
					 </ul>
					 <form class="navbar-form navbar-left">
					 </form>
					 <ul class="nav navbar-nav navbar-right">
						  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white" ><span class="glyphicon glyphicon-shopping-cart" style="color: white" ></span > Cart  <span class="badge" style="color: white">0</span></a>
								<div class="dropdown-menu" style="width:400px;">
									 <div class="panel panel-success" >
										  <div class="panel-heading" style="background-color: #383838">
												<div class="row" style="color: white">
													 <div class="col-md-3">Quantity</div>
													 <div class="col-md-3">Product Name</div>
													 <div class="col-md-3">Price in</div>
													 <div class="col-md-3"></div>

												</div>
										  </div>
										  <div class="panel-body">
												<div id="cart_product">
													 <!--<div class="row">
																<div class="col-md-3">Sl.No</div>
																
																<div class="col-md-3">Product Name</div>
																<div class="col-md-3">Price in $.</div>
														  <div class="col-md-3">Product Image</div>
													 </div>-->
												</div>

										  </div>
										  </li>
										  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white"><span class="glyphicon glyphicon-user" style="color: white" ></span> Sign In </a>
												<ul class="dropdown-menu">
													 <div style="width:300px;">
														  <div class="panel panel-primary " style="border-style: none" style="margin-bottom:0px" >
																<div class="panel-heading" style="background-color: #383838">Login</div>
																<div class="panel-heading" style="background-color: #383838; border-color: green" >
																	 <form onsubmit="return false" id="login">
																		  <label for="email">Email</label>
																		  <input type="email" class="form-control" name="email" id="email" required/>
																		  <label for="email">Password</label>
																		  <input type="password" class="form-control" name="password" id="password" required/>
																		  <p><br/></p>
																		  <input type="submit" class="btn btn-success" style="float:right" ><br>
																		  <div><a href="customer_registration.php?register=1" style="color:white; list-style:none;" >Create a new account?</a>				
																	 </form>
																</div>

														  </div>
													 </div>
												</ul>
										  </li>
										  <li><a href="customer_registration.php?register=1" style="color: white"><span></span>Sign Up</a></li>
										  </ul>
									 </div>
								</div>
								</div>	
							

								<div class="container-fluid px-0">
									 <div class="row">
										  <div class="col-md-12">
												<img src="product_images/apple.png" alt="placeholder 960" class="img-responsive" />
										  </div>
									 </div>
								</div>

								
								<div class="container-fluid" style="background-color: #F8F8F8" >
									 <div class="row">
										  <div class="col-md-1"></div>
										  <div class="col-md-2 col-xs-12">

												<div id="get_brand">
												</div>
												<!--<div class="nav nav-pills nav-stacked">
														  <li class="active"><a href="#"><h4>Brand</h4></a></li>
														  <li><a href="#">Categories</a></li>
														  <li><a href="#">Categories</a></li>
														  <li><a href="#">Categories</a></li>
														  <li><a href="#">Categories</a></li>
												</div> -->
										  </div>
										  <div class="col-md-8 col-xs-12">
												<div class="row">
													 <div class="col-md-12 col-xs-12" id="product_msg">
													 </div>
												</div>
												<div class="panel panel-info" >
													 <div class="panel-heading" style="background-color:#383838"><div style="color: white">Products</div></div>
													 <div class="panel-body"style='background-color:#F8F8F8' >
														  <div id="get_product"   >

														  </div>
														  <!--<div class="col-md-4">
																	 <div class="panel panel-info" style="background-color: #383838" style="  >
																				<div class="panel-heading">Samsung Galaxy</div>
																				<div class="panel-body">
																						  <img src="product_images/images.JPG"/>
																				</div>
																				<div class="panel-heading">$.500.00
																						  <button style="float:right;" class="btn btn-danger btn-xs">Add To Cart</button>
																				</div>
																	 </div>
														  </div> -->
													 </div>

												</div>
										  </div>
										  <div class="col-md-1"></div>
									 </div>
								</div>
								</body>
								</html>
















































