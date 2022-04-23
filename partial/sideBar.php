
                        <aside class="nav_menu-2">
                            <span class="sideBar__title">DANH MỤC SẢN PHẨM</span>
                            <div class="small-line"></div>
                            <div class="menu__box">
                                <ul class="menu__list">
                                    <li class="menu__item"><a href="http://localhost/WatchWebPro/danhMuc/dongHoNam"> Đồng hồ nam </a></li>
                                    <li class="menu__item"><a href="http://localhost/WatchWebPro/danhMuc/dongHoNu"> Đồng hồ nữ </a></li>
                                    <li class="menu__item"><a href="http://localhost/WatchWebPro/danhMuc/dongHoDoi"> Đồng hồ đôi </a></li>
                                    <li class="menu__item dropdown " >
                                        <a href="http://localhost/WatchWebPro/danhMuc/dongHoPhuKien"> Phụ kiện </a>
                                        <div type="button" class="dropdown-toggle" data-toggle="dropdown"></div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href=""> Dây Da Hirsch</a>
                                            <a class="dropdown-item" href=""> Dây Da ZRC</a>
                                            <a class="dropdown-item" href=""> Hộp Đồng Hồ</a>
                                            <a class="dropdown-item" href=""> D.Vụ In Logo Lên Đồng Hồ</a>
                                            <a class="dropdown-item" href=""> Khắc Laser Lên Đồng Hồ</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        
                        <aside >
                            <span class="sideBar__title">THƯƠNG HIỆU</span>
                            <div class="small-line"></div>
                            <div class="menu__box">
                                <ul class="menu__list">
                                    <?php
                                    while($row = mysqli_fetch_array($data['brand'])){
                                        $tmp = mysqli_fetch_array($data[$row['brand']]);
                                        echo "
                                            <li class=\"menu__item\">
                                                <a href=\"\"> {$row['brand']} </a>
                                                <span>({$tmp['SL']})</span>
                                            </li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </aside>

                        <aside>
                            <span class="sideBar__title">CHẤT LIỆU DÂY</span>
                            <div class="small-line"></div>
                            <div class="menu__box">
                                <ul class="menu__list">
                                    <li class="menu__item">
                                        <a href=""> Dây Da </a>
                                        <span>(số)</span>
                                    </li>
                                    <li class="menu__item">
                                        <a href=""> Dây Kim Loại </a>
                                        <span>(số)</span>
                                    </li>
                                    <li class="menu__item">
                                        <a href=""> Dây Nhựa / Cao Su </a>
                                        <span>(số)</span>
                                    </li>
                                    <li class="menu__item">
                                        <a href=""> Dây Vải</a>
                                        <span>(số)</span>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                        <aside>
                            <span class="sideBar__title">CHẤT LIỆU MẶT KÍNH</span>
                            <div class="small-line"></div>
                            <div class="menu__box">
                                <ul class="menu__list">
                                    <li class="menu__item">
                                        <a href=""> Kính Cứng </a>
                                        <span>(số)</span>
                                    </li>
                                    <li class="menu__item">
                                        <a href=""> Kính Sapphire </a>
                                        <span>(số)</span>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                        <aside>
                            <span class="sideBar__title">BỘ MÁY & NĂNG LƯỢNG</span>
                            <div class="small-line"></div>
                            <div class="menu__box">
                                <ul class="menu__list">
                                    <li class="menu__item">
                                        <a href=""> Kinetic (Vừa Pin – Vừa Tự Động) </a>
                                        <span>(số)</span>
                                    </li>
                                    <li class="menu__item">
                                        <a href=""> Năng Lượng Ánh Sáng </a>
                                        <span>(số)</span>
                                    </li>
                                    <li class="menu__item">
                                        <a href=""> Pin (Quartz) </a>
                                        <span>(số)</span>
                                    </li>
                                </ul>
                            </div>
                        </aside>

