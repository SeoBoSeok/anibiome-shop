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
				<p>협업/자문 상담 리스트</p>
			</div>
			<div class="page_navi box_width">
				<a href="index.html" class="home ">홈</a>
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
						<div class="dropbtn open-btn-ckver">협업/자문 상담 리스트</div>
						<!-- <div class="dropdown-content">
							<a href="">menu01</a>
							<a href="">menu02</a>
							<a href="">menu03</a>
						</div> -->
					</div>
				</div>
			</div>
		</section>
		<section class="mission_vision">
			<div class="section_padding box_width">
				<img src="/assets/images/sub43_checklist.png" class="m_none_tab_on">
				<img src="/assets/images/sub43_checklist.png" class="pc_tab_none">
			</div>
			<!-- <div class="img_slide_dog section-title scroll_slide_group hidden">
				<div class="section-title" data-aos="fade-right">
					<span class="paralax-title">
						<img src="/assets/images/sub_mission_img01.png">
					</span>
				</div>
			</div> -->
		</section>
	</div>
</div>