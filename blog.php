<?php require_once("db.php"); ?>
<?php require_once("session.php"); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | SVCE-ACM Blog</title>
<!-- Contains all the dependencies listed (local or CDN) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Exo+2:400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:700|Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>
<style>
body, html {
    overflow-x: hidden;
}
a {
	color: rgb(1, 130, 172);
}
a:hover {
	color: rgb(9, 53, 122);
}
#main-container {
    /*margin-top: 80px;*/
    padding: 80px;
}
.feed-title {
	font-family: 'Montserrat', sans-serif;
	margin-bottom: 40px;
}
.card {
    margin: 20px auto;
    border-color: rgba(0,0,0,0.2);
}
.card-title {
	font-family: 'Playfair Display', sans-serif;
}
.card-excerpt {
	color: #777;
}

.post-link:hover {
    color: rgba(1, 130, 172, 0.8);
    text-decoration: none;
}
.post-info {
	font-style: italic;
    padding-top: 15px;
}
.card-img-top {
    /*object-fit: cover;*/
    max-width: 100%;
    /*max-height: 200px;*/
}
#sidebar {
	padding-top: 90px;	
}
#sidebar_inner {
    display: flex;
    flex-direction: column;
    align-items: center;
}

@media screen and (min-width: 1024px) {
    .post-details {
        max-height: 12em;
        overflow: hidden;
    }
}
@media screen and (max-width: 1200px) {
	#sidebar_inner {
		flex-direction: row;
        justify-content: space-around;
	}
    #ad {
        margin-top: auto !important;
    }
    #main-container {
        padding: 30px;
        padding-top: 80px;
    }
    #sidebar {
        padding: 40px;
    }
    .card-excerpt {
        height: 4.5em;
        overflow: hidden;
    }
}

@media screen and (max-width: 600px) {
    #main-container {
        padding: 10px;
        padding-top: 80px;
    }
    #sidebar {
        padding: 20px 30px;
    }
    #sidebar_inner {
        flex-direction: column;
        justify-content: space-around;
    }
    #ad {
        margin-top: 40px !important;
    }
}


</style>

