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
   <body>
    <div class="container pt-5">
    <div Class="d-flex justify-content-around ">
          
    <H1 class="">Students Details </H1> 
    <a href="http://localhost/Lab4_PHP/php.php" >
                <button type="button" class="btn btn-success">Add new student</button></a>
</div>     
    <table class="table w-5" >
    <thead class="thead-dark">
<tr >
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">email</th>
    <th scope="col">gender</th>
    <th scope="col">Mail_status</th>
    <th scope="col">action</th>
</tr>
</thead>
<?php
if (mysqli_num_rows($result) > 0){
    $ID = 1 ;
    while($data = mysqli_fetch_assoc($result)){
        ?>
        <tr>
          
        <td><?php echo $data['id']; ?> </td>
        <td><?php echo $data['Sname']; ?> </td>
        <td><?php echo $data['email']; ?> </td>
        <td><?php echo $data['gender']; ?> </td>
        <td><?php echo $data['Mail_status']; ?> </td>
        <td> 
        <?php echo"
            <a href=  'view.php?id=".$data['id']."&Sname=".$data['Sname']."
            &email=".$data['email']."'><i class='bi bi-eye'></i> </a>" ?>
            <?php echo"
            <a href=  'update.php?id=".$data['id']."&Sname=".$data['Sname']."
            &email=".$data['email']."'><i class='bi bi-pen'></i> </a>"; ?>
            <?php echo"
            <a href=  'Table.php?id=".$data['id']."'><i class='bi bi-trash'></i> </a>   "; 
           
            
            ?>
        </td>
        
    </tr>
    <?php $ID++;}}
    else {
        ?>
        <tr>
            <td>No data found</td>
    </tr>
    <?php } ?>
    </table>
    </div>
    </body>
</html>
<?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = mysqli_query($conn," DELETE FROM students_data WHERE id='$id'; ");
}
?>



