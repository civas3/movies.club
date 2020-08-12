
<?php
ob_start();
$email = $_POST['email'];
if (!empty($email)) {
 $host = "_EXAMPLE.EXAMPELmysql.com_";
    $dbUsername = "_GOESHERE_";
    $dbPassword = "_GOESHERE_";
    $dbname = "_GOESHERE_";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (email) values(?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("s",$email);
      $stmt->execute();
      echo("<script>window.location = '../thank-you-for-signing-up.php';</script>");
     } else {
      echo("<script>alert('Someone already register using this email')</script>");
      
      echo("<script>window.location = '../index.php';</script>");
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
ob_end_flush();
?>
