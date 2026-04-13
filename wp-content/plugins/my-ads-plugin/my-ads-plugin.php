<?php
/*
Plugin Name: My Ads and GA Plugin
Description: Banner khuyến mãi nhấp nháy mẫu chuyên nghiệp cho sinh viên Đại học Tây Nguyên.
Version: 1.3
Author: Trương Trần Quốc Khánh
*/

function hien_thi_banner_khuyen_mai_nhap_nhay() {
    ?>
    <style>
        @keyframes blink-border {
            0% { border-color: #f1c40f; box-shadow: 0 0 5px #f1c40f; }
            50% { border-color: #e67e22; box-shadow: 0 0 20px #e67e22; }
            100% { border-color: #f1c40f; box-shadow: 0 0 5px #f1c40f; }
        }

        .promo-banner {
            background-color: #fff9e6; 
            border: 2px dashed #f1c40f; 
            padding: 25px;
            text-align: center;
            border-radius: 10px;
            max-width: 800px;
            margin: 30px auto;
            font-family: Arial, sans-serif;
            animation: blink-border 1.5s infinite; 
        }

        .promo-title {
            color: #856404;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .promo-desc {
            color: #856404;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .promo-button {
            background-color: #856404; 
            color: white !important;
            padding: 10px 30px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            display: inline-block;
            transition: 0.3s;
        }

        .promo-button:hover {
            background-color: #5d4603;
            transform: scale(1.05);
        }
    </style>

    <div class="promo-banner">
        <div class="promo-title">🔥 KHUYẾN MÃI: KHÓA HỌC LẬP TRÌNH C++ & PYTHON</div>
        <div class="promo-desc">
            Giảm ngay 50% cho sinh viên Đại học Tây Nguyên khi đăng ký trong tuần này!
        </div>
        <a href="#" class="promo-button">XEM CHI TIẾT</a>
    </div>
    <?php
}

add_action('wp_footer', 'hien_thi_banner_khuyen_mai_nhap_nhay');