<html>
<body>


    
  
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    
$city = $_POST["city"];
$email = $_POST["email"];
$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$service_type = $_POST["svc_pro_type"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$phone_number = $_POST["phonenumber"];    
$sql = "INSERT INTO service.provider_info (city, email, first_name, last_name, service_type, state, zip_code, phone_number) VALUES ('$city', '$email', '$first_name', '$last_name', '$service_type', '$state', '$zipcode', '$phone_number')";
    
    

if ($conn->query($sql) === TRUE) {
    echo "Your information has been reccorded.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();      

    
 
    
    
    
?>
    
    

    
    
    
    

</body>
</html>