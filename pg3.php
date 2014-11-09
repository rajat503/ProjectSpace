<!DOCTYPE html>
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
		<form class="form-horizontal" role="form">
			<div class="form-group">
		    	<label for="Project_name" class="col-sm-2 control-label">Project Name</label>
		    	<input type="text" class="form-control" placeholder="Write the name of your project">
		  	</div>

		  	<div class="form-group">
		    	<label for="Project_Details" class="col-sm-2 control-label">Project Details</label>
		    	<textarea class="form-control" rows="3" placeholder="Write a brief description of your project"></textarea>
		    </div>

		    <div class="form-group">
		    	<label for="Prequisites" class="col-sm-2 control-label">Prerequisites for the Project</label>
		    	<textarea class="form-control" rows="3" placeholder="Prerequisites"></textarea>
		    </div>

		    
		    
			
			 	<table width="100"  cellpadding="25">
			  
				   <tr>
				     <td>
				       
				     	<label for="branch" class="col-sm-2 control-label">Branch</label>
				       
				       
				   		<select name="dff_category" size="1">
				         <option value="-1">All Categories
				         <option value="-2">--------------
				         <option value="101"> Chemical
				         <option value="102"> EEE and ENI
				         <option value="103"> CS
				         <option value="104"> Mechanical
				         <option value="105"> Physics
				         <option value="106"> Chemistry
				         <option value="107"> Mathematics
				         <option value="108"> Economics
				         <option value="109"> Biology
				         <option value="110"> Others
				         
				       </select>
				       
				     </td>
				   </tr>
				</table>
			
			
	    
			
		<div class="form-group">
		    	<label for="Project_num" class="col-sm-2 control-label">Number of people required</label>
		    	<input type="text" class="form-control" placeholder="How many people required">
		 </div>


				<div class="form-group">
		    	<label for="Contact_Details" class="col-sm-2 control-label">Contact Details</label>
		    	<textarea class="form-control" rows="3" placeholder="How to contact you - Your name, email and phone number"></textarea>
		    </div>
		

		</form>
		</div>
		</div>

	</body>