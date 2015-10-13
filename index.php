<style type="text/css">
.text-box{
  width: 166px;
  height: 30px;
}
.lebel-class{ 
  width: 200px; float: left; margin: 0 20px 0 0; 
}
.log-in { 
  display: block; margin: 0 0 3px; font-size: 1.2em; font-weight: bold; 
}
#name { 
  width: 200px;
  height: 41px;
  padding: 5px; 
}
#password { 
  width: 200px; 
  height: 41px;
  padding: 5px;
 }
#login-box{
  display: none;
}
.log-in-div{
  padding-top: 43px;
}
.btn-custom{
  width: 76px;
  height: 41px;
}
.login-text-box{
  width: 264px;
  height: 40px;
  margin-bottom: 17px;
  padding-left: 7px;
}
.textfield-box{
  padding-left: 7px;
}
.login-div{
  font-family: arial;
  font-size: 21px;
}
.log-in{
  color: red;
  width: 10px;  
}
.registration{
  color: blue;
  width: 10px;
}
.div-padding{
  padding-right: 20px;
}
::-webkit-input-placeholder {
   text-align: center;
}

:-moz-placeholder { /* Firefox 18- */
   text-align: center;  
}

::-moz-placeholder {  /* Firefox 19+ */
   text-align: center;  
}

:-ms-input-placeholder {  
   text-align: center; 
}
</style>

<!DOCTYPE html>
<?php
      session_start();
      //echo $_SESSION['currentUser'];
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Asian University of Bangladesh</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="style.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<link href="css/google-code-prettify/prettify.css" rel="stylesheet">
<link href="css/jquerysctipttop.css" rel="stylesheet">
<link href="css/jquery.lightbox-0.5.css" rel="stylesheet">
<link href="css/blinker.css" rel="stylesheet">
<!-- <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700' rel='stylesheet' type='text/css'> -->
</head>
<body>
<header>
  <div class="container">
    <div class="header-top">
      <div class="col-md-3">
        <div class="logo"> <a href="#"><img src="images/Asian_University_of_Bangladesh_Logo.jpg" alt="Logo" class="img-responsive"></a> </div>
      </div>
      <div class="col-md-5">
        <div class="name">
          <h1>Asian University of Bangladesh<br>
            <span>-------------------</span></h1>
        </div>
      </div>
      <div class="col-md-4">
        <div class="header-right">
          <div class="header-search">
           <!--  <form  method="post" role="form"> -->
              <div>
                  <input type="text">&nbsp
                  <input type="submit" value="Search" class="btn btn-search">
     <?php
              if (isset($_SESSION['currentUser'])) { ?>
                    <div>
                      <br>
                        <?php if($_SESSION['userType'] == 1) {?>
                                  <button type="button" name="admin" class="btn btn-success" onClick ="window.location.href='admin.php'">Admin Panel</button>
                        <?php } ?>
                                  <button type="button" name="admin" class="btn btn-success" onClick ="window.location.href='logout.php'">Log-Out</button>
                    </div>
      <?php  } else {  ?>
                    <br>
                    <br>
                    <div class ="login-div">
                        <b>
                          <button type="button" name="Login" class="btn btn-success" id="log-btn">Login</button>&nbsp</b>
                        <b><a href ="registration.html"><span style = "color: 3399FF;">Registration</a><span></b>
                    </div>

                    <div id="login-box">
                      <br>
                      <form action="login.php" method="post">
                       <!--  <label for ="email"></label> -->
                        <input type="email" name="email" class="login-text-box" placeholder =" Email" autocomplete ="off">
                        <!-- <label for ="password"></label> -->
                        <input type="password" name="password" class="login-text-box" placeholder =" Password">
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                     </form>
                    </div>
           <?php  } ?>      
              </div>
            <!-- </form> -->
          </div>
        </div>
      </div> <!-- Search Field -->
   <!--   
     Header Top

    <nav class="nav-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="about.html">About us</a></li>
          <li><a href="article.html">Our Articles</a></li>
          <li><a href="contact.html">Contact us</a></li>
          <li><a href="#">Site map</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Notice<b class="caret"></b></a>
          	<ul class="dropdown-menu">
            	<li><a href="#">Notice One</a></li>
            	<li><a href="#">Notice Two</a></li>
            	<li><a href="#">Notice Three</a></li>
            	<li><a href="#">Notice Four</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav> <!--Navigation  -->
  </div>
