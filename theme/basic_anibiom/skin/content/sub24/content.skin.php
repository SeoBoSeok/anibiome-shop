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
				<p>Our team</p>
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
		<section class="ourteam bg3">
			<div class="box_width section_padding">
				<div class="txt_half_box">
					<p class="left_tit">
						애니바이옴헬스케어의 역사는<br>대한민국의 새로운<br>반려동물의학의 역사입니다.
					</p>
					<div class="right_group">
						<p>
						2020년, 대한민국 수의계에서 25여년 이상의 임상과 연구경험의 4인의 교수(박사)들이 뜻을 모아 수의통합의학분야에 연구협업 하던 중, ㈜애니바이옴을 설립하고, 뒤이어 서울대학교 수의통합의학연구센터를 통해 학문을 정립해가면서, 반려동물의 노화와 다양한 질병들에 대한 진단 및 치료연구를 통해 보다 나은 삶을 돕고자 하는 목표로 시작되었습니다.
<br><br>
2023년, 이러한 뜻을 평소에 깊이 이해하시고 물심양면으로 후원해 주시던, 전국 최고의 임상/연구 전문가분들과 기업가분들이 뜻을 모으고 성원해 주신 덕분에, ㈜애니바이옴헬스케어를 함께 설립하고, 수의통합의학, 바이오뱅크, 마이크로바이옴, 건강교육컨텐츠, 건강기능식 연구개발 및 관련사업 등을 실현하면서 전진해가고 있습니다.
<br><br>
우리 팀은 대부분이 박사, 석사(수의학, 의학, 경영학) 학위를 가지고 있으며, 전국수의과대학, 임상/연구수의사들, 펫비즈기업들과 보호자들이 함께 더불어, 반려동물들이 더 오래, 더 행복하게 살 수 있도록 돕는데 변함없는 열정으로 대한민국 수의통합의학의 대표 주자로 최선을 다 할 것을 약속 드립니다.
						</p>
					</div>
				</div>
			</div>
			<div class="team_list_area bg_line">
				<div class="visual">
					<p class="sc_tit box_width">애니바이옴헬스케어는 <br class="pc_tab_none">세계화에 경쟁력 있는<br>대한민국 수의통합의학 실현에<br class="pc_tab_none"> 앞장서겠습니다.</p>
					<div class="img_box box_width" data-aos="flip-left">
					</div>
				</div>
				<div class="box_width ourteam_member">
					<p class="sc_tit">
						Our Team
					</p>
					<ul class="member_group">
						<li>
							<p class="group_tit">㈜애니바이옴헬스케어<span>대표</span></p>
							<div class="detail_group">
								<div class="member" onclick="mdShow('mb_owonseok')">
									<div class="img">
										<img src="/assets/images/member_owonseok.png">
										<div class="hover"></div>
									</div>
									<span class="tag_founder">Founder</span>
									<p class="name">오원석 대표이사<span>CEO</span></p>
									<span class="info">DVM. MS. Ph.D. MBA. DAiCVIM. Professor</span>
								</div>
								<div class="member" onclick="mdShow('mb_leeseunggeun')">
									<div class="img">
										<img src="/assets/images/member_leeseunggeun.png">
										<div class="hover"></div>
									</div>
									<span class="tag_founder">Founder</span>
									<p class="name">이승근 이사<span>CVO</span></p>
									<span class="info">DVM. MS. Ph.D</span>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<p class="group_tit">㈜애니바이옴헬스케어<span>서울대 수의통합의학연구센터 교수진</span></p>
							<div class="detail_group">
								<div class="member" onclick="mdShow('mb_choseongbeom')">
									<div class="img">
										<img src="/assets/images/member_choseongbeom.png">
										<div class="hover"></div>
									</div>
									<span class="tag_founder">Founder</span>
									<p class="name">조성범 교수</p>
									<span class="info">DVM. Ph.D. Professor</span>
								</div>
								<div class="member"  onclick="mdShow('mb_baekseungjun')">
									<div class="img">
										<img src="/assets/images/member_baekseungjun.png">
										<div class="hover"></div>
									</div>
									<span class="tag_founder">Founder</span>
									<p class="name">백승준 교수</p>
									<span class="info">Ph.D. Professor</span>
								</div>
								<div class="member"  onclick="mdShow('mb_kimminsu')">
									<div class="img">
										<img src="/assets/images/member_kimminsu.png">
										<div class="hover"></div>
									</div>
									<span class="tag_founder">Founder</span>
									<p class="name">김민수 교수</p>
									<span class="info">DVM. MS. Ph.D. Professor</span>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<p class="group_tit">㈜애니바이옴헬스케어 자문/고문</p>
							<div class="detail_group">
								<div class="member" onclick="mdShow('mb_ohgyusil')">
									<div class="img">
										<img src="/assets/images/member_ohgyusil.png">
										<div class="hover"></div>
									</div>
									<p class="name">오규실 고문</p>
									<span class="info">DVM. Ph.D. Professor</span>
								</div>
								<div class="member" onclick="mdShow('mb_sonhaesu')">
									<div class="img">
										<img src="/assets/images/member_sonhaesu.png">
										<div class="hover"></div>
									</div>
									<p class="name">손해수 고문</p>
									<span class="info">DVM</span>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<p class="group_tit">㈜애니바이옴헬스케어 임상연구/협업자문</p>
							<div class="detail_group">
								<div class="member" onclick="mdShow('mb_parkseil')">
									<div class="img">
										<img src="/assets/images/member_parkseil.png">
										<div class="hover"></div>
									</div>
									<p class="name">박세일 교수</p>
									<span class="info">DVM. Ph.D. Professor</span>
								</div>
								<div class="member" onclick="mdShow('mb_kimyeongin')" >
									<div class="img">
										<img src="/assets/images/member_kimyeongin.png">
										<div class="hover"></div>
									</div>
									<p class="name">김영인 박사</p>
									<span class="info">DVM. MS. Ph.D</span>
								</div>
								<div class="member" onclick="mdShow('mb_leemijin')">
									<div class="img">
										<img src="/assets/images/member_leemijin.png">
										<div class="hover"></div>
									</div>
									<p class="name">이미진 교수</p>
									<span class="info">DVM. MS. Ph.D</span>
								</div>
								<div class="member" onclick="mdShow('mb_leeseungjin')">
									<div class="img">
										<img src="/assets/images/member_leeseungjin.png">
										<div class="hover"></div>
									</div>
									<p class="name">이승진 원장</p>
									<span class="info">DVM. MS. Ph.D</span>
								</div>
								<div class="member" onclick="mdShow('mb_parkdaesik')">
									<div class="img">
										<img src="/assets/images/member_parkdaesik.png">
										<div class="hover"></div>
									</div>
									<p class="name">박대식 원장</p>
									<span class="info">DVM. MS. Ph.D</span>
								</div>
								<div class="member" onclick="mdShow('mb_leejeongmin')">
									<div class="img">
										<img src="/assets/images/member_leejeongmin.png">
										<div class="hover"></div>
									</div>
									<p class="name">이정민 원장</p>
									<span class="info">DVM. MS. Ph.D cand</span>
								</div>
								<div class="member" onclick="mdShow('mb_leeseunggon')">
									<div class="img">
										<img src="/assets/images/member_leeseunggon.png">
										<div class="hover"></div>
									</div>
									<p class="name">이승곤 원장</p>
									<span class="info">DVM. DAiCVIM. MS. Ph.D</span>
								</div>
								<div class="member" onclick="mdShow('mb_kimjongman')">
									<div class="img">
										<img src="/assets/images/member_kimjongman.png">
										<div class="hover"></div>
									</div>
									<p class="name">김종만 원장</p>
									<span class="info">DVM. MS Ph.D</span>
								</div>
								<div class="member" onclick="mdShow('mb_leejinmin')">
									<div class="img">
										<img src="/assets/images/member_leejinmin.png">
										<div class="hover"></div>
									</div>
									<p class="name">이진민 원장</p>
									<span class="info">DVM. MBA</span>
								</div>
								<div class="member" onclick="mdShow('mb_chaeminju')">
									<div class="img">
										<img src="/assets/images/member_chaeminju.png">
										<div class="hover"></div>
									</div>
									<p class="name">채민주 원장</p>
									<span class="info">DVM. MS. Ph.D</span>
								</div>
							</div>
							<div class="clear"></div>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</div>
