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
  			<div class="row">
				<div class="col-md-8">
				
					<div class="jumbotron">
  						<h1>WELCOME TO BITS GOA PROJECTS INFORMATION PORTAL </h1>
  					</div>
				</div>
				
				<div class="col-md-4">
					<form name="search_bar" method="get">
			 			<table width="100"  cellpadding="25">
			  
						   <tr>
						     <td>
						       <input type="hidden" name="dff_view" value="grid">
						       Search

						       <input type="text" name="dff_keyword" size="30" maxlength="50">
						       
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
						       <input type="submit" value="Find">
						     </td>
						   </tr>
						 </table>
						</form>
				</div>
			</div>
			</div>
			
			
			

			
			<div class="row">
				<div class="col-md-0">
					
				</div>
				<div class="col-md-12">
					<a href="addproject.php" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block">Give your project Info</button></a>
				</div>
			</div>
	<div class="row">
				<div class="col-md-0">
					
				</div>
				<div class="col-md-12">
					<a href="viewall.php" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block">View all projects</button></a>
				</div>
			</div>		</div>

		<!-- need to add javascript links here -->

	</body>

	