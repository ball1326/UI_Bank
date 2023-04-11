<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
    <title>Banking</title>
</head>

<body>
<form>
        <div div class="head">
            <h2>รายการที่ชำระ</h2>
            <p>ชำระเงินโดยธนาคารข้างต้น <a href="../main/Banking.php">Mobile Banking</a></p>
        </div>
        <div class="form-group">
            <p>บัญชีปลายทาง : <?= $_SESSION['rdoBank']?></p>
                    <p>ชื่อ-นามสกุล : <?= $_SESSION['txtFormName']?></p>
                    <p>เบอร์โทรศัพท์ : <?= $_SESSION['txtphone']?></p>
                    <p>จำนวนเงินที่โอน: <?= $_SESSION['txttotal']?> บาท</p>
            </div>
</form>
</body>
</html>



