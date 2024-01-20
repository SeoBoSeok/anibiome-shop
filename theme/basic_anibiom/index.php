<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<section class="main">
    <div class="main_banner">
        <div class="box_width">
            <h1 class="main_tit">
                반려동물이 우리와<br/>
                <div class="text_scroller_wrap">
                더 
                <div class="scroller">
                    <div class="inner">
                        <p>건강</p>
                        <p>오래</p>
                        <p>행복</p>
                    </div>
                </div>
                하게 살 수 있도록
                </div>
            </h1>
            <p class="sub_con">
                수의학 최고 전문가들이 모여 동물의 질병 치료의<br/>
                혁신적인 솔루션을 연구하고 개발했습니다.
            </p>
            <button class="round_btn">자세히보기<img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/icon/chevron-right.svg"></button>
        </div>
    </div>
    <div class="main_sec2">
        <div class="section_padding box_width">
            <div class="cen_tit">
                <img class="text_img" src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/text1.png"/>
                <h2 class="sub_tit">애니바이옴은 반려동물의<br/>
                    건강과 행복만을 생각합니다</h2>
            </div>
            <div class="people_info_box">
                <div class="people_img">
                    <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/people.png" alt="연구진" width="100%"/>
                </div>
                <ul class="people_info_list">
                    <li>
                        <div class="icon_img">
                            <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/icon/gps-1.svg" />
                        </div>
                        <div class="icon_text">
                            <h3>Our Mission</h3>
                            <p>
                                애니바이옴은 반려동물과 보호자의 삶의 질 향상과 행복을 목표로합니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon_img">
                            <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/icon/trophy.svg" />
                        </div>
                        <div class="icon_text">
                            <h3>Reliable Medical Staff</h3>
                            <p>
                                25여년 이상의 임상과 연구 경험이 있는 수의학 교수 4인을 중심으로 최고의 전문가들이 뜻을 모았습니다.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon_img">
                            <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/icon/flag-2.svg" />
                        </div>
                        <div class="icon_text">
                            <h3>Constant Research</h3>
                            <p>
                                반려동물의 노화와 질병을 집중적으로 연구하며, 근본적인 건강 솔루션을 창조합니다.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text_banner">
        <div class="box_width">
            <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/icon/vector.svg"/>
            <h4>반려동물 헬스케어 R&D 전문기업, 애니바이옴 헬스케어</h4>
        </div>
    </div>
    <div class="main_sec3">
        <div class="section_padding box_width">
            <div class="product_wrap">
                <div class="product_info">
                    <img class="text_img" src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/text2.png"/>
                    <h2 class="sub_tit">
                        장내 미생물의 균형을 회복하는<br/>
                        <strong>치료 보조제 14종</strong>을 만들었습니다
                    </h2>
                    <p class="con_text">
                        애니바이옴의 제품 라인은 건강기능식품이 아닙니다.<br/>
                        대한민국 수의학 최고의 전문가들이 만든 치료제입니다.
                    </p>
                    <ul class="badge_wrap">
                        <li>
                            <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/badge1.png"/>
                            <h5>
                                <strong>Anibiome Healthcare</strong><br/>
                                노화 및 만성 합병질환 연구
                            </h5>
                        </li>
                        <li>
                            <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/badge2.png"/>
                            <h5>
                                <strong>서울대수의통합연구센터</strong><br/>
                                질병진단 및 분석연구
                            </h5>
                        </li>
                    </ul>
                    <button class="round_btn">제품 보기<img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/icon/chevron-right.svg"></button>
                </div>
                <div class="product_img">
                    <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/product.png" alt="제품 사진" width="100%"/>
                </div>
            </div>
        </div>
    </div>
    <div class="main_sec4">
        <div class="section_padding box_width">
            <div class="research_wrap">
                <div class="research_img">
                    <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/dogcat.png" alt="강아지,고양이 사진" width="100%"/>
                    <div class="ball_img">
                        <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/ball.png" id="ball1"/>
                    </div>
                    <div class="ball_img">
                        <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/ball_op.png" id="ball2"/>
                    </div>
                </div>
                <div class="research_info">
                    <div>
                        <img class="text_img" src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/text2.png"/>
                        <h2 class="sub_tit">
                            반려동물의 근본적인 건강은<br/>    
                            <strong>장내</strong>부터 시작됩니다
                        </h2>
                        <p class="con_text">
                            반려동물의 질병을 집중적으로 연구한 결과,<br/>
                            장내 마이크로바이옴의 균형이<br/>
                            건강의 핵심이라는 것을 알게되었습니다.
                        </p>
                        <a href="" class="line_btn">
                            <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/icon/page-2.svg" />
                            애니바이옴 연구자료
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_sec5">
        <div class="section_padding box_width">
            <div class="symptom_wrap">
                <div class="symptom_info">
                    <h2 class="sub_tit">
                        장내 미생물이 <strong>불균형</strong>할 때, <br/>
                        다양한 증상이 나타날 수 있습니다.
                    </h2>
                    <div class="tag_wrap">
                        <li class="tag_box">
                            #구토+설사
                        </li>
                        <li class="tag_box">
                            #치매
                        </li>
                        <li class="tag_box">
                            #과체중
                        </li>
                        <li class="tag_box">
                            #저체중
                        </li>
                        <li class="tag_box">
                            #피부질병
                        </li>
                        <li class="tag_box">
                            #구취
                        </li>
                        <li class="tag_box">
                            #만성염증
                        </li>
                        <li class="tag_box">
                            #면역체계이상
                        </li>
                        <li class="tag_box">
                            #심장질환
                        </li>
                    </div>
                    <span>
                        고양이의 88%, 개의 92%가 지난 12개월 동안 적어도 한 가지 이상의 증상을 경험했습니다<br/>
                        *동물바이옴의 2022 장 건강 상태 보고서 조사 결과
                    </span>
                </div>
                <div class="fade-slide">
                    <div class="symptom_img">
                        <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/dog_info.png" width="100%"/>
                    </div>
                    <div class="symptom_img">
                        <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/cat_info.png" width="100%"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_sec6">
        <div class="section_padding box_width">
            <div class="test_wrap">
                <h2 class="sub_tit">
                    걱정되는 증상이 있나요?<br/>
                    간단한 문진을 통해 건강상태를 알아보세요.
                </h2>
                <button class="line_btn" id="process_modal_btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/icon/page-2.svg" />
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
                        <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/circle_dog.png" alt="강아지 사진" />
                    </div>
                    <button class="solid_btn" data-bs-toggle="modal" data-bs-target="#exampleModal3">개 테스트<img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/icon/chevron-right_b.svg" /></button>
                </li>
                <li class="cat_test" > 
                    <div class="animal_wrap">
                        <div>
                            <h3>Cat</h3>
                            <p>2분이면 고양이의 장내 건강 생타를 알 수 있어요.</p>
                        </div>
                        <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/circle_cat.png" alt="고양이 사진" />
                    </div>
                    <button class="solid_btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">고양이 테스트<img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/icon/chevron-right_b.svg" /></button>
                </li>
            </ul>
        </div>
    </div>
    <div class="main_sec7">
        <div class="section_padding box_width">
            <h2 class="sub_tit">
                애니바이옴 제품으로<br/>
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
            <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/icon/vector.svg"/>
            <h4>반려동물 헬스케어 R&D 전문기업, 애니바이옴 헬스케어</h4>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
    <div class="modal-content">
        <div class="modal-header">
            <img class="logo_img" src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/logo.svg" alt="로고 이미지"/>
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
                        <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/process.png" alt="프로세스이미지" width="100%"/>
                    </div>
                </li>
                <li>
                    <div class="step_box">
                        <h4>step 02</h4>
                    </div>
                    <h2>만성 질환이거나, 호전이 없다면<br/>
                        장&구강 마이크로바이옴 검사를 실시합니다.</h2>
                    <div class="test_img">
                        <img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/test_img.png" alt="테스트 이미지" width="100%"/>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
    <div class="modal-content">
        <div class="modal-header">
            <img class="logo_img" src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/logo.svg" alt="로고 이미지"/>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onClick="window.location.reload()"></button>
        </div>
        <div class="modal-body">
            <form action="/page/test_result.php" method="POST">
            <h2 class="content_tit">고양이 장내 테스트</h2>
            <div class="content_wrap"  id="step1">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 15%"></div>
                </div>
                <div class="center_wrap">
                    <h3 >보호자님의 고양이에<br/>
                        대해 알려주세요.</h3>
                    <ul class="content_input_wrap">
                        <li>
                            <h3>이름</h3>
                            <input class="form-control form-control-lg input_text" type="text" name="name" placeholder="이름을 입력하세요" aria-label="default input" id="name">
                        </li>
                        <li>
                            <h3>성별</h3>
                            <div class="radio_wrap">
                                <div class="form-check">
                                    <input class="form-check-input input_text" type="radio" name="gender" value="m" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        숫컷
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input input_text" type="radio" name="gender" value="fe" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        암컷
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h3>나이</h3>
                            <input class="form-control form-control-lg input_text" type="number" name="age" placeholder="나이를 입력하세요" aria-label="default input" id="age">
                        </li>
                        <li>
                            <h3>몸무게 (kg)</h3>
                            <input class="form-control form-control-lg input_text" type="number" name="kg" placeholder="몸무게를 입력하세요." aria-label="default input" id="kg">
                        </li>
                    </ul>
                </div>
                <div class="next_prev_btn">
                    <div></div>
                    <button type="button" class="btn btn-secondary cat_set_next_name" id="next_btn" disabled="true">다음 <i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
            <div class="content_wrap"  id="step2">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 30%"></div>
                </div>
                <div class="center_wrap">
                    <h3 ><strong class="cat_get_next_name"></strong>에게 어떤 증상이 보이나요?</h3>
                    <p>모두 선택해주세요.</p>
                    <ul class="checkBox_wrap">
                        <li>
                            <input class="form-check-input" type="checkbox" value="1" id="check1" name="symptom">
                            <label for="check1">구토를 해요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="2" id="check2" name="symptom">
                            <label for="check2">설사를 해요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="3" id="check3" name="symptom">
                            <label for="check3">구취가 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="4" id="check4" name="symptom">
                            <label for="check4">구내염이 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="5" id="check5" name="symptom">
                            <label for="check5">비듬이 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="6" id="check6" name="symptom">
                            <label for="check6">탈모가 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="7" id="check7" name="symptom">
                            <label for="check7">비만 또는 저체중이에요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="8" id="check8" name="symptom">
                            <label for="check8">눈 상태가 안좋아요</label>
                        </li>
                    </ul>
                </div>
                <div class="next_prev_btn">
                    <button type="button" class="btn btn-outline-secondary prev_Btn" id="prev_btn2" ><i class="bi bi-chevron-left"></i>이전 </button>
                    <button type="button" class="btn btn-primary" id="next_btn2">다음 <i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
            <div class="content_wrap"  id="step3">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
                <div class="center_wrap">
                    <h3 ><strong class="cat_get_next_name"></strong>의 증상 정도를<br/>
                        숫자로 나타낸다면요?</h3>
                    <ul class="radio_box_wrap">
                        <li>
                            <h4>약간 있어요</h4>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="1" id="radio1" name="symptom_level">
                            <label for="radio1"><h5>1</h5></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="2" id="radio2" name="symptom_level">
                            <label for="radio2"><h5>2</h5></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="3" id="radio3" name="symptom_level">
                            <label for="radio3"><h5>3</h5></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="4" id="radio4" name="symptom_level">
                            <label for="radio4"><h5>4</h5></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="5" id="radio5" name="symptom_level">
                            <label for="radio5"><h5>5</h5></label>
                        </li>
                        <li>
                            <h4>심각해요</h4>
                        </li>
                    </ul>
                </div>
                <div class="next_prev_btn">
                    <button type="button" class="btn btn-outline-secondary prev_Btn" id="prev_btn3" ><i class="bi bi-chevron-left"></i>이전 </button>
                    <button type="button" class="btn btn-primary" id="next_btn3">다음 <i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
            <div class="content_wrap"  id="step4">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 75%"></div>
                </div>
                <div class="center_wrap">
                    <h3 ><strong class="cat_get_next_name"></strong>의 변 상태는 어디에 가깝나요?</h3>
                    <p>최근 변의 상태를 선택해주세요.</p>
                    <ul class="radio_box_wrap">
                        <li>
                            <h4>딱딱함</h4>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="1" id="radio2-1" name="poop_condition">
                            <label for="radio2-1"><img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/modal/poop1.png"/></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="2" id="radio2-2" name="poop_condition">
                            <label for="radio2-2"><img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/modal/poop2.png"/></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="3" id="radio2-3" name="poop_condition">
                            <label for="radio2-3"><img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/modal/poop3.png"/></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="4" id="radio2-4" name="poop_condition">
                            <label for="radio2-4"><img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/modal/poop4.png"/></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="5" id="radio2-5" name="poop_condition">
                            <label for="radio2-5"><img src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/main/modal/poop5.png"/></label>
                        </li>
                        <li>
                            <h4>무름</h4>
                        </li>
                    </ul>
                </div>
                <div class="next_prev_btn">
                    <button type="button" class="btn btn-outline-secondary prev_Btn" id="prev_btn4" ><i class="bi bi-chevron-left"></i>이전 </button>
                    <button type="button" class="btn btn-primary" id="next_btn4">다음 <i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
            <div class="content_wrap"  id="step5">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <div class="center_wrap">
                    <h3 >마이크로바이옴 치료 보조제를<br/>
                        복용했던 경험이 있나요?</h3>
                    <ul class="radio_box_wrap" id="dp_wrap">
                        <li>
                            <input class="form-check-input" type="radio" value="y" id="radio3-1" name="experience">
                            <label for="radio3-1"><h4>네</h4></label>
                        </li>
                        <li>
                            <input class="form-check-input" type="radio" value="n" id="radio3-2" name="experience">
                            <label for="radio3-2"><h4>아니오</h4></label>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-fullscreen-sm-down">
    <div class="modal-content">
        <div class="modal-header">
            <img class="logo_img" src="<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/logo.svg" alt="로고 이미지"/>
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
                            <input class="form-control form-control-lg input_text" type="number" name="age" placeholder="나이를 입력하세요" aria-label="default input" id="age_dog">
                        </li>
                        <li>
                            <h3>몸무게 (kg)</h3>
                            <input class="form-control form-control-lg input_text" type="number" name="kg" placeholder="몸무게를 입력하세요." aria-label="default input" id="kg_dog">
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
                            <input class="form-check-input" type="checkbox" value="1" id="check1_dog" name="symptom">
                            <label for="check1_dog">구토를 해요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="2" id="check2_dog" name="symptom">
                            <label for="check2_dog">설사를 해요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="3" id="check3_dog" name="symptom">
                            <label for="check3_dog">구취가 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="4" id="check4_dog" name="symptom">
                            <label for="check4_dog">구내염이 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="5" id="check5_dog" name="symptom">
                            <label for="check5_dog">비듬이 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="6" id="check6_dog" name="symptom">
                            <label for="check6_dog">탈모가 있어요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="7" id="check7_dog" name="symptom">
                            <label for="check7_dog">비만 또는 저체중이에요</label>
                        </li>
                        <li>
                            <input class="form-check-input" type="checkbox" value="8" id="check8_dog" name="symptom">
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
        next_btn.addEventListener('click', errorEvent);
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

<?php include_once(G5_THEME_PATH.'/footer.php'); ?>
<?php
include_once(G5_THEME_PATH.'/tail.php');