</div>
<!--맴버:오원석-->
<div class="modal ourteam" id="mb_owonseok">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_owonseok.png">
			<div class="hover"></div>
		</div>
		<span class="tag_founder">Founder</span>
		<p class="name">오원석 대표이사<span>CEO</span></p>
		<span class="info">DVM. MS. Ph.D. MBA. DAiCVIM. Professor</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>㈜애니바이옴헬스케어. ㈜애니바이옴 대표이사</p>
		  <p>서울대학교 수의과대학 겸임교수</p>
		  <p>서울대학교 수의통합의학연구센터 연구교수</p>
		  <p>아시아 수의내과전문의, 수의학박사, 경영학석사(MBA)</p>
		  <p>오원석황금동물병원, 노령동물힐링센터 병원장</p>
		  <p>Australia. Univ. Queensland. 임상영양학 연구원</p>
		  <p>Hill’s Pet Nutrition 학술기술자문 (2000년 ~ 현재)</p>
		  <p>㈜사조동아원, ㈜삼화페인트, ㈜미코-㈜지오엠씨 등 학술자문 </p>
		  <p>노령내과학/임상영양학/피부학/병리진단학 권위자</p>
		  <p>Australia. Univ. Queensland. 임상영양학 Postdoc</p>
		  <p>경북대학교 수의학박사(수의내과학), 석사(수의병리학)</p>
		  <p>한양Cyber대학교 MBA (마케팅)</p>
	  </div>
      <button onclick="mdHide('mb_owonseok')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:이승근-->
