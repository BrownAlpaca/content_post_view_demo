<?php
	include "includes/header.php";
	$pageTitle = 'index';
?>
<div class="jumbotron">
	<h1 class="text-dark text-center">Record your observations, 3PO!
</div>
<div class="container" style="margin-bottom:20px;">
		<?php
			include "includes/post_comment.php";
		?>
		<?php
			include "includes/view_comments.php";
		?>
</div>

<?php
	include "includes/footer.php";
?>	
