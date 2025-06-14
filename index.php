<?php
include 'inc/header.php';

$danhSachBaiViet = $bai_viet->getDanhSachBaiVietNew();
$danhSachBaiVietTheoKhoa = $bai_viet->getAllDanhSachBaiVietNew('benh-xa-hoi');
$tin_tuc_all_news = $tin_tuc->getAllLimitTinTuc();
?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])) {
    $insertCustomers = $brand->insert_brand($_POST);
}


?>

<?php

if (isset($insertCustomers)) {
    echo $insertCustomers;
}

$dataFake = array(
    array(
        'title' => 'PHƯƠNG CHÂM PHÒNG KHÁM', 
        // 'image' => '/images/icons/icon_nam_khoa2.webp', 
        'text' => 'Phòng khám bệnh xã hội JV Nhật Việt chuyên khám và hỗ trợ điều trị các bệnh thường gặp như sùi mào gà, bệnh lậu, giang mai, mụn rộp sinh dục,… Hiện nay ngày càng nhiều người mắc các bệnh xã hội, nguyên nhân chủ yếu là do lối sống tình dục không an toàn. Chính vì vậy bệnh nhân cần chủ động đi khám tại các phòng khám bệnh xã hội uy tín để nhanh chóng phát hiện và hỗ trợ điều trị sớm.'),
    // array('title' => 'DA LIỄU', 'image' => '/images/icons/icon_da_lieu2.webp', 'text' => 'Chuyên khoa Da liễu Phòng khám Nhật Việt là đơn vị đảm nhận chẩn đoán và điều trị các bệnh lý thuộc chuyên ngành Da liễu.'),
    // array('title' => 'BỆNH XÃ HỘI', 'image' => '/images/icons/icon_benh_xh2.webp', 'text' => 'Phòng khám Nhật Việt là một trong những địa chỉ thăm khám, xét nghiệm và điều trị bệnh xã hội uy tín tại TPHCM được người dân thành phố và khu vực tin chọn.'),
    // array('title' => 'HẬU MÔN - TRỰC TRÀNG', 'image' => '/images/icons/icon_hm_tt2.webp', 'text' => 'Khoa Hậu môn – Trực tràng Phòng khám Nhật Việt chuyên cung cấp dịch vụ khám chữa toàn diện các bệnh lý hậu môn – trực tràng uy tín.'),
);
?>

<?php include("mobile/form_dat_lich_kham.php") ?>

<section class="container" id="we_bring">
    <div class=" we_bring_body">
        <div class="we_bring_body_top row">
            <?php foreach ($dataFake as  $value) : ?>
                <div class="we_bring_body_top_col col-12 ">
                    <!-- <img class="we_bring_body_top_col_img" src="<?php echo $local . $value['image']; ?>" alt="..."> -->
                    <div class="we_bring_body_top_col_div">
                        <h5 class="we_bring_body_top_col_div_title color_success f_weight_700 "><?php echo $value['title']; ?></h5>
                        <span  >
                            <?php echo $value['text']; ?>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <hr class="hr">
        </hr>
        <div class="row we_bring_body_botom">
            <div class="col-sm-6">
                <img width="100%" src="<?php echo $local ?>/images/users/user_group.webp" alt="...">
            </div>
            <div class="we_bring_body_botom_col col-sm-6">
                <div class="we_bring_body_botom_col_title">
                    Chúng tôi mang đến
                </div>
                <div class="we_bring_body_botom_col_text">
                    Phòng khám Nhật Việt luôn nỗ lực để xây dựng một thương hiệu chăm sóc sức khỏe với hàm lượng tri thức, khoa học và công nghệ ở mức cao. Mỗi dịch vụ y tế đều hướng tới tính tiện ích, hiệu quả, có ý nghĩa với cuộc sống và sức khỏe con người.
                </div>
                <button class="we_bring_body_botom_col_button">Xem tất cả các dịch vụ của chúng tôi</button>
            </div>
        </div>
    </div>
</section>

