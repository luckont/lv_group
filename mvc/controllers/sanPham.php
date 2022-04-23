<?php
class sanPham extends controller{
    public $select;
    public function defaultAction(){
    }

    public function showSanPhamById ($choose){
        // biến select là id 
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout2",[
            "content" => $this->select -> GetSpById($choose),
            "Page" => "product_detail",

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
    public function showSanPhamByName($choose){
        // biến select là c name sp
        $this->select = $this->model("sanPhamModel");
        $this->view("masterLayout2",[
            "content" => $this->select -> GetSpByName($choose),
            "Page" => "product_detail",

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