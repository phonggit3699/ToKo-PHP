<?php
$db = require_once('../../databaseClass.php');
$db = new database();

?>

<div class="menu">
    <div class="menu-item">
        <div class="menu-list-header">
            <p>Danh Mục</p>
            <span class="icon"><svg class="bi bi-list-ul" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg>
            </span>
        </div>
        <div class="menu-list-product menu-list-product--style">
            <ul class="menu-list">
                
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Linh dị</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Linh dị');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Linh Dị</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Linh dị');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Truyện Ma Tâm Linh</h2>
                                    <span><?php
                                            $result = $db->table('book')->countCg('Truyện Ma Tâm Linh');

                                            echo $result; ?></span>
                                </a>
                            </li>




                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="http://localhost/toko/views/user/home.php?c=Kinh doanh" class="menu-link">
                        <h2>Kinh doanh</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Kinh doanh');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Kinh Doanh</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Kinh Doanh');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Khởi nghiệp</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Khởi nghiệp');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Marketing - Bán hàng</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Marketing - Bán hàng');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Quản trị - Lãnh đạo</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Quản trị - Lãnh đạo');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Đầu tư - Tài chính</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Đầu tư - Tài chính');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Kiến thức kinh tế</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Kiến thức kinh tế');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Kinh doanh tổng hợp</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Kinh doanh tổng hợp');

                                            echo $result; ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="http://localhost/toko/views/user/home.php?c=Ngôn tình" class="menu-link">
                        <h2>Ngôn Tình</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Ngôn Tình');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Ngôn Tình</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Ngôn Tình');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Cổ trang</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Cổ trang');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Hiện đại</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Hiện đại');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Xuyên không</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Xuyên không');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Trùng sinh</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Trùng sinh');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Huyền ảo</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Huyền ảo');

                                            echo $result; ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Kỹ năng</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Kỹ Năng');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Kỹ Năng</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Kỹ Năng');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Nghệ thuật sống</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Nghệ thuật sống');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Kỹ năng làm việc</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Kỹ năng làm việc');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Hướng nghiệp</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Hướng nghiệp');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Kỹ năng sống</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Kỹ năng sống');

                                            echo $result; ?></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Tác phẩm kinh điển</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Tác Phẩm Kinh Điển');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Tác Phẩm Kinh Điển</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Tác Phẩm Kinh Điển');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Tiểu thuyết</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Tiểu thuyết');

                                            echo $result; ?></span>
                                </a>
                            </li>




                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Chăm sóc gia đình</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Chăm Sóc Gia Đình');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Chăm Sóc Gia Đình</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Chăm Sóc Gia Đình');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Chăm sóc sức khoẻ</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Chăm sóc sức khoẻ');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Nuôi dạy con</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Nuôi dạy con');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Tâm lý - giới tính</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Tâm lý - giới tính');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Phụ nữ - làm đẹp</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Phụ nữ - làm đẹp');

                                            echo $result; ?></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Văn học</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Văn Học');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Văn Học</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Văn Học');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Thơ - Tản mạn</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Thơ - Tản mạn');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Truyện dài - Tiểu Thuyết</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Truyện dài - Tiểu Thuyết');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Trinh thám</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Trinh thám');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Kiếm hiệp</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Kiếm hiệp');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Truyện ngắn</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Truyện ngắn');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Hài hước</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Hài hước');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Giả tưởng</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Giả tưởng');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Tự truyện</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Tự truyện');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Kinh dị</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Kinh dị');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Văn học Teen</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Văn học Teen');

                                            echo $result; ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Nhân vật - Sự kiện</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Nhân Vật - Sự Kiện');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Nhân Vật - Sự Kiện</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Nhân Vật - Sự Kiện');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Nhân vật</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Nhân vật');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Sự kiện</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Sự kiện');

                                            echo $result; ?></span>
                                </a>
                            </li>



                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Văn hoá - Xã hội</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Văn hoá - Xã hội');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Văn Hoá - Xã Hội</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Văn Hoá - Xã Hội');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Chính trị - Pháp luật</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Chính trị - Pháp luật');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Tôn giáo - Tâm linh</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Tôn giáo - Tâm linh');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Khoa học xã hội</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Khoa học xã hội');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Văn hoá nghệ thuật</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Văn hoá nghệ thuật');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Giáo dục</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Giáo dục');

                                            echo $result; ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Khoa học - Công nghệ</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Khoa Học - Công Nghệ');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Khoa Học - Công Nghệ</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Khoa Học - Công Nghệ');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Kỹ thuật công nghệ</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Kỹ thuật công nghệ');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Kiến thức khoa học</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Kiến thức khoa học');

                                            echo $result; ?></span>
                                </a>
                            </li>



                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Thiếu nhi</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Thiếu nhi');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Thiếu nhi</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Thiếu nhi');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Cổ tích - Thần thoại</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Cổ tích - Thần thoại');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Bài học cuộc sống</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Bài học cuộc sống');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Văn học thiếu nhi</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Văn học thiếu nhi');

                                            echo $result; ?></span>
                                </a>
                            </li>



                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Truyện tranh</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Truyện tranh');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Truyện Tranh</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Truyện Tranh');

                                            echo $result; ?></span>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Thiếu nhi</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Thiếu nhi');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>VnComic</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('VnComic');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Sports</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Sports');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Romance</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Romance');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Action</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Action');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Drama</h2>
                                    <span><?php
                                            $result = $db->table('book')->countcg('Drama');

                                            echo $result; ?></span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Tạp chí & Chuyên đề</h2>
                        <span><?php
                                            $result = $db->table('book')->countSubcg('Tạp chí & Chuyên đề');

                                            echo $result; ?></span>
                    </a>
                    <div class="menu-hide-list">
                        <ul>
                            <li class="sub-menu-title ">
                                <h2>Tạp chí & Chuyên đề</h2>
                                <span><?php
                                            $result = $db->table('book')->countSubcg('Tạp chí & Chuyên đề');

                                            echo $result; ?></span>
                            </li>
                            
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Tạp chí & Chuyên đề</h2>
                                    <span><?php
                                            $result = $db->table('book')->countCg('Tạp chí & Chuyên đề');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Tạp chí</h2>
                                    <span><?php
                                            $result = $db->table('book')->countCg('Tạp chí');

                                            echo $result; ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="list-type-book">
                                    <h2>Chuyên đề</h2>
                                    <span><?php
                                            $result = $db->table('book')->countCg('Chuyên đề');

                                            echo $result; ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sub-menu">
                    <a href="" class="menu-link">
                        <h2>Tin tức</h2>

                    </a>

                </li>
            </ul>
        </div>
    </div>
</div>