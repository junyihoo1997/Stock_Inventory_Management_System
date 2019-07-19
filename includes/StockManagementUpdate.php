<?php
    include_once 'login.php';

    $SerialNumber = $_POST['SerialNumber'];
    $Model = $_POST['Model'];
    $FlowtagNumber = $_POST['FlowtagNumber'];
    $Units = $_POST['Units'];
    $DateIn = $_POST['DateIn'];
    $DateOut = $_POST['DateOut'];
    $Problem = $_POST['Problem'];
    $Remark = $_POST['Remark'];
    $WarrantyPeriod = $_POST['WarrantyPeriod'];
    $CustomerName = $_POST['CustomerName'];

    $sql = "UPDATE stock SET Model='$Model', FlowtagNumber='$FlowtagNumber',Units='$Units', DateIn='$DateIn', DateOut='$DateOut', Problem='$Problem', Remark='$Remark', WarrantyPeriod='$WarrantyPeriod', CustomerName='$CustomerName' WHERE SerialNumber='$SerialNumber';";
    mysqli_query($conn,$sql);

   header("Location:../StockManagement.php?StockManagementUpdate=success");