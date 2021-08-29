<?php include"header.php"?>
<br><br><br>
<section>
<div class="container mz-3 main">
   <div class="row p-3">
   
       <div class="col-sm-12 col-md-6 col-lg-6" style="background-color:#54e3c6">
         <form name="myForm" onsubmit="return validateForm()" method="post"  enctype="multipart/form-data" action="login.php">
         <div>
             <div class="form-group my-3">
               <h3>Forget Password</h3>
               <hr>
            </div>
            
            <div class="form-group my-3">
               <input type="text" name="aadhar" class="form-control" placeholder="Your Aadhar Number?">
            </div>
            <div class="form-group my-3">
               <input type="number" name="new_pwd" class="form-control" placeholder="Your new Passowrd?">
            </div>
            <div class="form-group my-3">
               <input type="number" name="cnfm_pwd" class="form-control" placeholder="Your Confirm Passowrd?">
            </div>
            <div class="form-group my-3">
               <input type="submit" name="login"  value="submit" class="sub">
            </div>
       </div>
   </form>
       </div>
   </div>   
</section>
<?php include"footer.php" ?>