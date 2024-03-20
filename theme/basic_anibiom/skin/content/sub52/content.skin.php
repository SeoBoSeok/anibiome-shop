<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>
<script>
	//헤더 높이 반응하는 스크립트
	$(function(){
		//변수 선언
		var $header = $('header');
		var $window = $(window);
		var pageOffsetTop = 1//색상 변할 부분의 top값

		//스크롤 감지 시
		$window.on('scroll', function(){
			var scrolled = $window.scrollTop() >= pageOffsetTop;
			$header.toggleClass('down', scrolled); //스크롤 감지 시, header에 class="down" 추가
		});
	});
	$(document).ready(function(){
		$('#detail_btn1').click(function(){
			$("#detail1").show();
			$("#detail2").hide();
			$("#detail3").hide();
			$("#detail4").hide();
			$("#detail5").hide();
			$("#detail6").hide();
		})
		$('#detail_btn2').click(function(){
			$("#detail1").hide();
			$("#detail2").show();
			$("#detail3").hide();
			$("#detail4").hide();
			$("#detail5").hide();
			$("#detail6").hide();
		})
		$('#detail_btn3').click(function(){
			$("#detail1").hide();
			$("#detail2").hide();
			$("#detail3").show();
			$("#detail4").hide();
			$("#detail5").hide();
			$("#detail6").hide();
		})
		$('#detail_btn4').click(function(){
			$("#detail1").hide();
			$("#detail2").hide();
			$("#detail3").hide();
			$("#detail4").show();
			$("#detail5").hide();
			$("#detail6").hide();
		})
		$('#detail_btn5').click(function(){
			$("#detail1").hide();
			$("#detail2").hide();
			$("#detail3").hide();
			$("#detail4").hide();
			$("#detail5").show();
			$("#detail6").hide();
		})
		$('#detail_btn6').click(function(){
			$("#detail1").hide();
			$("#detail2").hide();
			$("#detail3").hide();
			$("#detail4").hide();
			$("#detail5").hide();
			$("#detail6").show();
		})
	}); 