<section id="experienced">
    <div class="container">
        <div class="experienced_body row">
            <div class="experienced_body_left col-sm-8">
                <div class="experienced_body_left_title color_white f_weight_700 ">về chúng tôi</div>
                <div class="experienced_body_left_title1">Đội ngũ bác sĩ chuyên khoa</div>
                <div class="experienced_body_left_text">Y, Bác sĩ của phòng khám đều là những nhân tố giỏi. Họ đã từng công tác tại nhiều bệnh viện lớn trong cả nước. Mỗi chuyên gia đảm nhận một chuyên khoa riêng biệt. Chính điều này sẽ giúp quá trình khám chữa bệnh đạt kết quả tối ưu.</div>
                <div class="experienced_body_left_center">
                    <button class="experienced_body_left_center_button">Chuyên nghiệp</button>
                    <button class="experienced_body_left_center_button">Tận tâm</button>
                    <button class="experienced_body_left_center_button">kinh nghiệm</button>
                </div>
                <div class="experienced_body_left_center_mobile mt-3">
                    <img src="<?php echo $local ?>/images/logo/vong-tron.webp" alt="">
                </div>
                <div class="experienced_body_left_footer row">
                    <div class="experienced_body_left_footer_col col-sm-6">
                        <img class="experienced_body_left_footer_col_icon" src="<?php echo $local ?>/images/icons/icon_check.webp" alt="">
                        <span>
                            Y khoa tiên tiến, dịch vụ tận tâm
                        </span>
                    </div>
                    <div class="experienced_body_left_footer_col col-sm-6">
                        <img class="experienced_body_left_footer_col_icon" src="<?php echo $local ?>/images/icons/icon_check.webp" alt="">
                        <span>
                            Chuyên môn cao, tâm huyết lớn
                        </span>
                    </div>
                    <div class="experienced_body_left_footer_col col-sm-6">
                        <img class="experienced_body_left_footer_col_icon" src="<?php echo $local ?>/images/icons/icon_check.webp" alt="">
                        <span>
                            Nơi sức khỏe được ưu tiên
                        </span>
                    </div>
                    <div class="experienced_body_left_footer_col col-sm-6">
                        <img class="experienced_body_left_footer_col_icon" src="<?php echo $local ?>/images/icons/icon_check.webp" alt="">
                        <span>
                            Sức khỏe là hạnh phúc, chúng tôi là người bảo vệ
                        </span>
                    </div>
                </div>
            </div>
            <div class="experienced_body_right col-sm-4">
                <img class="experienced_body_right_img" src="<?php echo $local ?>/images/users/user-group1.webp" alt="" />
            </div>
        </div>
        <div style="margin-top: 30px;" class="experienced_footer row">
            <div class="experienced_footer_col col-sm-3">
                <img class="experienced_footer_col_img" src="<?php echo $local ?>/images/users/user_1.webp" alt="">
                <div class="experienced_footer_col_title">Lê bản bình</div>
                <span class="experienced_footer_col_text">CK: Ngoại khoa</span>
            </div>
            <div class="experienced_footer_col col-sm-3">
                <img class="experienced_footer_col_img" src="<?php echo $local ?>/images/users/user_2.webp" alt="">
                <div class="experienced_footer_col_title">nguyễn minh đức </div>
                <span class="experienced_footer_col_text">CK: Siêu âm</span>
            </div>
            <div class="experienced_footer_col col-sm-3">
                <img class="experienced_footer_col_img" src="<?php echo $local ?>/images/users/user_3.webp" alt="">
                <div class="experienced_footer_col_title">trần minh đức</div>
                <span class="experienced_footer_col_text">CK: Xét nghiệm</span>
            </div>
            <div class="experienced_footer_col col-sm-3">
                <img class="experienced_footer_col_img" src="<?php echo $local ?>/images/users/user_4.webp" alt="">
                <div class="experienced_footer_col_title">trần minh đức</div>
                <span class="experienced_footer_col_text">CK: Hồi phục chức năng</span>
            </div>
        </div>
        <!-- //mobile -->
        <div class="experienced_footer_mobile row">
            <div class="experienced_footer_mobile_div" >
                <span>đội ngũ y bác sĩ giỏi</span>
            </div>
            <swiper-container style="height: 319px;" slides-per-view="1" class="mySwiper" space-between="30" pagination="true" pagination-clickable="true">
                <swiper-slide>
                    <div style="text-align: center; " class="experienced_footer_col col-sm-3">
                        <img class="experienced_footer_col_img" src="<?php echo $local ?>/images/users/user_1.webp" alt="">
                        <div class="experienced_footer_col_title">Lê bản bình</div>
                        <span class="experienced_footer_col_text">CK: Ngoại khoa</span>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div style="text-align: center; " class="experienced_footer_col col-sm-3">
                        <img class="experienced_footer_col_img" src="<?php echo $local ?>/images/users/user_2.webp" alt="">
                        <div class="experienced_footer_col_title">nguyễn minh đức </div>
                        <span class="experienced_footer_col_text">CK: Siêu âm</span>
                    </div>
                </swiper-slide>
                <swiper-slide>
                <div style="text-align: center; " class="experienced_footer_col col-sm-3">
                <img class="experienced_footer_col_img" src="<?php echo $local ?>/images/users/user_3.webp" alt="">
                <div class="experienced_footer_col_title">trần minh đức</div>
                <span class="experienced_footer_col_text">CK: Xét nghiệm</span>
            </div>
                </swiper-slide>
                <swiper-slide>
                <div style="text-align: center; " class="experienced_footer_col col-sm-3">
                <img class="experienced_footer_col_img" src="<?php echo $local ?>/images/users/user_4.webp" alt="">
                <div class="experienced_footer_col_title">trần minh đức</div>
                <span class="experienced_footer_col_text">CK: Hồi phục chức năng</span>
            </div>
                </swiper-slide>
            </swiper-container>

        </div>
    </div>
