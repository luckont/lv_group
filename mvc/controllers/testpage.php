<?php
// test cac trang moi tao bang duong dan test/
class testpage extends controller{
    public function defaultAction(){
        $this->view("testLayout",[
            "Page" => "moreInfo",
        ]);
    }
}