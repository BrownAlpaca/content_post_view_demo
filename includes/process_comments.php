<?php
session_start();
/*code cited from https://www.w3schools.com/js/js_ajax_intro.asp*/
	$thought_error = false;
	$error_message = "";

	if (isset($_GET['p'])) {
		$mindfeed_name = $_SESSION["username2"];
		$mindfeed_date = date("j F Y");
		$mindfeed_thought = $_GET['p'];
		require_once "db.php";
		if ($mindfeed_thought != "") {

			$sql = "INSERT INTO `2170`.`mindfeed`(m_name, m_date, m_thought) VALUES ('{$mindfeed_name}', '{$mindfeed_date}', '{$mindfeed_thought}')";
			$submit_thought_result = $conn->query($sql);

			if ($submit_thought_result === true) {
				//header("Location: index.php");
				//die();
			}
			else {
				$error_message = "Sorry, there is an error submitting your thought: " . $sql . "<br>" . $conn->error;
			}
		}
		else {
			$thought_error = true;
			$error_message = "Your thought cannot be empty, 3PO! You know better.";
		}
	}

?>