</section>

<section class="container" id="advise">
    <img style=" width:100%" height="90px" src="<?php echo $local ?>/images/banner/bg-03.webp" alt="">
    <div class="advise_row row">
        <div class="advise_row_left col-6">nhận tư vấn sức khỏe từ
            các chuyên gia của chúng tôi</div>
        <div class="advise_row_left_right col-6">
            <input id="sdt_pc" class="advise_row_left_right_input" type="number" placeholder="Nhập số điện thoại">
            <button onclick="onClickCreatePhonePC()" class="advise_row_left_right_bottom">gửi</button>
        </div>
    </div>
</section>

<section id="dominance">
    <div class="container dominance_container">
        <div class="dominance_container_title">
            ưu thế vượt trội
        </div>
        <div class="row dominance_container_row">
            <div class="dominance_container_row_col col-md-6">
                <img src="images/icons/icon_check1.webp" alt="">
                <span>Đội ngũ bác sĩ chuyên môn cao</span>
            </div>
            <div class="dominance_container_row_col col-md-6">
                <img src="images/icons/icon_check1.webp" alt="">
                <span>Môi trường thân thiện, dịch vụ tận tâm, chu đáo</span>
            </div>
            <div class="dominance_container_row_col col-md-6">
                <img src="images/icons/icon_check1.webp" alt="">
                <span>Hệ thống máy móc hiện đại</span>
            </div>
            <div class="dominance_container_row_col col-md-6">
                <img src="images/icons/icon_check1.webp" alt="">
                <span>Chi phí khám hỗ trợ điều trị bệnh hợp lý</span>
            </div>
            <div class="dominance_container_row_col col-md-6">
                <img src="images/icons/icon_check1.webp" alt="">
                <span>Thủ tục nhanh gọn, không rườm rà</span>
            </div>
            <div class="dominance_container_row_col col-md-6">
                <img src="images/icons/icon_check1.webp" alt="">
                <span>Môi trường thân thiện</span>
            </div>
        </div>
        <div class="dominance_container_bottom">
            <img src="images/users/user_ai.webp" alt="">
        </div>
    </div>


</section>

<section id="space">
    <div class="container space_container">
        <div class="space_container_title">Không gian phòng khám</div>
        <div class="space_container_body">
            <div class="space_container_body_card">
                <img src="images/logo/khong_gian.webp" alt="">
            </div>
            <div class="space_container_body_card">
                <img src="images/logo/khong_gian_1.webp" alt="">
            </div>
            <div class="space_container_body_card">
                <img src="images/logo/khong_gian_2.webp" alt="">
            </div>
            <div class="space_container_body_card">
                <img src="images/logo/khong_gian_3.webp" alt="">
            </div>
        </div>
    </div>
</section>

