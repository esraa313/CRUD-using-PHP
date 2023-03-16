<?php
// // $sql = "CREATE DATABASE Students"; //Database creation
// mysqli_select_db( $conn,$dbname ); // Database selection

// // $sql = "CREATE TABLE Students_data (                   //Table creation
// //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// //     Student_name VARCHAR(30) NOT NULL,
// //     email VARCHAR(30) NOT NULL,
// //     Gender char,
// //     mail_status enum('yes','no'),
// //     DBaction VARCHAR(30)
// //     )";

   
//    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        
        div{
            height: 560px;
            display: flex;
           align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div>
    <a href="http://localhost/Lab4_PHP/Table.php">
            <button style="background-color: rgb(117, 155, 163);
         color: white; padding: 8px 15px 8px 15px; border: none;">Go to Table >></button></a>
    <h1>User Registration form</h1>
    <hr style="width:100px">
    <p>please fill this form and submit to add new user</p>
    <form action="/Lab4_PHP/php.php" method="post">
        <label for="">Name</label> <br>
        <input type="name" name="Sname"> <br> <br>
        <label for="">Email</label> <br>
        <input type="email" name="email" id=""> <br> <br>
        <label for=""name="gender">Gender</label> <br>
        <input type="radio" name="gender" value="F" id=""> 
        <label for="">Female</label> <br>
        <input type="radio" name="gender" value="M"  id=""> 
        <label for="">Male</label> <br> <br>
        <input type="checkbox" name="checkbox" value="yes" >
        <label for="">Recieve E-Mails from us.</label> <br> <br>
        <input type="submit" style="background-color: rgb(117, 155, 163);
         color: white; padding: 8px 15px 8px 15px; border: none;">
         


    </form>
    
         <br>
</div>

</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = mysqli_connect($servername, $username, $password,$dbname);

// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }else{
//     echo "true";
// }
        if (isset($_POST["Sname"]) && isset($_POST["email"]) && isset($_POST['gender']) ){
        $name = $_POST['Sname']; 
        $email = $_POST['email']; 
        $gender = $_POST['gender']; 
        if (  isset($_POST['checkbox'])){
            $mail = "yes" ; 
        } else { $mail = "no" ; }
        
        echo $name;
        $sql = "INSERT INTO students_data (Sname, email, Gender, mail_status)
        VALUES ('$name','$email' ,'$gender','$mail')";
        
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
         
        }
        
        mysqli_close($conn);
?>



<?php



"<p> esraa </p>" ;


?>



<p> esraa </p>;