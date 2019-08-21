<html>
    
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}    
    
    
    
    
    
    
    
    
    
</style>    
    
    
</head>    

<body>  
   <center>
       <br>
       <table>
<?php
    
$svc_type = $_POST["svc_pro_type"];
$zipcode =  $_POST["zipcode"];
           
$service_finder_sql = "SELECT * from service.provider_info where  service_type = '" . $svc_type . "' and zip_code = '" . $zipcode .  "'"  ;

$servername = "localhost";
$username = "root";
$password = "";


$link = new mysqli($servername, $username, $password);

if($result = mysqli_query($link, $service_finder_sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Email</th>";
                echo "<th>phone number</th>";
                
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}    
    
?>
           </table>
</center>
</body>
</html>