<?php 
if(!isset($_GET["name"]))
{
	if(!isset($_GET['aadhar']))
	{
header("Location:index.php");
  }
}
else{
include"header.php" ;
}
?>
<br><br><br><br><br>
<style type="text/css">
	
</style>
<div class="container d-flex justify-content-center">
	<div class="card p-5 w-50 mt-2 mh-100 bg-primary">
			<div class="bg-primary text-center">
				<span class=" fs-2">Hello ,</span>&nbsp;&nbsp;<span class=" fs-4"><?php echo $_GET["name"]; ?></span>
			</div>
			<div class="text-center bg-primary">
				<span>You are Registread Successfully</span>
			</div>
			<div class="text-center bg-primary">
				<span>Your Password is:</span> <?php echo $_GET["aadhar"]; ?>
			</div>
			<div class="text-center bg-primary">
				<span>This Message is already  send in your email and mobile also!</span>
			</div>
			<div class="text-center bg-primary">
				<span class="fs-3">Thank you!!</span>
			</div>
    </div>
</div>
<br><br><br><br><br>
<?php include"footer.php" ?>