</header> <!--Header-->

<section>
  <div class="container">
    <div class="banner">
      <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="images/slide1.jpg" alt="img"></div>
        <div class="item"><img src="images/slide2.jpg" alt="img"></div>
        <div class="item"><img src="images/slide3.jpg" alt="img"></div>
        <div class="item"><img src="images/slide4.jpg" alt="img"></div>
      </div>
    </div>
  </div> <!--Slider-->


  <div class="container">
  <div class="main-body">
  	<div class="col-lg-3">
    <aside>
      <div class="sidebar">
        <div class="category">
          <h1>Categories</h1>
          <ul>
            <li><a href="" class="right-bar" id="1">Programs</a></li>
            <li><a href="" class="right-bar" id="2" >Student Info</a></li>
            <li><a href="" class="right-bar" id="3" >Teachers</a></li>
            <li><a href="" class="right-bar" id="4" >Descriptions</a></li>
            <li><a href="" class="right-bar" id="5" >Administrators</a></li>
            <li><a href="" class="right-bar" id="6" >Basic Information</a></li>
            <li><a href="" class="right-bar" id="7" >Vacancies</a></li>
            <li><a href="allumni_reg.php"><span style="color: red;">Allumni Registration</span></a></li>
          </ul>
        </div> <!--Side Menu-->
        <div class="category">
          <h1>Recent Promotional Offers & Packages</h1>
          <div class="list-wrpaaer">
            <span class="blink_me"><img src="images/admission_weaver.png"></span>
          </div>          
        </div><!--Promotional Offers-->
        
      </div>
    </aside>
    </div> <!--Siderbar-->
    
    <div class="col-lg-7">
      <article>
        <div class="main-content">
        	<!-- <div class="col-lg-12">
          	<h1 class="title">About Team</h1>
              <div class="col-md-4 clearfix">
              	<div class="profile-pic">
                  	<img src="images/profileimg.jpg" alt="Image">
                      <p class="pro-name">Team Member One</p>
                      <p>He is the most important member of your team. Usually this is the person who started the website</p>
                  </div>
              </div>
              <div class="col-md-4 clearfix">
              	<div class="profile-pic">
                  	<img src="images/profileimg.jpg" alt="Image">
                      <p class="pro-name">Team Member One</p>
                      <p>He is the most important member of your team. Usually this is the person who started the website</p>
                  </div>
              </div>
              <div class="col-md-4 clearfix">
              	<div class="profile-pic">
                  	<img src="images/profileimg.jpg" alt="Image">
                      <p class="pro-name">Team Member One</p>
                      <p>He is the most important member of your team. Usually this is the person who started the website</p>
                  </div>
              </div>
          </div> <!--Team Profile -->

          <div class="clearbreak"></div>
          
          <div class="col-lg-12">
              <div class="company">
              	<div class="profile-pic">
                 <!--  	<img src="images/profileimg.jpg" alt="Image"> -->                  
                 <!--  <iframe src="allumni_reg.php" width="100%" height="100%"></iframe>  -->
                 <div id="main_body">

                 </div>
                </div>
            </div>
        </div> <!--Company Details-->
      </div>
    </article>
    </div> <!--Main Content-->

    <div class="col-lg-2">
    <aside>
      <div class="sidebar">
        <div class="category">
          <?php include "event_news.php"; ?>
          <h1>Event News</h1>
          <div class="list-wrpaaer">
            <ul class="list-aggregate" id="marquee-vertical">
             <?php 
               include "event_news.php"; 
               //var_dump($result);
             if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                      // output data of each row?>
                    <li> 
                      <a href=""><?php echo $row["news_headline"];?></a>
                      <p><?php echo $row["news_details"];?></p>
                    </li> 
        <?php     } 
              } else { ?>
                   <li> 
                      <a href=""><?php echo "Empty"; ?></a>
                      <p><?php echo "There will be no event news right now";?></p>
                   </li> 
        <?php } mysqli_close($conn); ?>
            </ul>

          </div>
        </div>
        <?php if (isset($_SESSION['currentUser'])){ ?>
            <div class="category">
              <h1>Event Insertion</h1>
              <div class="">
                <form action="insert_event.php" method="post" role="form">
                    <div>
                      <input type="text" class="text-box textfield-box" name="event_name" placeholder=" Event-Name" autocomplete ="off" required><br><br>
                      <textarea rows="3" cols="20" class ="textfield-box" name="event_description" placeholder="Event Description (Max 100 letter)" maxlength="100" required></textarea><br><br>
                        <input type="submit" value="Submit" class="btn btn-search">
                    </div>
                </form>
              </div>
            </div>
        <?php } ?>
        <div class="category">
          <h1>Suggestion Box</h1>
          <div class="">
          <form action="suggestion.php" method="post" role="form">
              <div>
                <input type="name" class="text-box textfield-box" name="name" placeholder=" Name" autocomplete ="off" required><br><br>
                <input type="email" class="text-box textfield-box" name="email" placeholder=" Email" autocomplete ="off" required><br><br>
                <textarea rows="3" cols="20" class="textfield-box" name="suggestion" placeholder=" Please Enter your suggestion (Max 100 letter)" maxlength="100" required></textarea><br><br>
                  <input type="submit" value="Submit" class="btn btn-search">
              </div>
          </form>
          </div>
        </div><!--Suggestion-->
      </div>
    </aside>
    </div> <!--SiderbarLeft-->
  </div>
  </div>
  
