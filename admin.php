<?php
	include 'constant.php';
?>

<!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet">
<title>Admin</title>
<style type="text/css">
#rcorners1 {
    border-radius: 25px;
    background: #8AC007;
    padding: 20px;
    width: 200px;
    height: 150px;
}

#rcorners2 {
    border-radius: 25px;
    border: 2px solid #8AC007;
    padding: 20px;
    width: 200px;
    height: 150px;
}

#rcorners3 {
    border-radius: 25px;
    background: url(paper.gif);
    background-position: left top;
    background-repeat: repeat;
    padding: 20px;
    width: 200px;
    height: 150px;
}

.Table {
    display: table;
}
.Title {
    display: table-caption;
    text-align: center;
    font-weight: bold;
    font-size: larger;
}
.Heading {
    display: table-row;
    font-weight: bold;
    text-align: center;
}
.Row {
    display: table-row;
    height: 45px;
}
.Cell {
    display: table-cell;
    border: solid;
    border-width: thin;
    padding-left: 5px;
    padding-right: 5px;
}
.btn {
	margin: 5px 5px 5px 5px;
}
</style>
<head>
	<?php include "constant.php";?>
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
	<link href='http://fonts.googleapis.com/css?family=Passion+One:400,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery1.min.js"></script> 
</head>
<body>
	<div class="container">
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ip_assignment";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT id, name, email, date_of_birth, contact_no, sex, user_type, status FROM user";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    ?>

		    <div class="Table">
			    <div class="Title">
			        <p>User Data</p>
			    </div>
			    <div class="Heading">
			        <div class="Cell">
			            <p>Name</p>
			        </div>
			        <div class="Cell">
			            <p>Email</p>
			        </div>
			        <div class="Cell">
			            <p>Date of Birth</p>
			        </div>
			         <div class="Cell">
			            <p>Contact No</p>
			        </div>
			         <div class="Cell">
			            <p>Sex</p>
			        </div>
			         <div class="Cell">
			            <p>User Type</p>
			        </div>
			         <div class="Cell">
			            <p>Status</p>
			        </div>
			         <div class="Cell">
			            <p>Status Change / Delete</p>
			        </div>       
			    </div>
			    <?php
			    while($row = mysqli_fetch_assoc($result)) {?>
				    <div class="Row">
				        <div class="Cell">
				            <p><?php echo $row["name"];?></p>
				        </div>
				        <div class="Cell">
				            <p><?php echo $row["email"];?></p>
				        </div>
				        <div class="Cell">
				            <p><?php echo date('d-F-y',strtotime($row["date_of_birth"]));?></p>
				        </div>
				        <div class="Cell">
				            <p><?php echo $row["contact_no"];?></p>
				        </div>
				        <div class="Cell">
				            <p><?php echo $gender[$row["sex"]];?></p>
				        </div>
				        <div class="Cell">
				            <p><?php echo $user_type_name[$row["user_type"]];?></p>
				        </div>
				        <div class="Cell">
				            <p><?php echo $status_name[$row["status"]];?></p>
				        </div>
				        <div class="Cell">
				            <p><button type="button" class="btn btn-info status-button" name = "status" value = "<?php echo $row['id']; ?>">Change Status</button>
				            <button type="button" class="btn btn-danger delete-button" id="user-id" name = "delete" value = "<?php echo $row['id']; ?>" attr = "<?php echo 'user'.$row['id']; ?>">Delete</button></p>
				        </div>
				    </div>    
			    <?php }?>
		    </div>
		    <?php
		} else {
			echo "<b>No Data in table</b>";
		}

		//mysqli_close($conn);
		?> 
		<br><br><br>
		<?php
		$suggestion_query = "SELECT id, name, email, suggestion FROM suggestion_box";
		$suggestionResult = mysqli_query($conn, $suggestion_query);
		// var_dump($suggestionResult);die;
		if (mysqli_num_rows($suggestionResult) > 0) {
		    // output data of each row
		    ?>
		    <div class="Table">
			    <div class="Title">
			        <p>Suggestion Box</p>
			    </div>
			    <div class="Heading">
			        <div class="Cell">
			            <p>Name</p>
			        </div>
			        <div class="Cell">
			            <p>Email</p>
			        </div>
			        <div class="Cell">
			            <p>Suggestion</p>
			        </div>
			         <div class="Cell">
			            <p>Delete</p>
			        </div>       
			    </div>
			    <?php
			    while($suggentionRow = mysqli_fetch_assoc($suggestionResult)) {?>
				    <div class="Row">
				        <div class="Cell">
				            <p><?php echo $suggentionRow["name"];?></p>
				        </div>
				        <div class="Cell">
				            <p><?php echo $suggentionRow["email"];?></p>
				        </div>
				        <div class="Cell">
				            <?php echo $suggentionRow["suggestion"];?>
				        </div>
				        <div class="Cell">
				            <p><!-- <button type="button" class="btn btn-info status-button" name = "status" value = "">Change Status</button> -->
				            <button type="button" class="btn btn-danger delete-button" name = "delete" value = "<?php echo $suggentionRow['id']; ?>" id= "suggestion-id" attr = "<?php echo 'sug'.$suggentionRow['id']; ?>">Delete</button></p>
				        </div>
				    </div>    
			    <?php }?>
		    </div>
		    <?php
		} else {
			echo "<b>No Data in table</b>";
		}

		// mysqli_close($conn);
		?> 
		<br><br><br>
		<?php
		$eventNewsQuery = "SELECT id, news_headline, news_details, created_by FROM event_news";
		$eventNewsResult = mysqli_query($conn, $eventNewsQuery);
		// var_dump($suggestionResult);die;
		if (mysqli_num_rows($eventNewsResult) > 0) {
		    // output data of each row
		    ?>
		    <div class="Table">
			    <div class="Title">
			        <p>Event News</p>
			    </div>
			    <div class="Heading">
			        <div class="Cell">
			            <p>News Headline</p>
			        </div>
			        <div class="Cell">
			            <p>News Details</p>
			        </div>
			        <div class="Cell">
			            <p>Created By</p>
			        </div>
			         <div class="Cell">
			            <p>Delete</p>
			        </div>       
			    </div>
			    <?php
			    while($eventNewsRow = mysqli_fetch_assoc($eventNewsResult)) {?>
				    <div class="Row">
				        <div class="Cell">
				            <p><?php echo $eventNewsRow["news_headline"];?></p>
				        </div>
				        <div class="Cell">
				            <p><?php echo $eventNewsRow["news_details"];?></p>
				        </div>
				        <div class="Cell">
				            <?php echo $eventNewsRow["created_by"];?>
				        </div>
				        <div class="Cell">
				            <p><!-- <button type="button" class="btn btn-info status-button" name = "status" value = "">Change Status</button> -->
				            <button type="button" class="btn btn-danger delete-button" name = "delete" value = "<?php echo $eventNewsRow['id']; ?>" id= "event-id" attr = "<?php echo 'sug'.$eventNewsRow['id']; ?>">Delete</button></p>
				        </div>
				    </div>    
			    <?php }?>
		    </div>
		    <?php
		} else {
			echo "<b>No Data in table</b>";
		}

		//mysqli_close($conn);
		?> 
		<br><br><br>
		<?php 
		$photo_show = "SELECT * FROM allumni_reg_data";
		$allumniData = mysqli_query($conn, $photo_show);
		// var_dump($suggestionResult);die;
		if (mysqli_num_rows($allumniData) > 0) {
		    // output data of each row
		    ?>
		    <div class="Table">
			    <div class="Title">
			        <p>Allumni Association Regestered Member</p>
			    </div>
			    <div class="Heading">
			    	<div class="Cell">
			            <p>Name</p>
			        </div>
			        <div class="Cell">
			            <p>Student ID</p>
			        </div>
			        <div class="Cell">
			            <p>Batch</p>
			        </div>
			        <div class="Cell">
			            <p>Sex</p>
			        </div>
			        <div class="Cell">
			            <p>Passing Year</p>
			        </div>
			         <div class="Cell">
			            <p>Phone No</p>
			        </div>
			         <div class="Cell">
			            <p>Email</p>
			        </div>
			         <div class="Cell">
			            <p>Current Employer</p>
			        </div>
			         <div class="Cell">
			            <p>Designation</p>
			        </div>
			         <div class="Cell">
			            <p>Present-Address</p>
			        </div>
			         <div class="Cell">
			            <p>Profile-Photo</p>
			        </div>
			         <div class="Cell">
			            <p>Status</p>
			        </div>
			        <div class="Cell">
			            <p>Delete</p>
			        </div>       
			    </div>
			    <?php
			    while($allumniRegData = mysqli_fetch_assoc($allumniData)) { ?>
				    <div class="Row">
				        <div class="Cell">
				            <p><?php echo $allumniRegData["name"];?></p>
				        </div>
				        <div class="Cell">
				            <p><?php echo $allumniRegData["std_id"];?></p>
				        </div>
				        <div class="Cell">
				            <?php echo $batch[$allumniRegData["batch"]];?>
				        </div>
				        <div class="Cell">
				            <?php echo $gender[$allumniRegData["sex"]];?>
				        </div>
				        <div class="Cell">
				            <?php echo $allumniRegData["passing_year"];?>
				        </div>
				        <div class="Cell">
				            <?php echo $allumniRegData["phone_no"];?>
				        </div>
				        <div class="Cell">
				            <?php echo $allumniRegData["email"];?>
				        </div>
				        <div class="Cell">
				            <?php echo $allumniRegData["current_employer"];?>
				        </div>
						 <div class="Cell">
				            <?php echo $allumniRegData["designation"];?>
				        </div>
						 <div class="Cell">
				            <?php echo $allumniRegData["present_address"];?>
				        </div>
				        <div class="Cell">
				        	<div style="padding: 8px 5px 8px 5px">
					            <?php
					            	 $profile_photo = $allumniRegData["profile_photo"];
					            	  //echo '<img src="'.$profile_photo.'" alt="HTML5 Icon" style="width:128px;height:128px">';
					            	 // echo '<img src="data:image/jpeg;base64,'.base64_encode($pp).'" style="width:128px;height:128px"/>';
					            	//echo $profile_photo;
					            	echo '<img src="uploads/'.$profile_photo.'" style="width:128px;height:150px"/>';
					            	// echo '<img src="uploads/Zawadul Kawum.jpg"/>';
					           	?>
				           </div>
				        </div>
						 <div class="Cell">
				            <?php echo $status_name[$allumniRegData["status"]];?>
				        </div>
				        <div class="Cell">
				            <p><!-- <button type="button" class="btn btn-info status-button" name = "status" value = "">Change Status</button> -->
				            <button type="button" class="btn btn-danger delete-button" name = "delete" value = "<?php echo $allumniRegData['id']; ?>" id= "allumnilist-id" attr = "<?php echo $allumniRegData['profile_photo']; ?>">Delete</button></p>
				        </div>
				    </div>    
			    <?php }?>
		    </div>
		    <?php
		} else {
			echo "<b>No Data in table</b>";
		}
		mysqli_close($conn);
		?>
		<div class="form-group">
			<div class="col-lg-offset-0 col-lg-1">
				<br>
				<br>
				<br>
			  <input type="button" class="btn btn-default btn-lg" value="Back" onClick="history.go(-1);">
			</div>
		</div>
	</div>
