<?php
   require 'connect.php';
   if (isset($_POST['submit'])) {
        

    $name = $_POST['learnersnames'];
    $email = $_POST['learnersemail'];
    $phone = $_POST['learnersnum'];
    $address = $_POST['learnersaddress'];
    $username = $_POST['learnersusername'];
    $password = $_POST['learnerspwd'];
    $rpassword = $_POST['repeatlearnerspwd'];
    $pix = $_POST['learnerpix'];
    $skill = $_POST['skill'];
    $howlong = $_POST['howlong'];
    $duration = $_POST['duration'];
    $profile = $_POST['profile'];
 
    /*if(empty($name) || empty($email) || empty($phone) || empty($address) || empty($username) || empty($password) || empty(  $rpassword)
    || empty($pix) || empty($skill) || empty($howlong)
    || empty($duration) || empty($profile))
    {
     header("Location:learnaskill.php?error=some-fields-are-empty");
    exit();
    }*/
    
     if($password !==$rpassword){
         header("Location:learnaskill.php?error=unmatchedpasswords=".$username.  "&learnersemail=".$email);
          exit();
    }
    
     /*else {
        $sql = "SELECT Username FROM learnersdata WHERE Username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:learnaskill.php?error=sqlerror"); 
             exit(); 
        }
   }
*/
else {
    $sql = "INSERT INTO learnersdata(fullnames,email,number,address,username,pwd,rpwd,pix,skill,howlong,duration,profile) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=mysqli_stmt_init($conn);
        if( !mysqli_stmt_prepare($stmt,$sql)){
        header("Location:learnaskill.php?error=connection-error");
            exit();
    }
    
      
      else{  $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
        
        mysqli_stmt_bind_param($stmt, "ssisssssssss", $name, $email,$phone,$address,$username,  $hashedpassword,  $hashedpassword,$pix,$skill,$howlong,$duration,$profile);
        mysqli_stmt_execute($stmt);
        header("Location:index.html?submission=successful");
            exit();
        }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
    header("Location:learnaskill.php");
exit();

}
