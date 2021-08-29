<?php include"header.php" ; ?>
<br><br><br><br>
<style type="text/css">
   .div1{
      margin-left: 100px;
      margin-top: 80px;
   }
   .main{
      width: 800px;
   }
   .sub{
      width: 80px;
   }
   @media (max-width: 576px) {
      .main{
         width: 480px;
      }
      .div1{
      margin-left: 10px;
      
   }

   }
</style>
<?php
session_start();
include"confi.php";
if(isset($_POST["login"]))
{
   $name=$_POST["name"];
   $aadhar=$_POST["aadhar"];
   $sql="select name,aadhar from registation where name='".$name."' and aadhar='".$aadhar."'";
   $rec=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   $res=mysqli_fetch_array($rec);
      if($res["name"]=="admin" && $res["aadhar"]==111111111111)
   {
      header("Location:admin/a_dash.php");
      $_SESSION["name"]=strtoupper($res["name"]);
      // $_SESSION["usertype"]=$res["type"];
   }  
   elseif($res["name"]==$name && $res["aadhar"]==$aadhar)
   {
      header("Location:index.php");
      $_SESSION["name"]=strtoupper($res["name"]);
      // $_SESSION["usertype"]=$res["type"];
   }  
   else
   {
      header("Location:index.php?login_message=Your User name and Aadhar is not Correct, Please Try Again.");
   }

}
?>
<section>
<div class="container mz-4 main">
   <div class="row p-3">
   	 <div class="col-sm-12 col-md-6 col-lg-6" style="background-color:#54e3c6;">
   	 	  <div class="div1">
   	 		<p><i class='far fa-address-card' style='font-size:21px;color:#842abd'>&nbsp;Trusted by 100 milion</i></p>
   	 	  <p><i class='fab fa-cc-visa' style='font-size:21px;color:#842abd'>&nbsp;Fast & Secure Payments</i></p>
   	 	  <p><i class='fas fa-cogs' style='font-size:21px;color:#842abd'>&nbsp;Best Security</i></p>
   	 	  <p><i class='far fa-money-bill-alt' style='font-size:21px;color:#842abd'>&nbsp;Save on Every Booking</i></p>
   	 	  </div>
   	 </div>
   	 <div class="col-sm-12 col-md-6 col-lg-6" style="background-color:#54e3c6">
         <form name="myForm" onsubmit="return validateForm()" method="post"  enctype="multipart/form-data" action="login.php">
         <div>
   	 	    <div class="form-group my-3">
   	 			<h3>Log In</h3>
   	 			<hr>
   	 		</div>
   	 		<div class="form-group my-3">
   	 			<input type="text" name="name" class="form-control" placeholder="Your name?">
   	 		</div>
   	 		<div class="form-group my-3">
   	 			<input type="text" name="aadhar" class="form-control" placeholder="Your Aadhar Number?">
   	 		</div>
   	 		
   	 		<div class="form-group my-3">
   	 			<input type="submit" name="login"  value="login" class="sub">
   	 			<a href="forget.php" class="text-danger">Forget Password</a>
   	 		</div>
            <div class="form-group my-3">              
               <a href="registration.php" class="text-danger">You have't account tha Signup</a>
            </div>
   	 </div>
   </form>
       </div>
   </div> 	
</section>
<br><br><br><br>
<?php include"footer.php"; ?>