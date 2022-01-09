<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa  Thành Viên -Quản Lý Thành Viên </title>
</head>
<body>
 
    <div class="content">
       
    <div class="dangkythanhvien">
         <a href="index.php?controller=thanh-vien&action=list" class="list">Danh Sách</a>
        <h3>Cập Nhật mới Thành Viên </h3>
        <form action="" method="POST">
            <table>
                  <tr>
                    <td>Tên Độc Giả :</td>
                    <td><input type="text" name="hovaten" value="<?php echo $dataid['hovaten'];?>"      placeholder="Tên độc giả"></td>

                </tr>
                <tr>
                    <td>Giới Tính :</td>
                    <td><input type="text" name="gioitinh" value="<?php echo $dataid['gioitinh'];?>"     placeholder="Giới Tính  "></td>
                </tr>
                 <tr>
                    <td>Năm Sinh :</td>
                    <td><input type="text" name="namsinh" value="<?php echo $dataid['namsinh'];?>"   placeholder="Năm Sinh "></td>
                </tr>
                  <tr>
                    <td>Nghề Nghiệp :</td>
                    <td><input type="text" name="nghenghiep"  value="<?php echo $dataid['nghenghiep'];?>" placeholder="Nghề Nghiệp"></td>

                </tr>
                  <tr>
                    <td>Ngày Cấp Thẻ :</td>
                    <td><input type="text" name="ngaycapthe" value="<?php echo $dataid['ngaycapthe'];?>"  placeholder="Ngày Cấp Thẻ"></td>

                </tr>
                  <tr>
                    <td>Ngày Hết Hạn  :</td>
                    <td><input type="text" name="ngayhethan" value="<?php echo $dataid['ngayhethan'];?>"  placeholder="Ngày Hết Hạn"></td>

                </tr>
                  <tr>
                    <td>Địa chỉ:</td>
                    <td><input type="text" name="diachi" value="<?php echo $dataid['diachi'];?>"   placeholder="Địa Chỉ"></td>

                </tr>
               
               
                    <td>&nbsp;</td>
                    <td><input type="submit" name="update_user" value="Cập Nhật "></td>
                </tr>
            </table>
        </form>
       
    </div>
    </div>
</body>
</html>