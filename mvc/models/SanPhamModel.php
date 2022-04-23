<?php 
    class SanPhamModel extends db {
        public function GetAllSp(){
            $query = "SELECT * FROM sanpham";
            return mysqli_query($this->conn,$query);
        }

        public function GetAllTypeSp(){
            $query = "SELECT distinct type FROM sanpham";
            return mysqli_query($this->conn,$query);
        }

        public function GetDongHoNam(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ NAM\" ";
            return mysqli_query($this->conn,$query);
        }

        public function GetSLDongHoNam(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"ĐỒNG HỒ NAM\" ";
            return mysqli_query($this->conn,$query);
        }

        public function GetDongHoNu(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ NỮ\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetSLDongHoNu(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"ĐỒNG HỒ NỮ\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetDongHoDoi(){
            $query = "SELECT * FROM sanpham WHERE type = \"ĐỒNG HỒ ĐÔI\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetSLDongHoDoi(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"ĐỒNG HỒ ĐÔI\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetPhuKien(){
            $query = "SELECT * FROM sanpham WHERE type = \"PHỤ KIỆN\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetSLPhuKien(){
            $query = "SELECT count(id) AS SL FROM sanpham WHERE type = \"PHỤ KIỆN\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetSpByName($select){
            $query = "SELECT * FROM sanpham WHERE name = \"$select\" ";
            return mysqli_query($this->conn,$query);
        }

        public function GetSpById($select){
            $query = "SELECT * FROM sanpham WHERE id = $select";
            return mysqli_query($this->conn,$query);
        }


        public function GetSLByBrand($brand){ 
            $query = "SELECT count(id) AS SL FROM sanpham WHERE brand = \"$brand\"";
            return mysqli_query($this->conn,$query);
        }

        public function GetBrand(){
            $query = "SELECT distinct brand FROM sanpham";
            return mysqli_query($this->conn,$query);
        }
    }

?>