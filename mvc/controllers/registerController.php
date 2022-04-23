<?php
class registerController extends controller{
    public function defaultAction(){
        $this->showRegister();
        // Khi ng dùng k nhập url
    }
    public function showRegister(){
        $this->view("masterLayout",[
            "Page" => "register_page"
        ]); 
    }
}