<body>
    <!-- navid is a custom variable that should be specified in the pages. It is used to highlight the active page in the navbar -->
    <!-- Navbar which will be present at the top of all pages.-->
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
    <div id="main-container" class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-1">              
                <div class="row">
                    <!-- Putting the latest post at the top -->
                    <div class="col-md-12">
						<?php
						global $link;
						if(isset($_GET["searchb"])){
							$search=$_GET["search"];
							$viewquery="SELECT * FROM admin_panel WHERE dateandtime LIKE '%$search%' OR title LIKE '%$search%' OR category LIKE '%$search%' OR post LIKE '%$search%' ";
						}
						else{
						$viewquery="SELECT * FROM admin_panel ORDER BY dateandtime desc";}
						$exec=mysqli_query($link,$viewquery);
						while($DataRows=mysqli_fetch_array($exec)){
							$postid=$DataRows["id"];
							$DateTime=$DataRows["dateandtime"];
							$title=$DataRows["title"];
							$category=$DataRows["category"];
							$admin=$DataRows["author"];
							$image=$DataRows["image"];
							$post=$DataRows["post"];
						
						
						?>
                        <div class="card">
                                <a href=/acmblog/w><img class="img-fluid rounded" src="img/<?php echo $image; ?>" alt="" class="card-img-top"></a>
                                <div class="card-body">
                                    <div class="post-details">
                                        <a class="post-link" href=><h2 class="card-title"><?php echo htmlentities($title); ?></h2>
										</a>
										
                                        <p class="card-excerpt"><?php 
											if(strlen($post)>150){$post=substr($post,0,150);}
											echo $post; ?></p>
                                    </div><!-- .post-details -->
									
                                    <p class="post-info text-right">Category:<?php echo htmlentities($category); ?> <span class="post-date">Published At <?php echo htmlentities($DateTime); ?></span> by <span class="post-author"><?php echo htmlentities($admin); ?></span></p>
									<?php } ?>
									<!-- .post-date -->
                                    <!-- .post-author -->
                                </div> <!-- card-body -->
                            </div> <!-- card -->
                    </div><!-- .col-lg-12 -->
                    <!-- Putting the remaining post in a two-col layout -->
                    
                        
                    
                        
                            <div class="col-md-6">
                                <div class="card">
                                        <a href=/acmblog/x><img src="https://cdn-images-1.medium.com/max/1100/1*wPs5_lAqG8qPpxjzdVR4ng.jpeg" alt="" class="card-img-top"></a>
                                        <div class="card-body">
                                            <div class="post-details">
                                                <a class="post-link" href=/acmblog/x><h2 class="card-title">Welcome to Jekyll! Lorem ipsum dolor sit amet, consectetur adipisicing.</h2></a>
                                                <p class="card-excerpt">Blah find this post in your _posts directory. Go ahead and edit it and re-build the site to see your changes. You can rebuild the site in many different ways, but the most common way is to run jekyll serve, which launches a web server and auto-regenerates your site when a file is updated. To add new posts, simply add a file in the _posts directory that follows the convention YYYY-MM-DD-name-of-post.ext and includes the necessary front matter. Take a look at the source for this post to get an idea about how it works. Jekyll also offers powerful support for...</p>
                                            </div><!-- .post-details -->
                                            <p class="post-info text-right"><span class="post-date">At 6:37 PM, 5 Feb</span> by <span class="post-author">Tyler</span></p><!-- .post-date -->
                                            <!-- .post-author -->
                                        </div> <!-- card-body -->
                                    </div> <!-- card -->
                            </div><!-- .col-lg-6 -->
                        
                    
                        
                            <div class="col-md-6">
                                <div class="card">
                                        <a href=/acmblog/y><img src="https://cdn-images-1.medium.com/max/1100/1*wPs5_lAqG8qPpxjzdVR4ng.jpeg" alt="" class="card-img-top"></a>
                                        <div class="card-body">
                                            <div class="post-details">
                                                <a class="post-link" href=/acmblog/y><h2 class="card-title">Welcome to custom post</h2></a>
                                                <p class="card-excerpt">You’ll find this post in your _posts directory. Go ahead and edit it and re-build the site to see your changes. You can rebuild the site in many different ways, but the most common way is to run jekyll serve, which launches a web server and auto-regenerates your site when a file is updated. To add new posts, simply add a file in the _posts directory that follows the convention YYYY-MM-DD-name-of-post.ext and includes the necessary front matter. Take a look at the source for this post to get an idea about how it works. Jekyll also offers powerful support for...</p>
                                            </div><!-- .post-details -->
                                            <p class="post-info text-right"><span class="post-date">At 6:37 PM, 4 Feb</span> by <span class="post-author">Yuvaraj</span></p><!-- .post-date -->
                                            <!-- .post-author -->
                                        </div> <!-- card-body -->
                                    </div> <!-- card -->
                            </div><!-- .col-lg-6 -->
                        
                    
                        
                            <div class="col-md-6">
                                <div class="card">
                                        <a href=/acmblog/z><img src="https://cdn-images-1.medium.com/max/1100/1*wPs5_lAqG8qPpxjzdVR4ng.jpeg" alt="" class="card-img-top"></a>
                                        <div class="card-body">
                                            <div class="post-details">
                                                <a class="post-link" href=/acmblog/z><h2 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</h2></a>
                                                <p class="card-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam nam reprehenderit, ullam quas repellendus doloremque incidunt dolor magnam sint! Eos, veritatis quod nostrum optio velit illo atque quisquam labore, vitae. Quasi, et soluta maiores ea alias sed quibusdam placeat illum quae nostrum, sequi sit repellendus, temporibus rem. Exercitationem, illo, vitae! To add new posts, simply add a file in the _posts directory that follows the convention YYYY-MM-DD-name-of-post.ext and includes the necessary front matter. Take a look at the source for this post to get an idea about how it works. Jekyll also offers powerful support for code snippets: def print_hi(name)...</p>
                                            </div><!-- .post-details -->
                                            <p class="post-info text-right"><span class="post-date">At 6:37 PM, 3 Feb</span> by <span class="post-author">Yuvaraj</span></p><!-- .post-date -->
                                            <!-- .post-author -->
                                        </div> <!-- card-body -->
                                    </div> <!-- card -->
                            </div><!-- .col-lg-6 -->
                        
                    
                </div><!-- .row -->
            </div>
            <div id="sidebar" class="col-xl-3">
                <!-- Sidebar for larger screens (>1024px) which will contain popular articles and ads -->
<div id="sidebar_inner">
    <div id="popular-articles">
        <h3 class="sidebar-title">Popular Articles</h3><!-- .sidebar-title -->
        <ul class="list-group" style="list-style-type:none;">
            <div class="borderless">
                <li><a href="#">Article #1</a></li>
                <li><a href="#">Article #2</a></li>
                <li><a href="#">Article #3</a></li>
                <li><a href="#">Article #4</a></li>
                <li><a href="#">Article #5</a></li>
                <div>
        </ul>
    </div><!-- #popular-articles -->
    <!----ads section --------->
    <div id="ad">
        <ul class="list-group" style="list-style-type:none;">
            <div class="borderless">
                <img src="http://videoadnews.com/wp-content/uploads/2018/03/mcdonalds.jpg" class="img-fluid" alt="Responsive image">
            <div>
        </ul>
    </div><!-- #ad -->
</div><!-- #sidebar_inner -->

<style>
	#ad {
		margin-top: 15vh;
	}
</style>
            </div><!-- #sidebar.col-md-3 -->
        </div><!-- .row -->
    </div> <!-- container -->
    <!-- Footer of the site which will be present in all the pages -->
