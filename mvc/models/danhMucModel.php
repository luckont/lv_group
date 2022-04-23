<?php 
    class danhMucModel extends db {
        public function GetDanhMuc(){
            $query = "SELECT * FROM danhMuc";
            return mysqli_query($this->conn,$query);
        }
        


    }

