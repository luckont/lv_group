<?php
class home extends controller{
    public function defaultAction(){
        $this->showSanPham();
        // Khi ng dùng k nhập url
    }

    public function showSanPham(){
        $tmp = $this->model("sanPhamModel");
        $this->view("masterLayout",[
            "contentNam" => $tmp -> GetDongHoNam(),
            "contentNu" => $tmp -> GetDongHoNu(),
            "contentDoi" => $tmp -> GetDongHoDoi(),
            "contentPhuKien" => $tmp -> GetPhuKien(),
            "Page" => "home_page",
        ]); 
    }
}


