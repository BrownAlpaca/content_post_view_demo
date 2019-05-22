<?php 

	require "includes/db.php";
	require "includes/functions.php"; 

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo getWebsiteName(); ?></title>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS -->
		<!-- Used from https://www.getbootstrap.com, 29 January 2019 -->
		<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<!-- Custom CSS styles -->
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>

		<header>
			<div class="container">
				<?php 
					if($_SESSION["status"]=="login"){
						      echo '<nav class="navbar navbar-dark bg-dark">
										<a class="navbar-brand" href="index.php">'.getWebsiteName().'</a>
										<ul class="navbar-nav mr-auto">
											<li class="nav-item">
												<a class="nav-link" href="theforce.php">The Force</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="r2d2.php">feedback</span></a>
											</li>	
									      	<li class="nav-item dropdown">
			                              		<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">'
			                              		.$_SESSION["username"].'                           
			                             		</a>
			                              	<div class="dropdown-menu">
			                                	<a class="dropdown-item" href="includes/logout.php">logout</a>
			                              	</div>
			                            	</li>
			                            </ul>
			                        </nav>    ';
					}
					else{
						echo '<nav class="navbar navbar-dark bg-dark">
										<a class="navbar-brand" href="index.php">'.getWebsiteName().'</a>
										<ul class="navbar-nav mr-auto">
											<li class="nav-item">
													<a class="nav-link" href="theforce.php">The Force</span></a>
											</li>
				                            
				                            <li class="nav-item">
													<a class="nav-link" href="r2d2.php">feedback</span></a>
											</li>
										</ul>
			                        </nav>    ';
					}
				?>


					<!-- jQuery and Bootstrap JavaScript links -->
					<!-- Used from https://www.getbootstrap.com, 29 Januay=ry 2019 -->
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
			</div>

			<div class="container">
				<div class="jumbotron">
					<h1 class="display-3 text-center">Record your observations</h1>
				</div>
			</div>
		</header>

