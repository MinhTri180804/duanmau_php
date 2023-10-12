<?php
extract($product);
$arrayImgs = explode(',', $url_images);
$priceFormat = number_format($product_price, 0, ',', '.');
$arraySize = explode(',', strtoupper($product_sizes));
$arrayColors = explode(',', $product_colors);

$arrayColorFormat = [];

foreach ($arrayColors as $color) {
    $part = explode('+ ', $color);
    $link = trim($part[0]);
    $color = trim($part[1]);

    $arrayColorFormat[] = [
        'link' => $link,
        'color' => $color
    ];
}

?>
<main>
    <section class="main_content">
        <div class="container">
            <div class="wrapper">
                <div class="container_left">
                    <ul class="list_img-demo">
                        <?php
                        $firstLoop = true;
                        foreach ($arrayImgs as $img) {
                            ($firstLoop) ? $class = 'active' : $class = '';
                            echo '
                                <li class="list_img-demo-item ">
                                    <img src="' . $img . '" alt="" class="' . $class . '">
                                </li>
                                ';
                            $firstLoop = false;
                        }
                        ?>
                    </ul>

                    <div class="img_select">
                        <img src="<?php echo $arrayImgs[0]; ?>" alt="">
                    </div>
                </div>

                <div class="container_right">
                    <div class="product-head">
                        <h4 class="product_title">
                            <?php echo $product_name; ?>
                        </h4>

                        <div class="product_heart">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>

                    <div class="product_code">
                        <span class="product_code-title">Mã sản phẩm : </span> <span class="code"><?php echo $product_code ?></span>
                    </div>

                    <div class="product_price">
                        <?php echo $priceFormat ?> VND
                    </div>

                    <div class="product_voucher">
                        <!-- <div class="no-voucher">
                                <h5 class="message_no-voucher">
                                    Không có mã giảm giá
                                </h5>
                            </div> -->
                        <div class="voucher_container">
                            <!-- navigation left -->
                            <div class="navigation_voucher-left navigation">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>

                            <!-- list voucher -->
                            <div class="container_list-voucher">
                                <ul class="list_voucher">
                                    <li class="list_voucher-item">
                                        <div class="voucher-title">
                                            FREE SHIP
                                        </div>

                                        <div class="voucher_about">
                                            <div class="voucher_about-code">
                                                FS1
                                            </div>

                                            <div class="voucher_about-sub">
                                                Miễn phí giao hàng
                                                cho đơn hàng trên 250k
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list_voucher-item">
                                        <div class="voucher-title">
                                            FREE SHIP
                                        </div>

                                        <div class="voucher_about">
                                            <div class="voucher_about-code">
                                                FS1
                                            </div>

                                            <div class="voucher_about-sub">
                                                Miễn phí giao hàng
                                                cho đơn hàng trên 250k
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list_voucher-item">
                                        <div class="voucher-title">
                                            FREE SHIP
                                        </div>

                                        <div class="voucher_about">
                                            <div class="voucher_about-code">
                                                FS1
                                            </div>

                                            <div class="voucher_about-sub">
                                                Miễn phí giao hàng
                                                cho đơn hàng trên 250k
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list_voucher-item">
                                        <div class="voucher-title">
                                            FREE SHIP
                                        </div>

                                        <div class="voucher_about">
                                            <div class="voucher_about-code">
                                                FS1
                                            </div>

                                            <div class="voucher_about-sub">
                                                Miễn phí giao hàng
                                                cho đơn hàng trên 250k
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- navigation right -->
                            <div class="navigation_voucher-right navigation">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="product_color">
                        <div class="product_color-about">
                            <span class="color_about-title">
                                Màu sắc :
                            </span>

                            <span class="color_about-value">
                                <?php
                                    echo $arrayColorFormat[0]['color'];
                                ?>
                            </span>
                        </div>

                        <div class="product_color-demo">
                            <ul class="list_color">
                                <?php
                                $firstLoop = true;
                                foreach ($arrayColorFormat as $item) {
                                    extract($item);
                                    ($firstLoop) ? $class = 'active' : $class = '';
                                    echo '
                                        <li class="list_color-item '.$class.'" value="'.$color.'">
                                            <img src="'.$link.'" alt="" class="color_img">
                                        </li>
                                        ';
                                    $firstLoop = false;
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="product_size">
                        <div class="product_size-about">
                            <span class="size_about-title">
                                Kích thước :
                            </span>

                            <span class="size_about-value">
                                M
                            </span>
                        </div>

                        <div class="product_size-demo">
                            <ul class="list_size">
                                <?php
                                $firstLoop = true;
                                foreach ($arraySize as $size) {
                                    ($firstLoop) ? $class = 'active' : $class = '';
                                    echo '
                                            <li class="list_size-item ' . $class . '" value="' . $size . '">
                                                ' . $size . '
                                            </li>
                                        ';
                                    $firstLoop = false;
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="product_quality_cart">
                        <div class="product_quality">
                            <div class="quality_option-down quality_option">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <input type="number" value="1" class="quality_product-input">
                            <div class="quality_option-up quality_option">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>

                        <div class="product_cart">
                            <button class="product_cart-btn">
                                <span class="product_cart-text">
                                    thêm vào giỏ hàng
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="product_buy">
                        <button class="btn_buy">
                            mua ngay
                        </button>
                    </div>
                </div>
            </div>
    </section>

    <section class="product_about">
        <div class="container">
            <div class="product_about-tab">
                <div class="accordion_item">
                    <div class="accordion_item-button">
                        <span>mô tả sản phẩm</span>
                        <div class="icon_show-accordion">
                            <i class="fa-solid fa-angle-up"></i>
                        </div>
                    </div>

                    <div class="accordion_item-content ">
                        <p>
                            Bảng size: <br>
                            - Size S: Cân nặng 53-60kg; Ngang vai: 59cm; Rộng ngực: 106cm; Dài áo: 71.5cm<br>
                            - Size M: Cân nặng 60-68kg; Ngang vai: 60.5cm; Rộng ngực: 112cm; Dài áo: 72.5cm<br>
                            - Size L: Cân nặng 68-78kg; Ngang vai: 62cm; Rộng ngực: 116cm; Dài áo: 73.5cm<br>
                            - Size XL: Cân nặng 78-85kg; Ngang vai:63.5cm; Rộng ngực: 120cm; Dài áo: 74.5cm<br>
                            Chất liệu: Vải thun Cotton 220gsm<br>
                            Form áo: Oversize<br>
                            Đặc điểm:<br>
                            Điểm đặc biệt của áo thun này là kiểu dáng oversize, tạo nên sự rộng rãi và tự do
                            vận<br>
                            động. Đây là một xu hướng thời trang đang rất hot hiện nay, và chúng tôi đã kết hợp
                            nó<br>
                            với một thiết kế đơn giản nhưng ấn tượng. Thiết kế độc quyền "Mountain Mono-line"
                            tạo<br>
                            nên một sự kết hợp hoàn hảo giữa sự tinh tế và thể thao. Hình ảnh núi đơn sắc trên
                            áo<br>
                            thun không chỉ mang ý nghĩa về sự phiêu lưu và khám phá mà còn thể hiện sự đẳng cấp
                            và<br>
                            phong cách của bạn. Áo thun này được làm từ chất liệu cotton cao cấp, giúp vừa vặn
                            với<br>
                            cơ thể và cảm giác thoải mái suốt cả ngày. Bạn sẽ cảm nhận sự mềm mại và dễ chịu ngay từ
                            lần mặc đầu tiên.
                        </p>
                    </div>
                </div>

                <div class="accordion_item">
                    <div class="accordion_item-button">
                        <span>Chính sách đổi trả</span>
                        <div class="icon_show-accordion">
                            <i class="fa-solid fa-angle-up"></i>
                        </div>
                    </div>

                    <div class="accordion_item-content ">
                        <p>
                            Áp dụng 1 lần đổi/ 1 đơn hàng <br>
                            Sản phẩm đổi trong vòng 7 ngày tính từ ngày nhận hàng <br>
                            **Chính sách chỉ áp dụng khi sản phẩm còn hoá đơn mua hàng, còn nguyên nhãn mác của sản
                            phẩm. Sản phẩm không bị dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi
                            mua hàng <br>
                            Thông tin chi tiết <a href="" style="text-decoration: underline; color: blue;">XEM TẠI ĐÂY</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="history_view">
        <div class="container">
            <div class="history_view-title">
                Sản phẩm đã xem
            </div>

            <ul class="list_product-sale grid-5">
                <li class="item_product-sale">
                    <div class="container_image">
                        <img src="<?php echo _WEB_ROOT; ?>public/img/id-000138a_b98adb50b4d844d6a09389b9ce816f7a_large.webp" alt="" class="product_sale-img">
                        <ul class="list_option-product">
                            <li class="option_product">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </li>
                            <li class="option_product">
                                <i class="fa-solid fa-eye"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="product_sale-about">
                        <div class="product_sale-about-container">
                            <h5 class="product_sale-about-title">
                                Áo thun invicible Printed
                            </h5>
                            <div class="product_sale-about-like">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="product_sale-about-price">
                            <div class="price-now">
                                199.000 VND
                            </div>
                        </div>
                        <ul class="list_color">
                            <li class="color-item"></li>
                            <li class="color-item"></li>
                            <li class="color-item"></li>
                            <li class="color-item"></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>