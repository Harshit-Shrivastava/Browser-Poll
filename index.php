<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>Browser Poll</title>
</head>

<script type="text/javascript">
  //function for including the Google+ like button
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<!--For including the external CSS files-->
<link rel="stylesheet" type="text/css" href="plainstyle.css" />
<link rel="stylesheet" type="text/css" href="stylesheet.css" />

<script type="text/javascript" language="javascript">
//method for validation of form
function validateForm()
{
	//validation of name text-field
	var x=document.forms["form1"]["uname"].value;
	if (x==null || x=="")
	{
		alert("Please enter name");
		return false;
	}
	
	//validation of reason text-area
	var y=document.forms["form1"]["area"].value;
	if (y==null || y=="")
	{
		alert("Please specify reason");
		return false;
	}
}

</script>

<body>


<div id="topshade"></div>
<div id="glike">
<!--Placing the Google+ like button-->
<g:plusone annotation="inline"></g:plusone>
</div>
<div id="top"><img src="top.jpg" width="100%" height="150px"></div>
<div id="heading"><center><font size="400%">Browser Poll</font></center>
</div>
<p class="ex" align="justify">

<div id="login">

<!--The form starts from here-->
<form name="form1" method="get" action="redirect.php" onsubmit="return validateForm()">

<div id="dleft">
<center><font color="#D13E19">Please enter the details for browser poll</font></center><br />
<br/><br/>Name : 

<br/><br/>E-mail : 

<br/><br/>Browser Choice :

<br/><br/><br/><br/><br/><br/><br/><br/><br/>Reason: 
<br/><br/><br/><br/><br/><br/><center>
&nbsp;&nbsp;&nbsp;
<input type="submit" value="Submit">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Clear">
</center>
</div>

<div id="dright"> 
<br/>
<br/><br/><br/>
<input type="text" name="uname" size="32" placeholder="Name">

<br/><br/>
<!--HTML 5 supports email text field and also performs validation over this textfield,
so no separate JavaScript validation required for this-->
<input type="email" name="email" size="32" placeholder="me@example.com"/>
<br/><br/>
<input type="radio" name="browser" value="Internet Explorer">Internet Explorer<br/>
<input type="radio" name="browser" value="Firefox">Firefox<br/>
<input type="radio" name="browser" value="Chrome">Chrome<br/>
<input type="radio" name="browser" value="Safari">Safari<br/>
<input type="radio" name="browser" value="Opera">Opera<br/>
<input type="radio" name="browser" value="Konqueror">Konqueror<br/>
<input type="radio" name="browser" value="Lynx">Lynx<br/>
<br/><br/>
<textarea name="area" rows="4" columns="25" placeholder="Please specify reason">
</textarea><br/><br/><br/>

</div>

</form>
</div>

</p>
<div id="foot">
<br/>
<center><br/>
2012 (c) Harshit Shrivastava
</br>
</center>
</div>
</center>

</body>
<html>