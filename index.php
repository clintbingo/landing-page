<?php
  if(isset($_POST['submit'])){

    $from=$_POST['email'];
    $to='iankane2003@yahoo.co.uk';
    $subject='Email signup';
    $body="Please sign me up to the mailing list";

    if(empty($_POST['email'])){

      $emailError="Please enter a valid email address";

    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>weClict</title>
  </head>
  <body>
    <section id="logo">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <img src="img/my-logo.png" class="img-fluid"/> 
          </div>
        </div>
      </div>
    </section>
    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>We're working hard and will be ready to launch weclict.com dating in...</p>    
          </div>
        </div>
      </div>
    </section>
    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
             <div class="countdown-clock"></div> 
          </div>
        </div>
      </div>
    </section>
    <section id="icons">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <ul class="list-inline">
              <a href="" target="blank">
              <li class="list-inline-item"><i class="fa twitter fa-twitter-square fa-3x" aria-hidden="true"></i></li>
              </a>
              <a href="" target="blank">
              <li class="list-inline-item"><i class="fa instagram fa-instagram fa-3x" aria-hidden="true"></i></li>
              </a>
              <a href="" target="blank">
              <li class="list-inline-item"><i class="fa facebook fa-facebook fa-3x" aria-hidden="true"></i></li>
              </a>
              <a href="" target="blank">
              <li class="list-inline-item"><i class="fa google fa-google-plus-square fa-3x" aria-hidden="true"></i></li>
              </a>
              
            </ul>

             
          </div>
        </div>
      </div>
    </section>
    <section id="signup">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
             <form class="form-inline" role="role" method="post" action="#">
                <label class="sr-only" for="email">Email</label>
                <input type="email" class="form-control mb-2 mr-sm-2" id="email" placeholder="Enter your email address">
                <button type="submit" name="submit" value="Send" class="btn btn-signup mb-2">Fnd out more</button>
              </form>
              <?= $emailError; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <script type="text/javascript">
      $(function() {
        $('.countdown-clock').countdown({
        date: "June 7, 2020 15:03:26"
        });
      });
    </script>
  </body>
</html>