<?php

require 'db.php';
session_start();

            $title=$_SESSION['title'];
			$platform=$_SESSION['platform'];
			$user=$_SESSION['user'];
			$feature=$_SESSION['feature'];
			$benefits=$_SESSION['benefits'];    //////record from first form put here just for reminder;

	if($_SERVER['REQUEST_METHOD']=='POST'){
	  if(isset($_POST['submit'])){

			
			

		

			$customer_attention=$mysqli->escape_string($_POST['ca']);
			$simplicity=$mysqli->escape_string($_POST['s']);
			$efficiency=$mysqli->escape_string($_POST['e']);
			$priority=$mysqli->escape_string($_POST['priority']);
			$fasttrack=$mysqli->escape_string($_POST['fasttrack']);
			
			$_SESSION['ca']=$customer_attention;
			$_SESSION['s']=$simplicity;
			$_SESSION['e']=$efficiency ;
			$_SESSION['priority']=$priority;
			$_SESSION['fasttrack']=$fasttrack;
			

			

			
  $sql="INSERT INTO ipdetail(title,platform,user,feature,benefits,ca,s,e,priority,fasttrack) 
	  VALUES('$title','$platform','$user','$feature','$benefits','$customer_attention','$simplicity','$efficiency','$priority','$fasttrack')";

	$pass=$mysqli->query($sql);
	if($pass){
					
			$sql = "select * from ipdetail where title='$title'";
            $result = $mysqli->query($sql);
			$IPinfo=$result->fetch_assoc();
			header("location:ipdetail.php?msg=record inserted&&IPid=$IPinfo[IPid]");
		}
		else{
			$_SESSION['msg']="Try Again With valid Inputs";
			header("location:createnewimporvementproposal2.php");
		    }
						}
					  }
 ?>				