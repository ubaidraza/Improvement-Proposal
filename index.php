<?php 
      require 'db.php';
$sql = "select * from ipdetail";
$result = $mysqli->query($sql);
	  
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	<title>Improvement Proposal Portal</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	
	<style type="text/css">
	   .truncate {
		  width: 250px;
		  white-space: nowrap;
		  overflow: hidden;
		  text-overflow: ellipsis;
         }
	</style>
</head>

<body>
	 
	 <div class="container" style="background:#eeeeee"  >
		<div class="row bg-primary">
		   <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
	 		 <h3 class="align-left"><b>Improvement Proposal Portal</b></h3>
		   </div>
	 	</div></br>
	   <div class="row">
	   
	      <h4><b> Upcoming IP's</b></h4>
		  <?php
		           
				   while($IPinfo=$result->fetch_assoc()){ ?>
					   
			<div class="col-lg-4">
			 
				<ul class="jumbotron" style="padding:8px 8px 8px 8px;"> 
				   	<li class="truncate"><a href="IPdetail.php?IPid=<?php echo $IPinfo['IPid']; ?>"><?php echo ucwords($IPinfo['title']);   ?>   </a></li>
				   	<li class="truncate"><a href="IPdetail.php?IPid=<?php echo $IPinfo['IPid']; ?>"><?php echo $IPinfo['feature'] ?></a></li>
				   	<li class="truncate"><a href="IPdetail.php?IPid=<?php echo $IPinfo['IPid']; ?>"><?php echo ucwords($IPinfo['platform']);   ?></a></li>
				   	<li class="truncate"><a href="IPdetail.php?IPid=<?php echo $IPinfo['IPid']; ?>"> Status  </a></li>
				   </ul>
			 
			</div>		
					   
				  <?php } ?>
  
	     </div></br></br>
		 	   <div class="row">
	      <h4> <b>IP's you follow</b></h4>
	        <div class="col-lg-3">
				<ul class="jumbotron" style="padding:8px;">
				   	<li class=""><a href="#">Title</a></li>
				   	<li class=""><a href="#">User Story</a></li>
				   	<li class=""><a href="#">Platform</a></li>
				   	<li class=""><a href="#">Status</a></li>
				   </ul>
			</div>	
			
     </div></br></br></br>
	 
		 <div class="row">
		       <div class="col-sm-12 text-right">
						<a class="text-right" href="createnewimprovementproposal.php"><img src="images/addbutton.png" class="img" title="Add New IP" alt="Add New IP"/></a>
			   </div>
		 </div>
	 </div><!-------big container--------->
							


      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>