<?php
require 'connect.php';
if(isset($_POST['title']) && isset($_POST['details']) && isset($_POST['prereq']) && isset($_POST['number']) && isset($_POST['category']) && isset($_POST['contact']) && isset($_POST['name']))
{
	$title=$_POST['title'];
	$details=$_POST['details'];
	$prereq=$_POST['prereq'];
	$number=$_POST['number'];
	$category=$_POST['category'];
	$contact=$_POST['contact'];
	$name=$_POST['name'];
	if(!empty($title) && !empty($details) && !empty($prereq) && !empty($category) && !empty($number) && !empty(contact) && !empty(name))
	{
		$query="INSERT INTO `projects` VALUES ('','".$title."','".$details."','".$prereq."','".$category."','".$number."','".$contact."','".$name."')";
		if($query_run=mysql_query($query))
		{
			header('Location: index.php');
		}
		else
		{
			echo "Query Failed.";
		}	
	}			
	else
	{
		echo "You must enter all fields.";
	}
}
?>

<html lang="en">

	<head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Ashish Kumar, Rajat Gupta and Bootstrap contributors">
		<meta name="keywords" content="Portal for submitting and searching projects">

		<title>Project Portal | HOME Page</title>

		<!-- Mobile First -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		
		<!-- My css file -->
		<link rel="stylesheet" type="text/css" href="mycss.css">

		<!-- Bootstrap css files offline -->
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">

		<!-- favicon -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- 
		online bootstrap css - slower 

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		-->

	</head>

	<body background="background.jpg">
		<div class="container">
		<div id="padtop">
		<form class="form-horizontal" role="form" action="addproject.php" method="POST">
			<div class="form-group">
		    	<label for="Project_name" class="col-sm-2 control-label">Project Name</label>
		    	<input type="text" name="title" class="form-control" placeholder="Write the name of your project">
		  	</div>

		  	<div class="form-group">
		    	<label for="Project_Details" class="col-sm-2 control-label">Project Details</label>
		    	<textarea class="form-control" name="details" rows="3" placeholder="Write a brief description of your project"></textarea>
		    </div>

		    <div class="form-group">
		    	<label for="Prequisites" class="col-sm-2 control-label">Prerequisites for the Project</label>
		    	<textarea class="form-control" name="prereq" rows="3" placeholder="Prerequisites"></textarea>
		    </div>

		    
		    
			
			 	<table width="100"  cellpadding="25">
			  
				   <tr>
				     <td>
				       
				     	<label for="branch" class="col-sm-2 control-label">Branch</label>
				       
				       
				   		<select name="category" size="1">
				         <option value="All Categories">All Categories
				         <option value="Chemical"> Chemical
				         <option value="EEE and ENI"> EEE and ENI
				         <option value="CS"> CS
				         <option value="Mechanical"> Mechanical
				         <option value="Physics"> Physics
				         <option value="Chemistry"> Chemistry
				         <option value="Mathematics"> Mathematics
				         <option value="Economics"> Economics
				         <option value="Biology"> Biology
				         <option value="Others"> Others
				         
				       </select>
				       
				     </td>
				   </tr>
				</table>
			
			
	    
			
		<div class="form-group">
		    	<label for="Project_num" class="col-sm-2 control-label">Number of people required</label>
		    	<input type="text" name="number" class="form-control" placeholder="How many people required">
		 </div>


		 		<div class="form-group">
		    	<label for="name" class="col-sm-2 control-label">Your name</label>
		    	<textarea class="form-control" name="name" rows="3" placeholder="How to contact you - Your name, email and phone number"></textarea>
		    </div>

				<div class="form-group">
		    	<label for="Contact_Details" class="col-sm-2 control-label">Contact Details</label>
		    	<textarea class="form-control" name="contact" rows="3" placeholder="How to contact you - Your name, email and phone number"></textarea>
		    </div>
		
		
		    <input type="submit" value="Add">
		</form>
		</div>
		</div>

	</body>
	