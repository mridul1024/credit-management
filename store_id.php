<?php
include_once('connect.php');

$credit = $_GET['credit-transfer-field'];
$fromid = $_GET['creditfrom'];
$toid = $_GET['creditto'];

$check = "SELECT * FROM user WHERE id= $fromid";
$result = $conn->query($check);
$row = $result->fetch_assoc();
$sub = $row['credit'] - $credit;

if($sub < 0){
    header("Location:/insufficient_credits.html");
    exit;
}

else{

$sql_increase = "UPDATE user SET credit= credit + $credit WHERE id= $toid";
$sql_decrease = "UPDATE user SET credit= credit - $credit WHERE id= $fromid";

$insert_transaction = "INSERT INTO transfer (transfer_from, transfer_to, credit_amount) VALUES($fromid, $toid, $credit)";

$conn->query($sql_increase);
$conn->query($sql_decrease);
$conn->query($insert_transaction);

header("Location:/users.php");

}

?>
