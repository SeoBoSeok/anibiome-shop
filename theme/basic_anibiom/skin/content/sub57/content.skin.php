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
				<p>전문치료 프로그램</p>
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
						<div class="dropbtn open-btn-ckver">전문치료 프로그램</div>
						<div class="dropdown-content">
							<a href="">menu01</a>
							<a href="">menu02</a>
							<a href="">menu03</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="product_3-step bg_line bg3">
			<div class="box_width" style="text-align: center;">
				<img src="/assets/images/cp_image.png" alt="" style="width: 50px; margin-bottom: 10px;">
				<h3 class="sc_tit al_center">
					전문진단 및 치료 프로그램
					<p class="sc_sub">
						환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템
					</p>
				</h3>
				<ul>
					<li data-aos="flip-left" data-aos-duration="2000">
						<span class="step">step 01</span>
						<div class="img">
							<img src="/assets/images/step1.png">
						</div>
						<p class="text">
							애니바비옴헬스케어 마이크로바이옴<br>건강검사(분변,구강)를<br>실시합니다.
						</p>
					</li>
					<li data-aos="flip-left" data-aos-delay="300" data-aos-duration="2000">
						<span class="step">step 02</span>
						<div class="img">
							<img src="/assets/images/step2.png">
						</div>
						<p class="text">
							장내 미생물 건강 테스트 결과를 기다리는<br>동안(일반적으로 15~30),<br>애니바이옴헬스케어 구호 제품으로<br>증상을 완화할 수 있습니다.
						</p>
					</li>
					<li data-aos="flip-left" data-aos-delay="600" data-aos-duration="2000">
						<span class="step">step 03</span>
						<div class="img">
							<img src="/assets/images/step3.png">
						</div>
						<p class="text">
							환자의 장&구강 마이크로바이옴 건강<br>테스트 보고서 결과를 사용하여<br>반려동물을 위한 맞춤형 계획을 세웁니다.
						</p>
					</li>
				</ul>
			</div>
		</section>
		<section class="biome_dog">
			<div class="background_color_banner">
				<div class="biome_dog_help box_width">
					<h1>개 : 마이크로바이옴 진단 및 치료관리</h1>
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
			<div class="background_color_banner" style="background-color: #60C6A8;">
				<div class="biome_dog_help box_width">
					<h1>고양이 : 마이크로바이옴 진단 및 치료관리</h1>
					<ul class="biome_dog_help_list">
						<li class="biome_dog_help_box">
							<a href="">
								<div>
									<h3>지금 고양이의 증상을<br/>
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
									<h3>고양이의 장에서<br/> 무슨 일이 일어나고 있는지<br/>
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
									<h3>고양이의 장 건강을<br/>
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
		</section>
		<section class="ourteam">
			<div class="team_list_area bg_line">
				<div class="visual main">
                    <div class="shg-box-overlay"></div>
                    <div class="shg-row box_width" data-col-grid-mode-on="true">
      <div class="shg-c-lg-4 shg-c-md-4 shg-c-sm-4 shg-c-xs-12">
<div class="shg-box-vertical-align-wrapper" style="box-sizing: border-box; min-height: 175px;">
    <div class="shg-box shg-c    " id="s-8badf030-fdaa-41f6-b9dd-e24d5198b940">
      <div class="shg-box-overlay"></div>
<div class="shg-box-content">
        <div id="s-6d134293-f799-4512-8c7d-56954724cee8" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">More than<br></span></p></div>

</div>
<div id="s-e5e8ee84-a0ba-4327-bc37-5b16bb6f0a76" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 52px;"><strong><span style="color: rgb(255, 255, 255);" data-fontweight="Normal">45,000<br></span></strong></span></p></div>

</div>
<div id="s-09fae622-b57c-4c87-8374-84b1107d883c" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">microbiome samples tested<br></span></p></div>

</div>

      </div>
    </div>
  </div>
</div>
      <div class="shg-c-lg-4 shg-c-md-4 shg-c-sm-4 shg-c-xs-12">
<div class="shg-box-vertical-align-wrapper" style="box-sizing: border-box; min-height: 175px;">
    <div class="shg-box shg-c    " id="s-4081c20b-f54e-4bf4-9d80-c219dc6c1cb4">
      <div class="shg-box-overlay"></div>
<div class="shg-box-content">
        <div id="s-07cb0071-5add-4102-906e-0afbc4e1a21f" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">More than<br></span></p></div>

</div>
<div id="s-f2f85545-9645-4629-94ae-54bae08aa49c" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 52px;"><strong><span style="color: rgb(255, 255, 255);" data-fontweight="Normal">80%<br></span></strong></span></p></div>

</div>
<div id="s-189ca322-1e1e-4d2b-acd0-a547a17fb9a6" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">report clinical improvement <br></span></p></div>

</div>

      </div>
    </div>
  </div>
</div>
      
        <div class="shg-c-lg-4 shg-c-md-4 shg-c-sm-4 shg-c-xs-12">
<div class="shg-box-vertical-align-wrapper" style="box-sizing: border-box; min-height: 175px;">
    <div class="shg-box shg-c    " id="s-ec6e83bf-9cbd-4c31-af20-678b37b992a3">
      <div class="shg-box-overlay"></div>
<div class="shg-box-content">
        <div id="s-7b9b4f7d-3c58-408c-a524-e285e75b2dbc" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">Recommended by<br></span></p></div>

</div>
<div id="s-4c15b6ca-2eab-4793-809a-8830f33ec5d9" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 52px;"><strong><span style="color: rgb(255, 255, 255);" data-fontweight="Normal">1,000+<br></span></strong></span></p></div>

</div>
<div id="s-d7491c25-e322-4b5d-9c9c-c437c878cb0f" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">veterinarians worldwide<br></span></p></div>

</div>

      </div>
    </div>
  </div>
</div>
      
    
      
    </div>

    <div class="shg-c shg-btn-wrapper  shg-align-center">
  <a class="shg-btn shg-cse" href="/bbs/content.php?co_id=sub51" style="opacity: 1;">
      VIEW MORE
  </a>
</div>

				</div>


                
			</div>
		</section>
	</div>
</div>
<!--E 마크업 끝-->