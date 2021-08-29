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
include "confi.php";
?>
<?php
if(isset($_POST["submit"]))
{
   if(mysqli_query($conn,"UPDATE registation set name='".$_POST["name"]."',contact='".$_POST["contact"]."',aadhar='".$_POST["aadhar"]."',dob='".$_POST["dob"]."',gender='".$_POST["gender"]."' where name='".$_SESSION["name"]."'"))
      {
       $msg="Record Updated Successfully!!!";
        }
      else
      {
       $msg=mysqli_error($con);
       }
       header("Location:index.php?msg=$msg");
    }

   $qry=mysqli_query($conn,"select * from registation where name='".$_SESSION["name"]."'");
      // $rowcount=mysqli_num_rows($qry);
      $data=mysqli_fetch_array($qry);


?>
<section>
<div class="container mz-4 main">
       <div class="col-sm-12 col-md-6 col-lg-6 mx-5 p-5" style="background-color: #54e3c6;">
         <form name="myForm" onsubmit="return validateForm()" method="post"  enctype="multipart/form-data" action="">
         <div>
             <div class="form-group my-3">
               <h3>My Profile</h3>
               <hr>
            </div>
            <div class="form-group my-3">
               <input type="text" name="name" class="form-control" placeholder="Your name?" value="<?php echo $data["name"]; ?>">
            </div>
            <div class="form-group my-3">
               <input type="text" name="contact" class="form-control" placeholder="Contact Number?" value="<?php echo $data["contact"]; ?>">
            </div>
            <div class="form-group my-3">
               <input type="text" name="aadhar" class="form-control" placeholder="Your Aadhar Number?" value="<?php echo $data["aadhar"]; ?>">
            </div>
            <div class="form-group my-3">
               <input type="date" name="dob" class="form-control" placeholder="Your date of birth?" value="<?php echo $data["dob"]; ?>">
            </div>
            <div class="form-group my-3">
               <input type="radio" name="gender" checked value="<?php echo $data["gender"]; ?>"><label style="margin: 2px; padding: 5px;">Male</label>

               <input type="radio" name="gender"  value="<?php echo $data["gender"]; ?>" class="px-2"><label style="margin: 2px; padding: 5px;">Female</label>

               <input type="radio" name="gender" value="<?php echo $data["gender"]; ?>" class="mx-auto"><label style="margin: 2px; padding: 5px;">Transgender</label>
            </div>
            <div class="form-group my-3">
               <input type="submit" name="submit"  value="submit" class="sub">
               
            </div>
       </div>
   </form>
       </div>
   </div>   
</div>
</section>
<?php include"footer.php"; ?>