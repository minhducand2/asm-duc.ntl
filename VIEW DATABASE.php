<!DOCTYPE html>
<html>
<head>
<style>
         
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>VIEW DATABASE</h2>
<form>
         <button type="submit" formaction="index.php">HOME</button>
</form>
<ul>
    <form name="ViewDatabase" action="ViewDatabase.php" method="POST" >
<li><strong>Commodity ID:</strong></li>  <li><input type="text" name="empid" /></li>
<li><strong>Full name:</strong></li>    <li><input type="text" name="empname" /></li>
<li><strong>Barcode</strong></li><li>    <input type="text" name="empemail" /></li>
<li><strong>Made in:</strong></li>    <li><input type="text" name="empphone" /></li>
<li><input type="submit" value="INSERT"></li>
</form>
</ul>
<?php
if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
        "host=ec2-54-83-192-245.compute-1.amazonaws.com;port=5432;user=vcujfzrpxvdtyx;password=6722ff5be8a5a94e3fb874bb728a7f177eacfb70f9317f010e37a7d1e00d9668;dbname=dfu22a679eqmoc",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  
if($pdo === false){
     echo "ERROR: Could not connect Database";
}
$sql = "INSERT INTO employee(empid, empname, empmail, empphone)"
        . " VALUES('$_POST[empid]','$_POST[empname]','$_POST[empemail]','$_POST[empphone]')";
$stmt = $pdo->prepare($sql);
//$stmt->execute();
 if (is_null($_POST[empid])) {
   echo "Employee must be not null";
 }
 else
 {
    if($stmt->execute() == TRUE){
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: ";
    }
 }
?>

<table>
  <tr>
    <th>Commodity ID</th>
    <th>Full name</th>
    <th>Barcode</th>
    <th>Made in</th>
  </tr>
  <tr>
    <td>1000</td>
    <td>moto car</td>
    <td>2011111</td>
    <td>China</td>
  </tr>
  <tr>
    <td>1001</td>
    <td>bike</td>
    <td>2011112</td>
    <td>China</td>
  </tr>
  <tr>
    <td>1002</td>
    <td>crane</td>
    <td>2011113</td>
    <td>China</td>
  </tr>
</table>

</body>
</html>
