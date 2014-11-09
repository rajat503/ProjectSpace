<?php
require 'connect.php';
//include 'options.php';
$query="SELECT * FROM `projects`";
if($query_run=mysql_query($query))
{
	$query_num_rows=mysql_num_rows($query_run);
	if($query_num_rows==0)
	{
		echo "No projects listed.";
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
?>