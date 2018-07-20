<?php
require "db.php";
$IPid='';
if(isset($_GET['IPid'])){
	$IPid_fk=$_GET['IPid'];
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['commentsubmit'])){
		
       
       $name=$mysqli->escape_string($_POST['commentername']);
	   $email=$mysqli->escape_string($_POST['commenteremail']);
	   $comment=$mysqli->escape_string($_POST['comment']);
	   
	   
	   
	   $sql="INSERT INTO comment(commentername,commenteremail,comment,IPid_fk) VALUES('$name','$email','$comment',$IPid_fk)";
	   $pass=$mysqli->query($sql);
	   if($pass){
		   
		   $sql="SELECT * from comment where IPid_fk=$IPid ";
		   $result=$mysqli->query($sql);
		   
		   
		   header("location:ipdetail.php?IPid=$_GET[IPid]&&IPid_fk=IPid=$_GET[IPid]");
	   }
	   else{
		   header("location:comment.php?msg=comment has not inserted Try Again with valid inputs!");
	   }

	}
}
?>