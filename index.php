<?php 
	session_start();
	include "includes/header.php"; 
?>
	<main class="container">
	   <div class="row">	
		<div class="col-4">
			
			<form action=<?php $path="login.php"; echo basename($path);?> method="post" class="bg-light" id="log" style="margin-top: 10px; padding:10px;">		


		  		<?php
					if($_GET['loginError']=="1"){
						echo '<div class="form-group">
		  						<label for="usr">Username:</label>
		  						<input type="text" name="username" class="form-control" id="usr">
							</div>
		  					<div class="form-group">
		   						<label for="pwd">Password:</label>
		    					<input type="password" name="password" class="form-control" id="pwd">
		  					</div>
		  		 			
		  					<button type="submit" class="btn btn-primary">log in</button>
							<h6 class="text-danger">*wrong password or username</h6>';
					}
					else if($_SESSION["status"]=="login"){
						date_default_timezone_set('North America/Halifax');						
						echo "Welcome to my site! You are logged in";
						
					}
					else{
						echo '<div class="form-group">
		  						<label for="usr">Username:</label>
		  						<input type="text" name="username" class="form-control" id="usr">
							</div>
		  					<div class="form-group">
		   						<label for="pwd">Password:</label>
		    					<input type="password" name="password" class="form-control" id="pwd">
		  					</div>
		  		 			<input class="btn btn-danger" type="button" value="Clear" onclick="document.getElementById(log).reset();">
		  					<button type="submit" class="btn btn-primary">log in</button>';	
					}

				?>
				
			</form>
		</div>
		
			<?php 
				if($_SESSION["status"]=="login"){
				echo '
					<div class="col-8">	
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod, elit sed euismod tempor, enim elit lacinia lectus, ac gravida lectus justo ut lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut massa pulvinar, lobortis nisi eget, malesuada nisi. Etiam vitae tortor ligula. Aliquam erat volutpat. Sed ac pellentesque nisi, nec lobortis nisi. Vestibulum id turpis aliquam erat rutrum efficitur. Curabitur aliquam rutrum tempus. Fusce auctor, risus at porttitor lobortis, quam libero dapibus turpis, quis consectetur tellus risus et magna. Aliquam nec vestibulum velit. Nulla varius eget velit finibus vestibulum. Nam bibendum magna et sem lobortis luctus. Donec vel lorem varius mauris pretium tempor. Ut luctus, libero sed viverra eleifend, lorem ex laoreet nibh, vitae bibendum felis lectus sit amet diam. Suspendisse maximus elementum dolor eget consectetur. Sed lobortis malesuada sem, a ultricies sem dictum sit amet.</p>

					<p>Etiam aliquet elit nec tristique sagittis. Donec id lectus eu arcu sollicitudin venenatis. Nam auctor suscipit convallis. Etiam tristique leo nisl, id tincidunt nibh rutrum at. Curabitur elementum odio et sem mattis egestas. Nulla facilisi. Proin condimentum, nisl vitae mollis vulputate, leo tortor pharetra justo, a scelerisque tortor leo sollicitudin enim. Pellentesque ut consectetur nisl, quis eleifend ligula. In feugiat, quam eu imperdiet vehicula, enim ipsum ultrices enim, quis condimentum ligula enim eu est. Aliquam vel est vehicula, imperdiet nunc sed, blandit neque.</p>
					</div>
				</div>	
					';

			}	
			?>
		
	</main>
<?php include "includes/footer.php"; ?>