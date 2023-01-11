<?php
include('./connect.php');
$sql="SELECT * FROM app ORDER BY IdNo";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
for($count=0;$row=mysqli_fetch_assoc($result);$count++){
	$name=$row['FirstName'];
echo("<tr>");
$no=$count+1;
echo("<td>$no</td>");
foreach($row as $key=>$value)
	echo("<td>$value </td>");
echo("</tr>");
}
}else{
echo("No applications");

}

?>