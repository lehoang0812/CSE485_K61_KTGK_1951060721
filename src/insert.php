<?php
    include 'header.php';
?>
<div class="login">
    <br><br>
    <h1 class="text-center">Add Patient</h1>

    <?php 
            if(isset($_SESSION['insert']))
            {
                echo $_SESSION['insert']; 
                unset($_SESSION['insert']); 
            }
        ?>
    <form action="" method="POST" class="text-center">
        First Name: <br>
        <input type="text" name="firstname" placeholder="Enter First Name"><br><br>

        Last Name: <br>
        <input type="text" name="lastname" placeholder="Enter Last Name"><br><br>

        Date of birth: <br>
        <input type="date" name="dateofbirth" placeholder="Enter Date of birth"><br><br>

        Gender: <br>
        <input type="text" name="gender" placeholder="Enter Gender"><br><br>

        Mobile: <br>
        <input type="text" name="mobile" placeholder="Enter Mobile"><br><br>

        Email: <br>
        <input type="text" name="email" placeholder="Enter Email"><br><br>

        Height: <br>
        <input type="text" name="height" placeholder="Enter Height"><br><br>

        Weight: <br>
        <input type="text" name="weight" placeholder="Enter Weight"><br><br>

        Blood_type: <br>
        <input type="text" name="blood_type" placeholder="Enter Blood_type"><br><br>

        Created On: <br>
        <input type="date" name="created_on" placeholder="Enter Day Created"><br><br>

        Modified On: <br>
        <input type="date" name="modified_on" placeholder="Enter Day Last Modified"><br><br>

        <input type="submit" name="submit" value="Add" class="btn-primary">
        <br><br>
    </form>
</div>
<?php
    include 'footer.php';
?>
<?php
include 'config.php';
if(isset($_POST['submit']))
   {

    $FName = ($_POST['firstname']);
    $LName = ($_POST['lastname']);
    $Birth = ($_POST['dateofbirth']);
    $Gender = ($_POST['gender']);
    $Mobile = ($_POST['mobile']);
    $Email = ($_POST['email']);
    $Height = ($_POST['height']);
    $Weight = ($_POST['weight']);
    $Blood = ($_POST['blood_type']);
    $Created = ($_POST['created_on']);
    $Modified = ($_POST['modified_on']);

    $sql = "INSERT INTO patient (`firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`)
    values ('$FName','$LName','$Birth','$Gender','$Mobile', '$Email', '$Height', '$Weight', '$Blood', '$Created', '$Modified')";
    $res = mysqli_query($conn, $sql) or die(mysqli_error()) ;
    if($res==true)
   {
       header('location:index.php');
   }else
   {
       echo"Thêm thất bại";
   }
   }


?>