<?php
//Table record
include_once('login.php');
$query="SELECT * FROM stock";
$result=mysqli_query($conn,$query);
$resultCheck = mysqli_num_rows($result);

//Check distinct customer name in database 
$query2="SELECT DISTINCT CustomerName FROM stock";
$result2=mysqli_query($conn,$query2);
$resultCheck2 = mysqli_num_rows($result2);

// Check distinct model in database
$query3="SELECT DISTINCT Model FROM stock";
$result3=mysqli_query($conn,$query3);
$resultCheck3 = mysqli_num_rows($result3);

?>



<html>
    <head>
        <link rel="stylesheet" type="text/css" href="StockManagementStyle.css">
        <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
             <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="jquery-ui.min.js"></script>
       
    </head>
    
    <body onload="ViewTableData();">
        <script>
            //Function that pass records to update database 
                function updateData(){
                    document.forms['Stock'].action='includes/StockManagementUpdate.php';
                    document.forms['Stock'].submit();
                }
            
                </script>
        
        
        
        <div class="container">
        <h1 style="text-align:center">CSI Stock Management</h1>
        <br>
        <br>
            
            <!-- Table Record-->
        <table class="table table-bordered table-striped table-hover table-mc-red" id="StockTable">
            <thead>
            <tr>
                <th>CHECK ALL <br/> <input type="checkbox" id="checkall" style="width:20px; height:20px;"/></th>
                <th>SERIAL NUMBER</th>
                <th>MODEL</th>
                <th>FLOWTAG NUMBER</th>
                <th>UNITS</th>
                <th>DATE IN</th>
                <th>DATE OUT</th>
                <th>PROBLEM</th>
                <th>REMARK</th>
                <th>WARRANTY PERIOD</th>
                <th>CUSTOMER NAME</th>
            </tr>
                </thead>

            <tbody></tbody>
            


        </table>
            </div>
        <br>
            <br>
        <script>
            //To check Serialnumber and customername field is empty or filled
            function chkBlank(){
                if (document.getElementById('SerialNumber').value=="" || document.getElementById('CustomerName').value==""){
                    alert('Please Enter Both Serial Number And Customer Name Field!');
                    document.getElementById('SerialNumber').style.borderColor = "red";
                    document.getElementById('CustomerName').style.borderColor = "red";
                    return false;
                }
            }
        
        
        </script>
            
        <div class="TextField" id="result">

        <form name="Stock" id="Stock" action="includes/StockManagementSave.php" method="post">
            
            <!-- Fields to enter details -->
            <label>Serial Number : </label> <input type="text" name="SerialNumber" id="SerialNumber" autocomplete="off"><p id="test"></p>
            <br>
            <br>
            <label>Model : </label>
            <input list="Model1" type="text" name="Model" id="Model" autocomplete="off" >
            <datalist id="Model1" autocomplete="off">
                <?php while($row1= mysqli_fetch_array($result3)):;?>
                <option value="<?php echo $row1[0];?>">
                <?php endwhile;?>
                
            </datalist>
            <br><br>
            <label>Flowtag Number : </label> 
            <input type="text" name="FlowtagNumber" id="FlowtagNumber" autocomplete="off">
            <br><br>
            <label>Units : </label> 
            <input type="text" name="Units" id="Units" autocomplete="off">
            <br><br>
            <label>Date In : </label>
            <input class="datepicker" type="text" name="DateIn" id="DateIn" autocomplete="off" placeholder="MM/DD/YYYY" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d">
            <br><br>
            <label>Date Out : </label> 
            <input class="datepicker" type="text" name="DateOut" id="DateOut" autocomplete="off" placeholder="MM/DD/YYYY" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d">
            <br><br>
            <label>Problem : </label> 
            <input type="text" name="Problem" id="Problem">
            <br><br>
            <label>Remark : </label> 
            <input type="text" name="Remark" id="Remark">
            <br><br>
            <label>Warranty Period : </label>
            <input list="Period" type="text" name="WarrantyPeriod" id="WarrantyPeriod" autocomplete="off">
            <datalist id="Period" autocomplete="off">
                <option value="1 month">
                <option value="3 months">
                <option value="6 months">
                <option value="12 months">
            </datalist>
            <br><br>
            <label>Customer Name: </label>
            <input list="CustomerName1"type="text" name="CustomerName" id="CustomerName" autocomplete="off">
            <datalist id="CustomerName1" autocomplete="off">
                <?php while($row1= mysqli_fetch_array($result2)):;?>
                <option value="<?php echo $row1[0];?>">
                <?php endwhile;?>
                
            </datalist>
            <br><br>
            <button class="btn Save" type="Submit" name="Save" id="Save" onclick="return chkBlank();">Save</button>
            <button type="button" class="btn Delete" name="Delete" id="Delete"  >Delete</button>
            <button class="btn Update" type="Submit" name="Update" onclick="updateData();" onclick="return chkBlank();">Update</button>
            <button class="btn Reset" type="reset" value="reset">Reset</button>
        </form>
            
            
            </div>
        <br><br>
        <script>
            // View Table record using ajax
        function ViewTableData(){
                         $.ajax({
                             type: 'GET',
                             url: 'includes/StockManagementCustomer.php',
                             
                             success: function(data){
                                 $('tbody').html(data)
                             }
                         })
                     }
            
            // Function to checked all checkbox
            
                     $('#checkall').change(function(){
                         $('.checkitem').prop("checked",$(this).prop("checked"))
                     })
            
 
            
            // Date field validation
            $("#DateIn").datepicker();
            $("#DateOut").datepicker();
            
            // To check whether database have exist serial number
            $(document).ready(function(){
                          $("#SerialNumber").keyup(function(){
                          var SN = $("#SerialNumber").val();
                         $.post("includes/StockManagementSN.php",{
                            StockManagementSN : SN 
                         }, function(data,Status){
                             $("#test").html(data);
                         });
                     });
                     });
                     
                     // Delete Selected records in database using ajax
                     $(document).ready(function(){
                         $('#Delete').click(function(){
                             if(confirm("Are you sure you want to delete?")){
                                 var id = [];
                                 var tr = $(this).closest('tr'); 
                                 
                                 $(':checkbox:checked').each(function(i){
                                     id[i] = $(this).val();
                                 });
                                 if(id.length === 0) //tell you if the array is empty
                                     {
                                         alert("Please Select At Least One Checkbox");
                                     }
                                 else{                                 
                                     $.ajax({
                                         type:'POST',
                                         url : "includes/StockManagementDelete.php",
                                         
                                         data:{id:id},
                                         success:function(){
                                           ViewTableData();
                                         }
                                     });
                                 }
                             }
                             else{
                                 return false;
                             }
                         });
                     });
            
            // Checkbox clicked when click table row
            $(document).ready(function() {
                $('.table').on('click', 'tr', function(event) {
                if (event.target.type !== 'checkbox') {
                    $(':checkbox', this).trigger('click');
                }
                });
            });
                     
            
                     
        </script>
 
                 <script type="text/javascript">
                     
                    
                     
                
                     
                    
                     
                     
                   /* document.querySelector("#Save").addEventListener("click",function(event){
                         event.preventDefault();
                         var SN = $("#SerialNumber").val();
                    var MD = $("#Model").val();
                    var FN = $("#FlowtagNumber").val();
                    var UN = $("#Units").val();
                    var DI = $("#DateIn").val();
                    var DO = $("#DateOut").val();
                    var PR = $("#Problem").val();
                    var RM = $("#Remark").val();
                    var WP = $("#WarrantyPeriod").val();
                    var dataString = 'SerialNumber='+SN+'&Model='+MD+'&FlowtagNumber='+FN+'&Units='+UN+'&DateIn='+DI+'&DateOut='+DO+'&Problem='+PR+'&Remark='+RM+'&WarrantyPeriod'+WP;
                     $.ajax({
                         url : "includes/StockManagementSave.php",
                         type:"POST",
                         data : dataString
                     });
                          
                     });*/
                     
                     
            
        </script>    
    </body>
</html>