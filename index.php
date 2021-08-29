<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <head>
  <title>Bus Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style type="text/css">
  body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color:#f2f2f2;
  }
  .main{
    position: relative;
  }
  /*.place {
    margin-left: 100px;
    position:absolute;
    top:300px;
    
  }*/
  span{
    color: white;
  } 
  .menu  li a:hover{
    display: block;
    color: black;
    background-color: #4d88b3;
    border-radius: 4px 4px;
    text-shadow: 4px blue;
  }
  .menu a{
    font-size: 20px;
  }
  h2{
    text-align: center;
  }
  .container{
    word-spacing: 5px;
  }
  span{
    color: black;
  }
  span:hover{
    background-color: #8ccf7a;
    color:pink;
  }
  .card-body{
          background-color: #4d88b3;
          box-shadow: 6px 6px #9e093b;
  }
  @media (min-width: 0px) {
    .place{
      top: 50px;
      position: absolute;
      margin-left: 50px;
       
    }

  }
  /*for small device*/
  @media (max-width: 313px) {
  .place{
      top: 50px;
      position:absolute;
      margin-left: 2px;
    }
    .form{
      width: 250px;
      margin-left: 10px;
    }
    .search{
  margin-left: 30px;
}


}
/*for small 2 device*/
@media (max-width: 576px) {
    .place{
      top: 40px;
      position:absolute;
      margin-left: 50px;

    }
    .form{
    width: 250px;
      margin-left: 25px;
     }
     .search{
          margin-left: 80px;
          }
      .navbar{
        margin-left: 50px;
      }


}

/* Medium devices (tablets, 768px and up) */
@media (max-width: 768px) {
  .place{
      top: 200px;
      position:absolute;
      margin-left: 50px;
    }

      }

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
  .place{
      top: 310px;
      position:absolute;
      margin-left: 60px;
    }
    .search{
  margin-left: 500px;
}


}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {

    }
</style>
<body class="container-fluid mt-3">
  <div class="">
   <nav class="navbar navbar-expand-md  navbar-light fixed-top">
    <div class="container ">
  <!-- Brand -->
  <a class="navbar-brand text-white " href="#" style="font-size: 30px;">Brandname</a>
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto menu">
      <?php if(isset($_SESSION["name"]))
          {
            ?>
            <li class="nav-item">
        <a class="nav-link text-white fs-4 " href="myprofile.php">Profile</a>
        </li>
      <li class="nav-item ">
        <a class="nav-link text-white  fs-4" href="logout.php">Logout</a>
      </li>
    <?php }else{ ?>
      <li class="nav-item">
        <a class="nav-link text-white active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="login.php">Login</a>
      </li>
      
      <?php } ?>
    </ul>
  </div>
 </div> 
</nav>
  <div class="main"> 
    <div id="demo" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
  <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/r2.jpg"  width="100%" height="500" class="baner">   
          </div>
          <div class="carousel-item">
            <img src="image/r1.jpg"  width="100%" height="500" class="baner">   
          </div>
          <div class="carousel-item">
            <img src="image/r2.jpg" width="100%" height="500" class="baner">
          </div>
    </div>
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
      </div>
    </div>
</div>
<!-- <?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search"]))
{
 header("Location:cod.php");
}
?> -->


