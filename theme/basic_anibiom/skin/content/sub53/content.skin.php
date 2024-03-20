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
				<p>Dr.Biome - Cat</p>
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
						<div class="dropbtn open-btn-ckver">Dr.Biome - Cat</div>
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
				<div class="biome_dog_main_banner cat">
					<div class="main_banner_img cat">
					</div>
					<div class="main_banner_text cat">
						<h2>고양이의 장내 마이크로바이옴의 건강은<br/>
							여기에서 시작됩니다.</h2>
							<p>애니바이옴헬스케어의 검사, 보충제 및 유지관리 제품들이 어떻게 당신의 고양이들을<br/>
								도와줄 수 있는지 확인하십시오!</p>
								<a href="">쇼핑몰 이동</a>
							</div>
				</div>
			</div>
			<!-- <div class="box_width">
				<div class="biome_dog_sub_img">
					<img src="/assets/images/biomeDog/biome_sub.png" alt="강아지 이미지" />
				</div>
			</div> -->
			<!-- <div class="background_color_banner">
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
			</div> -->
			<div class="box_width biome_dog_sub">
				<h1>불균형한 장이 고양이의 증상을 유발할 수 있습니다.</h1>
				<p>증상에 대해 자세히 알아보고, 애니바이옴헬스케어 장 건강 테스트를 시작하십시오.</p>
				<ul class="biome_dog_icon_list">
					<li class="biome_icon cat" id="detail_btn1">
						<a href="#detail1">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/biome_icon2.svg" alt="구취 아이콘"/>
							</div>
							<h3>구취</h3>
						</a>
					</li>
					<li class="biome_icon cat" id="detail_btn2">
						<a href="#detail2">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/biome_icon3.svg" alt="설사 아이콘"/>
							</div>
							<h3>설사</h3>
						</a>
					</li>
					<li class="biome_icon cat" id="detail_btn3">
						<a href="#detail3">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/biome_icon4.svg" alt="장 및 소화 아이콘"/>
							</div>
							<h3>소화</h3>
						</a>
					</li>
					<li class="biome_icon cat" id="detail_btn4">
						<a href="#detail4">
							<div class="icon_img">
								<img src="/assets/images/biome_icon7.svg" alt="헤어볼 아이콘"/>
							</div>
							<h3>헤어볼</h3>
						</a>
					</li>
					<li class="biome_icon cat" id="detail_btn5">
						<a href="#detail5">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/biome_icon5.svg" alt="구강 건강 아이콘"/>
							</div>
							<h3>구강 건강</h3>
						</a>
					</li>
					<li class="biome_icon cat" id="detail_btn6">
						<a href="#detail6">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/biome_icon6.svg" alt="스킨&코트 아이콘"/>
							</div>
							<h3>스킨&코트</h3>
						</a>
					</li>
				</ul>
				<img src="/assets/images/cat_microbiome_1.png" alt="고양이 마이크로바이옴" />
			</div>
		</section>
		<section class="biome_dog_detail">
		<div class="detail_wrap detail_cat" id="detail1">
				<div class="box_width">
					<div class="detail_title_banner inner_banner">
						<div class="title_text cat">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon2_2.png" alt="알레르기아이콘" />
							</div>
							<h1>구취는 고양이의 구강 및 장 건강과<br/>
								어떤 관련이 있습니까?</h1>
								<a href="">구취 제품 쇼핑하기</a>
						</div>
						<div class="inner_img">
							<img src="/assets/images/biomeDog/biome_cat_banner2.png" alt="구취강아지 이미지" />
						</div>
					</div>
					<div class="detail_content white_background">
						<h2>구취와 마이크로바이옴</h2>
						<p>
							고양이가 구취가 나는 경우 원인은 종종 입이나 내장에 해로운 박테리아가 과도하게 증식하기 때문입니다. 해로운 박테리아가 너무 많으면 고양이의 구강 또는 장내 마이크로바이옴에 불균형이 생길 수 있습니다.
							<br/><br/>
							그렇다면 마이크로바이옴이란 무엇일까요?<br/>
							그것은 고양이의 몸에 살고 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물의 공동체입니다. 장내 마이크로바이옴은 고양이의 소화관에 살고 있으며, 구강 마이크로바이옴은 고양이의 입에 사는 중요한 박테리아 및 기타 미생물의 자체 커뮤니티를 가지고 있습니다.
							<br/><br/>
							장내 마이크로바이옴에 해로운 박테리아가 너무 많으면 박테리아가 생성하는 악취가 나는 가스가 혈류에 흡수되어 결국 악취가 나는 고양이 숨결로 내뿜어집니다. 그것이 장내 미생물의 불균형과 관련된 상태가 고양이의 구취를 유발할 수 있는 한 가지 이유입니다.
						</p>
						<h3>고양이의 입이나 장은 어떻게 불균형해집니까?</h3>
						<p>
							마이크로바이옴은 좋은 박테리아가 없거나, 해로운 박테리아가 너무 많거나, 다양성이  충분하지 않을 때 불균형합니다. 질병, 연령, 식이요법 및 약물, 특히 항생제와 같은 요인이 고양이의 입이나 내장에 박테리아 불균형을 일으킬 수 있습니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program cat">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							고양이의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title cat">
						<div class="line cat"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line cat"></div>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
					<div class="health_info cat">
						<div class="health_title">
							<img src="/assets/images/biomeDog/info_cat.png" alt="정보 아이콘"/>
							<h3>건강 정보</h3>
						</div>
						<p>
							건강하고 균형 잡힌 식단을 제공하는 것이 반려견의 장내 미생물 군집을 관리하는 가장 좋은 방법입니다. 장 건강 테스트를 받으셨다면 유익한 박테리아의 성장을 촉진하기 위해 반려견의 맞춤형 보고서에 있는 식단 권장 사항을 따르십시오.<br/>
							마이크로바이옴은 식이 요법과 약물을 포함한 여러 요인의 영향을 받는 끊임없이 변화하는 생태계이기 때문에 매년 또는 증상이 발생할 때마다 반려견의 장 건강을 다시 테스트하는 것이 좋습니다. 균형 잡힌 장내 마이크로바이옴은 반려견이 더 건강하고 행복한 삶을 살 수 있도록 도와줍니다.
						</p>
					</div>
				</div>
			</div>
			<div class="detail_wrap detail_cat" id="detail2">
				<div class="box_width">
					<div class="detail_title_banner inner_banner">
						<div class="title_text cat">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon32.png" alt="알레르기아이콘" />
							</div>
							<h1>설사는 고양이의 장 건강과<br/>
								어떤 관련이 있습니까?</h1>
								<a href="">설사 제품 쇼핑하기</a>
						</div>
						<div class="inner_img">
							<img src="/assets/images/biomeDog/biome_cat_banner22.png" alt="구취강아지 이미지" />
						</div>
					</div>
					<div class="detail_content gray_background">
						<p>
							고양이 장내 미생물의 균형이 맞지 않으면 설사나 묽은 변과 같은 일반적인 소화기 증상이 나타날 수 있습니다. 고양이의 똥은 일관성이 어느 정도 단단하고 모양이 뚜렷해야 합니다. 설사는 축축하지만 뚜렷한 똥 더미에서 형태가 없는 얼룩, 물웅덩이에 이르기까지 일관성의 범위를 나타낼 수 있습니다.
							<br/><br/>
							잦은 설사는 종종 고양이의 장내 미생물이 제대로 기능하지 않아 발생하는 소화 문제의 징후입니다.<br><br>그렇다면 장내 마이크로바이옴은 무엇일까요?<br/>
							고양이의 소화관에 살고 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물 군집입니다.<br/>
						</p>
						<h3>고양이의 장은 어떻게 불균형해집니까?</h3>
						<p>
						장내 마이크로바이옴은 좋은 박테리아가 없거나, 해로운 박테리아가 너무 많거나, 다양성이  충분하지 않을 때 불균형합니다. 질병, 나이, 식이요법 및 약물, 특히 항생제와 같은 요인이 고양이의 장에 이러한 종류의 불균형을 유발할 수 있습니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program cat">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title cat">
						<div class="line cat"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line cat"></div>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
					<div class="health_info cat">
						<div class="health_title">
							<img src="/assets/images/biomeDog/info_cat.png" alt="정보 아이콘"/>
							<h3>건강 정보</h3>
						</div>
						<p>
							건강하고 균형 잡힌 식단을 제공하는 것이 반려견의 장내 미생물 군집을 관리하는 가장 좋은 방법입니다. 장 건강 테스트를 받으셨다면 유익한 박테리아의 성장을 촉진하기 위해 반려견의 맞춤형 보고서에 있는 식단 권장 사항을 따르십시오.<br/>
							마이크로바이옴은 식이 요법과 약물을 포함한 여러 요인의 영향을 받는 끊임없이 변화하는 생태계이기 때문에 매년 또는 증상이 발생할 때마다 반려견의 장 건강을 다시 테스트하는 것이 좋습니다. 균형 잡힌 장내 마이크로바이옴은 반려견이 더 건강하고 행복한 삶을 살 수 있도록 도와줍니다.
						</p>
					</div>
				</div>
			</div>
			<div class="detail_wrap detail_cat" id="detail3">
				<div class="box_width">
					<div class="detail_title_banner inner_banner">
						<div class="title_text cat">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon42.png" alt="소화아이콘" />
							</div>
							<h1>소화 문제가 고양이의 장 건강과<br/>
								어떤 관련이 있습니까?</h1>
								<a href="">장건강 제품 쇼핑하기</a>
						</div>
						<div class="inner_img">
							<img src="/assets/images/biomeDog/biome_cat_banner23.png" alt="구취강아지 이미지" />
						</div>
					</div>
					<div class="detail_content white_background">
						<h2>소화와 마이크로바이옴</h2>
						<p>
						고양이 장내 미생물의 균형이 맞지 않으면 설사, 변비, 역류 또는 구토와 같은 일반적인 소화기 증상이 나타날 수 있습니다.
							<br/>
							이러한 위장(GI) 문제는 종종 고양이의 장내 미생물이 제대로 기능하지 않는다는 신호입니다.<br/><br/>
							그렇다면 장내 마이크로바이옴은 무엇일까요?<br/>
							고양이의 소화관에 살고 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물 군집입니다.<br/>
						</p>
						<h3>고양이의 장은 어떻게 불균형해집니까?</h3>
						<p>
						장내 마이크로바이옴은 좋은 박테리아가 없거나, 해로운 박테리아가 너무 많거나, 다양성이 충분하지 않을 때 불균형합니다. 질병, 나이, 식이요법 및 약물, 특히 항생제와 같은 요인이 고양이의 장에 이러한 종류의 불균형을 유발할 수 있습니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program cat">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title cat">
						<div class="line cat"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line cat"></div>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
					<div class="health_info cat">
						<div class="health_title">
							<img src="/assets/images/biomeDog/info_cat.png" alt="정보 아이콘"/>
							<h3>건강 정보</h3>
						</div>
						<p>
							건강하고 균형 잡힌 식단을 제공하는 것이 반려견의 장내 미생물 군집을 관리하는 가장 좋은 방법입니다. 장 건강 테스트를 받으셨다면 유익한 박테리아의 성장을 촉진하기 위해 반려견의 맞춤형 보고서에 있는 식단 권장 사항을 따르십시오.<br/>
							마이크로바이옴은 식이 요법과 약물을 포함한 여러 요인의 영향을 받는 끊임없이 변화하는 생태계이기 때문에 매년 또는 증상이 발생할 때마다 반려견의 장 건강을 다시 테스트하는 것이 좋습니다. 균형 잡힌 장내 마이크로바이옴은 반려견이 더 건강하고 행복한 삶을 살 수 있도록 도와줍니다.
						</p>
					</div>
				</div>
			</div>
			<div class="detail_wrap detail_cat" id="detail4">
				<div class="box_width">
					<div class="detail_title_banner inner_banner">
						<div class="title_text cat">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon_hairball.png" alt="알레르기아이콘" />
							</div>
							<h1>헤어볼은 고양이의 장 건강과<br/>
								어떤 관련이 있습니까?</h1>
								<a href="">헤어볼 치료제 제품 쇼핑하기</a>
						</div>
						<div class="inner_img">
							<img src="/assets/images/biomeDog/biome_cat_banner24.png" alt="구취강아지 이미지" />
						</div>
					</div>
					<div class="detail_content gray_background">
						<h2>헤어볼과 마이크로바이옴</h2>
						<p>
							고양이의 경우 가끔 털뭉치가 역류하는 것은 정상입니다. 그러나 잦은 헤어볼은 고양이의 소화 시스템이 재료를 제대로 움직이지 않는다는 신호일 수 있습니다.<br/>
							건강할 때 고양이의 소화관은 정상적인 양의 털을 처리하여 똥에서 제거될 때 까지 쉽게 통과시킬 수 있습니다. 고양의의 털이 뱃속에서 공 모양으로 쌓이면 소화 시스템이 이를 장으로 옮길 수 없기 때문일 수 있습니다. 그 움직임(운동성)에는 장내 특정 유익한 박테리아가 생산하는 화학 물질이 필요합니다. 중요한 좋은 박테리아가 충분하지 않으면 장내 마이크로바이옴의 균형이 깨지고 운동성이 감소합니다.
							<br/><br/>
							그렇다면 장내 마이크로바이옴은 무엇일까요?<br/>
							그것은 고양이의 소화관에 살고 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물의 공통체입니다.
						</p>
						<h3>고양이의 장은 어떻게 불균형해집니까?</h3>
						<p>
						장내 마이크로바이옴은 좋은 박테리아가 없거나, 해로운 박테리아가 너무 많거나, 다양성이  충분하지 않을 때 불균형합니다. 질병, 나이, 식이요법 및 약물, 특히 항생제와 같은 요인이 고양이의 장에 이러한 종류의 불균형을 유발할 수 있습니다.
						<br><br>
						불균형한 장내 마이크로바이옴은 염증성 장 질환(IBD)을 유발할 수 있는 요인 중 하나입니다. 그리고 만성 염증은 음식과 머리카락을 정상적으로 움직이는 소화관의 기능을 심각하게 방해할 수 있습니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program cat">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title cat">
						<div class="line cat"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line cat"></div>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
					<div class="health_info cat">
						<div class="health_title">
							<img src="/assets/images/biomeDog/info_cat.png" alt="정보 아이콘"/>
							<h3>건강 정보</h3>
						</div>
						<p>
							건강하고 균형 잡힌 식단을 제공하는 것이 반려견의 장내 미생물 군집을 관리하는 가장 좋은 방법입니다. 장 건강 테스트를 받으셨다면 유익한 박테리아의 성장을 촉진하기 위해 반려견의 맞춤형 보고서에 있는 식단 권장 사항을 따르십시오.<br/>
							마이크로바이옴은 식이 요법과 약물을 포함한 여러 요인의 영향을 받는 끊임없이 변화하는 생태계이기 때문에 매년 또는 증상이 발생할 때마다 반려견의 장 건강을 다시 테스트하는 것이 좋습니다. 균형 잡힌 장내 마이크로바이옴은 반려견이 더 건강하고 행복한 삶을 살 수 있도록 도와줍니다.
						</p>
					</div>
				</div>
			</div>
			<div class="detail_wrap detail_cat" id="detail5">
				<div class="box_width">
					<div class="detail_title_banner inner_banner">
						<div class="title_text cat">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon52.png" alt="알레르기아이콘" />
							</div>
							<h1>구강 건강이<br/>
							고양이의 장 및 전반적인 건강과<br/>
							어떤 관련이 있습니까?</h1>
							<a href="">구강 및 장건강 제품 쇼핑하기</a>
						</div>
						<div class="inner_img">
							<img src="/assets/images/biomeDog/biome_cat_banner25.png" alt="구취강아지 이미지" />
						</div>
					</div>
					<div class="detail_content gray_background">
						<h2>구강건강과 마이크로바이옴</h2>
						<p>
							고양이의 구취는 입이나 내장의 박테리아 불균형으로 인해 발생할 수 있습니다. 구강 건강과 장 건강은 밀접하게 연결되어 있습니다. 사실 양방향 거리입니다.<br/>
							<br/>
							염증이 있는 잇몸, 충치, 구취 및 기타 구강 문제는 고양이의 구강 건강 이상에 영향을 미칠 수 있습니다. 고양이의 입에 해로운 박테리아가 너무 많으면 삼킨 침이 그 박테리아를 장으로 운반하여 장내 마이크로바이옴의 균형을 방해하고 증식할 수 있습니다.<br/><br/>
							장의 문제는 고양이의 입에도 문제를 일으킬 수 있습니다. 예를 들어 고양이의 장에 해로운 박테리아가 너무 많으면 박테리아가 생성하는 악취가 나는 가스가 혈류에 흡수되어 결국 구취로 내뿜어집니다. 불균형한 장내 미생물 군집과 구강 건강 문제는 둘 다 신체의 과도한 염증을 유발합니다. 몸이 염증 상태에 있으면 다른 부위도 염증에 더 취약해집니다. 이런 식으로 불균형한 장은 그강 건강에 영향을 미칠 수 있으며 입안의 염증이나 감염은 장 건강에 영향을 미칠 수 있습니다.
							<br/><br/>
							그렇다면 마이크로바이옴이란 무엇일까요?<br/>
							그것은 고양이의 몸에 살고 전반적인 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물의 공동체입니다. 장내 마이크로바이옴은 장에 위치하고 구강 마이크로바이옴은 고양이의 입에서 발견됩니다.
						</p>
						<h3>고양이의 입이나 장은 어떻게 불균형해집니까?</h3>
						<p>
							마이크로바이옴은 좋은 박테리아가 없거나, 해로운 박테리아가 너무 많거나, 다양성이 충분하지 않을 때 불균형합니다. 질병, 나이, 식이요법 및 약물, 특히 항생제와 같은 요인이 고양이의 장에 이러한 종류의 불균형을 유발할 수 있습니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program cat">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title cat">
						<div class="line cat"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line cat"></div>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
					<div class="health_info cat">
						<div class="health_title">
							<img src="/assets/images/biomeDog/info_cat.png" alt="정보 아이콘"/>
							<h3>건강 정보</h3>
						</div>
						<p>
							건강하고 균형 잡힌 식단을 제공하는 것이 반려견의 장내 미생물 군집을 관리하는 가장 좋은 방법입니다. 장 건강 테스트를 받으셨다면 유익한 박테리아의 성장을 촉진하기 위해 반려견의 맞춤형 보고서에 있는 식단 권장 사항을 따르십시오.<br/>
							마이크로바이옴은 식이 요법과 약물을 포함한 여러 요인의 영향을 받는 끊임없이 변화하는 생태계이기 때문에 매년 또는 증상이 발생할 때마다 반려견의 장 건강을 다시 테스트하는 것이 좋습니다. 균형 잡힌 장내 마이크로바이옴은 반려견이 더 건강하고 행복한 삶을 살 수 있도록 도와줍니다.
						</p>
					</div>
				</div>
			</div>
			<div class="detail_wrap detail_cat" id="detail6">
				<div class="box_width">
					<div class="detail_title_banner inner_banner">
						<div class="title_text cat">
							<div class="icon_img">
								<img src="/assets/images/biomeDog/icon62.png" alt="알레르기아이콘" />
							</div>
							<h1>피부와 털 상태가 고양이의 장 건강과<br/>
								어떤 관련이 있습니까?</h1>
								<a href="">스킨 및 코트 제품 쇼핑하기</a>
						</div>
						<div class="inner_img">
							<img src="/assets/images/biomeDog/biome_cat_banner26.png" alt="구취강아지 이미지" />
						</div>
					</div>
					<div class="detail_content white_background">
						<h2>피부건강과 마이크로바이옴</h2>
						<p>
							고양이의 장내 마이크로바이옴이 균형을 잃으면 가려운 피부, 발적, 탈모와 같은 일반적인 피부 및 코트 증상 또는 아토피성 피부염과 같은 더 심각한 상태가 발생할 수 있습니다. 피부 문제와 열악한 털 상태는 고양이의 장내 미생물이 제대로 기능하지 않을때 발생할 수 있는 면역 체계 문제의 징후일 수 있습니다. 면역 체계 세포의 70~80%가 장에 있기 때문에 고양이의 피부와 털의 증상은 실제로 장내 미생물의 균형이 깨졌다는 신호일 수 있습니다.
							<br/><br/>
						</p>
						<h3>그렇다면 장내 마이크로바이옴은 무엇일까요?</h3>
						<p>
							고양이의 소화관에 살고 건강에 필수적인 박테리아, 곰팡이 및 기타 미생물 군집입니다.
						</p>
						<div class="infographic_img">
							<div class="dog_good">
								<h4>균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_good.svg" alt="강아지 이미지"/>
								</div>
							</div>
							<div class="dog_bad">
								<h4>불균형적인 마이크로바이옴</h4>
								<div class="dog_img">
									<img src="/assets/images/biomeDog/cat_bad.svg" alt="강아지 이미지"/>
								</div>
							</div>
						</div>
					</div>
					<div class="program cat">
						<h2>전문진단 및 치료프로그램</h2>
						<p>
							강아지의 미생물군집이 재조정되고 증상이 해결되면 양질의 식단을 공급하여 환자가 건강하고 행복하게 지낼 수 있도록 도울 수 있습니다. 또한 특히 만성 소화기 또는 피부 문제의 징후가 재발하는 경우 적어도 1년에 한 번 환자의 장 건강을 재검사할 것을 권장드립니다.
						</p>
					</div>
					<div class="line_title cat">
						<div class="line cat"></div>
						<h3>환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</h3>
						<div class="line cat"></div>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
								<img src="/assets/images/biomeDog/right_light_blue_icon_black.png" alt="오른쪽아이콘 이미지"/>
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
					<div class="health_info cat">
						<div class="health_title">
							<img src="/assets/images/biomeDog/info_cat.png" alt="정보 아이콘"/>
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