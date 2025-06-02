<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">DANH SÁCH BỆNH NHÂN</h3>
        <a href="#" class="btn btn-primary">Thêm mới</a>
        <a href="#" target="_blank" class="btn btn-primary">Tìm kiếm</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Mã</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Năm sinh</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>    
            <tbody>
                <?php
                    if ($model->num_rows > 0) {
                        while ($row = $model->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?= $row["ID"]; ?></td>
                            <td><?= $row["FullName"]; ?></td>
                            <td><?= $row["Gender"]; ?></td>
                            <td><?= $row["BirthYear"]; ?></td>
                            <td><?= $row["Address"]; ?></td>
                            <td><?= $row["Mobile"]; ?></td>
                            <td><a href="#" class="btn btn-success">Sửa</a>
                            <td><a href="<?= '/kttx2/Patient/delete/' . $row["ID"]; ?>" class="btn btn-danger">Xóa</a>
                        </tr> 
                    <?php                       
                        }
                    ?>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>