<?php
   require 'connect1.php';
   if (isset($_POST['submit'])) {
        

    $name = $_POST['fullnames'];
    $email = $_POST['tutorsmail'];
    $phone = $_POST['tutorssnum'];
    $address = $_POST['tutorsaddress'];
    $username = $_POST['tutorsusername'];
    $birthday = $_POST['tutorsbirthday'];
    $password = $_POST['tutorspwd'];
    $rpassword = $_POST['rtutorspwd'];
    $pix = $_POST['tutorspix'];
    $cv = $_POST['tutorscv'];
    $certificate = $_POST['tutorscertificate'];
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
         header("Location:teachaskill.php?error=unmatchedpasswords=".$username.  "&tutorssemail=".$email);
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
    $sql = "INSERT INTO tutorsdata(fullnames,email,number,address,username,birthday,password,rpassword,pix,cv,certificate,skill,howlong,duration,profile) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=mysqli_stmt_init($conn);
        if( !mysqli_stmt_prepare($stmt,$sql)){
        header("Location:teachskill.php?error=connection-error");
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
    header("Location:teachaskill.php");
exit();

}
