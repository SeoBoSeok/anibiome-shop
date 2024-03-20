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
				<p>사업화 전략</p>
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
						<div class="dropbtn open-btn-ckver">사업화 전략</div>
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
					<span class="sc_tit_topsub">사업화 전략</span>
					<p class="sc_tit">R&D분야 /<br>핵심기술 기반제품 및 서비스</p>
					<div class="con_text">시장과 소비자 니즈 기반의 R&D<br>
반려동물 산업특성별  신규 사업 창출의 필수 파트너!</div>
				</div>
				<img src="/assets/images/sub_targetmarket_img01.png" data-aos="fade-left">
			</div>
			<div class="rnd">
				<div class="cover">
					<p class="sc_tit box_width">반려동물 R&D사업 확대를 위한<br>기본 체계 구축</p>
				</div>
				<div class="content box_width">
					<img src="/assets/images/sub_targetmarket_img03.png" style="max-width:1180px; margin:0 auto; display: block;" class="m_none_tab_on">
					<img src="/assets/images/sub_targetmarket_img03_m.png" class="pc_tab_none">
				</div>
			</div>
			<div class="box_width section_padding platform_area">
				<p class="sc_tit">
					반려동물 개별/품종별<br class="pc_tab_none"> 맞춤형 교육 컨텐츠  플랫폼 연구개발<br>
					<span><img src="/assets/images/ico_down_black.svg">
					서울대수의대 및 전국 임상수의사<br class="pc_tab_none"> 교육강의</span>
				</p>
				<div class="sub_small_sectionbox" data-aos="fade-up">
					<p class="tit">생애주기별 합병 질병</p>
					<div class="content">
						<img src="/assets/images/sub_targetmarket_img04.png" class="m_none_tab_on">
						<img src="/assets/images/sub_targetmarket_img04_m.png"  class="pc_tab_none">
					</div>
				</div>
				<div class="sub_small_sectionbox mt_40" data-aos="fade-up">
					<p class="tit">노령동물힐링센터 / 닥터오 힐링 프로그램</p>
					<div class="content">
						<img src="/assets/images/sub_targetmarket_img05.png" class="m_none_tab_on">
						<img src="/assets/images/sub_targetmarket_img05_m.png"  class="pc_tab_none">
					</div>
				</div>
			</div>
			<div class="section_padding product_plan_area">
				<div class="box_width">
					<p class="sc_tit">
						<span class="mainblue">헬스케어 뉴트리션 R&D<br class="pc_tab_none"> 제품 계획 리스트 : </span><br>
펫푸드, 기능성간식, 영양보조제 개발
					</p>
					<img src="/assets/images/sub_targetmarket_img06.png" class="m_none_tab_on">
					<img src="/assets/images/sub_targetmarket_img06_m.png"  class="pc_tab_none">
				</div>
			</div>
			<div class="section_padding box_width products_group">
				<div class="">
					<div class="text">
						<span>2021</span>
						<p class="sc_tit">
							<img src="/assets/images/ziomc_logo.png" class="ziomc_logo">
							바이탈펫 행동치료기 <br class="m_none">연구개발 완료
						</p>
					</div>
					<img src="/assets/images/sub_targetmarket_img07.png" class="content m_none_tab_on" data-aos="flip-left">
					<img src="/assets/images/sub_targetmarket_img07_m.png" class="content pc_tab_none" data-aos="flip-left">
				</div>
				<div class="">
					<div class="text">
						<span>2021</span>
						<p class="sc_tit">
							㈜펫셀바이오<br>XL-5, KID-T영양제 <br class="m_none">연구개발 완료
						</p>
					</div>
					<img src="/assets/images/sub_targetmarket_img08.png" class="content m_none_tab_on" data-aos="flip-left">
					<img src="/assets/images/sub_targetmarket_img08_m.png" class="content pc_tab_none" data-aos="flip-left">
				</div>
			</div>
		</section>
	</div>
</div>
<!--E 마크업 끝-->