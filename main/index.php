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
    
    
    <form action="/confim/payment.php" method="post">
        <div div class="head">
            <h2>Disburse</h2>
            <p>ชำระเงินโดยธนาคารข้างต้น <a href="/Banking.php">Mobile Banking</a></p>
        </div>
        <div class="form-group">
            <input type="text" placeholder="ชื่อ-สกุล" name="txtFormName" style="color: black;">
            <div class="bio">
                <input type="text" placeholder="เบอร์โทร" id="txtphone" name="txtphone" style="color: black;">
                <input type="text" placeholder="จำนวนเงิน" id="txttotal" name="txttotal" style="color: black;">
            </div>
                <input type="email" name="txtFormEmail" placeholder="E-mail" style="color: black;">
                <br>
                
            <form action="/confim/payment.php" method="POST">
            <div class="card s">
                <ul class="list-group-flush"><br>
                <li class="list-group-item"><input name="rdoBank" type="radio" value="กสิกรไทย" onClick="JavaScript:frmMain.hdnBank.value='กสิกรไทย [730-2-44715-7]';">กสิกรไทย [023-1-19265-7]<br></li>
                <li class="list-group-item"><input name="rdoBank" type="radio" value="กรุงไทย" onClick="JavaScript:frmMain.hdnBank.value='กสิกรไทย [730-2-44715-7]';">กรุงไทย [023-1-19265-7]<br></li>
                <li class="list-group-item"><input name="rdoBank" type="radio" value="กรุงเทพ" onClick="JavaScript:frmMain.hdnBank.value='กรุงเทพ [068-0-16334-2]';">กรุงเทพ [152-0-00001-7] <br></li>
                <li class="list-group-item"><input name="rdoBank" type="radio" value="ไทยพาณิชย์" onClick="JavaScript:frmMain.hdnBank.value='ไทยพาณิชย์ [256-2-01317-7]';">ไทยพาณิชย์ [045-2-35809-1]</p></li>
                </ul>
            </div>
            <br>
            <input class="Submit s" type="submit" name="Submit" value="Submit">
    </form>

    
    
    
</body>
</html>
