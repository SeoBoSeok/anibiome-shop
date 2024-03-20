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
				<p>코어시장과 소비자의 니즈</p>
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
						<div class="dropbtn open-btn-ckver">코어시장과 소비자의 니즈</div>
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
					<span class="sc_tit_topsub">코어 시장</span>
					<p class="sc_tit">반려동물 헬스케어<br>핵심 코어시장과 소비자의 니즈</p>
					<div class="con_text">의료시장의 확장<br>→ R&D전문기업 희소성!</div>
				</div>
				<img src="/assets/images/sub_targetmarket_img01.png" data-aos="fade-left">
			</div>
			<div class="rnd">
				<div class="cover">
					<p class="sc_tit box_width">반려동물 산업의 생애주기별 분류</p>
				</div>
				<div class="content box_width padd">
					<img src="/assets/images/sub32.svg" style="max-width:1180px; margin:0 auto; display: block;" class="m_none_tab_on">
				</div>
			</div>
		</section>
	</div>
</div>
<!--E 마크업 끝-->