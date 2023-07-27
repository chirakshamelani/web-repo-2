<?php
// Retrieve form data

    if(isset($_POST["btn"]) )
    {
$name = $_POST["name"];
  $address=$_POST["address"];
$order=$_POST["your_order"];

// Database connection details

// Create a connection
$con = mysqli_connect("localhost:3306","root","","reserve");
mysqli_select_db($con,"reserve");


if(mysqli_connect_error()){
    echo "failed";
    exit();
}
echo "connection sucess correct<br>";

$sql= "INSERT INTO deliver(Name,Address,Order) values('$name','$address','$order')";
        $ret = mysqli_query($con,$sql);


        echo "No of records inserted: $ret <br>";

        
    }
   
    else{
        echo "not instered";
    }
    //disconnect
        mysqli_close($con);
?>