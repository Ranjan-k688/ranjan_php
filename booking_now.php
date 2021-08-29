<?php include"header.php" ?>
<br><br><br><br>
<section>
	<div class="container">
			<!-- <div class="bg-danger">HCTC</div>
			<div class="col-sm-3 col-md-3 col-lg-3 bg-primary px-3">
				<div>Depature  Time</div>
				<div>Hyderbad</div>
				<span>7:30 am</span>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3 bg-secondary px-3">
				<div class="text-center">Totall Time <br>7h 40m</div>
				<span><hr></span>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3 bg-success">
				<div >Aarivel Time</div>
				<div>Pune</div>
				<span >10:00 pm</span>
			</div>

             <div class="col-sm-3 col-md-3 col-lg-3 bg-warning">
             	<div>$556</div>
				<input type="submit" name="select_seat" value="Select Seat">
			</div> -->
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Bus Name</th>
						<th>Depature</th>
						<th>Totall Time</th>
						<th>Arrivel</th>
						<th>Price</th>
						<th>Booked</th>						
					</tr>
				</thead>
				<?php 
				include"confi.php";
				$qry=mysqli_query($conn,"select * from schedule") ;
				$row=mysqli_num_rows($qry);
				for($i=0;$i<$row;$i++) 
                 {
                  $data=mysqli_fetch_array($qry);            
                 ?>			
				<tbody>
					<tr>
					<td><?php echo $data["bus_name"]; ?></td>
					<td><?php echo $data["depart"]; ?></td>
					<td><?php echo $data["totall_time"]; ?></td>
					<td><?php echo $data["arrive"]; ?></td>
					<td><?php echo $data["price"]; ?></td>
					<td>Seat</td>
					<?php } ?>
					
					</tr>
				</tbody>
			</table>
		</div>				
</section>

<?php include"footer.php" ?>