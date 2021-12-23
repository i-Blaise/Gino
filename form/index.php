<?php

require_once('../ClassLibraries/MainClass.php');
$mainPlug = new mainClass();
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gino Pomo Promotion</title>
  <link rel="icon" type="image/x-icon" href="../img/favicon_io/favicon.ico">

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KPX5R9Q');</script>
  <!-- End Google Tag Manager -->



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="form.css">

  <!-- Notification -->
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Toastr -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



  <?php
  if(isset($_POST['submit']))
{
  
  if(isset($_POST['agreeTNC']) && $_POST['agreeTNC'] == 'agree')
  {

   if(!empty($_POST['fullname']) && !empty($_POST['email']))
   {
    $result = $mainPlug->saveInput($_POST);
    if($result == 'good')
    {
    //   $URL = 'https://ginopomopromotion.com/thankyou/';
    // header('Location: '.$URL);
		echo "<script>location='https://ginopomopromotion.com/thankyou/'</script>";
    }
   }
  } else {
    ?>
    <script type='text/javascript'>   
      $(document).ready(function() {      
      toastr.options.positionClass = "toast-top-right";
      toastr.options.closeButton = true;
      toastr.options.closeDuration = 3000;
      toastr.warning('Please agree with terms and conditions to continue', 'Oops');
  });
  </script>
  <?php
  }
}
?>
</head>
<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBDTTJG"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  

  <!-- Navbar burger on large screens items right-->
  <nav class="navbar navbar navbar-dark bg-red">
    <a class="navbar-brand brand-text" href="../" alt="">Gino Pomo Promotion</a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ml-auto mr-3">
          <a class="nav-link" href="../">Home </a>
        </li>
        <li class="nav-item ml-auto mr-3">
          <a class="nav-link" href="../form/La Liga Promo Terms and Conditions 2021 - 19th November 2021-converted.pdf">Terms & Conditions</a>
        </li>
        <li class="nav-item ml-auto mr-3">
          <a class="nav-link" href="../winners/">Winners</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  <!-- Navbar burger on large screens right -->

  <div class="container">

    <div class="row">
  <div class="title-form">
  <h3 class="tnc">Terms and Conditions</h3>
  <h3>Twa wanum na k) Spain</h3>
  </div>
</div>
  
  <div class="row">
        <div class="doc-button">
            <a href="La Liga Promo Terms and Conditions 2021 - 19th November 2021-converted.pdf" class="button">View document</a>
            </div>
  </div>
  
  <form method="post">
    <div class="mb-3">
      <input type="text" class="form-control" id="exampleInputEmail1" name="fullname" aria-describedby="emailHelp" placeholder="Full Name" required>
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email Address" required>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" name="agreeTNC" id="exampleCheck1" value="agree">
      <label class="form-check-label terms-and-condition-checkbox" for="exampleCheck1">I agree to the terms and conditions</label>
    </div>
    <div class="row">
        <div class="agree-button" id="agree">
        <button type="submit" name="submit" class="submit-button">Submit</button>
        </div>
  </div>
  </form>

  <hr class="line">


  <div class="footer-icons">  
    <a href="http://fb.me/GinoMagicGhana" target="_blank"><img src="../img/fb.png" width="40px" height="40px"> </a>
    <a href="http://instagram.com/ginopeppeonion/" target="_blank"><img src="../img/ig.png" width="40px" height="40px"> </a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="../img/share.png" width="40px" height="40px"> </a>
  </div>
  
  <div class="footer-year">
  <img src="../img/copyright.png" width="25px" height="25px">
  2020
  </div>
  
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 600; color: green;">Share to Social Media</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="footer-icons">
          <a href="https://www.facebook.com/sharer/sharer.php?u=http://ginopomopromotion.com/" target="_blank">
            <img src="../img/fb.png" width="40px" height="40px">
            </a>
            <a href="https://twitter.com/intent/tweet?text=Check out Gino Pomo Promotion and stand the chance of winning a trip to Spain!!! - http://ginopomopromotion.com/." target="_blank"><img src="../img/twitter.png" width="40px" height="40px"></a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: aliceblue; color: green;">Close</button>
      </div>
    </div>
  </div>
</div>

  <!-- <button type="button" class="btn btn-outline-success">Success</button> -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!-- partial -->
  
</body>
</html>
