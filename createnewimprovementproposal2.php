<?php 
require 'db.php';
session_start();

  if($_SERVER['REQUEST_METHOD']=='POST'){
	 if(isset($_POST['submit'])){
		 
            $title=$mysqli->escape_string($_POST['title']);
			$platform=$mysqli->escape_string($_POST['platform']);
			$user=$mysqli->escape_string($_POST['user']);
			$feature=$mysqli->escape_string($_POST['feature']);
			$benefits=$mysqli->escape_string($_POST['benefits']);

		    $_SESSION['title']=$title ;
			$_SESSION['platform']=$platform ;
			$_SESSION['user']=$user;
			$_SESSION['feature']=$feature;
			$_SESSION['benefits']=$benefits;
		
		
		}
	}
	
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
		
		<form action="formsubmission.php" Method="POST" enctype="multiplart/form-data">
		
	   <div class="row">
	      <div class="col-lg-8">
		    
			  
			  <h4 class="text-center"><b>Assess IP</b></h4>
			  
			  <div class="col-lg-12">
				  <div class="form-group">
					<label for="ca">Customer Attention</label><textarea rows="4" required id="ca" class="form-control" placeholder="Which impact can this IP possibly have on the end customer attention?" name="ca"></textarea>
				  </div>
			  </div>
			  
			  
			  <div class="col-lg-12">
				  <div class="form-group">
					<label for="s">Simplicity</label><textarea rows="4" required id="s" class="form-control" placeholder="How does this simplify our workflows?"  name="s"></textarea>
				  </div>
			  </div>
			  
			  <div class="col-lg-12">
				  <div class="form-group">
					<label for="e">Efficiency</label><textarea rows="4" required id="e" class="form-control" placeholder="To which extent does it make processes more efficient?"  name="e"></textarea>
				  </div>
			  </div>
			  
			  <div class="col-lg-8">
				  <div class="form-group">
					<label for="priority">Priority (1-5)</label>
					      <Select required id="priority" class="form-control" name="priority">
									<option selected value="1">1 - High priority and business critical</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5 Nice to have”</option>
					      <Select>
				  </div>
			  </div>
			  
			  <div class="col-lg-12">
				  <div class="form-group">
					<label for="fasttrack">Fast Track</label>
					       
						      
					      <input type="checkbox" name="fasttrack" id="fasttrack" value="Yes" 
						   title="Do you believe this is a fast track change (in terms of being business critical, a breach of compliancy regulations and/or takes a very short amount of time to change)?"
							class="" /><p class="text-primary">Do you believe this is a fast track change (in terms of being business critical, a breach of compliancy regulations and/or takes a very short amount of time to change)?</p>   
				  </div>
			  </div>
			  
			  <div class="col-lg-12">
				  <div class="form-group">
					<label for="file">Upload File</label> <Span class="glyphicon glyphicon-upload"></span> <input  type="file" id="file"  name="file[]"  multiple />
				  </div>
			  </div>	  
		  </div>
		  
		  
		  <div class="col-lg-6">

		  </div>	  
	   </div></br></br></br>
	   
		<div class="row"> <!-------button area ------->
		 	   <div class="col-lg-6 text-left">
				 <a class="text-right" href="index.php"><button style="margin-left:15px; margin-bottom:25px;" type="button" title="back to entry page" class="btn btn-warning btn-lg">Cancel</button></a>
			   </div>
		       <div class="col-lg-6 text-right">
						<input style="margin-right:15px; margin-bottom:25px;" type="submit" value="Submit" class="btn btn-success btn-lg" name="submit"  class="img"src="images/mark.png" title="Submit.." alt="Submit" />
			   </div>
		</div>
		 </form>
	 </div><!-------big container-------->
	 
      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>