<div class="modal ourteam" id="mb_leeseunggeun">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_leeseunggeun.png">
			<div class="hover"></div>
		</div>
		<span class="tag_founder">Founder</span>
		<p class="name">이승근 이사<span>CVO</span></p>
		<span class="info">DVM. MS. Ph.D</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>㈜애니바이옴헬스케어 이사</p>
		  <p>현. KAMC 대표</p>
		  <p>현. 충북수의사회(CVMA) 회장</p>
		  <p>현. 한국동물병원협회(KAHA) 명예회장</p>
		  <p>전. 경북대학교 수의과대학 겸임교수</p>
		  <p>전. 한국임상수의사 교육원(VCS) 원장</p>
		  <p>전. 제주세계소동물수의사대회(WSAVA) 대회장</p>
		  <p>전. 한국동물병원협회(KAHA) 회장</p>
		  <p>전. KAHA HAB CENTER 단장</p>
		  <p>전. 국립충북대학교 자연과학대학 / 수의과대학 초빙강사</p>
		  <p>경북대학교 수의학박사(수의외과학), 석사</p>
		  <p>소동물 안과 양막이식, 녹내장 모델 연구, 심장 페이스메이커 개발 및 연구</p>
		  <p>소동물 외과 심장 / 일반 / 정형 / 외과 강의 리서치</p>
		  <p>국내 외 50차례 수의과 대학 및 임상수의사 대상 안과 동물행동학 일반외과 강의 및 워크샵 실시</p>
		  <p>국내외 학술 연구 논문(SCI) 30여편 발표.</p>
	  </div>
      <button onclick="mdHide('mb_leeseunggeun')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:조성범-->
<div class="modal ourteam" id="mb_choseongbeom">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_choseongbeom.png">
			<div class="hover"></div>
		</div>
		<span class="tag_founder">Founder</span>
		<p class="name">조성범 교수</p>
		<span class="info">DVM. Ph.D. Professor</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>서울대학교 수의과대학 교수 수의공중보건학 (역학/식품위생)</p>
		  <p>미국 미네소타대학 수의학박사</p>
		  <p>전. 미국 USDA-ARS 연구원</p>
		  <p>전. 미국 미시건주립대 식품안전독성센터 조교수</p>
		  <p>서울대 수의통합의학 연구센터장</p>
		  <p>국가 마우스표현형 분석사업단 겸임교수</p>
		  <p>비교의학 질환 선도연구센터</p>
		  <p>장내미생물학/마이크로바이옴 권위자</p>
	  </div>
      <button onclick="mdHide('mb_choseongbeom')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:백승준-->
