<?php include"header.php" ; ?>
<br><br><br>
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
include "confi.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
{
   $name=$contact=$aadhar=$dob=$gender="";
    $error=0;

   function test_input($data) 
      {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }


   if (empty($_POST["name"])) {
       $err["name_error"]=" Name is required";
       $error=$error+1;
     } else {
      if(strlen($_POST["name"])>2)
      {
         if(ctype_alpha($_POST["name"])=="yes")
         // if(preg_match("/^[a-zA-Z \s]+$/",$name))
         {
             $name = test_input($_POST["name"]);                            
         }
         else
         {
         $err["name_error"]="Name Must Be a String!";           
          $error=$error+1;
         }
      }
      else
      {
         $err["name_error"]=" Name Must Be Greater Then 2 Characters!";
          $error=$error+1;
      }
   }

 if (empty($_POST["contact"])) {
       $err["contact_error"]=" contact is required";
       $error=$error+1;
     } else {
      if(strlen($_POST["contact"])<10)
      {
      
         if(is_numeric($_POST["contact"])=="yes")
         {
             $contact = test_input($_POST["contact"]);                            
         }
         else
         {
         $err["contact_error"]="Contact is must be in number!";           
          $error=$error+1;
         }
      }
      
      else
      {
         $err["contact_error"]="Contact is must be in 10 digit";
          $error=$error+1;
      }
   }


     if (empty($_POST["aadhar"])) {
       $err["aadhar_error"]=" aadhar is required";
       $error=$error+1;
     } else {
      if(strlen($_POST["aadhar"])>5 )
      {
         if(is_numeric($_POST["aadhar"])=="yes")
         {
             $aadhar = test_input($_POST["aadhar"]);                            
         }
         else
         {
         $err["aadhar_error"]="aadhar is must be in number!";           
          $error=$error+1;
         }
      }
      else
      {
         $err["aadhar_error"]="aadhar is must be in 12 digit";
          $error=$error+1;
      }
   }
  
  if (empty($_POST["dob"])) {
       $err["dob_error"]=" dob is required";
       $error=$error+1;
     } else {
      $contact = test_input($_POST["dob"]); 
   }
 
 if($error<1)
 {

   $qry=mysqli_query($conn,"select * from registation") or die(mysqli_error($conn));
      $rowcount=mysqli_num_rows($qry);
      if(strlen($rowcount)==1)
      {
         $reg="000".((int)$rowcount+1);
      }
      else if(strlen($rowcount)==2)
      {
         $reg="00".((int)$rowcount+1);
      }
      else if(strlen($rowcount)==3)
      {
         $reg="0".((int)$rowcount+1);
      }
      else if(strlen($rowcount)==4)
      {
         $reg=((int)$rowcount+1);
      }
      $regs_no="AIT".date("y").$reg;

   $name = $_REQUEST['name'];
   $contact = $_REQUEST['contact'];
   $aadhar = $_REQUEST['aadhar'];
   $dob = $_REQUEST['dob'];
   $gender = $_REQUEST['gender'];

   $sql= "insert into registation SET regs_no='".$regs_no."', name='".$name."',contact='".$contact."',aadhar='".$aadhar."',dob='".$dob."',gender='".$gender."'";

   if(mysqli_query($conn,$sql))
      {
         header("Location:welcome.php?msg=Student Registered Successfully!&aadhar=".$aadhar."&name=".$name." ");
      }
      else
      {
       $err["insert"]="Registration Failed!";         
      }
 }

}
?>
<section>
<div class="container mz-4 main">
   <label style="color:#f00; font-weight:bold;">All Fields are Mandetory!<br>
         <?php 
         if(isset($err))
         {
            $j=1;
            foreach($err as $error)
            {
               echo $j.". ".$error."<br>";
               $j++;
            }
         }
         ?>

      </label>
   <div class="row p-3">
   	 <div class="col-sm-12 col-md-6 col-lg-6" style="background-color: #54e3c6;">
   	 	  <div class="div1">
   	 		<p><i class='far fa-address-card' style='font-size:21px;color:#842abd'>&nbsp;Trusted by 100 milion</i></p>
   	 	  <p><i class='fab fa-cc-visa' style='font-size:21px;color:#842abd'>&nbsp;Fast & Secure Payments</i></p>
   	 	  <p><i class='fas fa-cogs' style='font-size:21px;color:#842abd'>&nbsp;Best Security</i></p>
   	 	  <p><i class='far fa-money-bill-alt' style='font-size:21px;color:#842abd'>&nbsp;Save on Every Booking</i></p>
   	 	  </div>
   	 </div>
   	 <div class="col-sm-12 col-md-6 col-lg-6" style="background-color: #54e3c6;">
         <form name="myForm" onsubmit="return validateForm()" method="post"  enctype="multipart/form-data" action="">
         <div>
   	 	    <div class="form-group my-3">
   	 			<h3>Sign up</h3>
   	 			<hr>
   	 		</div>
   	 		<div class="form-group my-3">
   	 			<input type="text" name="name" class="form-control" placeholder="Your name?" <?php if(!isset($_POST["name"])){ ?>  <?php } ?> value="<?php if(isset($_POST["name"])) echo $_POST["name"]; ?>">
   	 		</div>
   	 		<div class="form-group my-3">
   	 			<input type="text" name="contact" class="form-control" placeholder="Contact Number?" <?php if(!isset($_POST["contact"])){ ?>  <?php } ?> value="<?php if(isset($_POST["contact"])) echo $_POST["contact"]; ?>">
   	 		</div>
   	 		<div class="form-group my-3">
   	 			<input type="text" name="aadhar" class="form-control" placeholder="Your Aadhar Number?" <?php if(!isset($_POST["aadhar"])){ ?>  <?php } ?> value="<?php if(isset($_POST["aadhar"])) echo $_POST["aadhar"]; ?>">
   	 		</div>
   	 		<div class="form-group my-3">
   	 			<input type="date" name="dob" class="form-control" placeholder="Your date of birth?"<?php if(!isset($_POST["dob"])){ ?>  <?php } ?> value="<?php if(isset($_POST["dob"])) echo $_POST["dob"]; ?>">
   	 		</div>
            <div class="form-group my-3">
   	 			<input type="radio" name="gender" checked value="male"><label style="margin: 2px; padding: 5px;">Male</label>

   	 			<input type="radio" name="gender"  value="female" class="px-2"><label style="margin: 2px; padding: 5px;">Female</label>

   	 			<input type="radio" name="gender"  value="transgender" class="mx-auto"><label style="margin: 2px; padding: 5px;">Transgender</label>
   	 		</div>
   	 		<div class="form-group my-3">
   	 			<input type="submit" name="submit"  value="submit" class="sub">
   	 			<a href="login.php">You have account than login</a>
   	 		</div>
   	 </div>
   </form>
       </div>
   </div> 	
</div>
</section>
<?php include"footer.php"; ?>