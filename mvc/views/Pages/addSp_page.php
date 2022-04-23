<div class="row justify-content-end">
    <a class="btn btn-primary m-3" href="http://localhost/WatchWebPro/admin/quanLySanPham">Quản lí sản phẩm</a>
</div>

<div class="ml-5 mr-5 pl-5 pr-5 justify-content-center">
    <table class="table text-center">
           <form class="form_add mb-3" action="http://localhost/WatchWebPro/admin/handle" method="POST">
            <tr class="form__row">
                <th>Tên Sản Phẩm</th>
                <td>
                    <input class="w-100 p-1 " type="text" name="name">
                </td>
            </tr>
            <tr class="form_row">
                <th>Hình Ảnh </th>
                <td>
                    <input class="w-100 p-1 " placeholder="Thêm link ảnh" type="text" name="img_source">
                </td>
            </tr>
            <tr class="form_row">
                <th>Loại</th>
                <td>
                    <input class="w-100 p-1 " placeholder="VD: ĐỒNG HỒ NAM" type="text" name="type">
                </td>
            </tr>
            <tr class="form_row">
                <th>Giá cũ</th>
                <td>
                    <input class="w-100 p-1 " type="text" name="old_price">
                </td>
            </tr>
            <tr class="form_row">
                <th>Giá mới</th>
                <td>
                    <input class="w-100 p-1 " type="text" name="new_price">
                </td>
            </tr>
            <tr class="form_row">
                <th>Thương hiệu</th>
                <td>
                    <input class="w-100 p-1 " type="text" name="brand">
                </td>
            </tr>
            <tr class="form_row">
                <th>Loại dây</th>
                <td>
                    <input class="w-100 p-1 " type="text" name="watch_chain">
                </td>
            </tr>
            <tr class="form_row">
                <th>Loại kính</th>
                <td>
                    <input class="w-100 p-1 " type="text" name="glass_type">
                </td>
            </tr>
            <tr class="form_row">
                <th>Màu sắc</th>
                <td>
                    <input class="w-100 p-1 " type="text" name="color">
                </td>
            </tr>
            <tr class="form_row">
                <th>Hình dạng mặt kính</th>
                <td>
                    <input class="w-100 p-1 " type="text" name="shape">
                </td>
            </tr>
            <tr class="form_row">
                <th>Mô tả</th>
                <td>
                    <input class="w-100 p-1 " type="text" name="mo_ta">
                </td>
            </tr>
            <tr class="form_row">
                <th>Xử lí</th>
                <td>
                    <input type="submit" class="btn btn-primary w-50" name="handle" value="ADD">
                </td>
            </tr>
        </form>  

        <div id="empty"></div>
    </table>
</div>


