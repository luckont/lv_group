<!-- Trang nay de tesst co so du lieu th -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>



<body>
    <section class="row">
    <?php 
        while ($row = mysqli_fetch_assoc($data['content'])){
            echo "
            
                <div class=\"col-lg-3 col-sm-6 product__box\">
                <img class=\"product__img\" src=\"{$row["img_source"]}\" alt=\"\">
                <div class=\"product__info\">
                    <p class=\"type\">{$row["type"]}</p>
                    <a class=\"product__name\" href=\"\">{$row["name"]}</a>
                    <div class=\"price__box\">
                    <span class=\"old__price\">{$row["old_price"]} đ</span>
                    <span class=\"new__price\">{$row["new_price"]} đ</span>
                    </div>
                </div>
                <div class=\"add_cart\">
                    <a href=\"\"><i class=\"add_cart__icon fa-solid fa-cart-plus\"></i></a>
                </div>
                </div>
            
            ";
        }
    
    ?>    
    </section>
    

</body>
</html>