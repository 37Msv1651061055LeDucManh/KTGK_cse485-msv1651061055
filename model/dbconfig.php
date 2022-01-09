<?php
class Database{
    private $hostname='localhost';
    private $username='root';
    private $pass='';
    private $dbname='1651061055_libraries';
    private $conn=NULL;
    private $result=NULL;
    public function connect(){
        $this->conn=new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
        if(!$this->conn){
            echo"ket noi that bai";
            exit();
        }
        else {
            mysqli_set_charset($this->conn,'utf8');
        }
        return $this->conn;
    }
    public function execute($sql){
        $this->result =$this ->conn->query($sql);
        return $this->result;

    }
    public function num_rows(){
        if($this->result){
            $num=mysqli_num_rows($this->result);
        }
        else{
            $num=0;
        }
        return $num;

    }
     
    public function getdata(){
     
        if($this->result){
            $data=mysqli_fetch_array($this->result);

        }
        else{
            $data=0;
        }
        return $data;
    }
   public function getdataID($table,$id){


     $sql="SELECT *FROM $table WHERE id='$id'";
     $this->execute($sql);
        if($this->num_rows()!=0){
            $data=mysqli_fetch_array($this->result);

        }
        else{
            $data=0;
        }
        return $data;
    }









      public function getalldata($table){
       $sql="SELECT *FROM $table";
       $this->execute($sql);
       if($this->num_rows()==0){
           $data=0;
       }
        else{
            while ($datas =$this->getdata()){
                $data[]=$datas;
            }

        }
        return $data;

    }
    public function Insert($hovaten,$gioitinh,$namsinh,$nghenghiep,$ngaycapthe,$ngayhethan,$diachi){
     
     
        $sql="INSERT INTO thanhvien(madg,hovaten,gioitinh,namsinh,nghenghiep,ngaycapthe,ngayhethan,diachi) VALUES (null,'$hovaten','$gioitinh','$namsinh','$nghenghiep','$ngaycapthe','$ngayhethan','$diachi')";
        return $this->execute($sql);
    } 
    public function Updatedata($hovaten,$gioitinh,$namsinh,$nghenghiep,$ngaycapthe,$ngayhethan,$diachi){
     
     
        $sql="UPDATE thanhvien(madg,hovaten,gioitinh,namsinh,nghenghiep,ngaycapthe,ngayhethan,diachi) VALUES (null,'$hovaten','$gioitinh','$namsinh','$nghenghiep','$ngaycapthe','$ngayhethan','$diachi')";
        return $this->execute($sql);
    }
    public function Delete ($id,$table){
        $sql="DELETE FROM $table WHERE id='$id'";
        return $this->execute($sql);
    }



}

?>