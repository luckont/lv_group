<?php 
    class gioiThieu extends controller{
        public function defaultAction (){
            $this->showGioiThieu();
        }

        public function showGioiThieu(){
            $this->view("masterLayout3",[
                "Page" => "gioiThieu_page",
            ]);
        }

    }
?>