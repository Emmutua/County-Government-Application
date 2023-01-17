<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./style.css">
        <style>
            .body{
                display: flex;
        flex-direction: column;
        align-items: center;
        width: 30%;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
            }
        </style>
    </head>

<body style="background-color: white; height:100vh;">

<?php

?>

<div class="body">

<h2 id="welcome"></h2>
<h3> Apply</h3>
<!-- application form -->
<a href="./applyBursary.php"><button style="width:auto;">Click to Apply
</button></a>
<p id="errmsg" style="color: red;"></p>
    <h3><span id="applicationStatus" style="color: red;"></span></h3>
    <!-- <h3>Allocation: <span id="allocationStatus" style="color: red;">Not Yet Applie</span</h3> -->
</body>
</html>