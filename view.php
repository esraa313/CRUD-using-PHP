<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "students";
 
 $conn = mysqli_connect($servername, $username, $password,$dbname);
 
$query ="select * from students_data";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap"
rel="stylesheet"
/>
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
/>
<!-- cdn -->
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous"
/>
</head>
<body class="container m-5 p-5">
    <div class="d-flex flex-column justify-content-center">
        <h2>View Record</h2>
        <hr style="width: 30%;">
        <p style="color: coral; font-size:23px;">Name</p>
        <p style="color:indigo; font-size:19px;">
        <?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = " SELECT Sname FROM students_data WHERE id='$id'; ";
    $result = $conn->query($sql);
    
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo  $row["Sname"] ."<br>";
    }
  } else {
    echo "0 results";
  }
}
?>
        </p>
        <p style="color: coral; font-size:23px;">Email</p>
        <p style="color:indigo; font-size:19px;">
        <?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = " SELECT email FROM students_data WHERE id='$id'; ";
    $result = $conn->query($sql);
    
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo  $row["email"] ."<br>";
    }
  } else {
    echo "0 results";
  }
}
?>
        </p>
        <p style="color: coral; font-size:23px;">Gender</p>
        <p style="color:indigo; font-size:19px;">
        <?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = " SELECT gender FROM students_data WHERE id='$id'; ";
    $result = $conn->query($sql);
    
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo  $row["gender"] ."<br>";
    }
  } else {
    echo "0 results";
  }
}
?>
        </p>
        <p style="color:indigo; font-size:19px;">        
            <?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = " SELECT Mail_status FROM students_data WHERE id='$id'; ";
    $result = $conn->query($sql);
    
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["Mail_status"]=='yes'){
      echo  "*You'll recieve an e-mail from us*";
    } else {
        echo "*You won't recieve an e-mail from us*";
    }

}}}
?>
        </p>
        <a href="http://localhost/Lab4_PHP/Table.php"><button  class="btn btn-primary " style="width: 10%;">Back</button><a>
    </div>
</body>
</html>
