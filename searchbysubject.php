<?php
require 'connect.php';
//include 'options.php';
if(isset($_POST['category']))
{
	$category=$_POST['category'];
	if(!empty($category))
	{
		$query="SELECT * FROM `projects` WHERE `branch`='$category'";
		if($query_run=mysql_query($query))
		{
			 $query_num_rows=mysql_num_rows($query_run);
			 if($query_num_rows==0)
			 {
			    echo "No projects in the branch.";
			 }
			for($a=$query_num_rows-1;$a>=0;$a--)
			{
				
					$serial=mysql_result($query_run,$a,'serial');
					echo mysql_result($query_run,$a,'title').'<br/>';
					echo mysql_result($query_run,$a,'details').'<br/>';
					echo mysql_result($query_run,$a,'prereq').'<br/>';
					echo mysql_result($query_run,$a,'number').'<br/>';
					echo mysql_result($query_run,$a,'name').'<br/>';
					echo mysql_result($query_run,$a,'contact').'<br/>';
			}
		}
		else
		{
			echo "Query Failed.";
		}	
	}			
	else
	{
		echo "You must select Branch.";
	}
}
?>
<form action="searchbysubject.php" method="POST">
<select name="category" size="1">
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
						       <input type="submit" value="Search">
<!-- Select Category: 
<select name="category">
	<option value="">Select</option>
	<option value="A1">Chemical</option>
	<option value="A3">Electrical, Electronics and Instrumentation</option>
	<option value="A4">Mechanical</option>
	<option value="A7">Computer Science</option>
	<option value="B1">Biological Sciences</option>
	<option value="B2">Chemistry</option>
	<option value="B3">Economics</option>
	<option value="B4">Mathematics</option>
	<option value="B5">Physics</option>
	<option value="H1">Humanities Elective</option>
	<option value="O1">Others</option>
</select> <br/>
<input type="submit" value="Search">
</form> -->