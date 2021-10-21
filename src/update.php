<?php
    include 'header.php';
?>
<div class="update">
    <h1 class="text-center">Update Patient</h1>
    <br><br>
    <?php 
            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update']; 
                unset($_SESSION['update']); 
            }
        ?>
    <form action="" method="POST" class="text-center">
    
        Update from ID Patient: <br>
        <input type="text" name="patientid" placeholder="Enter ID"><br><br>

        First Name: <br>
        <input type="text" name="firstname" placeholder="Enter First Name"><br><br>

        Last Name: <br>
        <input type="text" name="lastname" placeholder="Enter Last Name"><br><br>

        Date of birth: <br>
        <input type="text" name="dateofbirth" placeholder="Enter Date of birth"><br><br>

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
        <input type="text" name="created_on" placeholder="Enter Day Created"><br><br>

        Modified On: <br>
        <input type="text" name="modified_on" placeholder="Enter Day Last Modified"><br><br>

        <input type="submit" name="submit" value="Update" class="btn-primary">
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

    $ID = ($_POST['patientid']);
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

    $sql = "Update patient set patientid = '$Name',
    firstname = '$FName', lastname = '$LName', 
    dateofbirth = '$Birth', gender = '$Gender',
    mobile = '$Mobile', email = '$Email',
    height = '$Height', weight = '$Weight',
    blood_type = '$Blood', created_on = '$Created', 
    modified_on = '$Modified'
            where emp_id = '$ID'";
    $res = mysqli_query($conn, $sql) or die(mysqli_error()) ;
    if($res==true)
   {
       header('location:index.php');
   }else
   {
       echo"Sửa thất bại";
   }
   }
?>
