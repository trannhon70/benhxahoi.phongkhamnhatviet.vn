    <!-- header mobile -->

    <div id="header_mobile">
        <div class="header_mobile_position" >
        <div class="header_mobile_top">
            <div class="header_mobile_top_bg"></div>
            <!-- <img class="header_mobile_top_iconl" src="<?php echo $local ?>/images/logo_mobile/vector_left.png" alt="">
            <img class="header_mobile_top_iconr" src="<?php echo $local ?>/images/logo_mobile/vector_right.png" alt=""> -->
            <div class="header_mobile_top_body">
                <div style="z-index: 10;" onclick="showSidebar()" class="header_mobile_row_col_icon">
                    <img width="25px" src="<?php echo $local ?>/images/icons/menu_white.webp" alt="">
                </div>
                <div onclick="hidenSidebar()" class="header_mobile_row_col_icon_close"><i class="fa fa-times" aria-hidden="true"></i> </div>
                <input id="sdt_mobile" type="number" placeholder="Nhập số điện thoại">
                <button onclick="onClickCreatePhone()">xác nhận</button>
            </div>
        </div>
        </div>
        <div style="padding-top: 55px; border-bottom: 2px solid #166B85 ; " class="row header_mobile_row">
            <div class="col-6 col-sm-6 header_mobile_row_col ">
                <a href="<?php echo $local ?>/">
                <img width="100%" height="40px" src="<?php echo $local ?>/images/logo_mobile/logo_mobile.webp" alt="">
                </a>
                
            </div>
            <div  class="col-6 col-sm-6 header_mobile_row_col">
                <a style="text-decoration: none;" href="tel:02877767777">
                <div class="flex"> <img style="margin-top: 5px; height: 30px; " width="25px" src="<?php echo $local ?>/images/icons/icon_phone_no.webp" alt="">

                <div class="header_mobile_row_col_hotline">
                    <div>
                    Tư vấn trực tuyến
                    </div>
                    <span>
                    028-7776-7777
                    </span>
                </div>
                </div>
                </a>
     
            </div>

        </div>
        <nav>
            <ul class="sidebar_mobile">
                <li>
                    <a href="https://benhxahoi.phongkhamnhatviet.vn/phong-kham-da-nhat-viet-phong-kham-da-khoa-uy-tin-tphcm-7.html">giới thiệu</a>
                </li>
                <li class="sidebar_mobile_li">
                    <span onclick="showShelectOption()">
                        <span>danh mục bệnh</span>
                        <img style="padding-left: 77px; margin-bottom: 7px; " src="<?php echo $local ?>/images/icons/icon_down.png" alt="">
                    </span>
                    <!-- <ul class="sidebar_mobile_li_ul">
                        <li class="sidebar_mobile_li_ul_li  ">
                            <span onclick="showShelectOptionBenh();return true;" style="display: flex; align-items: center; justify-content: space-between; ">
                                <span>bệnh xã hội</span>
                                <img style=" margin-bottom: 9px; padding-top: 9px; width: 10px; " src="<?php echo $local ?>/images/icons/add.webp" alt="">
                            </span>

                            <ul class="sidebar_mobile_li_ul_li_benh">
                                <?php foreach ($MenuBXH as $value) :
                                    $activeClass = ($value['slug'] === $sessionBenh) ? 'active_menu_tab' : ''; ?>
                                    <li class="<?php echo $activeClass; ?>" onclick="saveLinkToSession('<?php echo $value['session']; ?>'); return true;">
                                        <a href="<?php echo $local . $value['link'] ?>"><?php echo $value['name'] ?></a>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </li>
                     
                    </ul> -->
                </li>

                <li>
                    <a href="<?php echo $local ?>/tin-tuc-y-khoa.html">tin tức y khoa</a>
                </li>
                <li>
                    <a href="#">tư vấn trực tuyến </a>
                </li>
            </ul>
        </nav>
    </div>

    <script>
        document.querySelectorAll('.sidebar_mobile_li_ul_li>span').forEach(span => {
            span.addEventListener('click', function() {
                showShelectOptionBenh(this);
            });
        });

        function formatPhoneNumber(phoneNumber) {
            let cleaned = ('' + phoneNumber).replace(/\D/g, '');
            let match = cleaned.match(/^(\d{4})(\d{3})(\d{3})$/);
            if (match) {
                return '(' + match[1] + ') ' + match[2] + '-' + match[3];
            }
            return null;
        }

        function onClickCreatePhone() {
            let sdt = document.getElementById('sdt_mobile').value;
            if (sdt.trim() !== '') {
                if (formatPhoneNumber(sdt)) {
                    let baseUrl = window.location.href;
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "https://phongkhamdakhoanhatviet.vn/api/tu-van/create-phone-tu-van.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            try {
                                let response = JSON.parse(xhr.responseText);
                                if (response.status === 'success') {
                                    toastr.success(response.message);
                                    document.getElementById('sdt_mobile').value = '';
                                } else {
                                    toastr.error(response.message);
                                }
                            } catch (e) {

                                toastr.error("Đã xảy ra lỗi trong quá trình xử lý phản hồi từ máy chủ.");
                            }
                           
                        }
                    };

                    const formData = {
                        "sdt": sdt,
                        "url" :baseUrl
                    }

                    xhr.send(JSON.stringify(formData));
                } else {
                    toastr.error("Số điện thoại không hợp lệ!");
                }

            } else {
                toastr.error("Số điện thoại không được bỏ trống");

            }
        }
    </script>