<div class="modal ourteam" id="mb_baekseungjun">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_baekseungjun.png">
			<div class="hover"></div>
		</div>
		<span class="tag_founder">Founder</span>
		<p class="name">백승준 교수</p>
		<span class="info">Ph.D. Professor</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>서울대학교 수의과대학 교수 수의분자세포생물학</p>
		  <p>미국 메릴랜드 주립대학 의과대학 유전학 박사</p>
		  <p>전. 미국 NIH/NIEHS 연구원</p>
		  <p>전. 미국 테네시주립대학 수의과대학 조교수/부교수</p>
		  <p>서울대 수의통합의학 연구센터</p>
		  <p>건강기능식품/영양제 작용기전 연구 분자세포생물학/유전학 권위자</p>
	  </div>
      <button onclick="mdHide('mb_baekseungjun')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:김민수-->
<div class="modal ourteam" id="mb_kimminsu">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_kimminsu.png">
			<div class="hover"></div>
		</div>
		<span class="tag_founder">Founder</span>
		<p class="name">김민수 교수</p>
		<span class="info">DVM. MS. Ph.D. Professor</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>서울대학교 수의과대학 교수 수의응급의학</p>
		  <p>서울대학교 수의과대학 수의학박사 미.</p>
		  <p>플로리다대학 객원교수 수의대체의학/외과학</p>
		  <p>서울대 수의통합의학 연구센터 응급/대체/외과 권위자</p>
		  <p>서울대학교 부속동물병원 응급의료센터장</p>
		  <p>서울대 수의통합의학 연구센터</p>
	  </div>
      <button onclick="mdHide('mb_kimminsu')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:오규실-->
<div class="modal ourteam" id="mb_ohgyusil">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_ohgyusil.png">
			<div class="hover"></div>
		</div>
		<p class="name">오규실 고문</p>
		<span class="info">DVM. Ph.D. Professor</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>오원석황금동물병원 병원장</p>
		  <p>오수의과병원 병원장</p>
		  <p>경북대 수의병리학 박사, 석사</p>
		  <p>대구가톨릭신학교 신학석사</p>
		  <p>미국 Manawa and Marion Veterinaty Clinic 연수</p>
		  <p>미국 Angel's Care Anical Hospital 연수</p>
		  <p>미국 Animal Medical Care Center 연수</p>
		  <p>전. 경북대학교 수의과대학 수의학과 외래교수</p>
		  <p>전. 대구미래대학 애완동물관리과 초빙교수</p>
		  <p>전. 한국방송통신대학 강사</p>
		  <p>전. 경북대학교 평생교육원 애견아카데미 강사</p>
		  <p>전. 경북과학대학 애완동물관리과 외래교수</p>
		  <p>전. 대구미래대학 병원의료업무과 외래교수</p>
	  </div>
      <button onclick="mdHide('mb_ohgyusil')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:손해수-->
<div class="modal ourteam" id="mb_sonhaesu">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_sonhaesu.png">
			<div class="hover"></div>
		</div>
		<p class="name">손해수 고문</p>
		<span class="info">DVM</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>현. 24시 노아동물메디컬센터 고문</p>
		  <p>현. 월산동 노아동물병원 대표원장</p>
		  <p>전. 광주광역시 수의사회 회장</p>
		  <p>대한수의사회 광주 지부장</p>
		  <p>대한수의사회 국가수의자문위원</p>
		  <p>서림교회 사무장로</p>
		  <p>전남대학교 수의과대학</p>
		  <p>전남대학교 수의과대학 동창회장</p>
		  <p>전남대학교 수의과대학 실험동문 심사평가 위원</p>
	  </div>
      <button onclick="mdHide('mb_sonhaesu')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:박세일-->
