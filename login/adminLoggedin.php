<!DOCTYPE html>
<html>
<head>
    <title>Applications</title>
    <style>
        /* Add some styling to the page */
        h1,p {
            text-align: center;
            font-size: 3em;
            margin-top: 50px;
        }
        .container {
            width: 60%;
            margin: 0 auto;
        }
        /* Style the button */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        /* Style the available money display */
        .money {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding: 20px;
            background-color: #f2f2f2;
        }
        .money p {
            font-size: 1.5em;
            margin: 0;
        }
    </style>
</head>
<body>
<button onclick="Applications()"> <h1>Applications</h1>
</button>
   
    <p>No of Applicants: 
        <?php
        include('./connect.php');
        $sql = "select * from app"; 

        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

        $allocations = mysqli_num_rows($result); 
        echo $allocations;
        ?>
    </p>
    <a href="./viewApplications.php"><h1>Applicants</h1></a>
    <div class="container">
        <div id = "money" class="money">
            <p>Total Money : Sh<?php
            include('./connect.php');
        $sql = "SELECT total FROM bursaryamount WHERE id = 'ba'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

            $money_before = 1000000; 
                 echo $money_before;
            ?></p>
            <p>Available Money: Sh<?php 
                $allocated_amount = 10000;

                 $money_after = $money_before - ($allocated_amount*$allocations);
                echo $money_after;
            ?></p>
        </div>
    </div>
    <script>
        function Applications() {
            alert("Loading available applications...");
        }
    </script>
</body>
</html>
