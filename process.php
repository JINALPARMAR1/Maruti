<?php
session_start();
require("connection.php");
extract($_POST);  
                                
if (isset($btninsert)) {
  
  $Firstname = $Name;
      $People = $People;
      $date = $date;
      $Message = $Message;
      
        $q = "INSERT INTO maruti_tbl(Firstname,People,Date,Message) VALUES ('$Firstname','$People','$date','$Message')";
        /*print_r($q);
        exit();*/
      
      $data = mysqli_query($con,$q);
      if($data == true){
            header('Location:index.php');
            }
        else
        {

            $_SESSION['error']="Invalid Email";
            header('Location:.php');

        }

            
      
}

?>
