<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Thành Viên -Quản Lý Thành Viên </title>
</head>
<body>
    <div class="content">
       
    <div class="dangkythanhvien">
         <a href="index.php?controller=thanh-vien&action=list" class="list">Danh Sách</a>
        <h3>Thêm mới Thành Viên </h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Tên Độc Giả :</td>
                    <td><input type="text" name="hovaten" placeholder="Tên độc giả"></td>

                </tr>
                <tr>
                    <td>Giới Tính :</td>
                    <td><input type="text" name="gioitinh" placeholder="Giới Tính  "></td>
                </tr>
                 <tr>
                    <td>Năm Sinh :</td>
                    <td><input type="text" name="namsinh" placeholder="Năm Sinh "></td>
                </tr>
                  <tr>
                    <td>Nghề Nghiệp :</td>
                    <td><input type="text" name="nghenghiep" placeholder="Nghề Nghiệp"></td>

                </tr>
                  <tr>
                    <td>Ngày Cấp Thẻ :</td>
                    <td><input type="text" name="ngaycapthe" placeholder="Ngày Cấp Thẻ"></td>

                </tr>
                  <tr>
                    <td>Ngày Hết Hạn  :</td>
                    <td><input type="text" name="ngayhethan" placeholder="Ngày Hết Hạn"></td>

                </tr>
                  <tr>
                    <td>Địa chỉ:</td>
                    <td><input type="text" name="diachi" placeholder="Địa Chỉ"></td>

                </tr>
                 <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="add_user" value="Them Moi "></td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($thanhcong)&&in_array('add_success',$thanhcong)){
            echo  "<p style='color:green;text_align:center'>Thêm Mới Thành Công</p>";
        }
        ?>
    </div>
    </div>
</body>
</html>