<?php
    
    
    $conn = mysqli_connect("localhost","root","","lv_group");
    if(isset($_POST['handle']) && $_POST['handle']=="ADD"){
        $name = $_POST['name'];
        $img_source = $_POST['img_source'];
        $type = $_POST['type'];
        $old_price = $_POST['old_price'];
        $new_price = $_POST['new_price'];
        $brand = $_POST['brand'];
        $watch_chain= $_POST['watch_chain'];
        $glass_type= $_POST['glass_type'];
        $color= $_POST['color'];
        $shape= $_POST['shape'];
        $mo_ta= $_POST['mo_ta'];

       $query = "INSERT INTO sanpham(name,type,old_price,new_price,brand,img_source,watch_chain,glass_type,shape,mo_ta) 
                        VALUE('".$name."','".$type."','".$old_price."','".$new_price."','".$brand."','".$img_source."',
                        '".$watch_chain."','".$glass_type."','".$shape."','".$mo_ta."') ";
       mysqli_query($conn,$query);
       header('Location: http://localhost/WatchWebPro/admin/addSp');
    }else if(isset($_POST['handle']) && $_POST['handle']=="DELETE"){
        if(isset($_POST['idDelete'])){
            $idDelete = $_POST['idDelete'];
            $query = "DELETE FROM sanpham WHERE id = \"$idDelete\" ";
            mysqli_query($conn,$query);
            header('Location: http://localhost/WatchWebPro/admin/quanLySanPham');
        }
    }

?>