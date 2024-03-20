<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<div class="wrap">
    <?php include_once(G5_THEME_PATH.'/menu.php'); ?>
    <div class="content_wrap sub">
		<section class="sub_visual">
			<div class="sub_top_bg"><img src="/assets/images/sub_top_bg.png"></div>
			<div class="page_name text-typing-any">
				<p>회사소개</p>
			</div>
			<div class="page_navi box_width">
				<a href="index.html" class="home">홈</a>
				<div class="dropdown_set">
					<div class="dropdown">
						<div class="dropbtn open-btn-ckver">회사소개</div>
						<div class="dropdown-content">
							<a href="">수의통합의학 강의실</a>
							<a href="">핵심역량/사업</a>
							<a href="">협업/자문 시스템</a>
							<a href="">마이크로바이옴</a>
							<a href="">제품/쇼핑몰</a>
						</div>
					</div>
					<div class="dropdown">
						<div class="dropbtn open-btn-ckver">회사소개</div>
						<div class="dropdown-content">
							<a href="">menu01</a>
							<a href="">menu02</a>
							<a href="">menu03</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="products_services ">
			<div class="section_padding bg_line">
				<div class="relative scroll_slide_group">
					<div class="image-container">
						<div class="bg" style="background-image: url('/assets/images/sub_product_service_img01.png');"></div>
					</div>
					<h2 class="section-title box_width ">
						<em>Anibiome Healthcare</em>
						<span class="paralax-title">
						The Best Your Partner!<br>Center for Companion<br class="pc_tab_none"> Animal Health
						</span>
					</h2>
				</div>
			</div>
			<div class="sc_box_02 relative">
				<div class="bg">
					<img src="/assets/images/sub_product_service_img02.png" class="m_none_tab_on">
					<img src="/assets/images/sub_product_service_img02_m.png" class="pc_tab_none">
				</div>
				<div class="text white">
					<div class="box_width" data-aos="fade-down">
						<p><span>애니바이옴 헬스케어</span>는<br>수의학 최고의 전문가들의<br>반려동물 헬스케어/R&D<br class="pc_tab_none">전문기업입니다.</p>
					</div>
				</div>
				
			</div>
			<div class="sc_box_02 relative">
				<div class="bg">
					<img src="/assets/images/sub_product_service_img03.png" class="m_none_tab_on">
					<img src="/assets/images/sub_product_service_img03_m.png" class="pc_tab_none">
				</div>
				<div class="text left black">
					<div class="box_width" data-aos="fade-down">
						<p><span>애니바이옴 헬스케어</span>는<br>수의통합의학의 완성을 <br class="pc_tab_none">지향합니다.</p>
					</div>
				</div>
				
			</div>
		</section>
	</div>
</div>