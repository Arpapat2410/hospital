<html> <head>
<title>044-Arpapat</title>
</head>
<body>

<?php
    if (isset($_GET["P_id"])) 
    {
        $strP_id = $_GET["P_id"];
    }
    require "connect.php";
    $sql = "SELECT * FROM Patient,Permissions WHERE patient.P_id=permissions.P_CID = ?";
    $params = array($strP_id);
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<table width="300" border="1">
  <tr>
    <th width="325">รหัสลูกค้าสมาชิก</th>
    <td width="240"><?php echo $result["P_id"]; ?></td>
  </tr>

  <tr>
    <th width="130">ชื่อ</th>
    <td><?php echo $result["P_name"]; ?></td>
    </tr>
  <tr>
    <th width="130">P_DOB</th>
    <td><?php echo $result["P_DOB"]; ?></td>
  </tr>

  <tr>
    <th width="130">P_dabt</th>
    <td><?php echo $result["P_dabt"]; ?></td>
  </tr>

  <tr>
    <th width="130">P_Username</th>
    <td><?php echo $result["P_Username"]; ?></td>
  </tr>

 
  </table>
<?php
$conn = null;
?>
</body>
</html>
