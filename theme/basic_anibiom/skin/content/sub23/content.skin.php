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
				<p>Mission & Vision</p>
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
						<div class="dropbtn open-btn-ckver">Mission & Vision</div>
						<div class="dropdown-content">
							<a href="">menu01</a>
							<a href="">menu02</a>
							<a href="">menu03</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="mission_vision">
			<div class="section_padding box_width">
				<img src="/assets/images/sub_mission_con01.png" class="m_none_tab_on"  style="max-width:1150px;">
				<img src="/assets/images/sub_mission_con01_m.png" class="pc_tab_none">
			</div>
			<div class="img_slide_dog section-title scroll_slide_group hidden">
				<div class="section-title" data-aos="fade-right">
					<span class="paralax-title">
						<img src="/assets/images/sub_mission_img01.png">
					</span>
				</div>
			</div>
			<div class="section_padding box_width">
				<div>
					<p class="sc_tit al_center">반려동물 의료 패러다임의 변화</p>
					<span class="sc_tit_sub al_center">질병진단 및 개별 맞춤형 임상영양학적 치료관리의 중요성 미래의 반려동물 정밀의료 및 치료관리 시스템 플랫폼 구축</span>
				</div>
				<img src="/assets/images/sub_mission_con02.png" class="m_none_tab_on mt_50" style="max-width:1150px;" data-aos="flip-up">
				<img src="/assets/images/sub_mission_con02_m.png" class="pc_tab_none mt_20">
			</div>
			<div class="section_padding target_area">
				<div class="box_width">
					<p class="sc_tit">목표 및 사업활동</p>
					<ul>
						<li data-aos="fade-up">
							<span class="num">1</span>
							<p>과학적 증거를 바탕으로 한 보완적, 통합적 예방/치료 확립을 위해 국내 최초로 설립된 기관</p>
						</li>
						<li data-aos="fade-up" data-aos-delay="100">
							<span class="num">2</span>
							<p>통합수의학 지향함과 동시에 ‘임상-연구-R&D’의 균형 갖추어 발전하는 센터 구축</p>
						</li>
						<li data-aos="fade-up" data-aos-delay="200">
							<span class="num">3</span>
							<p>다양한 펫푸드 관련 ‘임상-R&D’기분 구축 통해, 세계적인 펫푸드기업들과 연구프로젝트 진행</p>
						</li>
						<li data-aos="fade-up" data-aos-delay="300">
							<span class="num">4</span>
							<p>복잡 다양한 질병치료와 예방에 전통적인 치료방법과 대체의학 접목하여 동물건강/복지에 기여</p>
						</li>
						<li data-aos="fade-up" data-aos-delay="400">
							<span class="num">5</span>
							<p>장기적으로 과학적 데이터 축적, 전문 인력 양성하여 수의학 분야 세계적 리더로서 자리하고자 함</p>
						</li>
						<li data-aos="fade-up" data-aos-delay="500">
							<span class="num">6</span>
							<p>센터통한 국가 연구 과제 신청하고 수주하여 세계 수의통합의학 및 국가 산업발전에 기여</p>
						</li>
						<li data-aos="fade-up" data-aos-delay="600">
							<span class="num">7</span>
							<p>과학적인 지식과 보안적이고 통합적인 수의학기반으로 동물건강의 안전성과 예방의학적 건강관리 및 개선의 역할을 선도</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="area_study section_padding box_width">
				<img src="/assets/images/sub_mission_img02.png" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
				<div class="list">
					<p class="sc_tit">연구분야</p>
					<ul>
						<li>
							<p>Gut Microbiome</p>
							<span>반려견/반려묘 장내 마이크로바이옴 플랫폼 구축</span>
							<span>생애주기 장내 마이크로바이옴 표준 구축</span>
							<span>마이크로바이옴과 식이요법을 이용한 난치성 질환 연구</span>
						</li>
						<li>
							<p>Herbal Medicine</p>
							<span>반려동물에서 천연물 대사 및 건강증진 기작 연구</span>
							<span>질병별 맞춤형 사료 개발 연구</span>
							<span>나노파티클을 이용한 사료개발 연구</span>
						</li>
						<li>
							<p>Alternative Medicine</p>
							<span>Plasma 치료 개발, 연구</span>
							<span>Acupuncture</span>
							<span>마사지 Therapy</span>
							<span>아로마틱 Therapy</span>
							<span>Music Therapy</span>
						</li>
						<li>
							<p>Clinical Natritional Medicine</p>
							<span>반려동물 식이 플랫폼 구축</span>
							<span>품종별 맞춤형 사료 개발 연구</span>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</div>
</div>