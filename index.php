<?php
$dbname="jm835";
$servername = "sql2.njit.edu";
$username = "jm835";
$password = "nmWe2eMHS";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully </br>"; 
    $sql=$conn ->prepare("SELECT * FROM accounts WHERE id < 6");
    $sql->execute();
    $rows= $sql ->rowcount();
    echo $rows. "<br/>";
     $results=$sql-> fetchall(PDO::FETCH_ASSOC);
     echo "<table>";
     echo "<tr>";
     echo "<th>ID</th>";
     echo "<th>Email</th>";
	 echo "<th>First Name</th>";
	 echo "<th>Last Name</th>";
	 echo "<th>Phone</th>";
	 echo "<th>Birth Day</th>";
	 echo "<th>Gender</th>";
	 echo "<th>Password</th>";
     echo "</tr>";

     foreach($results as $row){
     echo "<tr>";
     echo "<td>".$row['id']."</td>";
     echo "<td>".$row['email']."</td>";
	 echo "<td>".$row['fname']."</td>";
	 echo "<td>".$row['lname']."</td>";
	 echo "<td>".$row['phone']."</td>";
	 echo "<td>".$row['birthDay']."</td>";
	 echo "<td>".$row['gender']."</td>";
	 echo "<td>".$row['password']."</td>";
     echo "</tr>";
     }
echo"</table>";


    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn=null;
?>