</body>

<script type="text/javascript">
//function deleteData(){
	$(document).ready(function() {
        $('.delete-button').click(function() {
             //alert($(this).val());
	         var deletVal = $(this).attr("value");
	         var deletId = $(this).attr("id");
	         var photo_name = $(this).attr("attr");
	         var tableName;
	        // alert(deletId);
	        if(deletId == "suggestion-id"){
	        	tableName = "suggestion_box";
	        } else if (deletId == "user-id"){
	        	tableName = "user";
	        } else if (deletId == "event-id"){
	        	tableName = "event_news";
	        } else if (deletId == "allumnilist-id"){
	        	tableName = "allumni_reg_data";
	        }

	         // var typeVal = $("#suggestion-id").onClick();
	         // alert(typeVal);
	         var IsCONFIRM = confirm("Do you want to delete?");
	         var thisVar = $(this);
	        // alert(IsCONFIRM);
	         if(IsCONFIRM == "true" || IsCONFIRM == true){	
            	  $.ajax(
		           {
		                   type: "POST",
		                   url: "delete.php",
		                   data: {id:deletVal,tableName:tableName,photo_name:photo_name},
		                   cache: false,
		                   success: function(returnVar)
		                   {
		                   	//alert(thisVar.attr("value"));
		                   	thisVar.parent().parent().parent().hide();
		                    // $(this).parent().parent().parent().fadeOut('slow', function() {$(this).remove();});
		                   }
		           });
         	}
        });
    });
