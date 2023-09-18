<center>

<h4>User List</h4>

<table border="1px solid">
	
	<tr>

		<th>S. no</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Address</th>

	</tr>

	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbnme = "Exam";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbnme);

	// Check connection
	if ($conn->connect_error) {
	  	die("Connection failed: " . $conn->connect_error);
	}

	// $fetch_data = "SELECT * FROM student where phone!='7011545505' order by id desc limit 2";
	$fetch_data = "SELECT * FROM student1 order by id desc ";
	$result_dta = $conn->query($fetch_data);
	$i=1;
	if ($result_dta->num_rows > 0) {
	  	// output data of each row
	  	while($row = $result_dta->fetch_assoc()) {

	?>
	<tr>
		<td><?=$i++?></td>
		<td><?=$row['name'];?></td>
		<td><?=$row['phone'];?></td>
		<td><?=$row['email'];?></td>
		<td><?=$row['address'];?></td>
	</tr>
	<?php } } else { echo "Data Not Available"; } ?>
</table>

</center>