<div class="modal ourteam" id="mb_parkseil">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_parkseil.png">
			<div class="hover"></div>
		</div>
		<p class="name">박세일 교수</p>
		<span class="info">DVM. Ph.D. Professor</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>연세대학교 의과대학 심혈관센터 연구교수</p>
		   <p>연세대학교 심뇌혈관질환유효성평가지원센터 전임상연구소장</p>
		   <p>영남대학교 의과대학 연구교수 / Postdoc</p>
		   <p>영남대학교 의과학연구소 초빙연구원</p>
		   <p>국제학술논문연구(SCI) 30여편</p>
		   <p>국가연구과제사업 수행(13 Projects)</p>
		   <p>전, 경북대 수의대 겸임교수</p>
		   <p>한국임상수의학회 이사</p>
		   <p>한국실험동물수의사회 이사</p>
		   <p>현. 실험동물학회연구위원</p>
		   <p>경북대 수의외과학 박사, 석사</p>
		   <p>소동물 정형외과/외과 전공</p>
		   <p>황금동물의료원 원장</p>
		   <p>21세기 동물병원 원장</p>
		   <p>지동범이승진동물병원 진료</p>
	  </div>
      <button onclick="mdHide('mb_parkseil')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:김영인-->
<div class="modal ourteam" id="mb_kimyeongin">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_kimyeongin.png">
			<div class="hover"></div>
		</div>
		<p class="name">김영인 박사</p>
		<span class="info">DVM. MS. Ph.D</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>(주)앤딕 부사장</p>
		  <p>(주)셀렉소바이오 부사장</p>
		  <p>서울대학교 동물보건최고경영자과정(SNU AHP 1기)</p>
		  <p>전. 대웅제약 약물독성연구팀 연구원</p>
		  <p>전. 동화제약 약물독성연구팀 연구원</p>
		  <p>전. Korea Testing Certificate. 유효성 평가팀</p>
		  <p>경북대 수의외과학 박사, 석사(수의내과학)</p>
		  <p>경북대 수의과대학 졸업</p>
	  </div>
      <button onclick="mdHide('mb_kimyeongin')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:이미진-->
<div class="modal ourteam" id="mb_leemijin">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_leemijin.png">
			<div class="hover"></div>
		</div>
		<p class="name">이미진 교수</p>
		<span class="info">DVM. MS. Ph.D</span>
	  </div>
	  <div class="career_list scroll_area">
		   <p>원광대학교 반려동물산업학과 교수</p>
			<p>전. ㈜마미닥터 / 수석연구원</p>
			<p>전. 서울대학교 수의과대학 동물병원</p>
			<p>전. ㈜풀무원. 책임연구원</p>
			<p>전. ㈜네오딘바이오벳. 실장</p>
			<p>전. ㈜에스피엔씨. 학술팀장</p>
			<p>전. 공주대학교 특수동물학과 강사</p>
			<p>전. 서울호서직업전문학교 외래교수</p>
			<p>전. ㈜성보사이언스텍. 학술팀장</p>
			<p>미국 코넬대학교 수의과대학 방문연구원</p>
			<p>전북대학교 수의과대학 생체안전성연구소 Postdoc</p>
			<p>전북대학교 수의과대학 강사/조교</p>
	  </div>
      <button onclick="mdHide('mb_leemijin')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:이승진-->
<div class="modal ourteam" id="mb_leeseungjin">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_leeseungjin.png">
			<div class="hover"></div>
		</div>
		<p class="name">이승진 원장</p>
		<span class="info">DVM. MS. Ph.D</span>
	  </div>
	  <div class="career_list scroll_area">
		   <p>울산. 이승진동물의료센터 대표원장</p>
		  <p>경북대 수의외과학 박사, 석사</p>
		  <p>경북대 수의과대학 졸업</p>
		  <p>소동물 정형외과 포함</p>
		  <p>ㅅ수의학 전문사 총 4000페이지, 6권 번역</p>
		  <p>25년간 수의 정형외과 강의</p>
		  <p>국내 최초 반려동물문화센터 기획 및 제안</p>
		  <p>사단법인 아름다운 공존 살함과 동물 대표</p>
		  <p>현. 울산광역시 수의사회 회장</p>
		  <p>전. 한국 수의외과학회 부회장 겸 전문의 추진 공동위원장</p>
		  <p>슬개골탈구에서 Cranial Q-angle</p>
		  <p>슬개골탈구에서의 경골골절 변위술과 함몰변위술</p>
		  <p>외상성 슬개골탈구의 원인</p>
		  <p>십자인대파열에서 CTWO의 적용</p>
		  <p>십자인대파열에서 Modified lateral suture 개발</p>
		  <p>성장견의 4등급 슬개골탈구 수술</p>
		  <p>국내최초 반려동물문화센터 기획 및 정책 제안</p>
	  </div>
      <button onclick="mdHide('mb_leeseungjin')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:박대식 원장-->
