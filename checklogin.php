<?php
$correctPwd = "admin";
$correctUname = "user";
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
if($uname == $correctUname && $pwd == $correctPwd){
    	//header('Location:loggedin.php');
        include("loggedin.php");

}else{
    include('login.php');
            echo "<p style="."color:red;"."> Login failed. Invalid username or password.</p>";
}
?>