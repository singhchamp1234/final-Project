<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:index1.php');
}

include_once 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<?php  include 'links.php' ?> 
</head>
<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #002856;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<body>
<table>
<tr>
<th>Id</th>
<th>Comment</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "commentsection");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, comment FROM comments";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["comment"] . "</td><td>"
. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>


		<a href="logout.php" class="btn btn-danger">  Logout</a>




</body>
</html>
