<!DOCTYPE html>
<style type="text/css">
.btn-margin{
  margin-left: 10px;
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
<html lang="en">
<head>
<?php include 'constant.php';?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Asian University of Bangladesh</title>

<!-- Bootstrap -->
<!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/google-apis-font.css" rel="stylesheet">

<link href="css/blinker.css" rel="stylesheet">
<link href="css/jquerysctipttop.css" rel="stylesheet">
<link href="css/jquery.lightbox-0.5.css" rel="stylesheet">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#date-of-birth" ).datepicker();
  });
  </script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-transition.js"></script>
</head>

<body>
  <header>
    <div class="container">
      <div class="row">
          <div class ="col-md-12">
            <img src="images/Asian_University_of_Bangladesh_Logo.jpg" alt="Logo" class="img-responsive" style="float: left;">
          
            <h1 style="float: left;">Asian University of Bangladesh</h1>
            <br/><br/><br/>
            <h2 style="text-align: left; margin-left: 25%;"><span class="blink_me">Allumni Registration</span></h2>
          </div>
      </div>
    </div>
  </header>
<!--Header-->

<section>
  <div class="container">
    <div class="main-body1">
      <div class="col-lg-1">
        <aside> </aside>
      </div>
      <!--Siderbar-->
      <div class="col-lg-9">
        <article>
          <div class="main-content">
            <div class="col-lg-10">
              <div class="form-section">
                <h2>Registration Form</h2> 
                <p>Please fill out this form.</p>
                <form role="form" class="form-horizontal" action="allumni_insert.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">Name:</label>
                    <div class="col-lg-4">
                      <input type="text" id="name" name = "name" class="form-control" placeholder="Name" autocomplete = "on" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="std_id" class="col-lg-2 control-label">ID:</label>
                    <div class="col-lg-4">
                      <input type="text" id="std_id" name = "std_id" class="form-control" placeholder="ID" autocomplete = "on" maxlength = "9" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="batch" class="col-lg-2 control-label">Batch:</label>
                    <div class="col-lg-4">
                      <!-- <input type="select" id="batch" name = "batch" class="form-control" placeholder="Batch" autocomplete = "on" required> -->
                      <select class="form-control" name="batch">
                        <?php foreach ($batch as $key => $batches) {?>
                               <option value="<?php echo $key; ?>"><?php echo $batches; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sex" class="col-lg-2 control-label">Sex:</label>
                    <div class="col-lg-4">
                      <label class="radio-inline">
                        <input type="radio" name="sex" value = "1" checked>
                        Male</label>
                      <label class="radio-inline">
                        <input type="radio" name="sex" value = "2">
                        Female</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="passing_year" class="col-lg-2 control-label">Passing Year:</label>
                    <div class="col-lg-4">
                      <!-- <input type="text" id="passing_year" name = "passing_year" class="form-control" placeholder="Passing Year" autocomplete = "on" required> -->
                      <select class="form-control" name="passing_year">
                          <?php for ($i=2002; $i <=2015 ; $i++) { ?>
                                 <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                          <?php } ?>
                      </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="phone_no" class="col-lg-2 control-label">Contact-No:</label>
                    <div class="col-lg-4">
                      <input type="text" id="phone_no" name ="phone_no" class="form-control" placeholder="Contact-No" required>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">Email:</label>
                    <div class="col-lg-4">
                      <input type="email" id="email" name = "email" class="form-control" placeholder="Email" autocomplete = "on" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="current_employer" class="col-lg-2 control-label">Current Employer:</label>
                    <div class="col-lg-4">
                      <input type="text" id="current_employer" name = "current_employer" class="form-control" placeholder="Current Employer" autocomplete = "on" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="designation" class="col-lg-2 control-label">Designation:</label>
                    <div class="col-lg-4">
                      <input type="text" id="designation" name = "designation" class="form-control" placeholder="Designation" autocomplete = "on" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="present_address" class="col-lg-2 control-label">Present Address:</label>
                    <div class="col-lg-4">
                      <input type="text" id="present_address" name = "present_address" class="form-control" placeholder="Present Address" autocomplete = "on" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="profile_photo" class="col-lg-2 control-label">Photo:</label>
                    <div class="col-lg-4">
                      <input type="file" name="profile_photo" accept="image/*" required>
                     <!--  <input type="submit" id="upload-btn"> -->
                    </div>
                  </div>
                 <div class="form-group">
                    <div class="col-lg-5 btn-margin">
                      <input type="submit" class="btn btn-primary" value="Save">
                      <input type="button" class="btn btn-alert" value="Cancel" onClick="history.go(-1);">
                    </div>
                  </div>
                </form>
              </div>
              <!--Form  Section--> 
            </div>
            <div class="col-lg-2"></div>
          </div>
        </article>
        <!--Main Content--> 
      </div>
    </div>
  </div>
</section>
<!--Section-->

<div class="col-lg-12">
  <footer>
    <div class="container">
      <div class="ftr-wrapper">
        <address class="pull-left">
        <h3>&copy; My School 2015: All rights researved</h3>
        F-10 Noorjahan Road, Mohammadpur, Dhaka <br>
        email: <a href="mailto: myschool@mail.com"> myschool.com </a>
        </address>
        <div class="col-md-5 pull-right"> <img src="images/logo.png">
          <p>Designed and Developed by : <a href="http://www.errorpoint.com">ZS Techonology</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!--Footer--> 
</div>
<script type="text/javascript">

</script>
</body>
</html>


