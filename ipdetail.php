<?php
session_start();
require "db.php";

$IPid=$_GET['IPid'];
$result=$mysqli->query("SELECT * FROM ipdetail where IPid=$IPid ");
$IPinfo=$result->fetch_assoc();


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	<title>Improvement Proposal Portal</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>


<body>
	 
	 
 <div class="container" style="background:#eeeeee"  >
 
	<div class="row bg-primary">
	   <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
		 <h3 class="align-left"><b>Improvement Proposal Portal</b></h3>
	   </div>
	</div></br>
	<div class="row">
	
			<div class="col-lg-7" style="margin-left:12px;">
			   
			  <p> <h5><b>#IP- <font class="bg-info"><?php echo $IPinfo['IPid'] ;   ?></font> </b></h5></p></br>
			  <p> <h5><b>IP Title: <font class="bg-info"><?php echo $IPinfo['title'] ;   ?></font></b></h5></p></br>
			  <h2><b>User Story:</b></h2>
			  <p> <h5>As a <?php echo $IPinfo['user'] ;   ?></h5></p>
			  <p> <h5>I want to <?php echo $IPinfo['feature'] ;   ?> </h5></p>
			  <p> <h5>So that I <?php echo $IPinfo['benefits'] ;   ?> </h5></p></br>
			  
			  <p> <h5><b>Platforms:   <font class="bg-info"><?php echo $IPinfo['platform'] ;   ?></font></b> </h5></p></br>
			   <p> <h5><b>Priority:  <font class="bg-info"><?php echo $IPinfo['priority'] ;   ?></font></b> </h5></p></br>
			   <p> <h5><b>Fast Track: <font class="bg-info"><?php if($IPinfo['fasttrack']) { echo "Yes";} else{ echo "No"; } ?></font></b>  </h5></p></br>
			   <h3><b>Documentation</b></h3>
			   <h4 class="text-primary"><a href="http://bit.ly/2jcHlV5">Link to documentation and training</a></h4>

			   
			   <h3><b>Comments</b></h3>
			     <h4 class="text-primary"><a href="#CommentBoxjumbotron" data-toggle="collapse">click to see comments</a></h4>
				 
				 <div id="CommentBoxjumbotron" class="collapse jumbotron">
				 <?php

				 $sql="SELECT * from comment where IPid_fk=$IPid";
				 $result=$mysqli->query($sql);
				 
				 while($commentInfo=$result->fetch_assoc()){ ?> 
				 
             	  <div class="page-header">
				   
				    <p><h5><font color="blue"><b><?php  echo ucwords($commentInfo['commentername']).' '."says!"; ?></b></font></h5></p>
					<p><h5><?php echo $commentInfo['datetime']; ?></h5></p>
					<p><h5><?php  echo '" '.ucwords($commentInfo['comment']).' "' ;?></h5></p>
				
				  </div>
				   
			   <?php } ?>
			   </div>
			   
			   
			   
			   <h3><b>Votes</b></h3></br>
			   <h3><b>History</b></h3></br>
			  
			</div>
			<div class="col-lg-4 well" style="margin-left:55px;">
			<h4 Class="text-center"><b> CASE</b></h4>
			  <p> <h5><b>Customer Attention: </b>  <font color=""><?php echo $IPinfo['ca'] ;   ?></font></h5></p>
			  <p> <h5><b>Simplicity:   </b><font color=""><?php echo $IPinfo['s'] ;   ?></font></h5></p>
			  <p> <h5><b>Efficiency:   </b><font color="" ><?php echo $IPinfo['e'] ;   ?></font> </h5></p>
			</div>
	
	</div>
	
	
	

   
	<div class="row bg-primary" style="padding:8px;"> <!-------button area ------->
		   <div class="col-lg-9">
					<a href="#"><button type="button" title="Add Vote" class="btn btn-success btn-lg">Vote</button></a>
					<a href="comment.php?IPid=<?php echo $_GET['IPid'];?>"> <button type="button" title="Add Comment" 
					class="btn btn-success btn-lg">Comment</button></a>
					<a href="#"><button type="button" title="Subscribe" class="btn btn-success btn-lg">Subscribe</button></a>
		   </div>
		  
		   <div class="col-lg-2" style="margin-left:70px;">
					<a href="index.php"><button style="margin-right:15px;" type="button" title="Back To Entry Page" 
					  class="btn btn-warning btn-lg">Back to Dashboard</button></a>
		   </div>
		   
	 </div>
   </div><!-------big container--------->
						


  <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>