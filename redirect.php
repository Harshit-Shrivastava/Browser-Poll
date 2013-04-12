<?php

include ('dbconnect.php');
//Retrieving data from the form
//No need to save any data in session variables because we dont need to access it in some other page
//Use of GET method can be considered safe here.
//Use of POST not required as there are no sensitive fields viz. password etc here
$name = mysql_real_escape_string($_GET['uname']);
$email = mysql_real_escape_string($_GET['email']);
$browser = mysql_real_escape_string($_GET['browser']);
$reason = mysql_real_escape_string($_GET['area']);

$name=htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email=htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$browser=htmlspecialchars($browser, ENT_QUOTES, 'UTF-8');

$date = date('Y-m-d');
$maildata = 'Your feedback has been recorded. Your choice was' . $browser . 'and reason was' . $reason . '';
//Creating the string for sending the mail

$found = 0; //This variable takes care of protection against repeated entries
//Database connectivity

$dbobj = new dbconnect();
$result = $dbobj->queryAll();
while ($row = mysql_fetch_array($result)) {
    if (($row['Email'] == $email)) {
        //Checking if the user has already given a poll before
        $oldchoice = $row['Browser']; //Saving his previous choice
        $found = 1; //User found as an old user
        //Updating the user details
        $query = "UPDATE `Task`.`entries` SET `Browser` = '$browser' 
			WHERE `entries`.`Name` = '$name' AND `entries`.`Email` = '$email'";
        $res = $dbobj->executeQuery($query);
        echo "<br/>".$query;

        if (mysql_affected_rows() != 0) {
            //Updating the browser poll details
            $query = "UPDATE `task`.`pollresult` SET `Count` = `Count`-'1' WHERE `pollresult`.`Browser` = '$oldchoice' LIMIT 1";
            $res = $dbobj->executeQuery($query);
            $query = "UPDATE `task`.`pollresult` SET `Count` = `Count`+'1' WHERE `pollresult`.`Browser` = '$browser' LIMIT 1";

            //mail($email,"Hello",$maildata);
            //For sending mails

            $res = $dbobj->executeQuery($query);
            if (mysql_affected_rows() != 0) {
                //Redirecting to the results page
				echo "<br/>"."S0-0";
                //header("Location: result.php");
            } else {
                //Redirecting to error page
                header("Location: sorry.php");
            }
        } else {
            //Redirecting to error page
            header("Location: sorry.php");
        }
    }
}


if ($found == 0) {//New User
    
    $query = "INSERT INTO `Task`.`entries` (`Name`, `Email`, `Browser`, `Reason`, `Date`) VALUES 
	('$name', '$email', '$browser', '$reason', '$date')";
    $res = $dbobj->executeQuery($query);
    
    if (mysql_affected_rows() != 0) {
        $query = "UPDATE `task`.`pollresult` SET `Count` = `Count`+'1' WHERE `pollresult`.`Browser` = '$browser' LIMIT 1";
        //mail($email,"Hello",$maildata);

        $res = $dbobj->executeQuery($query);
        if (mysql_affected_rows() != 0) {
            //Redirecting to the results page
            echo 
			header("Location: result.php");
        } else {
            //Redirecting to error page
            header("Location: sorry.php");
        }
    } else {
        //Redirecting to error page
        header("Location: sorry.php");
    }
}
?>