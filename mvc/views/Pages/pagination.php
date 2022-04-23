<?php
    $SoLuongSPTrong1Trang = 8;
    $SLSP = mysqli_fetch_array($data['SLSanPham']);
    // echo $SLSP['SL']."/////";
    $SoTrang = ceil($SLSP['SL'] / $SoLuongSPTrong1Trang);
    echo "<li class=\"page-item\"><a class=\"page-link\" href=\"#\">Previous</a></li>";
    for($i = 1; $i<=$SoTrang;$i++){
        echo "<li class=\"page-item \"><a class=\"page-link\" href=\"?page=$i\">$i</a></li>";   
    }
    echo "<li class=\"page-item\"><a class=\"page-link\" href=\"#\">Next</a></li>";
?>
