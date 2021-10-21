<?php
    include 'header.php';
?>
<h1 class="text-center">Danh sách bệnh nhân chi tiết</h1>
<main>
    <div class="container">
        <div class="md-6 row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã bệnh nhân</th>
                        <th scope="col">Tên bệnh nhân</th>
                        <th scope="col">Họ bệnh nhân</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Số di động</th>
                        <th scope="col">Email</th>
                        <th scope="col">Chiều cao</th>
                        <th scope="col">Cân nặng</th>
                        <th scope="col">Nhóm máu</th>
                        <th scope="col">Ngày lập sổ</th>
                        <th scope="col">Ngày khám cuối</th>
                        <th scope="col">Cập nhật</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                include 'config.php';
                $sql = "SELECT patientid,firstname,lastname,dateofbirth,gender,mobile,email,height,weight,blood_type,created_on,modified_on 
                FROM PATIENT ORDER BY patientid";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['patientid'].'</th>';
                        echo '<td>'.$row['firstname'].'</td>';
                        echo '<td>'.$row['lastname'].'</td>';
                        echo '<td>'.$row['dateofbirth'].'</td>';
                        echo '<td>'.$row['gender'].'</td>';
                        echo '<td>'.$row['mobile'].'</td>';
                        echo '<td>'.$row['email'].'</td>';
                        echo '<td>'.$row['height'].'</td>';
                        echo '<td>'.$row['weight'].'</td>';
                        echo '<td>'.$row['blood_type'].'</td>';
                        echo '<td>'.$row['created_on'].'</td>';
                        echo '<td>'.$row['modified_on'].'</td>';
                        echo '<td> <a href="update.php""><i class="fas fa-edit"></i></a></td>';
                        echo '<td> <a href="delete.php?mabn='.$row['patientid'].'""><i class="fas fa-trash-alt"></i></a></td>';
                        echo '</tr>';
                    }
                }   
                ?>
                </tbody>
            </table>
        </div>
        <br><br>

    <a href="insert.php" class="btn btn-primary"><i class="fas fa-pencil-alt"></i>  Add Patient</a>
    <br /><br /><br />
    </div>
</main>
<?php
    include 'footer.php';
?>