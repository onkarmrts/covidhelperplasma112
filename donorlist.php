<!DOCTYPE html>
<html>
<head>
<title>Donors-List</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: rgba(104,204,152,1);
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Donors name</th>
<th>Address</th>
<th>email</th>
<th>number</th>
<th>BloodGroup</th>
<th>gender</th>
<th>date</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "plasmadetails");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, Address, user_email, number, BloodGroup, gender, date   FROM donor";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["Address"] . "</td><td>" . $row["user_email"] . "</td><td>" . $row["number"] . "</td><td>" . $row["BloodGroup"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["date"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>