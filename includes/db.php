<?php
	
	$debug = true;
	
	/*
	 * @file: db.php
	 * @author: Raghav V. Sampangi
	 * @year: 2019
	 * @desc: CSCI 2170 (Winter 2019): This is part of the task for A4.
	 */

	$db_host = "localhost";
	$db_username = "root";
	$db_password = "root";
	$db_name = "2170";

	$conn = new mysqli ($db_host, $db_username, $db_password, $db_name);

	if ($conn->connect_error) {
		die ("Error connecting to the DB.<br>" . $conn->connect_error);
	}
	/* For debug purposes only. This is otherwise not required. */
	else {
		if ($debug) {
			echo "Connected!";
		}
	}
	/*the following is to store date from the csv file into the database

	$handle = fopen("includes/users.csv", "r");
	$iter = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $users_fname=$data[1];
        $users_lname=$data[2];
        $users_phone=$data[4];
        $users_email=$data[3];
        $sql="INSERT INTO a4users (users_fname, users_lname, users_phone, users_email) VALUES('$users_fname','$users_lname','$users_phone','$users_email')";
        $login_pswd=password_hash($data[5],PASSWORD_DEFAULT);
        $login_uname=$data[0];
        $sql2="INSERT INTO a4login (login_user_id,login_uname,login_pswd) VALUES((SELECT users_id FROM a4users ORDER BY users_id LIMIT 1 OFFSET $iter),'$login_uname','$login_pswd')";
        if ($conn->query($sql) === TRUE) {
        } 
        if ($conn->query($sql2) === TRUE){
        }
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        } 

    	if($data[0] == $username && $data[5] == $password){
    		$success=true;
    		break;
    	}
    	$iter = $iter+1;
    }
    fclose($handle);
*/
?>