<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<div class="wrap">
    <div class="content_wrap sub">
		<section class="sub_visual">
			<div class="sub_top_bg"><img src="/assets/images/sub_top_bg.png"></div>
			<div class="page_name text-typing-any">
				<p>협업/자문 프로세스</p>
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
						<div class="dropbtn open-btn-ckver">협업/자문 프로세스</div>
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
				<img src="/assets/images/sub42_process.png" class="m_none_tab_on">
				<img src="/assets/images/sub42_process.png" class="pc_tab_none">
			</div>
			<!-- <div class="img_slide_dog section-title scroll_slide_group hidden">
				<div class="section-title" data-aos="fade-right">
					<span class="paralax-title">
						<img src="/assets/images/sub_mission_img01.png">
					</span>
				</div>
			</div> -->
		</section>
		<section class="main">
			<div class="main_sec7">
				<div class="section_padding box_width">
					<h2 class="sub_tit">
						애니바이옴 제품으로<br>
						반려동물의 건강 회복을 경험하세요.
					</h2>
					<ul class="box_list">
						<li id="dog">
							<div class="box_info">
								<h3>개</h3>
								<p>7종의 치료제가 있어요</p>
							</div>
						</li>
						<li id="cat">
							<div class="box_info">
								<h3>고양이</h3>
								<p>7종의 치료제가 있어요</p>
							</div>
						</li>
						<li id="kit">
							<div class="box_info">
								<h3>진단키트</h3>
								<p>집에서 간단히 테스트하세요</p>
							</div>
						</li>
						<li id="starter">
							<div class="box_info">
								<h3>스타터팩</h3>
								<p>스타터팩을 설명할 수 있는 문구가 들어갑니다</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="text_banner">
				<div class="box_width">
					<img src="/theme/basic_anibiom/images/main/icon/vector.svg">
					<h4>반려동물 헬스케어 R&amp;D 전문기업, 애니바이옴 헬스케어</h4>
				</div>
			</div>
		</section>
	</div>
</div>