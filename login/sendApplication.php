<head>
</head>
<?php      
//user login
$host = "localhost: 3306";  
$user = "root";  
$password = '';  
$db_name = "bursaryapp";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
    $idno = $_POST['idno'];
      
        //to prevent from mysqli injection  
        $idno = stripcslashes($idno);  
        $idno = mysqli_real_escape_string($con, $idno);   
      
        $sql = "select * from app where IdNo = '$idno'"; 

        $result = mysqli_query($con, $sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

        $count = mysqli_num_rows($result);  
          //if there is one common idno
        if($count == 1){
            include('./loggedin.php');
            echo '<script> alert("Checking...");</script>';
            echo '<script>
            document.getElementById("errmsg").innerHTML = "ID Exists";
        </script>';  
        echo '<script>
            document.getElementById("applicationStatus").innerHTML = "Applied";
        </script>';  
 }  
        else{  
            
            $host = "localhost: 3306";  
            $user = "root";  
            $password = '';  
            $db_name = "bursaryapp";  
               
               $con = mysqli_connect($host, $user, $password, $db_name);  
               if(mysqli_connect_errno()) {  
                   die("Failed to connect with MySQL: ". mysqli_connect_error());  
               }  
            if(isset($_POST['submit']))
            {
                $fname = $_POST['fname'];  
                $lname = $_POST['lname'];
                $idno = $_POST['idno'];
                $schooltype = $_POST['schooltype'];
                $schoolname = $_POST['school'];
        $details = $_POST['details'];
              //  $admno = $_POST['admno'];
            
            
            $sql1="INSERT INTO app(FirstName,LastName,IdNo,SchoolType,schoolname,details) VALUES('$fname','$lname','$idno','$schooltype','$schoolname','$details')";
            $result1=mysqli_query($con,$sql1);
            
            if(($result1)){
                echo '<script> alert("Success!!! ");</script>';
                    header('Location: loggedin.php');
            }
            else{
            
                echo '<script> alert("ERROR:Please insert correct values in all fields!!! ");</script>';
                    include('loggedin.php');
            }
            }
            mysqli_close($con);

        }     
?>  



