<?php  
session_start();
require "db.php";  
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
  width: 220px;
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
	<form action="createnewimprovementproposal2.php"  Method="POST" >
   <div class="row">
	  <div class="col-lg-7">
	  
		
		
		  <div class="col-lg-6">
		   <label for="title">Create new IP</label><input  onkeyup="myFunction();" id="title" required class="form-control" type="text" placeholder="Title..." name="title" />
		  </div>
		  
		  <div class="col-lg-6">
			 <div class="form-group">
			<label for="platform">Platform</label><input id="platform" required class="form-control" type="text" placeholder="Platform..." name="platform" />
			 </div>
		  </div> </br></br>
		  
		  
		  <div class="col-lg-3">
			  <div class="form-group">
				<label for="user">As a...</label><input id="user" required class="form-control" type="text" placeholder="User..." name="user" />
			  </div>
		  </div>
		  
		  
		  <div class="col-lg-12">
			  <div class="form-group">
				<label for="feature">I want to...</label><textarea  rows="6" required id="feature" class="form-control" placeholder="Feature..." name="feature"></textarea>
			  </div>
		  </div>
		  
		  
		  <div class="col-lg-12">
			  <div class="form-group">
				<label for="benefit">So that I...</label><textarea rows="7" required id="benefit" class="form-control" placeholder="Benefits..."  name="benefits"></textarea>
			  </div>
		  </div>
		  
	  </div>
	  
	  <div class="col-lg-4 well " style="height:503px; overflow-y:scroll; margin-left:70px;">
	   <div class=" col-lg-12" id="outer" >
					 
					 <h4 Class="text-center"><b> Similar IP's</b></h4>
					 <?php
		           
				   while($IPinfo=$result->fetch_assoc()){ ?>
				   

			<ul class="col-lg-12 jumbotron" style="padding:8px 8px 8px 8px;" id="myul">
				    <li class="truncate"><a href="IPdetail.php?IPid=<?php echo $IPinfo['IPid']; ?>"><?php echo ucwords($IPinfo['title']);   ?>   </a></li>
				   	<li class="truncate"><a href="IPdetail.php?IPid=<?php echo $IPinfo['IPid']; ?>"><?php echo $IPinfo['feature'] ?></a></li>
				   	<li class="truncate"><a href="IPdetail.php?IPid=<?php echo $IPinfo['IPid']; ?>"><?php echo ucwords($IPinfo['platform']);   ?></a></li>
				   	<li class="truncate"><a href="IPdetail.php?IPid=<?php echo $IPinfo['IPid']; ?>"> Status  </a></li>
			</ul>		
		 
			
		<?php } ?>

			
		
	   </div>
	  </div>
		

	  
   </div></br></br></br>
   
	 <div class="row"> <!-------button area ------->
		   <div class="col-lg-6 text-left">
					<a class="text-right" href="index.php"><button style="margin-left:15px; margin-bottom:25px;" 
					type="button" title="back to entry page"class="btn btn-warning btn-lg">Cancel</button></a>
		   </div>
		   <div class="col-lg-6 text-right">
				
					<input style="margin-right:15px; margin-bottom:25px;" type="submit" role="submit" Value="Next" name="submit" class="btn btn-success btn-lg" class="img" src="images/next.png" title="Next Page" alt="Submit"/>

		   </div>
	 </div>
 </form>
 </div><!-------big container--------->

						
<script>

function myFunction(){  

    var input, filter, ul, li, a, i;
	
    input = document.getElementById("title");
    filter = input.value.toUpperCase();
    ul = document.getElementsByTagName("ul");
    li = document.getElementsByTagName("li");
	
     for (i = 0; i < li.length; i++) { 
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) >-1) {
			li[i].style.display = " ";
        } else {
			li[i].style.display = "none";
        }
    }
}

</script>
  <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>