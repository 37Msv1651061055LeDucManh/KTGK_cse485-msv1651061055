<div class="danhsach">

<table>
    <thead>
     <tr>
     <th>STT </th>
     <th>Tên Độc Giả </th>
     <th>Giới Tính </th>
     <th>Năm Sinh </th>
     <th>Nghề Nghiệp </th>
     <th>Ngày cấp thẻ</th>
     <th>Ngày hết hạn</th>
     <th>Địa Chỉ</th>
     <th>Thao tác</th>

     </tr>


    </thead>
    <tbody>
   <?php
   $stt=1;
   foreach($data as $value){
   ?>

     <tr>
         <td><?php echo $stt; ?></td>
         <td><?php echo $value['hovaten']; ?></td>
         <td><?php echo $value['gioitinh']; ?></td>
         <td><?php echo $value['namsinh']; ?></td>
          <td><?php echo $value['nghenghiep']; ?></td>
         <td><?php echo $value['ngaycapthe']; ?></td>
         <td><?php echo $value['ngayhethan']; ?></td>
            <td><?php echo $value['diachi']; ?></td>

         <td>
             <a href="index.php?controller=thanh-vien&action=edit&id=<?php echo $value['madg'];?>">Edit</a>
              <a href="index.php?controller=thanh-vien&action=delete&id=<?php echo $value['madg'];?>">Delete</a>
            
         </td>
     </tr>
     <?php
     $stt++;
   }
     ?>
    </tbody>
</table>



</div>