<?php
$db_host = 'localhost'; // Server Name
$db_user = 'stude120_admin'; // Username
$db_pass = 'admin'; // Password
$db_name = 'stude120_SENGGroup'; // Database Name

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$returnFirstName = $connection->real_escape_string($_POST['returnFirstName']);
$returnLastName = $connection->real_escape_string($_POST['returnLastName']);
$returnDob = $connection->real_escape_string($_POST['returnDob']);


if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}



$sql = ("SELECT * FROM student_output WHERE firstName = '$returnFirstName' AND lastName = '$returnLastName' AND birthDate = '$returnDob'");
		
$query = mysqli_query($connection, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($connection));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 12px;
			min-width: 300px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #832e75;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: left;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Personalized Schedule</h1>
	<table class="data-table">
	
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>DOB</th>
				<th>Session 1 Start</th>
				<th>Session 1 End</th>
				<th>Session 1 Dept</th>
				<th>Session 1 Room No</th>
				<th>Session 1 Building Name</th>
				<th>Session 2 Start</th>
				<th>Session 2 End</th>
				<th>Session 2 Dept</th>
				<th>Session 2 Room No</th>
				<th>Session 2 Building Name</th>
				<th>Session 3 Start</th>
				<th>Session 3 End</th>
				<th>Session 3 Dept</th>
				<th>Session 3 Room No</th>
				<th>Session 3 Building Name</th>
				<th>Session 4 Start</th>
				<th>Session 4 End</th>
				<th>Session 4 Dept</th>
				<th>Session 4 Room No</th>
				<th>Session 4 Building Name</th>
				<th>Session 5 Start</th>
				<th>Session 5 End</th>
				<th>Session 5 Dept</th>
				<th>Session 5 Room No</th>
				<th>Session 5 Building Name</th>
				<th>Student ID</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['firstName'].'</td>
					<td>'.$row['lastName'].'</td>
					<td>'.$row['birthDate'].'</td>
					<td>'.$row['session1_TimeStart'].'</td>
					<td>'.$row['session1_TimeEnd'].'</td>
					<td>'.$row['session1_DeptName'].'</td>
					<td>'.$row['session1_RoomName'].'</td>
					<td>'.$row['session1_BuildingName'].'</td>
					<td>'.$row['session2_TimeStart'].'</td>
					<td>'.$row['session2_TimeEnd'].'</td>
					<td>'.$row['session2_DeptName'].'</td>
					<td>'.$row['session2_RoomName'].'</td>
					<td>'.$row['session2_BuildingName'].'</td>
					<td>'.$row['session3_TimeStart'].'</td>
					<td>'.$row['session3_TimeEnd'].'</td>
					<td>'.$row['session3_DeptName'].'</td>
					<td>'.$row['session3_RoomName'].'</td>
					<td>'.$row['session3_BuildingName'].'</td>
					<td>'.$row['session4_TimeStart'].'</td>
					<td>'.$row['session4_TimeEnd'].'</td>
					<td>'.$row['session4_DeptName'].'</td>
					<td>'.$row['session4_RoomName'].'</td>
					<td>'.$row['session4_BuildingName'].'</td>
					<td>'.$row['session5_TimeStart'].'</td>
					<td>'.$row['session5_TimeEnd'].'</td>
					<td>'.$row['session5_DeptName'].'</td>
					<td>'.$row['session5_RoomName'].'</td>
					<td>'.$row['session5_BuildingName'].'</td>	
					<td>'.$row['StudentID'].'</td>
				</tr>';
		}?>
		</tbody>
		<tfoot>
		
		</tfoot>
	</table>
</body>
</html>