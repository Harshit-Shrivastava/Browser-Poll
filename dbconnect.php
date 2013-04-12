<?php

class dbconnect {

    var $host;
    var $user;
    var $pass;
    var $dbname;

    function __construct() 
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->dbname = 'task';
    }

    function queryAll() {
        $con = mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->dbname, $con);
		
		//Query to select all tuples from the table
        $query = "select * from entries";
        $result = mysql_query($query, $con);
        return $result;
    }
    
    function executeQuery($query)
    {
        $con = mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->dbname, $con);
        $res=mysql_query($query,$con);
        
		$conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname) or die("failed to connect");
        $res = mysqli_query($conn, $query);
		
		return $res;
    }

}

?>
