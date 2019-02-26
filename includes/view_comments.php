<h4>C-3PO's historical ramblings</h4>
		<?php 
			$date="SELECT m_name, m_date, m_thought FROM mindfeed ORDER BY m_id DESC";
			$result = $conn->query($date);

			if ($result->num_rows > 0) {
    		// output data of each row
    			while($row = $result->fetch_assoc()) {
        			echo '<div class="card"><div class="card-body"><img src="img/user.jpg" width="70" height="70" class="rounded-circle float-left" alt="user"><h6>'.$row["m_name"].'</h6><p class="text-dark">'.$row["m_date"].'</p><p class="text-dark">'.$row["m_thought"]."</p></div></div>";

        			/*"<div class='card'>
        					<div class='card-body'><
        						img src='img/user.jpg' width='70' height='70' class='rounded-circle float-left' alt='user'>
									<h7>". $row["m_name"]. "</h7>
									<p class='text-dark'>".$row["m_date"]."</p>
									<p class='text-dark'>".$row["m_thought"]."</p></div></div>";*/
    			}
			}
			else{
				echo "0 results";
			}
		?>	
