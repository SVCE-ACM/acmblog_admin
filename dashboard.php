<?php require_once("session.php"); ?>
<?php require_once("functions.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="Description" content="SVCE ACM Blog">
	<meta name="author" content="imhphari">
	<link rel="icon" href="assets/brandlogo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <link rel="stylesheet" href="all.css">

    <title>Admin Dashboard</title>
  </head>
  <body>
    <div class="container-fluid">
	  <div class="row">
		  <div class="col-sm-2">
		  	<h1>Admin</h1>
			  
			  <ul id="side_menu" class="nav nav-pills flex-column">
  				<li class="nav-item">
    				<a class="nav-link active" href="dashboard.php">
						<span><img src="dash.svg">  </span> Dashboard</a>
  				</li>
				<li class="nav-item">
    				<a class="nav-link " href="#"><span><img src="baseline-list.svg"></span>&nbsp;Add New Post</a>
  				</li>
				 <li class="nav-item">
    				<a class="nav-link " href="categories.php"><span><img src="baseline-category-24px.svg"></span>&nbsp;Categories</a>
  				</li>
				 <li class="nav-item">
    				<a class="nav-link " href="#"><span><img src="baseline-supervised_user_circle-24px.svg"></span>&nbsp;Manage Admins</a>
  				</li>
				<li class="nav-item">
    				<a class="nav-link " href="#"><span><img src="baseline-add_comment-24px.svg"></span>&nbsp;Comments</a>
  				</li>
				 <li class="nav-item">
    				<a class="nav-link" href="#"><span><img src="baseline-equalizer-24px.svg"></span>&nbsp;Live Blog</a>
  				</li>
				<li class="nav-item">
    				<a class="nav-link" href="#"><span><img src="baseline-exit_to_app-24px.svg"></span>&nbsp;Sign Out</a>
  				</li>  
				 
				

			  </ul>
			 <!-- <ul id="side_menu" class="nav flex-column  nav-pills">
			  	<li class="active nav-item"><a href="dashboard.php">Dashboard</a></li>
				  <li><a href="#">Add New Post</a></li>
				  <li><a href="#">Categories</a></li>
				  <li><a href="#">Manage Admins</a></li>
				  <li><a href="#">Comments</a></li>
				  <li><a href="#">Live Blog</a></li>
				  <li><a href="#">Logout</a></li>
				  
			  
			  </ul>-->
			  </div><!--End of Side area-->
		  
		  <div class="col-sm-10">
			  
			  <h1>Admin Dashboard</h1>
			  <div><?php echo Message(); 
				         echo SuccessMessage();
				    ?></div>
			
			  
			  
			  
		  	<h4>About</h4>
			  <p>Lorem Ipsum</p>
			  
			  <h4>About</h4>
			  <p>Lorem Ipsum</p>
			  
			  <h4>About</h4>
			  <p>Lorem Ipsum</p>
			  
			  <h4>About</h4>
			  <p>Lorem Ipsum</p>
			  
			  <h4>About</h4>
			  <p>Lorem Ipsum</p>
			  
			  <h4>About</h4>
			  <p>Lorem Ipsum</p>
			  
			  <h4>About</h4>
			  <p>Lorem Ipsum</p>
			  
			  <h4>About</h4>
			  <p>Lorem Ipsum</p>
			  
			  <h4>About</h4>
			  <p>Lorem Ipsum</p>
			  
			  <h4>About</h4>
			  <p>Lorem Ipsum</p>
			
		  </div><!--Ending of main area-->
		
		</div>
	  </div>
	  
	  <div id="footer">
	  	<hr><p>SVCE-ACM 2018-2019 | All Rights Reserved</p>
	  </div>

    
  </body>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>