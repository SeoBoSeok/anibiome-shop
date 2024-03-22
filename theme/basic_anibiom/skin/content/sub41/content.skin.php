<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<div class="wrap">
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
<section class="main">
<div class="main_sec6">
        <div class="section_padding box_width">
            <div class="test_wrap">
                <h2 class="sub_tit">
                    걱정되는 증상이 있나요?<br>
                    간단한 문진을 통해 건강상태를 알아보세요.
                </h2>
                <button class="line_btn" id="process_modal_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="/theme/basic_anibiom/images/main/icon/page-2.svg">
                    처방 프로세스 보기
                </button>
            </div>
            <ul class="dog_cat_test">
                <li class="dog_test"> 
                    <div class="animal_wrap">
                        <div>
                            <h3>Dog</h3>
                            <p>2분이면 개의 장내 건강 상태를 알 수 있어요.</p>
                        </div>
                        <img src="/theme/basic_anibiom/images/main/circle_dog.png" alt="강아지 사진">
                    </div>
                    <button class="solid_btn" data-bs-toggle="modal" data-bs-target="#exampleModal3">개 테스트<img src="/theme/basic_anibiom/images/main/icon/chevron-right_b.svg"></button>
                </li>
                <li class="cat_test"> 
                    <div class="animal_wrap">
                        <div>
                            <h3>Cat</h3>
                            <p>2분이면 고양이의 장내 건강 생타를 알 수 있어요.</p>
                        </div>
                        <img src="/theme/basic_anibiom/images/main/circle_cat.png" alt="고양이 사진">
                    </div>
                    <button class="solid_btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">고양이 테스트<img src="/theme/basic_anibiom/images/main/icon/chevron-right_b.svg"></button>
                </li>
            </ul>
        </div>
    </div>	
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
    <div class="modal-content">
        <div class="modal-header">
            <img class="logo_img" src="/theme/basic_anibiom/images/logo.svg" alt="로고 이미지"/>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body background_modal">
            <ul class="process_wrap">
                <li>
                    <div class="step_box">
                        <h4>step 01</h4>
                    </div>
                    <h2>회복을 원하는 증상에 맞춰<br/>
                        마이크로바이옴 제품을 먹여보세요.</h2>
                    <div class="process_img">
                        <img src="/theme/basic_anibiom/images/main/process.png" alt="프로세스이미지" width="100%"/>
                    </div>
                </li>
                <li>
                    <div class="step_box">
                        <h4>step 02</h4>
                    </div>
                    <h2>만성 질환이거나, 호전이 없다면<br/>
                        장&구강 마이크로바이옴 검사를 실시합니다.</h2>
                    <div class="test_img">
                        <img src="/theme/basic_anibiom/images/main/test_img.png" alt="테스트 이미지" width="100%"/>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
    <div class="modal-content">
        <div class="modal-header">
            <img class="logo_img" src="/theme/basic_anibiom/images/logo.svg" alt="로고 이미지"/>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onClick="window.location.reload()"></button>
        </div>
        <div class="modal-body">
            <form action="/page/test_result.php" method="POST">
            <h2 class="content_tit">강아지 장내 테스트</h2>
            <div class="content_wrap"  id="step1_dog">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 15%"></div>
                </div>
                <div class="center_wrap">
                    <h3 >보호자님의 강아지에<br/>
                        대해 알려주세요.</h3>
                    <ul class="content_input_wrap">
                        <li>
                            <h3>이름</h3>
                            <input class="form-control form-control-lg input_text" type="text" name="name" placeholder="이름을 입력하세요" aria-label="default input" id="name_dog">
                        </li>
                        <li>
                            <h3>성별</h3>
                            <div class="radio_wrap">
                                <div class="form-check">
                                    <input class="form-check-input input_text" type="radio" name="gender" value="m" id="flexRadioDefault1_dog">
                                    <label class="form-check-label" for="flexRadioDefault1_dog">
                                        숫컷
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input input_text" type="radio" name="gender" value="fe" id="flexRadioDefault2_dog" checked>
                                    <label class="form-check-label" for="flexRadioDefault2_dog">
                                        암컷
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h3>나이</h3>
                            <input class="form-control form-control-lg input_text" type="text" name="age" placeholder="나이를 입력하세요" aria-label="default input" id="age_dog">
                        </li>
                        <li>
                            <h3>몸무게 (kg)</h3>
                            <input class="form-control form-control-lg input_text" type="text" name="kg" placeholder="몸무게를 입력하세요." aria-label="default input" id="kg_dog">
                        </li>
                    </ul>
                </div>
                <div class="next_prev_btn">
                    <div></div>
                    <button type="button" class="btn btn-secondary dog_set_next_name" id="next_btn_dog" disabled="true">다음 <i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
            <div class="content_wrap"  id="step2_dog">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 30%"></div>
                </div>
                <div class="center_wrap">
                    <h3 ><strong class="dog_get_next_name"></strong>에게 어떤 증상이 보이나요?</h3>
                    <p>모두 선택해주세요.</p>
                    <ul class="checkBox_wrap">
                        <li>
                            <input class="form-check-input" type="checkbox" value="1" id="check1_dog" name="symptom[]">
                            <label for="check1_dog">구토를 해요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="2" id="check2_dog" name="symptom[]">
                            <label for="check2_dog">설사를 해요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="3" id="check3_dog" name="symptom[]">
                            <label for="check3_dog">구취가 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="4" id="check4_dog" name="symptom[]">
                            <label for="check4_dog">구내염이 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="5" id="check5_dog" name="symptom[]">
                            <label for="check5_dog">비듬이 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="6" id="check6_dog" name="symptom[]">
                            <label for="check6_dog">탈모가 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="7" id="check7_dog" name="symptom[]">
                            <label for="check7_dog">비만 또는 저체중이에요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="8" id="check8_dog" name="symptom[]">
                            <label for="check8_dog">눈 상태가 안좋아요</label>
                        </li>
                    </ul>
                </div>
                <div class="next_prev_btn">
                    <button type="button" class="btn btn-outline-secondary prev_Btn" id="prev_btn2_dog" ><i class="bi bi-chevron-left"></i>이전 </button>
                    <button type="button" class="btn btn-primary" id="next_btn2_dog">다음 <i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
            <div class="content_wrap"  id="step3_dog">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
                <div class="center_wrap">
                    <h3 ><strong class="dog_get_next_name"></strong>의 증상 정도를<br/>
                        숫자로 나타낸다면요?</h3>
                    <ul class="radio_box_wrap">
                        <li>
                            <h4>약간 있어요</h4>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="1" id="radio1_dog" name="symptom_level">
                            <label for="radio1_dog"><h5>1</h5></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="2" id="radio2_dog" name="symptom_level">
                            <label for="radio2_dog"><h5>2</h5></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="3" id="radio3_dog" name="symptom_level">
                            <label for="radio3_dog"><h5>3</h5></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="4" id="radio4_dog" name="symptom_level">
                            <label for="radio4_dog"><h5>4</h5></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="5" id="radio5_dog" name="symptom_level">
                            <label for="radio5_dog"><h5>5</h5></label>
                        </li>
                        <li>
                            <h4>심각해요</h4>
                        </li>
                    </ul>
                </div>
                <div class="next_prev_btn">
                    <button type="button" class="btn btn-outline-secondary prev_Btn" id="prev_btn3_dog" ><i class="bi bi-chevron-left"></i>이전 </button>
                    <button type="button" class="btn btn-primary" id="next_btn3_dog">다음 <i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
            <div class="content_wrap"  id="step4_dog">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 75%"></div>
                </div>
                <div class="center_wrap">
                    <h3><strong class="dog_get_next_name"></strong>의 변 상태는 어디에 가깝나요?</h3>
                    <p>최근 변의 상태를 선택해주세요.</p>
                    <ul class="radio_box_wrap">
                        <li>
                            <h4>딱딱함</h4>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="1" id="radio2-1_dog" name="poop_condition">
                            <label for="radio2-1_dog"><img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/modal/poop1.png"/></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="2" id="radio2-2_dog" name="poop_condition">
                            <label for="radio2-2_dog"><img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/modal/poop2.png"/></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="3" id="radio2-3_dog" name="poop_condition">
                            <label for="radio2-3_dog"><img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/modal/poop3.png"/></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="4" id="radio2-4_dog" name="poop_condition">
                            <label for="radio2-4_dog"><img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/modal/poop4.png"/></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="5" id="radio2-5_dog" name="poop_condition">
                            <label for="radio2-5_dog"><img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/modal/poop5.png"/></label>
                        </li>
                        <li>
                            <h4>무름</h4>
                        </li>
                    </ul>
                </div>
                <div class="next_prev_btn">
                    <button type="button" class="btn btn-outline-secondary prev_Btn" id="prev_btn4_dog" ><i class="bi bi-chevron-left"></i>이전 </button>
                    <button type="button" class="btn btn-primary" id="next_btn4_dog">다음 <i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
            <div class="content_wrap"  id="step5_dog">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <div class="center_wrap">
                    <h3 >마이크로바이옴 치료 보조제를<br/>
                        복용했던 경험이 있나요?</h3>
                    <ul class="radio_box_wrap" id="dp_wrap">
                        <li>
                            <input class="form-check-input" type="radio" value="y" id="radio3-1_dog" name="experience">
                            <label for="radio3-1_dog"><h4>네</h4></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="n" id="radio3-2_dog" name="experience">
                            <label for="radio3-2_dog"><h4>아니오</h4></label>
                        </li>
                    </ul>
                </div>
                <div class="next_prev_btn">
                    <button type="button" class="btn btn-outline-secondary prev_Btn " id="prev_btn5" ><i class="bi bi-chevron-left"></i>이전 </button>
                    <!-- <a href="/page/test_result.php" class="btn btn-primary result_btn .button" role="button" id="result_btn" >결과보기</a> -->
                    <button type="submit" class="btn btn-primary result_btn .button" role="button" id="result_btn" >결과보기</button>
                </div>
            </div>
            </form>
            
        </div>
    </div>
    </div>
