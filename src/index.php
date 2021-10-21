<?php
    include 'header.php';
?>
<h1 class="text-center">Danh sách bệnh nhân của bệnh viện</h1>
<main>
    <div class="container">
        <br><a href="index2.php" class="btn btn-primary">Xem danh sách chi tiết</a><br><br><br>
        <div class="md-8 row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã bệnh nhân</th>
                        <th scope="col">Tên bệnh nhân</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Số di động</th>
                        <th scope="col">Ngày lập sổ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                include 'config.php';
                $sql = "SELECT patientid,firstname,dateofbirth,gender,mobile,created_on FROM PATIENT ORDER BY patientid";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['patientid'].'</th>';
                        echo '<td>'.$row['firstname'].'</td>';
                        echo '<td>'.$row['dateofbirth'].'</td>';
                        echo '<td>'.$row['gender'].'</td>';
                        echo '<td>'.$row['mobile'].'</td>';
                        echo '<td>'.$row['created_on'].'</td>';
                        echo '</tr>';
                    }
                }
                ?>
                </tbody>
            </table>
        </div>

    </div>
</main>
<?php
    include 'footer.php';
?>