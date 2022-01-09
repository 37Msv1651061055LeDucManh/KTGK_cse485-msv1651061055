<?php

if(isset($_GET['action'])){
    $action=$_GET['action'];
}
else{
    $action='';
}
$thanhcong=array();
switch($action){
    case 'add':{
        if(isset($_POST['add_user'])){
            $hovaten=$_POST['hovaten'];
            $gioitinh=$_POST['gioitinh'];
            $namsinh=$_POST['namsinh'];
            $nghenghiep=$_POST['nghenghiep'];
            $ngaycapthe=$_POST['ngaycapthe'];
            $ngayhethan=$_POST['namsinh'];
              $diachi=$_POST['diachi'];

            if($db->Insert( $hovaten,$gioitinh,$namsinh,$nghenghiep,$ngaycapthe,$ngayhethan,$diachi)){
                $thanhcong[]='add_success';
            }
            
        }
        require_once('View/Thanhvien/adduser.php');
        break;
    }
      case 'edit':{
          if(isset($_GET['id'])){
              $id=$_GET['id'];
              $tblTable="thanhvien";
              $dataid=$db->getdataID($tblTable,$id);
              if(isset($_POST ['update_user'])){
                   $hovaten=$_POST['hovaten'];
            $gioitinh=$_POST['gioitinh'];
            $namsinh=$_POST['namsinh'];
            $nghenghiep=$_POST['nghenghiep'];
            $ngaycapthe=$_POST['ngaycapthe'];
            $ngayhethan=$_POST['namsinh'];
              $diachi=$_POST['diachi'];
                  if($db->Updatedata( $hovaten,$gioitinh,$namsinh,$nghenghiep,$ngaycapthe,$ngayhethan,$diachi)){
                      header('location :index.php?controller=thanh-vien&action=list');
                  }
              }
          }
        require_once('View/Thanhvien/edituser.php');
        break;
    }
     case 'delete':{
         if(isset($_GET['id'])){
             $id=$_GET['id'];
             $tblTable="thanhvien";
             if($db->Delete($id,$tblTable)){
                 header('location :index.php?controller=thanh-vien&action=list');
             }
            

         }
         else{
             header('location :index.php?controller=thanh-vien&action=list');
         }
        
        break;
    }
     case 'list':{
         $tblTable ="thanhvien";
        
         $data=$db->getalldata($tblTable);
        require_once('View/Thanhvien/list.php');
        break;
    }
    default:{
        require_once('View/Thanhvien/list.php');
        break;



    }
}
?>