<section id="procedure">
    <div class="container procedure_container">
        <div class="procedure_container_title">
            quy trình
        </div>
        <div class="procedure_container_title1">
            hỗ trợ khám chữa bệnh
        </div>
        <div class="procedure_container_bottom">
            <div class="procedure_container_bottom_card">
                <div class="procedure_container_bottom_card_body">
                    <img src="images/icons/icon_tuvan.webp" alt="...">
                    <div>
                        Tư vấn và <br> đặt lịch hẹn online
                    </div>
                </div>
            </div>
            <div class="procedure_container_bottom_card">
                <div class="procedure_container_bottom_card_body">
                    <img src="images/icons/icon_sieuam.webp" alt="...">
                    <div>
                        Xét nghiệm <br> và chuẫn đoán
                    </div>
                </div>
            </div>
            <div class="procedure_container_bottom_card">
                <div class="procedure_container_bottom_card_body">
                    <img src="images/icons/icon_cotruyen.webp" alt="...">
                    <div>
                        Hỗ trợ các <br> bước điều trị
                    </div>
                </div>
            </div>
            <div class="procedure_container_bottom_card">
                <div class="procedure_container_bottom_card_body">
                    <img src="images/icons/icon_theodoi.webp" alt="...">
                    <div>
                        Theo dõi <br> tiến trình bệnh
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="feedback">
    <div class="feedback_container container">
        <div class="feedback_container_title">
            Phản hồi từ khách hàng
        </div>
        <div class="feedback_container_row">
            <div class="feedback_container_row_card activeFeedback">
                <div class="feedback_container_row_card_top">
                    <img src="images/users/user_kimOanh.webp" alt="">
                    <div class="feedback_container_row_card_top_right">
                        <div class="feedback_container_row_card_top_right_title">
                            Kim Oanh
                        </div>
                        <div class="feedback_container_row_card_top_right_text">
                            Nhân viên văn phòng - Tân Phú
                        </div>
                        <hr>
                        <div class="feedback_container_row_card_top_right_content">
                            <img src="images/icons/icon_start.webp" alt="">
                            <div>
                                2 ngày trước
                            </div>
                            <button>Mới</button>
                        </div>

                    </div>
                </div>
                <div class="feedback_container_row_card_bottom">
                    “Mình bị viêm da cũng khá nặng, đã chữa trị nhiều nơi nhưng không khỏi. Mình biết đến Phòng khám Nhật Việt qua một người bạn. Khi mình đến khám, bác sĩ và nhân viên phòng khám hướng dẫn mình rất chi tiết trong từng hạng mục.”
                </div>
            </div>
            <div class="feedback_container_row_card ">
                <div class="feedback_container_row_card_top">
                    <img src="images/users/user_khai.webp" alt="">
                    <div class="feedback_container_row_card_top_right">
                        <div class="feedback_container_row_card_top_right_title">
                            Minh Hải
                        </div>
                        <div class="feedback_container_row_card_top_right_text">
                        Kiến trúc sư công trình - Bà Rịa Vũng Tàu
                        </div>
                        <hr>
                        <div class="feedback_container_row_card_top_right_content">
                            <img src="images/icons/icon_start.webp" alt="">
                            <div>
                                3 ngày trước
                            </div>
                            <button>Mới</button>
                        </div>

                    </div>
                </div>
                <div class="feedback_container_row_card_bottom">
                “Theo Hải thì chất lượng phòng khám là khỏi chê, đội ngũ nhân viên y, bác sĩ rất thân thiện và nhiệt tình. Thời gian trả kết quả cũng rất nhanh, cái chính là an toàn và bảo mật. Đây là điều mà Hải cảm thấy hài lòng nhất, xin cám ơn Phòng khám Nhật Việt!”
                </div>
            </div>
            <div class="feedback_container_row_card ">
                <div class="feedback_container_row_card_top">
                    <img src="images/users/user_hieu.webp" alt="">
                    <div class="feedback_container_row_card_top_right">
                        <div class="feedback_container_row_card_top_right_title">
                            Trung Hiếu
                        </div>
                        <div class="feedback_container_row_card_top_right_text">
                           Hướng dẫn viên du lịch - Bình Dương
                        </div>
                        <hr>
                        <div class="feedback_container_row_card_top_right_content">
                            <img src="images/icons/icon_start.webp" alt="">
                            <div>
                                2 tuần trước
                            </div>
                            <!-- <button>Mới</button> -->
                        </div>

                    </div>
                </div>
                <div class="feedback_container_row_card_bottom">
                “Công việc của Hiếu khá bận nên thời gian rảnh rất ít. Do đó Hiếu đã chọn thăm khám nam khoa tại Phòng khám Nhật Việt qua Đặt hẹn Online.”
                </div>
            </div>
        </div>
        <div class="index-feedbacks">
            <div class="feedback-item feedback-item-0 activeFeedback"></div>
            <div class="feedback-item feedback-item-1"></div>
            <div class="feedback-item feedback-item-2"></div>
        </div>
    </div>
</section>

<script>
    const feedbacks = document.querySelectorAll('.feedback_container_row_card');
    const listItems = document.querySelectorAll('.feedback-item');
    let currentIndex = 0;

    const showFeedback = (index) => {
        feedbacks.forEach((feedback, idx) => {
            feedback.classList.toggle('activeFeedback', idx === index);
        });
        listItems.forEach((listItem, idx) => {
            listItem.classList.toggle('activeFeedback', idx === index);
        });
    };

    const handleChangeSlideFeedback = () => {
        currentIndex = (currentIndex + 1) % feedbacks.length;
        showFeedback(currentIndex);
    };

    showFeedback(currentIndex); // Initialize the first feedback as active
    setInterval(handleChangeSlideFeedback, 4000);
</script>

<script>
    function formatPhoneNumber(phoneNumber) {
            let cleaned = ('' + phoneNumber).replace(/\D/g, '');
            let match = cleaned.match(/^(\d{4})(\d{3})(\d{3})$/);
            if (match) {
                return '(' + match[1] + ') ' + match[2] + '-' + match[3];
            }
            return null;
        }

        function onClickCreatePhonePC() {
            let sdt = document.getElementById('sdt_pc').value;
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
                                    document.getElementById('sdt_pc').value = '';
                                } else {
                                    toastr.error(response.message);
                                }
                            } catch (e) {

                                toastr.error("Đã xảy ra lỗi trong quá trình xử lý phản hồi từ máy chủ.");
                            }
                           
                        }
                    };

                    const formData = {
                        'sdt': sdt,
                        "url": baseUrl
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

<?php include 'inc/footer.php'; ?>