<?php

//Retrieving data from the form
//No need to save any data in session variables because we dont need to access it in some other page
//Use of GET method can be considered safe here.
//Use of POST not required as there are no sensitive fields viz. password etc here
/*
if (isset($_GET['submit'])) {
    $name = $_GET['uname'];
    $email = $_GET['email'];
    $browser = $_GET['browser'];
    $reason = $_GET['area'];
    $date = date('Y-m-d');
    $maildata = 'Your feedback has been recorded. Your choice was' . $browser . 'and reason was' . $reason . '';
//Creating the string for sending the mail

    $found = 0; //This variable takes care of protection against repeated entries
//Database connectivity
    $con = mysql_connect("localhost", "root", "");
    mysql_select_db("task", $con);
//Query to select all tuples from the table
    $query = "select * from entries";
    $result = mysql_query($query, $con);
    while ($row = mysql_fetch_array($result)) {
        if (($row['Email'] == $email)) {
            //Checking if the user has already given a poll before
            $oldchoice = $row['Browser']; //Saving his previous choice
            $found = 1; //User found as an old user
            //Updating the user details
            $query = "UPDATE `Task`.`entries` SET `Browser` = '$browser' 
			WHERE `entries`.`Name` = '$name' AND `entries`.`Email` = '$email'";
            $conn = mysqli_connect("localhost", "root", "", "task") or die("failed to connect");
            $res = mysqli_query($conn, $query);

            if (mysql_affected_rows() != 0) {
                //Updating the browser poll details
                $query = "UPDATE `task`.`pollresult` SET `Count` = `Count`-'1' WHERE `pollresult`.`Browser` = '$oldchoice' LIMIT 1";
                $res = mysqli_query($conn, $query);
                $query = "UPDATE `task`.`pollresult` SET `Count` = `Count`+'1' WHERE `pollresult`.`Browser` = '$browser' LIMIT 1";

                //mail($email,"Hello",$maildata);
                //For sending mails

                $res = mysqli_query($conn, $query);
                if (mysql_affected_rows() != 0) {
                    //Redirecting to the results page
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
    }


    if ($found == 0) {//New User
        $conn = mysqli_connect("localhost", "root", "", "task") or die("failed to connect");
        $query = "INSERT INTO `Task`.`entries` (`Name`, `Email`, `Browser`, `Reason`, `Date`) VALUES 
	('$name', '$email', '$browser', '$reason', '$date')";
        $res = mysqli_query($conn, $query);

        if (mysql_affected_rows() != 0) {
            $query = "UPDATE `task`.`pollresult` SET `Count` = `Count`+'1' WHERE `pollresult`.`Browser` = '$browser' LIMIT 1";
            //mail($email,"Hello",$maildata);

            $res = mysqli_query($conn, $query);
            if (mysql_affected_rows() != 0) {
                //Redirecting to the results page
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
}*/
include ('view/v_index.php');
?>