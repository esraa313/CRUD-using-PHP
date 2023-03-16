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
    <form action="" method="post">
        <label for="">Name</label> <br>
    
        <input type='name' name='Sname' value= "">  <br> <br>
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
         <br>


    </form>
</div>

</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = mysqli_connect($servername, $username, $password,$dbname);

        if (isset($_POST["Sname"]) && isset($_POST["email"]) && isset($_POST['gender']) ){
        $name = $_POST['Sname']; 
        $email = $_POST['email']; 
        $gender = $_POST['gender']; 
        if (  isset($_POST['checkbox'])){
            $mail = "yes" ; 
        } else { $mail = "no" ; }
    }
        
        if (isset($_GET['id'])&&isset($_POST["Sname"]) && isset($_POST["email"]) && isset($_POST['gender'])){
            $id = $_GET['id'];
        $sql = "UPDATE students_data SET Sname = '$name', email= '$email',gender=' $gender'
        , Mail_status = '$mail' WHERE id ='$id'";
        $update = mysqli_query($conn,"$sql");
        
        if (mysqli_query($conn, $sql)) {
          echo "Updated successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
         
        }
        
        mysqli_close($conn);
?>

