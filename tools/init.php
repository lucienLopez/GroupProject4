<?php
//Tool that handles database connection, and that checks if the user is already connected


//checks if the user is alredy connected, and if he is an admin
$connected=false;
$isAdmin = false;
session_start();
if(isset($_SESSION['id_user'])){
	$connected = true;
	if($_SESSION['userIsAdmin']==1){
		$isAdmin = true;
	}
}


//handles database connection
//TODO : better exceptions
$dbhandle = mysql_connect("127.0.0.1", "root", "")
  or die("Unable to connect to MySQL");
$groupProjectDB = mysql_select_db("groupproject",$dbhandle)
  or die("Could not select db");
  ?>