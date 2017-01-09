<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><LINK REL="SHORTCUT ICON"HREF="images/tgplogo.png"><title>The Great Provider</title>
  <title>The Great Provider</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/homepage.css" rel="stylesheet">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage"><img src="images/tgplogo.png" width="30"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">MISSION AND VISION</a></li>
        <li><a href="#tour">AFFILIATES</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="modal" data-target="#myModal">Login</a></li>
            <!--<li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li>-->
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/thegreatprovider" alt="The Great Provider" width="1200" height="700">
        <div class="carousel-caption">
          <h3>The Great Provider</h3>
          <p>The Great Provider General Insurance Agency</p>
        </div>
      </div>

      <div class="item">
        <img src="images/tgp1.jpg" alt="The Great Provider / Filipino-Homes" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Partnership</h3>
          <p>The Great Provider partnership with Filipino-homes</p>
        </div>
      </div>

      <div class="item">
        <img src="images/insularlife2.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Insular Life</h3>
          <p>106 years for the continuous Unbroken Service to the Filipinos.</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h1>The Great Provider General Insurance Agency</h1>
  <h3>Mission</h3>
  <p>We strive to help Filipino family attain peace of mind and be their great provider of opportunities to improve their financial stability thru the various products and services of The Insular Life Assurance Company, Ltd. that we offer.
We will keep our Financial Advisers inspired and motivated, by providing continuous training and education, and career opportunities so they may contribute in nation building.
Starting in Cebu City, We will build our reputation upon philosophy of integrity in all our business transactions.
As we also commit to empower our GA staff/employees to reach their fullest potential in providing excellent services.</p>
  <br>
  <h3>Vision</h3>
  <p>The Great Provider General Insurance Agency aims to be the foremost insurance agency in the Philippines. We will be the great provider to Filipino families of insurance and other financial services.</p>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">AFFILIATES</h3>
    <p class="text-center">Click<br> Remember to book your tickets!</p
    <div class="row text-center">
      <a href="http://insularlife.com.ph">
      <div class="col-sm-4"><p><strong>Insular Life</strong></p>
        <div class="thumbnail">
          <img src="images/insular.jpg" alt="Paris" width="100" height="100">
          <button class="btn" data-toggle="modal">VISIT</button>
        </div>
      </div></a>
      <a href="https://www.mapfre.com.ph/insurance-ph/">
      <div class="col-sm-4"><p><strong>Mapfre</strong></p>
        <div class="thumbnail">
          <img src="images/mapfre.png" alt="New York" width="200" height="150">
          <button class="btn" data-toggle="modal">Visit</button>
        </div>
      </div></a>
      <a href="http://www.filipinohomes.com">
      <div class="col-sm-4"><p><strong>Filipino-Homes</strong></p>
        <div class="thumbnail">
          <img src="images/filipino.png" alt="San Francisco" width="1000" height="800">
          <button class="btn" data-toggle="modal">Visit</button>
        </div>
      </div></a>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> LOG IN</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="log.php">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-user"></span> Username:</label>
              <input type="text" class="form-control" id="psw" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Password:</label>
              <input type="password" class="form-control" id="usrname" name="password" placeholder="Password">
            </div><button type="submit" class="btn btn-block">Log In
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p><a href="#">For Registration</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact Us</h3>
  <p class="text-center"><em></em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>2/F & 9/F, Insural Life Business Center, Mindanao Avenue, Corner Biliran Road, Cebu Business Park, Ayala Cebu City, 6000 Philippines</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: (32) 417-1090 & (32) 418-0013</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: thegreatproivderil@gmail.com & thegreatproivder_agency@yahoo.com.ph</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">Owners</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Pedy</a></li>
    <li><a data-toggle="tab" href="#menu1">Tessie</a></li>
    <li><a data-toggle="tab" href="#menu2">Pamela</a></li>
    <li><a data-toggle="tab" href="#menu3">Jay</a></li>
    <li><a data-toggle="tab" href="#menu4">James</a></li>
    <li><a data-toggle="tab" href="#menu5">Pia</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Pedy D. Arela, President</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Tessie L. Arela, B.O.D.</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Pamela A. Dingal, B.O.D.</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h2>Jay Peterson L. Arela, B.O.D, Vice President - Admin</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h2>James Michael L. Arela, B.O.D, Vice President - Sales & Marketing</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
    <div id="menu5" class="tab-pane fade">
      <h2>Pia Marie L. Arela, Vice President - Finance, Soliciting Official & HRD Head</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>© 2016 - All Rights with The Great Provider General Insurance Agency by: Kevin Rey M. Arela</p>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
</body>
</html>
