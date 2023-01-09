<?php 
include("adminLogin.php")
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<div id="id01" class="modal">

<form class="modal-content animate"
action="checklogin.php" name = "login" method = "POST" id="login">
<div class="imgcontainer">
<span onclick="document
.getElementById('id01')

.style.display='none'"
class="close" title="Close Modal">
    &times;</span>

    </div>
    
<!-- 
    <button onclick="document.
    getElementById('Asignin').style.display='block'"
    style="width:auto; font-size: 20px;">Admin</button>  -->

    
 <div class="container">
  <label><b>IdNo</b></label> <br>
  <input type="number" placeholder=
  "Enter Id"
  name="idno" id="idno" required>

 <br>
<label><b>Password </b></label>
<input type="password" placeholder=
"Enter Password" name="pwd" id="pwd" required>

<!-- <button type="submit">SignIn</button> -->
<input type="submit" name="login">
<p id = "msg" style="color: red;"></p>
<br>
<p>No Account?   <button onclick="document.
    getElementById('signup').style.display='block'"
    style="width:auto; font-size: 20px;">SignUp</button></p>
 
<input type="checkbox"
checked="checked">
Remember me
</div>


 <div class="container"
 style="background-color:#f1f1f1">
 <button type="button"
 onclick="document.getElementById
 ('id01').style.

 display='none'" class="cancelbtn">
 Cancel</button>
 <button type="button"
 onclick="document.getElementById
 ('asignin').style.

 display='block'">
 Admin</button>
  </div>
  </form>
</div>


<!-- ADMIN LOGIN -->

<?php
include("adminLoggedin.php")
?>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<div id="asignin" class="modal">

<form class="modal-content animate"
action="adminLoggedin.php" name = "Asignin" method = "POST" id="Asignin">
<div class="imgcontainer">
<span onclick="document
.getElementById('asignin')

.style.display='none'"  
class="close" title="Close Modal">
    &times;</span>

    </div>


 <div class="container">
  <label><b>UserName</b></label> <br>
  <input type="text" placeholder=
  "Enter User Name"
  name="uname" id="uname" required>

 <br>
<label><b>Password </b></label>
<input type="password" placeholder=
"Enter Password" name="Apsw" id="Apwd" required>

<input type="submit" name="adminlogin">
<p id = "msg" style="color: red;"></p>
<br>
</div>


 <div class="container"
 style="background-color:#f1f1f1">
 
 <button type="button"
 onclick="document.getElementById
 ('id01').style.

 display='none'" class="cancelbtn">
 Cancel</button>
  </div>
  </form>
</div>
</html>