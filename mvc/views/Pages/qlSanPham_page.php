<div class="row justify-content-end">
    <a class="btn btn-primary m-3" href="http://localhost/WatchWebPro/admin/addSp">Thêm sản phẩm +</a>
</div>

<table class="table text-center .table-hover mt-5">
    <thead>
      <tr>
        <th>Tên Sản Phẩm</th>
        <th>Hình Ảnh </th>
        <th>Loại</th>
        <th>Giá cũ</th>
        <th>Giá mới</th>
        <th>Thương hiệu</th>
        <th>Quản lí</th>
      </tr>
    </thead>
    <tbody>
        <?php
            while($row = mysqli_fetch_array($data['contentAll'])){
                //Sử lí khi không có old_price và fotmat lại price
                if($row['old_price']!=0){
                    $old_price = number_format($row['old_price'])."đ";
                }else {
                    $old_price = "";
                }
                
                $new_price = number_format($row['new_price'])."đ";
                echo "
                <tr>
                    <td>{$row['name']}</td>
                    <td><img  width=\"100px\" height=\"100px\" src=\"{$row['img_source']}\" alt=\"\"></td>
                    <td>{$row['type']}</td>
                    <td>{$old_price}</td>
                    <td>{$new_price}</td>
                    <td>{$row['brand']}</td>
                    <td class=\"d-flex\">
                        <form class=\"\" action=\"http://localhost/WatchWebPro/admin/editSp/{$row['id']}\" method=\"POST\">
                            <input class=\"d-none\" type=\"number\" value=\"{$row['id']}\" name=\"idSelect\">
                            <button class=\"btn btn-warning p-2 m-2 text-white\" type=\"submit\" >Sửa</button>
                        </form>

                        <form action=\"http://localhost/WatchWebPro/admin/deleteSp/{$row['id']}\" method=\"POST\">
                            <input class=\"d-none\" type=\"number\" value=\"{$row['id']}\" name=\"idSelect\">
                            <button class=\"btn btn-danger p-2 m-2 text-white\" type=\"submit\" >Xóa</button>
                            
                        </form>
                    </td>
                </tr>";
            }
           
        ?> 
<!-- Lý do sài 2 form thay cho 2 thẻ a là vì thẻ a chỉ sd Get và không thể sd Post -->
<!-- Trường hợp này nếu sài thẻ a thì href sẽ khiến cho url xấu đi-->
<!-- Làm tất cả chỉ vì muốn url đẹp :> -->

<!-- <a class=\"p-2 m-2 text-white btn btn-warning \"href=\"http://localhost/WatchWebPro/mvc/views/Pages/editSp_page?idSelect={$row['id']}\">Sửa</a> -->
<!-- <a class=\"p-2 m-2 text-white btn btn-danger \" href=\"http://localhost/WatchWebPro/mvc/views/Pages/deleteSp_page?idSelect={$row['id']}\">Xóa</a> -->
    </tbody>
  </table>
