<html>
    <body>
        <?php      
            $registerno = $_POST["registerno"];
            $name = $_POST["name"];
            $dob = $_POST["dob"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $phone = intval($_POST["phoneno"]);
       
            $host = "localhost";  
            $user = "root";  
            $password = '';  
            $db_name = "ProjetDb";  
            
            $con = mysqli_connect($host, $user, $password, $db_name); 

            if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
            }  
            $stmt = $con->prepare("INSERT INTO registration (registerno, names, dob, email, peraddress, phone) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss",$registerno, $name, $dob, $email, $address, $phone);
            $stmt->execute();
            
            $stmt->close();
            $con->close();
            
            echo "<center><h1>Thankyou for your Registration</h1></center>"; 
        ?>  
        <center><a href="signup.html">Back</a></center>
        
    </body>
</html>