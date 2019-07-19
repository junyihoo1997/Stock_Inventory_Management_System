<?php


include_once 'login.php';

    $DL = mysqli_query($conn,"SELECT * FROM stock;");
        while($rows = mysqli_fetch_assoc($DL)){
        ?>
        
<tr>
                <td class = "text-center"><input type="checkbox" class="checkitem" style="width:20px; height:20px;" value="<?php echo $rows['ID']?>"/></td>
                <td><?php echo $rows['SerialNumber']; ?> </td>
                <td><?php echo $rows['Model']; ?></td>
                <td><?php echo $rows['FlowtagNumber']; ?></td>
                <td><?php echo $rows['Units']; ?></td>
                <td><?php echo $rows['DateIn']; ?></td>
                <td><?php echo $rows['DateOut']; ?></td>
                <td><?php echo $rows['Problem']; ?></td>
                <td><?php echo $rows['Remark']; ?></td>
                <td><?php echo $rows['WarrantyPeriod']; ?></td>
                <td><?php echo $rows['CustomerName']; ?></td>
</tr> 
<script>
           var table = document.getElementById("StockTable");
           for(var i = 1; i < table.rows.length; i++)
               {
                   table.rows[i].onclick = function()
                   {
                       document.getElementById("SerialNumber").value = this.cells[1].innerHTML;
                       document.getElementById("Model").value = this.cells[2].innerHTML;
                       document.getElementById("FlowtagNumber").value = this.cells[3].innerHTML;
                       document.getElementById("Units").value = this.cells[4].innerHTML;
                       document.getElementById("DateIn").value = this.cells[5].innerHTML;
                       document.getElementById("DateOut").value = this.cells[6].innerHTML;
                       document.getElementById("Problem").value = this.cells[7].innerHTML;
                       document.getElementById("Remark").value = this.cells[8].innerHTML;
                       document.getElementById("WarrantyPeriod").value = this.cells[9].innerHTML;
                       document.getElementById("CustomerName").value = this.cells[10].innerHTML;
                   }
               }
</script>
<?php

}
    

?>