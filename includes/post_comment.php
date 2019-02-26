<script src="js/myscript.js"></script>
<form action="index.php" method="post" id="p_comment" style="margin-bottom: 50px;">
	<h3>Type and save. You know the drill</h3>
	<h6 class="text-danger" id="hideP"></h6>
	<div class="form-group">
		<textarea required id="textarea" name="textarea" class="form-control" rows="5" maxlength="254" placeholder="Do not enter more than 254 characters"></textarea>
	</div>
	<button type="submit" class="btn btn-primary btn-lg" onclick="showtext()">Save</button>
    <button class="btn btn-danger btn-lg"  onclick="document.getElementById('p_comment').reset();">Clear</button>	
</form>     
<?php
	$user_name="C-3PO";
	if(!empty($_POST['textarea'])&& !ctype_space($_POST['textarea'])){
		$thought=$_POST['textarea'];
	}
	$time1=date("d F Y");
	if (!empty($thought)&&!ctype_space($thought)){
		$updateT="INSERT INTO mindfeed (m_name, m_date, m_thought) VALUES('$user_name','$time1','$thought')";
	

		if ($conn->query($updateT) === TRUE) {
		} 
		else {
	    echo "Error: " . $updateT . "<br>" . $conn->error;
		}
	}

?>

