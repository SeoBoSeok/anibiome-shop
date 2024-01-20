<?php
include_once('./_common.php');

include_once(G5_THEME_PATH.'/head.php');


if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: /");
    exit;
}

// var_dump($_POST);
// exit;

$name = $_POST["name"];

$gender = $_POST["gender"];
if ($_POST["gender"] == "m") {
    $gender = "남";
} else {
    $gender = "여";
}

$age = $_POST["age"];
$kg = $_POST["kg"];

// 어떤 증상 (1~8)
$symptom = $_POST["symptom"];
$symptom_description = ""; // 증상에 대한 설명을 저장할 변수
switch ($symptom) {
    case 1:
        $symptom_description = "구토를 해요";
        break;
    case 2:
        $symptom_description = "설사를 해요";
        break;
    case 3:
        $symptom_description = "구취가 있어요";
        break;
    case 4:
        $symptom_description = "구내염이 있어요";
        break;
    case 5:
        $symptom_description = "비듬이 있어요";
        break;
    case 6:
        $symptom_description = "탈모가 있어요";
        break;
    case 7:
        $symptom_description = "비만 또는 저체중이에요";
        break;
    case 8:
        $symptom_description = "눈 상태가 안좋아요";
        break;
    default:
        $symptom_description = "알 수 없는 증상입니다.";
        break;
}

// 증상 정도 (1~5)
$symptom_level = $_POST["symptom_level"];
// 변 상태 (1~5)
$poop_condition = $_POST["poop_condition"];
// 마이크로바이옴 치료 보조제를 복용했던 경험 (y or n)
$experience = $_POST["experience"];

?>

   
<div class="content_wrap sub">
    <section class="sub_visual">
        <div class="sub_top_bg2">
            <!-- <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/sub_top_bg.png"> -->
        </div>
        <div class="page_name text-typing-any">
            <p>결과보기</p>
        </div>
        <div class="page_navi box_width">
            <a href="/" class="home">홈</a>
            <div class="dropdown_set">
                <div class="dropdown">
                    <div class="dropbtn open-btn-ckver" >핵심역량 사업</div>
                    <div class="dropdown-content">
                        <a href="">수의통합의학 강의실</a>
                        <a href="">핵심역량/사업</a>
                        <a href="">협업/자문 시스템</a>
                        <a href="">마이크로바이옴</a>
                        <a href="">제품/쇼핑몰</a>
                    </div>
                </div>
                <div class="dropdown">
                    <div class="dropbtn open-btn-ckver">Target Market</div>
                    <div class="dropdown-content">
                        <a href="">menu01</a>
                        <a href="">menu02</a>
                        <a href="">menu03</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="test_result_wrap">
    <div class="section_padding box_width founder_box">
        <h2 class="main_tit">장내 테스트 결과 입니다.</h2>
        <div class="info_wrap">
            <ul>
                <li>
                    <h3><strong>이름:</strong> <?php echo $name; ?></h3>
                </li>
                <!-- <li class="span">ㅣ</li>
                <li>
                    <h3><strong>종:</strong> 러시안블루</h3>
                </li> -->
                <li class="span">ㅣ</li>
                <li>
                    <h3><strong>성별:</strong> <?php echo $gender; ?></h3>
                </li>
                <li class="span">ㅣ</li>
                <li>
                    <h3><strong>나이:</strong> <?php echo $age; ?></h3>
                </li>
                <li class="span">ㅣ</li>
                <li>
                    <h3><strong>몸무게:</strong> <?php echo $kg; ?></h3>
                </li>
            </ul>
            <h3><strong>검사결과: <?php echo date("Y-m-d"); ?></strong></h3>
        </div>
        <div class="result_wrap">
            <h4><?php echo $name; ?>의 장내 미생물 생태계는 건강하군요!</h4>
            <p>
                콩은 대변이 묽은 경우가 거의 없거나 전혀 없고 피부가 매우 건강하다고 말씀해주셨습니다.<br/>
                이는 콩의 장내 미생물 생태계가 건강하다는 좋은 신호이며, 저희는 이를 계속 유지할 수 있도록 도와드리고자 합니다.<br/>
                장내 미생물 군집은 박테리아, 바이러스 및 기타 미생물의 커뮤니티로, 콩의 소화관에 서식하며 건강에 필수적인 요소입니다.
            </p>
        </div>
        <div class="recommand_wrap">
            <h1><strong><?php echo $name; ?></strong>이의 애니바이옴 맞춤 플랜</h1>
            <p>대개 00%의 러시안 블루는 4세부터 신장 약화증이 시작됩니다. 3세 이후부터 아래 제품으로 건강 악화를 예방해보세요.</p>
            <ul class="recommand_list">
                <li>
                    <div class="product_img">
                        <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/test_result/product1.png" width="100%"/>
                    </div>
                    <div class="product_info">
                        <p>건강 진단 키트</p>
                        <h3>Microbiome Health Test</h3>
                        <div class="review_wrap">
                            <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/test_result/star.svg"/>
                            <span>5.0 (2130개의 후기)</span>
                        </div>
                        <div class="right_content">
                            <h4>로그인 후 가격 조회가능</h4>
                        </div>
                        <button class="product_btn" onClick="location.href='/bbs/login.php'">로그인/회원가입</button>
                        <h5>
                            고양이의 매년 건강 검진에 마이크로바이옴 검사를 포함 시키는<br/> 것을 추천합니다.
                        </h5>
                    </div>
                </li>
                <li>
                    <div class="product_img">
                        <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/test_result/product2.png" width="100%"/>
                    </div>
                    <div class="product_info">
                        <p>고양이 건강 보조제</p>
                        <h3>Gut & Skin Recovery</h3>
                        <div class="review_wrap">
                            <img src="/<?php echo G5_THEME_DIR.'/basic_anibiom/'; ?>images/test_result/star.svg" />
                            <span>5.0 (2130개의 후기)</span>
                        </div>
                        <div class="right_content">
                            <h4>150,000원</h4>
                        </div>
                        <button class="product_btn" onClick="location.href='/shop/item.php?it_id=1705576761'">자세히보기</button>
                        <h5>
                            음수량이 적은 고양이들에게 추천합니다.
                        </h5>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<?php include_once(G5_THEME_PATH.'/footer.php'); ?>
<?php
include_once(G5_THEME_PATH.'/tail.php');