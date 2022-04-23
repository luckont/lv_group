<?php 
     while($row = mysqli_fetch_array($data['content'])){
        if($row['old_price']!=0){
            $old_price = number_format($row['old_price'])."đ";
        }else {
            $old_price = "";
        }
        $new_price = number_format($row['new_price'])."đ";
        echo "
            <div class=\"col-lg-4 col-md-5 col-sm-6 product__box\">
            <a href=\"http://localhost/WatchWebPro/sanPham/showSanPhamById/".$row['id']."\">
                <img class=\"product__img\" src=\"{$row['img_source']}\" alt=\"\">
            </a>
            <div class=\"product__info\">
                <p class=\"type\">{$row['type']}</p>
                <a class=\"product__name hiden-text\" href=\"http://localhost/WatchWebPro/sanPham/showSanPhamByName/".$row['name']."\">{$row['name']}</a>
                <div class=\"price__box\">
                    <span class=\"old__price\">$old_price</span>
                    <span class=\"new__price\">$new_price</span>
                </div>
            </div>
               <div class=\"add_cart\">
                  <a href=\"\"><i class=\"add_cart__icon fa-solid fa-cart-plus\"></i></a>
                </div>
            </div>
            ";
        }
        
?>                    

