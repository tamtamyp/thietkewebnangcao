<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa bệnh nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h4 class="text-danger my-3" style="color:red;">Bạn có chắc chắn xóa bệnh nhân này?</h4>
        <?php
                    if ($model->num_rows > 0) {
                        while ($row = $model->fetch_assoc()) {
                ?>
                    <form method="post" action="/kttx2/Patient/deleteById/<?= $row["ID"]; ?>">
                        <input type="text" name="iD" class="form-control mb-2" placeholder="Mã" value="<?= $row["ID"]; ?>">
                        <input type="text" name="fullName" class="form-control mb-2" placeholder="Họ tên" value="<?= $row["FullName"]; ?>">
                        <input type="text" name="gender" class="form-control mb-2" placeholder="Giới tính" value="<?= $row["Gender"]; ?>">
                        <input type="text" name="birthYear" class="form-control mb-3" placeholder="Năm sinh" value="<?= $row["BirthYear"]; ?>">
                        <input type="text" name="address" class="form-control mb-3" placeholder="Địa chỉ" value="<?= $row["Address"]; ?>">
                        <input type="text" name="mobile" class="form-control mb-3" placeholder="Giới tính" value="<?= $row["Mobile"]; ?>">
                        <button type="submit" class="btn btn-primary">Xóa</button>
                        <a href="/kttx2/Patient" class="btn btn-primary">Quay lại</a> 
                    </form>  
                    <?php                       
                        }
                    ?>
                <?php
                    }
                ?>
    </div> 
</body>
</html>