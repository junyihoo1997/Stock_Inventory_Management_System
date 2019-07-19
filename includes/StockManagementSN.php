<?php

    include_once 'login.php';
    $SerialNumber = $_POST['StockManagementSN'];
    $Record = mysqli_query($conn,"SELECT * FROM stock WHERE SerialNumber= '$SerialNumber';"); ?>

    <script>
         function color(){
             document.getElementById("test").style.color = "red";
         }
         function color2(){
             document.getElementById("test").style.color = "green";
         }
        function disable(){
            document.getElementById("Save").disabled = true;
        }
        function enable(){
            document.getElementById("Save").disabled = false;
        }
</script>
<?php
if(isset($_POST['StockManagementSN'])){
    if(!empty($SerialNumber)){
        $num_rows = mysqli_num_rows($Record);
            if($num_rows>0){
                echo "Serial Number Already Exist";
                 ?><script>
                    color();
                    disable();
                    </script><?php
            }
            else{
                echo "Serial Number Is Available";           
                ?><script>
                    color2();
                    enable();
                    </script><?php
            }
        
    }
}

    

   
    