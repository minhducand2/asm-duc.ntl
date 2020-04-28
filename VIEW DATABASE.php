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
