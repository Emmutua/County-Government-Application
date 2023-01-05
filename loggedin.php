<!DOCTYPE html>
<html>
    <head>
        <script src="validate.js"></script>
    </head>
<style>

/* Full-width input fields */

input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */

button {
    background-color: #48d1cc;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #4682b4;
}

/* Center the image and position
the close button */

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */

.modal {
   display: none;
   position: fixed;
   z-index: 1;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgb(0,0,0);
   background-color: rgba(0,0,0,0.4);
   padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button (x) */

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */ 

.animate {
 -webkit-animation: animatezoom 0.6s;
 animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
 from {-webkit-transform: scale(0)}
 to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel
button on extra small screens */ 

@media screen and(max-width: 300px){
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<h2> Apply</h2>

<!-- apply university  -->
<button onclick="document.
getElementById('id02')

.style.display='block'"
style="width:auto;">Tertiary Institution
</button>


<div id="id02" class="modal">

<form class="modal-content animate"
action="register.php">
<div class="imgcontainer">
<span onclick="document
.getElementById('id02')

.style.display='none'"
class="close" title="Close Modal">
    &times;</span>

    </div>


 <div class="container">
    <h2>Personal Details</h2>
  <label><b>ID Number</b></label>
  <input type="text" placeholder=
  "Enter Id Number"
  name="uname" required>

  <label><b>Enter Your SubCounty</b></label>
  <input type="text" placeholder=
  "SubCounty" name="scounty" required>

  <label><b>Ward</b></label>
  <input type="text" placeholder=
  "Ward" name="ward" required>

  <label><b>Location</b></label>
  <input type="text" placeholder=
  "Location" name="location" required>

  <label><b>Sub-Location</b></label>
  <input type="text" placeholder=
  "Sub-Location" name="slocation" required>

  <label><b>Village</b></label>
  <input type="text" placeholder=
  "Village" name="village" required>
<br>

<h2>Institution</h2>

<label><b>Name of your Institution</b></label>
<input type="text" placeholder=
"Enter Your School" name="school" required>

<label><b>Level of study</b></label>
<select name="levelStudy" id="levelStudy">
    <option value="pgraduate">Postgraduate</option>
    <option value="ugraduate" selected>Undergraduate</option>
    <option value="diploma">Diploma</option>
    <option value="cert">Certificate</option>
</select>
<br><br>
<label><b>Name of your Course</b></label>
<input type="text" placeholder=
"Your Course" name="course" required>

<label><b>Registration Number</b></label>
<input type="text" placeholder=
"Enter your Reg No" name="regNo" required>

<label><b>Enter Year of study</b></label>
<select name="yos" id="yos">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>    
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
</select>
<br><br>
<label><b>Enter Semester</b></label>
<select name="sem" id="sem">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select>
<br><br>
<label><b>Course Duration</b></label>
<select name="sem" id="sem">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3">4</option>
    <option value="3">5</option>
    <option value="3">6</option>
    <option value="3">7</option>
</select>

<br> <br>

  <label><b>Upload register's ID/BirthCertificate</b></label> <br><br>
  <input type="file" name="id-cert" required>
<br>
<br>
  <label><b>Email</b></label> <br>
  <input type="email" placeholder=
  "Email" name="email" required>

<br><br>

<h2>Family</h2>
<label><b>Family:</b></label>
<select name="family" id="family">
     <option value="tOrphan">Total Orphan</option>
    <option value="tOrphan">Partial Orphan</option>
    <option value="tOrphan">Both Parents Alive</option>
</select>
<label><b>Fathers Income:</b></label>
<select name="fincome" id="fincome">
    <option value="O30000">Earns Over Ksh 30000</option>
    <option value="U30000">Earns less than Ksh 30000</option>
    <option value="NoSource">No Specific Source</option>
    <option value="NA">Not Applicable</option>
</select>
<label><b>Mothers Income:</b></label>
<select name="mincome" id="mincome">
    <option value="O30000">Earns Over Ksh 30000</option>
    <option value="U30000">Earns less than Ksh 30000</option>
    <option value="NoSource">No Specific Source</option>
    <option value="NA">Not Applicable</option>
</select>


<button type="submit">Submit</button>
</div>


 <div class="container"
 style="background-color:#f1f1f1">
 <button type="button"
 onclick="document.getElementById
 ('id02').style.

 display='none'" class="cancelbtn">
 Cancel</button>

  </div>
  </form>
</div>

<!-- secondary application form -->
<!-- secondary -->
<button onclick="document.
getElementById('id01')

.style.display='block'"
style="width:auto;">secondary Schools
</button>
<h3>Check If Allocated <a href="https://docs.google.com/document/d/16IfZHtqIJgGGMZmCCFthIt6rSeQ26hcLO0_1Hijxfl0/edit?usp=sharing">readMessage</a></h3>
<div id="id01" class="modal">

    <form class="modal-content animate"
    action="register.php">
    <div class="imgcontainer">
    <span onclick="document
    .getElementById('id01')
    
    .style.display='none'"
    class="close" title="Close Modal">
        &times;</span>
    
     <img src="img_profile.png"
     alt="Avatar"
     class="avatar">
        </div>
    
    
     <div class="container">
      <label><b>Full Names</b></label>
      <input type="text" placeholder=
      "Enter full names"
      name="uname" required>
    
      <label><b>Enter Your SubCounty</b></label>
      <input type="text" placeholder=
      "SubCounty" name="scounty" required>
    
      <label><b>Ward</b></label>
      <input type="text" placeholder=
      "Ward" name="ward" required>
    
      <label><b>Location</b></label>
      <input type="text" placeholder=
      "Location" name="location" required>
    
      <label><b>Sub-Location</b></label>
      <input type="text" placeholder=
      "Sub-Location" name="slocation" required>
    
      <label><b>Village</b></label>
      <input type="text" placeholder=
      "Village" name="village" required>
    <br>
    
    <label><b>Your School</b></label>
    <input type="text" placeholder=
    "Enter Your School" name="school" required>
    
    <label><b>Class</b></label>
    <select name="class" id="class">
        <option value="f1">Form 1</option>
        <option value="f2">Form 2</option>
        <option value="f3">Form 3</option>
        <option value="f4">Form 4</option>
    </select>
    
    <br> <br>
    
      <label><b>Upload Your BirthCertificate</b></label> <br><br>
      <input type="file" name="id-cert" required>
    <br>
    <br>
      <label><b>Parent/Guardians PhoneNumber</b></label> <br>
      <input type="number" placeholder=
      "Phone Number" name="pnumber" required>
    
    <br><br>
    <h2>Family</h2>
<label><b>Family:</b></label>
<select name="family" id="family">
     <option value="tOrphan">Total Orphan</option>
    <option value="tOrphan">Partial Orphan</option>
    <option value="tOrphan">Both Parents Alive</option>
</select>
<label><b>Fathers Income:</b></label>
<select name="fincome" id="fincome">
    <option value="O30000">Earns Over Ksh 30000</option>
    <option value="U30000">Earns less than Ksh 30000</option>
    <option value="NoSource">No Specific Source</option>
    <option value="NA">Not Applicable</option>
</select>
<label><b>Mothers Income:</b></label>
<select name="mincome" id="mincome">
    <option value="O30000">Earns Over Ksh 30000</option>
    <option value="U30000">Earns less than Ksh 30000</option>
    <option value="NoSource">No Specific Source</option>
    <option value="NA">Not Applicable</option>
</select>
    <button type="submit">Submit</button>

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

</body>
</html>