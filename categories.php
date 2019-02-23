<?php require_once("db.php"); ?>
<?php require_once("session.php"); ?>
<?php require_once("functions.php"); ?>
<?php 
	if(isset($_POST["submit"])){
		$Category=$_POST["Category"];
		date_default_timezone_set("Asia/Kuching");
		$CurrentTime=time();
		$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
		$DateTime;
		$Admin="imhphari";
		if(empty($Category)){
			$_SESSION["ErrorMessage"]= "All fields must be filled out";
			echo Redirect_to("categories.php");
		}
		elseif(strlen($Category)>99){
			$_SESSION["ErrorMessage"]="Too long name for category";
			echo Redirect_to("categories.php");
		}
		else{
			global $link;
			$query="INSERT INTO category(dateandtime,name,creatorname) VALUES ('$DateTime','$Category','$Admin')";
			$exec=mysqli_query($link,$query);
			if($exec){
			$_SESSION["SuccessMessage"]="Category Added Successfully";
			echo Redirect_to("categories.php");				
			}
			else{
			$_SESSION["ErrorMessage"]="Category failed to add";
			echo Redirect_to("categories.php");
			}
		}
	}
?>

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
	<style>
		.fieldinfo{
			color:#026647;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
			font-size: 1.2em;
		}
	  
	  </style>  
	  
  </head>
  <body>
    <div class="container-fluid">
	  <div class="row">
		  <div class="col-sm-2">
		  	<h1>Admin</h1>
			  
			  <ul id="side_menu" class="nav nav-pills flex-column">
  				<li class="nav-item">
    				<a class="nav-link " href="dashboard.php">
						<span><img src="dash.svg">  </span> Dashboard</a>
  				</li>
				<li class="nav-item">
    				<a class="nav-link " href="newpost.php"><span><img src="baseline-list.svg"></span>&nbsp;Add New Post</a>
  				</li>
				 <li class="nav-item">
    				<a class="nav-link active " href="categories.php"><span><img src="baseline-category-24px.svg"></span>&nbsp;Categories</a>
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
			  <h1>Manage Categories</h1>
			  <?php echo Message(); 
				         echo SuccessMessage();
				    ?>
		  	<div>
				<form action="categories.php" method="post">
					<fieldset>
						<div class="form-group">
						
						<label for="categoryname"><span class="fieldinfo">Name :</span></label>
						<input class="form-control" type="text" name="Category" id="categoryname" placeholder="Name">
						</div><br>
						<input class="btn btn-primary btn-block" type="submit" name="submit" value="Add New Category">
					</fieldset><br>
				
				
				</form>
			  
			  
			  </div>
			  
			  <div class="table-responsive">
			  	<table class="table table-striped table-hover" >
				  <tr>
					  <th>S.No</th>
					  <th>Date & Time</th>
					  <th>Category</th>
					  <th>Creator</th>
					</tr>
				<?php
					global $link;
					$viewquery="SELECT * FROM category ORDER BY dateandtime desc";
					$exec=mysqli_query($link,$viewquery);
					$sno=0;
					while($DataRows=mysqli_fetch_array($exec)){
						$id=$DataRows["id"];
						$DateTime=$DataRows["dateandtime"];
						$Category=$DataRows["name"];
						$CreatorName=$DataRows["creatorname"];
						$sno++;
					?>	
					
					<tr>
						<td><?php echo $sno;?></td>
						<td><?php echo $DateTime;?></td>
						<td><?php echo $Category; ?></td>
						<td><?php echo $CreatorName;?></td>
					</tr>
					<?php
					}
					?>
				
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