<div class="modal ourteam" id="mb_parkdaesik">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_parkdaesik.png">
			<div class="hover"></div>
		</div>
		<p class="name">박대식 원장</p>
		<span class="info">DVM. MS. Ph.D</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>부산. 사하동물의료원 대표원장</p>
		  <p>수의 외과학 박사, 석사</p>
		  <p>서울대학교 수의대학졸업</p>
		  <p>1992년 ~ 현재 사하종합동물병원 외과과장, 원장</p>
		  <p>한국임상수의사 교육원 일반외과 자문위원</p>
		  <p>현. 부산 동물병원 교육원장</p>
		  <p>현. 주식회사 사하동물의료원 대표이사</p>
		  <p>부산시 수의사회 부회장</p>
		  <p>한국동물병원협회 부회장</p>
		  <p>한국 임상 수의학회 정회원</p>
		  <p>대한 수의사회 정회원</p>
		  <p>한국동물병원 협회 회원</p>
	  </div>
      <button onclick="mdHide('mb_parkdaesik')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:이정민 원장-->
<div class="modal ourteam" id="mb_leejeongmin">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_leejeongmin.png">
			<div class="hover"></div>
		</div>
		<p class="name">이정민 원장</p>
		<span class="info">DVM. MS. Ph.D cand</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>청주, 고려동물메디컬센터 내과</p>
		  <p>충남대학교 수의학박사 cand, 석사(수의내과학)</p>
		  <p>충남대학교 수의과대학 동물병원 진료수의사/내과팀장</p>
		  <p>충남대학교 수의과대학 교육조교</p>
		  <p>올해의 임상수의사상 수상 (2021)</p>
		  <p>충남대학교 수의과대학 졸업</p>
		  <p>
		  	<span>
				해외연수프로그램 (VISITING SCHOLAR PROGRAM)
				<em>- Georgia Veterinary Rehabilitation(GVR, Georgia, 2017)</em>
				<em>- Veterinary Specialist Services (VSS, Australia, 2017)</em>
				<em>- Animal Medical Center (AMC, New York, 2019)</em>
			  </span>
			 
			  
		  </p>
	  </div>
      <button onclick="mdHide('mb_leejeongmin')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:이승곤 원장-->
<div class="modal ourteam" id="mb_leeseunggon">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_leeseunggon.png">
			<div class="hover"></div>
		</div>
		<p class="name">이승곤 원장</p>
		<span class="info">DVM. DAiCVIM. MS. Ph.D</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>서울. 동물심장병원 원장</p>
			<p>Diplomate of AiCVIM (cardiology),아시아 심장전문의</p>
			<p>미국 노스캐롤라이나 수의과대학 심장센터 수의사 겸 연구원</p>
			<p>수의 내과학 박사, 석사 (full time, 심장학 전공)</p>
			<p>2017 아시아 심장 전문의 자격 취득 (DAiCVIM)</p>
			<p>2012-2013 미국 노스캐롤라이나 수의과대학 수의사 면허 취득 (Faculty license: FC 53483)</p>
			<p>2004 수의사 면허 (면허번호: 11862)</p>
			<p>Small animal cardiology service, department of clinical science. </p>
			<p>North Carolina State University, North Carolina State, United States) 2012-2013</p>
			<p>심장학 컨설턴트 Veterinary Consultation System(VCS)</p>
			<p>수의내과학 강사(이론, 실습) 2004.03-2005.03</p>
			<p>학술논문 : 국내외 약 50여편의 논문 발표</p>
	  </div>
      <button onclick="mdHide('mb_leeseunggon')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:김종만 원장-->
