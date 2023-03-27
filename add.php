<html>
<head>
	<title>044 Arpapt</title>
</head>
<body>
	<h1>เพิ่มข้อมูลลูกค้า</h1>
	<form action="add.php" method="POST">

	  <input type="text" placeholder="patient ID" name="P_id"> 
	  <br> <br>
	  <input type="text" placeholder="Name" name="P_name">
	  <br> <br>
	  <input type="date" placeholder="Date of birth" name="P_DOB">
	  <br> <br>
	  <input type="float" placeholder="Dabt" name="P_dabt">
	  <br> <br>
	  
	  
	  <input type="submit">
	</form>
</body>
</html>

<?php
if (isset($_POST['P_id']) && isset($_POST['P_name'])):
    echo "<br>".$_POST['P_id'];
    require 'connect.php';

    $sql = "insert into patient 
							values (:P_id, :P_name, :P_DOB, :P_dabt )";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':P_id', $_POST['P_id']);
    $stmt->bindParam(':P_name', $_POST['P_name']);
    $stmt->bindParam(':P_DOB', $_POST['P_DOB']);
    $stmt->bindParam(':P_dabt', $_POST['P_dabt']);
    
  
    if ($stmt->execute()):
        $message = 'Suscessfully add new customer';
    else:
        $message = 'Fail to add new customer';
    endif;
    echo "<script type='text/javascript'>alert('$message');</script>";
	;

    $conn = null;
endif;
?>