<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
        $EMAIL = $_REQUEST['emailid'];
		$conn = mysqli_connect("localhost", "root", "", $EMAIL);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$medi_name = $_REQUEST['medi_name'];
		$dosage = $_REQUEST['dosage'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO medicines VALUES ('$medi_name',$dosage,
			)";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$medi_name\n $dosage\n\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
