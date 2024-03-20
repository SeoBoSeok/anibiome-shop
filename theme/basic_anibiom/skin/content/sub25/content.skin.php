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
				<p>Global Network</p>
				<span>Internal Medicine, Clinical Nutrition</span>
			</div>
			<div class="page_navi box_width">
				<a href="index.html" class="home">홈</a>
				<div class="dropdown_set">
					<div class="dropdown">
						<div class="dropbtn open-btn-ckver" >회사소개</div>
						<div class="dropdown-content">
							<a href="">수의통합의학 강의실</a>
							<a href="">핵심역량/사업</a>
							<a href="">협업/자문 시스템</a>
							<a href="">마이크로바이옴</a>
							<a href="">제품/쇼핑몰</a>
						</div>
					</div>
					<div class="dropdown">
						<div class="dropbtn open-btn-ckver">Our team</div>
						<div class="dropdown-content">
							<a href="">menu01</a>
							<a href="">menu02</a>
							<a href="">menu03</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="global_network">
			<div class="section_padding box_width founder_box">
				<div class="founder_img">
					<img src="/assets/images/member_owonseok2.png" alt="대표이미지" width="100%">
				</div>
				<div class="founder_info">
					<h3>글로벌 네트워크 (내과/임상영양학 분야)</h3>
					<div class="founder_name">
						<h1>오원석 대표</h1>
						<span>Founder</span>
					</div>
					<h2>DVM. MS. Ph.D. MBA. DAiCVIM. Professor</h2>
					<ul class="founder_list">
						<li>	
							Dr. Jane Armstrong. DVM, MS, MBA, DACVIM (President). Nestle-Purina. Veterinary Medicine, University of Minnesota. USA.
						</li>
						<li>
							Dr. Geraldine Blanchard. DVM, Ph.D, Dipl.ECVCN. CEO. Animal Nutrition Expertise, France.
						</li>
						<li>
							Dr. Claudia Kirk. DVM, Ph.D, MBA, DACVIM & DACVN. Associate Dean and Professor at the University of Tennessee. USA.
						</li>
						<li>
							Dr. Andrea Fascetti. DVM, Ph.D, DVCVIM. University of California, Davis. USA.
						</li>
						<li>
							Dr. Jacquie Rand. DVM, Ph.D, DACVIM. The University of Queensland. Centre of Companion Animal Health. Australia.
						</li>
						<li>
							Dr. Bernard Paragon. DVM. Professor. Animal Clinical Nutrition. National Veterinary School of Alfort, France.
						</li>
					</ul>
				</div>
			</div>
			<div class="company_logo_wrap  box_width">
				<div class="company_logo">
					<img src="/assets/images/network/acvim.png" alt="acvim로고" />
				</div>
				<div class="company_logo">
					<img src="/assets/images/network/amaricancollage.png" alt="amaricancollage로고" />
				</div>
				<div class="company_logo">
					<img src="/assets/images/network/ucdavis.png" alt="ucdavis로고" />
				</div>
				<div class="company_logo">
					<img src="/assets/images/network/cusine.png" alt="cusine로고" />
				</div>
				<div class="company_logo">
					<img src="/assets/images/network/esvcn.png" alt="esvcn로고" />
				</div>
				<div class="company_logo">
					<img src="/assets/images/network/royalcanin.png" alt="royalcanin로고" />
				</div>
				<div class="company_logo">
					<img src="/assets/images/network/purina.png" alt="purina로고" />
				</div>
				<div class="company_logo">
					<img src="/assets/images/network/hills.png" alt="hills로고" />
				</div>
			</div>
			<div class="global_network_member">
				<div class="visual">
					<p class="sc_tit box_width">Global Network<br><span>Microbiome, Genetics, Integrative Medicine</span></p>
				</div>
				<div class="content box_width">
					<div class="member_box">
						<div class="member_img">
							<img src="/assets/images/member_choseongbeom.png" alt="조성범교수"/>
						</div>
						<div class="member_info">
							<h2>서울대학교 수의통합의학연구센터</h2>
							<h1>조성범 교수</h1>
							<p>마이크로바이옴 및 장내 미생물 연구실</p>
						</div>
					</div>
					<div class="member_info_list">
						<ul>
							<li>
								서울대학교 수의과대학 교수
							</li>
							<li>
								수의공중보건학(역학/식품위생)
							</li>
							<li>
								미국 미네소타대학 수의학박사
							</li>
							<li>
								전. 미국 USDA-ARS 연구원
							</li>
							<li>
								전. 미국 미시건주립대 식품안전독성센터 조교수
							</li>
							<li>
								서울대학교 수의통합의학 연구센터장
							</li>
							<li>
								국가 마우스표현형 분석사업단 겸임교수
							</li>
							<li>
								비교의학 질환 선도연구센터
							</li>
							<li>
								장내미생물학/마이크로바이옴 권위자
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>