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
            while($row = mysqli_fetch_array($data['content'])){
                //Sử lí khi không có old_price và fotmat lại price
                if($row['old_price']!=0){
                    $old_price = number_format($row['old_price'])."đ";
                }else {
                    $old_price = "";
                }
                
                $new_price = number_format($row['new_price'])."đ";
                echo "
                <tr>
                    <td>
                        <input type=\"text\" class=\"h-100\" value=\"{$row['name']}\"
                    </td>
                        <td><img  width=\"100px\" height=\"100px\" src=\"{$row['img_source']}\" alt=\"\"></td>
                    <td>
                        <input type=\"text\" class=\"h-100\" value=\"{$row['type']}\"
                    </td>
                    <td>
                        {$old_price}</td>
                    <td>
                        {$new_price}</td>
                    <td>
                        {$row['brand']}</td>
                    <td class=\"d-flex\">
                            <button class=\"btn btn-danger p-2 m-2\" data-toggle=\"modal\" data-target=\"#myModal\">DELETE</button>
                            <!-- The Modal -->
                            <div class=\"modal\" id=\"myModal\">
                              <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                
                                  <!-- Modal Header -->
                                  <div class=\"modal-header\">
                                    <div class=\"d-flex align-items-center\">
                                      <img width=\"80px\" src=\"https://www.pngkit.com/png/full/153-1531841_-nh-anime-girl-halloween.png\" alt=\"\">
                                      <h4 class=\"modal-title ml-3\">Siri cảnh báo!!!</h4>
                                    </div>
                                    
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                  </div>
                                  
                                  <!-- Modal body -->
                                  <div class=\"modal-body\">
                                        Sau khi xóa sản phẩm sẽ bị mất vĩnh viễn!
                                        Vẫn xóa?
                                  </div>
                                  
                                  <!-- Modal footer -->
                                  <div class=\"modal-footer\">
                                  <form action=\"http://localhost/WatchWebPro/admin/handle\" method=\"POST\">
                                        <input class=\"d-none \" value=\"{$row['id']}\" type=\"text\" name=\"idDelete\" >
                                        <input type=\"submit\" class=\"btn btn-danger p-2 m-2 text-white\" name=\"handle\" data-toggle=\"modal\" data-target=\"#myModal\" value=\"DELETE\">
                                        <button type=\"button\" class=\"btn p-2 m-2 btn-primary\" data-dismiss=\"modal\">Đóng</button>
                                    </form>  
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                    </td>
                </tr>";
            }
        ?>
    </tbody>
  </table>
  