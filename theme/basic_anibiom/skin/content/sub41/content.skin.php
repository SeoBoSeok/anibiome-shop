<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<div class="wrap">
    <?php include_once(G5_THEME_PATH.'/menu.php'); ?>
    <div class="content_wrap sub main">
		<section class="sub_visual">
			<div class="sub_top_bg"><img src="/assets/images/sub_top_bg.png"></div>
			<div class="page_name text-typing-any">
				<p>협업/자문 시스템</p>
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
						<div class="dropbtn open-btn-ckver">협업/자문 시스템</div>
						<div class="dropdown-content">
							<a href="">menu01</a>
							<a href="">menu02</a>
							<a href="">menu03</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- <section class="mission_vision">
			<div class="section_padding box_width">
				<img src="/assets/images/sub41_system.png" class="m_none_tab_on">
				<img src="/assets/images/sub41_system.png" class="pc_tab_none">
			</div>
			<div class="img_slide_dog section-title scroll_slide_group hidden">
				<div class="section-title" data-aos="fade-right">
					<span class="paralax-title">
						<img src="/assets/images/sub_mission_img01.png">
					</span>
				</div>
			</div>
		</section> -->
		<section class="product_3-step bg_line bg3">
			<div class="box_width">
				<!-- <h3 class="sc_tit al_center"> -->
					<!-- 협업/자문 상담 프로세스 -->
					<!-- <p class="sc_sub">
						환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템
					</p> -->
				<!-- </h3> -->
				<ul class="four">
					<li data-aos="flip-left" data-aos-duration="2000" class="aos-init aos-animate">
						<span class="step">step 01</span>
						<div class="img four">
							<img src="/assets/images/c1.svg">
						</div>
						<div class="tt">기본상담</div>
						<p class="text">
							<ol>
								<li>교내 창업교육, 지원사업에 대한 안내</li>
								<li>창업 프로세스 안내</li>
								<li>외부 공모전 참가</li>
								<li>팀구성 및 활동 방향성 설정</li>
								<li>창업아이디어 발굴</li>
								<li>단계별 상담 연계</li>
							</ol>
						</p>
					</li>
					<li data-aos="flip-left" data-aos-delay="300" data-aos-duration="2000" class="aos-init aos-animate">
						<span class="step">step 02</span>
						<div class="img four">
							<img src="/assets/images/c2.svg">
						</div>
						<div class="tt">상담 신청서 작성</div>
						<p class="text">
							<ol>							
								<li>인적사항 (기본, 팀원)</li>
								<li>창업 아이디어 개요 시장조사</li>
								<li>고객분석 벤치마킹</li>
								<li>경쟁제품 분석 등</li>
								<li>비즈니스 모델</li>
								<li>수익모델 등 작성</li>
							</ol>
						</p>
					</li>
					<li data-aos="flip-left" data-aos-delay="600" data-aos-duration="2000" class="aos-init aos-animate">
						<span class="step">step 03</span>
						<div class="img four">
							<img src="/assets/images/c3.svg">
						</div>
						<div class="tt">심층 상담</div>
						<p class="text">
							<ol>
								<li>창업보육센터 입주관련</li>
								<li>사업화 진행 관련</li>
								<li>창업아이디어 구체화 및 고도화</li>
								<li>팀 내부 역량 평가</li>
								<li>연계 상담</li>
							</ol>
						</p>
					</li>
					<li data-aos="flip-left" data-aos-delay="600" data-aos-duration="2000" class="aos-init aos-animate">
						<span class="step">step 04</span>
						<div class="img four">
							<img src="/assets/images/c4.svg">
						</div>
						<div class="tt">전문 상담</div>
						<p class="text">
							<ol>
								<li>전문분야에 대한 상담<br>(IT, 디자인, 제조 등)</li>
							</ol>
						</p>
					</li>
				</ul>
			</div>
		</section>
	</div>
</div>