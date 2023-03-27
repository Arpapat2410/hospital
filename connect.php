  
<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "Arpapat46";
$dbname = "hospital";
 
try
{
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname;charset=UTF8",
        $userName, $userPassword);
  
    if ($conn) {
        echo "You are now connecting to database!!!";
    }
} catch (PDOException $e) {
    echo "Sorry! You cannot connect to database";
}

?>
