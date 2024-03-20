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
				<p>Target Market</p>
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
						<div class="dropbtn open-btn-ckver">Target Market</div>
						<div class="dropdown-content">
							<a href="">menu01</a>
							<a href="">menu02</a>
							<a href="">menu03</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="targetmarket">
			<div class="section_padding box_width">
				<div>
					<span class="sc_tit_topsub">Target Market</span>
					<p class="sc_tit">시장과 소비자의 니즈 →<br>반려동물 산업 영역의 확장</p>
					<!-- <div class="con_text">시장과 소비자 니즈 기반의 R&D<br>
반려동물 산업특성별  신규 사업 창출의 필수 파트너!</div> -->
				</div>
				<img class="big" src="/assets/images/sub33_1.svg" data-aos="fade-left">
			</div>
			<div class="rnd">
				<div class="cover">
					<p class="sc_tit box_width">헬스케어 R&D, 질병유전자/마이크로바이옴 진단사업 중심으로
					<br>약 400조 규모 글로벌 시장 도전 기본 체계 구축</p>
				</div>
				<div class="content box_width padd">
					<img src="/assets/images/sub33_2.svg" style="max-width:1180px; margin:0 auto; display: block;" class="m_none_tab_on">
				</div>
			</div>
		</section>
	</div>
</div>
<!--E 마크업 끝-->