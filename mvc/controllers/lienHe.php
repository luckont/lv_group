<?php 
    class lienHe extends controller{
        public function defaultAction (){
            $this->showlienHe();
        }

        public function showlienHe(){
            $this->view("masterLayout3",[
                "Page" => "lienHe_page",
            ]);
        }

    }
?>