
<html>
    <head>
        <style>
             body {
        font-family: Arial, sans-serif;
      }
      ::selection {
    background: #ffb7b7;
}


      /* Style the form container */
      .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 30%;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
      }

      /* Style the form elements */
      .form-container input[type="number"],
      .form-container input[type="password"],
      .form-container input[type="text"]
      {
        width: 100%;
        margin-bottom: 15px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      .form-container input[type="submit"],button {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      /* Style the error message */
      .error {
        color: red;
        margin-bottom: 10px;
      }
        </style>
    </head>
    <body>

    <div class="form-container">
    <form action="./sendApplication.php" method="POST">
      <label><b>First Name</b></label> <br>
      <input type="text" placeholder=
      "Enter First Name"
      name="fname" id="uname" required>
    <br>
      <label><b>Last Name</b></label> <br>
      <input type="text" placeholder=
      "Enter Last Name"
      name="lname" required>
     <br>
     <label><b>Id No</b></label> <br>
     <input type="number" placeholder=
     "Enter Id No"
     name="idno" required>
    <br>
    <label>Tertiary/Secondary: Enter</label>
    <input type="text" name="schooltype" placeholder="Tertiary/Secondary">
    <br>
    <label>Enter school</label>
    <input type="text" name="school" placeholder="Enter school"><br>
    <label>Enter Admission</label>
    <input type="text" placeholder=
    "Enter Admission Number" name="reg" required> <br>
    <label>Give details on level of income of parent/Guardian, student with special needs or Orphan</label>
    <textarea name="details"></textarea><br>
    <br>
    <br>
  <input type="submit" name="submit" value="submit">    
  <p id="errmsg" style="color: red"></p>
      </form>
    </div>
  </body>
</html>

