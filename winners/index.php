<?php

require_once('../ClassLibraries/MainClass.php');
$mainPlug = new mainClass();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gino Pomo Promotion</title>
  <link rel="icon" type="image/x-icon" href="../img/favicon_io/favicon.ico">

  
      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KPX5R9Q');</script>
  <!-- End Google Tag Manager -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="winners.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
          <a class="nav-link" href="../form/La Liga Promo Terms and Conditions 2021 - 19th November 2021-converted.pdf" target="_blank">Terms & Conditions</a>
        </li>
        <li class="nav-item active ml-auto mr-3">
          <a class="nav-link" href="../winners/">Winners</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar burger on large screens right -->

  <div class="container">

    <div class="row">
  <div class="title-form col">
  <h3 class="tnc">Winners</h3>
  </div>
  <div class="col">
    <div class="dropdown">
      <button class="btn btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="../img/filter.png" width="40px" height="40px">
      </button>
      <div class="dropdown-menu myBtnContainer" aria-labelledby="dropdownMenuButton">
      <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('Ahafo Region')"> Ahafo Region</button>
  <button class="btn" onclick="filterSelection('Ashanti Region')"> Ashanti Region</button>
  <button class="btn" onclick="filterSelection('Bono East Region')"> Bono East Region</button>
  <button class="btn" onclick="filterSelection('Bono Region')"> Bono Region</button>
  <button class="btn" onclick="filterSelection('Central Region')"> Central Region</button>
  <button class="btn" onclick="filterSelection('Eastern Region')"> Eastern Region</button>
  <button class="btn" onclick="filterSelection('Greater Accra Region')"> Greater Accra Region</button>
  <button class="btn" onclick="filterSelection('Northern Region')"> Northern Region</button>
  <button class="btn" onclick="filterSelection('Oti Region')"> Oti Region</button>
  <button class="btn" onclick="filterSelection('Savannah Region')"> Savannah Region</button>
  <button class="btn" onclick="filterSelection('Upper East Region')"> Upper East Region</button>
  <button class="btn" onclick="filterSelection('Upper West Region')"> Upper West Region</button>
  <button class="btn" onclick="filterSelection('Volta Region')"> Volta Region</button>
  <button class="btn" onclick="filterSelection('Western North Region')"> Western North Region</button>
  <button class="btn" onclick="filterSelection('Western Region')"> Western Region</button>  
      </div>
    </div>
  </div>






  <?php
  $recordNum = $mainPlug->countWinners();
  $winnersResult = $mainPlug->fetchWinners();


if($recordNum >= 1)
{
?>
<div class="container">
        <div class="row winners">

        <?php
            while($winnersData = mysqli_fetch_assoc($winnersResult))
            {
              $id = $winnersData['id'];
        ?>
          <div class="col-lg-4 col-sm-4 filterDiv <?php echo $winnersData['region']; ?>">
            <a href="#"><img src="<?php echo $winnersData['imageLink']; ?>" alt="..." class="img-thumbnail" width="70px" height="70px"> </a>
            <figcaption><?php echo ($winnersData['fullName'] ? $winnersData['fullName'] : NULL) ?></figcaption>
            <figcaption class="region"><?php echo $winnersData['region']; ?></figcaption>
          </div>
          <?php
            }
          ?>
        </div>
</div>

<?php
}else{
?>
<div class="container">
        <div class="row winners">
          <div class="col-lg-4 col-sm-4 filterDiv ahafo" id="region-eastern">
            <a href="#"><img src="../img/profile-pic.png" alt="..." class="img-thumbnail" width="70px" height="70px"> </a>
            <figcaption>Full Name</figcaption>
          </div>
          <div class="col-lg-4 col-sm-4 filterDiv g.accra" id="region-accra">
            <a href="#"><img src="../img/profile-pic.png" alt="..." class="img-thumbnail" width="70px" height="70px"> </a>
            <figcaption>Full Name</figcaption>
          </div>
          <div class="col-lg-4 col-sm-4 filterDiv g.accra" id="region-accra">
            <a href="#"><img src="../img/profile-pic.png" alt="..." class="img-thumbnail" width="70px" height="70px"> </a>
            <figcaption>Full Name</figcaption>
          </div>
          <div class="col-lg-4 col-sm-4 filterDiv central.r" id="region-central">
            <a href="#"><img src="../img/profile-pic.png" alt="..." class="img-thumbnail" width="70px" height="70px"> </a>
            <figcaption>Full Name</figcaption>
          </div>
          <div class="col-lg-4 col-sm-4 filterDiv central.r" id="region-central">
            <a href="#"><img src="../img/profile-pic.png" alt="..." class="img-thumbnail" width="70px" height="70px"> </a>
            <figcaption>Full Name</figcaption>
          </div>
          <div class="col-lg-4 col-sm-4 filterDiv central.r" id="region-central">
            <a href="#"><img src="../img/profile-pic.png" alt="..." class="img-thumbnail" width="70px" height="70px"> </a>
            <figcaption>Full Name</figcaption>
          </div>
          <div class="col-lg-4 col-sm-4 filterDiv central.r" id="region-central">
            <a href="#"><img src="../img/profile-pic.png" alt="..." class="img-thumbnail" width="70px" height="70px"> </a>
            <figcaption>Full Name</figcaption>
          </div>
          <div class="col-lg-4 col-sm-4 filterDiv central.r" id="region-central">
            <a href="#"><img src="../img/profile-pic.png" alt="..." class="img-thumbnail" width="70px" height="70px"> </a>
            <figcaption>Full Name</figcaption>
          </div>
          <div class="col-lg-4 col-sm-4 filterDiv central.r" id="region-central">
            <a href="#"><img src="../img/profile-pic.png" alt="..." class="img-thumbnail" width="70px" height="70px"> </a>
            <figcaption>Full Name</figcaption>
          </div>
        </div>
</div>
<?php
}
?>





    <div class="row">
        <div class="view-button-container">
            <a href="../" class="button">Back to Homepage</a>
            </div>
    </div>

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

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
<!-- partial -->
  
</body>
</html>