$(document).ready(function(){
    $('.status-button').click(function(){
        var id = $(this).val();
        var ajaxurl = 'changeStatus.php',
        data =  {'id': id};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
           alert("Status change successfully");
           window.location = '/project_one/admin.php';
        });
    });

});
	/*$(document).ready(function() {
      $("#delete-button").onClick({
      	var  deleteId= $("#delete-button").val();
      	alert(deleteId);
      });
    });*/
//}
</script>
</html>
<!-- <div class="Table">
    <div class="Title">
        <p>This is a Table</p>
    </div>
    <div class="Heading">
        <div class="Cell">
            <p>Name</p>
        </div>
        <div class="Cell">
            <p>Email</p>
        </div>
        <div class="Cell">
            <p>Date of Birth</p>
        </div>
         <div class="Cell">
            <p>Contact No</p>
        </div>
         <div class="Cell">
            <p>Sex</p>
        </div>
         <div class="Cell">
            <p>User Type</p>
        </div>
         <div class="Cell">
            <p>Status</p>
        </div>
         <div class="Cell">
            <p>Edit/Delete</p>
        </div>       
    </div>
    <div class="Row">
        <div class="Cell">
            <p>Row 1 Column 1</p>
        </div>
        <div class="Cell">
            <p>Row 1 Column 2</p>
        </div>
        <div class="Cell">
            <p>Row 1 Column 3</p>
        </div>
        <div class="Cell">
            <p>Row 1 Column 3</p>
        </div>
        <div class="Cell">
            <p>Row 1 Column 3</p>
        </div>
        <div class="Cell">
            <p>Row 1 Column 3</p>
        </div>
        <div class="Cell">
            <p>Row 1 Column 3</p>
        </div>
        <div class="Cell">
            <p>Row 1 Column 3</p>
        </div>
    </div>

</div> -->