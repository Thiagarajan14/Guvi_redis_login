<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  color: black;
  font-size: 25px;
  text-align: left;
}
th{
  background-color: blue;
  color: white;
  border: 1px solid;
}
tr td{
  border:1px solid;
}

</style>
</head>
<body>
<table>
<tr>
  <th>Name</th>
  <th>Email Address</th>
</tr>
<?php
  $conn = mysqli_connect("localhost", "root", "", "college");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT UName, email FROM registration";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["UName"]. "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
  } 
  else { 
    echo "0 results"; 
  }
  $conn->close();
?>
</table>
</body>
</html>