<style>
	#footer {
		background: #111;
		color: #ccc;
	}
	
	#footer .container {
		padding: 30px;
	}
	form * {
		border-radius: 3px;
		max-width: 100%;
	}
	.submit {
		background: rgb(1, 130, 172);
		cursor: pointer;
		border: none;
		color: white;
		padding: 3px;
	}
	#left-footer {
		border-right: 3px solid #333;
		display: flex;
		flex-direction: column;
		justify-content: space-around;
	}
	#newsletter {
		display: flex;		
	    flex-direction: column;
		margin: 15px auto 30px;
	}
	#newsletter h2 {
		margin-bottom: 15px;
	}
	#social-buttons {
		display: flex;
	    justify-content: space-evenly;
	    max-width: 60%;
	    margin-bottom: 30px;
	}
	#social-buttons a {
		text-decoration: none;
		color: rgb(1, 130, 172);
	}

	.main-site-link {
		text-decoration: underline;
		font-size: 1.3em;
		color: #555;
	}
	.main-site-link:hover {
		color: rgb(1, 130, 172);
	}
    .list-inline-item {
		border-color: #111;
	    border-radius: 50%;
	    background: #222;
	    width: 55px;
	    height: 55px;
	    display: inline-flex;
	    justify-content: center;
	    align-items: center;
	}

	.contact-item {
		display: flex;
		margin: 0 auto 5px;
		color: rgb(1, 130, 172);
		/*align-items: baseline;*/
		/*justify-content: */
	}

	.contact-address {
		margin-left: 10px;
		font-size: 1.3em;
	}

	.contact-address a {
		color: #999;
		text-decoration: none;
	}

	#feedback {
		margin-top: 20px;
	}
	#contact-form * {
		margin-bottom: 10px;
	}

	.footer-title {
		font-family: 'Montserrat', sans-serif;
	}

	#main-site-link-sm {
		display: none;
	}

	@media screen and (max-width: 1024px) {
		#social-buttons {
			max-width: 90%;
		}

	}
	@media screen and (max-width: 768px) {
		#main-site-link-lg {
			display: none;
		}
		#main-site-link-sm {
			display: block;
		}
		#left-footer {
			border-right: none;
		}		
	}

</style>
<footer id="footer">
	<div class="container">
	    <div class="row">
	        <div id="left-footer" class="col-md-6">
	            <div id="newsletter">
	                <h2 class="footer-title">Subscribe to our newsletter</h2>
	                <form id="newsletter-sub" action="#">
	                    <input type="email" placeholder="Enter your email" required>
	                    <button class="submit" type="submit">Subscribe</button>
	                </form>
	            </div><!-- #newsletter -->
	            <div id="social-buttons">
	                <a href="https://www.facebook.com/SVCEACM/">
						<div class="list-inline-item">
							<i class="fab fa-facebook-f fa-fw fa-2x"></i>
						</div><!-- .list-inline-item -->
					</a>
	                <a href="https://twitter.com/acm_svce">
						<div class="list-inline-item">
							<i class="fab fa-twitter fa-fw fa-2x"></i>
						</div><!-- .list-inline-item -->
					</a>
	     	    	<a href="https://www.instagram.com/svceacm/">
						<div class="list-inline-item">
							<i class="fab fa-instagram fa-fw fa-2x"></i>
						</div><!-- .list-inline-item -->
					</a>
	                <a href="https://github.com/SVCE-ACM">
						<div class="list-inline-item">
							<i class="fab fa-github fa-fw fa-2x"></i>
						</div><!-- .list-inline-item -->
					</a>
	            </div><!-- #social-buttons -->
	            <a href="http://svce.acm.org/" class="main-site-link" id="main-site-link-lg"><h4>Back to main site</h4></a>
	        </div><!-- .col-md-6 -->
	        <div class="col-md-6">
	            <div id="contact-info">
	            	<h2 class="footer-title">Contact Us</h2><!-- .text-center -->
	            	<div id="email" class="contact-item">
	            		<i class="fas fa-envelope fa-2x fa-fw"></i>
	            		<span id="email-id" class="contact-address"><a href="mailto:acm.svcecse@gmail.com">acm.svcecse@gmail.com</a></span>
	            	</div>
	            </div><!-- #contact -->
	            <div id="feedback">
	            	<h2 class="footer-title">Have any feedback?</h2>
	            	<form id="contact-form" action="#">
	            		<input type="text" name="name" placeholder="Your name"><br>
	            		<textarea name="feedback-text" cols="40" rows="4" placeholder="Enter your feedback"></textarea><br>
	            		<button class="submit" type="submit">Submit</button>
	            	</form>
	            </div><!-- #contact-form -->
	            <a href="http://svce.acm.org/" class="main-site-link" id="main-site-link-sm"><h4>Back to main site</h4></a>

	        </div><!-- .col-md-6 -->
	    </div><!-- .row -->
	</div><!-- .container -->
</footer><!-- #footer -->
</body>

</html>
<!-- <p></p> -->
<!-- Template for a blog feed -->