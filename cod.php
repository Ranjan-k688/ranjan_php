<?php include"header.php" ?>
<br><br><br><br>
<div class="container">
<table class="table table-bordered">
   <thead>
               <tr>
                  <th style="text-align: center;">Bus Name</th>
                  <th style="text-align: center;">Depature</th>
                  <th style="text-align: center;">Totall Time</th>
                  <th style="text-align: center;">Arrivel</th>
                  <th style="text-align: center;">Date</th>
                  <th style="text-align: center;">Price</th>                 
                  <th style="text-align: center;">Booked</th>                  
               </tr>
            </thead>
      <?php
       $f= $_POST["frm"];
       $t= $_POST["too"]; 
       $d= date("d M Y", strtotime($_POST["date"])) ;
                
            include"confi.php";
            $qry=mysqli_query($conn,"select * from schedule") ;
            $row=mysqli_num_rows($qry);
            
            for($i=1;$i<=$row;$i++) 
               {                              
                $data=mysqli_fetch_array($qry);
               if($t==$data["arrive"] AND $f==$data["depart"]) 
               {
               ?>
               <tbody>
               <tr>
               <td style="text-align: center;"><?php echo $data["bus_name"];?></td>
               <td style="text-align: center;"><?php echo $data["depart"];?><br><h6><?php echo $data["d_time"];?></h6></td>
               <td style="text-align: center;"><?php echo $data["totall_time"];?>h</td>
               <td style="text-align: center;"><?php echo $data["arrive"];?><br><h6><?php echo $data["a_time"];?></h6></td>
               <td style="text-align: center;"><?php echo $data["date"];?></td>
               <td style="text-align: center;">$<?php echo $data["price"];?></td>
               <td style="text-align: center;">Seat</td>
               <?php } ?>              
               </tr>
            </tbody>               
            <?php } ?> 
         </table>
         </div>

