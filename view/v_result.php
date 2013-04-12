<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>Browser Poll</title>
</head>
<script type="text/javascript">
//For Google+ like button
	(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();
</script>

<!--Including the external stylesheets-->
<link rel="stylesheet" type="text/css" href="stylesheet.css" />

<body>

	<div id="topshade"></div>
	
	<div id="glike">
		<g:plusone annotation="inline"></g:plusone>
	</div>

	<div id="top"><img src="top.jpg" width="100%" height="150px"></div>

	<div id="heading">
		<center>
			<font size="400%">Browser Poll</font>
		</center>
	</div>
	
	<p class="ex" align="justify">
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

			if($total!=0)
			{
				$query="select * from pollresult";
				$result=mysql_query($query,$con);
		?>
	
	<div id="lol1" align="center">
	
		You feedback has been recorded. Meanwhile, have a look at what others say :)
		<br/>
		Browsers and their results
	</div>
	
	<!--Displaying the results-->
	<div id="tabres">
		<center>
			<table border="0" padding="15px">
				<tr>
					<td>Browser</td>
					<td>Votes</td>
					<td>Percentage of votes<br/>(out of <?php echo ''.$total.' votes)';?></td>
		
					<?php
	
						while($row=mysql_fetch_array($result))
						{
							echo "<tr><td>".$row['Browser'];
							echo "</td><td>".$row['Count'];
							$per=round(($row['Count']/$total)*100,2);
							echo "</td><td>".$per." %</td></tr>";
						}
	
					?>	
			</table>
	</div>
	
	<?php
		$query="SELECT * FROM `entries` GROUP BY `Browser` ORDER BY `Date` LIMIT 0 , 30";
		$result=mysql_query($query,$con);
					
	?>
	
	<div id="lol2" align="center">
		See who all participated
	</div>
	
	<div id="tabent">
		<center>
			<table border="1">
				<tr>
					<td>Name</td>
					<td>email</td>
					<td>Browser</td>
					<td>Reason</td>
					<td>Submitted</td>
				</tr>
				
				<?php
					while($row=mysql_fetch_array($result))
					{
				?>
				
				<tr>
					<td>
						<?php
							echo ''.htmlspecialchars($row['Name']);
						?>
					</td>
					<td>
						<?php
							echo ''.htmlspecialchars($row['Email']);
						?>
					</td>
					<td>
						<?php
							echo ''.htmlspecialchars($row['Browser']);
						?>
					</td>
					<td>
						<?php
							echo ''.htmlspecialchars($row['Reason']);
						?>
					</td>
					<td>
						<?php
							echo ''.htmlspecialchars($row['Date']);
						?>
					</td>
				</tr>
				
				<?php
						}
					}
					else
					{
						echo 'No entries';
					}
				?>
			</table>
		</div>
	</p>

	<div id="foot">
		<br/>
		<center><br/>
			2012 &#169; Harshit Shrivastava
				</br>
		</center>
	</div>

	</center>

</body>
<html>