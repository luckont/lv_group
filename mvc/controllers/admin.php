<?php 
    class admin extends controller{
        function defaultAction(){
            echo "Trang nay danh cho Admin";
        }
        // Trang tuy chon cua admin
        public function quanLy(){
            $this->view("masterLayout3",[
                "Page" => "quanLy_page",
            ]);
        }

        // Trang hiện tất cả sp
        public function quanLySanPham(){
            $tmp = $this->model("SanPhamModel");
            $this->view("masterLayout3",[
                "Page" => "qlSanPham_page",
                "contentAll" => $tmp -> GetAllSp(),
                "type" => $tmp -> GetAllTypeSp(),
            ]);
        }

        // Xu lis dữ liệu các form truyền vào
        public function handle(){
            $this->view("masterLayout3",[
                "Page" => "handleForm_page",
            ]);
        }

        //Thêm sản phẩm
        public function addSp(){
            $tmp = $this->model("SanPhamModel");
            $this->view("masterLayout3",[
                "Page" => "addSp_page",
                
            ]);
        }

        

        //Xóa sản phẩm
        public function deleteSp($choose){
            $tmp = $this->model("SanPhamModel");
            $this->view("masterLayout3",[
                "Page" => "deleteSp_page",
                "content" => $tmp -> GetSpById($choose),
            ]);
        }

        //Sửa sản phẩm
        public function editSp($choose){
            $tmp = $this->model("SanPhamModel");
            $this->view("masterLayout3",[
                "Page" => "editSp_page",
                "content" => $tmp -> GetSpById($choose),
            ]);
        }

        public function quanLyDanhMuc(){
            
        }
        
        public function quanLyUser(){
            
        }

    }



?>
