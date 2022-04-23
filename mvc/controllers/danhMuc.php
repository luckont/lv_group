<?php 
class danhMuc extends controller{
    public $select;
    public function defaultAction(){
        echo "Nothing!!";
        // Khi ng dùng k nhập url
    }

    public function dongHoNam (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoNam(),
            "SLSanPham" => $this->select -> GetSLDongHoNam(),
            
            // giải pháp tạm thời, chưa suy nghĩ ra cách để ngắn gọn hơn
            "brand" => $this->select -> GetBrand(),
            "Casio" => $this->select -> GetSLByBrand("Casio"),
            "Citizen" => $this->select -> GetSLByBrand("Citizen"),
            "G-Shock & Baby-G" => $this->select -> GetSLByBrand("G-Shock & Baby-G"),
            "Louis Erard" => $this->select -> GetSLByBrand("Louis Erard"),
            "Olympia Star" => $this->select -> GetSLByBrand("Olympia Star"),
            "Orient" => $this->select -> GetSLByBrand("Orient"),
            "Seiko" => $this->select -> GetSLByBrand("Seiko"),
            "Tissot" => $this->select -> GetSLByBrand("Tissot"),
            "Pianus" => $this->select -> GetSLByBrand("Pianus"),
            "Ogival" => $this->select -> GetSLByBrand("Ogival"),
            "Candino" => $this->select -> GetSLByBrand("Candino"),
            "Skagen" => $this->select -> GetSLByBrand("Skagen"),
            "Wellington" => $this->select -> GetSLByBrand("Wellington"),
            "Sunrise SG" => $this->select -> GetSLByBrand("Sunrise SG"),
            "ZRC" => $this->select -> GetSLByBrand("ZRC"),
            "Alexandre Christie" => $this->select -> GetSLByBrand("Alexandre Christie"),
        ]);
    }
    
    public function dongHoNu (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoNu(),
            "SLSanPham" => $this->select -> GetSLDongHoNu(),

            // giải pháp tạm thời, chưa suy nghĩ ra cách để ngắn gọn hơn
            "brand" => $this->select -> GetBrand(),
            "Casio" => $this->select -> GetSLByBrand("Casio"),
            "Citizen" => $this->select -> GetSLByBrand("Citizen"),
            "G-Shock & Baby-G" => $this->select -> GetSLByBrand("G-Shock & Baby-G"),
            "Louis Erard" => $this->select -> GetSLByBrand("Louis Erard"),
            "Olympia Star" => $this->select -> GetSLByBrand("Olympia Star"),
            "Orient" => $this->select -> GetSLByBrand("Orient"),
            "Seiko" => $this->select -> GetSLByBrand("Seiko"),
            "Tissot" => $this->select -> GetSLByBrand("Tissot"),
            "Pianus" => $this->select -> GetSLByBrand("Pianus"),
            "Ogival" => $this->select -> GetSLByBrand("Ogival"),
            "Candino" => $this->select -> GetSLByBrand("Candino"),
            "Skagen" => $this->select -> GetSLByBrand("Skagen"),
            "Wellington" => $this->select -> GetSLByBrand("Wellington"),
            "Sunrise SG" => $this->select -> GetSLByBrand("Sunrise SG"),
            "ZRC" => $this->select -> GetSLByBrand("ZRC"),
            "Alexandre Christie" => $this->select -> GetSLByBrand("Alexandre Christie"),
        ]);
    }
    public function dongHoDoi (){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetDongHoDoi(),
            "SLSanPham" => $this->select -> GetSLDongHoDoi(),

            // giải pháp tạm thời, chưa suy nghĩ ra cách để ngắn gọn hơn
            "brand" => $this->select -> GetBrand(),
            "Casio" => $this->select -> GetSLByBrand("Casio"),
            "Citizen" => $this->select -> GetSLByBrand("Citizen"),
            "G-Shock & Baby-G" => $this->select -> GetSLByBrand("G-Shock & Baby-G"),
            "Louis Erard" => $this->select -> GetSLByBrand("Louis Erard"),
            "Olympia Star" => $this->select -> GetSLByBrand("Olympia Star"),
            "Orient" => $this->select -> GetSLByBrand("Orient"),
            "Seiko" => $this->select -> GetSLByBrand("Seiko"),
            "Tissot" => $this->select -> GetSLByBrand("Tissot"),
            "Pianus" => $this->select -> GetSLByBrand("Pianus"),
            "Ogival" => $this->select -> GetSLByBrand("Ogival"),
            "Candino" => $this->select -> GetSLByBrand("Candino"),
            "Skagen" => $this->select -> GetSLByBrand("Skagen"),
            "Wellington" => $this->select -> GetSLByBrand("Wellington"),
            "Sunrise SG" => $this->select -> GetSLByBrand("Sunrise SG"),
            "ZRC" => $this->select -> GetSLByBrand("ZRC"),
            "Alexandre Christie" => $this->select -> GetSLByBrand("Alexandre Christie"),
        ]);
    }

    public function phuKien(){
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout1",[
            "Page" => "select_page",
            "content" => $this->select -> GetPhuKien(),
            "SLSanPham" => $this->select -> GetSLPhuKien(),
            
            // giải pháp tạm thời, chưa suy nghĩ ra cách để ngắn gọn hơn
            "brand" => $this->select -> GetBrand(),
            "Casio" => $this->select -> GetSLByBrand("Casio"),
            "Citizen" => $this->select -> GetSLByBrand("Citizen"),
            "G-Shock & Baby-G" => $this->select -> GetSLByBrand("G-Shock & Baby-G"),
            "Louis Erard" => $this->select -> GetSLByBrand("Louis Erard"),
            "Olympia Star" => $this->select -> GetSLByBrand("Olympia Star"),
            "Orient" => $this->select -> GetSLByBrand("Orient"),
            "Seiko" => $this->select -> GetSLByBrand("Seiko"),
            "Tissot" => $this->select -> GetSLByBrand("Tissot"),
            "Pianus" => $this->select -> GetSLByBrand("Pianus"),
            "Ogival" => $this->select -> GetSLByBrand("Ogival"),
            "Candino" => $this->select -> GetSLByBrand("Candino"),
            "Skagen" => $this->select -> GetSLByBrand("Skagen"),
            "Wellington" => $this->select -> GetSLByBrand("Wellington"),
            "Sunrise SG" => $this->select -> GetSLByBrand("Sunrise SG"),
            "ZRC" => $this->select -> GetSLByBrand("ZRC"),
            "Alexandre Christie" => $this->select -> GetSLByBrand("Alexandre Christie"),
        ]); 
    }

    
}