</section> <!--Section-->

	<div class="col-lg-12">
<footer>
	<div class="container">
	<div class="ftr-wrapper">
        	<address class="pull-left">
            	<h3>&copy; My School 2015: All rights researved</h3>
                F-10 Noorjahan Road, Mohammadpur, Dhaka <br>
                email: <a href="mailto: myschool@mail.com"> myschool.com </a>
            </address>
            <div class="col-md-5 pull-right">
            <img src="images/logo.png"><p>Designed and Developed by : <a href="http://www.softntech.net">Soft & Tech</a></p>
            </div>
    </div>
    </div>
</footer> <!--Footer-->
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery1.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-collapse.js"></script> 
<script src="js/bootstrap-tab.js"></script> 
<script src="js/bootstrap-transition.js"></script> 
<script src="js/bootstrap-transition.js"></script> 
<script src="js/prettify.js"></script> 
<script src="js/run_prettify.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.marquee.js"></script>
<script src="js/jquery.lightbox-0.5.min.js"></script>

<script type="text/javascript">
//Add Hover effect to menus
    jQuery('ul.nav li.dropdown').hover(function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
    }, function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    });
    
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
		  autoPlay : 3000,
		  stopOnHover : true,
      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
	    autoHeight : true,
	    // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
      });
    });

    $(function(){
        $('#marquee-vertical').marquee();  
        $('#marquee-horizontal').marquee({direction:'horizontal', delay:0, timing:50});  
    });

    $(function(){
        $('a[rel=lightbox]').lightBox({
          containerResizeSpeed: 250,
          fixedNavigation: true
        });
        $('a[rel=2ndlightbox]').lightBox({
          overlayBgColor: '#fff',
          overlayOpacity: 0.7
        });
    });

    $(document).ready(function() {
        $("#log-btn").click(function(){
            $("#login-box").toggle();
        });
        $(".right-bar").click(function(e){
            var id = $(this).attr("id");
            //alert(id);
            $("#main_body").load("main_body.php #"+id);
             e.preventDefault();
        });
    });
</script>
</body>
</html>