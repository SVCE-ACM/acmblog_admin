<?php require_once("session.php"); ?>
<?php require_once("functions.php"); ?>
<?php require_once("db.php"); ?>
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
	  <link href="https://fonts.googleapis.com/css?family=Exo+2:400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:700|Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700" rel="stylesheet">

    <title>Admin Dashboard</title>
  </head>
  <body>
	  <style>#mainNav{background-color:white;}#mainNav .navbar-toggler{font-size:12px;right:0;padding:13px;text-transform:uppercase;color:white;border:0;background-color:#0182AC;font-family:'Exo 2',sans-serif}#mainNav .navbar-brand{padding:0!important}#mainNav .navbar-brand img{height:50px}#mainNav .navbar-nav .nav-item .nav-link{font-size:1em;font-weight:600;padding:.75em 0;letter-spacing:1px;color:black;font-family:'Exo 2',sans-serif}#mainNav .navbar-nav .nav-item .nav-link.active,#mainNav .navbar-nav .nav-item .nav-link:hover{color:#0182AC}@media (min-width:992px){#mainNav{padding-top:25px;padding-bottom:25px;-webkit-transition:padding-top 0.3s,padding-bottom 0.3s;-moz-transition:padding-top 0.3s,padding-bottom 0.3s;transition:padding-top 0.3s,padding-bottom 0.3s;border:none;background-color:transparent}#mainNav .navbar-brand{font-size:1.75em;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s}#mainNav .navbar-nav .nav-item .nav-link{padding:1.1em 1em!important}#mainNav.navbar-shrink{padding-top:0;padding-bottom:0;background-color:white}#mainNav.navbar-shrink .navbar-brand{font-size:1.25em}#mainNav .container{padding:10px;}}</style>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink animated fadeInDown" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src=/acmblog/assets/brandlogo.png></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a id="home-link" class="nav-link" href=/acmblog/>Home</a>
                </li>
                <li class="nav-item">
                    <a id="student-affairs-link" class="nav-link" href="#">Student Affairs</a>
                </li>
                <li class="nav-item">
                    <a id="professors-corner-link" class="nav-link" href="#">Professors' Corner</a>
                </li>
                <li class="nav-item active">
                    <a id="alumni-link" class="nav-link" href="#">Alumni</a>
                </li>
                <li class="nav-item">
                    <a id="about-link" class="nav-link" href=/acmblog/about>About</a>
                </li>
            </ul>
			<form action="blog.php" class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" name="search" placeholder="Search">
				</div>
					<button class="btn btn-default" name="searchb">Go</button>
			</form>
        </div>
    </div>
</nav>
<!-- #nav -->
<script>
    $("#home-link").addClass('active');
    $("#home-link").removeAttr("href");
</script>
	  <br><br><br><br>
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
			  <div><?php echo Message(); 
				         echo SuccessMessage();
				    ?></div>
			  <h1>Admin Dashboard</h1>
			  <div class="table-responsive">
				  <table class="table table-striped table-hover" >
				  	<tr>
					  	<th>S.No</th>
						<th>Post Title</th>
						<th>Date & Time</th>
						<th>Author</th>
						<th>Category</th>
						<th>Banner</th>
						<th>Comments</th>
						<th>Actions</th>
						<th>Details</th>
					  </tr>
					<?php 
					  $link;
					  $viewquery="SELECT * FROM admin_panel ORDER BY dateandtime desc;";
					  $exec=mysqli_query($link,$viewquery);
					  $sno=0;
					  while($DataRows=mysqli_fetch_array($exec)){
						  $id=$DataRows["id"];
						  $DateTime=$DataRows["dateandtime"];
						  $title=$DataRows["title"];
						  $category=$DataRows["category"];
						  $Admin=$DataRows["author"];
						  $image=$DataRows["image"];
						  $post=$DataRows["post"];
						  $sno++;
					  
					  ?>
					  
					  <tr>
					  	<td><?php echo $sno; ?></td>
						<td><?php 
						  if(strlen($title>20)){$title=substr($title,0,20).'..';}
						  echo $title; ?></td>
						<td><?php echo $DateTime; ?></td>
						<td><?php echo $Admin; ?></td>
						<td><?php echo $category; ?></td>
						<td><img src="img/<?php echo $image; ?>" width="200px"; height="40px"></td>
						<td>Processing</td>
						<td>
							<a href="editpost.php?edit=<?php echo $id; ?>">
								<span class="btn btn-primary">Edit</span></a> 
							<a href="deletepost.php?delete=<?php echo $id; ?>">
								<span class="btn btn-danger">Delete</span>
							</a> 
						  </td>
						<td><a href="fullpost.php?id=<?php echo $id; ?>" target="_blank"><span class="btn btn-primary">Live Preview</span>
							</a>
							</td>
					  </tr>
					  
					  <?php  } ?>
				  </table>			  
			  
			  </div>
			
			  
			  
			  
		  	
			
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