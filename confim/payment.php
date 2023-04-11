<?php
session_start();

$txtFormName = $_POST['txtFormName'];
$txtphone = $_POST['txtphone'];
$txtFormEmail = $_POST['txtFormEmail'];
$txttotal = $_POST['txttotal'];
$rdoBank = $_POST['rdoBank'];


if(empty($txtFormName)||empty($txtphone)||empty($txtFormEmail)||empty($txttotal)||empty($rdoBank)){
    $_SESSION['error'] = "กรุณากรอกข้อมูลให้ครบ";
    header('location: payment.php');
}else if($bank_direc == "Selected"){
    $_SESSION['error'] = "กรุณากรอกข้อมูลให้ครบ";
    header('location: payment.php');
}else {
    $_SESSION['txtFormName'] = $txtFormName; 
    $_SESSION['txtphone'] = $txtphone;
    $_SESSION['txtFormEmail'] = $txtFormEmail;
    $_SESSION['txttotal'] = $txttotal;
    $_SESSION['rdoBank'] = $rdoBank;


    header('location:../main/result.php');
}








?>
