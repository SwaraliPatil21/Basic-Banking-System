<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1>Online Bank</h1>
                  <h3>Multiple need, One stop solution</h3>
                  <br>
                  <h6><b>Bill payments<br>Tax payments<br>Cash transfers<br>Open new accounts</h6></b>

                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank2.png" class="img-fluid pt-2">
              </div>
            </div>
            
      <!-- About section -->
      <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                <img src="img/bank.png" class="img-fluid pt-2">
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                  <h2><b>About Us</h2></b>
                  <br>
                  <h5>The Online Bank is just a project under the sparks foundation as a part of intersnship. In which a dynamic website 
              has to be created with dummy 10 customers and transaction to be made between them.</h5>
                
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/add_customers.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Add Customer</button></a>
                  </div>
				  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                  </div>
                  <div class="col-md act">
                    <img src="img/view_customers.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>View Customers</button></a>
                  </div>

            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>© Project by Swarali Patil for Sparks Foundation Internship <b>#gripjuly21</b>  </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>