<div class="container place ">
  <!-- for searching travel -->
  <div style="color: white;font-size: 25px;" class="search">Search*Book*Go</div>
  <form method="post" enctype="multipart/form-data" name="srch" action="cod.php"> 
     <div class="row ">     
        <div class="col-sm-3 col-md-3 col-lg-3">
          <div class="">
          <span >From</span>
          <?php
              include "confi.php";
              $qry=mysqli_query($conn,"select depart from schedule") or die(mysqli_error($conn));
               $rowcount=mysqli_num_rows($qry);
                ?>
            <select class="form-control" name="frm">
            <option value="" >--:Select:--</option>
            <?php for($i=0;$i<$rowcount;$i++) 
            {
              $data=mysqli_fetch_array($qry);            
            ?>           
    <option value="<?php echo $data["depart"]; ?>"> <?php echo $data["depart"]; ?> </option>    <?php 
        } 
          ?>
          </select>
        </div>
      </div>

      <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="form">
          <span >To</span>
          <?php
            $qry=mysqli_query($conn,"select arrive from schedule") or die(mysqli_error($conn));
            $rowcount=mysqli_num_rows($qry);
          ?>
          <select class="form-control" name="too">
            <option val="">--:Select:--</option>
            <?php 
              for($i=1;$i<=$rowcount;$i++)
              {
                $data=mysqli_fetch_array($qry);
              
            ?>
            <option value="<?php  echo $data["arrive"];?>"><?php echo $data["arrive"]; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>

       <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="form">
        <span>date</span>
        <input type="date" name="date" class="form-control op ">
      </div>
      </div>

      <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="form">
        <span>search</span>
        <input type="submit" name="submit" value="search" class="form-control op bg-warning">
        </div>     
      </div>
         </form>
     </div>
  <!-- end of searching -->
</div>
<br>
<section>
  <div class="row">
    <div class="container">
      <h2>About</h2>
      <hr>
      India has a large network of roads, and buses go pretty much everywhere. Bus travel is economical, and services are frequent and fast. From curvy mountains, rocky terrains to small villages, buses take you everywhere in India and are an affordable mode of transport. There are a variety of buses available and booking bus tickets online has become effortless.
      <br><br>
      <h4>How can i book bus booking online via ixigo?</h4><br>
        • Choose the date of travel<br>
        • Hit the search button<br>
        • Select the number of seats and your choice of the bus operator<br>
        • Select the boarding and dropping off points<br>
        • Enter passenger details<br>
        • Choose an offer<br>
        • Choose your preferred payment method and make the payment to confirm booking.<br>
    </div>
  </div>
 <br>
  <div class="row">
    <div class="container">
      <h2>Top Tourist Bus Routes</h2>
      <hr>
      When it comes to India, there’s absolutely no shortage of splendid tourist locations. To experience their beauty, simply make your bus booking online! Avail amazing deals, a huge choice of operators, instant refunds and 24x7 customer support on your bus tickets right here.
    </div>
  </div> 
  <br> 
  <div class="container"> 
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 py-2">
        <div class="card-dack">
           <div class="card bg-light">
              <div class="card-body ">
                <p class="card-text">
                 <span> * Delhi to Simla Bus </span><br>
                 <span> * Manli to Delhi Bus</span><br>
                 <span> * Delhi to Manali Bus</span><br>
                  <span> * Chandigrah to Manali Bus</span><br>
                </p>
              </div>
           </div>
        </div>
      </div>  

      <div class="col-sm-12 col-md-4 col-lg-4 py-2">
        <div class="card-dack">
           <div class="card bg-light">
              <div class="card-body ">
                <p class="card-text">
                 <span> * Pune to Goa Bus </span> <br>
                 <span> * Goa to Mumbai Bus</span><br>
                  <span>* Banglore to ooty Bus</span> <br>
                  <span> * Surat to Ahmedabad Bus</span> <br>
                </p>
              </div>
           </div>
        </div>
      </div>

        <div class="col-sm-12 col-md-4 col-lg-4 py-2">
        <div class="card-dack">
           <div class="card bg-light">
              <div class="card-body ">
                <p class="card-text">
                 <span> * Delhi to Dhramshala Bus</span> <br>
                  <span> * Delhi to nainital Bus</span> <br>
                   <span>* Chennai to coimatore Bus</span> <br>
                  <span>* Banglore to Goa Bus</span> <br>
                </p>
              </div>
           </div>
        </div>
      </div>
    </div>
  </div>
   <br>
  <div class="row">
    <div class="container">
      <h2>Top Pilgrimage Bus Routes</h2>
      <hr>
         While going on a pilgrimage in a bus, make your booking online! Select your favourite seat, find the cheapest bus and get instant notifications about the bus schedule, along with fare drop alerts and great bus booking deals.
    </div>
  </div>

  <br> 
  <div class="container"> 
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 py-2">
        <div class="card-dack">
           <div class="card bg-light">
              <div class="card-body ">
                <p class="card-text">
                 <span> * Delhi to haridwar Bus</span> <br>
                 <span> * Banglore to Tirupati Bus</span> <br>
                 <span> * Mumbai to Shirdi Bus</span> <br>
                 <span> * Delhi to Amritsar Bus</span> <br>
                  
                </p>
              </div>
           </div>
        </div>
      </div>  

      <div class="col-sm-12 col-md-4 col-lg-4 py-2">
        <div class="card-dack">
           <div class="card bg-light">
              <div class="card-body ">
                <p class="card-text">
                 <span> * Delhi to Jammu Bus</span> <br> 
                 <span> * Delhi to Amritsar Bus</span> <br>
                  <span>* Delhi to Rishikesh</span> <br>
                  <span>* Kolkata to Digha Bus</span> <br>
                </p>
              </div>
           </div>
        </div>
      </div>

        <div class="col-sm-12 col-md-4 col-lg-4 py-2">
        <div class="card-dack">
           <div class="card bg-light">
              <div class="card-body ">
                <p class="card-text">
                  <span>* Jaipur to Bikner Bus</span> <br>
                 <span> * Delhi to Katra Bus</span> <br>
                  <span>* Channai to Tirputi Bus</span> <br>
                  <span>  * Agra to Jaipur</span> <br>
                </p>
              </div>
           </div>
        </div>
      </div>
    </div>
  </div>
    <br>
   <div class="row">
    <div class="container word-spacing-3px">
      <h2>Online Bus Booking in India</h2>
      <hr>
         India has a large network of roads, and buses go pretty much everywhere. Bus travel is economical, and services are frequent and fast. From curvy mountains, rocky terrains to small villages, buses take you everywhere in India and are an affordable mode of transport. There are a variety of buses available and booking bus tickets online has become effortless.
          There are different kinds of buses in India such as state-owned, luxury buses, deluxe or super deluxe. There are also the Volvo AC and non AC buses, Mercedes, Express and other private buses and they hardly ever need to be booked in advance. Although, pre- booking of bus tickets is advisable.
          ixigo provides online bus booking services throughout the length of the country with amazing deals on bus ticket prices. If you’re looking for the cheapest bus ticket prices, head straight to our online bus ticket booking platform as soon as possible. With 1000+ buses between 200 cities across the country, finding the perfect deal for your travel plans will never be a hassle.
          The buses run by the state government are usually more reliable. In case of a breakdown, another bus is sent to drop the passengers. Although, government-owned buses get sold out very fast. If you have already planned your trip, it is suggested to make the online bus booking in advance to get the bus and seat of your choice. On ixigo, you can make bus tickets booking of different routes across the country.
    </div>
  </div>
</section>
<br>
<section>
  <div class="fluid bg-dark text-center text-white py-2">
    <h3>Developed by || Rj Technology</h3>
    <h4>&copy; Reserved at 2025</h4>
  </div>
</section>
</body>
</html>