<?php
$servername="localhost";
$username="root";
$password  ="";
$database_name="database001";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//checking the connection 
if(!$conn)
{
    die("connection failed:". mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $First_name=$_POST['First_name'];
    $Last_name= $_POST['Last_name'];
    $Address= $_POST['Address'];
    $Gender=$_POST['Gender'];
    $State=$_POST['State'];
    $City=$_POST['City'];
    $Course=$_POST['Course'];
    $Email=$_POST['Email'];
    $Date_of_birth=$_POST['Date_of_birth'];
    $Mobile_no=$_POST['Mobile_no'];

    $sql_query="INSERT INTO entry_details(First_name,Last_name,Address,Gender,State,City,Course,Email,Date_of_birth,Mobile_no)
                VALUES('$First_name','$Last_name','$Address','$Gender','$State','$City','$Course','$Email','$Date_of_birth','$Mobile_no')";
    
    if(mysqli_query($conn,$sql_query))
    {
        echo "New Details Entery Inserted Successfully !";
    }
    mysqli_close($conn);
}
?>