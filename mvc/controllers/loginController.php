<?php
class loginController extends controller{
    public function defaultAction(){
        $this->showLogin();
        // Khi ng dùng k nhập url
    }
    public function showLogin(){
        $this->view("masterLayout",[
            "Page" => "login_page"
        ]); 
    }
}

