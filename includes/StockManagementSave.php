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

    $Record = mysqli_query($conn,"SELECT * FROM stock WHERE SerialNumber= '$SerialNumber';");
    $num_rows = mysqli_num_rows($Record);
    if($num_rows>0){
header("Location:../StockManagement.php?StockManagementSave=Failed"); 
     }
    else{

                $sql = "INSERT INTO stock(SerialNumber, Model, FlowtagNumber, Units, DateIn, DateOut, Problem, Remark, WarrantyPeriod, CustomerName) VALUES ('$SerialNumber', '$Model', '$FlowtagNumber', '$Units', '$DateIn', '$DateOut', '$Problem', '$Remark', '$WarrantyPeriod','$CustomerName');";
                mysqli_query($conn,$sql);
                header("Location:../StockManagement.php?StockManagementSave=success");  
    }

    
    