</script>
<div class="wrap">
    <?php include_once(G5_THEME_PATH.'/menu.php'); ?>
    <div class="content_wrap sub">
		<section class="sub_visual">
			<div class="sub_top_bg"><img src="/assets/images/sub_top_bg.png"></div>
			<div class="page_name text-typing-any">
				<p>Dr.Biome - Dog</p>
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
		<section class="biome_dog">
			<div class="section_padding box_width">
				<div class="biome_dog_main_banner">
					<div class="main_banner_img">
						<img src="/assets/images/biomeDog/biome_main.png" alt="배너이미지" />
					</div>
					<div class="main_banner_text">
						<h2>개의 장내 마이크로바이옴의 건강은<br/>
							여기에서 시작됩니다.</h2>
							<p>애니바이옴헬스케어의 검사, 보충제 및 유지관리 제품들이 어떻게 당신의 개들을<br/>
								도와줄 수 있는지 확인하십시오!</p>
								<a href="">쇼핑몰 이동</a>
							</div>
				</div>
			</div>
			<div class="box_width">
				<div class="biome_dog_sub_img">
					<img src="/assets/images/biomeDog/biome_sub.png" alt="강아지 이미지" />
				</div>
			</div>
			<div class="background_color_banner">
				<div class="biome_dog_help box_width">
					<h1>어떻게 도와 드릴까요?</h1>
					<ul class="biome_dog_help_list">
						<li class="biome_dog_help_box">
							<a href="">
								<div>
									<h3>지금 반려견의 증상을<br/>
										해결하세요.</h3>
										<p>
											고객님에게 꼭 맞는 제품을<br/>
											빠르게 찾아드리겠습니다.
										</p>
										<div class="right_icon">
											<img src="/assets/images/biomeDog/right_dark_blue_icon.png" alt="오른쪽아이콘"/>
										</div>
								</div>
								<div class="end_position">
									<div class="bimoe_dog_help_icon">
										<img src="/assets/images/biomeDog/box_icon1.png" alt="증상 아이콘"/>
									</div>
								</div>
							</a>
						</li>
						<li class="biome_dog_help_box">
							<a href="">
								<div>
									<h3>개의 장에서<br/> 무슨 일이 일어나고 있는지<br/>
										알아보십시오.</h3>
										<p>
											장 건강 테스트를 받고 실행 가능한 통찰력을<br/>
											얻으십시오.
										</p>
										<div class="right_icon">
											<img src="/assets/images/biomeDog/right_dark_blue_icon.png" alt="오른쪽아이콘"/>
										</div>
								</div>
								<div class="end_position">
									<div class="bimoe_dog_help_icon">
										<img src="/assets/images/biomeDog/box_icon2.png" alt="돋보기 아이콘"/>
									</div>
								</div>
							</a>
						</li>
						<li class="biome_dog_help_box">
							<a href="">
								<div>
									<h3>반려견의 장 건강을<br/>
										회복하세요.</h3>
										<p>
											식단 변화와 보충제로 장 건강을 개선하세요.
										</p>
										<div class="right_icon">
											<img src="/assets/images/biomeDog/right_dark_blue_icon.png" alt="오른쪽아이콘"/>
										</div>
								</div>
								<div class="end_position">
									<div class="bimoe_dog_help_icon">
										<img src="/assets/images/biomeDog/box_icon3.png" alt="알약 아이콘"/>
									</div>
								</div>
							</a>
						</li>
						<li class="biome_dog_help_box">
							<a href="">
								<div>
									<h3>균형 잡힌 장을<br/>
									유지하십시오.</h3>
									<p>
										매일 장 건강 지원으로 증상 없이 지내십시오.
									</p>
									<div class="right_icon">
										<img src="/assets/images/biomeDog/right_dark_blue_icon.png" alt="오른쪽아이콘"/>
									</div>
								</div>
								<div class="end_position">
									<div class="bimoe_dog_help_icon">
										<img src="/assets/images/biomeDog/box_icon4.png" alt="장 아이콘"/>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="box_width biome_dog_sub">
				<h1>불균형한 장이 반려견의 증상을 유발할 수 있습니다.</h1>
				<p>증상에 대해 자세히 알아보고, 애니바이옴헬스케어 장 건강 테스트를 시작하십시오.</p>
				<ul class="biome_dog_icon_list">
					<li class="biome_icon" id="detail_btn1">
						<a href="#detail1">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/biome_icon1.svg" alt="알레르기 아이콘"/>
							</div>
							<h3>알레르기</h3>
						</a>
					</li>
					<li class="biome_icon" id="detail_btn2">
						<a href="#detail2">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/biome_icon2.svg" alt="구취 아이콘"/>
							</div>
							<h3>구취</h3>
						</a>
					</li>
					<li class="biome_icon" id="detail_btn3">
						<a href="#detail3">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/biome_icon3.svg" alt="설사 아이콘"/>
							</div>
							<h3>설사</h3>
						</a>
					</li>
					<li class="biome_icon" id="detail_btn4">
						<a href="#detail4">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/biome_icon4.svg" alt="장 및 소화 아이콘"/>
							</div>
							<h3>장 및 소화</h3>
						</a>
					</li>
					<li class="biome_icon" id="detail_btn5">
						<a href="#detail5">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/biome_icon5.svg" alt="구강 건강 아이콘"/>
							</div>
							<h3>구강 건강</h3>
						</a>
					</li>
					<li class="biome_icon" id="detail_btn6">
						<a href="#detail6">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/biome_icon6.svg" alt="스킨&코트 아이콘"/>
							</div>
							<h3>스킨&코트</h3>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<section class="biome_dog_detail">
			<div class="detail_wrap detail_white" id="detail1">
				<div class="box_width">
					<div class="detail_title_banner" id="banner1">
						<div class="title_text">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon1.png" alt="알레르기아이콘" />
							</div>
							<h1><strong>알레르기</strong>는 반려견의 장 건강과<br/>
								어떤 관련이 있습니까?</h1>
								<a href="">알레르기 제품 쇼핑하기</a>
						</div>
					</div>
					<div class="detail_content gray_background">
						<h2>알러지 질환과 마이크로바이옴</h2>
						<p>
							반려견의 장내 마이크로바이옴이 균형을 잃으면 반려견이 알레르기를 일으킬 수 있습니다. 알레르기는 가려운 피부, 두드러기, 재채기, 눈물, 반복되는 귀 감염과 같은 불편한 증상을 유발하는 과장된 면역 반응입니다. 일반적인 알레르기 유발 요인에는 꽃가루, 곤충 물림 및 곰팡이 포지가 포함됩니다.<br/>
							장내 미생물은 면역 세포의 70~80%가 장에 살기 때문에 알레르기에 관여합니다. 따라서 반려견이 알레르기 증상을 앓고 있다면 장내 미생물의 균형을 재조정하는 것이 도움이 될 수 있습니다.
							<br/><br/>
							그렇다면 장내 마이크로바이옴은 무엇일까요?<br/>
							강아지의 소화관에 살고 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물 군집입니다.
						</p>
						<h3>개의 장은 어떻게 불균형해집니까?</h3>
						<p>
							장내 마이크로바이옴은 좋은 박테리아가 없거나, 해로운 박테리아가 너무 많거나, 다양성이  충분하지 않을 때 불균형합니다. 장이 균형을 잃으면 면역 기능이 제대로 작동하지 않아 알레르기 반응이 발생할 가능성이 훨씬 높아집니다. 질병, 연령, 식이요법, 약물, 특히 항생제와 같은 요인이 반려견의 장에 이러한 종류의 불균형을 유발할 수 있습니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title">
						<div class="line"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line"></div>
					</div>
					<div class="step_system">
						<ul class="step_list">
							<li class="gray_background">
								<h5>step 01</h5>
								<div class="step_img">
									<img src="/assets/images/product_item01.png" alt="상품이미지"/>
								</div>
								<p>
									애니바이옴헬스케어<br/>
									마이크로바이옴 건강검사(분변, 구강)를<br/>
									실시합니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="gray_background">
								<h5>step 02</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product2.png" alt="상품이미지"/>
								</div>
								<p>
									장내 미생물 건강 테스트 결과를 기다리는 동안(일반적으로 15~30), 애니바이옴헬스케어 구호 제품으로 증상을 완화할 수 있습니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="gray_background">
								<h5>step 03</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product3.png" alt="상품이미지"/>
								</div>
								<p>
									환자의 장 & 구강 마이크로바이옴 건강 테스트 보고서 결과를 사용하여 반려동물을 위한 맞춤형 계획을 세웁니다.
								</p>
							</li>
						</ul>
					</div>
					<div class="health_info">
						<div class="health_title">
							<img src="/assets/images/biomeDog/information.png" alt="정보 아이콘"/>
							<h3>건강 정보</h3>
						</div>
						<p>
							건강하고 균형 잡힌 식단을 제공하는 것이 반려견의 장내 미생물 군집을 관리하는 가장 좋은 방법입니다. 장 건강 테스트를 받으셨다면 유익한 박테리아의 성장을 촉진하기 위해 반려견의 맞춤형 보고서에 있는 식단 권장 사항을 따르십시오.<br/>
							마이크로바이옴은 식이 요법과 약물을 포함한 여러 요인의 영향을 받는 끊임없이 변화하는 생태계이기 때문에 매년 또는 증상이 발생할 때마다 반려견의 장 건강을 다시 테스트하는 것이 좋습니다. 균형 잡힌 장내 마이크로바이옴은 반려견이 더 건강하고 행복한 삶을 살 수 있도록 도와줍니다.
						</p>
					</div>
				</div>
			</div>
			<div class="detail_wrap detail_blue" id="detail2">
				<div class="box_width">
					<div class="detail_title_banner inner_banner">
						<div class="title_text">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon2.png" alt="알레르기아이콘" />
							</div>
							<h1><strong>구취</strong>는 반려견의 구강 및 장 건강과<br/>
								어떤 관련이 있습니까?</h1>
								<a href="">구취 제품 쇼핑하기</a>
						</div>
						<div class="inner_img">
							<img src="/assets/images/biomeDog/biome_banner2.png" alt="구취강아지 이미지" />
						</div>
					</div>
					<div class="detail_content white_background">
						<p>
							반려견이 구취가 나는 경우 원인은 종종 입이나 내장에 해로운 박테리아가 과도하게 증식하기 때문입니다. 해로운 받테리아가 너무 많으면 반려견의 구강 또는 장내 마이크로바이옴에 불균형이 생길 수 있습니다.
							<br/><br/>
							그렇다면 마이크로바이옴이란 무엇일까요?<br/>
							개 몸에 살고 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물 군집입니다. 장내 마이크로바이옴은 변려견의 소화관에 살고 구강 마이크로바이옴에는 반려견의 입에 사는 중요한 박테리아와 미생물의 자체 커뮤니티가 있습니다.
							<br/><br/>
							장내 마이크로바이옴에 유해한 박테리아가 너무 많으면 그 박테리아가 생성하는 악취가 나는 가스가 혈류에 흡수되어 결국 악취가 나는 개 입김으로 내뿜어집니다. 그것이 장내 미생물군집의 불균형과 관련된 상태가 악취가 나는 개 입냄새를 유발할 수 있는 한 가지 이유입니다.
						</p>
						<h3>강아지의 입이나 장은 어떻게 불균형해집니까?</h3>
						<p>
							마이크로바이옴은 좋은 박테리아가 없거나, 유해한 박테리아가 너무 많거나, 다양성이 충분하지 않을 때 불균형합니다. 질병, 연령, 식이요법 및 약물, 특히 항생제와 같은 요인은 강아지의 입이나 내장에 박테리아 불균형을 유발할 수 있습니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title">
						<div class="line"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line"></div>
					</div>
					<div class="step_system">
						<ul class="step_list">
							<li class="white_background">
								<h5>step 01</h5>
								<div class="step_img">
									<img src="/assets/images/product_item01.png" alt="상품이미지"/>
								</div>
								<p>
									애니바이옴헬스케어<br/>
									마이크로바이옴 건강검사(분변, 구강)를<br/>
									실시합니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="white_background">
								<h5>step 02</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product2.png" alt="상품이미지"/>
								</div>
								<p>
									장내 미생물 건강 테스트 결과를 기다리는 동안(일반적으로 15~30), 애니바이옴헬스케어 구호 제품으로 증상을 완화할 수 있습니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="white_background">
								<h5>step 03</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product3.png" alt="상품이미지"/>
								</div>
								<p>
									환자의 장 & 구강 마이크로바이옴 건강 테스트 보고서 결과를 사용하여 반려동물을 위한 맞춤형 계획을 세웁니다.
								</p>
							</li>
						</ul>
					</div>
					<div class="health_info">
						<div class="health_title">
							<img src="/assets/images/biomeDog/information.png" alt="정보 아이콘"/>
							<h3>건강 정보</h3>
						</div>
						<p>
							건강하고 균형 잡힌 식단을 제공하는 것이 반려견의 장내 미생물 군집을 관리하는 가장 좋은 방법입니다. 장 건강 테스트를 받으셨다면 유익한 박테리아의 성장을 촉진하기 위해 반려견의 맞춤형 보고서에 있는 식단 권장 사항을 따르십시오.<br/>
							마이크로바이옴은 식이 요법과 약물을 포함한 여러 요인의 영향을 받는 끊임없이 변화하는 생태계이기 때문에 매년 또는 증상이 발생할 때마다 반려견의 장 건강을 다시 테스트하는 것이 좋습니다. 균형 잡힌 장내 마이크로바이옴은 반려견이 더 건강하고 행복한 삶을 살 수 있도록 도와줍니다.
						</p>
					</div>
				</div>
			</div>
			<div class="detail_wrap detail_white" id="detail3">
				<div class="box_width">
					<div class="detail_title_banner" id="banner3">
						<div class="title_text">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon3.png" alt="알레르기아이콘" />
							</div>
							<h1><strong>설사</strong>는 반려견의 장 건강과<br/>
								어떤 관련이 있습니까?</h1>
								<a href="">설사 제품 쇼핑하기</a>
						</div>
					</div>
					<div class="detail_content gray_background">
						<p>
							반려견의 장내 미생물 균형이 맞지 않으면 설사나 묽은 변과 같은 일반적인 소화기 증상이 나타날 수 있습니다. 반려견의 똥은 일관성이 어느 정도 단단하고 모양이 뚜렷해야 합니다. 설사는 축축하지만 뚜렷한 똥 더미에서 형태가 없는 얼룩, 물웅덩이에 이르기까지 일관성의 범위를 나타낼 수 있습니다.
							<br/><br/>
							잦은 설사는 반려견의 장내 미생물 문제가 제대로 기능하지 않아 발생하는 소화 문제의 징후입니다. 그렇다면 장내 마이크로바이옴은 무엇일까요?<br/>
							강아지의 소화관에 살고 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물 군집입니다.<br/>
						</p>
						<h3>개의 장은 어떻게 불균형해집니까?</h3>
						<p>
							장내 마이크로바이옴은 좋은 박테리아가 없거나, 해로운 박테리아가 너무 많거나, 다양성이 충분하지 않을 때 불균형합니다. 질병, 연령, 식이요법, 약물, 특히 항생제와 같은 요인이 반려견의 장에 이러한 종류의 불균형을 유발할 수 있습니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title">
						<div class="line"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line"></div>
					</div>
					<div class="step_system">
						<ul class="step_list">
							<li class="gray_background">
								<h5>step 01</h5>
								<div class="step_img">
									<img src="/assets/images/product_item01.png" alt="상품이미지"/>
								</div>
								<p>
									애니바이옴헬스케어<br/>
									마이크로바이옴 건강검사(분변, 구강)를<br/>
									실시합니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="gray_background">
								<h5>step 02</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product2.png" alt="상품이미지"/>
								</div>
								<p>
									장내 미생물 건강 테스트 결과를 기다리는 동안(일반적으로 15~30), 애니바이옴헬스케어 구호 제품으로 증상을 완화할 수 있습니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="gray_background">
								<h5>step 03</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product3.png" alt="상품이미지"/>
								</div>
								<p>
									환자의 장 & 구강 마이크로바이옴 건강 테스트 보고서 결과를 사용하여 반려동물을 위한 맞춤형 계획을 세웁니다.
								</p>
							</li>
						</ul>
					</div>
					<div class="health_info">
						<div class="health_title">
							<img src="/assets/images/biomeDog/information.png" alt="정보 아이콘"/>
							<h3>건강 정보</h3>
						</div>
						<p>
							건강하고 균형 잡힌 식단을 제공하는 것이 반려견의 장내 미생물 군집을 관리하는 가장 좋은 방법입니다. 장 건강 테스트를 받으셨다면 유익한 박테리아의 성장을 촉진하기 위해 반려견의 맞춤형 보고서에 있는 식단 권장 사항을 따르십시오.<br/>
							마이크로바이옴은 식이 요법과 약물을 포함한 여러 요인의 영향을 받는 끊임없이 변화하는 생태계이기 때문에 매년 또는 증상이 발생할 때마다 반려견의 장 건강을 다시 테스트하는 것이 좋습니다. 균형 잡힌 장내 마이크로바이옴은 반려견이 더 건강하고 행복한 삶을 살 수 있도록 도와줍니다.
						</p>
					</div>
				</div>
			</div>
			<div class="detail_wrap detail_blue" id="detail4">
				<div class="box_width">
					<div class="detail_title_banner inner_banner">
						<div class="title_text">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon4.png" alt="알레르기아이콘" />
							</div>
							<h1><strong>소화기 문제</strong>는 반려견의 장 건강과<br/>
								어떤 관련이 있습니까?</h1>
								<a href="">장건강 제품 쇼핑하기</a>
						</div>
						<div class="inner_img">
							<img src="/assets/images/biomeDog/biome_banner4.png" alt="구취강아지 이미지" />
						</div>
					</div>
					<div class="detail_content white_background">
						<h2>소화기와 마이크로바이옴</h2>
						<p>
							반려견의 장내 마이크로바이옴의 균형이 맞지 않으면 가스, 설사, 변비, 역류 또는 구토와 같은 일반적인 소화기 증상이 나타날 수 있습니다.
							<br/><br/>
							이러한 위장(GI)문제는 반려견의 장내 마이크로바이옴이 제대로 기능하지 않는다는 신호인 경우가 많습니다. <br/>
							그렇다면 장내 마이크로바이옴은 무엇일까요?<br/>
							강아지의 소화관에 살고 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물 군집입니다.<br/>
						</p>
						<h3>강아지의 장은 어떻게 불균형해집니까?</h3>
						<p>
							장내 마이크로바이옴은 좋은 박테리아가 없거나, 해로운 박테리아가 너무 많거나, 다양성이  충분하지 않을 때 불균형합니다. 질병, 연령, 식이요법, 약물, 특히 항생제와 같은 요인이 반려견의 장에 이러한 종류의 불균형을 유발할 수 있습니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title">
						<div class="line"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line"></div>
					</div>
					<div class="step_system">
						<ul class="step_list">
							<li class="white_background">
								<h5>step 01</h5>
								<div class="step_img">
									<img src="/assets/images/product_item01.png" alt="상품이미지"/>
								</div>
								<p>
									애니바이옴헬스케어<br/>
									마이크로바이옴 건강검사(분변, 구강)를<br/>
									실시합니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="white_background">
								<h5>step 02</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product2.png" alt="상품이미지"/>
								</div>
								<p>
									장내 미생물 건강 테스트 결과를 기다리는 동안(일반적으로 15~30), 애니바이옴헬스케어 구호 제품으로 증상을 완화할 수 있습니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="white_background">
								<h5>step 03</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product3.png" alt="상품이미지"/>
								</div>
								<p>
									환자의 장 & 구강 마이크로바이옴 건강 테스트 보고서 결과를 사용하여 반려동물을 위한 맞춤형 계획을 세웁니다.
								</p>
							</li>
						</ul>
					</div>
					<div class="health_info">
						<div class="health_title">
							<img src="/assets/images/biomeDog/information.png" alt="정보 아이콘"/>
							<h3>건강 정보</h3>
						</div>
						<p>
							건강하고 균형 잡힌 식단을 제공하는 것이 반려견의 장내 미생물 군집을 관리하는 가장 좋은 방법입니다. 장 건강 테스트를 받으셨다면 유익한 박테리아의 성장을 촉진하기 위해 반려견의 맞춤형 보고서에 있는 식단 권장 사항을 따르십시오.<br/>
							마이크로바이옴은 식이 요법과 약물을 포함한 여러 요인의 영향을 받는 끊임없이 변화하는 생태계이기 때문에 매년 또는 증상이 발생할 때마다 반려견의 장 건강을 다시 테스트하는 것이 좋습니다. 균형 잡힌 장내 마이크로바이옴은 반려견이 더 건강하고 행복한 삶을 살 수 있도록 도와줍니다.
						</p>
					</div>
				</div>
			</div>
			<div class="detail_wrap detail_white" id="detail5">
				<div class="box_width">
					<div class="detail_title_banner inner_banner">
						<div class="title_text">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon5.png" alt="알레르기아이콘" />
							</div>
							<h1><strong>구강 건강</strong>이 반려견의<br/>
								장내 마이크로바이옴 및 전반적인 건강과<br/>
								어떻게 연결되어 있습니까?</h1>
								<a href="">구강 건강 제품 쇼핑하기</a>
						</div>
						<div class="inner_img">
							<img src="/assets/images/biomeDog/biome_banner5.png" alt="구취강아지 이미지" />
						</div>
					</div>
					<div class="detail_content gray_background">
						<h2>구강건강과 마이크로바이옴</h2>
						<p>
							반려견의 붉고 성난 잇몸과 구취는 입이나 내장의 박테리아 불균형으로 인해 발생할 수 있습니다. 구강 건강과 장 건강은 밀접하게 연결되어 있습니다. 사실 양방향 거리입니다.<br/>
							<br/>
							염증이 있는 잇몸, 충치, 구취 및 기타 구강 문제는 입보다 훨씬 더 반려견의 건강에 영향을 미칠 수 있습니다. 반려견의 입에 유해한 박테리아가 너무 많으면 삼키는 타액이 박테리아를 장으로 운반하여 장내 미생물 군집의 균형을 방해하고 증식할 수 있습니다.<br/>
							동시에 장의 문제는 개의 입에 문제를 일으킬 수 있습니다. 예를 들어, 강아지의 장에 해로운 박테리아가 너무 많으면 박테리아가 생성하는 악취가 나는 가스가 혈류에 흡수되어 결국 구취로 내뿜어집니다. 불균형한 장내 마이크로바이옴은 또한 과도한 염증을 유발하여 반려견의 몸 전체에 문제를 일으킬 수 있습니다.
							<br/><br/>
							그렇다면 마이크로바이옴이란 무엇일까요?<br/>
							개 몸에 살고 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물 군집입니다. 장내 마이크로바이옴은 반려견의 소화관에 살고 구강 마이크로바이옴에는 반려견의 입에 사는 중요한 박테리아와 미생물의 자체 커뮤니티가 있습니다.
						</p>
						<h3>강아지의 입이나 장은 어떻게 불균형해집니까?</h3>
						<p>
							마이크로바이옴은 좋은 박테리아가 없거나, 유해한 박테리아가 너무 많거나, 다양성이  충분하지 않을 때 불균형합니다. 질병, 연령, 식이요법 및 약물, 특히 항생제와 같은 요인은 반려견의 입이나 내장에 박테리아 불균형을 유발할 수 있습니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title">
						<div class="line"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line"></div>
					</div>
					<div class="step_system">
						<ul class="step_list">
							<li class="gray_background">
								<h5>step 01</h5>
								<div class="step_img">
									<img src="/assets/images/product_item01.png" alt="상품이미지"/>
								</div>
								<p>
									애니바이옴헬스케어<br/>
									마이크로바이옴 건강검사(분변, 구강)를<br/>
									실시합니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="gray_background">
								<h5>step 02</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product2.png" alt="상품이미지"/>
								</div>
								<p>
									장내 미생물 건강 테스트 결과를 기다리는 동안(일반적으로 15~30), 애니바이옴헬스케어 구호 제품으로 증상을 완화할 수 있습니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="gray_background">
								<h5>step 03</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product3.png" alt="상품이미지"/>
								</div>
								<p>
									환자의 장 & 구강 마이크로바이옴 건강 테스트 보고서 결과를 사용하여 반려동물을 위한 맞춤형 계획을 세웁니다.
								</p>
							</li>
						</ul>
					</div>
					<div class="health_info">
						<div class="health_title">
							<img src="/assets/images/biomeDog/information.png" alt="정보 아이콘"/>
							<h3>건강 정보</h3>
						</div>
						<p>
							건강하고 균형 잡힌 식단을 제공하는 것이 반려견의 장내 미생물 군집을 관리하는 가장 좋은 방법입니다. 장 건강 테스트를 받으셨다면 유익한 박테리아의 성장을 촉진하기 위해 반려견의 맞춤형 보고서에 있는 식단 권장 사항을 따르십시오.<br/>
							마이크로바이옴은 식이 요법과 약물을 포함한 여러 요인의 영향을 받는 끊임없이 변화하는 생태계이기 때문에 매년 또는 증상이 발생할 때마다 반려견의 장 건강을 다시 테스트하는 것이 좋습니다. 균형 잡힌 장내 마이크로바이옴은 반려견이 더 건강하고 행복한 삶을 살 수 있도록 도와줍니다.
						</p>
					</div>
				</div>
			</div>
			<div class="detail_wrap detail_blue" id="detail6">
				<div class="box_width">
					<div class="detail_title_banner inner_banner">
						<div class="title_text">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon6.png" alt="알레르기아이콘" />
							</div>
							<h1><strong>피부와 털 상태</strong>가 반려견의 장 건강과<br/>
								어떤 관련이 있습니까?</h1>
								<a href="">스킨 및 코트 제품 쇼핑하기</a>
						</div>
						<div class="inner_img">
							<img src="/assets/images/biomeDog/biome_banner6.png" alt="구취강아지 이미지" />
						</div>
					</div>
					<div class="detail_content white_background">
						<h2>피부건강과 마이크로바이옴</h2>
						<p>
							반려견의 장내 마이크로바이옴이 균형을 잃으면 가려운 피부, 발적, 탈모와 같은 일반적인 피부 및 코트 증상 또는 아토피성 피부염과 같은 더 심각한 상태가 발생할 수 있습니다.
							<br/><br/>
							피부 문제와 열악한 털 상태는 종종 개의 장내 미생물이 제대로 기능하지 않을 때 발생할 수 있는 면역 체계 문제의 징후입니다. 면역 체계 세포의 70~80%가 장에 있기 때문에 강아지의 피부와 털의 증상은 실제로 장내 미생물의 균형이 깨졌다는 신호일 수 있습니다.<br/>
							그렇다면 자앤 마이크로바이옴은 무엇일까요?<br/>
							강아지의 소화관에 살고 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물 군집입니다.
						</p>
						<h3>강아지의 장은 어떻게 불균형해집니까?</h3>
						<p>
							장내 마이크로바이옴은 좋은 박테리아가 없거나, 해로운 박테리아가 너무 많거나, 다양성이  충분하지 않을 때 불균형합니다. 질병, 연령, 식이요법, 약물, 특히 항생제와 같은 요인이 반려견의 장에 이러한 종류의 불균형을 유발할 수 있습니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/dog_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title">
						<div class="line"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line"></div>
					</div>
					<div class="step_system">
						<ul class="step_list">
							<li class="white_background">
								<h5>step 01</h5>
								<div class="step_img">
									<img src="/assets/images/product_item01.png" alt="상품이미지"/>
								</div>
								<p>
									애니바이옴헬스케어<br/>
									마이크로바이옴 건강검사(분변, 구강)를<br/>
									실시합니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="white_background">
								<h5>step 02</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product2.png" alt="상품이미지"/>
								</div>
								<p>
									장내 미생물 건강 테스트 결과를 기다리는 동안(일반적으로 15~30), 애니바이옴헬스케어 구호 제품으로 증상을 완화할 수 있습니다.
								</p>
							</li>
							<div class="right_icon">
								<img src="/assets/images/biomeDog/right_light_blue_icon.png" alt="오른쪽아이콘 이미지"/>
							</div>
							<li class="white_background">
								<h5>step 03</h5>
								<div class="step_img">
									<img src="/assets/images/biomeDog/product3.png" alt="상품이미지"/>
								</div>
								<p>
									환자의 장 & 구강 마이크로바이옴 건강 테스트 보고서 결과를 사용하여 반려동물을 위한 맞춤형 계획을 세웁니다.
								</p>
							</li>
						</ul>
					</div>
					<div class="health_info">
						<div class="health_title">
							<img src="/assets/images/biomeDog/information.png" alt="정보 아이콘"/>
							<h3>건강 정보</h3>
						</div>
						<p>
							건강하고 균형 잡힌 식단을 제공하는 것이 반려견의 장내 미생물 군집을 관리하는 가장 좋은 방법입니다. 장 건강 테스트를 받으셨다면 유익한 박테리아의 성장을 촉진하기 위해 반려견의 맞춤형 보고서에 있는 식단 권장 사항을 따르십시오.<br/>
							마이크로바이옴은 식이 요법과 약물을 포함한 여러 요인의 영향을 받는 끊임없이 변화하는 생태계이기 때문에 매년 또는 증상이 발생할 때마다 반려견의 장 건강을 다시 테스트하는 것이 좋습니다. 균형 잡힌 장내 마이크로바이옴은 반려견이 더 건강하고 행복한 삶을 살 수 있도록 도와줍니다.
						</p>
					</div>
				</div>
			</div>
		</section>
    </div>
</div>
<!--E 마크업 끝-->