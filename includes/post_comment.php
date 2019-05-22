<script>
	/*code cited from https://www.w3schools.com/js/js_ajax_intro.asp*/
function postcomment(str) {
  var xhttp; 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    }
  };
  xhttp.open("GET", "includes/process_comments.php?p="+str, true);
  xhttp.send();
}
</script>

			<!-- Comment form -->
			<div class="py-5">
				<form class="form-signin" action="/A4-task/theforce.php" method="post" id="commentform">
					<h3 class="h4 mb-3 font-weight-normal">Type and save. You know the drill.</h3>
					<?php
						if ($thought_error === true) {
							echo "<p class='text-danger'>$error_message</p>";
						}
					?>
					<textarea class="form-control" id="c3polog" name="thought" rows="3" maxlength="254" placeholder="Do not enter more than 254 characters!" required></textarea>
					<div class="mx-auto py-4">
						<button class="btn btn-lg btn-primary w-25 right" type="submit" name="submitThought" onclick="postcomment(document.getElementById('c3polog').value)">Save</button>
						<button class="btn btn-lg btn-warning w-25" type="reset">Clear</button>
					</div>
				</form>
			</div>