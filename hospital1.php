<html> <head>
<title>044 Arpapt</title>
</head>
<body>

<?php
require "connect.php"; 
$sql = "SELECT P_id,P_name,P_DOB,P_dabt,P_Username FROM Patient,Permissions WHERE patient.P_id=permissions.P_CID";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

<table width="800" border="1">
  <tr>
  <th width="90"> <div align="center">P_id </div></th>
    <th width="140"> <div align="center">P_name</div></th>
    <th width="140"> <div align="center">P_DOB</div></th>
    <th width="120"> <div align="center">P_dabt </div></th>
    <th width="100"> <div align="center">P_Username </div></th>
  </tr>

 <!-- ไปทีละบรรทัด -->
<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>

  
    </td>
    <td><?php echo $result["P_id"]; ?></td>
	  <td><?php echo $result["P_name"]; ?></div></td>
    <td><?php echo $result["P_DOB"]; ?></td>
    <td><?php echo $result["P_dabt"]; ?></div></td>
    <td><?php echo $result["P_Username"]; ?></td>
    </tr>

<?php
  }
?>

</table>

<?php
$conn = null;
?>

</body>  </html>