<div class="modal ourteam" id="mb_kimjongman">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_kimjongman.png">
			<div class="hover"></div>
		</div>
		<p class="name">김종만 원장</p>
		<span class="info">DVM. MS Ph.D</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>24시 대전동물메디컬센터 숲 대표원장</p>
		  <p>충남대학교 수의학 박사, 석사(외과학)</p>
		  <p>일본 오비히로 대학 임상 연구원 휴학</p>
		  <p>충남대학교 수의대 외과 석사</p>
		  <p>대전 아프리카 동물병원 개원</p>
		  <p>현. 충남대학교 수의학과 강의 (부교수)</p>
		  <p>현. 한국 수의외과학회 이사</p>
		  <p>전. 한국 수의안과학회 이사</p>
		  <p>전. 한국 수의침술확회 이사</p>
		  <p>전. 홍성 혜전대학교 겸임 교수</p>
		  <p>전. 공주 영상대학교 겸임 교수</p>
		  <p>전. 대전 우송정보대학 겸임 교수</p>
		  <p>전. 대전 수의사회 부회장</p>
	  </div>
      <button onclick="mdHide('mb_kimjongman')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:이진민 원장-->
<div class="modal ourteam" id="mb_leejinmin">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_leejinmin.png">
			<div class="hover"></div>
		</div>
		<p class="name">이진민 원장</p>
		<span class="info">DVM. MBA</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>라라동물의료원 대표원장(1999~2023 현재)</p>
			<p>가톨릭대학교 의료경영대학원 의료경영학석사（ＭＢＡ）</p>
			<p>강원대학교 수의과대학 졸업</p>
			<p>서울시 수의사회 회장상 표창</p>
			<p>한국동물병원협회 부회장</p>
			<p>강원대학교 수의과대학동문회 이사/감사</p>
			<p>동물보호단체 카라 협력병원</p>
			<p>서울대, 강원대, 전남대 수의대 강의</p>
			<p>충청지역경영포럼</p>
			<p>동물병원 경영포럼 강의</p>
			<p>해마루동물병원특강</p>
			<p>부산 동물메디컬센터 강의</p>
			<p>한국수의컨퍼런스강의</p>
			<p>한국동물병원협회 추계 컨퍼런스패널 토론</p>
			<p>부산사하동물병원강의</p>
			<p>경기도, 충북, 울산시, 강원도 수의사회 초청 강의</p>
			<p>한국동물병원협회콩그레스강의</p>
	  </div>
      <button onclick="mdHide('mb_leejinmin')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
	<!--맴버:채민주 원장-->
<div class="modal ourteam" id="mb_chaeminju">
  <div class="modal_container">
    <div class="m_content">
      <div class="member">
		<div class="img">
			<img src="/assets/images/member_chaeminju.png">
			<div class="hover"></div>
		</div>
		<p class="name">채민주 원장</p>
		<span class="info">DVM. MS. Ph.D</span>
	  </div>
	  <div class="career_list scroll_area">
		  <p>24시 천안동물의료센터 대표원장</p>
		  <p>건국대학교 수의과대학 내과 겸임교수</p>
		  <p>건국대학교 수의과대학 내과 박사/석사</p>
		  <p>전. 건국대학교 부속동물병원 진료 수의사</p>
		  <p>전. 서울대학교 수의과대학 마취통증의학화 externship</p>
		  <p>전. 이안동물의료센터(청담) 내과, 마취과장</p>
		  <p>현. 천안동물의료센터 내과 원장</p>
		  <p>현. 건국대학교 수의과대학 내과 겸임교수</p>
		  <p>피부과/소화기내과(알러지질환), 신경내과, 중증내과</p>
	  </div>
      <button onclick="mdHide('mb_chaeminju')" class="btn_close">닫기</button>
    </div>
  </div>
</div>
<!--E 멤버 팝업 끝-->