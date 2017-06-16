<?php
include("include.php");

if(isset($_POST["username"]) && isset($_POST["sex"]) && isset($_POST["address"]) && isset($_POST["email"]) && isset($_POST["type"]) && isset($_POST["e_contactname"]) && isset($_POST["e_contacttel"])){


	$name = $_POST["username"];
	$sex = $_POST["sex"];
	$addr = $_POST["address"];
	$email = $_POST["email"];
	$contactname = $_POST["e_contactname"];
	$contacttel = $_POST["e_contacttel"];

	$insert = "insert tour(tName,tSex,tAddr,tEmail,tContactname,tContacttel) value('$name','$sex','$addr','$email','$contactname','$contacttel')";
	$result = mysqli_query($link,$insert);
}

?>