</div>


<script>
$(document).ready(function() {
    $(".cat_set_next_name").click(function() {
        var catName = $("#name").val();
        $(".cat_get_next_name").text(catName);
    });

    $(".dog_set_next_name").click(function() {
        var dogName = $("#name_dog").val();
        $(".dog_get_next_name").text(dogName);
    });
});
</script>

<script>
    $(function(){

        const name_dog = document.querySelector('#name_dog');
        const age_dog = document.querySelector('#age_dog');
        const kg_dog = document.querySelector('#kg_dog');
        const next_btn_dog = document.querySelector('#next_btn_dog');
    
    
        name_dog.addEventListener('keyup', activeEvent2);
        age_dog.addEventListener('keyup', activeEvent2);
        kg_dog.addEventListener('keyup', activeEvent2);

        function activeEvent2() {
        switch(!(name_dog.value && age_dog.value && kg_dog.value)){
            case true : next_btn_dog.disabled = true; break;
            case false : next_btn_dog.disabled = false; break
        }
        if((name_dog.value && age_dog.value && kg_dog.value)){
            next_btn_dog.removeAttribute("class",".btn-secondary");
            next_btn_dog.setAttribute("class","btn btn-primary");
        }   
        }   

        const name = document.querySelector('#name');
        const age = document.querySelector('#age');
        const kg = document.querySelector('#kg');
        const next_btn = document.querySelector('#next_btn');
        
        
        name.addEventListener('keyup', activeEvent);
        age.addEventListener('keyup', activeEvent);
        kg.addEventListener('keyup', activeEvent);
        // next_btn.addEventListener('click', errorEvent);
        console.log(name);
        function activeEvent() {
        switch(!(name.value && age.value && kg.value)){
            case true : next_btn.disabled = true; break;
            case false : next_btn.disabled = false; break
        }
        if((name.value && age.value && kg.value)){
            next_btn.removeAttribute("class",".btn-secondary");
            next_btn.setAttribute("class","btn btn-primary");
        }
        }


})
</script>