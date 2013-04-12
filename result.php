<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<?php

	//For finding the total number of votes in the poll
	$total=0;
	
	//Database connectivity
    include('model/logind.php');
	$query="SELECT count(*) FROM `pollresult`";
	$result=mysql_query($query,$con);
	
	if($result)
	{
		$row = mysql_fetch_row($result);
		$total=$row[0];
	}
	else
	{
		echo "<p>Query failed.</p>\n";
	}

	
	include ('view/v_result.php');
	
?>