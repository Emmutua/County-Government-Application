<head>
    <link rel="stylesheet" href="checklogin.css">
</head>
<?php      
//user login
    include('connect.php');  
    $idno = $_POST['idno'];  
    $password = $_POST['pwd'];  
      
        //to prevent from mysqli injection  
        $idno = stripcslashes($idno);  
        $password = stripcslashes($password);  
        $idno = mysqli_real_escape_string($con, $idno);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from signup where IdNo = '$idno' and Password = '$password'"; 

        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

        $count = mysqli_num_rows($result);  
          //if there is one common idno and pass
        if($count == 1){ 
            echo '<script> alert("Login successful");</script>';
			header('Location:loggedin.php'); //means that it will trans to that file
			 
        }  
        else{  
            echo '<script> 
            document.getElementById("alert").innerHTML = 
            alert("Incorrect Id or Password");
            </script>';  
            include('login.php');
        }     
?>  



