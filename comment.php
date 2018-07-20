<?php
require("db.php");
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>

<style type="text/css">
</style>
<body>
	 

	 <div class="container" style="background:#eeeeee"  >
		<div class="row bg-primary">
		   <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
	 		 <h3 class="align-left"><b>Improvement Proposal Portal</b></h3>
		   </div>
	 	</div></br>
		<form action="commentcode.php?IPid=<?php echo $_GET['IPid'] ; ?>" Method="POST">
	   <div class="row">

		  <div class="col-lg-6 col-lg-offset-3">
		  
		   <h5 class="text-warning"><b><?php if(isset($_GET['msg'])) {echo ucwords($_GET['msg']); }?></b></h3></br>
		   
		    <div class="form-group">
			   <label for="commentername">Name<span>*</span></label>
			   <input type="text" id="commentername" required class="form-control" name="commentername" placeholder="Name..." />
		     </div>
			 
			 <div class="form-group">
			   <label for="commenteremail">Email<span>*</span></label>
			   <input type="email" id="commenteremail" required class="form-control" name="commenteremail" placeholder="your mail will not be published" />
		     </div>
			 <div class="form-group">
			   <label for="comment">Enter Comment<span>*</span></label>
			   <textarea rows="15" type="text" required id="comment" class="form-control" name="comment" placeholder="Enter Comment..." ></textarea>
		     </div>
			 <div class="form-group">
			   <input type="submit" class="btn btn-primary btn-lg" value="Submit Comment" name="commentsubmit"/>
			   <a class="text-right" href="IPdetail.php?IPid=<?php if(isset($_GET['IPid'])){ echo $_GET['IPid']; }?>"><button  type="button" class="btn btn-warning btn-lg">Back</button></a>
		     </div>
		   </div>		
	 </form>
	 </div><!-------big container--------->


      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>